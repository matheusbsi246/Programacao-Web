<?php
$arquivo = "/srv/disk23/3635992/www/matheusonofre.atwebpages.com/Trabalho6/ex3/arquivo.txt";

$string = carregaString($arquivo);

$emailFornecido = htmlspecialchars($_POST["email"]);
$senhaFornecida = $_POST["senha"];

$email =  substr($string, 0, -62);

$senha_hash =  substr($string, -60);

if (password_verify($senhaFornecida, $senha_hash) && $email == $emailFornecido) {
    header("Location: sucess.html");
    exit();
} else {
    header("Location: index.html");
    exit();
}


function carregaString($arquivo)
{
    try {
        $arq = fopen($arquivo, "r");
        $string = fgets($arq) . "\n" . fgets($arq);
        $string = htmlspecialchars($string);
        fclose($arq);
        return $string;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
