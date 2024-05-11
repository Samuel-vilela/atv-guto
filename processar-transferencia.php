<?php
$conta_origem_id = $_POST['conta_origem'];
$conta_destino_id = $_POST['conta_destino'];
$valor = $_POST['valor'];

include "conexao.php";
mysqli_begin_transaction($conexao);

$sql_debitar = "update tb_clientes SET valor = valor - $valor WHERE id = $conta_origem_id";
$sql_creditar = "update tb_clientes SET valor = valor + $valor WHERE id = $conta_destino_id";

if (mysqli_query($conexao, $sql_debitar) && mysqli_query($conexao, $sql_creditar)) {
    mysqli_commit($conexao);
    echo "Transferência realizada com sucesso!";
} else {
    mysqli_rollback($conexao);
    echo "Erro ao realizar a transferência.";
}
mysqli_close($conexao);
?>