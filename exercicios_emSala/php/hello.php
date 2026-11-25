<h1> <?php echo "Olá Mundo"; 
?>   

</h1>

<?php 
$valor=50;
echo "<p>" .$valor. "</p>"; 
echo "<p> $valor </p>";
echo '<p>" $valor "</p>';

$nome= "Kiara";
echo $nome;

$array=" "; //Declarando variavel
$array=array(); //como array
$array=["pera", "maça","banana"];
echo "<br>";
print_r($array);

echo "<ul>";
for($i=0; $i<=($array); $i++){
    echo "<li> $array[$i] </li>";

}
echo "</ul>";

?> 