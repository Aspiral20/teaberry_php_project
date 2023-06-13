-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 30 2022 г., 22:51
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teaberry`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blacktea`
--

CREATE TABLE `blacktea` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blacktea`
--

INSERT INTO `blacktea` (`id`, `name`, `content`, `quantity`, `price`) VALUES
(1, 'Ассам', 'Сладковатый, терпкий вкус. Напиток оранжево-коричневой окраски отлично тонизирует и дарит бодрость на весь день.', 100, 450),
(2, 'Кимун', 'Выделяется своим вкусом с легким сочетанием винных, фруктовых и сосновых ноток.', 100, 420),
(3, 'Дянь Хун', 'Сладковатый легкий аромат личи, розы и лонгана. Качественный чай золотисто-оранжевого цвета.', 100, 460),
(4, 'Эрл Грей', 'Классика английского черного чая с маслом.', 100, 430),
(5, 'Махараджа', 'Напиток темно-бордовой окраски обладает бархатным вкусом с приятным цветочно-медовым ароматом.', 100, 470),
(6, 'Лапсан Сяо Чжун', 'Поражает своим уникальным привкусом и дивным смолистым ароматом.', 100, 440);

-- --------------------------------------------------------

--
-- Структура таблицы `greentea`
--

CREATE TABLE `greentea` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `greentea`
--

INSERT INTO `greentea` (`id`, `name`, `content`, `quantity`, `price`) VALUES
(1, 'Колодец дракона', 'Чай высшего сорта Лун Цзин, имеет жёлто-зелёный цвет, выраженный аромат, сладкий привкус.', 100, 390),
(2, 'Подарок царя', 'Мягкий, гладкий настой с отчетливым вкусом. Вкус сочный, сбалансированный, освежает и оставляет приятное ощущение гладкости.', 100, 490),
(3, 'Одна нежность и три свежести', 'Нежно-изумрудный прозрачный настой с выразительным ароматом и сладковатым вкусом.', 100, 460),
(4, 'Жёлтые горы', 'Лёгкий зелёный чай, с травяным, цветочным вкусом и ощущённым ароматом глотка свежего воздуха.', 100, 440),
(5, 'Свежесть бамбуковых листьев', 'Чай оставит после себя нежный, медовый, цветочный, терпкий привкус.', 100, 450);

-- --------------------------------------------------------

--
-- Структура таблицы `mixes`
--

CREATE TABLE `mixes` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mixes`
--

INSERT INTO `mixes` (`id`, `name`, `content`, `quantity`, `price`) VALUES
(1, 'Любителям необычных вкусов', 'Свежий крепкий микс с не менее крепким и необычным вкусом. Насыщенный вкус свежих специй хорошо дополняет сладкая малина.', 100, 460),
(2, 'Чай со вкусом шампанского', 'Черный крупнолистовой чай со вкусом шампанского.', 100, 490),
(3, 'Домашний очаг', 'Смесь улуна, женьшеня и целебных растений. Тонизирующий чай с ярким живым вкусом и долгим сладковатым послевкусием.', 100, 410),
(4, 'Сладкий апельсин', 'Согревающий бленд на основе китайской сенчи и пряной смеси апельсина, корицы и гвоздики.', 100, 450),
(5, 'Лимонный напиток', 'Пряный вкус гвоздики с нотками имбиря. Ледяное яблоко с лайм-лимоном, свежий вкус с легкими нотками кислинки.', 100, 430),
(6, 'Чай для успокаивание желудка', 'Ароматный и освежающий чай, позволяет приводить мысли в порядок.', 100, 390);

-- --------------------------------------------------------

--
-- Структура таблицы `oolong`
--

CREATE TABLE `oolong` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `oolong`
--

INSERT INTO `oolong` (`id`, `name`, `content`, `quantity`, `price`) VALUES
(1, 'Формоза', 'Аромат классического Формоза улуна, в сухой заварке, должен отчётливо напоминать нотки мёда и спелых фруктов.', 100, 520),
(2, 'Железная Гуанинь', 'Восхитительный чай высокого качества. Разделить на 4 основных типа, с разными привкусами. Чистый, плотный, цветочный, зрелый аромат.', 100, 470),
(3, 'Напиток долголетия', 'Успокаивающий чай, имеющий специфический земляной аромат и вкус, а также характерный сладковатый привкус.', 100, 540);

-- --------------------------------------------------------

--
-- Структура таблицы `whitetea`
--

CREATE TABLE `whitetea` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `whitetea`
--

INSERT INTO `whitetea` (`id`, `name`, `content`, `quantity`, `price`) VALUES
(1, 'Baihao Yinzhen', 'Серебряные Иглы с Белым Ворсом. Самый элитный белый чай.', 100, 310),
(2, 'Bai Mudan', 'Имеет выраженный вкус сухофруктов и полезных трав и мёда.', 100, 330),
(3, 'Shoumei & Gong Mei', 'Тонизирует, освежает, снимает стресс. Укрепляет иммунитет, выводит шлаки и токсины.', 100, 360);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blacktea`
--
ALTER TABLE `blacktea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `greentea`
--
ALTER TABLE `greentea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `mixes`
--
ALTER TABLE `mixes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `oolong`
--
ALTER TABLE `oolong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `whitetea`
--
ALTER TABLE `whitetea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blacktea`
--
ALTER TABLE `blacktea`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `greentea`
--
ALTER TABLE `greentea`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `mixes`
--
ALTER TABLE `mixes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `oolong`
--
ALTER TABLE `oolong`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `whitetea`
--
ALTER TABLE `whitetea`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
