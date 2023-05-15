<?php
$conf->debug = true;

$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/budny_zad8_bazy_danych';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_root = $conf->app_root.'/ctrl.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;

$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'kalkulator';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';

?>