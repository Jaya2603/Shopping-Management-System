-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 11:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BRAND_ID` int(20) NOT NULL,
  `BRAND_NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BRAND_ID`, `BRAND_NAME`) VALUES
(1, 'Pepe Jeans'),
(2, 'Adidas'),
(3, 'Paragon'),
(4, 'Levi\'s'),
(5, 'Titan'),
(6, 'Biba'),
(7, 'Denver'),
(8, 'Puma'),
(9, 'Woodland'),
(10, 'Raymond');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(20) NOT NULL,
  `CATEGORY_NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CATEGORY_NAME`) VALUES
(1, 'Topwear'),
(2, 'Bottomwear'),
(3, 'Footwear'),
(4, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `COLOR_ID` int(20) NOT NULL,
  `COLOR_NAME` varchar(30) NOT NULL,
  `COLOR_CODE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`COLOR_ID`, `COLOR_NAME`, `COLOR_CODE`) VALUES
(1, 'Red', 'FF0000'),
(2, 'Green', '00FF00'),
(3, 'Black', '000000'),
(4, 'White', 'FFFFFF'),
(5, 'Neon', 'FFFF00'),
(6, 'Brown', '964B00'),
(7, 'Blue', '0000FF'),
(8, 'Purple', '800080'),
(9, 'Maroon', '800000'),
(10, 'Yellow', 'FFFF00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMER_ID` int(30) NOT NULL,
  `CUSTOMER_NAME` varchar(30) NOT NULL,
  `E_MAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `MOBILE_NO` varchar(10) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `PINCODE` int(10) NOT NULL,
  `GENDER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER_ID`, `CUSTOMER_NAME`, `E_MAIL`, `PASSWORD`, `MOBILE_NO`, `ADDRESS`, `PINCODE`, `GENDER`) VALUES
(1, 'Myra', 'myra@gmail.com', '******', '9785640326', '27/sw app. ghodasar Ahmedabad', 382405, 'Female'),
(2, 'Karan', 'karan@gmail.com', '******', '9024567890', '025.amt flats Nicol Ahmedabad', 382405, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `customer_dimension`
--

CREATE TABLE `customer_dimension` (
  `CD_ID` int(20) NOT NULL,
  `CUSTOMER_ID` int(20) NOT NULL,
  `S_LENGTH` float DEFAULT NULL,
  `S_SHOULDER` float DEFAULT NULL,
  `S_CHEST` float DEFAULT NULL,
  `S_TUMMY` float DEFAULT NULL,
  `S_SEAT` float DEFAULT NULL,
  `S_FRONT` float DEFAULT NULL,
  `P_LENGTH` float DEFAULT NULL,
  `P_WAIST` float DEFAULT NULL,
  `P_SEAT` float DEFAULT NULL,
  `P_INSIDE` float DEFAULT NULL,
  `P_MORI` float DEFAULT NULL,
  `P_THIGH` float DEFAULT NULL,
  `P_KNEE` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_dimension`
--

INSERT INTO `customer_dimension` (`CD_ID`, `CUSTOMER_ID`, `S_LENGTH`, `S_SHOULDER`, `S_CHEST`, `S_TUMMY`, `S_SEAT`, `S_FRONT`, `P_LENGTH`, `P_WAIST`, `P_SEAT`, `P_INSIDE`, `P_MORI`, `P_THIGH`, `P_KNEE`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 44, 28, 25, 24, 22, 22, 21),
(2, 2, 28.5, 47, 36, 38, 38, 25.5, 44, 30, 28, 25.5, 22, 24.5, 23);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_ID` int(20) NOT NULL,
  `E_NAME` varchar(30) NOT NULL,
  `E_MAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(6) NOT NULL,
  `MOBILE_NO` varchar(10) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  `PINCODE` int(20) NOT NULL,
  `POST` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_ID`, `E_NAME`, `E_MAIL`, `PASSWORD`, `MOBILE_NO`, `ADDRESS`, `PINCODE`, `POST`) VALUES
(1, 'Felix', 'felix@gmail.com', '******', '7024567890', '84.rainbow street juhu Mumbai', 400001, 'Tailor'),
(2, 'Shyam', 'shyam@gmail.com', '******', '9024567890', '025.amt flats Nicol Ahmedabad', 380008, 'Cutting Master');

-- --------------------------------------------------------

--
-- Table structure for table `employee_schedule`
--

CREATE TABLE `employee_schedule` (
  `ES_ID` int(20) NOT NULL,
  `E_ID` int(30) NOT NULL,
  `SALES_ID` int(30) DEFAULT NULL,
  `SERVICE_ID` int(30) DEFAULT NULL,
  `PURPOSE` varchar(30) NOT NULL,
  `DATE_TIME` datetime(6) NOT NULL,
  `STATUS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_schedule`
--

INSERT INTO `employee_schedule` (`ES_ID`, `E_ID`, `SALES_ID`, `SERVICE_ID`, `PURPOSE`, `DATE_TIME`, `STATUS`) VALUES
(1, 2, 1, NULL, 'Delivery', '2022-09-15 13:00:00.000000', 'Delivered'),
(2, 1, NULL, 1, 'Shirt Stiching', '2022-08-05 16:00:00.000000', 'Taken Dimension');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `I_ID` int(20) NOT NULL,
  `CUSTOMER_ID` int(20) NOT NULL,
  `DATE` date NOT NULL,
  `TOTAL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`I_ID`, `CUSTOMER_ID`, `DATE`, `TOTAL`) VALUES
