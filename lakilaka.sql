-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2020 at 10:53 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lakilaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `product_image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `ip`, `product_name`, `product_price`, `product_image`) VALUES
(2, '157.33.169.16', 'Sunflower Oil', '50', '1560280713_of1.png'),
(1, '157.33.169.16', 'Moong ', '25', '1560271954_of.png'),
(1, '157.33.188.78', 'Moong ', '25', '1560271954_of.png'),
(2, '157.33.169.175', 'Sunflower Oil', '50', '1560280713_of1.png'),
(1, '157.33.185.153', 'Moong ', '25', '1560271954_of.png'),
(2, '157.33.185.153', 'Sunflower Oil', '50', '1560280713_of1.png'),
(2, '157.33.188.157', 'Sunflower Oil', '50', '1560280713_of1.png'),
(3, '157.33.188.157', 'Soya Chunks', '45', '1590262123_of3.png'),
(1, '157.33.187.200', 'Moong ', '25', '1560271954_of.png'),
(1, '157.33.165.21', 'Moong ', '25', '1560271954_of.png'),
(3, '157.33.165.21', 'Soya Chunks', '45', '1590262123_of3.png'),
(2, '49.35.85.223', 'Sunflower Oil', '50', '1560280713_of1.png'),
(6, '49.35.85.223', 'Dabur Honey', '100', '1560323321_of12.png'),
(3, '49.35.85.223', 'Soya Chunks', '45', '1590262123_of3.png'),
(2, '49.35.209.128', 'Sunflower Oil', '50', '1560280713_of1.png'),
(1, '49.35.209.128', 'Moong ', '25', '1560271954_of.png'),
(6, '165.225.106.89', 'Dabur Honey', '100', '1560323321_of12.png'),
(3, '165.225.106.89', 'Soya Chunks', '45', '1590262123_of3.png'),
(1, '223.238.98.45', 'Moong ', '25', '1560271954_of.png'),
(3, '165.225.106.162', 'Soya Chunks', '45', '1590262123_of3.png'),
(1, '165.225.106.162', 'Moong ', '25', '1560271954_of.png'),
(1, '157.40.155.53', 'Moong ', '25', '1560271954_of.png'),
(1, '223.238.101.57', 'Moong ', '25', '1560271954_of.png'),
(1, '165.225.106.138', 'Moong ', '25', '1560271954_of.png'),
(17, '165.225.106.138', 'Lays', '440', '1595349024_'),
(18, '223.238.103.134', 'Lays', '12', '1595349131_'),
(19, '157.33.166.64', 'Chair', '350', '1595350239_'),
(2, '157.33.173.52', 'Sunflower Oil', '50', '1560280713_of1.png'),
(19, '42.108.59.26', 'Chair', '350', '1595350239_'),
(1, '223.238.123.219', 'Moong ', '25', '1560271954_of.png'),
(1, '1.38.132.167', 'Moong ', '25', '1560271954_of.png'),
(19, '1.38.132.167', 'Chair', '350', '1595350239_'),
(20, '223.238.121.155', 'Octagon Dining Table', '40000', '1595523454_'),
(1, '49.35.61.91', 'Moong ', '25', '1560271954_of.png'),
(28, '27.56.111.207', 'Octagon Dinning Tabl', '40000', '1595523852_'),
(19, '27.56.111.207', 'Chair', '350', '1595350239_'),
(28, '223.238.101.36', 'Octagon Dinning Tabl', '40000', '1595523852_'),
(1, '157.40.226.13', 'Moong ', '25', '1560271954_of.png'),
(18, '157.40.136.97', 'Lays', '1', '1595349131_'),
(18, '223.238.111.80', 'Lays', '10', '1595349131_'),
(18, '117.204.241.73', 'Lays', '10', '1595349131_'),
(18, '157.33.170.175', 'Lays', '10', '1595349131_');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `product_id` varchar(40) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `pro_image` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`product_id`, `product_name`, `pro_image`) VALUES
('42', 'Trissimai soup', '1596128599_IMG-20200730-WA0017.jpg'),
('42', 'Trissimai soup', '1596128634_IMG-20200730-WA0017.jpg'),
('42', 'Trissimai soup', '1596128667_IMG-20200730-WA0016.jpg'),
('42', 'Trissimai soup', '1596128883_IMG-20200730-WA0016.jpg'),
('', 'Trissimai soup', '1596129122_IMG-20200730-WA0016.jpg'),
('89', 'Trissimai (Essential oils Soap', '1596129780_TRIIMAI SOAP.jpg'),
('90', 'kids Fashion (4 years)', '1596130842_cloth 4.jpg'),
('90', 'kids Fashion (4 years)', '1596130866_Cloth 2.jpg'),
('93', 'frock for kids ( age 3-4)', '1596131683_cloth 4.jpg'),
('94', 'frock for kids.( age 3-4)', '1596131761_Cloth 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_email` varchar(50) DEFAULT NULL,
  `customer_phone` varchar(15) DEFAULT NULL,
  `pay_id` varchar(30) DEFAULT NULL,
  `order_list` text,
  `order_status` varchar(20) DEFAULT NULL,
  `order_time` varchar(20) DEFAULT NULL,
  `address` text,
  `total_price` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `vendor_id`, `customer_name`, `customer_email`, `customer_phone`, `pay_id`, `order_list`, `order_status`, `order_time`, `address`, `total_price`) VALUES
