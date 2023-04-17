<?php
require_once dirname(__FILE__).'/../../config.php';

require_once $conf->root_path.'/app/security/LoginCtrl.class.php';

$lctrl = new LoginCtrl();
$lctrl->processLogin();