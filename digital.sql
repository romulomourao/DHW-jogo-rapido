
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 08/11/2015 às 15:45:36
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u562093690_hack`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `digital`
--

CREATE TABLE IF NOT EXISTS `digital` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `confirmacao` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `data` varchar(10) NOT NULL,
  `endereco` varchar(20) NOT NULL,
  `saldo` varchar(10) NOT NULL,
  `cartao` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
