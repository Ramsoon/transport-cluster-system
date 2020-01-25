-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 05:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `employee_no` varchar(15) DEFAULT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_phone` varchar(15) DEFAULT NULL,
  `employee_address` varchar(100) DEFAULT NULL,
  `employee_national_id` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `employee_no`, `employee_name`, `employee_phone`, `employee_address`, `employee_national_id`, `password`, `is_admin`) VALUES
(1, '1', 'dele', '08100850331', 'Lokongoma PHASE1, Lokoja', '12344311324', '123456', 1),
(6, NULL, 'sadiq abdulrahaman', '08169966247', 'FEN JUCTION, Lokoja', '23453212345', 'sadiq123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(7, 'REFRIGARATOR'),
(8, 'FREEZER'),
(9, 'STABILIZER'),
(10, 'GENERATOR SET'),
(11, 'WASHING MACHINE'),
(12, 'GAS COOKER'),
(13, 'AIR CONDITIONER'),
(14, 'MICROWAVE OVEN'),
(15, 'TELEVISION SET'),
(16, 'WATER DISPENSER'),
(17, 'AC KIT');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_logo`) VALUES
(2, 'Thermocool Showroom Lokongoma (Commy Gift), Lokoja', NULL),
(3, 'Thermocool Showroom Lokongoma (Commy Gift), Lokoja', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_contact`) VALUES
(16, 'CELESTINE AKOWE', '08032175073');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `selling_date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `employee_no` varchar(15) DEFAULT NULL,
  `amount` double NOT NULL,
  `discount` double NOT NULL,
  `vat` double NOT NULL,
  `cash_given` double NOT NULL,
  `cash_back` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `selling_date`, `customer_id`, `employee_no`, `amount`, `discount`, `vat`, `cash_given`, `cash_back`) VALUES
