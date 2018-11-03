<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/3/18
 * Time: 11:24 AM
 */

class Humidite
{
    private $id;
    private $valeur;
    private $date;

    /**
     * Humidite constructor.
     * @param $id
     * @param $valeur
     * @param $date
     */
    public function __construct($id, $valeur, $date)
    {
        $this->id = $id;
        $this->valeur = $valeur;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }




}