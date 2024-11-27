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
    <title>Cadastro de Lançamento</title>
    <link rel="stylesheet" href="Lancamento.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="header">
                <img src="../Imagem/logo.png" alt="Logo" class="logo">
                <h1>Cadastro de Lançamento</h1>
            </div>
            <form id="launch-form">
                <div class="input-group">
                    <label for="codigo">Código</label>
                    <input type="text" id="codigo" placeholder="Digite o código">
                </div>
                <div class="input-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" id="descricao" placeholder="Digite a descrição">
                </div>
                <div class="input-group">
                    <label for="valor">Valor</label>
                    <input type="number" step="0.01" id="valor" placeholder="Digite o valor">
                </div>
                <div class="input-group">
                    <label for="tipo">Tipo</label>
                    <select id="tipo">
                        <option value="credito">Crédito</option>
                        <option value="debito">Débito</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="data-lancamento">Data de Lançamento</label>
                    <input type="date" id="data-lancamento">
                </div>
                <div class="input-group">
                    <label for="id-categoria">ID de Categoria</label>
                    <input type="number" id="id-categoria" placeholder="Digite o ID da categoria">
                </div>
                <div class="input-group">
                    <label for="id-funcionario">ID de Funcionário</label>
                    <input type="number" id="id-funcionario" placeholder="Digite o ID do funcionário">
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
                window.location.href = "DadosL.html";
            } else {
                document.getElementById("confirmation").style.display = "none";
            }
        }
 
        document.getElementById("launch-form").addEventListener("submit", function(event) {
            event.preventDefault();
            window.location.href = "../Lancamento/DadosL.php";
        });
    </script>
</body>
</html>