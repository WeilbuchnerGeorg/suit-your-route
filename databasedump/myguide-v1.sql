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
  `description` TEXT(10000) NOT NULL,
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
(1,'Stripsenkopf über Stripsenjochhaus','Aussichtsreicher Höhenweg über Feldberg und Stripsenjoch: Auf dem Stripsenjoch begegnen sich die Welten der Wanderer und Kletterer – für die einen das lohnende Ziel nach mühevollem Anstieg für, die anderen Ausgangspunkt in die berühmten Kletterwände von Fleischbank und Totenkirchl. Die aussichtsreiche Kammwanderung gegenüber den Gipfeln des Wilden Kaisers lässt sich als Panoramaplatz kaum überbieten. Lärchegg, Predigtstuhl, Fleischbank und Totenkirchl, getrennt von mächtigen Karen, zeigen sich von ihrer schönsten und wildesten Seite. Wie ein Adlerhorst schmiegt sich das Stripsenjochaus an den Fuß des Totenkirchls. Im Kontrast dazu reicht die Fernsicht bis ins bayrische Alpenvorland mit dem Chiemsee. Es gibt eine Qualität der Zeit und eine Qualität des Ortes, wenn beide Zusammentreffen fühlen sich Menschen glücklich berührt. Ein Sonnenuntergang am Tavonaro Kreuz, mit dem Naturschauspiel der rosa leuchtenden Felsendome könnte so ein Augenblick sein.',20160403,'05:00:00','Griesneralm Kaiserbachtal 6b, 6382 - Kirchdorf in Tirol','',1,1,3,5,1),
(2,'Schlenken/Schmittenstein','Über die Halleinerhütte zur Jägernase und einfach zum Schlenken. Am langen Grat mit kurzen, luftigen Stellen zum Schmittenstein und über das Hinterriedl und die Schlenkenalm zum Gh Zillreith zurück.<br>Wegbeschreibung<br>Wegbeschreibung: Siehe auch detailliertes "Zeit-Weg-Diagramm in der Bildergalerie".<br><br>AUFSTIEG: Vom Parkplatz Gh Zillreith (1116 m) vorbei am Halleiner Haus (1143 m) und rechts am markierten Weg 840 abkürzend im Wald zur Alm-Siedlung "Formau". Bald führt links bei der Tafel (1250 m) der Pfad im Hochwald bergan. Nach einer Spitzkehre erreicht man den Kamm bei einer Lichtung (1410 m) und den Grat um 1465 m. Bald darauf einige Meter links zur Jägernase (1507 m) mit guter Aussicht zum weiteren Weg. Nun wieder am Grat bergan, eine ausgesetzte Felsrippe könnte man rechts umgehen. Über den Nordgrat geht es auf den baumfreien und aussichtsreichen Gipfel des Schlenken mit Gipfelkreuz.<br>Es folgt die Überschreitung nach Osten über den zuerst breiten Grat mit kleinen Gegenanstiegen. Nun folgt eine Drahtseil-Sicherung (1565 m) am nun schmalen Grat, wir kommen zum Tiefpunkt (1520 m) und erreichen eine Wegtafel um 1530 m, wo wir am Rückweg abzweigen werden.<br><br>Bergan, wieder eine gesicherte Stelle (1600 m), dann wird der stockartige Felsgipfel nördlich umgangen. Achtung, hier liegt oft Schnee und es sind eisige Stellen. Auf 1660 m steigen wir rechts anspruchsvoll zur Scharte zwischen Ost- und Westgipfel. Wenige HM rechts und  der Schmittenstein (1695 m) ist geschafft. Grandioser Aussichtspunkt zum Dachstein samt Gosaukamm, Göllstock usw. 760 HM und 2 Std. einigermaßen zügig, mit kurzen Fotopausen.<br>ABSTIEG: Hinab zur Scharte und gerade zum fast gleich hohen Ostgipfel mit fotogenem Blick zurück zum Kreuz. Zur Scharte, vorsichtig nach Norden hinab und links queren (1660 m bis 1640 m). Am Grat hinab zur Wegtafel (1530 m) und nun links kurz hinab zur nächsten Tafel um 1480 m. Rechts (Weg 841) am "Hinterriedl" bei einer Quelle vorbei und zu einer Abzeigung, wo ein Weg zum Schlenken führt. Wir gehen gerade weiter zu den Schlenkenalmen (~1375 m), bald darauf ginge es nochmals (Weg 841c) zum Schlenkengipfel hinauf.  Wir bleiben auf der Forststraße Richtung Almdorf, kommen zum Anstiegsweg (1250 m) und steigen am Almdorf vorbei zur Halleinerhütte ab. Auf der Straße ist man rasch am Parkplatz Zillreith. 65 HM und 1 3/4 Std.<br><br>Insgesamt also mit den kleinen Gegenanstiegen 825 HM un 3 3/4 Std. Gehzeit.',20160807,'03:00:00','Gasthaus Zillreith  Spumberg 35, 5421 - Adnet','',1,4,3,4,1),
(3,'Salzburger Hochtrohn über Toni Lenz Hütte','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',2015-10-10,'04:00:00','Parkplatz Marktschellenberg, 83487 - Marktschellenberg','',3,3,4,5,1),
(4,'Dreisesselberg','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',20150626,'05:00:00','Bergkurgarten Bayerisch Gmain  Alpentalstraße 8, 83457 - Marktschellenberg','',4,3,3,2,1),
(5,'Hoher Göll über Purtschellerhaus','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',20170720,'08:00:00','','',5,3,3,1,1),
(6,'Watzmann','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',20170615,'12:00:00','','',6,3,5,3,1),
(7,'Mondschein Rodeln','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',20170820,'03:00:00','Kelchalmparkplatz  Kelchalmstraße 5, 6371 - Aurach','',7,2,2,4,1),
(8,'TransKitzAlp','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',20170710,'02:00:00','','',8,2,4,1,1),
(9,'Schwarzseerun','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',20170914,'01:00:00','','',2,2,1,5,1),
(10,'Rettensteinski','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',20170710,'03:00:00','Kasplatzl  Kasplatzlstraße 66, 6365 - Kirchberg in Tirol','',5,2,5,3,1),
(11,'Aurachtal','Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',20170914,'02:00:00','Kelchalmparkplatz  Kelchalmstraße 5, 6371 - Aurach','',3,2,3,4,1);


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

