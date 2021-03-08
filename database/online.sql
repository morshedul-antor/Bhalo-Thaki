-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 07:17 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
  `problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `dname`, `dept`, `p_name`, `p_age`, `date`, `time`, `place`, `problem`) VALUES
(1, 'Maliha Mamtaz', 'Medicine', 'Morshedul Bari Antor', 25, '2020-09-24', '22:28:12', 'Online', 'Serious headache'),
(3, 'Morshedul Bari Antor', 'Specialists', 'Shafayet Zim', 25, '2020-10-07', '15:24:00', 'Online', 'Stomach Problem');

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
(63, 'লকডাউন শিথিল হলে যেভাবে স্বাস্থ্যবিধি মেনে চলবেন', '2020-10-05', 'c714a9adf43211c90c21d55299bab50acorona2.jpg', 'আগামী ১ জুন থেকে বাংলাদেশে আংশিক লকডাউন শিথিল হচ্ছে। এই আংশিক লকডাউন শিথিল হওয়া আমাদের কে বিভিন্ন প্রয়োজনে ও কাজে আবার বেরিয়ে পড়তে হবে। এই সময়ে কিছু স্বাস্থ্যবিধি মেনে চললে আপনি হয়তো কিছুটা নিরাপদ রাখতে পারবেন নিজেকে। চলুন জেনে নেয়া যাক লকডাউন শিথিল হলে আমরা যেভাবে স্বাস্থ্যবিধি মেনে চলতে পারিঃ \r\n\r\nদূরত্ব বজায় রাখাঃ সাধারণত যেকোন ভাইরাসের কাজই হচ্ছে আক্রান্ত ব্যাক্তির আশে পাশে যারা থাকে তাদের মধ্যও ছড়িয়ে পড়া তাই এই সময়ে বাহিরে বের হলে যতটুকু সম্ভব পাশের ব্যাক্তি থেকে দুরুত্ব বজায় রাখুন।\r\n\r\nমাস্ক ব্যাবহার করাঃ যথাসম্ভব ভালো মানের মাস্ক ব্যাবহার করুন। কারন আপনার প্রাথমিক শিল্ড হিসেবে কাজ করবে একটি ভালো মানের মাস্ক। সম্ভব হলে মেডিক্যাল মাস্ক গুলো ব্যাবহার করুন এবং ব্যাবহার শেষ উপযুক্ত স্থানে ফেলে দিন। এছাড়া, যাদের পক্ষে প্রতিদিন একটি করে মাস্ক ব্যাবহার করা সম্ভব না, তারা বাজারে পাওয়া ভালো মানের আন্টি-ডাস্ট মাস্ক গুলো ব্যবহার করুন। সম্ভব হলে এটার ভেতর কাপড়ের মাস্ক ব্যবহার করুন যা দিন শেষে বাসায় এসে ধুয়ে ফেলতে পারেন। অনেকে ভালো মানের মাস্ক ব্যাবহার করেও মাস্ক ব্যাবহারের সঠিক নিয়ম মেনে চলেন না। মাস্ক সঠিক ভাবে ব্যাবহার করুন এবং যাতে মুখ নাক সঠিক ভাবে ঢেকে থাকে।\r\n\r\nপকেট স্যানিটাইজার ব্যবহার করাঃ বাহিরে বের হলে সব সময় পকেট স্যানিটাইজার রাখুন। কিছুক্ষণ পর পরেই হাতে একটু স্যানিটাইজার লাগিয়ে হাত ভালো করে ঘষে নিন। যেকোন কিছু ধরার আগে এবং পড়ে স্যানিটাইজার দিয়ে হাত ভালো করে ঘষে নিন।');

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
(2, 2, 'pran', 'pran@mail.com', '01763191368', '500', '3433', 'Department 2', 'Polash para', 'doctor_image/cda70275329b67e93127a1b87f5badc2doctors-1.jpg'),
(3, 1, 'antor', 'antor@gmail.com', '01763191368', '500', '1034', 'Department 2', 'gaibandha', 'doctor_image/57026376fd8c714a56aeb81e3e292a92doctor.png'),
(4, 1, 'aa', 'aa@gmail.com', 'aaa', '500', 'aa', 'Department 1', 'aa', 'img-doctor/6bc9d6b2048619b29ba8c38f6ab553d7gallery-4.jpg');

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
(1, 'Morshedul', 'Antor', '01758857522', 'itsantor25@gmail.com', 'antor111', '123456789', 'Dentist', 'Bashundhara', 400, ''),
(2, 'Shayet', 'Zim', '01758851101', 'shafayet@gmail.com', 'zim111', '123498700', 'Dermatologists', 'Bashundhara', 300, ''),
(3, 'Maliha', 'Mamtaz', '01758851100', 'maliha@gmail.com', 'maliha111', '123498765', 'Cardiologists', 'Baridhara', 350, '');

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
(10, 'Kurmitola General Hospital', '01763191368', 'kgh@yahoo.com', '3423', '4', '', 'Khilkhet', 'High quality healthcare in a friendly and compassionate environment.', 'hospital_image/287466e09b4736dfb2064a2a38773428hospitals-4.jpg'),
(11, 'aa', '01763191368', 'a@gmail.com', '1111', '1234', '', 'Polash para', 'Confidently providing comprehensive health care', 'img-hospital/406e1c39c99d142bfeaf4d55e6833c63gallery-1.jpg'),
(12, 'kdjcdj', '01763191368', 'aa@gmail.com', '1011', '3y3', '', 'dnkjdsn', 'Confidently providing comprehensive health care', 'img-hospital/70d5cddd26f9dcdbcfd937d4ffec8facgallery-6.jpg');

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
  `dnum` varchar(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `page` int(3) NOT NULL,
  `pdate` date NOT NULL,
  `pnum` varchar(11) NOT NULL,
  `pres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pid`, `dname`, `dnum`, `pname`, `page`, `pdate`, `pnum`, `pres`) VALUES
(1, 'Morshedul Bari Antor', '01927194591', 'Shafayet Zim', 25, '2020-09-28', '01758857522', 'Cap:\r\nPantonix - 1+0+1 before \r\n7 days\r\n\r\nTab:\r\nNapa - 1+0+1 after \r\n7 days\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_ser` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `details_ser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `app_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

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
  MODIFY `id_doc` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
