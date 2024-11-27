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
    <title>Cadastro de Fornecedor</title>
    <link rel="stylesheet" href="CadastroFo.css">
    <script src="script.js" defer></script>
</head>

<body>
    <div class="background">
        <div class="container">
            <div class="header">
                <img src="../Imagem/logo.png" alt="Logo" class="logo">
                <h1>Cadastro de Fornecedor</h1>
            </div>
            <form id="employee-form" method="POST" action="BancoFornecedor.php">
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
                        <label for="Contato">Contato</label>
                        <input type="number" id="Contato" name="Contato" placeholder="Digite o Contato">
                    </div>

                </div>
                <div class="input-group position-salary">
                    <div class="position-group">
                        <label for="Email">Email</label>
                        <input type="text" id="Email" name="Email" placeholder="Digite o Email">
                    </div>
                    <div class="position-group">
                        <label for="Telefone">Telefone</label>
                        <input type="number" id="Telefone" name="Telefone" placeholder="Digite o telefone">
                    </div>
                </div>
                <div class="input-group">
                    <label for="Endereco">Endereço</label>
                    <input type="text" id="Endereco" name="Endereco" placeholder="Digite o endereço">
                </div>
                <div class="input-group">
                    <label for="data-admissao">Numero</label>
                    <input type="number" id="numero" name="numero" placeholder="Digite o numero do endereço">
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
                window.location.href = "../Fornecedor/DadosFo.php"; // Substitua pelo link da outra página
            } else {
                // Esconder o quadro de confirmação
                document.getElementById("confirmation").style.display = "none";
            }
        }

    </script>
</body>
</html>
