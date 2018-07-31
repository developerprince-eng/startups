-- MySQL dump 10.13  Distrib 5.6.39, for Linux (x86_64)
--
-- Host: localhost    Database: startups_dev
-- ------------------------------------------------------
-- Server version	5.6.39

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `street1` varchar(255) NOT NULL,
  `street2` varchar(255) NOT NULL,
  `street_num` bigint(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `aid` varchar(96) NOT NULL,
  `name` varchar(96) NOT NULL,
  `article` text NOT NULL,
  `uid` varchar(96) NOT NULL,
  `pub_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `article_head_img` varchar(255) DEFAULT NULL,
  `article_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`id`, `name`) VALUES (1,'Bulawayo'),(2,'Harare'),(3,'Gweru'),(4,'Kwekwe'),(5,'Mutare'),(6,'Masvingo'),(7,'Chegutu'),(8,'Kadoma'),(9,'Victoria Falls'),(10,'Mutare'),(11,'Masvingo'),(12,'Chegutu'),(13,'Kadoma'),(14,'Victoria Falls');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `eid` varchar(96) NOT NULL,
  `name` varchar(96) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`,`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hub`
--

DROP TABLE IF EXISTS `hub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hub` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `hid` varchar(96) NOT NULL,
  `name` varchar(96) NOT NULL,
  `capacity` bigint(15) NOT NULL,
  `hub_img` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`,`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hub`
--