(1, 1, '2022-08-13', '2700'),
(2, 2, '2022-08-28', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `IVD_ID` int(20) NOT NULL,
  `I_ID` int(20) NOT NULL,
  `P_ID` int(20) NOT NULL,
  `QUANTITY` int(20) NOT NULL,
  `RATE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`IVD_ID`, `I_ID`, `P_ID`, `QUANTITY`, `RATE`) VALUES
(1, 1, 5, 1, '1200'),
(2, 1, 1, 1, '1500'),
(3, 2, 1, 2, '500');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `MATERIAL_ID` int(10) NOT NULL,
  `MATERIAL_NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`MATERIAL_ID`, `MATERIAL_NAME`) VALUES
(1, 'Cotton'),
(2, 'Silk'),
(3, 'Polyster'),
(4, 'Wool'),
(5, 'Synthetic'),
(6, 'Blend'),
(7, 'Velvet'),
(8, 'Leather');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `NAME` varchar(30) NOT NULL,
  `MOBILE_NO` varchar(10) NOT NULL,
  `PASSWORD` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`NAME`, `MOBILE_NO`, `PASSWORD`) VALUES
('Sunil Variyani', '9876541239', '******');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_ID` int(30) NOT NULL,
  `P_NAME` varchar(150) NOT NULL,
  `CATEGORY_ID` int(30) NOT NULL,
  `TYPE_ID` int(30) NOT NULL,
  `BRAND_ID` int(30) NOT NULL,
  `MATERIAL_ID` int(30) DEFAULT NULL,
  `IMAGE_URL` varchar(150) NOT NULL,
  `STYLE` varchar(150) DEFAULT NULL,
  `DES` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_ID`, `P_NAME`, `CATEGORY_ID`, `TYPE_ID`, `BRAND_ID`, `MATERIAL_ID`, `IMAGE_URL`, `STYLE`, `DES`) VALUES
