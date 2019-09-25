
CREATE TABLE `my_forum`.`dbforum` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(25) NOT NULL ,
                                    `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL ,
                                     `title` VARCHAR(200) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



CREATE TABLE `my_forum`.`users` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(25) NOT NULL , `password` VARCHAR(35) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `my_forum`.`info` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `users_id` INT(11) NOT NULL , `title` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `info` ADD FOREIGN KEY (`users_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

insert into users (id, name, password) values (1, 'Dinny', 'wUbylO3F');
insert into users (id, name, password) values (2, 'Dennie', 'I7clBV74LEm');
insert into users (id, name, password) values (3, 'Ulrich', 'U21FSL');
insert into users (id, name, password) values (4, 'Alleyn', 'lty4IG');
insert into users (id, name, password) values (5, 'Selestina', 'sgbxE24');
insert into users (id, name, password) values (6, 'Allene', 'GkUAfH');
insert into users (id, name, password) values (7, 'Tammy', 'R6ob67CVxXQ');



insert into info (id, users_id, title) values (1, 1, 'Need some mock data to test your app');
insert into info (id, users_id, title) values (2, 2, 'Download data using your browser');
insert into info (id, users_id, title) values (3, 3, 'It is hard to put together a meaningful');
insert into info (id, users_id, title) values (4, 4, 'When your test database is filled with realistic looking data');
insert into info (id, users_id, title) values (5, 5, 'Testing with realistic data will make your app more');
insert into info (id, users_id, title) values (6, 6, 'Added Car VIN type');
insert into info (id, users_id, title) values (7, 7, 'Added character and digit sequence types');
insert into info (id, users_id, title) values (8, 7, 'Hello word!');