<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 11/1/18
 * Time: 10:21 AM
 */
require 'ParemetreBaseDeDonnees.php';

class BaseDeDonnees extends PDO{
    private static $instance;

    public static function getInstance(){
        if ( !self::$instance ){
            self::$instance = new BaseDeDonnees();
        }
        return self::$instance;
    }

    function __construct(){
        try {
            parent::__construct(ParemetreBaseDeDonnees::$dsn, ParemetreBaseDeDonnees::$utilisateur, ParemetreBaseDeDonnees::$passe);
        } catch (Exception $e) {
            echo $e->getMessage();
            die("\n Impossible de se connecter. " );
        }
    }

    public function queryFetchAll($sql){
        $sth  = $this -> query($sql);
        if ( $sth ){
            return $sth -> fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }
    public function queryFetchFirstRow($sql){
        $sth    = $this -> query($sql);
        $result    = array();
        if ( $sth ){
            $result  = $sth -> fetch();
        }
        return $result;
    }
}
?>