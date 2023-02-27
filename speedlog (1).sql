-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Fev-2023 às 01:33
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
  `tempo_estimado` time NOT NULL,
  `distancia_percorrer` varchar(100) NOT NULL,
  `numero_destino_entrega` varchar(45) NOT NULL,
  `numero_origem_entrega` int(11) NOT NULL,
  `peso_entrega` float NOT NULL,
  `distancia_entrega` float NOT NULL,
  `tempo_deslocamento` datetime NOT NULL,
  `motoboy_idmotoboy` int(11) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `complemento_entrega` mediumtext NOT NULL,
  `assinado_por` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `motoboy`
--

CREATE TABLE `motoboy` (
  `idmotoboy` int(11) NOT NULL,
  `nome_motoboy` varchar(45) NOT NULL,
  `email_motoboy` varchar(200) NOT NULL,
  `criacao_func` datetime NOT NULL DEFAULT current_timestamp(),
  `foto_motoboy` mediumtext NOT NULL,
  `cpf_motoboy` varchar(45) NOT NULL,
  `telefone_motoboy` varchar(45) NOT NULL,
  `placa_moto` varchar(45) NOT NULL,
  `login_motoboy` varchar(100) NOT NULL,
  `senha_motoboy` varchar(100) NOT NULL,
  `cnh_motoboy` varchar(11) NOT NULL,
  `cnh_foto_motoboy` varchar(100) NOT NULL,
  `conta_corrente` varchar(8) NOT NULL,
  `agencia` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `preco_km`
--

CREATE TABLE `preco_km` (
  `id_km` int(11) NOT NULL,
  `km_rodado` int(20) NOT NULL,
  `valor_km` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `preco_km`
--

INSERT INTO `preco_km` (`id_km`, `km_rodado`, `valor_km`) VALUES
(1, 1, 0.5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `preco_peso`
--

CREATE TABLE `preco_peso` (
  `id` int(11) NOT NULL,
  `peso_min` decimal(4,2) NOT NULL,
  `peso_max` decimal(4,2) NOT NULL,
  `preco` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `preco_peso`
--

INSERT INTO `preco_peso` (`id`, `peso_min`, `peso_max`, `preco`) VALUES
(1, '0.00', '1.00', '3.00'),
(2, '1.00', '3.00', '5.00'),
(3, '3.00', '8.00', '9.00'),
(4, '8.00', '12.00', '12.00');

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
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome_usuario`, `login_usuario`, `senha_usuario`, `cpf_usuario`, `cep_usuario`, `email_usuario`, `telefone_usuario`, `foto_usuario`, `criacao_user`) VALUES
(1, 'Patrick Almeida', '123', '202cb962ac59075b964b07152d234b70', '072.839.060-45', '64004-305', 'teste@gmail.com', '(86)99184-7682', 'ft_padrao_user.png', '2023-02-25 15:55:15');

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
-- Índices para tabela `preco_km`
--
ALTER TABLE `preco_km`
  ADD PRIMARY KEY (`id_km`);

--
-- Índices para tabela `preco_peso`
--
ALTER TABLE `preco_peso`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `preco_km`
--
ALTER TABLE `preco_km`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `preco_peso`
--
ALTER TABLE `preco_peso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
