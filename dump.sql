-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.41-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных miniblog
CREATE DATABASE IF NOT EXISTS `miniblog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `miniblog`;


-- Дамп структуры для таблица miniblog.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text_blog` text NOT NULL,
  `id_author` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы miniblog.blogs: ~3 rows (приблизительно)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `text_blog`, `id_author`, `date_create`, `date_update`) VALUES
	(1, 'Title 01', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 1, '2016-04-08 13:42:12', NULL),
	(2, 'Title 02', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 1, '2016-04-08 13:42:12', NULL),
	(3, 'Title 03', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 1, '2016-04-08 13:42:12', NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;


-- Дамп структуры для таблица miniblog.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text_comment` text NOT NULL,
  `id_blog` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы miniblog.comments: ~15 rows (приблизительно)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `text_comment`, `id_blog`, `id_author`, `date_create`) VALUES
	(1, 'Cool01', 1, 1, '2016-04-11 10:45:12'),
	(2, 'Cool02', 1, 1, '2016-04-11 10:45:12'),
	(3, 'Cool03', 1, 1, '2016-04-11 10:45:12'),
	(4, 'Cool04', 1, 1, '2016-04-11 10:45:12'),
	(5, 'Cool05', 1, 1, '2016-04-11 10:45:12'),
	(6, 'Cool06', 1, 1, '2016-04-11 10:45:12'),
	(7, 'Cool07', 1, 1, '2016-04-11 10:45:12'),
	(8, 'Cool08', 1, 1, '2016-04-11 10:45:12'),
	(9, 'Cool09', 2, 1, '2016-04-11 10:45:12'),
	(10, 'Cool10', 2, 1, '2016-04-11 10:45:12'),
	(11, 'Cool11', 2, 1, '2016-04-11 10:45:12'),
	(12, 'Cool12', 2, 1, '2016-04-11 10:45:12'),
	(13, 'Cool13', 3, 1, '2016-04-11 10:45:12'),
	(14, 'Cool14', 3, 1, '2016-04-11 10:45:12'),
	(15, 'Cool15', 3, 1, '2016-04-11 10:45:12'),
	(16, 'qwerty', 1, 0, '2016-04-11 12:41:29'),
	(17, 'qwerty', 1, 0, '2016-04-11 12:41:40');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
