-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:33 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allura`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(3) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(3, 'farah', 'farah.gh@yahoo.com', '4444'),
(4, 'omar', 'omar1999@yahoo.com', 'omar2020');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'living room'),
(2, 'Bedroom'),
(3, 'Kitchen'),
(4, 'Outdoor');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customer_id` int(3) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_num` varchar(100) NOT NULL,
  `exp_month` int(11) NOT NULL,
  `exp_year` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `email`, `pass`, `phone`, `card_name`, `card_num`, `exp_month`, `exp_year`) VALUES
(20, 'farah', 'Alhorani', 'farah.alhorani@yahoo.com', 'farah12345', '7998562417', 'Farah', '5522', 2, 2020),
(21, 'mohamed', 'ahmad', 'mohamad.ahmad@yahoo.com', 'moh1111', '0785274961', 'Mohamad ', '4488', 12, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `total`) VALUES
(8, 20, 820),
(9, 21, 623),
(11, 20, 274);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`product_id` int(3) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_img` varchar(1000) NOT NULL,
  `product_price` float NOT NULL,
  `product_details` varchar(1000) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_img`, `product_price`, `product_details`, `cat_id`) VALUES
(2, '3-seat sofa ', 'gallary.jpg', 749, 'with chaise longue By KIVIK', 1),
(14, 'STRANDMON ', 'strandmon-footstool-nordvalla-red__0690292_PE723212_S5.jpg', 59.99, ' Footstool, Nordvalla', 1),
(15, 'NORRÃ…KER ', 'norraker-bar-table-and-2-bar-stools-birch-birch__0721799_PE733383_S5.jpg', 349, 'Bar table and 2 bar stools ', 1),
(16, 'BESTÃ…   ', '414008d2-4724-4f8f-bffe-7178522cf621.jpg', 500, 'TV storage combination/glass doors, Lappviken/Sindvik black-brown clear glass', 1),
(17, 'HEMNES ', 'bf66ee83-d275-456a-8f53-87bd555199c5.jpg', 399, ' Day-bed w 3 drawers/2 mattresses, grey/Malfors firm ', 1),
(18, 'STACKHOLMEN  ', 'aad840a0-44e3-4e64-b0cf-29100f3248d1.jpg', 29.99, ' Stool, outdoor, light brown stained48x35x43 cm', 1),
(19, 'DELAKTIG  ', '7fad913c-8451-40c2-ad27-ed4c383c952f.jpg', 539, '2-seat platform, Gunnared light brown-pink Price incl.', 1),
(20, ' VALLENTUNA   ', '78652f8e-a306-43d0-8fc8-ddeb1f5d06a8.jpg', 505, 'Sofa-bed module with backrests, Orrsta olive-green', 1),
(21, 'BILLY Bookcase  ', 'ac254c4d-0eca-457e-bc4d-5099c41bd233.jpg', 59.97, 'brown ash veneer80x28x202 cm ', 1),
(22, 'VALLENTUNA ', '6dc67ece-97f2-481b-9794-6a3d2651ef43.jpg', 505, 'Sofa-bed module with backrests, Orrsta olive-green Bookcase, brown ash veneer80x28x202 cm', 1),
(24, 'HEMNES  ', '912cfdb0-d1ee-43fb-b124-0414261fa01b.jpg', 329, 'Glass-door cabinet with 3 drawers, white stain/black 90x197 cm', 1),
(25, ' Coffee table', '390d22e4-b190-4e21-876e-7ee742a70de8.jpg', 99.9, 'dark blue-green90 cm', 1),
(26, '', '4344b582-e35c-42fc-8bec-9e3c846821cb.jpg', 349, '', 2),
(27, '', '90c42087-6c7f-48ab-a1a2-4ca99fdff7f1.jpg', 399, '', 2),
(28, '', 'c227325d-b90f-4e2f-adc7-35ba024703dd.jpg', 449, '', 2),
(29, '', '66c46b3c-b4e4-4a2c-87a0-823951ce6a17.jpg', 305, '', 2),
(30, '', '09e7abc1-acb3-42f6-b180-0fd4540335c6.jpg', 299, '', 2),
(31, '', 'e2e4ad36-e335-4446-b048-85c6cf0fd02b.jpg', 199, '', 2),
(32, '', '37451e70-2136-4a4a-9323-656ac0fe1dd9.jpg', 305, '', 2),
(33, '', 'f1acc756-b954-421a-9580-1c877c4b8670.jpg', 77, '', 2),
(34, '', '6fa072c9-ffcc-45d2-a19a-06e56999aa3a.jpg', 349, '', 2),
(35, '', '116883fb-e7e9-4a44-b4ca-d7c5ee7329ea.jpg', 149, '', 2),
(36, '', '34a4021e-af20-4f3e-8529-58fa9c8cbabe.jpg', 339, '', 2),
(37, '', '2045b305-7530-4ff9-8382-70cbc28bf209.jpg', 449, '', 2),
(38, '', '94c33e28-e0bf-498c-87ab-c33a4a6c4eaa.jpg', 99.9, '', 2),
(39, '', 'f4c585a2-0bb8-47d1-9360-48fdb4186805.jpg', 93, '', 2),
(40, '', 'pax-hasvik-wardrobe-combination-white__0938845_PH170414_S5.jpg', 366, '', 2),
(41, '', 'Capture.JPG', 293, '', 2),
(42, '', '50b2a24c-b3ae-4732-b597-b20f5ff1c3c2.jpg', 317, '', 2),
(43, '', 'e09bd301-15ad-4665-9ded-1e1e561f1c00.jpg', 199, '', 2),
(44, 'SKOGSÃ… Worktop    ', 'ca0e8084-1aa3-430e-b868-3ac6433a66d7.jpg', 215, 'oak/veneer246x3.8 cm', 3),
(45, 'KARLBY Worktop ', 'd4efce4c-d1e8-4185-915a-430195960225.jpg', 125, 'oak/veneer246x3.8 cm   ', 3),
(46, 'EKBACKEN Worktop    ', '647a855b-45de-4384-94eb-c8cbfb58971b.jpg', 65, 'ash effect/laminate186x2.8 cm', 3),
(47, 'EKBACKEN Worktop', 'db6f86ba-c8bd-4b91-8333-5a11d1627c3a.jpg', 75, ' white marble effect/laminate246x2.8 cm', 3),
(48, 'EKBACKEN Worktop ', '00aab417-5349-4a89-8392-b3dbc64ea2b3.jpg', 65, 'dark grey marble effect/laminate186x2.8 cm', 3),
(49, 'SÃ„LJAN Worktop ', 'd47b32fb-f1fe-447f-b2ef-f3d12bb38f6d.jpg', 60, 'black mineral effect/laminate186x3.8 cm', 3),
(50, 'HILLESJÃ–N', 'hillesjoen-inset-sink-1-1-2-bowl-stainless-steel__0867206_PE670927_S5.jpg', 125, ' Inset sink 1 1/2 bowl, stainless steel58x46 cm', 3),
(51, 'HILLESJÃ–N', 'cb2b834b-7125-457d-88bb-df0e08a5e2b8.jpg', 140, ' Inset sink 1 1/2 bowl, stainless steel58x46 cm', 3),
(52, 'HILLESJÃ–N', 'cd96d1d8-4b99-44f2-9c49-d5e19fcbc85d.jpg', 130, ' Inset sink 1 1/2 bowl, stainless steel58x46 cm', 3),
(53, 'GAMLESJÃ–N', '4c21fb64-4a5e-4b19-a179-4515b37c042c.jpg', 99.9, ' Dual-control kitchen mixer tap, brushed black metal', 3),
(54, 'Kitchen mixer tap ', '5d301b10-3bf4-4208-be72-f0e44430138c.jpg', 95, 'polished brass-colour', 3),
(55, 'Kitchen mixer tap', '02a7eefa-0fc8-43c7-9404-8fc6de1f08c7.jpg', 75, ' stainless steel colour', 3),
(56, '4-seat conversation set ', '332b1305-2f74-4e8c-9163-0a4525bd2d98.jpg', 596, 'A modular sofa combined with comfortable FRÃ–SÃ–N/DUVHOLMEN cushions for long.', 4),
(57, 'BESTÃ…   ', 'f6d11fcb-bea8-4624-af22-bef99e7a714d.jpg', 139, 'Sun lounger, brown stained Price incl. VAT', 4),
(58, ' VALLENTUNA OXNÃ–  ', '610dc762-be4a-4b43-8beb-e831fb59616f.jpg', 213, 'LINDÃ–JA Parasol, hanging with base, black/SvartÃ¶ dark grey300 cm Price incl. VAT', 4),
(59, 'Ã„PPLARÃ–  ', 'c629b64c-ae15-442d-93d4-b7315db8ffd4.jpg', 139, 'Sun lounger, brown stained Price incl. VAT ', 4),
(60, 'Ã„PPLARÃ– ', '9ca9743a-0993-4c09-b652-d916e4bacc43.jpg', 139, ' Sun lounger, brown stained Price incl. VAT', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customer_id`), ADD UNIQUE KEY `card_num` (`card_num`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
