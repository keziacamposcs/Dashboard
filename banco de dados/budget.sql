-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2021 às 22:28
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
-- Banco de dados: `budget`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `centro_custo`
--

CREATE TABLE `centro_custo` (
  `id_centro_custo` int(11) NOT NULL,
  `centro_custo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `centro_custo`
--

INSERT INTO `centro_custo` (`id_centro_custo`, `centro_custo`) VALUES
(1, 'Base');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `empresa_nome` varchar(50) NOT NULL,
  `empresa_cnpj` varchar(14) NOT NULL,
  `empresa_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `empresa_nome`, `empresa_cnpj`, `empresa_mail`) VALUES
(1, 'N/A', '', ''),
(2, 'Sumicity', '07714104000107', 'financeiro.empresarial@sumicity.net.br'),
(3, 'OI', '76535764033157', 'janailton.santos@oi.net.br'),
(4, 'VIVO', '02558157000162', 'atendimentopjmovel@vivo.com.br'),
(5, 'Bratel', '00739262000172', 'nfe-bratel@brateltelecom.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fatura`
--

CREATE TABLE `fatura` (
  `id_fatura` int(11) NOT NULL,
  `empresa_fatura` varchar(50) NOT NULL,
  `centro_custo_fatura` varchar(50) NOT NULL,
  `mes_fatura` varchar(50) NOT NULL,
  `valor_fatura` double NOT NULL,
  `obs_fatura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem_compra`
--

CREATE TABLE `ordem_compra` (
  `id_ordem_compra` varchar(11) NOT NULL,
  `ordem_compra` varchar(11) NOT NULL,
  `empresa_oc` varchar(50) NOT NULL,
  `mes_oc` varchar(50) NOT NULL,
  `centro_custo` varchar(50) NOT NULL,
  `valor_oc` float NOT NULL,
  `obs_oc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `suprimento`
--

CREATE TABLE `suprimento` (
  `id_suprimento` int(11) NOT NULL,
  `suprimento` varchar(50) NOT NULL,
  `empresa_sup1` varchar(50) NOT NULL,
  `empresa_sup2` varchar(50) NOT NULL,
  `empresa_sup3` varchar(50) NOT NULL,
  `empresa_sup4` varchar(50) NOT NULL,
  `valor_sup` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `suprimento`
--

INSERT INTO `suprimento` (`id_suprimento`, `suprimento`, `empresa_sup1`, `empresa_sup2`, `empresa_sup3`, `empresa_sup4`, `valor_sup`) VALUES
(1, 'Land and Mobile Communication', 'Sumicity', 'VIVO', 'OI', 'N/A', 300000),
(2, 'Bratel Communication (PABX Rental)', 'Bratel', 'N/A', 'N/A', 'N/A', 96000);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `centro_custo`
--
ALTER TABLE `centro_custo`
  ADD PRIMARY KEY (`id_centro_custo`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices para tabela `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`id_fatura`);

--
-- Índices para tabela `suprimento`
--
ALTER TABLE `suprimento`
  ADD PRIMARY KEY (`id_suprimento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `centro_custo`
--
ALTER TABLE `centro_custo`
  MODIFY `id_centro_custo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `fatura`
--
ALTER TABLE `fatura`
  MODIFY `id_fatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `suprimento`
--
ALTER TABLE `suprimento`
  MODIFY `id_suprimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
