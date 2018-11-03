<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/3/18
 * Time: 11:22 AM
 */

require 'BaseDeDonnees.php';
require 'modele/Humidite.php';
require 'modele/pluriel/Humidites.php';

require 'modele/EnumerationDate.php';
abstract class HumiditeDAO
{
    const SQL_LISTE_HUMIDITES = "SELECT * FROM humidite";

    public static function listerHumidite($dateDebut, $dateFin){
        $sql=self::SQL_LISTE_HUMIDITES;

        if($dateDebut != null && $dateFin != null){
            $sql .= " where date between ". $dateDebut ." and ".$dateFin;
        }
        else if($dateDebut != null && $dateFin == null){
            $sql .= " WHERE date > ".$dateDebut;

        }
        else if($dateDebut == null && $dateFin != null){
            $sql .= " WHERE date < ".$dateFin;
        }

        try {
            $requeteListeHumidites = BaseDeDonnees::getInstance()->prepare($sql);
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