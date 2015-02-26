<?php

require_once 'conexaoBD.php';

echo "#### Executando Fixtures ####\n";

$conn = conexaoBD();


echo "REMOVENDO A TABELA SE EXISTIR";

$conn->query("DROP TABLE IF EXISTS single");

echo "\n OK\n";

echo "CRIANDO A TABELA SINGLE\n";

$conn->query("CREATE TABLE IF NOT EXISTS `single` (
  `id_single` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_single` varchar(100) NOT NULL,
  `conteudo_single` longtext NOT NULL,
  `img_single` varchar(100) NOT NULL,
  PRIMARY KEY (`id_single`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;");

echo " - OK \n";

echo "INSERINDO DADOS NA TABELA SINGLE\n";
echo "Inserindo dados da pagina Home";

$titulo_single1 = "Titulo da Pagina Home";
$conteudo_single1 = "<h4>Conteudo da pagina home</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque tristique facilisis.\r     Suspendisse ultricies vestibulum felis, id vestibulum lorem tincidunt eu. Suspendisse porta posuere aliquet. \r <br>    Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, \r     fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt \r     varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula \r     hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. \r     Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. \r     Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris.\r \r Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. \r Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. \r Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et \r ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper \r non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. \r Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium \r convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat \r quam. Sed eleifend ligula ut nibh tincidunt blandit.\r \r Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. \r Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus.<br> \r Nulla ac dapibus justo. Phasellus ac iaculis arcu. Vestibulum nec risus sit amet ante lacinia iaculis. In rhoncus quam elit,\r porttitor consectetur lacus convallis quis. <br>Donec a consequat augue. Integer pulvinar gravida metus eu sodales.\r ";

$img_single1 = "/img/imagem.jpg";

$stmt1 = $conn->prepare("INSERT INTO single (titulo_single, conteudo_single, img_single) ".
                       "VALUES (:titulo_single1, :conteudo_single1, :img_single1);");
$stmt1->bindParam(":titulo_single1",$titulo_single1);
$stmt1->bindParam(":conteudo_single1",$conteudo_single1);
$stmt1->bindParam(":img_single1",$img_single1);
$stmt1->execute();

echo " - OK\n";

echo "Inserindo dados da pagina Empresa";

$titulo_single2 = "Titulo da Pagina Empresa";
$conteudo_single2 = "<h4>Conteudo da pagina Empresa</h4>Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris. Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat quam. Sed eleifend ligula ut nibh tincidunt blandit. Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus.";
$img_single2 = "/img/garantia.png";

$stmt2 = $conn->prepare("INSERT INTO single (titulo_single, conteudo_single, img_single) ".
                       "VALUES (:titulo_single2, :conteudo_single2, :img_single2);");
$stmt2->bindParam(":titulo_single2",$titulo_single2);
$stmt2->bindParam(":conteudo_single2",$conteudo_single2);
$stmt2->bindParam(":img_single2",$img_single2);
$stmt2->execute();

echo " - OK\n";

echo "Inserindo dados da pagina Produtos";

$titulo_single3 = "Titulo da Pagina Produtos";
$conteudo_single3 = "<h4>Conteudo da pagina Produtos</h4>Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris. Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat quam. Sed eleifend ligula ut nibh tincidunt blandit. Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus.";
$img_single3 = "/img/zaggmateipadcase.jpg";

$stmt3 = $conn->prepare("INSERT INTO single (titulo_single, conteudo_single, img_single) ".
                       "VALUES (:titulo_single3, :conteudo_single3, :img_single3);");
$stmt3->bindParam(":titulo_single3",$titulo_single3);
$stmt3->bindParam(":conteudo_single3",$conteudo_single3);
$stmt3->bindParam(":img_single3",$img_single3);
$stmt3->execute();

echo " - OK\n";

echo "Inserindo dados da pagina Serviços";

$titulo_single4 = "Titulo da Pagina Serviços";
$conteudo_single4 = "<h4>Conteudo da pagina Serviços</h4>Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris. Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat quam. Sed eleifend ligula ut nibh tincidunt blandit. Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus.";
$img_single4 = "/img/transparencia.jpg";

$stmt4 = $conn->prepare("INSERT INTO single (titulo_single, conteudo_single, img_single) ".
                       "VALUES (:titulo_single4, :conteudo_single4, :img_single4);");
$stmt4->bindParam(":titulo_single4",$titulo_single4);
$stmt4->bindParam(":conteudo_single4",$conteudo_single4);
$stmt4->bindParam(":img_single4",$img_single4);
$stmt4->execute();

echo " - OK\n";

echo '#### Concluído ####';