
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 30/05/2017 às 19:19:13
-- Versão do Servidor: 10.0.28-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u110441720_appdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `idMatch` int(25) NOT NULL AUTO_INCREMENT,
  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nomeUsuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomeDesejado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idMatch`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `match`
--

INSERT INTO `match` (`idMatch`, `data_hora`, `nomeUsuario`, `nomeDesejado`) VALUES
(1, '2017-05-26 16:52:59', 'Jorge e Matheus ', 'Julia Roberts'),
(2, '2017-05-26 16:53:37', 'Julia Roberts', 'Jorge e Matheus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `online`
--

CREATE TABLE IF NOT EXISTS `online` (
  `idOnline` int(25) NOT NULL AUTO_INCREMENT,
  `dataHora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preferencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idOnline`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=102 ;

--
-- Extraindo dados da tabela `online`
--

INSERT INTO `online` (`idOnline`, `dataHora`, `nome`, `genero`, `preferencia`, `imagem`) VALUES
(1, '2017-05-21 17:54:35', 'Jorge e Matheus', 'h', 'm', '1495389295.jpg'),
(2, '2017-05-21 17:57:30', 'Jorge e Matheus', 'h', 'm', '1495389470.jpg'),
(3, '2017-05-21 17:58:06', 'Jorge e Matheus', 'h', 'm', '1495389506.jpg'),
(4, '2017-05-21 17:58:33', 'Jorge e Matheus', 'h', 'm', '1495389533.jpg'),
(5, '2017-05-21 17:59:17', 'Jorge e Matheus', 'h', 'm,mt', '1495389577.jpg'),
(6, '2017-05-21 18:00:35', 'Maria da Silva', 'm', 'h', ''),
(7, '2017-05-21 18:00:45', 'Jorge e Matheus', 'h', 'm', '1495389665.jpg'),
(8, '2017-05-21 18:02:05', 'Rosicreide', '', 'mt', '1495389745.jpg'),
(9, '2017-05-21 18:03:15', 'Rosicreide', '', 'mt', '1495389815.jpg'),
(10, '2017-05-21 18:04:33', 'Rosicreide', '', 'mt', '1495389893.jpg'),
(11, '2017-05-21 18:09:40', 'Rosicreide', '', 'm', '1495390200.jpg'),
(12, '2017-05-21 18:14:03', 'Rosicreide', '', 'mt', '1495390463.jpg'),
(13, '2017-05-21 18:14:47', 'Rosicreide', '', 'mt', '1495390507.jpg'),
(14, '2017-05-21 18:15:41', 'Rosicreide', '', 'mt', '1495390560.jpg'),
(15, '2017-05-21 18:16:16', 'Rosicreide', '', 'mt', '1495390596.jpg'),
(16, '2017-05-21 18:16:22', 'Rosicreide', '', 'mt', '1495390601.jpg'),
(17, '2017-05-21 18:17:11', 'Rosicreide', '', '', '1495390651.jpg'),
(18, '2017-05-21 18:19:20', 'Rosicreide', 'mt', '', '1495390780.jpg'),
(19, '2017-05-21 18:19:41', 'Rosicreide', 'mt', 'mt', '1495390801.jpg'),
(20, '2017-05-21 18:22:34', 'Rosicreide', 'mt', 'mt', '1495390974.jpg'),
(21, '2017-05-21 18:23:06', 'Rosicreide', 'mt', 'mt', '1495391006.jpg'),
(22, '2017-05-21 18:23:11', 'Rosicreide', 'mt', '', '1495391011.jpg'),
(23, '2017-05-21 18:23:37', 'Rosicreide', 'mt', 'mt', '1495391037.jpg'),
(24, '2017-05-21 18:24:29', 'Rosicreide', 'mt', 'h', '1495391089.jpg'),
(25, '2017-05-21 18:27:14', 'Rosicreide', 'mt', 'h', '1495391254.jpg'),
(26, '2017-05-21 18:31:06', 'Fábio Junior Teste', 'h', 'mt', ''),
(27, '2017-05-21 18:31:36', 'Rosicreide', 'mt', 'mt', '1495391516.jpg'),
(28, '2017-05-21 18:33:37', 'Rosicreide', 'mt', 'h', '1495391637.jpg'),
(29, '2017-05-21 18:34:12', 'Rosicreide', 'mt', 'h', '1495391672.jpg'),
(30, '2017-05-22 01:36:32', 'Rosicreide', 'mt', 'h', '1495417012.jpg'),
(31, '2017-05-22 19:43:30', 'Jorge e Matheus', 'm', 'm', '1495482230.jpg'),
(32, '2017-05-22 19:50:26', 'Jorge e Matheus', 'm', 'mt', '1495482646.jpg'),
(33, '2017-05-22 19:51:24', 'Jorge e Matheus', 'm', 'm', '1495482704.jpg'),
(34, '2017-05-22 19:51:34', 'Jorge e Matheus', 'm', 'm', '1495482714.jpg'),
(35, '2017-05-22 19:51:58', 'Jorge e Matheus', 'm', 'nb', '1495482738.jpg'),
(36, '2017-05-22 19:52:13', 'Jorge e Matheus', 'm', 'h', '1495482752.jpg'),
(37, '2017-05-22 19:52:18', 'Jorge e Matheus', 'm', 'mt', '1495482758.jpg'),
(38, '2017-05-22 19:52:23', 'Jorge e Matheus', 'm', 'm', '1495482763.jpg'),
(39, '2017-05-22 19:54:50', 'Roany Mor', 'm', 'h', '1495482910.jpg'),
(40, '2017-05-22 20:10:24', 'Mary Lane', 'ht', 'ht', '1495483844.jpg'),
(41, '2017-05-22 20:42:56', 'Roany Mor', 'm', 'h', '1495485796.jpg'),
(42, '2017-05-22 20:43:03', 'Roany Mor', 'm', 'mt', '1495485803.jpg'),
(43, '2017-05-22 20:43:08', 'Roany Mor', 'm', 'm', '1495485808.jpg'),
(44, '2017-05-22 20:43:40', 'Roany Mor', 'm', 'm', '1495485840.jpg'),
(45, '2017-05-22 20:44:47', 'Roany Mor', 'm', 'm', '1495485907.jpg'),
(46, '2017-05-23 13:11:07', 'Jorge e Matheus', 'm', 'm', '1495545087.jpg'),
(47, '2017-05-23 13:12:28', 'Jorge e Matheus', 'm', 'm', '1495545168.jpg'),
(48, '2017-05-23 13:19:04', 'Jorge e Matheus', 'm', 'm', '1495545564.jpg'),
(49, '2017-05-23 13:19:36', 'Jorge e Matheus', 'm', 'm', '1495545597.jpg'),
(50, '2017-05-23 13:29:34', 'Jorge e Matheus', 'm', 'm', '1495546194.jpg'),
(51, '2017-05-23 20:59:03', 'Jorge e Matheus', 'm', 'm', '1495573163.jpg'),
(52, '2017-05-23 23:42:03', 'Wesley', 'Array', 'm', '1495582943.jpg'),
(100, '2017-05-30 14:04:23', 'Jorge e Matheus', 'h', 'm', '1496153084.jpg'),
(99, '2017-05-30 14:01:45', 'Jorge e Matheus', 'h', 'm', '1496152926.jpg'),
(98, '2017-05-30 01:14:44', 'Jorge e Matheus', 'h', 'm', '1496106905.jpg'),
(97, '2017-05-30 01:07:38', 'Jorge e Matheus', 'h', 'm', '1496106480.jpg'),
(96, '2017-05-30 00:46:20', 'Jorge e Matheus', 'h', 'm', '1496105201.jpg'),
(95, '2017-05-27 22:05:17', 'Jorge e Matheus', 'h', 'm', '1495922737.jpg'),
(94, '2017-05-27 16:02:12', 'Jorge e Matheus', 'h', 'm,mt,h', '1495900953.jpg'),
(93, '2017-05-27 01:57:02', 'Jorge e Matheus', 'h', 'm', '1495850243.jpg'),
(92, '2017-05-27 01:12:11', 'Jorge e Matheus', 'h', 'm', '1495847552.jpg'),
(63, '2017-05-24 16:34:42', 'Jorge e Matheus', 'm', 'm', '1495643703.jpg'),
(64, '2017-05-24 16:36:35', 'Jorge e Matheus', 'm', 'mt', '1495643816.jpg'),
(65, '2017-05-24 16:37:13', 'Jorge e Matheus', 'm', 'mt', '1495643853.jpg'),
(66, '2017-05-24 16:37:22', 'Jorge e Matheus', 'm', 'm', '1495643863.jpg'),
(67, '2017-05-24 16:45:14', 'Jorge e Matheus', 'h', 'm', '1495644335.jpg'),
(68, '2017-05-24 16:55:50', 'Jorge e Matheus', 'h', 'mt', '1495644971.jpg'),
(69, '2017-05-24 16:56:08', 'Jorge e Matheus', 'h', 'h', '1495644988.jpg'),
(70, '2017-05-24 16:56:13', 'Jorge e Matheus', 'h', 'ht', '1495644993.jpg'),
(71, '2017-05-24 17:42:53', 'Jorge e Matheus', 'h', 'm', '1495647793.jpg'),
(72, '2017-05-24 17:47:54', 'Jorge e Matheus', 'h', 'm', '1495648094.jpg'),
(73, '2017-05-24 17:58:11', 'Jorge e Matheus', 'h', 'm', '1495648711.jpg'),
(74, '2017-05-24 18:01:28', 'Jorge e Matheus', 'h', 'm', '1495648909.jpg'),
(75, '2017-05-24 18:04:02', 'Sandy Evelyn', 'Array', 'h', '1495649062.jpg'),
(76, '2017-05-24 18:04:48', 'Sandy Evelyn', 'm', 'h', '1495649108.jpg'),
(77, '2017-05-24 18:09:42', 'Sandy Evelyn', 'm', 'h', '1495649403.jpg'),
(78, '2017-05-24 18:14:15', 'Flávia Lanes', 'Array', 'h', '1495649676.jpg'),
(79, '2017-05-24 18:19:02', 'Safadao', 'Array', 'm', '1495649962.jpg'),
(80, '2017-05-24 18:20:18', 'Shirley Videira', 'Array', 'h', '1495650038.jpg'),
(81, '2017-05-24 18:22:16', 'Wes', 'Array', 'm,mt', '1495650156.jpg'),
(82, '2017-05-25 03:04:03', 'Mary Lane', 'ht', 'h', '1495681463.jpg'),
(83, '2017-05-25 03:19:34', 'Jorge e Matheus', 'h', 'm', '1495682394.jpg'),
(84, '2017-05-25 03:21:54', 'Jorge e Matheus', 'h', 'm', '1495682529.jpg'),
(85, '2017-05-25 03:35:34', 'Jorge e Matheus', 'h', 'm', '1495683354.jpg'),
(86, '2017-05-25 03:37:11', 'Jorge e Matheus', 'h', 'm', '1495683452.jpg'),
(87, '2017-05-25 03:39:27', 'Jorge e Matheus', 'h', 'm', '1495683587.jpg'),
(88, '2017-05-25 20:38:01', 'Jorge e Matheus', 'h', 'm', '1495744701.jpg'),
(89, '2017-05-26 00:59:11', 'Mary Anne', 'm', 'h', '1495760372.jpg'),
(90, '2017-05-26 01:11:27', 'Pickovisky', 'h', 'm', '1495761108.jpg'),
(91, '2017-05-26 16:25:20', 'Jorge e Matheus', 'h', 'm', '1495815941.jpg'),
(101, '2017-05-30 14:09:16', 'Jorge e Matheus', 'h', 'm', '1496153375.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` int(25) NOT NULL,
  `nascimento` date NOT NULL,
  `idade` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `foto` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `nascimento`, `idade`, `genero`, `foto`) VALUES
