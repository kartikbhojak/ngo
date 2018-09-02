-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 10:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_username` varchar(30) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_username`, `admin_pass`) VALUES
('ngoadmin', 'ngoadmin');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_requirements`
--

CREATE TABLE `ngo_requirements` (
  `Serial_no` int(11) NOT NULL,
  `ngo_id` varchar(50) NOT NULL,
  `req` varchar(20) NOT NULL,
  `req_descr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_requirements`
--

INSERT INTO `ngo_requirements` (`Serial_no`, `ngo_id`, `req`, `req_descr`) VALUES
(1, 'sa943', 'Monetary', 'require 10000 rupess'),
(2, 'ge123', 'Food', '50 plates of mid day meals'),
(3, 'EN112233', 'Food', 'Need 100 packets of food for volunteers.'),
(4, '98765', 'Monetary', 'Need Rs.20000 for medicines'),
(5, '98765', 'Food', 'Need 50 packets fo food'),
(6, '22113', 'Clothes', 'Donate old clothes.'),
(7, '12543', 'Manpower', '10 people required for helping in a campaign'),
(8, '12345', 'Food', 'I want 5kg of rice'),
(9, '12345', 'Monetary', 'I need 1 lac rupees.'),
(10, '11223', 'Manpower', 'Need 10 volunteers, 5 males & 5 females for the workshop. '),
(11, '12543', 'Others', 'We need furniture to set up our NGO.'),
(12, '12345', 'Clothes', 'our ngo requires 8 kg clothes for kids including both boys and girls');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `NGO_name` varchar(50) NOT NULL,
  `ngo_id` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `achievements` varchar(150) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`NGO_name`, `ngo_id`, `Email`, `Phone`, `address`, `Area`, `achievements`, `Password`, `Confirm_Password`, `status`) VALUES
('Enlightenment Foundation', '11223', 'kushagrajaiswal_an@srmuniv.edu.in', '9566189700', '200 Anandpuri Kanpur', 'urban', '', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'approve'),
('Smile India', '12345', 'achintyapandey419@gmail.com', '8754530030', '419 Block-C Shyam Nagar Kanpur', 'rural', 'Funded education of 20 children', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'approve'),
('Help for Women', '12543', 'rishabhgoel9797@gmail.com', '9790713934', 'chennai', 'urban', 'rewarded for employment of 100 women', 'f2d7e2fc28ededdf63c1684a3b6d0c5f', 'f2d7e2fc28ededdf63c1684a3b6d0c5f', 'approve'),
('Diya Foundation', '22113', 'kushagra.jaiswal18@gmail.com', '8318799479', 'banglore', 'urban', 'Funded 100 education of young girls', '040b7cf4a55014e185813e0644502ea9', '040b7cf4a55014e185813e0644502ea9', 'approve'),
('Sevashram', '98765', 'kushagra@theblogshare.in', '9566198700', '200 Anandpuri Kanpur', 'urban', 'Sheltered 50+ senior citizens', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'approve'),
('Gratitude.org', 'ge123', 'adityapatnaik25x@gmail.com', '9871625346', 'sannasi-c', 'urban', '', 'cf3788d9ef878f132b74775e7c2fc84e', 'cf3788d9ef878f132b74775e7c2fc84e', 'approve'),
('sankalp', 'sa943', 'brahma.kartik72@gmail.com', '7073069148', 'abode valley', 'rural', '', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngo_requirements`
--
ALTER TABLE `ngo_requirements`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ngo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngo_requirements`
--
ALTER TABLE `ngo_requirements`
  MODIFY `Serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
