
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- leads_agent
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `leads_agent`;

CREATE TABLE `leads_agent`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(55),
    `contact` VARCHAR(25),
    `email` VARCHAR(55),
    `location_id` INTEGER(11),
    `experience_id` INTEGER(11),
    `job_applied_id` INTEGER(11),
    `currently_employed` INTEGER(1),
    `availability_id` INTEGER(11),
    `city_residence` VARCHAR(55),
    `contact_time_id` INTEGER(11),
    `applied_before` INTEGER(1),
    `willing_on_shifting` INTEGER(1),
    `willing_on_holidays_weekends` INTEGER(1),
    `above_18` INTEGER(1),
    `former_info_id` INTEGER(1),
    `referer_info_id` INTEGER(1),
    `date_posted` VARCHAR(10),
    `page_converted` VARCHAR(255),
    `status` INTEGER(1),
    `prev_status` INTEGER(1),
    `remarks` TEXT(1000),
    `changed_by` INTEGER(11),
    `reaaply_status` INTEGER(1),
    `sms_verified` INTEGER(1),
    `email_verified` INTEGER(1),
    `best_from` VARCHAR(25),
    `best_to` VARCHAR(25),
    `endorse` VARCHAR(55),
    `program` VARCHAR(25),
    `trainer` VARCHAR(25),
    `recruiter` VARCHAR(25),
    `position` VARCHAR(25),
    `user_id` INTEGER(11),
    `old_user_id` VARCHAR(11),
    PRIMARY KEY (`id`),
    INDEX `leads_agent_FI_1` (`job_applied_id`),
    INDEX `leads_agent_FI_2` (`experience_id`),
    INDEX `leads_agent_FI_3` (`availability_id`),
    INDEX `leads_agent_FI_4` (`contact_time_id`),
    INDEX `leads_agent_FI_5` (`location_id`),
    INDEX `leads_agent_FI_6` (`former_info_id`),
    INDEX `leads_agent_FI_7` (`referer_info_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- leads_non_agent
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `leads_non_agent`;

CREATE TABLE `leads_non_agent`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(55),
    `contact` VARCHAR(25),
    `email` VARCHAR(55),
    `location_id` INTEGER(11),
    `experience_id` INTEGER(11),
    `job_applied_id` INTEGER(11),
    `currently_employed` INTEGER(1),
    `availability_id` INTEGER(11),
    `city_residence` VARCHAR(55),
    `contact_time_id` INTEGER(11),
    `applied_before` INTEGER(1),
    `willing_on_shifting` INTEGER(1),
    `willing_on_holidays_weekends` INTEGER(1),
    `above_18` INTEGER(1),
    `former_info_id` INTEGER(1),
    `referer_info_id` INTEGER(1),
    `date_posted` VARCHAR(10),
    `page_converted` VARCHAR(255),
    `status` INTEGER(1),
    `prev_status` INTEGER(1),
    `remarks` TEXT(1000),
    `changed_by` INTEGER(11),
    `reaaply_status` INTEGER(1),
    `sms_verified` INTEGER(1),
    `email_verified` INTEGER(1),
    `best_from` VARCHAR(25),
    `best_to` VARCHAR(25),
    `position_level` VARCHAR(25),
    `degree` VARCHAR(55),
    `course` VARCHAR(55),
    `endorse` VARCHAR(55),
    `program` VARCHAR(25),
    `trainer` VARCHAR(25),
    `recruiter` VARCHAR(25),
    `position` VARCHAR(25),
    `user_id` INTEGER(11),
    `old_user_id` VARCHAR(11),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- job_applied
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `job_applied`;

CREATE TABLE `job_applied`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `jobs` VARCHAR(75),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- locations
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `location` VARCHAR(25),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- experiences
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `experiences`;

CREATE TABLE `experiences`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `experience` VARCHAR(55),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- availability
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `availability`;

CREATE TABLE `availability`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `availability` VARCHAR(25),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- contact_time
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `contact_time`;

CREATE TABLE `contact_time`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `contact_time` VARCHAR(25),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- former_ibex_employee
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `former_ibex_employee`;

CREATE TABLE `former_ibex_employee`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `account_handled_when` VARCHAR(10),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- referrer_info
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `referrer_info`;

CREATE TABLE `referrer_info`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `referrer_employee_name` VARCHAR(55),
    `referrer_employee_number` VARCHAR(55),
    `referrer_employee_position` VARCHAR(55),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
