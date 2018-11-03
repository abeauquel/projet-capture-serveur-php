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

    /**
     * HumiditeEchantillon constructor.
     * @param $moyenne
     * @param $max
     * @param $min
     * @param $date
     */
    public function __construct($moyenne, $max, $min, $date)
    {
        $this->moyenne = $moyenne;
        $this->max = $max;
        $this->min = $min;
        $this->date = $date;
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

    /***
     * Affichage un echantillon au format xml
     */
    public function afficherXML(){
        echo"<moyenne>".$this->moyenne."</moyenne>";
        echo"<max>".$this->max."</max>";
        echo"<min>".$this->min."</min>";
        echo"<date>".$this->date."</date>";

    }
}