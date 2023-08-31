<?php
session_start();

    $_SESSION ['dadospag']="";
    $user = (isset($_SESSION['user']['user'])? $_SESSION['user']['user']:"");
    $nome = (isset($_SESSION['user']['nome'])? $_SESSION['user']['nome']:"");
    $end  = (isset($_SESSION['user']['end']) ? $_SESSION['user']['end']: "");
    $valortotal = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']:"");

    $metpag = (isset($_SESSION['dadospag']['metpag']) ? $_SESSION['dadospag']['metpag']: "");
    $numcartao_avista = (isset($_SESSION['dadospag']['numcartao_avista']) ? $_SESSION['dadospag']['numcartao_avista' ]: "");
    $numcartao_credito= (isset($_SESSION['dadospag']['numcartao_credito'])? $_SESSION['dadospag']['numcartao_credito']: "");

    if(isset($_POST['confirmar'])){
        header('location: confirmacao.php',true,303);   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="2">Dados do Usuário</th>
        </tr>
        <tr>
            <td>Usuário</td>
            <td><?php echo $user?></td>
        </tr>
        <tr>
            <td>Nome Completo</td>
            <td><?php echo $nome?></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><?php echo $end ?></td>
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
                <th><td><?php echo $valortotal;?></td></th>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="4">Dados do Pagamento</th>
            </tr>
            <tr>
                <th>#</th>
                <th>Método de Pagamento</th>
                <th colspan="2">Dados da cobrança</th>
            </tr>
            <tr>
                <td>#</td>
                <td>
                    <?php
                        if($metpag =="deb_avista"){echo "Débito a Vista";}
                        else if($metpag =="credito"){echo "Crédito";}
                        else if($metpag =="pix"){echo "pix";}
                    ?>
                </td>
                <td>Debito à Vista</td>
                <td>
                    <?php
                            if($metpag =="deb_avista"){echo "$numcartao_avista";}
                            else if($metpag =="credito"){echo "$numcartao_credito";}
                    ?>
                </td>
                <td>Numero do Cartão</td>
            </tr>
            </table>

            <form action="resumocompra.php" method="post">
                <table>
                    <tr>
                        <th colspan="4">Confirmar Compra</th>
                        <td><input type="submit" name="confirmar" value="confirmar"></td>
                    </tr>
                </table>




</body>