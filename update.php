
<?php
include("conexao.php");


$sql = "UPDATE clientes SET nome='Maria' WHERE id=1";

$stmt = $PDO->prepare($sql);


if ($stmt->execute()){
    echo"Dados atualizados com sucesso";
}else{
    echo"Erro ao atualizar os dados";
}

?>