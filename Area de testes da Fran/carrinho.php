<?php
session_start();
$ni=0;

$_SESSION['itens'] = array();
$_SESSION['valortotal']=0.0;
$valortotal= 0.0;

if(isset($_POST["comprar"])){
    for($i=0;$i<4;$i++){
        if(isset($_POST['ch'.$i])){
            $c=$ni;
            $desc= $_POST['desc'.$i];
            $qtd= $_POST['qtd'.$i];
            $preco= $_POST['preco'.$i];

            $valortotal += ($preco * $qtd);

            //echo $i. " X " . $desc . "<br>";

            $_SESSION['itens'] = array_merge($_SESSION['itens'], array($c => array(
                'ni' => $i,
                'desc' => $desc,
                'qtd' => $qtd,
                'preco' => $preco 
            )) ); 
        
            $ni+=1;
        }  
    }
if($ni>0){
    for($i=0;$i<$ni;$i++){
       echo $i. " X " . $_SESSION['itens'][$i]['desc'] . "-". $_SESSION['itens'][$i]['preco']. "<br>";

    }
}
echo $valortotal;
$_SESSION['valortotal']= $valortotal;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssteste.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1> This is a header!</h1>
</header>
<main>
    <form class="parent" action="carrinho.php" method="post">
        <div class="div1, grid2">
        <div class="div6">
            <input type="checkbox" name="ch0" >
             <input type="text" name="desc0" value="produto1" readonly>
</div>
<div class="div7">
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                    </div>
            </div>
</div>
<div class="div8">
            <input type="text" name="preco0" value="99" readonly >
</div>
        </div>
        <div class="div2">
            <input type="checkbox" name="ch2" >
            <input type="text" name="desc1" value="produto2" readonly>
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                    </div>
            </div>
            <input type="text" name="preco1" value="99" readonly >
</div>
            
        <div class="div3">
            <input type="checkbox" name="ch2" >
            <input type="text" name="desc2" value="produto3" readonly>
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                    </div>
            </div>
            <input type="text" name="preco2" value="99" readonly >
</div>
<div class="div4">
            <input type="checkbox" name="ch2" >
            <input type="text" name="desc2" value="produto3" readonly>
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                    </div>
            </div>
            <input type="text" name="preco2" value="99" readonly >
</div>
<div class="div5">
                <input type="submit" name="comprar" value="comprar">
</div>
</main>       
    </form>
<footer>
    <H1>This is a footer!</H1>
</footer>
</body>
</html>