(2, 'Jorge e Matheus', 'fodase@gmail.com', 12345, '1970-01-01', '47', 'h', ''),
(3, 'Lucia Andersson', 'teste@testao.com', 12345, '1970-01-01', '28', 'nb', ''),
(4, 'Rosicreide', 'rosi@email.com', 123456, '1970-01-01', '28', 'mt', ''),
(5, 'Josiedsa', 'josi@gmail.com', 12345, '1970-01-01', '28', 'ht', ''),
(6, 'Patricia Wonderful', 'paty@email.com', 123456, '1970-01-01', '28', 'nb', ''),
(7, 'Roany Mor', 'roro@gmail.com', 12345, '1970-01-01', '28', 'm', ''),
(8, 'Roany Mor', 'roro@gmail.com', 23423432, '1970-01-01', '28', 'm', ''),
(9, 'Sara Jennifer', 'sj@email.com', 123456, '0000-00-00', '28', 'mt', ''),
(10, 'Mary Lane', 'ml@gmail.com', 123456, '1970-01-01', '28', 'ht', ''),
(11, 'Katya Sanders', 'ks@gmail.com', 123456, '1970-01-01', '28', 'ht', ''),
(12, 'Damaris Bright', 'damaris@gmail.com', 123456, '1970-01-01', '28', 'm', ''),
(13, 'Maricreydson', 'marycr@gmail.com', 123123123, '1995-12-18', '28', 'nb', ''),
(14, 'Soraya Lala', 'Lalal@email.com', 12345, '1995-12-18', '28', 'h', ''),
(15, 'Bruna Ikeda', 'harumikeda@gmail.com', 0, '1995-06-02', '28', 'Array', ''),
(16, 'Wesley', 'wesley@email.com', 123456, '1991-10-08', '28', 'Array', ''),
(17, 'Sandy Evelyn', 'sandy@gmail.com', 123456, '1974-06-23', '28', 'm', ''),
(18, 'Flávia Lanes', 'flavia@gmail.com', 123456, '1989-07-30', '28', 'Array', ''),
(19, 'Safadao', 'safadao@email.com', 0, '1991-10-08', '28', 'Array', ''),
(20, 'Isa', 'isaquelima.sp@gmail.com', 0, '1970-01-01', '28', 'Array', ''),
(21, 'Shirley Videira', 'shirley@gmail.com', 123456, '1980-12-12', '28', 'Array', ''),
(22, 'Wes', 'Wes@email.com', 0, '1991-10-08', '28', 'Array', ''),
(23, 'Marianne Lopes', 'mlopes@email.com', 123456, '1990-08-10', '28', 'm', ''),
(24, 'Patricia Sousa', 'paty@gmail.com', 12345, '1988-08-23', '28', 'mt', ''),
(25, 'Mary Anne', 'mary@gmail.com', 123456, '1995-05-20', '22', 'm', ''),
(26, 'Pickovisky', 'jp@email.com', 123456, '1987-05-11', '30', 'h', ''),
(27, 'Mario', 'supermario-92@hotmail.com', 12345, '1970-01-01', '', 'h', ''),
(28, 'Mario', 'supermario-92@hotmail.com', 12345, '1970-01-01', '', 'h', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