(1, 'Bunny print Hoodie\r\n', 1, 3, 8, 4, 'Ho.png\r\n', 'Round neck & full sleeves \r\n', 'Round neck hoodie with full sleeves in purple color with bunny print in front.\r\n'),
(2, 'Plain Shirt \r\n', 1, 1, 10, 1, 'Sh.png\r\n', 'full sleeves with collar\r\n', 'Cotton collar strip Shirt with full sleeves in blue color.\r\n'),
(3, 'V-neck T-shirt\r\n', 1, 2, 10, 3, 'Ts.png\r\n', NULL, 'Polyester V-neck T-shirt with half sleeves in Yellow color with “Hi” print in front.\r\n'),
(4, 'Velvet Sherwani\r\n', 1, 4, 6, 7, 'Sw.png\r\n', NULL, 'Velvet Sherwani with Mandarian collar with full button, placket and long sleeves \r\n'),
(5, 'Ripped Jeans\r\n', 2, 9, 1, 1, 'Pt.png\r\n', 'Ripped Jeans\r\n', 'Plain bottom jeans with 2 front & back pockets.\r\n'),
(6, 'Silk Dhoti\r\n', 2, 12, 6, 2, 'Dh.png\r\n', NULL, 'Solid silk dhoti pants with gathers and pleats.\r\n'),
(7, 'Neon Shorts\r\n', 2, 11, 2, 3, 'So.png\r\n', NULL, 'Neon solid mid-rise regular shorts  has 2 pockets, drawstring closure.\r\n'),
(8, 'Marron Trousers\r\n', 2, 10, 4, 6, 'To.png\r\n', 'Solid trouser\r\n', 'Maroon  trousers with elastic waistband,\r\nDrawstring closure with 2 front pockets.\r\n'),
(9, 'Green Sneakers\r\n', 3, 20, 2, 8, 'GS.png\r\n', 'Leather sneakers', 'Leather sneakers With rubber outsole and lace closure.\r\n'),
(10, 'formal office boots \r\n', 3, 18, 3, 8, 'FO.png\r\n', 'office boots\r\n', 'Pair of black Leather boots with lace.\r\n'),
(11, 'brown sandals synthetic \r\n', 3, 17, 3, 5, 'Bl.png\r\n', 'Synthetic Sandals\r\n', 'brown sandals synthetic slip-on closure,Pattern sole.\r\n'),
(12, 'Wood-land Brown Wallet\r\n', 4, 14, 9, 8, 'Wl.png\r\n', NULL, 'Fold wallet,2 compartment,6 cardholders with 2 pockets and brown in color.\r\n'),
(13, 'Denver Perfume\r\n', 4, 15, 7, NULL, 'Pe.png\r\n', NULL, 'Long lasting perfume and with fresh rejuvenating fragrance.\r\n'),
(14, 'Black Titan Watch\r\n', 4, 16, 4, 8, 'WA.png\r\n', NULL, 'Solid round brass dial , water resistant, leather strap with a tang closure in black color.\r\n'),
(15, 'Wood-land Brown Wallet\r\n\r\n', 4, 13, 9, 8, 'Bl.png\r\n', 'Leather belts\r\n', 'Plain woodland formal reversible leather belts. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `PD_ID` int(20) NOT NULL,
  `P_ID` int(20) NOT NULL,
  `SIZE_ID` int(20) DEFAULT NULL,
  `COLOR_ID` int(20) NOT NULL,
  `REGULAR_PRICE` varchar(30) NOT NULL,
  `OFFER_PRICE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`PD_ID`, `P_ID`, `SIZE_ID`, `COLOR_ID`, `REGULAR_PRICE`, `OFFER_PRICE`) VALUES
(1, 1, 1, 8, '400', '325'),
(2, 1, 1, 3, '400', '325'),
(3, 1, 1, 7, '400', '325'),
(4, 1, 2, 2, '500', '425'),
(5, 1, 2, 3, '500', '425'),
(6, 1, 2, 6, '500', '425'),
(7, 1, 3, 7, '550', '450'),
(8, 1, 3, 9, '550', '450'),
(9, 1, 3, 10, '550', '450'),
(10, 1, 4, 1, '600', NULL),
(11, 1, 4, 3, '600', NULL),
(12, 1, 4, 4, '600', NULL),
(13, 1, 4, 5, '600', NULL),
(14, 1, 4, 7, '600', NULL),
(15, 1, 4, 10, '600', NULL),
(16, 1, 5, 6, '625', NULL),
(17, 1, 5, 9, '625', NULL),
(18, 1, 6, 1, '635', NULL),
(19, 1, 6, 3, '635', NULL),
(20, 1, 7, 10, '640', NULL),
(21, 1, 8, 9, '680', NULL),
(22, 5, 12, 6, '599', NULL),
(23, 5, 13, 7, '620', NULL),
(24, 5, 14, 3, '780', NULL),
(25, 5, 14, 6, '780', NULL),
(26, 5, 15, 3, '1050', '999'),
(27, 5, 15, 6, '1050', '999'),
(28, 5, 15, 7, '1050', '999'),
(29, 5, 16, 7, '1000', NULL),
(30, 5, 17, 3, '1000', NULL),
(31, 5, 18, 3, '1300', NULL),
(32, 5, 18, 7, '1300', NULL),
(33, 10, 10, 3, '799', '640'),
(34, 12, NULL, 6, '399', '360'),
(35, 13, 19, 3, '349', '244'),
(36, 14, NULL, 3, '2999', NULL),
(37, 15, NULL, 6, '350', '200');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `PURCHASE_ID` int(20) NOT NULL,
  `S_ID` int(30) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `ORDER_TOTAL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`PURCHASE_ID`, `S_ID`, `ORDER_DATE`, `ORDER_TOTAL`) VALUES
