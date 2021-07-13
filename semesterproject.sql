-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 04:16 PM
-- Server version: 10.1.34-MariaDB
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
-- Database: `semesterproject`
--
CREATE DATABASE IF NOT EXISTS `semesterproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `semesterproject`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `last_login`) VALUES
(1, 'admin', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnic` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `joining_date` date NOT NULL,
  `salary_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `f_name`, `l_name`, `address`, `phone`, `email`, `cnic`, `DOB`, `joining_date`, `salary_type`) VALUES
(8, 'asd', 'ascas ', '84-a u.e.t housing society, lahore.', 'eafrwefr', 'irfanabdullah518@gmail.com', 'werwerwe', '2018-10-15', '2018-10-25', 1),
(9, 'asd', 'ascas ', '84-a u.e.t housing society, lahore.', 'eafrwefr', 'hammad_siddiqui10@hotmail.com', 'werwerwe', '2018-10-15', '2018-10-25', 2),
(10, 'fariha ', 'tajamul', 'jfidbfnkdsjfoie', '53543542873', 'fthsbvdhgdnsa@gmail.com', '35202-2184066-5', '2018-10-15', '2018-10-10', 2),
(11, 'raied', 'shahid', 'afhuisdhnvkjdsgiu', '54154686', 'xcnjdhnvjdsng@gmail.com', '35202-2184066-5', '2018-10-10', '2006-05-25', 1),
(12, 'ahmed', 'minhas', 'kldjfwijvsdio', '253419468', 'dsnghbsvb@gmail.com', '35202-2184066-5', '2018-10-15', '2018-10-10', 1),
(13, 'Abdul ', 'Raffay', '12 shahid colony wahdat rooad lahore', '023515812052', 'raffayhassaan@gmail.com', '35202-8381357-9', '1997-01-25', '2018-12-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `fk_empid` int(11) NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `medical_expense` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `fk_empid`, `basic_salary`, `tax`, `medical_expense`) VALUES
(2, 8, 12312, 12312, 123123),
(3, 11, 350000, 9000, 2500),
(4, 12, 25000, 8000, 3500),
(5, 13, 2147483647, 10, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `salary_transaction`
--

CREATE TABLE `salary_transaction` (
  `id` int(11) NOT NULL,
  `fk_empid` int(11) NOT NULL,
  `basic` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `medical_expense` int(11) NOT NULL,
  `total_deductions` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_transaction`
--

INSERT INTO `salary_transaction` (`id`, `fk_empid`, `basic`, `tax`, `medical_expense`, `total_deductions`, `paid`, `date`) VALUES
(1, 0, 2500, 2500, 15000, 9000, 6000, '2018-12-23'),
(2, 8, 2500, 2500, 15000, 9000, 6000, '2018-12-23'),
(3, 8, 2500, 2500, 15000, 9000, 6000, '2018-12-23'),
(4, 8, 2500, 2500, 15000, 9000, 6000, '2018-12-23'),
(5, 8, 2500, 2500, 15000, 9000, 6000, '2018-12-23'),
(6, 8, 2500, 2500, 15000, 9000, 6000, '2018-12-23'),
(7, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(8, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(9, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(10, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(11, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(12, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(13, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(14, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(15, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(16, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(17, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(18, 8, 12312, 12312, 123123, 360, 122763, '2018-12-23'),
(19, 11, 350000, 9000, 2500, 5000, 338500, '2018-12-24'),
(20, 8, 12312, 12312, 123123, 250, 122873, '2018-12-24'),
(21, 8, 12312, 12312, 123123, 100, 123023, '2018-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `wage`
--

CREATE TABLE `wage` (
  `id` int(11) NOT NULL,
  `fk_empid` int(11) NOT NULL,
  `hour_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wage`
--

INSERT INTO `wage` (`id`, `fk_empid`, `hour_rate`) VALUES
(1, 9, 234),
(2, 10, 35);

-- --------------------------------------------------------

--
-- Table structure for table `wage_transaction`
--

CREATE TABLE `wage_transaction` (
  `id` int(11) NOT NULL,
  `fk_empid` int(11) NOT NULL,
  `hours_worked` int(11) NOT NULL,
  `hour_rate` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wage_transaction`
--

INSERT INTO `wage_transaction` (`id`, `fk_empid`, `hours_worked`, `hour_rate`, `paid`, `date`) VALUES
(1, 9, 26, 234, 0, '2018-12-23'),
(2, 9, 26, 234, 6084, '2018-12-23'),
(3, 9, 15, 234, 3510, '2018-12-23'),
(4, 9, 24, 234, 5616, '2018-12-23'),
(5, 9, 24, 234, 5616, '2018-12-23'),
(6, 9, 24, 234, 5616, '2018-12-23'),
(7, 9, 24, 234, 5616, '2018-12-23'),
(8, 10, 240, 35, 8400, '2018-12-24'),
(9, 10, 240, 35, 8400, '2018-12-24'),
(10, 10, 24, 35, 840, '2018-12-24'),
(11, 10, 100, 35, 3500, '2018-12-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_transaction`
--
ALTER TABLE `salary_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wage`
--
ALTER TABLE `wage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wage_transaction`
--
ALTER TABLE `wage_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salary_transaction`
--
ALTER TABLE `salary_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wage`
--
ALTER TABLE `wage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wage_transaction`
--
ALTER TABLE `wage_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
