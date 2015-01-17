<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once 'header.php';
$pag = filter_input(INPUT_GET, "pag");
$pag = 'nav/'.$pag;
if ($pag == 'nav/') {
  require_once "nav/home.php";
} else {
  require_once $pag;
}
    
?>
<?php require_once 'footer.php';?>
