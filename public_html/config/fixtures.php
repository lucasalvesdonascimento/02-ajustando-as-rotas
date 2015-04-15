<?php

require_once 'conexaoBD.php';

echo "#### Executando Fixtures ####\n";

$conn = conexaoBD();

echo "Inserindo Dados na tabela - login\n";

$usuario = "admin@email.com";
$senha_user = "admin";

$options = [
    'cost' => 10
];

$senha = password_hash($senha_user, PASSWORD_DEFAULT, $options);

$stmt = $conn->prepare("INSERT INTO login (usuario, senha) VALUES (:usuario, :senha)");
$stmt->bindParam(":usuario", $usuario);
$stmt->bindParam(":senha", $senha);
$stmt->execute();

echo "Insercao de 1 usuario na tabela login - OK\n";



echo "Inserindo Dados\n";

$titulo_single = "Titulo de Exemplo";
$conteudo_single = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque tristique facilisis.
    Suspendisse ultricies vestibulum felis, id vestibulum lorem tincidunt eu. Suspendisse porta posuere aliquet. 
    Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, 
    fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt 
    varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula 
    hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. 
    Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. 
    Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris.

Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. 
Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. 
Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et 
ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper 
non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. 
Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium 
convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat 
quam. Sed eleifend ligula ut nibh tincidunt blandit.

Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. 
Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus. 
Nulla ac dapibus justo. Phasellus ac iaculis arcu. Vestibulum nec risus sit amet ante lacinia iaculis. In rhoncus quam elit,
porttitor consectetur lacus convallis quis. Donec a consequat augue. Integer pulvinar gravida metus eu sodales.
";

$img_single = "/img/imagem.jpg";

$stmt = $conn->prepare("INSERT INTO single (titulo_single, conteudo_single, img_single) ".
                       "VALUES (:titulo_single, :conteudo_single, :img_single);");
$stmt->bindParam(":titulo_single",$titulo_single);
$stmt->bindParam(":conteudo_single",$conteudo_single);
$stmt->bindParam(":img_single",$img_single);
$stmt->execute();

echo " - OK\n";

echo '#### Concluído ####';