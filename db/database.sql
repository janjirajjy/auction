-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 09:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_auction`
--
CREATE DATABASE IF NOT EXISTS `project_auction` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project_auction`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_number` varchar(15) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='bank shop detail';

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_number`, `account_type`, `bank_name`) VALUES
(1, 'เอ บี ซี', '542353532', 'ออมทรัพย์', 'กสิกร'),
(2, 'เอ บี ซี ดี', '542353532', 'ออมทรัพย์', 'กรุงไทย'),
(3, '111111111', '111111111', 'ออมทรัพย์', 'กสิกร'),
(4, 'pppp', '324444324', 'ออมทรัพย์', 'กสิกร');

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `auction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `auction_product` varchar(50) NOT NULL,
  `auction_amount` int(11) NOT NULL DEFAULT '1',
  `auction_startdate` date NOT NULL,
  `auction_enddate` date NOT NULL,
  `auction_endtime` varchar(10) NOT NULL,
  `auction_end` datetime NOT NULL,
  `product_price_bid` float(10,2) NOT NULL,
  `auction_price` float(10,2) NOT NULL,
  `auction_status` int(1) NOT NULL DEFAULT '0',
  `cus_id` int(11) DEFAULT NULL,
  `productstatus_id` int(1) NOT NULL DEFAULT '1',
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`auction_id`, `product_id`, `auction_product`, `auction_amount`, `auction_startdate`, `auction_enddate`, `auction_endtime`, `auction_end`, `product_price_bid`, `auction_price`, `auction_status`, `cus_id`, `productstatus_id`, `datesave`) VALUES
(1, 9, 'product cc ooo', 1, '2019-01-12', '2019-01-13', '22:02', '2019-01-12 19:47:30', 4500.00, 600.00, 1, 7, 1, '2019-01-12 10:37:37'),
(2, 7, 'product L', 1, '2019-01-14', '2019-01-15', '11:11', '2019-01-15 11:11:00', 333.00, 100.00, 1, NULL, 1, '2019-01-12 10:49:32'),
(3, 2, 'product1', 1, '2019-01-12', '2019-01-12', '18:00', '2019-01-12 18:01:30', 2850.00, 900.00, 1, 6, 2, '2019-01-12 10:56:16'),
(4, 2, 'product1', 1, '2019-01-12', '2019-01-12', '19:45', '2019-01-12 19:46:00', 1800.00, 900.00, 1, 7, 1, '2019-01-12 10:56:16'),
(5, 2, 'product1', 1, '2019-01-12', '2019-01-12', '19:59', '2019-01-12 19:59:30', 450.00, 300.00, 1, 7, 2, '2019-01-12 12:43:36'),
(6, 5, 'product L', 1, '2019-02-15', '2019-02-15', '11:11', '2019-02-15 11:12:00', 1100.00, 50.00, 1, 6, 2, '2019-02-15 03:44:59'),
(7, 8, 'product cc', 1, '2019-02-15', '2019-02-15', '13:40', '2019-02-15 13:40:30', 600.00, 100.00, 1, 5, 3, '2019-02-15 06:38:47'),
(8, 9, 'product cc ooo', 1, '2019-02-15', '2019-02-15', '14:27', '2019-02-15 14:27:30', 1000.00, 100.00, 1, 6, 3, '2019-02-15 07:26:01'),
(9, 9, 'product cc ooo', 1, '2019-03-15', '2019-03-15', '22:58', '2019-03-15 22:58:30', 4000.00, 1000.00, 1, 7, 1, '2019-03-15 15:56:23'),
(10, 9, 'product cc ooo', 1, '2019-03-15', '2019-03-15', '22:58', '2019-03-15 22:58:30', 4000.00, 1000.00, 1, 7, 1, '2019-03-15 15:56:29'),
(11, 9, 'product cc ooo', 1, '2019-03-15', '2019-03-15', '22:58', '2019-03-15 22:58:30', 4000.00, 1000.00, 1, 7, 1, '2019-03-15 15:56:33'),
(12, 9, 'product cc ooo', 1, '2019-03-15', '2019-03-15', '23:07', '2019-03-15 23:07:00', 9000.00, 1000.00, 1, NULL, 1, '2019-03-15 16:04:10'),
(13, 9, 'product cc ooo', 1, '2019-03-15', '2019-03-15', '23:07', '2019-03-15 23:07:00', 9000.00, 1000.00, 1, NULL, 1, '2019-03-15 16:04:14'),
(14, 9, 'product cc ooo', 1, '2019-03-15', '2019-03-15', '23:10', '2019-03-15 23:10:00', 9000.00, 1000.00, 1, NULL, 1, '2019-03-15 16:04:20'),
(15, 9, 'product cc ooo', 1, '2019-03-24', '2019-03-24', '23:10', '2019-03-24 23:11:00', 12000.00, 1000.00, 1, 6, 3, '2019-03-24 16:08:43'),
(16, 2, 'product1', 1, '2019-03-24', '2019-03-24', '23:18', '2019-03-24 23:18:00', 500.00, 100.00, 1, NULL, 1, '2019-03-24 16:16:34'),
(17, 11, 'kkkkkk', 1, '2019-03-24', '2019-03-24', '23:19', '2019-03-24 23:19:00', 900.00, 90.00, 1, NULL, 1, '2019-03-24 16:17:50'),
(18, 9, 'product cc ooo', 1, '2019-03-24', '2019-03-24', '23:26', '2019-03-24 23:27:30', 13000.00, 1000.00, 1, 8, 2, '2019-03-24 16:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `auctiondetail`
--

CREATE TABLE `auctiondetail` (
  `auction_id` int(11) NOT NULL,
  `ord_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `detail_amount` int(1) NOT NULL,
  `product_price` int(11) NOT NULL,
  `cus_tel` varchar(10) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(30) NOT NULL,
  `cus_lastname` varchar(30) NOT NULL,
  `cus_email` varchar(30) NOT NULL,
  `cus_password` varchar(10) NOT NULL,
  `cus_tel` varchar(10) NOT NULL,
  `cus_address` varchar(100) NOT NULL,
  `cus_status` varchar(10) NOT NULL DEFAULT 'ONLINE',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_lastname`, `cus_email`, `cus_password`, `cus_tel`, `cus_address`, `cus_status`, `create_date`) VALUES
(1, 'สมาชิก11999', 'นาจ้ะ1111', 'm@m.com', '11', '0999922211', '99/999 bkk bkk111', 'ONLINE', '2018-12-01 14:35:59'),
(2, 'สมชาย', 'ชายสุด', 'm2@m.com', '2', '09999222', '99/999 bkk bkk', 'ONLINE', '2018-12-01 14:35:59'),
(3, 'bok', 'bak', 'a@g.com', 'a@g.com', '0999999999', 'bangkok thailande', 'ONLINE', '2018-12-02 01:49:04'),
(4, 'bok', 'bak', 'a@a', '0', '0999999999', 'bangkok thailand', 'ONLINE', '2018-12-02 01:49:49'),
(5, 'aa', 'bb', 'b@b', 'b@b', '0999999999', 'bangkok thailand', 'ONLINE', '2018-12-02 01:49:49'),
(6, 'cc', 'cc', 'c@c', 'c@c', '0999999999', 'bangkok thailand', 'ONLINE', '2018-12-02 01:49:49'),
(7, 'dd', 'dd', 'd@d', 'd@d', '0999999999', 'bangkok thailand', 'ONLINE', '2018-12-02 01:49:49'),
(8, 'pp', 'oo', 'p@p.com', 'p@p.com', '0999999990', 'bkk', 'ONLINE', '2019-03-24 16:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `detailproduct`
--

CREATE TABLE `detailproduct` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_photo` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_detail` text NOT NULL,
  `unit_id` int(11) NOT NULL COMMENT 'รหัสหน่วยสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='product';

--
-- Dumping data for table `detailproduct`
--

INSERT INTO `detailproduct` (`product_id`, `product_name`, `product_photo`, `product_price`, `product_detail`, `unit_id`) VALUES
(2, 'product1', 'pimg/178905063120190102_074259.jpg', 150.00, 'test', 1),
(3, 'product2', 'pimg/178905063120190102_074259.jpg', 15000.00, 'test', 1),
(4, 'product3', 'pimg/178905063120190102_074259.jpg', 200.00, 'test', 1),
(5, 'product L', 'pimg/178905063120190102_074259.jpg', 333.00, '<p>product L</p>\r\n', 1),
(6, 'product L', 'pimg/178905063120190102_074259.jpg', 333.00, '<p>product L</p>\r\n', 1),
(7, 'product L', 'pimg/178905063120190102_074259.jpg', 333.00, '<p>product L</p>\r\n', 1),
(8, 'product cc', 'pimg/15635744820190102_074813.jpg', 900.00, '<p>product cc</p>\r\n', 1),
(9, 'product cc ooo', 'pimg/86247172820190102_074833.jpg', 900.00, '<p>product cc</p>\r\n', 1),
(11, 'kkkkkk', 'pimg/85632363520190324_231722.png', 0.00, '<p>sdfsfsafsafsf</p>\r\n\r\n<p>fdsfasfasfsa</p>\r\n\r\n<p>sfsafsaf</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detailshop`
--

