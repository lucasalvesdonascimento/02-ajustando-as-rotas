<?php
//Na variavel path é armazenado o que é digitado após o /
function rota($param){
    //registrando as rotas Validas
    $rotasValidas = ["home","empresa","produtos","servicos","contato"];  
    
    //verica se o parametro recebido existe nas rotas cadastradas
    $verificaRota = in_array($param, $rotasValidas); 
    
    if($verificaRota){    
        //se existir, faz o require_once do arquivo desejado
        $arquivo = 'nav/'.$param.'.php'; 
        //verifica se o arquivo existe
        if(file_exists($arquivo)){
            require_once $arquivo;
        }else{
            echo '404 - arquivo nao encontrado';
        }
    }else if(!$verificaRota){
        //se nao existir, faz o require_once do home (index.php)
        require_once 'nav/home.php';
    }else{
        echo '404';
    }
}
