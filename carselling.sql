-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 08:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `newcars`
--

CREATE TABLE `newcars` (
  `id` int(11) NOT NULL,
  `carmodel` varchar(100) NOT NULL,
  `carmake` varchar(100) NOT NULL,
  `caryear` varchar(100) NOT NULL,
  `carmilage` varchar(100) NOT NULL,
  `carlocation` varchar(100) NOT NULL,
  `carprice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newcars`
--

INSERT INTO `newcars` (`id`, `carmodel`, `carmake`, `caryear`, `carmilage`, `carlocation`, `carprice`) VALUES
(1, 'Altima', 'Nissan', '2001', ' 2.5-liter', 'Sydney', '$3000-$3800'),
(2, 'Ford Mustang', 'Ford', '1998', ' 2.5', 'Melbourne ', '1200'),
(3, 'Toyota Camry', 'Toyota', '1990', '1.8', 'Great Barrier Reef', '3800'),
(4, 'Honda Civic', 'Honda', '1990', ' 2.4', 'Sydney', '3800'),
(5, 'Chevrolet Silverado', 'Chevrolet', '1880', '3.4', 'Perth ', '3800'),
(6, 'BMW', 'BMW X5', '1998', ' 2.5', 'Hobart ', '3800'),
(7, 'Nissan Murano', 'Nissan', '2001', ' 2.5-', 'Sydney', '3000'),
(8, 'Audi Q5', 'Audi', '2001', ' 2.5', 'Bondi Beach', '3800');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Number` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Address`, `Number`, `Email`, `Username`, `Password`, `Id`) VALUES
('rikesh sherpa', 'jytha', 0, 'rikeshsherpa1@gmail.com', 'rikesh', 'rikesh123', 1),
('Newaccount', 'khusibun', 2147483647, 'rikeshsherpa1@gmail.com', 'rikeshh', 'rikesh123', 6),
('2DVZ8ii8in', 'j1JC0ctbX6', 2147483647, 'cbvwu@quer.com', 'cONNtLqnBL', '9Hz52h9P27', 7),
('CTaqzNKAir', '8FjLLfKNct', 319748539, 'y2hqc@drxx.com', 'gta', 'hBxG7lju26i@fwQYi^', 8),
('denish', 'nayabzar', 123123, 'rikeshsherpa1@gmail.com', 'denish', 'denish123', 9),
('', '', 0, '', '', '', 10),
('', '', 0, '', '', '', 11),
('', '', 0, '', '', '', 12),
('', '', 0, '', '', '', 13),
('', '', 0, '', '', '', 14),
('roshan', 'sydney', 2147483647, 'rosan@gmail.com', 'rosan', 'rosan123', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newcars`
--
ALTER TABLE `newcars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newcars`
--
ALTER TABLE `newcars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
