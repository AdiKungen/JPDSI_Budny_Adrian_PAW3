<?php
require_once dirname(__FILE__).'/../../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParamsLogin(&$form){
	$form['log'] = isset($_REQUEST['log']) ? $_REQUEST['log'] : null;
	$form['has'] = isset($_REQUEST['has']) ? $_REQUEST['has'] : null;
}

function validateLogin(&$form,&$messages){

	if (!(isset($form['log']) && isset($form['has']))) {
		return false;
	}

	if ($form['log'] == "") {
		$messages [] = 'Nie podano loginu';
	}
	if ($form['has'] == "") {
		$messages [] = 'Nie podano hasła';
	}

	if (count($messages) > 0) return false;

	if ($form['log'] == "admin" && $form['has'] == "admin") {
		session_start();
		$_SESSION['rola'] = 'administrator';
		return true;
	}
	if ($form['log'] == "user" && $form['has'] == "user") {
		session_start();
		$_SESSION['rola'] = 'użytkownik';
		return true;
	}
	
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}

$form = array();
$messages = array();

getParamsLogin($form);

if (!validateLogin($form,$messages)) {
	$smarty1 = new Smarty();

	$smarty1->assign('app_url',_APP_URL);
	$smarty1->assign('root_path',_ROOT_PATH);
	$smarty1->assign('page_title','Zadanie 4');
	$smarty1->assign('page_description','Strona Logowania');
	$smarty1->assign('page_header','Szablonowanie Smarty');

	$smarty1->assign('messages',$messages);
	$smarty1->assign('form',$form);
	$smarty1->display(_ROOT_PATH.'/app/security/login.html');
} 
else { 
	header("Location: "._APP_URL);
}