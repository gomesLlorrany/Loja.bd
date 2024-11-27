<?php

$serve = "localhost";
$user = "root";
$password = "root";
$database = "cadastro";

$conexao = new mysqli ($serve, $user, $password, $database);

if ($conexao->connect_error) {
    die('falhou a conexão' . $conexao->connect_error);
} else {
    echo 'Conexão realizada com sucesso!';
}

?>