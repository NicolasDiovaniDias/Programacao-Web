-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/12/2024 às 02:16
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `nome`, `email`, `telefone`, `senha`) VALUES
(50, 'nicolas diovani oliveira dias', 'nicolas@gmail.com', '984109830', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco_total` float NOT NULL,
  `preco_aluguel` float NOT NULL,
  `metros` float NOT NULL,
  `quartos` int(3) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `data_envio` date NOT NULL DEFAULT current_timestamp(),
  `foto_caminho` varchar(100) NOT NULL,
  `foto_nome` varchar(100) NOT NULL,
  `fk_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `descricao`, `preco_total`, `preco_aluguel`, `metros`, `quartos`, `endereco`, `data_envio`, `foto_caminho`, `foto_nome`, `fk_cliente`) VALUES
(17, 'casa pedra, bem localizada, perto de uma hamburgueria', 50, 25, 10, 2, '114 Rua da Concha', '2024-12-04', 'arquivos/67507feb92eb1.png', 'imagem_2024-12-04_131433567.png', NULL),
(18, 'casa rustica, para os que gostam de ficar perto da natureza', 200, 150, 15, 2, 'meio do mato, 582', '2024-12-04', 'arquivos/6750807818c4c.jpg', 'hobbit_invitingnz-2b4c7e60.jpg', NULL),
(19, 'casa monstro super ambientada, linda e mobiliada', 1000, 800, 50, 3, 'inferno 666', '2024-12-04', 'arquivos/67508d9407c73.png', 'imagem_2024-12-04_141249987.png', NULL),
(21, 'casa muito humilde, pra gente minimalista', 10, 5, 5, 1, 'meio do nada, 1200', '2024-12-04', 'arquivos/6750d6cce8862.png', 'imagem_2024-12-04_192458916.png', NULL),
(22, 'abacaxi super confortavel e dinamico, perfeito para alguem animado', 1200, 1500, 30, 2, '124 Rua da Concha', '2024-12-04', 'arquivos/6750ee8806410.webp', 'casa_bob_esponja.webp', NULL),
(24, 'casa dos teletubbies pra quem gosta de teletubbies', 2500, 2000, 50, 5, 'casa do caralho, 564', '2024-12-04', 'arquivos/675107947adb9.png', 'imagem_2024-12-04_225321198.png', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`),
  ADD KEY `fk_cliente` (`fk_cliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`fk_cliente`) REFERENCES `clientes` (`id_clientes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
