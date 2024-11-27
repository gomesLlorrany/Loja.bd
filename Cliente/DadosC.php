<?php
session_start();
if(isset($_SESSION['funcionario_nm']))
{
    $nome = $_SESSION['funcionario_nm'];
    echo "<label class=olausuario>".$nome.", sua presença faz a nossa loja soar melhor!</label>";
}
else {
    echo "<script>alert('Você não está logado!'); history.back() </script>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DadosC.css">
    <title>Lista de Cliente</title>
</head>
<style>
.olausuario {
  font-size: 1.8rem; /* Tamanho maior para mais destaque */
  font-weight: 600; /* Negrito mais suave */
  color: #2b4c40; /* Cor do texto (verde escuro) */
  text-align: center; /* Centraliza o texto */
  background: none; /* Remove o fundo verde */
  padding: 20px; /* Espaçamento interno */
  border-radius: 8px; /* Bordas arredondadas */
  box-shadow: none; /* Remove a sombra */
  margin: 20px 0; /* Margem superior e inferior */
  width: 80%; /* Largura da frase */
  max-width: 600px; /* Largura máxima para maior flexibilidade */
  margin-left: auto; /* Centraliza horizontalmente */
  margin-right: auto; /* Centraliza horizontalmente */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fonte limpa e moderna */
  line-height: 1.6; /* Maior espaçamento entre as linhas */
  transition: all 0.3s ease-in-out; /* Transição suave */
}

/* Efeito de hover */
.olausuario:hover {
  transform: scale(1.05); /* Aumenta o tamanho para dar mais interatividade */
  cursor: pointer; /* Adiciona o cursor de ponteiro para indicar que é interativo */
}


    </style>
<body>
    <header>
        <div class="logo-container">
            <img src="../Imagem/logo.png" alt="Logo" class="logo">
            <h1>AngelCraft</h1>
        </div>
        <nav>
            <ul class="menu">
            <li><a href="../Home.php">Home</a></li>
                <li><a href="../Cliente/DadosC.php">Cliente</a></li>
                <li><a href="../Funcionario/DadosF.php">Funcionário</a></li>
                <li><a href="../Fornecedor/DadosFo.php">Fornecedor</a></li>
                <li><a href="../Categoria/DadosCa.php">Categoria</a></li>
                <li><a href="../Lancamento/DadosL.php">Lançamentos</a></li>
                <li><a href="../Entre_outros/logout.php" id="navsair">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Lista de Cliente</h2>
        <button class="add-button" onclick="window.location.href='../Cliente.php'">+</button>
        <div class="employee-list">
            <div class="employee-card">
                <img src="../Imagem/user.png" alt="Cliente 1" class="employee-photo">
                <div class="employee-info">
                    <h3>Cliente 1</h3>
                    <p>Email: cliente1@gmail.com </p>
                    <p>Telefone: (00) 00000-0000</p>
                </div>
                <div class="employee-actions">
                    <img src="../Imagem/eye.png" alt="Ver" class="action-icon">
                </div>
            </div>
            <div class="employee-card">
                <img src="../Imagem/user.png" alt="Cliente 2" class="employee-photo">
                <div class="employee-info">
                    <h3>Cliente 2</h3>
                    <p>Email: cliente2@gmail.com </p>
                    <p>Telefone: (00) 00000-0000</p>
                </div>
                <div class="employee-actions">
                    <img src="../Imagem/eye.png" alt="Ver" class="action-icon">
                </div>
            </div>
            <div class="employee-card">
                <img src="../Imagem/user.png" alt="Cliente 3" class="employee-photo">
                <div class="employee-info">
                    <h3>Cliente 3</h3>
                    <p>Email: cliente3@gmail.com </p>
                    <p>Telefone: (00) 00000-0000</p>
                </div>
                <div class="employee-actions">
                    <img src="../Imagem/eye.png" alt="Ver" class="action-icon">
                </div>
            </div>
            <div class="employee-card">
                <img src="../Imagem/user.png" alt="Cliente 4" class="employee-photo">
                <div class="employee-info">
                    <h3>Cliente 4</h3>
                    <p>Email: cliente4@gmail.com </p>
                    <p>Telefone: (00) 00000-0000</p>
                </div>
                <div class="employee-actions">
                    <img src="../Imagem/eye.png" alt="Ver" class="action-icon">
                </div>
            </div>
            <div class="employee-card">
                <img src="../Imagem/user.png" alt="Cliente 5" class="employee-photo">
                <div class="employee-info">
                    <h3>Cliente 5</h3>
                    <p>Email: cliente5@gmail.com </p>
                    <p>Telefone: (00) 00000-0000</p>
                </div>
                <div class="employee-actions">
                    <img src="../Imagem/eye.png" alt="Ver" class="action-icon">
                </div>
            </div>
        </div>
    </main>
</body>
</html>
