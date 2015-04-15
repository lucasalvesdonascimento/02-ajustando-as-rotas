<?php require_once 'header.php';?>

<?php
session_start();

    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
        echo '<div class="container">

        <form class="form-login" action="nav/autenticacao.php" method="post" enctype="multipart/form-data">
                <h2 class="form-signin-heading">Painel Administrativo - Login</h2>
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="usuario" name="usuario" class="form-control" placeholder="Seu e-mail cadastrado" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          </form>

        </div> <!-- /container -->';
	exit;
    }else{
        header("Location: nav/admin/index.php");
}?>





    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php require_once 'footer.php';?>


