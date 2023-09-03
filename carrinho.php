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
    $_SESSION['valortotal']= $valortotal;
    header('location: usuario.php',true,303);
}
// echo 'valor total'. $valortotal;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssteste.css">
    <title>Document</title>
</head>
<body>
    <form action="carrinho.php" method="post">
    <table>
        <tr>
            <th colpsan="5"> Lista de compras</th>
        </tr>
        <tr>
            <th>#</th>
            <th>[x]</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </tr>
        <tr>
            <td>1</td>
            <img src="imagens\gramofone" alt="">
            <td><input type="checkbox" name="ch0" ></td>
            <td><input type="text" name="desc0" value="Gramofone Clássico" readonly></td>
            <td><input type="number" name="qtd0" value="0" ></td>
            <td><input type="text" name="preco0" value="2374.45" readonly ></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="checkbox" name="ch1" ></td>
            <td><input type="text" name="desc1" value="Telefone De Disco" readonly></td>
            <td><input type="number" name="qtd1" value="0" ></td>
            <td><input type="text" name="preco1" value="2030.90" readonly ></td>
        </tr>
        <tr>
            <td>3</td>
            <td><input type="checkbox" name="ch2" ></td>
            <td><input type="text" name="desc2" value="Telefone De Mesa" readonly></td>
            <td><input type="number" name="qtd2" value="0" ></td>
            <td><input type="text" name="preco2" value="451.90" readonly ></td>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="checkbox" name="ch3" ></td>
            <td><input type="text" name="desc3" value="Maquina de Escrever Retrô" readonly></td>
            <td><input type="number" name="qtd3" value="0" ></td>
            <td><input type="text" name="preco3" value="238.25" readonly ></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="checkbox" name="ch4" ></td>
            <td><input type="text" name="desc4" value="Rádio Estilo Retrô" readonly></td>
            <td><input type="number" name="qtd4" value="0" ></td>
            <td><input type="text" name="preco4" value="54880.00" readonly ></td>
        </tr>
        <tr>
            <td>3</td>
            <td><input type="checkbox" name="ch5" ></td>
            <td><input type="text" name="desc5" value="Ampulheta Modelo Retrô" readonly></td>
            <td><input type="number" name="qtd5" value="0" ></td>
            <td><input type="text" name="preco5" value="451.90" readonly ></td>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="checkbox" name="ch6" ></td>
            <td><input type="text" name="desc6" value="Abbey Road Vinil" readonly></td>
            <td><input type="number" name="qtd6" value="0" ></td>
            <td><input type="text" name="preco6" value="131.90" readonly ></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="checkbox" name="ch7" ></td>
            <td><input type="text" name="desc7" value="Navio Decoração Retrô" readonly></td>
            <td><input type="number" name="qtd7" value="0" ></td>
            <td><input type="text" name="preco7" value="290.00" readonly ></td>
        </tr>
        <tr>
            <td>3</td>
            <td><input type="checkbox" name="ch8" ></td>
            <td><input type="text" name="desc8" value="Luminária Vintage" readonly></td>
            <td><input type="number" name="qtd8" value="0" ></td>
            <td><input type="text" name="preco8" value="389.00" readonly ></td>
        </tr>
        <tr>
            <td colspan="5">
                <input type="submit" name="comprar" value="comprar">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>