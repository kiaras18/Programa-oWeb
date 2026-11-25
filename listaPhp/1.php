
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <h1>Quais são as tags usadas para definição de código PHP?</h1>

    <p>
        <strong>Tag padrão (&lt;?php e ?&gt;):</strong>
        É a forma oficial, recomendada e universalmente aceita
        para iniciar e encerrar códigos PHP.
    </p>

    <p>
        <strong>Tag curta de impressão (&lt;?=):</strong>
        Funciona como um atalho para &lt;?php echo.
        Ela é sempre suportada a partir do PHP 5.4.0
        e dispensa o uso de echo.
    </p>

    <p>
        <strong>Tags curtas tradicionais (&lt;? e ?&gt;):</strong>
        Permitem abrir o código apenas com &lt;?.
        Porém, dependem da diretiva short_open_tag estar ativada
        no arquivo php.ini e podem gerar conflito com documentos XML.
        Por isso, seu uso é desencorajado.
    </p>

</body>
</html>
