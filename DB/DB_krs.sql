-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: krs
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dosens`
--

DROP TABLE IF EXISTS `dosens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dosens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dosens`
--

LOCK TABLES `dosens` WRITE;
/*!40000 ALTER TABLE `dosens` DISABLE KEYS */;
INSERT INTO `dosens` VALUES (1,'Ellis Salwa Puspasari S.Pt','0513 5369 027','2024-03-21 21:28:02','2024-03-21 21:28:02'),(2,'Gangsa Simanjuntak S.Psi','(+62) 830 5940 384','2024-03-21 21:28:03','2024-03-21 21:28:03'),(3,'Heru Karja Mustofa S.Pt','0774 7582 079','2024-03-21 21:28:03','2024-03-21 21:28:03'),(4,'Ida Padmasari','(+62) 763 8668 5314','2024-03-21 21:28:03','2024-03-21 21:28:03'),(5,'Eva Susanti','(+62) 932 6118 105','2024-03-21 21:28:03','2024-03-21 21:28:03'),(6,'Kani Mulyani M.Farm','(+62) 345 9140 2801','2024-03-21 21:28:03','2024-03-21 21:28:03'),(7,'Ibun Prabowo S.E.I','0914 2667 7485','2024-03-21 21:28:03','2024-03-21 21:28:03'),(8,'Uli Clara Prastuti','0298 1700 885','2024-03-21 21:28:04','2024-03-21 21:28:04'),(9,'Panji Maulana M.Ak','0383 8894 0547','2024-03-21 21:28:04','2024-03-21 21:28:04'),(10,'Aurora Namaga','(+62) 415 3897 8711','2024-03-21 21:28:04','2024-03-21 21:28:04'),(11,'Putri Paris Puspita','(+62) 622 8964 661','2024-03-21 21:28:05','2024-03-21 21:28:05'),(12,'Hana Tari Andriani S.T.','(+62) 27 0790 7873','2024-03-21 21:28:05','2024-03-21 21:28:05'),(13,'Chelsea Gasti Nasyiah M.Pd','(+62) 568 2902 1688','2024-03-21 21:28:05','2024-03-21 21:28:05'),(14,'Kiandra Wijayanti','0959 1111 6955','2024-03-21 21:28:05','2024-03-21 21:28:05'),(15,'Mulya Prayoga','0417 0348 4648','2024-03-21 21:28:05','2024-03-21 21:28:05');
/*!40000 ALTER TABLE `dosens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matkuls`
--

DROP TABLE IF EXISTS `matkuls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matkuls` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `matkul_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matkuls`
--

LOCK TABLES `matkuls` WRITE;
/*!40000 ALTER TABLE `matkuls` DISABLE KEYS */;
INSERT INTO `matkuls` VALUES (1,'','kode5','Rerum cum recusandae dolor.','2',NULL,'2024-03-21 21:28:00','2024-03-21 21:28:00'),(2,'','kode8','Ipsa alias nam in.','4',NULL,'2024-03-21 21:28:00','2024-03-21 21:28:00'),(3,'','kode6','Harum optio quis et est.','3',NULL,'2024-03-21 21:28:01','2024-03-21 21:28:01'),(4,'','kode8','Cupiditate magnam.','2',NULL,'2024-03-21 21:28:01','2024-03-21 21:28:01'),(5,'','kode4','Aliquid minus dolorem odit.','2',NULL,'2024-03-21 21:28:01','2024-03-21 21:28:01'),(6,'','kode8','Voluptate enim accusamus.','4',NULL,'2024-03-21 21:28:01','2024-03-21 21:28:01');
/*!40000 ALTER TABLE `matkuls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_02_14_080504_create_matkuls_table',1),(6,'2024_02_14_100331_create_nilais_table',1),(7,'2024_02_20_100749_admin',1),(8,'2024_02_22_075236_create_semesters_table',1),(9,'2024_02_26_082554_create_sks_table',1),(10,'2024_03_15_044932_create_xamples_table',1),(11,'2024_03_15_060313_create_dosens_table',1),(12,'2024_03_20_054549_create_payments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilais`
--

DROP TABLE IF EXISTS `nilais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nilais` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `matkul_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indeks` bigint unsigned DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilais`
--

