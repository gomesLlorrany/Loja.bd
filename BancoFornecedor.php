<?php

$nome = $_POST['nome'];
$Contato = $_POST['Contato'];
$Email = $_POST['Email'];
$Telefone = $_POST['Telefone'];
$Endereco = $_POST['Endereco'];
$numero = $_POST['numero'];

include 'Entre_outros/conexao.php';

$insert_fornecedor = "INSERT INTO tb_fornecedor VALUES 
(NULL, '$nome', '$Contato', '$Email', '$Telefone', '$Endereco', '$numero' )";

$resultado = $conexao->query($insert_fornecedor);

if ($resultado) {
    echo "<script>alert('Inserido com sucesso'); </script>";
}
else
{
    echo "<script>alert('Inserido com erro');</script>";
}

header('Location: ../Fornecedor/DadosFo.php');