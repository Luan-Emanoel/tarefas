-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jul-2022 às 00:49
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `db_coopercred`
--
CREATE DATABASE IF NOT EXISTS `db_coopercred` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_coopercred`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `cod` int(11) NOT NULL,
  `usuario` varchar(300) NOT NULL,
  `senha` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`cod`, `usuario`, `senha`) VALUES
(1, 'adm', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `url`) VALUES
(3, 'imgbanco/banner2.png'),
(4, 'imgbanco/banner3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(300) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`cod`, `nome`, `endereco`, `telefone`, `url`) VALUES
(1, 'M & G Despachante', 'Rua Major Gote, 1845 - Patos de Minas/MG', '', 'imgbanco/767e31299287d515747d60381beae518.jpg'),
(4, 'Posto Patão', 'BR 365 KM 407 - Patos de Minas/MG', '', 'imgbanco/ad5df8cc2ba6e2b72cbec5168dcd1b2f.jpg'),
(6, 'JANDAIA ASSESSORIA - LICENÇAS E ANTT', 'R. Gentil Freitas Macedo, 59 - Jd. Patricia - Uberlândia/MG', '(34) 32176103', 'imgbanco/0c90bed000f31ee181534c17ca01d350.jpg'),
(7, 'MEGATEC RANDON', '', '', 'imgbanco/edf30d1cb71cc73912afea988c313a44.jpg'),
(8, 'FACCHINI S/A', '', '', 'imgbanco/8e950e431e9a5333bd037d0cba76b1df.png'),
(9, 'MINAS IMPLEMENTOS LIBRELATO', '', '', 'imgbanco/31e35ed2d1cc71e982c9b507f064e33d.png'),
(10, 'BR IMPLEMENTOS NOMA', '', '', 'imgbanco/003e1fadb258e4a6aff604be0d0394a9.jpg'),
(11, 'BRASLUX LANTERNAS E SINALEIRAS', '', '', 'imgbanco/fc8925a5c5b3e53d28e5a3244ab2db90.jpg'),
(12, 'SANSUY LONAS', '', '', 'imgbanco/048d1a27ca77a1525115462984de7401.png'),
(13, 'SUSPENSYS', '', '', 'imgbanco/53a41495e2efe9517c6ba548fa2142bb.png'),
(14, 'MAXION RODAS', '', '', 'imgbanco/d33eb7f7b67e7210e456a6aba20abf12.jpg'),
(15, 'AVERY DENNISON FAIXAS REFLETIVAS', '', '', 'imgbanco/4a01e58f716378de16d7578c41341f18.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod` int(11) NOT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `preco` int(12) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod`, `tipo`, `nome`, `preco`, `url`) VALUES
(9, 'C', 'Baú Facchini 30 Paletes 2022 *Pronta Entrega*', 169000, 'imgbanco/7b0477efa0aaf9ff7089959a109ef75b.jpg'),
(10, 'C', 'Graneleira 4º Eixo 2022 Facchini Medida 13,50m X 1,80', 222000, 'imgbanco/71a687bbb4835ce3d4e850be0fb90a77.jpg'),
(11, 'C', 'Basculante LS 3 Eixos 0km *45m³*', 205000, 'imgbanco/bbb44a5cbc0eaece7de9b56673656893.jpg'),
(12, 'C', 'PROMOÇÃO *Rodocaçamba Randon 0km - 1 Un Preço Especial*', 425000, 'imgbanco/1f5e290b971d8a682a30a371151c940a.jpg'),
(13, 'C', '1 Un - Bicaçamba 0km Condição Especial', 299000, 'imgbanco/6b07ec24da0bfb370c53bad4dc819746.jpg'),
(14, 'C', 'Tanque De Combustível 35 Mil Litros C/ Bottom', 237000, 'imgbanco/0a94f8dba332cf344a2b8e13ab6df42e.jpg'),
(15, 'C', 'Graneleira Facchini 04/05 Revisada', 48000, 'imgbanco/1576f76f5e002eff7fcdac6f16ca0c8a.jpg'),
(16, 'C', 'Rodotrem Graneleiro Guerra 2022 *Pronta Entrega*', 295000, 'imgbanco/b5c6f6fc91828c20a8a141fd09db758d.jpg'),
(17, 'C', 'Baú Facchini 30 Paletes 2022 *Uma Unidade Disponivel*', 159900, 'imgbanco/8d7f9a0a5b9a56e43a9c693c7a9b3059.jpg'),
(18, 'C', 'Graneleira Facchini 2022 *Uma Unidade Disponivel*', 139900, 'imgbanco/6472f5630de709253dc612766c02c909.jpg'),
(19, 'C', 'Rodo Caçamba Facchini 2022 0km 5ºroda', 410000, 'imgbanco/bea36615096f7b2c07871ff888f272bd.jpg'),
(20, 'C', 'Basculante LS 3 Eixos 0km *30m³* EXTRA LEVE', 177000, 'imgbanco/2014b344f31e441626a46576cadb6dba.jpg'),
(21, 'C', 'Rodotrem Graneleiro Guerra *Pronta Entrega* 2022', 295000, 'imgbanco/f84bb5c373bf58dc4da54e3cc3db296b.jpg'),
(22, 'C', 'Basculante Vanderleia Randon 11/12 Revisada', 137000, 'imgbanco/ef0c71129e88bb2ea73e1562245830d6.jpg'),
(23, 'C', 'Bitrenzão Tanque Facchini 2022 Com 62 Mil Litros', 330000, 'imgbanco/c25362fadc59c276003c130a110b6253.jpg'),
(24, 'C', 'Rodocaçamba Librelato 5º Roda 2022 Extra Leve', 423000, 'imgbanco/56dfbd70500f2295da197f23a9b8ea85.jpg'),
(25, 'C', 'Bicaçamba Librelato 2022 Extra Leve', 315000, 'imgbanco/d688c6d6c47bf4aaa0f85278b154d19d.jpg'),
(26, 'C', 'Bicaçamba Librelato 19/20 Padrão Coamo', 275000, 'imgbanco/45cdae58b23ac8bd95e557c552be791c.jpg'),
(27, 'C', 'Graneleira 4º Eixo Guerra 2022', 229000, 'imgbanco/0ce62a1c59b367588f0989c52eda9df4.jpg'),
(28, 'C', 'Bicaçamba Librelato 2018 *Revisado* Lona Fácil', 258000, 'imgbanco/d367fe8139944c9fe46fb3abd9ff71e0.jpg'),
(29, 'C', 'Bicaçamba Facchini 2022 *Pronta Entrega*', 295000, 'imgbanco/d47aea6a460ecca1d0e626fc57bee7b6.jpg'),
(30, 'C', 'Basculante 4º Eixo Facchini 2022 Pronta Entrega', 295000, 'imgbanco/88023ba8b30ea395bcebdbc7e637fcbd.jpg'),
(31, 'C', 'Forrageiro Basculante Hidráulico Facchini Novo', 37900, 'imgbanco/fbd5e7dad6a89fd67590ed4d0c1946cb.jpg'),
(32, 'C', 'Reboque Basculante Hidráulico América 6000 Kh 6m³', 36600, 'imgbanco/767cd1149cea4d99f9484047706069b9.jpg'),
(33, 'C', 'Reboque Agrícola Modelo Fixa Monobloco Novo', 18500, 'imgbanco/76f2617c930784a0913f981614a174c6.jpg'),
(34, 'C', 'Forrageiro Basculante Hidráulico 5000kg 5m³ Novo', 29500, 'imgbanco/d868af1154221ba777a40074514f0933.jpg'),
(35, 'C', 'Tanque Agrícola 6500 Litros Eixo Tandem Novo', 34500, 'imgbanco/727bb7ff3b8db2d9aba2e7a40cb66739.jpg'),
(36, 'C', 'Tanque Agrícola 4500 Litros Novo', 22500, 'imgbanco/543a31330b6b7ec559f5be0f1454e1a8.jpg'),
(37, 'C', 'Rodocaçamba Guerra 2022 *Dolly 5º Roda*', 420000, 'imgbanco/debccdaf89a361b85802bb58f6a7cf62.jpg'),
(38, 'C', 'Rodotrem Basculante Modelo 2022 Randon 0km', 448000, 'imgbanco/643dc478d1505d23eb50f2ff9fbd3d6a.jpg'),
(39, 'C', 'Basculante Facchini 25m³ 2022 0km', 175000, 'imgbanco/83fb4eb187d1c7c0d7403e56316871b5.jpg'),
(40, 'C', 'Graneleiro Facchini 2022 Medida: 12,50 *Pronta Entrega*', 148000, 'imgbanco/d6cfdad4f9ddef192048a021839461f4.jpg'),
(41, 'C', 'Graneleiro 2022 0km *2 Suspensores* Pronta Entrega', 148000, 'imgbanco/6bec56501f58d831c364fc69a6717bce.jpg'),
(42, 'C', 'Rodo Caçamba Facchini 5º Roda 0km', 410000, 'imgbanco/be293192f20ba9ba28bc59f5f33ac159.jpg'),
(43, 'C', 'Rodotrem Basculante 0km Dolly Rebaixado 2022', 410000, 'imgbanco/fcbe0f42d53d69a9e16afa06df440585.jpg'),
(44, 'C', 'Rodocaçamba Librelato 0km Extra Leve Pronta Entrega', 417000, 'imgbanco/2bd18b4f4dd23bc3dc0c5bcbbef8a443.jpg'),
(45, 'C', 'OFERTA * Rodocaçamba Randon 0km * 1 Unidade Preço Especial', 0, 'imgbanco/88023ba8b30ea395bcebdbc7e637fcbd.jpg'),
(47, 'P', 'Lanterna Diamond II 12v', 330, 'imgbanco/2b908101ff1c481da416b04d3d741715.jpg'),
(48, 'P', 'Lanterna Diamond III', 650, 'imgbanco/8229c0f686000ae62223529346b8a1e8.jpg'),
(49, 'P', 'Lanterna Diamond II', 480, 'imgbanco/75ada8ebd907d1b0d4be2b9144a9ca54.jpg'),
(50, 'P', 'Lanterna Diamond I', 420, 'imgbanco/94427eddbc773d82f9fa2d2a733e1b5c.jpg'),
(51, 'P', 'Lanterna Style III', 380, 'imgbanco/46a5079513a3442e75671398914c23d9.jpg'),
(52, 'P', 'Lanterna Style Prisma', 350, 'imgbanco/3325c037036459f05b589ccfaf145012.jpg'),
(53, 'P', 'Lanterna Trailer II', 765, 'imgbanco/a0c8716618166334a4ed51d0e6b9aaf1.jpg'),
(54, 'P', 'Lanterna Trailer III', 650, 'imgbanco/5e1214a6325b40693f0d71396977aa87.jpg'),
(55, 'P', 'Lanterna Noma', 530, 'imgbanco/dc1b0653ed03743e345da188b97557de.jpg'),
(56, 'P', 'Lanterna Duct Wide', 600, 'imgbanco/10adeff24ae45824af833dc40d5b1593.jpg'),
(57, 'P', 'Lanterna Braspoint IV', 420, 'imgbanco/7a4654aa76c73956788d0acd6714f6b6.jpg'),
(58, 'P', 'Lanterna Braspoint IV Facchini', 570, 'imgbanco/25d10392c652404476aa6c931a4fb665.jpg'),
(59, 'P', 'Lanterna Triplo X', 570, 'imgbanco/c39c6ec91aae19053dd2fd649c3afa78.jpg'),
(60, 'P', 'Conector 5 Vias Para Lanternas', 35, 'imgbanco/79a98242caad4709be1b6311a79b2acd.jpg'),
(61, 'P', 'Conector 2 Vias Para Sinaleiras', 15, 'imgbanco/792f219ed642d19b07d762377e6dcb77.jpg'),
(62, 'P', 'Tomada Elétrica 7 Polos Macho', 45, 'imgbanco/5dc5e4271fa827237be5a35f769aeb5c.jpg'),
(63, 'P', 'Tomada Elétrica 7 Polos Fêmea', 45, 'imgbanco/85de91b90cf18f8c01dbc7a423126b2d.jpg'),
(64, 'P', 'Modulo Com Chicote Para Lanternas E Sinaleiras De LED', 190, 'imgbanco/7c6997312cb0e33460716a0b5b4be265.jpg'),
(65, 'P', 'Placas De Alumínio Laterais', 30, 'imgbanco/1c1b8ed675acf3b4c0328982965e3b53.jpg'),
(66, 'P', 'Placas De Alumínio Traseiras', 35, 'imgbanco/84c7602b69584f47ab66736634289af2.jpg'),
(67, 'P', 'Tira Fina Guerra', 60, 'imgbanco/89aef6e9a559428491fc19c0df7690f6.jpg'),
(68, 'P', 'Sinaleira Randon', 40, 'imgbanco/0058f37e9f258755bc9f77f3bf579f49.jpg'),
(69, 'P', 'Sinaleira Guerra', 40, 'imgbanco/7e3f59ed080bf4ae8eea4f221142b13a.jpg'),
(70, 'P', 'Sinaleira Guerra Sem Suporte', 35, 'imgbanco/39588c37d5ac5657fb1796fa5b36634a.jpg'),
(71, 'P', 'Sinaleira Redonda', 40, 'imgbanco/5da54b8a7e0e622861285c8930e93ef1.jpg'),
(72, 'P', 'Sinaleira Redonda Sem Suporte', 35, 'imgbanco/ec0084b73f42a6b25ededf7f317db0ee.jpg'),
(73, 'P', 'Faixa Refletiva Lateral Avery Dennison', 4, 'imgbanco/6145bf66b5a045dfe035a313bcbcfb13.jpg'),
(74, 'P', 'Faixa Refletiva Traseira Avery Dennison', 85, 'imgbanco/9c60492a1339cd2f7edc748b4d2568dc.jpg'),
(75, 'P', 'Cabo Do ABS', 700, 'imgbanco/9c60492a1339cd2f7edc748b4d2568dc.jpg'),
(76, 'P', 'Caixa De Ferramenta Randon', 550, 'imgbanco/df0405103a0f97879a900ecf03cb9681.jpg'),
(77, 'P', 'Caixa De Ferramenta Metal 60x60 Cm', 1300, 'imgbanco/9eef7f17d35c2ca84f22020eec7583a3.jpg'),
(78, 'P', 'Caixa De Cozinha Metal 114x60x60 Cm', 2400, 'imgbanco/42a87ed7b59edc3f45431954013ccbeb.jpg'),
(79, 'P', 'Caixa De Cozinha Cavalli', 1850, 'imgbanco/3392d2348095c08ca68dbc00944828e3.jpg'),
(80, 'P', 'Lanterna Traseira Randon Style', 600, 'imgbanco/dbf04e8ce84671d09140119d4ed6a329.jpg'),
(81, 'P', 'Lanterna Style III Randon', 480, 'imgbanco/783c5a58a3040a328bee30bf9afffec0.jpg'),
(82, 'P', 'Lanterna Style Prisma Original Randon', 450, 'imgbanco/c157a599c5ca8e69306f374923ff9758.jpg'),
(83, 'P', 'Caixa De Reposição Lanterna Randon', 200, 'imgbanco/2ada6fc54907d0664c257f8857270388.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;
