-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 11:03 AM
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
-- Database: `lbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `mobile`, `email`) VALUES
(1, 'root@lbs.com', 'root', '9876543210', 'root@lbs.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `date` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `mobile`, `address`, `dob`, `date`, `password`, `location`) VALUES
(1, 'Arjun', 'arjun@lbs.com', '9539768296', 'arjun bhavan ,Patazhy', '1997-01-01', '2018-08-05', 'root', 'Kollam'),
(4, 'chandu', 'c@lbs.com', '9633698690', 'sdsgf', '1999-12-16', '0000-00-00', '2a6571da26602a67be14ea8c5ab82349', 'hdhd'),
(5, 'sachu', 'sachu@lbs.com', '9633698690', 'valiyavila', '1999-12-16', '0000-00-00', 'b52c96bea30646abf8170f333bbd42b9', 'hhgh'),
(6, 'sachu', 'ss@lbs.com', '9633698690', 'valiyavila', '1999-12-23', '0000-00-00', '21232f297a57a5a743894a0e4a801fc3', 'kattanam'),
(7, 'kallu', 'kallu@gmail.com', '9878987898', 'pandalam', '1999-11-18', '0000-00-00', '8658c23c93b8c9c2e3c854d90aef56e7', 'adoor');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `worktime` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `reason` varchar(255) NOT NULL,
  `workstatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `dob`, `password`, `mobile`, `date`, `image`, `designation`, `gender`, `description`, `location`, `worktime`, `status`, `reason`, `workstatus`) VALUES
