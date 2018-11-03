<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/3/18
 * Time: 12:37 PM
 */

class HumiditeEchantillons extends SuperPluriel
{
    public function chercherAvecId($theId)
    {
        // TODO: Implement chercherAvecId() method.
    }

    /***
     * Affichage tout le contenu de la liste au format XML
     */
    public function afficherXML(){
        echo"<humidites>";
        /** @var HumiditeEchantillon $echantillon */
        foreach ($this as $echantillon){
            $echantillon->afficherXML();
        }
        echo "</humidites>";
    }
}