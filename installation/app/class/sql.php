<?php

namespace Install;

class SQL{

    public $con;

    public function __construct($hostPa, $namePa, $passPa, $dbPa, $etape){

        try {
            if($etape->getEtape() == 1) {
                $this->con = new \PDO('mysql:host=' . $hostPa, $namePa, $passPa);
                $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $requete = "CREATE DATABASE IF NOT EXISTS `" . $dbPa . "` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
                $this->con->prepare($requete)->execute();

                $this->con = new \PDO('mysql:host=' . $hostPa . ';dbname=' . $dbPa, $namePa, $passPa);
                $query = file_get_contents(HUBPATH_INSTALLATION . "/sql/sql.sql");
                $stmt = $this->con->prepare($query);
                $stmt->execute();
                $etape->setEtape(2);
            }else if($etape->getEtape() == 3){
                $this->con = new \PDO('mysql:host=' .$hostPa. ';dbname=' .$dbPa, $namePa, $passPa);
            }
        } catch (\PDOException $e) {
            echo Message::errorMessage('Échec de la connexion : ' . $e->getMessage());
            $etape->setEtape(1);
            return false;
            exit;
        }
        return true;
    }

    public function query($statement){
        $req = $this->con->prepare($statement);
        $req->execute();
        return $req->rowCount();
    }

    public function select($statement){
        $req = $this->con->prepare($statement);
        return $req->rowCount();
    }
}