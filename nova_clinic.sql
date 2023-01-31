# Host: 127.0.0.1  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-05-29 13:39:14
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "appointments"
#

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE `appointments` (
  `AppointmentID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL DEFAULT '',
  `LastName` varchar(255) NOT NULL DEFAULT '',
  `Phone` varchar(25) NOT NULL DEFAULT '',
  `Email` varchar(255) DEFAULT '',
  `AppointmentDate` date DEFAULT NULL,
  `AppointmentTime` time DEFAULT NULL,
  `Speciality` varchar(50) NOT NULL DEFAULT '',
  `Message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`AppointmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

#
# Data for table "appointments"
#

INSERT INTO `appointments` VALUES (1,'Paul','Tirlea','0747854124','tirleapaul@gmail.com','2022-05-26','10:30:00','Dermatologie','Se poate sa ajung mai repede cu 10 minute.'),(2,'Giulia - Carina','Bledea','0745965874','carina.bledea@yahoo.com','2022-05-26','09:32:00','Cardiologie',''),(4,'Anamaria','Oros','0748965412','ana.oros24@gmail.com','2022-06-08','10:20:00','Oftalmologie','Programare la cabinetul de oftalmologie al doamnei doctor Popescu'),(6,'Ardelean','Adelin','0748451263','ardelean.adelin12@gmail.com','2022-05-21','07:45:00','Cardiologie','Programare pentru data de 05.21.2022'),(7,'Catalin','Buie','0748965412','buie.cata.alex@yahoo.com','2022-07-14','18:30:00','Urologie','Programarea la Urologie, fara bilet de trimitere '),(8,'Adrian','Ivan','0748964585','ivan_adrian23@outlook.com','2022-05-31','14:50:00','Oftalmologie',''),(9,'Ioan - Gabriel','Puț','0474985412','putIontput@yahoo.com','2022-06-08','22:00:00','Ginecologie','I-am facut programare prietenei mele la urolog, am mare grija de ea. Imi doresc ca bunul Dumnezeu sa o ajute in viata!!! '),(10,'Marius Petre','Voievod-Palada','0745896325','voievodat@yahoo.ro','2022-05-24','16:30:00','Cardiologie',''),(11,'Ciprian','Chindris','0745896452','ciprian_Chr@yahoo.com','2022-05-23','00:00:00','Ortopedie','Nu sunt contrubuitor la casa de asigurari si pensii.'),(12,'Laura','Maxim','0756452986','maxim.laura@outlook.com','2022-05-09','14:50:00','Reumatologie',''),(13,'Roxana Camelia','Sabo','0745896452','roxy.Sabo@gmail.com','2022-06-23','12:30:00','Alergologie','Se poate sa reprogramez!'),(14,'Aurel','Alb','0744695863','aburel@yahoo.com','2022-06-16','13:20:00','Oftalmologie','Vreau sa ma ajutati sa vad daca inca sunt student in anul 3.'),(15,'Miruna','Cozma ','0745689547','MiruCosma45@gmail.com','2022-07-21','10:10:00','Ginecologie',''),(16,'Ioana','Han','0745899580','han.ioana12@gmail.com','2022-05-31','13:00:00','Dermatologie','Asigurata si cu bilet de trimitere'),(17,'Andrei Petru','Butica','0745896541','andrei.butica11@yahoo.com','2022-05-16','10:00:00','Chirurgie generala','Urgenta medicala'),(18,'Alexandru','Radu','0748652489','radu_alex@gmail.com','2022-05-26','20:00:00','Dermatologie',''),(19,'Lorena','Paul','0747856325','lorena1145@yahoo.com','2022-05-09','16:10:00','Oftalmologie','Programare la domnul doctor Ionescu'),(20,'Amalia Tabita','Bonat','0745896125','amalia.bonat@yahoo.com','2022-05-22','21:10:00','Urologie',''),(22,'Adelin Leonard','Ardelean','074785625','adelin.leo@yahoo.com','2022-05-24','15:51:00','Dermatologie','Mesaj'),(23,'Ioan','Put','0756743256','dsad@yahoo.ro','2022-05-31','15:17:00','Alergologie',''),(24,'dada','dada','213213','ddsa@dsa.com','2022-06-07','17:40:00','Ortopedie','');

#
# Structure for table "doctors"
#

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `DocID` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(50) DEFAULT NULL,
  `FirstName` varchar(100) NOT NULL DEFAULT '',
  `Image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DocID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

#
# Data for table "doctors"
#

INSERT INTO `doctors` VALUES (1,'Popescu','Ion','Popescu/medic1.jpg'),(2,'Popovici','Alin','Popovici/medic2.jpg'),(3,'Man','Bianca','Man/medic3.jpg'),(5,'Georgescu','Marius','Georgescu/medic5.jpg'),(6,'Ardelean','Georgeta','Ardelean/medic4.jpg');

#
# Structure for table "services"
#

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `details` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

#
# Data for table "services"
#

INSERT INTO `services` VALUES (2,'Tratament cu Laser',250.00,'Tratament dermatologic ','Tratament cu Laser/service1.jpg'),(3,'Pachet Analize de baze',99.99,'Contine cele 30 de analize de sange uzuale','Pachet Analize de baze/service2.jpg'),(4,'Chirurgie Plastica',1000.00,'La NovaClinic sunt cei mai buni medici esteticieni','Chirurgie Plastica/service3.jpg'),(5,'Consultatie Oftalmologie',74.99,'Consultatie de specialitate ','Consultatie Oftalmologie/service5.jpg'),(6,'Analize Medicale Plus',300.00,'Pachet de analize medicale ce contine toate analizele','Analize Medicale Plus/service4.jpg'),(7,'Raze la Plamani',420.00,'La cabinetul de radiologie primesti rezultaul pe loc','Raze la Plamani/service6.jpg');

#
# Structure for table "suppliers"
#

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) NOT NULL DEFAULT '',
  `Country` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Adress` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL DEFAULT '',
  `Email` varchar(30) DEFAULT '',
  `Category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

