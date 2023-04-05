CREATE DATABASE polls;
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 10 2020 г., 08:34
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `polls`
--

-- --------------------------------------------------------

--
-- Структура таблицы `problema`
--

CREATE TABLE `problema` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `grupa` varchar(10) NOT NULL,
  `problema` varchar(255) NOT NULL,
  `altele` varchar(255) NOT NULL,
  `comentariu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `problema`
--

INSERT INTO `problema` (`id`, `nume`, `grupa`, `problema`, `altele`, `comentariu`) VALUES
(6, 'Aran Laura', 'AAW1732', 'Telefon mobil invechit', 'Nu', 'Nu sunt comentarii'),
(7, 'Matosa Ion', 'AAW1732', 'Am cel putin un dispozitiv', 'Calculatorul personal este un pic invechit', 'Nu'),
(8, 'Roman Dan', 'AAW1642', 'Nu am intimpinat probleme', 'Nu', 'Nu'),
(9, 'Moroianu Vladislav', 'PAPP1911', 'Am cel putin un dispozitiv', 'Avem prea multe teme pe un termen limita mic', 'Nu');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `problema`
--
ALTER TABLE `problema`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `problema`
--
ALTER TABLE `problema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
