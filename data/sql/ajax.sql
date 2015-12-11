-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2015 at 02:23 PM
-- Server version: 5.6.20
-- PHP Version: 5.4.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `description` text,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `country`, `state`, `city`, `zip`, `address`, `contact`, `phone`, `email`, `website`, `bank`, `bank_account`, `description`, `updated_at`, `created_at`) VALUES
(1, 'Atelier graphique', 'France', 'Victoria', 'Melbourne', '3004', 'Bronz Apt. 3/6 Tesvikiye', 'Schmitt  Carine', '40.32.2555', 'schmitt.carine@demo.demo', '', 'BGH', 'BGH-200-TRHD543543543XX', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-01-31', '2015-01-31'),
(2, 'Mini Wheels Co.', 'USA', 'CA', 'San Francisco', '32132', '5557 North Pendale Street', 'Murphy Julie', '+49 69 66 90 2555', 'julie@demo.demo', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-01-31', '2015-01-31'),
(3, 'Baane Mini Imports', 'Norway', 'Stavern', 'Stavern', '65464', 'Erling Skakkes gate 78', 'Bergulfsen Jonas ', '03 9520 4555', 'jonas@demo.demo', '', 'BANK OF NORWAY', 'NORWAY-100-DSADF-54354300000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-01-31', '2015-01-31'),
(4, 'Diecast Classics Inc.', 'USA', 'CA', 'Burlingame', '94217', '9408 Furth Circle', 'Leong Kelvin', '+001 215 555 1555', 'kelvin@demo.demo', 'http://www.user-1.com', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '2015-01-31', '2015-01-31'),
(5, 'American Souvenirs Inc', 'USA', 'CA', 'New Haven', '9873', '149 Spinnaker Dr.', 'Franco  	Keith', '+47 2267 3215', 'franco@demo.demo', '', 'BANK OF USA', 'USA-01-02-LOHTDSDS-2220000', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2015-01-31', '2015-01-31'),
(6, 'Vitachrome Inc.', 'USA', 'NY', 'NYC', '10022', '2678 Kingston Rd.', 'Frick Michael', '2125551500', 'michael@demo.demo', '', 'BANK OF NYC', 'NYC0000KDSDS-434232XXX', '', '2015-01-31', '2015-01-31'),
(7, 'Toys of Finland, Co.', 'Finland', 'Helsinki', 'Helsinki', '43242', 'Keskuskatu 45', 'Karttunen Matti', '90-224 8555', 'mati@demo.demo', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-01-31', '2015-01-31'),
(8, 'AV Stores, Co.', 'UK', 'Manchester', 'Manchester', 'EC2 5NT', 'Fauntleroy Circus', 'Ashworth Rachel', '+00 (123) 456 7890', 'rachel@demo.demo', 'http://www.av-stores.com', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-01-31', '2015-01-31'),
(9, 'Clover Collections, Co.', 'Ireland', 'Dublie', 'Dublin', '4324324', '25 Maiden Lane', 'Cassidy Dean', '+353 1862 1555', 'dean@demo.demo', 'htttp://www.dean.com', 'BANK OF IRELAND', 'IRELAND-400-KLOPUYH-98658600000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-01-31', '2015-01-31'),
(10, 'Auto-Moto Classics Inc.', 'USA', 'MA', 'Brickhaven', '6940', '16780 Pompton St.', 'Taylor Leslie', '(604) 555-3392', 'leslie@demo.demo', '', 'BANK OF USA', 'USA-01-02-03-43243242-DDD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-01-31', '2015-01-31'),
(11, 'UK Collectables, Ltd.', 'UK', 'Liverpool', 'Liverpool', '54353', '12, Berkeley Gardens Blvd', 'Devon  Elizabeth', '+852 2251 1555', 'elizabeth@demo.demo', 'http://elizabeth-co.uk.com', 'BANK OF UK', 'UK-500-JFAJFJDKJDK-432432', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-01-31', '2015-01-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
