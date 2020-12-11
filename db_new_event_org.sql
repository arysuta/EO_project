/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.31-MariaDB : Database - db_new_event_org
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_new_event_org` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_new_event_org`;

/*Table structure for table `detgambars` */

DROP TABLE IF EXISTS `detgambars`;

CREATE TABLE `detgambars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `promo_id` int(11) DEFAULT NULL,
  `nama_gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `promo_id` (`promo_id`),
  CONSTRAINT `detgambars_ibfk_1` FOREIGN KEY (`promo_id`) REFERENCES `promos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detgambars` */

insert  into `detgambars`(`id`,`promo_id`,`nama_gambar`,`ukuran`,`created_at`,`updated_at`) values (25,33,'berris-cuisine-kiddie-birthday-party-catering-caterer-event-stylist-styling-laguna-philippines-1.jpg',NULL,NULL,NULL),(26,33,'sparkwell-birthday-event-organiser-dombivli-west-thane-birthday-party-organisers-0qgh1.jpg',NULL,NULL,NULL),(31,35,'Sallee-750x498.png','814323','2018-05-16 13:46:15','2018-05-16 13:46:15'),(32,35,'SL3.jpg','243140','2018-05-16 13:46:16','2018-05-16 13:46:16'),(33,36,'DSC_0412_thumb2.jpg','99582','2018-05-16 13:58:33','2018-05-16 13:58:33'),(34,36,'SHELTER-Wedding-Hall-Party-Marquee-Luxury-Reception-Tent-Outdoor-Catering-Venue-223.jpg','160281','2018-05-16 13:58:33','2018-05-16 13:58:33'),(35,37,'Birthday_Event_in_Satara_298.JPG','108095','2018-05-16 14:00:56','2018-05-16 14:00:56'),(36,38,'flowers2.jpg','160124','2018-05-16 14:03:04','2018-05-16 14:03:04'),(37,38,'stanley(pp_w480_h319).jpg','120616','2018-05-16 14:03:04','2018-05-16 14:03:04'),(38,39,'bootie-sf-nye-concert_s345x230.jpg','112948','2018-05-16 14:06:55','2018-05-16 14:06:55'),(39,39,'old-skool-cafe.jpg','240593','2018-05-16 14:06:55','2018-05-16 14:06:55');

/*Table structure for table `kategoris` */

DROP TABLE IF EXISTS `kategoris`;

CREATE TABLE `kategoris` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kategori` enum('Birthday Event','Wedding Event','Graduation Event') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategoris` */

