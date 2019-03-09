<?php 
class Banco{

		private static $pdo;
		//singleton 
		public static function connect(){
		if(self::$pdo == null){
		try{	
				self::$pdo = new PDO('mysql:host='.host.';dbname='.database, user, passwd,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo('Erro ao conectar');
				}		
			}
			return self::$pdo;	
		}
	}
 ?>