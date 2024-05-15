<?php include "cabecalho.php"?>
<h1>CRIAR CONTA BANCARIA</h1>
<div class="container p-3 mb-2 bg-success-subtle text-success-emphasis">
    <h2>Criar Nova Conta Bancária</h2>
    <form action="salvar.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor Inicial:</label>
            <input type="number" class="form-control" id="valor" name="valor" required>
        </div>
        <input type="radio" name="tipo" value="conta-poupança"class="form-check-input" id="tipo"> Conta poupança
        <input type="radio" name="tipo" value="conta-corrente"class="form-check-input" id="tipo">  Conta corrente
        <br>
        <button type="submit" class="btn btn-dark">Criar Conta</button>
    </form>
</div>
<?php include "rodape.php"?>