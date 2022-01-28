-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Vendredi 28 Janvier 2022 à 21:25
-- Version du serveur: 4.1.9
-- Version de PHP: 4.3.10
-- 
-- Base de données: `bdhamouda`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `compte`
-- 

CREATE TABLE `compte` (
  `NumCompte` varchar(20) NOT NULL default '',
  `MotPasse` varchar(8) NOT NULL default '',
  `NomPrenom` varchar(35) NOT NULL default '',
  `Solde` decimal(10,3) NOT NULL default '0.000',
  PRIMARY KEY  (`NumCompte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Contenu de la table `compte`
-- 

INSERT INTO `compte` VALUES ('00000000000000000001', '11111111', 'Afef NOUIR', 1500.000);
INSERT INTO `compte` VALUES ('00000000000000000002', '22222222', 'Amir DAROUICH', 2700.000);
INSERT INTO `compte` VALUES ('00000000000000000003', '33333333', 'Sami MAGHAOUI', -50.500);
INSERT INTO `compte` VALUES ('00000000000000000004', '44444444', 'Asma ISMAIL', 100.000);

-- --------------------------------------------------------

-- 
-- Structure de la table `transactiopn`
-- 

CREATE TABLE `transactiopn` (
  `IdTrans` int(11) NOT NULL auto_increment,
  `NumCompte` varchar(20) NOT NULL default '',
  `DateTrans` varchar(10) NOT NULL default '',
  `LibelleTrans` varchar(40) NOT NULL default '',
  `MontTrans` decimal(10,3) NOT NULL default '0.000',
  PRIMARY KEY  (`IdTrans`),
  KEY `NumCompte` (`NumCompte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Contenu de la table `transactiopn`
-- 

INSERT INTO `transactiopn` VALUES (2, '11111111111111111111', '1234567899', 'FGERHGERHBE', 154.000);
INSERT INTO `transactiopn` VALUES (3, '00000000000000000001', '1234567899', 'TEST', 12.000);