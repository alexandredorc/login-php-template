<?php
session_start();
print_r($_COOKIE);
echo isset($_COOKIE['auto_login']);
if(!empty($_COOKIE['auto_login'])){
	$_SESSION['user_id']=$_COOKIE['auto_login'];
	include 'config.php';
	$req= $bdd->query('select name, email from user where user_id=\''.$_SESSION['user_id'].'\'');
	if($data= $req->fetch()){
		$_SESSION['name']=$data['name'];
		$_SESSION['email']=$data['email'];
		header('Location:  login/home.php');
	}
}else{
	session_destroy();
	header('Location: login/login.php');
}?>

