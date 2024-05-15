<?php include "cabecalho.php"?>

</head>
<body>
                                    <h1 class="text-center">Tabela de informações</h1>

<?php include "conexao.php";?>
<div class="container">
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>Identificação</th>
            <th>Nome</th>
            <!-- <th>Telefone</th> -->
            <!-- <th>E-mail</th> -->
            <!-- <th>Tipo</th> -->
            <!-- <th>Valor</th> -->
            <th>Opções</th> 
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from tb_clientes";
        $resultado = mysqli_query($conexao, $sql); while($umaAcao = mysqli_fetch_assoc($resultado)):
        ?>
          <tr>
          <td><?=$umaAcao['id'];?></td>
          <td><?=$umaAcao['nome'];?></td>
          <!-- <td><?=$umaAcao['telefone'];?></td> -->
          <!-- <td><?=$umaAcao['email'];?></td> -->
          <!-- <td><?=$umaAcao['tipo'];?></td> -->
          <!-- <td><?=$umaAcao['valor'];?></td> -->
          <td>
             <a class="btn btn-dark  me-md-2 " href="transacao.php?id=<?=$umaAcao['id'];?>">Fazer Transferencia</a>
              
             <a  class="btn btn-dark  me-md-2" href="extrato.php?id=<?=$umaAcao['id'];?>">Registrar extrato</a>

             <a class="btn btn-dark  me-md-2" href="informacoes-cliente.php?id=<?=$umaAcao['id'];?>">Ver Informações</a> 

             
          </td>                   
        </tr>
        <?php 
    endwhile;
    mysqli_close($conexao);?>
    </tbody>
</table>
</div>

<?php include "rodape.php"?>