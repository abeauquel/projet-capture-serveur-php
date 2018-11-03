<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/3/18
 * Time: 12:28 PM
 */

class HumiditeEchantillon
{
    private $moyenne;
    private $max;
    private $min;
    private $date;
    private $nombreHumiditeReference;

    /**
     * HumiditeEchantillon constructor.
     * @param $moyenne
     * @param $max
     * @param $min
     * @param $date
     * @param $nombreHumidite
     */
    public function __construct($moyenne, $max, $min, $date, $nombreHumidite)
    {
        $this->moyenne = $moyenne;
        $this->max = $max;
        $this->min = $min;
        $this->date = $date;
        $this->nombreHumiditeReference = $nombreHumidite;
    }


    /**
     * @return mixed
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * @param mixed $moyenne
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param mixed $min
     */
    public function setMin($min)
    {
        $this->min = $min;
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

    /**
     * @return mixed
     */
    public function getNombreHumiditeReference()
    {
        return $this->nombreHumiditeReference;
    }

    /**
     * @param mixed $nombreHumiditeReference
     */
    public function setNombreHumiditeReference($nombreHumiditeReference)
    {
        $this->nombreHumiditeReference = $nombreHumiditeReference;
    }



    /***
     * Affichage un echantillon au format xml
     */
    public function afficherXML(){
        echo"<humidite>";

            echo"<moyenne>".$this->moyenne."</moyenne>";
            echo"<max>".$this->max."</max>";
            echo"<min>".$this->min."</min>";
            echo"<nombreHumiditeReference>".$this->nombreHumiditeReference."</nombreHumiditeReference>";
            echo"<date>".$this->date."</date>";

        echo"</humidite>";
    }
}