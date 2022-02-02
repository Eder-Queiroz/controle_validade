-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2022 às 12:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle_validade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adicionar`
--

CREATE TABLE `adicionar` (
  `codeBar` bigint(20) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `peso` float NOT NULL,
  `setor` varchar(100) NOT NULL,
  `unidade` int(11) DEFAULT NULL,
  `dataVenc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adicionar`
--

INSERT INTO `adicionar` (`codeBar`, `marca`, `nome`, `peso`, `setor`, `unidade`, `dataVenc`) VALUES
(3228022930205, 'president', 'Queijo emmental president', 0.22, 'padaria', 18, '2022-02-27'),
(7622210194046, 'milka', 'Chocolate milka oreo', 0.1, 'mercearia', 8, '2022-03-26'),
(7891000041178, 'Nestle', 'Iogurte integra morango bandeja', 0.54, 'padaria', 6, '2022-02-01'),
(7891000241356, 'Nestle', 'Biscoito Passatempo recheado chocolate', 0.13, 'mercearia', 26, '2022-02-15'),
(7891008121025, 'garoto', 'Caixa de bombom garoto', 0.3, 'mercearia', 12, '2022-02-23'),
(7891008299922, 'garoto', 'Chocolate ao leite garoto', 0.1, 'padaria', 14, '2022-02-10'),
(7891149200504, 'Ambev', 'Cerveja skol lata', 0.35, 'mercearia', 23, '2022-03-16'),
(7891156001033, 'yakult', 'leite fermentado desnatado', 0.48, 'padaria', 60, '2022-02-03'),
(7891991294942, 'brahma', 'Cerveja duplo malte brahma', 0.35, 'mercearia', 32, '2022-04-17'),
(7896002301787, 'Pullman', 'Bisnaga brioche pullman', 0.3, 'padaria', 6, '2022-02-09'),
(7896019603430, 'Lacta', 'Bis', 0.126, 'mercearia', 25, '2022-05-18'),
(7896085051975, 'Nikito', 'Biscoito recheio chocolate nikito', 0.135, 'mercearia', 21, '2022-03-10'),
(7896417294285, 'Vilma', 'Biscoito Vilma cream crack', 0.36, 'mercearia', 16, '2022-02-24'),
(7898938236034, 'Coca-Cola', 'Coca-Cola garrafa PET', 2, 'mercearia', 12, '2022-03-04'),
(7898953148039, 'prats', 'Suco laranja prats', 1, 'mercearia', 12, '2022-02-15');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adicionar`
--
ALTER TABLE `adicionar`
  ADD PRIMARY KEY (`codeBar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
