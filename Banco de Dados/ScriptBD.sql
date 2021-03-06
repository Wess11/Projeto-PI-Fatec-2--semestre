USE [master]
GO
/****** Object:  Database [dtbAWM]    Script Date: 15/06/2022 21:29:22 ******/
CREATE DATABASE [dtbAWM]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'dtbWesley_Data', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\dtbWesley_Data.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 10%)
 LOG ON 
( NAME = N'dtbWesley_Log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\dtbWesley_Log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [dtbAWM] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [dtbAWM].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [dtbAWM] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [dtbAWM] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [dtbAWM] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [dtbAWM] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [dtbAWM] SET ARITHABORT OFF 
GO
ALTER DATABASE [dtbAWM] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [dtbAWM] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [dtbAWM] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [dtbAWM] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [dtbAWM] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [dtbAWM] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [dtbAWM] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [dtbAWM] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [dtbAWM] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [dtbAWM] SET  DISABLE_BROKER 
GO
ALTER DATABASE [dtbAWM] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [dtbAWM] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [dtbAWM] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [dtbAWM] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [dtbAWM] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [dtbAWM] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [dtbAWM] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [dtbAWM] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [dtbAWM] SET  MULTI_USER 
GO
ALTER DATABASE [dtbAWM] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [dtbAWM] SET DB_CHAINING OFF 
GO
ALTER DATABASE [dtbAWM] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [dtbAWM] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [dtbAWM] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [dtbAWM] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'dtbAWM', N'ON'
GO
ALTER DATABASE [dtbAWM] SET QUERY_STORE = OFF
GO
USE [dtbAWM]
GO
/****** Object:  Table [dbo].[clientes_log]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[clientes_log](
	[id_cliente_log] [int] IDENTITY(1,1) NOT NULL,
	[id_cliente] [int] NOT NULL,
	[nome] [varchar](50) NULL,
	[nomeAntigo] [varchar](50) NULL,
	[cidade] [varchar](70) NULL,
	[cidadeAntigo] [varchar](70) NULL,
	[endereco] [varchar](70) NULL,
	[enderecoAntigo] [varchar](70) NULL,
	[bairro] [varchar](70) NULL,
	[bairroAntigo] [varchar](70) NULL,
	[complemento] [varchar](50) NULL,
	[complementoAntigo] [varchar](50) NULL,
	[cpfcnpj] [varchar](16) NULL,
	[cpfcnpjAntigo] [varchar](16) NULL,
	[telefone] [varchar](20) NULL,
	[telefoneAntigo] [varchar](20) NULL,
	[email] [varchar](30) NULL,
	[emailAntigo] [varchar](30) NULL,
	[whatsapp] [varchar](15) NULL,
	[whatsappAntigo] [varchar](15) NULL,
	[observacao] [varchar](80) NULL,
	[observacaoAntigo] [varchar](80) NULL,
	[status] [varchar](10) NULL,
	[data_log] [datetime] NULL,
 CONSTRAINT [PK__clientes__log] PRIMARY KEY CLUSTERED 
(
	[id_cliente_log] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
 CONSTRAINT [UQ__clientes__log] UNIQUE NONCLUSTERED 
(
	[cpfcnpj] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  View [dbo].[VW_CLIENTES_LOG]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create view [dbo].[VW_CLIENTES_LOG]
as
SELECT  [id_cliente_log]
      ,[id_cliente]
      ,[nome]
      ,[nomeAntigo]
      ,[cidade]
      ,[cidadeAntigo]
      ,[endereco]
      ,[enderecoAntigo]
      ,[bairro]
      ,[bairroAntigo]
      ,[complemento]
      ,[complementoAntigo]
      ,[cpfcnpj]
      ,[cpfcnpjAntigo]
      ,[telefone]
      ,[telefoneAntigo]
      ,[email]
      ,[emailAntigo]
      ,[whatsapp]
      ,[whatsappAntigo]
      ,[observacao]
      ,[observacaoAntigo]
      ,[status]
      ,[data_log]
  FROM [clientes_log]
GO
/****** Object:  Table [dbo].[clientes]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[clientes](
	[id_cliente] [int] IDENTITY(1,1) NOT NULL,
	[nome] [varchar](50) NOT NULL,
	[cidade] [varchar](70) NOT NULL,
	[endereco] [varchar](70) NOT NULL,
	[bairro] [varchar](70) NOT NULL,
	[complemento] [varchar](50) NULL,
	[cpfcnpj] [varchar](16) NOT NULL,
	[telefone] [varchar](20) NULL,
	[email] [varchar](30) NULL,
	[whatsapp] [varchar](15) NULL,
	[observacao] [varchar](80) NULL,
 CONSTRAINT [PK__clientes__677F38F5EB92FB40] PRIMARY KEY CLUSTERED 
(
	[id_cliente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
 CONSTRAINT [UQ__clientes__4A84D7ECDF9B129A] UNIQUE NONCLUSTERED 
(
	[cpfcnpj] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[compras]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[compras](
	[id_compra] [int] NOT NULL,
	[ds_compra] [varchar](35) NOT NULL,
	[vl_compra] [numeric](10, 2) NOT NULL,
	[ds_cliente] [varchar](35) NOT NULL,
	[tel_cliente] [varchar](35) NULL,
	[dt_compra] [date] NOT NULL,
	[observação] [varchar](80) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[contas_pagar_receber]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[contas_pagar_receber](
	[id_contasPagarReceber] [int] IDENTITY(1,1) NOT NULL,
	[cod_carteira] [int] NOT NULL,
	[cod_banco] [int] NOT NULL,
	[nr_conta] [varchar](11) NOT NULL,
	[nr_agencia] [varchar](5) NOT NULL,
	[ds_banco] [varchar](25) NOT NULL,
	[vl_pago] [numeric](10, 2) NOT NULL,
	[vl_jurosmes] [numeric](10, 2) NOT NULL,
	[vl_jurosdia] [numeric](10, 2) NOT NULL,
	[data_vencimento] [date] NOT NULL,
	[dt_pagamento] [date] NOT NULL,
	[titulo] [varchar](25) NULL,
	[bordero] [int] NULL,
	[pix] [varchar](50) NULL,
	[boletobancario] [varchar](70) NULL,
	[vl_parcela] [decimal](15, 3) NULL,
	[cnpjcpf] [varchar](15) NOT NULL,
	[observacao] [varchar](80) NULL,
 CONSTRAINT [PK__contas_p__1D30502AA4B83B56] PRIMARY KEY CLUSTERED 
(
	[id_contasPagarReceber] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
 CONSTRAINT [UQ__contas_p__D2FD5F64415F3BBB] UNIQUE NONCLUSTERED 
(
	[cnpjcpf] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[form_clientes]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[form_clientes](
	[id_form] [int] IDENTITY(1,1) NOT NULL,
	[nome_completo] [varchar](50) NOT NULL,
	[nome_usuario] [varchar](25) NOT NULL,
	[senha] [varchar](25) NOT NULL,
	[conf_senha] [varchar](25) NOT NULL,
	[email] [varchar](50) NOT NULL,
	[telefone] [varchar](15) NOT NULL,
	[sexo] [varchar](10) NULL,
	[cpfcnpj] [int] NOT NULL,
	[date_nasc] [date] NULL,
	[cidade] [varchar](30) NULL,
	[estado] [varchar](3) NULL,
	[endereco] [varchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_form] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[fornecedor]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[fornecedor](
	[id_fornecedor] [int] IDENTITY(1,1) NOT NULL,
	[ds_fornecedor] [varchar](50) NOT NULL,
	[endereco] [varchar](70) NOT NULL,
	[bairro] [varchar](50) NULL,
	[complemento] [varchar](50) NULL,
	[cidade] [varchar](50) NOT NULL,
	[cnpjcpf] [varchar](15) NOT NULL,
	[telefone] [varchar](30) NULL,
	[email] [varchar](30) NULL,
	[whatsapp] [varchar](15) NULL,
	[data_cadastro] [date] NOT NULL,
	[observacao] [varchar](80) NULL,
 CONSTRAINT [PK__forneced__6C477092CF72E503] PRIMARY KEY CLUSTERED 
(
	[id_fornecedor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
 CONSTRAINT [UQ__forneced__D2FD5F64C52C7433] UNIQUE NONCLUSTERED 
(
	[cnpjcpf] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[produtos]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[produtos](
	[id_produto] [int] IDENTITY(1,1) NOT NULL,
	[ds_produto] [varchar](30) NOT NULL,
	[preco] [numeric](15, 3) NOT NULL,
	[marca] [varchar](30) NULL,
	[observacao] [varchar](80) NULL,
 CONSTRAINT [PK__produtos__BA38A6B877AD41ED] PRIMARY KEY CLUSTERED 
(
	[id_produto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[vendas]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[vendas](
	[id_venda] [int] IDENTITY(1,1) NOT NULL,
	[id_cliente] [int] NOT NULL,
	[id_fornecedor] [int] NOT NULL,
	[vl_vendatotal] [numeric](15, 3) NULL,
	[vl_notafiscal] [numeric](15, 3) NULL,
	[dt_venda] [datetime] NOT NULL,
	[ds_venda] [varchar](50) NOT NULL,
	[observacao] [varchar](80) NULL,
 CONSTRAINT [PK__vendas__4595B5ABF9E601E8] PRIMARY KEY CLUSTERED 
(
	[id_venda] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[vendas_itens]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[vendas_itens](
	[id_vendas_itens] [int] IDENTITY(1,1) NOT NULL,
	[id_venda] [int] NOT NULL,
	[id_produto] [int] NOT NULL,
	[qt_produto] [int] NULL,
	[vl_produto] [numeric](15, 3) NULL,
 CONSTRAINT [PK_vendas_itens] PRIMARY KEY CLUSTERED 
(
	[id_vendas_itens] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[clientes_log] ADD  CONSTRAINT [DF_clientes_log_data_log]  DEFAULT (getdate()) FOR [data_log]
GO
ALTER TABLE [dbo].[vendas]  WITH CHECK ADD  CONSTRAINT [FK_vendas_clientes] FOREIGN KEY([id_cliente])
REFERENCES [dbo].[clientes] ([id_cliente])
GO
ALTER TABLE [dbo].[vendas] CHECK CONSTRAINT [FK_vendas_clientes]
GO
ALTER TABLE [dbo].[vendas]  WITH CHECK ADD  CONSTRAINT [FK_vendas_fornecedor] FOREIGN KEY([id_fornecedor])
REFERENCES [dbo].[fornecedor] ([id_fornecedor])
GO
ALTER TABLE [dbo].[vendas] CHECK CONSTRAINT [FK_vendas_fornecedor]
GO
ALTER TABLE [dbo].[vendas_itens]  WITH CHECK ADD  CONSTRAINT [FK_vendas_itens_produtos] FOREIGN KEY([id_produto])
REFERENCES [dbo].[produtos] ([id_produto])
GO
ALTER TABLE [dbo].[vendas_itens] CHECK CONSTRAINT [FK_vendas_itens_produtos]
GO
ALTER TABLE [dbo].[vendas_itens]  WITH CHECK ADD  CONSTRAINT [FK_vendas_itens_vendas_itens] FOREIGN KEY([id_venda])
REFERENCES [dbo].[vendas] ([id_venda])
GO
ALTER TABLE [dbo].[vendas_itens] CHECK CONSTRAINT [FK_vendas_itens_vendas_itens]
GO
/****** Object:  StoredProcedure [dbo].[RELEATORIO_VENDA]    Script Date: 15/06/2022 21:29:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE PROC [dbo].[RELEATORIO_VENDA]
AS
BEGIN
	declare @sCampos varchar(max)
	declare @sTabelas varchar(max)
	declare @sGroup varchar(max)
	declare @sOrder varchar(max)
	declare @sSQL  varchar(max)

	set @sCampos =
			'  clientes.nome Cliente,' +
			'  year(vendas.dt_venda) Ano,' +
			'  month(vendas.dt_venda) Mês,' +
			'  sum(vendas.vl_vendatotal) Total_Vendas '
	set @sTabelas = 
		' vendas vendas' + 
		' left join clientes clientes on vendas.id_cliente = clientes.id_cliente'

	set @sGroup = 
		' clientes.nome, ' +
		' year(vendas.dt_venda), ' +
		' month(vendas.dt_venda)'

	set @sOrder =
		' year(vendas.dt_venda), ' +
		' month(vendas.dt_venda), ' +
		' clientes.nome '

	set @sSQL = ' select ' + @sCampos + ' from ' + @sTabelas + ' group by ' + @sGroup + ' order by ' + @sOrder
		
	exec(@sSQL) 

	 
END
GO
USE [master]
GO
ALTER DATABASE [dtbAWM] SET  READ_WRITE 
GO