insert  into `kategoris`(`id`,`kategori`,`created_at`,`updated_at`) values (1,'Birthday Event',NULL,NULL),(2,'Graduation Event',NULL,NULL),(3,'Wedding Event',NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (7,'2014_10_12_000000_create_users_table',1),(8,'2014_10_12_100000_create_password_resets_table',1),(9,'2018_03_26_112119_entrust_setup_tables',1),(10,'2018_03_30_055515_create_kategori_table',1),(11,'2018_04_02_101113_create_transaksi_table',1),(12,'2018_04_04_071711_create_promo_table',1),(13,'2018_04_13_114647_det_gambar',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('arysuta@mail.com','$2y$10$CXtAVRd1OL2L6BgIqa0qBuJJMqkE/Em82SDBkR33NdMSCT3Q8uFUu','2018-05-20 08:50:34');

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_role` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `promos` */

DROP TABLE IF EXISTS `promos`;

CREATE TABLE `promos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `promo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_book` double DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `Harga` double DEFAULT NULL,
  `stat` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori_id` (`kategori_id`),
  CONSTRAINT `promos_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `promos` */

insert  into `promos`(`id`,`promo`,`kategori_id`,`lokasi`,`harga_book`,`deskripsi`,`Harga`,`stat`,`created_at`,`updated_at`) values (33,'Kila Infinity Package',1,'Jl. By Pass Ngurah Rai No.88',2000,'This Event Package will make your birthday so memorable. With beautiful places and luxurious service, you will be enjoyable to celebrate your birthday here!\r\n\r\nInclusions :\r\n• Minimum 30 pax\r\n• Decorations (optional)\r\n• Standard sound system and lighting\r\n• Buffet or Ala Carte menu\r\n• Western or Asian Cuisines\r\n• Venue for up to 300 pax\r\n• Roof top plaza by Langit Bar Lounge & Dining',6500,'on',NULL,'2018-05-16 13:44:39'),(35,'The Perfect Package',3,'Jl. Gn. Payung I, Benoa, Kuta Sel., Kabupaten Badung, Bali',3500,'Come and join with us! Include :\r\n\r\nBEFORE CEREMONY\r\nReturn transfer for couple\r\nPre-wedding meeting\r\nMake up & hair do for bride\r\n\r\nPHOTO\r\nProfessional photographer (4 hours) 60+edited, high-resolution photos that are sent via Download link.\r\nThree location for photoshoot: beach, temple, cliff sunset time\r\n\r\nDECORATIONS\r\n100-300 seat\r\nDreamcatcher or Garland arch or Round Arch\r\n2 aisle markers to match arch\r\nFlower Road\r\nAltar table\r\nRing pillow/ ring flower\r\nHand bouquet and boutonniere\r\nFlower shower\r\nHairpiece for the bride\r\nWelcome board\r\nRetro bicycle decorated with fresh flowers\r\nOne tier cake\r\nBottle of wine\r\nDecorated glasses\r\nProps for photosession\r\n\r\nCEREMONY\r\nCelebrant\r\nLife music during ceremony. 1 guitar + 1 vocal 45 minute\r\nDove release\r\n\r\nAFTER CEREMONY\r\nRomantic dinner on the cliff for couple\r\nRomantic dinner decoration\r\nSky latterns 2 pcs\r\n\r\nDOCUMENTS\r\nMemory certificate\r\nAll taxes',8000,'on','2018-05-16 13:46:15','2018-05-16 13:46:15'),(36,'Decrina Package',2,'Sheraton Bali Kuta Resort Jalan Pantai Kuta, 80361 Kuta, Indonesia',2000,'This package includes :\r\n\r\nPHOTO\r\nProfessional photographer (6 hours), high-resolution photos that are sent via Download link.\r\nPhotobooth 6 hour\r\n\r\nDECORATIONS\r\n100-300 seat\r\nTheme Decoration\r\nWelcome board\r\nCostum Welcome Drink\r\nCostum Banner\r\nA Special Gift for the Graduate\r\nLive music (60 minute)\r\nDJ for 3 hours\r\nHost and assistant and full team of staff \r\nfood Buffet (10 Menu)\r\n2 Dozen Themed Cupcakes',7000,'on','2018-05-16 13:58:33','2018-05-16 13:58:33'),(37,'Wonderfull Birthday Package',1,'Cascade Garden Lounge & Bar, The Laguna, A Luxury Collection Resort & Spa,  Nusa Dua Lot N2, Bali, Indonesia',1500,'SERVICE \r\nDecoration for birthday party\r\nServers to make sure your drinks are never empty\r\nBartenders to prepare your favorite cocktails\r\nFire dancer\r\nPremium alcohol bottles of your choice\r\nEnough ice-cold beer and mixed drinks for the entire party\r\nFull bar set-up (including mixers, ice, garnishes, etc.)\r\nPrivate DJ, sound system and lighting\r\nParty buses to the venue and out to the clubs after the villa party\r\nFinger food Buffet prepared by our in-house chef\r\nCustom birthday cake based on preferences\r\nHost and assistant and full team of staff for the night of the event',5000,'on','2018-05-16 14:00:56','2018-05-16 14:00:56'),(38,'Morabito Cliff Package',3,'Morabito Art Cliff (Temple Terrace) Jl. Pantai Bingin, Pecatu, Bingin,',2000,'Before event: Consulting by your wedding planner \r\n• Pre-wedding meeting-presentation \r\n• 2 nights at Santorini Terrace Penthouse with jacuzzi in 1 bedroom \r\n• Relaxing massage for two \r\n\r\nDuring & After event:  \r\n• Premium photographer with assistant (1hr) \r\n• Professional make up artist \r\n• Romantic dinner for two (Balinese menu) \r\n• Team of highly experienced organizers \r\n• Return transfer \r\n• English speaking celebrant\r\n• Customised background music \r\n• Commemorative certificate\r\n Wedding decorations: \r\n• Welcome flower arrangement on the bed \r\n• Temple Terrace decorations (no flower arch)\r\n• Altar table \r\n• Bridal bouquet and boutonniere \r\n• Petal path of white flowers petals \r\n• Flower shower & pillow for rings \r\n• Welcome board Props for photosession',6500,'on','2018-05-16 14:03:04','2018-05-16 14:03:04'),(39,'UT Graduation Package',2,'Hotel Dafam Teraskita Jakarta Jl. MT Haryono Kav. 10A, Jakarta Timur',4000,'Inclusive of the following privileges: \r\nUnlimited serving of soft drinks and chilled orange juice for 2 hours \r\nComplimentary use of in-house PA system, CD player and microphones\r\nFabulous built-in lighting system\r\nGlamorous table cloths and seat covers for selection\r\nFresh flower centerpiece at reception table and dining tables\r\nFree use of lucky draw box or raffle drum\r\nComplimentary 3 car parking spaces for the event\r\nA glass of welcome fruit punch to be served upon guest arrived\r\n\r\n Includes:\r\n• Luxury accommodations\r\n• UT Austin transportation services to and from the hotel\r\n• Option to add on discounted parking',9500,'on','2018-05-16 14:06:55','2018-05-16 14:06:55');

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_user` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `transaksis` */

DROP TABLE IF EXISTS `transaksis`;

CREATE TABLE `transaksis` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `promo_id` int(10) DEFAULT NULL,
  `jenis_bank` enum('bni','bri','bca','mandiri') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rek` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atasnama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pesan` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` enum('waiting','decline','cancel','accepted') COLLATE utf8mb4_unicode_ci DEFAULT 'waiting',
  `bukti_bayar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksi_id_foreign` (`promo_id`),
  KEY `transaksi_id_kategori_foreign` (`jenis_bank`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `transaksis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `transaksis_ibfk_2` FOREIGN KEY (`promo_id`) REFERENCES `promos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksis` */

insert  into `transaksis`(`id`,`user_id`,`promo_id`,`jenis_bank`,`no_rek`,`atasnama`,`tanggal_pesan`,`status`,`bukti_bayar`,`created_at`,`updated_at`) values (5,2,39,'bni','13413123124','Ary Suta','2018-05-17 21:35:00','cancel','bukti_bayar_5.png','2018-05-17 13:35:00','2018-05-19 09:28:07'),(17,2,37,'mandiri','192399321','Suta Sanjaya','2018-05-17 22:04:43','cancel','bukti_bayar_17.JPG','2018-05-17 14:04:43','2018-05-19 09:28:58'),(18,2,37,'mandiri','192399321','Suta Sanjaya','2018-05-17 22:06:21','cancel',NULL,'2018-05-17 14:06:21','2018-05-19 08:59:09'),(19,2,37,'mandiri','192399321','Suta Sanjaya','2018-05-17 22:10:58','cancel',NULL,'2018-05-17 14:10:58','2018-05-19 08:59:23'),(20,2,36,'bni','081213912','Suta 2','2018-05-19 15:55:38','accepted',NULL,'2018-05-19 07:55:37','2018-05-20 04:11:46'),(21,2,37,'mandiri','812938123123','Gede Ary','2018-05-19 16:11:35','decline',NULL,'2018-05-19 08:11:35','2018-05-20 04:14:47'),(22,4,33,'bni','91391231','asdasdasda','2018-09-29 22:48:46','waiting',NULL,'2018-09-29 14:48:46','2018-09-29 14:48:46');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kel` enum('pria','wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','banned') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`admin`,`phone`,`jenis_kel`,`address`,`status`,`remember_token`,`created_at`,`updated_at`,`email`,`password`) values (1,'arysuta',1,'081555','pria','panjer','aktif','uOeHV9Zafd07jL3jlipy77S9dZWHqM38op7lDXq3aQKTj5QpKYjsRUhQXAg6','2018-04-04 07:46:55','2018-04-05 06:22:19','arysunia@gmail.com','$2y$10$0MjcV1VsT8HQAyI4KJB0c.2.GEzVDqq6tt3tkTa8RZxY1v6pJFIeC'),(2,'Suta Sanjaya',0,'081999123455','pria','Panjer','aktif','BZI7vNPHNfZa4CAuOuN1GZXGNodCia4C1MstFe1NqTmurLp3bGCYPEdud9hV','2018-05-17 02:20:55','2018-05-20 07:29:32','arysuta@mail.com','$2y$10$9nk0XBS.PClYfdJJkw2GHuxvTMlGBsCCIJzsGgjimUrzj2IPPqr9G'),(3,'Gede Sanjay',0,'08155512345','pria','Renon','aktif','CqkyuGDoyrGPgb7LWaDWkNlPz9iBYvziYhL8FhlOrTgu3VMNJLWiERHNUwr3','2018-05-21 01:45:34','2018-05-21 01:45:34','gede@mail.com','$2y$10$ybp.GhCgdxpmj1NTXMiSi.P35u8EqCTjuC.9yxvUOCXIIuMMCg1X2'),(4,'haris wibawa',0,'','pria','','aktif','WXOdblOZTzak93r4Y93ngaKykNk8luEplUU1laVQ78A1btJbXxNDZOrhqc6M','2018-09-28 03:17:01','2018-09-28 03:17:01','haris@mail.com','$2y$10$jBVg5erNye8mY3Q0isPotuApcgD3bKZn.XTDRFirTkebG.7OBi9cW'),(5,'gedeee',0,'08177777','pria','pajer','aktif',NULL,'2018-10-06 12:28:34','2018-10-06 12:28:34','gsuta@mail.com','$2y$10$0E9eJAYqUt9X4DasnEjGcONWk/8JWxc34R2v1hDzdD3H1BI1YMS9.'),(6,'ary123',1,'123124','pria','Renon','aktif','Q3wrDUQJlTXZqUM19gGO2DjsV8HhVXu262eReq3ZVmsOw9kzJInAvudbvzlU','2019-04-15 13:22:03','2019-04-15 13:22:03','ary@mail2.com','$2y$10$DUEYxRGvkGwXSusn.lWxR.AcHqIvcAY40Z122cxc5A11h5nJ1xKGu'),(7,'gede',0,'123456','pria','panjar','aktif',NULL,'2020-12-11 02:44:33','2020-12-11 02:44:33','gede@gmail.com','$2y$10$WvD8xtf1AVk50N3xdkxLPeEDw45zYVt.EW0JAvu.zgWnnZ2jwx8mO');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
