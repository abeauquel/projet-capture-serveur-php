<!--<<?php
/*  include "connection.php";
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';
//TODO gerer les codes d' erreurs

	$SQL_HUMIDITE_MAX = "SELECT MAX(valeur) FROM humidites WHERE date > ". $_GET['datedebut'].
													" AND date < ". $_GET['datefin'];

	$requeteHumiditeMax = $basededonnees->prepare($SQL_HUMIDITE_MAX);
	$requeteHumiditeMax->execute();
	$humidite = $requeteHumiditeMax->fetch(PDO::FETCH_OBJ);
*/?>

<humidite>
	<id><?/*=$humidite->id*/?></id>
	<valeur><?/*=$humidite->valeur*/?></valeur>
	<date><?/*=$humidite->date*/?></date>
</humidite>
-->