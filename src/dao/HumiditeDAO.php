<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/3/18
 * Time: 11:22 AM
 */

require 'BaseDeDonnees.php';
require 'HumiditeSQL.php';

require 'modele/Humidite.php';
require 'modele/pluriel/Humidites.php';
require 'modele/EnumerationDate.php';

abstract class HumiditeDAO extends HumiditeSQL
{

    public static function listerHumidite($dateDebut, $dateFin){
        try {
            $requeteListeHumidites = BaseDeDonnees::getInstance()->prepare(HumiditeSQL::$SQL_LISTE_HUMIDITES);
            if($dateDebut != null && $dateFin != null){
                $requeteListeHumidites = BaseDeDonnees::getInstance()->prepare(HumiditeSQL::$SQL_LISTE_HUMIDITES_AVEC_DATE_DEBUT_ET_FIN);
                $requeteListeHumidites->bindParam(':dateDebut', $dateDebut);
                $requeteListeHumidites->bindParam(':dateFin', $dateFin);
            }
            else if($dateDebut != null && $dateFin == null){
                $requeteListeHumidites = BaseDeDonnees::getInstance()->prepare(HumiditeSQL::$SQL_LISTE_HUMIDITES_AVEC_DATE_DEBUT);
                $requeteListeHumidites->bindParam(':dateDebut', $dateDebut);

            }
            else if($dateDebut == null && $dateFin != null){
                $requeteListeHumidites = BaseDeDonnees::getInstance()->prepare(HumiditeSQL::$SQL_LISTE_HUMIDITES_AVEC_DATE_FIN);
                $requeteListeHumidites->bindParam(':dateFin', $dateFin);
            }

            $requeteListeHumidites->execute();
            $curseur = $requeteListeHumidites->fetchAll();
            $listeHumidites = new Humidites([]);

            foreach ($curseur as $ligne) {
                $humidite = new Humidite($ligne['id'], $ligne['valeur'],
                    date (EnumerationDate::MYSQL_FORMAT, $ligne['date']));
                $listeHumidites->ajouter($humidite);
            }
            return $listeHumidites;
        } catch (Exception $e) {
            throw $e;
        }

    }

}