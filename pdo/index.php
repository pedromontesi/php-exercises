<?php

$host = "localhost";
$db = "my_database";
$user = "root";
$pass = "";
$charset = "utf8";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!<br>";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

?>