DROP DATABASE IF EXISTS lojacamithamake;
CREATE DATABASE lojacamithamake;

USE lojacamithamake;

CREATE TABLE IF NOT EXISTS usuario (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL,
	`senha` VARCHAR(100) NOT NULL,
	`email` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`id`)
);