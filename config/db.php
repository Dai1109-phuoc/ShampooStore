<?php
class connect
{
    private $db;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=shampoostore;charset=utf8';
        $user = 'root';
        $pass = '';

        $this->db = new PDO(
            $dsn,
            $user,
            $pass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }

    public function getlist($query)
    {
        return $this->db->query($query)->fetchAll();
    }

    public function exec($query)
    {
        return $this->db->exec($query);
    }

    public function getInstance($query)
    {
        return $this->db->query($query)->fetch();
    }
}