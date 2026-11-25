
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuários</title>
</head>
<body>

    <h1>Usuários cadastrados</h1>

    <?php

    require_once "conexao.php";

    $sql = "SELECT * FROM usuarios";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {

    ?>

        <table border="1">

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>

            <?php

            while ($usuario = mysqli_fetch_assoc($resultado)) {

            ?>

                <tr>
                    <td><?php echo $usuario["id"]; ?></td>
                    <td><?php echo htmlspecialchars($usuario["nome"]); ?></td>
                    <td><?php echo htmlspecialchars($usuario["email"]); ?></td>
                    <td><?php echo htmlspecialchars($usuario["telefone"]); ?></td>
                </tr>

            <?php
            }
            ?>

        </table>

    <?php

    } else {

        echo "Nenhum usuário cadastrado.";

    }

    ?>

    <br>

    <a href="cadastro.php">Cadastrar novo usuário</a>

</body>
</html>
