
<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Store</title>
    <link rel="shortcut icon" type="image" href="./image/Logo.png" />
    <link rel="stylesheet" href="style.css" />
    <!-- bootstrap links -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap links -->
    <!-- links das fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Uchen&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Mate+SC&display=swap"
      rel="stylesheet"
    />
    <!-- links das fontes -->
    <!-- links dos icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- links dos icons -->
    <!-- links de animação -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- links de animação -->
</head>
<body>
<div class="all-content">
      <!-- navbar -->
      <nav class="navbar navbar-expand-md" id="navbar">
        <!-- Brand -->
        <a class="navbar-brand" href="index.html" id="logo"
          ><img src="./image/Antique.png" alt="" width="50px" /> Antique
          Store</a
        >

        <!-- Toggler/collapsibe Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavbar"
        >
          <span><img src="image/menu.png" alt="" width="30px" /></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Inicial</a>
            </li>
            <!-- dropdown -->
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                id="navbardrop"
                data-toggle="dropdown"
              >
                Sua conta
              </a>
              <div class="dropdown-menu">
                <a href="user.php" class="dropdown-item">Login</a>
                <a href="carrinho.php" class="dropdown-item">Carrinho</a>
              </div>
            </li>
            <!-- dropdown -->
            <li class="nav-item">
              <a class="nav-link" href="galeria.html">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobrenos.html">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entremcont.html">Entre em contato</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navbar end -->

 
                
 <!-- banner -->
 <div class="banner" data-aos="fade-up" data-aos-duration="1500">
        <div class="content">
          <h3>Obrigada por comprar conosco!</h3>
        </div>
        <div class="img">
          <img src="image/BG2.png" alt="" />
          </div>
      </div>

<!-- contact  -->
<div
        class="container"
        id="contact"
        data-aos="fade-up"
        data-aos-duration="1500"
      >
        <h1>Entre em contato</h1>
        <div class="row">
          <div class="col-md-4 py-1 py-md-0">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id="usr"
                placeholder="Nome"
              />
            </div>
          </div>
          <div class="col-md-4 py-1 py-md-0">
            <div class="form-group">
              <input
                type="email"
                class="form-control"
                id="eml"
                placeholder="Email"
              />
            </div>
          </div>
          <div class="col-md-4 py-1 py-md-0">
            <div class="form-group">
              <input
                type="number"
                class="form-control"
                id="phn"
                placeholder="Número"
              />
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea
            class="form-control"
            rows="5"
            id="comment"
            placeholder="Mensagem"
          ></textarea>
        </div>
        <div id="messagebtn"><button>Enviar</button></div>
      </div>
      <!-- contact end -->

      <!-- footer -->
      <footer id="footer" data-aos="fade-up" data-aos-duration="1500">
        <h1 class="text-center">Antique Store</h1>
        <p class="text-center">
          Há 100 anos conservando e relembrando o passado através de objetos e
          experiências.
        </p>
        <div class="icons text-center">
          <i class="bx bxl-facebook"></i>
          <i class="bx bxl-google"></i>
          <i class="bx bxl-instagram"></i>
        </div>
        <div class="copyright text-center">
          &copy; Copyright <strong>BFL S.A</strong> .Todos os direitos
          reservados
        </div>
      </footer>
      <!-- footer -->

      <a href="#" class="arrow">
        <i>
          <img src="./image/up-arrow.png" alt="" width="50px" />
        </i>
      </a>
</div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>