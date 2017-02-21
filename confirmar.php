<?php
require_once "connect.php";


        session_start();
        $preco = $_POST['preco'] * $_POST['quantidade'];
        $clienteid = $_POST['clienteid'];
        $codigomercadoria = $_POST['codigomercadoria'];
        $tipomercadoria = $_POST['tipomercadoria'];
        $nomemercadoria = $_POST['nomemercadoria'];
        $quantidade = $_POST['quantidade'];
        $tipodonegocio = $_POST['tipodonegocio'];
       
?>

<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>Teste Online - Negocia&ccedil;&atilde;o de Mercadorias</title>
        <link rel="stylesheet" type="text/css" href="estiloformulario.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="operacaoarea">
            <form method="POST" action="scriptfinal.php">
                <center><img src="logo.png" border="0" width="250" /></center><br/><br/>
					<?php
//var_dump($_POST);

//if(count($_POST)){
    
                                        //imprime os campos que foram digitados no formulário anterior para confirmação.
    echo 'Cliente ID: '.($clienteid ?? '') . "<br><br>";
    echo 'C&oacute;digo do Produto: '.($codigomercadoria ?? '') . "<br><br>";
    echo 'Tipo Mercadora: '.($tipomercadoria ?? '') . "<br><br>";
    echo 'Nome da Mercadoria: '.($nomemercadoria ?? '') . "<br><br>";
    echo 'Quantidade: '.($quantidade ?? '') . "<br><br>";
    echo 'Pre&ccedil;o: R$ '. ($preco ?? '') . "<br><br>";
    echo 'Tipo do Neg&oacute;cio: '. ($tipodonegocio ?? '') . "<br><br>";
 
//insere os valores digitados no banco de dados
$efetuaroperacao = "insert into operacoes (cliente_id, codigo_mercadoria, tipo_mercadoria, nome_mercadoria, quantidade, valor, tipodonegocio) values ('$clienteid','$codigomercadoria','$tipomercadoria','$nomemercadoria','$quantidade','$preco','$tipodonegocio')";
        $efetuaroperacao = mysqli_query($con, $efetuaroperacao);     

//}
    
   
?>
                
        
                
               <br/> <input type="submit" action="scriptfinal.php" value="Confirmar"/><br/><br/>
                <div style="clear:both"></div>

            </form> 
        </div>


		<div class="texto">
        Leonardo Tavares<br/>
        Todos os direitos reservados &copy;2017<br/><br/>
        leozn.tavares@me.com
        </div>

    </body>
</html>

