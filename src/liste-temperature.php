<?php
	include "connection.php";
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	$SQL_LISTE_TEMPERATURES = "SELECT * FROM temperatures";
	
	$requeteListeTemperatures = $basededonnees->prepare($SQL_LISTE_TEMPERATURES);
	$requeteListeTemperatures->execute();
	$listeTemperatures = $requeteListeTemperatures->fetchAll(PDO::FETCH_OBJ);

?>

<temperatures>
	<description>Liste des temperatures</description>

<?php
	foreach($listeTemperatures as $temperature)
	{
	?>
	<temperature>
		<id><?=$temperature->id?></id>
		<valeur><?=$temperature->valeur?></valeur>
		<date><?=$temperature->date?></date>
	</temperature>
	<?php
	}
?>

</temperatures>
