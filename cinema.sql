-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2016 às 14:57
-- Versão do servidor: 5.1.54-community
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assento`
--

CREATE TABLE IF NOT EXISTS `assento` (
  `COD_ASSENTO` bigint(20) unsigned NOT NULL,
  `COD_SALA` bigint(20) unsigned NOT NULL,
  `LINHA` int(255) NOT NULL,
  `COLUNA` int(255) NOT NULL,
  `OCUPADO` tinyint(1) NOT NULL,
  PRIMARY KEY (`COD_ASSENTO`),
  UNIQUE KEY `COD_ASSENTO` (`COD_ASSENTO`),
  KEY `fk_sala_01` (`COD_SALA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE IF NOT EXISTS `filme` (
  `COD_FILME` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(255) NOT NULL,
  `DURACAO` varchar(255) NOT NULL,
  `GENERO` varchar(100) NOT NULL,
  `DATA_INICIO` date NOT NULL,
  `DATA_TERMINO` date NOT NULL,
  `CLASSIFICACAO` varchar(50) NOT NULL,
  `SINOPSE` text NOT NULL,
  `LINK_VIDEO` varchar(255) NOT NULL,
  `TIPO_FILME` varchar(100) NOT NULL,
  `CAMINHO_IMAGEM` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`COD_FILME`),
  UNIQUE KEY `COD_FILME` (`COD_FILME`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`COD_FILME`, `TITULO`, `DURACAO`, `GENERO`, `DATA_INICIO`, `DATA_TERMINO`, `CLASSIFICACAO`, `SINOPSE`, `LINK_VIDEO`, `TIPO_FILME`, `CAMINHO_IMAGEM`) VALUES
(1, 'O senhor das batatas', '2 Horas', 'Aventura', '2016-11-07', '2016-11-10', '18', 'Greg vai em busca da batata perdida', 'greg-e-os-batutinhas.com', 'Dublado', 'imgrecebida/3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `COD_FUNCIONARIO` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) NOT NULL,
  `LOGIN` varchar(50) NOT NULL,
  `SENHA` varchar(50) NOT NULL,
  `PERFIL` varchar(50) NOT NULL,
  PRIMARY KEY (`COD_FUNCIONARIO`),
  UNIQUE KEY `COD_FUNCIONARIO` (`COD_FUNCIONARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`COD_FUNCIONARIO`, `NOME`, `LOGIN`, `SENHA`,`PERFIL`) VALUES
(1, 'Vitor', 'adm', 'adm', 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingresso`
--

CREATE TABLE IF NOT EXISTS `ingresso` (
  `COD_INGRESSO` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `COD_SESSAO` bigint(20) unsigned NOT NULL,
  `COD_FUNCIONARIO` bigint(20) unsigned NOT NULL,
  `TIPO_ENTRADA` varchar(50) NOT NULL,
  `VALOR_VENDA` varchar(50) NOT NULL,
  `VENDIDO` tinyint(1) NOT NULL,
  `DATA` date NOT NULL,
  `VALOR_REAL` varchar(100) NOT NULL,
  PRIMARY KEY (`COD_INGRESSO`),
  UNIQUE KEY `COD_INGRESSO` (`COD_INGRESSO`),
  KEY `fk_ingresso_01` (`COD_SESSAO`),
  KEY `fk_ingresso_02` (`COD_FUNCIONARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `COD_SALA` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NU_SALA` varchar(100) DEFAULT NULL,
  `NUMERO_LUGARES` int(255) NOT NULL,
  PRIMARY KEY (`COD_SALA`),
  UNIQUE KEY `COD_SALA` (`COD_SALA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE IF NOT EXISTS `sessao` (
  `COD_SESSAO` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `COD_SALA` bigint(20) unsigned NOT NULL,
  `COD_FILME` bigint(20) unsigned NOT NULL,
  `HORA_INICIO` time NOT NULL,
  `HORA_FIM` time NOT NULL,
  `DATA` date NOT NULL,
  PRIMARY KEY (`COD_SESSAO`),
  UNIQUE KEY `COD_SESSAO` (`COD_SESSAO`),
  KEY `fk_sessao_01` (`COD_SALA`),
  KEY `fk_sessao_02` (`COD_FILME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD CONSTRAINT `fk_ingresso_02` FOREIGN KEY (`COD_FUNCIONARIO`) REFERENCES `funcionario` (`COD_FUNCIONARIO`),
  ADD CONSTRAINT `fk_ingresso_01` FOREIGN KEY (`COD_SESSAO`) REFERENCES `sessao` (`COD_SESSAO`);

--
-- Limitadores para a tabela `sala`
--
ALTER TABLE `assento`
  ADD CONSTRAINT `fk_sala_01` FOREIGN KEY (`COD_SALA`) REFERENCES `sala` (`COD_SALA`);

--
-- Limitadores para a tabela `sessao`
--
ALTER TABLE `sessao`
  ADD CONSTRAINT `fk_sessao_02` FOREIGN KEY (`COD_FILME`) REFERENCES `filme` (`COD_FILME`),
  ADD CONSTRAINT `fk_sessao_01` FOREIGN KEY (`COD_SALA`) REFERENCES `sala` (`COD_SALA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
