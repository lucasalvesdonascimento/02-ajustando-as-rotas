<?php
include_once '../config/conexaoBD.php';
$conn = conexaoBD();
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

try{
    $stmt = $conn->prepare("SELECT * FROM login WHERE usuario = :usuario");
    $stmt->bindParam(":usuario",$usuario);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::PARAM_STR);
    $counter = $stmt->rowCount();
    
} catch (PDOexception $erro){
    echo "Erro ao autenticar o usuario.";
}


if($counter > 0){
    foreach ($resultado as $res){
        $usuario_res = $res['usuario'];
        $hash_res = $res['senha'];

        $senha_ok = password_verify($senha, $hash_res);

        if(isset($usuario_res) && isset($senha_ok) && $senha_ok == 1){
            session_start();
            $_SESSION['usuario'] = $usuario_res;
            $_SESSION['senha'] = $hash_res;
            echo 'Autenticado com sucesso! Aguarde...';
            //utilzei a tag meta com redirecionamento para que o usuário possa ler a mensagem
            echo '<meta http-equiv="refresh" content="5;url=admin/index.php">';
        }else{
            echo 'Dados informados não conferem. Acesse a area de autenticação para tentar novamente.';
            //utilzei a tag meta com redirecionamento para que o usuário possa ler a mensagem
            echo '<meta http-equiv="refresh" content="5;url=../index.php">';
        }   
    }
}elseif ($counter == 0) {
    echo 'Dados informados não conferem. Acesse a area de autenticação para tentar novamente.';
    //utilzei a tag meta com redirecionamento para que o usuário possa ler a mensagem
    echo '<meta http-equiv="refresh" content="5;url=../index.php">';
}


//aqui verifica se retornou alguma linha do banco de dados
//se retornou redireciona para o painel administrativo
//se nao retornou, redireciona para a pagina de login com uma mensagem: dados não conferem, por favor tente novamente






