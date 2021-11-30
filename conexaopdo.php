<?php

$server = "localhost";
$user   ="rodrigo";
$pass   = "123456";
$bd     = "bdcurso";

try {
    $con =new PDO("mysql:host=$server;dbname=$bd",$user,$pass);


    $con-> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao Banco de dados";
} catch( PDOException $erro){
    echo "Deu ruim: ".$erro->getMessage();
}
