<?php


namespace app\core;


use PDO;


class DbQuery
{
    private $db;

    public function __construct(PDO $connection)
    {
        $this->db = $connection;
    }

    public function selectData($table)
    {
        return $this->db
            ->query("SELECT * FROM $table")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertData($table, $name, $desc){
        return $this->db->query("INSERT INTO $table VALUES($name,$desc)");
    }
}


