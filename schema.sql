CREATE TABLE animal_types (
  `id` TINYINT(1) UNSIGNED NOT NULL AUTO_INCREMENT,
  `species` VARCHAR(3) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE animals (
  `id` TINYINT(1) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_id` TINYINT(1) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE animal_details (
  `animal_id` TINYINT(1) UNSIGNED NOT NULL,
  `name` VARCHAR(20) NOT NULL,
  `age` TINYINT(2) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`animal_id`),
  KEY (`created_at`)
);