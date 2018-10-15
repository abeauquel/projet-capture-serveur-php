<?php
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	include "connection.php";
	$SQL_LISTE_TEMPERATURES = "SELECT * FROM temperature";
	$requeteListeTemperatures = $basededonnees->prepare($SQL_LISTE_TEMPERATURES);
	$requeteListeTemperatures->execute();
	$listeTemperatures = $requeteListeTemperatures->fetchAll(PDO::FETCH_OBJ);
	//print_r($listeMoutons);

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
