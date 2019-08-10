-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 10:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemotherapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `chemotherapy_survey`
--

CREATE TABLE `chemotherapy_survey` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `question1A` varchar(100) NOT NULL,
  `question1B` varchar(100) NOT NULL,
  `question1C` varchar(100) NOT NULL,
  `question2A` varchar(100) NOT NULL,
  `question2B` varchar(100) NOT NULL,
  `question2C` varchar(100) NOT NULL,
  `question3A1` varchar(11) NOT NULL,
  `question3A2` varchar(11) NOT NULL,
  `question3B1` varchar(11) NOT NULL,
  `question3B2` varchar(11) NOT NULL,
  `question3C1` varchar(11) NOT NULL,
  `question3C2` varchar(11) NOT NULL,
  `question3D1` varchar(11) NOT NULL,
  `question3D2` varchar(11) NOT NULL,
  `question3E1` varchar(11) NOT NULL,
  `question3E2` varchar(5) NOT NULL,
  `question3F1` varchar(5) NOT NULL,
  `question3F2` varchar(5) NOT NULL,
  `question3G1` varchar(5) NOT NULL,
  `question3G2` varchar(5) NOT NULL,
  `question3H1` varchar(5) NOT NULL,
  `question3H2` varchar(5) NOT NULL,
  `question3I1` varchar(5) NOT NULL,
  `question3I2` varchar(5) NOT NULL,
  `question4` varchar(50) NOT NULL,
  `question5A` varchar(10) NOT NULL,
  `question5B` varchar(10) NOT NULL,
  `question5C` varchar(10) NOT NULL,
  `question5D` varchar(10) NOT NULL,
  `question6A` varchar(10) NOT NULL,
  `question6B` varchar(10) NOT NULL,
  `question6C` varchar(10) NOT NULL,
  `question7A` varchar(10) NOT NULL,
  `question7B` varchar(10) NOT NULL,
  `question7C` varchar(10) NOT NULL,
  `question7D` varchar(10) NOT NULL,
  `question8` varchar(10) NOT NULL,
  `question9A` text NOT NULL,
  `question9B` text NOT NULL,
  `question10` varchar(5) NOT NULL,
  `question11` varchar(5) NOT NULL,
  `question12` varchar(5) NOT NULL,
  `question13` varchar(5) NOT NULL,
  `date` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemotherapy_survey`
--

INSERT INTO `chemotherapy_survey` (`id`, `name`, `email`, `contact`, `speciality`, `hospital`, `place`, `question1A`, `question1B`, `question1C`, `question2A`, `question2B`, `question2C`, `question3A1`, `question3A2`, `question3B1`, `question3B2`, `question3C1`, `question3C2`, `question3D1`, `question3D2`, `question3E1`, `question3E2`, `question3F1`, `question3F2`, `question3G1`, `question3G2`, `question3H1`, `question3H2`, `question3I1`, `question3I2`, `question4`, `question5A`, `question5B`, `question5C`, `question5D`, `question6A`, `question6B`, `question6C`, `question7A`, `question7B`, `question7C`, `question7D`, `question8`, `question9A`, `question9B`, `question10`, `question11`, `question12`, `question13`, `date`, `status`) VALUES
(1, 'Omkar Rojekar', 'omkar.rojrrrekar@gmail.com', '', '', '', '', 'yes', 'no', 'no', '1', '2', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'highly emetogenic', 'rfrr', 'r', 'r', 'r', 'r', 'r', 'r', '', '', 'r', 'r', '', '', '', '4', '4', '2', '7', 0, 1),
(2, 'sa', 'omkar.rojekar@gmail.com', 'retretre', 'tyt', '', '', 'no', 'no', 'no', '3', '3', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'moderately emetogenic', 'dasdtret', 'dsadarered', 'asdasd', 'sadas', 'dasdasdas', 'asdasd', 'asdad', 'aasdasdas', 'aasdasdas', 'dasdasdasd', 'asdasdasd', 'tretetetrr', '', '', '7', '7', '7', '7', 0, 1),
(3, 'Omkar Rojekar', 'omkar.rojekar@gmail.com', 'ASDASD', 'DASDASDASDASD', 'hos', 'place', 'no', 'no', 'no', '3', '3', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'moderately emetogenic', 'DSAD', 'ASDASDAS', 'DASD', 'ASDASDASDA', 'DASDASDASD', 'DASDASDAS', 'DASD', 'DSADASDAS', 'DSADASDAS', 'DASDASDASD', 'ASDASD', 'DQESWDRQWR', '', '', '5', '5', '5', '5', 0, 1),
(4, 'Omkar Rojekar', 'omkar.rojekar@gmail.com', 'ASDASD', 'DASDASDASDASD', 'hos', 'place', 'no', 'no', 'no', '3', '3', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'moderately emetogenic', 'DSAD', 'ASDASDAS', 'DASD', 'ASDASDASDA', 'DASDASDASD', 'DASDASDAS', 'DASD', 'DSADASDAS', 'DSADASDAS', 'DASDASDASD', 'ASDASD', 'DQESWDRQWR', '', '', '5', '5', '5', '5', 1558418293, 1),
(5, 'rewqrew', 'omkar.rojekar@gmail.com', 'ewrewr', 'rewrew', 'ewrewre', 'rewrewr', 'no', 'no', 'no', '4', '4', '4', 'rewrewe', 'wrewrewrew', 'ewrewr', 'rewrewr', 'ewrew', 'ewr', 'rewrewrew', 'ewrewrew', 'rewr', 'ewrw', 'ewre', 'rewr', 'ewrew', 'rewre', 'ewrew', 'ewewr', 'ewrew', 'ewrew', 'moderately emetogenic', 'rewewre', 'ewrewrewr', 'ewrewr', 'ewrewrewre', 'rewrewr', 'ewrewrew', 'rewrew', 'rewrew', 'rewrewr', 'ewrewr', 'ereww', 'ewrwr', '>30%,21% to 30%', '>30%,21% to 30%', '4', '4', '4', '4', 1558421190, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chemotherapy_survey`
--
ALTER TABLE `chemotherapy_survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chemotherapy_survey`
--
ALTER TABLE `chemotherapy_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
