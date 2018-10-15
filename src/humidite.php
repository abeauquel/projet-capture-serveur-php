<?php
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	//print_r($_GET);

	$SQL_HUMIDITE = "SELECT * FROM humidite WHERE id = " . $_GET['humidite'];
	include "connection.php";
	$requeteHumidite = $basededonnees->prepare($SQL_HUMIDITE);
	$requeteHumidite->execute();
	$humidite = $requeteHumidite->fetch(PDO::FETCH_OBJ);
?>

<humidite>
	<id><?=$humidite->id?></id>
	<valeur><?=$humidite->valeur?></valeur>
	<date><?=$humidite->date?></date>
</humidite>
