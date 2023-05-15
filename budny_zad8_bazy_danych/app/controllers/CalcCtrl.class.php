<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;
    private $result;

    public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

    public function getParams() {
        $this->form->kwo = getFromRequest('kwo');
		$this->form->lat = getFromRequest('lat');
		$this->form->opr = getFromRequest('opr');
    }

    public function validate() {

        if (!(isset($this->form->kwo) && isset($this->form->lat) && isset($this->form->opr))) {
	        return false;
        }

        getMessages()->addInfo('Przekazano parametry');

        if ($this->form->kwo == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        } else if (!is_numeric($this->form->kwo)) {
	        getMessages()->addError('Kwota nie jest wartością numeryczną');
	    } else if($this->form->kwo <= 0) {
            getMessages()->addError('Kwota nie może być wartością niedodatnią');
        }

	    if ($this->form->lat == "") {
            getMessages()->addError('Nie podano ilości lat');
        } else if (!is_numeric($this->form->lat)) {
	        getMessages()->addError('Ilość lat nie jest wartością numeryczną');
	    } else if($this->form->lat <= 0) {
            getMessages()->addError('Ilość lat nie może być wartością niedodatnią');
        }

        if ($this->form->opr == "") {
            getMessages()->addError('Nie podano oprocentowania');
        } else if (!is_numeric($this->form->opr)) {
	        getMessages()->addError('Oprocentowanie nie jest wartością numeryczną');
	    } else if($this->form->opr < 0) {
            getMessages()->addError('Oprocentowanie nie może być wartością ujemną');
        }

        return ! getMessages()->isError();
    }

    public function action_calcCompute() {

        $this->getparams();

        if($this->validate()) {

            $this->form->kwo = intval($this->form->kwo);
            $this->form->lat = intval($this->form->lat);
            $this->form->opr = intval($this->form->opr);
            getMessages()->addInfo('Parametry poprawne. Wykonuję obliczenia');

            if(inRole('user') && $this->form->kwo > 10000) {
                getMessages()->addError("Tylko administrator może brać kredyt większy niż 10000");
            } else {
                $this->result->result = max(round(($this->form->kwo + ($this->form->kwo * ($this->form->opr/100))) / ($this->form->lat * 12), 2), 0.01);
                getMessages()->addInfo('Obliczono ratę miesięczną');
                $this->toDB();
            }
        }
        $this->generateView();
    }

    public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

    public function toDB(){
        try {     
        getDB()->insert("historia",[
            "kwota" => $this->form->kwo,
            "ileLat" => $this->form->lat,
            "oprocentowanie" => $this->form->opr,
            "rataMiesieczna" => $this->result->result,
        ]);
            getMessages()->addInfo('Obliczenia zapisano do historii.');
        } catch (\PDOException $ex) {
            getMessages()->addError("DB Error: ".$ex->getMessage());

        }
}

    public function generateView() {
        
        getSmarty()->assign('page_title','Zadanie 8');
        getSmarty()->assign('page_description','Kalkulator Kredytowy');
        getSmarty()->assign('page_header','Bazy Danych');

        getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);

        getSmarty()->display('CalcView.tpl');
    }
}