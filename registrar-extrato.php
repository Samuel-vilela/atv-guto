<?php
include "conexao.php";

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];

$sql = "insert into tb_clientes (tipo, valor, nome) VALUES ('$tipo', $valor, '$nome')";
if (mysqli_query($conexao, $sql)) {
    echo "Transação registrada com sucesso.";
    
    $sinal = ($tipo === 'deposito') ? '+' : '-';
    $sql_atualizar_saldo = "update bd_banco set saldo = saldo $sinal $valor where nome = '$nome'";
    mysqli_query($conexao, $sql_atualizar_saldo);
} else {
    echo "Erro ao registrar transação: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
