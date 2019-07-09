<?php

class Blog_model {
    //database handler
    private $dbh;
    //private statement
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=anugrahc_blogtea';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllPost()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM blogpost');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}