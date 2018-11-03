<?php
	include "dao/HumiditeDAO.php";
	/*header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';*/
//TODO gerer les codes d' erreurs
    /** @var Humidites $listeHumidites */
    $listeHumidites = HumiditeDAO::listerHumidite();
	var_dump($listeHumidites->getMaliste());
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
