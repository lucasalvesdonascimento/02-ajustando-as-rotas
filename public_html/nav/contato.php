<div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
    <?php
        $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $assunto = filter_input(INPUT_POST,'assunto', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mensagem = filter_input(INPUT_POST,'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $enviar = filter_input(INPUT_POST, 'enviar');
        
        if(isset($enviar) && $enviar == 'Enviar'){
           echo '<div class="alert alert-success"><h4>Dados enviados com sucesso, abaixo seguem os dados que você enviou</h4></div>';
           echo '<p><b>Nome: </b>'.$nome.'</p>';
           echo '<p><b>E-mail: </b>'.$email.'</p>';
           echo '<p><b>Assunto: </b>'.$assunto.'</p>';
           echo '<p><b>Mensagem: </b>'.$mensagem.'</p>';
           
        }
    ?>
        <h2><center>Formulário de contato</center></h2>  
        <form method="post" enctype="multipart/form-data" class="contact-form">
      <div class="form-group">
        <label for="exampleInputName">Nome: </label>
        <input type="text" class="form-control" id="exampleInputName" name="nome" placeholder="Digite o seu nome">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Digite o seu email">
      </div>
      <div class="form-group">
        <label for="exampleInputName">Assunto: </label>
        <input type="text" class="form-control" id="exampleInputAssunto" name="assunto" placeholder="Digite o assunto">
      </div>
      <div class="form-group">
        <label for="exampleInputMensage">Mensagem</label>
        <textarea class="form-control" rows="3" placeholder="Digite a sua mensagem..." name="mensagem"></textarea>
      </div>

     <input type="submit" class="btn btn-default" name="enviar" id="enviar" value="Enviar" />
    </form>
    </div>
    <div class="span2"></div>
</div>