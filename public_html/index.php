<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);

//Aqui a variavel $pag recebe os parametros GET do menu principal
$pag = filter_input(INPUT_GET, "pag");

/**fazendo o require_once do arquivo funcoes
contendo a funcao de verificacao de rota**/
require_once 'functions/funcoes.php';

require_once 'header.php';
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
//variavel path contem o request_uri sem a barra(/)
$path = explode("/", $rota['path'],2);

    if(isset($pag)){
        //se existir a variavel $pag
        //chama a funcao rota()e passa por parametro 
        //a variavel $pag
        rota($pag);               
    }else if(isset($path[1])){
        //se for digitado algo no request_uri
        //chama a funcao rota()e passa por parametro 
        //a variavel $path[1] 
        rota($path[1]);
    }else{
        require_once 'nav/home.php';
    }
?>
<?php require_once 'footer.php';?>
