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

    $listeEchantillons = $listeHumidites->convertirEnEchantillons(EnumerationDate::ANNEE_MOIS_JOUR);

    $listeEchantillons->afficherXML();

} catch (Exception $e) {
   // header("HTTP/1.0 500 ". $e->getMessage());

       echo  '<message>'. $e->getMessage() .'</message>';

}


