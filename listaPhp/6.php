<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="GET">>

<label for="numero"> Digite um numero para saber se é par ou impar</label>
<input type="number" name="numero">

<button type="submit" >verificar</button>
<label for="resultado" id="resultado"></label>

<?php



function ePar($n){
    if($n % 2 == 0){
        echo "este número é par";
    } else{
        echo "este número é impar";
    }

}

if(isset($_GET['numero'])){
    $numero = $_GET['numero'];
    ePar($numero);
}

?>

</form>
    
</body>
</html>