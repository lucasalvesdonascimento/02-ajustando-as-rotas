<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once 'header.php';?>

<?php

$pag = filter_input(INPUT_GET, "pag");
$search = filter_input(INPUT_POST, "btn-buscar");


if(isset($pag) && $pag =! null){
    include 'nav/single.php';
}else if(isset($search) && $search=='Buscar'){
    include 'nav/search.php';
}else{
    include 'nav/single.php';
}

?>

<?php require_once 'footer.php';?>
