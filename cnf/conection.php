<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "bbiscuit";

$connection = mysqli_connect($host,$user,$pass,$database);

if(!$connection){
    echo "Erro ao conectar ao banco " . $database;
    echo "<br>";
    echo "Erro do MySQL: " . mysql_error();
}