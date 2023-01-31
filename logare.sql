# Host: 127.0.0.1  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-05-29 13:38:55
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "dash_text"
#

DROP TABLE IF EXISTS `dash_text`;
CREATE TABLE `dash_text` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_id` varchar(255) DEFAULT NULL,
  `content_text` varchar(255) DEFAULT NULL,
  `titlu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "dash_text"
#

INSERT INTO `dash_text` VALUES (1,'1','BIne ai venit, Gigel!','Dash admin'),(2,'2','BIne ai venit, utilizator de tip utilizator!','Dash utilzator');

#
# Structure for table "drepturi"
#

DROP TABLE IF EXISTS `drepturi`;
CREATE TABLE `drepturi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdPage` varchar(255) DEFAULT NULL,
  `IdUser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

#
# Data for table "drepturi"
#

INSERT INTO `drepturi` VALUES (1,'1','1'),(2,'1','2'),(3,'3','2'),(4,'2','1'),(5,'3','1'),(6,'4','1'),(7,'5','1'),(8,'6','1'),(9,'6','2'),(10,'7','2'),(11,'7','1'),(12,'8','1'),(13,'9','1'),(14,'10','1'),(15,'11','1'),(16,'12','1'),(17,'13','1'),(18,'14','2'),(19,'15','1'),(20,'15','2'),(21,'16','1'),(22,'17','1'),(23,'18','1'),(24,'18','2'),(25,'19','1'),(26,'19','2'),(27,'20','1'),(28,'20','2'),(29,'21','1'),(30,'22','1'),(31,'23','1'),(32,'23','2'),(33,'24','1'),(34,'25','1'),(35,'26','1'),(36,'27','1'),(37,'28','1'),(38,'28','2'),(39,'29','1'),(40,'29','2'),(41,'30','1'),(42,'30','2'),(43,'31','1'),(44,'32','1'),(45,'33','1');

#
# Structure for table "pagini"
#

DROP TABLE IF EXISTS `pagini`;
CREATE TABLE `pagini` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nume_meniu` varchar(255) DEFAULT NULL,
  `pagina` varchar(255) DEFAULT NULL,
  `Meniu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

#
# Data for table "pagini"
#

INSERT INTO `pagini` VALUES (1,'Schedule an appointment ','schedule.php','1'),(2,'Appointments','Appointments.php','1'),(3,'Find Appointment','CautaProgramare.php','1'),(4,'Delete an Appointment','StergereProgramare.php','1'),(5,'Add New Service','AddNewService.php','1'),(6,'See Services','SeeServices.php','1'),(7,'Find Service','FindService.php','1'),(8,'Delete Service','DeleteService.php','1'),(9,'Add New Supplier','AddNewSupplier.php','1'),(10,'See Suppliers','SeeSuppliers.php','1'),(11,'Find Suppliers','FindSuppliers.php','1'),(12,'Delete Supplier','DeleteSupplier.php','1'),(13,'Dashboard','dashboard.php','0'),(14,'DashboardU','dashboardu.php','0'),(15,'footer','footer.php','0'),(16,'Delete Doctor','DeleteDoctor.php','0'),(17,'Doctors Page','DoctorsPage.php','0'),(18,'Contact','contact.php','0'),(19,'Adauga Programare result','adauga.php','0'),(20,'Cauta Programare Result','Cauta.php','0'),(21,'Sterge Programarea Result','Stergere.php','0'),(22,'Update Services','UpdateServices.php','0'),(23,'Find Service Result','FindServiceResult.php','0'),(24,'Delete Service Result','DeleteServiceResult.php','0'),(25,'Add New Supplier Result','AddNewSupplierResult.php','0'),(26,'Find Suppliers Result','FindSuppliersResult.php','0'),(27,'Delete Supplier Result','DeleteSupplierResult.php','0'),(28,'See Doctors','seedoctors.php','0'),(29,'FindDoctorsResult','FindDoctorsResult.php','0'),(30,'FindDoctors','FindDoctors.php','0'),(31,'DeleteDoctorResult','DeleteDoctorResult.php','0'),(32,'DeleteDoctor','DeleteDoctor.php','0'),(33,'Add new doctor','doctors.php','0');

#
# Structure for table "user_types"
#

DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) DEFAULT NULL,
  `redirect` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "user_types"
#

INSERT INTO `user_types` VALUES (1,'admin','dashboard.php'),(2,'user','dashboardu.php');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'admin','admin','admin','1'),(2,'user','user','user','2'),(3,'paul','paul','paul','1'),(4,'carina','carina','carina','2');
