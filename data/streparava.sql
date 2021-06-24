-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2021 às 19:46
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
(2802500357, 0, 'Aguinaldo Alves', 'Aguinaldo Alves', 'Aguinaldo Alves', 'OK', 'OK', 'OK', 'OK', 0, 0, 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Aguinaldo Alves', 'Nulo', 'Sisisa', '2021-06-24', '', '');

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
-- Estrutura da tabela `levantamento35b`
--

CREATE TABLE `levantamento35b` (
  `id_levantamento35` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento35f`
--

CREATE TABLE `levantamento35f` (
  `id_levantamento35` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento35p`
--

CREATE TABLE `levantamento35p` (
  `id_levantamento35` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento35r`
--

CREATE TABLE `levantamento35r` (
  `id_levantamento35` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento35s`
--

CREATE TABLE `levantamento35s` (
  `id_levantamento35` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento35t`
--

CREATE TABLE `levantamento35t` (
  `id_levantamento35` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento50b`
--

CREATE TABLE `levantamento50b` (
  `id_levantamento50` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento50f`
--

CREATE TABLE `levantamento50f` (
  `id_levantamento50` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento50p`
--

CREATE TABLE `levantamento50p` (
  `id_levantamento50` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento50r`
--

CREATE TABLE `levantamento50r` (
  `id_levantamento50` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento50s`
--

CREATE TABLE `levantamento50s` (
  `id_levantamento50` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento50t`
--

CREATE TABLE `levantamento50t` (
  `id_levantamento50` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento65b`
--

CREATE TABLE `levantamento65b` (
  `id_levantamento65` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento65f`
--

CREATE TABLE `levantamento65f` (
  `id_levantamento65` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento65p`
--

CREATE TABLE `levantamento65p` (
  `id_levantamento65` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento65r`
--

CREATE TABLE `levantamento65r` (
  `id_levantamento65` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento65s`
--

CREATE TABLE `levantamento65s` (
  `id_levantamento65` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento65t`
--

CREATE TABLE `levantamento65t` (
  `id_levantamento65` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento70f`
--

CREATE TABLE `levantamento70f` (
  `id_levantamento70` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento70s`
--

CREATE TABLE `levantamento70s` (
  `id_levantamento70` int(11) NOT NULL,
  `data` date NOT NULL,
  `prod7` int(11) NOT NULL,
  `t7` time NOT NULL,
  `obs7` text NOT NULL,
  `prod8` int(11) NOT NULL,
  `t8` time NOT NULL,
  `obs8` text NOT NULL,
  `prod9` int(11) NOT NULL,
  `t9` time NOT NULL,
  `obs9` text NOT NULL,
  `prod10` int(11) NOT NULL,
  `t10` time NOT NULL,
  `obs10` text NOT NULL,
  `prod11` int(11) NOT NULL,
  `t11` time NOT NULL,
  `obs11` text NOT NULL,
  `prod12` int(11) NOT NULL,
  `t12` time NOT NULL,
  `obs12` text NOT NULL,
  `prod13` int(11) NOT NULL,
  `t13` time NOT NULL,
  `obs13` text NOT NULL,
  `prod14` int(11) NOT NULL,
  `t14` time NOT NULL,
  `obs14` text NOT NULL,
  `prod15` int(11) NOT NULL,
  `t15` time NOT NULL,
  `obs15` text NOT NULL,
  `prod16` int(11) NOT NULL,
  `t16` time NOT NULL,
  `obs16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'Qualidade02', 'Qualidade', 1, 'Qualidade'),
(6, 'Montagem123', 'Montagem', 2, 'Montagem'),
(7, 'abcde', 'adm', 3, 'Administrador'),
(8, 'sidhenr', 'qld.sidney', 1, 'Qualidade');

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
-- Índices para tabela `levantamento35b`
--
ALTER TABLE `levantamento35b`
  ADD PRIMARY KEY (`id_levantamento35`);

--
-- Índices para tabela `levantamento35f`
--
ALTER TABLE `levantamento35f`
  ADD PRIMARY KEY (`id_levantamento35`);

--
-- Índices para tabela `levantamento35p`
--
ALTER TABLE `levantamento35p`
  ADD PRIMARY KEY (`id_levantamento35`);

--
-- Índices para tabela `levantamento35r`
--
ALTER TABLE `levantamento35r`
  ADD PRIMARY KEY (`id_levantamento35`);

--
-- Índices para tabela `levantamento35s`
--
ALTER TABLE `levantamento35s`
  ADD PRIMARY KEY (`id_levantamento35`);

--
-- Índices para tabela `levantamento35t`
--
ALTER TABLE `levantamento35t`
  ADD PRIMARY KEY (`id_levantamento35`);

--
-- Índices para tabela `levantamento50b`
--
ALTER TABLE `levantamento50b`
  ADD PRIMARY KEY (`id_levantamento50`);

--
-- Índices para tabela `levantamento50f`
--
ALTER TABLE `levantamento50f`
  ADD PRIMARY KEY (`id_levantamento50`);

--
-- Índices para tabela `levantamento50p`
--
ALTER TABLE `levantamento50p`
  ADD PRIMARY KEY (`id_levantamento50`);

--
-- Índices para tabela `levantamento50r`
--
ALTER TABLE `levantamento50r`
  ADD PRIMARY KEY (`id_levantamento50`);

--
-- Índices para tabela `levantamento50s`
--
ALTER TABLE `levantamento50s`
  ADD PRIMARY KEY (`id_levantamento50`);

--
-- Índices para tabela `levantamento50t`
--
ALTER TABLE `levantamento50t`
  ADD PRIMARY KEY (`id_levantamento50`);

--
-- Índices para tabela `levantamento65b`
--
ALTER TABLE `levantamento65b`
  ADD PRIMARY KEY (`id_levantamento65`);

--
-- Índices para tabela `levantamento65f`
--
ALTER TABLE `levantamento65f`
  ADD PRIMARY KEY (`id_levantamento65`);

--
-- Índices para tabela `levantamento65p`
--
ALTER TABLE `levantamento65p`
  ADD PRIMARY KEY (`id_levantamento65`);

--
-- Índices para tabela `levantamento65r`
--
ALTER TABLE `levantamento65r`
  ADD PRIMARY KEY (`id_levantamento65`);

--
-- Índices para tabela `levantamento65s`
--
ALTER TABLE `levantamento65s`
  ADD PRIMARY KEY (`id_levantamento65`);

--
-- Índices para tabela `levantamento65t`
--
ALTER TABLE `levantamento65t`
  ADD PRIMARY KEY (`id_levantamento65`);

--
-- Índices para tabela `levantamento70f`
--
ALTER TABLE `levantamento70f`
  ADD PRIMARY KEY (`id_levantamento70`);

--
-- Índices para tabela `levantamento70s`
--
ALTER TABLE `levantamento70s`
  ADD PRIMARY KEY (`id_levantamento70`);

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
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2802500358;

--
-- AUTO_INCREMENT de tabela `g50`
--
ALTER TABLE `g50`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2082500488;

--
-- AUTO_INCREMENT de tabela `g65`
--
ALTER TABLE `g65`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20827000257;

--
-- AUTO_INCREMENT de tabela `g70`
--
ALTER TABLE `g70`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2502700457;

--
-- AUTO_INCREMENT de tabela `levantamento35b`
--
ALTER TABLE `levantamento35b`
  MODIFY `id_levantamento35` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento35f`
--
ALTER TABLE `levantamento35f`
  MODIFY `id_levantamento35` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento35p`
--
ALTER TABLE `levantamento35p`
  MODIFY `id_levantamento35` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento35r`
--
ALTER TABLE `levantamento35r`
  MODIFY `id_levantamento35` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento35s`
--
ALTER TABLE `levantamento35s`
  MODIFY `id_levantamento35` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento35t`
--
ALTER TABLE `levantamento35t`
  MODIFY `id_levantamento35` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento50b`
--
ALTER TABLE `levantamento50b`
  MODIFY `id_levantamento50` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento50f`
--
ALTER TABLE `levantamento50f`
  MODIFY `id_levantamento50` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento50p`
--
ALTER TABLE `levantamento50p`
  MODIFY `id_levantamento50` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento50r`
--
ALTER TABLE `levantamento50r`
  MODIFY `id_levantamento50` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento50s`
--
ALTER TABLE `levantamento50s`
  MODIFY `id_levantamento50` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento50t`
--
ALTER TABLE `levantamento50t`
  MODIFY `id_levantamento50` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento65b`
--
ALTER TABLE `levantamento65b`
  MODIFY `id_levantamento65` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento65f`
--
ALTER TABLE `levantamento65f`
  MODIFY `id_levantamento65` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento65p`
--
ALTER TABLE `levantamento65p`
  MODIFY `id_levantamento65` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento65r`
--
ALTER TABLE `levantamento65r`
  MODIFY `id_levantamento65` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento65s`
--
ALTER TABLE `levantamento65s`
  MODIFY `id_levantamento65` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento65t`
--
ALTER TABLE `levantamento65t`
  MODIFY `id_levantamento65` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento70f`
--
ALTER TABLE `levantamento70f`
  MODIFY `id_levantamento70` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento70s`
--
ALTER TABLE `levantamento70s`
  MODIFY `id_levantamento70` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `travessa`
--
ALTER TABLE `travessa`
  MODIFY `id_travessa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
