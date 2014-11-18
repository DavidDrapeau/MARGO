DROP DATABASE IF EXISTS MARGO;

CREATE DATABASE IF NOT EXISTS MARGO;
USE MARGO;
-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 18 Novembre 2014 à 09:35
-- Version du serveur: 5.5.37
-- Version de PHP: 5.4.6-1ubuntu1.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestage`
--

-- --------------------------------------------------------

--
-- Structure de la table `ANNEESCOL`
--

CREATE TABLE IF NOT EXISTS `ANNEESCOL` (
  `ANNEESCOL` char(9) NOT NULL,
  PRIMARY KEY (`ANNEESCOL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ANNEESCOL`
--

INSERT INTO `ANNEESCOL` (`ANNEESCOL`) VALUES
('2000-2001'),
('2001-2002'),
('2002-2003'),
('2003-2004'),
('2004-2005'),
('2005-2006'),
('2006-2007'),
('2007-2008'),
('2008-2009'),
('2009-2010'),
('2010-2011'),
('2011-2012'),
('2012-2013'),
('2013-2014'),
('2014-2015'),
('2015-2016'),
('2016-2017'),
('2017-2018'),
('2018-2019'),
('2019-2020'),
('2020-2021'),
('2021-2022'),
('2022-2023'),
('2023-2024'),
('2024-2025'),
('2025-2026'),
('2026-2027'),
('2027-2028'),
('2028-2029'),
('2029-2030');

-- --------------------------------------------------------

--
-- Structure de la table `CLASSE`
--

CREATE TABLE IF NOT EXISTS `CLASSE` (
  `NUMCLASSE` char(32) NOT NULL,
  `IDSPECIALITE` smallint(6) DEFAULT NULL,
  `NUMFILIERE` int(11) NOT NULL,
  `NOMCLASSE` varchar(128) NOT NULL,
  PRIMARY KEY (`NUMCLASSE`),
  KEY `CLASSE_IBFK_1` (`IDSPECIALITE`),
  KEY `CLASSE_IBFK_2` (`NUMFILIERE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CLASSE`
--

INSERT INTO `CLASSE` (`NUMCLASSE`, `IDSPECIALITE`, `NUMFILIERE`, `NOMCLASSE`) VALUES
('1SIOA', NULL, 4, '1ére année BTS Service Informatique auxOrganisation'),
('1SIOB', NULL, 4, '1ére année BTS Service Informatique auxOrganisation'),
('2SISR', 2, 4, '2ème année BTS Service Informatique auxOrganisation'),
('2SLAM', 1, 4, '2ème année BTS Service Informatique auxOrganisation');

-- --------------------------------------------------------

--
-- Structure de la table `FILIERE`
--

CREATE TABLE IF NOT EXISTS `FILIERE` (
  `NUMFILIERE` int(11) NOT NULL,
  `LIBELLEFILIERE` varchar(128) NOT NULL,
  PRIMARY KEY (`NUMFILIERE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `FILIERE`
--

INSERT INTO `FILIERE` (`NUMFILIERE`, `LIBELLEFILIERE`) VALUES
(1, 'Management des Unités Commerciales'),
(2, 'Comptabilité et Gestion des Organisations'),
(3, 'Informatique de Gestion'),
(4, 'Services Informatiques aux Organisations'),
(5, 'Diplôme de Comptabilité et de Gestion'),
(6, 'Formation Complémentaire d''Initiative Locale');

-- --------------------------------------------------------

--
-- Structure de la table `PERSONNE`
--

