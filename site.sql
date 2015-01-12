-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Дек 29 2014 г., 20:50
-- Версия сервера: 5.5.33-log
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `showhide`) VALUES
(1, 'Пицца', 'show'),
(2, 'Салаты', 'show'),
(5, 'Пасты', 'show'),
(6, 'Закуски', 'show'),
(9, 'Алкоголь и напитки', 'show');

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Добро пожаловать в Италию!\r\nПиццерия "Пеперони" приветствует Вас!', 'Наши двери всегда открыты для всех любителей и ценителей самой настоящей итальянской пиццы.			Сеть пиццерий «Пеперони» более 5 лет радует своих Гостей вкусными блюдами, уютным интерьером, быстрым обслуживанием и внимательным персоналом, который умеет создавать комфортную обстановку для каждого Гостя.\r\nВыбор блюд и напитков привлекают своим разнообразием и разумными ценами.\r\nЗдесь Вы сможете попробовать и самую острую пиццу "Red Hot Chilli Peppers", и самую сырную "Gorgomola",и такие классические итальянские пиццы как "PizzaNapoli", "Margherita", и "Pizza Roma".\r\nПомимо пицц мы также предлагаем попробовать итальянские пасты, салаты и классический десерт "Сабайон".\r\nУютная домашняя атмосфера, привлекательный интерьер, фееричные выступления итальянских музыкантов и конечно же вкусная еда!', 'index', 'hide', 'ru', '2014-12-08'),
(3, 'Отзывы', 'Отзывы посетителей пиццерии "Пеперони"', 'otzyvy', 'show', 'ru', '2014-12-08'),
(4, 'Фотогалерея', 'Фотогалерея пиццерии "Пеперони"', 'galery', 'show', 'ru', '2014-12-08'),
(5, 'Статьи', '', 'news', 'show', 'ru', '2014-12-08'),
(7, 'Контакты', 'г.Минск, ул. Одесская, 25\r\nТелефон: (017) 328-04-44, (029) 725-75-75\r\nВремя работы: с 12.00 до 02:00', 'contacts', 'show', 'ru', '2014-12-08'),
(8, 'Меню', 'Меню', 'menu', 'hide', 'ru', '2014-12-08'),
(9, 'Доставка', 'Понедельник - Четверг   8:00 - 23:00\r\nПятница   8:00 - 2:00\r\nСуббота   10:00 - 2:00\r\nВоскресенье   10:30 - 00:00\r\n\r\nСреднее время доставки 60 минут.\r\nСреднее время доставки пиццы в отдаленные районы 90 минут.\r\n \r\nВ пределах Минска доставка пиццы БЕСПЛАТНАЯ.\r\nПри заказе менее 100 000 р. доставка 20 000 р.\r\nСтоимость доставки пиццы за пределы Минска по согласованию с оператором.', 'dostavka', 'hide', 'ru', '2014-12-08');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `price` int(11) NOT NULL,
  `picture` tinytext NOT NULL,
  `picturesmall` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `catid`, `name`, `body`, `price`, `picture`, `picturesmall`, `showhide`, `putdate`) VALUES
