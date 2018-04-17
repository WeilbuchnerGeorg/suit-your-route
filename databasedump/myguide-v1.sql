CREATE DATABASE IF NOT EXISTS `myguide`;
USE `myguide`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `firstname` VARCHAR(255),
  `lastname` VARCHAR(255),
  `image` VARCHAR(255),
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `difficulty`;
CREATE TABLE IF NOT EXISTS `difficulty` (
  `id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` INT(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `tour`;
CREATE TABLE IF NOT EXISTS `tour` (
  `id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `date` DATE,
  `duration` TIME,
  `startlocation` VARCHAR(255),
  `image` VARCHAR(255),
  `userid` INT(10) unsigned NOT NULL,
  `regionid` INT(10) unsigned NOT NULL,
  `difficultyid` INT(10) unsigned NOT NULL,
  `ratingid` INT(10) unsigned NOT NULL,
  `activityid` INT(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY(userid) REFERENCES user(id),
  FOREIGN KEY(regionid) REFERENCES region(id),
  FOREIGN KEY(difficultyid) REFERENCES difficulty(id),
  FOREIGN KEY(ratingid) REFERENCES rating(id),
  FOREIGN KEY(activityid) REFERENCES activity(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





/*TRUNCATE TABLE `user`;*/
INSERT INTO `user` (`id`, `name`, `password`, `firstname`, `lastname`, `image`) VALUES
(1,'Benutzername','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq', 'Josef','Brombeer', '')
  ,(2,'Georg','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Georg','Weilbuchner', '')
	,(3,'Lisa','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Lisa', 'Pedevilla', '')
	,(4,'Manuel','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Manuel','Danninger', '')
	,(5,'Julia','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Julia','Lasser', '')
	,(6,'Fritz','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Fritz','Gollner', '')
	,(7,'Tobias','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Tobias','Aberer', '')
	,(8,'Gerald','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Gerald','Webersberger', '')
	,(9,'Christina','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Christina','Eder', '')
	,(10,'Gerlinde','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Gerlinde','Webersberger', '')
	,(11,'Albert','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Albert','Webersberger', '')
	,(12,'Andrea','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Andrea','Stich', '')
	,(13,'Marco','$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq','Marco','Wilhelm', '');

/*TRUNCATE TABLE `region`;*/
INSERT INTO `region` (`id`, `name`) VALUES
	 (1, 'Wilder Kaiser')
	,(2, 'Kitzbuehler Alpen')
	,(3, 'Berchtesgadener Alpen')
	,(4, 'Salzkammergut');

/*TRUNCATE TABLE `difficulty`;*/
INSERT INTO `difficulty` (`id`, `name`) VALUES
   (1, 'sehr einfach')
	,(2, 'einfach')
	,(3, 'mittel')
	,(4, 'schwer')
	,(5, 'sehr schwer');

/*TRUNCATE TABLE `rating`;*/
INSERT INTO `rating` (`id`, `value`) VALUES
   (1, 1)
	,(2, 2)
	,(3, 3)
	,(4, 4)
	,(5, 5);

/*TRUNCATE TABLE `activity`;*/
INSERT INTO `activity` (`id`, `name`) VALUES
	 (1,'Wandern')
	,(2,'Klettern')
	,(3,'Mountainbiken')
	,(4,'Spaziergang')
	,(5,'Bike and Hike')
	,(6,'Bergsteigen')
	,(7,'Rennradfahren')
	,(8,'Eisklettern')
	,(9,'Rodeln')
	,(10,'Skitouren')
	,(11,'Schneeschuhwandern')
	,(12,'Skifahren')
	,(13,'Langlaufen')
	,(14,'Laufen')
	,(15,'Walken');

/*TRUNCATE TABLE `tour`;*/
INSERT INTO `tour` (`id`, `name`, `description`, `date`, `duration`, `startlocation`, `image`, `userid`, `regionid`, `difficultyid`, `ratingid`, `activityid`) VALUES
(1,'Stripsenkopf über Stripsenjochhaus','',20160403,0500,'Griesneralm Kaiserbachtal 6b, 6382 - Kirchdorf in Tirol','',1,1,3,5,1),
(2,'Schlenken/Schmittenstein','',20160807,0300,'Gasthaus Zillreith  Spumberg 35, 5421 - Adnet','',1,4,3,4,1),
(3,'Salzburger Hochtrohn über Toni Lenz Hütte','',2015-10-10,0400,'Parkplatz Marktschellenberg, 83487 - Marktschellenberg','',3,3,4,5,1),
(4,'Dreisesselberg','',20150626,0500,'Bergkurgarten Bayerisch Gmain  Alpentalstraße 8, 83457 - Marktschellenberg','',4,3,3,2,1),
(5,'Hoher Göll über Purtschellerhaus','',20170720,0800,'','',5,3,3,1,1),
(6,'Watzmann','',20170615,1200,'','',6,3,5,3,1),
(7,'Mondschein Rodeln','',20170820,0300,'Kelchalmparkplatz  Kelchalmstraße 5, 6371 - Aurach','',7,2,2,4,1),
(8,'TransKitzAlp','',20170710,0200,'','',8,2,4,1,1),
(9,'Schwarzseerun','',20170914,0100,'','',2,2,1,5,1),
(10,'Rettensteinski','',20170710,0300,'Kasplatzl  Kasplatzlstraße 66, 6365 - Kirchberg in Tirol','',5,2,5,3,1),
(11,'Aurachtal','',20170914,0200,'Kelchalmparkplatz  Kelchalmstraße 5, 6371 - Aurach','',3,2,3,4,1);


/*BaseProject Tables*/

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(10) unsigned NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

TRUNCATE TABLE `address`;
INSERT INTO `address` (`id`, `userId`, `firstname`, `lastname`, `street`, `zip`, `city`) VALUES
(1, 5, 'Anton', 'Himbeer', 'Andreas-Hofer-Straße 7', '6330', 'Kufstein'),
(2, 5, 'Georg', 'Erdbeer', 'Salzburger Straße 32', '6300', 'Wörgl'),
(3, 5, 'Josef', 'Brombeer', 'Oskar Pirlo-Straße 7', '6330', 'Kufstein');

ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

