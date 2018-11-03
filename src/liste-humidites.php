<?php
include "dao/HumiditeDAO.php";
header("Content-type: text/xml");
header("HTTP/1.1 200 OK");
echo '<?xml version="1.0" encoding="UTF-8"?>';

$formatEchantillonnage = EnumerationDate::MYSQL_FORMAT;
$url = "$_SERVER[REQUEST_URI]";
$separationUrl=explode('/', $url);
$dateDebut=null;
$dateFin=null;
try {
    /** Echantillonage */
    if(isset($separationUrl[3])){
        switch ($separationUrl[3]){
            case "minute":
                $formatEchantillonnage=EnumerationDate::ANNEE_MOIS_JOUR_HEURE_MINUTE;
                break;
            case "heure":
                $formatEchantillonnage=EnumerationDate::ANNEE_MOIS_JOUR_HEURE;
                break;
            case "jour":
                $formatEchantillonnage=EnumerationDate::ANNEE_MOIS_JOUR;
                break;
            case "mois":
                $formatEchantillonnage=EnumerationDate::ANNEE_MOIS;
                break;
            case "annee":
                $formatEchantillonnage=EnumerationDate::ANNEE;
                break;
        }
    }
    /** Date Debut */
    if(isset($separationUrl[4]) && is_numeric($separationUrl[4]) && (int)$separationUrl[4] == $separationUrl[4] ){
        $dateDebut = $separationUrl[4];
    }
    /** Date Fin */
    if(isset($separationUrl[5]) && is_numeric($separationUrl[5]) && (int)$separationUrl[5] == $separationUrl[5] ){
        $dateFin= $separationUrl[5];
    }

    /** @var Humidites $listeHumidites */
    $listeHumidites = HumiditeDAO::listerHumidite($dateDebut, $dateFin);

    if(count ($listeHumidites->getMaliste()) <1){
       header("HTTP/1.1 204 Liste vide");
    }

    $listeEchantillons = $listeHumidites->convertirEnEchantillons($formatEchantillonnage);

    $listeEchantillons->afficherXML();

} catch (Exception $e) {
   header("HTTP/1.0 500 ". $e->getMessage());
   echo  '<message>'. $e->getMessage() .'</message>';

}


