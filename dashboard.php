<?php 

require "db/connection.php";
$pdo = pdo_connect_mysql();
if (empty($_SESSION["Email_User"])) {
  print "<script>window.location.href='index.php';</script>";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard_style.css">


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
</body>
</html>