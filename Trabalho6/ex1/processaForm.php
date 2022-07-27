<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
echo "Sr. $nome, seu e-mail é $email";

$str = <<<BLOCO_HTML
<!doctype html>
<html lang="pt-br">

<head>
    <title>Formulario Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <form class="row p-5" method="GET" action="processaForm.php">
        <div class="col-sm-4">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep">
        </div>

        <div class="col-sm-4">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="logradouro">
        </div>

        <div class="col-sm-4">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro">
        </div>

        <div class="col-sm-6">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="email" class="form-control  mt-2" id="">
        </div>

        <div class="col-sm-6">
            <p>Estado</p>
            <select class="form-select" aria-label="Estado">
                <option selected value="mg">MG</option>
                <option value="sp">SP</option>
                <option value="rj">RJ</option>
                <option value="go">GO</option>
            </select>
        </div>
        <div class="col-sm-12 mt-3">
            <button class="btn btn-primary"> Enviar </button>
        </div>

    </form>
</body>

</html>
BLOCO_HTML;

?>