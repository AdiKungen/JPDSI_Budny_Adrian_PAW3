<?php

namespace app\transfer;

class User{
	public $log;
	public $rola;
	
	public function __construct($log, $rola){
		$this->log = $log;
		$this->rola = $rola;		
	}	
}