CREATE TABLE `detailshop` (
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shop_detail` text NOT NULL,
  `shop_contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='data show front end ';

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `bid` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `bid_price` float(10,2) NOT NULL,
  `biddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='bid';

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`bid`, `auction_id`, `product_name`, `cus_id`, `bid_price`, `biddate`) VALUES
(1, 3, 'product1', 7, 1950.00, '2019-01-12 10:58:37'),
(2, 1, 'product cc ooo', 7, 2100.00, '2019-01-12 10:58:50'),
(3, 1, 'product cc ooo', 6, 2700.00, '2019-01-12 10:59:18'),
(4, 3, 'product1', 6, 2850.00, '2019-01-12 10:59:29'),
(5, 1, 'product cc ooo', 7, 3300.00, '2019-01-12 11:00:10'),
(6, 1, 'product cc ooo', 5, 3900.00, '2019-01-12 11:00:28'),
(7, 4, 'product1', 7, 1800.00, '2019-01-12 12:42:38'),
(8, 5, 'product1', 7, 450.00, '2019-01-12 12:44:06'),
(9, 1, 'product cc ooo', 7, 4500.00, '2019-01-12 12:44:24'),
(10, 6, 'product L', 7, 1050.00, '2019-02-15 03:48:44'),
(11, 6, 'product L', 6, 1100.00, '2019-02-15 03:49:08'),
(12, 7, 'product cc', 5, 600.00, '2019-02-15 06:39:12'),
(13, 8, 'product cc ooo', 6, 1000.00, '2019-02-15 07:26:15'),
(14, 10, 'product cc ooo', 7, 4000.00, '2019-03-15 15:57:29'),
(15, 11, 'product cc ooo', 7, 4000.00, '2019-03-15 15:57:42'),
(16, 9, 'product cc ooo', 7, 4000.00, '2019-03-15 15:57:51'),
(17, 15, 'product cc ooo', 7, 11000.00, '2019-03-24 16:09:38'),
(18, 15, 'product cc ooo', 6, 12000.00, '2019-03-24 16:10:24'),
(19, 18, 'product cc ooo', 8, 11000.00, '2019-03-24 16:24:48'),
(20, 18, 'product cc ooo', 6, 12000.00, '2019-03-24 16:25:14'),
(21, 18, 'product cc ooo', 8, 13000.00, '2019-03-24 16:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `send_id` int(11) NOT NULL,
  `send_rate` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL COMMENT 'รหัสธนาคาร',
  `ord_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ord_status` int(1) NOT NULL,
  `slip_file` varchar(100) DEFAULT NULL,
  `tracking_id` varchar(50) DEFAULT NULL,
  `trans_price` float(10,2) DEFAULT NULL,
  `pay_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='order list';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `cus_id`, `user_id`, `send_id`, `send_rate`, `auction_id`, `account_id`, `ord_date`, `ord_status`, `slip_file`, `tracking_id`, `trans_price`, `pay_date`) VALUES
