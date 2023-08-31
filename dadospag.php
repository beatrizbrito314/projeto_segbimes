<?php
session_start();

    $_SESSION ['dadospag']="";
    $user = (isset($_SESSION['user']['user'])? $_SESSION['user']['user']:"");
    $nome = (isset($_SESSION['user']['nome'])? $_SESSION['user']['nome']:"");
    $end  = (isset($_SESSION['user']['end']) ? $_SESSION['user']['end']: "");
    $valortotal = (isset($_SESSION['valortotal']['valortotal'])? $_SESSION['valortotal']['valortotal']:"");

    if(isset($_POST['pagar'])){
        if(isset($_POST['metPag'])){
                $metpag = $_POST['metpag'];
                $numCartão_avista = (isset($_POST['numCartão_avista']) ? $_POST['numCartão_avista'] : "");
                $numCartão_credito= (isset($_POST['numCartão_credito'])? $_POST['numCartão_credito']: "");

                $_SESSION ['dadospag'] = array('metpag' => $metpag,
                                               'numCartão_avista' => $numCartão_avista,
                                               'numCartão_credito' => $numCartão_credito);
             
                header('location: resumocompra.php',true,303);   
        };      
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
    <h2>Dados Pagamento</h2>
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

        <form action="dadospag.php" method="post">
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
                <td><input type="radio" name="metPag" value="deb_avista"></td>
                <td>Debito à Vista</td>
                <td><input type="text" name="numCartão_avista" value=""></td>
                <td>Numero do Cartão</td>
            </tr>
            <tr>
                <td>#</td>
                <td><input type="radio" name="metPag" value="cred_avista"></td>
                <td>Crédito à Vista</td>
                <td><input type="text" name="numCartão_credito" value=""></td>
                <td>Numero do Cartão</td>
            </tr>
            <tr>
                <td>#</td>
                <td><input type="radio" name="metPag" value="pix_avista"></td>
                <td>Pix </td>
                <td><input type="text" name="pix" value="pix"></td>
                <td>Numero do Pix</td><td>1920384657</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Valor Total</td>
                <td><?php echo $valortotal;?></td>
            </tr>
            <tr>
                <td colspan="4"><input type="submit" name="pagar" value="pagar"></td>
            </tr>

        </table>


</body>
</html>