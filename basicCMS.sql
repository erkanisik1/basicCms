-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 16 Tem 2020, 01:10:17
-- Sunucu sürümü: 10.2.13-MariaDB-log
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `basicCMS`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `authority`
--

CREATE TABLE `authority` (
  `id` int(11) NOT NULL,
  `authorizationNumber` int(11) NOT NULL,
  `authority` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `userId` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `message` text COLLATE utf8_turkish_ci NOT NULL,
  `contentId` int(11) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `content` longtext COLLATE utf8_turkish_ci NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` int(11) NOT NULL,
  `hit` int(11) DEFAULT 0,
  `mainpage` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `titleSeo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `content`
--

INSERT INTO `content` (`id`, `title`, `content`, `createDate`, `author`, `hit`, `mainpage`, `categoryId`, `titleSeo`, `keywords`, `description`, `status`) VALUES
(130, 'LOREM IPSUM', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://basiccms.cm/uploads/img2.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare felis a urna ultrices, sit amet lacinia lectus dictum. In mi tellus, luctus quis justo eget, molestie scelerisque enim. Proin nibh leo, sollicitudin eget mollis at, accumsan id libero. In sollicitudin tortor vel diam ultricies iaculis. In vel ipsum quis ipsum condimentum egestas. Vestibulum vel auctor sem. Quisque at sagittis metus. Vestibulum lacinia et arcu non pretium.</p>\r\n\r\n<p>Etiam tellus eros, porttitor sed lacinia quis, elementum in turpis. Mauris aliquam dignissim euismod. Suspendisse nibh arcu, posuere a viverra nec, consequat eu enim. In a eleifend risus. Donec id luctus erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce lobortis eros sed nunc elementum, sed tincidunt nisl bibendum. Vivamus consectetur risus mi, quis aliquet tortor hendrerit non. Ut eu tempus neque, vitae sodales sapien. Aenean ultrices metus lobortis dolor congue, et maximus lacus tristique. Nulla eu metus accumsan, accumsan ligula ut, viverra elit. Curabitur rhoncus mi nisi, vel tristique magna sagittis vitae. Donec suscipit pulvinar viverra. Phasellus eu cursus nisl. Nam sed ligula ac diam posuere efficitur nec in velit.</p>\r\n\r\n<p>In felis quam, suscipit vitae magna nec, pretium laoreet augue. Nulla facilisi. Nullam gravida libero nulla. Cras condimentum augue eget lectus condimentum posuere. Fusce mollis, lacus non consectetur sollicitudin, leo elit viverra arcu, vitae volutpat mauris quam a justo. Mauris non libero eu mauris dapibus semper. Nulla porttitor in tortor vitae fringilla. Sed ac dapibus orci.</p>\r\n\r\n<p>Suspendisse aliquet odio non sapien porttitor, quis commodo lorem fermentum. Etiam scelerisque augue ac nisl rhoncus, id bibendum dui pharetra. Morbi eu felis ante. Morbi pharetra scelerisque orci, venenatis ultrices arcu hendrerit eget. Phasellus quis pretium quam. Vestibulum at sapien ex. Nulla maximus semper lacus, eget malesuada mauris tempus id. Integer non nunc ac turpis tempus tempor et id massa. Mauris vel arcu ligula. Nunc massa diam, congue a risus vel, tincidunt suscipit dolor. Praesent lacinia eget diam in interdum. Praesent dapibus auctor dolor molestie rutrum. Mauris sit amet semper nulla. Nunc ullamcorper sollicitudin tempus.</p>\r\n\r\n<p>Mauris dapibus mi sit amet feugiat commodo. Maecenas at enim auctor ligula porttitor molestie. Praesent in vestibulum nulla. Suspendisse potenti. Proin non sollicitudin nulla. Nam quis nunc purus. Sed commodo vestibulum lorem, ut viverra nisl pretium posuere. Cras quis purus vel leo mollis tincidunt. Pellentesque egestas tortor quis mauris suscipit dignissim. Nulla tempus dignissim rutrum. Cras eget purus interdum, porta velit nec, luctus purus. Donec laoreet orci sit amet urna dictum volutpat. Sed a ex et turpis porttitor sollicitudin. Phasellus aliquet rhoncus nulla, sit amet tempus felis consectetur vitae.</p>\r\n', '2020-07-14 10:13:31', 1, 0, 1, 32, 'lorem-ipsum', 'LOREM.IPSUM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare felis a urna ultrices, sit amet lacinia lectus dictum. In mi tellus, luctus quis justo eget, molestie scelerisque enim. Proin nibh leo, sollicitudin eget mollis at, accumsan id libero. In sollicitudin tortor vel diam ultricies iaculis. In vel ipsum quis ipsum condimentum egestas. Vestibulum vel auctor sem. Quisque at sagittis metus. Vestibulum lacinia et arcu non pretium.', 1),
(131, 'LOREM IPSUM1', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://basiccms.cm/uploads/img1.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare felis a urna ultrices, sit amet lacinia lectus dictum. In mi tellus, luctus quis justo eget, molestie scelerisque enim. Proin nibh leo, sollicitudin eget mollis at, accumsan id libero. In sollicitudin tortor vel diam ultricies iaculis. In vel ipsum quis ipsum condimentum egestas. Vestibulum vel auctor sem. Quisque at sagittis metus. Vestibulum lacinia et arcu non pretium.</p>\r\n\r\n<p>Etiam tellus eros, porttitor sed lacinia quis, elementum in turpis. Mauris aliquam dignissim euismod. Suspendisse nibh arcu, posuere a viverra nec, consequat eu enim. In a eleifend risus. Donec id luctus erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce lobortis eros sed nunc elementum, sed tincidunt nisl bibendum. Vivamus consectetur risus mi, quis aliquet tortor hendrerit non. Ut eu tempus neque, vitae sodales sapien. Aenean ultrices metus lobortis dolor congue, et maximus lacus tristique. Nulla eu metus accumsan, accumsan ligula ut, viverra elit. Curabitur rhoncus mi nisi, vel tristique magna sagittis vitae. Donec suscipit pulvinar viverra. Phasellus eu cursus nisl. Nam sed ligula ac diam posuere efficitur nec in velit.</p>\r\n\r\n<p>In felis quam, suscipit vitae magna nec, pretium laoreet augue. Nulla facilisi. Nullam gravida libero nulla. Cras condimentum augue eget lectus condimentum posuere. Fusce mollis, lacus non consectetur sollicitudin, leo elit viverra arcu, vitae volutpat mauris quam a justo. Mauris non libero eu mauris dapibus semper. Nulla porttitor in tortor vitae fringilla. Sed ac dapibus orci.</p>\r\n\r\n<p>Suspendisse aliquet odio non sapien porttitor, quis commodo lorem fermentum. Etiam scelerisque augue ac nisl rhoncus, id bibendum dui pharetra. Morbi eu felis ante. Morbi pharetra scelerisque orci, venenatis ultrices arcu hendrerit eget. Phasellus quis pretium quam. Vestibulum at sapien ex. Nulla maximus semper lacus, eget malesuada mauris tempus id. Integer non nunc ac turpis tempus tempor et id massa. Mauris vel arcu ligula. Nunc massa diam, congue a risus vel, tincidunt suscipit dolor. Praesent lacinia eget diam in interdum. Praesent dapibus auctor dolor molestie rutrum. Mauris sit amet semper nulla. Nunc ullamcorper sollicitudin tempus.</p>\r\n\r\n<p>Mauris dapibus mi sit amet feugiat commodo. Maecenas at enim auctor ligula porttitor molestie. Praesent in vestibulum nulla. Suspendisse potenti. Proin non sollicitudin nulla. Nam quis nunc purus. Sed commodo vestibulum lorem, ut viverra nisl pretium posuere. Cras quis purus vel leo mollis tincidunt. Pellentesque egestas tortor quis mauris suscipit dignissim. Nulla tempus dignissim rutrum. Cras eget purus interdum, porta velit nec, luctus purus. Donec laoreet orci sit amet urna dictum volutpat. Sed a ex et turpis porttitor sollicitudin. Phasellus aliquet rhoncus nulla, sit amet tempus felis consectetur vitae.</p>\r\n', '2020-07-14 10:16:23', 1, 0, 1, 32, 'lorem-ipsum1', 'LOREM, IPSUM, ANIMALS', 'In felis quam, suscipit vitae magna nec, pretium laoreet augue. Nulla facilisi. Nullam gravida libero nulla. Cras condimentum augue eget lectus condimentum posuere. Fusce mollis, lacus non consectetur sollicitudin, leo elit viverra arcu, vitae volutpat mauris quam a justo. Mauris non libero eu mauris dapibus semper. Nulla porttitor in tortor vitae fringilla. Sed ac dapibus orci.', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content_category`
--

CREATE TABLE `content_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `nameSeo` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `content_category`
--

INSERT INTO `content_category` (`id`, `name`, `parent_id`, `status`, `nameSeo`) VALUES
(32, 'NEWS', 0, 1, 'news');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `titleSeo` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  `hit` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `downloadCategory`
--

CREATE TABLE `downloadCategory` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `parentId` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `nameseo` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `log` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `bolum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `nameSeo` varchar(110) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `catID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menucat`
--

CREATE TABLE `menucat` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `nameSeo` varchar(110) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `duyuru` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `titleSeo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `content` longtext COLLATE utf8_turkish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `categoryID` int(11) NOT NULL,
  `keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `key_name`, `value`) VALUES
(2, 'siteName', 'Basic CMS');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `authority` int(3) NOT NULL,
  `status` int(1) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `mail` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `rnd` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `authority`, `status`, `avatar`, `createDate`, `mail`, `rnd`) VALUES
(45, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '', '2020-07-13 20:37:42', 'admin@admin.com', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `content_category`
--
ALTER TABLE `content_category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `downloadCategory`
--
ALTER TABLE `downloadCategory`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menucat`
--
ALTER TABLE `menucat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- Tablo için AUTO_INCREMENT değeri `content_category`
--
ALTER TABLE `content_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Tablo için AUTO_INCREMENT değeri `downloadCategory`
--
ALTER TABLE `downloadCategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=443;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `menucat`
--
ALTER TABLE `menucat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
