<!-- dbname = "phpnewspress1" -->


CREATE TABLE `phpnewspress1`.`posts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `title` VARCHAR(250) NOT NULL , `post` TEXT NOT NULL , `category` VARCHAR(30) NOT NULL DEFAULT 'business' , `author` INT(11) NOT NULL DEFAULT '1' , `views` INT(11) NOT NULL DEFAULT '0' , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE posts
  ADD approved VARCHAR(50);

ALTER TABLE `posts` CHANGE `approved` `approved` VARCHAR(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'false';

ALTER TABLE `posts` CHANGE `approved` `approved` BOOLEAN NULL DEFAULT 0;


CREATE TABLE `phpnewspress1`.`users` ( `id` INT NOT NULL DEFAULT '1' AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `hashed_psw` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL DEFAULT 'business' , `posts` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `phpnewspress1`.`Reporters` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL , `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`, `email`)) ENGINE = InnoDB;



CREATE TABLE `phpnewspress1`.`comment` ( `postid` INT(11) NOT NULL , `commentid` INT(11) NOT NULL AUTO_INCREMENT , `authorid` INT(11) NOT NULL , `comment` TEXT NOT NULL , PRIMARY KEY (`commentid`)) ENGINE = InnoDB;



CREATE TABLE `phpnewspress1`.`admin` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL , `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`, `email`)) ENGINE = InnoDB;


ALTER TABLE `comment` ADD `name` VARCHAR(50) NOT NULL AFTER `comment`;
