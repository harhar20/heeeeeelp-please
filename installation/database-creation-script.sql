#first you need do create the user with this line:

CREATE USER IF NOT EXISTS 'dos'@'localhost' IDENTIFIED BY 'dos';


#then you need to create the database
CREATE DATABASE IF NOT EXISTS dos;

GRANT ALL PRIVILEGES ON *.* TO 'dos'@'localhost' WITH GRANT OPTION;



#then you need to switch to the database
use dos;

#then you need to create the table
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(64),
  `email` VARCHAR(64),
  `password` VARCHAR(64),
  PRIMARY KEY (id)
);



#and the other tables
CREATE TABLE IF NOT EXISTS `userlog` (
  `date` DATETIME NOT NULL UNIQUE,
  `content` VARCHAR(128),
  PRIMARY KEY (date)
);


#add a user to test
INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES ('1', 'test', 'test', 'test');

