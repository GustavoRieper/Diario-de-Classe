-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2018 às 05:37
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `cd_aluno` int(3) NOT NULL,
  `nm_aluno` varchar(50) NOT NULL,
  `cd_turma` varchar(10) NOT NULL,
  `dia_1` varchar(5) NOT NULL,
  `dia_2` varchar(5) NOT NULL,
  `dia_3` varchar(5) NOT NULL,
  `dia_4` varchar(5) NOT NULL,
  `dia_5` varchar(5) NOT NULL,
  `dia_6` varchar(5) NOT NULL,
  `dia_7` varchar(5) NOT NULL,
  `dia_8` varchar(5) NOT NULL,
  `dia_9` varchar(5) NOT NULL,
  `dia_10` varchar(5) NOT NULL,
  `dia_11` varchar(5) NOT NULL,
  `dia_12` varchar(5) NOT NULL,
  `dia_13` varchar(5) NOT NULL,
  `dia_14` varchar(5) NOT NULL,
  `dia_15` varchar(5) NOT NULL,
  `dia_16` varchar(5) NOT NULL,
  `dia_17` varchar(5) NOT NULL,
  `dia_18` varchar(5) NOT NULL,
  `dia_19` varchar(5) NOT NULL,
  `dia_20` varchar(5) NOT NULL,
  `dia_21` varchar(5) NOT NULL,
  `dia_22` varchar(5) NOT NULL,
  `dia_23` varchar(5) NOT NULL,
  `dia_24` varchar(5) NOT NULL,
  `dia_25` varchar(5) NOT NULL,
  `dia_26` varchar(5) NOT NULL,
  `dia_27` varchar(5) NOT NULL,
  `dia_28` varchar(5) NOT NULL,
  `dia_29` varchar(5) NOT NULL,
  `dia_30` varchar(5) NOT NULL,
  `dia_31` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`cd_aluno`, `nm_aluno`, `cd_turma`, `dia_1`, `dia_2`, `dia_3`, `dia_4`, `dia_5`, `dia_6`, `dia_7`, `dia_8`, `dia_9`, `dia_10`, `dia_11`, `dia_12`, `dia_13`, `dia_14`, `dia_15`, `dia_16`, `dia_17`, `dia_18`, `dia_19`, `dia_20`, `dia_21`, `dia_22`, `dia_23`, `dia_24`, `dia_25`, `dia_26`, `dia_27`, `dia_28`, `dia_29`, `dia_30`, `dia_31`) VALUES
(2, 'Monica', '2018-01', 'true', 'true', 'true', 'true', '', 'true', '', '', 'true', '', '', '', '', '', '', '', '', '', 'true', 'true', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Cebolinha', '2018-01', '', 'true', 'true', 'true', 'true', '', '', '', '', 'true', '', 'true', 'true', '', '', '', 'true', 'true', '', 'true', '', '', '', '', '', '', 'true', '', '', '', ''),
(4, 'Cascao', '2018-01', '', 'true', 'true', 'true', 'false', 'true', '', '', 'true', '', '', '', 'true', '', '', 'true', '', 'true', '', 'true', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Chico Bento', '2018-01', '', '', 'true', 'true', 'true', 'true', '', '', 'true', 'true', '', '', 'true', '', '', 'true', '', 'true', 'true', 'true', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Ze Lele', '2018-01', '', 'true', 'true', 'true', '', 'true', '', '', '', 'true', '', 'true', '', '', '', 'true', '', 'true', '', 'true', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Franjinha', '2018-01', '', 'true', 'false', 'true', 'true', '', '', 'true', 'true', 'true', '', 'true', '', '', '', 'true', 'true', 'true', 'true', 'true', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'Cascuda', '2018-01', '', 'false', 'true', 'false', '', 'true', '', 'true', 'true', '', 'true', '', '', '', '', '', '', '', '', 'true', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `nm_escola` varchar(50) NOT NULL,
  `nm_professora` varchar(50) NOT NULL,
  `cd_turma` varchar(10) NOT NULL,
  `ano` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`nm_escola`, `nm_professora`, `cd_turma`, `ano`) VALUES
('Bom Jesus Ielusc', 'Maicol Gandolphi de Almeida', '2018-01', '2018-01-01'),
('', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nivel` int(1) NOT NULL,
  `nivel_nome` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nivel`, `nivel_nome`, `nome`, `senha`) VALUES
(1, 'Funcionario', 'Ana', '123'),
(2, 'Professor', 'Sabrina', '123'),
(3, 'Aluno', 'Monica', '123'),
(3, 'Aluno', 'Cebolinha', '123'),
(3, 'Aluno', 'Cascao', '123'),
(3, 'Aluno', 'Chico Bento', '123'),
(3, 'Aluno', 'Ze Lele', '123'),
(3, 'Aluno', 'Franjinha', '123'),
(3, 'Aluno', 'Cascuda', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
