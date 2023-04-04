<?php
require_once dirname(__FILE__).'/../config.php';

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
$info = array();

getParams($kwo, $lat, $opr);
if(validate($kwo, $lat, $opr, $messages, $infos)) {
    process($kwo,$lat,$opr,$messages,$result, $infos);
}

$page_title = 'Zadanie 3';
$page_description = 'Kalkulator Kredytowy';
$page_header = 'Proste szablonowanie';

include 'calc_view.php';