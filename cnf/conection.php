<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "sistema_teste";

$connection = mysqli_connect($host,$user,$pass,$database);

if(!$connection){
    echo "Erro ao conectar ao banco " . $database;
    echo "<br>";
    echo "Erro do MySQL: " . mysql_error();
}