-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 22 2016 г., 15:00
-- Версия сервера: 5.5.48
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ololo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `site` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `year`, `site`, `description`) VALUES
(1, '2012', 'http://DunkelBeer.ru', 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'),
(2, '2012', 'http://ZopoMobile.ru', 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'),
(3, '2012', 'http://GeekWear.ru', 'Интернет-магазин брендовой одежды для гиков.'),
(4, '2011', 'http://РоналВарвар.рф', 'Промо-сайт мультфильма "Ронал-варвар" от норвежских режиссеров. Мультфильм о самом нетипичном варваре на Земле, переполненный интересными приключениями и забавными ситуациями.'),
(5, '2011', 'http://TompsonTatoo.ru', 'Персональный сайт-блог художника-татуировщика Алексея Томпсона из Санкт-Петербурга.'),
(6, '2011', 'http://DaftState.ru', 'Страничка музыкальных и сануд продюсеров из команды "DaftState", работающих в стилях BreakBeat и BigBeat.'),
(7, '2011', 'http://TiltPeople.ru', 'Сайт сообщества фотографов в стиле Tilt Shif.'),
(8, '2011', 'http://AbsurdGames.ru', 'Страничка российской команды разработчиков независимых игр с необычной физикой и сюрреалистической графикой.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
