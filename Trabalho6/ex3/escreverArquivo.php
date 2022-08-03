<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Escrever Arquivo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <style>
        body {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <?php

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);



    $string = $email . "\n" . $senhaHash;

    $arquivo = "arquivo.txt";

    salvaString($string, $arquivo);



    function salvaString($string, $arquivo)
    {
        try {
            $arq = fopen($arquivo, "w");
            fwrite($arq, $string);
            fclose($arq);
            echo <<<HTML
            <h1> Arquivo escrito com sucesso salvos com sucesso! </h1>
        HTML;
        } catch (PDOException $e) {
            echo <<<HTML
            <h1> $e->getMessage() </h1>
        HTML;
        }
    }
    ?>
</body>

</html>