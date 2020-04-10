<?php
require 'ConnexionBD.php';

abstract class Repository
{
    protected $tableName;
    protected $bdd;
    abstract function setTableName();
    public function findAll() {
        $this->bdd = ConnexionBD::getInstance();
        $query = "select * from ".$this->tableName;
        $response = $this->bdd->prepare($query);
        $response->execute(array());

        return $response->fetchAll(PDO::FETCH_OBJ);
    }
    public function delete($id) {
        $this->bdd = ConnexionBD::getInstance();
        $query = "delete from ".$this->tableName. " where id = :id";
        $response = $this->bdd->prepare($query);
        $response->execute(array(
            'id'=>$id
        ));
    }
}