(3, 1, 'Пепперони', '<p>Салями, перец халапеньо, сыр Качотта, соус-пицца, орегано</p>\r\n', 120000, '14_12_18_04_08_peperoni.jpg', 's_14_12_18_04_08_peperoni.jpg', 'show', '0000-00-00'),
(7, 1, 'Red Hot Chilli Peppers', 'Охотничьи колбаски, салями Пепперони, томат, перец Халапеньо, перец Чили, томатный соус, сыр Моцарелла', 130000, '14_12_18_04_26_rhcp.jpg', 's_14_12_18_04_26_rhcp.jpg', 'show', '0000-00-00'),
(8, 1, 'Италия', '<p>Ветчина, шампиньоны, томаты сушеные, каперсы, сыр &nbsp;Качотта, соус-пицца, орегано</p>\r\n', 125000, '14_12_18_04_49_italy.jpg', 's_14_12_18_04_49_italy.jpg', 'show', '0000-00-00'),
(10, 1, 'Маргарита  ', '<p>Сыр моцарелла, соус томатный,томат, соус Песто, базилик.</p>\r\n', 145000, '14_12_18_05_09_margarita.jpg.png', 's_14_12_18_05_09_margarita.jpg.png', 'show', '0000-00-00'),
(11, 1, 'Неаполитано', '<p>Сыр моцарелла, салями, пармская ветчина, помидор, перец сладкий, лук.</p>\r\n', 150000, '14_12_18_05_10_neapolitano.jpg.png', 's_14_12_18_05_10_neapolitano.jpg.png', 'show', '0000-00-00'),
(12, 1, 'Пицца по-неаполитански', '<p>Сыр моцарелла, грибы, помидор, маслины, базилик, оригано, лук-шалот</p>\r\n', 160000, '14_12_18_05_17_po-neopolitansk.jpg', 's_14_12_18_05_17_po-neopolitansk.jpg', 'show', '0000-00-00'),
(13, 1, 'Сицилия', '<p>Сыр моцарелла, сливки, коктейль из морепродуктов.</p>\r\n', 170000, '14_12_18_05_18_sicilia.jpg.png', 's_14_12_18_05_18_sicilia.jpg.png', 'show', '0000-00-00'),
(14, 1, 'Венецианская', '<p>Томатный соус, сыр моцарелла, ветчина, креветки, лимон, приправа к пицце</p>\r\n', 125000, '14_12_18_05_20_vtnecian.jpg', 's_14_12_18_05_20_vtnecian.jpg', 'show', '0000-00-00'),
(15, 1, 'Компаньола', '<p>Ветчина, бекон, белые грибы, шампиньоны, брокколи, сыр Качотта,<em> </em>гирос</p>\r\n', 128000, '14_12_18_06_25_kompaniola.jpg', 's_14_12_18_06_25_kompaniola.jpg', 'show', '0000-00-00'),
(16, 1, 'Белая пицца с сыром', '<p>Эмментальский сыр, мягкий сыр, копченая корейка, листья сальвии</p>\r\n', 0, '14_12_18_06_29_white.jpg', 's_14_12_18_06_29_white.jpg', 'show', '0000-00-00'),
(17, 1, 'Кальенте', '<p>Свинина, куриное филе, сыр Качотта, томаты, перец сладкий, соус &#39;Пиночет&#39;, средиземноморские травы</p>\r\n', 0, '14_12_18_06_29_kaliyente.jpg', 's_14_12_18_06_29_kaliyente.jpg', 'show', '0000-00-00'),
(18, 1, 'Тоскана', '<p>Куриное филе, шампиньоны, цукини, сыр Качотта, соус &#39;Песто&#39;, соус-пицца, гирос</p>\r\n', 0, '14_12_18_06_32_toskana.jpg', 's_14_12_18_06_32_toskana.jpg', 'show', '0000-00-00'),
(19, 1, 'Капричиоза', '<p>Ветчина, шампиньоны, маслины, сыр Качотта, соус-пицца, средиземноморские травы</p>\r\n', 0, '14_12_18_06_33_kaprichoza.jpg', 's_14_12_18_06_33_kaprichoza.jpg', 'show', '0000-00-00'),
(61, 5, '"Спагетти Матричана»', '<p>&quot;Спагетти Матричана&raquo;&nbsp;с беконом, соусом из свежих томатов и острым перцем(260г.)</p>\r\n', 0, '14_12_22_03_37_matriacha.jpg', 's_14_12_22_03_37_matriacha.jpg', 'show', '2014-12-22'),
(62, 5, '"Спагетти Болонезе»', '<p>&quot;Спагетти Болонезе&raquo;&nbsp;с густым соусом из мясного фарша с томатами(300г.)</p>\r\n', 0, '14_12_22_03_38_bolon.jpg', 's_14_12_22_03_38_bolon.jpg', 'show', '2014-12-22'),
(63, 5, '«Пенне Аррабьята»', '<p>&laquo;Пенне Аррабьята&raquo; &nbsp;с острым томатным соусом и свежим базиликом (280г.)</p>\r\n', 0, '14_12_22_03_38_ara.jpg', 's_14_12_22_03_38_ara.jpg', 'show', '2014-12-22'),
(64, 5, '«Пенне с куриной грудкой»', '<p>&laquo;Пенне с куриной грудкой&raquo;&nbsp;и вешенками в сливочном соусе с Пармезаном(280г.)</p>\r\n', 0, '14_12_22_04_04_penne.jpg', 's_14_12_22_04_04_penne.jpg', 'show', '2014-12-22'),
(65, 2, '«Салат с рукколой и пармезаном»', '<p>Состав: &nbsp; Руккола, фенхель, сыр пармезан, кедровые орехи, заправка</p>\r\n', 0, '14_12_22_04_05_sal.jpg', 's_14_12_22_04_05_sal.jpg', 'show', '2014-12-22'),
(67, 2, '«Салат «Цезарь»', '<p>Состав:&nbsp; Филе куриное, помидоры, сухарики, салат айсберг, сыр Пармезан, соус &laquo;Сырный Цезарь&raquo;</p>\r\n', 0, '14_12_22_04_14_cesar.jpg', 's_14_12_22_04_14_cesar.jpg', 'show', '2014-12-22'),
(68, 6, 'Запеченные цукини', '<p>Запеченные цукини с томатами, чесноком и тимьяном</p>\r\n', 0, '14_12_22_04_17_cukini.jpg', 's_14_12_22_04_17_cukini.jpg', 'show', '2014-12-22'),
(69, 6, 'Зеленая фасоль', '<p>Зеленая фасоль с вялеными томатами и чесноком</p>\r\n', 0, '14_12_22_04_18_fasol.jpg', 's_14_12_22_04_18_fasol.jpg', 'show', '2014-12-22');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `picture` tinytext NOT NULL,
  `picturesmall` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdade` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `name`, `body`, `picture`, `picturesmall`, `showhide`, `putdade`) VALUES
(13, 'Хризантема', 'Хризантема', '14_12_12_08_23_Chrysanthemum.jpg', 's_14_12_12_08_23_Chrysanthemum.jpg', 'show', '0000-00-00'),
(14, 'медуза', 'медуза', '14_12_12_08_23_Jellyfish.jpg', 's_14_12_12_08_23_Jellyfish.jpg', 'show', '0000-00-00'),
(15, 'Коала', 'Коала', '14_12_12_08_23_Koala.jpg', 's_14_12_12_08_23_Koala.jpg', 'show', '0000-00-00'),
(16, 'пингвины', '<p>несколько пингвинов</p>\r\n', '14_12_16_11_47_Penguins.jpg', 's_14_12_16_11_47_Penguins.jpg', 'show', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `system_accounts`
--

CREATE TABLE IF NOT EXISTS `system_accounts` (
  `id_account` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext CHARACTER SET utf8 NOT NULL,
  `pass` tinytext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_account`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `system_accounts`