#
# Data for table "suppliers"
#

INSERT INTO `suppliers` VALUES (1,'Catena SRL','Romania','Bucuresti','Alea Florilor Nr12','0743 004 105','catena.farmaciainimii@yahoo.co','Medicamente'),(2,'Pronto SRL','Romania','Baia Mare','Victoriei 146',' 0362 419 101','pronto.12@gmail.com','Cantina'),(3,'Casa Rusu','Romania','Baia Mare','Bulevardul Bucuresti Numarul 32','0759 046 707','casa_rusu@yahoo.com','Mobilier'),(4,'Altex SRL','Roamnia','Baia Mare','Bulevardul Independentei Nr 56',' 0362 804 924','altex.celmaimicpret@gmail.com','Aparatura'),(5,'Farmacia DoctorMax ','Romania','Baia Mare','Str. Paltinisului Nr 7','0799 914 642','preturi.drmax_demici@gmail.com','Medicamente'),(6,'Actual Clean','Romania','Baia Mare','Bulevardul Bucuresti Nr 40',' 0753 162 845','actualclean@gmail.com','Intretinere');

#
# Procedure "stergere"
#

DROP PROCEDURE IF EXISTS `stergere`;
CREATE PROCEDURE `stergere`(Param varchar(25))
BEGIN
DELETE
FROM appointments 
WHERE Phone = Param;
END;

#
# Procedure "stergereDoc"
#

DROP PROCEDURE IF EXISTS `stergereDoc`;
CREATE PROCEDURE `stergereDoc`(Param INT(11))
BEGIN
DELETE
FROM doctors 
WHERE DocID = Param;
END;

#
# Procedure "stergereServiciu"
#

DROP PROCEDURE IF EXISTS `stergereServiciu`;
CREATE PROCEDURE `stergereServiciu`(Param INT(11))
BEGIN
DELETE
FROM services 
WHERE Id = Param;
END;

#
# Procedure "stergereSupplier"
#

DROP PROCEDURE IF EXISTS `stergereSupplier`;
CREATE PROCEDURE `stergereSupplier`(Param varchar(25))
BEGIN
DELETE
FROM suppliers 
WHERE Phone = Param;
END;
