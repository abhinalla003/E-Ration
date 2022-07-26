-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Jul 26, 2022 at 09:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply_stock`
--

CREATE TABLE `tbl_apply_stock` (
  `ap_id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `stock_id` int(10) NOT NULL,
  `stock_name` varchar(255) NOT NULL,
  `stock_price` int(10) NOT NULL,
  `d_fname` varchar(255) NOT NULL,
  `d_mname` varchar(255) NOT NULL,
  `d_lname` varchar(255) NOT NULL,
  `pds_no` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apply_stock`
--

INSERT INTO `tbl_apply_stock` (`ap_id`, `date`, `stock_id`, `stock_name`, `stock_price`, `d_fname`, `d_mname`, `d_lname`, `pds_no`, `quantity`, `status`) VALUES
(12, '2008-12-25', 1, 'Wheat', 2, 'Mohan', 'Laxman', 'Nalla', 1201, 50, 'yes'),
(13, '2022-02-09', 1, 'Wheat', 2, 'Mohan', 'Laxman', 'Nalla', 1201, 280, 'yes'),
(15, '2022-03-31', 1, 'Wheat', 2, 'Ram', 'Maheshbhai', 'Shah', 1207, 220, 'yes'),
(16, '2022-05-16', 1, 'Wheat', 2, 'Mohan', 'Laxman', 'Nalla', 1201, 300, 'yes'),
(17, '2022-05-17', 1, 'Wheat', 2, 'Ram', 'Maheshbhai', 'Shah', 1207, 220, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_available_stock`
--

CREATE TABLE `tbl_available_stock` (
  `pds_no` int(10) NOT NULL,
  `d_id` int(10) NOT NULL,
  `d_fname` varchar(255) NOT NULL,
  `d_mname` varchar(255) NOT NULL,
  `d_lname` varchar(255) NOT NULL,
  `stock_id` int(10) NOT NULL,
  `stock_name` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_available_stock`
--

INSERT INTO `tbl_available_stock` (`pds_no`, `d_id`, `d_fname`, `d_mname`, `d_lname`, `stock_id`, `stock_name`, `quantity`) VALUES
(1201, 1, 'Mohan', 'Nalla', 'Nalla', 1, 'wheat', 600),
(1201, 1, 'Mohan', 'Nalla', 'Nalla', 2, 'rice', 60),
(1201, 1, 'Mohan', 'Nalla', 'Nalla', 3, 'oil', 9),
(1201, 1, 'Mohan', 'Nalla', 'Nalla', 4, 'dal', 9),
(1201, 1, 'Mohan', 'Nalla', 'Nalla', 5, 'sugar', 9),
(1207, 7, 'Ram', 'Shah', 'Shah', 1, 'wheat', 420),
(1207, 7, 'Ram', 'Shah', 'Shah', 2, 'rice', 40),
(1207, 7, 'Ram', 'Maheshbhai', 'Shah', 5, 'sugar', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `booking_id` int(11) NOT NULL,
  `rationcard_no` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `items` int(15) NOT NULL,
  `ration_grant` int(11) NOT NULL DEFAULT 0,
  `given_date` date DEFAULT NULL,
  `status_for_mail` int(11) NOT NULL DEFAULT 0,
  `authentication` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`booking_id`, `rationcard_no`, `date`, `amount`, `status`, `items`, `ration_grant`, `given_date`, `status_for_mail`, `authentication`) VALUES
(21, '398583356372442', '2022-03-31', '52', 1, 21, 0, NULL, 0, 0),
(22, '398583356372442', '2022-03-31', '51.75', 0, 0, 0, NULL, 0, 0),
(26, '777777777777777', '2022-03-15', '40', 1, 1, 1, '2022-03-15', 1, 1),
(27, '777777777777777', '2022-04-17', '52', 1, 12, 1, '2022-04-17', 1, 1),
(28, '777777777777777', '2022-05-17', '52', 1, 12, 1, '2022-05-17', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `c_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `u_id` int(5) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_mname` varchar(255) NOT NULL,
  `u_lname` varchar(255) NOT NULL,
  `pds_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`c_id`, `date`, `description`, `u_id`, `u_fname`, `u_mname`, `u_lname`, `pds_no`) VALUES
