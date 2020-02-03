<?php


namespace Plainphp;


class PDO
{
    public function connect()
    {
//        $pdo = new PDO('mysql:host=127.0.0.1;dbname=laravel6', 'root', '');
//
//        var_dump($pdo->query());
//        die();
//
//        $sql = "SELECT * FROM users";
//        foreach ($pdo->query($sql) as $row) {
//            echo $row['email']."<br />";
//            echo $row['name']."<br />";
//            echo $row['password']."<br /><br />";
//        }

        $host = '127.0.0.1';
        $db   = 'phptests';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//        $options = [
//            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//            PDO::ATTR_EMULATE_PREPARES   => false,
//        ];

        try {
            $pdo = new PDO($dsn, $user, $pass);
            print_r($dsn);
            print_r($pdo);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        $sql = "SELECT * FROM users";
        foreach ($pdo->query($sql) as $row) {
            echo $row['email']."<br />";
            echo $row['name']."<br />";
            echo $row['password']."<br /><br />";
        }
    }
}

$pdo1 = new PDO();
$pdo1->connect();