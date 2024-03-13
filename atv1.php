<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
    <h1>Código para verificar número</h1>
    
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero">
        <button type="submit">Verificar</button>
    </form>

    <?php

    if(isset($_POST['numero']) && !empty($_POST['numero'])) {
        $num = $_POST['numero']; 
    
        if($num % 2 == 0) {
            echo "O número informado é PAR";
        } else {
            echo "O número informado é ÍMPAR";
        }
    }
    ?>
</body>
</html>


    <form method="post">
        <label for="numero_redondo">Digite um número:</label>
        <input type="number" id="numero_redondo" name="numero_redondo" required>
        <button type="submit" name="verificar_redondo">Verificar Redondo</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['verificar_redondo'])) {
        $numero = $_POST["numero_redondo"];
 
        // Verifica se o número é redondo ou não
        echo "<p>O número $numero é ";
        if ($numero % 10 == 0) {
            echo "redondo.</p>";
        } else {
            echo "não redondo.</p>";
        }
    }
    ?>


<form method="post">
        <label for="numero_positivo">Digite um número:</label>
        <input type="number" id="numero_positivo" name="numero_positivo" required>
        <button type="submit" name="verificar_positivo">Verificar Positivo, Negativo ou Neutro</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['verificar_positivo'])) {
        $numero = $_POST["numero_positivo"];
 
        // Verifica se o número é positivo, negativo ou neutro (zero)
        echo "<p>O número $numero é ";
        if ($numero > 0) {
            echo "positivo.</p>";
        } elseif ($numero < 0) {
            echo "negativo.</p>";
        } else {
            echo "neutro (zero).</p>";
        }
    }
    ?>

