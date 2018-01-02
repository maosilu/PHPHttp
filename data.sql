/*
建表语句
*/
CREATE TABLE `message`(
	`message_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
	`title` varchar(100) NOT NULL,
	`content` text NOT NULL,
	PRIMARY KEY(`message_id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;