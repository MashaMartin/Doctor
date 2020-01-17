-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 08:15 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `type`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(22) NOT NULL,
  `docname` varchar(22) NOT NULL,
  `userid` int(22) NOT NULL,
  `doccontact` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `fee` varchar(22) NOT NULL,
  `pntname` varchar(22) NOT NULL,
  `pntcontact` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` varchar(22) NOT NULL,
  `dates` date NOT NULL,
  `timee` varchar(22) NOT NULL,
  `payment` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `docname`, `userid`, `doccontact`, `expertise`, `fee`, `pntname`, `pntcontact`, `email`, `address`, `dates`, `timee`, `payment`) VALUES
(20, 'dname', 0, '0637884357', 'Bone', '700', 'Martin', '0629935099', 'martinmasha3@gmil.com', 'moteti c 619 ', '2020-03-04', '', 'Cash'),
(21, 'dname', 0, '0726789475', 'Kedney', '700', 'Martin', '0629935099', 'martinmasha3@gmil.com', 'dieplsoot ext 10 amuke', '2020-01-01', '11.00am', 'Cash'),
(22, 'dname', 0, '0637884357', 'Bone', '700', 'Martin', '0629935099', 'martinmasha3@gmil.com', 'dieplsoot ext 10 amuke', '2020-02-03', '11.00am', 'Card'),
(23, 'dname', 0, '0824556667', 'Heart', '500', 'Martin', '0629935099', 'martinmasha3@gmil.com', 'dieplsoot ext 10 amuke', '2020-01-03', '11.00am', 'Card'),
(24, 'Dr. Jerry Smith', 1001, '0824556667', 'Heart', '500', 'Martin', '0629935099', 'martinmasha3@gmil.com', 'moteti c 619 ', '2020-01-04', '11.00am', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `comment` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(22) NOT NULL,
  `doctor_id` varchar(22) NOT NULL,
  `name` varchar(22) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `email` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `id` int(11) NOT NULL,
  `fee` varchar(111) NOT NULL,
  `userid` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `pic` varchar(111) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doctor_id`, `name`, `address`, `contact`, `email`, `expertise`, `id`, `fee`, `userid`, `password`, `pic`) VALUES
(1, '2', 'Dr. Jerry Smith', 'Soshanguve', '0824556667', 'jsmith@gmail.com', 'Heart', 2, '500', '1001', '123', 'doctor1.jpg'),
(2, '1', 'Dr. Tumelo Masha', 'Diepsloot', '01764761919', 'mtumelo1@gmail.com', 'Medicine', 1, '500', '1002', '123', 'doctor2.png'),
(3, '1', 'Dr. Tshepo Zwane', 'Cosmo', '0744141433', 'tz.zwane@gmail.com', 'Gynecologist', 1, '600', '1003', '123', 'doctor3.jpg'),
(4, '4', 'Dr. Oscar Peterson', 'Diepsloot', '0726789475', 'oscarpeterson@gmail.co', 'Kedney', 4, '700', '1004', '123', 'doctor4.jpg'),
(5, '5', 'Dr. Deneil Goodman', 'Soshanguve', '0674546856', 'deneilgoodman@gmail.co', 'Cardiologist', 5, '700', '1005', '123', 'doctor5.jpg'),
(6, '1', 'Dr. Micheal Lamar', 'Dhaka', '0658868765', 'micheallamar@gmail.com', 'Obstetrician', 1, '800', '1006', '123', 'doctor6.jpg'),
(7, '8', 'Dr. Karabo Nkwana', 'Cosmo', '0876545786', 'karabonkwana@gmail.com', 'Neurologist', 8, '600', '1007', '123', 'doctor7.jpg'),
(8, '3', 'Dr. Lillian Jorden', 'Diepsloot', '0637884357', 'lilianjorden@gmail.com', 'Bone', 3, '700', '1008', '123', 'doctor8.jpg'),
(9, '6', 'Dr. Prince Mthembu', 'Cosmo', '0807546877', 'pmthembu@gmail.com', 'Plastic Surgeon', 6, '500', '1009', '123', 'doctor9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(22) NOT NULL,
  `feedback` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`) VALUES
(1, 'martinmasha3@gmail', 'testing'),
(3, 'martinmasha3@gmil.com', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `age` varchar(22) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `contact`, `address`, `email`, `password`) VALUES
(7, 'Martin', '22', '0827237823', 'dieplsoot ext 10 amuke', 'martinmasha3@gmil.com', '1234'),
(8, 'Tumelo', '22', '08876667277', 'moteti c 619 ', 'tumelo@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
