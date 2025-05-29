<?php

$host = 'mysql-raheriharimahefa.alwaysdata.net';
$db   = 'raheriharimahefa_lpdwca24_eq2';
$user = '378441_lpdwca24';
$pass = 'KY2Bqk7HjBvdJh_';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}





?>