<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site seuproduto.com</title>
        <!--twitter bootstrap 3.3.2-->
        <link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.css" />        
    </head>
    <body>

        <?php date_default_timezone_set('America/Sao_Paulo'); ?>
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
                        <li class="active"><a href="index.php?pag=1">Home</a></li>
                        <li><a href="index.php?pag=2">Empresa</a></li>
                        <li><a href="index.php?pag=3">Produtos</a></li>
                        <li><a href="index.php?pag=4">Serviços</a></li>
                        <li><a href="index.php?pag=5">Contato</a></li>          
                    </ul>
                </div><!--/.navbar-collapse -->
                <div id="navbar" style="margin-left: 270px;" class="navbar-collapse navbar-left collapse">
                    <form class="navbar-form navbar-right" action="index.php" method="post">
                        <div class="form-group">
                            <input type="text" name="txt-buscar" placeholder="Pesquise aqui..." class="form-control">
                        </div>                    
                        <input type="submit" class="btn btn-success" name="btn-buscar" value="Buscar">
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        <div class="container" style="margin-top: 80px;">

