-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 10 2019 г., 23:58
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallary`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `liked` int(11) DEFAULT NULL,
  `small` varchar(128) NOT NULL DEFAULT 'small',
  `big` varchar(128) NOT NULL DEFAULT 'big'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallary`
--

INSERT INTO `gallary` (`id`, `name`, `liked`, `small`, `big`) VALUES
(1, '01.jpg', 3, 'gallery_img/small/', 'gallery_img/big/'),
(2, '02.jpg', 1, 'gallery_img/small/', 'gallery_img/big/'),
(3, '03.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(4, '04.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(5, '05.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(6, '06.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(7, '07.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(8, '08.jpg', 6, 'gallery_img/small/', 'gallery_img/big/'),
(9, '09.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(10, '10.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(11, '11.jpg', 3, 'gallery_img/small/', 'gallery_img/big/'),
(12, '12.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(13, '13.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(14, '14.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/'),
(15, '15.jpg', NULL, 'gallery_img/small/', 'gallery_img/big/');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liked` (`liked`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
