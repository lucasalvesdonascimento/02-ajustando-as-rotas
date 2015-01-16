<?php require_once 'header.php';?>
<?php
    $pag = 'nav/'.$_GET["pag"];
    if($pag == 'nav/'){
        require_once 'nav/home.php';
    }else{
        if(file_exists($pag)){
            require_once $pag; 
        }else{
            echo 'Pagina nao encontrada';
        }
    }
    
    
?>
<?php require_once 'footer.php';?>
