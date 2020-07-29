DROP TABLE IF EXISTS `#__transactiontype`;

CREATE TABLE `#__transactiontype` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`type` VARCHAR(25) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;


DROP TABLE IF EXISTS `#__transaction`;

CREATE TABLE `#__transaction` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`amount` INT(11) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	`date` DATETIME NOT NULL,
	`image` varchar(1024) NOT NULL,
	`type` tinyint NOT NULL ,
	`user_id` INT(11) NOT NULL ,
	PRIMARY KEY (`id`) ,
	FOREIGN KEY (type) REFERENCES #__transactiontype(`id`)  ,
	FOREIGN KEY (user_id) REFERENCES #__users(`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

