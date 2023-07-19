-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 04:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `ID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `RoomID` int(11) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `ReceptionistID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`ID`, `DoctorID`, `PatientID`, `RoomID`, `Time`, `Date`, `ReceptionistID`) VALUES
(1, 2, 3, 2, '13:00:00', '2023-06-27', 1),
(2, 2, 4, 2, '14:00:00', '2023-06-30', 2),
(3, 3, 11, 1, '11:00:00', '2023-06-04', 1),
(6, 1, 1, 1, '12:50:00', '2023-06-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Specialisation` varchar(200) NOT NULL,
  `Room` int(11) NOT NULL,
  `Picture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`ID`, `Name`, `Surname`, `Age`, `Gender`, `PhoneNumber`, `Email`, `Specialisation`, `Room`, `Picture`) VALUES
(1, 'William', 'Nichol', 45, 'Male', '0213348910', 'WilliamNicholDrive@gmail.com', 'Orthodontist', 1, 'doctor1.jpeg'),
(2, 'Jakobus', 'Dokter', 66, 'Male', '0445678123', 'DokterDokter@gmail.com', 'General Practitioner', 2, 'doctor2.jpeg'),
(3, 'Stephan', 'Pinky', 88, 'Male', '0221227349', 'TheBrain@gmail.com', 'Neurosurgeon', 3, 'doctor3.jpeg'),
(4, 'Annelie', 'Sprinter', 30, 'Female', '0456781213', 'SprinterA@gmail.com', 'Physiologist', 4, 'doctor4.png'),
(5, 'Dumile', 'Sangawa', 41, 'Male', '0778977790', 'DumileSangawa@gmail.com', 'General Practitioner', 5, 'doctor5.jpg'),
(6, 'Adam', 'Wadam', 44, 'Male', '0824483168', 'AdamWadamWumple@gmail.com', 'Anesteseiologist', 6, 'doctor6.png'),
(7, 'Daisy', 'Teether', 58, 'Female', '0123456789', 'Teethlooker@gmail.com', 'Dentist', 7, 'doctor7.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MedicalAidNumber` int(11) NOT NULL,
  `PreviousAppointments` varchar(100) NOT NULL,
  `Picture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`ID`, `Name`, `Surname`, `Age`, `Gender`, `PhoneNumber`, `Email`, `MedicalAidNumber`, `PreviousAppointments`, `Picture`) VALUES
(1, 'Sikele', 'Nkosi', 78, 'Female', '0122211234', 'BornB4Time@gmail.com', 1, '98', 'patient1.jpeg'),
(2, 'Adam', 'Apple', 34, 'Male', '0122445234', 'ApplesKeepDoctors@gmail.com', 41234, '2', 'patient2.jpeg'),
(3, 'Mary', 'Maggot', 14, 'Female', '0278814185', 'MaggotMuncher@gmail.com', 423, '11', 'patient3.jpeg'),
(4, 'Martha', 'Maggot', 34, 'Female', '0443165449', 'MaggotMom@gmail.com', 6677, '28', 'patient4.jpeg'),
(5, 'David', 'Maggot', 35, 'Male', '0677783165', 'MaggotDad@gmail.com', 424, '1', 'patient5.jpeg'),
(6, 'David', 'Digger', 25, 'Male', '0212213345', 'MinersUnitedDavid@gmail.com', 4444, '7', 'patient6.jpeg'),
(7, 'Murphy', 'Doolahan', 68, 'Male', '0456666666', 'Murhpy@yahoo.com', 9881, '27', 'patient7.jpeg'),
(8, 'Peter', 'Griffin', 49, 'Male', '1234567890', 'PeterPumpkinEater@gmail.com', 1023, '5', 'patient8.jpeg'),
(9, 'Lois', 'Griffin', 47, 'Female', '6781234495', 'NotLoisLane@gmail.com', 1022, '4', 'patient9.jpeg'),
(10, 'Meg', 'Griffin', 15, 'Female', '0662320355', 'ShutUpMeg@Hotmail.com', 1023, '6', 'patient10.jpeg'),
(11, 'Chris', 'Griffin', 16, 'Male', '6788946675', 'xxKingOfDoomxx@gmail.com', 1024, '18', 'patient11.jpeg'),
(12, 'Stewie', 'Griffin', 1, 'Male', '0445678910', 'PeterPumpkinEater@gmail.com', 1025, '1', 'patient12.jpeg'),
(13, 'Glenn', 'Quagmire', 55, 'Male', '6969696969', 'ItIsQuagmire@gmail.com', 6001, '68', 'patient13.jpeg'),
(14, 'Joe', 'Swanson', 45, 'Male', '1236678912', 'CantWalkEver@gmail.com', 8901, '20', 'patient14.jpeg'),
(15, 'Bonnie', 'Swanson', 35, 'Female', '0894213445', 'NeedNewHusband@gmail.com', 1111, '16', 'patient15.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Rank` tinyint(1) NOT NULL DEFAULT 0,
  `Picture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`ID`, `Name`, `Surname`, `Age`, `Gender`, `PhoneNumber`, `Email`, `Password`, `Rank`, `Picture`) VALUES
(1, 'Piet', 'Pompies', 55, 'Male', '7677767776', 'PompiesIsSexy@gmail.com', 'PietPompJou11A', 1, 'piet.jpg'),
(2, 'Sarel', 'Seemonster', 55, 'Male', '0414414414', 'Seemonster@gmail.com', 'SarelSienAlles200', 0, 'sarel.jpeg'),
(3, 'Sara', 'Saterdag', 45, 'Female', '0456781234', 'Sara@gmail.com', 'SaraSleepSout4', 0, 'sara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `Floor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ID`, `DoctorID`, `Floor`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 1),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 13, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
