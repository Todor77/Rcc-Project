-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2015 at 10:49 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prodavnica`
--

-- --------------------------------------------------------

--
-- Table structure for table `ic_cart`
--

CREATE TABLE IF NOT EXISTS `ic_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ic_cart`
--

INSERT INTO `ic_cart` (`id`, `product_id`, `user_id`, `date`) VALUES
(12, 1, 0, 1424035053),
(13, 12, 19, 1424035726);

-- --------------------------------------------------------

--
-- Table structure for table `ic_offer`
--

CREATE TABLE IF NOT EXISTS `ic_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `ic_offer`
--

INSERT INTO `ic_offer` (`id`, `title`, `text`, `image`, `price`, `category`, `user`, `created`, `active`) VALUES
(1, 'Бандажи', '&lt;p&gt;Бандаж 17 цола&lt;/p&gt;', '20150215-1d7275d9c11534313012b867839c8b76.jpg', 30000, 1, 18, 1424032180, 1),
(2, 'Браник', '&lt;p&gt;Преден браник за ауди а4&lt;/p&gt;', '20150215-5300c265d7e2e8b4b00e28dbb4f0a54d.jpg', 2000, 2, 18, 1424032236, 1),
(3, 'Верига', '&lt;p&gt;Верига&lt;/p&gt;', '20150215-1b948431600b692da43250a277516983.jpg', 3000, 1, 18, 1424032294, 1),
(4, 'Дизна голф', '&lt;p&gt;Дизна за голеф 5&lt;/p&gt;', '20150215-6d1ba926060cb2e97e21d3b7ba78e089.jpg', 20000, 3, 18, 1424032340, 1),
(5, 'Замаец', '&lt;p&gt;Замаец&lt;/p&gt;', '20150215-ed592dd9bfc7b45c532d1df638299200.jpg', 50000, 2, 18, 1424032374, 1),
(6, 'Дизна за Бмв', '&lt;p&gt;Дизна за БМВ&amp;nbsp;&lt;/p&gt;', '20150215-2642df922c86f472c3f181dde07e9c2a.jpg', 30000, 1, 18, 1424032457, 1),
(7, 'Штоп за Бмв', '&lt;p&gt;Заден штоп за БМВ&amp;nbsp;&lt;/p&gt;', '20150215-b0b5959b62bb0d9efdd8abde339ced2c.jpg', 15000, 1, 18, 1424032514, 1),
(8, 'Решетка', '&lt;p&gt;Предна решетка за бмв&lt;/p&gt;', '20150215-62be8cebbba4275a7e9f73109bceaa25.jpg', 3000, 1, 18, 1424032597, 1),
(9, 'Улје', '&lt;p&gt;Улје за бмв 40/20&lt;/p&gt;', '20150215-94a4072feda80cf36e66ed840df01441.jpg', 1000, 1, 18, 1424032692, 1),
(10, 'Оригинал Дизна', '&lt;p&gt;Бош диза&lt;/p&gt;', '20150215-743a035cac825510ba4f10612301f005.jpg', 55000, 1, 18, 1424032721, 1),
(11, 'Ретровизор', '&lt;p&gt;Ретровизор десен и лев&lt;/p&gt;', '20150215-1e1b1a475c9c8ad67e40bf2cc20dbeea.jpg', 20000, 1, 18, 1424032753, 1),
(12, 'Филтер за воздух', '&lt;p&gt;Филтер за воздух&lt;/p&gt;', '20150215-c9fa5d7c563aa74c30b6c391094bec83.jpg', 750, 1, 18, 1424032782, 1),
(13, 'Седишта', '&lt;p&gt;Предни седишта&lt;/p&gt;', '20150215-e3b7e743964f1b6af9133439cc50afbd.jpg', 34000, 1, 18, 1424032817, 1),
(14, 'Жмигавец', '&lt;p&gt;Предни жмигавци&lt;/p&gt;', '20150215-364a3324387899eb76e1fbb509f56975.jpg', 500, 1, 18, 1424032945, 1),
(15, 'Стакла', '&lt;p&gt;Предни стакла за бмв 320&lt;/p&gt;', '20150215-95cdc148109be9fb5172fa73a7bf7d05.jpg', 23000, 1, 18, 1424032970, 1),
(16, 'Ансплух', '&lt;p&gt;Ауспух не целосен&lt;/p&gt;', '20150215-07700258b838bef93912c0fcc9417069.jpg', 1400, 1, 18, 1424033027, 1),
(17, 'Бубрег', '&lt;p&gt;Бубрег за хауба на бмв&lt;/p&gt;', '20150215-180bd4348b03a8b8a593e64b623020d1.jpg', 2000, 1, 18, 1424033067, 1),
(18, 'Бандаж 18', '&lt;p&gt;Бандаж 18 цола за 530,320&lt;/p&gt;', '20150215-432de3c355e559833ecb9e5efb1fd77e.jpg', 30000, 1, 18, 1424033119, 1),
(19, 'Ксенон фар ', '&lt;p&gt;Фар ксенон лев за Ауди&lt;/p&gt;', '20150215-146e257f667ea406a7189e9fbdcfbb4a.jpg', 12000, 2, 18, 1424033325, 1),
(20, 'Плочки', '&lt;p&gt;Плочки за Ауди а4 99 година&lt;/p&gt;', '20150215-9fcbeb9da75a5fa85563aa3034e61b22.jpg', 3500, 2, 18, 1424033363, 1),
(21, 'Километража', '&lt;p&gt;Километража за постар модел на ауди&lt;/p&gt;', '20150215-a1d9d636106a70f9e6ce71748073c30f.jpg', 1200, 2, 18, 1424033399, 1),
(22, 'компресор ', '&lt;p&gt;Компресор за клима Ауди А6 Половен&lt;/p&gt;', '20150215-b9ab8ec17cac48a4d0005088b98f3444.jpg', 6500, 2, 18, 1424033456, 1),
(23, 'Црево за хладник', '&lt;p&gt;Црево за хладник за Ауди 90 НОВО&lt;/p&gt;', '20150215-01854333d54f042a2e66d4732a194b43.jpg', 200, 2, 18, 1424033510, 1),
(24, 'дискови ', '&lt;p&gt;Дискови за Ауди А3 Нови&lt;/p&gt;', '20150215-1a3c2490b96dbf2cf39577869bda6da7.jpg', 3000, 2, 18, 1424033557, 1),
(25, 'Сајла за стакло', '&lt;p&gt;Сајла за подигнување на стакло ПОЛОВНИ&lt;/p&gt;', '20150215-b78ea56045ca3c51db08ae99fc32f679.jpg', 1200, 2, 18, 1424033591, 1),
(26, 'Свирка', '&lt;p&gt;Сврика нова&lt;/p&gt;', '20150215-0b88635b3a572791d3c9ee641823bcff.jpg', 500, 2, 18, 1424033630, 1),
(27, 'Филстер за уље СПОРТСКИ', '&lt;p&gt;Спортски филтер за уље за Ауди С4&lt;/p&gt;', '20150215-6c687b613c8f7489763261c3575fc33f.jpg', 5000, 2, 18, 1424033731, 1),
(28, 'Баланска ', '&lt;p&gt;Балан штангла за Ауди а4&lt;/p&gt;', '20150215-d5aa51e30d382d74014d26aa4993b68a.jpg', 4250, 2, 18, 1424033779, 1),
(29, 'Потисна плоча', '&lt;p&gt;Потисна плоча ПОЛОВНА за Ауди а3&lt;/p&gt;', '20150215-30a18dc1df5ce1d5007450253e28083e.jpg', 6500, 1, 18, 1424033903, 1),
(30, 'Карбуратор', '&lt;p&gt;Половен карбуратор во одлична состојба за Ауди а6 Цената не е фиксна&lt;/p&gt;', '20150215-80a4489d78f0bfd250e3751f593a3f2e.jpg', 3690, 2, 18, 1424033969, 1),
(31, 'Метална налепница', '&lt;p&gt;Налепници за Ауди S-line&amp;nbsp;&lt;/p&gt;', '20150215-82824396dbcf5cebea9b527288b61243.jpg', 500, 2, 18, 1424034077, 1),
(32, 'Прстења', '&lt;p&gt;Прстења за Ауди универзални&lt;/p&gt;', '20150215-180d1c7e67930edb3e3cba17d0b15322.jpg', 2580, 2, 18, 1424034167, 1),
(33, 'Знак', '&lt;p&gt;Преден знак за Воксваген&lt;/p&gt;', '20150215-ac00b4342be44d9ff65fd0d309cad888.jpg', 500, 3, 18, 1424034209, 1),
(34, 'Филтер за уље', '&lt;p&gt;Филтер за уље&lt;/p&gt;', '20150215-db78c5cb846fbbae2c10c16b21f9db2d.jpg', 2590, 3, 18, 1424034264, 1),
(35, 'Фарови за голф 5', '&lt;p&gt;Фарови за голф 5 ПОЛОВНИ&lt;/p&gt;', '20150215-2c2cffa2b1630188806e5fe9d874cb4e.jpg', 8000, 3, 18, 1424034340, 1),
(36, 'Перка за вода ', '&lt;p&gt;Перка за Венто&lt;/p&gt;', '20150215-3d4ea02bc33acd8a989fb5ade10e2a20.jpg', 2100, 3, 18, 1424034393, 1),
(37, 'Прекидачи за разни модели на Волксваген', '&lt;p&gt;Прекинувачи за разни модели на волксваген&lt;/p&gt;', '20150215-ee9ee507b24e6388ced250c8e4513899.jpg', 100, 3, 18, 1424034574, 1),
(38, 'Странични жмигавци', '&lt;p&gt;Странични жмигавци за голф 3&lt;/p&gt;', '20150215-5417145287ecdb293b645a7d0b1be571.jpg', 600, 3, 18, 1424034631, 1),
(39, 'Бандажи 16', '&lt;p&gt;Бандаж 16 за голф 5,Пасат 4,5 и др&lt;/p&gt;', '20150215-f189fc2d0d2be8dbde60b19356336823.jpg', 6000, 3, 18, 1424034705, 1),
(40, 'Комплет брава', '&lt;p&gt;Комплет брава за Венто&lt;/p&gt;', '20150215-63964d267ac743c879c423fac7eba2be.jpg', 1200, 3, 18, 1424034739, 1),
(41, 'Алтернатор', '&lt;p&gt;Алтернатор за Пасат 5&lt;/p&gt;', '20150215-a3931faf4397f5048a4dd01b652fadba.jpg', 2000, 3, 18, 1424034807, 1),
(42, 'Алансер', '&lt;p&gt;Алансер за Голф 5 ПОЛОВЕН&lt;/p&gt;', '20150215-c9c36cd7d8b59a07a2578b2279a38eae.jpg', 6000, 3, 18, 1424034875, 1),
(43, 'Шпирала за задни амортизери', '&lt;p&gt;Шпирали за задни амортизери за пасат 4&lt;/p&gt;', '20150215-7518d4373420bb327882c793e4346707.jpg', 3500, 3, 18, 1424034956, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ic_users`
--

CREATE TABLE IF NOT EXISTS `ic_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'User table',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL,
  `country` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `is_admin` int(1) DEFAULT '0' COMMENT 'Users table',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ic_users`
--

INSERT INTO `ic_users` (`id`, `first_name`, `last_name`, `email`, `address`, `city`, `post_code`, `country`, `username`, `password`, `active`, `created`, `is_admin`) VALUES
(14, 'Todor', 'Ilievski', 'tosebmw77@gmail.com', 'trst 22', 'Delcevo', 2320, 'Makedonija', 'Tose', '03158cf39c6f316f9ce98a4e034cdc28', NULL, NULL, 0),
(15, 'Tose', 'Tose', 'tose@tose.mk', 'tose', 'delcevo', 2320, 'makedonija', 'tose', 'a4d047b6959b859a74ead06bb62c5997', NULL, NULL, 0),
(17, 'vlatko', 'simonovski', 'vlatko.simonovski@hotmail.com', 'kozjacka', 'kumanovo', 1200, 'makedonija', 'vlatko1', 'a38008dbb2b7a27cfdcd9710c191e532', NULL, NULL, 1),
(18, 'Todor', 'Ilievski', 'tosebmw77@gmail.com', 'trst 22', 'delcevo', 2320, 'makedonija', 'todor', '81c8d84022fcb2b140d57e49e18e7bc6', NULL, NULL, 1),
(19, 'blagojce', 'atanasovski', 'blagojce@ugd.edu.mk', 'stip', 'stip', 12345, 'makedonija', 'blagojce', 'db3a9db8e9bd38c54a18fb18c9f6d6a3', NULL, NULL, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ic_offer`
--
ALTER TABLE `ic_offer`
  ADD CONSTRAINT `ic_offer_ibfk_1` FOREIGN KEY (`user`) REFERENCES `ic_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
