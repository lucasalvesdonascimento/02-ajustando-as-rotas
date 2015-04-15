<?php require_once 'header.php';?>

<?php

$pag = filter_input(INPUT_GET, "pag");
$search = filter_input(INPUT_POST, "btn-buscar");
$login = filter_input(INPUT_POST, "btn-login");


if(isset($pag) && $pag =! null){
    include 'nav/single.php';
}else if(isset($search) && $search=='Buscar'){
    include 'nav/search.php';
}else if(isset($login) && $login=='Painel Administrativo'){
    include 'nav/login.php';
}else{
    include 'nav/single.php';
}

?>

<!--=======

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
>>>>>>> e9f1e1bc724e3f18a970e53f3453906add79ee73-->
<?php require_once 'footer.php';?>
