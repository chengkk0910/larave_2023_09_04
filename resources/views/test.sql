CREATE TABLE `laravel_0904`.`students` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NULL DEFAULT 'no name',
    `number` INT,
    `date`,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `laravel_0904`.`tests` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NULL DEFAULT 'no name',
    `number` INT(10) NULL DEFAULT '0',
    `date` DATE NULL DEFAULT '2000-01-01',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `laravel_0904`.`tests` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NULL DEFAULT 'no name',
    `name` VARCHAR(100) NULL DEFAULT 'no name',
    `name` VARCHAR(100) NULL DEFAULT 'no name',
    `number` INT(10) NULL DEFAULT '0',
    `number` INT(10) NULL DEFAULT '0',
    `number` INT(10) NULL DEFAULT '0',
    `date` DATE NULL DEFAULT '2000-01-01',
    `date` DATE NULL DEFAULT '2000-01-01',
    `date` DATE NULL DEFAULT '2000-01-01',
    `date` DATE NULL DEFAULT '2000-01-01',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

DROP TABLE `laravel_0911`.`users`
INSERT INTO
    `students` (
        `id`,
        `name`,
        `mobile`,
        `created_at`,
        `updated_at`
    )
VALUES
    (NULL, 'bob', '0922-222-222', NULL, NULL),
    (NULL, 'cat', '0933-333-333', NULL, NULL);