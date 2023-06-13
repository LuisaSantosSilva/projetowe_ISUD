<?php

include("conexao.php");

$sql = "SELECT * FROM clientes;";


$stmt = $PDO->query('SELECT * FROM clientes');

$rows = $stmt->fetchAll();

foreach($rows as $row){
    printf("$row[nome]\n");
    printf("$row[endereco]\n");
    printf("$row[bairro]\n");
    printf("$row[cep]\n");
    printf("$row[estado]\n");
    printf("$row[cidade]\n");
}

?>