-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.13-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para concejo
CREATE DATABASE IF NOT EXISTS `concejo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `concejo`;

-- Volcando estructura para tabla concejo.asistencias
CREATE TABLE IF NOT EXISTS `asistencias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `persona_id` bigint(20) unsigned NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `asistencias_persona_id_foreign` (`persona_id`),
  CONSTRAINT `asistencias_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.asistencias: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `asistencias` DISABLE KEYS */;
INSERT INTO `asistencias` (`id`, `fecha`, `persona_id`, `estado`, `created_at`, `updated_at`) VALUES
	(1, '2020-09-11', 1, 1, '2020-09-11 14:10:50', '2020-09-11 14:10:50'),
	(2, '2020-09-11', 2, 1, '2020-09-11 15:44:35', '2020-09-11 15:44:35'),
	(3, '2020-09-11', 2, 1, '2020-09-11 20:00:55', '2020-09-11 20:00:55');
/*!40000 ALTER TABLE `asistencias` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.cargos
CREATE TABLE IF NOT EXISTS `cargos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.cargos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` (`id`, `nombre`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'administrador', 'controla todo', 1, '2020-09-01 19:01:20', '2020-09-01 19:01:20'),
	(2, 'secretaria', 'funciones principales', 1, '2020-09-01 19:01:32', '2020-09-01 19:01:32');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.estados
CREATE TABLE IF NOT EXISTS `estados` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla concejo.estados: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'ACTIVO', 1, NULL, NULL),
	(3, 'SUSPENDIDA', 1, NULL, NULL),
	(4, 'COMPLETADO', 1, NULL, NULL);
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.migrations: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2014_10_12_000000_create_users_table', 1),
	(6, '2014_10_12_100000_create_password_resets_table', 1),
	(7, '2019_08_19_000000_create_failed_jobs_table', 1),
	(8, '2020_08_28_062534_create_cargos_table', 1),
	(9, '2020_09_01_114400_create_partidos_table', 1),
	(10, '2020_09_01_120916_create_tipovotaciones_table', 1),
	(11, '2020_09_01_122758_create_personas_table', 1),
	(12, '2020_09_10_192321_create_asistencias_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.partidos
CREATE TABLE IF NOT EXISTS `partidos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.partidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `partidos` DISABLE KEYS */;
INSERT INTO `partidos` (`id`, `nombre`, `logo`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'liberal', 'partido liberal', 1, '2020-09-01 19:00:58', '2020-09-01 19:00:58');
/*!40000 ALTER TABLE `partidos` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo_id` bigint(20) unsigned NOT NULL,
  `partido_id` bigint(20) unsigned NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personas_cargo_id_foreign` (`cargo_id`),
  KEY `personas_partido_id_foreign` (`partido_id`),
  CONSTRAINT `personas_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`),
  CONSTRAINT `personas_partido_id_foreign` FOREIGN KEY (`partido_id`) REFERENCES `partidos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.personas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`id`, `nombres`, `apellidos`, `documento`, `genero`, `telefono`, `direccion`, `cargo_id`, `partido_id`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'brayan de jesus', 'torres salcedo', '1005569857', 'masculino', '3212020815', 'cll 43', 1, 1, 1, '2020-09-01 19:02:35', '2020-09-03 17:25:27'),
	(2, 'eduardo ', 'almanza', '12345678', 'masculino', '0', 's', 1, 1, 1, NULL, NULL);
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.proyectos
CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anexos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persona_id` bigint(20) unsigned NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proyectos_persona_id_foreign` (`persona_id`),
  CONSTRAINT `proyectos_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.proyectos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` (`id`, `nombre`, `descripcion`, `anexos`, `ruta`, `persona_id`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'Proyecto Marco De Ley', 'anexo', 'a', NULL, 1, 1, '2020-09-10 19:37:50', '2020-09-11 15:49:15'),
	(2, 'Aaaa', 'dfdfgf', 'sfsdf', NULL, 1, 1, '2020-09-10 20:08:45', '2020-09-11 15:59:31');
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.proyecto_votaciones
CREATE TABLE IF NOT EXISTS `proyecto_votaciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `proyecto_id` bigint(20) unsigned NOT NULL,
  `persona_id` bigint(20) unsigned NOT NULL,
  `estado_id` bigint(20) unsigned NOT NULL,
  `tipovotacion_id` bigint(20) unsigned NOT NULL,
  `observaciones` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tiempo` int(11) NOT NULL DEFAULT 0,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `proyectos_persona_id_foreign` (`proyecto_id`) USING BTREE,
  KEY `FK_proyecto_votaciones_personas` (`persona_id`),
  KEY `FK_proyecto_votaciones_estados` (`estado_id`),
  KEY `FK_proyecto_votaciones_tipovotaciones` (`tipovotacion_id`),
  CONSTRAINT `FK_proyecto_votaciones_estados` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_proyecto_votaciones_personas` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_proyecto_votaciones_proyectos` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_proyecto_votaciones_tipovotaciones` FOREIGN KEY (`tipovotacion_id`) REFERENCES `tipovotaciones` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla concejo.proyecto_votaciones: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `proyecto_votaciones` DISABLE KEYS */;
