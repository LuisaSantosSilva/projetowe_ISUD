<?php

try{
    $HOST = "localhost";
    $BANCO = "projetoweb";
    $USUARIO = "root";
    $SENHA = "";

    $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);
}catch(PDOExpetion $erro){
    echo "Erro de conexão: " . $erro->getMessage();
}

?>