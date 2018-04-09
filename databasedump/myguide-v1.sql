CREATE DATABASE IF NOT EXISTS `myguide`;
USE `myguide`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `firstname` VARCHAR(255),
  `lastname` VARCHAR(255),
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