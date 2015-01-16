<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site seuproduto.com</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="bootstrap/css/style.css" />
    </head>
    <body>
        <?php date_default_timezone_set('America/Sao_Paulo');?>
        <div class="container-fluid">
            <div class="row-fluid bg-darkblue">
                &nbsp;
            </div>
            <div class="row-fluid bg-blue">
                <div class="span6 topo titulo">
                    <a href="index.php" title="Home"><h1>SeuProduto.com</h1></a>
                </div>
                <div class="span6 topo-slogan">
                    <span>Aqui você encontra produtos de qualidade!</span>
                </div>
            </div>
            
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">seuproduto.com</a>
                    <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="index.php?pag=home.php">Home</a></li>
                        <li><a href="index.php?pag=empresa.php">Empresa</a></li>
                        <li><a href="index.php?pag=produtos.php">Produtos</a></li>
                        <li><a href="index.php?pag=servicos.php">Serviços</a></li>
                        <li><a href="index.php?pag=contato.php">Contato</a></li>
                    </ul>
                    </div>
                </div>           
            </div>