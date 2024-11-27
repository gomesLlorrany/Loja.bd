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
    <title>Flora Finesse - Home</title>
    <link rel="stylesheet" href="Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</head>
<style>
.olausuario {
  font-size: 1.8rem;
  font-weight: 600;
  color: #2b4c40;
  text-align: center;
  background: none;
  padding: 10px;
  border-radius: 8px;
  box-shadow: none;
  margin: 0; /* Remove a margem superior */
  width: 80%;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
  transition: all 0.3s ease-in-out;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* Efeito de hover */
.olausuario:hover {
  transform: scale(1.05);
  cursor: pointer;
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
                <li><a href="../Entre_outros/Login.php">Login</a></li>
                <li><a href="../Entre_outros/logout.php" id="navsair">Sair</a></li>
            </ul>
        </nav>
    </header>
 
    <main>
        <!-- Carrossel de Imagens -->
        <div class="carousel">
            <img src="../Imagem/plano de fundo.png" alt="Imagem Carrossel" class="carousel-image">
        </div>
 
        <!-- Quadros Sobrepostos -->
        <div class="info-boxes">
            <div class="info-box">
                <img src="../Imagem/chamada-telefonica.png" alt="Icone" class="icon">
                <br><br><br>
           <h3>Atendemos</h3>
                <p>Sítios, Pedidos comerciais, Produtores, construtores, fazendas, residências</p>
            </div>
            <div class="info-box">
                <img src="../Imagem/clientes (1).png" alt="Icone" class="icon">
                <br><br><br>
                <h3>Entregamos todo Brasil</h3>
                <p>Fale com um de nossos vendedores e saiba mais</p>
            </div>
            <div class="info-box">
                <img src="../Imagem/medalha-estrela (1).png" alt="Icone" class="icon">
                <br><br><br>
                <h3>Somos especialistas</h3>
                <p>Estamos há anos no mercado sempre nos destacando pela qualidade no serviço e atendimento</p>
            </div>
            <div class="info-box">
                <img src="../Imagem/contato.png" alt="Icone" class="icon">
                <br><br><br>
                <h3>Contato</h3>
                <p>Telefone: 00 0000-000</p>
                <p>Email: AngelCraft@gmail.com </p>
            </div>
        </div>
 
        <div class="offers">
            <div class="offer">
                <div class="offer-content">
                    <a alt="Ícone 1" class="offer-icon">
                    <h2>10% OFF</h2>
                    <p>Acima de R$ 60,00</p>
                </div>
                <div class="circles">
                    <img src="../Imagem/pl.webp" alt="Circle Image 1" class="circle-image">
                    <img src="../Imagem/buque.webp" alt="Circle Image 2" class="circle-image">
                </div>
            </div>
            <div class="offer">
                <div class="offer-content">
                    <a alt="Ícone 2" class="offer-icon">
                    <h2>20% OFF</h2>
                    <p>Acima de R$ 100,00</p>
                </div>
                <div class="circles">
                    <img src="../Imagem/orquidea.webp" alt="Circle Image 1" class="circle-image">
                    <img src="../Imagem/succ.jpg" alt="Circle Image 2" class="circle-image">
                </div>
            </div>
            <div class="offer">
                <div class="offer-content">
                    <a alt="Ícone 3" class="offer-icon">
                    <h2>30% OFF</h2>
                    <p>Acima de R$ 200,00</p>
                </div>
                <div class="circles">
                    <img src="../Imagem/jarddr.jpg" alt="Circle Image 1" class="circle-image">
                    <img src="../Imagem/jardim.webp" alt="Circle Image 2" class="circle-image">
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card custom-card">
                        <img src="../Imagem/espa.jpeg" class="card-img-top" alt="Suculenta Espada">
                        <div class="card-body">
                            <h5 class="card-title">Suculenta Espada</h5>
                            <p class="card-text">Uma suculenta elegante com folhas longas e afiadas. Ideal para decoração interna.</p>
                            <p class="card-text"><strong>Preço:</strong> R$ 25,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card custom-card">
                        <img src="../Imagem/difer.webp" class="card-img-top" alt="Orquídea">
                        <div class="card-body">
                            <h5 class="card-title">Orquídea</h5>
                            <p class="card-text">Uma orquídea exótica com flores vibrantes. Perfeita para presentes especiais.</p>
                            <p class="card-text"><strong>Preço:</strong> R$ 40,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card custom-card">
                        <img src="../Imagem/vaso.webp" class="card-img-top" alt="Várias Suculentas">
                        <div class="card-body">
                            <h5 class="card-title">Várias Suculentas</h5>
                            <p class="card-text">Um conjunto de diferentes suculentas para criar uma bela coleção.</p>
                            <p class="card-text"><strong>Preço:</strong> R$ 60,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card custom-card">
                        <img src="../Imagem/rosa.webp" class="card-img-top" alt="Orquídea Phalaenopsis">
                        <div class="card-body">
                            <h5 class="card-title">Orquídea Phalaenopsis</h5>
                            <p class="card-text">A famosa orquídea Phalaenopsis com suas flores majestosas. Ideal para qualquer ambiente.</p>
                            <p class="card-text"><strong>Preço:</strong> R$ 50,00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card custom-card">
                        <img src="../Imagem/padrao.jpg" class="card-img-top" alt="Orquídea">
                        <div class="card-body">
                            <h5 class="card-title">Orquídea</h5>
                            <p class="card-text">Uma orquídea adicional com cores vibrantes e aroma delicado.</p>
                            <p class="card-text"><strong>Preço:</strong> R$ 35,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>
</html>