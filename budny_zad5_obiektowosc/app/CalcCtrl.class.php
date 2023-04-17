<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

include $conf->root_path.'/app/security/check.php';

class CalcCtrl {

    private $msgs;
    private $form;
    private $result;

    public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

    function getParams() {
        $this->form->kwo = isset($_REQUEST ['kwo']) ? $_REQUEST ['kwo'] : null;
		$this->form->lat = isset($_REQUEST ['lat']) ? $_REQUEST ['lat'] : null;
		$this->form->opr = isset($_REQUEST ['opr']) ? $_REQUEST ['opr'] : null;
    }

    function validate() {

        if (!(isset($this->form->kwo) && isset($this->form->lat) && isset($this->form->opr))) {
	        return false;
        }

        $this->msgs->addInfo('Przekazano parametry');

        if ($this->form->kwo == "") {
            $this->msgs->addError('Nie podano kwoty kredytu');
        } else if (!is_numeric($this->form->kwo)) {
	        $this->msgs->addError('Kwota nie jest wartością numeryczną');
	    } else if($this->form->kwo <= 0) {
            $this->msgs->addError('Kwota nie może być wartością niedodatnią');
        }

	    if ($this->form->lat == "") {
            $this->msgs->addError('Nie podano ilości lat');
        } else if (!is_numeric($this->form->lat)) {
	        $this->msgs->addError('Ilość lat nie jest wartością numeryczną');
	    } else if($this->form->lat <= 0) {
            $this->msgs->addError('Ilość lat nie może być wartością niedodatnią');
        }

        if ($this->form->opr == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        } else if (!is_numeric($this->form->opr)) {
	        $this->msgs->addError('Oprocentowanie nie jest wartością numeryczną');
	    } else if($this->form->opr < 0) {
            $this->msgs->addError('Oprocentowanie nie może być wartością ujemną');
        }

        return ! $this->msgs->isError();
    }

    function process() {
	    global $rola;

        $this->getparams();

        if($this->validate()) {

            $this->form->kwo = intval($this->form->kwo);
            $this->form->lat = intval($this->form->lat);
            $this->form->opr = intval($this->form->opr);
            $this->msgs->addInfo('Parametry poprawne. Wykonuję obliczenia');

            if($rola == "użytkownik") {
                if($this->form->kwo > 10000) {
                    $this->msgs->addError("Tylko administrator może brać kredyt większy niż 10000");
                } else {
                    $this->result->result = max(round(($this->form->kwo + ($this->form->kwo * ($this->form->opr/100))) / ($this->form->lat * 12), 2), 0.01);
                    $this->msgs->addInfo('Obliczono ratę miesięczną');
                }
            } else {
                $this->result->result = max(round(($this->form->kwo + ($this->form->kwo * ($this->form->opr/100))) / ($this->form->lat * 12), 2), 0.01);
                $this->msgs->addInfo('Obliczono ratę miesięczną');
            }
        }
        $this->generateView();
    }

    public function generateView() {
        global $conf;
        global $rola;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Zadanie 5');
        $smarty->assign('page_description','Kalkulator Kredytowy');
        $smarty->assign('page_header','Obiektowość');

		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
        $smarty->assign('rola',$rola);

        $smarty->display($conf->root_path.'/app/CalcView.html');
    }
}