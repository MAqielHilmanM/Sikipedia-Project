-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2019 at 06:38 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikipedia`
--
CREATE DATABASE IF NOT EXISTS `db_sikipedia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_sikipedia`;

-- --------------------------------------------------------

--
-- Table structure for table `t_article`
--

DROP TABLE IF EXISTS `t_article`;
CREATE TABLE `t_article` (
  `id` varchar(40) NOT NULL,
  `article` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_article`
--

INSERT INTO `t_article` (`id`, `article`, `create_date`) VALUES
('Loreas_Lore', '\'\'\' Lorem ipsum \'\'\' dolor sit amet, et est natum salutandi, eum minimum dignissim te, assentior democritum vim in. Eum no aperiri assueverit, at pri harum saperet adipisci, tota expetenda ne usu. Eu adhuc dicunt sit. Ei saepe nominavi facilisis mea, in sit deleniti appetere tincidunt, sed an erat vivendo.\r\n\r\n== Lorem Sample 1 ==\r\nNam ad ipsum mazim quaestio. At vide iriure repudiare per, ei prima mundi electram per. An sea scriptorem referrentur. Ne vim brute porro aliquando. Dico dolorem ad sit. Cum malis saepe appetere in, deleniti eloquentiam ullamcorper in sea.\r\n\r\n== Lorem Sample 2 ==\r\nAn aliquam deserunt vis, qui in veri populo. Vis ex modo duis graeci. Ut tincidunt voluptatum vim, malis propriae accusata ne cum, tamquam verterem ad pro. Ius te copiosae luptatum convenire, ad alia admodum his, feugait urbanitas eu has. Vel graeco mandamus eu, ne sed labore officiis mnesarchum, mutat virtute nam et. Vis adipisci instructior ea, his ut aperiam consetetur sadipscing, ei mel sale delectus.\r\n\r\n== Lorem Sample 3 ==\r\nUsu impetus petentium in, ei probo quaeque iracundia eos, vix homero repudiare id. Fastidii mediocrem et vis, augue tincidunt consequuntur eam eu, vix primis detracto cu. Justo scribentur sit ne. Phaedrum gloriatur ut duo. Inermis graecis petentium eos eu.\r\n\r\n== Lorem Sample 4 ==\r\nIisque oblique bonorum cum an, eam no nonumy instructior. Et vix duis accusam ocurreret. Eam graeco ancillae expetendis ea, has verear iudicabit eu, ius ullum elitr omnes an. Per eu euismod perfecto. In cum amet habeo illum, quod audire iudicabit quo at.', '2019-04-23 15:54:03'),
('lorem_ipsum', 'lorem ipsum sim dolor amet\r\n\r\n== For Your Information ==\r\nlorem ipsum sim dolor amet is \'\'lorem\'\' ipsum sim \'\'\'dolor\'\'\'\r\n\r\n=== next information ===\r\nso the next information is. . . \r\n\r\n\r\n\'\' hidden \'\'', '2019-04-23 13:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `t_contributor`
--

DROP TABLE IF EXISTS `t_contributor`;
CREATE TABLE `t_contributor` (
  `id` int(11) NOT NULL,
  `id_article` varchar(40) NOT NULL,
  `id_user` int(11) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `edit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_contributor`
--

INSERT INTO `t_contributor` (`id`, `id_article`, `id_user`, `summary`, `edit_date`) VALUES
(1, 'lorem_ipsum', 1, 'sample text', '2019-04-23 11:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `email`, `username`, `password`) VALUES
(1, 'maqiel2600@gmail.com', 'maqielhm', 'aaaaaaaaaaaaaaaa'),
(3, 'aqiel', 'aqiel', '5ad62906c0a165807687018c82b36db8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_article`
--
ALTER TABLE `t_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_contributor`
--
ALTER TABLE `t_contributor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contributor_article_fk` (`id_article`),
  ADD KEY `contributor_user_fk` (`id_user`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_contributor`
--
ALTER TABLE `t_contributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_contributor`
--
ALTER TABLE `t_contributor`
  ADD CONSTRAINT `contributor_article_fk` FOREIGN KEY (`id_article`) REFERENCES `t_article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contributor_user_fk` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
