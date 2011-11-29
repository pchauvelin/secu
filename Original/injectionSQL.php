<?php

$val = isset($_GET['val']) ? $_GET['val'] : '';

if($val == 1) {
	$host = '127.0.0.1';
	$user = 'root';
	$bdd = 'test';
	$passwd  = '';
	mysql_connect($host, $user,$passwd) or die('erreur de connexion au serveur');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$query = stripslashes('SELECT name,pass FROM user WHERE name=\''.$_POST['login'].'\' AND pass=\''.$_POST['pwd'].'\'');
	echo $query.'<br/>';
	$result = mysql_query($query)or die('Erreur query');
	
	if(mysql_num_rows($result) > 0) {
		echo 'Connexion OK';
	} else {
		echo 'Erreur de connexion';
	}
}

?>
<html>
<body>
	<form action="injectionSQL.php?val=1" method="POST">
		Login : <input type="text" name="login" /><br/>
		Mdp : <input type="text" name="pwd"/>
		<input type="submit" value="Valider"/>
	</form>
<body>
</html>