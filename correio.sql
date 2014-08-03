-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jul-2014 às 15:37
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_objeto_correio`
--

DROP DATABASE IF EXISTS `db_objeto_correio`;
CREATE DATABASE IF NOT EXISTS `db_objeto_correio` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_cs;
USE `db_objeto_correio`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_objetos`
--

CREATE TABLE IF NOT EXISTS `tb_objetos` (
  `cod_rastreio` char(13) COLLATE latin1_general_cs NOT NULL,
  `desc_obj` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `tb_usuarios_id_usr` int(11) NOT NULL,
  PRIMARY KEY (`cod_rastreio`),
  UNIQUE KEY `cod_rastreio_UNIQUE` (`cod_rastreio`),
  KEY `fk_tb_objetos_tb_usuarios_idx` (`tb_usuarios_id_usr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usr` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `login` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `senha` char(32) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id_usr`),
  UNIQUE KEY `id_usr_UNIQUE` (`id_usr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=0;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_objetos`
--
ALTER TABLE `tb_objetos`
  ADD CONSTRAINT `fk_tb_objetos_tb_usuarios` FOREIGN KEY (`tb_usuarios_id_usr`) REFERENCES `tb_usuarios` (`id_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
