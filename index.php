 <?php require_once("navegacao.php");

    function verifica($pagina){

        $_pages = array("home", "servicos", "produtos", "empresa", "contato");

        if(in_array($pagina, $_pages)){
            require_once($pagina.'.php');
        }else{
            http_response_code(404);
        }
    }

    if(isset($_GET['p'])){
        $pagina = $_GET['p'];
    }else{
        $pagina = "home";
    }

    verifica($pagina);

    require_once("footer.php");

 ?>