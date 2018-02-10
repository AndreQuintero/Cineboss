-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2016 às 18:13
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assento`
--

CREATE TABLE `assento` (
  `COD_ASSENTO` bigint(20) UNSIGNED NOT NULL,
  `COD_SALA` bigint(20) UNSIGNED NOT NULL,
  `LINHA` int(255) NOT NULL,
  `COLUNA` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assento`
--

INSERT INTO `assento` (`COD_ASSENTO`, `COD_SALA`, `LINHA`, `COLUNA`) VALUES
(100, 1, 0, 0),
(101, 1, 1, 0),
(102, 1, 2, 0),
(103, 1, 3, 0),
(104, 1, 4, 0),
(105, 1, 5, 0),
(106, 1, 6, 0),
(107, 1, 7, 0),
(108, 1, 8, 0),
(109, 1, 9, 0),
(110, 1, 0, 1),
(111, 1, 1, 1),
(112, 1, 2, 1),
(113, 1, 3, 1),
(114, 1, 4, 1),
(115, 1, 5, 1),
(116, 1, 6, 1),
(117, 1, 7, 1),
(118, 1, 8, 1),
(119, 1, 9, 1),
(120, 1, 0, 2),
(121, 1, 1, 2),
(122, 1, 2, 2),
(123, 1, 3, 2),
(124, 1, 4, 2),
(125, 1, 5, 2),
(126, 1, 6, 2),
(127, 1, 7, 2),
(128, 1, 8, 2),
(129, 1, 9, 2),
(130, 1, 0, 3),
(131, 1, 1, 3),
(132, 1, 2, 3),
(133, 1, 3, 3),
(134, 1, 4, 3),
(135, 1, 5, 3),
(136, 1, 6, 3),
(137, 1, 7, 3),
(138, 1, 8, 3),
(139, 1, 9, 3),
(140, 1, 0, 4),
(141, 1, 1, 4),
(142, 1, 2, 4),
(143, 1, 3, 4),
(144, 1, 4, 4),
(145, 1, 5, 4),
(146, 1, 6, 4),
(147, 1, 7, 4),
(148, 1, 8, 4),
(149, 1, 9, 4),
(150, 1, 0, 5),
(151, 1, 1, 5),
(152, 1, 2, 5),
(153, 1, 3, 5),
(154, 1, 4, 5),
(155, 1, 5, 5),
(156, 1, 6, 5),
(157, 1, 7, 5),
(158, 1, 8, 5),
(159, 1, 9, 5),
(160, 1, 0, 6),
(161, 1, 1, 6),
(162, 1, 2, 6),
(163, 1, 3, 6),
(164, 1, 4, 6),
(165, 1, 5, 6),
(166, 1, 6, 6),
(167, 1, 7, 6),
(168, 1, 8, 6),
(169, 1, 9, 6),
(170, 1, 0, 7),
(171, 1, 1, 7),
(172, 1, 2, 7),
(173, 1, 3, 7),
(174, 1, 4, 7),
(175, 1, 5, 7),
(176, 1, 6, 7),
(177, 1, 7, 7),
(178, 1, 8, 7),
(179, 1, 9, 7),
(180, 1, 0, 8),
(181, 1, 1, 8),
(182, 1, 2, 8),
(183, 1, 3, 8),
(184, 1, 4, 8),
(185, 1, 5, 8),
(186, 1, 6, 8),
(187, 1, 7, 8),
(188, 1, 8, 8),
(189, 1, 9, 8),
(190, 1, 0, 9),
(191, 1, 1, 9),
(192, 1, 2, 9),
(193, 1, 3, 9),
(194, 1, 4, 9),
(195, 1, 5, 9),
(196, 1, 6, 9),
(197, 1, 7, 9),
(198, 1, 8, 9),
(199, 1, 9, 9),
(1010, 1, 10, 0),
(1100, 1, 0, 10),
(1101, 1, 1, 10),
(1102, 1, 2, 10),
(1103, 1, 3, 10),
(1104, 1, 4, 10),
(1105, 1, 5, 10),
(1106, 1, 6, 10),
(1107, 1, 7, 10),
(1108, 1, 8, 10),
(1109, 1, 9, 10),
(1110, 1, 10, 1),
(1210, 1, 10, 2),
(1310, 1, 10, 3),
(1410, 1, 10, 4),
(1510, 1, 10, 5),
(1610, 1, 10, 6),
(1710, 1, 10, 7),
(1810, 1, 10, 8),
(1910, 1, 10, 9),
(11010, 1, 10, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `assento_sessao`
--

CREATE TABLE `assento_sessao` (
  `COD_ASSENTO_SESSAO` bigint(20) UNSIGNED NOT NULL,
  `COD_SESSAO` bigint(20) UNSIGNED NOT NULL,
  `COD_ASSENTO` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assento_sessao`
--

INSERT INTO `assento_sessao` (`COD_ASSENTO_SESSAO`, `COD_SESSAO`, `COD_ASSENTO`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, 2, NULL),
(4, 2, NULL),
(5, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `COD_FILME` bigint(20) UNSIGNED NOT NULL,
  `TITULO` varchar(255) NOT NULL,
  `DURACAO` varchar(255) NOT NULL,
  `GENERO` varchar(100) NOT NULL,
  `DATA_INICIO` date NOT NULL,
  `DATA_TERMINO` date NOT NULL,
  `CLASSIFICACAO` varchar(50) NOT NULL,
  `SINOPSE` text NOT NULL,
  `LINK_VIDEO` varchar(255) NOT NULL,
  `TIPO_FILME` varchar(100) NOT NULL,
  `CAMINHO_IMAGEM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`COD_FILME`, `TITULO`, `DURACAO`, `GENERO`, `DATA_INICIO`, `DATA_TERMINO`, `CLASSIFICACAO`, `SINOPSE`, `LINK_VIDEO`, `TIPO_FILME`, `CAMINHO_IMAGEM`) VALUES
(1, 'Os imorriveis', '2 Horas', 'Aventura', '2016-12-07', '2016-12-20', '18', 'Sadao e seus parceiros são conhecidos como os imorriveis e nada os detem, até aparecer seu pai Mestre Claudio Haruo que desaparecido a muito tempo se tornou do mal e agora vive a dar aulas infiltrado de banco de dados sem perceber Sadao cai em uma armadilha quando fica de DP na materia de seu proprio pai, logo Haruo mostra sua verdadeira forma e os ataca.', 'link', 'Dublado', '../../imgrecebida/sadao.jpg'),
(2, 'Star Wars: Rogue One', '2 horas', 'Ficção', '2016-12-17', '2016-12-31', 'Livre', 'No primeiro filme derivado da franquia Star Wars, guerreiros rebeldes partem em missão para roubar os planos da Estrela da Morte e trazer nova esperança para a galáxia.', 'https://www.youtube.com/embed/sC9abcLLQpI', 'Dublado', '../../imgrecebida/star wars.jpg'),
(3, 'Animais Fantástico e Onde Habitam', '2 horas', 'Ficção', '2016-11-17', '2016-12-31', 'Livre', 'O excêntrico magizoologista Newt Scamander (Eddie Redmayne) chega à cidade de Nova York com sua maleta, um objeto mágico onde ele carrega uma coleção de fantásticos animais do mundo da magia que coletou durante as suas viagens. Em meio a comunidade bruxa norte-america que teme muito mais a exposição aos trouxas do que os ingleses, Newt precisará usar suas habilidades e conhecimentos para capturar uma variedade de criaturas que acabam saindo da sua maleta.', 'https://www.youtube.com/watch?v=HRdIQ5oLHG4', 'Dublado', '../../imgrecebida/animais.jpg'),
(4, 'Anjos da Noite', '1 Hora e 31 minutos', 'Ação', '2016-11-07', '2016-12-10', '18', 'Selene (Kate Beckinsale) é uma guerreira vampira que luta para acabar com a guerra eterna entre o clã Lycan de lobisomens sanguinários e a facção de vampiros que a traiu. Quando um novo levante parece tomar forma, ela irá utilizar sua influência e relacionamento com ambas as partes para negociar um cessar fogo.', 'https://www.youtube.com/watch?v=VQiUz_d7Z0M', 'Dublado', '../../imgrecebida/anjos.jpg'),
(5, 'Doutor Estranho', '1 Hora e 55 minutos', 'Ação', '2016-11-07', '2016-12-10', '12', 'Stephen Strange (Benedict Cumberbatch) leva uma vida bem sucedida como neurocirurgião. Sua vida muda completamente quando sofre um acidente de carro e fica com as mãos debilitadas. Devido a falhas da medicina tradicional, ele parte para um lugar inesperado em busca de cura e esperança, um misterioso enclave chamado Kamar-Taj, localizado em Katmandu. Lá descobre que o local não é apenas um centro medicinal, mas também a linha de frente contra forças malignas místicas que desejam destruir nossa realidade. Ele passa a treinar e adquire poderes mágicos, mas precisa decidir se vai voltar para sua vida comum ou defender o mundo.', 'https://www.youtube.com/watch?v=YUfWrIcX4zw', 'Dublado', '../../imgrecebida/estranho.jpg'),
(6, 'Jack Reacher', '1 Hora 59 minutos', 'Ação', '2016-12-01', '2016-12-30', '16', 'Jack Reacher (Tom Cruise) retorna à base militar onde serviu na Virgínia, onde pretende levar uma major local, Susan Turner (Cobie Smulders), para jantar. Só que, logo ao chegar, descobre que ela está presa, acusada de ter vazado informações confidenciais do exército. Estranhando a situação, Reacher resolve iniciar uma investigação por conta própria e logo descobre que o caso é bem mais pessoal do que imaginava.', 'https://www.youtube.com/watch?v=vQ4FYe9B7Qg', 'Dublado', '../../imgrecebida/Reacher.jpg'),
(7, 'O Quarto dos Esquecidos', '1 Hora 40 minutos', 'Terror', '2016-12-03', '2016-12-20', '16', 'Dana (Kate Beckinsale) e David (Mel Raido) formam um casal marcado por um trauma recente. Eles decidem sair da cidade grande e compram um casarão abandonado numa área rural, onde vão morar junto do filho Lucas (Duncan Joiner). Dana pretende usar seus conhecimentos como arquiteta para reconstruir o lugar e superar as dores passadas e assim descobre a existência de um quarto escondido, que não constava na planta.', 'https://www.youtube.com/watch?v=pviCj8w2dGI', 'Dublado', '../../imgrecebida/quarto.jpg'),
(8, 'As Aventuras de Robinson Crusoé', '2 Horas', 'Aventura', '2016-11-07', '2016-12-10', 'Livre', 'Em uma pequena e exótica ilha, Tuesday, um papagaio pensa que viver naquele paraíso é muito pouco para ele - e está amadurecendo seu desejo de conhecer o mundo. Depois de uma violenta tempestade, a ilha recebe um refugiado: Robinson Crusoe. O que começa com um jogo de interesses, já que o pássaro vê no rapaz um bilhete para fora da ilha, e o rapaz, em Tuesday, uma forma de sobreviver naquele lugar, vai se desenvolver para uma profunda relação de amizade e companheirismo - que vai ensinar aos dois o poder da parceria.', 'https://www.youtube.com/watch?v=rakWk-zVmB4', 'Dublado', '../../imgrecebida/rob.jpg'),
(9, 'O desaparecimento de Eduardo', '1 Hora 2 minutos', 'Aventura', '2016-12-07', '2016-12-20', '10', 'Eduardo desaparece de sua faculdade e nunca mais retorna, depois de subir em sua moto pela ultima vez, logo seus amigos André, William, Chelles e Greg vão atrás para descobrir o paradeiro de seu amigo', 'link', 'Dublado', '../../imgrecebida/edu.jpg'),
(10, 'Andrélles, el cabron', '2 Horas', 'Aventura', '2016-12-07', '2016-12-20', '10', 'André tenta atravessa a nova fronteira totalmente fortificada dos EUA, mas logo percebe que seu presidente (não podemos citar nomes), não deixará fácil, logo ele percebeu que isso não foi uma boa ídeia', 'link', 'Dublado', '../../imgrecebida/andre.jpg'),
(11, 'Chelles, o meliante', '2 Horas', 'Aventura', '2016-12-07', '2016-12-10', '18', 'Chelles um menino perdido no mundo da criminalidade consegue encontrar seu ponto de paz em HTML e CSS e com isso agora tenta ganhar a vida, mas como tudo não é só alegria muitos Back-ends não demoram muito a quebrar seu layout', 'link', 'Dublado', '../../imgrecebida/chelles.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `COD_FUNCIONARIO` bigint(20) UNSIGNED NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `LOGIN` varchar(50) NOT NULL,
  `SENHA` varchar(50) NOT NULL,
  `PERFIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`COD_FUNCIONARIO`, `NOME`, `LOGIN`, `SENHA`, `PERFIL`) VALUES
(1, 'André Daltonico', 'adm', 'adm', 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingresso`
--

CREATE TABLE `ingresso` (
  `COD_INGRESSO` bigint(20) UNSIGNED NOT NULL,
  `COD_SESSAO` bigint(20) UNSIGNED NOT NULL,
  `COD_FUNCIONARIO` bigint(20) UNSIGNED NOT NULL,
  `TIPO_ENTRADA` varchar(50) NOT NULL,
  `VALOR_VENDA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ingresso`
--

INSERT INTO `ingresso` (`COD_INGRESSO`, `COD_SESSAO`, `COD_FUNCIONARIO`, `TIPO_ENTRADA`, `VALOR_VENDA`) VALUES
(4, 1, 1, '20', 'meia'),
(5, 2, 1, '5', 'meia'),
(7, 2, 1, '5', 'meia'),
(8, 2, 1, '20', 'meia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `COD_SALA` bigint(20) UNSIGNED NOT NULL,
  `NOME_SALA` varchar(100) DEFAULT NULL,
  `NUMERO_LUGARES` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`COD_SALA`, `NOME_SALA`, `NUMERO_LUGARES`) VALUES
(1, 'Sala 1', 100),
(2, '12', 144),
(3, 'Sala 5', 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE `sessao` (
  `COD_SESSAO` bigint(20) UNSIGNED NOT NULL,
  `COD_SALA` bigint(20) UNSIGNED NOT NULL,
  `COD_FILME` bigint(20) UNSIGNED NOT NULL,
  `HORA_INICIO` varchar(50) NOT NULL,
  `HORA_FIM` varchar(50) NOT NULL,
  `DATA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sessao`
--

INSERT INTO `sessao` (`COD_SESSAO`, `COD_SALA`, `COD_FILME`, `HORA_INICIO`, `HORA_FIM`, `DATA`) VALUES
(1, 1, 1, '14h3', '16h', '2016-12-22'),
(2, 3, 3, '16:00', '18:00', '2016-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assento`
--
ALTER TABLE `assento`
  ADD PRIMARY KEY (`COD_ASSENTO`),
  ADD UNIQUE KEY `COD_ASSENTO` (`COD_ASSENTO`),
  ADD KEY `fk_sala_01` (`COD_SALA`);

--
-- Indexes for table `assento_sessao`
--
ALTER TABLE `assento_sessao`
  ADD PRIMARY KEY (`COD_ASSENTO_SESSAO`),
  ADD KEY `COD_ASSENTO` (`COD_ASSENTO`),
  ADD KEY `COD_SESSAO` (`COD_SESSAO`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`COD_FILME`),
  ADD UNIQUE KEY `COD_FILME` (`COD_FILME`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`COD_FUNCIONARIO`),
  ADD UNIQUE KEY `COD_FUNCIONARIO` (`COD_FUNCIONARIO`);

--
-- Indexes for table `ingresso`
--
ALTER TABLE `ingresso`
  ADD PRIMARY KEY (`COD_INGRESSO`),
  ADD UNIQUE KEY `COD_INGRESSO` (`COD_INGRESSO`),
  ADD KEY `fk_ingresso_01` (`COD_SESSAO`),
  ADD KEY `fk_ingresso_02` (`COD_FUNCIONARIO`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`COD_SALA`),
  ADD UNIQUE KEY `COD_SALA` (`COD_SALA`);

--
-- Indexes for table `sessao`
--
ALTER TABLE `sessao`
  ADD PRIMARY KEY (`COD_SESSAO`),
  ADD UNIQUE KEY `COD_SESSAO` (`COD_SESSAO`),
  ADD KEY `fk_sessao_01` (`COD_SALA`),
  ADD KEY `fk_sessao_02` (`COD_FILME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assento_sessao`
--
ALTER TABLE `assento_sessao`
  MODIFY `COD_ASSENTO_SESSAO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `COD_FILME` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `COD_FUNCIONARIO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ingresso`
--
ALTER TABLE `ingresso`
  MODIFY `COD_INGRESSO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `COD_SALA` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sessao`
--
ALTER TABLE `sessao`
  MODIFY `COD_SESSAO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `assento`
--
ALTER TABLE `assento`
  ADD CONSTRAINT `fk_sala_01` FOREIGN KEY (`COD_SALA`) REFERENCES `sala` (`COD_SALA`);

--
-- Limitadores para a tabela `assento_sessao`
--
ALTER TABLE `assento_sessao`
  ADD CONSTRAINT `assento_sessao_ibfk_1` FOREIGN KEY (`COD_ASSENTO`) REFERENCES `assento` (`COD_ASSENTO`),
  ADD CONSTRAINT `assento_sessao_ibfk_2` FOREIGN KEY (`COD_SESSAO`) REFERENCES `sessao` (`COD_SESSAO`);

--
-- Limitadores para a tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD CONSTRAINT `fk_ingresso_01` FOREIGN KEY (`COD_SESSAO`) REFERENCES `sessao` (`COD_SESSAO`),
  ADD CONSTRAINT `fk_ingresso_02` FOREIGN KEY (`COD_FUNCIONARIO`) REFERENCES `funcionario` (`COD_FUNCIONARIO`);

--
-- Limitadores para a tabela `sessao`
--
ALTER TABLE `sessao`
  ADD CONSTRAINT `fk_sessao_01` FOREIGN KEY (`COD_SALA`) REFERENCES `sala` (`COD_SALA`),
  ADD CONSTRAINT `fk_sessao_02` FOREIGN KEY (`COD_FILME`) REFERENCES `filme` (`COD_FILME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
