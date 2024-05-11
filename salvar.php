<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];

include "conexao.php";
$sql = "insert into tb_clientes (nome, telefone, email, valor, tipo) values('$nome', '$telefone', '$email',  '$valor', '$tipo')"; 
mysqli_query($conexao, $sql); 

header('location:visualizar.php');
mysqli_close($conexao);

?>