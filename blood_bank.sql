-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 08:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `firstname`, `lastname`, `user_id`, `email`, `phone`, `gender`, `password`, `image`) VALUES
(26, 'HAIDER', 'ALI', 'haiderali', 'ali137440@gmail.com', '7003927833', 'Male', 'haider', 'circle-cropped (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `organizer` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`id`, `title`, `venue`, `organizer`, `date`, `description`, `image`) VALUES
(2, 'seconnd camps', 'kolkata', 'young club', '2020-03-31 18:30:00.000000', 'hello', 'blood2.jpg'),
(4, 'kolkata blood capm', 'kalitola club ground', 'kalitala youth sangha', '2020-04-09 18:30:00.000000', 'This blood camp was successful with the help of member of the club .', 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `date` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`id`, `firstname`, `lastname`, `email`, `dob`, `date`, `gender`, `address`, `city`, `district`, `pin`, `state`, `country`, `phone`, `bloodgroup`, `image`, `password`) VALUES
(2, 'Haider', 'Ali', 'ali137440@gmail.com', '1996-07-27', '22/12/2019', 'Male', 'chandannagar', 'chandannagar', 'Hooghly', '712136', 'west bengal', 'India', '7003927833', 'O+', 'HAIDER PIC.jpg', 'haider'),
(5, 'tanmoy', 'roy', 'adsgh@g.com', '2020-04-20', '2000-02-20', 'Male', 'kalyani', 'kalyani', 'nadia', '7121059', 'west b', 'India', '1234589', 'O-', 'fingerprint.jpg', '12345'),
(7, 'falguni', 'dey', 'falhuni@gmail.com', '02/24/1999', '04/07/2020', 'Female', 'chandannagar', 'chandannagar', '12', '712136', 'WEST BENGAL', 'INDIA', '7003927833', 'B-', 'HAIDER PIC.jpg', '786'),
(9, 'amjad', 'ali', 'amjad@gmail.com', '10/11/1988', '05/01/2020', 'Male', 'kolkata', 'kolkata', '16', '712105', 'WEST BENGAL', 'INDIA', '9038273265', 'AB+', 'aDKNFVb2WV9NVW3dR39bCQ4W.jpg', '123'),
(10, 'ahmed', 'ali', 'adsgh@g.com', '09/18/2002', '05/02/2020', 'Male', 'hooghly', 'chinsurha', '12', '712105', 'WEST BENGAL', 'INDIA', '9876543210', 'AB-', 'BHXfT0gbbtKJ16D9TT215D9C.jpg', '1234'),
(11, 'haider', 'ali', 'ali137440@gmail.com', '07/13/1993', '06/03/2014', 'Male', 'chandannagar', 'chandannagar', '12', '712136', 'WEST BENGAL', 'INDIA', '7003927833', 'A+', 'fingerprint.jpg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `exchanger`
--

CREATE TABLE `exchanger` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `give_blood` varchar(10) NOT NULL,
  `need_blood` varchar(10) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exchanger`
--

INSERT INTO `exchanger` (`id`, `name`, `email`, `phone`, `gender`, `give_blood`, `need_blood`, `file`) VALUES
(1, 'haider', 'ali@gmail.com', '0827485635', 'Male', 'A+', 'O+', 'fingerprint.jpg'),
(2, 'raja', 'ali@gmail.co', '458963251', 'Female', 'O-', 'A+', 'haiderpic 1.jpg'),
(4, 'raja', 'a123@gmail.com', '7896523014', 'Male', 'B+', 'B-', 'IMG-20170406-WA0012.jpg'),
(13, 'subhro', 'su@g.co', '78965423', 'Female', 'O-', 'A+', 'fingerprint.jpg'),
(14, 'subhro', 'su@g.co', '78965423', 'Female', 'O-', 'A+', 'fingerprint.jpg'),
(15, 'falguni', 'fal@g.com', '8523697410', 'Female', 'B+', 'A+', 'signeture 2.jpg'),
(18, 'riju', 'riju@g.com.in', '2589631470', 'Female', 'AB+', 'A+', 'haiderpic 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `image`, `date_time`) VALUES
(2, 'second notice', 'need A+blood', 'haiderali.jpg', '2020-03-25 02:11:08.000000'),
(3, 'review notice', 'this to inform its urfent needed O- blood for operation', 'imagesblood.jpg', '2020-03-29 23:27:46.000000'),
(4, 'this is new one', 'hello every one ', 'IMG_20190126_080826.jpg', '2020-06-01 02:37:02.000000'),
(5, 'this pic', 'dhdfh', '01 - Abhi Toh Party Shuru Hui Hai.mp3', '2020-06-01 02:37:37.000000'),
(6, 'fjfg', 'dfbdfb', 'fingerprint.jpg', '2020-06-01 02:42:52.000000');

-- --------------------------------------------------------

--
-- Table structure for table `outstock_blood`
--

CREATE TABLE `outstock_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outstock_blood`
--

INSERT INTO `outstock_blood` (`id`, `name`, `blood_group`, `phone`) VALUES
(4, 'Haider', 'O+', '7003927833'),
(8, 'amjad', 'O-', '8274856356'),
(19, 'raja', 'A+', '08274856320');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pending` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `email`, `phone`, `gender`, `blood_group`, `quantity`, `image`, `pending`) VALUES
(3, 'haider', 'ali@gmail.com', '08274856356', ' Female', 'A+', '2', 'fingerprint.jpg', 'Approved'),
(4, 'tanmoy roy', 'ali137440@gmail.com', '07003927833', ' Male', 'A-', '2', 'fingerprint.jpg', 'Reject'),
(5, 'ali137440@gmail.com', 'ali137440@gmail.com', '7003927833', ' Male', 'O+', '2', '20191121_095033.jpg', 'pending'),
(6, 'Haider Ali', 'ali137440@gmail.com', '7003927833', ' Male', 'A+', '3', 'MY PIC 1.png', 'Approved'),
(7, 'Haider Ali', 'ali137440@gmail.com', '7003927833', ' Male', 'A+', '4', 'HAIDER PIC.jpg', 'pending'),
(8, 'Haider Ali', 'ali137440@gmail.com', '7003927833', ' Male', 'A+', '4', 'HAIDER PIC.jpg', 'pending'),
(9, 'haider ali', 'ali@gmail.com', '8274856320', ' Male', 'A+', '5', 'HAIDER PIC.jpg', 'pending'),
(10, 'raja', 'ali@gmail.com', '8274856356', ' Male', 'A+', '3', 'family income.pdf', 'pending'),
(11, 'ali', 'ali137440@gmail.com', '7003927833', ' Male', 'A+', '3', 'picture102 036.jpg', 'pending'),
(12, 'khgg', 'ali137440@gmail.com', '7003927833', ' Female', 'A+', '1', '3rd yr admit.pdf', 'pending'),
(13, 'haider ali', 'ali137440@gmail.com', '7003927833', ' Male', 'A+', '2', 'signeture.jpg', 'pending'),
(14, 'haider ali', 'ali137440@gmail.com', '7003927833', ' Male', 'A+', '2', 'signeture.jpg', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchanger`
--
ALTER TABLE `exchanger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outstock_blood`
--
ALTER TABLE `outstock_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exchanger`
--
ALTER TABLE `exchanger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `outstock_blood`
--
ALTER TABLE `outstock_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
