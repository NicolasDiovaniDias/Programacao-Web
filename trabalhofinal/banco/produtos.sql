-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2024 às 20:33
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
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco_total` float NOT NULL,
  `preco_aluguel` float NOT NULL,
  `metros` int(5) NOT NULL,
  `quartos` int(3) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `data_envio` date NOT NULL DEFAULT current_timestamp(),
  `foto_caminho` varchar(100) NOT NULL,
  `foto_nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `descricao`, `preco_total`, `preco_aluguel`, `metros`, `quartos`, `endereco`, `data_envio`, `foto_caminho`, `foto_nome`) VALUES
(16, 'casa abacaxi bem localizada, perto de uma hamburgueria', 100, 50, 20, 1, '124 Rua da Concha', '2024-12-04', 'arquivos/67507f579b5e6.webp', 'casa_bob_esponja.webp'),
(17, 'casa pedra, bem localizada, perto de uma hamburgueria', 50, 25, 10, 2, '114 Rua da Concha', '2024-12-04', 'arquivos/67507feb92eb1.png', 'imagem_2024-12-04_131433567.png'),
(18, 'casa rustica, para os que gostam de ficar perto da natureza', 200, 150, 15, 2, 'meio do mato, 582', '2024-12-04', 'arquivos/6750807818c4c.jpg', 'hobbit_invitingnz-2b4c7e60.jpg'),
(19, 'casa monstro super ambientada, linda e mobiliada', 1000, 800, 50, 3, 'inferno 666', '2024-12-04', 'arquivos/67508d9407c73.png', 'imagem_2024-12-04_141249987.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
