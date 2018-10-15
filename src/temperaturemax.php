<<?php
  include "connection.php";
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	$SQL_TEMPERATURE_MAX = "SELECT MAX(valeur) FROM temperatures WHERE date > ". $_GET['datedebut'].
													" AND date < ". $_GET['datefin'];

	$requeteTemperatureMax = $basededonnees->prepare($SQL_TEMPERATURE_MAX);
	$requeteTemperatureMax->execute();
	$temperature = $requeteTemperatureMax->fetch(PDO::FETCH_OBJ);
?>

<temperature>
	<id><?=$temperature->id?></id>
	<valeur><?=$temperature->valeur?></valeur>
	<date><?=$temperature->date?></date>
</temperature>
