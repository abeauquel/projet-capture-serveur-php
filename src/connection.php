<?php
    $usager = 'root';
    $motdepasse = 'racine';
    $hote = 'localhost';
    $base = 'station_meteo';
    $dsn = 'mysql:dbname='.$base.';host=' . $hote;
    $basededonnees = new PDO($dsn, $usager, $motdepasse);


    // connexion postgresql
    $base = "station_meteo";
    $hote = "localhost";
    $motdepasse = "root";
    $port = "5432";
    $connexion = "dbname=".$hote." port=".$port." dbname=".$base;
    // TODO a corriger
   // $basededonnees = pg_connect($connexion);

?>
