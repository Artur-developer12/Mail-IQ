<?php 
	$dsn = 'mysql:host=localhost; dbname=mail-iq';
	
	try {
		$pdo = new PDO($dsn, 'mysql', '',  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);  
	} catch (PDOException $e) {
		 print_r($e->getMessage());
 		 $pdo->debugDumpParams();
		die("Не могу подключиться к базе");
	}



	



 

 ?>