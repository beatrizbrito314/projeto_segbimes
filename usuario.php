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
                <td colspan="2">Dados do Usuário</td>
            </tr>
            <tr>
                <td>Usuário</td>
                <td></td>
            </tr>
            <tr>
                <td>Nome Completo</td>
                <td></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td></td>
            </tr>
        </table>
    </form>





</body>
</html>