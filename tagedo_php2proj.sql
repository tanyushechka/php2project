-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 06 2016 г., 14:42
-- Версия сервера: 5.5.36-34.0-632.precise
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `tagedo_php2proj`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=312 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `date`, `author`, `text`) VALUES
(275, 'Тирион', '2015-04-29 08:45:46', 'ngc', 'Серсея      '),
(279, 'waterline', '2015-04-29 09:00:47', 'hh', 'hcfhf'),
(286, 'masha656555', '2015-04-29 10:00:06', 'masha', 'hcfhf'),
(287, 'vika8281', '2015-04-29 10:01:13', 'vika', '                hcfhf      тпарараччтч          '),
(299, 'vika-oO', '2015-04-29 22:18:13', 'vika', 'sdadad'),
(301, '$%#@$%#%$^&%', '2015-04-30 14:58:21', 'masha', 'nv dgxdv'),
(305, 'vika-kdkkd', '2015-05-01 11:10:07', 'vika', 'ddgdb'),
(308, '#$@#H&*Y&U', '2015-05-03 19:28:17', 'masha', 'Fefszcr 149U2JPOWANK G,.'),
(310, '#@lfl,l,s', '2015-05-03 19:31:42', 'vika\r\n', 'ef sagsdbz'),
(311, 'исисим м ', '2015-10-08 20:49:47', 'пвпчв', 'т мтм м                            ');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` bigint(20) unsigned NOT NULL,
  `id_img` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_img`, `id_user`, `date`, `text`) VALUES
