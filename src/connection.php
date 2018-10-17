<?php
    $usager = 'phpmyadmin';
    $motdepasse = 'root';
    $hote = 'localhost';
    $base = 'station_meteo';
    $dsn = 'mysql:dbname='.$base.';host=' . $hote;
    $basededonnees = new PDO($dsn, $usager, $motdepasse);
?>
