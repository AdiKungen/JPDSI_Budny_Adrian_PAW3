<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/security/LoginForm.class.php';

class LoginCtrl {

    private $msgs;
    private $form;

    public function __construct() {
        $this->msgs = new Messages();
        $this->form = new LoginForm();
    }

    function getParamsLogin() {
	    $this->form->log = isset($_REQUEST['log']) ? $_REQUEST['log'] : null;
	    $this->form->has = isset($_REQUEST['has']) ? $_REQUEST['has'] : null;
    }

    function validateLogin() {

	    if (!(isset($this->form->log) && isset($this->form->has))) {
		    return false;
	    }

	    if ($this->form->log == "") {
		    $this->msgs->addError('Nie podano loginu');
	    }
	    if ($this->form->has == "") {
		    $this->msgs->addError('Nie podano hasła');
	    }

	    if ($this->msgs->isError()) return false;

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
	
	    $this->msgs->addError('Niepoprawny login lub hasło');
	    return false; 
    }

    function processLogin() {
        global $conf;

        $this->getParamsLogin();
        if (!$this->validateLogin()) {
            $this->generateLoginView();
        } else { 
            header("Location: ".$conf->app_url);
        }
    }

    function generateLoginView() {
        global $conf;

	    $smarty1 = new Smarty();
		$smarty1->assign('conf',$conf);

	    $smarty1->assign('page_title','Zadanie 5');
	    $smarty1->assign('page_description','Strona Logowania');
	    $smarty1->assign('page_header','Obiektowość');

	    $smarty1->assign('msgs',$this->msgs);
	    $smarty1->assign('form',$this->form);
		
	    $smarty1->display($conf->root_path.'/app/security/LoginView.html');
    } 
}