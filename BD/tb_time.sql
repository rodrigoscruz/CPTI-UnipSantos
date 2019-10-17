-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2019 às 17:21
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
-- Estrutura da tabela `tb_time`
--

CREATE TABLE `tb_time` (
  `id` int(3) NOT NULL,
  `tbtime` varchar(30) NOT NULL,
  `tbra1` varchar(30) NOT NULL,
  `tbnome1` varchar(30) NOT NULL,
  `tbturma1` varchar(30) NOT NULL,
  `tbcurso1` varchar(30) NOT NULL,
  `tbmail1` varchar(30) NOT NULL,
  `tbcel1` varchar(30) NOT NULL,
  `tbsexo1` varchar(30) NOT NULL,
  `tblinke1` varchar(30) NOT NULL,
  `tbgit1` varchar(30) NOT NULL,
  `tbhabili1` varchar(30) NOT NULL,
  `tbra2` varchar(30) NOT NULL,
  `tbnome2` varchar(30) NOT NULL,
  `tbturma2` varchar(30) NOT NULL,
  `tbcurso2` varchar(30) NOT NULL,
  `tbmail2` varchar(30) NOT NULL,
  `tbcel2` varchar(30) NOT NULL,
  `tbsexo2` varchar(30) NOT NULL,
  `tblinke2` varchar(30) NOT NULL,
  `tbgit2` varchar(30) NOT NULL,
  `tbhabili2` varchar(30) NOT NULL,
  `tbra3` varchar(30) NOT NULL,
  `tbnome3` varchar(30) NOT NULL,
  `tbturma3` varchar(30) NOT NULL,
  `tbcurso3` varchar(30) NOT NULL,
  `tbmail3` varchar(30) NOT NULL,
  `tbcel3` varchar(30) NOT NULL,
  `tbsexo3` varchar(30) NOT NULL,
  `tblinke3` varchar(30) NOT NULL,
  `tbgit3` varchar(30) NOT NULL,
  `tbhabili3` varchar(30) NOT NULL,
  `tbra4` varchar(30) NOT NULL,
  `tbnome4` varchar(30) NOT NULL,
  `tbturma4` varchar(30) NOT NULL,
  `tbcurso4` varchar(30) NOT NULL,
  `tbmail4` varchar(30) NOT NULL,
  `tbcel4` varchar(30) NOT NULL,
  `tbsexo4` varchar(30) NOT NULL,
  `tblinke4` varchar(30) NOT NULL,
  `tbgit4` varchar(30) NOT NULL,
  `tbhabili4` varchar(30) NOT NULL,
  `tbra5` varchar(30) NOT NULL,
  `tbnome5` varchar(30) NOT NULL,
  `tbturma5` varchar(30) NOT NULL,
  `tbcurso5` varchar(30) NOT NULL,
  `tbmail5` varchar(30) NOT NULL,
  `tbcel5` varchar(30) NOT NULL,
  `tbsexo5` varchar(30) NOT NULL,
  `tblinke5` varchar(30) NOT NULL,
  `tbgit5` varchar(30) NOT NULL,
  `tbhabili5` varchar(30) NOT NULL,
  `tbferra1` varchar(30) NOT NULL,
  `tbferra2` varchar(30) NOT NULL,
  `tbferra3` varchar(30) NOT NULL,
  `tbferra4` varchar(30) NOT NULL,
  `tbferra5` varchar(30) NOT NULL,
  `tbdesafio` text NOT NULL,
  `tbtema` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_time`
--

INSERT INTO `tb_time` (`id`, `tbtime`, `tbra1`, `tbnome1`, `tbturma1`, `tbcurso1`, `tbmail1`, `tbcel1`, `tbsexo1`, `tblinke1`, `tbgit1`, `tbhabili1`, `tbra2`, `tbnome2`, `tbturma2`, `tbcurso2`, `tbmail2`, `tbcel2`, `tbsexo2`, `tblinke2`, `tbgit2`, `tbhabili2`, `tbra3`, `tbnome3`, `tbturma3`, `tbcurso3`, `tbmail3`, `tbcel3`, `tbsexo3`, `tblinke3`, `tbgit3`, `tbhabili3`, `tbra4`, `tbnome4`, `tbturma4`, `tbcurso4`, `tbmail4`, `tbcel4`, `tbsexo4`, `tblinke4`, `tbgit4`, `tbhabili4`, `tbra5`, `tbnome5`, `tbturma5`, `tbcurso5`, `tbmail5`, `tbcel5`, `tbsexo5`, `tblinke5`, `tbgit5`, `tbhabili5`, `tbferra1`, `tbferra2`, `tbferra3`, `tbferra4`, `tbferra5`, `tbdesafio`, `tbtema`) VALUES
(12, 'gdfgdddfggfd', 'gdtdfg', 'tertrytyty', 'dgdfgd', 'fttyerye', 'eertertet@gfgfdgd.com', '(13) 9 6757-8656', 'Feminino', '', 'wetwtqetwet', 'Leader', '54gfdgf', 'fghgjfgjfgjfjfgj', 'bfggdf', 'hchdf', 'eertertet@gfgfdgd.com', '(13) 9 9654-6546', 'Feminino', '', '', 'Business', ',/l,kol', 'gdffdgdgdfdfgdfgdf', 'mklm k', 'hfghfghfgh', 'eertertet@gfgfdgd.com', '(13) 7 8978-9789', 'Feminino', '', '', 'Developer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Desktop', 'Tablet', 'Laptop', '', '', 'gdffdgfgdddfgdghfgjfg', ''),
(13, 'b hjbhj', 'gdtdfg', 'tertrytyty', 'dgdfgd', 'fttyerye', 'eertertet@gfgfdgd.com', '(86) 7 8678-6786', 'Feminino', '', 'wetwtqetwet', 'Leader', '54gfdgf', 'fghgjfgjfgjfjfgj', 'bfggdf', 'hchdf', 'eertertet@gfgfdgd.com', '(67) 8 6786-7867', 'Feminino', '', '', 'Business', ',/l,kol', 'gdffdgdgdfdfgdfgdf', 'mklm k', 'hfghfghfgh', 'eertertet@gfgfdgd.com', '(67) 8 6786-7867', 'Feminino', '', '', 'Developer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Desktop', 'Tablet', 'Laptop', '', '', 'gdffdgfgdddfgdghfgjfg', ''),
(14, 'dsa', 'fsafg8s', 'rwerfqe', 'fsa2fs', 'safsafsafdsadas', 'eertertet@gfgfdgd.com', '(95) 6 1481-1987', 'Masculino', '', '', 'Leader', 'fsa6fd6', 'fsafdsafsfa', 'fas3f6', 'fsafdasfa', 'eertertet@gfgfdgd.com', '(28) 4 9487-5597', 'Masculino', '', '', 'Business', 'fasd+sa', 'fsadasfs', 'afs8sa', 'fsafdsafas', 'eertertet@gfgfdgd.com', '(77) 7 7777-7777', 'Masculino', '', '', 'Business', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Desktop', 'Tablet', 'Desktop', '', '', 'fdfdfsdgsdgdfgsdf', 'tema1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_time`
--
ALTER TABLE `tb_time`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `tbtime` (`tbtime`),
  ADD UNIQUE KEY `tbra1` (`tbra1`,`tbmail1`,`tbcel1`,`tbra2`,`tbmail2`,`tbcel2`,`tbra3`,`tbmail3`,`tbcel3`,`tbra4`,`tbmail4`,`tbcel4`,`tbra5`,`tbmail5`,`tbcel5`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_time`
--
ALTER TABLE `tb_time`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
