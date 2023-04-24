<?php
require_once 'init.php';

switch ($action) {
	default :
		if(empty(getRola())) {
			$lctrl = new app\controllers\LoginCtrl();
			$lctrl->generateLoginView();
		} else {
			$ctrl = new app\controllers\CalcCtrl();
			$ctrl->generateView();
		}
	break;
	case 'calcCompute' :
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process();
	break;
	case 'loginCompute' :
		$lctrl = new app\controllers\LoginCtrl();
		$lctrl->processLogin();
	break;
	case 'logout' :
		session_start();
		session_destroy();

		header("Location: ".$conf->app_url);
	break;
}