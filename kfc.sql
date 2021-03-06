/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.0.67-community-nt : Database - kfc_lead
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `userinfo` */

DROP TABLE IF EXISTS `userinfo`;

CREATE TABLE `userinfo` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `status` int(1) default '1',
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `active` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `userinfo` */

insert  into `userinfo`(`id`,`name`,`email`,`mobile`,`city`,`status`,`date_time`,`active`) values (3,'mohit','mohit.11.arora@gmail.com','9811370583','243',3,'2016-01-16 14:09:45',0);
insert  into `userinfo`(`id`,`name`,`email`,`mobile`,`city`,`status`,`date_time`,`active`) values (4,'pooja','pooja.03.arora@gmail.com','9811370583','Delhi',1,'2016-01-16 15:26:23',1);
insert  into `userinfo`(`id`,`name`,`email`,`mobile`,`city`,`status`,`date_time`,`active`) values (5,'aunty','mamama@gmail.com','9811370583','Bangalore',1,'2016-01-16 16:15:32',0);
insert  into `userinfo`(`id`,`name`,`email`,`mobile`,`city`,`status`,`date_time`,`active`) values (6,'test','test@gmail.com','9811370583','Delhi',1,'2016-01-24 12:56:01',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
