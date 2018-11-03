<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/3/18
 * Time: 11:25 AM
 */

require 'SuperPluriel.php';
require 'HumiditeEchantillons.php';
require 'modele/HumiditeEchantillon.php';

class Humidites extends SuperPluriel
{
    public function chercherAvecId($theId)
    {
        // TODO: Implement chercherAvecId() method.
    }

    public function convertirEnEchantillons($formatDate){
        $humiditeEchantillons = new HumiditeEchantillons([]);

        $tableauIdHumiditeUtilise=[];
        /** @var Humidite $ligne */
        foreach ($this->maliste as $ligne){
            $tableauHumiditeAvecMemeFormatDate=[];
            $dateLigne= date($formatDate, strtotime($ligne->getDate()));
            if(!in_array($ligne->getId(),$tableauIdHumiditeUtilise )) {
                /** @var Humidite $sousLigne */
                foreach ($this->maliste as $sousLigne) {

                    $dateSousLigne= date($formatDate, strtotime($sousLigne->getDate()));
                    $estDansTableau = in_array($sousLigne->getId(), $tableauIdHumiditeUtilise);

                    if (!$estDansTableau && $dateLigne == $dateSousLigne) {
                        //La date n'a jamais était utilisé et a le meme format
                        $tableauHumiditeAvecMemeFormatDate[]=$sousLigne;
                        $tableauIdHumiditeUtilise[]=$sousLigne->getId();
                    }
                }

                $echantillon = $this->creerAvecListeHumidites($tableauHumiditeAvecMemeFormatDate, $dateLigne);
                $humiditeEchantillons->ajouter( $echantillon);
            }
        }

        return $humiditeEchantillons;
    }

    /**
     * Créer un nouvelle echantilon du tableau placé en parametre
     * @param $tableauHumidite
     * @param $pdate
     * @return HumiditeEchantillon|null
     */
     public function creerAvecListeHumidites($tableauHumidite, $pdate){
        $nbHumidites = count($tableauHumidite);
        if($nbHumidites <1){
            return null;
        }
        $pmoyenne=0;
        $pmax=$tableauHumidite[0]->getValeur();
        $pmin=$tableauHumidite[0]->getValeur();;

        /** @var Humidite $humidite */
        foreach ($tableauHumidite as $humidite){
            if($humidite->getValeur() > $pmax){
                $pmax = $humidite->getValeur();
            }else if($humidite->getValeur() < $pmin){
                $pmin = $humidite->getValeur();
            }
            $pmoyenne += $humidite->getValeur();
        }
        $pmoyenne = $pmoyenne / $nbHumidites;
        return new HumiditeEchantillon($pmoyenne, $pmax, $pmin, $pdate, $nbHumidites);
    }
}