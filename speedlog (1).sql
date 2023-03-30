-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Mar-2023 às 18:51
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
  `nome_adm` text NOT NULL,
  `telefone_adm` varchar(45) NOT NULL,
  `cep_adm` varchar(45) NOT NULL,
  `cpf_adm` varchar(45) NOT NULL,
  `email_adm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_adm`, `login_adm`, `senha_adm`, `nome_adm`, `telefone_adm`, `cep_adm`, `cpf_adm`, `email_adm`) VALUES
(1, '123', '202cb962ac59075b964b07152d234b70', 'Patrick', '31232321', '32133214', '321321321', 'patrick@gmail.com');

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
  `valor_70p` float NOT NULL,
  `data_pedido` datetime NOT NULL DEFAULT current_timestamp(),
  `status_entrega` text NOT NULL,
  `assinado_por` text NOT NULL,
  `hora_inicio_transporte` datetime DEFAULT NULL,
  `hora_previsto_tranporte` datetime DEFAULT NULL,
  `motoboy_idmotoboy` int(11) DEFAULT NULL,
  `Usuario_idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `entregas`
--

INSERT INTO `entregas` (`idEntregas`, `desc_entrega`, `peso_entrega`, `complemento_entrega`, `cep_origem_entrega`, `numero_origem_entrega`, `bairro_origem`, `logradouro_origem`, `cep_destino_entrega`, `numero_destino_entrega`, `bairro_destino`, `logradouro_destino`, `distancia_km`, `tempo_transporte_km`, `tempo_minutos`, `valor_total`, `valor_70p`, `data_pedido`, `status_entrega`, `assinado_por`, `hora_inicio_transporte`, `hora_previsto_tranporte`, `motoboy_idmotoboy`, `Usuario_idUsuario`) VALUES
(1, 'teste', 0.31, '31', '36071-070', 45, 'Tiguera', 'Rua José Francisco Garcia', '22041-011', 46, 'Copacabana', 'Rua Santa Clara', '190.1 km', '2 hour 56 mins', 176, 150.85, 105.6, '2023-03-20 08:19:18', 'Em Transporte', '', '2023-03-20 11:18:22', '2023-03-20 14:14:22', 4, 1),
(2, 'teste', 2.5, 'Pão de pacote', '36071-070', 150, 'Tiguera', 'Rua José Francisco Garcia', '36071-060', 162, 'Lourdes', 'Rua Jardelino de Souza', '434 m', '1 min', 1, 222.3, 155.61, '2023-03-20 08:27:49', 'Em Transporte', '', '2023-03-20 11:18:34', '2023-03-20 11:19:34', 4, 2),
(3, 'teste', 5, 'não pode abrir a caixa', '36035-720', 2, 'Serra D\'Água', 'Rua Eduardo Sathler', '36035-700', 4, 'Serra D\'Água', 'Rua Maria Aladia', '289 m', '1 min', 1, 153.8, 107.66, '2023-03-20 09:14:29', 'Entregue', 'jurandiz porlantes', '2023-03-20 09:17:53', '2023-03-20 09:18:53', 4, 1),
(4, 'teste', 0.01, 'Pão de pacote', '36071-070', 150, 'Tiguera', 'Rua José Francisco Garcia', '36071-060', 162, 'Lourdes', 'Rua Jardelino de Souza', '434 m', '1 min', 1, 220.3, 154.21, '2023-03-20 10:53:34', 'Em Transporte', '', '2023-03-20 11:18:38', '2023-03-20 11:19:38', 4, 3),
(5, 'teste', 0.41, '41', '36071-070', 41, 'Tiguera', 'Rua José Francisco Garcia', '22041-011', 41, 'Copacabana', 'Rua Santa Clara', '190.1 km', '2 hour 56 mins', 176, 150.85, 105.6, '2023-03-20 11:52:00', 'Pendente', '', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motoboy`
--

CREATE TABLE `motoboy` (
  `idmotoboy` int(11) NOT NULL,
  `nome_motoboy` text NOT NULL,
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
(4, 'Patrick Almeida', 'teste@gmail.com', '2023-02-27 14:50:23', 'd9d7ad8b56cc1808f8fb662dc1dabbe5.png', '072.839.060-45', '(32)13312-3213', '3213212', '123', '202cb962ac59075b964b07152d234b70', '32132132132', '032becddbab30e7e2d0f88c20e1e35b7.jpg', '3123', '3213', 'Aceito'),
(5, 'Marcelo August1', 'marceloapafs@gmail.com', '2023-02-28 08:26:55', 'a844382bf2622eb133c8437d70f8cd9e.jpg', '159.678.945-75', '(32) 99138-5112', 'mg45423', 'marcelo', '9880c35d8804ed40f467de976963966b', '25415564153', 'dd780929f1b69434898f5634040b0905.jpg', '12312', '9542', 'Negado'),
(6, 'Nelsin', 'nelsin@gmail.com', '2023-03-01 10:34:43', 'b8281c70e2ecd0b4eec31cb744c95072.jpg', '100.973.916-60', '(32)12345-6789', '3322313', '321', 'caf1a3dfb505ffed0d024130f58c5cfa', '12345678912', '17fba51fe4fe2a2488e364cb12c1ebe1.jpg', '1231 232', '2312', 'Em Analise'),
(7, 'anteteguêmon', 'oanteteguemon@mail.cm', '2023-03-20 09:26:06', 'bd38a346591c7c0a4daa54d3ca38b8b7.png', '683.834.836-66', '(26)83834-8366', '2683834', 'antedeguemon', '0425bdfb7df6c8d4e95d2801c6593274', '26838348366', 'b4e7906a74463f44debf34e87b31cb3c.jpg', '2683 ', '3666', 'Em Analise');

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
  `nome_usuario` text NOT NULL,
  `login_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  `cpf_usuario` varchar(45) NOT NULL,
  `cep_usuario` varchar(45) NOT NULL,
  `email_usuario` text NOT NULL,
  `telefone_usuario` varchar(45) NOT NULL,
  `foto_usuario` varchar(45) DEFAULT NULL,
  `criacao_user` datetime NOT NULL DEFAULT current_timestamp(),
  `hash_key` varchar(256) DEFAULT NULL,
  `hash_expiry` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome_usuario`, `login_usuario`, `senha_usuario`, `cpf_usuario`, `cep_usuario`, `email_usuario`, `telefone_usuario`, `foto_usuario`, `criacao_user`, `hash_key`, `hash_expiry`) VALUES
(1, 'Patrick Almeida', '123', '202cb962ac59075b964b07152d234b70', '072.839.060-45', '64004-305', 'teste@gmail.com', '(86)99184-7682', 'ft_padrao_user.png', '2023-02-25 15:55:15', NULL, NULL),
(2, 'Marcelo', 'marcelo', '202cb962ac59075b964b07152d234b70', '235.421.321-56', '36071-070', '0000874901@senaimgaluno.com.br', '(32)99154-8752', 'cf983e47cfc2b2042676e2e3ee854b4d.jpg', '2023-03-20 08:24:27', NULL, NULL),
(3, 'Lasio', 'lala', '202cb962ac59075b964b07152d234b70', '212.125.154-51', '36123-000', 'lasio@gmail.com', '(32)99165-4564', 'ft_padrao_user.png', '2023-03-20 10:53:11', NULL, NULL);

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
  MODIFY `idEntregas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `motoboy`
--
ALTER TABLE `motoboy`
  MODIFY `idmotoboy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
