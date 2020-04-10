<?php

require 'Repository.php';
class Formateur extends Repository
{

    /**
     * Formateur constructor.
     */
    public function __construct()
    {
        $this->setTableName();
    }

    function setTableName()
    {
        $this->tableName = 'formateur';
    }
}