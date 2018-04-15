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

TRUNCATE TABLE `tour`;
INSERT INTO `tour` (`id`, `name`, `description`, `date`, `duration`, `startlocation`, `image`, `userid`, `regionid`, `difficultyid`, `ratingid`, `activityid`) VALUES
(1, '', '', , , '', '', , , , ,);

TRUNCATE TABLE `user`;
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

TRUNCATE TABLE `region`;
INSERT INTO `region` (`id`, `name`) VALUES
	 (1, 'Wilder Kaiser')
	,(2, 'Kitzbuehler Alpen')
	,(3, 'Berchtesgadener Alpen')
	,(4, 'Salzkammergut');

TRUNCATE TABLE `difficulty`;
INSERT INTO `difficulty` (`id`, `name`) VALUES
   (1, 'sehr einfach')
	,(2, 'einfach')
	,(3, 'mittel')
	,(4, 'schwer')
	,(5, 'sehr schwer');

TRUNCATE TABLE `rating`;
INSERT INTO `rating` (`id`, `value`) VALUES
   (1, 1)
	,(2, 2)
	,(3, 3)
	,(4, 4)
	,(5, 5);

TRUNCATE TABLE `activity`;
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