-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2019 às 03:58
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-04:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hardmax`
--

CREATE DATABASE `hardmax`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`codigo`, `nome`, `email`, `senha`) VALUES
(1, 'Vitor', 'vitor@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` float(8,2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `nome`, `descricao`, `preco`, `foto`, `tipo`) VALUES
(1, 'prime h3', 'qwe', 400.00, 'placa_mae.jpg', 2),
(2, 'ultra foda p80', 'placa mae doida', 500.00, 'placamae.jpg', 1),
(4, 'prime 2 ponto zero', 'descricao doida', 1000.00, 'placa_mae.jpg', 1),
(5, 'Dell Inspiron', 'notebook ddr3 dell', 1200.00, 'dell_inspiron.jpg', 2),
(6, 'geforce galaxy gtx 770', 'placa de video geforce galaxy 770 2gb', 600.00, 'gtx770.jpg', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoproduto`
--

CREATE TABLE `tipoproduto` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipoproduto`
--

INSERT INTO `tipoproduto` (`codigo`, `nome`, `descricao`) VALUES
(1, 'placa mae', 'placa certa'),
(2, 'Notebook', 'categorias agrupar notebooks'),
(3, 'Placa de Vídeo', 'categoria para placas de video');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `datacadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nome`, `email`, `senha`, `datacadastro`) VALUES
(1, 'qwe', 'qwe@aws.com', '202cb962ac59075b964b07152d234b70', '2019-12-01 00:00:00'),
(2, 'qwe', 'qwe@aws.com', '202cb962ac59075b964b07152d234b70', '2019-12-01 00:00:00'),
(3, 'qwe', 'qweqweqwe@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-12-01 00:00:00'),
(4, 'qwe', 'qweqwqweeqwe@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-12-01 00:00:00'),
(5, 'Vitor', 'vitor@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-12-01 00:00:00'),
(6, 'luiz augusto', 'contato@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-12-01 00:00:00'),
(7, 'qwe', 'vitor1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2019-12-01 00:00:00'),
(8, 'qwe', 'vitor2@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2019-12-01 00:00:00'),
(9, 'aloboizao', 'aloboizao@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2019-12-01 22:48:36');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tipoproduto`
--
ALTER TABLE `tipoproduto`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tipoproduto`
--
ALTER TABLE `tipoproduto`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
