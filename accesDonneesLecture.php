<?php
	// en réalité : utiliser un try-catch ici
	$maCo = new PDO("mysql:host=localhost;dbname=cafe","root","");
	
	$texteRequete = "select id, nom, courriel from personnes";	
	$requete = $maCo->prepare($texteRequete);
	$requete->execute();
	
	// récupération du résultat dans un tableau associatif
	$tabRes = $requete->fetchAll(PDO::FETCH_ASSOC);
	
	// Si vous voulez mieux comprendre la structure de données retournée :
	//var_dump($tabRes);
	
	foreach($tabRes as $uneLigne)
	{
		echo $uneLigne['id']." : ".$uneLigne['nom']. " --> ".$uneLigne['courriel']. "<br>";
	}
	