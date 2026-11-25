
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

   
    
    <form method="GET">
        <label for="numero">informe um número para gerar sua tabuada:</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular">
    </form>

    <?php

    function tabuada($n) {
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$i x $n = " . ($i * $n) . "</li>";
        }
    }

    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];

        echo "<h2>Tabuada do $numero</h2>";
        echo "<ul>";
        tabuada($numero);
        echo "</ul>";
    }

    ?>

</body>
</html>
