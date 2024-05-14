<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Transação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container; p-3 mb-2 bg-success text-white "></div>
    <h2 class="mx-auto p-2" style="width: 200px;">Registrar Transação</h2>
    <form action="registrar-extrato.php?id=$id" method="POST" class="mx-auto p-2 p-3 mb-2 bg-success-subtle text-success-emphasis " style="width: 200px; ">
        <label for="tipo" class="form-label">Tipo de Transação:</label>
        <select name="tipo" id="tipo">
            <option value="deposito">Depósito</option>
            <option value="retirada">Retirada</option>
        </select><br><br>
        <label for="valor">Valor:</label>
        <input type="number" name="valor" id="valor" required><br><br>
        <input type="submit" value="Registrar Transação">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
