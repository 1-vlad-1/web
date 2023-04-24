-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 24 2023 г., 17:53
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `exposition`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hall`
--

CREATE TABLE `hall` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `hall`
--

INSERT INTO `hall` (`id`, `name`) VALUES
(1, 'Залы XVIII-XIX веков'),
(2, 'Залы второй половины XIX века'),
(3, 'Залы рубежа XIX-XX веков'),
(4, 'исторический корпус'),
(5, 'Залы мастеров');

-- --------------------------------------------------------

--
-- Структура таблицы `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `image` varchar(55) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` varchar(100) NOT NULL,
  `year_of_creation` int(4) NOT NULL,
  `id_hall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `picture`
--

INSERT INTO `picture` (`id`, `image`, `title`, `description`, `year_of_creation`, `id_hall`) VALUES
(1, 'aivazovsky.jpg', 'Вид Леандровой башни в Константинополе', '', 1848, 1),
(2, 'basin.jpg', 'Портрет художника Сильвестра Феодосиевича Щедрина', '', 1812, 2),
(3, 'arhipov.jpg', 'Гости', '', 1914, 3),
(4, 'baksheev.jpg', 'Девушка, кормящая голубей', '', 1887, 4),
(5, 'altman.jpg', 'Дама у рояля', '', 1913, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `FK_hall_to_picture` FOREIGN KEY (`id`) REFERENCES `picture` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