(7, '2022-03-31', 'Distributor is not working well', 2, 'Dhruvpuri', 'Jogendrapuri', 'Goswami', 1207);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distributor`
--

CREATE TABLE `tbl_distributor` (
  `d_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `aadhar_no` bigint(12) NOT NULL,
  `rationcard_no` bigint(15) NOT NULL,
  `pds_no` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `image` varchar(254) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_distributor`
--

INSERT INTO `tbl_distributor` (`d_id`, `fname`, `mname`, `lname`, `address`, `contact_no`, `gender`, `dob`, `aadhar_no`, `rationcard_no`, `pds_no`, `city`, `state`, `pincode`, `email_id`, `image`, `password`) VALUES
(1, 'Mohan', 'Laxman', 'Nalla', 'Aaspass Dada, Godadara', 7777777777, 'male', '1970-05-26', 486226849512, 753265984621532, 1201, 'Surat', 'Gujarat', 395010, 'abhinalla1995@gmail.com', 'mohan.jpg', 'e9206237def4b4ef46fd933ed0f5a08f'),
(3, 'Alok', 'Yadagiri', 'Vennu', 'Near Dindoli Police Station, Dindoli', 8456952365, 'male', '2000-01-26', 662223509284, 142563859674154, 1203, 'Surat', 'Gujarat', 394210, 'alokvennu@gmail.com', 'alok.jpg', 'bad220c335d0c1f53548f6acdb17e265'),
(4, 'Rahul', 'Vijay', 'Shukla', 'Variya', 9875632154, 'male', '1998-06-15', 216167293627, 154545653215458, 1204, 'Surat', 'Gujarat', 395003, 'rahul1998@gmail.com', 'rahul.jpg', '439ed537979d8e831561964dbbbd7413'),
(5, 'Kaushik', 'Srinivas', 'Gaddam', 'Shop no. 12 Bazaar, Delhi Gate', 9712166240, 'male', '2004-02-19', 838427959970, 120320410526354, 1205, 'Ahmedabad', 'Gujarat', 380004, 'kawshikkgaddam@gmail.com', 'kaushik.jpg', '8cdc062ee079b1838a4fd08d423e083e'),
(7, 'Ram', 'Maheshbhai', 'Shah', 'Shop No. 02 Shopping Mall, Variya', 9563254185, 'male', '1994-06-06', 166797505883, 956320203010456, 1207, 'Surat', 'Gujarat', 395002, 'keyurgoswami@gmail.com', 'keyur.jpg', 'd5a8288e95e5ebdd3398098a3e777333'),
(8, 'Harsh', 'Jogendra', 'Gupta', 'Umarwada', 8549652360, 'male', '1998-05-19', 745896525256, 845741414526352, 1208, 'Surat', 'Gujarat', 396541, 'harsh@gmail.com', 'download.jpg', 'd4e3730e8cba214f85cddae5f9331d74');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dist_receipt`
--

