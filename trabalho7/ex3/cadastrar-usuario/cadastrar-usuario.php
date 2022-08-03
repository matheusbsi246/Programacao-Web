<?php

require "../conexaoMysql.php";
$pdo = mysqlConnect();

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

$senha_hash = password_hash($senha,  PASSWORD_DEFAULT);


try {

    $sql = <<<SQL
    -- Repare que a coluna Id foi omitida por ser auto_increment
    INSERT INTO usuario_trab7(email, senha_hash)
    VALUES (?, ?)
    SQL;
    // Neste caso utilize prepared statements para prevenir
    // ataques do tipo SQL Injection, pois precisamos
    // cadastrar dados fornecidos pelo usuário 
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $email, $senha_hash
    ]);

    header("location: sucesso.html");
    exit();
} catch (Exception $e) {
    //error_log($e->getMessage(), 3, 'log.php');
    if ($e->errorInfo[1] === 1062)
        exit('Dados duplicados: ' . $e->getMessage());
    else
        exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}
