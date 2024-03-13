<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
    <h1>Código para verificar - Par ou Impar</h1>
    
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
