<?php

class db_connect{
	 function __construct(){
		
	 }
	 function __destruct(){
	 }
	 public function connect(){
		 
		//require_once('config.php');
		 
		define("HOST", "localhost");
		define("USER", "root");
		define("PASSWORD", "password");
		define("DATABASE", "template");		 
		$connection=mysql_connect(HOST,USER,PASSWORD) or die(mysql_error());
		mysql_select_db(DATABASE) or die(mysql_error());	
		return $connection;
	 }
	 public function close(){
		 mysql_close();
	 }
	 
	 
}
?>