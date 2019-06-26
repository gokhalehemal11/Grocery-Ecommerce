-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: grocery
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  `vendor_name` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (12,'Nestle','malbok@gmail.com'),(13,'Other','malbok@gmail.com'),(14,'kitchen','malbok@gmail.com'),(15,'household','malbok@gmail.com'),(16,'personal care','malbok@gmail.com'),(17,'bakery, eggs and meat','malbok@gmail.com'),(18,'snacks','malbok@gmail.com');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  `vendor_name` text NOT NULL,
  `cat_name` text,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (15,'water and beverages','malbok@gmail.com','water_and_beverages'),(16,'fruits and vegetables','malbok@gmail.com','fruits_and_vegetables'),(17,'staples','malbok@gmail.com','staples'),(18,'branded food','malbok@gmail.com','branded_food'),(19,'breakfast and cereal','malbok@gmail.com','breakfast_and_cereal'),(20,'snacks','malbok@gmail.com','snacks'),(21,'spices','malbok@gmail.com','spices'),(22,'sweets','malbok@gmail.com','sweets'),(23,'pickle and condiment','malbok@gmail.com','pickle_and_condiment'),(24,'instant food','malbok@gmail.com','instant_food'),(25,'dryfruit','malbok@gmail.com','dryfruit'),(27,'ayurvedic','malbok@gmail.com','ayurvedic'),(28,'babycare','malbok@gmail.com','babycare'),(29,'cosmetics','malbok@gmail.com','cosmetics'),(30,'deo and perfumes','malbok@gmail.com','deo_and_perfumes'),(31,'haircare','malbok@gmail.com','haircare'),(32,'oralcare','malbok@gmail.com','oralcare'),(33,'personal hygiene','malbok@gmail.com','personal_hygiene'),(34,'skincare','malbok@gmail.com','skincare'),(35,'fashion accessories','malbok@gmail.com','fashion_accessories'),(36,'grooming tools','malbok@gmail.com','grooming_tools'),(37,'shaving needs','malbok@gmail.com','shaving_needs'),(38,'sanitary needs','malbok@gmail.com','sanitary_needs'),(39,'noodles and pasta','malbok@gmail.com','noodles_and_pasta'),(41,'biscuit and cookies','malbok@gmail.com','biscuit_and_cookies'),(42,'sauces and ketchups','malbok@gmail.com','sauces_and_ketchups'),(43,'chocolates and candies','malbok@gmail.com','chocolates_and_candies'),(44,'frozen veggies','malbok@gmail.com','frozen_veggies'),(45,'snacks and namkeen','malbok@gmail.com','snacks_and_namkeen'),(46,'indian mithai','malbok@gmail.com','indian_mithai'),(47,'breads and buns','malbok@gmail.com','breads_and_buns'),(48,'dairy','malbok@gmail.com','dairy'),(49,'cakes and pastries','malbok@gmail.com','cakes_and_pastries'),(50,'rusk and khari','malbok@gmail.com','rusk_and_khari'),(51,'eggs','malbok@gmail.com','eggs'),(52,'poultry','malbok@gmail.com','poultry'),(53,'mutton and lamb','malbok@gmail.com','mutton_and_lamb'),(54,'fish and seafood','malbok@gmail.com','fish_and_seafood'),(55,'pork and others','malbok@gmail.com','pork_and_others'),(56,'icecream','malbok@gmail.com','icecream'),(57,'cleaning accessories','malbok@gmail.com','cleaning_accessories'),(58,'cookwear','malbok@gmail.com','cookwear'),(59,'detergents','malbok@gmail.com','detergents'),(60,'gardening','malbok@gmail.com','gardening'),(61,'kitchen and dining','malbok@gmail.com','kitchen_and_dining'),(62,'kitchenwear','malbok@gmail.com','kitchenwear'),(63,'petcare','malbok@gmail.com','petcare'),(64,'plasticwear','malbok@gmail.com','plasticwear'),(65,'pooja needs','malbok@gmail.com','pooja_needs'),(66,'safety accessories','malbok@gmail.com','safety_accessories'),(67,'festive decoratives','malbok@gmail.com','festive_decoratives'),(68,'toys and gifts','malbok@gmail.com','toys_and_gifts');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'hemal','hemal@gmail.com','D6','chinchwad','411019','hemal123','9518786014'),(2,'Chinmayee','rfidlibrarypccoe@gmail.com','Karvenagar','Pune','411001','c123','1234567890'),(3,'shubham','gokhalehemal11@gmail.com','Pote Corner','Chinchwad','411019','shubham123','123457890');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery`
--

LOCK TABLES `delivery` WRITE;
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` VALUES (1,'delivery_boy','gokhalehemal11@gmail.com','hdfc','pune','411019','1234567890'),(2,'delivery_boy_2','gokhalehemal11@gmail.com','kakde park','pune','411014','122111112'),(95,'delivery_boy_3','something@gmail.com','some_street','some city','411019','01234567890');
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) DEFAULT NULL,
  `product_price` int(100) DEFAULT NULL,
  `product_qty` int(100) DEFAULT NULL,
  `product_image` text,
  `vendor_name` text,
  `payment_id` text,
  `payment_status` text,
  `buyer_email` text,
  `buyer_phone` text,
  `buyer_name` text,
  `order_date` varchar(250) DEFAULT NULL,
  `delivery_status` text,
  `shipping_method` varchar(250) DEFAULT NULL,
  `buyer_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Sunflower Oil (5Kg)',100,1,'images/1560280713_of1.png','gokhalehemal11@gmail.com','MOJO9615E05N07860470','Credit','gokhalehemal11@gmail.com','1234567890','Shubham','17/06/2019 09:31:21','Returned','Normal',NULL),(2,'Kabuli Chana (1Kg)',45,2,'images/1560280766_of2.png','gokhalehemal11@gmail.com','MOJO9615E05N07860470','Credit','gokhalehemal11@gmail.com','1234567890','Shubham','17/06/2019 09:31:21','ND','Normal',NULL),(3,'Clips (10 pc)',20,1,'images/1560342587_of20.png','gokhalehemal11@gmail.com','MOJO9615E05N07860470','Credit','gokhalehemal11@gmail.com','1234567890','Shubham','17/06/2019 09:31:21','Returned','Normal',NULL),(4,'Apples (1 kg)',100,1,'images/1560323747_of11.png','hemal@gmail.com','MOJO9615805N07860780','Credit','gokhalehemal11@gmail.com','1234567890','Hemal','17/06/2019 09:31:21','Returned','Normal',NULL),(5,'Banana (6 pcs)',20,1,'images/1560323604_of8.png','hemal@gmail.com','MOJO9615805N07860780','Credit','gokhalehemal11@gmail.com','1234567890','Hemal','17/06/2019 09:31:21','Returned','Normal',NULL),(6,'Lady Finger (250 g)',20,2,'images/1560343032_of17.png','hemal@gmail.com','MOJO9615805N07860780','Credit','gokhalehemal11@gmail.com','1234567890','Hemal','17/06/2019 09:31:21','delivery_boy','Normal',NULL),(11,'Kabuli Chana (1Kg)',45,1,'images/1560280766_of2.png','hemal@gmail.com','COD740137615','Cod','gokhalehemal11@gmail.com','123457890','shubham','17/06/2019 09:31:21','delivery_boy_3','Normal',NULL),(16,'Hair Gel (250 g)',60,1,'images/1560342839_of23.png','hemal@gmail.com','COD506689832','Cod','gokhalehemal11@gmail.com','123457890','shubham','17/06/2019 09:31:21','Returned','Normal',NULL),(17,'Conditioner (200 g)',55,1,'images/1560342648_of21.png','hemal@gmail.com','COD506689832','Cod','gokhalehemal11@gmail.com','123457890','shubham','17/06/2019 09:31:21','delivery_boy','Normal',NULL),(19,'Cleaner (500 g)',70,1,'images/1560342712_of22.png','hemal@gmail.com','MOJO9617J05N20123237','Credit','gokhalehemal11@gmail.com','1234567678','hemal','17/06/2019 10:00:12','Returned','Normal',NULL),(20,'Apples (1 kg)',100,1,'images/1560323747_of11.png','gokhalehemal11@gmail.com','COD290738570','Cod','gokhalehemal11@gmail.com','123457890','shubham','17/06/2019 10:00:49','ND','Express',NULL),(21,'Ribbon (1 pc)',15,1,'images/1560342521_of18.png','hemal@gmail.com','COD965095464','Cod','gokhalehemal11@gmail.com','123457890','shubham','18/06/2019 00:07:49','Returned','Express',NULL),(33,'Sunflower Oil (5Kg)',100,1,'images/1560280713_of1.png','gokhalehemal11@gmail.com','MOJO9619405N22393813','Credit','gokhalehemal11@gmail.com','1234567890','Hemal','19/06/2019 11:10:36','Returned','Normal','Pote Corner, Chinchwad, 411019'),(34,'Sunflower Oil (5Kg)',100,1,'images/1560280713_of1.png','gokhalehemal11@gmail.com','COD140650200','Cod','gokhalehemal11@gmail.com','123457890','shubham','20/06/2019 18:43:04','delivery_boy','Express','Pote Corner, Chinchwad, 411019'),(35,'Soya Chunks (1Kg)',55,1,'images/1560280805_of3.png','hemal@gmail.com','COD140650200','Cod','gokhalehemal11@gmail.com','123457890','shubham','20/06/2019 18:43:04','delivery_boy','Express','Pote Corner, Chinchwad, 411019'),(36,'Hair Gel (250 g)',60,1,'images/1560342839_of23.png','hemal@gmail.com','MOJO9620V05N80165183','Credit','gokhalehemal11@gmail.com','1234567889','Shubham','20/06/2019 18:49:27','ND','Normal','Pote Corner, Chinchwad, 411019'),(37,'Moong Dal (200g)',20,1,'images/1560272048_of.png','hemal@gmail.com','COD760991559','Cod','gokhalehemal11@gmail.com','123457890','shubham','20/06/2019 18:57:05','delivery_boy_3','Normal','Pote Corner, Chinchwad, 411019'),(38,'Lady Finger (250 g)',20,2,'images/1560343032_of17.png','gokhalehemal11@gmail.com','COD760991559','Cod','gokhalehemal11@gmail.com','123457890','shubham','20/06/2019 18:57:05','delivery_boy','Normal','Pote Corner, Chinchwad, 411019');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `vendor_name` text,
  PRIMARY KEY (`product_id`),
  KEY `fk_product_cat` (`product_cat`),
  KEY `fk_product_brand` (`product_brand`),
  CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,17,14,'Moong Dal (200g)',20,5,'Fresh and healthy Moong Dal','1560272048_of.png','hemal@gmail.com'),(3,17,14,'Sunflower Oil (5Kg)',100,10,'Fresh Sunflower Oil','1560280713_of1.png','gokhalehemal11@gmail.com'),(4,17,14,'Kabuli Chana (1Kg)',45,5,'Kabuli Chana','1560280766_of2.png','gokhalehemal11@gmail.com'),(5,17,14,'Soya Chunks (1Kg)',55,20,'Soya Chunks','1560280805_of3.png','hemal@gmail.com'),(6,20,18,'Lays (100g)',20,20,'Tasty Spicy Lays','1560321892_of4.png','hemal@gmail.com'),(7,20,18,'Kurkure (100g)',20,10,'Tasty, Spicy and Salty Snack','1560321938_of5.png','hemal@gmail.com'),(8,20,18,'Popcorn (250 g)',30,10,'Tasty Popcorns','1560322049_of6.png','gokhalehemal11@gmail.com'),(9,20,14,'Nuts (250 g)',45,50,'Health Nuts','1560322089_of7.png','gokhalehemal11@gmail.com'),(10,19,14,'Honey (500 g)',90,10,'Fresh, Healthy and Tasty Honey','1560323321_of12.png','hemal@gmail.com'),(11,19,18,'Chocos (250 g)',55,10,'Chocolaty Chocos','1560323379_of13.png','hemal@gmail.com'),(12,19,14,'Oats (1 kg)',50,10,'Healthy Oats','1560323484_of14.png','hemal@gmail.com'),(13,47,17,'Bread (500 g)',25,20,'Brown Bread','1560323526_of15.png','hemal@gmail.com'),(14,16,14,'Banana (6 pcs)',20,60,'Tasty Bananas','1560323604_of8.png','gokhalehemal11@gmail.com'),(15,16,14,'Onion (1 kg)',20,20,'Fresh Onion','1560323639_of9.png','gokhalehemal11@gmail.com'),(16,16,14,'Bitter Gourd (1 kg)',15,10,'Bitter Gourd','1560323684_of10.png','gokhalehemal11@gmail.com'),(17,16,14,'Apples (1 kg)',100,20,'Tasty Red Apples','1560323747_of11.png','gokhalehemal11@gmail.com'),(18,34,16,'Moisturiser (500 g)',99,10,'Moisturize your skin','1560342395_of16.png','hemal@gmail.com'),(19,67,15,'Ribbon (1 pc)',15,20,'Ribbon Your Gifts','1560342521_of18.png','hemal@gmail.com'),(20,57,15,'Clips (10 pc)',20,10,'Clips for your Clothes','1560342587_of20.png','gokhalehemal11@gmail.com'),(21,31,16,'Conditioner (200 g)',55,20,'Hair conditioner','1560342648_of21.png','hemal@gmail.com'),(22,38,15,'Cleaner (500 g)',70,20,'Bathroom Cleaner','1560342712_of22.png','hemal@gmail.com'),(24,31,16,'Hair Gel (250 g)',60,25,'Good hair everyday','1560342839_of23.png','hemal@gmail.com'),(25,16,14,'Grapes (200 g)',50,100,'Fresh and Tasty Green Grapes','1560342973_of19.png','gokhalehemal11@gmail.com'),(26,16,14,'Lady Finger (250 g)',20,20,'Fresh Lady Fingers for your meal','1560343032_of17.png','gokhalehemal11@gmail.com');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendors` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `ifsc` text,
  `pan_card` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
INSERT INTO `vendors` VALUES (5,'hemal','hemal@gmail.com','hdfc colony','pune','411019','hemal123','9518786014',NULL,NULL),(7,'Username','admin@gmail.com','Shivajinagar','Pune','411001','admin123','8149992015',NULL,NULL),(8,'malbok','malbok@gmail.com','STR 2','Meghalaya','411772','malbok123','1223451334',NULL,NULL),(9,'Chinmayee','gokhalehemal11@gmail.com','Chinchwad','Pune','411019','c123','1234567890',NULL,NULL);
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-26 23:03:56
