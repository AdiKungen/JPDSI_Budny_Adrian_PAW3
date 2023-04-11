<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwo, &$lat, &$opr) {
    $kwo = isset($_REQUEST['kwo']) ? $_REQUEST['kwo'] : null;
    $lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
    $opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
}

function validate(&$kwo, &$lat, &$opr, &$messages, &$infos) {

    if (!(isset($kwo) && isset($lat) && isset($opr))) {
	    return false;
    }

    $infos[] = 'Przekazano parametry';

    if ($kwo == "") {
        $messages [] = 'Nie podano kwoty kredytu';
    } else if (!is_numeric($kwo)) {
	    $messages [] = 'Kwota nie jest wartością numeryczną';
	} else if($kwo <= 0) {
        $messages [] = 'Kwota nie może być wartością niedodatnią';
    }

	if ($lat == "") {
        $messages [] = 'Nie podano ilości lat';
    } else if (!is_numeric($lat)) {
	    $messages [] = 'Ilość lat nie jest wartością numeryczną';
	} else if($lat <= 0) {
        $messages [] = 'Ilość lat nie może być wartością niedodatnią';
    }

    if ($opr == "") {
        $messages [] = 'Nie podano oprocentowania';
    } else if (!is_numeric($opr)) {
	    $messages [] = 'Oprocentowanie nie jest wartością numeryczną';
	} else if($opr < 0) {
        $messages [] = 'Oprocentowanie nie może być wartością ujemną';
    }

    if (count($messages) != 0) return false;
	else return true;
}

function process(&$kwo,&$lat,&$opr,&$messages,&$result,&$infos) {
	global $rola;

    $infos[] = 'Parametry poprawne. Wykonuję obliczenia';

    $kwo = intval($kwo);
    $lat = intval($lat);
    $opr = intval($opr);

    if($rola == "użytkownik") {
        if($kwo > 10000) {
            $messages [] = "Tylko administrator może brać kredyt większy niż 10000";
        } else {
            $result = max(round(($kwo + ($kwo * ($opr/100))) / ($lat * 12), 2), 0.01);
        }
    } else {
        $result = max(round(($kwo + ($kwo * ($opr/100))) / ($lat * 12), 2), 0.01);
    }
    
}

$kwo = null;
$lat = null;
$opr = null;
$result = null;
$messages = array();
$infos = array();

getParams($kwo, $lat, $opr);
if(validate($kwo, $lat, $opr, $messages, $infos)) {
    process($kwo,$lat,$opr,$messages,$result, $infos);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Zadanie 4');
$smarty->assign('page_description','Kalkulator Kredytowy');
$smarty->assign('page_header','Szablonowanie Smarty');

$smarty->assign('kwo',$kwo);
$smarty->assign('lat',$lat);
$smarty->assign('opr',$opr);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);
$smarty->assign('rola',$rola);

$smarty->display(_ROOT_PATH.'/app/calc.html');