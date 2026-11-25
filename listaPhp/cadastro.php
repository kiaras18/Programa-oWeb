
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de usuários</title>
</head>
<body>

    <h1>Cadastro de usuários</h1>

    <?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        $sql = "INSERT INTO usuarios (nome, email, telefone)
                VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conexao, $sql);

        mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $telefone);

        if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
} else {
    echo "<script>alert('Erro ao cadastrar usuário.');</script>";
}

        mysqli_stmt_close($stmt);
    }
    ?>

    <form method="POST">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required>

        <br><br>

        <input type="submit" value="Cadastrar">

    </form>

    <br><br>

<a href="listar.php">
    <button type="button">Ver usuários cadastrados</button>
</a>

</body>
</html>
