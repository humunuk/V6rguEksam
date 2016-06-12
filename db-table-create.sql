CREATE TABLE IF NOT EXISTS `test`.`skallari_lk_hinnangud` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lehekylg` VARCHAR(255) NOT NULL,
  `hinnang` DOUBLE(8,2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8