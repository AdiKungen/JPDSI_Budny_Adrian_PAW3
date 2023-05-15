<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function getParams() {
	    $this->form->log = getFromRequest('log');
	    $this->form->has = getFromRequest('has');
    }

    public function validate() {

	    if (!(isset($this->form->log) && isset($this->form->has))) {
			return false;
	    }

		getMessages()->addInfo('Przekazano parametry');

		if (! getMessages()->isError ()) {
			if ($this->form->log == "") {
				getMessages()->addError('Nie podano loginu');
			}
			if ($this->form->has == "") {
				getMessages()->addError('Nie podano hasła');
			}
		}

	    if (! getMessages()->isError ()) {
			if ($this->form->log == "admin" && $this->form->has == "admin") {
				$user = new User($this->form->log, 'admin');
				$_SESSION['user'] = serialize($user);
				addRole($user->rola);	
			} else if ($this->form->log == "user" && $this->form->has == "user") {
				$user = new User($this->form->log, 'user');
				$_SESSION['user'] = serialize($user);
				addRole($user->rola);
			} else {
				getMessages()->addError('Niepoprawny login lub hasło');
			}
		}
	    return ! getMessages()->isError();
    }

    public function action_login() {

		$this->getParams();
		
		if ($this->validate()){
			header("Location: ".getConf()->app_url."/");
		} else {
			$this->generateView(); 
		}
	}

	public function action_logout() {
		
		session_destroy();
		
		getMessages()->addInfo('Poprawnie wylogowano z systemu');

		$this->generateView();		 
	}

    public function generateView() {

	    getSmarty()->assign('page_title','Zadanie 8');
	    getSmarty()->assign('page_description','Strona Logowania');
	    getSmarty()->assign('page_header','Bazy Danych');

	    getSmarty()->assign('form',$this->form);
		
		getSmarty()->display('LoginView.tpl');
    } 
}