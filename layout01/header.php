<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Layout 01</title>
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <link rel="stylesheet" href="assets/css/plugins.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom.css?27">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&family=Open+Sans:wght@300;400;800&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-dark">
      <nav class="navbar navbar-expand-lg center-nav transparent bg-white">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="index.php">
              <!-- <img class="logo-dark" src="assets/img/logo-ct.png" srcset="assets/img/logo-ct.png" alt="" height="50px"/>
              <img class="logo-light" src="assets/img/logo-ct.png" srcset="assets/img/logo-ct.png" alt="" height="50px"/> -->
              LOGO EMPRESA
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Nome da Empresa</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                  <!-- <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a></li>
                  </ul> -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#">Quem Somos</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Sobre Nós</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Serviços</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Produtos</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#">Contato</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <br /> <a href="https://api.whatsapp.com/send?1=pt_br&phone=55119999999">+55 11 9999-9999</a> <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-primary rounded">Fale Conosco</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->