(1, 6, 0, 1, 30, 3, 1, '2019-02-15 04:42:27', 0, 'slip38578423120190215_131733.png', NULL, 2880.00, '2019-02-15 13:17:33'),
(2, 6, 0, 2, 50, 3, 1, '2019-02-15 04:43:14', 0, 'slip38578423120190215_131733.png', NULL, 2900.00, '2019-02-15 13:17:33'),
(3, 6, 0, 1, 30, 3, 1, '2019-02-15 04:45:07', 0, 'slip38578423120190215_131733.png', NULL, 2880.00, '2019-02-15 13:17:33'),
(4, 6, 0, 1, 30, 3, 1, '2019-02-15 05:44:25', 0, 'slip38578423120190215_131733.png', NULL, 2880.00, '2019-02-15 13:17:33'),
(5, 6, 0, 1, 30, 3, 1, '2019-02-15 05:44:43', 0, 'slip38578423120190215_131733.png', NULL, 2880.00, '2019-02-15 13:17:33'),
(6, 6, 0, 2, 50, 6, 1, '2019-02-15 06:26:53', 0, 'slip47188353320190215_132820.png', NULL, 1150.00, '2019-02-15 13:28:20'),
(7, 7, 0, 1, 30, 5, 1, '2019-02-15 06:36:20', 0, 'slip185483368920190215_133627.png', NULL, 480.00, '2019-02-15 13:36:27'),
(8, 5, 0, 1, 30, 7, 1, '2019-02-15 06:43:35', 0, 'slip49507077520190215_134952.png', 'THdasfasfda11111', 630.00, '2019-02-15 13:49:52'),
(9, 6, 0, 1, 30, 8, 1, '2019-02-15 07:29:05', 0, 'slip44599093020190215_142935.jpg', 'THdasfasfda11111', 1030.00, '2019-02-15 14:29:35'),
(10, 6, 0, 2, 50, 15, 4, '2019-03-24 16:12:11', 0, 'slip78013684920190324_231318.png', 'THdasfasfda11111', 12050.00, '2019-03-24 23:13:18'),
(11, 8, 0, 1, 30, 18, 1, '2019-03-24 16:27:51', 0, 'slip147040978020190324_232800.png', NULL, 13030.00, '2019-03-24 23:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `productstatus`
--

CREATE TABLE `productstatus` (
  `productstatus_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='product sent status ';

--
-- Dumping data for table `productstatus`
--

INSERT INTO `productstatus` (`productstatus_id`, `status`) VALUES
(1, 'รอชำระเงิน'),
(2, 'รอจัดส่ง'),
(3, 'เช็คเลขพัสดุ');

-- --------------------------------------------------------

--
-- Table structure for table `send_type`
--

CREATE TABLE `send_type` (
  `send_id` int(11) NOT NULL,
  `send_name` varchar(20) NOT NULL,
  `send_rate` int(11) NOT NULL COMMENT 'ราคาส่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_type`
--

INSERT INTO `send_type` (`send_id`, `send_name`, `send_rate`) VALUES
(1, 'ส่งแบบธรรมดา', 30),
(2, 'ส่งแบบพิเศษ', 50);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_detail`) VALUES
(1, 'กล่อง1'),
(2, 'ใบ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_level` varchar(50) NOT NULL DEFAULT 'A',
  `user_name` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_username` varchar(10) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ข้อมูลผู้ใช้';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level`, `user_name`, `user_lastname`, `user_username`, `user_password`, `user_tel`) VALUES
(1, 'A', 'แอดมิน', 'นาจะ', '11', '11', '099493949'),
(2, 'A', 'ผู้ดูแลระบบ', 'ทดสอบระบบ', '22', '221', '0994939491'),
(4, 'A', 'somchai', 'm', '4', '4', '044949494');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`auction_id`);

--
-- Indexes for table `auctiondetail`
--
ALTER TABLE `auctiondetail`
  ADD PRIMARY KEY (`auction_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `detailproduct`
--
ALTER TABLE `detailproduct`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `detailshop`
--
ALTER TABLE `detailshop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `productstatus`
--
ALTER TABLE `productstatus`
  ADD PRIMARY KEY (`productstatus_id`);

--
-- Indexes for table `send_type`
--
ALTER TABLE `send_type`
  ADD PRIMARY KEY (`send_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `auction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `auctiondetail`
--
ALTER TABLE `auctiondetail`
  MODIFY `auction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detailproduct`
--
ALTER TABLE `detailproduct`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detailshop`
--
ALTER TABLE `detailshop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `productstatus`
--
ALTER TABLE `productstatus`
  MODIFY `productstatus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `send_type`
--
ALTER TABLE `send_type`
  MODIFY `send_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
