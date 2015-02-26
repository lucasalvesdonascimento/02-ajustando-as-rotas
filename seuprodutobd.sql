-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/02/2015 às 01:08
-- Versão do servidor: 5.6.22-log
-- Versão do PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `seuprodutobd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `single`
--

CREATE TABLE IF NOT EXISTS `single` (
  `id_single` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_single` varchar(100) NOT NULL,
  `conteudo_single` longtext NOT NULL,
  `img_single` varchar(100) NOT NULL,
  PRIMARY KEY (`id_single`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `single`
--

INSERT INTO `single` (`id_single`, `titulo_single`, `conteudo_single`, `img_single`) VALUES
(1, 'Titulo da Pagina Home', '<h4>Conteudo da pagina home</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque tristique facilisis.\r     Suspendisse ultricies vestibulum felis, id vestibulum lorem tincidunt eu. Suspendisse porta posuere aliquet. \r <br>    Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, \r     fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt \r     varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula \r     hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. \r     Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. \r     Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris.\r \r Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. \r Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. \r Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et \r ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper \r non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. \r Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium \r convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat \r quam. Sed eleifend ligula ut nibh tincidunt blandit.\r \r Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. \r Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus.<br> \r Nulla ac dapibus justo. Phasellus ac iaculis arcu. Vestibulum nec risus sit amet ante lacinia iaculis. In rhoncus quam elit,\r porttitor consectetur lacus convallis quis. <br>Donec a consequat augue. Integer pulvinar gravida metus eu sodales.\r ', '/img/eficiencia.jpg'),
(2, 'Titulo da Pagina Empresa', '<h4>Conteudo da pagina Empresa</h4>Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris. Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat quam. Sed eleifend ligula ut nibh tincidunt blandit. Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus.', '/img/garantia.png'),
(3, 'Titulo da Pagina Produtos', '<h4>Conteudo da pagina Produtos</h4>Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris. Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat quam. Sed eleifend ligula ut nibh tincidunt blandit. Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus.', '/img/zaggmateipadcase.jpg'),
(4, 'Titulo da Pagina Serviços', '<h4>Conteudo da pagina Serviços</h4>Donec consequat pellentesque quam, eu luctus nunc pharetra a. Quisque et ultricies felis. Nunc massa quam, fermentum cursus tincidunt in, consequat id velit. Maecenas ac fringilla elit. Nam non vestibulum risus. Donec tincidunt varius erat, facilisis gravida sem luctus in. Pellentesque sed lectus velit. Sed non mauris quis ligula hendrerit placerat eu et mauris. Suspendisse nunc quam, scelerisque a scelerisque id, fermentum sit amet ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin posuere est eget lectus finibus mattis. Vestibulum ac congue velit, non pulvinar felis. Cras purus dolor, cursus sit amet porta a, auctor nec mauris. Sed laoreet, erat ac volutpat vulputate, eros sapien laoreet ligula, sit amet egestas dolor ex et justo. Nulla ac leo sit amet tellus tincidunt bibendum. Curabitur ac ultricies justo. In in sollicitudin odio. Suspendisse potenti. Quisque ac posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus in condimentum enim, non semper orci. Aenean neque metus, ullamcorper non turpis vitae, mattis mattis urna. Curabitur efficitur felis vitae neque auctor, sed sodales nulla aliquam. Proin sollicitudin mattis ipsum a aliquet. Morbi finibus quis velit ac gravida. Vestibulum placerat, eros et pretium convallis, mi nunc fringilla diam, et fermentum elit nunc eu quam. Curabitur sit amet dui nulla. Phasellus ut volutpat quam. Sed eleifend ligula ut nibh tincidunt blandit. Integer bibendum dictum nisl a facilisis. Donec non lobortis nulla, et iaculis odio. Phasellus vitae sollicitudin ex. Suspendisse posuere maximus varius. Nunc dignissim pretium risus imperdiet accumsan. Sed venenatis ullamcorper maximus.', '/img/transparencia.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
