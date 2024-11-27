<?php

$nome = $_POST['nome'];
$data = $_POST['data'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$admissao = $_POST['admissao'];
$senha = $_POST['senha'];

include 'Entre_outros/conexao.php';

$insert_funcionario = "INSERT INTO tb_funcionario VALUES 
(NULL, '$nome', '$data', '$cargo', '$salario', '$admissao', '$senha' )";

$resultado = $conexao->query($insert_funcionario);

if ($resultado) {
    echo "<script>alert('Inserido com sucesso'); </script>";
}
else
{
    echo "<script>alert('Inserido com erro');</script>";
}
header('Location: ../Funcionario/DadosF.php');