CREATE TABLE `tbl_dist_receipt` (
  `receipt_id` int(10) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `rationcard_no` varchar(15) NOT NULL,
  `d_pds` int(5) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dist_receipt`
--

INSERT INTO `tbl_dist_receipt` (`receipt_id`, `booking_id`, `date`, `rationcard_no`, `d_pds`, `amount`) VALUES
(9, 26, '2022-05-16', '777777777777777', 1207, 40),
(10, 27, '2022-05-16', '777777777777777', 1207, 52),
(11, 28, '2022-05-17', '777777777777777', 1207, 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_give_stock`
--

CREATE TABLE `tbl_give_stock` (
  `id` int(11) NOT NULL,
  `pds_no` int(10) NOT NULL,
  `stock_name` varchar(255) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_give_stock`
--

INSERT INTO `tbl_give_stock` (`id`, `pds_no`, `stock_name`, `quantity`, `date`) VALUES
(326, 1201, 'Wheat', 300, '2022-03-31'),
(327, 1201, 'Rice', 60, '2022-03-31'),
(328, 1201, 'Oil', 60, '2022-03-31'),
(329, 1201, 'Dal', 60, '2022-03-31'),
(330, 1201, 'Sugar', 60, '2022-03-31'),
(332, 1203, 'Wheat', 0, '2022-03-31'),
(333, 1203, 'Rice', 0, '2022-03-31'),
(334, 1203, 'Oil', 0, '2022-03-31'),
(335, 1203, 'Dal', 0, '2022-03-31'),
(336, 1203, 'Sugar', 0, '2022-03-31'),
(338, 1204, 'Wheat', 0, '2022-03-31'),
(339, 1204, 'Rice', 0, '2022-03-31'),
(340, 1204, 'Oil', 0, '2022-03-31'),
(341, 1204, 'Dal', 0, '2022-03-31'),
(342, 1204, 'Sugar', 0, '2022-03-31'),
(344, 1205, 'Wheat', 0, '2022-03-31'),
(345, 1205, 'Rice', 0, '2022-03-31'),
(346, 1205, 'Oil', 0, '2022-03-31'),
(347, 1205, 'Dal', 0, '2022-03-31'),
(348, 1205, 'Sugar', 0, '2022-03-31'),
(350, 1206, 'Wheat', 0, '2022-03-31'),
(351, 1206, 'Rice', 0, '2022-03-31'),
(352, 1206, 'Oil', 0, '2022-03-31'),
(353, 1206, 'Dal', 0, '2022-03-31'),
(354, 1206, 'Sugar', 0, '2022-03-31'),
(356, 1207, 'Wheat', 220, '2022-03-31'),
(357, 1207, 'Rice', 44, '2022-03-31'),
(358, 1207, 'Oil', 44, '2022-03-31'),
(359, 1207, 'Dal', 44, '2022-03-31'),
(360, 1207, 'Sugar', 44, '2022-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) NOT NULL,
  `mode` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `amount` varchar(5) NOT NULL,
  `booking_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `mode`, `date`, `time`, `amount`, `booking_id`) VALUES
(13, 'Online', '2022-03-31', '12:14:20', '51.75', '21'),
(17, 'Offline', '2022-04-16', '21:47:02', '40', '26'),
(18, 'Online', '2022-05-16', '22:00:36', '51.75', '27'),
(19, 'Offline', '2022-05-17', '12:43:31', '52', '28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pds`
--

CREATE TABLE `tbl_pds` (
  `pds_no` int(10) NOT NULL,
  `stock_name` varchar(255) NOT NULL,
  `quantity` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pds`
--

INSERT INTO `tbl_pds` (`pds_no`, `stock_name`, `quantity`) VALUES
(1201, 'Wheat', 600),
(1201, 'Rice', 60),
(1201, 'Oil', 60),
(1201, 'Dal', 60),
(1201, 'Sugar', 60),
(1203, 'Wheat', 0),
(1203, 'Rice', 0),
(1203, 'Oil', 0),
(1203, 'Dal', 0),
(1203, 'Sugar', 0),
(1204, 'Wheat', 0),
(1204, 'Rice', 0),
(1204, 'Oil', 0),
(1204, 'Dal', 0),
(1204, 'Sugar', 0),
(1205, 'Wheat', 0),
(1205, 'Rice', 0),
(1205, 'Oil', 0),
(1205, 'Dal', 0),
(1205, 'Sugar', 0),
(1207, 'Wheat', 440),
(1207, 'Rice', 44),
(1207, 'Oil', 44),
(1207, 'Dal', 44),
(1207, 'Sugar', 44),
(1208, 'Wheat', 0),
(1208, 'Rice', 10),
(1208, 'Oil', 10),
(1208, 'Dal', 10),
(1208, 'Sugar', 10),
(1201, 'Bajara', 300),
(1203, 'Bajara', 0),
(1204, 'Bajara', 0),
(1205, 'Bajara', 0),
(1207, 'Bajara', 220),
(1208, 'Bajara', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ration`
--

CREATE TABLE `tbl_ration` (
  `rationcard_no` varchar(15) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_age` varchar(255) NOT NULL,
  `m_aadhar` varchar(12) NOT NULL DEFAULT '825463597452',
  `p1_name` varchar(255) NOT NULL,
  `p1_age` varchar(255) NOT NULL,
  `p1_aadhar` varchar(12) NOT NULL DEFAULT '385263524586',
  `p2_name` varchar(255) NOT NULL,
  `p2_age` varchar(255) NOT NULL,
  `p2_aadhar` varchar(12) NOT NULL DEFAULT '421536845796',
  `p3_name` varchar(255) NOT NULL,
  `p3_age` varchar(255) NOT NULL,
  `p3_aadhar` varchar(12) NOT NULL DEFAULT '745263425163',
  `f_members` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ration`
--

INSERT INTO `tbl_ration` (`rationcard_no`, `m_name`, `m_age`, `m_aadhar`, `p1_name`, `p1_age`, `p1_aadhar`, `p2_name`, `p2_age`, `p2_aadhar`, `p3_name`, `p3_age`, `p3_aadhar`, `f_members`) VALUES
('111111111111111', 'Abhishek Nalla', '19', '825463597452', 'Purnima Nalla', '23', '385263524586', 'Sushmitha Nalla', '25', '421536845796', 'Bhagyalaxmi Nalla', '42', '745263425163', 4),
('127224523746938', 'Nilesh Singh', '35', '825463597452', 'Baby Singh', '30', '385263524586', 'Sonali Singh', '18', '421536845796', 'Shruti Singh', '14', '745263425163', 4),
('135151958030551', 'Sumit Khatik', '38', '825463597452', 'Suntia Khatik', '35', '385263524586', 'Shubham Khatik', '13', '421536845796', 'Chetan Khatik', '10', '745263425163', 4),
('158450579936423', 'Amit Tiwari', '36', '825463597452', 'Shekar Tiwari', '32', '385263524586', 'Manu Tiwari', '26', '421536845796', 'Abhiesh Tiwari', '12', '745263425163', 4),
('163088065269771', 'Kiran Sahani', '25', '825463597452', 'Bhim Sahani', '22', '385263524586', 'Shailesh Sahani', '24', '421536845796', 'Nanu Sahani', '13', '745263425163', 4),
('199653005281360', 'Shubham Sharma', '36', '825463597452', 'Suresh Sharma', '28', '385263524586', 'Ramdan Sharma', '21', '421536845796', 'Honey Sharma', '18', '745263425163', 4),
('219007229379963', 'Sushmitha Gupta', '29', '825463597452', 'Sheelavati Gupta', '28', '385263524586', 'Ravindra Gupta', '21', '421536845796', 'Aman Gupta', '16', '745263425163', 4),
('221070438094376', 'Utkarsh Yadav', '30', '825463597452', 'Hema Yadav', '25', '385263524586', 'Aman Yadav', '20', '421536845796', 'Nitesh Yadav', '16', '745263425163', 4),
('221821307780083', 'Rakesh Yadav', '25', '825463597452', 'Sachin Yadav', '21', '385263524586', 'Rajnish Yadav', '19', '421536845796', 'Gita Yadav', '23', '745263425163', 4),
('223370410643412', 'Santosh Singh', '33', '825463597452', 'Payal Singh', '30', '385263524586', 'Pallvi Singh', '18', '421536845796', 'Ravi Singh', '12', '745263425163', 4),
('245876225711262', 'AjayKumar Margam', '34', '825463597452', 'Sravanti Margam', '31', '385263524586', 'Shreyansh Margam', '12', '421536845796', 'Srinidhi Margam', '9', '745263425163', 4),
('285079722300620', 'Rammurty Chinthakindi', '49', '825463597452', 'Rani Chinthakindi', '45', '385263524586', 'Bhargav Chinthakindi', '33', '421536845796', 'Gaurav Chinthakindi', '29', '745263425163', 4),
('341709103805248', 'Divya Patil', '20', '825463597452', 'Rushi Patil', '12', '385263524586', 'Sweta Patil', '32', '421536845796', 'Chintu Patil', '16', '745263425163', 4),
('386227843530438', 'Divya Tank', '19', '825463597452', 'Shaliesh Tank', '', '385263524586', 'Rahul Tank', '', '421536845796', 'Ramesh Tank', '', '745263425163', 4),
('391351928309485', 'Kaushik Gaddam', '19', '825463597452', 'Srinivas Gaddam', '45', '385263524586', 'Chintu Gaddam', '38', '421536845796', 'Sweta Gaddam', '24', '745263425163', 4),
('398583356372442', 'Rajat Singh', '20', '825463597452', 'Upendra Singh', '45', '385263524586', 'Riya Singh', '12', '421536845796', 'Raksha Singh', '16', '745263425163', 4),
('415460278751227', 'Lalabhai Trivedi', '32', '825463597452', 'Bhiru Trivedi', '25', '385263524586', 'Narendra Trivedi', '18', '421536845796', 'Chetan Trivedi', '12', '745263425163', 4),
('437719125458787', 'Jay Gamit', '21', '825463597452', 'Raju Gamit', '35', '385263524586', 'Bhumi Gamit', '30', '421536845796', 'Abhishek Gamit', '25', '745263425163', 4),
('448400979738932', 'Vipul Chauhan', '25', '825463597452', 'Shekar Chauhan', '26', '385263524586', 'Suhani Chauhan', '30', '421536845796', 'Rohit Chauhan', '24', '745263425163', 4),
('470355426520064', 'Mihir Thakur', '18', '825463597452', 'Pulkit Thakur', '20', '385263524586', 'Santosh Thakur', '20', '421536845796', 'Vivek Thakur', '25', '745263425163', 4),
('480129537405606', 'Tarak Ansari', '29', '825463597452', 'Surendra Ansari', '25', '385263524586', 'Ajit Ansari', '19', '421536845796', 'Shiv Ansari', '21', '745263425163', 4),
('480157822221063', 'Daxesh Shah', '34', '825463597452', 'Virkumar Shah', '28', '385263524586', 'Vikrant Shah', '24', '421536845796', 'Nisha Shah', '29', '745263425163', 4),
('483650622191054', 'Bharti Patil', '30', '825463597452', 'Shailu Patil', '28', '385263524586', 'Raj Patil', '20', '421536845796', 'Kiran Patil', '22', '745263425163', 4),
('555555555555555', 'Ramdin Verma	', '30', '825463597452', 'Rajan Verma', '21', '385263524586', 'Kiran Verma', '23', '421536845796', 'Vikas Verma', '26', '745263425163', 4),
('632586656389357', 'RajendraKumar Rao', '56', '825463597452', 'Rama Rao', '53', '385263524586', 'Suresh Rao', '43', '421536845796', 'Sukesh Rao', '36', '745263425163', 4),
('642920744559077', 'Babu Rajvanshi', '40', '825463597452', 'Radhika Rao', '38', '385263524586', 'Krishna Rao', '28', '421536845796', 'Laxman Rao', '32', '745263425163', 4),
('650889633162203', 'Meethalal Verma', '43', '825463597452', 'Radhika Verma', '43', '385263524586', 'Rajat Verma', '40', '421536845796', 'Rajesh Verma', '38', '745263425163', 4),
('688964064676598', 'Rajubhai Somnath', '42', '825463597452', 'Mittakola Jyothi', '40', '385263524586', 'Mittakola Srinath', '30', '421536845796', 'Mittakola Pranay', '28', '745263425163', 4),
('767900048814720', 'Prince Samala', '42', '825463597452', 'Samala Vijaya', '38', '385263524586', 'Samala Chiranjeevi', '36', '421536845796', 'Samala Varun', '34', '745263425163', 4),
('774746787766320', 'Vijaykumar Adepu', '40', '825463597452', 'Kamala Adepu', '38', '385263524586', 'Rajni Adepu', '30', '421536845796', 'Kamal Adepu', '35', '745263425163', 4),
('777777777777777', 'Dhruvpuri Goswami', '19', '825463597452', 'Keyur Goswami', '25', '385263524586', 'Jogendra Goswami', '45', '421536845796', 'Hina Goswami', '38', '745263425163', 4),
('784149772278286', 'Mahendrabhai solanki', '40', '825463597452', 'Rajita Solanki', '38', '385263524586', 'Ravi Solanki', '36', '421536845796', 'Raju Solanki', '35', '745263425163', 4),
('786254783380680', 'Singh Arjun', '38', '825463597452', 'Singh Puja', '36', '385263524586', 'Ravi Singh', '34', '421536845796', 'Rana Singh', '32', '745263425163', 4),
('794158415649605', 'Yogesh Singh', '45', '825463597452', 'Rama Singh', '43', '385263524586', 'Joginder Singh', '32', '421536845796', 'Ravinder Singh', '30', '745263425163', 4),
('794830401580232', 'Arjun Allu', '38', '825463597452', 'Sneha Allu', '36', '385263524586', 'Arha Allu', '15', '421536845796', 'Arihant Allu', '20', '745263425163', 4),
('807508183501191', 'Ravi Tank', '40', '825463597452', 'Divya Tank', '38', '385263524586', 'Sneha Tank', '18', '421536845796', 'Priya Tank', '22', '745263425163', 4),
('812682569547203', 'Suhail shaikh', '40', '825463597452', 'suhani shaikh', '38', '385263524586', 'Rajat Shaikh', '22', '421536845796', 'Raju Shaikh', '20', '745263425163', 4),
('812933476331506', 'Karan Johar', '40', '825463597452', 'Rashi Johar', '38', '385263524586', 'ravi Johar', '20', '421536845796', 'Rahul Johar', '15', '745263425163', 4),
('818201532600783', 'Keyur Lad', '34', '825463597452', 'Rani Lad', '32', '385263524586', 'Rana Lad', '23', '421536845796', 'Akash Lad', '22', '745263425163', 4),
('852950302038560', 'Sharvan Patel', '28', '825463597452', 'Kajal Patel', '26', '385263524586', 'Sunny Patel', '12', '421536845796', 'Sukhdev Patel', '14', '745263425163', 4),
('854747440704271', 'Pramod Patil', '32', '825463597452', 'Prabha patil', '30', '385263524586', 'Rahul Ptail', '16', '421536845796', 'Ram Patil', '18', '745263425163', 4),
('862040169235484', 'Ramayan Singh', '36', '825463597452', 'Lata Singh', '32', '385263524586', 'Upendra Singh', '38', '421536845796', 'Poonam Singh', '32', '745263425163', 4),
('864706178431624', 'Rajat Sharma', '26', '825463597452', 'Sanskruti', '25', '385263524586', 'Payal Sharma', '18', '421536845796', 'Kaushik Sharma', '18', '745263425163', 4),
('904827225323566', 'Anush Pandey', '43', '825463597452', 'Nikki Pandey', '34', '385263524586', 'Tej Pandey', '21', '421536845796', 'Anuj Pandey', '17', '745263425163', 4),
('905444553955310', 'Tej Tomar', '32', '825463597452', 'Ganesh Tomar', '30', '385263524586', 'Aniket Tomar', '27', '421536845796', 'Niku Tomar', '22', '745263425163', 4),
('918643484836027', 'Kajal Yadav', '22', '825463597452', 'Lalu Yadav', '22', '385263524586', 'Suraj Yadav', '24', '421536845796', 'Mitali Yadav', '25', '745263425163', 4),
('923319430668830', 'Ellama Roshan', '28', '825463597452', 'Babita Roshan', '24', '385263524586', 'Hritik Roshan', '20', '421536845796', 'Mainsh Roshan', '28', '745263425163', 4),
('929791561235667', 'Pintu Roy', '36', '825463597452', 'Sahil Roy', '23', '385263524586', 'Raj Roy', '26', '421536845796', 'Kushi Roy', '27', '745263425163', 4),
('994177910248638', 'Divya Rajput', '34', '825463597452', 'Rajat Rajput', '32', '385263524586', 'Pummy Rajput', '22', '421536845796', 'Ayush Rajput', '24', '745263425163', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receipt`
--

CREATE TABLE `tbl_receipt` (
  `receipt_id` int(10) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_contact_no` bigint(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `rationcard_no` bigint(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `tid` varchar(50) NOT NULL,
  `state` varchar(10) NOT NULL,
  `d_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_receipt`
--

INSERT INTO `tbl_receipt` (`receipt_id`, `u_name`, `u_contact_no`, `amount`, `rationcard_no`, `date`, `time`, `tid`, `state`, `d_id`, `booking_id`) VALUES
(13, 'Rajat Upendra Singh', 9537942675, 52, 398583356372442, '2022-03-31', '12:14:20', '2NF37203ER7462721', 'Completed', 7, 21),
(17, 'Dhruvpuri Jogendrapuri Goswami', 9720356515, 40, 777777777777777, '2022-04-16', '21:47:02', '', 'Complete', 7, 26),
(18, 'Dhruvpuri Jogendrapuri Goswami', 9720356515, 52, 777777777777777, '2022-05-16', '22:00:36', '3LM41935XU177792C', 'Completed', 7, 27),
(19, 'Dhruvpuri Jogendrapuri Goswami', 9720356515, 52, 777777777777777, '2022-05-17', '12:43:31', '', 'Complete', 7, 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_send_request`
--

CREATE TABLE `tbl_send_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_send_request`
--

INSERT INTO `tbl_send_request` (`id`, `name`, `date`, `email`, `subject`, `message`) VALUES
(1, 'Bhagya Anjaneyulu Nalla', '2022-01-14', 'bhagya@gmail.com', 'hmm', 'nice'),
(2, 'Bhagya Anjaneyulu Nalla', '2022-01-17', 'abhi@gmail.com', 'hey', 'nice work'),
(3, 'Shubham Mulchand Khatik', '2022-01-31', 'hello@gmail.com', 'Login Problem', 'Login Issue'),
(4, 'Rohit Kumar', '2022-02-23', 'rohitkumar@gmail.com', 'Payment', 'Not working');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `id` int(11) NOT NULL,
  `stock_id` int(10) NOT NULL,
  `stock_name` varchar(255) NOT NULL,
  `stock_price` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`id`, `stock_id`, `stock_name`, `stock_price`, `img`, `quantity`) VALUES
(1, 1, 'Wheat', 2, 'Wheat.png', 5),
(2, 2, 'Rice', 3, 'Rice.png', 1),
(3, 3, 'Oil', 100, 'oil.png', 1),
(4, 4, 'Dal', 80, 'Dal.png', 1),
(5, 5, 'Sugar', 35, 'sugar.png', 1),
(13, 6, 'Bajara', 2, 'Bajara.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suspend_dist`
--

CREATE TABLE `tbl_suspend_dist` (
  `id` int(10) NOT NULL,
  `pds_no` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `suspend_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_suspend_dist`
--

INSERT INTO `tbl_suspend_dist` (`id`, `pds_no`, `fname`, `mname`, `lname`, `contact_no`, `email_id`, `reason`, `suspend_date`) VALUES
(2, 3, 'Abhishek', 'Anjaneyulu', 'Nalla', 9054849782, 'abhinalla1995@gmail.com', 'Rude Behavior', '2022-01-30'),
(3, 12056, 'Kiran', 'Miteshbhai', 'Shah', 7226958632, 'kiran1999@gmail.com', 'Corrupted Distributor', '2022-01-31'),
(4, 12063, 'Shubham', 'Mulchand', 'Khatik', 9563258965, 'subham@gmail.com', 'working not well', '2022-02-01'),
(5, 12063, 'Shubham', 'Mulchand', 'Khatik', 9563258965, 'subham@gmail.com', 'hey', '2022-02-01'),
(6, 12063, 'Shubham', 'Mulchand', 'Khatik', 9563258965, 'subham@gmail.com', 'not working well', '2022-02-01'),
(7, 12063, 'Shubham', 'Mulchand', 'Khatik', 9563258965, 'subham@gmail.com', 'Not working well', '2022-02-01'),
(8, 1, 'Bhagya', 'Anjaneyulu', 'Nalla', 9714996112, 'nallaabhi@gmail.com', 'Not Working Properly', '2022-02-15'),
(9, 2, 'Dhruvpuri', 'Jogendrapuri', 'Goswami', 9720356515, 'goswamidj19@gmail.com', 'Not suitable', '2022-02-15'),
(10, 12060, 'Kaushik', 'Srinivas', 'Gaddam', 9712166240, 'gk@gmail.com', 'Not doing job', '2022-02-15'),
(11, 12061, 'Abhishek', 'Anjaneyulu', 'Nalla', 9054849782, 'abhinalla1995@gmail.com', 'Health is not good', '2022-02-15'),
(12, 1202, 'Suraj', 'Nirajbhai', 'Patel', 7845126352, 'surajpatel@gmail.com', 'Corrupted', '2022-02-24'),
(13, 1206, 'Ramesh', 'Hiren', 'Desai', 9562351054, 'rameshdesai@gmail.com', 'Not Working well and involved in black marketing', '2022-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `aadhar_no` varchar(12) NOT NULL,
  `rationcard_no` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `fname`, `mname`, `lname`, `address`, `contact_no`, `gender`, `dob`, `aadhar_no`, `rationcard_no`, `city`, `state`, `pincode`, `email_id`, `image`, `password`) VALUES
(1, 'Abhishek', 'Anjaneyulu', 'Nalla', '208 209 Saidham Society Godadara', '9054849782', 'male', '2003-09-30', '281443827447', '111111111111111', 'Surat', 'Gujarat', 395010, 'nallaabhi2003@gmail.com', 'male.png', 'd76f3d05cc9ac98f1f9160274a39fe33'),
(2, 'Dhruvpuri', 'Jogendrapuri', 'Goswami', 'Variyav', '9720356515', 'Male', '2003-11-25', '125496325874', '777777777777777', 'Surat', 'Gujarat', 395002, 'goswamidj16@gmail.com', 'male.png', '1eba9614763773df08dd49049663c3e3'),
(3, 'Nilesh', 'Bhimbhai', 'Singh', 'Puna patiya, Surat', '7225896359', 'Male', '2002-02-28', '502145963254', '127224523746938', 'Surat', 'Gujarat', 395010, 'nilesh2002@gmail.com', 'male.png', '95fc7a2528730ad1f6d60663d19d9375'),
(4, 'Sumit', 'Hariprasad', 'Khatik', 'Vrundhavan, Godadara', '9856321475', 'Male', '2004-06-20', '854965236542', '135151958030551', 'Surat', 'Gujarat', 395010, 'sumit@gmail.com', 'male.png', 'e7eca51c16f6230a4324095956c132cb'),
(5, 'Rajat', 'Upendra', 'Singh', 'Punagam', '9537942675', 'Male', '2004-01-06', '125630145874', '398583356372442', 'Surat', 'Gujarat', 395002, 'rs@gamil.com', 'male.png', 'd2ff3b88d34705e01d150c21fa7bde07'),
(6, 'Utkarsh', 'Anmol', 'Yadav', 'Aaspass Dada Temple, Godadara', '8569874526', 'Male', '2004-10-02', '156324895632', '221070438094376', 'Surat', 'Gujarat', 395010, 'ukyadav@gmail.com', 'male.png', 'a507a4c538369f67f7f6c7596a9577af'),
(7, 'kiran', 'Miteshbhai', 'Shah', 'Golden Soc', '7226958632', 'female', '2008-09-16', '158965236598', '163088065269771', 'Surat', 'Gujarat', 395002, 'kiran1999@gmail.com', 'female.png', 'b1a5b64256e27fa5ae76d62b95209ab3'),
(8, 'Shubham', 'Mulchand', 'Sharma', '111 Ramipark', '9054849784', 'male', '2010-10-03', '120250163254', '199653005281360', 'Surat', 'Gujarat', 395010, 'hello@gmail.com', 'male.png', '3b6beb51e76816e632a40d440eab0097'),
(9, 'Sushmitha', 'Rakesh', 'Gupta', 'Limbayat', '9723221585', 'female', '1996-02-18', '154632569856', '219007229379963', 'Surat', 'Gujarat', 395010, 'aishunalla1996@gmail.com', 'female.png', '54f9d35ec1a930540c4dbf49fa12201e'),
(10, 'Rakesh', 'Srinivas', 'Yadav', 'Delhi Gate', '9742752400', 'male', '1994-05-17', '254896569854', '221821307780083', 'Surat', 'Gujarat', 395002, 'rakesh2015@gmail.com', 'male.png', '67a05e3822ce48a6386746388e6c81f5'),
(11, 'Santosh', 'Ramakantbhai', 'Singh', 'Katargam', '9985698745', 'Male', '1991-04-30', '245632154632', '245876225711262', 'Surat', 'Gujarat', 35010, 'santosh1991@gmail.com', 'male.png', '587c57365b54e8283fd6b1ac24acf29d'),
(12, 'AjayKumar', 'Manishbhai', 'Margam', 'Variya', '8896574859', 'Male', '1999-11-20', '456325412012', '154856320145215', 'Surat', 'Gujarat', 395002, 'ajay@gmail.com', 'male.png', 'd353d73e5101bd0b1e696369c9ec3597'),
(13, 'Lalabhai', 'Atulbhai', 'Trivedi', 'Vikas Heights', '9856325896', 'Male', '1981-05-12', '987456321412', '415460278751227', 'Surat', 'Gujarat', 395002, 'lalaatul1981@gmail.com', 'male.png', 'c3d6f0aa63f1ddfe53717c030ea35eb2'),
(14, 'Vipul', 'Shamji', 'Chauhan', 'Krishan Soc, Katargam', '8452163259', 'Male', '1990-06-01', '542365232102', '448400979738932', 'Surat', 'Gujarat', 395010, 'vipul@gmail.com', 'male.png', '75c1bc3c464f438d90cdce5b72636c19'),
(15, 'Mihir', 'Vijaybhai', 'Thakur', 'Harikunja Soc', '6984751234', 'Male', '1998-12-25', '852456123987', '470355426520064', 'Surat', 'Gujarat', 395010, 'thakurmihir@gmail.com', 'male.png', '0e239924aff0449dfd3a2ac2b679454d'),
(16, 'Tarak', 'Jayantbhai', 'Ansari', 'Rama Buildings', '5986457896', 'Male', '1982-03-16', '753241689512', '480129537405606', 'Surat', 'Gujarat', 395010, 'tarak1983@gmail.com', 'male.png', '1a30cb00436d0ca1ca985d0679ad136b'),
(17, 'Daxesh', 'Mahendra', 'Shah', 'Gokuldam Soc', '9977886644', 'Male', '1992-07-19', '842689513574', '480157822221063', 'Surat', 'Gujarat', 395002, 'shahdaxesh@gmail.com', 'male.png', '0cf07d36ce83fee10ef404299c3f4f5c'),
(18, 'Bharti', 'Kesubh', 'Patil', 'Sai Darshan Soc', '8833221155', 'Female', '1996-09-03', '451600021532', '483650622191054', 'Surat', 'Gujarat', 395010, 'bharti1996@gmail.com', 'female.png', '365bdd2a254ed462f197998da3d97661'),
(19, 'RajendraKumar', 'Nanubhai', 'Rao', 'Royal Star Township', '8452331125', 'Male', '1999-12-20', '541030210263', '632586656389357', 'Surat', 'Gujarat', 39550, 'rajendra@gmail.com', 'male.png', 'c1be730993a7954cfef19c7ebc7be3fc'),
(20, 'Meethalal', 'Shankarlal', 'Varma', 'Variya', '6547893685', 'Male', '2001-11-22', '652345128549', '650889633162203', 'Surat', 'Gujarat', 395002, 'meethalal@gmail.com', 'male.png', '7fdab134dbb56a89ea319796794ca9a5'),
(21, 'Rajubhai', 'Jitendrabhai', 'Somnath', 'Variya', '8745632145', 'Male', '2000-01-21', '963036025632', '688964064676598', 'Surat', 'Gujarat', 395002, 'rajubhai2000@gmail.com', 'male.png', '074a8088800c78c06cbf0b094d1cba40'),
(22, 'Prince', 'Hareshbhai', 'Samala', 'Kalpana Soc', '7596324589', 'Male', '1994-05-15', '745665419821', '767900048814720', 'Surat', 'Gujarat', 395010, 'prince@gmail.com', 'male.png', '2077e4a6bafa9b4e7b55e1fff16818af'),
(23, 'Vijaykumar', 'MahendraKumar', 'Apedu', 'Raghunandan Soc', '7589632564', 'Male', '1984-03-14', '956321540216', '774746787766320', 'Surat', 'Gujarat', 395010, 'apeduvijay@gmail.com', 'male.png', 'a7818a765a8fccae3b7c9bef5da3bc41'),
(24, 'Mahendrabhai', 'Virubhai', 'Solanki', 'Neminath Soc', '8865975412', 'Male', '1999-01-10', '456231264523', '784149772278286', 'Surat', 'Gujarat', 395002, 'mahendra1999@gmail.com', 'male.png', '6ed46626254c173d4ffd3e3965ddc2c7'),
(25, 'Yogesh', 'Sanjaybhai', 'Singh', 'Dhruvpark Soc', '8596325415', 'Male', '2002-03-29', '652397513195', '794158415649605', 'Surat', 'Gujarat', 395010, 'yogeshsingh@gmail.com', 'male.png', '96c4ecfbdecfa3ddfe0f1fd7309b5fcb'),
(26, 'Sharvan', 'Venkat', 'Patel', 'Riddhi Siddhi Residency, Variya', '9563284569', 'male', '1998-05-20', '154875002156', '852950302038560', 'Surat', 'Gujarat', 395002, 'sharvanrudra@gmail.com', 'male.png', '8485ad8cdb6438da81a7edcb422668e0'),
(36, 'Ellama', 'Swami', 'Roshan', 'Saidham soc', '8526544123', 'male', '2015-02-20', '123456745896', '923319430668830', 'Surat', 'Gujarat', 395010, 'hello@gmail.com', 'female.png', 'd55982c2e4c5beb7f21355bc707645a3'),
(37, 'Pintu', 'Umesh', 'Roy', 'Laxminarayan Soc', '9874589632', 'male', '1997-05-19', '745896588523', '929791561235667', 'Surat', 'Gujarat', 395010, 'pinturoy@gmail.com', 'pintu.jpg', '0cae20f5cfd78ac8c61c0344ca635ac3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apply_stock`
--
ALTER TABLE `tbl_apply_stock`
  ADD PRIMARY KEY (`ap_id`),
  ADD KEY `tbl_stock name to tbl_apply_stock name` (`stock_name`(191)),
  ADD KEY `tbl_stock price to tbl_apply_stock price` (`stock_price`),
  ADD KEY `tbl_stock id to tbl_apply_stock id` (`stock_id`);

--
-- Indexes for table `tbl_available_stock`
--
ALTER TABLE `tbl_available_stock`
  ADD KEY `stock id to available stock id` (`stock_id`),
  ADD KEY `stock name to available stock name` (`stock_name`(191));

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_distributor`
--
ALTER TABLE `tbl_distributor`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`),
  ADD UNIQUE KEY `rationcard_no` (`rationcard_no`),
  ADD UNIQUE KEY `pds_no` (`pds_no`);

--
-- Indexes for table `tbl_dist_receipt`
--
ALTER TABLE `tbl_dist_receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `tbl_give_stock`
--
ALTER TABLE `tbl_give_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_ration`
--
ALTER TABLE `tbl_ration`
  ADD PRIMARY KEY (`rationcard_no`);

--
-- Indexes for table `tbl_receipt`
--
ALTER TABLE `tbl_receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `tbl_send_request`
--
ALTER TABLE `tbl_send_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_suspend_dist`
--
ALTER TABLE `tbl_suspend_dist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apply_stock`
--
ALTER TABLE `tbl_apply_stock`
  MODIFY `ap_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_distributor`
--
ALTER TABLE `tbl_distributor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_dist_receipt`
--
ALTER TABLE `tbl_dist_receipt`
  MODIFY `receipt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_give_stock`
--
ALTER TABLE `tbl_give_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_receipt`
--
ALTER TABLE `tbl_receipt`
  MODIFY `receipt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_send_request`
--
ALTER TABLE `tbl_send_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_suspend_dist`
--
ALTER TABLE `tbl_suspend_dist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
