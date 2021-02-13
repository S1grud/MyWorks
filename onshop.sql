-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3360
-- Время создания: Сен 11 2020 г., 14:43
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `onshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `descrip`, `price`, `img`, `path`, `likes`) VALUES
(1, 'Demon\'s Souls', 'Demon\'s Souls takes place in the kingdom of Boletaria. In ancient times, due to the misuse of magic known as the Soul Arts, Boletaria was attacked by a being called the Old One. The world was nearly consumed by the magical \"Deep Fog\" and the soul-eating demons it created. The Old One was eventually lulled to slumber, saving what remained of Boletaria, while some survivors became long-lived Monumentals to warn future generations. In the game\'s present, Boletaria\'s ruler King Allant restored the Soul Arts, awakening the Old One and its demon army. Boletaria is now being consumed by demons, with those humans without souls turning into insane monsters. Players take the role of an adventurer entering the fog engulfing Boletaria. After being killed, the player wakes up in the Nexus and meets a benevolent demon called the Maiden in Black, as well as various other characters.', 60, 'ds.jpg', './img/big/ds.jpg', 0),
(2, 'Godfall', 'Aperion is on the precipice of ruin. You are the last of the Valorian knights, god-like warriors able to equip Valorplates, legendary armor sets that transform wielders into unstoppable masters of melee combat. Tear through foes as you climb through the elemental realms and challenge the mad god, Macros who awaits you at the top. Ascend in Godfall, the first-of-its-kind, looter-slasher, melee action-RPG.', 55, 'godfall.jpg', './img/big/godfall.jpg', 0),
(3, 'Horizon', 'Horizon Forbidden West will explore the story of Aloy, a young huntress on a quest to a mysterious frontier spanning Utah to the Pacific Coast for a world-saving mission. On her journey across the uncharted lands of the Forbidden West, she encounters hostile regions filled with natural threats and ravaged by massive storms, dangerous enemies and deadly machines, both new and old. As Aloy attempts to explore the wider and deeper parts of the Forbidden West, she discovers a vast array of diverse environmental ecosystems, including lush valleys, dry deserts, snowy mountains, tropical beaches and ruined cities, both above and below the water.', 60, 'horizon.jpg', './img/big/horizon.jpg', 0),
(4, 'Sackboy', 'Sackboy: A Big Adventure is a platform game developed by Sumo Digital and published by Sony Interactive Entertainment for the PlayStation 5. Part of the LittleBigPlanet series, it follows Sackboy, and features 3D platforming as opposed to 2.5D in previous entries.', 40, 'sackboy.jpg', './img/big/sackboy.jpg', 0),
(5, 'Spider-Man', 'The narrative continues from Marvel\'s Spider-Man and its downloadable content The City That Never Sleeps, during which Miles Morales is bitten by a genetically-enhanced spider and gains powers similar to Peter Parker\'s. A year after the first game and its DLC, Miles has fully integrated himself into the black and red suit as an experienced Spider-Man while defending both his new home in Harlem and the rest of New York City from a gang war between an energy corporation and a high-tech criminal army. Parker tells Miles that he has to be like his late father and walk on the path to becoming a hero for the city of New York.', 50, 'spider.jpg', './img/big/spider.jpg', 0),
(6, 'AC Valhalla', 'In 873 AD, war and overcrowding in Norway prompts Eivor to lead their clan of Vikings to settle new lands in Anglo-Saxon England, as part of the Viking expansion across Europe. The clan, and other Vikings that form the Great Heathen Army, comes into conflict with the kingdoms of Wessex, Northumbria, East Anglia, and Mercia over the next several years. Eivor\'s clan will face forces led by the leaders of these kingdoms, including Alfred the Great, the king of Wessex. It is during this time that Eivor meets the Hidden Ones and joins their fight against the Order of the Ancients. Explorable cities include Winchester, London, and York. Parts of Norway will also be included.\r\n\r\nAs with previous games in the series, Valhalla features a narrative set in the modern day. This story will follow Layla Hassan, a character featured in Origins and Odyssey. Valhalla will also contain story elements related to the Isu, who, as part of the lore of the Assassin\'s Creed series, are an advanced civilisation that pre-date humanity.', 60, 'valhalla.jpg', './img/big/valhalla.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`) VALUES
(1, 'Alex', 'Cool site'),
(2, 'John', 'Nice price'),
(6, 'Jack', 'Good service');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
