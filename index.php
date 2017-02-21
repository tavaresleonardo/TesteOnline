<?php
require_once "connect.php";
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
            <form method="POST" action="confirmar.php">
                <center><img src="logo.png" border="0" width="250" /></center><br/><br/>
                                <input type="text" name="clienteid" id="clienteid" class="txt" placeholder="Digite seu ID" required  /><br/><br/>
                                            
                                <input type="text" name="codigomercadoria" id="codigomercadoria" class="txt" placeholder="C&oacute;digo Mercadoria" required  /><br/><br/>
							
                                <input type="text" name="tipomercadoria" id="tipomercadoria" class="txt" placeholder="Tipo da Mercadoria" required  /><br/><br/>
							
                                <input type="text" name="nomemercadoria" id="nomemercadoria" class="txt" placeholder="Nome da Mercadoria" required  /><br/><br/>
                                                       
                                <input type="text" name="quantidade" id="quantidade" class="txt" placeholder="Quantidade" required  /><br/><br/>
                                                        
                                <input type="text" name="preco" id="preco" class="txt" placeholder="Pre&ccedil;o" required /><br/><br/>
							
				<input type="radio" name="tipodonegocio" id="tipodonegocio" value="Compra" required /> Compra <br/><br/>
                                <input type="radio" name="tipodonegocio" id="tipodonegocio" value="Venda" required /> Venda <br/><br/>

                                <input type="submit" action="confirmar.php" value="Enviar"/><br/>
                                              
            </form>
        </div>
<div style="clear:both"></div>
        
		<div class="texto">
        Leonardo Tavares<br/>
        Todos os direitos reservados &copy;2017<br/><br/>
        leozn.tavares@me.com
        </div>

    </body>
</html>
