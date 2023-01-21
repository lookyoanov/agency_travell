-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 19 2021 г., 20:20
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tyr_agenstvo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tur`
--

CREATE TABLE `tur` (
  `id_tur` int(255) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `id_login` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tur`
--

INSERT INTO `tur` (`id_tur`, `name`, `description`, `id_login`) VALUES
(135, 'Полёт на луну', 'покатушки на метро', 0),
(136, 'Шарага', 'подольска', 0),
(137, 'поездка в бибериво', 'Поездка на 1 пару колледж царицино', 0),
(138, 'Поездка за город', 'покатушки на метро', 0),
(141, '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `login` text NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `name`, `surname`, `email`, `login`, `password`) VALUES
(71, '', '', '', '', ''),
(72, '', '', '', '', ''),
(73, '', '', '', '', ''),
(74, '', '', '', '', ''),
(75, '', '', '', '', ''),
(76, '', '', '', '', ''),
(77, '', '', '', '', ''),
(78, '', '', '', '', ''),
(79, '', '', '', '', ''),
(80, '', '', '', '', ''),
(81, '', '', '', '', ''),
(82, '', '', '', '', ''),
(83, '', '', '', '', ''),
(84, '', '', '', '', ''),
(85, '', '', '', '', ''),
(86, '', '', '', '', ''),
(87, '', '', '', '', ''),
(88, '', '', '', '', ''),
(89, '', '', '', '', ''),
(90, '', '', '', '', ''),
(91, '', '', '', '', ''),
(92, '', '', '', '', ''),
(93, '', '', '', '', ''),
(94, '', '', '', '', ''),
(95, '', '', '', '', ''),
(96, '', '', '', '', ''),
(97, '', '', '', '', ''),
(98, '', '', '', '', ''),
(99, '', '', '', '', ''),
(100, '', '', '', '', ''),
(101, '', '', '', '', ''),
(102, '', '', '', '', ''),
(103, '', '', '', '', ''),
(104, '', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tur`
--
ALTER TABLE `tur`
  ADD PRIMARY KEY (`id_tur`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tur`
--
ALTER TABLE `tur`
  MODIFY `id_tur` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
