CREATE TABLE `magage`.`user_info` ( `id` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `auth` CHAR(1) NOT NULL DEFAULT '0' , `status` CHAR(1) NOT NULL DEFAULT '0' , `reg_date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;