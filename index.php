<?php 
session_start();
require "db/connection.php";
$pdo = pdo_connect_mysql();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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


      

      <div id="home-image-column" class="col-md-6">
        <img src="IMG/header-imagem.jpg" alt="Header image" class="img-fluid">
      </div>
    </div>
  </div>
</header>


<!-- Login-->
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <form action="login.php" method="POST">
        <div>
          <div class="mb-3">
            <label>Email</label>
            <input type="text" name="Email_User" class="form-control">
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="Password_User" class="form-control">
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Criar conta-->
<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <form action="register.php" method="POST">
                    <div>
                        <div class="mb-3">
                            <label>Nome de Utilizador</label>
                            <input type="text" name="User_Name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="Password_User" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Criar Conta</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




      <!-- Secção dos Chefes -->
      <section class="Chefes">
        <div class="container text-center">
          <h2>Alguns dos nossos mais conceituados utilizadores...</h2>
          <div class="row g-4">
            <div class="col-12 col-md-3">
              <img src="IMG/LuisGaspar.png" alt="Chef Luis Gaspar" class="img-fluid">
              <p>Chef Luís Gaspar</p>
            </div>
      
            <div class="col-12 col-md-3">
              <img src="IMG/MarleneVieira.png" alt="Chef Marlene Vieira" class="img-fluid">
              <p>Chef Marlene Vieira</p>
            </div>
      
            <div class="col-12 col-md-3">
              <img src="IMG/antonio-nobre.png" alt="Chef António Nobre" class="img-fluid">
              <p>Chef António Nobre</p>
            </div>
      
            <div class="col-12 col-md-3">
              <img src="IMG/JorgeFernandes.png" alt="Chef Jorge Fernandes" class="img-fluid">
              <p>Chef Jorge Fernandes</p>
            </div>
          </div>
        </div>
      </section>



       <!--Quem somos-->
    <section id="QuemSomos" class="feature gradient">
      <div id="QuemSomos-container" class="container pt-3">
        <div id="QuemSomos-row" class="row align-items-center justify-content-center">
          <div class="col-md-10">
            <h1 class="my-3">Quem somos?</h1>
            <p class="my-4">
              A Recipes4All é uma plataforma de partilha de receitas de culinária com milhares de utilizadores por todo o mundo. Na nossa plataforma poderás descobrir um novo mundo de iguarias, pois aqui não existem fronteiras. Poderás acompanhar de perto as partilhas de utilizadores de todo o mundo e passar a conhecer dezenhas de novas realidades do mundo da culinária. Transformares-te num verdadeiro chef de cozinha nunca esteve tão perto!
            </p>
            <ul>
              <li>Cria conta de forma gratuita</li>
              <li>Regista as tuas receitas para não as perderes</li>
              <li>Partilha os teus cozinhados com os teus amigos ou com o mundo</li>
              <li>Encontra milhares de novas iguarias</li>
            </ul>
          </div>
        </div>
      </div>
    </section>



<!--Galeria de fotos-->
<section id="galeria" class="gallery">
  <div id="galeria-container" class="container pt-3">
    <div id="galeria-row" class="row align-items-center justify-content-center">
      <div id="galeria-col-titulo" class="col-md-10">
        <h1>Algumas das receitas mais partilhadas...</h1>
      </div>
      <div class="col-md-12">
        <!-- Carousel Integration -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- Carousel Items -->
            <div class="carousel-item active">
              <img src="IMG/galeria1.jpeg" class="d-block w-100" alt="Gallery image 1">
              <div class="carousel-caption">
                <h5>55min - fácil - 4p</h5>
                <p>Polvo braseado com cogumelos e puré de batata-doce</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="IMG/galeria2.jpeg" class="d-block w-100" alt="Gallery image 2">
              <div class="carousel-caption">
                <h5>90min - média - 6p</h5>
                <p>Panela no forno</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="IMG/galeria3.jpeg" class="d-block w-100" alt="Gallery image 3">
              <div class="carousel-caption">
                <h5>30min - fácil - 4p</h5>
                <p>Gratinado de cuscuz com alho-francês</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="IMG/galeria4.jpeg" class="d-block w-100" alt="Gallery image 3">
              <div class="carousel-caption">
                <h5>50min - fácil - 6p</h5>
                <p>Empadão de alheira com cogumelos e agrião</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="IMG/galeria5.jpeg" class="d-block w-100" alt="Gallery image 3">
              <div class="carousel-caption">
                <h5>15min - fácil - 4p</h5>
                <p>Lombo de novilho Angus com legumes</p>
              </div>
            </div>
            <!-- End Carousel Items -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- End Carousel Integration -->
      </div>
    </div>
  </div>
