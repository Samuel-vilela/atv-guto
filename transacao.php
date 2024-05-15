<?php include "cabecalho.php"?>
</head>
<body>
<div class="container">
    <h2>Transferência entre Contas Bancárias</h2>
    <form action="processar-transferencia.php" method="POST">
        <div class="form-group">
            <label for="conta_origem">Conta de Origem:</label>
            <select class="form-control" id="conta_origem" name="conta_origem" required>
                <?php
                include "conexao.php";

                $sql = "select * from tb_clientes";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                    }
                }
                mysqli_close($conexao);
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="conta_destino">Conta de Destino:</label>
            <select type="" class="form-control" id="conta_destino" name="conta_destino" required>
                <?php
               include "conexao.php";

                $sql = "select * from tb_clientes WHERE id != '" . $_POST['conta_origem'] . "'";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                    }
                }
                mysqli_close($conexao);
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" class="form-control" id="valor" name="valor" required>
        </div>
        <button type="submit" class="btn btn-primary">Transferir</button>
    </form>
</div>

<?php include "rodape.php"?>