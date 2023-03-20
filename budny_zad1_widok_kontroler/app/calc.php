<?php
require_once dirname(__FILE__).'/../config.php';

$kwo = $_REQUEST['kwo'];
$lat = $_REQUEST['lat'];
$opr = $_REQUEST['opr'];

if (!(isset($kwo) && isset($lat) && isset($opr))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego lub więcej parametrów.';
}

if (empty($messages)) {
	
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
}

if (empty($messages)) {
	
	$kwo = intval($kwo);
	$lat = intval($lat);
    $opr = intval($opr);
	
    $result = max(round(($kwo + ($kwo * ($opr/100))) / ($lat * 12), 2), 0.01);
    
}

include 'calc_view.php';