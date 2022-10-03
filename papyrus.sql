-- MariaDB dump 10.19  Distrib 10.6.7-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: papy
-- ------------------------------------------------------
-- Server version	10.6.7-MariaDB-2ubuntu1.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Entcom`
--

DROP TABLE IF EXISTS `Entcom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Entcom` (
  `NUMCOM` int(10) NOT NULL,
  `OBSCOM` varchar(50) DEFAULT NULL,
  `DATCOM` date DEFAULT NULL,
  `NUMFOU` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`NUMCOM`),
  KEY `ind_tes` (`NUMFOU`),
  CONSTRAINT `Entcom_ibfk_1` FOREIGN KEY (`NUMFOU`) REFERENCES `Fournis` (`NUMFOU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Entcom`
--

LOCK TABLES `Entcom` WRITE;
/*!40000 ALTER TABLE `Entcom` DISABLE KEYS */;
INSERT INTO `Entcom` VALUES (70010,NULL,'0000-00-00','00120'),(70011,'Commande urgente','0000-00-00','00540'),(70020,NULL,'0000-00-00','09180'),(70025,'Commande urgente','0000-00-00','09150'),(70210,'Commande cadencée','0000-00-00','00120'),(70250,'Commande cadencée','0000-00-00','08700'),(70300,NULL,'0000-00-00','09120'),(70620,NULL,'0000-00-00','00540'),(70625,NULL,'0000-00-00','00120'),(70629,NULL,'0000-00-00','09180');
/*!40000 ALTER TABLE `Entcom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Fournis`
--

DROP TABLE IF EXISTS `Fournis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Fournis` (
  `NUMFOU` varchar(25) NOT NULL,
  `NOMFOU` varchar(25) DEFAULT NULL,
  `RUEFOU` varchar(50) DEFAULT NULL,
  `POSFOU` char(5) DEFAULT NULL,
  `VILFOU` varchar(30) DEFAULT NULL,
  `CONFOU` varchar(15) DEFAULT NULL,
  `SATISF` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`NUMFOU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Fournis`
--

LOCK TABLES `Fournis` WRITE;
/*!40000 ALTER TABLE `Fournis` DISABLE KEYS */;
INSERT INTO `Fournis` VALUES ('00120','GROBRIGAN','20 rue du papier','92200','Pappercity','Georges',8),('00540','ECLIPSE','53 rue laisse flotter les rubans','78250','Bugbugville','Nestor',7),('08700','MEDICIS','120 rue des plantes','75014','Paris','Lison',NULL),('09120','DISCOBOL','11 rue des sports','85100','La Roche sur Yon','Hercule',8),('09150','DEPANPAP','26 avenue des locomotives','59987','Coroncountry','Pollux',5),('09180','HURRYTAPE','68 boulevard des octets','04044','Dumpville','Track',NULL);
/*!40000 ALTER TABLE `Fournis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ligcom`
--

DROP TABLE IF EXISTS `Ligcom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ligcom` (
  `NUMLIG` tinyint(3) NOT NULL,
  `QTECDE` int(10) DEFAULT NULL,
  `PRIUNI` varchar(50) DEFAULT NULL,
  `QTELIV` int(10) DEFAULT NULL,
  `DERLIV` datetime DEFAULT NULL,
  `NUMCOM` int(10) NOT NULL,
  `CODART` char(4) DEFAULT NULL,
  PRIMARY KEY (`NUMLIG`,`NUMCOM`),
  KEY `CODART` (`CODART`),
  KEY `NUMCOM` (`NUMCOM`),
  CONSTRAINT `Ligcom_ibfk_1` FOREIGN KEY (`CODART`) REFERENCES `Produit` (`CODART`),
  CONSTRAINT `Ligcom_ibfk_2` FOREIGN KEY (`NUMCOM`) REFERENCES `Entcom` (`NUMCOM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ligcom`
--

LOCK TABLES `Ligcom` WRITE;
/*!40000 ALTER TABLE `Ligcom` DISABLE KEYS */;
INSERT INTO `Ligcom` VALUES (1,3000,'470',3000,'0000-00-00 00:00:00',70010,'I100'),(1,1000,'600',1000,'0000-00-00 00:00:00',70011,'I105'),(1,200,'140',NULL,'0000-00-00 00:00:00',70020,'B001'),(1,1000,'590',1000,'0000-00-00 00:00:00',70025,'I100'),(1,1000,'470',1000,'0000-00-00 00:00:00',70210,'I100'),(1,15000,'4900',12000,'0000-00-00 00:00:00',70250,'P230'),(1,50,'790',50,'0000-00-00 00:00:00',70300,'I110'),(1,200,'600',200,'0000-00-00 00:00:00',70620,'I105'),(1,1000,'470',1000,'0000-00-00 00:00:00',70625,'I100'),(1,200,'140',NULL,'0000-00-00 00:00:00',70629,'B001'),(2,2000,'485',2000,'0000-00-00 00:00:00',70010,'I105'),(2,200,'140',NULL,'0000-00-00 00:00:00',70020,'B002'),(2,500,'590',500,'0000-00-00 00:00:00',70025,'I105'),(2,10000,'3350',10000,'0000-00-00 00:00:00',70250,'P220'),(2,10000,'3500',10000,'0000-00-00 00:00:00',70625,'P220'),(2,200,'140',NULL,'0000-00-00 00:00:00',70629,'B002'),(3,1000,'680',1000,'0000-00-00 00:00:00',70010,'I108'),(4,200,'40',250,'0000-00-00 00:00:00',70010,'D035'),(5,6000,'3500',6000,'0000-00-00 00:00:00',70010,'P220'),(6,6000,'2000',2000,'0000-00-00 00:00:00',70010,'P240');
/*!40000 ALTER TABLE `Ligcom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Produit`
--

DROP TABLE IF EXISTS `Produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Produit` (
  `CODART` char(4) NOT NULL,
  `LIBART` varchar(30) DEFAULT NULL,
  `STIALE` int(10) DEFAULT NULL,
  `STKPHY` int(10) DEFAULT NULL,
  `QTEANN` int(10) DEFAULT NULL,
  `UNIMES` char(5) DEFAULT NULL,
  PRIMARY KEY (`CODART`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Produit`
