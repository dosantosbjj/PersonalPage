<?php
session_start();
$autoload = function($class){
	if($class == 'Email'){
	require_once('classes/phpmailer/PHPMailerAutoload.php');
	}
	include('classes/'.$class.'.php');
};
	spl_autoload_register($autoload);

DEFINE('INCLUDE_PATH','http://localhost/Projeto_01/');
DEFINE('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
DEFINE('host','localhost');
DEFINE('database','projeto_01');
DEFINE('user','root');
DEFINE('passwd','');
DEFINE('empresa','Dev0project');

date_default_timezone_set('America/Sao_Paulo');

function getCargo($cargo){
	$arr = [
		'0'=>'Usuário',
		'1'=>'Supervisor',
		'2'=>'Administrador'];
	return $arr[$cargo];
}
?>