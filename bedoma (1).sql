-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 09:20 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bedoma`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `ID` varchar(20) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APATERNO` varchar(20) DEFAULT NULL,
  `AMATERNO` varchar(20) DEFAULT NULL,
  `PSWD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`ID`, `NOMBRE`, `APATERNO`, `AMATERNO`, `PSWD`) VALUES
('A01202727', 'Francisco', 'Nuñez', 'Gomez', 'nfrankg'),
('A01202743', 'Antonio', 'Esper', 'Cook', 'aesperc');

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `ID` int(10) NOT NULL,
  `IDPROFESOR` varchar(20) DEFAULT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`ID`, `IDPROFESOR`, `NOMBRE`) VALUES
(1, 'ohernand', 'Redes'),
(2, 'ohernand', 'Sistemas Operativos');

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `ID` varchar(20) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APATERNO` varchar(20) DEFAULT NULL,
  `AMATERNO` varchar(20) DEFAULT NULL,
  `PSWD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`ID`, `NOMBRE`, `APATERNO`, `AMATERNO`, `PSWD`) VALUES
('ohernand', 'Oscar', 'Hernandez', 'Perez', 'ohernand');

-- --------------------------------------------------------

--
-- Table structure for table `trabajo`
--

CREATE TABLE IF NOT EXISTS `trabajo` (
`ID` int(100) NOT NULL,
  `IDALUMNO` varchar(10) DEFAULT NULL,
  `IDMATERIA` int(10) DEFAULT NULL,
  `ARCHIVO` varchar(20) NOT NULL,
  `EVALUADO` tinyint(1) DEFAULT '0',
  `FECHA` date DEFAULT NULL,
  `FECHAENTREGA` date DEFAULT NULL,
  `COMENTRARIOS` varchar(25) DEFAULT NULL,
  `CALIFICACION` varchar(9) DEFAULT 'PENDIENTE'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `trabajo`
--

INSERT INTO `trabajo` (`ID`, `IDALUMNO`, `IDMATERIA`, `ARCHIVO`, `EVALUADO`, `FECHA`, `FECHAENTREGA`, `COMENTRARIOS`, `CALIFICACION`) VALUES
(6, 'A01202727', 1, 'taxonomia.pdf', 0, '2016-11-16', '0000-00-00', '', 'PENDIENTE'),
(8, 'A01202727', 1, 'emrf_rubric_1.pdf', 0, '2016-11-16', '0000-00-00', '', 'PENDIENTE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
 ADD PRIMARY KEY (`ID`), ADD KEY `IDPROFESOR` (`IDPROFESOR`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `trabajo`
--
ALTER TABLE `trabajo`
 ADD PRIMARY KEY (`ID`), ADD KEY `IDALUMNO` (`IDALUMNO`), ADD KEY `IDMATERIA` (`IDMATERIA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trabajo`
--
ALTER TABLE `trabajo`
MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `materia`
--
ALTER TABLE `materia`
ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`IDPROFESOR`) REFERENCES `profesor` (`ID`);

--
-- Constraints for table `trabajo`
--
ALTER TABLE `trabajo`
ADD CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`IDALUMNO`) REFERENCES `alumno` (`ID`),
ADD CONSTRAINT `trabajo_ibfk_2` FOREIGN KEY (`IDMATERIA`) REFERENCES `materia` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
