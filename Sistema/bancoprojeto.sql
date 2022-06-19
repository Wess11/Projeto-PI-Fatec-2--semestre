-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Maio-2022 às 03:20
-- Versão do servidor: 10.7.3-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancoprojeto`
--
create database bancoprojeto;
-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `bairro` varchar(70) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `cpfcnpj` varchar(16) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `observacao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_pagar`
--

CREATE TABLE `contas_pagar` (
  `cod_carteira` int(11) NOT NULL,
  `cod_banco` int(11) NOT NULL,
  `nr_conta` varchar(11) NOT NULL,
  `nr_agencia` varchar(5) NOT NULL,
  `ds_banco` varchar(25) NOT NULL,
  `vl_pago` decimal(10,2) NOT NULL,
  `vl_jurosmes` decimal(10,2) NOT NULL,
  `vl_jurosdia` decimal(10,2) NOT NULL,
  `data_vencimento` date NOT NULL,
  `dt_pagamento` date NOT NULL,
  `titulo` varchar(25) DEFAULT NULL,
  `bordero` int(50) DEFAULT NULL,
  `pix` varchar(50) DEFAULT NULL,
  `boletobancario` varchar(70) DEFAULT NULL,
  `vl_parcela` decimal(15,3) DEFAULT NULL,
  `cnpjcpf` varchar(15) NOT NULL,
  `observacao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_receber`
--

CREATE TABLE `contas_receber` (
  `cod_carteira` int(11) NOT NULL,
  `cod_banco` int(11) NOT NULL,
  `nr_conta` varchar(11) NOT NULL,
  `nr_agencia` varchar(5) NOT NULL,
  `ds_banco` varchar(25) NOT NULL,
  `valor_total` decimal(15,3) NOT NULL,
  `vl_jurosmes` decimal(15,3) NOT NULL,
  `vl_jurosdia` decimal(15,3) NOT NULL,
  `dt_vencimento` date NOT NULL,
  `dt_recebimento` date NOT NULL,
  `titulo` varchar(25) DEFAULT NULL,
  `bordero` int(50) DEFAULT NULL,
  `pix` varchar(50) DEFAULT NULL,
  `boletobancario` varchar(70) DEFAULT NULL,
  `cpfcnpj` varchar(15) NOT NULL,
  `observacao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `ds_fornecedor` varchar(50) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) NOT NULL,
  `cnpjcpf` varchar(15) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  `observacao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `ds_produto` varchar(30) NOT NULL,
  `preco` decimal(15,3) NOT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `observacao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_cl` int(11) NOT NULL,
  `id_fornec` int(11) NOT NULL,
  `vl_vendatotal` decimal(15,3) DEFAULT NULL,
  `vl_produto` decimal(15,3) DEFAULT NULL,
  `vl_notafiscal` decimal(15,3) DEFAULT NULL,
  `dt_venda` datetime NOT NULL,
  `dt_compra` date NOT NULL,
  `ds_venda` varchar(50) NOT NULL,
  `observacao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cpfcnpj` (`cpfcnpj`);

--
-- Índices para tabela `contas_pagar`
--
ALTER TABLE `contas_pagar`
  ADD PRIMARY KEY (`cod_banco`),
  ADD UNIQUE KEY `cnpjcpf` (`cnpjcpf`);

--
-- Índices para tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  ADD PRIMARY KEY (`cod_banco`),
  ADD UNIQUE KEY `cpfcnpj` (`cpfcnpj`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`),
  ADD UNIQUE KEY `cnpjcpf` (`cnpjcpf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_cl` (`id_cl`),
  ADD KEY `id_fornec` (`id_fornec`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`id_cl`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `vendas_ibfk_3` FOREIGN KEY (`id_fornec`) REFERENCES `fornecedor` (`id_fornecedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
