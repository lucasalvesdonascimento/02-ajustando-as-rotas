<?php 
session_start();
$usuario = $_SESSION["usuario"];
$senha = $_SESSION["senha"];

setcookie($usuario,$senha,time()+3600);

    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
        session_destroy();
	header("Location: ../../index.php");
	exit;
    }else{
}?>
<?php require_once 'header.php';?>
<?php

$pag_admin = filter_input(INPUT_GET, "pag_admin");

if(isset($pag_admin) && $pag_admin != null){
    include 'edicao_post.php';
}else{
    include 'painel.php';
}

?>
<?php require_once 'footer.php';?>

