 <?php require_once("navegacao.php");

 function verifica(){
     $_pages = array("home", "servicos", "produtos", "empresa", "contato");

     if(in_array($pagina, $_pages)){
         require_once($pagina.'.php');
     }else{
         require_once("404.php");
     }
 }

    if(isset($_GET['p'])){
        $pagina = $_GET['p'];
    }else{
        $pagina = "home";
    }

    verifica();

    require_once("footer.php");

 ?>