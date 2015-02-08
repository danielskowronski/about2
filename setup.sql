-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2015 at 10:10 PM
-- Server version: 5.5.38
-- PHP Version: 5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dev_about2`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(128) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `contentType` varchar(64) NOT NULL DEFAULT 'text/plain',
  `body` longblob,
  `url` varchar(128) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(10) unsigned NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'pl',
  `title` varchar(128) DEFAULT NULL,
  `body` text,
  `url` varchar(128) NOT NULL DEFAULT '',
  `published` tinyint(1) DEFAULT NULL,
  `preview` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
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

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE IF NOT EXISTS `styles` (
  `name` varchar(128) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `body` text CHARACTER SET latin1,
  `published` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `top_menu`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`name`);

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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `top_menu`
--
ALTER TABLE `top_menu`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
