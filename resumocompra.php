<?php
session_start();

$_SESSION['dadospag'] = "";

$usuario = (isset($_SESSION['user']['user'])? $_SESSION['user']['user']: "");
$nome = (isset($_SESSION['user']['nome'])? $_SESSION['user']['nome']: "");
$endereco = (isset($_SESSION['user']['end'])? $_SESSION['user']['end']: "");
$valorTotal = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']: "");
$metpag = (isset($_SESSION['dadospag1']['metpag'])? $_SESSION['dadospag1']['metpag']: "");
$numcartao_avista = (isset($_SESSION['dadospag1']['numcartao-avista'])? $_SESSION['dadospag1']['numcartao-avista']: "");
$numcartao_credito = (isset($_SESSION['dadospag1']['numcartao-credito'])? $_SESSION['dadospag1']['numcartao-credito']: "");

if(isset($_POST['confirmar'])) {
    header('Location: confirmacao.php', true, 303);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE-edge'>
    <meta name='viewport' content='width-device-width, initial-scale-1'>
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
              <a class="nav-link" href="#">Galeria</a>
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

 <section class="banner" data-aos="fade-up" data-aos-duration="1500">
        <div class="content">
<h3 >Dados do usuário</h3>
        <p style="color: white;
  text-shadow: 1px 1px 1px black;
  font-size: x-large;
  text-align: center;"><strong style="color: #0f3a6b;">Usuário:</strong>
        <?php echo $usuario; ?>
    
    
        <strong style="color: #0f3a6b;">Nome completo:</strong>
        <?php echo $nome; ?>
    
    
        <strong style="color: #0f3a6b;">Endereço: </strong>
        <?php echo $endereco; ?>
</p>
</div>
<div>
          <img src="image/UP.png" alt="" width="50%" height="50%"/>
     
          </div>
 </section>
 <section>
    
 <div class="banner" data-aos="fade-up" data-aos-duration="1500">
        <div class="content">
          <h3 style="color: white;
  text-shadow: 1px 1px 1px black;
  font-size: x-large;
  text-align: center;">Métodos de Pagamento</h3>
        <h4 style="color: white;
  text-shadow: 1px 1px 1px black;
  font-size: large;
  text-align: left;"> <?php
                if($metpag == "deb-avista"){
                    echo "Débito à Vista";
                }else if ($metpag == "credito"){
                    echo "Crédito à Vista";
                }else if ($metpag == "pix"){
                    echo "PIX";
                }
            ?></h4>
        
 <h4 style="color: white;
  text-shadow: 1px 1px 1px black;
  font-size: large;
  text-align: left;">Número do cartão</h4>
        <h5 style="color: white;
  text-shadow: 1px 1px 1px black;
  font-size: medium;
  text-align: left;"><?php
                if($metpag == "deb-avista"){
                    echo $numcartao_avista;
                }else if ($metpag == "credito"){
                    echo $numcartao_credito;
                }
                else{
                    echo "n/a";
                }
            ?></h5>

 </section>
 <section id="product-cards" data-aos="fade-up" data-aos-duration="1500">
        
<div class="container">
          <h1>Informações da compra</h1>
          <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
            <div class="card" style="width: 438%; height: 100%; background-color: #214961; border-color: #cfdfe8;">
            <div id="card-body">  
            <h4>Valor Total: </h4> <br>
                <h5><?php echo $_SESSION ['valortotal'];?></h5>
                <?php
                $i=0;
                if(isset($_SESSION['itens'])){
                    foreach($_SESSION ['itens'] as $item){
                        
            ?>
                <h4>Itens da compra:</h4> <h5><br><?php echo $i ?></h5>
               
                <h4>Numero Item: </h4><br><h5><?php echo $item['ni'];?></h5>
                
                <h4>Descrição:</h4> <br> <h5><?php echo $item['desc'];?></h5>
               
                <h4>Quantidade: </h4> <br><h5><?php echo $item['qtd'];?></h5>
               
                <h4>Preço:</h4><h5> <?php echo $item['preco'];?></h5>
                <?php
                $i++;
                    }
                }
            ?>
          
               
      
              </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="banner" data-aos="fade-up" data-aos-duration="1500">
        <div class="content">
        <form action="resumocompra.php" method="post">
<h3 > Confirmar Compra</h3>
        <p style="color: white;
  text-shadow: 1px 1px 1px black;
  font-size: x-large;
  text-align: center;"><input type="submit" name="confirmar" value="Confirmar">
    
</p>
</div>
<div>
          <img src="image/UP.png" alt="" width="50%" height="50%"/>
     
          </div>
          </form>
 </section>
   
        
           
            
 
 </section>
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