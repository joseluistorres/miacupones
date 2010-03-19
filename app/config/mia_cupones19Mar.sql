-- MySQL dump 10.13  Distrib 5.1.44, for apple-darwin9.8.0 (i386)
--
-- Host: localhost    Database: mia_cupones
-- ------------------------------------------------------
-- Server version	5.1.44

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cupones`
--

DROP TABLE IF EXISTS `cupones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cupones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen_url` varchar(250) NOT NULL,
  `vigencia` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `contador` int(11) NOT NULL,
  `mia_cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cupones`
--

LOCK TABLES `cupones` WRITE;
/*!40000 ALTER TABLE `cupones` DISABLE KEYS */;
INSERT INTO `cupones` VALUES (1,'2010-03-19 12:51:57','2010-03-19 12:51:57','2x1 en micheladas todos los jueves','Solo los domingos','http://www.something.com/','2010-03-31 12:45:00','activo',10,1),(2,'2010-03-19 12:52:36','2010-03-19 12:52:36','Applebees 20% en desayuno buffete','Solo los domingos','http://www.mysql.com','2010-03-31 12:52:00','activo',10,2),(3,'2010-03-19 12:53:03','2010-03-19 12:53:03','Cafe la Arabiga - Capuchino gratis','Llevate 4x3 toda la semana','http://larabica.com.mx','2010-03-31 12:52:00','activo',10,3),(4,'2010-03-19 12:54:16','2010-03-19 12:54:16','Celular Nokia 200 pesos','Llevatelo con 100 de TA','http://www.nokia.com','2010-03-31 12:53:00','activo',10,4),(5,'2010-03-19 12:54:57','2010-03-19 12:54:57','Cinemas del Country - 15%','15% de descuento','http://www.cinemas.com.mx','2010-03-31 12:54:00','activo',10,5),(6,'2010-03-19 13:02:02','2010-03-19 13:02:02','Todas las MAC Book Pro','Ven y compra la mejor y mas barata','http://www.apple.com','2010-03-31 13:01:00','activo',10,6),(7,'2010-03-19 13:04:33','2010-03-19 13:04:33','Todas las Flat screen 10%','Geniales todas las tvs sony','http://www.sony.com.mx','2010-03-31 13:03:00','activo',10,5);
/*!40000 ALTER TABLE `cupones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cupones_utilizados`
--

DROP TABLE IF EXISTS `cupones_utilizados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cupones_utilizados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `id_cupon` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cupones_utilizados`
--

LOCK TABLES `cupones_utilizados` WRITE;
/*!40000 ALTER TABLE `cupones_utilizados` DISABLE KEYS */;
/*!40000 ALTER TABLE `cupones_utilizados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mia_clientes`
--

DROP TABLE IF EXISTS `mia_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mia_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `empresa` varchar(80) NOT NULL,
  `contacto` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `url` varchar(250) NOT NULL,
  `logo_url` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mia_clientes`
--

LOCK TABLES `mia_clientes` WRITE;
/*!40000 ALTER TABLE `mia_clientes` DISABLE KEYS */;
INSERT INTO `mia_clientes` VALUES (1,'2010-03-19 12:13:28','2010-03-19 12:13:28','Benedettis','Fulanito Perez','joseperez@hotmail.com','123456789','http://www.benedettis.com','sssss'),(2,'2010-03-19 12:16:02','2010-03-19 12:16:02','MIA Creativos','Jose Perez','mia@miacreativos.com.mx','12344444','http://www.mia.com.mx','abcde'),(3,'2010-03-19 12:17:39','2010-03-19 12:17:39','La Marina','guillermo brun','gbrun@lamarina.com.mx','3121111111','http://www.lamarina.com.mx','1212122'),(4,'2010-03-19 12:25:52','2010-03-19 12:25:52','CafePlaza','John Doe','pepe@cafeplaza.com','12121212','http://www.cocacola.com.mx','2121'),(5,'2010-03-19 12:30:15','2010-03-19 12:30:15','CocaCola','otro vale','siempre@cocacola.com.mx','121212121','http://www.cocacola.com.mx','sdfsdfsd'),(6,'2010-03-19 12:32:19','2010-03-19 12:32:19','Nokia','Karleo Lopez','karle@nokia.com','121212','http://www.nokia.com.mx','adsdasdasda'),(7,'2010-03-19 13:07:27','2010-03-19 13:07:27','Llantas del Norte','someone','some@llantasdelnorte.com','121212','http://www.llantasdelnorte.com','dasdasd');
/*!40000 ALTER TABLE `mia_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `apellido_paterno` varchar(80) DEFAULT NULL,
  `apellido_materno` varchar(80) DEFAULT NULL,
  `email` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_nac` datetime DEFAULT NULL,
  `aquesededica` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-03-19 12:38:17
