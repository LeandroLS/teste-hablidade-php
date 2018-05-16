<?php

$username = "root";
$password = "123456";
$database = "php_test_skill";
$host = "127.0.0.1";
$driver = "mysql";

try {
    $connection = new PDO("{$driver}:dbname={$database};host={$host}", $username, $password);
} catch(Exception $e){
    echo $e;
}