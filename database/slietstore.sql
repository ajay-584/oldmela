-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2020 at 11:20 AM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slietstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'sliet584@gmail.com', 'ajay@1999');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Sangrur');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(16, 'General Books'),
(17, 'Chemical Books'),
(18, 'Civil Books'),
(19, 'Computer Books'),
(20, 'Electrical Books'),
(21, 'Electronics Books'),
(22, 'Food Books'),
(24, 'Mechanical Books'),
(25, 'Math Books'),
(26, 'Laptops'),
(27, 'Mobile Phones'),
(31, 'Electronics Items'),
(32, 'Home Items'),
(33, 'Sports Item'),
(34, 'Personal Items'),
(35, 'Vehicles'),
(37, 'Science Books');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` varchar(100) NOT NULL,
  `customer_gender` varchar(50) NOT NULL,
  `customer_contact` varchar(100) NOT NULL,
  `customer_add` varchar(50) NOT NULL,
  `customer_pin` varchar(50) NOT NULL,
  `customer_ip` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_gender`, `customer_contact`, `customer_add`, `customer_pin`, `customer_ip`, `code`, `status`) VALUES
(3, 'AJAY KUMAR', 'sliet584@gmail.com', 'ajay@1999', 'India', 'LONGOWAL', '09097403818', 'BH-6 ROOM NO-224, SLIET LONGOWAL', '148106', '0', '1234', 1),
(12, 'Abhishek singh', 'abhishekrown@gmail.com', 'oldmela.com', 'India', 'LONGOWAL', '9455784112', 'null', '0', '223.185.179.211', '', 1),
(13, 'ATUL MOHAN JHA', 'atulmohan1997@gmail.com', 'badboyss', 'India', 'Sangrur', '7355449316', 'null', '0', '14.139.242.73', '', 1),
(14, 'VIJAY', 'vijaykumar.sliet@gmail.com', 'gwt 103832', 'India', 'NAGPUR', '09781663240', 'null', '0', '106.213.172.172', '', 1),
(15, 'Vikash kumar ', 'vk805421@gmail.com', 'ajay', 'India', 'Sangrur', '9931656645 ', 'null', '0', '14.139.242.73', '', 1),
(16, 'Chandan Kumar', 'raoc54532@gmail.com', 'raoc54532', 'India', 'Longowal', '9555889735', 'null', '0', '14.139.242.73', '', 1),
(17, 'Vivek kumar', 'kumarvivek63131@gmail.com', 'vivek455vk', 'India', 'Patna ', '7654798558', 'null', '0', '47.9.232.99', '', 1),
(18, 'Ankit Kumar ', 'ankitraj. ar28@gmail.com', '7542948470', 'India', 'Sangrur ', '7488280174', 'null', '0', '14.139.242.73', '', 1),
(19, 'Pawan Patil', 'pavanraje.2013@gmail.com', '1234', 'India', 'SLIET, Longowal', '9834368663', 'null', '0', '14.139.242.73', '', 1),
(20, 'RAVI YADAV ', 'yravi3477@gmail.com', 'Ravi123@', 'India', 'LONGOWAL ', '9170495834', 'null', '0', '14.139.242.73', '', 1),
(21, 'Abhay Gupta', 'abhaygupta9990@gmail.com', 'paridhi', 'India', 'Sangrur', '7800987873', 'null', '0', '14.139.242.73', '', 1),
(22, 'Ashish Kumar Shrivastava', 'ashishshrivastava1504@gmail.com', '28011504', 'India', 'Muzaffarpur', '8427407721', 'null', '0', '223.185.12.202', '', 1),
(23, 'Vivek Kumar', 'hancyboyvivek@gmail.com', 'VIVEK@123', 'India', 'Muzaffarpur', '7626947364', 'null', '0', '223.185.15.130', '', 1),
(24, 'Vivek', 'vivek853902@gmail.com', '9135116430v@V', 'India', 'LONGOWAL', '09135116430', 'null', '0', '14.139.242.73', '', 1),
(25, 'Piyush', 'piyushankit14@gmail.com', 'Ankita10#', 'India', 'Bokaro', '9798635744', 'null', '0', '157.42.37.198', '', 1),
(26, 'Ayush', 'ayushthakur83461@gmail.com', '123456', 'India', 'Joginder Nagar', '7018401540', 'null', '0', '14.139.242.73', '', 1),
(27, 'Siddhant Verma', 'siddhantv99@gmail.com', 'bahubali', 'India', 'Sangrur', '9878909742', 'null', '0', '14.139.242.73', '', 1),
(28, 'Ashwini kumar', 'ashwinikumarssic@gmail.com', 'Atharwa', 'India', 'sangrur', '07905314654', 'null', '0', '157.39.203.61', '', 1),
(29, 'Sanjay kumar ', '24685sanjaykumarsahu@gmail.com', '@7352@', 'India', 'Longwal', '7353663970', 'null', '0', '157.39.105.191', '', 1),
(30, 'Rajnish kumar sahu ', 'Rajnishsahu75@gamil.com ', '8809724239', 'India', 'Logowal', '6283850897', 'null', '0', '14.139.242.73', '', 1),
(31, 'Vivek Kumar', 'vivek.kumar199@outlook.com', 'aaaa1111', 'India', 'Sangrur', '9013733314', 'null', '0', '14.139.242.73', '', 1),
(32, 'Harsh Vardhan', 'harshvardhan8858@gmail.com', 'hvvlove@12', 'India', 'Longowal', '9793857711', 'null', '0', '223.185.187.223', '', 1),
(33, 'Asdfghjkl', 'devrajanand5734@gmail.com', 'devanand5734', 'India', 'Sangrur', '7696853223', 'null', '0', '14.139.242.73', '', 1),
(34, 'Nishant Chourey', 'chourey.nishant17@gmail.com', 'nanu', 'India', 'Sangrur', '6264631789', 'null', '148106', '14.139.242.73', '', 1),
(35, 'Nilay Raj', 'rajnilay7@gmail.com', 'abc@123', 'India', 'Nirmali', '9521611291', 'null', '0', '14.139.242.73', '', 1),
(36, 'Aishwarya', 'madhavsharma1119@gmail.com', '9501278805', 'India', 'LONGOWAL', '9501278805', 'null', '0', '14.139.242.73', '', 1),
(37, 'Nikhil kumar', 'Lukin4nikhil14@gmail.com', 'Nikhilnkc', 'India', 'Longowal', '8264981899', 'null', '0', '223.225.190.64', '', 1),
(38, 'Nikhil', 'nikhiltiwary9122@gmail.com', 'nikhil123', 'India', 'Patna', '6205151942', 'null', '0', '157.39.206.210', '', 1),
(39, 'Sakshi Kumari ', 'Chysakshi02@gmail.com ', '3264', 'India', 'Punjab ', '7763055813', 'null', '0', '14.139.242.73', '', 1),
(40, 'Sonelal kr.kushwaha', 'kumarsonelal098@gmail.com', '1610369', 'India', 'Longowal', '9056592970', 'null', '0', '14.139.242.73', '', 1),
(41, 'Ayush', 'ayushverma21032003@gmail.com', 'ayush2003', 'India', 'Longowal', '7018124110', 'null', '0', '117.227.99.75', '', 1),
(42, 'Kumar Bhasker', 'kumarbhasker389@gmail.com', '06032000', 'India', 'Sangrur', '7087209724', 'null', '0', '14.139.242.73', '', 1),
(43, 'Mithun kumar', 'Mail4mithunkumar@gmail.com', 'qwertyuiop8699', 'India', 'Sangrur', '8699132429', 'null', '0', '14.139.242.73', '', 1),
(44, 'Harvinder pal Singh', 'waraichgill@gmail.com', 'harvinder', 'India', 'Sliet Longowal', '9876607302', 'Waraich Printing shop no- 15 Near Stadium (BH-07)', '148106', '117.241.167.240', '', 1),
(45, 'ashu', 'lovely2ashish@gmail.com', 'ak543210', 'India', 'longowal', '9876543210', 'Sangrur', '0', '14.139.242.73', '', 1),
(46, 'Avtar so.gh', 'aashumehra10@gmail.com', 'aashuamu', 'India', 'Sangrur', '8427806975', 'null', '0', '14.139.242.73', '', 1),
(47, 'madan mohan kumar', 'madanmohanyadav@gmail.com', 'Madan@123', 'India', 'Sangrur', '9417270385', 'null', '0', '14.139.242.73', '', 1),
(48, 'SANJEET KUMAR SAHNI', 'sanjeetdca1218@gmail.com', 'sanjeet1218', 'India', 'Sanaur', '8284064780', 'null', '0', '14.139.242.73', '', 1),
(49, 'Anmol Sharma', 'anmolstarsharma99@gmail.com', 'anmol9459', 'India', 'sangrur', '8219446117', 'null', '0', '14.139.242.73', '', 1),
(50, 'Rashmi kumari', 'rashmikiit@yahoo.in', 'anilrishu', 'India', 'gurgaon', '08447453541', 'null', '0', '42.111.34.244', '', 1),
(63, 'Divya Prakash', 'divyasingh19prakash@gmail.com', '43211234', 'India', 'male', '070 8720 9795', 'null', '0', '223.225.181.37', '2693', 1),
(64, 'Sumit Kumar', 'imsannyshabo@gmail.com', 'LNHSsliet', 'India', 'male', '8750022757', 'null', '0', '106.67.91.144', '7234', 1),
(66, 'AVINASH KUMAR', 'akspj1212@gmail.com', 'Akspj1212', 'India', 'male', '9056571591', 'null', '0', '14.139.242.73', '6281', 1),
(67, 'Sachin Korla', 'Sachinkorla9617@gmail.com', 'Sachu123@', 'India', 'male', '8679625300', 'null', '0', '14.139.242.73', '2874', 1),
(70, 'Shweta choudhary', 'Shwetachoudhary867@gmail.com', 'choudhary867', 'India', 'female', '7367934436', 'null', '0', '14.139.242.73', '1953', 1),
(71, 'Ashutosh Prakash', 'ashutosh.prakash2014@gmail.com', 'ashutosh', 'India', 'male', '9855997293', 'null', '0', '14.139.242.73', '4949', 1),
(74, 'ANMOL RATAN', 'anmolratan487@gmail.com', '8699632721', 'India', 'male', '9113323435', 'null', '0', '157.39.142.176', '5460', 1),
(75, 'Arun', 'kumar05.962013@gmail.com', 'Kumar05@1997', 'India', 'male', '8894989573', 'null', '0', '223.185.188.1', '9679', 1),
(76, 'Harsh', 'harshtheraj@gmail.com', 'harwish2512', 'India', 'male', '9056809825', 'null', '0', '14.139.242.73', '3884', 1),
(77, 'Deepa', 'Deepamaan.singh@gmail.com', 'myoldmela', 'India', 'male', '9876077403', 'null', '0', '14.139.242.73', '1935', 1),
(78, 'Shubham sinha', 'shubhamsinha4467@gmail.com', 'Shubham543', 'India', 'male', '09056325372', 'null', '0', '1.187.249.102', '2502', 1),
(79, 'Abhinav', 'abhinav.tinde@gmail.com', 'abhinav123', 'India', 'male', '9582848217', 'null', '0', '14.139.242.73', '6446', 1),
(80, 'Donaldson kurbah', 'donaldkurbah97@gmail.com', '123abc', 'India', 'male', '7085369738', 'null', '0', '157.39.74.206', '7631', 1),
(81, 'Nehal', 'nehalkhan081@gmail.com', 'khannehal12', 'India', 'male', '9501587235', 'null', '0', '106.192.24.254', '2416', 1),
(83, 'Animesh Gautam', 'rajgoutam231@gmail.com', 'qwerty', 'India', 'male', '8825224717', 'null', '0', '14.139.242.73', '5739', 1),
(84, 'Ankit Kumar', 'ankitraj.ar28@gmail.com', '7542948470', 'India', 'male', '7488280174', 'null', '0', '157.39.19.86', '2799', 1),
(85, 'Satyam kumar', 'satyam135kumar@gmail.com', 'satyam09#', 'India', 'male', '9501875516', 'null', '0', '14.139.242.73', '4843', 1),
(86, 'Ankit Anand', 'ankitanand0646@gmail.com', '12150aa', 'India', 'male', '7355097921', 'Longowal', '148106', '14.139.242.73', '6062', 1),
(87, 'Mohd Azhar', 'Azharmohd325@gmail.com', 'azhar147', 'India', 'male', '7838878579', 'Delhi', '110053', '42.111.17.75', '9930', 1),
(91, 'BITTU KUMAR', 'bittu76nokia.com@gmail.com', 'BITTU', 'India', 'male', '08410002025', 'null', '0', '157.39.152.44', '5122', 1),
(94, 'Shivam pathak', 'shivampathak13580@gmail.com', 'AJAYpathak9931@', 'India', 'male', '8340459050', 'null', '0', '14.139.242.73', '2161', 1),
(103, 'Ranjan kumar', 'ranjankumarraj9534@gmail.com', 'ranjan9534', 'India', 'male', '9534324156', 'null', '0', '157.39.251.223', '6024', 1),
(104, 'Bikram singh', 'Craker.bikram@gmail.com', 'singh1993', 'India', 'male', '8288055356', 'null', '0', '223.185.166.128', '9039', 1),
(108, 'Sudhanshu', 'sudhanshukumar2759@gmail.com', 'sudholdpro', 'India', 'male', '+918935844961', 'null', '0', '157.39.41.23', '2460', 1),
(109, 'PAWAN KUMAR SAHU', 'dbg.pawansahu@gmail.com', 'Pawank9@', 'India', 'male', '7004486084', 'Darbhanga', '846004', '47.29.32.33', '2811', 1),
(110, 'Satyam Rajput', 'satyamrajj450@gmail.com', '9517346013', 'India', 'male', '9517346013', 'null', '0', '14.139.242.73', '1590', 1),
(111, 'Komal', 'komalmangal999@gmail.com', '5299', 'India', 'female', '9056317698', 'null', '0', '14.139.242.73', '3562', 1),
(116, 'VIRK PHOTOSTAT', 'virkphotostat@gmail.com', 'yuvrajkv', 'India', 'male', '9876569025', 'null', '0', '117.204.243.123', '1943', 1),
(117, 'Gijhjj', 'Shivammppriyadarshi@gmail.com', 'rahul1', 'India', 'male', '8716788867', 'null', '0', '14.139.242.73', '6186', 1),
(118, 'Ritesh chandra', 'riteshinmysoul44@gmail.com', 'Ritesh735573', 'India', 'male', '7355738117', 'null', '0', '14.139.242.73', '0077', 1),
(119, 'Aryan Anand', 'anandaryan06@gmail.com', '1212Aryan', 'India', 'male', '9110155227', 'null', '0', '157.39.217.15', '4088', 1),
(122, 'Sri Hari Satya Bharadwaj V', 'sri1998hari@gmail.com', '19Srihari(*', 'India', 'male', '9000400478', 'null', '0', '14.139.242.73', '7728', 1),
(124, 'Vikram Kumar', 'Vikramkumaralpha538@gmail.com', 'Brain@177', 'India', 'male', '9877356275', 'null', '0', '14.139.242.73', '0283', 1),
(125, 'Pradip Das', 'mavericks3981@gmail.com', '1qwertyuiop1', 'India', 'male', '7355278150', 'null', '0', '14.139.242.73', '1306', 1),
(126, 'Markandey Nimbark', 'mark1996nimbark@gmail.com', 'Qwerty@12345', 'India', 'male', '9915410370', 'null', '0', '14.139.242.73', '5515', 1),
(127, 'RISHAV KUMAR', 'rishavkumar9713@gmail.com', 'old@9713', 'India', 'male', '7004652649', 'null', '0', '157.39.58.4', '0701', 1),
(128, 'Vivek Kumar', 'vk240899@gmail.com', '821310', 'India', 'male', '6200690639', 'null', '0', '157.39.204.219', '8818', 1),
(129, 'sonu', 'piyush9211vaibhav@gmail.com', 'aarti79ranjit', 'India', 'male', '6283248521', 'null', '0', '157.39.238.67', '7202', 1),
(132, 'Dharmesh Kumar', 'dharmeshk928@gmail.com', '8859787204', 'India', 'male', '0807 795 6745', 'null', '0', '157.39.22.241', '3885', 1),
(135, 'Ravi Shankar Thakur', 'ravishankarthakur1266@gmail.com', 'Ankit420', 'India', 'male', '+916205331954', 'Sangrur', '148106', '14.139.242.73', '7549', 1),
(136, 'Mayank kumar', 'mayanksingh000555@gmail.com', 'Pankaj123@', 'India', 'male', '8709787522', 'null', '0', '14.139.242.73', '8171', 1),
(137, 'Rishi', 'Krishikesh780@gmail.com', '12345', 'India', 'male', '9795298080', 'null', '0', '14.139.242.73', '1470', 1),
(138, 'mrx mrx', 'mrx37583@yahoo.com', 'mrx37583@yahoo.com', 'India', 'male', '8936835283', 'null', '0', '41.250.108.29', '6177', 1),
(139, 'Ðdult zÐ¾Ð¾sk 1 dating Ð°pÑ€: http://wunkit.com/OIQMAA', 'crexandjbarton@optusnet.com.au', 'BÐµautiful girls fÐ¾r sÐµÑ… in your citÑƒ CÐ°nadÐ°: https://qspark.me/xhSsfN', 'India', '1', '#file_links[\"C:Frazes.txt\",1,N]: #file_links[\"C:Links_Dating.txt\",1,N]', 'null', '0', '196.52.84.29', '3934', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `c_add` varchar(100) NOT NULL,
  `c_mob` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` varchar(50) NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `p_brand` varchar(50) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `product_keywords` varchar(1000) NOT NULL,
  `product_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `c_id`, `cat_id`, `brand_id`, `c_add`, `c_mob`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `p_brand`, `product_desc`, `product_keywords`, `product_status`) VALUES
