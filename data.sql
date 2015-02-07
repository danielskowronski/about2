-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 05 Lut 2015, 09:46
-- Wersja serwera: 5.5.38
-- Wersja PHP: 5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `dev_about2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(128) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `config`
--

INSERT INTO `config` (`name`, `value`, `description`) VALUES
('page_name', 'about2 test', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `body` blob,
  `url` varchar(128) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(10) unsigned NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'pl',
  `title` varchar(128) DEFAULT NULL,
  `body` text,
  `url` varchar(128) NOT NULL DEFAULT '',
  `published` tinyint(1) DEFAULT NULL,
  `preview` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Zrzut danych tabeli `pages`
--

INSERT INTO `pages` (`id`, `lang`, `title`, `body`, `url`, `published`, `preview`) VALUES
(1, 'pl', 'tytu? testowy !!', 'kjhfijkfshkjfshkisfhsfkjhfkjhkjsahd jhsfdjksdfa\n', 'strona', 1, 0),
(2, 'pl', 'fdsasadfasd', 'afsdfdfsafdsfdsafsdafsdadfas', 'podstrona', NULL, 0),
(4, 'pl', 'indeks', 'strona startowa', 'index', 1, 0),
(5, 'pl', 'błąd 404 -  nie znaleziono', 'błąd 404', '_error404', 1, 0),
(9, 'en', 'home page', 'home page', 'index', 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
`id` int(11) NOT NULL,
  `region` varchar(128) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `lang` varchar(2) NOT NULL DEFAULT 'pl',
  `title` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `body` text CHARACTER SET latin1,
  `published` tinyint(1) DEFAULT '1',
  `preview` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `regions`
--

INSERT INTO `regions` (`id`, `region`, `lang`, `title`, `body`, `published`, `preview`) VALUES
(1, 'footer', 'pl', '', 'stopka &copy;', 1, 0),
(2, 'header', 'en', '', 'header in inglisz <b>cu? nowego</b>', 1, 0),
(3, 'header', 'pl', '', 'naglowek', 1, 0),
(4, 'footer', 'en', '', 'footer in english', 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `styles`
--

CREATE TABLE IF NOT EXISTS `styles` (
  `name` varchar(128) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `body` text CHARACTER SET latin1,
  `published` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `top_menu`
--

CREATE TABLE IF NOT EXISTS `top_menu` (
`id` int(10) unsigned NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'pl',
  `title` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `url` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `preview` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `top_menu`
--

INSERT INTO `top_menu` (`id`, `lang`, `title`, `url`, `published`, `preview`) VALUES
(1, 'pl', 'Strona glowna', '/', 1, 0),
(2, 'pl', 'Blog', 'http://blog.dsinf.net', 1, 0),
(3, 'pl', 'niekatywny linki', 'http://zamoy.pl', 0, 0),
(4, 'en', 'blog english version EN', 'http://blog.dsinf.net', 1, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`name`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `lang_url` (`lang`,`url`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `region` (`region`,`lang`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
 ADD PRIMARY KEY (`name`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `top_menu`
--
ALTER TABLE `top_menu`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `files`
--
ALTER TABLE `files`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `regions`
--
ALTER TABLE `regions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `top_menu`
--
ALTER TABLE `top_menu`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