LOCK TABLES `nilais` WRITE;
/*!40000 ALTER TABLE `nilais` DISABLE KEYS */;
/*!40000 ALTER TABLE `nilais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indeks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semesters`
--

DROP TABLE IF EXISTS `semesters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `semesters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semesters`
--

LOCK TABLES `semesters` WRITE;
/*!40000 ALTER TABLE `semesters` DISABLE KEYS */;
INSERT INTO `semesters` VALUES (1,'Ganjil','2024-03-21 21:28:06','2024-03-21 21:28:06'),(2,'Genap','2024-03-21 21:28:06','2024-03-21 21:28:06');
/*!40000 ALTER TABLE `semesters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sks`
--

DROP TABLE IF EXISTS `sks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_sks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indeks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sks`
--

LOCK TABLES `sks` WRITE;
/*!40000 ALTER TABLE `sks` DISABLE KEYS */;
/*!40000 ALTER TABLE `sks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin','ut-beatae-dolore','$2y$12$rZO90mkn7eQE0UJk5VZXIe1Wm2Tc32awPXQSq9Vwho3C2cMgBi0ly',NULL,NULL,1,NULL,NULL,NULL,'2024-03-21 21:27:59','2024-03-21 21:27:59'),(2,'17350078','psiregar','cumque-ratione','$2y$12$IbcmwnnQ1wwZP4ywG.GcTOuCE7MZHbtLZ4et8PBPH4jXLfvDIto4G','TI','2020',0,NULL,'2024-03-21 21:28:00','8KVoYQoMThhXu0L26KTPY3mdbzHoI6CJImNRettB12QD185mA973SMoPIEm6','2024-03-21 21:28:00','2024-03-21 21:28:00'),(3,'17350041','sabrina.suryatmi','nihil-optio','$2y$12$IbcmwnnQ1wwZP4ywG.GcTOuCE7MZHbtLZ4et8PBPH4jXLfvDIto4G','TI','2020',0,NULL,'2024-03-21 21:28:00','HeMNgSAwbp','2024-03-21 21:28:00','2024-03-21 21:28:00'),(4,'17350099','naradi.prabowo','ut-ea-neque','$2y$12$IbcmwnnQ1wwZP4ywG.GcTOuCE7MZHbtLZ4et8PBPH4jXLfvDIto4G','TI','2020',0,NULL,'2024-03-21 21:28:00','queR62al3T','2024-03-21 21:28:00','2024-03-21 21:28:00'),(5,'17350038','tpudjiastuti','et-ipsum','$2y$12$IbcmwnnQ1wwZP4ywG.GcTOuCE7MZHbtLZ4et8PBPH4jXLfvDIto4G','TI','2020',0,NULL,'2024-03-21 21:28:00','pv6V9CVWS1','2024-03-21 21:28:00','2024-03-21 21:28:00'),(6,'17350030','mulyono.salahudin','dolorem','$2y$12$IbcmwnnQ1wwZP4ywG.GcTOuCE7MZHbtLZ4et8PBPH4jXLfvDIto4G','TI','2020',0,NULL,'2024-03-21 21:28:00','W4eLigcKEC','2024-03-21 21:28:00','2024-03-21 21:28:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xamples`
--

DROP TABLE IF EXISTS `xamples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `xamples` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `years` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xamples`
--

LOCK TABLES `xamples` WRITE;
/*!40000 ALTER TABLE `xamples` DISABLE KEYS */;
INSERT INTO `xamples` VALUES (1,'2025','2024-03-21 21:28:01','2024-03-21 21:28:01'),(2,'2025','2024-03-21 21:28:01','2024-03-21 21:28:01'),(3,'2022','2024-03-21 21:28:02','2024-03-21 21:28:02'),(4,'2024','2024-03-21 21:28:02','2024-03-21 21:28:02'),(5,'2021','2024-03-21 21:28:02','2024-03-21 21:28:02');
/*!40000 ALTER TABLE `xamples` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-22 11:49:25
