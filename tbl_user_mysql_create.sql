CREATE TABLE `tbl_user` (
	`id` INT(30) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255) NOT NULL UNIQUE,
	`password` VARCHAR(255) NOT NULL,
	`fullname` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`role` INT(1) NOT NULL,
	`date_of_birth` DATE NOT NULL,
	`created_at` TIME NOT NULL,
	`updated_at` TIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `tbl_product` (
	`id` INT(30) NOT NULL AUTO_INCREMENT,
	`product_name` VARCHAR(255) NOT NULL,
	`product_decs` TEXT NOT NULL,
	`product_price` INT(30) NOT NULL,
	`product_number` INT(30) NOT NULL,
	`product_promotion` FLOAT NOT NULL,
	`product_url` VARCHAR(255) NOT NULL,
	`category_id` INT(30) NOT NULL,
	`product_status` INT(1) NOT NULL,
	`created_at` TIME NOT NULL,
	`updated_at` TIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `tbl_category` (
	`id` INT(30) NOT NULL AUTO_INCREMENT,
	`category_name` varchar(255) NOT NULL,
	`category_decs` TEXT NOT NULL,
	`created_at` TIME NOT NULL,
	`updated_at` TIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `tbl_cart` (
	`id` INT(30) NOT NULL AUTO_INCREMENT,
	`pay` INT(1) NOT NULL,
	`total_money` INT(50) NOT NULL,
	`product_id` INT(30) NOT NULL,
	`user_id` INT(30) NOT NULL,
	`created_at` TIME NOT NULL,
	`updated_at` TIME NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `tbl_product` ADD CONSTRAINT `tbl_product_fk0` FOREIGN KEY (`category_id`) REFERENCES `tbl_category`(`id`);

ALTER TABLE `tbl_cart` ADD CONSTRAINT `tbl_cart_fk0` FOREIGN KEY (`product_id`) REFERENCES `tbl_product`(`id`);

ALTER TABLE `tbl_cart` ADD CONSTRAINT `tbl_cart_fk1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user`(`id`);

