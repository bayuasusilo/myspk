# Host: localhost  (Version 5.5.5-10.4.10-MariaDB)
# Date: 2020-04-10 10:25:10
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "bobot"
#

DROP TABLE IF EXISTS `bobot`;
CREATE TABLE `bobot` (
  `id_bobot` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nilai` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "bobot"
#


#
# Structure for table "hasil"
#

DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `jenis_produk` int(11) NOT NULL,
  `bulan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tahun` year(4) NOT NULL DEFAULT 2019,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hasil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "hasil"
#

INSERT INTO `hasil` VALUES (310619,31,'Jun',2019,'2019-06-18 00:45:41','2019-06-18 00:45:41'),(310719,31,'Jul',2019,'2019-07-18 02:06:47','2019-07-18 02:06:47'),(400719,40,'Jul',2019,'2019-07-18 01:28:49','2019-07-18 01:28:49');

#
# Structure for table "hasil_detail"
#

DROP TABLE IF EXISTS `hasil_detail`;
CREATE TABLE `hasil_detail` (
  `id_hasil_detail` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_hasil` int(11) NOT NULL,
  `id_alternatif` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `total` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_hasil_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "hasil_detail"
#

INSERT INTO `hasil_detail` VALUES (140,310619,'2',0.6515,'2019-06-18 00:45:41','2019-06-18 00:45:52',1),(141,310619,'3',0.788,'2019-06-18 00:45:41','2019-06-18 00:45:52',1),(142,310619,'4',0.9435,'2019-06-18 00:45:41','2019-06-18 00:45:41',0),(143,310619,'5',0.772,'2019-06-18 00:45:41','2019-06-18 00:45:52',1),(144,310619,'13',0.7325,'2019-06-18 00:45:41','2019-06-18 00:45:41',0),(145,400719,'21',0.87533333333333,'2019-07-18 01:28:49','2019-07-18 01:28:57',1),(146,400719,'22',0.655,'2019-07-18 01:28:49','2019-07-18 01:28:49',0),(147,310719,'2',0.6515,'2019-07-18 02:06:47','2019-07-18 02:06:47',0),(148,310719,'3',0.788,'2019-07-18 02:06:47','2019-07-18 02:06:53',1),(149,310719,'4',0.9435,'2019-07-18 02:06:47','2019-07-18 02:06:53',1),(150,310719,'5',0.772,'2019-07-18 02:06:47','2019-07-18 02:06:47',0),(151,310719,'13',0.7325,'2019-07-18 02:06:47','2019-07-18 02:06:47',0);

#
# Structure for table "jenis_produk"
#

DROP TABLE IF EXISTS `jenis_produk`;
CREATE TABLE `jenis_produk` (
  `id_jenis_produk` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jenis_produk` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "jenis_produk"
#

INSERT INTO `jenis_produk` VALUES (31,'Produk 1','2019-04-06 09:58:39','2019-07-18 00:59:19'),(39,'Produk 2','2019-04-07 06:50:12','2019-07-18 00:59:25'),(40,'Produk 3','2019-07-18 01:24:36','2019-07-18 01:24:36');

#
# Structure for table "kriteria"
#

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL DEFAULT 0,
  `nama_kriteria` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bobot_kriteria` decimal(10,3) DEFAULT 0.000,
  `atribut_kriteria` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "kriteria"
#

INSERT INTO `kriteria` VALUES (1,'Quality',0.291,1,NULL,'2019-07-22 12:17:18'),(2,'Cost',0.220,2,NULL,'2019-07-22 12:17:18'),(3,'Delivery',0.153,2,NULL,'2019-07-22 12:17:18'),(4,'Flexibility',0.230,1,NULL,'2019-07-22 12:17:18'),(5,'Responsiveness',0.107,1,NULL,'2019-07-22 12:17:18');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (11,'2014_10_12_000000_create_users_table',1),(12,'2014_10_12_100000_create_password_resets_table',1),(15,'2019_03_26_040312_create_jenis_produk_table',2),(16,'2019_04_04_053004_create_supplier_table',2),(19,'2019_04_23_033325_create_nilai_table',3),(20,'2019_04_26_054948_create_kriteria_table',4),(21,'2019_05_03_065907_create_bobot_table',5),(24,'2019_05_06_000232_create_nilai_kriteria_alternatif_table',6),(25,'2019_05_06_025154_create_nilai_alternatif_table',6),(26,'2019_05_20_063530_create_hasil_table',7),(27,'2019_05_20_070414_create_hasil_detail_table',7);

#
# Structure for table "nilai"
#

DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `id_nilai` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nilai` double(3,2) DEFAULT NULL,
  `keterangan_nilai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "nilai"
#

INSERT INTO `nilai` VALUES (1,1.00,'1/1 Sama penting dengan',NULL,'2019-04-26 05:47:53'),(2,2.00,'2/1 Mendekati sedikit lebih penting dari',NULL,NULL),(3,3.00,'3/1 Sedikit lebih penting dari',NULL,NULL),(4,4.00,'4/1 Mendekati lebih penting dari\t',NULL,NULL),(5,5.00,'5/1 Lebih penting dari',NULL,NULL),(6,6.00,'6/1 Mendekati sangat penting dari\t',NULL,NULL),(7,7.00,'7/1 Sangat penting dari\t',NULL,NULL),(8,8.00,'8/1 Mendekati mutlak dari\t',NULL,NULL),(9,9.00,'9/1 Mutlak sangat penting dari\t',NULL,NULL),(10,0.11,'1/9 Mutlak sangat penting dari\t',NULL,NULL),(11,0.25,'1/8 Mendekati mutlak dari',NULL,NULL),(12,0.14,'1/7 Sangat penting dari\t',NULL,NULL),(13,0.16,'1/6 Mendekati sangat penting dari\t',NULL,NULL),(14,0.20,'1/5 Lebih penting dari',NULL,NULL),(15,0.25,'1/4 Mendekati lebih penting dari\t',NULL,NULL),(16,0.33,'1/3 Sedikit lebih penting dari',NULL,NULL),(17,0.50,'1/2 Mendekati sedikit lebih penting dari',NULL,NULL);

#
# Structure for table "nilai_alternatif"
#

DROP TABLE IF EXISTS `nilai_alternatif`;
CREATE TABLE `nilai_alternatif` (
  `id_nilai_alternatif` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nilai_alternatif`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "nilai_alternatif"
#

INSERT INTO `nilai_alternatif` VALUES (21,1,2,5,'2019-07-13 10:32:30','2019-07-17 10:57:32'),(22,2,2,10,'2019-07-13 10:32:30','2019-07-17 10:57:32'),(23,3,2,13,'2019-07-13 10:32:30','2019-07-17 10:57:32'),(24,4,2,19,'2019-07-13 10:32:30','2019-07-17 10:57:32'),(25,5,2,25,'2019-07-13 10:32:30','2019-07-13 10:32:30'),(31,1,3,4,'2019-07-13 10:34:50','2019-07-13 10:34:50'),(32,2,3,10,'2019-07-13 10:34:50','2019-07-13 10:34:50'),(33,3,3,15,'2019-07-13 10:34:50','2019-07-17 10:57:41'),(34,4,3,20,'2019-07-13 10:34:50','2019-07-17 10:57:41'),(35,5,3,24,'2019-07-13 10:34:50','2019-07-13 10:34:50'),(41,1,4,3,'2019-07-17 10:57:59','2019-07-17 10:57:59'),(42,2,4,10,'2019-07-17 10:57:59','2019-07-17 10:57:59'),(43,3,4,15,'2019-07-17 10:57:59','2019-07-17 10:57:59'),(44,4,4,19,'2019-07-17 10:57:59','2019-07-17 10:57:59'),(45,5,4,25,'2019-07-17 10:57:59','2019-07-17 10:57:59'),(51,1,5,4,'2019-07-17 10:58:24','2019-07-17 10:58:24'),(52,2,5,10,'2019-07-17 10:58:24','2019-07-17 10:58:24'),(53,3,5,26,'2019-07-17 10:58:24','2019-07-17 10:58:24'),(54,4,5,19,'2019-07-17 10:58:24','2019-07-17 10:58:24'),(55,5,5,25,'2019-07-17 10:58:24','2019-07-17 10:58:24'),(131,1,13,4,'2019-07-17 10:59:17','2019-07-17 10:59:17'),(132,2,13,10,'2019-07-17 10:59:17','2019-07-17 10:59:17'),(133,3,13,15,'2019-07-17 10:59:17','2019-07-17 10:59:17'),(134,4,13,20,'2019-07-17 10:59:17','2019-07-17 10:59:17'),(135,5,13,25,'2019-07-17 10:59:17','2019-07-17 10:59:17'),(211,1,21,5,'2019-07-18 01:26:30','2019-07-18 01:41:39'),(212,2,21,9,'2019-07-18 01:26:30','2019-07-18 01:41:39'),(213,3,21,26,'2019-07-18 01:26:30','2019-07-18 01:41:39'),(214,4,21,19,'2019-07-18 01:26:30','2019-07-18 01:41:40'),(215,5,21,25,'2019-07-18 01:26:31','2019-07-18 01:41:40'),(221,1,22,5,'2019-07-18 01:28:12','2019-07-18 01:28:12'),(222,2,22,9,'2019-07-18 01:28:12','2019-07-18 01:28:12'),(223,3,22,26,'2019-07-18 01:28:12','2019-07-18 01:28:12'),(224,4,22,19,'2019-07-18 01:28:12','2019-07-18 01:28:12'),(225,5,22,22,'2019-07-18 01:28:12','2019-07-18 01:28:12');

#
# Structure for table "nilai_kriteria_alternatif"
#

DROP TABLE IF EXISTS `nilai_kriteria_alternatif`;
CREATE TABLE `nilai_kriteria_alternatif` (
  `id_nilai_kriteria_alternatif` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kriteria` int(11) NOT NULL,
  `keterangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nilai_kriteria_alternatif`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "nilai_kriteria_alternatif"
#

INSERT INTO `nilai_kriteria_alternatif` VALUES (1,1,'Sangat Baik',5,'2019-05-20 07:18:55','2019-05-20 07:18:55'),(2,1,'Baik',4,'2019-05-20 07:19:07','2019-05-20 07:19:07'),(3,1,'Cukup',3,'2019-05-20 07:19:16','2019-05-20 07:19:16'),(4,1,'Kurang',2,'2019-05-20 07:19:26','2019-05-20 07:19:26'),(5,1,'Sangat Kurang',1,'2019-05-20 07:19:39','2019-05-20 07:19:39'),(6,2,'Sangat Baik',5,'2019-05-20 07:20:12','2019-05-20 07:20:12'),(7,2,'Baik',4,'2019-05-20 07:20:24','2019-05-20 07:20:24'),(8,2,'Cukup',3,'2019-05-20 07:20:37','2019-05-20 07:20:37'),(9,2,'Kurang',2,'2019-05-20 07:20:49','2019-05-20 07:20:49'),(10,2,'Sangat Kurang',1,'2019-05-20 07:21:07','2019-05-20 07:21:07'),(11,3,'Sangat Baik',5,'2019-05-20 07:21:32','2019-05-20 07:21:32'),(12,3,'Baik',4,'2019-05-20 07:21:40','2019-05-20 07:21:40'),(13,3,'Cukup',3,'2019-05-20 07:21:49','2019-05-20 07:21:49'),(15,3,'Sangat Kurang',1,'2019-05-20 07:22:05','2019-05-20 07:22:05'),(16,4,'Sangat Baik',5,'2019-05-20 07:22:30','2019-05-20 07:22:30'),(17,4,'Baik',4,'2019-05-20 07:22:37','2019-05-20 07:22:37'),(18,4,'Cukup',3,'2019-05-20 07:22:48','2019-05-20 07:22:48'),(19,4,'Kurang',2,'2019-05-20 07:22:59','2019-05-20 07:22:59'),(20,4,'Sangat Kurang',1,'2019-05-20 07:23:06','2019-05-20 07:23:06'),(21,5,'Sangat Baik',5,'2019-05-20 07:23:16','2019-05-20 07:23:16'),(22,5,'Baik',4,'2019-05-20 07:23:24','2019-05-20 07:23:24'),(23,5,'Cukup',3,'2019-05-20 07:23:32','2019-05-20 07:23:32'),(24,5,'Kurang',2,'2019-05-20 07:23:40','2019-05-20 07:23:40'),(25,5,'Sangat Kurang',1,'2019-05-20 07:23:47','2019-05-20 07:23:47'),(26,3,'kurang',2,'2019-06-18 05:14:51','2019-06-18 05:14:51');

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#


#
# Structure for table "supplier"
#

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `id_supplier` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alamat_supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tlpn_supplier` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `id_jenis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "supplier"
#

INSERT INTO `supplier` VALUES (2,'s1','a1','0215347816','31','2019-04-07 05:18:47','2019-07-17 23:24:52'),(3,'s2','a2','0216199937','31','2019-04-07 06:50:24','2019-07-17 23:25:33'),(4,'s3','a3','0818870151','31','2019-05-06 05:11:03','2019-07-17 23:26:09'),(5,'s4','a4','02153675909','31','2019-05-07 03:29:24','2019-07-17 23:26:46'),(13,'s5','a5','085945154696','31','2019-07-07 00:38:15','2019-07-22 09:18:33'),(15,'s6','a6','0215308964','31','2019-07-17 23:28:15','2019-07-17 23:28:15'),(17,'s7','a7','0215485257','39','2019-07-18 01:10:57','2019-07-18 01:10:57'),(18,'s8','a8','0215481878','39','2019-07-18 01:11:19','2019-07-18 01:11:19'),(19,'s9','a9','02158906059','39','2019-07-18 01:11:52','2019-07-18 01:11:52'),(20,'s10','a10','0215847819','39','2019-07-18 01:12:07','2019-07-18 01:12:07'),(21,'s11','a11','0817674836','40','2019-07-18 01:25:07','2019-07-18 01:25:07'),(22,'s12','a12','0874657874','40','2019-07-18 01:27:52','2019-07-18 01:27:52');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (15,'admin@admin.com','admin@admin.com',NULL,'$2y$10$rAcFAGaRS4FReS8fJ8xuS.h5JEKQ7gAA.efsgejtp9Mbptk1et/qq','','iJfwcx3LhB79kQf5Rf5DV3hSDqdeHcf5Qdtc7SrB','2020-02-24 05:52:08','2020-02-24 05:52:08');
