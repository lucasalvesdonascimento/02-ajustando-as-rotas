<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');
if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
        session_destroy();
	header("Location: ../../index.php");
	exit;
    }else{
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site seuproduto.com</title>
        <!--twitter bootstrap 3.3.2-->
        <link href="../../bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet" />
        
        <!-- Custom styles for this template -->
        <link href="../../bootstrap-3.3.2-dist/css/login.css" rel="stylesheet">
        
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../bootstrap-3.3.2-dist/js/ie8-responsive-file-warning.js"></script>
        
        <!--CKEditor-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>        
        <script src="ckeditor/ckeditor.js"></script>
        <script src="ckeditor/adapters/jquery.js"></script>        
        <script type="text/javascript">
            window.onload = function()  {
                CKEDITOR.replace( 'conteudo_single' );
            };
        </script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">seuproduto.com</a>
                </div>
                <div id="navbar" class="navbar-collapse navbar-left collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../../index.php?pag=1">Home</a></li>
                        <li><a href="../../index.php?pag=2">Empresa</a></li>
                        <li><a href="../../index.php?pag=3">Produtos</a></li>
                        <li><a href="../../index.php?pag=4">Serviços</a></li>
                        <li><a href="../../index.php?pag=5">Contato</a></li>        
                    </ul>
                </div><!--/.navbar-collapse -->
                <div id="navbar" style="margin-left: -10px;" class="navbar-collapse navbar-left collapse">
                    <form class="navbar-form navbar-left" action="index.php" method="post">
                        <div class="form-group">
                            <input type="text" name="txt-buscar" placeholder="Pesquise aqui..." class="form-control">
                        </div>                    
                        <input type="submit" class="btn btn-success" name="btn-buscar" value="Buscar">
                    </form>
                    <form class="navbar-form navbar-left" action="../../index.php" method="post">                              
                        <input type="submit" class="btn btn-info" name="btn-login" value="Painel Administrativo">
                        <a href="logout.php" title="Logout" class="btn btn-danger">Logout</a>
                    </form>                  
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        <div class="container" style="margin-top: 80px;">

