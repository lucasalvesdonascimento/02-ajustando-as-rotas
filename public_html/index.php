<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once 'header.php';
$pag = filter_input(INPUT_GET, "pag");
$pag = 'nav/'.$pag;
if ($pag == 'nav/') {
  require_once "nav/home.php";
} else if(file_exists($pag)){
  require_once $pag;
}else{
    echo 'Arquivo não encontrado. Navegue pelo menu principal do site.';
}
    
?>
<?php require_once 'footer.php';?>