(1, 'anp', 'anp@l.c', '2018-02-02', '63a9f0ea7bb98050796b649e85481845', 98747586201, '2018-08-05 12:19:47', 'Dani-Daniels-4K.jpg', 'dc', 'm', 'sc', 'cds', 'sdd', 9, '', 0),
(2, 'Vishnu', 'vishnu@lbs.com', '2018-07-01', 'root', 9874563210, '2018-07-29 10:00:45', NULL, 'Farmer', 'Male', 'hacabsb', 'Kollam', '9.00 AM to 5.00 PM', 2, 'ihsudifhuisdhuid', 1),
(3, 'LAl', 'lal@lbs.com', '2018-07-01', 'root', 9874563201, '2018-07-29 10:00:45', NULL, 'Farmer', 'Male', 'hacabsb', 'Kollam', '9.00 AM to 5.00 PM', 1, 'your data bsdjhgf', 0),
(4, 'har', 'har@lbs.com', '2018-07-01', 'root', 9874563210, '2018-07-29 10:00:45', NULL, 'Farmer', 'Male', 'hacabsb', 'Kollam', '9.00 AM to 5.00 PM', 9, '', 0),
(5, 'Siva', 'siva@lbs.com', '2018-07-01', 'root', 9874563201, '2018-07-29 10:00:45', NULL, 'Farmer', 'Male', 'hacabsb', 'Kollam', '9.00 AM to 5.00 PM', 1, 'hhjjdgjshjghcd', 0),
(6, 'aas', 'a@b.cs', '2018-08-06', 'anoop', 9847470580, '2018-08-31 01:37:30', NULL, 'Plumber', 'm', 'No documents in hand', 'KoLlam', 'sdd', 9, '', 0),
(7, 'vv', 'a@n.a', '2018-08-08', 'anoop', 9847470580, '2018-08-31 01:53:28', NULL, 'Electrician', 'm', 'No documents in hand', 'KoLlam', 'sdd', 0, '', 0),
(8, 'sachu', 's@lbs.com', '2018-08-15', 'sasa', 9633698690, '2018-09-02 06:36:08', 'eff.JPG', 'Electrician', 'm', 'sgsfdg', 'kattanam', 'fdf', 1, '', 0),
(9, 'appu', 'appu@gmail.com', '1996-10-16', 'f45731e3d39a1b2330bbf93e9b3de59e', 9633698690, '2018-09-02 08:17:43', 'Chrysanthemum.jpg', 'Electrician', 'm', 'sdafsdsd', 'dfsdf', '12hr', 1, '', 0),
(10, 'sachu', 'sachu@lbs.com', '2018-08-15', 'asas', 9633698690, '2018-09-02 08:49:27', 'Penguins.jpg', 'Plumber', 'm', 'sad', 'sdaa', '12hr', 0, '', 0),
(11, 'asas', 'sachu@lbs.com', '2018-07-18', 'asa', 9633698690, '2018-09-02 09:00:17', 'Penguins.jpg', 'Plumber', 'm', 'ssds', 'sdfsds', '12hr', 0, '', 0),
(12, 'ammu', 'ammu@lbs.com', '2018-08-14', '89a4b5bd7d02ad1e342c960e6a98365c', 9633698690, '2018-09-03 14:59:34', 'Hydrangeas.jpg', 'Plumber', 'm', 'fhgffdh', 'kattanam', '', 1, '', 0),
(13, 'babu', 'b@lbs.com', '2018-08-14', 'bbb', 9633698690, '2018-09-03 17:38:16', 'Lighthouse.jpg', 'Plumber', 'm', 'gfdgdfg', 'para', '', 1, '', 0),
(14, 'achu', 'ach@lb.com', '2018-08-14', '82e553acb2c752ff46e7b14a5da0a251', 9633698690, '2018-09-03 17:52:25', 'Jellyfish.jpg', 'Electrician', 'm', 'hfghd', 'adoor', '', 1, '', 0),
(15, 'chandu', 'kunar@gmail.com', '1999-03-12', '89455112764f2f2238495672517cf997', 9878987898, '2018-09-03 07:01:50', '1eb4d0abf47564557a7d3c906a4ebccc-d4px7kh.jpg', 'Electrician', 'm', 'with minimum cost maximum work', 'Pattazhy', '', 0, '', 0),
(16, 'sivan', 'sas@gmail.com', '1989-11-23', '9f6e6800cfae7749eb6c486619254b9c', 6598415782, '2018-09-03 07:30:15', '11-02-15-05-30-52-0.jpg', 'Plumber', 'm', 'with minimum cost maximum work', 'kollam', '', 0, '', 0),
(17, 'mamu', 'mm@gmail.com', '1989-11-23', 'e0e7a26dfb28a3aada879a77e794f45e', 8848756675, '2018-09-03 08:53:41', '0eb6f16700aac483fe151643d95d4a07--kali-mata-mother-kali.jpg', 'Plumber', 'm', 'with minimum cost maximum work', 'kollam', '', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(1, 'Dani-Daniels-HD.jpg', 'asas'),
(2, 'Dani-Daniels-HD.jpg', 'asas'),
(3, 'Dani-Daniels-HD-Background.jpg', ''),
(4, 'Dani-Daniels-HD-Background.jpg', ''),
(5, 'Dani-Daniels-HD-Background.jpg', ''),
(6, 'Dani-Daniels-HD-Wallpaper.jpg', ''),
(7, 'Dani-Daniels-4K.jpg', ''),
(8, 'Dani-Daniels-4K.jpg', ''),
(9, 'Dani-Daniels-4K.jpg', ''),
(10, 'Dani-Daniels-4K.jpg', ''),
(11, 'Dani-Daniels-4K.jpg', ''),
(12, 'Dani-Daniels-4K.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(50) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(50) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `emp_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `customer_id` int(50) NOT NULL,
  `employee_id` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date_from`, `date_to`, `customer_id`, `employee_id`, `address`, `mobile`, `status`) VALUES
(1, '2018-08-15', '2018-08-16', 6, 12, 'sgsfgdfgsdfgd', '9633698690', 0),
(2, '2018-08-06', '2018-08-16', 0, 1, 'SREEBHAVANAM THKKETHERY PO PATTAZHY', '9874563201', 0),
(3, '2018-09-03', '2018-09-05', 6, 14, 'bvvbcxcx', '9633698690', 0),
(4, '2018-09-11', '2018-09-22', 6, 14, 'kattal', '9633698690', 0),
(5, '2018-09-03', '2018-09-19', 6, 17, 'pattiyal', '9633698690', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
