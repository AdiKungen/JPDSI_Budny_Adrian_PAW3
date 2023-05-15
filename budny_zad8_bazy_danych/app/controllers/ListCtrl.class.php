<?php

namespace app\controllers;

class ListCtrl {

    private $records;

    public function action_showList() {

	$this->records = getDB()->select("historia", ["idHistoria","kwota","ileLat","oprocentowanie","rataMiesieczna","data",]);
		
        getSmarty()->assign('page_title','Zadanie 8');
        getSmarty()->assign('page_description','Historia Wyników');
        getSmarty()->assign('page_header','Bazy Danych');

        if(isset($_SESSION['user'])) {
            getSmarty()->assign('user',unserialize($_SESSION['user']));
        }
		getSmarty()->assign('wyniki',$this->records);
		getSmarty()->display('ListView.tpl');
    }
}