

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1,	'Laptop',	999.99),
(2,	'Mouse',	99.36),
(3,	'keybord',	199.36),
(4,	'Pendrive',	9900.36),
(5,	'wifi',	9459.36)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `price` = VALUES(`price`);

-- 2025-03-19 06:52:21
