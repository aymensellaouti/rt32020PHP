<?php
require 'Repository.php';
class Personne extends Repository
{
    /**
     * Personne constructor.
     * @param $id
     * @param $name
     * @param $firstname
     * @param $path
     * @param $age
     * @param $cin
     */
    public function __construct($id=0, $name="", $firstname="", $path="", $age=0, $cin=0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->path = $path;
        $this->age = $age;
        $this->cin = $cin;
        $this->setTableName();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path): void
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin): void
    {
        $this->cin = $cin;
    }
    private $id;
    private $name;
    private $firstname;
    private $path;
    private $age;
    private $cin;

    function setTableName()
    {
        $this->tableName = 'personne';
    }
}