INSERT INTO `proyecto_votaciones` (`id`, `proyecto_id`, `persona_id`, `estado_id`, `tipovotacion_id`, `observaciones`, `fecha`, `hora`, `tiempo`, `estado`, `created_at`, `updated_at`) VALUES
	(4, 2, 2, 4, 2, 'fdg', '2020-09-11', '11:48:00', 0, 1, '2020-09-11 16:48:47', '2020-09-11 16:48:47');
/*!40000 ALTER TABLE `proyecto_votaciones` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.tipovotaciones
CREATE TABLE IF NOT EXISTS `tipovotaciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.tipovotaciones: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tipovotaciones` DISABLE KEYS */;
INSERT INTO `tipovotaciones` (`id`, `nombre`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'secreta', 'no la ve nadie', 1, '2020-09-01 19:01:49', '2020-09-01 19:01:49'),
	(2, 'NOMINAL', 'nominal', 1, '2020-09-11 16:46:28', '2020-09-11 16:46:28');
/*!40000 ALTER TABLE `tipovotaciones` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persona_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `FK_users_personas` (`persona_id`),
  CONSTRAINT `FK_users_personas` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla concejo.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `usuario`, `password`, `persona_id`, `created_at`, `updated_at`, `estado`) VALUES
	(1, '1005569857', '$2y$10$DUgF9pk8FaQt8MB2Z/.ti.e4.whH5XvJ2vEtuMqLGltHtbdVxzTha', 1, '2020-09-10 14:08:56', '2020-08-17 15:52:42', 1),
	(2, '12345678', '$2y$10$quO98I5N1vvT3xwRU0VyCu4KdOwTNb/IP6bcV6J1.YSaLZKJaBSwK', 2, '2020-09-10 17:15:48', '2020-08-17 15:52:02', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla concejo.votaciones
CREATE TABLE IF NOT EXISTS `votaciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `proyecto_id` bigint(20) unsigned NOT NULL,
  `persona_id` bigint(20) unsigned NOT NULL,
  `observaciones` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `respuesta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `ip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `proyectos_persona_id_foreign` (`proyecto_id`) USING BTREE,
  KEY `FK_proyecto_votaciones_personas` (`persona_id`) USING BTREE,
  CONSTRAINT `votaciones_ibfk_2` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `votaciones_ibfk_3` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla concejo.votaciones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `votaciones` DISABLE KEYS */;
INSERT INTO `votaciones` (`id`, `proyecto_id`, `persona_id`, `observaciones`, `respuesta`, `fecha`, `hora`, `estado`, `ip`, `created_at`, `updated_at`) VALUES
	(4, 2, 2, NULL, 1, '2020-09-11', '08:43:45', 1, '1', '2020-09-11 20:43:45', '2020-09-11 20:43:45'),
	(5, 2, 2, NULL, 1, '2020-09-11', '08:45:29', 1, '1', '2020-09-11 20:45:29', '2020-09-11 20:45:29'),
	(6, 2, 2, NULL, 1, '2020-09-11', '08:45:41', 1, '1', '2020-09-11 20:45:41', '2020-09-11 20:45:41'),
	(7, 2, 2, NULL, 1, '2020-09-11', '08:46:32', 1, '1', '2020-09-11 20:46:32', '2020-09-11 20:46:32'),
	(8, 2, 2, NULL, 1, '2020-09-11', '08:46:39', 1, '1', '2020-09-11 20:46:39', '2020-09-11 20:46:39'),
	(9, 2, 2, NULL, 1, '2020-09-11', '08:48:04', 1, '1', '2020-09-11 20:48:04', '2020-09-11 20:48:04'),
	(10, 2, 2, NULL, 0, '2020-09-11', '03:49:52', 1, '1', '2020-09-11 15:49:52', '2020-09-11 15:49:52'),
	(11, 2, 2, NULL, 0, '2020-09-11', '03:50:05', 1, '1', '2020-09-11 15:50:05', '2020-09-11 15:50:05');
/*!40000 ALTER TABLE `votaciones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
