<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/3/18
 * Time: 11:26 AM
 */

abstract class SuperPluriel
{
    protected $maliste = array();
    /**
     * SuperPluriel constructor.
     * @param array $maliste
     */
    public function __construct(array $maliste)
    {
        $this->maliste = $maliste;
    }
    /**
     * Retourne la liste d'objet qu'il est possible de parcourir avec un foreach
     * @return array
     */
    public function getMaliste()
    {
        return $this->maliste;
    }
    /**
     * @param array $maliste
     */
    public function setMaliste($maliste)
    {
        $this->maliste = $maliste;
    }
    /***
     * Supprime un objet de la liste
     * @param $theObject
     */
    public function supprimer($theObject){
        if (isset($theObject)){
            $index=array_search($theObject,$this->maliste);
            unset($this->maliste[$index]);
        }
    }
    public abstract function chercherAvecId($theId);

    /***
     * Ajoute un objet à la liste
     * @param $theObject
     */
    public function ajouter(&$theObject){
        $this->maliste[]=$theObject;
    }

}