</section>


     <!--Vantagens-->
     <section id="vantagens" class="white-back gradient">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path
          fill="#F5F5F5"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
        ></path>
      </svg>
      <div id="vantagens-container" class="container pt-3">
        <div id="vantagens-row" class="row align-items-center justify-content-center">
          <div id="vantagens-col-1" class="col-md-5">
            
            <svg xmlns="http://www.w3.org/2000/svg"
             width="60"
              height="60" 
              fill="currentColor" class="bi bi-universal-access" viewBox="0 0 16 16">
              <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9z"/>
            </svg>

            <h1>As tuas receitas em todo o lado</h1>

            <p>
              Através da nossa plataforma poderás aceder às tuas receitas em qualquer dispositivo com acesso à internet e poderás até consultar receitas offline através da app.
            </p>
          </div>
          <div class="col-md-6"><img src="img/coding_.svg" alt="" /></div>
          <div class="col-md-6"><img src="img/marketing.svg" alt="" /></div>
          <div id="vantagens-col-2" class="col-md-5">
            
            <svg xmlns="http://www.w3.org/2000/svg"
             width="60"
              height="60"
               fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
              <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z"/>
              <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
            </svg>

            <h1>Cozinha de Excelência</h1>

            <p>
              Com o contributo de uma diversidade de personalidades da alta cozinha, poderás descobrir alguns dos truques e segredos dos profissionais que elevarão os teus pratos ao próximo nível.
            </p>
          </div>
          <div id="vantagens-col-3" class="col-md-5">
            
            <svg
            xmlns="http://www.w3.org/2000/svg" 
            width="60"
             height="60" 
             fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
             <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
           </svg>

            <h1>Partilhamos a nossa cozinha</h1>

            <p>
              Interaje com outros entusiastas, partilha dicas e celebra as tuas experiências culinárias. Este é local perfeito para demonstrares a tua paixão pela cozinha!
            </p>
          </div>
          <div class="col-md-6"><img src="img/revenue_.svg" alt="" /></div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210">
        <path
          fill="#F5F5F5"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>

    

     <!--Contactos-->
     <section id="contactos" class="contact">
      <div id="contactos-container" class="container pt-3">
        <div id="contactos-row" class="row align-items-center justify-content-center">
          <div id="contactos-text-column" class="col-md-6">
            <h1>Envia-nos a tua mensagem:</h1>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Endereço de e-mail:</label>
              <input type="email" class="form-control" id="emailForm" placeholder="email@exemplo.com" />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Mensagem:</label>
              <textarea class="form-control" id="mensagemForm" rows="5"></textarea>
            </div>
            <button id="mensagem" type="button" class="btn btn-outline-success">Enviar mensagem</button>
          </div>
        </div>
      </div>
    </section>



    <footer class="gradient">
      <div id="footer-container-0" class="container-fluid text-center">
      <div id="footer-container-1" class="container-fluid text-center">
        <span>Siga-nos em:</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook"
          viewBox="0 0 16 16">
          <path
            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
        </svg>
    
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram"
          viewBox="0 0 16 16">
          <path
            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
        </svg>
    
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x"
          viewBox="0 0 16 16">
          <path
            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
        </svg>
    
      </div>
      <div id="footer-container-2" class="container-fluid text-center">
        <span>© 2023 Recipes4All - Todos os direitos reservados.</span>
      </div>
      <div id="footer-container-3" class="container-fluid text-center">
        <span> Desenvolvido com <a href="https://getbootstrap.com/">Bootstrap.</a></span>
      </div>
    </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
  
    <script>
      // Adiciona um ouvinte de evento de clique ao botão "Registar"
      
      document.getElementById('registo').addEventListener('click', function() {
        // Exibe um alerta simples
        alert('Registo efetuado com sucesso!');
        

        document.getElementById('registoForm').value = '';
     
      });

     
    </script>

    <script>
      // Adiciona um ouvinte de evento de clique ao botão "Registar"
      document.getElementById('mensagem').addEventListener('click', function() {
        // Exibe um alerta simples
        alert('Mensagem enviada com sucesso. Obrigado pelo teu contacto e responderemos assim que possível!');

        document.getElementById('emailForm').value = '';

        document.getElementById('mensagemForm').value = '';

      });
    </script>

    

  </body>
</html>