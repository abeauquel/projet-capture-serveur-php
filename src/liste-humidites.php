<?php
	include "dao/BaseDeDonnees.php";
	/*header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';*/
//TODO gerer les codes d' erreurs

	$SQL_LISTE_HUMIDITES = "SELECT * FROM humidite";
	
	$requeteListeHumidites = BaseDeDonnees::getInstance()->prepare($SQL_LISTE_HUMIDITES);
	$requeteListeHumidites->execute();
	$listeHumidites = $requeteListeHumidites->fetchAll();
	var_dump($listeHumidites);
?>
<!--
<humidites>
	<description>Liste des humidites</description>

<?php
/*	foreach($listeHumidites as $humidite)
	{
	*/?>
	<humidite>
		<id><?/*=$humidite->id*/?></id>
		<valeur><?/*=$humidite->valeur*/?></valeur>
		<date><?/*=$humidite->date*/?></date>
	</humidite>
	<?php
/*	}
*/?>

</humidites>-->
