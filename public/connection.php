<?php

$username = "root";
$password = "123456";
$database = "teste_habilidade_php";
$host = "localhost";
$driver = "mysql";

try {
    $connection = new PDO("{$driver}:host={$host}:3307;dbname={$database}", $username, $password);
} catch(Exception $e){
    echo "Não foi possível conectar ao banco de dados, verifique as informações de conexão no arquivo " . getcwd() . "/connection.php";
    echo "<pre>"; echo $e; echo "</pre>";
    die();
}