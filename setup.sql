SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(128) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `files` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `body` blob,
  `url` varchar(128) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(10) unsigned NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'pl',
  `title` varchar(128) DEFAULT NULL,
  `body` text,
  `url` varchar(128) NOT NULL DEFAULT '',
  `published` tinyint(1) DEFAULT NULL,
  `preview` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

CREATE TABLE IF NOT EXISTS `regions` (
`id` int(11) NOT NULL,
  `region` varchar(128) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `lang` varchar(2) NOT NULL DEFAULT 'pl',
  `title` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `body` text CHARACTER SET latin1,
  `published` tinyint(1) DEFAULT '1',
  `preview` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

CREATE TABLE IF NOT EXISTS `styles` (
  `name` varchar(128) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `body` text CHARACTER SET latin1,
  `published` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `top_menu` (
`id` int(10) unsigned NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'pl',
  `title` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `url` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `preview` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;


ALTER TABLE `config`
 ADD PRIMARY KEY (`name`), ADD UNIQUE KEY `name` (`name`);

ALTER TABLE `files`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `url` (`url`);

ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `lang_url` (`lang`,`url`);

ALTER TABLE `regions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `region` (`region`,`lang`);

ALTER TABLE `styles`
 ADD PRIMARY KEY (`name`), ADD UNIQUE KEY `name` (`name`);

ALTER TABLE `top_menu`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `files`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
ALTER TABLE `pages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
ALTER TABLE `regions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
ALTER TABLE `top_menu`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
