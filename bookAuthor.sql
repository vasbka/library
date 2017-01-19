-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 19 2017 г., 14:10
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bookAuthor`
--

CREATE TABLE IF NOT EXISTS `bookAuthor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `authorId` int(11) DEFAULT NULL,
  `bookId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `authorId` (`authorId`),
  KEY `bookId` (`bookId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `bookAuthor`
--

INSERT INTO `bookAuthor` (`id`, `authorId`, `bookId`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 3),
(4, 4, 3),
(5, 5, 4),
(6, 4, 4);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bookAuthor`
--
ALTER TABLE `bookAuthor`
  ADD CONSTRAINT `bookauthor_ibfk_1` FOREIGN KEY (`authorId`) REFERENCES `author` (`authorId`),
  ADD CONSTRAINT `bookauthor_ibfk_2` FOREIGN KEY (`bookId`) REFERENCES `books` (`BookId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
