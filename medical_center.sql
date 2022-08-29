-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 09:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_check`
--

CREATE TABLE `appoinment_check` (
  `id` int(11) NOT NULL,
  `D_Id` int(11) NOT NULL,
  `T_id` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment_check`
--

INSERT INTO `appoinment_check` (`id`, `D_Id`, `T_id`, `Status`, `Comments`) VALUES
(3, 1, 3, 'Time is Ok.', 'no'),
(1, 1, 6, 'Time is Ok.', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_Id` int(11) NOT NULL,
  `D_Name` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_Id`, `D_Name`, `Qualification`, `Gender`, `Mobile`, `User_Name`, `Password`) VALUES
(1, 'Manel Jayasingha', 'MBBS', 'Female', '011-2659987', 'Manel', 'Manel123'),
(2, 'H.N.B.Jayasingha', 'MBBS (Kelaniya)', 'male', '011-2659985', 'Jayasingha', 'Jayasingha123');

-- --------------------------------------------------------

--
-- Table structure for table `doctorcheck`
--

CREATE TABLE `doctorcheck` (
  `id` int(11) NOT NULL,
  `st` varchar(100) NOT NULL,
  `D_Id` varchar(100) NOT NULL,
  `T_Id` int(11) NOT NULL,
  `Comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorcheck`
--

INSERT INTO `doctorcheck` (`id`, `st`, `D_Id`, `T_Id`, `Comments`) VALUES
(1, 'hi', '', 6, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `medical_news`
--

CREATE TABLE `medical_news` (
  `News_id` int(11) NOT NULL,
  `News` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `images` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medical_news`
--

INSERT INTO `medical_news` (`News_id`, `News`, `images`, `Date`) VALUES
(17, 'hi', '5499-bg1.jpg', '2022-07-01 20:51:44'),
(18, 'covid 19', '8964-covid-19-V2-Large.jpg', '2022-07-01 22:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `medical_recipt`
--

CREATE TABLE `medical_recipt` (
  `Recipt_No` int(11) UNSIGNED NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `S_id` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Level` varchar(50) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `DateFrom` date NOT NULL,
  `DateTo` date NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Attachment` varchar(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_recipt`
--

INSERT INTO `medical_recipt` (`Recipt_No`, `S_Name`, `S_id`, `Email`, `Gender`, `Faculty`, `Level`, `Reason`, `DateFrom`, `DateTo`, `Mobile`, `Attachment`, `Date`) VALUES
(3, 'Abc', 182146, 'ABC@gmail.com', 'Male', 'Faculty of Business Studies and Finance', 'Level 3', 'For Examination Purpose.', '2022-05-11', '2022-05-13', 'dfd635', '6969-291 sm', '2022-06-22 00:00:00'),
(5, 'W.M.N.W.Bandara', 182085, 'wathsalabandara118@gmail.com', 'Male', 'Applied Sciences', 'Level 2', 'For Examination Purpose.', '2022-06-06', '2022-06-12', '0779790714', '9040-CV.pdf', '2022-06-22 00:00:00'),
(12, 'wathsala', 182085, 'wathsalabandara118@gmail.com', 'Male', 'Applied Sciences', 'Level 2', 'For Examination Purpose.', '2022-06-05', '2022-06-22', '071-5191223', '9653-Assign', '2022-06-22 09:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `online_treatments`
--

CREATE TABLE `online_treatments` (
  `T_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Index_No` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Comment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_treatments`
--

INSERT INTO `online_treatments` (`T_id`, `Name`, `Index_No`, `Email`, `Gender`, `Contact`, `Faculty`, `Level`, `Date`, `Time`, `Comment`) VALUES
(3, 'W.M.N.W.Bandara', 182085, 'wathsalabandara.another@gmail.com', 'Female', '56679', 'Applied Sciences', 'Level 1', '2022-05-02', '00:00:00', 'hfuoii'),
(6, 'Abc', 100, 'ABC@gmail.com', 'Male', '56679', 'Applied Sciences', 'Level 4', '2022-05-17', '13:28:00', 'dsdsdt'),
(7, 'XYZ', 18000, 'fdg122@gmail.com', 'Female', '0155', 'Faculty of Business Studies and Finance', 'Level 2', '2022-05-10', '02:48:00', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_Id` int(11) NOT NULL,
  `Staff_Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_Id`, `Staff_Name`, `Gender`, `Position`, `Mobile`, `User_Name`, `Password`) VALUES
(1, 'Nimal', 'male', 'PHI', '0219-97364', 'Nimal', 'Nimal123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_Id` int(11) NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `Index_No` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_Id`, `S_Name`, `Index_No`, `Email`, `Gender`, `Faculty`, `Level`, `Mobile`, `User_Name`, `Password`) VALUES
(1, 'W.M.N.Wathsala Bandara', 182085, 'wathsalabandara118@gmail.com', 'Female', 'Applied Sciences', 'Level 3', '071-5191220', '182085', '$2y$10$kt80a/O1NLKzPDfAUy.8x.WClRwuNjm/vdSUvKwpR80FwjZGU8HKe'),
(2, 'S.K.Bogahalanda', 182146, 'kbogahalanda@gmail.com', 'Male', 'Applied Sciences', 'Level 2', '56679', '182146', '$2y$10$DDUl1.M8j/imK44oIPqe0OmPziASGo/cP7CcCwb7Jl46cMASdbOei');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment_check`
--
ALTER TABLE `appoinment_check`
  ADD PRIMARY KEY (`T_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_Id`);

--
-- Indexes for table `doctorcheck`
--
ALTER TABLE `doctorcheck`
  ADD PRIMARY KEY (`id`,`T_Id`);

--
-- Indexes for table `medical_news`
--
ALTER TABLE `medical_news`
  ADD PRIMARY KEY (`News_id`);

--
-- Indexes for table `medical_recipt`
--
ALTER TABLE `medical_recipt`
  ADD PRIMARY KEY (`Recipt_No`);

--
-- Indexes for table `online_treatments`
--
ALTER TABLE `online_treatments`
  ADD PRIMARY KEY (`T_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_Id`,`Email`,`User_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment_check`
--
ALTER TABLE `appoinment_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `D_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctorcheck`
--
ALTER TABLE `doctorcheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medical_news`
--
ALTER TABLE `medical_news`
  MODIFY `News_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `medical_recipt`
--
ALTER TABLE `medical_recipt`
  MODIFY `Recipt_No` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `online_treatments`
--
ALTER TABLE `online_treatments`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment_check`
--
ALTER TABLE `appoinment_check`
  ADD CONSTRAINT `t2` FOREIGN KEY (`T_id`) REFERENCES `online_treatments` (`T_id`);

--
-- Constraints for table `doctorcheck`
--
ALTER TABLE `doctorcheck`
  ADD CONSTRAINT `t1` FOREIGN KEY (`T_Id`) REFERENCES `online_treatments` (`T_id`),
  ADD CONSTRAINT `text` FOREIGN KEY (`D_Id`) REFERENCES `doctor` (`D_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
