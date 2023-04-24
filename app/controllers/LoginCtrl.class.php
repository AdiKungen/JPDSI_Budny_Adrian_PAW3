<?php

namespace app\controllers;

use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function getParamsLogin() {
	    $this->form->log = getFromRequest('log');
	    $this->form->has = getFromRequest('has');
    }

    public function validateLogin() {

	    if (!(isset($this->form->log) && isset($this->form->has))) {
		    return false;
	    }

	    if ($this->form->log == "") {
		    getMessages()->addError('Nie podano loginu');
	    }
	    if ($this->form->has == "") {
		    getMessages()->addError('Nie podano hasła');
	    }

	    if (getMessages()->isError()) return false;

	    if ($this->form->log == "admin" && $this->form->has == "admin") {
		    session_start();
		    $_SESSION['rola'] = 'administrator';
		    return true;
	    }
	    if ($this->form->log == "user" && $this->form->has == "user") {
		    session_start();
		    $_SESSION['rola'] = 'użytkownik';
		    return true;
	    }
	
	    getMessages()->addError('Niepoprawny login lub hasło');
	    return false; 
    }

    public function processLogin() {
		global $conf;

        $this->getParamsLogin();
        if (!$this->validateLogin()) {
            $this->generateLoginView();
        } else { 
            header("Location: ".$conf->app_url);
        }
    }

    public function generateLoginView() {

	    getSmarty()->assign('page_title','Zadanie 6ab');
	    getSmarty()->assign('page_description','Strona Logowania');
	    getSmarty()->assign('page_header','Kontroler Główny');

	    getSmarty()->assign('form',$this->form);
		
		getSmarty()->display('LoginView.tpl');
    } 
}