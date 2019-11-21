-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2019 г., 23:51
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
  `name_product` varchar(59) NOT NULL,
  `price` int(11) NOT NULL,
  `liked` int(11) DEFAULT NULL,
  `small` varchar(128) NOT NULL DEFAULT 'small',
  `big` varchar(128) NOT NULL DEFAULT 'big'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallary`
--

INSERT INTO `gallary` (`id`, `name`, `name_product`, `price`, `liked`, `small`, `big`) VALUES
(1, '01.jpg', 'Товар', 52, 4, 'gallery_img/small/', 'gallery_img/big/'),
(2, '02.jpg', 'Товар', 15, 1, 'gallery_img/small/', 'gallery_img/big/'),
(3, '03.jpg', 'Товар', 14, NULL, 'gallery_img/small/', 'gallery_img/big/'),
(4, '04.jpg', 'Товар', 95, NULL, 'gallery_img/small/', 'gallery_img/big/'),
(5, '05.jpg', 'Товар', 48, NULL, 'gallery_img/small/', 'gallery_img/big/'),
(6, '06.jpg', 'Товар', 14, NULL, 'gallery_img/small/', 'gallery_img/big/'),
(7, '07.jpg', 'Товар', 19, 1, 'gallery_img/small/', 'gallery_img/big/'),
(8, '08.jpg', 'Товар', 85, 10, 'gallery_img/small/', 'gallery_img/big/'),
(9, '09.jpg', 'Товар', 19, 1, 'gallery_img/small/', 'gallery_img/big/'),
(10, '10.jpg', 'Товар', 58, 1, 'gallery_img/small/', 'gallery_img/big/'),
(11, '11.jpg', 'Товар', 147, 13, 'gallery_img/small/', 'gallery_img/big/'),
(12, '12.jpg', 'Товар', 69, 1, 'gallery_img/small/', 'gallery_img/big/'),
(13, '13.jpg', 'Товар', 159, 2, 'gallery_img/small/', 'gallery_img/big/'),
(14, '14.jpg', 'Товар', 47, NULL, 'gallery_img/small/', 'gallery_img/big/'),
(15, '15.jpg', 'Товар', 89, NULL, 'gallery_img/small/', 'gallery_img/big/');

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
