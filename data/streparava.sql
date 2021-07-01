-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jul-2021 às 19:14
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
-- Estrutura da tabela `codigo35`
--

CREATE TABLE `codigo35` (
  `id_codigo` int(11) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `codigo35`
--

INSERT INTO `codigo35` (`id_codigo`, `codigo`, `data`) VALUES
(1, 87985856, '2021-06-29'),
(2, 45, '2021-06-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigo50`
--

CREATE TABLE `codigo50` (
  `id_codigo` int(11) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `codigo50`
--

INSERT INTO `codigo50` (`id_codigo`, `codigo`, `data`) VALUES
(1, 5802370088, '2021-06-29'),
(2, 5802370088, '2021-06-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigo65`
--

CREATE TABLE `codigo65` (
  `id_codigo` int(11) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `codigo65`
--

INSERT INTO `codigo65` (`id_codigo`, `codigo`, `data`) VALUES
(1, 582428969, '2021-06-29'),
(2, 5802705154, '2021-06-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigo70`
--

CREATE TABLE `codigo70` (
  `id_codigo` int(11) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `codigo70`
--

INSERT INTO `codigo70` (`id_codigo`, `codigo`, `data`) VALUES
(1, 5802428969, '2021-06-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g35`
--

CREATE TABLE `g35` (
  `etiqueta` bigint(50) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `operador` varchar(200) NOT NULL,
  `operador2` varchar(100) NOT NULL,
  `operador3` varchar(100) NOT NULL,
  `esmagamento_dir` varchar(5) NOT NULL,
  `montagem_dir` varchar(5) NOT NULL,
  `esmagamento_esq` varchar(5) NOT NULL,
  `montagem_esq` varchar(5) NOT NULL,
  `oscilacao_esq` float NOT NULL,
  `oscilacao_dir` float NOT NULL,
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

INSERT INTO `g35` (`etiqueta`, `codigo`, `operador`, `operador2`, `operador3`, `esmagamento_dir`, `montagem_dir`, `esmagamento_esq`, `montagem_esq`, `oscilacao_esq`, `oscilacao_dir`, `operacao1`, `operacao1op`, `operacao2`, `operacao2op`, `operacao3`, `operacao3op`, `travessa`, `data`, `observacoes`, `inspetor`) VALUES
(2802500357, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0, 0, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Sisisa', '2021-06-24', '', ''),
(2802500358, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0.11, 0.11, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Sisisa', '2021-06-28', '123', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g50`
--

CREATE TABLE `g50` (
  `etiqueta` bigint(50) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `operador` varchar(200) NOT NULL,
  `operador2` varchar(100) NOT NULL,
  `operador3` varchar(100) NOT NULL,
  `esmagamento_dir` varchar(5) NOT NULL,
  `montagem_dir` varchar(5) NOT NULL,
  `esmagamento_esq` varchar(5) NOT NULL,
  `montagem_esq` varchar(5) NOT NULL,
  `oscilacao_esq` float NOT NULL,
  `oscilacao_dir` float NOT NULL,
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

INSERT INTO `g50` (`etiqueta`, `codigo`, `operador`, `operador2`, `operador3`, `esmagamento_dir`, `montagem_dir`, `esmagamento_esq`, `montagem_esq`, `oscilacao_esq`, `oscilacao_dir`, `operacao1`, `operacao1op`, `operacao2`, `operacao2op`, `operacao3`, `operacao3op`, `travessa`, `data`, `observacoes`, `inspetor`) VALUES
(2082500488, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0.3, 0.3, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', '00184715114003089C', '2021-06-29', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g65`
--

CREATE TABLE `g65` (
  `etiqueta` bigint(50) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `operador` varchar(200) NOT NULL,
  `operador2` varchar(100) NOT NULL,
  `operador3` varchar(100) NOT NULL,
  `esmagamento_dir` varchar(5) NOT NULL,
  `montagem_dir` varchar(5) NOT NULL,
  `esmagamento_esq` varchar(5) NOT NULL,
  `montagem_esq` varchar(5) NOT NULL,
  `oscilacao_esq` float NOT NULL,
  `oscilacao_dir` float NOT NULL,
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

INSERT INTO `g65` (`etiqueta`, `codigo`, `operador`, `operador2`, `operador3`, `esmagamento_dir`, `montagem_dir`, `esmagamento_esq`, `montagem_esq`, `oscilacao_esq`, `oscilacao_dir`, `operacao1`, `operacao1op`, `operacao2`, `operacao2op`, `operacao3`, `operacao3op`, `travessa`, `data`, `observacoes`, `inspetor`) VALUES
(20827000257, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0.4, 0.4, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', '00184715114003089C', '2021-06-29', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g70`
--

CREATE TABLE `g70` (
  `etiqueta` bigint(50) NOT NULL,
  `codigo` bigint(20) NOT NULL,
  `operador` varchar(200) NOT NULL,
  `operador2` varchar(100) NOT NULL,
  `operador3` varchar(100) NOT NULL,
  `esmagamento_dir` varchar(5) NOT NULL,
  `montagem_dir` varchar(5) NOT NULL,
  `esmagamento_esq` varchar(5) NOT NULL,
  `montagem_esq` varchar(5) NOT NULL,
  `oscilacao_esq` float NOT NULL,
  `oscilacao_dir` float NOT NULL,
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

INSERT INTO `g70` (`etiqueta`, `codigo`, `operador`, `operador2`, `operador3`, `esmagamento_dir`, `montagem_dir`, `esmagamento_esq`, `montagem_esq`, `oscilacao_esq`, `oscilacao_dir`, `operacao1`, `operacao1op`, `operacao2`, `operacao2op`, `operacao3`, `operacao3op`, `travessa`, `data`, `observacoes`, `inspetor`) VALUES
(2502700457, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0.45, 0.45, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Sisisa', '2021-06-28', '123', ''),
(2502700458, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0, 0, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Sisisa', '2021-06-28', '123', ''),
(2502700459, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0.3, 0.3, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', '00184715114003089C', '2021-06-29', '', ''),
(2502700460, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0.5, 0.5, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', '00184715114003089C', '2021-06-29', '', '');

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
(898),
(2147483647),
(250102015),
(123),
(123123),
(12333),
(2082700356),
(2147483647),
(0);

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
(198, 'Paulo Silva '),
(222, 'Fernanda Stephanie Rodrigues');

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento35f`
--

CREATE TABLE `levantamento35f` (
  `id_levantamento35` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` int(11) NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` int(11) NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` int(11) NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` int(11) NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` int(11) NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` int(11) NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` int(11) NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` int(11) NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` int(11) NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` int(11) NOT NULL,
  `obs16` text NOT NULL,
  `total` int(11) NOT NULL,
  `tempo_total` int(11) NOT NULL,
  `etiqueta1` bigint(20) NOT NULL,
  `etiqueta2` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `levantamento35f`
--

INSERT INTO `levantamento35f` (`id_levantamento35`, `data`, `prod7`, `t7`, `obs7`, `prod8`, `t8`, `obs8`, `prod9`, `t9`, `obs9`, `prod10`, `t10`, `obs10`, `prod11`, `t11`, `obs11`, `prod12`, `t12`, `obs12`, `prod13`, `t13`, `obs13`, `prod14`, `t14`, `obs14`, `prod15`, `t15`, `obs15`, `prod16`, `t16`, `obs16`, `total`, `tempo_total`, `etiqueta1`, `etiqueta2`) VALUES
(31, '2021-06-28', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 10, 0, 2802500357, 2802500357),
(32, '2021-06-29', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 40, 0, 2802500357, 2802500357),
(33, '2021-06-28', 2, 0, '', 2, 0, '', 2, 1, 'Tava tenso', 2, 3, 'Tava complicado', 2, 5, 'Tava difícil', 2, 1, 'Não deu', 2, 0, '', 2, 0, '', 2, 0, '', 2, 0, '', 20, 10, 2802500357, 2802500357),
(34, '2021-06-30', 3, 4, 'a', 3, 4, 'a', 3, 4, 'a', 3, 4, 'a', 3, 4, 'a', 3, 4, 'a', 3, 4, 'a', 3, 4, 'a', 3, 4, 'a', 3, 4, 'a', 30, 40, 2802500357, 2802500358);

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento50f`
--

CREATE TABLE `levantamento50f` (
  `id_levantamento50` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` int(11) NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` int(11) NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` int(11) NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` int(11) NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` int(11) NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` int(11) NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` int(11) NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` int(11) NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` int(11) NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` int(11) NOT NULL,
  `obs16` text NOT NULL,
  `total` int(11) NOT NULL,
  `tempo_total` int(11) NOT NULL,
  `etiqueta1` bigint(20) NOT NULL,
  `etiqueta2` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `levantamento50f`
--

INSERT INTO `levantamento50f` (`id_levantamento50`, `data`, `prod7`, `t7`, `obs7`, `prod8`, `t8`, `obs8`, `prod9`, `t9`, `obs9`, `prod10`, `t10`, `obs10`, `prod11`, `t11`, `obs11`, `prod12`, `t12`, `obs12`, `prod13`, `t13`, `obs13`, `prod14`, `t14`, `obs14`, `prod15`, `t15`, `obs15`, `prod16`, `t16`, `obs16`, `total`, `tempo_total`, `etiqueta1`, `etiqueta2`) VALUES
(34, '2021-06-30', 1, 0, '', 2, 0, '', 3, 0, '', 4, 0, '', 5, 0, '', 6, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 21, 0, 2082500488, 2082500488);

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento65f`
--

CREATE TABLE `levantamento65f` (
  `id_levantamento65` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` int(11) NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` int(11) NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` int(11) NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` int(11) NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` int(11) NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` int(11) NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` int(11) NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` int(11) NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` int(11) NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` int(11) NOT NULL,
  `obs16` text NOT NULL,
  `total` int(11) NOT NULL,
  `tempo_total` int(11) NOT NULL,
  `etiqueta1` bigint(20) NOT NULL,
  `etiqueta2` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `levantamento65f`
--

INSERT INTO `levantamento65f` (`id_levantamento65`, `data`, `prod7`, `t7`, `obs7`, `prod8`, `t8`, `obs8`, `prod9`, `t9`, `obs9`, `prod10`, `t10`, `obs10`, `prod11`, `t11`, `obs11`, `prod12`, `t12`, `obs12`, `prod13`, `t13`, `obs13`, `prod14`, `t14`, `obs14`, `prod15`, `t15`, `obs15`, `prod16`, `t16`, `obs16`, `total`, `tempo_total`, `etiqueta1`, `etiqueta2`) VALUES
(31, '2021-06-28', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 10, 0, 2802500357, 2802500357),
(32, '2021-06-29', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 40, 0, 2802500357, 2802500357),
(33, '2021-06-28', 2, 0, '', 2, 0, '', 2, 1, 'Tava tenso', 2, 3, 'Tava complicado', 2, 5, 'Tava difícil', 2, 1, 'Não deu', 2, 0, '', 2, 0, '', 2, 0, '', 2, 0, '', 20, 10, 2802500357, 2802500357),
(34, '2021-06-30', 3, 0, '', 3, 0, '', 3, 0, '', 3, 0, '', 3, 0, '', 3, 0, '', 3, 0, '', 3, 0, '', 3, 0, '', 3, 0, '', 30, 0, 20827000257, 20827000257);

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento70f`
--

CREATE TABLE `levantamento70f` (
  `id_levantamento70` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` int(11) NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` int(11) NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` int(11) NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` int(11) NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` int(11) NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` int(11) NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` int(11) NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` int(11) NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` int(11) NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` int(11) NOT NULL,
  `obs16` text NOT NULL,
  `total` int(11) NOT NULL,
  `tempo_total` int(11) NOT NULL,
  `etiqueta1` bigint(20) NOT NULL,
  `etiqueta2` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `levantamento70f`
--

INSERT INTO `levantamento70f` (`id_levantamento70`, `data`, `prod7`, `t7`, `obs7`, `prod8`, `t8`, `obs8`, `prod9`, `t9`, `obs9`, `prod10`, `t10`, `obs10`, `prod11`, `t11`, `obs11`, `prod12`, `t12`, `obs12`, `prod13`, `t13`, `obs13`, `prod14`, `t14`, `obs14`, `prod15`, `t15`, `obs15`, `prod16`, `t16`, `obs16`, `total`, `tempo_total`, `etiqueta1`, `etiqueta2`) VALUES
(31, '2021-06-28', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 1, 0, '', 10, 0, 2802500357, 2802500357),
(32, '2021-06-29', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 4, 0, '', 40, 0, 2802500357, 2802500357),
(33, '2021-06-28', 2, 0, '', 2, 0, '', 2, 1, 'Tava tenso', 2, 3, 'Tava complicado', 2, 5, 'Tava difícil', 2, 1, 'Não deu', 2, 0, '', 2, 0, '', 2, 0, '', 2, 0, '', 20, 10, 2802500357, 2802500357),
(34, '2021-06-30', 1, 0, '', 1, 0, '', 1, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 3, 0, 2502700457, 2502700457);

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
-- Estrutura da tabela `relatoriodia`
--

CREATE TABLE `relatoriodia` (
  `id_levantamento` int(11) NOT NULL,
  `data` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relatoriodia`
--

INSERT INTO `relatoriodia` (`id_levantamento`, `data`, `total`) VALUES
(3, '2021-06-30', 0),
(6, '2021-06-29', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatoriomes`
--

CREATE TABLE `relatoriomes` (
  `id_relatorio` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relatoriomes`
--

INSERT INTO `relatoriomes` (`id_relatorio`, `mes`, `ano`) VALUES
(1, 1, 2021),
(2, 1, 2021),
(3, 6, 2021);

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
(8, '00184715114003089C', '2021-06-29');

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
(5, 'Qualidade02', 'Qualidade', 1, 'Qualidade'),
(6, 'Montagem123', 'Montagem', 2, 'Montagem'),
(7, 'abcde', 'adm', 3, 'Administrador'),
(8, 'sidhenr', 'qld.sidney', 1, 'Qualidade');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `codigo35`
--
ALTER TABLE `codigo35`
  ADD PRIMARY KEY (`id_codigo`);

--
-- Índices para tabela `codigo50`
--
ALTER TABLE `codigo50`
  ADD PRIMARY KEY (`id_codigo`);

--
-- Índices para tabela `codigo65`
--
ALTER TABLE `codigo65`
  ADD PRIMARY KEY (`id_codigo`);

--
-- Índices para tabela `codigo70`
--
ALTER TABLE `codigo70`
  ADD PRIMARY KEY (`id_codigo`);

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
-- Índices para tabela `levantamento35f`
--
ALTER TABLE `levantamento35f`
  ADD PRIMARY KEY (`id_levantamento35`);

--
-- Índices para tabela `levantamento50f`
--
ALTER TABLE `levantamento50f`
  ADD PRIMARY KEY (`id_levantamento50`);

--
-- Índices para tabela `levantamento65f`
--
ALTER TABLE `levantamento65f`
  ADD PRIMARY KEY (`id_levantamento65`);

--
-- Índices para tabela `levantamento70f`
--
ALTER TABLE `levantamento70f`
  ADD PRIMARY KEY (`id_levantamento70`);

--
-- Índices para tabela `relatoriodia`
--
ALTER TABLE `relatoriodia`
  ADD PRIMARY KEY (`id_levantamento`),
  ADD UNIQUE KEY `data` (`data`);

--
-- Índices para tabela `relatoriomes`
--
ALTER TABLE `relatoriomes`
  ADD PRIMARY KEY (`id_relatorio`);

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
-- AUTO_INCREMENT de tabela `codigo35`
--
ALTER TABLE `codigo35`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `codigo50`
--
ALTER TABLE `codigo50`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `codigo65`
--
ALTER TABLE `codigo65`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `codigo70`
--
ALTER TABLE `codigo70`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `g35`
--
ALTER TABLE `g35`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2802500359;

--
-- AUTO_INCREMENT de tabela `g50`
--
ALTER TABLE `g50`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2082500489;

--
-- AUTO_INCREMENT de tabela `g65`
--
ALTER TABLE `g65`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20827000258;

--
-- AUTO_INCREMENT de tabela `g70`
--
ALTER TABLE `g70`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2502700461;

--
-- AUTO_INCREMENT de tabela `levantamento35f`
--
ALTER TABLE `levantamento35f`
  MODIFY `id_levantamento35` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `levantamento50f`
--
ALTER TABLE `levantamento50f`
  MODIFY `id_levantamento50` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `levantamento65f`
--
ALTER TABLE `levantamento65f`
  MODIFY `id_levantamento65` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `levantamento70f`
--
ALTER TABLE `levantamento70f`
  MODIFY `id_levantamento70` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `relatoriodia`
--
ALTER TABLE `relatoriodia`
  MODIFY `id_levantamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `relatoriomes`
--
ALTER TABLE `relatoriomes`
  MODIFY `id_relatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `travessa`
--
ALTER TABLE `travessa`
  MODIFY `id_travessa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
