-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2023 às 17:23
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `questoes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id` int(11) NOT NULL,
  `resposta` text NOT NULL,
  `pergunta_id` int(11) NOT NULL,
  `val_resposta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `alternativas`
--

INSERT INTO `alternativas` (`id`, `resposta`, `pergunta_id`, `val_resposta`) VALUES
(1, '1', 1, 1),
(2, '2', 1, 2),
(3, '3', 1, 2),
(4, '4', 1, 2),
(5, '5', 1, 2),
(6, 'Campo Grande', 2, 1),
(7, 'Três Lagoas', 2, 2),
(8, 'Dourados', 2, 2),
(9, 'Ladário', 2, 2),
(10, 'Corumbá', 2, 2),
(11, '2', 3, 1),
(12, '3', 3, 2),
(13, '4', 3, 2),
(14, '7', 3, 2),
(15, '8', 3, 2),
(16, '2', 4, 1),
(17, '3', 4, 2),
(18, '4', 4, 2),
(19, '5', 4, 2),
(20, '6', 4, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `questao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `questao`) VALUES
(1, 'pergunta'),
(2, 'Qual é a capital do Mato Grosso do Sul'),
(3, 'Quanto é 1+1?'),
(4, '1+1?');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `recorde` int(11) NOT NULL,
  `senha` text NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `recorde`, `senha`, `nome`) VALUES
(1, 'emailinserido@gmail.com', 11, '123456', 'lucas'),
(2, 'teste8@teste.com', 0, '123456', 'robersval'),
(15, 'qwerty@gmail.com', 0, '123456', 'qwerty'),
(16, 'qwertyuiop@gamil.com', 0, '1234567', 'qwertyuiop'),
(17, 'qazxsw@gmail.com', 0, '123456', 'qazxsw'),
(18, 'qwerghn@gmailapks.csjd', 0, '123456', 'qwertujk,'),
(19, 'wdd@dfdgfaf', 0, '123456', 'asdcasdca'),
(20, 'asfafa@gmail.com', 0, '123456', 'asdcasdca'),
(21, '123456@gmail.com', 0, '123456', 'asdcasdca'),
(22, 'lucas13roma@gmail.com', 4, '123456', 'asdcasdca'),
(23, 'teste@gmail.com', 0, '123456', 'aaaaaaaaaa'),
(24, '', 4, '', ''),
(25, '', 5, '', ''),
(26, 'exemplo@exemplo.com', 4, '123456', 'exemplo@exemplo.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
