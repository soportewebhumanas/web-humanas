-- MySQL dump 10.13  Distrib 8.4.11, for Linux (x86_64)
--
-- Host: localhost    Database: humanas
-- ------------------------------------------------------
-- Server version	8.4.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docentes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asignaturas` json DEFAULT NULL,
  `especialidad` json NOT NULL,
  `CVFile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CVLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curricular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modalidad_id` bigint unsigned NOT NULL,
  `lugar_id` bigint unsigned DEFAULT NULL,
  `tipo_id` bigint unsigned NOT NULL,
  `programa_id` bigint unsigned DEFAULT NULL,
  `responsables` json NOT NULL,
  `colaboradores` json DEFAULT NULL,
  `destinatarios` json DEFAULT NULL,
  `carga_horaria` int DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `resolucion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlace_inscripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eventos_lugar_id_foreign` (`lugar_id`),
  KEY `eventos_modalidad_id_foreign` (`modalidad_id`),
  KEY `eventos_tipo_id_foreign` (`tipo_id`),
  CONSTRAINT `eventos_lugar_id_foreign` FOREIGN KEY (`lugar_id`) REFERENCES `lugares` (`id`),
  CONSTRAINT `eventos_modalidad_id_foreign` FOREIGN KEY (`modalidad_id`) REFERENCES `modalidades` (`id`),
  CONSTRAINT `eventos_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipos_eventos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `llamadosSeleccion`
--

DROP TABLE IF EXISTS `llamadosSeleccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `llamadosSeleccion` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` int NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dedicacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asignatura` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrera` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio_inscripcion` datetime NOT NULL,
  `fin_inscripcion` datetime NOT NULL,
  `enlace_inscripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `resolucion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acta_final` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `llamadosSeleccion`
--

