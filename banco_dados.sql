-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/05/2024 às 22:01
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
-- Banco de dados: `banco_dados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`id`, `email`, `nome`, `senha`) VALUES
(100002, 'dpaiva266@hotmail.com', 'dpaiva266@hotmail.com', '000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `serviço` varchar(45) DEFAULT NULL,
  `data_serv` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cnpj`, `telefone`, `serviço`, `data_serv`, `cidade`, `estado`, `endereco`, `valor`) VALUES
(6, 'DANIEL PAIVA', '33.333.222/0000-00', '+5581993619196', 'limpeza de fachada', '2024-03-02', 'Caruaru / PE', 'Pernambuco', 'Caruaru', '300'),
(7, 'THIAGO FERREIRA', '44.555.666/999-09', '+5581993619196', 'limpeza de fachada', '2024-03-02', 'Caruaru / PE', 'Pernambuco', 'SANTA CRUZ DO CAPIBARIBE', '4000'),
(8, 'DIANA SILVA', '11.222.666/999-43', '+5581993619196', 'limpeza de vidros', '2024-03-03', 'Caruaru / PE', 'Pernambuco', 'TORITAMA', '250'),
(9, 'DAVID MELO', '55.777.888/555-09', '+5581993619196', 'limpeza de fachada', '2024-03-03', 'Caruaru / PE', 'Pernambuco', 'SÃO CAETANO', '580'),
(10, 'VANILDO SANTOS', '11.222.444/333-99', '+5581993619196', 'limpeza de vidros', '2024-03-04', 'Caruaru / PE', 'Pernambuco', 'BEZERROS', '350'),
(11, 'JOÃO CRLOS', '66.888.777/999-99', '+5581993619196', 'limpeza de fachada', '2024-03-05', 'Caruaru / PE', 'Pernambuco', 'GRAVATÁ', '350'),
(12, 'MARIA SANTANA', '33.555.333/888-22', '+5581993619196', 'limpeza de vidros', '2024-03-02', 'Caruaru / PE', 'Pernambuco', 'SURUBIN', '500'),
(13, 'MARIA SANTANA', '33.555.333/888-22', '+5581993619196', 'limpeza de vidros', '2024-03-02', 'Caruaru / PE', 'Pernambuco', 'SURUBIN', '500'),
(14, 'MARIA SANTANA', '33.555.333/888-22', '+5581993619196', 'limpeza de vidros', '2024-03-02', 'Caruaru / PE', 'Pernambuco', 'SURUBIN', '500'),
(15, 'DANIEL ARAUJO PAIVA', '678.876\0001-81', '+5581993619196', 'limpeza de vidros', '2024-03-04', 'Caruaru / PE', 'Pernambuco', 'Caruaru', '5000'),
(16, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'limpeza de vidros', '2024-04-30', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800'),
(17, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'limpeza de fachada', '2024-04-20', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800'),
(18, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'outro', '2024-04-30', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800'),
(19, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'outro', '2024-04-30', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800'),
(20, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'limpeza de vidros', '2024-04-29', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800'),
(21, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'outro', '2024-05-01', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800'),
(22, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'outro', '2024-04-23', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800'),
(23, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'limpeza de fachada', '2024-05-10', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800'),
(24, 'DANIEL ARAUJO PAIVA', '40912304000140', '81993619196', 'limpeza de vidros', '2024-04-24', 'Caruaru / PE', 'Pernambuco', 'rua jose martins sobrinho, 56, 56', '800');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nome`, `sobrenome`, `senha`) VALUES
(30, 'dpaiva267@gmail.com', 'DANIEL', 'PAIVA', '0101'),
(31, 'dpaiva266@hotmail.com', 'DANIEL', 'PAIVA', '000');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
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
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100008;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
