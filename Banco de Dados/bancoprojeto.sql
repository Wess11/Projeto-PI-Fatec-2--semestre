-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2022 às 00:53
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
  `observacao` varchar(80) DEFAULT NULL,
  `senha` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `cidade`, `endereco`, `bairro`, `complemento`, `cpfcnpj`, `telefone`, `email`, `whatsapp`, `observacao`, `senha`) VALUES
(1, 'Marius Pessi', 'Araras', 'Rua Maria Amalia Ridolfo', '8 de Abril', 'Apartamento 3', '3224752380001/74', '(19)982335566', 'mariuspessi@yahoo.com.br', '(19)982335566', 'Dados Cliente 1', '12345');

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

--
-- Extraindo dados da tabela `contas_pagar`
--

INSERT INTO `contas_pagar` (`cod_carteira`, `cod_banco`, `nr_conta`, `nr_agencia`, `ds_banco`, `vl_pago`, `vl_jurosmes`, `vl_jurosdia`, `data_vencimento`, `dt_pagamento`, `titulo`, `bordero`, `pix`, `boletobancario`, `vl_parcela`, `cnpjcpf`, `observacao`) VALUES
(1, 341, '1654', '6599', 'Brasil', '370.00', '0.00', '0.00', '2022-05-28', '2022-05-25', '5648944156', 1484898, '963.852.741-99', '265541', '9658156458.000', '0', 'Monitores'),
(4, 342, '1654', '6599', 'Mercantil', '300.00', '0.00', '0.00', '2022-05-28', '2022-05-25', '5648944156', 1484898, '2518954654', '265541', '951599510001.000', '50', 'Pagamento Placas');

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

--
-- Extraindo dados da tabela `contas_receber`
--

INSERT INTO `contas_receber` (`cod_carteira`, `cod_banco`, `nr_conta`, `nr_agencia`, `ds_banco`, `valor_total`, `vl_jurosmes`, `vl_jurosdia`, `dt_vencimento`, `dt_recebimento`, `titulo`, `bordero`, `pix`, `boletobancario`, `cpfcnpj`, `observacao`) VALUES
(1, 341, '1654', '6599', 'Brasil', '380.000', '0.000', '0.000', '2022-05-25', '2022-06-01', 'Pagamento', 1484898, '963.852.741-99', '265541', '58418919', 'Placas Integradas');

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

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_fornecedor`, `ds_fornecedor`, `endereco`, `bairro`, `complemento`, `cidade`, `cnpjcpf`, `telefone`, `email`, `whatsapp`, `data_cadastro`, `observacao`) VALUES
(1, 'cutrale', 'Rodovia Wilson Finardi', 'Alemanha', 'KM 286', 'Conchal', '9658156458', '69484894', 'ambiental@cutrale.com.br', '(19)982335566', '2022-05-20', 'Placas Integradas'),
(6, 'Goodyear', 'Rodovia Anhanguera', 'Hungria', 'KM 286', 'Americana', '951599510001', '(19)3524-9984', 'ambgoodyear@goodyear.com.br', '(19)9824-9984', '2022-05-20', 'Monitores');

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

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `ds_produto`, `preco`, `marca`, `observacao`) VALUES
(1, 'Processador', '250.000', 'intel', 'processdor i5 '),
(2, 'Processador', '150.000', 'AMD', 'processdor ryzen5'),
(4, 'Placa de vÃ­deo', '120.000', 'Nvidea', 'Placa grÃ¡fica'),
(5, 'Placa mÃ£e', '150.000', 'Asus', 'Placa notebook'),
(6, 'Placa mÃ£e', '120.000', 'Asus', 'Placa notebook'),
(7, 'Placa Audio', '350.000', 'SoundBlaster', 'Placa audio cpu'),
(8, 'Placa Audio', '310.000', 'SoundBlaster', 'Placa audio cpu'),
(9, 'Placa Audio', '140.000', 'Sony', 'Placa audio profissional');

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
  `ds_venda` varchar(50) NOT NULL,
  `observacao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `id_prod`, `id_cl`, `id_fornec`, `vl_vendatotal`, `vl_produto`, `vl_notafiscal`, `dt_venda`, `ds_venda`, `observacao`) VALUES
(2, 1, 1, 1, '1580.000', '1500.000', '15287.000', '2022-06-07 00:00:00', 'Processadores AMD', 'Processadores Intel'),
(5, 4, 1, 1, '500.000', '500.000', '9635411.000', '2022-07-01 00:00:00', 'Venda a Vista', 'Placas');

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
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
