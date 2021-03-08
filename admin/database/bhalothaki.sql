-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 04:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhalothaki`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'Admin', '01927194591', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(15) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_age` int(3) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(30) NOT NULL,
  `problem` text NOT NULL,
  `gender` varchar(15) NOT NULL,
  `fee` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `dname`, `dept`, `p_name`, `p_age`, `date`, `time`, `place`, `problem`, `gender`, `fee`) VALUES
(1, 'Shafayez Zim', 'Medicine', 'Morshedul Antor', 25, '2021-01-15', '09:30:00', 'Online', 'Serious headache', 'Male', 500),
(3, 'Shafayez Zim', 'Specialists', 'Iftekhar Riyad', 24, '2020-10-17', '08:00:00', 'Online', 'Stomach Problem', 'Male', 500),
(19, 'Maliha Mamtaz', 'Medicine', 'Morshedul Bari Antor', 25, '2021-01-22', '00:00:05', 'Online', 'problem', 'Male', 500);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `pic` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `name`, `date`, `pic`, `details`) VALUES
(8, 'দেশে গত ২৪ ঘণ্টায় সবচেয়ে বেশি করোনা রোগী শনাক্ত', '2020-09-12', 'corona.jpg', 'করোনাভাইরাসে সংক্রমিত রোগী শনাক্তের সংখ্যা গতকাল শনিবারের চেয়ে আজ রোববার বেড়েছে। মৃত্যুও বেড়েছে। গত ২৪ ঘণ্টায় সর্বোচ্চ ১৩৯ জন ব্যক্তি করোনাভাইরাসে সংক্রমিত রোগী বলে শনাক্ত হয়েছে। মারা গেছে ৪ জন। এ নিয়ে দেশে মোট শনাক্তের সংখ্যা দাঁড়াল ৬২১। আর মৃত্যু বেড়ে হয়েছে ৩৪।\r\n\r\nগতকাল আক্রান্ত শনাক্তের সংখ্যা ছিল ৫৮, মৃত্যু হয় ৩ জনের। আজ রোগতত্ত্ব, রোগনিয়ন্ত্রণ ও গবেষণা প্রতিষ্ঠানের (আইডিসিআর) পরিচালক মীরজাদী সেব্রিনা অনলাইন ব্রিফিংয়ে এ কথা জানান। এ সময় মোট নমুনা সংগ্রহ করে পরীক্ষা করা হয়েছে ১ হাজার ৩৪০ জনের।\r\n\r\nআজ ৩ জন করোনাভাইরাসে আক্রান্ত রোগী সুস্থ হয়েছে। এ নিয়ে মোট সুস্থ রোগীর সংখ্যা দাঁড়াল ৩৯।'),
(69, 'Precautions Against Corona Virus', '2020-12-04', 'fadda70ccdc3cd2761f8c6176eb40a8bCOVID-19.jpg', 'Coronavirus disease is an infectious disease in recent time. Protect yourself and others by taking appropriate precautions.\r\n'),
(70, '', '0000-00-00', 'f134bcc31cc2844d60378f9f110c6d44coronavirus-1200-1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_c` int(5) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_email` varchar(25) NOT NULL,
  `c_subject` varchar(30) NOT NULL,
  `c_message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_c`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(17, 'Morshedul Bari Antor', 'itsantor25@gmail.com', 'Telemedicine', 'Need help. Please call');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_dept` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `details_dept` text NOT NULL,
  `pic_dept` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `id_hos` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `fee` varchar(500) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `dept` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `id_hos`, `name`, `email`, `phone`, `fee`, `reg_no`, `dept`, `address`, `image`) VALUES
(1, 1, 'zim', 'zim@gmail.com', '01763191368', '500', '2233', 'Department 1', 'Basundhora', 'doctor_image/65e5c21f4c2e9447f1f7e203b917d064doctors-4.jpg'),
(3, 1, 'antor', 'antor@gmail.com', '01763191368', '500', '1034', 'Department 2', 'gaibandha', 'doctor_image/57026376fd8c714a56aeb81e3e292a92doctor.png');

-- --------------------------------------------------------

--
-- Table structure for table `info_doc`
--

CREATE TABLE `info_doc` (
  `id_doc` int(15) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bmdc` varchar(30) NOT NULL,
  `specialty` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `fee` int(10) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info_doc`
--

INSERT INTO `info_doc` (`id_doc`, `f_name`, `l_name`, `mobile`, `email`, `password`, `bmdc`, `specialty`, `address`, `fee`, `pic`) VALUES
(2, 'Shafayet', 'Zim', '01758851101', 'shafayet@gmail.com', 'zim111', '123498700', 'Dermatologists', 'Bashundhara', 500, ''),
(3, 'Maliha', 'Mamtaz', '01758851100', 'maliha@gmail.com', 'maliha111', '123498765', 'Cardiologists', 'Road 10, Block I, Baridhara', 400, '');

-- --------------------------------------------------------

--
-- Table structure for table `info_hos`
--

CREATE TABLE `info_hos` (
  `id_hos` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `details` varchar(500) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info_hos`
--

INSERT INTO `info_hos` (`id_hos`, `name`, `mobile`, `email`, `password`, `reg_no`, `doctor`, `address`, `details`, `pic`) VALUES
(1, 'Regent', '01763191368', 'regent@gmail.com', '1011', '1', '', 'Khilkhet,Dhaka', 'Serve with maximum health care', 'hospital_image/hospitals-8.jpg'),
(8, 'United Hospital Limited', '01763191368', 'uhl@gmail.com', '2020', '2', '', 'dhaka', 'High quality healthcare in a friendly and compassionate environment.', 'hospital_image/6933972e486bcead57698c1562195261hospitals-1.jpg'),
(9, 'Apollo Hospital', '01763191368', 'apollo@gmailcom', '2233', '3', '', 'Basundhora', 'Confidently providing comprehensive health care', 'hospital_image/1320ba4e62855df4ad046f41bb37ecc7hospitals-3.jpg'),
(10, 'Kurmitola General Hospital', '01763191368', 'kgh@yahoo.com', '3423', '4', '', 'Khilkhet', 'High quality healthcare in a friendly and compassionate environment.', 'hospital_image/287466e09b4736dfb2064a2a38773428hospitals-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info_user`
--

CREATE TABLE `info_user` (
  `id_user` int(15) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info_user`
--

INSERT INTO `info_user` (`id_user`, `f_name`, `l_name`, `mobile`, `email`, `password`, `address`, `pic`) VALUES
(7, 'Morshedul', 'Antor', '01758857522', 'antor@gmail.com', 'antor111', 'Bashundhara', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pid` int(11) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `specialty` varchar(30) NOT NULL,
  `bmdc` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dnum` varchar(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `page` int(3) NOT NULL,
  `pdate` date NOT NULL,
  `pnum` varchar(11) NOT NULL,
  `pres1` text NOT NULL,
  `pres2` text NOT NULL,
  `pres3` text NOT NULL,
  `pres4` text NOT NULL,
  `pres5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pid`, `dname`, `specialty`, `bmdc`, `address`, `dnum`, `pname`, `page`, `pdate`, `pnum`, `pres1`, `pres2`, `pres3`, `pres4`, `pres5`) VALUES
(3, 'Shafayez Zim', 'Cardiologists', 'A-14242 ', 'F Block, Bashundhara R/A, Dhak', '01927194591', 'Morshedul Antor', 25, '2021-01-15', '01758857522', '1. Tab Napa 0+0+1 5days', '2. Tab Ciprocine 1+0+1 3days', '3. Cap Pantonix 1+0+1 7days', '', ''),
(5, 'Antor', '', '', '', '01927194591', 'Zim', 25, '2021-01-22', '01393032193', 'helllllooo', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_ser` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_ser`, `name`, `type`) VALUES
(1, 'Ambulance Service', 'Emergency');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_doc`
--
ALTER TABLE `info_doc`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indexes for table `info_hos`
--
ALTER TABLE `info_hos`
  ADD PRIMARY KEY (`id_hos`);

--
-- Indexes for table `info_user`
--
ALTER TABLE `info_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_ser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_c` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info_doc`
--
ALTER TABLE `info_doc`
  MODIFY `id_doc` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `info_hos`
--
ALTER TABLE `info_hos`
  MODIFY `id_hos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info_user`
--
ALTER TABLE `info_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_ser` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
