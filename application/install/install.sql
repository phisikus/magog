--
-- This is database preparation script for MAGOG system
--
CREATE DATABASE `baza`;
USE `baza`;


-- 
-- This part creates necessary tables connected with User Management
-- 
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
 
INSERT INTO `roles` (`id`, `name`, `description`) VALUES(1, 'admin', 'Konto z uprawnieniami administratora.');
INSERT INTO `roles` (`id`, `name`, `description`) VALUES(2, 'redaktor', 'Konto redaktora artykułów.');
INSERT INTO `roles` (`id`, `name`, `description`) VALUES(3, 'moderator','Konto moderatora.');
INSERT INTO `roles` (`id`, `name`, `description`) VALUES(4, 'czytelnik','Konto czytelnika.');
INSERT INTO `roles` (`id`, `name`, `description`) VALUES(5, 'login','Uprawnienia do logowania.');

 
CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` char(100) NOT NULL DEFAULT '',
  `logins` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_login` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `full_name` varchar(255), 
  `external_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `signature` varchar(700),
  `avatar` varchar(127),
  `lang` varchar(10),
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES(1, 'admin','admin@admin.eu','d98860cb08fd1ad0075f55ff23b13c6fb0994de598df70b423a019ffea6d4296');
INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES(1,1);
INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES(1,2);
INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES(1,3);
INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES(1,4);
INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES(1,5);


CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created` int(10) UNSIGNED NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
 
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
 
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
  
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `website` varchar(255),
  `module` varchar(255) NOT NULL,
  `property` varchar(255) NOT NULL,
  `value` varchar(255),
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `config` (`id`,`module`,`property`,`value`) VALUES(1,'template','default','default');
INSERT INTO `config` (`id`,`module`,`property`,`value`) VALUES(2,'language','default','en');
 
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `short_title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `mod_date` int(10) NOT NULL,
  `public` int(1) NOT NULL,
  `comments` int(1) NOT NULL,
  `news` int(1) NOT NULL,
  `categories` varchar(700),
  `lang` varchar(10),
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
 
CREATE TABLE IF NOT EXISTS `comments` (
	`id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT,
	`author_id` int(11) NOT NULL,
	`author_username` varchar(32) NOT NULL,
	`parent_page` int(15) UNSIGNED NOT NULL,
	`parent_comment` int(15) DEFAULT '0',
	`content` text,
	`date` int(10) UNSIGNED NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `comments`
	ADD CONSTRAINT `comments_pages1` FOREIGN KEY (`parent_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

CREATE TABLE IF NOT EXISTS `menu` (
	`id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT,
	`text` varchar(255),
	`parent_id` int(15) UNSIGNED,
	`link` varchar(255),
	`enabled` int(1) UNSIGNED NOT NULL,
	`visible` int(1) UNSIGNED NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `menu`
	ADD CONSTRAINT `menu_submenus` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE;


