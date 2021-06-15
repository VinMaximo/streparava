-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2021 às 19:47
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `streparava`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `g35`
--

CREATE TABLE `g35` (
  `etiqueta` bigint(50) NOT NULL,
  `operador` varchar(200) NOT NULL,
  `operador2` varchar(100) NOT NULL,
  `operador3` varchar(100) NOT NULL,
  `esmagamento_dir` varchar(5) NOT NULL,
  `montagem_dir` varchar(5) NOT NULL,
  `esmagamento_esq` varchar(5) NOT NULL,
  `montagem_esq` varchar(5) NOT NULL,
  `operacao1` varchar(100) NOT NULL,
  `operacao1op` varchar(100) DEFAULT NULL,
  `operacao2` varchar(100) NOT NULL,
  `operacao2op` varchar(100) DEFAULT NULL,
  `operacao3` varchar(100) NOT NULL,
  `operacao3op` varchar(100) DEFAULT NULL,
  `travessa` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `observacoes` text NOT NULL,
  `inspetor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `g35`
--

INSERT INTO `g35` (`etiqueta`, `operador`, `operador2`, `operador3`, `esmagamento_dir`, `montagem_dir`, `esmagamento_esq`, `montagem_esq`, `operacao1`, `operacao1op`, `operacao2`, `operacao2op`, `operacao3`, `operacao3op`, `travessa`, `data`, `observacoes`, `inspetor`) VALUES
(898, 'Paulo Silva', 'Paulo Silva', 'Paulo Silva', 'OK', 'OK', 'OK', 'OK', 'Paulo Silva', 'Nulo', 'Paulo Silva', 'Nulo', 'Paulo Silva', 'Nulo', 'Sisisa', '2021-06-14', '123', 'Mirhail');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g50`
--

CREATE TABLE `g50` (
  `etiqueta` bigint(50) NOT NULL,
  `operador` varchar(200) NOT NULL,
  `operador2` varchar(100) NOT NULL,
  `operador3` varchar(100) NOT NULL,
  `esmagamento_dir` varchar(5) NOT NULL,
  `montagem_dir` varchar(5) NOT NULL,
  `esmagamento_esq` varchar(5) NOT NULL,
  `montagem_esq` varchar(5) NOT NULL,
  `operacao1` varchar(100) NOT NULL,
  `operacao1op` varchar(100) DEFAULT NULL,
  `operacao2` varchar(100) NOT NULL,
  `operacao2op` varchar(100) DEFAULT NULL,
  `operacao3` varchar(100) NOT NULL,
  `operacao3op` varchar(100) DEFAULT NULL,
  `travessa` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `observacoes` text NOT NULL,
  `inspetor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `g50`
--

INSERT INTO `g50` (`etiqueta`, `operador`, `operador2`, `operador3`, `esmagamento_dir`, `montagem_dir`, `esmagamento_esq`, `montagem_esq`, `operacao1`, `operacao1op`, `operacao2`, `operacao2op`, `operacao3`, `operacao3op`, `travessa`, `data`, `observacoes`, `inspetor`) VALUES
(78, 'Paulo Silva', 'Paulo Silva', 'Paulo Silva', 'OK', 'OK', 'OK', 'OK', 'Paulo Silva', 'Nulo', 'Paulo Silva', 'Nulo', 'Paulo Silva', 'Nulo', 'Sisisa', '2021-06-14', 'Vinicim', 'Mirhail');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g65`
--

CREATE TABLE `g65` (
  `etiqueta` bigint(50) NOT NULL,
  `operador` varchar(200) NOT NULL,
  `operador2` varchar(100) NOT NULL,
  `operador3` varchar(100) NOT NULL,
  `esmagamento_dir` varchar(5) NOT NULL,
  `montagem_dir` varchar(5) NOT NULL,
  `esmagamento_esq` varchar(5) NOT NULL,
  `montagem_esq` varchar(5) NOT NULL,
  `operacao1` varchar(100) NOT NULL,
  `operacao1op` varchar(100) DEFAULT NULL,
  `operacao2` varchar(100) NOT NULL,
  `operacao2op` varchar(100) DEFAULT NULL,
  `operacao3` varchar(100) NOT NULL,
  `operacao3op` varchar(100) DEFAULT NULL,
  `travessa` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `observacoes` text NOT NULL,
  `inspetor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `g65`
--

INSERT INTO `g65` (`etiqueta`, `operador`, `operador2`, `operador3`, `esmagamento_dir`, `montagem_dir`, `esmagamento_esq`, `montagem_esq`, `operacao1`, `operacao1op`, `operacao2`, `operacao2op`, `operacao3`, `operacao3op`, `travessa`, `data`, `observacoes`, `inspetor`) VALUES
(123134, 'Paulo Silva', 'Paulo Silva', 'Paulo Silva', 'OK', 'OK', 'OK', 'OK', 'Rose', 'Rose', 'Rose', 'Rose', 'Rose', 'Rose', 'Vinicera', '2021-06-14', 'Vinicinho', 'Mirhail'),
(2183100001, 'Paulo Silva', 'Paulo Silva', 'Paulo Silva', 'OK', 'OK', 'OK', 'OK', 'Paulo Silva', 'Nulo', 'Paulo Silva', 'Nulo', 'Rose', 'Paulo Silva', 'Vinicera', '2021-05-21', 'Vinicinho', ''),
(2183100002, 'Paulo Silva', 'Paulo Silva', 'Paulo Silva', 'OK', 'OK', 'OK', 'OK', 'Paulo Silva', 'Nulo', 'Paulo Silva', 'Nulo', 'Paulo Silva', 'Nulo', 'Sisisa', '2021-06-08', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g70`
--

CREATE TABLE `g70` (
  `etiqueta` bigint(50) NOT NULL,
  `operador` varchar(200) NOT NULL,
  `operador2` varchar(100) NOT NULL,
  `operador3` varchar(100) NOT NULL,
  `esmagamento_dir` varchar(5) NOT NULL,
  `montagem_dir` varchar(5) NOT NULL,
  `esmagamento_esq` varchar(5) NOT NULL,
  `montagem_esq` varchar(5) NOT NULL,
  `operacao1` varchar(100) NOT NULL,
  `operacao1op` varchar(100) DEFAULT NULL,
  `operacao2` varchar(100) NOT NULL,
  `operacao2op` varchar(100) DEFAULT NULL,
  `operacao3` varchar(100) NOT NULL,
  `operacao3op` varchar(100) DEFAULT NULL,
  `travessa` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `observacoes` text NOT NULL,
  `inspetor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `g70`
--

INSERT INTO `g70` (`etiqueta`, `operador`, `operador2`, `operador3`, `esmagamento_dir`, `montagem_dir`, `esmagamento_esq`, `montagem_esq`, `operacao1`, `operacao1op`, `operacao2`, `operacao2op`, `operacao3`, `operacao3op`, `travessa`, `data`, `observacoes`, `inspetor`) VALUES
(124, 'Aguinaldo Alves', 'Danilo Silva', 'Fabrício Santos', 'OK', 'OK', 'OK', 'OK', 'Aguinaldo Alves', 'Jonathan Martins', 'Jonathan Martins', 'Danilo Silva', 'Pedro Henrique', 'Rodrigo Santos', 'Vinicera', '2021-06-15', 'Vina', 'Paulo Silva ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `guarda`
--

CREATE TABLE `guarda` (
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `guarda`
--

INSERT INTO `guarda` (`id`) VALUES
(232),
(898);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inspetor`
--

CREATE TABLE `inspetor` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inspetor`
--

INSERT INTO `inspetor` (`matricula`, `nome`) VALUES
(156, 'Júlio César Souza'),
(184, 'Sidney Henrique Pereira'),
(198, 'Paulo Silva ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `operadores`
--

CREATE TABLE `operadores` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `situacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `operadores`
--

INSERT INTO `operadores` (`matricula`, `nome`, `situacao`) VALUES
(215, 'Flávio Henrique', ''),
(112, 'Aguinaldo Alves', ''),
(145, 'Lucas Alves', ''),
(231, 'Jonathan Martins', ''),
(73, 'Rodrigo Santos', ''),
(260, 'Danilo Silva', ''),
(110, 'José Carlos Pereira', ''),
(225, 'Fabrício Santos', ''),
(251, 'Pedro Henrique', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `travessa`
--

CREATE TABLE `travessa` (
  `id_travessa` int(11) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `travessa`
--

INSERT INTO `travessa` (`id_travessa`, `codigo`, `data`) VALUES
(5, 'Sisisa', '2021-06-02'),
(6, 'Vinicera', '2021-06-04'),
(7, '123', '2021-06-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `prioridade` int(11) NOT NULL,
  `setor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `senha`, `user`, `prioridade`, `setor`) VALUES
(4, 'Vinicinho', 'ViniMaximo', 3, 'Administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `g35`
--
ALTER TABLE `g35`
  ADD PRIMARY KEY (`etiqueta`);

--
-- Índices para tabela `g50`
--
ALTER TABLE `g50`
  ADD PRIMARY KEY (`etiqueta`);

--
-- Índices para tabela `g65`
--
ALTER TABLE `g65`
  ADD PRIMARY KEY (`etiqueta`);

--
-- Índices para tabela `g70`
--
ALTER TABLE `g70`
  ADD PRIMARY KEY (`etiqueta`);

--
-- Índices para tabela `inspetor`
--
ALTER TABLE `inspetor`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `travessa`
--
ALTER TABLE `travessa`
  ADD PRIMARY KEY (`id_travessa`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `g35`
--
ALTER TABLE `g35`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=899;

--
-- AUTO_INCREMENT de tabela `g50`
--
ALTER TABLE `g50`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `g65`
--
ALTER TABLE `g65`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2183100003;

--
-- AUTO_INCREMENT de tabela `g70`
--
ALTER TABLE `g70`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de tabela `travessa`
--
ALTER TABLE `travessa`
  MODIFY `id_travessa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
