<?php
	include "connection.php";
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	$SQL_LISTE_HUMIDITES = "SELECT * FROM humidites";
	
	$requeteListeHumidites = $basededonnees->prepare($SQL_LISTE_HUMIDITES);
	$requeteListeHumidites->execute();
	$listeHumidites = $requeteListeHumidites->fetchAll(PDO::FETCH_OBJ);
?>

<humidites>
	<description>Liste des humidites</description>

<?php
	foreach($listeHumidites as $humidite)
	{
	?>
	<humidite>
		<id><?=$humidite->id?></id>
		<valeur><?=$humidite->valeur?></valeur>
		<date><?=$humidite->date?></date>
	</humidite>
	<?php
	}
?>

</humidites>
