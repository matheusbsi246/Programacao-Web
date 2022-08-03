<?php

require "conexaoMysql.php";
$pdo = mysqlConnect();

try {
    $sql = <<<SQL
  SELECT cep, logradouro, bairro, cidade, estado
  FROM endereco
  SQL;
    $stmt = $pdo->query($sql);
} catch (Exception $e) {
    exit('Ocorreu uma falha: ' . $e->getMessage());
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabelas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <style>
        body {
            padding-top: 2rem;
        }

        img {
            width: 15px;
            height: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>Enderecos Cadastrados</h3>
        <table class="table table-striped table-hover">
            <tr>
                <th>Cep</th>
                <th>Logradouro</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>

            <?php
            while ($row = $stmt->fetch()) {

                // Limpa os dados produzidos pelo usuário
                // com possibilidade de ataque XSS
                // antes de inserí-los na página HTML
                $cep = htmlspecialchars($row['cep']);
                $logradouro = htmlspecialchars($row['logradouro']);
                $bairro = htmlspecialchars($row['bairro']);
                $cidade = htmlspecialchars($row['cidade']);
                $estado = htmlspecialchars($row['estado']);

                echo <<<HTML
          <tr>
            <td>$cep</td> 
            <td>$logradouro</td>
            <td>$bairro</td>
            <td>$cidade</td>
            <td>$estado</td>
          </tr>      
        HTML;
            }
            ?>

        </table>
        <a href="index.html">Cadastrar outro endereco</a>
    </div>

</body>

</html>