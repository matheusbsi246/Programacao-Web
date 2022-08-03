<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Produtos Descrição </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <style>
        body {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <?php
    $arquivo = "/srv/disk23/3635992/www/matheusonofre.atwebpages.com/Trabalho6/ex3/arquivo.txt";

    $string = carregaString($arquivo);
    $email =  substr($string, 0, -62);
    $senha_hash =  substr($string, -60);
    
    echo <<<HTML
            <h1>Nome e senhas previnidos de ataques XSS:</h1>
            <br>
            <h4>E-mail</h4>
            <span>$email</span>
            <br>
            <h4>Senha-hash</h4>
            <span>$senha_hash </span>
        HTML;

    function carregaString($arquivo)
    {
        try {
            $arq = fopen($arquivo, "r");
            $string = fgets($arq) . "\n" . fgets($arq);
            $string = htmlspecialchars($string);
            fclose($arq);
            return $string;
        } catch (PDOException $e) {
            echo <<<HTML
            <h1> $e->getMessage() </h1>
        HTML;
        }
    }
    ?>
</body>

</html>