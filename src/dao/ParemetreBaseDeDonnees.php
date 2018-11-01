<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/1/18
 * Time: 10:22 AM
 */

abstract class ParemetreBaseDeDonnees
{

public static $utilisateur = "postgres";
public static $passe = "postgres";
    const HOTE = "localhost";
    const NOM = 'station_meteo';
    const PORT = 5432;
    public static $dsn = 'pgsql:dbname='. self::NOM.';host='.self::HOTE;
}