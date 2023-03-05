-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2023 às 01:07
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

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_adm`, `login_adm`, `senha_adm`, `nome_adm`, `telefone_adm`, `cep_adm`, `cpf_adm`, `email_adm`) VALUES
(1, '123', '123', 'Patrick', '31232321', '32133214', '321321321', 'patrick@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregas`
--

CREATE TABLE `entregas` (
  `idEntregas` int(11) NOT NULL,
  `desc_entrega` text NOT NULL,
  `peso_entrega` float NOT NULL,
  `complemento_entrega` text DEFAULT NULL,
  `cep_origem_entrega` varchar(9) NOT NULL,
  `numero_origem_entrega` int(4) NOT NULL,
  `bairro_origem` text DEFAULT NULL,
  `logradouro_origem` text DEFAULT NULL,
  `cep_destino_entrega` varchar(9) NOT NULL,
  `numero_destino_entrega` int(4) NOT NULL,
  `bairro_destino` text NOT NULL,
  `logradouro_destino` text NOT NULL,
  `distancia_km` text NOT NULL,
  `tempo_transporte_km` text NOT NULL,
  `tempo_minutos` int(11) NOT NULL,
  `valor_total` float NOT NULL,
  `data_pedido` datetime NOT NULL DEFAULT current_timestamp(),
  `status_entrega` text NOT NULL,
  `hora_inicio_transporte` datetime DEFAULT NULL,
  `hora_previsto_tranporte` datetime DEFAULT NULL,
  `motoboy_idmotoboy` int(11) DEFAULT NULL,
  `Usuario_idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `entregas`
--

INSERT INTO `entregas` (`idEntregas`, `desc_entrega`, `peso_entrega`, `complemento_entrega`, `cep_origem_entrega`, `numero_origem_entrega`, `bairro_origem`, `logradouro_origem`, `cep_destino_entrega`, `numero_destino_entrega`, `bairro_destino`, `logradouro_destino`, `distancia_km`, `tempo_transporte_km`, `tempo_minutos`, `valor_total`, `data_pedido`, `status_entrega`, `hora_inicio_transporte`, `hora_previsto_tranporte`, `motoboy_idmotoboy`, `Usuario_idUsuario`) VALUES
(2, 'Açucar, Feijão, Arroz', 5, 'Não', '36071-070', 194, 'Tiguera', 'Rua José Francisco Garcia', '36035-720', 214, 'Serra D\'Água', 'Rua Eduardo Sathler', '8.5 km', '20 mins', 20, 19.25, '2023-03-02 10:13:38', 'Pendente', NULL, NULL, NULL, 1),
(3, '31', 0.13, '123', '36071-070', 31, 'Tiguera', 'Rua José Francisco Garcia', '22793-720', 41, 'Barra da Tijuca', 'Rua Rino Levi', '198.8 km', '3 hour 0 mins', 180, 156.4, '2023-03-02 19:30:59', 'Pendente', NULL, NULL, NULL, 1);

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
  `agencia` varchar(4) NOT NULL,
  `status_cnh_motoboy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `motoboy`
--

INSERT INTO `motoboy` (`idmotoboy`, `nome_motoboy`, `email_motoboy`, `criacao_func`, `foto_motoboy`, `cpf_motoboy`, `telefone_motoboy`, `placa_moto`, `login_motoboy`, `senha_motoboy`, `cnh_motoboy`, `cnh_foto_motoboy`, `conta_corrente`, `agencia`, `status_cnh_motoboy`) VALUES
(4, 'Patrick Almeida', 'teste@gmail.com', '2023-02-27 14:50:23', 'd9d7ad8b56cc1808f8fb662dc1dabbe5.png', '072.839.060-45', '(32)13312-3213', '3213212', '123', '202cb962ac59075b964b07152d234b70', '32132132132', '032becddbab30e7e2d0f88c20e1e35b7.jpg', '3123', '3213', 'Em Analise'),
(5, 'Marcelo Augusto', 'marceloapafs@gmail.com', '2023-02-28 08:26:55', '2c8a22eed25742b58c4eeb7cb2096c13.jpg', '159.678.945-75', '(32)99138-5129', 'mg45425', 'marcelo', '9880c35d8804ed40f467de976963966b', '25415564154', 'b65fcf66558229c99d470f6a5d2ef3f4.jpg', '1541 515', '9541', 'Em Analise'),
(6, 'Nelsin', 'nelsin@gmail.com', '2023-03-01 10:34:43', 'b8281c70e2ecd0b4eec31cb744c95072.jpg', '100.973.916-60', '(32)12345-6789', '3322313', '321', 'caf1a3dfb505ffed0d024130f58c5cfa', '12345678912', '3d044213e2197990512fe37f34d6bde5.jpg', '1231 232', '2312', 'Em Analise');

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
-- Estrutura da tabela `preco_tempo`
--

CREATE TABLE `preco_tempo` (
  `id_tempo` int(11) NOT NULL,
  `tempo_rodado` int(20) NOT NULL,
  `valor_tempo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `preco_tempo`
--

INSERT INTO `preco_tempo` (`id_tempo`, `tempo_rodado`, `valor_tempo`) VALUES
(1, 1, 0.3);

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
-- Índices para tabela `preco_tempo`
--
ALTER TABLE `preco_tempo`
  ADD PRIMARY KEY (`id_tempo`);

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
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `entregas`
--
ALTER TABLE `entregas`
  MODIFY `idEntregas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `motoboy`
--
ALTER TABLE `motoboy`
  MODIFY `idmotoboy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT de tabela `preco_tempo`
--
ALTER TABLE `preco_tempo`
  MODIFY `id_tempo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
