-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: simasjid
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pengurus`
--

DROP TABLE IF EXISTS `pengurus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengurus` (
  `id_pengurus` varchar(5) NOT NULL,
  `jabatan` varchar(10) DEFAULT NULL,
  `nama_pengurus` varchar(50) DEFAULT NULL,
  `no_telp_pengurus` varchar(15) DEFAULT NULL,
  `alamat_pengurus` varchar(200) DEFAULT NULL,
  `password_pengurus` char(65) DEFAULT NULL,
  PRIMARY KEY (`id_pengurus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengurus`
--

LOCK TABLES `pengurus` WRITE;
/*!40000 ALTER TABLE `pengurus` DISABLE KEYS */;
INSERT INTO `pengurus` VALUES ('P0001','Ketua','Muhammad Naim','085725111232','Keputih gang 2','15E2B0D3C33891EBB0F1EF609EC419420C20E320CE94C65FBC8C3312448EB225'),('P0002','Bendahara','Hilmi','085641222322','Keputih gang 2','15E2B0D3C33891EBB0F1EF609EC419420C20E320CE94C65FBC8C3312448EB225');
/*!40000 ALTER TABLE `pengurus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'simasjid'
--

--
-- Dumping routines for database 'simasjid'
--
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambahPengurus` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambahPengurus`(jabatan varchar(10), nama_pengurus varchar(50), no_telp_pengurus varchar(15), alamat_pengurus varchar(200), password_pengurus char(65))
BEGIN
	
	select cast(substring(max(id_pengurus),2,5) as signed) into @lastId from pengurus;
    set @lastId = @lastId + 1;
    
    myLoop : while(True)
    Do
		if @lastId < 10 and @lastId > 0 
        then
			select concat('P000',@lastId) into @Id;
        elseif @lastId < 100 and @lastId > 10
        then
			select concat('P00',@lastId) into @Id;
		elseif @lastId < 1000 and @lastId > 100
        then
			select concat('P0',@lastId) into @Id;
		elseif @lastId < 10000 and @lastId > 1000
        then
			select concat('P',@lastId) into @Id;
        else
			select -1 as message;
            leave myLoop;
        end if;
        
		if (select 1 from pengurus where id_pengurus = @Id)
        then
			set @lastId = @lastId +1;
		else
			insert into pengurus (pengurus.id_pengurus, pengurus.jabatan, pengurus.nama_pengurus, pengurus.no_telp_pengurus, pengurus.alamat_pengurus, pengurus.password_pengurus) values(@Id, jabatan,nama_pengurus, no_telp_pengurus, alamat_pengurus, password_pengurus );
			if (select 1 from pengurus where id_pengurus = @Id)
			then
				select 1 as message;
				leave myLoop;
			else
				select 0 as message;
            end if;
		end if;
    end WHILE;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updatePengurus` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatePengurus`(id_pengurus varchar(5), jabatan varchar(10), nama_pengurus varchar(50), no_telp_pengurus varchar(15), alamat_pengurus varchar(200))
BEGIN

update pengurus set pengurus.nama_pengurus = nama_pengurus, pengurus.jabatan = jabatan, pengurus.no_telp_pengurus = no_telp_pengurus, pengurus.alamat_pengurus = alamat_pengurus where pengurus.id_pengurus = id_pengurus;
#select nama_pengurus, jabatan, id_pengurus, no_telp_pengurus, alamat_pengurus;
if row_count() > 0
then
	select 1 as message;
else
	select 0 as message;
end if;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-19  1:11:19
