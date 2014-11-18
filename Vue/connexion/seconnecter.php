<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
	<head>
		<title> MARGO | Authentification </title>
		<link rel="stylesheet" href="../Webroot/css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/bootstrap-theme.css" />

	</head>

	<body>
		<div class="auth">
		<h2> MARGO | ESPACE ADMIN </h2>
		<hr>
		<form method="POST" action="../public/index.php?controleur=connexion&action=authentifier">
		<label> Login  </label><span class="push-log"></span><input type="text"></input><br />
		<p></p>	
		<label>Mot de passe  </label><span class="push-pswd"></span><input type="password"></input><br /><br />
		<input class="button" type="submit" value="Se connecter" />
		</form>
		</div>
	</body>
</html>