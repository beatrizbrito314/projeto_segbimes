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
    <link rel="stylesheet" href="cssteste.css">
    <title>Document</title>
</head>
<body>
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