(1, 286, 0, '', 'very nice'),
(2, 10, 0, '', 'tratata'),
(3, 0, 0, '', '$text'),
(4, 0, 0, '', '$text'),
(5, 0, 0, '', '$text'),
(6, 0, 0, '', '$text'),
(7, 0, 0, '', '$text'),
(8, 286, 0, '', 'NO_COMMENTS this is a cat'),
(9, 57, 0, '', 'blue picture about coffee and any more )'),
(10, 57, 0, '', 'blue picture about coffee ))'),
(11, 43, 0, '', 'no_comments  light gray package'),
(12, 249, 0, '', 'comment for block-schema'),
(13, 28, 0, '', 'lkvnkn;kslzmzl'),
(14, 276, 0, '', 'выяачпстмрит'),
(15, 276, 0, '', 'фыВяажэхъ\r\nчсмьбючс и'),
(16, 276, 0, '', 'выачпсрьиобтльтимсчм тимсчамтиь'),
(17, 33, 0, '', 'qqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(18, 33, 0, '', 'ggggggggggggggggggggggggggggggggggg'),
(19, 33, 0, '', 'dddddddddddddddddddddddddddddd'),
(20, 40, 0, '', 'ввввввввввввввввввввввввв'),
(21, 40, 0, '', 'пппппппппппппппппппп'),
(22, 286, 0, '', 'cvb n'),
(23, 286, 0, '', 'qqqqqqqqqqqqqqqq'),
(24, 10, 0, '', 'lkjhgfdsa'),
(25, 8, 0, '', 'poicvnjxkmlz,;aSKfdzm '),
(26, 7, 0, '', 'asdfghjklkjhgfewerftghjmk,mjhgtfrdes'),
(27, 11, 0, '', 'I like it'),
(28, 13, 0, '', 'a\r\na\r\na\r\na\r\na'),
(29, 13, 0, '', 'hbjnmkl,\r\n              dsafghn\r\n                                                       asdfghjkljhgfds'),
(30, 14, 0, '02.04.15 01:29:55', 'asdfghnm,'),
(31, 14, 0, '02.04.15 01:42:49', 'asdfv\r\nasxdcv\r\nazsxdcv\r\nazsxcv\r\nazsxcv'),
(32, 12, 0, '02.04.15 09:10:07', 'russian field and way'),
(33, 12, 0, '02.04.15 09:11:00', 'and blue sky'),
(34, 16, 0, '02.04.15 09:12:50', 'qewryjkl.,nbmnbvzcxv\r\ndsfxgchvjbmj,n                                               dfghjklm,;./'),
(35, 16, 0, '02.04.15 09:13:46', 'муха села на варенье -\r\nвот и всё стихотворение!'),
(36, 17, 0, '02.04.15 09:14:53', 'чми     \r\nывмаисмтоь\r\nфывь '),
(37, 13, 0, '03.04.15 21:53:23', 'ewrdghmjngbf'),
(38, 13, 0, '03.04.15 21:53:29', 'QGMJNHNGBCFXDZS'),
(39, 13, 0, '03.04.15 21:53:35', ''),
(40, 13, 0, '03.04.15 21:53:42', 'SDFGHJKL;KJKGFD'),
(41, 13, 0, '03.04.15 21:53:50', 'ERTYHJKL;KJHGFD'),
(42, 13, 0, '03.04.15 21:57:50', 'ewasdds'),
(43, 13, 0, '03.04.15 21:57:56', 'dsadsfd'),
(44, 13, 0, '03.04.15 21:58:03', 'fsfsdgvbfnbc'),
(45, 16, 0, '03.04.15 23:38:32', 'dzsdgxfj,hgnbfxvc'),
(46, 16, 0, '03.04.15 23:38:36', ''),
(47, 16, 0, '03.04.15 23:39:02', 'adAzvxcbcb \r\n                            fdgfhgjm\r\n                                                     fdgf'),
(48, 16, 0, '03.04.15 23:39:23', 'zcxc vb '),
(49, 16, 0, '03.04.15 23:39:25', ''),
(50, 16, 0, '03.04.15 23:39:29', ''),
(51, 16, 0, '03.04.15 23:39:38', 'sadfvbgb'),
(52, 18, 0, '04.04.15 01:10:04', ';sldwkafjvn m.c,/.A>>LKJHGFDXCVBNM,.;/?,NBGVC ?a.sd,mfnvm,c.\r\nqSADHGJ,K,N BFDSa\r\nerstdyfujgkl/.k,jmhjgfdswq\r\nWQERTYJKL/.,JMHGFD\r\nWQERTYJK.L.'),
(53, 19, 0, '04.04.15 01:16:06', 'zsdfghjkl.;/'),
(54, 11, 0, '04.04.15 01:56:51', 'ASDfbn m'),
(55, 11, 0, '04.04.15 01:56:52', 'ASDfbn m'),
(56, 11, 0, '04.04.15 01:57:25', 'ASDFDGXBDF'),
(57, 17, 1, '05.04.15 22:30:56', 'sdfghjklkjhbv'),
(58, 11, 1, '05.04.15 22:34:46', 'adsfghjmn '),
(59, 11, 1, '05.04.15 22:35:21', 'wsfghjkjhgfsfghjgfds'),
(60, 11, 1, '05.04.15 22:36:58', 'qqqqqqqqqqqqqqqqqqqqqqq"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(61, 12, 1, '05.04.15 22:53:30', 'sqdfghmnj '),
(62, 25, 1, '06.05.15 22:40:51', 'yryrxhh');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `date`, `path`, `id_user`, `width`, `height`, `size`, `description`) VALUES
(1, '7.jpg', '02.04.15 00:51:41', '/gallery/7.jpg', 0, 0, 0, 0, NULL),
(2, '8.jpg', '02.04.15 00:57:04', '/gallery/8.jpg', 0, 0, 0, 0, NULL),
(3, 'a.PNG', '02.04.15 00:58:01', '/gallery/a.PNG', 0, 0, 0, 0, NULL),
(4, 'applestore.jpg', '02.04.15 00:59:09', '/gallery/applestore.jpg', 0, 0, 0, 0, NULL),
(5, 'arrow1.gif', '02.04.15 00:59:52', '/gallery/arrow1.gif', 0, 0, 0, 0, NULL),
(6, 'avast.PNG', '02.04.15 01:00:53', '/gallery/avast.PNG', 0, 0, 0, 0, NULL),
(7, '0_5d9b_1fffac5a_S.gif', '02.04.15 01:03:23', '/gallery/0_5d9b_1fffac5a_S.gif', 0, 0, 0, 0, NULL),
(8, '0_69fd7_d3f74353_M.gif', '02.04.15 01:05:33', '/gallery/0_69fd7_d3f74353_M.gif', 0, 0, 0, 0, NULL),
(9, 'coupon.gif', '02.04.15 01:10:23', '/gallery/coupon.gif', 0, 0, 0, 0, NULL),
(10, 'drop2.png', '02.04.15 01:11:36', '/gallery/drop2.png', 0, 0, 0, 0, NULL),
(11, 'school.jpg', '02.04.15 01:14:07', '/gallery/school.jpg', 0, 838, 550, 0, NULL),
(12, 'eqwr.jpg', '02.04.15 01:15:15', '/gallery/eqwr.jpg', 0, 0, 0, 0, NULL),
(13, 'sheet.jpg', '02.04.15 01:16:15', '/gallery/sheet.jpg', 0, 0, 0, 0, NULL),
(14, 'shgfxzncgmv.jpg', '02.04.15 01:29:35', '/gallery/shgfxzncgmv.jpg', 0, 0, 0, 0, NULL),
(16, 'header-bg.jpg', '02.04.15 09:11:29', '/gallery/header-bg.jpg', 0, 1920, 883, 0, NULL),
(17, 'award.gif', '02.04.15 09:14:24', '/gallery/award.gif', 0, 0, 0, 0, NULL),
(18, 'dark2.jpg', '04.04.15 01:09:21', '/gallery/dark2.jpg', 0, 0, 0, 0, NULL),
(19, 'seattle_shuffle.jpg', '04.04.15 01:14:49', '/gallery/seattle_shuffle.jpg', 0, 0, 0, 0, NULL),
(20, 'segway1.jpg', '04.04.15 01:58:33', '/gallery/segway1.jpg', 0, 50, 100, 0, NULL),
(22, 'wrasfs.jpg', '06.04.15 20:21:17', '/gallery/wrasfs.jpg', 1, 960, 321, 34209, NULL),
(23, 'dgdg.jpg', '06.04.15 20:26:01', '/gallery/dgdg.jpg', 1, 775, 900, 421424, NULL),
(24, 'hw2.png', '06.04.15 20:27:31', '/gallery/hw2.png', 1, 709, 466, 223023, NULL),
(25, 'final.jpeg', '06.04.15 20:34:39', '/gallery/final.jpeg', 1, 737, 767, 201387, NULL),
(26, 'bg_green.jpg', '07.04.15 01:47:00', '/gallery/bg_green.jpg', 1, 350, 220, 113277, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id` bigint(20) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL,
  `function` varchar(30) NOT NULL,
  `table` varchar(30) NOT NULL,
  `arguments` varchar(100) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `log`
--

INSERT INTO `log` (`id`, `date`, `message`, `file`, `function`, `table`, `arguments`, `role`, `username`) VALUES
(1, '2015-04-27 16:11:25', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\controllers\\NewsController.php', 'Model::findByCondition', 'articles', 'id = 236, author = vika', 'operator', 'vika'),
(2, '2015-04-27 16:12:11', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\controllers\\NewsController.php', 'Model::findByCondition', 'articles', 'id = 233, author = vika', 'operator', 'vika'),
(3, '2015-04-27 23:20:34', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'Model::findByCondition', 'articles', 'id = 11', 'supervisor', 'lena'),
(4, '2015-04-27 23:20:58', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\Auth.php', 'Model::findByCondition', 'users', 'username = gdgd, password = fhfhfhff', NULL, NULL),
(5, '2015-04-27 23:21:21', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'Model::findByCondition', 'articles', 'id = 236, author = vika', 'operator', 'vika'),
(6, '2015-04-27 23:30:20', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'Model::findByCondition', 'articles', 'id = 233, author = vika', 'operator', 'vika'),
(7, '2015-04-27 23:30:37', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'Model::findByCondition', 'articles', 'id = 236, author = vika', 'operator', 'vika'),
(8, '2015-04-28 14:10:27', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 242', 'supervisor', 'lena'),
(9, '2015-04-28 14:11:08', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 424', 'supervisor', 'lena'),
(10, '2015-04-28 14:12:06', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 242', 'supervisor', 'lena'),
(11, '2015-04-28 14:12:14', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 241', 'supervisor', 'lena'),
(12, '2015-04-28 14:12:33', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 4q4q, author = vika', 'operator', 'vika'),
(13, '2015-04-28 14:12:39', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 233, author = vika', 'operator', 'vika'),
(14, '2015-04-28 14:12:45', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 236, author = vika', 'operator', 'vika'),
(15, '2015-04-28 14:14:16', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 1312, author = vika', 'operator', 'vika'),
(16, '2015-04-28 15:44:15', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 35325', 'boss', 'sveta'),
(17, '2015-04-28 15:46:03', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = 241', 'boss', 'sveta'),
(18, '2015-04-28 20:44:39', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\News.php', 'App\\Classes\\Model::findByCondi', 'articles', 'id = est', 'supervisor', 'lena'),
(19, '2015-04-29 08:03:23', '404. NOT FOUND', 'C:\\OpenServer\\domains\\php2project\\www\\Controllers\\Auth.php', 'App\\Classes\\Model::findByCondi', 'users', 'username = ggds, password = ddz', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `href` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `role` varchar(30) NOT NULL DEFAULT 'operator',
  `email` varchar(255) DEFAULT 'tagedo@yandex.ru'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `role`, `email`) VALUES
(1, 'tagedo', 'Picasso', 1, 'admin', 'tagedo@yandex.ru'),
(2, 'sveta', 'qwe', 1, 'boss', 'tagedo@yandex.ru'),
(3, 'jula', 'qwe', 1, 'boss', 'tagedo@yandex.ru'),
(8, 'lena', 'rty', 1, 'supervisor', 'tagedo@yandex.ru'),
(9, 'jana', 'rty', 1, 'supervisor', 'tagedo@yandex.ru'),
(10, 'masha', 'asd', 0, 'operator', 'tagedo@yandex.ru'),
(11, 'vika', 'fgh', 1, 'operator', 'tagedo@yandex.ru'),
(12, 'alina', 'zxc', 1, 'operator', 'tagedo@yandex.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
 ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=312;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `log`
--
ALTER TABLE `log`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