(1, 1, '2022-08-23', '25000'),
(2, 1, '2022-07-25', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_detail`
--

CREATE TABLE `purchase_order_detail` (
  `POD_ID` int(20) NOT NULL,
  `PURCHASE_ID` int(30) NOT NULL,
  `P_ID` int(30) NOT NULL,
  `QUANTITY` int(30) NOT NULL,
  `RATE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order_detail`
--

INSERT INTO `purchase_order_detail` (`POD_ID`, `PURCHASE_ID`, `P_ID`, `QUANTITY`, `RATE`) VALUES
(1, 1, 1, 25, '1000'),
(2, 2, 2, 10, '1000');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `SALES_ID` int(30) NOT NULL,
  `CUSTOMER_ID` int(30) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `ORDER_TOTAL` varchar(30) NOT NULL,
  `STATUS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`SALES_ID`, `CUSTOMER_ID`, `ORDER_DATE`, `ORDER_TOTAL`, `STATUS`) VALUES
(1, 1, '2022-09-23', '500', 'Pending'),
(2, 2, '2022-09-19', '6000', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_detail`
--

CREATE TABLE `sales_order_detail` (
  `SALES_DETAIL_ID` int(20) NOT NULL,
  `SALES_ID` int(30) NOT NULL,
  `PRODUCT_ID` int(30) NOT NULL,
  `QUANTITY` int(30) NOT NULL,
  `RATE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order_detail`
--

INSERT INTO `sales_order_detail` (`SALES_DETAIL_ID`, `SALES_ID`, `PRODUCT_ID`, `QUANTITY`, `RATE`) VALUES
(1, 1, 1, 1, '500'),
(2, 2, 4, 1, '4000'),
(3, 2, 6, 1, '2000');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `SERVICE_ID` int(20) NOT NULL,
  `S_NAME` varchar(30) NOT NULL,
  `RATE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`SERVICE_ID`, `S_NAME`, `RATE`) VALUES
(1, 'Shirt', '300'),
(2, 'Pants', '500'),
(3, 'Sherwani', '1000'),
(4, 'Dhoti', '600');

-- --------------------------------------------------------

--
-- Table structure for table `service_order`
--

