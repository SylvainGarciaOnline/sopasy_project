-- Adminer 4.7.9 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tbl_contact-form`;
CREATE TABLE `tbl_contact-form` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_username` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` int(10) NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2022-06-27 08:09:07