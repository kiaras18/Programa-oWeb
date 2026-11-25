<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method= "GET"> 
    <label for="numeros"> </label>
   <input id="numeros" type="text" name="num">
    <input type = "submit" value= "somar">

</form>

    <?php

    if(isset($_GET ["num"])){
        $num = explode (" ", $_GET["num"]);
    $soma=0;
       for($i=0; $i<count($num); $i++){
        $soma=$soma +floatval($num[$i]);

       } 
       echo $soma;
    }
       else{

       echo "erro";
       }

    

    ?>


</body>
</html>