(24, '2018-11-07 21:12:20', 16, '1', 130000, 1.56, 0, 130000, 2028);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_pk` int(11) NOT NULL,
  `product_id` varchar(15) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_type` int(11) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_size` varchar(15) DEFAULT NULL,
  `product_price` double NOT NULL,
  `buying_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_pk`, `product_id`, `product_name`, `product_type`, `product_category`, `product_size`, `product_price`, `buying_price`) VALUES
(11, 'HR67', 'HR67S', 8, 7, '30', 33000, 30000),
(12, 'HR107', 'HR107S', 9, 7, '30', 38000, 35000),
(13, 'HR134', 'HR134W', 10, 7, '40', 40500, 37000),
(14, 'HR134S', 'HR134S', 11, 7, '30', 42000, 38500),
(15, 'HR142S', 'HR142S', 12, 7, '30', 57500, 54000),
(16, 'HR147S', 'HR147S', 13, 7, '30', 55500, 52000),
(17, 'HR177S', 'HR177S', 14, 7, '30', 63500, 60000),
(18, 'HR80AEX', 'HR80AEX', 15, 7, '30', 78000, 73000),
(19, 'HR95EX', 'HR95EX', 17, 7, '30', 72000, 66000),
(20, 'HR160EX', 'HR120EX', 18, 7, '30', 98500, 92500),
(21, 'HR180EX', 'HR180EX', 19, 7, '30', 105500, 99500),
(22, 'HR195M', 'HR195M', 20, 7, '30', 98500, 93500),
(23, 'HR195S', 'HR195S', 21, 7, '30', 94000, 89000),
(24, 'HR200WX', 'HR200WX', 22, 7, '30', 133300, 126000),
(25, 'HR250LUX', 'HR250LUX', 23, 7, '30', 147900, 140500),
(26, 'HR250ICEMASTER', 'HR250 ICEMASTER', 24, 8, '30', 202000, 190000),
(27, 'HRF280A', 'HRF280A', 25, 7, '30', 154400, 147000),
(28, 'HR300LUX', 'HR300LUX', 26, 7, '300', 163500, 156000),
(29, 'HR310LUX', 'HR310 A EX', 27, 7, '310', 156500, 150500),
(30, 'HR350LUX', 'HRF 350LUX', 28, 7, '350', 196500, 187500),
(31, 'BC110BC', 'BC110BC', 29, 7, '110', 117500, 105500),
(32, 'SD162D', 'SD162D', 30, 7, '162', 148500, 136500),
(33, 'SC372', 'SC372', 31, 7, '372', 310500, 290500),
(34, 'HTF66W', 'HTF66W', 32, 8, '66', 62000, 58000),
(35, 'HTF100W', 'HTF100W', 33, 8, '100', 65000, 60000),
(36, 'HTF103S', 'HTF103S', 34, 8, '103', 68000, 63500),
(37, 'HTF126S', 'HTF126S', 37, 8, '126', 72000, 67000),
(38, 'HTF146S', 'HTF146S', 36, 8, '146', 83000, 78000),
(39, 'HTF150W', 'HTF150W', 38, 8, '150', 75000, 70000),
(40, 'HTF166S', 'HTF166S', 39, 8, '166', 88000, 82500),
(41, 'HTF200W', 'HTF200W', 40, 8, '200', 85000, 78000),
(42, 'HTF203W', 'HTF203W', 41, 8, '203', 91000, 85000),
(43, 'HTF203S', 'HTF203S', 42, 8, '203', 100000, 90000),
(44, 'HTF219W', 'HTF219W', 43, 8, '219', 110000, 103000),
(45, 'HTF259', 'HTF259H', 44, 8, '259', 125000, 118000),
(46, 'HTF319W', 'HTF319W', 45, 8, '319', 139700, 132700),
(47, 'HTF319S', 'HTF319S', 46, 8, '319', 145000, 137000),
(48, 'HTF379W', 'HTF379W', 47, 8, '379', 176000, 163000),
(49, 'HTF429W', 'HTF429W', 48, 8, '429', 233771, 220000),
(50, 'HTF519W', 'HTF519W', 49, 8, '519', 255017, 240000),
(51, 'HTF719W', 'HTF719W', 50, 8, '719', 309730, 291500),
(52, '1500D', '1500D WATT', 51, 9, '1500', 13200, 12700),
(53, '2000D', '2000D WATT', 52, 9, '2000', 15700, 15200),
(54, '5000D', '5000D WATT', 53, 9, '5000', 34400, 33400),
(55, '5000WDR', '5000WDR WATT', 54, 9, '6', 33300, 32300),
(56, '2500ES', 'BOBO MAT ELECT', 57, 10, '2.5', 96000, 90500),
(57, '2500MS', ' BOBO MAX RECOIL 2.5KVA', 58, 10, '2500', 83500, 78000),
(58, '3500ES', 'MAJOR 3500ES', 59, 10, '3500', 118600, 112600),
(59, 'HUSTLERMAX3500M', 'HUSTLER MAX RECOIL 3500MS', 60, 10, '3500', 101000, 95600),
(60, 'HOSTLERMAXELECT', 'HOSTLER MAXELECT 3500ES', 61, 10, '3500', 112500, 107500),
(61, 'HUSTLERMAXELECT', 'HUSTLER MAX ELECT 3800ES', 62, 10, '3800', 132000, 127000),
(62, 'TECOPTIMA7200RS', 'TEC OPTIMA 7200RS', 63, 10, '7200', 245500, 235500),
(63, 'BIGBOYELECT45KV', 'BIG BOY ELECT 4.5KVA ', 64, 10, '4.5', 195500, 188500),
(64, 'OGA6900ES', 'OGA ELECT 6900ES', 65, 10, '6900', 210700, 202700),
(65, '8100ES', 'IGWE ELECT 8100ES', 66, 10, '8100', 234500, 224500),
(66, 'ODOGWU10000RS', 'ODOGWU 10000RS', 67, 10, '10000', 307700, 293000),
(67, 'TECPTIMA9200RS', 'TEC OPTIMA 9200RS', 68, 10, '9200', 273700, 261700),
(68, 'TLSA3.5KG', 'TLSA 3.5KG', 69, 11, '3.5', 31000, 28000),
(69, 'TLSA6KG', 'TLSA 6KG', 71, 11, '6', 51000, 47500),
(70, 'TLSA8KG', 'TLSA 8KG', 72, 11, '8', 61000, 53000),
(71, 'TLSA10.2KG', 'TLSA 10.2KG', 73, 11, '10.2', 67500, 59500),
(72, 'TLSA13KG', 'TLSA 13KG', 74, 11, '13', 95000, 86500),
(73, 'HTMOFRONTLOAD6.', 'HTMO FRONT LOAD 6.0KG', 75, 11, '6.0', 106000, 99000),
(74, 'HTMOFRONTLOAD8.', 'HTMO FRONT LOAD 8.0KG', 76, 11, '8.0', 208000, 200000),
(75, 'HTMO7KG', 'HTMO 7.0KG (AUTOMATIC)', 77, 11, '7.0', 91000, 87000),
(76, 'HTMO8.0KG', 'HTMO 8.0KG (AUTOMATIC)', 78, 11, '8.0', 105500, 101500),
(77, '2HOBSTAINLESS', '2HOB STAINLESS', 79, 12, '2', 14500, 14000),
(78, '2HOBTEFLON', '2HOB TELFLON', 80, 12, '2', 14500, 14000),
(79, '2HOBGLASSTOP', '2HOB GLASS TOP', 81, 12, '2', 18800, 17500),
(80, '4HOBTABLETOP', '4HOB TABLE TOP', 82, 12, '2', 14500, 14000),
(81, '4GASSUPREME', '4GAS SUPREME (B)', 83, 12, '4', 56000, 52000),
(82, '3G1ESUPREME', '3G1E SUPREME(B)', 84, 12, '5', 57700, 55000),
(83, '4GASPREMIUM', '4GAS PREMIUM', 85, 12, '4', 66000, 62500),
(84, '3G1EPREMIUM', '3G1E PREMIUM(S)', 86, 12, '3', 67500, 64500),
(85, '4GASLUXURY', '4GAS LUXURY', 87, 12, '4', 84500, 80000),
(86, '3G1ELUXURY', '3G1E LUXURY', 88, 12, '3', 86500, 82000),
(87, '1HPAIRCONDITION', 'IHP AIR CONDITIONER', 89, 13, '1', 92000, 87500),
(88, '1.5HPAIRCONDITI', '1.5HP AIR CONDITIONER', 90, 13, '1.5', 102000, 97500),
(89, '2HPAIRCONDITION', '2HP AIR CONDITIONER', 91, 13, '2', 151000, 144000),
(90, '1HPINVERTERAC', '1HP INVERTER AC', 92, 13, '1', 117000, 112500),
(91, '1.5INVERTERAC', '1.5 INVERTER AIR CONDITIONER', 0, 0, '1.5', 131000, 126000),
(92, '2HPINVERTERAIRC', '2HP INVERTER AC', 94, 13, '2HP', 184000, 177500),
(93, 'HSU/18003/HBF', 'STANDING AIR CONDITIONER', 95, 13, 'HSU/18003/HBF', 284000, 269000),
(94, 'HTMO2070E', 'HTMO 2070E', 97, 14, '2070', 31000, 29200),
(95, 'HTMO2070M', 'HTMO 2070M', 97, 14, '2070', 27300, 25800),
(96, 'HTMO2380G', 'HTMO 2380G', 98, 14, '2380', 38050, 36550),
(97, 'BLENDER2120', 'BLENDER 2120', 99, 14, '2120', 7000, 6500),
(98, '32INCHTV', '32 INCH TV', 100, 15, '32', 53500, 49000),
(99, '42INCHTV', '42 INCH TV', 101, 15, '42', 141600, 132000),
(100, '55INCHTV', ' 55 INCH TV', 102, 15, '55', 164286, 160000),
(101, '85C', '85C WATER DISPENSER', 103, 16, '85', 42500, 39000),
(102, '808D', '808D WATER DISPENSER', 104, 16, '808', 54500, 50500),
(103, '1233BD', '1233BD WATER DISPENSER', 105, 16, '1233', 49500, 46500);

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `return_id` int(11) NOT NULL,
  `return_date` datetime NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_id` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double NOT NULL,
  `refund_invoice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_id` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  `return_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `invoice_id`, `product_id`, `quantity`, `return_quantity`) VALUES
(36, 24, 'HTF100W', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stocks_pk` int(11) NOT NULL,
  `stock_id` varchar(15) NOT NULL,
  `product_id` varchar(15) NOT NULL,
  `import_quantity` int(11) NOT NULL,
  `current_quantity` int(11) NOT NULL,
  `import_date` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stocks_pk`, `stock_id`, `product_id`, `import_quantity`, `current_quantity`, `import_date`, `is_deleted`) VALUES
(11, '001', 'HR67', 2, 2, '2018-11-07 09:30:55', 0),
(12, '001', 'HR107', 1, 1, '2018-11-07 09:32:26', 0),
(13, '001', 'HR134', 3, 3, '2018-11-07 09:35:09', 0),
(14, '001', 'HR134S', 2, 2, '2018-11-07 09:38:27', 0),
(15, '001', 'HR142S', 2, 2, '2018-11-07 09:40:52', 0),
(16, '001', 'HR147S', 1, 1, '2018-11-07 09:43:07', 0),
(17, '001', 'HR177S', 1, 1, '2018-11-07 09:45:15', 0),
(18, '001', 'HR80AEX', 1, 1, '2018-11-07 09:47:32', 0),
(19, '001', 'HR95EX', 2, 2, '2018-11-07 13:03:15', 0),
(20, '001', 'HR160EX', 1, 1, '2018-11-07 13:05:30', 0),
(21, '001', 'HR180EX', 1, 1, '2018-11-07 13:06:30', 0),
(22, '001', 'HR195M', 1, 1, '2018-11-07 13:07:26', 0),
(23, '001', 'HR195S', 1, 1, '2018-11-07 13:09:26', 0),
(24, '001', 'HR200WX', 1, 1, '2018-11-07 13:10:54', 0),
(25, '001', 'HR250LUX', 1, 1, '2018-11-07 13:14:07', 0),
(26, '002', 'HR250ICEMASTER', 1, 1, '2018-11-07 13:21:59', 0),
(27, '001', 'HRF280A', 1, 1, '2018-11-07 13:28:29', 0),
(28, '001', 'HR300LUX', 1, 1, '2018-11-07 13:30:59', 0),
(29, '001', 'HR310AEX', 1, 1, '2018-11-07 13:33:26', 0),
(30, '001', 'HR350LUX', 1, 1, '2018-11-07 13:46:40', 0),
(31, '001', 'BC110BC', 1, 1, '2018-11-07 13:47:51', 0),
(32, '001', 'SD162D', 1, 1, '2018-11-07 13:49:12', 0),
(33, '001', 'SC372', 1, 1, '2018-11-07 13:50:10', 0),
(34, '002', 'HTF66W', 1, 1, '2018-11-07 13:52:38', 0),
(35, '002', 'HTF100W', 2, 2, '2018-11-07 13:54:08', 0),
(36, '002', 'HTF103S', 1, 1, '2018-11-07 13:55:15', 0),
(37, '002', 'HTF126S', 2, 2, '2018-11-07 13:56:28', 0),
(38, '002', 'HTF146S', 1, 1, '2018-11-07 13:58:00', 0),
(39, '002', 'HTF150W', 2, 2, '2018-11-07 13:59:03', 0),
(40, '002', 'HTF166S', 1, 1, '2018-11-07 14:00:19', 0),
(41, '002', 'HTF200W', 1, 1, '2018-11-07 14:01:26', 0),
(42, '002', 'HTF203W', 1, 1, '2018-11-07 14:02:20', 0),
(43, '002', 'HTF203S', 2, 2, '2018-11-07 14:03:52', 0),
(44, '002', 'HTF219W', 2, 2, '2018-11-07 14:06:21', 0),
(45, '002', 'HTF259', 1, 1, '2018-11-07 14:07:37', 0),
(46, '002', 'HTF319W', 3, 3, '2018-11-07 14:36:43', 0),
(47, '002', 'HTF319S', 2, 2, '2018-11-07 14:38:22', 0),
(48, '002', 'HTF379W', 2, 2, '2018-11-07 14:40:04', 0),
(49, '002', 'HTF429W', 2, 2, '2018-11-07 14:42:18', 0),
(50, '002', 'HTF519W', 1, 1, '2018-11-07 14:44:15', 0),
(51, '002', 'HTF719W', 1, 1, '2018-11-07 14:46:06', 0),
(52, '003', '1500D', 4, 4, '2018-11-07 14:49:14', 0),
(53, '003', '2000D', 12, 12, '2018-11-07 14:50:55', 0),
(54, '003', '5000D', 6, 6, '2018-11-07 14:52:42', 0),
(55, '003', '5000WDR', 6, 6, '2018-11-07 14:54:13', 0),
(56, '004', '2500ES', 1, 1, '2018-11-07 15:05:13', 0),
(57, '004', '2500MS', 2, 2, '2018-11-07 15:07:27', 0),
(58, '004', '3500ES', 2, 2, '2018-11-07 15:08:51', 0),
(59, '004', 'HUSTLERMAX3500M', 1, 1, '2018-11-07 15:10:55', 0),
(60, '004', 'HOSTLERMAXELECT', 2, 2, '2018-11-07 15:12:24', 0),
(61, '004', 'HUSTLERMAXELECT', 1, 1, '2018-11-07 15:14:13', 0),
(62, '004', 'TECOPTIMA7200RS', 1, 1, '2018-11-07 15:17:52', 0),
(63, '004', 'BIGBOYELECT45KV', 1, 1, '2018-11-07 15:20:04', 0),
(64, '004', 'OGA6900ES', 1, 1, '2018-11-07 15:21:14', 0),
(65, '004', '8100ES', 1, 1, '2018-11-07 15:23:31', 0),
(66, '004', 'ODOGWU10000RS', 1, 1, '2018-11-07 15:25:03', 0),
(67, '004', 'TECPTIMA9200RS', 3, 3, '2018-11-07 15:26:20', 0),
(68, '005', 'TLSA3.5KG', 1, 1, '2018-11-07 15:28:07', 0),
(69, '005', 'TLSA6KG', 4, 4, '2018-11-07 15:29:19', 0),
(70, '005', 'TLSA8KG', 2, 2, '2018-11-07 15:30:30', 0),
(71, '005', 'TLSA10.2KG', 1, 1, '2018-11-07 15:31:46', 0),
(72, '005', 'TLSA13KG', 1, 1, '2018-11-07 15:32:39', 0),
(73, '005', 'HTMOFRONTLOAD6.', 1, 1, '2018-11-07 15:33:48', 0),
(74, '005', 'HTMOFRONTLOAD8.', 1, 1, '2018-11-07 15:35:14', 0),
(75, '005', 'HTMO7KG', 2, 2, '2018-11-07 15:36:36', 0),
(76, '005', 'HTMO8.0KG', 1, 1, '2018-11-07 15:37:28', 0),
(77, '005', '2HOBSTAINLESS', 2, 2, '2018-11-07 15:38:38', 0),
(78, '005', '2HOBTEFLON', 3, 3, '2018-11-07 15:39:45', 0),
(79, '005', '2HOBGLASSTOP', 2, 2, '2018-11-07 15:40:58', 0),
(80, '005', '4HOBTABLETOP', 2, 2, '2018-11-07 15:41:53', 0),
(81, '005', '4GASSUPREME', 2, 2, '2018-11-07 15:43:47', 0),
(82, '005', '3G1ESUPREME', 1, 1, '2018-11-07 15:44:58', 0),
(83, '005', '4GASPREMIUM', 2, 2, '2018-11-07 15:51:16', 0),
(84, '005', '3G1EPREMIUM', 3, 3, '2018-11-07 15:52:25', 0),
(85, '005', '4GASLUXURY', 1, 1, '2018-11-07 15:56:58', 0),
(86, '005', '3G1ELUXURY', 1, 1, '2018-11-07 15:57:57', 0),
(87, '006', '1HPAIRCONDITION', 4, 4, '2018-11-07 15:59:22', 0),
(88, '006', '1.5HPAIRCONDITI', 4, 4, '2018-11-07 16:02:48', 0),
(89, '006', '2HPAIRCONDITION', 2, 2, '2018-11-07 16:04:31', 0),
(90, '006', '1HPINVERTERAC', 3, 3, '2018-11-07 16:14:52', 0),
(91, '006', '1.5INVERTERAC', 2, 2, '2018-11-07 16:16:50', 0),
(92, '006', '2HPINVERTERAIRC', 2, 2, '2018-11-07 16:19:55', 0),
(93, '006', 'HSU/18003/HBF', 1, 1, '2018-11-07 16:22:59', 0),
(94, '007', 'HTMO2070E', 1, 1, '2018-11-07 16:26:04', 0),
(95, '007', 'HTMO2070M', 1, 1, '2018-11-07 16:30:24', 0),
(96, '007', 'HTMO2380G', 1, 1, '2018-11-07 16:32:11', 0),
(97, '007', 'BLENDER2120', 1, 1, '2018-11-07 16:34:38', 0),
(98, '008', '32INCHTV', 1, 1, '2018-11-07 16:41:36', 0),
(99, '008', '42INCHTV', 1, 1, '2018-11-07 16:42:56', 0),
(100, '008', '55INCHTV', 2, 2, '2018-11-07 16:55:35', 0),
(101, '009', '85C', 2, 2, '2018-11-07 17:01:03', 0),
(102, '009', '808D', 1, 1, '2018-11-07 17:01:58', 0),
(103, '009', '1233BD', 1, 1, '2018-11-07 17:03:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_name`, `category_id`) VALUES
(8, 'SINGLE DOOR HR67S', 7),
(9, 'SINGLE DOOR 107S', 7),
(10, 'SINGLE DOOR HR134W', 7),
(11, 'SINGLE DOOR HR134S', 7),
(12, 'SINGLE DOOR HR142S', 7),
(13, 'SINGLE DOOR HR147S', 7),
(14, 'SINGLE DOOR HR177S', 7),
(15, 'DOUBLE DOOR HR80AEX', 7),
(16, 'SINGLE DOOR HR185C', 7),
(17, 'DOUBLE DOOR HR95EX', 7),
(18, 'DOUBLE DOOR HR160EX', 7),
(19, 'DOUBLE DOOR HR180EX', 7),
(20, 'DOUBLE DOOR HR195M', 7),
(21, 'DOUBLE DOOR HR195S', 7),
(22, 'DOUBLE DOOR HR200LUX', 7),
(23, 'DOUBLE DOOR HR250LUX', 7),
(24, '2DOOR HR250 ICEMASTER', 8),
(25, 'DOUBLE DOOR HRF280A', 7),
(26, 'DOUBLE DOOR HRF300LUX', 7),
(27, 'DOUBLE DOOR HRF310A EX', 7),
(28, 'DOUBLE DOOR HR350LUX', 7),
(29, 'SINGLE DOOR BC110BC', 7),
(30, 'SD162D', 7),
(31, 'SINGLE DOOR SC372', 7),
(32, '1DOOR HTF664H', 8),
(33, '1DOOR HTF100H', 8),
(34, '1DOOR HTF103S', 8),
(36, '1DOOR HTF146S', 8),
(37, '1DOOR HTF126S', 8),
(38, '1DOOR HTF150H', 8),
(39, '1DOOR HTF166S', 8),
(40, '1DOOR HTF200H', 8),
(41, '1DOOR HTF203W', 8),
(42, '1DOOR HTF203S', 8),
(43, '1DOOR HTF219W', 8),
(44, '1DOOR HTF259H', 8),
(45, '1 DOOR HTF319W', 8),
(46, '1DOOR HTF319S', 8),
(47, '1DOOR HTF379H', 8),
(48, '2DOOR HTF429H', 8),
(49, '2DOOR HTF519W', 8),
(50, '2DOOR HTF719W', 8),
(51, '1500D WATT', 9),
(52, '2000D WATT', 9),
(53, '5000D WATT', 9),
(54, '5000WDR WATT', 9),
(55, '1000EXA BOX', 9),
(56, '1.5 WA JUNIOR MAT RECOIL', 10),
(57, '2.5ES BOBO MAT ELECT', 10),
(58, '2500MS BOBO MAT RECOIL', 10),
(59, '3500ES MAJOR 3500ES', 10),
(60, '3500MS HOSTLER MAT RECOIL ', 10),
(61, '3500ES HOSTLER MAT ELECT', 10),
(62, '3800ES HOSTLER MAT', 10),
(63, 'TEC OPTIMA 7200RS', 10),
(64, '4400ES BIG BOY ELECT', 10),
(65, '6900ES OGA ELECT', 10),
(66, '8400ES IGWE ELECT', 10),
(67, '10000 ODOGWU', 10),
(68, '9200 RS TEC OPTIMA', 10),
(69, 'TLSA 3.5KG', 11),
(70, 'TLSA 6KG SINGLE WASH', 11),
(71, 'TLSA 6KG', 11),
(72, 'TLSA 8KG', 11),
(73, 'TLSA 10.2KG', 11),
(74, 'TLSA 13KG', 11),
(75, 'HTMO FRONTLOAD 60KG', 11),
(76, 'HTMO FRONTLOAD 80KG', 11),
(77, 'HTMO 7.0KG (AUTOMATIC)', 11),
(78, 'HTMO 8.0KG (AUTOMATIC)', 11),
(79, '2HOB STAINLESS', 12),
(80, '2HOB TCLLON', 12),
(81, '2HOB GLASSTOP', 12),
(82, '4HOB TABLE TOP', 12),
(83, '4GAS SUPREME(B)', 12),
(84, '3GIE SUPREME(B)', 12),
(85, '4GAS PREMIUM(S)', 12),
(86, '3GIE PREMIUM(S)', 12),
(87, '3GAS LUXURY', 12),
(88, '3GIE LUXURY', 12),
(89, '1HP AIR CONDITIONER', 13),
(90, '1.5HP AIR CONDITIONER', 13),
(91, '2HP AIR CONDITIONER', 13),
(92, '1HP INVERTER AC', 13),
(93, '1.5HP INVERTER AC', 13),
(94, '2HP INVERTER AC', 13),
(95, 'STANDING AC HSU/18003/HBF', 13),
(96, 'HTMO 2070E', 14),
(97, 'HTMO 2070M', 14),
(98, 'HTMO 2380G', 14),
(99, 'BLENDER 2120', 14),
(100, '32 INCH TV', 15),
(101, '42 INCH TV', 15),
(102, '55 INCH TV', 15),
(103, '85C', 16),
(104, '808D ', 16),
(105, '1233BD', 16),
(106, '1HP K7', 17),
(107, '1.5AP K7', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_pk`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stocks_pk`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stocks_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
