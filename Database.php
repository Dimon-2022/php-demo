<?php

class Database
{

    public $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=dima;char=utf8mb4';
        $this->connection = new PDO($dsn, 'root', '12345678');
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
