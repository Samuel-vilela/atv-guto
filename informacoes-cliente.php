<?php include "cabecalho.php"?>
<?php include "conexao.php";?>
<div class="container">
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>Identificação</th>
            <th>Nome</th>
             <th>Telefone</th>
             <th>E-mail</th> 
            <th>Tipo</th>
            <th>Valor</th>
        
        </tr>
    </thead>
    <tbody>
        <?php
        $id = $_GET['id'];
        $sql = "select * from tb_clientes where id= $id";
        $resultado = mysqli_query($conexao, $sql); while($umaAcao = mysqli_fetch_assoc($resultado)):
        ?>
          <tr>
          <td><?=$umaAcao['id'];?></td>
          <td><?=$umaAcao['nome'];?></td>
          <td><?=$umaAcao['telefone'];?></td>
          <td><?=$umaAcao['email'];?></td>
           <td><?=$umaAcao['tipo'];?></td>
          <td><?=$umaAcao['valor'];?></td>                  
        </tr>
        <?php 
    endwhile;
    mysqli_close($conexao);?>
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>