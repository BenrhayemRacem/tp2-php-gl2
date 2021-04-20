<?php


class DBfunctions
{
    protected $bd ;
    protected $tableName ;

    /**
     * DBfunctions constructor.
     * @param $tableName
     */
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->bd = ConnexionBD::getInstance();
    }

}