--

LOCK TABLES `Produit` WRITE;
/*!40000 ALTER TABLE `Produit` DISABLE KEYS */;
INSERT INTO `Produit` VALUES ('B001','Bande magnétique 1200',20,87,240,'unité'),('B002','Bande magnétique 6250',20,12,410,'unité'),('D035','CD R slim 80mm',40,42,150,'B010'),('D050','CD R-W 80mm',50,4,0,'B010'),('I100','Papier 1 ex continu',100,557,3500,'B1000'),('I105','Papier 2 ex continu',75,5,3500,'B1000'),('I108','Papier 3 ex continu',200,557,3500,'B500'),('I110','Papier 4 ex continu',10,12,63,'B400'),('P220','Pré imprimé commande',500,2500,24500,'B500'),('P230','Pré imprimé facture',500,250,12500,'B500'),('P240','Pré imprimé bulletin de paie',500,3000,6250,'B500'),('P250','Pré imprimé bon livraison',500,2500,24500,'B500'),('P270','Pré imprimé bon fabrication',500,2500,24500,'B500'),('R080','Ruban Epson 850',10,2,120,'unité'),('R132','Ruban imp1200 lignes',25,200,182,'unité');
/*!40000 ALTER TABLE `Produit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Vente`
--

DROP TABLE IF EXISTS `Vente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Vente` (
  `DELLIV` smallint(5) DEFAULT NULL,
  `QTE1` int(10) DEFAULT NULL,
  `PRIX1` varchar(50) DEFAULT NULL,
  `QTE2` int(10) DEFAULT NULL,
  `PRIX2` varchar(50) DEFAULT NULL,
  `QTE3` int(10) DEFAULT NULL,
  `PRIX3` varchar(50) DEFAULT NULL,
  `CODART` char(4) NOT NULL,
  `NUMFOU` varchar(25) NOT NULL,
  PRIMARY KEY (`CODART`,`NUMFOU`),
  KEY `NUMFOU` (`NUMFOU`),
  CONSTRAINT `Vente_ibfk_1` FOREIGN KEY (`CODART`) REFERENCES `Produit` (`CODART`),
  CONSTRAINT `Vente_ibfk_2` FOREIGN KEY (`NUMFOU`) REFERENCES `Fournis` (`NUMFOU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vente`
--

LOCK TABLES `Vente` WRITE;
/*!40000 ALTER TABLE `Vente` DISABLE KEYS */;
INSERT INTO `Vente` VALUES (15,0,'150',50,'145',100,'140','B001','08700'),(15,0,'210',50,'200',100,'185','B002','08700'),(0,0,'40',NULL,NULL,NULL,NULL,'D035','00120'),(5,0,'40',100,'30',5,'0','D035','09120'),(90,0,'700',50,'600',120,'500','I100','00120'),(70,0,'710',60,'630',100,'600','I100','00540'),(60,0,'800',70,'600',90,'500','I100','09120'),(90,0,'650',90,'600',200,'590','I100','09150'),(30,0,'720',50,'670',100,'490','I100','09180'),(90,10,'705',50,'630',120,'500','I105','00120'),(70,0,'810',60,'645',100,'600','I105','00540'),(30,0,'720',50,'670',100,'510','I105','08700'),(60,0,'920',70,'800',90,'700','I105','09120'),(90,0,'685',90,'600',200,'590','I105','09150'),(90,5,'795',30,'720',100,'680','I108','00120'),(60,0,'920',70,'820',100,'780','I108','09120'),(60,0,'950',70,'850',90,'790','I110','09120'),(90,0,'900',70,'870',90,'835','I110','09180'),(15,0,'3700',100,'3500',NULL,NULL,'P220','00120'),(20,50,'3500',100,'3350',NULL,NULL,'P220','08700'),(30,0,'5200',100,'5000',NULL,NULL,'P230','00120'),(60,0,'5000',50,'4900',NULL,NULL,'P230','08700'),(15,0,'2200',100,'2000',NULL,NULL,'P240','00120'),(30,0,'1500',100,'1400',500,'1200','P250','00120'),(30,0,'1500',100,'1400',500,'1200','P250','09120'),(10,0,'120',100,'100',NULL,NULL,'R080','09120'),(5,0,'275',NULL,NULL,NULL,NULL,'R132','09120');
/*!40000 ALTER TABLE `Vente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-03 11:12:44
