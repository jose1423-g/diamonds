/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - diamonds2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache` */

/*Table structure for table `cache_locks` */

DROP TABLE IF EXISTS `cache_locks`;

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache_locks` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id_img` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_gallery` blob DEFAULT NULL,
  `name_img` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `gallery` */

insert  into `gallery`(`id_img`,`img_gallery`,`name_img`,`status`) values 
(1,'gallery_1.jpeg',NULL,1),
(2,'gallery_3.jpeg',NULL,1),
(3,'gallery_4.jpeg',NULL,1),
(4,'gallery_2.jpeg',NULL,1),
(5,'gallery_5.jpeg',NULL,1),
(6,'gallery_6.jpeg',NULL,1);

/*Table structure for table `info_company` */

DROP TABLE IF EXISTS `info_company`;

CREATE TABLE `info_company` (
  `id_company` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_company` varchar(50) DEFAULT NULL,
  `img_company` varchar(255) DEFAULT NULL,
  `DESCRIPTION` blob DEFAULT NULL,
  `mision` blob DEFAULT NULL,
  `vision` blob DEFAULT NULL,
  `facebook` varchar(225) DEFAULT NULL,
  `instagram` varchar(225) DEFAULT NULL,
  `tiktok` varchar(225) DEFAULT NULL,
  `number1` varchar(50) DEFAULT NULL,
  `number2` varchar(50) DEFAULT NULL,
  `number3` varchar(50) DEFAULT NULL,
  `img_head` varchar(225) DEFAULT NULL,
  `description_en` blob DEFAULT NULL,
  `mision_en` blob DEFAULT NULL,
  `vision_en` blob DEFAULT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `info_company` */

insert  into `info_company`(`id_company`,`name_company`,`img_company`,`DESCRIPTION`,`mision`,`vision`,`facebook`,`instagram`,`tiktok`,`number1`,`number2`,`number3`,`img_head`,`description_en`,`mision_en`,`vision_en`) values 
(1,'Diamond’s Crown Transfers','logo_head.png','Empresa de la industria turística dedicada a ofrecer servicios de transportación en Cancún y sus alrededores. Contamos con todos los permisos federales, licencias y seguros requeridos para desempeñar nuestro servicio con confiabilidad y seguridad para su tranquilidad. ','Ofrecer un servicio de transportación personalizado para brindar tranquilidad y confianza a nuestros clientes nacionales e internacionales para que su primara impresión del destino turístico sea excelente y al mismo tiempo lo haga recomendable, dándole así más valor tanto a nuestro servicio como al destino.','Ser una empresa altamente reconocida en el medio de la transportación turística por sus servicios personalizados, privados y confiables.','https://www.facebook.com/profile.php?id=61559022627314&mibextid=LQQJ4d&rdid=pmgKpACRrySCTlx5&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FptNegEeZb5S71o5S%2F%3Fmibextid%3DLQQJ4d','https://www.instagram.com/crown.diamonds/','https://www.tripadvisor.com.mx/Attraction_Review-g150807-d27725652-Reviews-Diamond_s_Crown_Transfers-Cancun_Yucatan_Peninsula.html','https://wa.me/9981212303','https://wa.me/9981160588','https://wa.me/9981430402','bg_playa.jpg','Company in the tourism industry dedicated to offering transportation services in Cancun and its surroundings. We have all the federal permits, licenses and insurance required to perform our service with reliability and safety for your peace of mind.','Offer a personalized transportation service to provide peace of mind and confidence to our national and international clients so that their first impression of the tourist destination is excellent and at the same time makes it recommendable, thus giving more value to both our service and the destination.','To be a highly recognized company in the field of tourist transportation for its personalized, private and reliable services.');

/*Table structure for table `job_batches` */

DROP TABLE IF EXISTS `job_batches`;

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `job_batches` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2024_06_01_201857_db_diamonds_crown_transfers',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `pricipal_content` */

DROP TABLE IF EXISTS `pricipal_content`;

CREATE TABLE `pricipal_content` (
  `id_cont` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `images` varchar(255) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `titles` varchar(50) DEFAULT NULL,
  `subtitles` varchar(50) DEFAULT NULL,
  `prices` float DEFAULT NULL,
  PRIMARY KEY (`id_cont`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pricipal_content` */

/*Table structure for table `qandans` */

DROP TABLE IF EXISTS `qandans`;

CREATE TABLE `qandans` (
  `id_qandans` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(100) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `question_en` blob DEFAULT NULL,
  `answer_en` blob DEFAULT NULL,
  PRIMARY KEY (`id_qandans`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `qandans` */

insert  into `qandans`(`id_qandans`,`question`,`answer`,`question_en`,`answer_en`) values 
(1,'¿Que tipo de vehículos se utilizan?','Toyota Sienna y Toyota Hiace.','What type of vehicles do you use?','Toyota Sienna & Toyota Hiace'),
(2,'¿El servicio de transporte es privado?','Nuestros servicios son 100% privados.','Is the transportation service private?','Yes, our services are 100% private.'),
(4,'¿Que precios manejan de sus servicios?','Los precios se les proporcionarán al comunicarse con nosotros, ya que varían de acuerdo al lugar a donde serán transportados y al número de pasajeros.','What prices do you have for your services?','Prices will be provided when you contact us, as they vary according to the place where they will be transported and the number of passengers.'),
(5,'¿Se dan servicios de traslados y/o tours?','Claro, realizamos servicios de traslados para eventos, salidas a restaurantes o algún lugar de la zona, tours a zonas arqueológicas y sitios populares del destino para más información contáctanos.','Are transfer services and/or tours provided?','Of course, we provide transfer services for events, trips to restaurants or somewhere in the area, tours to archaeological sites and popular sites in the destination. For more information, contact us.'),
(6,'¿Cuanto tardan los servicios de transportación al lugar de destino?','Dependerá del lugar al que se trasladen, el día y hora del servicio y demás factores comunes de las carreteras. De igual manera, al reservar con nosotros y tener su servicio específico, se les podrá brindar horarios más precisos de su viaje.','How long do transportation services take to the destination?','It will depend on the place to which they travel, the day and time of the service and other common road factors. Likewise, by booking with us and having your specific service, we can provide you with more precise schedules of your trip.'),
(7,'¿Como y cuando debo pagar el servicio?','El pago podrá ser en efectivo o por transferencia bancaria a la cuenta de la empresa. La reserva se podrá realizar con nosotros sin cargo alguno. El pago/cargo puede realizarse antes o hasta el momento en el que se proporcione el servicio. ','How and when should I pay for the service?','Payment may be in cash or by bank transfer to the company account. The reservation can be made with us without any charge. Payment/charge may be made before or up to the time the service is provided.');

/*Table structure for table `reviews` */

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id_rev` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `review_text` varchar(250) DEFAULT NULL,
  `review_img` varchar(255) DEFAULT NULL,
  `review_vid` varchar(255) DEFAULT NULL,
  `review_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `reviews` */

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id_services` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) DEFAULT NULL,
  `tittle` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tittle_en` blob DEFAULT NULL,
  `description_en` blob DEFAULT NULL,
  PRIMARY KEY (`id_services`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `services` */

insert  into `services`(`id_services`,`icon`,`tittle`,`description`,`tittle_en`,`description_en`) values 
(1,'airplane.png','Aeropuerto','Al hospedaje ida y/o vuelta.','Airport','To the accommodation round trip.'),
(2,'car.png','Cancún','Cualquier zona de cancún ida y/o vuelta.','Cancun','Any area of ​​Cancun round trip.'),
(3,'clock.png','Servicio de transportación','Renta de transportacion por hora.','Transportation service','Transportation rental per hour.'),
(4,'car.png','Tulúm','Cualquier zona de tulúm ida y/o vuelta.','Tulum','Any area of ​​Tulúm round trip.'),
(5,'car.png','Riviera Maya','Cualquier lugar de la riviera maya.','Mayan Riviera','Anywhere in the Mayan Riviera.'),
(6,'car.png','Playa del carmen','Cualquier lugar de playa del carmen ida y/o vuelta.','Carmen beach','Anywhere in Playa del Carmen round trip.'),
(7,'car.png','Tour Chichén Itzá','Incluye traslado a zona arqueológica, un cenote y Valladolid. No incluye entradas.','Chichen Itza Tour','Includes transfer to archaeological zone, a cenote and Valladolid. Does not include tickets.');

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_last_activity` (`last_activity`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values 
('432qsssfjqqVWvL7hGdR6uFXIx8kludTHPHNtRWr',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRVcybFJSUEoyeDFaZ0tNTzl3MURGR2pRNkFFYmVKNDV3ajBUcWZnUSI7czo2OiJsb2NhbGUiO3M6MjoiZXMiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1724797564),
('63BDTry8OMnFCcDSTk9f6u9ZrOh2lNPb9biWAP1Y',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV3lxZzlMZjNWZlBQRTZ6MGdPVm9XZlM5M3ZMSnJFcVJNc2NWN0FvRiI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZ2FsbGVyeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1729619546),
('9VSGx6jSYhlCpF8mNlYBOEZ4DtoRzfHyiMekc4x2',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQkpQSlZrRnIzMTlQMjlIZ1E4WVU3TnhodEhkM3lsd3RvTWZGNk9PUyI7czo2OiJsb2NhbGUiO3M6MjoiZXMiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvRnJlcXVlbnRseV9hc2tlZF9xdWVzdGlvbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1723744258),
('VILrxyZwyV2pU5abO7S9R3CDtb1JOgqmyeP2gtNv',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUHdiREprb3B6RjJSY1p6QVQ2cFdRNTllSUNhMkNzMTZpRjlFV1BweiI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO319',1724038600);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
