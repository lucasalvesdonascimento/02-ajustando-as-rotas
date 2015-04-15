<?php
if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
        session_destroy();
	header("Location: ../../index.php");
	exit;
    }else{
}
?>
<hr />
<footer>
    <p><center>&copy; Todos os direitos reservados - <?php echo date('Y');?></center></p>
</footer>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.2-dist/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>