CREATE TABLE user(

);

CREATE TABLE deck(
    
);

CREATE TABLE card(
    
);

CREATE TABLE `cardifydb`.`user` (`user_id` INT(7) NOT NULL AUTO_INCREMENT , `user_username` VARCHAR(40) NOT NULL , `user_password` TEXT NOT NULL , `user_email` VARCHAR(50) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;

CREATE TABLE `cardifydb`. (`deck_id` INT(7) NOT NULL AUTO_INCREMENT , `deck_name` VARCHAR(80) NOT NULL , `user_id` INT(7) NOT NULL , PRIMARY KEY (`deck_id`)) ENGINE = InnoDB;