LOCK TABLES `llamadosSeleccion` WRITE;
/*!40000 ALTER TABLE `llamadosSeleccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `llamadosSeleccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugares`
--

DROP TABLE IF EXISTS `lugares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lugares` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares`
--

LOCK TABLES `lugares` WRITE;
/*!40000 ALTER TABLE `lugares` DISABLE KEYS */;
INSERT INTO `lugares` VALUES (1,'Santa Rosa','2026-11-04 21:40:10','2026-11-04 21:40:10'),(2,'General Pico','2026-11-04 21:40:10','2026-11-04 21:40:10'),(3,'General Acha','2026-11-04 21:40:10','2026-11-04 21:40:10');
/*!40000 ALTER TABLE `lugares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_04_16_000002_create_modalidades_table',1),(5,'2021_04_16_000003_create_lugares_table',1),(6,'2021_04_16_000004_create_tipos_eventos_table',1),(7,'2021_04_16_000005_create_eventos_table',1),(8,'2021_04_16_009001_add_foreigns_to_eventos_table',1),(9,'2021_04_16_215025_create_sessions_table',1),(10,'2021_04_16_215038_create_permission_tables',1),(11,'2021_05_08_012859_create_llamados_seleccion_table',1),(12,'2021_05_16_100816_create_pasantias_table',1),(13,'2021_05_27_222606_create_parametros_table',1),(14,'2021_06_21_120137_create_publicaciones_table',1),(15,'2021_07_03_164920_create_programas_institucionales_table',1),(16,'2021_07_03_183212_create_docentes_table',1),(17,'2021_09_29_135923_add_active_to_pasantias_table',1),(18,'2021_10_12_203510_change_fields_to_nullable_in_eventos_table',1),(19,'2021_11_05_082957_create_noticias_table',1),(20,'2021_11_25_134144_add_resumen_to_noticias_table',1),(21,'2022_04_06_195356_add_color_to_programas_table',1),(22,'2022_04_06_205816_add_orden_to_programas_table',1),(23,'2022_04_10_214154_accept_null_observacion_eventos_table',1),(24,'2026_11_04_213817_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modalidades`
--

DROP TABLE IF EXISTS `modalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modalidades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidades`
--

LOCK TABLES `modalidades` WRITE;
/*!40000 ALTER TABLE `modalidades` DISABLE KEYS */;
INSERT INTO `modalidades` VALUES (1,'presencial','2026-11-04 21:40:08','2026-11-04 21:40:08'),(2,'a distancia','2026-11-04 21:40:08','2026-11-04 21:40:08');
/*!40000 ALTER TABLE `modalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (2,'App\\Models\\User',1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `noticias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `resumen` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametros`
--

DROP TABLE IF EXISTS `parametros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parametros` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametros`
--

LOCK TABLES `parametros` WRITE;
/*!40000 ALTER TABLE `parametros` DISABLE KEYS */;
/*!40000 ALTER TABLE `parametros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasantias`
--

DROP TABLE IF EXISTS `pasantias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pasantias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `organismo_solicitante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int NOT NULL,
  `duracion` int NOT NULL,
  `destinatario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio_inscripcion` datetime NOT NULL,
  `fin_inscripcion` datetime NOT NULL,
  `requisitos` json NOT NULL,
  `tareas` json NOT NULL,
  `formulario_inscripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentacion_obligatoria` json NOT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasantias`
--

LOCK TABLES `pasantias` WRITE;
/*!40000 ALTER TABLE `pasantias` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasantias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'list programas','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(2,'view programas','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(3,'create programas','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(4,'update programas','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(5,'delete programas','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(6,'list publicacion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(7,'view publicacion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(8,'create publicacion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(9,'update publicacion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(10,'delete publicacion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(11,'list llamadosSeleccion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(12,'view llamadosSeleccion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(13,'create llamadosSeleccion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(14,'update llamadosSeleccion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(15,'delete llamadosSeleccion','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(16,'list pasantias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(17,'view pasantias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(18,'create pasantias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(19,'update pasantias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(20,'delete pasantias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(21,'list noticias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(22,'view noticias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(23,'create noticias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(24,'update noticias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(25,'delete noticias','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(26,'list modalidades','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(27,'view modalidades','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(28,'create modalidades','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(29,'update modalidades','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(30,'delete modalidades','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(31,'list lugares','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(32,'view lugares','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(33,'create lugares','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(34,'update lugares','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(35,'delete lugares','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(36,'list tiposeventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(37,'view tiposeventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(38,'create tiposeventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(39,'update tiposeventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(40,'delete tiposeventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(41,'list tiposcursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(42,'view tiposcursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(43,'create tiposcursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(44,'update tiposcursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(45,'delete tiposcursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(46,'list eventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(47,'view eventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(48,'create eventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(49,'update eventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(50,'delete eventos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(51,'list cursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(52,'view cursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(53,'create cursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(54,'update cursos','web','2026-11-04 21:40:07','2026-11-04 21:40:07'),(55,'delete cursos','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(56,'list roles','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(57,'view roles','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(58,'create roles','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(59,'update roles','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(60,'delete roles','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(61,'list permissions','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(62,'view permissions','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(63,'create permissions','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(64,'update permissions','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(65,'delete permissions','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(66,'list users','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(67,'view users','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(68,'create users','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(69,'update users','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(70,'delete users','web','2026-11-04 21:40:08','2026-11-04 21:40:08');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  KEY `personal_access_tokens_expires_at_index` (`expires_at`)
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
-- Table structure for table `programas_institucionales`
--

DROP TABLE IF EXISTS `programas_institucionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programas_institucionales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsables` json NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reseña` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#000000',
  `orden` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programas_institucionales`
--

LOCK TABLES `programas_institucionales` WRITE;
/*!40000 ALTER TABLE `programas_institucionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `programas_institucionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publicaciones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esPeriodica` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDePublicacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anio` int NOT NULL,
  `editorial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autor` json DEFAULT NULL,
  `compilador` json DEFAULT NULL,
  `coordinador` json DEFAULT NULL,
  `editor` json DEFAULT NULL,
  `resumen` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `enlace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,2),(17,2),(18,2),(19,2),(20,2),(21,2),(22,2),(23,2),(24,2),(25,2),(26,2),(27,2),(28,2),(29,2),(30,2),(31,2),(32,2),(33,2),(34,2),(35,2),(36,2),(37,2),(38,2),(39,2),(40,2),(41,2),(42,2),(43,2),(44,2),(45,2),(46,2),(47,2),(48,2),(49,2),(50,2),(51,2),(52,2),(53,2),(54,2),(55,2),(56,2),(57,2),(58,2),(59,2),(60,2),(61,2),(62,2),(63,2),(64,2),(65,2),(66,2),(67,2),(68,2),(69,2),(70,2);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'user','web','2026-11-04 21:40:08','2026-11-04 21:40:08'),(2,'super-admin','web','2026-11-04 21:40:08','2026-11-04 21:40:08');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('dFhnSIS4LMI3LS330ytGjcfJhwBEyJoPxFDOsRlf',1,'172.19.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36','eyJfdG9rZW4iOiIxMjJOZTVkaG1kMzNSZmpncDVQR280bkJORnlQQ0tBSGxsdnBPNGFDIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwXC9hY3RpdmlkYWRlc19hY2FkZW1pY2FzXC9jYWxlbmRhclwvanNvbj9lbmQ9MjAyNi0xMi0wN1QwMCUzQTAwJTNBMDAtMDMlM0EwMCZzdGFydD0yMDI2LTEwLTI2VDAwJTNBMDAlM0EwMC0wMyUzQTAwIiwicm91dGUiOiJldmVudG9zLmNhbGVuZGFyIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjEsInBhc3N3b3JkX2hhc2hfd2ViIjoiNzQyYTFlYzZhMWM5MDcyNmFjNzRhYTk3M2ViMjcxMzY4MWEwZWRkYTQyODNiNWZiNzkzNmE4NzAxOTA0NGQzOCJ9',1793837979),('zVAT6KBaQsIwcEhbooWut3HU46cc0olSTUl1LEfx',NULL,'172.19.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJDblMwMVZWdlBqYm5Ka25idXJyajRTbkhpQ2FPNFNMeWJDM293STNDIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDgwXC9wdWJsaWNhY2lvbmVzIiwicm91dGUiOiJwdWJsaWNhY2lvbmVzLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1793902245);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_eventos`
--

DROP TABLE IF EXISTS `tipos_eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_eventos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_eventos`
--

LOCK TABLES `tipos_eventos` WRITE;
/*!40000 ALTER TABLE `tipos_eventos` DISABLE KEYS */;
INSERT INTO `tipos_eventos` VALUES (1,'Simposio','2026-11-04 21:40:10','2026-11-04 21:40:10'),(2,'Conferencia','2026-11-04 21:40:10','2026-11-04 21:40:10'),(3,'Seminario','2026-11-04 21:40:10','2026-11-04 21:40:10');
/*!40000 ALTER TABLE `tipos_eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$12$EN8wIRnOmnARFb0WwBt40OdD/sge8ZAAHAy087nEfGT70vcJuDlty',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `rol` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Nuria Laboy','admin@admin.com','2026-11-04 21:40:06','$2y$12$Bd2/j/KokjU1cUJzMHbdqeK4WeK4kZMrK1w8Y0yzQhEiURUgToKlS','Dn96A8tiyX',NULL,NULL,NULL,NULL,NULL,'2026-11-04 21:40:07','2026-11-04 21:40:07'),(2,'Sra. Carla Villar Tercero','gerard.viera@terra.com','2026-11-04 21:40:08','$2y$12$JH3WEq52Zuqt1CpPJX2axuFUlYymX/UY.gqTQFKivr3IMBC0BFUfK','7Lzb8hFrEQ',NULL,NULL,NULL,NULL,NULL,'2026-11-04 21:40:10','2026-11-04 21:40:10'),(3,'Lic. Marc Salinas','lugo.gonzalo@yahoo.com','2026-11-04 21:40:08','$2y$12$13BfFsLGNujBD6WwUp/NLOJ/oQZi31w9VvXgzmgI.gAOWCyJilpOq','lzwTe5aQxD',NULL,NULL,NULL,NULL,NULL,'2026-11-04 21:40:10','2026-11-04 21:40:10'),(4,'Úrsula Vergara','hcaraballo@briseno.com','2026-11-04 21:40:09','$2y$12$OHOqYD/kQqb03PXYZQ0g4OA3/bePC.one1Z6jvrBdlxfbk3pu96zu','9PLp6QtmNd',NULL,NULL,NULL,NULL,NULL,'2026-11-04 21:40:10','2026-11-04 21:40:10'),(5,'Raúl Sánchez','asensio.rafael@hotmail.es','2026-11-04 21:40:09','$2y$12$u573TwUGPk.dI3oRw9nDL.LnNancEL7wc0Aoo05OL9EOpoCbEE4Eq','f3HrU4jWJi',NULL,NULL,NULL,NULL,NULL,'2026-11-04 21:40:10','2026-11-04 21:40:10'),(6,'Manuel Alonzo','moya.mariaangeles@hispavista.com','2026-11-04 21:40:09','$2y$12$bO3ad9TbofS8KNb0rR/lZOaFEKPHfEgVjJ.OKwsQ0i6NWHQ0UpleS','Vegcu34aDG',NULL,NULL,NULL,NULL,NULL,'2026-11-04 21:40:10','2026-11-04 21:40:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-11-05 18:31:29
