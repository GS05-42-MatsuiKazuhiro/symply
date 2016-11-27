<?php
 
function db_connect(){
//	$dsn = 'mysql:host=◯◯◯;dbname=◯◯◯;charset=utf8';
    $dsn = 'mysql:dbname=symply_db;charset=utf8;host=localhost';
	$user = 'testuser';
	$password = 'testuser';
	
	try{
		$dbh = new PDO($dsn, $user, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
 
?>