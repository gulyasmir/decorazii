-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 04 2018 г., 22:49
-- Версия сервера: 5.6.39-83.1
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ch68793_ruslan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `deco_banner`
--

CREATE TABLE IF NOT EXISTS `deco_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `text` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deco_banner`
--

INSERT INTO `deco_banner` (`id`, `image`, `text`, `sort_order`) VALUES
(13, 'banner_1506005876.jpg', 'Бутафория Строительство декорации Оформление праздников, корпоративов, свадеб Художественная роспись Строительство и декорирование квестов', 2),
(14, 'banner_1506005894.jpg', 'Бутафория Строительство декорации Оформление праздников, корпоративов, свадеб Художественная роспись Строительство и декорирование квестов', 1),
(15, 'banner_1506005910.jpg', 'Бутафория Строительство декорации Оформление праздников, корпоративов, свадеб Художественная роспись Строительство и декорирование квестов', 0),
(16, 'banner_1506006005.jpg', 'Бутафория Строительство декорации Оформление праздников, корпоративов, свадеб Художественная роспись Строительство и декорирование квестов', 4),
(17, 'banner_1506005944.jpg', 'Бутафория Строительство декорации Оформление праздников, корпоративов, свадеб Художественная роспись Строительство и декорирование квестов', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `deco_bottom`
--

CREATE TABLE IF NOT EXISTS `deco_bottom` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deco_bottom`
--

INSERT INTO `deco_bottom` (`id`, `title`, `text`, `sort_order`) VALUES
(1, 'Арт объекты и инсталляции', '<p>У нас Вы можете заказать объекты для использования в рекламных или декоративных целях. Инсталляции могут быть созданы из самых разных материалов: наши художники применяют разнообразные методы, созидают и творят, обладают креативным мышлением и фантазией. Они обязательно создадут то, что будет вызывать восхищенные взгляды!</p>', 1),
(2, 'Изготовление сцен', '<p>Сделаем сцену с крышей или без крыши, трибуну или автомобильный подиум любой сложности в кратчайшие сроки. Мы готовы выполнить конструкцию требуемой формы для использования в помещении или на улице. Наши изделия отличаются превосходным качеством, устойчивостью к износу и долговечностью.</p>', 2),
(3, 'Оформление мероприятий', '<p>У нас Вы также можете заказать аренду разнообразной атрибутики для праздника . Это отличное решение для проведения разовых мероприятий, когда приобретать продукцию невыгодно с экономической точки зрения. Кроме того, наши специалисты подготовят для Вас спецэффекты и пиротехнические сценарии, которые позволят превратить торжество в яркое и фееричное шоу.</p>', 3),
(4, 'Все необходимое для квеста', '<p>Создадим неповторимую атмосферу для Вашего квеста. Делаем все - от шатров и сборных конструкций до самобытных и незабываемых мелочей!</p>', 4),
(5, 'Новогоднее оформление', '<p>Для каждого из нас оформление в честь Нового года подразумевает нечто уникальное, яркое, торжественное и оригинальное! Искусственные ели, привычные всем гирлянды и разноцветные шары &ndash; этим уже мало кого можно удивить и поразить. Все мы ждем настоящей сказки, чудес, волшебства!</p>', 5),
(6, 'Изготовление декораций', '<p>Создание декораций &mdash; творческий увлекательный процесс! У нас Вы можете заказать весь комплекс услуг, начиная с разработки уникальных эскизов, и заканчивая монтажно&mdash;демонтажными работами. Наши мастера порадуют Вас!</p>', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `deco_contact`
--

CREATE TABLE IF NOT EXISTS `deco_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adress` varchar(255) NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deco_contact`
--

INSERT INTO `deco_contact` (`id`, `adress`, `tel`, `email`, `text`) VALUES
(1, 'г. Москва ул. 1-я Карачаровская дом 8 стр. 3', ' +7(926)399-60-42', 'info@Wored.ru', '<p>Мы рады устроить Вам незабываемый праздник!</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `deco_example`
--

CREATE TABLE IF NOT EXISTS `deco_example` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deco_example`
--

INSERT INTO `deco_example` (`id`, `title`, `image`, `text`, `sort_order`) VALUES
(6, 'Театральные декорации', 'example_1522852185.jpg', '<p>Выполним декорации любого уровня сложности, включая дизайнерское оформление и монтажные работы.</p>\r\n<p>Изготовленные нами украшения могут быть разработаны любой формы и могут устанавливаться на самых разнообразных площадках. За годы нашей работы разработаны и смонтированы самые разные декорации .</p>', 1),
(7, 'Декорации для кино', 'example_1522854090.jpg', '<p>Берем на себя весь комплекс работ по производству декорации, начиная с эскизных работ и заканчивая монтажом на площадке.<br />У нас огромный опыт по установке декораций, как стационарного типа, так и сборно-разборных конструкций, а также неординарных декоративных элементов.</p>', 2),
(8, 'Оформление праздников', 'example_1506006068.jpg', '<p>Создадим неповторимую и запоминающуюся атмосферу на Вашем празднике!<br />Мы поможем создать незабываемые и яркие нотки любого мероприятия.</p>', 3),
(9, 'Квесты', 'example_1522856578.jpg', '<p>При создании конструкций мы используем пластики, металл, дерево, пленку и другие сопутствующие материалы.</p>\r\n<p>Для производства коммерческих или праздничных инсталляций применяется только первоклассный материал, сочетающий в себе надежность, эстетичный внешний вид и простоту обработки.</p>\r\n<p>Это позволяет достичь высочайшего качества изготовления и сделать их максимально оригинальными и привлекающими внимание.</p>', 4),
(10, 'Обьемные фигуры', 'example_1522838324.jpg', '<p>При создании конструкций мы используем пластики, металл, дерево, пленку и другие сопутствующие материалы.<br />Для производства коммерческих или праздничных инсталляций применяется только первоклассный материал, сочетающий в себе надежность, эстетичный внешний вид и простоту обработки.<br />Это позволяет достичь высочайшего качества изготовления и сделать их максимально оригинальными и привлекающими внимание.</p>', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `deco_galerey`
--

CREATE TABLE IF NOT EXISTS `deco_galerey` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deco_galerey`
--

INSERT INTO `deco_galerey` (`id`, `image`, `title`, `text`, `sort_order`) VALUES
(2, 'gelerey_1505990552.jpg', 'Картинка', 'Картинка', 4),
(3, 'gelerey_1505990565.jpg', 'Картинка', 'Картинка', 2),
(4, 'gelerey_1505990632.jpg', 'Картинка', 'Картинка', 4),
(5, 'galerey_1505990332.jpg', 'Картинка', 'Картинка', 7),
(6, 'galerey_1505990879.jpg', 'Картинка', 'Создание декораций — творческий увлекательный процесс! ', 5),
(7, 'galerey_1505990899.jpg', 'Создание декораций ', 'Создание декораций ', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `deco_service`
--

CREATE TABLE IF NOT EXISTS `deco_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deco_service`
--

INSERT INTO `deco_service` (`id`, `title`, `text`, `sort_order`) VALUES
(1, 'Арт объекты и инсталляции', '<p>Инсталляции могут быть созданы из самых разных материалов: наши художники применяют разнообразные методы, созидают и творят, обладают креативным мышлением и фантазией. Они обязательно создадут то, что будет вызывать восхищенные взгляды!<br /><br /><br /></p>\r\n<p>&nbsp;<iframe src=\"https://www.youtube.com/embed/ibWUkOcDAzI\" width=\"854\" height=\"480\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>азать объекты для использования в рекламных или декоративных целях. <br /><br />Инсталляции могут быть созданы из самых разных материалов: наши художники применяют разнообразные методы, созидают и творят, обладают креативным мышлением и фантазией. Они обязательно создадут то, что будет вызывать восхищенные взгляды!</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 1),
(2, 'Изготовление сцен', '<p>Сделаем сцену с крышей или без крыши, трибуну или автомобильный подиум любой сложности в кратчайшие сроки. Мы готовы выполнить конструкцию требуемой формы для использования в помещении или на улице. Наши изделия отличаются превосходным качеством, устойчивостью к износу и долговечностью.</p>', 2),
(3, 'Оформление мероприятий', '<p>У нас Вы также можете заказать аренду разнообразной атрибутики для праздника . Это отличное решение для проведения разовых мероприятий, когда приобретать продукцию невыгодно с экономической точки зрения. Кроме того, наши специалисты подготовят для Вас спецэффекты и пиротехнические сценарии, которые позволят превратить торжество в яркое и фееричное шоу.</p>', 3),
(4, 'Все необходимое для квеста', '<p>Создадим неповторимую атмосферу для Вашего квеста. Делаем все - от шатров и сборных конструкций до самобытных и незабываемых мелочей!</p>', 4),
(5, 'Новогоднее оформление', '<p>Для каждого из нас оформление в честь Нового года подразумевает нечто уникальное, яркое, торжественное и оригинальное! Искусственные ели, привычные всем гирлянды и разноцветные шары &ndash; этим уже мало кого можно удивить и поразить. Все мы ждем настоящей сказки, чудес, волшебства!</p>', 5),
(6, 'Изготовление декораций', '<p>Создание декораций &mdash; творческий увлекательный процесс! У нас Вы можете заказать весь комплекс услуг, начиная с разработки уникальных эскизов, и заканчивая монтажно&mdash;демонтажными работами. Наши мастера порадуют Вас!</p>', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `deco_user`
--

CREATE TABLE IF NOT EXISTS `deco_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `deco_user`
--

INSERT INTO `deco_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(5, 'admin', '29gdelmd7ceGAGtKgqxOvjFJkKFQZwXh', '$2y$13$tCYZs3s5BoKGHkBuVMKhZuh46.1pwaJKH.kgBQETVdwQOcIHmDp9q', NULL, 'ruslan-studonov@yandex.ru', 10, 1506006486, 1506006486),
(6, 'myadmin', '_8zA_XWAgJ3hqSFHt2pgqf9mgsuU5P-C', '$2y$13$nL3gF/qx8BqrjKP6BCaIpuNaGUrIP9xeA77gAHvWzAgmF9DYRFw3K', NULL, 'gulyasmir@yandex.ru', 10, 1506006622, 1506279033);

-- --------------------------------------------------------

--
-- Структура таблицы `deco_video`
--

CREATE TABLE IF NOT EXISTS `deco_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deco_video`
--

INSERT INTO `deco_video` (`id`, `title`, `text`, `sort_order`) VALUES
(1, 'видео', '<p><iframe src=\"https://www.youtube.com/embed/XI7DhCUI2eo\" width=\"854\" height=\"480\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>&lt;</p>', 1),
(2, 'еще видео', '<p><iframe src=\"https://www.youtube.com/embed/IyEAp0bUgOo\" width=\"854\" height=\"480\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>', 2),
(3, 'еще', '<p><iframe src=\"https://www.youtube.com/embed/i9AHJkHqkpw\" width=\"854\" height=\"480\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
