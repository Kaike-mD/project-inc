-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2024 às 03:01
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carteira`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assc_contrato_cliente`
--

CREATE TABLE `assc_contrato_cliente` (
  `CD_CTO_CLI` int(10) NOT NULL,
  `CD_CTO` int(10) NOT NULL,
  `CD_CLI` int(10) NOT NULL,
  `DT_RGST` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CD_CLI` int(10) NOT NULL,
  `NM_CLI` varchar(200) NOT NULL,
  `DC_CPF` varchar(14) NOT NULL,
  `DC_TEL` varchar(15) NOT NULL,
  `DC_EMAIL` varchar(100) NOT NULL,
  `CD_MUNI` int(10) NOT NULL,
  `DT_RGST` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `CD_CTO` int(10) NOT NULL,
  `VL_CTO` float NOT NULL,
  `DT_ASS` date NOT NULL,
  `DT_INI` date NOT NULL,
  `DT_FIM` date NOT NULL,
  `DC_STATUS` varchar(1) NOT NULL,
  `DT_RGST` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vw_cliente_contrato`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vw_cliente_contrato` (
`CD_CLI` int(10)
,`NM_CLI` varchar(200)
,`DC_CPF` varchar(14)
,`DC_TEL` varchar(15)
,`DC_EMAIL` varchar(100)
,`CD_CTO` int(10)
,`VL_CTO` float
,`DT_ASS` date
,`DT_INI` date
,`DT_FIM` date
,`DC_STATUS` varchar(1)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `vw_cliente_contrato`
--
DROP TABLE IF EXISTS `vw_cliente_contrato`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_cliente_contrato`  AS SELECT `c`.`CD_CLI` AS `CD_CLI`, `c`.`NM_CLI` AS `NM_CLI`, `c`.`DC_CPF` AS `DC_CPF`, `c`.`DC_TEL` AS `DC_TEL`, `c`.`DC_EMAIL` AS `DC_EMAIL`, `ct`.`CD_CTO` AS `CD_CTO`, `ct`.`VL_CTO` AS `VL_CTO`, `ct`.`DT_ASS` AS `DT_ASS`, `ct`.`DT_INI` AS `DT_INI`, `ct`.`DT_FIM` AS `DT_FIM`, `ct`.`DC_STATUS` AS `DC_STATUS` FROM ((`cliente` `c` join `assc_contrato_cliente` `acc` on(`c`.`CD_CLI` = `acc`.`CD_CLI`)) join `contrato` `ct` on(`acc`.`CD_CTO` = `ct`.`CD_CTO`))  ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `assc_contrato_cliente`
--
ALTER TABLE `assc_contrato_cliente`
  ADD PRIMARY KEY (`CD_CTO_CLI`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CD_CLI`);

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`CD_CTO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assc_contrato_cliente`
--
ALTER TABLE `assc_contrato_cliente`
  MODIFY `CD_CTO_CLI` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3338;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CD_CLI` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `CD_CTO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
