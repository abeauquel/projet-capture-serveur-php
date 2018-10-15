<?php
    $usager = 'root';
    $motdepasse = 'racine';
    $hote = 'localhost';
    $base = 'station_meteo';
    $dsn = 'mysql:dbname='.$base.';host=' . $hote;
    $basededonnees = new PDO($dsn, $usager, $motdepasse);
?>
