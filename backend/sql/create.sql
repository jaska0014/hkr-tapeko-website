USE `hkr-tapeko`;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` 
( 
  `product_id` BIGINT NOT NULL AUTO_INCREMENT , 
  `product_name` VARCHAR(50) NOT NULL , 
  `product_type` VARCHAR(50) NOT NULL , 
  `product_desc` VARCHAR(1000) NOT NULL , 
  `product_designer` VARCHAR(50) NOT NULL , 
  `product_price` DECIMAL(18,2) NOT NULL , 
  `product_year` INT NOT NULL , 
  `product_location` VARCHAR(50) NOT NULL , 
  PRIMARY KEY (`product_id`)
);

DROP TABLE IF EXISTS `product_images`; 
CREATE TABLE `product_images` 
(
  `product_id` BIGINT NOT NULL,
  `image_url` varchar(500) NOT NULL DEFAULT 'default.jpg'
);
