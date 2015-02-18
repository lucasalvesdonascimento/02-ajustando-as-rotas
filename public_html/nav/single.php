<?php
include_once 'config/conexaoBD.php';
$pag = filter_input(INPUT_GET, "pag");
if(!isset($pag) && $pag == null){
    $pag = "1";
}
$url = ("http://".$_SERVER['HTTP_HOST']);
define("BASE", $url);

if($pag >=1 && $pag < 5){
        $conn = conexaoBD();
        $query = "SELECT * FROM single WHERE id_single = :pag";

        $stmt = $conn->prepare($query);
        $stmt->bindValue(":pag", $pag);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="row">

            <div class="col-sm-12 blog-main">

                <div class="blog-post">
        <?php
            foreach ($resultado as $res) {
            echo "         
            <h2 class=\"blog-post-title\">".$res['titulo_single']."</h2>            

            <p>".$res['conteudo_single']."</p>"; 
            
            echo "\n<center><img src='".BASE.$res['img_single']."'></center>";
            }

         ?>

                </div><!-- /.blog-post -->

            </div><!--blog-main-->
        </div><!--/row-->
<?php
}else{
    include 'contato.php';
}
?>
