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
    <title>Cadastro de Funcionário</title>
    <link rel="stylesheet" href="CadastroF.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="header">
                <img src="../Imagem/logo.png" alt="Logo" class="logo">
                <h1>Cadastro de Funcionário</h1>
                
            </div>
            <form id="employee-form" method="POST" action="BancoFU.php">
                <div class="input-group">
                    <label for="codigo">Código</label>
                    <input type="text" id="codigo" name="codigo" placeholder="Digite o código">
                </div>
                <div class="input-group name-birth">
                    <div class="name-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo">
                    </div>
                    <div class="birth-group">
                        <label for="data">Data de Nascimento</label>
                        <input type="date" id="data" name="data">
                    </div>
                </div>
                <div class="input-group position-salary">
                    <div class="position-group">
                        <label for="cargo">Cargo</label>
                        <input type="text" id="cargo" name="cargo" placeholder="Digite o cargo">
                    </div>
                    <div class="salary-group">
                        <label for="salario">Salário</label>
                        <input type="number" id="salario" name="salario" placeholder="Digite o salário">
                    </div>
                </div>
                <div class="input-group">
                    <label for="admissao">Data de Admissão</label>
                    <input type="date" id="admissao" name="admissao">
                </div>
                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite a senha">
                </div>
                <div class="input-group">
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" accept="image/*">
                </div>
                <div class="button-group">
                    <button type="button" onclick="confirmCancel()">Cancelar</button>
                    <input type="submit" value="Cadastrar">
                </div>
                
            </form>
            <div class="confirmation" id="confirmation" style="display: none;">
                <div class="confirmation-box">
                    <p>Tem certeza que deseja cancelar?</p>
                    <div class="button-group">
                        <button onclick="cancelConfirmation(true)">Sim</button>
                        <button onclick="cancelConfirmation(false)">Não</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmCancel() {
            document.getElementById("confirmation").style.display = "flex";
        }

        function cancelConfirmation(confirmed) {
            if (confirmed) {
                // Ação ao confirmar cancelamento
                window.location.href = "../Funcionario/DadosF.php"; // Substitua pelo link da outra página
            } else {
                // Esconder o quadro de confirmação
                document.getElementById("confirmation").style.display = "none";
            }
        }

    </script>
</body>
</html>
