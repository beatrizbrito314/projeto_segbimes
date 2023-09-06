<?php
session_start();
$_SESSION ['user']="";
    /*$i=1;
    foreach($_SESSION ['itens'] as $item){
        echo $i. " X " . $item['desc'] . "-". $item['preco']. "<br>";
    $i++;
    }*/


    if(isset($_POST['logar'])){
        if(isset($_POST['user']) && isset($_POST['nome']) && isset($_POST['end'])){
            $_SESSION['user']= array(
                'user' =>$_POST['user'],
                'nome' =>$_POST['nome'],
                'end' =>$_POST['end']
            );

            header('location: dadospag.php',true,303);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
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
        <a class="navbar-brand" href="#" id="logo"
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
              <a class="nav-link" href="#">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Entre em contato</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navbar end -->

    <form action="usuario.php" method="post">
        <table>
            <tr>
                <th colspan="2">Dados do Usuário</th>
            </tr>
            <tr>
                <td>Usuário</td>
                <td><input type="text" name="user"  ></td>
            </tr>
            <tr>
                <td>Nome Completo</td>
                <td><input type="text" name="nome"  ></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input type="text" name="end"  ></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="logar" value="logar">
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <th colpsan="5"> Itens da compra</th>
            </tr>
            <tr>
                <th>#</th>
                <th>Numero Item</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
            <?php
                $i=0;
                if(isset($_SESSION['itens'])){
                    foreach($_SESSION ['itens'] as $item){
                        
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $item['ni'];?><td>
                <td><?php echo $item['desc'];?></td>
                <td><?php echo $item['qtd'];?></td>
                <td><?php echo $item['preco'];?></td>
            </tr>
            <?php
                $i++;
                    }
                }
            ?>
             <tr>
                <th colspan="3"></th>
                <th>Valor Total</th>
                <th><td><?php echo $_SESSION ['valortotal'];?></td></th>
            </tr>
        </table>
    </form>





</body>
</html>