CREATE TABLE IF NOT EXISTS `PERSONNE` (
  `IDPERSONNE` int(11) NOT NULL AUTO_INCREMENT,
  `IDSPECIALITE` smallint(6) DEFAULT NULL,
  `IDROLE` smallint(6) NOT NULL,
  `CIVILITE` char(32) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `NUM_TEL` char(13) NOT NULL,
  `ADRESSE_MAIL` varchar(30) NOT NULL,
  `NUM_TEL_MOBILE` char(15) DEFAULT NULL,
  `ETUDES` varchar(40) DEFAULT NULL,
  `FORMATION` varchar(128) DEFAULT NULL,
  `LOGINUTILISATEUR` varchar(128) DEFAULT NULL,
  `MDPUTILISATEUR` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`IDPERSONNE`),
  KEY `PERSONNE_IBFK_1` (`IDSPECIALITE`),
  KEY `PERSONNE_IBFK_2` (`IDROLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=304 ;

--
-- Contenu de la table `PERSONNE`
--

INSERT INTO `PERSONNE` (`IDPERSONNE`, `IDSPECIALITE`, `IDROLE`, `CIVILITE`, `NOM`, `PRENOM`, `NUM_TEL`, `ADRESSE_MAIL`, `NUM_TEL_MOBILE`, `ETUDES`, `FORMATION`, `LOGINUTILISATEUR`, `MDPUTILISATEUR`) VALUES
(1, NULL, 1, 'Monsieur', 'Bourgeois', 'Nicolas', '0240809080', 'admin-gestage@la-joliverie.com', NULL, NULL, NULL, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 1, 4, 'Mr', 'DEMARLY', 'thomas', '0600000000', 'tdemarl@gmail.com', '0600000000', 'STI option ï¿½lectrotechnique', 'NULL', 'tdemarly', 'ff289fa7cd0ed8339f20a43fa5f032d32fedd1d8'),
(13, NULL, 5, 'Monsieur', 'Jobs', 'Steve', '0000000000', 'test1@gmail.com', '', '', '', 'etudiant', '2df87b6c0bfbdb58b91c7a50ac9ca42b086db583'),
(14, 1, 3, 'Monsieur', 'Beauvais', 'Jean pierre', '0000000000', 'test@mail.fr', '0000000000', 'Bts SIO', 'BTS', 'test', '51abb9636078defbf888d8457a7c76f85c8f114c'),
(16, NULL, 4, 'Monsieur', 'Goulet', 'Jerome', '0251745362', 'gg@live.fr', '0685635853', 'Informatique', 'BTS SIO', 'jerome', 'gouletgg'),
(17, 1, 4, 'Monsieur', 'ANDRE', 'MAEL', '0287077166', 'mael.andre@la-joliverie.com', '0684797782', 'Informatique', 'BTSSIO', 'mandre', '04058f39ac9e4f1bb0628335d14456c54f6b6877'),
(18, 1, 4, 'Madame', 'BONNET', 'DAVID', '0297615048', 'david.bonnet@la-joliverie.com', '0626004283', 'Informatique', 'BTSSIO', 'dbonnet', '1ce4bfb41eabbf7254f85504149784b8c173bb67'),
(19, 1, 4, 'Monsieur', 'BRETIN', 'FLORIAN', '0285223640', 'florian.bretin@la-joliverie.co', '0644901184', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(20, 1, 4, 'Madame', 'BROYARD', 'JEREMY', '0241945941', 'jeremy.broyard@la-joliverie.co', '0635189380', 'Informatique', 'BTSSIO', 'jbroyard', '8edc6af8ff0eeeb77f18b8e2e9e25558c5e2e0c9'),
(21, 1, 4, 'Monsieur', 'CHANSON', 'EMILIE', '0226947520', 'emilie.chanson@la-joliverie.co', '0660743223', 'Informatique', 'BTSSIO', 'echanson', 'ec3e2b1d2db6ed7d4788596b3e67d25701a6616a'),
(22, 1, 4, 'Madame', 'CHARRIAU', 'PIERRE', '0256222603', 'pierre.charriau@la-joliverie.c', '0657718196', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(23, 1, 4, 'Monsieur', 'CORBINEAU', 'BENJAMIN', '0234241859', 'benjamin.corbineau@la-joliveri', '0663577589', 'Informatique', 'BTSSIO', 'bcorbineau', '3a1781e66829fd494fffd39985268bd82df83cc4'),
(24, 1, 4, 'Madame', 'COUTEAU', 'MAXIME', '0283835362', 'maxime.couteau@la-joliverie.co', '0620239730', 'Informatique', 'BTSSIO', 'mcouteau', 'ea6aaa84213cf7312693f75130d2091d460fb3c8'),
(25, 1, 4, 'Monsieur', 'DESIREST', 'LOIC', '0274552199', 'loic.desirest@la-joliverie.com', '0678398697', 'Informatique', 'BTSSIO', 'ldesirest', '54e33e28a6970683ed23b8c1dbe3bac599d5d0f8'),
(26, 1, 4, 'Madame', 'DION', 'THOMAS', '0217893116', 'thomas.dion@la-joliverie.com', '0676671582', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(27, 1, 4, 'Monsieur', 'DROUAUD', 'AURELIEN', '0295694656', 'aurelien.drouaud@la-joliverie.', '0642410674', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(28, 1, 4, 'Madame', 'DURIEUX', 'FLORIAN', '0270591034', 'florian.durieux@la-joliverie.c', '0679836611', 'Informatique', 'BTSSIO', 'fdurieux', '6fa07842e5a644aeba4535ee3c95e0f85ac67248'),
(29, 1, 4, 'Monsieur', 'FRENEAU', 'PIERRE', '0230580688', 'pierre.freneau@la-joliverie.co', '0665088336', 'Informatique', 'BTSSIO', 'pfreneau', '77f176b891ec3875f195916e402897cd83d72aec'),
(30, 1, 4, 'Madame', 'LEDUC', 'STANISLAS', '0293911172', 'stanislas.leduc@la-joliverie.c', '0676949323', 'Informatique', 'BTSSIO', 'sleduc', '7f7d150a61fb85cd546feaf1b1377fb11941a9db'),
(31, 1, 4, 'Monsieur', 'LEPEE', 'LAURENT', '0217785820', 'laurent.lepee@la-joliverie.com', '0622704877', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(32, 1, 4, 'Madame', 'LOISEAU', 'STEPHANE', '0261639943', 'stephane.loiseau@la-joliverie.', '0693751875', 'Informatique', 'BTSSIO', 'sloiseau', '67c5e10307bed6c4d4c8a8dbae47a1b185479c59'),
(33, 1, 4, 'Monsieur', 'MACHOURI', 'YANNIS', '0296391548', 'yannis.machouri@la-joliverie.c', '0659254991', 'Informatique', 'BTSSIO', 'ymachouri', '2bfc678e713c396594aeeaccfbfd3aecc2acf91a'),
(34, 1, 4, 'Madame', 'PERROIN', 'THIBAULT', '0219756158', 'thibault.perroin@la-joliverie.', '0681615189', 'Informatique', 'BTSSIO', 'tperroin', '0708cce4e43593d58910f39f22d808b5b7b64585'),
(35, 1, 4, 'Monsieur', 'REDOR', 'JULIEN', '0293045065', 'julien.redor@la-joliverie.com', '0650590988', 'Informatique', 'BTSSIO', 'jredor', '019d77dc62a87ea48badb561e467552ba5ea8478'),
(36, 1, 4, 'Madame', 'RIO', 'VALENTIN', '0216804570', 'valentin.rio@la-joliverie.com', '0619992585', 'Informatique', 'BTSSIO', 'vrio', 'f0db3ebace308ac8b6e2d75128d6ba816440fe2c'),
(37, 1, 4, 'Monsieur', 'SAINDRENAN', 'ANTOINE', '0211334212', 'antoine.saindrenan@la-joliveri', '0661916063', 'Informatique', 'BTSSIO', 'asaindrenan', '0ddc8bddf329315cc6893bec90beca6851516764'),
(38, 1, 4, 'Madame', 'THIBEAU', 'TANGUY', '0266599671', 'tanguy.thibeau@la-joliverie.co', '0634464961', 'Informatique', 'BTSSIO', 'tthibeau', '0aa14cb9255436690f5032eb9242126c6b75d6c3'),
(39, 1, 4, 'Monsieur', 'TOUCHARD', 'ANTOINE', '0225493653', 'antoine.touchard@la-joliverie.', '0650435034', 'Informatique', 'BTSSIO', 'atouchard', 'e81353eee286b360ec4ef413095977fe35676c56'),
(40, 2, 4, 'Monsieur', 'BOITIVEAU', 'KEVIN', '0243593580', 'k.boitiveau@la-joliverie.com', '0688934742', 'Informatique', 'BTSSIO', 'kboitiveau', '0a0fb6aab165379c27e9127e9d4c8849f5fc5017'),
(41, 2, 4, 'Madame', 'BRETIN', 'FLORIAN', '0228833731', 'f.bretin@la-joliverie.com', '0650375586', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(42, 2, 4, 'Monsieur', 'BUREAU', 'JORDAN', '0265606324', 'j.bureau@la-joliverie.com', '0624528388', 'Informatique', 'BTSSIO', 'jbureau', 'ea1c18f218e3b0f31f534aa41d1de99f9917cf25'),
(43, 2, 4, 'Madame', 'CHAPRENTIER', 'GAETAN', '0281675149', 'g.chaprentier@la-joliverie.com', '0636197358', 'Informatique', 'BTSSIO', 'gchaprentier', '421b3934b983bd162b3deb899c7453380ebd64d0'),
(44, 2, 4, 'Monsieur', 'CHARRIAU', 'PIERRE', '0293253888', 'p.charriau@la-joliverie.com', '0612255838', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(45, 2, 4, 'Madame', 'CUNIBERTI', 'AMANDINE', '0290174584', 'a.cuniberti@la-joliverie.com', '0687165061', 'Informatique', 'BTSSIO', 'acuniberti', '26ecb3f51d86360cd311ab06aa3d489e1643edeb'),
(46, 2, 4, 'Monsieur', 'DION', 'THOMAS', '0278094051', 't.dion@la-joliverie.com', '0696849293', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(47, 2, 4, 'Madame', 'DROUAUD', 'AURELIEN', '0298758827', 'a.drouaud@la-joliverie.com', '0639733994', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(48, 2, 4, 'Monsieur', 'DURAND', 'FABIEN', '0290601168', 'f.durand@la-joliverie.com', '0695150376', 'Informatique', 'BTSSIO', 'fdurand', 'c925a12c0918665e787a671056b85af1baba96ce'),
(49, 2, 4, 'Madame', 'DURET', 'NICOLAS', '0287877875', 'n.duret@la-joliverie.com', '0699246216', 'Informatique', 'BTSSIO', 'nduret', 'b5c48d3be2d3e4e47c865693b29e7987685e47c8'),
(50, 2, 4, 'Monsieur', 'FERRE', 'ANTOINE', '0276765566', 'a.ferre@la-joliverie.com', '0680922940', 'Informatique', 'BTSSIO', 'aferre', '00d356cd0251543880578b2482621db6ca7c16e2'),
(51, 2, 4, 'Madame', 'GOURLAOUEN', 'YANN', '0249837204', 'y.gourlaouen@la-joliverie.com', '0682459026', 'Informatique', 'BTSSIO', 'ygourlaouen', 'eea488ae1699c432e5bb6814041495ce279020b5'),
(52, 2, 4, 'Monsieur', 'HAMON', 'CYRIL', '0289804415', 'c.hamon@la-joliverie.com', '0650060306', 'Informatique', 'BTSSIO', 'chamon', '31ed20e9291d628cd10ac90f3de53f95e2528b6b'),
(53, 2, 4, 'Madame', 'HASTINGS', 'VIANNEY', '0244375089', 'v.hastings@la-joliverie.com', '0656404086', 'Informatique', 'BTSSIO', 'vhastings', 'e02b68d739724531853aa2a654510f4c460798f9'),
(54, 2, 4, 'Monsieur', 'LEMONNIER', 'VALENTIN', '0273414156', 'v.lemonnier@la-joliverie.com', '0658757631', 'Informatique', 'BTSSIO', 'vlemonnier', '8b68b07f9e0a912b7f92d0f70e7887b1c9dd8d7f'),
(55, 2, 4, 'Madame', 'LEPEE', 'LAURENT', '0295728009', 'l.lepee@la-joliverie.com', '0617007737', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(56, 2, 4, 'Monsieur', 'LE MONNIER', 'STEPHANE', '0247692374', 's.le monnier@la-joliverie.com', '0624561740', 'Informatique', 'BTSSIO', 'sle monnier', '033661f5a5eddf6ecc952a310e1841b8da7d7e48'),
(57, 2, 4, 'Madame', 'LOISEAU', 'WILLIAM', '0256272212', 'w.loiseau@la-joliverie.com', '0613298699', 'Informatique', 'BTSSIO', 'wloiseau', 'a0ee1e89792b112029a902cd28013bcfae3c3308'),
(58, 2, 4, 'Monsieur', 'MABILEAU', 'YANNIS', '0237979017', 'y.mabileau@la-joliverie.com', '0637947362', 'Informatique', 'BTSSIO', 'ymabileau', '84e93f1ac941c69ca3033fba169b93cd22de2748'),
(59, 2, 4, 'Madame', 'MACHOURI', 'SEBASTIEN', '0238384946', 's.machouri@la-joliverie.com', '0631232906', 'Informatique', 'BTSSIO', 'smachouri', '2d23fc1802098bed5f4867f7c134bf55acf731be'),
(60, 2, 4, 'Monsieur', 'MARCOUYOUX', 'MAXIME', '0239092089', 'm.marcouyoux@la-joliverie.com', '0628559531', 'Informatique', 'BTSSIO', 'mmarcouyoux', 'e51eff404f34b4f3e0be150de29964e84f194a28'),
(61, 2, 4, 'Madame', 'MORNET', 'YOANN', '0218397967', 'y.mornet@la-joliverie.com', '0617186140', 'Informatique', 'BTSSIO', 'ymornet', '2615aca05ba35d0874d11c58e884b9e8d73250af'),
(62, 2, 4, 'Monsieur', 'PARISOT', 'THIBAULT', '0225408824', 't.parisot@la-joliverie.com', '0617156794', 'Informatique', 'BTSSIO', 'tparisot', '15daad2f7904bc7df7800923f5bfc60603eadaa8'),
(63, 2, 4, 'Madame', 'PERROIN', 'FELIX', '0245809024', 'f.perroin@la-joliverie.com', '0616009992', 'Informatique', 'BTSSIO', 'fperroin', 'f4d2e80cdec9fe99241aa6ce9650b22359c13fe5'),
(64, 2, 4, 'Monsieur', 'POIRSON', 'KEVIN', '0212307171', 'k.poirson@la-joliverie.com', '0633686899', 'Informatique', 'BTSSIO', 'kpoirson', '57d25b61509b7310220fb9639e8544d851c08bf4'),
(65, 2, 4, 'Madame', 'RADOJKOVIC', 'JULIEN', '0215256208', 'j.radojkovic@la-joliverie.com', '0677961626', 'Informatique', 'BTSSIO', 'jradojkovic', 'b86d053e7b64043ea15aa2619a3ff2cf23eb1b10'),
(66, 2, 4, 'Monsieur', 'REDOR', 'AXEL', '0214609840', 'a.redor@la-joliverie.com', '0653982302', 'Informatique', 'BTSSIO', 'aredor', '5adb3310c6cf08a008ffbaf12f8c62f993dfa96e'),
(67, 2, 4, 'Madame', 'SALARDAINE', 'TANGUY', '0260420653', 't.salardaine@la-joliverie.com', '0693303144', 'Informatique', 'BTSSIO', 'tsalardaine', 'dcbf3ae4d41b408d433a3696c71a402eed8da893'),
(68, 2, 4, 'Monsieur', 'THIBEAU', 'ANTOINE', '0292931497', 'a.thibeau@la-joliverie.com', '0693684631', 'Informatique', 'BTSSIO', 'athibeau', '1cee279c971237ba2b1365a42aa267c5fafdfc8d'),
(69, 2, 4, 'Madame', 'TOUCHARD', 'KILLIAN', '0249707230', 'k.touchard@la-joliverie.com', '0666345654', 'Informatique', 'BTSSIO', 'ktouchard', 'ae98655bc9bce926815dde69fe5007d2b7e633b7'),
(70, NULL, 1, 'Monsieur', 'BEAUVAIS', 'NICOLAS', '0252442263', 'n.beauvais@la-joliverie.com', '0645435240', 'Informatique', 'BTSSIO', 'nbeauvais', 'ee7df3746f7fdc6f2bb911ae5372f798bbf1e5ea'),
(71, NULL, 1, 'Madame', 'CARBONNIER', 'FRANCOISE', '0272242281', 'f.carbonnier@la-joliverie.com', '0689023526', 'Informatique', 'BTSSIO', 'fcarbonnier', 'bf8b6a7731bb4c2e807acb573eea5e064c7d2c67'),
(72, NULL, 1, 'Monsieur', 'BORUGEOIS', 'JEAN-PIERRE', '0258885869', 'j.borugeois@la-joliverie.com', '0628514493', 'Informatique', 'BTSSIO', 'jborugeois', 'fd25a7dda28c2b0aed8d0250f787ec3d032ef5af'),
(73, NULL, 1, 'Madame', 'GHADDAR', 'SAMI', '0291211114', 's.ghaddar@la-joliverie.com', '0685753776', 'Informatique', 'BTSSIO', 'sghaddar', '72012ab495579593265b2b9a9911a26b6fd59f44'),
(74, 1, 4, 'Monsieur', 'ANDRE', 'MAEL', '0299407623', 'mael.andre@la-joliverie.com', '0623900893', 'Informatique', 'BTSSIO', 'mandre', '04058f39ac9e4f1bb0628335d14456c54f6b6877'),
(75, 1, 4, 'Madame', 'BONNET', 'DAVID', '0266844550', 'david.bonnet@la-joliverie.com', '0691138907', 'Informatique', 'BTSSIO', 'dbonnet', '1ce4bfb41eabbf7254f85504149784b8c173bb67'),
(76, 1, 4, 'Monsieur', 'BRETIN', 'FLORIAN', '0253903700', 'florian.bretin@la-joliverie.co', '0626552040', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(77, 1, 4, 'Madame', 'BROYARD', 'JEREMY', '0252681255', 'jeremy.broyard@la-joliverie.co', '0697825392', 'Informatique', 'BTSSIO', 'jbroyard', '8edc6af8ff0eeeb77f18b8e2e9e25558c5e2e0c9'),
(78, 1, 4, 'Monsieur', 'CHANSON', 'EMILIE', '0283826159', 'emilie.chanson@la-joliverie.co', '0669761360', 'Informatique', 'BTSSIO', 'echanson', 'ec3e2b1d2db6ed7d4788596b3e67d25701a6616a'),
(79, 1, 4, 'Madame', 'CHARRIAU', 'PIERRE', '0254749094', 'pierre.charriau@la-joliverie.c', '0684035424', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(80, 1, 4, 'Monsieur', 'CORBINEAU', 'BENJAMIN', '0299262771', 'benjamin.corbineau@la-joliveri', '0627068495', 'Informatique', 'BTSSIO', 'bcorbineau', '3a1781e66829fd494fffd39985268bd82df83cc4'),
(81, 1, 4, 'Madame', 'COUTEAU', 'MAXIME', '0296929298', 'maxime.couteau@la-joliverie.co', '0671469343', 'Informatique', 'BTSSIO', 'mcouteau', 'ea6aaa84213cf7312693f75130d2091d460fb3c8'),
(82, 1, 4, 'Monsieur', 'DESIREST', 'LOIC', '0240521970', 'loic.desirest@la-joliverie.com', '0659294156', 'Informatique', 'BTSSIO', 'ldesirest', '54e33e28a6970683ed23b8c1dbe3bac599d5d0f8'),
(83, 1, 4, 'Madame', 'DION', 'THOMAS', '0248470484', 'thomas.dion@la-joliverie.com', '0671242172', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(84, 1, 4, 'Monsieur', 'DROUAUD', 'AURELIEN', '0241627609', 'aurelien.drouaud@la-joliverie.', '0697694812', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(85, 1, 4, 'Madame', 'DURIEUX', 'FLORIAN', '0265826903', 'florian.durieux@la-joliverie.c', '0652995325', 'Informatique', 'BTSSIO', 'fdurieux', '6fa07842e5a644aeba4535ee3c95e0f85ac67248'),
(86, 1, 4, 'Monsieur', 'FRENEAU', 'PIERRE', '0247827107', 'pierre.freneau@la-joliverie.co', '0672598220', 'Informatique', 'BTSSIO', 'pfreneau', '77f176b891ec3875f195916e402897cd83d72aec'),
(87, 1, 4, 'Madame', 'LEDUC', 'STANISLAS', '0221373601', 'stanislas.leduc@la-joliverie.c', '0682889852', 'Informatique', 'BTSSIO', 'sleduc', '7f7d150a61fb85cd546feaf1b1377fb11941a9db'),
(88, 1, 4, 'Monsieur', 'LEPEE', 'LAURENT', '0286346236', 'laurent.lepee@la-joliverie.com', '0620377595', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(89, 1, 4, 'Madame', 'LOISEAU', 'STEPHANE', '0238867821', 'stephane.loiseau@la-joliverie.', '0685753860', 'Informatique', 'BTSSIO', 'sloiseau', '67c5e10307bed6c4d4c8a8dbae47a1b185479c59'),
(90, 1, 4, 'Monsieur', 'MACHOURI', 'YANNIS', '0233167378', 'yannis.machouri@la-joliverie.c', '0694601261', 'Informatique', 'BTSSIO', 'ymachouri', '2bfc678e713c396594aeeaccfbfd3aecc2acf91a'),
(91, 1, 4, 'Madame', 'PERROIN', 'THIBAULT', '0276892768', 'thibault.perroin@la-joliverie.', '0675959967', 'Informatique', 'BTSSIO', 'tperroin', '0708cce4e43593d58910f39f22d808b5b7b64585'),
(92, 1, 4, 'Monsieur', 'REDOR', 'JULIEN', '0221153301', 'julien.redor@la-joliverie.com', '0629574024', 'Informatique', 'BTSSIO', 'jredor', '019d77dc62a87ea48badb561e467552ba5ea8478'),
(93, 1, 4, 'Madame', 'RIO', 'VALENTIN', '0273785360', 'valentin.rio@la-joliverie.com', '0693868350', 'Informatique', 'BTSSIO', 'vrio', 'f0db3ebace308ac8b6e2d75128d6ba816440fe2c'),
(94, 1, 4, 'Monsieur', 'SAINDRENAN', 'ANTOINE', '0288224274', 'antoine.saindrenan@la-joliveri', '0628534454', 'Informatique', 'BTSSIO', 'asaindrenan', '0ddc8bddf329315cc6893bec90beca6851516764'),
(95, 1, 4, 'Madame', 'THIBEAU', 'TANGUY', '0277903775', 'tanguy.thibeau@la-joliverie.co', '0687487045', 'Informatique', 'BTSSIO', 'tthibeau', '0aa14cb9255436690f5032eb9242126c6b75d6c3'),
(96, 1, 4, 'Monsieur', 'TOUCHARD', 'ANTOINE', '0244491838', 'antoine.touchard@la-joliverie.', '0674833074', 'Informatique', 'BTSSIO', 'atouchard', 'e81353eee286b360ec4ef413095977fe35676c56'),
(97, 2, 4, 'Monsieur', 'BOITIVEAU', 'KEVIN', '0258956388', 'k.boitiveau@la-joliverie.com', '0673902698', 'Informatique', 'BTSSIO', 'kboitiveau', '0a0fb6aab165379c27e9127e9d4c8849f5fc5017'),
(98, 2, 4, 'Madame', 'BRETIN', 'FLORIAN', '0234127230', 'f.bretin@la-joliverie.com', '0696315762', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(99, 2, 4, 'Monsieur', 'BUREAU', 'JORDAN', '0245144870', 'j.bureau@la-joliverie.com', '0664643728', 'Informatique', 'BTSSIO', 'jbureau', 'ea1c18f218e3b0f31f534aa41d1de99f9917cf25'),
(100, 2, 4, 'Madame', 'CHAPRENTIER', 'GAETAN', '0294010574', 'g.chaprentier@la-joliverie.com', '0699860663', 'Informatique', 'BTSSIO', 'gchaprentier', '421b3934b983bd162b3deb899c7453380ebd64d0'),
(101, 2, 4, 'Monsieur', 'CHARRIAU', 'PIERRE', '0217639054', 'p.charriau@la-joliverie.com', '0641837682', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(102, 2, 4, 'Madame', 'CUNIBERTI', 'AMANDINE', '0272458884', 'a.cuniberti@la-joliverie.com', '0627901544', 'Informatique', 'BTSSIO', 'acuniberti', '26ecb3f51d86360cd311ab06aa3d489e1643edeb'),
(103, 2, 4, 'Monsieur', 'DION', 'THOMAS', '0224727535', 't.dion@la-joliverie.com', '0658805121', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(104, 2, 4, 'Madame', 'DROUAUD', 'AURELIEN', '0237168029', 'a.drouaud@la-joliverie.com', '0652484245', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(105, 2, 4, 'Monsieur', 'DURAND', 'FABIEN', '0244558981', 'f.durand@la-joliverie.com', '0659224296', 'Informatique', 'BTSSIO', 'fdurand', 'c925a12c0918665e787a671056b85af1baba96ce'),
(106, 2, 4, 'Madame', 'DURET', 'NICOLAS', '0247085506', 'n.duret@la-joliverie.com', '0621451750', 'Informatique', 'BTSSIO', 'nduret', 'b5c48d3be2d3e4e47c865693b29e7987685e47c8'),
(107, 2, 4, 'Monsieur', 'FERRE', 'ANTOINE', '0235184264', 'a.ferre@la-joliverie.com', '0657127696', 'Informatique', 'BTSSIO', 'aferre', '00d356cd0251543880578b2482621db6ca7c16e2'),
(108, 2, 4, 'Madame', 'GOURLAOUEN', 'YANN', '0239914663', 'y.gourlaouen@la-joliverie.com', '0697858513', 'Informatique', 'BTSSIO', 'ygourlaouen', 'eea488ae1699c432e5bb6814041495ce279020b5'),
(109, 2, 4, 'Monsieur', 'HAMON', 'CYRIL', '0250996047', 'c.hamon@la-joliverie.com', '0628138937', 'Informatique', 'BTSSIO', 'chamon', '31ed20e9291d628cd10ac90f3de53f95e2528b6b'),
(110, 2, 4, 'Madame', 'HASTINGS', 'VIANNEY', '0226392968', 'v.hastings@la-joliverie.com', '0628899822', 'Informatique', 'BTSSIO', 'vhastings', 'e02b68d739724531853aa2a654510f4c460798f9'),
(111, 2, 4, 'Monsieur', 'LEMONNIER', 'VALENTIN', '0215625982', 'v.lemonnier@la-joliverie.com', '0659773695', 'Informatique', 'BTSSIO', 'vlemonnier', '8b68b07f9e0a912b7f92d0f70e7887b1c9dd8d7f'),
(112, 2, 4, 'Madame', 'LEPEE', 'LAURENT', '0292621785', 'l.lepee@la-joliverie.com', '0663471260', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(113, 2, 4, 'Monsieur', 'LE MONNIER', 'STEPHANE', '0233676394', 's.le monnier@la-joliverie.com', '0626749016', 'Informatique', 'BTSSIO', 'sle monnier', '033661f5a5eddf6ecc952a310e1841b8da7d7e48'),
(114, 2, 4, 'Madame', 'LOISEAU', 'WILLIAM', '0259787023', 'w.loiseau@la-joliverie.com', '0667710153', 'Informatique', 'BTSSIO', 'wloiseau', 'a0ee1e89792b112029a902cd28013bcfae3c3308'),
(115, 2, 4, 'Monsieur', 'MABILEAU', 'YANNIS', '0280281634', 'y.mabileau@la-joliverie.com', '0653797597', 'Informatique', 'BTSSIO', 'ymabileau', '84e93f1ac941c69ca3033fba169b93cd22de2748'),
(116, 2, 4, 'Madame', 'MACHOURI', 'SEBASTIEN', '0267570816', 's.machouri@la-joliverie.com', '0686809577', 'Informatique', 'BTSSIO', 'smachouri', '2d23fc1802098bed5f4867f7c134bf55acf731be'),
(117, 2, 4, 'Monsieur', 'MARCOUYOUX', 'MAXIME', '0284524169', 'm.marcouyoux@la-joliverie.com', '0640029701', 'Informatique', 'BTSSIO', 'mmarcouyoux', 'e51eff404f34b4f3e0be150de29964e84f194a28'),
(118, 2, 4, 'Madame', 'MORNET', 'YOANN', '0214711122', 'y.mornet@la-joliverie.com', '0698140593', 'Informatique', 'BTSSIO', 'ymornet', '2615aca05ba35d0874d11c58e884b9e8d73250af'),
(119, 2, 4, 'Monsieur', 'PARISOT', 'THIBAULT', '0287723711', 't.parisot@la-joliverie.com', '0640768040', 'Informatique', 'BTSSIO', 'tparisot', '15daad2f7904bc7df7800923f5bfc60603eadaa8'),
(120, 2, 4, 'Madame', 'PERROIN', 'FELIX', '0250624838', 'f.perroin@la-joliverie.com', '0632282693', 'Informatique', 'BTSSIO', 'fperroin', 'f4d2e80cdec9fe99241aa6ce9650b22359c13fe5'),
(121, 2, 4, 'Monsieur', 'POIRSON', 'KEVIN', '0288881226', 'k.poirson@la-joliverie.com', '0686599233', 'Informatique', 'BTSSIO', 'kpoirson', '57d25b61509b7310220fb9639e8544d851c08bf4'),
(122, 2, 4, 'Madame', 'RADOJKOVIC', 'JULIEN', '0242623332', 'j.radojkovic@la-joliverie.com', '0624065491', 'Informatique', 'BTSSIO', 'jradojkovic', 'b86d053e7b64043ea15aa2619a3ff2cf23eb1b10'),
(123, 2, 4, 'Monsieur', 'REDOR', 'AXEL', '0243726930', 'a.redor@la-joliverie.com', '0671426885', 'Informatique', 'BTSSIO', 'aredor', '5adb3310c6cf08a008ffbaf12f8c62f993dfa96e'),
(124, 2, 4, 'Madame', 'SALARDAINE', 'TANGUY', '0221924005', 't.salardaine@la-joliverie.com', '0683611867', 'Informatique', 'BTSSIO', 'tsalardaine', 'dcbf3ae4d41b408d433a3696c71a402eed8da893'),
(125, 2, 4, 'Monsieur', 'THIBEAU', 'ANTOINE', '0288454711', 'a.thibeau@la-joliverie.com', '0637205862', 'Informatique', 'BTSSIO', 'athibeau', '1cee279c971237ba2b1365a42aa267c5fafdfc8d'),
(126, 2, 4, 'Madame', 'TOUCHARD', 'KILLIAN', '0212511689', 'k.touchard@la-joliverie.com', '0692969583', 'Informatique', 'BTSSIO', 'ktouchard', 'ae98655bc9bce926815dde69fe5007d2b7e633b7'),
(127, NULL, 1, 'Monsieur', 'BEAUVAIS', 'NICOLAS', '0285868447', 'n.beauvais@la-joliverie.com', '0694022364', 'Informatique', 'BTSSIO', 'nbeauvais', 'ee7df3746f7fdc6f2bb911ae5372f798bbf1e5ea'),
(128, NULL, 1, 'Madame', 'CARBONNIER', 'FRANCOISE', '0256440844', 'f.carbonnier@la-joliverie.com', '0619544841', 'Informatique', 'BTSSIO', 'fcarbonnier', 'bf8b6a7731bb4c2e807acb573eea5e064c7d2c67'),
(129, NULL, 1, 'Monsieur', 'BORUGEOIS', 'JEAN-PIERRE', '0220771380', 'j.borugeois@la-joliverie.com', '0616227867', 'Informatique', 'BTSSIO', 'jborugeois', 'fd25a7dda28c2b0aed8d0250f787ec3d032ef5af'),
(130, NULL, 1, 'Madame', 'GHADDAR', 'SAMI', '0276143884', 's.ghaddar@la-joliverie.com', '0689941904', 'Informatique', 'BTSSIO', 'sghaddar', '72012ab495579593265b2b9a9911a26b6fd59f44'),
(131, 1, 4, 'Monsieur', 'ANDRE', 'MAEL', '0256227948', 'mael.andre@la-joliverie.com', '0616091093', 'Informatique', 'BTSSIO', 'mandre', '04058f39ac9e4f1bb0628335d14456c54f6b6877'),
(132, 1, 4, 'Madame', 'BONNET', 'DAVID', '0221125594', 'david.bonnet@la-joliverie.com', '0675976143', 'Informatique', 'BTSSIO', 'dbonnet', '1ce4bfb41eabbf7254f85504149784b8c173bb67'),
(133, 1, 4, 'Monsieur', 'BRETIN', 'FLORIAN', '0269717683', 'florian.bretin@la-joliverie.co', '0633287064', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(134, 1, 4, 'Madame', 'BROYARD', 'JEREMY', '0285618865', 'jeremy.broyard@la-joliverie.co', '0669518273', 'Informatique', 'BTSSIO', 'jbroyard', '8edc6af8ff0eeeb77f18b8e2e9e25558c5e2e0c9'),
(135, 1, 4, 'Monsieur', 'CHANSON', 'EMILIE', '0230415427', 'emilie.chanson@la-joliverie.co', '0661259475', 'Informatique', 'BTSSIO', 'echanson', 'ec3e2b1d2db6ed7d4788596b3e67d25701a6616a'),
(136, 1, 4, 'Madame', 'CHARRIAU', 'PIERRE', '0261085281', 'pierre.charriau@la-joliverie.c', '0684915747', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(137, 1, 4, 'Monsieur', 'CORBINEAU', 'BENJAMIN', '0265209151', 'benjamin.corbineau@la-joliveri', '0637212273', 'Informatique', 'BTSSIO', 'bcorbineau', '3a1781e66829fd494fffd39985268bd82df83cc4'),
(138, 1, 4, 'Madame', 'COUTEAU', 'MAXIME', '0242602114', 'maxime.couteau@la-joliverie.co', '0651469847', 'Informatique', 'BTSSIO', 'mcouteau', 'ea6aaa84213cf7312693f75130d2091d460fb3c8'),
(139, 1, 4, 'Monsieur', 'DESIREST', 'LOIC', '0299601497', 'loic.desirest@la-joliverie.com', '0676125589', 'Informatique', 'BTSSIO', 'ldesirest', '54e33e28a6970683ed23b8c1dbe3bac599d5d0f8'),
(140, 1, 4, 'Madame', 'DION', 'THOMAS', '0272650777', 'thomas.dion@la-joliverie.com', '0640439881', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(141, 1, 4, 'Monsieur', 'DROUAUD', 'AURELIEN', '0214408313', 'aurelien.drouaud@la-joliverie.', '0632562495', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(142, 1, 4, 'Madame', 'DURIEUX', 'FLORIAN', '0254589240', 'florian.durieux@la-joliverie.c', '0646556405', 'Informatique', 'BTSSIO', 'fdurieux', '6fa07842e5a644aeba4535ee3c95e0f85ac67248'),
(143, 1, 4, 'Monsieur', 'FRENEAU', 'PIERRE', '0298370140', 'pierre.freneau@la-joliverie.co', '0627529313', 'Informatique', 'BTSSIO', 'pfreneau', '77f176b891ec3875f195916e402897cd83d72aec'),
(144, 1, 4, 'Madame', 'LEDUC', 'STANISLAS', '0274429191', 'stanislas.leduc@la-joliverie.c', '0669835459', 'Informatique', 'BTSSIO', 'sleduc', '7f7d150a61fb85cd546feaf1b1377fb11941a9db'),
(145, 1, 4, 'Monsieur', 'LEPEE', 'LAURENT', '0250423062', 'laurent.lepee@la-joliverie.com', '0637151681', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(146, 1, 4, 'Madame', 'LOISEAU', 'STEPHANE', '0219973017', 'stephane.loiseau@la-joliverie.', '0695539900', 'Informatique', 'BTSSIO', 'sloiseau', '67c5e10307bed6c4d4c8a8dbae47a1b185479c59'),
(147, 1, 4, 'Monsieur', 'MACHOURI', 'YANNIS', '0242131663', 'yannis.machouri@la-joliverie.c', '0629987500', 'Informatique', 'BTSSIO', 'ymachouri', '2bfc678e713c396594aeeaccfbfd3aecc2acf91a'),
(148, 1, 4, 'Madame', 'PERROIN', 'THIBAULT', '0271516044', 'thibault.perroin@la-joliverie.', '0611849347', 'Informatique', 'BTSSIO', 'tperroin', '0708cce4e43593d58910f39f22d808b5b7b64585'),
(149, 1, 4, 'Monsieur', 'REDOR', 'JULIEN', '0252163454', 'julien.redor@la-joliverie.com', '0657134910', 'Informatique', 'BTSSIO', 'jredor', '019d77dc62a87ea48badb561e467552ba5ea8478'),
(150, 1, 4, 'Madame', 'RIO', 'VALENTIN', '0270256509', 'valentin.rio@la-joliverie.com', '0671467771', 'Informatique', 'BTSSIO', 'vrio', 'f0db3ebace308ac8b6e2d75128d6ba816440fe2c'),
(151, 1, 4, 'Monsieur', 'SAINDRENAN', 'ANTOINE', '0218394386', 'antoine.saindrenan@la-joliveri', '0631341790', 'Informatique', 'BTSSIO', 'asaindrenan', '0ddc8bddf329315cc6893bec90beca6851516764'),
(152, 1, 4, 'Madame', 'THIBEAU', 'TANGUY', '0256383518', 'tanguy.thibeau@la-joliverie.co', '0672492427', 'Informatique', 'BTSSIO', 'tthibeau', '0aa14cb9255436690f5032eb9242126c6b75d6c3'),
(153, 1, 4, 'Monsieur', 'TOUCHARD', 'ANTOINE', '0257442953', 'antoine.touchard@la-joliverie.', '0687874521', 'Informatique', 'BTSSIO', 'atouchard', 'e81353eee286b360ec4ef413095977fe35676c56'),
(154, 2, 4, 'Monsieur', 'BOITIVEAU', 'KEVIN', '0223962275', 'k.boitiveau@la-joliverie.com', '0657044451', 'Informatique', 'BTSSIO', 'kboitiveau', '0a0fb6aab165379c27e9127e9d4c8849f5fc5017'),
(155, 2, 4, 'Madame', 'BRETIN', 'FLORIAN', '0264000111', 'f.bretin@la-joliverie.com', '0685501941', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(156, 2, 4, 'Monsieur', 'BUREAU', 'JORDAN', '0286373221', 'j.bureau@la-joliverie.com', '0667297313', 'Informatique', 'BTSSIO', 'jbureau', 'ea1c18f218e3b0f31f534aa41d1de99f9917cf25'),
(157, 2, 4, 'Madame', 'CHAPRENTIER', 'GAETAN', '0218064437', 'g.chaprentier@la-joliverie.com', '0640962462', 'Informatique', 'BTSSIO', 'gchaprentier', '421b3934b983bd162b3deb899c7453380ebd64d0'),
(158, 2, 4, 'Monsieur', 'CHARRIAU', 'PIERRE', '0213853719', 'p.charriau@la-joliverie.com', '0616434577', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(159, 2, 4, 'Madame', 'CUNIBERTI', 'AMANDINE', '0257380665', 'a.cuniberti@la-joliverie.com', '0677171800', 'Informatique', 'BTSSIO', 'acuniberti', '26ecb3f51d86360cd311ab06aa3d489e1643edeb'),
(160, 2, 4, 'Monsieur', 'DION', 'THOMAS', '0275158926', 't.dion@la-joliverie.com', '0696692617', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(161, 2, 4, 'Madame', 'DROUAUD', 'AURELIEN', '0214323481', 'a.drouaud@la-joliverie.com', '0684020832', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(162, 2, 4, 'Monsieur', 'DURAND', 'FABIEN', '0292232517', 'f.durand@la-joliverie.com', '0645344034', 'Informatique', 'BTSSIO', 'fdurand', 'c925a12c0918665e787a671056b85af1baba96ce'),
(163, 2, 4, 'Madame', 'DURET', 'NICOLAS', '0214008333', 'n.duret@la-joliverie.com', '0663748562', 'Informatique', 'BTSSIO', 'nduret', 'b5c48d3be2d3e4e47c865693b29e7987685e47c8'),
(164, 2, 4, 'Monsieur', 'FERRE', 'ANTOINE', '0246082270', 'a.ferre@la-joliverie.com', '0655060676', 'Informatique', 'BTSSIO', 'aferre', '00d356cd0251543880578b2482621db6ca7c16e2'),
(165, 2, 4, 'Madame', 'GOURLAOUEN', 'YANN', '0220883473', 'y.gourlaouen@la-joliverie.com', '0616338780', 'Informatique', 'BTSSIO', 'ygourlaouen', 'eea488ae1699c432e5bb6814041495ce279020b5'),
(166, 2, 4, 'Monsieur', 'HAMON', 'CYRIL', '0226528447', 'c.hamon@la-joliverie.com', '0628166748', 'Informatique', 'BTSSIO', 'chamon', '31ed20e9291d628cd10ac90f3de53f95e2528b6b'),
(167, 2, 4, 'Madame', 'HASTINGS', 'VIANNEY', '0236569459', 'v.hastings@la-joliverie.com', '0671800854', 'Informatique', 'BTSSIO', 'vhastings', 'e02b68d739724531853aa2a654510f4c460798f9'),
(168, 2, 4, 'Monsieur', 'LEMONNIER', 'VALENTIN', '0289548064', 'v.lemonnier@la-joliverie.com', '0682901302', 'Informatique', 'BTSSIO', 'vlemonnier', '8b68b07f9e0a912b7f92d0f70e7887b1c9dd8d7f'),
(169, 2, 4, 'Madame', 'LEPEE', 'LAURENT', '0259675376', 'l.lepee@la-joliverie.com', '0613510339', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(170, 2, 4, 'Monsieur', 'LE MONNIER', 'STEPHANE', '0239945753', 's.le monnier@la-joliverie.com', '0623675488', 'Informatique', 'BTSSIO', 'sle monnier', '033661f5a5eddf6ecc952a310e1841b8da7d7e48'),
(171, 2, 4, 'Madame', 'LOISEAU', 'WILLIAM', '0287901170', 'w.loiseau@la-joliverie.com', '0626318975', 'Informatique', 'BTSSIO', 'wloiseau', 'a0ee1e89792b112029a902cd28013bcfae3c3308'),
(172, 2, 4, 'Monsieur', 'MABILEAU', 'YANNIS', '0279861690', 'y.mabileau@la-joliverie.com', '0694854497', 'Informatique', 'BTSSIO', 'ymabileau', '84e93f1ac941c69ca3033fba169b93cd22de2748'),
(173, 2, 4, 'Madame', 'MACHOURI', 'SEBASTIEN', '0256170326', 's.machouri@la-joliverie.com', '0682604298', 'Informatique', 'BTSSIO', 'smachouri', '2d23fc1802098bed5f4867f7c134bf55acf731be'),
(174, 2, 4, 'Monsieur', 'MARCOUYOUX', 'MAXIME', '0211289075', 'm.marcouyoux@la-joliverie.com', '0613550991', 'Informatique', 'BTSSIO', 'mmarcouyoux', 'e51eff404f34b4f3e0be150de29964e84f194a28'),
(175, 2, 4, 'Madame', 'MORNET', 'YOANN', '0259776098', 'y.mornet@la-joliverie.com', '0675336890', 'Informatique', 'BTSSIO', 'ymornet', '2615aca05ba35d0874d11c58e884b9e8d73250af'),
(176, 2, 4, 'Monsieur', 'PARISOT', 'THIBAULT', '0299132497', 't.parisot@la-joliverie.com', '0662988469', 'Informatique', 'BTSSIO', 'tparisot', '15daad2f7904bc7df7800923f5bfc60603eadaa8'),
(177, 2, 4, 'Madame', 'PERROIN', 'FELIX', '0259357723', 'f.perroin@la-joliverie.com', '0691365015', 'Informatique', 'BTSSIO', 'fperroin', 'f4d2e80cdec9fe99241aa6ce9650b22359c13fe5'),
(178, 2, 4, 'Monsieur', 'POIRSON', 'KEVIN', '0297221392', 'k.poirson@la-joliverie.com', '0662254945', 'Informatique', 'BTSSIO', 'kpoirson', '57d25b61509b7310220fb9639e8544d851c08bf4'),
(179, 2, 4, 'Madame', 'RADOJKOVIC', 'JULIEN', '0255113577', 'j.radojkovic@la-joliverie.com', '0643303662', 'Informatique', 'BTSSIO', 'jradojkovic', 'b86d053e7b64043ea15aa2619a3ff2cf23eb1b10'),
(180, 2, 4, 'Monsieur', 'REDOR', 'AXEL', '0217315622', 'a.redor@la-joliverie.com', '0664885940', 'Informatique', 'BTSSIO', 'aredor', '5adb3310c6cf08a008ffbaf12f8c62f993dfa96e'),
(181, 2, 4, 'Madame', 'SALARDAINE', 'TANGUY', '0248531332', 't.salardaine@la-joliverie.com', '0632732958', 'Informatique', 'BTSSIO', 'tsalardaine', 'dcbf3ae4d41b408d433a3696c71a402eed8da893'),
(182, 2, 4, 'Monsieur', 'THIBEAU', 'ANTOINE', '0281941577', 'a.thibeau@la-joliverie.com', '0673989681', 'Informatique', 'BTSSIO', 'athibeau', '1cee279c971237ba2b1365a42aa267c5fafdfc8d'),
(183, 2, 4, 'Madame', 'TOUCHARD', 'KILLIAN', '0293422702', 'k.touchard@la-joliverie.com', '0671489641', 'Informatique', 'BTSSIO', 'ktouchard', 'ae98655bc9bce926815dde69fe5007d2b7e633b7'),
(184, NULL, 1, 'Monsieur', 'BEAUVAIS', 'NICOLAS', '0256890983', 'n.beauvais@la-joliverie.com', '0653098079', 'Informatique', 'BTSSIO', 'nbeauvais', 'ee7df3746f7fdc6f2bb911ae5372f798bbf1e5ea'),
(185, NULL, 1, 'Madame', 'CARBONNIER', 'FRANCOISE', '0273888870', 'f.carbonnier@la-joliverie.com', '0685725626', 'Informatique', 'BTSSIO', 'fcarbonnier', 'bf8b6a7731bb4c2e807acb573eea5e064c7d2c67'),
(186, NULL, 1, 'Monsieur', 'BORUGEOIS', 'JEAN-PIERRE', '0265662456', 'j.borugeois@la-joliverie.com', '0661790041', 'Informatique', 'BTSSIO', 'jborugeois', 'fd25a7dda28c2b0aed8d0250f787ec3d032ef5af'),
(187, NULL, 1, 'Madame', 'GHADDAR', 'SAMI', '0212044601', 's.ghaddar@la-joliverie.com', '0645524147', 'Informatique', 'BTSSIO', 'sghaddar', '72012ab495579593265b2b9a9911a26b6fd59f44'),
(188, 1, 4, 'Monsieur', 'ANDRE', 'MAEL', '0255235434', 'mael.andre@la-joliverie.com', '0621828612', 'Informatique', 'BTSSIO', 'mandre', '04058f39ac9e4f1bb0628335d14456c54f6b6877'),
(189, 1, 4, 'Madame', 'BONNET', 'DAVID', '0231913461', 'david.bonnet@la-joliverie.com', '0621318698', 'Informatique', 'BTSSIO', 'dbonnet', '1ce4bfb41eabbf7254f85504149784b8c173bb67'),
(190, 1, 4, 'Monsieur', 'BRETIN', 'FLORIAN', '0220362578', 'florian.bretin@la-joliverie.co', '0648352757', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(191, 1, 4, 'Madame', 'BROYARD', 'JEREMY', '0232437827', 'jeremy.broyard@la-joliverie.co', '0689507800', 'Informatique', 'BTSSIO', 'jbroyard', '8edc6af8ff0eeeb77f18b8e2e9e25558c5e2e0c9'),
(192, 1, 4, 'Monsieur', 'CHANSON', 'EMILIE', '0270910157', 'emilie.chanson@la-joliverie.co', '0618621837', 'Informatique', 'BTSSIO', 'echanson', 'ec3e2b1d2db6ed7d4788596b3e67d25701a6616a'),
(193, 1, 4, 'Madame', 'CHARRIAU', 'PIERRE', '0232944073', 'pierre.charriau@la-joliverie.c', '0668860758', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(194, 1, 4, 'Monsieur', 'CORBINEAU', 'BENJAMIN', '0241157160', 'benjamin.corbineau@la-joliveri', '0681635775', 'Informatique', 'BTSSIO', 'bcorbineau', '3a1781e66829fd494fffd39985268bd82df83cc4'),
(195, 1, 4, 'Madame', 'COUTEAU', 'MAXIME', '0229785649', 'maxime.couteau@la-joliverie.co', '0623487575', 'Informatique', 'BTSSIO', 'mcouteau', 'ea6aaa84213cf7312693f75130d2091d460fb3c8'),
(196, 1, 4, 'Monsieur', 'DESIREST', 'LOIC', '0248942480', 'loic.desirest@la-joliverie.com', '0673741405', 'Informatique', 'BTSSIO', 'ldesirest', '54e33e28a6970683ed23b8c1dbe3bac599d5d0f8'),
(197, 1, 4, 'Madame', 'DION', 'THOMAS', '0243701299', 'thomas.dion@la-joliverie.com', '0621783777', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(198, 1, 4, 'Monsieur', 'DROUAUD', 'AURELIEN', '0296740932', 'aurelien.drouaud@la-joliverie.', '0620302276', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(199, 1, 4, 'Madame', 'DURIEUX', 'FLORIAN', '0223125948', 'florian.durieux@la-joliverie.c', '0626446299', 'Informatique', 'BTSSIO', 'fdurieux', '6fa07842e5a644aeba4535ee3c95e0f85ac67248'),
(200, 1, 4, 'Monsieur', 'FRENEAU', 'PIERRE', '0279646804', 'pierre.freneau@la-joliverie.co', '0650041368', 'Informatique', 'BTSSIO', 'pfreneau', '77f176b891ec3875f195916e402897cd83d72aec'),
(201, 1, 4, 'Madame', 'LEDUC', 'STANISLAS', '0218319400', 'stanislas.leduc@la-joliverie.c', '0686876917', 'Informatique', 'BTSSIO', 'sleduc', '7f7d150a61fb85cd546feaf1b1377fb11941a9db'),
(202, 1, 4, 'Monsieur', 'LEPEE', 'LAURENT', '0269987428', 'laurent.lepee@la-joliverie.com', '0622081720', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(203, 1, 4, 'Madame', 'LOISEAU', 'STEPHANE', '0277565748', 'stephane.loiseau@la-joliverie.', '0625222863', 'Informatique', 'BTSSIO', 'sloiseau', '67c5e10307bed6c4d4c8a8dbae47a1b185479c59'),
(204, 1, 4, 'Monsieur', 'MACHOURI', 'YANNIS', '0232799222', 'yannis.machouri@la-joliverie.c', '0698368098', 'Informatique', 'BTSSIO', 'ymachouri', '2bfc678e713c396594aeeaccfbfd3aecc2acf91a'),
(205, 1, 4, 'Madame', 'PERROIN', 'THIBAULT', '0235430450', 'thibault.perroin@la-joliverie.', '0642050690', 'Informatique', 'BTSSIO', 'tperroin', '0708cce4e43593d58910f39f22d808b5b7b64585'),
(206, 1, 4, 'Monsieur', 'REDOR', 'JULIEN', '0246720856', 'julien.redor@la-joliverie.com', '0656757167', 'Informatique', 'BTSSIO', 'jredor', '019d77dc62a87ea48badb561e467552ba5ea8478'),
(207, 1, 4, 'Madame', 'RIO', 'VALENTIN', '0231558490', 'valentin.rio@la-joliverie.com', '0617631014', 'Informatique', 'BTSSIO', 'vrio', 'f0db3ebace308ac8b6e2d75128d6ba816440fe2c'),
(208, 1, 4, 'Monsieur', 'SAINDRENAN', 'ANTOINE', '0264267894', 'antoine.saindrenan@la-joliveri', '0653391453', 'Informatique', 'BTSSIO', 'asaindrenan', '0ddc8bddf329315cc6893bec90beca6851516764'),
(209, 1, 4, 'Madame', 'THIBEAU', 'TANGUY', '0275380661', 'tanguy.thibeau@la-joliverie.co', '0694313943', 'Informatique', 'BTSSIO', 'tthibeau', '0aa14cb9255436690f5032eb9242126c6b75d6c3'),
(210, 1, 4, 'Monsieur', 'TOUCHARD', 'ANTOINE', '0235027229', 'antoine.touchard@la-joliverie.', '0694055199', 'Informatique', 'BTSSIO', 'atouchard', 'e81353eee286b360ec4ef413095977fe35676c56'),
(211, 2, 4, 'Monsieur', 'BOITIVEAU', 'KEVIN', '0217801519', 'k.boitiveau@la-joliverie.com', '0672858598', 'Informatique', 'BTSSIO', 'kboitiveau', '0a0fb6aab165379c27e9127e9d4c8849f5fc5017'),
(212, 2, 4, 'Madame', 'BRETIN', 'FLORIAN', '0267796604', 'f.bretin@la-joliverie.com', '0650391707', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(213, 2, 4, 'Monsieur', 'BUREAU', 'JORDAN', '0283531264', 'j.bureau@la-joliverie.com', '0664537537', 'Informatique', 'BTSSIO', 'jbureau', 'ea1c18f218e3b0f31f534aa41d1de99f9917cf25'),
(214, 2, 4, 'Madame', 'CHAPRENTIER', 'GAETAN', '0259582873', 'g.chaprentier@la-joliverie.com', '0695546102', 'Informatique', 'BTSSIO', 'gchaprentier', '421b3934b983bd162b3deb899c7453380ebd64d0'),
(215, 2, 4, 'Monsieur', 'CHARRIAU', 'PIERRE', '0279872726', 'p.charriau@la-joliverie.com', '0639229678', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(216, 2, 4, 'Madame', 'CUNIBERTI', 'AMANDINE', '0245587471', 'a.cuniberti@la-joliverie.com', '0687081016', 'Informatique', 'BTSSIO', 'acuniberti', '26ecb3f51d86360cd311ab06aa3d489e1643edeb'),
(217, 2, 4, 'Monsieur', 'DION', 'THOMAS', '0226106595', 't.dion@la-joliverie.com', '0615574899', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(218, 2, 4, 'Madame', 'DROUAUD', 'AURELIEN', '0298051626', 'a.drouaud@la-joliverie.com', '0692561232', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(219, 2, 4, 'Monsieur', 'DURAND', 'FABIEN', '0229686651', 'f.durand@la-joliverie.com', '0630850848', 'Informatique', 'BTSSIO', 'fdurand', 'c925a12c0918665e787a671056b85af1baba96ce'),
(220, 2, 4, 'Madame', 'DURET', 'NICOLAS', '0290929330', 'n.duret@la-joliverie.com', '0654005991', 'Informatique', 'BTSSIO', 'nduret', 'b5c48d3be2d3e4e47c865693b29e7987685e47c8'),
(221, 2, 4, 'Monsieur', 'FERRE', 'ANTOINE', '0261790428', 'a.ferre@la-joliverie.com', '0637650187', 'Informatique', 'BTSSIO', 'aferre', '00d356cd0251543880578b2482621db6ca7c16e2'),
(222, 2, 4, 'Madame', 'GOURLAOUEN', 'YANN', '0299652048', 'y.gourlaouen@la-joliverie.com', '0682237807', 'Informatique', 'BTSSIO', 'ygourlaouen', 'eea488ae1699c432e5bb6814041495ce279020b5'),
(223, 2, 4, 'Monsieur', 'HAMON', 'CYRIL', '0244170090', 'c.hamon@la-joliverie.com', '0663919942', 'Informatique', 'BTSSIO', 'chamon', '31ed20e9291d628cd10ac90f3de53f95e2528b6b'),
(224, 2, 4, 'Madame', 'HASTINGS', 'VIANNEY', '0235629261', 'v.hastings@la-joliverie.com', '0619550751', 'Informatique', 'BTSSIO', 'vhastings', 'e02b68d739724531853aa2a654510f4c460798f9'),
(225, 2, 4, 'Monsieur', 'LEMONNIER', 'VALENTIN', '0258233886', 'v.lemonnier@la-joliverie.com', '0659545379', 'Informatique', 'BTSSIO', 'vlemonnier', '8b68b07f9e0a912b7f92d0f70e7887b1c9dd8d7f'),
(226, 2, 4, 'Madame', 'LEPEE', 'LAURENT', '0213605950', 'l.lepee@la-joliverie.com', '0664924294', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(227, 2, 4, 'Monsieur', 'LE MONNIER', 'STEPHANE', '0232403977', 's.le monnier@la-joliverie.com', '0670291444', 'Informatique', 'BTSSIO', 'sle monnier', '033661f5a5eddf6ecc952a310e1841b8da7d7e48'),
(228, 2, 4, 'Madame', 'LOISEAU', 'WILLIAM', '0215316002', 'w.loiseau@la-joliverie.com', '0615935242', 'Informatique', 'BTSSIO', 'wloiseau', 'a0ee1e89792b112029a902cd28013bcfae3c3308'),
(229, 2, 4, 'Monsieur', 'MABILEAU', 'YANNIS', '0234828982', 'y.mabileau@la-joliverie.com', '0663787764', 'Informatique', 'BTSSIO', 'ymabileau', '84e93f1ac941c69ca3033fba169b93cd22de2748'),
(230, 2, 4, 'Madame', 'MACHOURI', 'SEBASTIEN', '0211481345', 's.machouri@la-joliverie.com', '0614701708', 'Informatique', 'BTSSIO', 'smachouri', '2d23fc1802098bed5f4867f7c134bf55acf731be'),
(231, 2, 4, 'Monsieur', 'MARCOUYOUX', 'MAXIME', '0291906331', 'm.marcouyoux@la-joliverie.com', '0645957705', 'Informatique', 'BTSSIO', 'mmarcouyoux', 'e51eff404f34b4f3e0be150de29964e84f194a28'),
(232, 2, 4, 'Madame', 'MORNET', 'YOANN', '0290671613', 'y.mornet@la-joliverie.com', '0618012927', 'Informatique', 'BTSSIO', 'ymornet', '2615aca05ba35d0874d11c58e884b9e8d73250af'),
(233, 2, 4, 'Monsieur', 'PARISOT', 'THIBAULT', '0250421494', 't.parisot@la-joliverie.com', '0688723239', 'Informatique', 'BTSSIO', 'tparisot', '15daad2f7904bc7df7800923f5bfc60603eadaa8'),
(234, 2, 4, 'Madame', 'PERROIN', 'FELIX', '0299463048', 'f.perroin@la-joliverie.com', '0668997035', 'Informatique', 'BTSSIO', 'fperroin', 'f4d2e80cdec9fe99241aa6ce9650b22359c13fe5'),
(235, 2, 4, 'Monsieur', 'POIRSON', 'KEVIN', '0219574088', 'k.poirson@la-joliverie.com', '0690392379', 'Informatique', 'BTSSIO', 'kpoirson', '57d25b61509b7310220fb9639e8544d851c08bf4'),
(236, 2, 4, 'Madame', 'RADOJKOVIC', 'JULIEN', '0223003027', 'j.radojkovic@la-joliverie.com', '0670253405', 'Informatique', 'BTSSIO', 'jradojkovic', 'b86d053e7b64043ea15aa2619a3ff2cf23eb1b10'),
(237, 2, 4, 'Monsieur', 'REDOR', 'AXEL', '0228042566', 'a.redor@la-joliverie.com', '0622655075', 'Informatique', 'BTSSIO', 'aredor', '5adb3310c6cf08a008ffbaf12f8c62f993dfa96e'),
(238, 2, 4, 'Madame', 'SALARDAINE', 'TANGUY', '0252491213', 't.salardaine@la-joliverie.com', '0661101546', 'Informatique', 'BTSSIO', 'tsalardaine', 'dcbf3ae4d41b408d433a3696c71a402eed8da893'),
(239, 2, 4, 'Monsieur', 'THIBEAU', 'ANTOINE', '0275463906', 'a.thibeau@la-joliverie.com', '0677009364', 'Informatique', 'BTSSIO', 'athibeau', '1cee279c971237ba2b1365a42aa267c5fafdfc8d'),
(240, 2, 4, 'Madame', 'TOUCHARD', 'KILLIAN', '0269541186', 'k.touchard@la-joliverie.com', '0633697792', 'Informatique', 'BTSSIO', 'ktouchard', 'ae98655bc9bce926815dde69fe5007d2b7e633b7'),
(241, NULL, 1, 'Monsieur', 'BEAUVAIS', 'NICOLAS', '0236554743', 'n.beauvais@la-joliverie.com', '0672036026', 'Informatique', 'BTSSIO', 'nbeauvais', 'ee7df3746f7fdc6f2bb911ae5372f798bbf1e5ea'),
(242, NULL, 1, 'Madame', 'CARBONNIER', 'FRANCOISE', '0287510976', 'f.carbonnier@la-joliverie.com', '0657847610', 'Informatique', 'BTSSIO', 'fcarbonnier', 'bf8b6a7731bb4c2e807acb573eea5e064c7d2c67'),
(243, NULL, 1, 'Monsieur', 'BORUGEOIS', 'JEAN-PIERRE', '0242327470', 'j.borugeois@la-joliverie.com', '0691715867', 'Informatique', 'BTSSIO', 'jborugeois', 'fd25a7dda28c2b0aed8d0250f787ec3d032ef5af'),
(244, NULL, 1, 'Madame', 'GHADDAR', 'SAMI', '0262671742', 's.ghaddar@la-joliverie.com', '0666045341', 'Informatique', 'BTSSIO', 'sghaddar', '72012ab495579593265b2b9a9911a26b6fd59f44'),
(245, NULL, 4, 'Monsieur', 'Drapeau', 'David', '0240366213', 'dd@gmail.com', '0626126920', 'Informatique', 'btssio', 'ddrapeau', '40f76fcb209dd1b27577eee4d1f5b29a5ccd9370'),
(246, 1, 4, 'Monsieur', 'ANDRE', 'MAEL', '0222623596', 'mael.andre@la-joliverie.com', '0667647038', 'Informatique', 'BTSSIO', 'mandre', '04058f39ac9e4f1bb0628335d14456c54f6b6877'),
(247, 1, 4, 'Madame', 'BONNET', 'DAVID', '0255345299', 'david.bonnet@la-joliverie.com', '0656964812', 'Informatique', 'BTSSIO', 'dbonnet', '1ce4bfb41eabbf7254f85504149784b8c173bb67'),
(248, 1, 4, 'Monsieur', 'BRETIN', 'FLORIAN', '0262761070', 'florian.bretin@la-joliverie.co', '0688104383', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(249, 1, 4, 'Madame', 'BROYARD', 'JEREMY', '0239072170', 'jeremy.broyard@la-joliverie.co', '0665663940', 'Informatique', 'BTSSIO', 'jbroyard', '8edc6af8ff0eeeb77f18b8e2e9e25558c5e2e0c9'),
(250, 1, 4, 'Monsieur', 'CHANSON', 'EMILIE', '0275351772', 'emilie.chanson@la-joliverie.co', '0634468628', 'Informatique', 'BTSSIO', 'echanson', 'ec3e2b1d2db6ed7d4788596b3e67d25701a6616a'),
(251, 1, 4, 'Madame', 'CHARRIAU', 'PIERRE', '0268628898', 'pierre.charriau@la-joliverie.c', '0635142228', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(252, 1, 4, 'Monsieur', 'CORBINEAU', 'BENJAMIN', '0261561520', 'benjamin.corbineau@la-joliveri', '0621798328', 'Informatique', 'BTSSIO', 'bcorbineau', '3a1781e66829fd494fffd39985268bd82df83cc4'),
(253, 1, 4, 'Madame', 'COUTEAU', 'MAXIME', '0298344663', 'maxime.couteau@la-joliverie.co', '0682226045', 'Informatique', 'BTSSIO', 'mcouteau', 'ea6aaa84213cf7312693f75130d2091d460fb3c8'),
(254, 1, 4, 'Monsieur', 'DESIREST', 'LOIC', '0227841548', 'loic.desirest@la-joliverie.com', '0646489972', 'Informatique', 'BTSSIO', 'ldesirest', '54e33e28a6970683ed23b8c1dbe3bac599d5d0f8'),
(255, 1, 4, 'Madame', 'DION', 'THOMAS', '0264056814', 'thomas.dion@la-joliverie.com', '0673178930', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(256, 1, 4, 'Monsieur', 'DROUAUD', 'AURELIEN', '0230292364', 'aurelien.drouaud@la-joliverie.', '0684739121', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(257, 1, 4, 'Madame', 'DURIEUX', 'FLORIAN', '0265586212', 'florian.durieux@la-joliverie.c', '0611417216', 'Informatique', 'BTSSIO', 'fdurieux', '6fa07842e5a644aeba4535ee3c95e0f85ac67248'),
(258, 1, 4, 'Monsieur', 'FRENEAU', 'PIERRE', '0214072717', 'pierre.freneau@la-joliverie.co', '0621927246', 'Informatique', 'BTSSIO', 'pfreneau', '77f176b891ec3875f195916e402897cd83d72aec'),
(259, 1, 4, 'Madame', 'LEDUC', 'STANISLAS', '0226945584', 'stanislas.leduc@la-joliverie.c', '0621997825', 'Informatique', 'BTSSIO', 'sleduc', '7f7d150a61fb85cd546feaf1b1377fb11941a9db'),
(260, 1, 4, 'Monsieur', 'LEPEE', 'LAURENT', '0257994606', 'laurent.lepee@la-joliverie.com', '0615755760', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(261, 1, 4, 'Madame', 'LOISEAU', 'STEPHANE', '0267405119', 'stephane.loiseau@la-joliverie.', '0669507091', 'Informatique', 'BTSSIO', 'sloiseau', '67c5e10307bed6c4d4c8a8dbae47a1b185479c59'),
(262, 1, 4, 'Monsieur', 'MACHOURI', 'YANNIS', '0272291687', 'yannis.machouri@la-joliverie.c', '0622750419', 'Informatique', 'BTSSIO', 'ymachouri', '2bfc678e713c396594aeeaccfbfd3aecc2acf91a'),
(263, 1, 4, 'Madame', 'PERROIN', 'THIBAULT', '0226471904', 'thibault.perroin@la-joliverie.', '0635052757', 'Informatique', 'BTSSIO', 'tperroin', '0708cce4e43593d58910f39f22d808b5b7b64585'),
(264, 1, 4, 'Monsieur', 'REDOR', 'JULIEN', '0299743692', 'julien.redor@la-joliverie.com', '0654432964', 'Informatique', 'BTSSIO', 'jredor', '019d77dc62a87ea48badb561e467552ba5ea8478'),
(265, 1, 4, 'Madame', 'RIO', 'VALENTIN', '0289605587', 'valentin.rio@la-joliverie.com', '0675095464', 'Informatique', 'BTSSIO', 'vrio', 'f0db3ebace308ac8b6e2d75128d6ba816440fe2c'),
(266, 1, 4, 'Monsieur', 'SAINDRENAN', 'ANTOINE', '0277790481', 'antoine.saindrenan@la-joliveri', '0658234485', 'Informatique', 'BTSSIO', 'asaindrenan', '0ddc8bddf329315cc6893bec90beca6851516764'),
(267, 1, 4, 'Madame', 'THIBEAU', 'TANGUY', '0299126582', 'tanguy.thibeau@la-joliverie.co', '0639352001', 'Informatique', 'BTSSIO', 'tthibeau', '0aa14cb9255436690f5032eb9242126c6b75d6c3'),
(268, 1, 4, 'Monsieur', 'TOUCHARD', 'ANTOINE', '0268921703', 'antoine.touchard@la-joliverie.', '0697471245', 'Informatique', 'BTSSIO', 'atouchard', 'e81353eee286b360ec4ef413095977fe35676c56'),
(269, 2, 4, 'Monsieur', 'BOITIVEAU', 'KEVIN', '0221578046', 'k.boitiveau@la-joliverie.com', '0685652141', 'Informatique', 'BTSSIO', 'kboitiveau', '0a0fb6aab165379c27e9127e9d4c8849f5fc5017'),
(270, 2, 4, 'Madame', 'BRETIN', 'FLORIAN', '0243961218', 'f.bretin@la-joliverie.com', '0674523749', 'Informatique', 'BTSSIO', 'fbretin', 'd6c6edf965ad4dcff70ed30d981ff017c45a0fd8'),
(271, 2, 4, 'Monsieur', 'BUREAU', 'JORDAN', '0258831071', 'j.bureau@la-joliverie.com', '0663142472', 'Informatique', 'BTSSIO', 'jbureau', 'ea1c18f218e3b0f31f534aa41d1de99f9917cf25'),
(272, 2, 4, 'Madame', 'CHAPRENTIER', 'GAETAN', '0259262871', 'g.chaprentier@la-joliverie.com', '0624417284', 'Informatique', 'BTSSIO', 'gchaprentier', '421b3934b983bd162b3deb899c7453380ebd64d0'),
(273, 2, 4, 'Monsieur', 'CHARRIAU', 'PIERRE', '0263448577', 'p.charriau@la-joliverie.com', '0662224478', 'Informatique', 'BTSSIO', 'pcharriau', '065651d87772d314ffb5e043ce86116ee31a2d6a'),
(274, 2, 4, 'Madame', 'CUNIBERTI', 'AMANDINE', '0235233420', 'a.cuniberti@la-joliverie.com', '0679283050', 'Informatique', 'BTSSIO', 'acuniberti', '26ecb3f51d86360cd311ab06aa3d489e1643edeb'),
(275, 2, 4, 'Monsieur', 'DION', 'THOMAS', '0273111192', 't.dion@la-joliverie.com', '0682116915', 'Informatique', 'BTSSIO', 'tdion', 'bd42a526a3063579ac6582418dcd28c3d759114e'),
(276, 2, 4, 'Madame', 'DROUAUD', 'AURELIEN', '0283927699', 'a.drouaud@la-joliverie.com', '0640516311', 'Informatique', 'BTSSIO', 'adrouaud', 'ee95bdf811ebd8cc8bcd536ae419ba4426370e84'),
(277, 2, 4, 'Monsieur', 'DURAND', 'FABIEN', '0251624007', 'f.durand@la-joliverie.com', '0656219387', 'Informatique', 'BTSSIO', 'fdurand', 'c925a12c0918665e787a671056b85af1baba96ce'),
(278, 2, 4, 'Madame', 'DURET', 'NICOLAS', '0252155620', 'n.duret@la-joliverie.com', '0666984800', 'Informatique', 'BTSSIO', 'nduret', 'b5c48d3be2d3e4e47c865693b29e7987685e47c8'),
(279, 2, 4, 'Monsieur', 'FERRE', 'ANTOINE', '0280161033', 'a.ferre@la-joliverie.com', '0651899312', 'Informatique', 'BTSSIO', 'aferre', '00d356cd0251543880578b2482621db6ca7c16e2'),
(280, 2, 4, 'Madame', 'GOURLAOUEN', 'YANN', '0221417765', 'y.gourlaouen@la-joliverie.com', '0669766621', 'Informatique', 'BTSSIO', 'ygourlaouen', 'eea488ae1699c432e5bb6814041495ce279020b5');
INSERT INTO `PERSONNE` (`IDPERSONNE`, `IDSPECIALITE`, `IDROLE`, `CIVILITE`, `NOM`, `PRENOM`, `NUM_TEL`, `ADRESSE_MAIL`, `NUM_TEL_MOBILE`, `ETUDES`, `FORMATION`, `LOGINUTILISATEUR`, `MDPUTILISATEUR`) VALUES
(281, 2, 4, 'Monsieur', 'HAMON', 'CYRIL', '0226994777', 'c.hamon@la-joliverie.com', '0688097135', 'Informatique', 'BTSSIO', 'chamon', '31ed20e9291d628cd10ac90f3de53f95e2528b6b'),
(282, 2, 4, 'Madame', 'HASTINGS', 'VIANNEY', '0228001107', 'v.hastings@la-joliverie.com', '0626121359', 'Informatique', 'BTSSIO', 'vhastings', 'e02b68d739724531853aa2a654510f4c460798f9'),
(283, 2, 4, 'Monsieur', 'LEMONNIER', 'VALENTIN', '0227449137', 'v.lemonnier@la-joliverie.com', '0685811699', 'Informatique', 'BTSSIO', 'vlemonnier', '8b68b07f9e0a912b7f92d0f70e7887b1c9dd8d7f'),
(284, 2, 4, 'Madame', 'LEPEE', 'LAURENT', '0223592605', 'l.lepee@la-joliverie.com', '0637916072', 'Informatique', 'BTSSIO', 'llepee', '988d800269c6e0d258e9d64f40c49d862035b097'),
(285, 2, 4, 'Monsieur', 'LE MONNIER', 'STEPHANE', '0271463841', 's.le monnier@la-joliverie.com', '0656442713', 'Informatique', 'BTSSIO', 'sle monnier', '033661f5a5eddf6ecc952a310e1841b8da7d7e48'),
(286, 2, 4, 'Madame', 'LOISEAU', 'WILLIAM', '0212439822', 'w.loiseau@la-joliverie.com', '0630294913', 'Informatique', 'BTSSIO', 'wloiseau', 'a0ee1e89792b112029a902cd28013bcfae3c3308'),
(287, 2, 4, 'Monsieur', 'MABILEAU', 'YANNIS', '0219585185', 'y.mabileau@la-joliverie.com', '0660591583', 'Informatique', 'BTSSIO', 'ymabileau', '84e93f1ac941c69ca3033fba169b93cd22de2748'),
(288, 2, 4, 'Madame', 'MACHOURI', 'SEBASTIEN', '0243601087', 's.machouri@la-joliverie.com', '0671922652', 'Informatique', 'BTSSIO', 'smachouri', '2d23fc1802098bed5f4867f7c134bf55acf731be'),
(289, 2, 4, 'Monsieur', 'MARCOUYOUX', 'MAXIME', '0222816061', 'm.marcouyoux@la-joliverie.com', '0667723396', 'Informatique', 'BTSSIO', 'mmarcouyoux', 'e51eff404f34b4f3e0be150de29964e84f194a28'),
(290, 2, 4, 'Madame', 'MORNET', 'YOANN', '0251205703', 'y.mornet@la-joliverie.com', '0684816143', 'Informatique', 'BTSSIO', 'ymornet', '2615aca05ba35d0874d11c58e884b9e8d73250af'),
(291, 2, 4, 'Monsieur', 'PARISOT', 'THIBAULT', '0249840312', 't.parisot@la-joliverie.com', '0635133403', 'Informatique', 'BTSSIO', 'tparisot', '15daad2f7904bc7df7800923f5bfc60603eadaa8'),
(292, 2, 4, 'Madame', 'PERROIN', 'FELIX', '0225332454', 'f.perroin@la-joliverie.com', '0690353208', 'Informatique', 'BTSSIO', 'fperroin', 'f4d2e80cdec9fe99241aa6ce9650b22359c13fe5'),
(293, 2, 4, 'Monsieur', 'POIRSON', 'KEVIN', '0280241679', 'k.poirson@la-joliverie.com', '0666376964', 'Informatique', 'BTSSIO', 'kpoirson', '57d25b61509b7310220fb9639e8544d851c08bf4'),
(294, 2, 4, 'Madame', 'RADOJKOVIC', 'JULIEN', '0257338009', 'j.radojkovic@la-joliverie.com', '0660402713', 'Informatique', 'BTSSIO', 'jradojkovic', 'b86d053e7b64043ea15aa2619a3ff2cf23eb1b10'),
(295, 2, 4, 'Monsieur', 'REDOR', 'AXEL', '0218276276', 'a.redor@la-joliverie.com', '0667644663', 'Informatique', 'BTSSIO', 'aredor', '5adb3310c6cf08a008ffbaf12f8c62f993dfa96e'),
(296, 2, 4, 'Madame', 'SALARDAINE', 'TANGUY', '0230169334', 't.salardaine@la-joliverie.com', '0634159943', 'Informatique', 'BTSSIO', 'tsalardaine', 'dcbf3ae4d41b408d433a3696c71a402eed8da893'),
(297, 2, 4, 'Monsieur', 'THIBEAU', 'ANTOINE', '0255741799', 'a.thibeau@la-joliverie.com', '0647059330', 'Informatique', 'BTSSIO', 'athibeau', '1cee279c971237ba2b1365a42aa267c5fafdfc8d'),
(298, 2, 4, 'Madame', 'TOUCHARD', 'KILLIAN', '0249170192', 'k.touchard@la-joliverie.com', '0672079825', 'Informatique', 'BTSSIO', 'ktouchard', 'ae98655bc9bce926815dde69fe5007d2b7e633b7'),
(299, NULL, 1, 'Monsieur', 'BEAUVAIS', 'NICOLAS', '0232871030', 'n.beauvais@la-joliverie.com', '0661651687', 'Informatique', 'BTSSIO', 'nbeauvais', 'ee7df3746f7fdc6f2bb911ae5372f798bbf1e5ea'),
(300, NULL, 1, 'Madame', 'CARBONNIER', 'FRANCOISE', '0298884787', 'f.carbonnier@la-joliverie.com', '0693223760', 'Informatique', 'BTSSIO', 'fcarbonnier', 'bf8b6a7731bb4c2e807acb573eea5e064c7d2c67'),
(301, NULL, 1, 'Monsieur', 'BORUGEOIS', 'JEAN-PIERRE', '0218094400', 'j.borugeois@la-joliverie.com', '0611324610', 'Informatique', 'BTSSIO', 'jborugeois', 'fd25a7dda28c2b0aed8d0250f787ec3d032ef5af'),
(302, NULL, 1, 'Madame', 'GHADDAR', 'SAMI', '0223518673', 's.ghaddar@la-joliverie.com', '0626568475', 'Informatique', 'BTSSIO', 'sghaddar', '72012ab495579593265b2b9a9911a26b6fd59f44'),
(303, NULL, 4, 'Madame', 'Dixneuf', 'Baptiste', '0626126920', 'baptiste.dixneuf@gmail.com', '0240366213', 'Informatique', 'btssio', 'bdixneuf', 'eb6aad0e6b01cdb75a51fdc084d6b2e6fbe48839');

-- --------------------------------------------------------

--
-- Structure de la table `PROMOTION`
--

CREATE TABLE IF NOT EXISTS `PROMOTION` (
  `ANNEESCOL` char(9) NOT NULL,
  `IDPERSONNE` int(11) NOT NULL,
  `NUMCLASSE` char(32) NOT NULL,
  PRIMARY KEY (`ANNEESCOL`,`IDPERSONNE`,`NUMCLASSE`),
  KEY `PROMOTION_IBFK_4` (`IDPERSONNE`),
  KEY `PROMOTION_IBFK_5` (`NUMCLASSE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PROMOTION`
--

INSERT INTO `PROMOTION` (`ANNEESCOL`, `IDPERSONNE`, `NUMCLASSE`) VALUES
('2014-2015', 17, '2SLAM'),
('2014-2015', 18, '2SLAM'),
('2014-2015', 19, '2SLAM'),
('2014-2015', 20, '2SLAM'),
('2014-2015', 21, '2SLAM'),
('2014-2015', 22, '2SLAM'),
('2014-2015', 23, '2SLAM'),
('2014-2015', 24, '2SLAM'),
('2014-2015', 25, '2SLAM'),
('2014-2015', 26, '2SLAM'),
('2014-2015', 27, '2SLAM'),
('2014-2015', 28, '2SLAM'),
('2014-2015', 29, '2SLAM'),
('2014-2015', 30, '2SLAM'),
('2014-2015', 31, '2SLAM'),
('2014-2015', 32, '2SLAM'),
('2014-2015', 33, '2SLAM'),
('2014-2015', 34, '2SLAM'),
('2014-2015', 35, '2SLAM'),
('2014-2015', 36, '2SLAM'),
('2014-2015', 37, '2SLAM'),
('2014-2015', 38, '2SLAM'),
('2014-2015', 39, '2SLAM'),
('2014-2015', 40, '2SLAM'),
('2014-2015', 41, '2SLAM'),
('2014-2015', 42, '2SLAM'),
('2014-2015', 43, '2SLAM'),
('2014-2015', 44, '2SLAM'),
('2014-2015', 45, '2SLAM'),
('2014-2015', 46, '2SLAM'),
('2014-2015', 47, '2SLAM'),
('2014-2015', 48, '2SLAM'),
('2014-2015', 49, '2SLAM'),
('2014-2015', 50, '2SLAM'),
('2014-2015', 51, '2SLAM'),
('2014-2015', 52, '2SLAM'),
('2014-2015', 53, '2SLAM'),
('2014-2015', 54, '2SLAM'),
('2014-2015', 55, '2SLAM'),
('2014-2015', 56, '2SLAM'),
('2014-2015', 57, '2SLAM'),
('2014-2015', 58, '2SLAM'),
('2014-2015', 59, '2SLAM'),
('2014-2015', 60, '2SLAM'),
('2014-2015', 61, '2SLAM'),
('2014-2015', 62, '2SLAM'),
('2014-2015', 63, '2SLAM'),
('2014-2015', 64, '2SLAM'),
('2014-2015', 65, '2SLAM'),
('2014-2015', 66, '2SLAM'),
('2014-2015', 67, '2SLAM'),
('2014-2015', 68, '2SLAM'),
('2014-2015', 69, '2SLAM'),
('2014-2015', 74, '2SLAM'),
('2014-2015', 75, '2SLAM'),
('2014-2015', 76, '2SLAM'),
('2014-2015', 77, '2SLAM'),
('2014-2015', 78, '2SLAM'),
('2014-2015', 79, '2SLAM'),
('2014-2015', 80, '2SLAM'),
('2014-2015', 81, '2SLAM'),
('2014-2015', 82, '2SLAM'),
('2014-2015', 83, '2SLAM'),
('2014-2015', 84, '2SLAM'),
('2014-2015', 85, '2SLAM'),
('2014-2015', 86, '2SLAM'),
('2014-2015', 87, '2SLAM'),
('2014-2015', 88, '2SLAM'),
('2014-2015', 89, '2SLAM'),
('2014-2015', 90, '2SLAM'),
('2014-2015', 91, '2SLAM'),
('2014-2015', 92, '2SLAM'),
('2014-2015', 93, '2SLAM'),
('2014-2015', 94, '2SLAM'),
('2014-2015', 95, '2SLAM'),
('2014-2015', 96, '2SLAM'),
('2014-2015', 97, '2SLAM'),
('2014-2015', 98, '2SLAM'),
('2014-2015', 99, '2SLAM'),
('2014-2015', 100, '2SLAM'),
('2014-2015', 101, '2SLAM'),
('2014-2015', 102, '2SLAM'),
('2014-2015', 103, '2SLAM'),
('2014-2015', 104, '2SLAM'),
('2014-2015', 105, '2SLAM'),
('2014-2015', 106, '2SLAM'),
('2014-2015', 107, '2SLAM'),
('2014-2015', 108, '2SLAM'),
('2014-2015', 109, '2SLAM'),
('2014-2015', 110, '2SLAM'),
('2014-2015', 111, '2SLAM'),
('2014-2015', 112, '2SLAM'),
('2014-2015', 113, '2SLAM'),
('2014-2015', 114, '2SLAM'),
('2014-2015', 115, '2SLAM'),
('2014-2015', 116, '2SLAM'),
('2014-2015', 117, '2SLAM'),
('2014-2015', 118, '2SLAM'),
('2014-2015', 119, '2SLAM'),
('2014-2015', 120, '2SLAM'),
('2014-2015', 121, '2SLAM'),
('2014-2015', 122, '2SLAM'),
('2014-2015', 123, '2SLAM'),
('2014-2015', 124, '2SLAM'),
('2014-2015', 125, '2SLAM'),
('2014-2015', 126, '2SLAM'),
('2014-2015', 131, '2SLAM'),
('2014-2015', 132, '2SLAM'),
('2014-2015', 133, '2SLAM'),
('2014-2015', 134, '2SLAM'),
('2014-2015', 135, '2SLAM'),
('2014-2015', 136, '2SLAM'),
('2014-2015', 137, '2SLAM'),
('2014-2015', 138, '2SLAM'),
('2014-2015', 139, '2SLAM'),
('2014-2015', 140, '2SLAM'),
('2014-2015', 141, '2SLAM'),
('2014-2015', 142, '2SLAM'),
('2014-2015', 143, '2SLAM'),
('2014-2015', 144, '2SLAM'),
('2014-2015', 145, '2SLAM'),
('2014-2015', 146, '2SLAM'),
('2014-2015', 147, '2SLAM'),
('2014-2015', 148, '2SLAM'),
('2014-2015', 149, '2SLAM'),
('2014-2015', 150, '2SLAM'),
('2014-2015', 151, '2SLAM'),
('2014-2015', 152, '2SLAM'),
('2014-2015', 153, '2SLAM'),
('2014-2015', 154, '2SLAM'),
('2014-2015', 155, '2SLAM'),
('2014-2015', 156, '2SLAM'),
('2014-2015', 157, '2SLAM'),
('2014-2015', 158, '2SLAM'),
('2014-2015', 159, '2SLAM'),
('2014-2015', 160, '2SLAM'),
('2014-2015', 161, '2SLAM'),
('2014-2015', 162, '2SLAM'),
('2014-2015', 163, '2SLAM'),
('2014-2015', 164, '2SLAM'),
('2014-2015', 165, '2SLAM'),
('2014-2015', 166, '2SLAM'),
('2014-2015', 167, '2SLAM'),
('2014-2015', 168, '2SLAM'),
('2014-2015', 169, '2SLAM'),
('2014-2015', 170, '2SLAM'),
('2014-2015', 171, '2SLAM'),
('2014-2015', 172, '2SLAM'),
('2014-2015', 173, '2SLAM'),
('2014-2015', 174, '2SLAM'),
('2014-2015', 175, '2SLAM'),
('2014-2015', 176, '2SLAM'),
('2014-2015', 177, '2SLAM'),
('2014-2015', 178, '2SLAM'),
('2014-2015', 179, '2SLAM'),
('2014-2015', 180, '2SLAM'),
('2014-2015', 181, '2SLAM'),
('2014-2015', 182, '2SLAM'),
('2014-2015', 183, '2SLAM'),
('2014-2015', 188, '2SLAM'),
('2014-2015', 189, '2SLAM'),
('2014-2015', 190, '2SLAM'),
('2014-2015', 191, '2SLAM'),
('2014-2015', 192, '2SLAM'),
('2014-2015', 193, '2SLAM'),
('2014-2015', 194, '2SLAM'),
('2014-2015', 195, '2SLAM'),
('2014-2015', 196, '2SLAM'),
('2014-2015', 197, '2SLAM'),
('2014-2015', 198, '2SLAM'),
('2014-2015', 199, '2SLAM'),
('2014-2015', 200, '2SLAM'),
('2014-2015', 201, '2SLAM'),
('2014-2015', 202, '2SLAM'),
('2014-2015', 203, '2SLAM'),
('2014-2015', 204, '2SLAM'),
('2014-2015', 205, '2SLAM'),
('2014-2015', 206, '2SLAM'),
('2014-2015', 207, '2SLAM'),
('2014-2015', 208, '2SLAM'),
('2014-2015', 209, '2SLAM'),
('2014-2015', 210, '2SLAM'),
('2014-2015', 211, '2SLAM'),
('2014-2015', 212, '2SLAM'),
('2014-2015', 213, '2SLAM'),
('2014-2015', 214, '2SLAM'),
('2014-2015', 215, '2SLAM'),
('2014-2015', 216, '2SLAM'),
('2014-2015', 217, '2SLAM'),
('2014-2015', 218, '2SLAM'),
('2014-2015', 219, '2SLAM'),
('2014-2015', 220, '2SLAM'),
('2014-2015', 221, '2SLAM'),
('2014-2015', 222, '2SLAM'),
('2014-2015', 223, '2SLAM'),
('2014-2015', 224, '2SLAM'),
('2014-2015', 225, '2SLAM'),
('2014-2015', 226, '2SLAM'),
('2014-2015', 227, '2SLAM'),
('2014-2015', 228, '2SLAM'),
('2014-2015', 229, '2SLAM'),
('2014-2015', 230, '2SLAM'),
('2014-2015', 231, '2SLAM'),
('2014-2015', 232, '2SLAM'),
('2014-2015', 233, '2SLAM'),
('2014-2015', 234, '2SLAM'),
('2014-2015', 235, '2SLAM'),
('2014-2015', 236, '2SLAM'),
('2014-2015', 237, '2SLAM'),
('2014-2015', 238, '2SLAM'),
('2014-2015', 239, '2SLAM'),
('2014-2015', 240, '2SLAM'),
('2014-2015', 246, '2SLAM'),
('2014-2015', 247, '2SLAM'),
('2014-2015', 248, '2SLAM'),
('2014-2015', 249, '2SLAM'),
('2014-2015', 250, '2SLAM'),
('2014-2015', 251, '2SLAM'),
('2014-2015', 252, '2SLAM'),
('2014-2015', 253, '2SLAM'),
('2014-2015', 254, '2SLAM'),
('2014-2015', 255, '2SLAM'),
('2014-2015', 256, '2SLAM'),
('2014-2015', 257, '2SLAM'),
('2014-2015', 258, '2SLAM'),
('2014-2015', 259, '2SLAM'),
('2014-2015', 260, '2SLAM'),
('2014-2015', 261, '2SLAM'),
('2014-2015', 262, '2SLAM'),
('2014-2015', 263, '2SLAM'),
('2014-2015', 264, '2SLAM'),
('2014-2015', 265, '2SLAM'),
('2014-2015', 266, '2SLAM'),
('2014-2015', 267, '2SLAM'),
('2014-2015', 268, '2SLAM'),
('2014-2015', 269, '2SLAM'),
('2014-2015', 270, '2SLAM'),
('2014-2015', 271, '2SLAM'),
('2014-2015', 272, '2SLAM'),
('2014-2015', 273, '2SLAM'),
('2014-2015', 274, '2SLAM'),
('2014-2015', 275, '2SLAM'),
('2014-2015', 276, '2SLAM'),
('2014-2015', 277, '2SLAM'),
('2014-2015', 278, '2SLAM'),
('2014-2015', 279, '2SLAM'),
('2014-2015', 280, '2SLAM'),
('2014-2015', 281, '2SLAM'),
('2014-2015', 282, '2SLAM'),
('2014-2015', 283, '2SLAM'),
('2014-2015', 284, '2SLAM'),
('2014-2015', 285, '2SLAM'),
('2014-2015', 286, '2SLAM'),
('2014-2015', 287, '2SLAM'),
('2014-2015', 288, '2SLAM'),
('2014-2015', 289, '2SLAM'),
('2014-2015', 290, '2SLAM'),
('2014-2015', 291, '2SLAM'),
('2014-2015', 292, '2SLAM'),
('2014-2015', 293, '2SLAM'),
('2014-2015', 294, '2SLAM'),
('2014-2015', 295, '2SLAM'),
('2014-2015', 296, '2SLAM'),
('2014-2015', 297, '2SLAM'),
('2014-2015', 298, '2SLAM');

-- --------------------------------------------------------

--
-- Structure de la table `ROLE`
--

CREATE TABLE IF NOT EXISTS `ROLE` (
  `IDROLE` smallint(6) NOT NULL,
  `RANG` smallint(6) NOT NULL,
  `LIBELLE` varchar(30) NOT NULL,
  PRIMARY KEY (`IDROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ROLE`
--

INSERT INTO `ROLE` (`IDROLE`, `RANG`, `LIBELLE`) VALUES
(0, 0, 'Autre'),
(1, 1, 'Administrateur'),
(2, 2, 'Secrétaire'),
(3, 3, 'Professeur'),
(4, 4, 'Etudiant'),
(5, 5, 'MaitreDeStage');

-- --------------------------------------------------------

--
-- Structure de la table `SPECIALITE`
--

CREATE TABLE IF NOT EXISTS `SPECIALITE` (
  `IDSPECIALITE` smallint(6) NOT NULL,
  `LIBELLECOURTSPECIALITE` varchar(10) NOT NULL,
  `LIBELLELONGSPECIALITE` varchar(128) NOT NULL,
  PRIMARY KEY (`IDSPECIALITE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `SPECIALITE`
--

INSERT INTO `SPECIALITE` (`IDSPECIALITE`, `LIBELLECOURTSPECIALITE`, `LIBELLELONGSPECIALITE`) VALUES
(1, 'SLAM', 'Solutions logicielles et applications métiers'),
(2, 'SISR', 'Solutions d''infrastructures systèmes et réseaux');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CLASSE`
--
ALTER TABLE `CLASSE`
  ADD CONSTRAINT `CLASSE_IBFK_1` FOREIGN KEY (`IDSPECIALITE`) REFERENCES `SPECIALITE` (`IDSPECIALITE`),
  ADD CONSTRAINT `CLASSE_IBFK_2` FOREIGN KEY (`NUMFILIERE`) REFERENCES `FILIERE` (`NUMFILIERE`);

--
-- Contraintes pour la table `PERSONNE`
--
ALTER TABLE `PERSONNE`
  ADD CONSTRAINT `PERSONNE_IBFK_1` FOREIGN KEY (`IDSPECIALITE`) REFERENCES `SPECIALITE` (`IDSPECIALITE`),
  ADD CONSTRAINT `PERSONNE_IBFK_2` FOREIGN KEY (`IDROLE`) REFERENCES `ROLE` (`IDROLE`);

--
-- Contraintes pour la table `PROMOTION`
--
ALTER TABLE `PROMOTION`
  ADD CONSTRAINT `PROMOTION_IBFK_3` FOREIGN KEY (`ANNEESCOL`) REFERENCES `ANNEESCOL` (`ANNEESCOL`),
  ADD CONSTRAINT `PROMOTION_IBFK_4` FOREIGN KEY (`IDPERSONNE`) REFERENCES `PERSONNE` (`IDPERSONNE`),
  ADD CONSTRAINT `PROMOTION_IBFK_5` FOREIGN KEY (`NUMCLASSE`) REFERENCES `CLASSE` (`NUMCLASSE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;