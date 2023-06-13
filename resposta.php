<?php
include("conexao.php");

$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$cep = $_GET['cep'];
$estado = $_GET['estado'];
$cidade = $_GET['cidade'];

$sql = "INSERT INTO clientes(nome, endereco, bairro, cep, estado, cidade) VALUES (:nome, :endereco, :bairro, :cep, :estado, :cidade);";



$stmt = $PDO->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':endereco', $endereco);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':cidade', $cidade);

if ($stmt->execute()){
    echo"Dados Gravados com sucesso!";
}else{
    echo"Erro ao gravar os dados";
}

?>