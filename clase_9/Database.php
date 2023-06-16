<?php

class Persona {
    public $nombre;
    public $dni;

    private $secreto;
}

class Database {

    public function __construct() {
        $dsn = "mysql:host=localhost;port=8889;dbname=mydb;charset=utf8mb4";
        $this->pdo = new PDO($dsn, 'root', 'root');
    }

    public function query($query) {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($query) {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}