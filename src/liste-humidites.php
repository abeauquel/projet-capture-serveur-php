<?php
include "dao/HumiditeDAO.php";
header("Content-type: text/xml");
header("HTTP/1.1 200 OK");
echo '<?xml version="1.0" encoding="UTF-8"?>';

try {
    /** @var Humidites $listeHumidites */
    $listeHumidites = HumiditeDAO::listerHumidite();

    if(count ($listeHumidites->getMaliste()) <1){
        header("HTTP/1.1 204 Liste vide");
    }

    ?>

    <humidites>
        <description>Liste des humidites</description>

        <?php
        /** @var Humidite $humidite */
        foreach($listeHumidites->getMaliste() as $humidite)
        {
            ?>
            <humidite>
                <id><?=$humidite->getId()?></id>
                <valeur><?=$humidite->getValeur()?></valeur>
                <date><?=$humidite->getDate()?></date>
            </humidite>
            <?php
        }
        ?>

    </humidites>
    <?php
} catch (Exception $e) {
    header("HTTP/1.0 500 ". $e->getMessage());

       echo  '<message>'. $e->getMessage() .'</message>';

}


