<?php
//Na variavel path é armazenado o que é digitado após o /
function rota($param){
    //registrando as rotas Validas
    $rotasValidas = ["home","empresa","produtos","servicos","contato"];  
    
    //verica se o parametro recebido existe nas rotas cadastradas
    $verificaRota = in_array($param, $rotasValidas); 
    
    if($verificaRota){    
        //se existir, faz o require_once do arquivo desejado
        return require_once 'nav/'.$param.'.php';        
    }else if(!$verificaRota){
        //se nao existir, faz o require_once do home (index.php)
        return require_once 'nav/home.php';;
    }else{
        echo '404';
    }
}