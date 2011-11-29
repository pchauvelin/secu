
<html>
<title>XSS nperm by Philippe Chauvelin</title>
<body>
	<center><h1>Cette page contient une faille XSS</h1><br/>
	Supposons que le champ suivant soit un moteur de recherche
	<p><h2>Methode non permanente</h2>
	
	
	<form method="get" action="">
		<input type="text" name="search" size="200" value="<?php if(isset($_GET['search']))
			echo stripslashes($_GET['search']) ?>" /> <!-- Ma faille XSS !-->
		<br/><input type="submit" value="rechercher" />
	</form></p>	
	

	</p>
</body>

</html>