--

INSERT INTO `system_accounts` (`id_account`, `name`, `pass`) VALUES
(26, 'test', '098f6bcd4621d373cade4e832627b4f6'),
(27, 'steel', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `blockunblock` enum('block','unblock') NOT NULL DEFAULT 'unblock',
  `datereg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `blockunblock`, `datereg`, `lastvisit`) VALUES
(1, 'steel', '123456', 'ewerwr@tut.by', 'unblock', '2014-12-08', '2014-12-10 17:58:04'),
(3, 'qwer', '12345', 'asdfghh@def.dw', 'unblock', '2014-12-10', '2014-12-10 18:41:42');

-- --------------------------------------------------------

--
-- Структура таблицы `zakazs`
--

CREATE TABLE IF NOT EXISTS `zakazs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `adres` tinytext NOT NULL,
  `body` tinytext NOT NULL,
  `ip` tinytext NOT NULL,
  `sposob` tinytext NOT NULL,
  `currency` enum('BYR') NOT NULL DEFAULT 'BYR',
  `currency_value` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `status` enum('new','в пути','обработан') NOT NULL DEFAULT 'new',
  `message` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `zakazs`
--

INSERT INTO `zakazs` (`id`, `name`, `phone`, `adres`, `body`, `ip`, `sposob`, `currency`, `currency_value`, `putdate`, `status`, `message`) VALUES
(1, 'Пепперони', '435345345', 'sdfhafvljafhglakdghSGOAH ARGH ARG', 'a:3:{s:9:"PHPSESSID";s:26:"79fujio72ln4rm0n2racf34cv0";i:7;s:1:"1";i:3;s:1:"1";}', '127.0.0.1', 'Курьер', 'BYR', '0', '2014-12-29', 'new', ''),
(2, 'Пепперони', '435345345', 'sdfhafvljafhglakdghSGOAH ARGH ARG', 'a:3:{s:9:"PHPSESSID";s:26:"79fujio72ln4rm0n2racf34cv0";i:7;s:1:"1";i:3;s:1:"1";}', '127.0.0.1', 'Курьер', 'BYR', '0', '2014-12-29', 'new', ''),
(3, 'Пепперони', '435345345', 'sdfhafvljafhglakdghSGOAH ARGH ARG', 'a:3:{s:9:"PHPSESSID";s:26:"79fujio72ln4rm0n2racf34cv0";i:7;s:1:"1";i:3;s:1:"1";}', '127.0.0.1', 'Курьер', 'BYR', '0', '2014-12-29', 'new', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
