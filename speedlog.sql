-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Fev-2023 às 01:10
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `speedlog`
--
CREATE DATABASE IF NOT EXISTS `speedlog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `speedlog`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL,
  `login_adm` varchar(45) NOT NULL,
  `senha_adm` varchar(45) NOT NULL,
  `nome_adm` varchar(45) NOT NULL,
  `telefone_adm` varchar(45) NOT NULL,
  `cep_adm` varchar(45) NOT NULL,
  `cpf_adm` varchar(45) NOT NULL,
  `email_adm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregas`
--

CREATE TABLE `entregas` (
  `idEntregas` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `hora_inicio` datetime DEFAULT NULL,
  `horario_previsto` datetime DEFAULT NULL,
  `bairro_origem` mediumtext NOT NULL,
  `bairro_entrega` mediumtext NOT NULL,
  `numero_destino_entrega` varchar(45) NOT NULL,
  `numero_origem_entrega` int(11) NOT NULL,
  `entrega_entrega` mediumtext NOT NULL,
  `peso_entrega` float NOT NULL,
  `distancia_entrega` float NOT NULL,
  `tempo_deslocamento` datetime NOT NULL,
  `motoboy_idmotoboy` int(11) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `complemento_entrega` mediumtext NOT NULL,
  `Fragil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `motoboy`
--

CREATE TABLE `motoboy` (
  `idmotoboy` int(11) NOT NULL,
  `nome_motoboy` varchar(45) NOT NULL,
  `cep_motoboy` varchar(45) NOT NULL,
  `email_motoboy` varchar(200) NOT NULL,
  `criacao_func` datetime NOT NULL DEFAULT current_timestamp(),
  `estrelas_func` float DEFAULT NULL,
  `foto_motoboy` mediumtext NOT NULL,
  `cpf_motoboy` varchar(45) NOT NULL,
  `telefone_motoboy` varchar(45) NOT NULL,
  `placa_moto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `login_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  `cpf_usuario` varchar(45) NOT NULL,
  `cep_usuario` varchar(45) NOT NULL,
  `email_usuario` text NOT NULL,
  `telefone_usuario` varchar(45) NOT NULL,
  `foto_usuario` varchar(45) DEFAULT NULL,
  `criacao_user` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`idEntregas`),
  ADD KEY `fk_Entregas_motoboy_idx` (`motoboy_idmotoboy`),
  ADD KEY `fk_Entregas_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Índices para tabela `motoboy`
--
ALTER TABLE `motoboy`
  ADD PRIMARY KEY (`idmotoboy`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entregas`
--
ALTER TABLE `entregas`
  MODIFY `idEntregas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `motoboy`
--
ALTER TABLE `motoboy`
  MODIFY `idmotoboy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `entregas`
--
ALTER TABLE `entregas`
  ADD CONSTRAINT `fk_Entregas_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Entregas_motoboy` FOREIGN KEY (`motoboy_idmotoboy`) REFERENCES `motoboy` (`idmotoboy`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
