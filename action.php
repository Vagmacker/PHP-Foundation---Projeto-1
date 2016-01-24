<?php
    if(isset($_GET['nome']) and isset($_GET['email']) and isset($_GET['assunto']) and isset($_GET['mensagem']))
    {
         echo "Dados enviado com sucesso";
         echo $_GET['nome'];
         echo $_GET['email'];
         echo $_GET['assunto'];
         echo $_GET['mensagem'];
    }
    else
    {
        echo "Parametros GET invalidos";
    }
?>
