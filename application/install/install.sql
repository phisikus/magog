-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2013 at 07:07 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.4-14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

DROP DATABASE `magog`;
CREATE DATABASE IF NOT EXISTS `magog`;
USE `magog`;

--
-- Database: `magog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) unsigned DEFAULT NULL,
  `author_username` varchar(32) NOT NULL,
  `parent_page` int(15) unsigned NULL,
  `parent_comment` int(15) unsigned DEFAULT NULL,
  `content` text,
  `date` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_pages1` (`parent_page`),
  KEY `parent_comment` (`parent_comment`),
  KEY `comments_users1` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author_id`, `author_username`, `parent_page`, `parent_comment`, `content`, `date`) VALUES
(1, 1, 'admin', 1, NULL, 'Tak, to super', 1348575681),
(2, 1, 'admin', 1, NULL, 'No seryjnie niesamowite.', 1348575689);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `website` varchar(255) DEFAULT NULL,
  `module` varchar(255) NOT NULL,
  `property` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `website`, `module`, `property`, `value`) VALUES
(5, NULL, 'template', 'default', 'default'),
(6, NULL, 'page', 'homepage', '1'),
(7, NULL, 'page', 'title', 'Przykładowa Strona');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  `parent_id` int(15) unsigned DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `enabled` int(1) unsigned NOT NULL,
  `visible` int(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_submenus` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `text`, `parent_id`, `link`, `enabled`, `visible`) VALUES
(14, 'Menu główne', NULL, '', 1, 1),
(15, 'Archiwum', 14, '/~phisikus/magog/index.php/show/news/1=0=0', 1, 1),
(16, 'Strona główna', 14, '/~phisikus/magog/index.php/show/page/1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `short_title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(15) unsigned NULL,
  `date` int(10) unsigned NOT NULL,
  `mod_date` int(10) NOT NULL,
  `public` int(1) NOT NULL,
  `comments` int(1) NOT NULL,
  `news` int(1) NOT NULL,
  `categories` varchar(700) DEFAULT NULL,
  `lang` varchar(10) DEFAULT NULL,
  `parent_page` int(15) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_page` (`parent_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `short_title`, `content`, `author_id`, `date`, `mod_date`, `public`, `comments`, `news`, `categories`, `lang`, `parent_page`) VALUES
(1, 'Witaj!', 'witaj', '<p>Witaj w systemie <strong>MAGOG</strong>! Jest to system zarządzania treścią posiadający następujące funkcje:</p>\n<p><span style="text-decoration: underline;">Zarządzania treścią:</span></p>\n<ul>\n<li>Artykuły (strona statyczna / news)</li>\n<li>Komentarze (możliwość moderacji i wyłączenia możliwości komentowania dla r&oacute;żnych stron)</li>\n<li>Edytowalne, wielopoziomowe menu</li>\n<li>Strona gł&oacute;wna z możliwością wyboru (strona statyczna / archiwum news&oacute;w)</li>\n<li>Możliwość wyboru szablonu</li>\n</ul>\n<p><span style="text-decoration: underline;">Zarządzania użytkownikami</span></p>\n<ul>\n<li>System użytkownik&oacute;w\n<ul>\n<li>Dane osobowe</li>\n<li>Możliwość wyboru języka panelu (en/pl)</li>\n<li>Awatar</li>\n</ul>\n</li>\n<li>Grupy uprawnień\n<ul>\n<li>Domyślne grupy:</li>\n<ul>\n<li>administratorzy</li>\n<li>moderatorzy (komentarze)</li>\n<li>redaktorzy (atykuły)</li>\n<li>czytelnicy</li>\n</ul>\n<li>Możliwość edycji grup, przydzielania członk&oacute;w</li>\n<li>Każda z grup ma nazwę i opis</li>\n</ul>\n</li>\n</ul>\n<p>&nbsp;</p>', 1, 1342608942, 1348575672, 1, 1, 0, '', 'en', NULL),
(2, 'Pierwszy News', 'pierwszy-news', '<p>Oto jest pierwsza <span style="color: #888888;">informacja<span style="color: #ff0000;">&nbsp;<span style="font-size: medium;">zapisana jako news</span></span></span></p>', 1, 1348575732, 1348575732, 1, 0, 1, '', 'en', NULL),
(3, 'Drugi news', 'drugi-news', '<p>Oto jest drugi news na stronie - tym razem komentowalny.</p>', 1, 1348575813, 1348575813, 1, 1, 1, '', 'en', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Konto z uprawnieniami administratora.'),
(2, 'redaktor', 'Konto redaktora artykułów.'),
(3, 'moderator', 'Konto moderatora.'),
(4, 'czytelnik', 'Konto czytelnika.'),
(5, 'login', 'Uprawnienia do logowania.');

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 3),
(1, 4),
(1, 5),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` char(100) NOT NULL DEFAULT '',
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned NOT NULL DEFAULT '0',
  `full_name` varchar(255) DEFAULT NULL,
  `external_id` int(11) unsigned NOT NULL DEFAULT '0',
  `signature` varchar(700) DEFAULT NULL,
  `avatar` varchar(127) DEFAULT NULL,
  `lang` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`, `full_name`, `external_id`, `signature`, `avatar`, `lang`) VALUES
(1, 'admin@admin.eu', 'admin', 'd98860cb08fd1ad0075f55ff23b13c6fb0994de598df70b423a019ffea6d4296', 30, 1348575423, '', 0, '', NULL, 'en'),
(2, 'phisikus@o2.pl', 'phisikus', 'f19a97af6b7e6543c2263d86933b86069c69a7e68a693dd5c431de3dba4c1f3e', 3, 1343210374, 'Marcin Biernacki', 0, '', 'avatar-500fc3221fd99hello-yes-this-is-dog.png', 'pl');

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

DROP TABLE IF EXISTS `user_tokens`;
CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_pages1` FOREIGN KEY (`parent_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_users1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`parent_comment`) REFERENCES `comments` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_submenus` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`parent_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pages_users_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
