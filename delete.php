<?php

include("conexao.php");

$sql = "DELETE FROM clientes WHERE id=1";

$stmt = $PDO->prepare($sql);

if($stmt->execute()){
    echo "Dados excluidos com sucesso!";
}else{
    echo "Erro ao excluir os dados";
}

?>