-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 07:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `phone_no`, `date`) VALUES
(1, 'Amanathullah', 'amanathullah2001@gmail.com', 757380318, '2023-12-31'),
(2, 'Amanathullah', 'amanathullah2001@gmail.com', 757380318, '2023-12-31'),
(3, 'Inshaf', 'inshaf@gmail.com', 751245788, '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doctor_name` text NOT NULL,
  `specialization` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_name`, `specialization`, `date`) VALUES
(1, 'Dr. T. S. UDUPIHILLA', 'Eye Surgeon', '2024-01-06'),
(2, 'Dr. THISSA SENARATHNE', 'Eye Surgeon', '2024-12-01'),
(3, 'Dr. AJITH ABEYGUNASEKARA', 'Eye Surgeon', '2023-12-28'),
(6, 'Ms. C. SANDHARU UPASENA FERNANDO', 'Child Counselling Psychologist and Therapist', '2023-12-27'),
(8, 'Dr. SHANTHA HETTIARACHCHI', 'Family And General Counsellor', '2024-02-12'),
(14, 'DR.PRIYA NAARAYANAN', 'Cardiologist', '2024-01-08'),
(55, 'DR.BAALAKRISHNAN', 'Child Counselling Psychologist and Therapist', '2024-01-04'),
(57, 'DR.SHAATHANA SRINIVASHAN', 'Family And General Counsellor', '2024-01-28'),
(58, 'DR.RAAMRAJ THIVAHAR', 'Anaesthesiology', '2023-12-29'),
(59, 'DR.AMEER MOHAMED', 'General Surgery', '2024-02-08'),
(60, 'DR.AARIF AHM', 'Colon and Rectal Surgery', '2024-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(20) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `user_type`, `username`, `password`) VALUES
(1, 'ADMIN', 'manager', 'a9aa976dbb0d38c94731431dc48a1aee'),
(3, 'LOCAL', 'user', 'ba5ef51294fea5cb4eadea5306f3ca3b'),
(5, 'LOCAL', 'aman', '8276bff3d2bbd1f7c4c3c3b6981d0658');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(125) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `full_name`, `address`, `phone_no`, `email_id`, `username`) VALUES
(1, 'sample user', '1002/sample address, address,address-1', 11223344, 'example@gmail.com', 'user'),
(3, 'Amanathullah', 'al kalam pottuvil', 757380318, 'amanathullah2001@gmail.com', 'aman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
