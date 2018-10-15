<?php
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	//print_r($_GET);

	$SQL_TEMPERATURE = "SELECT * FROM temperature WHERE id = " . $_GET['temperature'];
	include "connection.php";
	$requeteTemperature = $basededonnees->prepare($SQL_TEMPERATURE);
	$requeteTemperature->execute();
	$temperature = $requeteTemperature->fetch(PDO::FETCH_OBJ);
?>

<temperature>
	<id><?=$temperature->id?></id>
	<valeur><?=$temperature->valeur?></valeur>
	<date><?=$temperature->date?></date>
</temperature>
