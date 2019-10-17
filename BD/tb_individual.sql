-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2019 às 16:42
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcadastros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_individual`
--

CREATE TABLE `tb_individual` (
  `id` int(11) NOT NULL,
  `tb_nome` varchar(40) NOT NULL,
  `tb_email` varchar(40) NOT NULL,
  `tb_celular` int(11) NOT NULL,
  `tb_sexo` varchar(10) NOT NULL,
  `tb_data` date NOT NULL,
  `tb_ra` varchar(8) NOT NULL,
  `tb_turma` varchar(6) NOT NULL,
  `tb_curso` varchar(40) NOT NULL,
  `tb_github` varchar(60) NOT NULL,
  `tb_linkedin` varchar(60) NOT NULL,
  `tb_habilidade` varchar(15) NOT NULL,
  `tbdesafio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_individual`
--
ALTER TABLE `tb_individual`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_email` (`tb_email`),
  ADD UNIQUE KEY `tb_ra` (`tb_ra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_individual`
--
ALTER TABLE `tb_individual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
