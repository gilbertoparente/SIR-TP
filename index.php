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
    
    <!-- Adicione os links CSS e JS do Bootstrap -->
    <!-- ... -->

</head>
<body>

    <!-- Barra de Navegação -->
    <!-- ... -->

    <!-- Header da página -->
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
