<?php
session_start();


if (!isset($_SESSION['name'])){
	header('Location: pages/login.php?logout=true');
}

setcookie('auto_login',$_SESSION['user_id'],time()+120, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page d'accueil</title>
	<link rel="stylesheet" href="../public/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="body-center">
	<h1>Page d'accueil</h1>
	<h2>bonjour tu viens de te connectez félicitation <?php echo $_SESSION['name']; ?>!!</h2></br>
	<a href="../login/login.php?logout=true">déconnexion</a>
</div>
	
</body>
</html>
