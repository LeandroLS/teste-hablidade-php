<?php

//$username = "root";
//$password = "123456";
//$database = "teste_habilidade_php";
//$host = "127.0.0.1";
//$driver = "mysql";

$username = "root";
$password = "leandro";
$database = "php_test_skill";
$host = "127.0.0.1";
$driver = "mysql";

try {
    $connection = new PDO("{$driver}:dbname={$database};host={$host}", $username, $password);
} catch(Exception $e){
    echo 'Não foi possível conectar ao banco de dados, 
    verifique as informações de conexão no arquivo ' . getcwd() . '/connection.php';
    die();
}