<?php

session_start();
if (!isset($_POST['usuario'])) {
    header("Location: login.php");
    exit();
}
echo "Bem vindo, " . $_SESSION['usuarios'] . "!";
echo "<br>Usuário" . $_SESSION['usuario']. "<br>Senha:" . $_SESSION['senha'];

?>