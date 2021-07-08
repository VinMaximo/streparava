-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jul-2021 às 14:50
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

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
(1, 5802370088, '2021-07-07'),
(2, 5802370087, '2021-07-07');

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
(2, 5802370088, '2021-06-29'),
(3, 5802370087, '2021-07-07'),
(4, 5802370088, '2021-07-07');

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
(2, 5802705154, '2021-06-29'),
(3, 5802708969, '2021-07-07'),
(4, 5802705154, '2021-07-07');

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
(1, 5802428969, '2021-06-29'),
(2, 5802425154, '2021-07-07'),
(3, 5802428969, '2021-07-07');

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
(899, 5802370087, '110', '231', '110', 'NOK', 'NOK', 'OK', 'OK', 0.11, 0.1, '112', 'Nulo', '231', 'Nulo', '112', 'Nulo', '00184715114003089C', '2021-07-07', '', 'Paulo Silva '),
(900, 5802370087, '225', '225', '231', 'NOK', 'NOK', 'NOK', 'NOK', 0.2, 0.2, '231', '215', '215', '231', '145', '110', '00184715114003089C', '2021-07-07', ' 123', ''),
(1007, 5802370087, '215', '73', '260', 'NOK', 'NOK', 'NOK', 'NOK', 0.15, 0.15, '73', '145', '112', 'Nulo', '145', '215', '00184715114003089C', '2021-07-08', '', '');

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
(79, 5802370088, '231', '231', '231', 'NOK', 'NOK', 'NOK', 'NOK', 0.12, 0.12, '231', '231', '231', '231', '231', '231', '00184715114003089C', '2021-07-07', '      Teste', 'Júlio César Souza');

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
(2183100003, 5802705154, '225', '225', '225', 'NOK', 'NOK', 'NOK', 'NOK', 0.13, 0.13, '225', '225', '225', '225', '225', '225', '00184715114003089C', '2021-07-07', '  ', 'Sidney Henrique Pereira');

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
(12345, 5802428969, '215', '112', '112', 'OK', 'NOK', 'NOK', 'OK', 1234, 1234, '145', 'Nulo', '231', 'Nulo', '145', 'Nulo', '00184715114003089C', '2021-07-07', ' a', 'Sidney Henrique Pereira');

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
(184, 'Sidney Henrique Pereira');

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
(73, 'Rodrigo Santos', 'Ativo'),
(110, 'José Carlos Pereira', ''),
(112, 'Aguinaldo Alves', 'Ativo'),
(145, 'Lucas Alves', 'Ativo'),
(215, 'Flávio Henrique', ''),
(225, 'Fabrício Henrique', ''),
(231, 'Jonathan Martins', ''),
(251, 'Pedro Henrique', ''),
(260, 'Danilo Silva ', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `refret`
--

CREATE TABLE `refret` (
  `id_refret` int(11) NOT NULL,
  `data` date NOT NULL,
  `retrabalho_braco` int(11) NOT NULL,
  `refugo_braco` int(11) NOT NULL,
  `retrabalho_tirante` int(11) NOT NULL,
  `refugo_tirante` int(11) NOT NULL,
  `retrabalho_travessa` int(11) NOT NULL,
  `refugo_travessa` int(11) NOT NULL,
  `retrabalho_roda` int(11) NOT NULL,
  `refugo_roda` int(11) NOT NULL,
  `retrabalho_montagem` int(11) NOT NULL,
  `refugo_montagem` int(11) NOT NULL,
  `retrabalho_pintura` int(11) NOT NULL,
  `refugo_pintura` int(11) NOT NULL,
  `total_retrabalho` int(11) NOT NULL,
  `total_refugo` int(11) NOT NULL,
  `observacoes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `refret`
--

INSERT INTO `refret` (`id_refret`, `data`, `retrabalho_braco`, `refugo_braco`, `retrabalho_tirante`, `refugo_tirante`, `retrabalho_travessa`, `refugo_travessa`, `retrabalho_roda`, `refugo_roda`, `retrabalho_montagem`, `refugo_montagem`, `retrabalho_pintura`, `refugo_pintura`, `total_retrabalho`, `total_refugo`, `observacoes`) VALUES
(1, '2021-07-07', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 6, 6, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatoriodia`
--

CREATE TABLE `relatoriodia` (
  `id_levantamento` int(11) NOT NULL,
  `data` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 3, 2021);

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
(7, '123', '2021-06-11'),
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
(4, 'Vinicinho', 'ViniMaximo', 3, 'Administrador'),
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
  ADD PRIMARY KEY (`id_levantamento35`),
  ADD UNIQUE KEY `data` (`data`);

--
-- Índices para tabela `levantamento50f`
--
ALTER TABLE `levantamento50f`
  ADD PRIMARY KEY (`id_levantamento50`),
  ADD UNIQUE KEY `data` (`data`);

--
-- Índices para tabela `levantamento65f`
--
ALTER TABLE `levantamento65f`
  ADD PRIMARY KEY (`id_levantamento65`),
  ADD UNIQUE KEY `data` (`data`);

--
-- Índices para tabela `levantamento70f`
--
ALTER TABLE `levantamento70f`
  ADD PRIMARY KEY (`id_levantamento70`),
  ADD UNIQUE KEY `data` (`data`);

--
-- Índices para tabela `operadores`
--
ALTER TABLE `operadores`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `refret`
--
ALTER TABLE `refret`
  ADD PRIMARY KEY (`id_refret`),
  ADD UNIQUE KEY `data` (`data`);

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
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `codigo65`
--
ALTER TABLE `codigo65`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `codigo70`
--
ALTER TABLE `codigo70`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `g35`
--
ALTER TABLE `g35`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT de tabela `g50`
--
ALTER TABLE `g50`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de tabela `g65`
--
ALTER TABLE `g65`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2183100004;

--
-- AUTO_INCREMENT de tabela `g70`
--
ALTER TABLE `g70`
  MODIFY `etiqueta` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT de tabela `levantamento35f`
--
ALTER TABLE `levantamento35f`
  MODIFY `id_levantamento35` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento50f`
--
ALTER TABLE `levantamento50f`
  MODIFY `id_levantamento50` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento65f`
--
ALTER TABLE `levantamento65f`
  MODIFY `id_levantamento65` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento70f`
--
ALTER TABLE `levantamento70f`
  MODIFY `id_levantamento70` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `refret`
--
ALTER TABLE `refret`
  MODIFY `id_refret` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `relatoriomes`
--
ALTER TABLE `relatoriomes`
  MODIFY `id_relatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