(60, 'Pavanraje.2013@gmail.com', 16, 1, '101, BH7, SLIET', '9834368663', '2018-09-29 03:32:37', 'Books', 'IMG_20180929_090136.jpg', '', '', 'â‚¹350', 'S.CHAND', ' ', 'B.K.Theraja AC and DC Machines', 'on'),
(62, 'Pavanraje.2013@gmail.com', 35, 1, '101,BH7,SLIET', '7004610021', '2018-09-29 03:48:07', 'Bicycle', 'IMG_20180929_091607.jpg', '', '', 'â‚¹3500', 'Avon', ' ', 'Cycle , Race', 'on'),
(63, 'Pavanraje.2013@gmail.com', 34, 1, '101,BH7,SLIET', '7004610021', '2018-09-29 03:52:36', 'Watch', 'IMG_20180929_092136.jpg', '', '', 'â‚¹129', 'QC Watches', ' ', 'Watch', 'on'),
(64, 'Pavanraje.2013@gmail.com', 27, 1, '104,BH6,Sant Longowal Institute of engineering and technology, Longowal-148106', '09834368663', '2018-09-29 04:01:30', 'Samsung Galaxy ', 'IMG_20180929_092854.jpg', 'IMG_20180929_092846.jpg', 'IMG_20180929_092851.jpg', 'â‚¹5000', 'Samsung', ' ', 'Phone Android', 'on'),
(67, 'abhishekrown@gmail.com', 16, 1, 'BH 6 SLIET UNIVERSITY, Longowal', '9455784112', '2018-09-29 04:16:05', 'Novel', 'IMG_20180929_093015856.jpg', 'IMG_20180929_093038649.jpg', 'IMG_20180929_093109593.jpg', '99', 'NA', 'Our impossible love written by Durjoy Datta...', 'Novel,books,', 'on'),
(68, 'sliet584@gmail.com', 16, 1, 'slietLongowal', '+919097403818', '2018-09-29 15:30:27', 'Novel ', 'IMG_20180929_205815.jpg', '', '', '99/-', 'Rupa', 'na', 'novel,books ', 'on'),
(69, 'vivek.kumar199@outlook.com', 19, 1, 'Room no. 132 , hostel no. 6 SLIET Longowal', '9013733314', '2018-09-30 04:27:14', 'DBMS BOOK', 'IMG_20180930_095037_HHT.jpg', '', '', 'â‚¹450', 'Tata McGraw hill', 'DBMS book by korth<div>Publication Tata McGraw hill</div>', 'DBMS book', 'on'),
(70, 'vivek.kumar199@outlook.com', 19, 1, 'Room no. 132 , hostel no. 6 SLIET Longowal', '9013733314', '2018-09-30 04:30:24', 'Practice book', 'IMG_20180930_095137.jpg', 'IMG_20180930_095150.jpg', '', 'â‚¹300', 'Made Easy', 'Practice work book for computer science students 3000 MCQ fully solved', 'MCQ for GATE', 'on'),
(71, 'vivek.kumar199@outlook.com', 19, 1, 'Room no. 132 , hostel no. 6 SLIET Longowal', '9013733314', '2018-09-30 04:32:24', 'Handbook', 'IMG_20180930_095128_HHT.jpg', 'IMG_20180930_095207.jpg', '', 'â‚¹180', 'Made Easy', 'A Handbook for computer science and IT', 'Handbook', 'on'),
(72, 'vivek.kumar199@outlook.com', 19, 1, 'Room no. 132 , hostel no. 6 SLIET Longowal', '9013733314', '2018-09-30 04:35:15', 'UGC- NET', 'IMG_20180930_095106_HHT.jpg', 'IMG_20180930_095224.jpg', '', 'â‚¹400', 'Made Easy', 'Previous years solved papers for UGC-NET<div>For computer science and IT</div>', 'UGC-NET', 'on'),
(73, 'kumarsonelal098@gmail.com', 37, 1, 'BH-05, SLIET longowal', '9056592970', '2019-03-08 05:24:15', 'NOTES', 'IMG_20180930_170948_HDR.jpg', 'IMG_20180930_170948_HDR.jpg', 'IMG_20180930_170948_HDR.jpg', '50', 'AP-1201', ' ', 'Sliet longowal', 'on'),
(75, 'sliet584@gmail.com', 31, 1, 'slietLongowal ', '09097403818', '2018-11-01 07:01:18', 'mi fan ', 'IMG_-401138778.jpg', '', '', '100', 'mi', ' this is mi temporary fan it will connect with the power bank. this fan is useful for traveling time in summer. ', 'mi fan ,sliet Longowal ,mi,electronic items ', 'on'),
(76, 'deepamaan.singh@gmail.com', 31, 1, 'Vill.kila bharian', '9876077403', '2019-01-17 08:04:25', 'Hard drive', 'IMG_20181231_114520_900.jpg', '', '', '100 ', 'Unknow', ' 500 gb hard drive in working condtion', 'Hard drive,Vill.kila bharian,Unknow,Electronics ', 'on'),
(78, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-21 16:07:55', 'programing in prolog ', 'IMG_20190121_104207.jpg', 'IMG_20181105_121645.jpg', '', '0', 'narosa publication ', ' This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others. ', 'programing in prolog ,Sliet Longowal Mechanical block M-216,narosa publication ,computer book', 'on'),
(80, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-21 16:20:25', 'java handbook', 'IMG_20181105_121904.jpg', 'IMG_20181105_121910.jpg', '', '0', 'ssi press', ' This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'java handbook,Sliet Longowal Mechanical block M-216,ssi press,computer books', 'on'),
(81, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-21 16:23:33', 'java script ', 'IMG_20181105_121959.jpg', 'IMG_20181105_122005.jpg', '', '0', 'ssi press', ' This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'java script ,Sliet Longowal Mechanical block M-216,ssi press,computer books ', 'on'),
(83, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-21 18:55:20', 'computer networks ', 'IMG_20181105_121815.jpg', 'IMG_20181105_121832.jpg', '', '0', 'person ', ' This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'computer networks ,Sliet Longowal Mechanical block M-216,person ,computer books ', 'on'),
(84, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-22 03:53:46', 'core java ', 'IMG_20181105_122023.jpg', 'IMG_20181105_122028.jpg', '', '0', 'sun micro system ', ' This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'core java ,Sliet Longowal Mechanical block M-216,sun micro system ,computer books ', 'on'),
(85, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-22 03:58:17', 'the complete ref java2', 'IMG_20181105_122059.jpg', 'IMG_20181105_122103.jpg', 'IMG_20181105_122111.jpg', '0', 'tata mcgraw hill', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.\r\n\r\n\r\n ', 'the complete ref java2,Sliet Longowal Mechanical block M-216,tata mcgraw hill,computer books', 'on'),
(86, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-22 04:02:49', 'computer oriented ', 'IMG_20181105_122157.jpg', 'IMG_20181105_122201.jpg', '', '0', 'phi', ' This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'computer oriented ,Sliet Longowal Mechanical block M-216,phi,computer books ', 'on'),
(89, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-23 14:49:46', 'computer architectur', 'IMG_20190123_173955.jpg', 'IMG_20190123_174012.jpg', '', '0', 'phi', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'computer architectur,Sliet Longowal Mechanical block M-216,phi,computer books ', 'on'),
(90, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-23 14:51:02', 'programming in c', 'IMG_20181105_122716.jpg', 'IMG_20181105_122722.jpg', '', '0', 'mcgraw hill education ', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.\r\n', 'programming in c,Sliet Longowal Mechanical block M-216,mcgraw hill education ,computer books ', 'on'),
(91, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-23 14:53:36', 'computer peripheral ', 'IMG_20181105_122443.jpg', 'IMG_20181105_122446.jpg', '', '0', 'na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'computer peripheral ,Sliet Longowal Mechanical block M-216,na,computer books ', 'on'),
(92, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-23 14:55:18', 'Dos in easy step', 'IMG_20181105_122538.jpg', 'IMG_20181105_122543.jpg', '', '0', 'na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Dos in easy step,Sliet Longowal Mechanical block M-216,na,computer books ', 'on'),
(93, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-24 02:29:12', 'system simulation ', 'IMG_20190123_202544.jpg', 'IMG_20181105_122603.jpg', '', '0', 's. chand ', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'system simulation ,Sliet Longowal Mechanical block M-216,s. chand ,computer books ', 'on'),
(94, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-24 02:31:42', 'Distributed os', 'IMG_20190124_075933.jpg', 'IMG_20181105_122647.jpg', 'IMG_20181105_122640.jpg', '0', 'phi', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Distributed os,Sliet Longowal Mechanical block M-216,phi,computer books ', 'on'),
(95, 'sliet584@gmail.com', 20, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-24 02:34:41', 'Digital circuit ', 'IMG_20181105_125528.jpg', 'IMG_20181105_125534.jpg', '', '0', 'PHI', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Digital circuit ,Sliet Longowal Mechanical block M-216,PHI,electrical books ', 'on'),
(96, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-25 01:43:00', 'Inside servlets', 'IMG_20181105_122804.jpg', 'IMG_20181105_122808.jpg', '', '0', 'person education', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Inside servlets,Sliet Longowal Mechanical block M-216,person education,computer books ', 'on'),
(97, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-28 03:07:57', ' design of computer ', 'IMG_20181105_122818.jpg', 'IMG_20181105_122823.jpg', '', '0', 'na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', ' design of computer ,Sliet Longowal Mechanical block M-216,na,computer books', 'on'),
(98, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-03-21 12:50:11', 'fundamental of computer', 'IMG_20181105_122840.jpg', 'IMG_20181105_122843.jpg', '', '0', 'na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'fundamental of comp,Sliet Longowal Mechanical block M-216,na,computer books', 'on'),
(99, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-28 03:11:16', 'elements of computer', 'IMG_20181105_122855.jpg', 'IMG_20181105_122905.jpg', 'IMG_20181105_122858.jpg', '0', 'na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'elements of computer,Sliet Longowal Mechanical block M-216,na,computer books ', 'on'),
(100, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-28 03:12:56', 'operating system ', 'IMG_20181105_122951.jpg', 'IMG_20181105_122959.jpg', '', '0', 'tata mcgraw hill', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'operating system ,Sliet Longowal Mechanical block M-216,tata mcgraw hill,computer books', 'on'),
(101, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-28 03:14:44', 'Data structure ', 'IMG_20181105_123054.jpg', 'IMG_20181105_123057.jpg', 'IMG_20181105_123101.jpg', '0', 'PHI', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Data structure ,Sliet Longowal Mechanical block M-216,PHI,computer books', 'on'),
(102, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-03-21 12:50:51', 'multimedia communication', 'IMG_20181105_123153.jpg', 'IMG_20181105_123156.jpg', 'IMG_20181105_123200.jpg', '0', 'Person education ', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'multimedia communica,Sliet Longowal Mechanical block M-216,Person education ,computer books', 'on'),
(103, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-01-28 03:20:04', 'Discrete mathematics', 'IMG_20190125_071439.jpg', 'IMG_20190125_071457.jpg', '', '0', 'mcgraw hill education ', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Discrete mathematics,Sliet Longowal Mechanical block M-216,mcgraw hill education ,computer books', 'on'),
(104, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-02 04:12:46', 'computer graphics ', 'IMG_20190201_081047.jpg', 'IMG_20190201_081103.jpg', '', '0', 'mcgraw hill education ', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'computer graphics ,Sliet Longowal Mechanical block M-216,mcgraw hill education ,computer books ', 'on'),
(105, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-02 04:16:25', 'computer graphics ', 'IMG_20181105_124134.jpg', 'IMG_20181105_124138.jpg', 'IMG_20181105_124143.jpg', '0', 'Person Education ', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'computer graphics ,Sliet Longowal Mechanical block M-216,Person Education ,computer books ', 'on'),
(106, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-02 04:20:06', 'programming with c', 'IMG_20190202_094827.jpg', '', 'IMG_20190202_094845.jpg', '0', 'na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'programming with c,Sliet Longowal Mechanical block M-216,na,computer books ', 'on'),
(107, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-06 10:47:32', 'Theory of computer ', 'IMG_20190206_120752.jpg', '', 'IMG_20190206_120800.jpg', '0', 'phi', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Theory of computer ,Sliet Longowal Mechanical block M-216,phi,computer books ', 'on'),
(108, 'sliet584@gmail.com', 19, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-06 14:18:09', 'Unix network prog..', 'IMG_20190206_124441.jpg', '', 'IMG_20190206_124447.jpg', '0', 'PHI', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Unix network prog..,Sliet Longowal Mechanical block M-216,PHI,computer books', 'on'),
(109, '24685sanjaykumarsahu@gmail.com', 25, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-17 05:19:03', 'Higher engg math', 'P_20181106_132904.jpg', 'P_20181106_132911.jpg', '', '0', 'Na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Higher engg math,Sliet Longowal Mechanical block M-216,Na,Mathematics books', 'on'),
(110, '24685sanjaykumarsahu@gmail.com', 25, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-17 05:22:16', 'Higher algebra ', 'P_20181106_132843.jpg', 'P_20181106_132849.jpg', '', '0', 'Na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Higher algebra ,Sliet Longowal Mechanical block M-216,Na,Mathematics books', 'on'),
(111, 'abhishekrown@gmail.com', 24, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-17 08:52:55', 'Aplied machines', '20181105_131029.jpg', '', '', '0', 'NA', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Aplied machines,Sliet Longowal Mechanical block M-216,NA,Mechanical books', 'on'),
(112, 'abhishekrown@gmail.com', 24, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-17 09:07:08', 'Engg. Mechanics', '20181105_130927.jpg', '20181105_130933.jpg', '', '0', 'NA', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Engg. Mechanics,Sliet Longowal Mechanical block M-216,NA,Mechanical books', 'on'),
(113, 'abhishekrown@gmail.com', 24, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-17 09:07:18', 'Engg. Mechanics', '20181105_130927.jpg', '20181105_130933.jpg', '', '0', 'NA', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Engg. Mechanics,Sliet Longowal Mechanical block M-216,NA,Mechanical books', 'on'),
(114, 'abhishekrown@gmail.com', 24, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-17 09:08:52', 'Engg. Mechanics', '20181105_130855.jpg', '20181105_130922.jpg', '', '0', 'NA', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Engg. Mechanics,Sliet Longowal Mechanical block M-216,NA,Mechanical books', 'on'),
(115, 'abhishekrown@gmail.com', 24, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-02-17 09:10:36', 'Engg. Mechanics', '20181105_130830.jpg', '20181105_130844.jpg', '', '0', 'NA', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Engg. Mechanics,Sliet Longowal Mechanical block M-216,NA,Mechanical books', 'on'),
(116, 'Craker.bikram@gmail.com', 34, 1, 'Sliet Longowal Gate near Ramu chicken', '8288055356', '2019-02-23 09:58:04', 'Wash Your Clothes', '15509157070482048175628442224525.jpg', '', '', '50', 'Na', 'Wash your all cloth in only 50/- ', 'Wash Your Clothes,Sliet Longowal Gate near Ramu chicken,Na,Personal items', 'on'),
(117, 'sliet584@gmail.com', 20, 1, 'Sliet Longowal Mechanical block M-216', '94172 70385', '2019-03-15 13:02:07', 'Microprocessor', 'IMG_20190315_182828.jpg', '', '', '0', 'na', 'This book is available in social library at Sliet Longowal. you can issue it and after study you have to submit. And you can submit any old books for others.', 'Microprocessor,Sliet Longowal Mechanical block M-216,na,electronical books', 'on'),
(118, 'mavericks3981@gmail.com', 34, 1, 'Sliet, longowal', '7355278150', '2019-04-03 19:09:38', 'Large White Board ', '1554318279224750938000456563787.jpg', '1554318357246198367532272760288.jpg', '', '550 ', 'White Board general', 'Large sized dual board marker as well as chalk ...duster is also included ...if someone interested to buy please contact ... ', 'Large White Board ,Sliet, longowal,White Board general,Large white board with dual side for marker and chalk', 'on'),
(119, 'piyush9211vaibhav@gmail.com', 34, 1, 'bh-03, sliet, longowal', '6283248521', '2019-04-24 08:13:57', 'bed study table', 'IMG_20190424_133657.jpg', 'IMG_20190424_123756.jpg', '', '190', 'kirat', 'study table', 'bed study table,bh-03, sliet, longowal,kirat,bed table', 'on'),
(120, 'mayanksingh000555@gmail.com', 35, 1, 'Bh-08 sliet', '8709787522', '2019-08-09 09:52:11', 'Hero cycle for sale', 'IMG_20190809_152034.jpg', 'IMG_20190809_152027.jpg', 'IMG_20190809_152022.jpg', '1800', 'Hero', 'Hero cycle in good condition contact for more details ', 'Hero cycle for sale,Bh-08 sliet,Hero,Hero cycle in good condition ', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `email`, `pass`) VALUES
(1, 'sliet584@gmail.com', 'ajaykumar'),
(2, 'sliet584@gmail.com', 'ajaykumar'),
(3, 'ajaykumarsliet584@gmail.com', 'ajaykumar'),
(4, 'ajaykumarsliet584@gmail.com', 'dfgdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
