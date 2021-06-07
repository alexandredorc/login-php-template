<?php

	$db_username = 'root';
    $db_password = 'Alexandre999';
    $db_name     = 'login_page_test';
    $db_host     = 'localhost';
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=login_page_test;charset=utf8', 'root', 'root');
	}
	catch(Exception $e){
		die('Erreur :'. $e->getMessage());
	}
?>
