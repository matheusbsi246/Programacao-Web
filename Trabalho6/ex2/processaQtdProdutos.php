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
    $produtos = ["The Shining", "Pet Sematary", "Misery", "Mr Mercedes", "The Gunslinger", "Finders Keepers", "End of Watch", "The Drawing of the Three", "The Waste Lands", "Wizard and Glass"];
    $descricao = ["Livro de terror sobre uma familia que se isola em um Hotel", "Livro de terror que roda em torno de um cemitério indígena ", "Livro de terror sobre uma fã que sequestra seu autor preferido", "Livro de terror sobre um assassina que mata uma multidão com uma Mercedes", "Livro sobre um pistoleiro que busca a misteriosa Torre Negra", "Livro de ivestigação sobre um cara que é fã de um autor que assassina e rouba os livros manuscrito de seu ídolo", "Continuação da estória do assassino da Mercedes", "Sequencia do livro do pistoleiro que procura aliados pra prosseguir com sua busca", "Terceiro livro daa aventura do pistoleiro no qual ele enfrenta um trem que gosta de advinhações", "Quarta continuação do pistoleiro onde conta um grande amor do seu passado"];
    $qde = $_POST['qde'];

    echo <<<HTML
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Num</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                 HTML;

    for ($i = 0; $i < $qde; $i++) {
        $j = $i + 1;
        $roul = (rand(0, 9));
        echo <<<HTML
                        <tr>
                        <th scope="row">$j</th>
                        <td>$produtos[$roul]</td>
                        <td>$descricao[$roul]</td>
                        </tr>      
                    HTML;
    }

    ?>

    </tbody>
    </table>

</body>

</html>