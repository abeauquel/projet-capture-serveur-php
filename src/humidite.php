<?php
	include "connection.php";
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	$SQL_HUMIDITE = "SELECT * FROM humidites WHERE id = " . $_GET['humidite'];

	$requeteHumidite = $basededonnees->prepare($SQL_HUMIDITE);
	$requeteHumidite->execute();
	$humidite = $requeteHumidite->fetch(PDO::FETCH_OBJ);
?>

<humidite>
	<id><?=$humidite->id?></id>
	<valeur><?=$humidite->valeur?></valeur>
	<date><?=$humidite->date?></date>
</humidite>
