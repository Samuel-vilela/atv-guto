<?php
include "conexao.php";

$nome = ['nome'];
$nome = "Registro de Extrato";
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];

$sql = "insert into tb_clientes (tipo, valor, nome)  values('$tipo', $valor, '$nome')";
if (mysqli_query($conexao, $sql)) {
    echo "Transação registrada com sucesso.";
    
    $sinal = ($tipo === 'deposito') ? '+' : '-';
    $sql_atualizar_saldo = "update tb_clientes set valor = valor $sinal $valor where nome = '$nome'";
    mysqli_query($conexao, $sql_atualizar_saldo);
} else {
    echo "Erro ao registrar transação: " . mysqli_error($conexao);
}
header('location:visualizar.php');
mysqli_close($conexao);
?> 
