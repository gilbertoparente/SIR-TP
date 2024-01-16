<?php 

require "db/connection.php";
$pdo = pdo_connect_mysql();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recipes4all</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- Barra de Navegação -->
    <nav id="myNavbar" class="navbar navbar-expand-lg bg-body-tertiary fixed-top style-shadow">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="IMG/logo_small.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#QuemSomos">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeria">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#vantagens">Vantagens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactos">Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="conta.html">Entrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header da página -->
    <header id="home" class="page-header gradient">
  <div id="home-container" class="container pt-3">
    <div id="home-row" class="row align-items-center justify-content-center">
      <div id="home-text-column" class="col-md-5">
        <h2> E tu? Já sabes o que cozinhar?</h2>
        <p> Inscreve-te na nossa plataforma de partilha de receitas e mergulha num mundo de infinitas possibilidades!
        </p>

        
        <div class="input-group">
          <input type="email" class="form-control" id="registoForm" placeholder="Introduza o seu e-mail" />
          <button id="registo" type="button" class="btn btn-outline-warning">Registar</button>
        </div>
      </div>
      

      <div id="home-image-column" class="col-md-6">
        <img src="IMG/header-imagem.jpg" alt="Header image" class="img-fluid">
      </div>
    </div>
  </div>
</header>
    <header id="home" class="page-header gradient">
        <!-- ... -->
        <div class="input-group mt-3">
            <input type="email" class="form-control" id="loginEmail" placeholder="E-mail" />
            <input type="password" class="form-control" id="loginPassword" placeholder="Password" />
            <button id="login" type="button" class="btn btn-outline-primary">Entrar</button>
        </div>
        <!-- ... -->
    </header>

    <!-- Secção dos Chefes -->
    <!-- ... -->

    <header id="home" class="page-header gradient">
        <!-- ... -->
        <div class="input-group mt-3">
            <input type="email" class="form-control" id="loginEmail" placeholder="E-mail" />
            <input type="password" class="form-control" id="loginPassword" placeholder="Password" />
            <button id="login" type="button" class="btn btn-outline-primary">Entrar</button>
        </div>
        
    </header>

    <!-- Quem somos -->
    <!-- ... -->

    <header id="home" class="page-header gradient">
        <!-- ... -->
        <div class="input-group mt-3">
            <input type="email" class="form-control" id="loginEmail" placeholder="E-mail" />
            <input type="password" class="form-control" id="loginPassword" placeholder="Password" />
            <button id="login" type="button" class="btn btn-outline-primary">Entrar</button>
        </div>
        <!-- ... -->
    </header>

    <!-- Galeria de fotos -->
    <!-- ... -->

    <!-- Vantagens -->
    <!-- ... -->

    <!-- Contactos -->
    <!-- ... -->

    <!-- Footer -->
    <!-- ... -->

    <!-- Adicione os scripts JS do Bootstrap e seus próprios scripts -->
    <!-- ... -->

    <script>
        // Adiciona um ouvinte de evento de clique ao botão "Entrar"
        document.getElementById('login').addEventListener('click', function() {
            let email = document.getElementById('loginEmail').value;
            let password = document.getElementById('loginPassword').value;

            // Envia uma solicitação AJAX para o backend para autenticar o usuário
            // Exemplo: usar a Fetch API para enviar dados para um arquivo PHP
            fetch('backend/login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email, password }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Login bem-sucedido!');
                    // Redireciona para a página principal do sistema após o login
                    window.location.href = 'dashboard.php';
                } else {
                    alert('Falha no login. Verifique suas credenciais.');
                }
            })
            .catch(error => console.error('Erro:', error));
        });
    </script>

</body>
</html>
