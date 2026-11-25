
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de números</title>
</head>
<body>

<?php

$min = $_GET["min"] ?? 1;
$max = $_GET["max"] ?? 100;

if (isset($_GET["min"]) && isset($_GET["max"])) {
    echo rand($min, $max);
}

?>

<form method="GET">

    <label for="min">Mínimo</label>
    <input id="min" name="min" type="number" value="<?php echo $min; ?>">

    <label for="max">Máximo</label>
    <input id="max" name="max" type="number" value="<?php echo $max; ?>">

    <input type="submit" value="Sortear">

</form>

</body>
</html>