CREATE TABLE `service_order` (
  `SV_ID` int(20) NOT NULL,
  `CUSTOMER_ID` int(20) NOT NULL,
  `DATE` date NOT NULL,
  `TOTAL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_order`
--

INSERT INTO `service_order` (`SV_ID`, `CUSTOMER_ID`, `DATE`, `TOTAL`) VALUES
(1, 1, '2022-08-31', '4800'),
(2, 1, '2022-08-26', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `service_order_detail`
--

CREATE TABLE `service_order_detail` (
  `SVO_ID` int(20) NOT NULL,
  `SV_ID` int(20) NOT NULL,
  `SERVICE_ID` int(20) NOT NULL,
  `QUANTITY` int(20) NOT NULL,
  `RATE` varchar(30) NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `INSTRUCTION` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_order_detail`
--

INSERT INTO `service_order_detail` (`SVO_ID`, `SV_ID`, `SERVICE_ID`, `QUANTITY`, `RATE`, `STATUS`, `INSTRUCTION`) VALUES
(1, 1, 1, 3, '800', 'Pending', 'Full Sleeve With Collar'),
(2, 1, 2, 3, '800', 'Pending', 'Formal Pants'),
(3, 2, 2, 2, '500', 'Delivered', 'Formal Pants');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `SIZE_ID` int(20) NOT NULL,
  `SIZE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`SIZE_ID`, `SIZE`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, '2XL'),
(6, '3XL'),
(7, '4XL'),
(8, '5XL'),
(9, '7UK'),
(10, '8UK'),
(11, '9UK'),
(12, '28'),
(13, '30'),
(14, '32'),
(15, '34'),
(16, '36'),
(17, '38'),
(18, '40'),
(19, '150ml');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `ST_ID` int(20) NOT NULL,
  `P_ID` int(20) NOT NULL,
  `QUANTITY` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`ST_ID`, `P_ID`, `QUANTITY`) VALUES
(1, 1, 2),
(2, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `S_ID` int(20) NOT NULL,
  `S_NAME` varchar(30) NOT NULL,
  `E_MAIL` varchar(30) NOT NULL,
  `MOBILE_NO` varchar(10) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  `PINCODE` int(10) NOT NULL,
  `CONTACT_PERSON` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`S_ID`, `S_NAME`, `E_MAIL`, `MOBILE_NO`, `ADDRESS`, `PINCODE`, `CONTACT_PERSON`) VALUES
(1, 'AFOX', 'AFOX3@gmail.com', '7456982301', '30/ABA complex khokhara Ahmeda', 380008, 'Rohan');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `TYPE_ID` int(20) NOT NULL,
  `TYPE_NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`TYPE_ID`, `TYPE_NAME`) VALUES
(1, 'Shirt'),
(2, 'T-Shirt'),
(3, 'Hoodie'),
(4, 'Sherwani'),
(5, 'Coat'),
(6, 'Blazer'),
(7, 'Kurta'),
(8, 'Jacket'),
(9, 'Jeans'),
(10, 'Trousers'),
(11, 'Shorts'),
(12, 'Dhoti'),
(13, 'Belt'),
(14, 'Wallet'),
(15, 'Perfume'),
(16, 'Watch'),
(17, 'Sandles'),
(18, 'Formal Office Boots'),
(19, 'Sport Shoes'),
(20, 'Sneakers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BRAND_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`COLOR_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `customer_dimension`
--
ALTER TABLE `customer_dimension`
  ADD PRIMARY KEY (`CD_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `employee_schedule`
--
ALTER TABLE `employee_schedule`
  ADD PRIMARY KEY (`ES_ID`),
  ADD KEY `E_ID` (`E_ID`),
  ADD KEY `SALES_ID` (`SALES_ID`),
  ADD KEY `SERVICE_ID` (`SERVICE_ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`I_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`IVD_ID`),
  ADD KEY `I_ID` (`I_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`MATERIAL_ID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`NAME`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `CATEGORY_ID` (`CATEGORY_ID`),
  ADD KEY `BRAND_ID` (`BRAND_ID`),
  ADD KEY `TYPE_ID` (`TYPE_ID`),
  ADD KEY `MATERIAL_ID` (`MATERIAL_ID`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`PD_ID`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `COLOR_ID` (`COLOR_ID`),
  ADD KEY `SIZE_ID` (`SIZE_ID`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`PURCHASE_ID`),
  ADD KEY `S_ID` (`S_ID`);

--
-- Indexes for table `purchase_order_detail`
--
ALTER TABLE `purchase_order_detail`
  ADD PRIMARY KEY (`POD_ID`),
  ADD KEY `PURCHASE_ID` (`PURCHASE_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`SALES_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `sales_order_detail`
--
ALTER TABLE `sales_order_detail`
  ADD PRIMARY KEY (`SALES_DETAIL_ID`),
  ADD KEY `SALES_ID` (`SALES_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`SERVICE_ID`);

--
-- Indexes for table `service_order`
--
ALTER TABLE `service_order`
  ADD PRIMARY KEY (`SV_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `service_order_detail`
--
ALTER TABLE `service_order_detail`
  ADD PRIMARY KEY (`SVO_ID`),
  ADD KEY `SV_ID` (`SV_ID`),
  ADD KEY `SERVICE_ID` (`SERVICE_ID`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`SIZE_ID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`ST_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BRAND_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CATEGORY_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `COLOR_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=611;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUSTOMER_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `customer_dimension`
--
ALTER TABLE `customer_dimension`
  MODIFY `CD_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `E_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `employee_schedule`
--
ALTER TABLE `employee_schedule`
  MODIFY `ES_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `I_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `IVD_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `MATERIAL_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `PD_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `PURCHASE_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_order_detail`
--
ALTER TABLE `purchase_order_detail`
  MODIFY `POD_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `SALES_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales_order_detail`
--
ALTER TABLE `sales_order_detail`
  MODIFY `SALES_DETAIL_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `SERVICE_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_order`
--
ALTER TABLE `service_order`
  MODIFY `SV_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_order_detail`
--
ALTER TABLE `service_order_detail`
  MODIFY `SVO_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `SIZE_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5011;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `ST_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `S_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `TYPE_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3022;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_dimension`
--
ALTER TABLE `customer_dimension`
  ADD CONSTRAINT `customer_dimension_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `employee_schedule`
--
ALTER TABLE `employee_schedule`
  ADD CONSTRAINT `employee_schedule_ibfk_1` FOREIGN KEY (`E_ID`) REFERENCES `employee` (`E_ID`),
  ADD CONSTRAINT `employee_schedule_ibfk_2` FOREIGN KEY (`SALES_ID`) REFERENCES `sales_order` (`SALES_ID`),
  ADD CONSTRAINT `employee_schedule_ibfk_3` FOREIGN KEY (`SERVICE_ID`) REFERENCES `service` (`SERVICE_ID`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD CONSTRAINT `invoice_detail_ibfk_1` FOREIGN KEY (`I_ID`) REFERENCES `invoice` (`I_ID`),
  ADD CONSTRAINT `invoice_detail_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `product` (`P_ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`BRAND_ID`) REFERENCES `brand` (`BRAND_ID`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`TYPE_ID`) REFERENCES `type` (`TYPE_ID`),
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`MATERIAL_ID`) REFERENCES `material` (`MATERIAL_ID`);

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `product` (`P_ID`),
  ADD CONSTRAINT `product_details_ibfk_2` FOREIGN KEY (`COLOR_ID`) REFERENCES `color` (`COLOR_ID`),
  ADD CONSTRAINT `product_details_ibfk_3` FOREIGN KEY (`SIZE_ID`) REFERENCES `size` (`SIZE_ID`);

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `supplier` (`S_ID`);

--
-- Constraints for table `purchase_order_detail`
--
ALTER TABLE `purchase_order_detail`
  ADD CONSTRAINT `purchase_order_detail_ibfk_1` FOREIGN KEY (`PURCHASE_ID`) REFERENCES `purchase_order` (`PURCHASE_ID`),
  ADD CONSTRAINT `purchase_order_detail_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `product` (`P_ID`);

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `sales_order_detail`
--
ALTER TABLE `sales_order_detail`
  ADD CONSTRAINT `sales_order_detail_ibfk_1` FOREIGN KEY (`SALES_ID`) REFERENCES `sales_order` (`SALES_ID`),
  ADD CONSTRAINT `sales_order_detail_ibfk_2` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`P_ID`);

--
-- Constraints for table `service_order`
--
ALTER TABLE `service_order`
  ADD CONSTRAINT `service_order_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `service_order_detail`
--
ALTER TABLE `service_order_detail`
  ADD CONSTRAINT `service_order_detail_ibfk_1` FOREIGN KEY (`SV_ID`) REFERENCES `service_order` (`SV_ID`),
  ADD CONSTRAINT `service_order_detail_ibfk_2` FOREIGN KEY (`SERVICE_ID`) REFERENCES `service` (`SERVICE_ID`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `product` (`P_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
