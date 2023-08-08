<?php
session_start();

    $i=1;
    foreach($_SESSION ['itens'] as $item){
        echo $i. " X " . $item['desc'] . "-". $item['preco']. "<br>";
    $i++;
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
                <td><input type="text" name="user" readonly ></td>
            </tr>
            <tr>
                <td>Nome Completo</td>
                <td><input type="text" name="nome" readonly ></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input type="text" name="end" readonly ></td>
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
                    }
                }
            ?>
        </table>
    </form>





</body>
</html>