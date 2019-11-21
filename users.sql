-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 21 2019 г., 15:54
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
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(11) DEFAULT NULL COMMENT '0-user, 1- admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `role`) VALUES
(1, 'Admin', 'admin', '123', 1),
(2, 'User1', 'user1', '123', NULL),
(3, 'User2', 'user2', '123', NULL),
(4, 'User3', 'user3', '123', NULL),
(8, 'Пупкин', 'pupkin', '123', NULL),
(9, 'Пупкин2', 'pupkin2', '123', NULL),
(10, 'Пупкин3', 'pupkin3', '123', NULL),
(11, 'Пупкин4', 'pupkin4', '$2y$10$.b/HDs7/tV8w8LURmKhCfuR4xi1Rge1Qhmic8.f3mWzQ6yuQ2UdQi', NULL),
(17, 'Пупкин5', 'pupkin5', '$2y$10$IC3kLa/MCISnWmwXdeIeXup1BNxvaaskLmAlJT4z1WefJJ9vMIkJC', NULL),
(18, 'Пупкин6', 'pupkin6', '$2y$10$dKUvthrwi7bxsfRQVyMG/.cfdyWhIqAOQdnMii9etP1gp9TqDmBva', NULL),
(19, 'Пупкин7', 'pupkin7', '$2y$10$qeVhlw0XGS79r6AJ00515OdHfIN3af0IrPEpadRA.JwxwrZIkQJ9m', NULL),
(20, 'Пупкин7', 'pupkin7', '$2y$10$sl4TM9pj9wP9/BOLMXopIOS23qntm/.8189/8MnEWf9U5R7zjGcNu', NULL),
(21, 'Пупкин7', 'pupkin7', '$2y$10$ZxfS/uRuqMEgrmid86ULGehgwEWt41RO.eGeZDZ0swWBvqzvl05nq', NULL),
(22, 'Пупкин12', 'pupkin12', '$2y$10$.cesFCj4ajll91rxBlYDo.NFLdoQPzkKkQcihrgTaSQmriyp/ex2y', NULL),
(23, 'лоило', 'sncdnvl', '$2y$10$703DyPq9Iw/PyyL4jwrW8.pE3tq9bb3KF7u5y1KNoUdtr8Cv1uMZe', NULL),
(24, 'jbj', 'bjhb', '$2y$10$PqwSGnsNOKz.V.oE8NzQ2epcs1aTUy7DzTo1l0EEWYHthjsyI68VG', NULL),
(25, 'knjn', 'jbhj', '$2y$10$lZgD8jMAq2Kf0e7I90vKFeUsYE36ETXQcA1gQvvbVAdPTGQgxEQ5a', NULL),
(26, 'name', 'kfvndn', '$2y$10$8XV0yax/sKgoJYfYwhJJAewRVlF8zOab3me6r5POls59p3fm5fQ3a', NULL),
(27, 'scd', 'scd', '$2y$10$5AB.0LBz8Rq6odXzy34xS.3EPnZZFaKGNA.mVEnxalyq28pZ39DgO', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