(1, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0705Q05N89781417', 'Moong  Qty: 1,Soya Chunks Qty: 3,', 'Available', '05/07/2020 14:23:35', 'Shahunagar\r\nD6/4 Hdfc Colony', '160'),
(2, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0705205N89781581', 'Sunflower Oil Qty: 1,', 'Not Started', '05/07/2020 23:29:12', 'Shahunagar\r\nD6/4 Hdfc Colony', '50'),
(6, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0707705N45021091', 'Sunflower Oil Qty: 2,Moong  Qty: 3,', 'Not Started', '07/07/2020 09:37:34', 'Shahunagar\r\nD6/4 Hdfc Colony', '175'),
(7, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0707705N45021091', 'Sunflower Oil Qty: 2,Moong  Qty: 3,', 'Not Started', '07/07/2020 09:40:13', 'Shahunagar\r\nD6/4 Hdfc Colony', '175'),
(8, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0707705N45021091', 'Sunflower Oil Qty: 2,Moong  Qty: 3,', 'Not Started', '07/07/2020 09:41:19', 'Shahunagar\r\nD6/4 Hdfc Colony', '175'),
(9, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0707705N45021091', 'Sunflower Oil Qty: 2,Moong  Qty: 3,', 'Not Started', '07/07/2020 09:44:20', 'Shahunagar\r\nD6/4 Hdfc Colony', '175'),
(10, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0707705N45021091', 'Sunflower Oil Qty: 2,Moong  Qty: 3,', 'Not Started', '07/07/2020 09:45:35', 'Shahunagar\r\nD6/4 Hdfc Colony', '175'),
(11, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0710Y05N91170328', 'Dabur Honey Qty: 1,Soya Chunks Qty: 1,', 'Not Started', '10/07/2020 18:59:14', 'Shahunagar\r\nD6/4 Hdfc Colony', '145'),
(12, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '09518786014', 'MOJO0721G05N98252654', 'Moong  Qty: 1,', 'Ready', '21/07/2020 21:43:49', 'House No 84\r\nTaskand society, Nizampura Main Road', '25'),
(13, 1, '', 'gokhalehemal11@gmail.com', '', 'MOJO0721J05N98252666', '', 'Not Started', '21/07/2020 22:24:44', '', ''),
(14, 1, '', 'gokhalehemal11@gmail.com', '', 'MOJO0721D05N98252672', '', 'Not Started', '21/07/2020 22:52:03', '', ''),
(15, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0721D05N98252673', 'Moong  Qty: 1,', 'Not Started', '21/07/2020 22:58:49', 'Shahunagar\r\nD6/4 Hdfc Colony', '25'),
(16, 1, '', 'khrawlouvneg@gmail.com', '', 'MOJO0730T05N27601118', '', 'Not Started', '30/07/2020 23:29:00', '', ''),
(17, 1, '', 'gokhalehemal11@gmail.com', '', 'MOJO0826E05N85674993', '', 'Not Started', '26/08/2020 09:09:01', '', ''),
(18, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '08149992059', 'MOJO0826N05N85674997', 'Soya Chunks Qty: 1,', 'Not Started', '26/08/2020 09:12:48', 'Shahunagar\r\nD6/4 Hdfc Colony', '45'),
(19, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '09518786014', 'MOJO0826D05N85675000', 'Lays Qty: 1,', 'Not Started', '26/08/2020 09:14:17', 'House No 84\r\nTaskand society, Nizampura Main Road', '10'),
(20, 1, 'Hemal Gokhale', 'gokhalehemal11@gmail.com', '09518786014', 'MOJO0826A05A43457822', 'Lays Qty: 1,', 'Not Started', '26/08/2020 09:17:40', 'House No 84\r\nTaskand society, Nizampura Main Road', '10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `product_name` varchar(30) DEFAULT NULL,
  `product_category` varchar(30) DEFAULT NULL,
  `product_price` varchar(15) DEFAULT NULL,
  `product_image` varchar(20) DEFAULT NULL,
  `product_status` varchar(30) DEFAULT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `vendor_id`, `product_name`, `product_category`, `product_price`, `product_image`, `product_status`, `product_desc`) VALUES
(1, 1, 'Moong ', 'Wines', '25', '1560271954_of.png', 'Available', 'sample text sample text sample text sample text sample text sample text sample text sample text\r\nsample text sample text sample text sample text sample text sample text sample text sample text '),
(2, 1, 'Sunflower Oil', 'Wines', '50', '1560280713_of1.png', 'Available', ''),
(3, 1, 'Soya Chunks', 'Wines', '45', '1590262123_of3.png', 'Available', ''),
(6, 1, 'Dabur Honey', 'Soaps and Shampoos', '100', '1560323321_of12.png', 'Available', ''),
(18, 1, 'Lays', 'Wines', '10', '1595349131_', 'Available', ''),
(19, 1, 'Chair', 'Furniture', '350', '1595350239_', 'Available', ''),
(28, 1, 'Octagon Dinning Table', 'Furniture', '40000', '1595523852_', 'Available', 'sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text'),
(29, 1, 'Sample mobile', 'Mobile Accesories', '1000', '1595603756_', 'Available', 'sample text sample text sample text sample textsample textsample textsample textsample textsample text sample text sample text sample text sample text'),
(89, 1, 'Trissimai (Essential oils Soap', 'Soaps and Shampoos', '60', '1596129716_', 'Available', 'Trissimai soap orginally made in Meghalya (the Adobe of Clouds India). Tobe use for hand wash and face wash.\r\n100gm.\r\ningredients- Lemon grass, Lemon oil, Glycerine.\r\n'),
(93, 1, 'frock for kids ( age 3-4)', 'Clothing and Fashion', '150', '1596131647_', 'Available', 'Frock for children age 3-4 years. Products from Thongni garments Industry. To order your won design kindly contact contact -87949-9894 / 96157-19444'),
(94, 1, 'frock for kids.( age 3-4)', 'Clothing and Fashion', '250', '1596131734_', 'Available', 'Frock for children age 3-4 years. Products from Thongni garments Industry. To order your won design kindly contact contact -879499894');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `category`, `address`, `phone_no`, `email`, `password`) VALUES
(1, 'Sample 1', 'Grocery Store', 'Shaunagar, Near Sambhaji nagar link road, Chinchwad', '1234567890', 'admin@lakilaka.in', 'admin@lakilaka.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
