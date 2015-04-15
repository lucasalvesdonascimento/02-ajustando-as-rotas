<?php
    include_once '../../config/conexaoBD.php';
    $conn = conexaoBD();
    
    $pag_admin = filter_input(INPUT_GET, "pag_admin");
    
    $atualizar = filter_input(INPUT_POST, "atualizar");
    $titulo_single = filter_input(INPUT_POST, "titulo_single");
    $conteudo_single = filter_input(INPUT_POST, "conteudo_single");
    
    if(isset($atualizar)):
        $sql_update = "UPDATE single SET titulo_single = :titulo_single, conteudo_single = :conteudo_single WHERE id_single = :id_single";
        $stmt = $conn->prepare($sql_update);
        $stmt->bindParam(":id_single", $pag_admin);
        $stmt->bindParam(":titulo_single", $titulo_single);
        $stmt->bindParam(":conteudo_single", $conteudo_single);
        $stmt->execute();
        echo "<div class='alert alert-success' style=".'text-align:center;'."><h4>Atualizado com sucesso!</h4></div>";
    endif;
    
    $sql_select = "SELECT * FROM single WHERE id_single = :id_single";
    
    $stmt = $conn->prepare($sql_select);
    $stmt->bindParam(":id_single", $pag_admin);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($resultado as $res){
    $titulo_single = $res['titulo_single'];
    $conteudo_single = $res['conteudo_single'];   
?>
<div class="container-fluid">
    <div class="row">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Titulo</label>
                <input class="form-control" name="titulo_single" id="titulo_single" value="<?php echo $titulo_single; ?>">
            </div>
            <div class="form-group">
                <label>Conteúdo</label>
                <textarea class="form-control" name="conteudo_single" id="conteudo_single" rows="10"><?php echo $conteudo_single; ?></textarea>
            </div>
            <div class="form-group">
                <center><button type="submit" id="atualizar" name="atualizar" class="btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span>
                            Atualizar
                        </button>
                </center>
            </div>
        </form>
    </div>
    <div class="row">
        <a href="index.php" class="btn btn-info" title="Seu produto - Voltar" alt="Seu produto - Voltar">
            <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;&nbsp;Voltar
        </a>
    </div>
</div>
<?php
    }
?>
