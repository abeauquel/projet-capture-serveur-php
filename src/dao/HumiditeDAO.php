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

abstract class HumiditeDAO
{
    const SQL_LISTE_HUMIDITES = "SELECT * FROM humidite";

    public static function listerHumidite(){

        try {
            $requeteListeHumidites = BaseDeDonnees::getInstance()->prepare(self::SQL_LISTE_HUMIDITES);
            $requeteListeHumidites->execute();
            $curseur = $requeteListeHumidites->fetchAll();
            $listeHumidites = new Humidites([]);

            foreach ($curseur as $ligne) {
                $humidite = new Humidite($ligne['id'], $ligne['valeur'], $ligne['date']);
                $listeHumidites->ajouter($humidite);
            }
            return $listeHumidites;
        } catch (Exception $e) {
            throw $e;
        }
    }

}