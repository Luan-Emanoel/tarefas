-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2022 às 22:52
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `db_formosanews`
--
CREATE DATABASE IF NOT EXISTS `db_formosanews` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `db_formosanews`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(4000) COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `url`) VALUES
(3, 'teste 3', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin dui ligula, sed consectetur turpis condimentum ac. Donec finibus at sem sit amet hendrerit. Morbi sollicitudin, nulla id congue tincidunt, est ligula pharetra orci, suscipit elementum lectus neque nec leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed malesuada ultrices purus non rhoncus. Nam sapien neque, mattis in pellentesque a, cursus ac sapien. Sed elementum quam vel semper elementum. Phasellus maximus placerat lorem lobortis malesuada. Duis eleifend arcu non odio dictum, id rhoncus ipsum ornare.\r\n\r\nIn sed magna sed nunc eleifend viverra. Maecenas maximus cursus congue. Aenean vel tempor arcu, quis malesuada neque. Aenean interdum a erat vel euismod. Integer molestie lectus metus, at congue nulla efficitur vel. Phasellus tristique sit amet nulla vitae lacinia. Vestibulum mattis eu ipsum quis pharetra. Integer a porttitor velit. Morbi magna sem, condimentum eget lectus in, auctor tincidunt metus. Donec bibendum nunc ut consequat volutpat. Nulla in varius dolor, et semper libero. Mauris consectetur felis vel condimentum luctus.', 'imgnoticias/PrayAscend.gif'),
(4, 'teste4', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin dui ligula, sed consectetur turpis condimentum ac. Donec finibus at sem sit amet hendrerit. Morbi sollicitudin, nulla id congue tincidunt, est ligula pharetra orci, suscipit elementum lectus neque nec leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed malesuada ultrices purus non rhoncus. Nam sapien neque, mattis in pellentesque a, cursus ac sapien. Sed elementum quam vel semper elementum. Phasellus maximus placerat lorem lobortis malesuada. Duis eleifend arcu non odio dictum, id rhoncus ipsum ornare.\r\n\r\nIn sed magna sed nunc eleifend viverra. Maecenas maximus cursus congue. Aenean vel tempor arcu, quis malesuada neque. Aenean interdum a erat vel euismod. Integer molestie lectus metus, at congue nulla efficitur vel. Phasellus tristique sit amet nulla vitae lacinia. Vestibulum mattis eu ipsum quis pharetra. Integer a porttitor velit. Morbi magna sem, condimentum eget lectus in, auctor tincidunt metus. Donec bibendum nunc ut consequat volutpat. Nulla in varius dolor, et semper libero. Mauris consectetur felis vel condimentum luctus.', 'imgnoticias/1693aa1ebe8443a7fbb396c10fff906b.jpg'),
(5, 'teste 1', 'teste', 'imgnoticias/Beebobble.gif'),
(6, 'teste', 'testetestetestetestetestetestetestetestetestetestetestetestetesteteste', 'imgnoticias/LeoFall.gif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(300) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