LOCK TABLES `hub` WRITE;
/*!40000 ALTER TABLE `hub` DISABLE KEYS */;
/*!40000 ALTER TABLE `hub` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__bookmark`
--

DROP TABLE IF EXISTS `pma__bookmark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__bookmark`
--

LOCK TABLES `pma__bookmark` WRITE;
/*!40000 ALTER TABLE `pma__bookmark` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__bookmark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__central_columns`
--

DROP TABLE IF EXISTS `pma__central_columns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin,
  PRIMARY KEY (`db_name`,`col_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__central_columns`
--

LOCK TABLES `pma__central_columns` WRITE;
/*!40000 ALTER TABLE `pma__central_columns` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__central_columns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__column_info`
--

DROP TABLE IF EXISTS `pma__column_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__column_info`
--

LOCK TABLES `pma__column_info` WRITE;
/*!40000 ALTER TABLE `pma__column_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__column_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__favorite`
--

DROP TABLE IF EXISTS `pma__favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__favorite`
--

LOCK TABLES `pma__favorite` WRITE;
/*!40000 ALTER TABLE `pma__favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__history`
--

DROP TABLE IF EXISTS `pma__history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__history`
--

LOCK TABLES `pma__history` WRITE;
/*!40000 ALTER TABLE `pma__history` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__navigationhiding`
--

DROP TABLE IF EXISTS `pma__navigationhiding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__navigationhiding`
--

LOCK TABLES `pma__navigationhiding` WRITE;
/*!40000 ALTER TABLE `pma__navigationhiding` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__navigationhiding` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__pdf_pages`
--

DROP TABLE IF EXISTS `pma__pdf_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__pdf_pages`
--

LOCK TABLES `pma__pdf_pages` WRITE;
/*!40000 ALTER TABLE `pma__pdf_pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__pdf_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__recent`
--

DROP TABLE IF EXISTS `pma__recent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__recent`
--

LOCK TABLES `pma__recent` WRITE;
/*!40000 ALTER TABLE `pma__recent` DISABLE KEYS */;
INSERT INTO `pma__recent` (`username`, `tables`) VALUES ('startupsco','[{\"db\":\"startups_dev\",\"table\":\"user\"},{\"db\":\"startups_dev\",\"table\":\"startup\"},{\"db\":\"startups_dev\",\"table\":\"role\"},{\"db\":\"startups_dev\",\"table\":\"city\"},{\"db\":\"startups_dev\",\"table\":\"hub\"}]');
/*!40000 ALTER TABLE `pma__recent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__relation`
--

DROP TABLE IF EXISTS `pma__relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__relation`
--

LOCK TABLES `pma__relation` WRITE;
/*!40000 ALTER TABLE `pma__relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__savedsearches`
--

DROP TABLE IF EXISTS `pma__savedsearches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__savedsearches` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__savedsearches`
--

LOCK TABLES `pma__savedsearches` WRITE;
/*!40000 ALTER TABLE `pma__savedsearches` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__savedsearches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_coords`
--

DROP TABLE IF EXISTS `pma__table_coords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_coords`
--

LOCK TABLES `pma__table_coords` WRITE;
/*!40000 ALTER TABLE `pma__table_coords` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__table_coords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_info`
--

DROP TABLE IF EXISTS `pma__table_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_info`
--

LOCK TABLES `pma__table_info` WRITE;
/*!40000 ALTER TABLE `pma__table_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__table_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_uiprefs`
--

DROP TABLE IF EXISTS `pma__table_uiprefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_uiprefs`
--

LOCK TABLES `pma__table_uiprefs` WRITE;
/*!40000 ALTER TABLE `pma__table_uiprefs` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__table_uiprefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__tracking`
--

DROP TABLE IF EXISTS `pma__tracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__tracking`
--

LOCK TABLES `pma__tracking` WRITE;
/*!40000 ALTER TABLE `pma__tracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__tracking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__userconfig`
--

DROP TABLE IF EXISTS `pma__userconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__userconfig`
--

LOCK TABLES `pma__userconfig` WRITE;
/*!40000 ALTER TABLE `pma__userconfig` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__userconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__usergroups`
--

DROP TABLE IF EXISTS `pma__usergroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  PRIMARY KEY (`usergroup`,`tab`,`allowed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__usergroups`
--

LOCK TABLES `pma__usergroups` WRITE;
/*!40000 ALTER TABLE `pma__usergroups` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__usergroups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__users`
--

DROP TABLE IF EXISTS `pma__users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`,`usergroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__users`
--

LOCK TABLES `pma__users` WRITE;
/*!40000 ALTER TABLE `pma__users` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `startup`
--

DROP TABLE IF EXISTS `startup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `startup` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `sid` varchar(96) NOT NULL,
  `name` varchar(96) NOT NULL,
  `brief` text NOT NULL,
  `description` text NOT NULL,
  `startup_img` varchar(255) DEFAULT NULL,
  `startup_head_img` varchar(255) DEFAULT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT '0',
  `fb_url` text NOT NULL,
  `inst_url` text NOT NULL,
  `twt_url` text NOT NULL,
  `pitch_deck` varchar(255) NOT NULL,
  `finance_doc` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `startup`
--

LOCK TABLES `startup` WRITE;
/*!40000 ALTER TABLE `startup` DISABLE KEYS */;
INSERT INTO `startup` (`id`, `sid`, `name`, `brief`, `description`, `startup_img`, `startup_head_img`, `approve`, `fb_url`, `inst_url`, `twt_url`, `pitch_deck`, `finance_doc`, `website`) VALUES (26,'1d9a3e6429ee522d3e296d25d0d801f4','','Design Startup','<p>High-quality graphic design enriches digital experiences by synthesizing text to simple visuals, by providing clarity to your purpose, and by bringing more emotion to your messaging. As a result, great design demands more attention and provides more credibility. We provide that.....</p>','Panthera_Logo.png','Panthera_Logo.png',1,'','','','','',''),(29,'21cabb4acef05014bdad2f87eb0761c6','','Tipster is an online news sharing platform that is democratizing the news making business by placing the power of the media into the hands of ordinary people which we call Tip-Stars.','<p>Tipster’s work is largely centered around the notion that “Information is power” therefore,&nbsp;<br>democratizing the media content is the ultimate form of empowerment that will help craft the&nbsp;<br>country and world that we want to live in. Our lives, our cultures, are composed of many&nbsp;<br>overlapping stories. Tipster provides a secure channel for ordinary people to upload exclusive news content (images, videos and reports) which is then distributed/sold to content consumers and publishers (probloggers, Media Houses, TV channels etc) depending on the type of content. Tip-Stars get credit through the use of a byline and sometimes get paid (depending on the publisher) for each downloaded and published work.</p>','tipster.jpg','tipster.jpg',1,'','','','','',''),(31,'89f3bb167deaaeb68d0195e9205edadd','','We help you bring your brand to life in the digital world.','<p>We are here to assist every business and individual that is ready to grow their digital footprint. We provide our clients with web resources and services that span from Domain Name Registration and Premium DNS services, to Mail and Hosting services. Our goal is to accelerate the growth of our client’s digital footprint, and providing the tools to convert that presence into sales. Outside of the traditional domain name and hosting services. Our end to end spectrum of services means we are perfectly capable of growing as the client’s needs increase. Here are some of our more specialized web resources.</p>','1381542_1119519358079755_3137586109205338367_n.jpg','1381542_1119519358079755_3137586109205338367_n.jpg',1,'','','','','',''),(32,'82ba4683be71465a5318511bf047ace4','','Providing Startups and Innovators access to legal and financial services ','<p>The Startup Clinic provides startups and innovators with pro-bono legal and financial services so as to help them quickly scale their startups into profitable businesses. The premise is simple, If you provide a startup with discounted services, they will leverage on those services to scale into an organisation that can then afford said services. We are disrupting the traditional legal and financial services landscape.&nbsp;</p>','startup_clinic_logo1.png','startup_clinic_logo1.png',1,'','','','','',''),(33,'bb5f952ad08b9a17e062489e1e440db2','','Effective communication services for enterprises and innovators alike. ','<p>Frello is a messaging platform for businesses which provides services for bulk SMSing, contact management &amp; Text-to-Voice communication. Frello provides list management services and an easy to integrate API for system integrations. Allowing you to schedule smses through its dashboard, Frello guarantees effective communication with analytics built right into the service.&nbsp;</p>','p03.jpg','p03.jpg',1,'','','','','',''),(34,'f988b67045533e7258631126ea6fe43a','','Share the costs and enjoy the ride!','<p>Let\'s Go is a inter city ride sharing platform that connects people who need to travel with drivers with empty seats who are looking to share commuting costs. Let’s Go combines the flexibility and comfort of private travelling with the timeliness of scheduled services to get you to your destination in the company of great people</p>','logo.png','logo.png',1,'','','','','',''),(35,'6d6d0b8f969edaae8e818ec6eb37f00d','','A life Sciences research institute focusing on the exploration of indigenous plant and animal species. ','<p>Eden Research focuses on the study and commercialization of indigenous plants and animals. Eden research seeks to explore traditional and indigenous products and knowledge systems while leveraging on modern day technology and science to create healthier and more efficiently produced food with digitally accessible production, nutrition and value add information. We are currently focusing on creating an organic self-sustaining system that produces fish, leafy vegetables (aquaponics) and earthworms (vermiculture) for urban farmers in Zimbabwe.</p>','Eden_Research.jpg','Eden_Research.jpg',1,'','','','','',''),(36,'00e7407a102a45b7c2debc5587863be9','',' Providing farmers with access to collateral free funding','<p>YouFarm provides finance for farmers in Zimbabwe through the YouFarm Crowd Farming Platform that allows people to invest in crops and livestock and share the profits with the farmer when the produce goes to market.</p>','YouFarm-Logo.jpg','YouFarm-Logo.jpg',1,'','','','','',''),(37,'227500a0de4cd309308d978f1c785ad7','','Intergrating Vermiculture and Aquaculture to feed the world!','<p>Permaculture or organic farming has not been something of great interest as these farming practices have always been termed, “ Farming the traditional way”, so Shift Organic Technologies comes in with its revolutionizing technology the V.A system. it integrates small animal husbandry, aquaponics and vermiculture in a closed loop system using ICT technology.</p>','download.png','download.png',1,'','','','','',''),(38,'6555e4d64d99ffc715b675ab1dce9480','','Eradicating poverty Through Social Enterprise','<p>We recycle shipping containers into dignified last-mile distribution hubs for Fast-moving Consumer Goods, Financial Services and LPG Gas. The hubs are run on a “social franchise” business model that uses a pull retail strategy rather than the traditional push strategy ensuring franchisee success. We use cutting edge mobile cloud technology to operate the hubs and impact over 2,000 lives with each pod. We bridge the gap between the informal sector and formal distribution channels.</p>','84af270cf63ce15f-bpfull.jpg','84af270cf63ce15f-bpfull.jpg',1,'','','','','',''),(40,'75dcaa50a253dd502a47adfc4bb57308','','Linking schools and communities','<p>It is a FREE online school management system that is designed to improve school management and aid in curriculum dissemination while building a bridge between the school and its stakeholders especially parents. Our goal is to leverage technology to empower African schools with interactive, dynamic and effective holistic management tools that promote engagement, accountability and transparency.</p>','academy_report.png','academy_report.png',1,'','','','','',''),(41,'bc76a9da28ded44dc87533ab7fb4a22f','','An AI System to Help Doctors Make More Accurate Diagnoses','<p>Dr CADx will eliminate the human errors that have dire consequences for patients and drive down the costs in hospitals through a computer aided diagnostic system that helps doctors diagnose medical images more accurately, and at a low cost. By deploying an artificial intelligence system that will be available at any given time of the day — even in remote areas — we will greatly improve the quality of patient management and save lives, especially in the marginalized areas of Africa. Dr CADx will revolutionize the healthcare system, benefiting patients, doctors, and hospitals alike.&nbsp;</p>','hiOATEef.jpg','hiOATEef.jpg',1,'','','','','',''),(42,'b218ae99221319c8c9614433d6c38fd0','','Payment processing Mobile point of sale devices (MPOS), mobile money','<p>MobiPay will at launch provide payment processing via Mobile Point of Sale (MPOS) devices. Traditional point of sale devices are expensive and are confined to merchants in urban areas, our devices will be completely mobile and and significantly cheaper then existing point of sale devices enable processing of payments in areas where traditionally this was not possible, aiding financial inclusion in all sectors of the economy.</p><p>In addition to financial inclusion our solution offers significant return on the investment required to get the venture up and running.</p>','5a4795ba57089-bpfull.jpg','5a4795ba57089-bpfull.jpg',1,'','','','','',''),(43,'c92b8176afd764b4eafd6c8fb7b669c3','','Providing Affordable Student Accommodation In Zimbabwe','<p>Room8 is an online platform that enables students in tertiary institutions to look for accommodation and also choose their roommates from the comfort of their homes. The platform also offers an advertising forum for landlords and enables tenants(students) to review the places where they are staying.</p>','p11.jpg','p11.jpg',1,'','','','','',''),(44,'bd89d3e019a826647d2290c3ba1e29ec','','Helping companies to work with users in product development','<p>X-beta accelerates user driven product development through early user acquisition by providing startups with form/function based feedback from our community of betas (users). It offers you the ability to be ahead of the technology curve and take advantage of new capabilities that do not yet exist in the market.</p>','p05.jpg','p05.jpg',1,'','','','','',''),(45,'d9e93b127597d91a5f340d73da47776e','','Lights, Camera, Transaction','<p>PayEasy is a financial technology application (Currently available for android only) which seeks to introduce convenience in the way people in Zimbabwe and across Africa make payments. The technology uses QR codes and is set to become a block chain facility allowing people to transact across different platforms seamlessly</p>','22552523_148164392592063_4473257807409418087_n.png','22552523_148164392592063_4473257807409418087_n.png',1,'','','','','',''),(46,'0032159fdf530b2c412959c699833051','','Laundry Gone Mobile','<p>A laundry service that liberates time and greatly diminishes the cost of doing laundry, all done under 36 hours through the touch of a button.&nbsp;</p>','washen_logo.png','washen_logo.png',1,'','','','','',''),(47,'be652c58bba49e10db654a076c35c70f','','A Greener Generation','<p>NeedEnergy is an Energy utility startup that provides you with alternative sources of energy for&nbsp;<br>your residential areas. We are a startup that is focusing on providing renewable and clean energy&nbsp;<br>in the form of Liquid Petroleum Gas for your cooking and heating and the use of Solar to generate&nbsp;<br>electricity for your household thereby complementing your current grid supply.</p>','Need_Energy_Logo_-_Copy.png','Need_Energy_Logo_-_Copy.png',1,'','','','','',''),(49,'874a27a22e0fda33c85e5f2ce171af70','','Ride Sharing Platform for Students!','<p>Wheels when you need them.™ Book cars parked around your university or business campus for your errands and escapes. The state of the Zimbabwean transport system. It\'s not suited for customers. It\'s suited to benefit those who run it. This is about to change.</p>','rf9jDVrk_400x400.jpg','rf9jDVrk_400x400.jpg',1,'','','','','',''),(50,'cdbb6d50a736b053e0c8512692e8bbf0','','The convenient way to send money across borders.','<p>We are concerned global citizens, who have been searching for easier and cheaper ways of sending money to loved ones or paying for services conveniently. Frustrated by current costs and effort spent using existing money transfer operators, we have built this platform to reduce the stress faced. This platform uses a peer-to-peer payment system, providing a streamlined ingenious way of sending money across the globe. You can also use it to pay for services in another country</p>','CvG_9_z6_400x400.jpg','CvG_9_z6_400x400.jpg',1,'','','','','',''),(52,'cf6c843c08dd709ff777915ae993da34','','Send parcels to and fro Zimbabwe','<p>TUMA is a platform that links travellers who have extra luggage space&nbsp;<br>with people who want to send parcels all over the world. For travellers, please got the \'sell your space\" page and fill in the form and we will advertise for you on our home page. For people sending parcels, Please go to our home page and see listed journeys. Click on the wanted destinations and enquire. You will receive details of the traveller, contact them and arrange sending your parcels</p>','tuma.jpg','tuma.jpg',1,'','','','','',''),(53,'1c920b86364cb2d25b550b62aca03629','','Dream, Work, Execute, Engage & Progress!!','<p>Distance learning is costly as one has to travel to the school premises to submit an assignment or attend lectures. Sharing of information between Tertiary institutions is limited. Venture gives people more ways to learn, through virtual experiences and on demand classes. We connect every colleges in Zimbabwe to interact socially too.</p>','22308660_1934235953502805_5065518329974616595_n.png','22308660_1934235953502805_5065518329974616595_n.png',1,'','','','','',''),(54,'a798fbd53a814c24e74da87cbe93964d','','Peer Learning Platform for high school students ','<p>An educational platform that seeks to conveniently provide educational content and opportunities to students all at affordable fees.</p>','cmDuvnfR_400x400.jpg','cmDuvnfR_400x400.jpg',1,'','','','','',''),(56,'4bf658af24a2f3f98f90ab9f30981bad','','Crowd sourcing Platform for Zimbabwe','<p>Isu is a real-time crowd-sourcing platform that allows anyone with just a basic feature phone to get quick access to contextual information over SMS.<br>Isu will allow millions of people across Africa, who do not have smart phones or internet access, to get the information they need to make better decisions and improve their lives.</p>','6a4b3e7974cb5fe3-bpfull.jpg','6a4b3e7974cb5fe3-bpfull.jpg',1,'','','','','',''),(57,'08b2c59f65fd231a2b8657224ad730e9','','Save money by farming your own chickens online ','<p>Rera is an online platform that provides an opportunity for consumers to farm their own poultry produce. Save money by farming your own chickens online&nbsp;</p>','Rera.jpg','Rera.jpg',1,'','','','','',''),(58,'ff0fdf72546ec5184f1c722b87b6096f','','Using Data Mining and Machine Learning: For academic performance improvement','<p>Leaph is a Academic Management System developed by Leaph Inc. to facilitate students with a universal tool that aids in helping them achieve their desired results. We deliver this service by utilizing Data Science and Machine Learning to perform deep analysis per individual, according to the data provided either by the student, teacher, university and other miscellaneous data. Student data is not only used for analytics but throughout the entire system to allow for data driven applets for all users.</p>','Leaph.png','Leaph.png',1,'','','','','',''),(59,'3dff7defee66b04c88072805339dd666','','Digital currencies for people in Africa','<p>Our Mission at Golix is to give every person in Africa Financial Autonomy.</p>','unnamed.png','unnamed.png',1,'','','','','',''),(60,'c37492b31ff359740c4ea390762862f0','','Zimbabwe\'s Provisional Driver\'s License Test App','<p>Zimbabwe VID provisional driving license test question papers, learners licence &amp; Zimbabwe highway code questions app!</p>','unnamed_(1).png','unnamed_(1).png',1,'','','','','',''),(61,'4f92f407847d7e2a63f398463f41bab5','','An Easy Efficient Way To Deliver Content','<p>An offline content delivery platform that utilizes WiFi networks to avail locally hosted content.&nbsp;</p>','x7JZbk88_400x400.jpg','x7JZbk88_400x400.jpg',1,'','','','','',''),(62,'3efce9d06b3581ee1866ca0b46e85161','','On Demand Meal Delivery in Bulawayo','<p>Foodie is a meal ordering and delivery service made to give you the convenience of having affordable and well made meals to your doorstep.</p>','p08.jpg','p08.jpg',1,'','','','','',''),(64,'faf607272ca65112cb213118920da25a','','Send and Receive Money Conveniently ','<p>BitMari is a payment platform that significantly lowers the cost and increases the speed of remittance payments throughout the African Diaspora using Bitcoin. BitMari uses Blockchain technology and Bitcoin to offer quick and low-cost payment transfers as an alternative to traditional remittance platforms and their exorbitant fees. The average cost of remittances in Africa is the highest in the world, with fees as high as 20% per transfer.</p>','logo1.png','logo1.png',1,'','','','','',''),(65,'e402a66c949f212f935c4656179c95b4','','Order Online from your Local Restaurants','<p>Our Mission is to provide the fastest and best service to everyone who uses the application. We are a Food delivery app available on the App Store now!</p>','GrD8E6T8_400x400.jpg','GrD8E6T8_400x400.jpg',1,'','','','','',''),(66,'64b915e2cd7be992bb3f1ebb13995e89','','Realtime Traffic Management and analytics platform','<p>Traffolytix is a real time traffic management and analytics platform that makes everyday commuting &amp; traveling a breeze. Traffolytix is a next generation traffic management and analytics platform which aims at eliminating congestion in our cities through the use of the latest technologies.</p>','29258627_1776645019310231_6666311073328529408_n.png','29258627_1776645019310231_6666311073328529408_n.png',1,'','','','','',''),(68,'5e59a2053ffd32b36b3d003c201ec3a4','','Vital majors in plastic waste collection and recycling.','<p>Plastic recycling is a very prominent business; however lack of resources, infrastructure and training has resulted in more than 80% of waste plastic accumulating in the environment annually. After identifying a gap Vital decided to help solve this huge anathema. However this has been a very interesting journey for the company. Since operations started in January 2018, the company has won a US$5 000 grant, collected an estimated 5 tonnes of plastic waste, been in partnership with over 10 organisations which include corp-orates, retail shops and participated in Demo Africa Innovation tour Harare. As part of its expansion plan Vital is developing a waste management application that forms an integrated system for waste collections, marketing and will also be social platform to engage the public in a block chain revenue model. The business model is expected to greatly improve management of waste plastic and increase recycling efficiency within Zimbabwe and Africa in the next 24 months.</p>','vital_Manufacturing.jpg','vital_Manufacturing.jpg',1,'','','','','',''),(69,'a57eac8eaa704c935195e372e2ba5863','','Building Skills Together through Career Guidance','<p>FundoLinker is a student support platform through which schools, companies, skilled people and crowd donors are able to work together to provide career guidance, financial help, information and jobs. We are bringing in a platform, systems and philosophy that encourage key skills stakeholders: schools, companies, industry veterans and donors to collectively participate in tackling skills building challenges such as wrong career choice, wrong subjects or course choice, wrong school or university choice, wrong mentor or trainer choice, failure to pay school or learning fees, and failure to satisfy basic needs while schooling.</p>','Fundo_Linker.jpg','Fundo_Linker.jpg',1,'','','','','',''),(70,'cc3e1ff19bc43379057236afcc559b03','','Tuverl seeks to make public transport in African countries more accessible to commuters','<p>Tuverl is a new way to travel by road in African countries. Tuverl makes travel to more destinations of your choice cheaper, faster and more convenient. This is your one stop shop for all your Public Transport needs. Commuting long distances by bus or short distances by Minibuses and Taxis has never been this easy.</p>','Turverl.jpg','Turverl.jpg',1,'','','','','','');
/*!40000 ALTER TABLE `startup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `uid` varchar(96) NOT NULL,
  `username` varchar(96) NOT NULL,
  `name` varchar(96) NOT NULL,
  `surname` varchar(140) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cellphone` bigint(14) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin','investor') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `uid`, `username`, `name`, `surname`, `email`, `cellphone`, `profile_img`, `password`, `role`) VALUES (1,'','DeveloperPrince','','','prince@techvillage.org.zw',0,'','e507c28a9e339d6fbf2b64e332a27089','admin'),(2,'','PantheraDesign','','','pantherazw@gmail.com',0,'','39c0576a4bd4a38e86022d581b00bb72','user'),(3,'','tonderai','','','graceglory591@gmail.com',0,'','a191e0d7f58e7e48ca2791f9f6139447','user'),(4,'','mmtandi','','','mtandimartin@gmail.com',0,'','818dfea2becfc02a63893278d8a47a9c','user'),(5,'','mmtandi','','','mtandimartin@gmail.com',0,'','a42d89b41e10b6069229a8b1a2ed4fa7','user'),(6,'','TechHubHarare','','','Nchasakara@gmail.com',0,'','6a7652a3277c39e41548adde09d63272','user'),(7,'','Smartpeople','','','Moyofreeman74@gmail.com',0,'','e2f2b398c075a16c98cd5c5c7f5877ba','user'),(8,'','Gugu','','','thumezazw@gmail.com',0,'','4c4b90651733c37e2155808ea5780fb7','user'),(9,'','thame','','','thamsanqa@x-beta.co.zw',0,'','a286dfd8d6c373ab031c86ab148116f3','user'),(10,'','Glenn','','','atomicgtm@gmail.com',0,'','b3190a10aa196d8867123286588db6f8','user'),(11,'','Mabri','','','princekudzaimaposa94@gmail.com',0,'','e507c28a9e339d6fbf2b64e332a27089','user'),(12,'','Tatenda Mitchell Mapfumo','','','tatenda@tipster.co.zw',0,'','e5105e8aacb438a2d837cf1af72169a1','user'),(13,'','takunda','','','takunda@techvillage.org.zw',0,'','82ed64d0662f70060fd92ee457ebbeee','admin'),(14,'','Lindelwe','','','lindelwe@techvillage.org.zw',0,'','3872080acd40b78d612f4060bf64549b','user'),(15,'','thelma','','','thelma@techvillage.org.zw',0,'','ea5f4537307651319cb73d42f3b5b0db','user'),(16,'','vusi','','','mkhizavusi95@gmail.com',0,'','53cf2b6627ca8324952ee159746ea44d','user');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'startups_dev'
--

--
-- Dumping routines for database 'startups_dev'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-31  8:49:13
