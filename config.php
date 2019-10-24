<?php

$bancoDeDados = "mysql:dbname=cadastroelogin;host=127.0.0.1";
$userBanco = "root";
$senhaBanco = "";

try {
    $pdo = new PDO($bancoDeDados, $userBanco, $senhaBanco);
} catch (PDOException $e) {
    echo ("Deu erro" . $e->getMessage());
}
