<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <form action="calculo.php" method="POST" class="form-group col-6 mx-auto">
        <div class="form-group">
            <label for="">Digite seu peso</label>
            <input type="number" class="form-control" name="peso">
        </div>
        <div class="form-group">
            <label for="">Digite sua altura</label>
            <input type="text" class="form-control" name="altura">
            <button class="btn btn-secondary btn-block">Calcular</button>
        </div>
    </form>
<?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso/pow($altura,2);
    echo "<h1 class='text-center>Resultado</h1>";
    if ($imc < 18.5) {
        echo "<input type='text' class= 'form-control col-6 mx-auto' value=" .$imc. ">";
    }
?>
</body>
</html>



