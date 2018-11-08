<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/8/18
 * Time: 10:42 AM
 */

abstract class HumiditeSQL
{
 protected static $SQL_LISTE_HUMIDITES = "SELECT * FROM humidite order by date DESC ";
 protected static $SQL_LISTE_HUMIDITES_AVEC_DATE_DEBUT = "SELECT * FROM humidite  WHERE date > :dateDebut order by date DESC ";
 protected static $SQL_LISTE_HUMIDITES_AVEC_DATE_FIN = "SELECT * FROM humidite WHERE date < :dateFin order by date DESC ";
 protected static $SQL_LISTE_HUMIDITES_AVEC_DATE_DEBUT_ET_FIN = "SELECT * FROM humidite where date between :dateDebut and :dateFin order by date DESC ";
}