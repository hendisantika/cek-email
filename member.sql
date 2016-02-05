-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 01, 2011 at 12:54 AM
-- Server version: 5.0.24
-- PHP Version: 5.1.6
-- 
-- Database: `labs`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `member`
-- 

CREATE TABLE `member` (
  `kode_user` int(5) NOT NULL auto_increment,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `member`
-- 

INSERT INTO `member` VALUES (1, 'wawan@gmail.com', 'Wawan Surawan');
INSERT INTO `member` VALUES (2, 'agus@gmail.com', 'Agus Sujaya');
INSERT INTO `member` VALUES (3, 'gedesumawijaya@gmail.com', 'Gede Lumbung');
INSERT INTO `member` VALUES (4, 'antok@gmail.com', 'Antok Tok Tok Tok');
