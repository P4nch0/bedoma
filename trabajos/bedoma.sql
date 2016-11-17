-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 06:31 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedoma`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
  `idalumno` varchar(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`idalumno`, `nombre`, `apellido`, `contrasena`) VALUES
('108-55-5483', 'John', 'Fowler', 'Crimson'),
('115-48-1274', 'Henry', 'Thomas', 'Pink'),
('116-95-8812', 'Carl', 'Barnes', 'Blue'),
('129-53-2801', 'Donald', 'Tucker', 'Turquoise'),
('138-24-5533', 'Willie', 'Fuller', 'Turquoise'),
('156-42-1823', 'Jane', 'Mitchell', 'Aquamarine'),
('161-78-7201', 'Linda', 'Stone', 'Crimson'),
('173-53-9449', 'Timothy', 'Bell', 'Goldenrod'),
('173-95-0662', 'Matthew', 'Mccoy', 'Green'),
('183-93-7414', 'Deborah', 'Black', 'Indigo'),
('185-08-0605', 'Arthur', 'Rivera', 'Goldenrod'),
('188-95-1181', 'Susan', 'Lee', 'Red'),
('189-03-3897', 'Billy', 'Frazier', 'Yellow'),
('189-34-3343', 'Julie', 'Mcdonald', 'Purple'),
('190-16-6083', 'Steven', 'Rivera', 'Indigo'),
('214-78-3491', 'Norma', 'Baker', 'Maroon'),
('217-71-1133', 'Samuel', 'Morales', 'Fuscia'),
('221-79-8731', 'Jeffrey', 'Duncan', 'Mauv'),
('231-34-9661', 'Philip', 'Montgomery', 'Aquamarine'),
('232-61-6393', 'Ernest', 'Snyder', 'Puce'),
('239-60-2399', 'Janet', 'Reyes', 'Red'),
('242-81-5440', 'Henry', 'Hart', 'Fuscia'),
('247-63-7010', 'John', 'Bowman', 'Aquamarine'),
('260-52-4146', 'Phyllis', 'Gilbert', 'Red'),
('263-05-6285', 'Kelly', 'Wagner', 'Mauv'),
('266-55-5527', 'Nancy', 'Owens', 'Purple'),
('280-11-2667', 'Frances', 'Miller', 'Purple'),
('291-63-8058', 'Daniel', 'Garrett', 'Aquamarine'),
('303-46-7282', 'Frank', 'Morgan', 'Puce'),
('317-47-2086', 'Jean', 'Holmes', 'Puce'),
('327-08-5267', 'Phillip', 'Wright', 'Blue'),
('330-27-9641', 'Harry', 'Marshall', 'Goldenrod'),
('337-10-8082', 'Sean', 'Morales', 'Khaki'),
('339-14-9600', 'Julie', 'Garza', 'Goldenrod'),
('344-57-2404', 'Christine', 'Meyer', 'Goldenrod'),
('362-38-3538', 'Lori', 'Palmer', 'Red'),
('377-72-2339', 'Timothy', 'Bishop', 'Violet'),
('385-78-3685', 'Mark', 'Gonzalez', 'Pink'),
('391-41-8638', 'John', 'Harper', 'Teal'),
('407-99-1832', 'Charles', 'Mason', 'Pink'),
('412-78-4192', 'Frank', 'Roberts', 'Puce'),
('423-61-6155', 'Jose', 'Shaw', 'Mauv'),
('429-21-5674', 'Sean', 'Powell', 'Indigo'),
('430-99-2022', 'Michelle', 'Webb', 'Red'),
('436-12-1715', 'Ralph', 'Morgan', 'Green'),
('444-82-4198', 'Stephen', 'Knight', 'Yellow'),
('469-27-9982', 'Jennifer', 'Butler', 'Turquoise'),
('475-14-0985', 'Larry', 'Ray', 'Turquoise'),
('478-19-4784', 'Cheryl', 'Hernandez', 'Crimson'),
('481-21-7535', 'Jeremy', 'Berry', 'Red'),
('483-55-8871', 'Cynthia', 'Hudson', 'Khaki'),
('487-68-4921', 'Carolyn', 'Welch', 'Crimson'),
('508-10-8823', 'Billy', 'Robinson', 'Teal'),
('515-81-8111', 'Ralph', 'Bailey', 'Mauv'),
('532-61-1712', 'Kathleen', 'James', 'Khaki'),
('538-76-0003', 'Janice', 'Kennedy', 'Red'),
('581-97-5945', 'Christopher', 'Collins', 'Fuscia'),
('582-81-4871', 'Catherine', 'Washington', 'Khaki'),
('588-44-6240', 'Gloria', 'Reynolds', 'Goldenrod'),
('600-36-9528', 'Carlos', 'Freeman', 'Khaki'),
('608-71-0704', 'Walter', 'Hawkins', 'Red'),
('611-85-8054', 'Ralph', 'Webb', 'Khaki'),
('616-25-7431', 'Dennis', 'Richardson', 'Violet'),
('628-97-8874', 'Ruby', 'Welch', 'Orange'),
('630-38-8991', 'Phillip', 'Barnes', 'Indigo'),
('635-80-4477', 'Howard', 'Richardson', 'Pink'),
('637-90-1085', 'Jacqueline', 'Coleman', 'Green'),
('638-49-0432', 'Jimmy', 'Lane', 'Puce'),
('646-40-1821', 'Adam', 'Williamson', 'Mauv'),
('654-42-3158', 'Lori', 'Miller', 'Orange'),
('672-58-2741', 'Louis', 'Romero', 'Red'),
('680-71-0298', 'Michelle', 'Freeman', 'Khaki'),
('692-51-6288', 'Matthew', 'Bailey', 'Turquoise'),
('711-32-8728', 'Billy', 'Fuller', 'Orange'),
('711-60-7149', 'Steven', 'Wells', 'Goldenrod'),
('715-75-0268', 'Arthur', 'Murray', 'Indigo'),
('729-86-9390', 'Dorothy', 'Bailey', 'Maroon'),
('736-90-0281', 'Ann', 'Franklin', 'Indigo'),
('756-26-5142', 'Carlos', 'Woods', 'Khaki'),
('776-86-2292', 'Anthony', 'Kelley', 'Aquamarine'),
('783-63-4093', 'Billy', 'Burton', 'Fuscia'),
('795-81-0069', 'Diane', 'Rogers', 'Pink'),
('805-23-2129', 'Jessica', 'Thomas', 'Maroon'),
('814-84-8669', 'Catherine', 'Brooks', 'Red'),
('818-58-5059', 'Ruth', 'Carroll', 'Orange'),
('827-59-3041', 'Margaret', 'Bryant', 'Goldenrod'),
('828-92-6974', 'Frances', 'Bailey', 'Khaki'),
('837-75-8806', 'Chris', 'Mccoy', 'Fuscia'),
('850-82-9832', 'Raymond', 'Henderson', 'Khaki'),
('867-24-3215', 'Lillian', 'Shaw', 'Puce'),
('869-12-9326', 'Sara', 'Romero', 'Turquoise'),
('870-34-6507', 'Jeffrey', 'West', 'Indigo'),
('871-31-5929', 'Margaret', 'Powell', 'Maroon'),
('880-19-6001', 'Jerry', 'Gomez', 'Red'),
('895-52-1847', 'Juan', 'Chapman', 'Green'),
('901-93-1245', 'Ronald', 'Riley', 'Maroon'),
('939-46-4361', 'Dennis', 'Stewart', 'Violet'),
('963-45-5525', 'Lois', 'Dean', 'Maroon'),
('981-99-6788', 'Kimberly', 'Lewis', 'Turquoise'),
('982-81-1151', 'Beverly', 'Chavez', 'Turquoise'),
('a01202727', 'pancho', 'nunez', 'nfrankg'),
('a01202743', 'antonio', 'esper', 'pswd');

-- --------------------------------------------------------

--
-- Table structure for table `atiende`
--

CREATE TABLE `atiende` (
  `idatiende` int(11) NOT NULL,
  `idalumno` varchar(20) NOT NULL,
  `idmateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atiende`
--

INSERT INTO `atiende` (`idatiende`, `idalumno`, `idmateria`) VALUES
(1, '108-55-5483', 3),
(2, 'a01202727', 3),
(3, '221-79-8731', 3),
(4, 'a01202743', 3),
(5, 'a01202727', 1),
(6, 'a01202743', 2),
(7, 'a01202743', 4),
(8, 'a01202743', 5),
(9, '108-55-5483', 2);

-- --------------------------------------------------------

--
-- Table structure for table `califiacion`
--

CREATE TABLE `califiacion` (
  `idcalificacion` int(11) NOT NULL,
  `idalumno` varchar(20) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `idtrabajo` int(11) NOT NULL,
  `califiacion` varchar(1) NOT NULL DEFAULT 'P',
  `archivo` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `retro` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `califiacion`
--

INSERT INTO `califiacion` (`idcalificacion`, `idalumno`, `idmateria`, `idtrabajo`, `califiacion`, `archivo`, `fecha`, `retro`) VALUES
(1, 'a01202727', 2, 16, 'E', 'taxonomia.pdf', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `e`
--

CREATE TABLE `e` (
  `idE` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `idtrabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e`
--

INSERT INTO `e` (`idE`, `descripcion`, `idtrabajo`) VALUES
(8, 'Sin warnings', 16),
(9, 'Codigo optimizado', 16),
(10, 'Cumplir con todo M', 16),
(11, 'e', 17),
(12, 'ee', 17),
(13, 'Cumplir con todo M', 17),
(14, 'e', 18),
(15, 'ee', 18),
(16, 'Cumplir con todo M', 18),
(17, 'e', 19),
(18, 'ee', 19),
(19, 'Cumplir con todo M', 19);

-- --------------------------------------------------------

--
-- Table structure for table `f`
--

CREATE TABLE `f` (
  `idF` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `idtrabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f`
--

INSERT INTO `f` (`idF`, `descripcion`, `idtrabajo`) VALUES
(1, 'Codigo no compila', 16),
(2, '', 16),
(3, '', 16),
(4, 'f', 17),
(5, 'ff', 17),
(6, 'fff', 17),
(7, 'f', 18),
(8, 'ff', 18),
(9, 'fff', 18),
(10, 'no cumple con nada', 19),
(11, '', 19),
(12, '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `m`
--

CREATE TABLE `m` (
  `idM` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `idtrabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m`
--

INSERT INTO `m` (`idM`, `descripcion`, `idtrabajo`) VALUES
(1, 'Codigo funcional', 16),
(2, 'Entendimiento completo de los semaforos', 16),
(3, 'Algo mas', 16),
(4, 'm', 17),
(5, 'mm', 17),
(6, 'mmm', 17),
(7, 'm', 18),
(8, 'mm', 18),
(9, 'mmm', 18),
(10, 'm', 19),
(11, 'mm', 19),
(12, '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `idmateria` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `idprofesor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`idmateria`, `nombre`, `idprofesor`) VALUES
(1, 'Redes', 'ohernand'),
(2, 'Sistemas Operativos', 'ohernand'),
(3, 'Progra Avanzada', 'peter'),
(4, 'Estructura de Datos', 'peter'),
(5, 'Redes I', 'faby');

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
  `idprofesor` varchar(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `nombre`, `apellido`, `contrasena`) VALUES
('faby', 'fabiola', 'diaz', 'faby'),
('ohernand', 'oscar', 'hernandez', 'ohernand'),
('peter', 'pedro', 'peter', 'peter');

-- --------------------------------------------------------

--
-- Table structure for table `r`
--

CREATE TABLE `r` (
  `idR` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `idtrabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r`
--

INSERT INTO `r` (`idR`, `descripcion`, `idtrabajo`) VALUES
(1, 'Codigo compila', 16),
(2, 'El alumno no comprende como no funciona un semaforo en su totalidad', 16),
(3, '', 16),
(4, 'r', 17),
(5, 'rr', 17),
(6, 'rrr', 17),
(7, 'r', 18),
(8, 'rr', 18),
(9, 'rrr', 18),
(10, 'r', 19),
(11, 'fgh', 19),
(12, '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `trabajo`
--

CREATE TABLE `trabajo` (
  `idtrabajo` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `idmateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajo`
--

INSERT INTO `trabajo` (`idtrabajo`, `nombre`, `descripcion`, `idmateria`) VALUES
(16, 'Semaforos', 'Desarrollar los semaforos para penny blossoms', 3),
(17, 'Algo', 'Descripcion', 3),
(18, 'DiseÃ±o red del tec', 'Deberas diseÃ±ar una manera mas optima para manejar las subredes dentro del campus', 5),
(19, 'Script01', 'Desarrollar script', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`);

--
-- Indexes for table `atiende`
--
ALTER TABLE `atiende`
  ADD PRIMARY KEY (`idatiende`,`idalumno`,`idmateria`),
  ADD KEY `fk_atiende_alumno1_idx` (`idalumno`),
  ADD KEY `fk_atiende_materia2_idx` (`idmateria`);

--
-- Indexes for table `califiacion`
--
ALTER TABLE `califiacion`
  ADD PRIMARY KEY (`idcalificacion`,`idalumno`,`idmateria`,`idtrabajo`),
  ADD KEY `fk_atiende_alumno_idx` (`idalumno`),
  ADD KEY `fk_atiende_materia1_idx` (`idmateria`),
  ADD KEY `fk_califiacion_trabajo1_idx` (`idtrabajo`);

--
-- Indexes for table `e`
--
ALTER TABLE `e`
  ADD PRIMARY KEY (`idE`,`idtrabajo`),
  ADD KEY `fk_E_trabajo1_idx` (`idtrabajo`);

--
-- Indexes for table `f`
--
ALTER TABLE `f`
  ADD PRIMARY KEY (`idF`,`idtrabajo`),
  ADD KEY `fk_F_trabajo1_idx` (`idtrabajo`);

--
-- Indexes for table `m`
--
ALTER TABLE `m`
  ADD PRIMARY KEY (`idM`,`idtrabajo`),
  ADD KEY `fk_M_trabajo1_idx` (`idtrabajo`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idmateria`,`idprofesor`),
  ADD KEY `fk_materia_profesor1_idx` (`idprofesor`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idprofesor`);

--
-- Indexes for table `r`
--
ALTER TABLE `r`
  ADD PRIMARY KEY (`idR`,`idtrabajo`),
  ADD KEY `fk_R_trabajo1_idx` (`idtrabajo`);

--
-- Indexes for table `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`idtrabajo`,`idmateria`),
  ADD KEY `fk_trabajo_materia1_idx` (`idmateria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atiende`
--
ALTER TABLE `atiende`
  MODIFY `idatiende` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `califiacion`
--
ALTER TABLE `califiacion`
  MODIFY `idcalificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `e`
--
ALTER TABLE `e`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `f`
--
ALTER TABLE `f`
  MODIFY `idF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `m`
--
ALTER TABLE `m`
  MODIFY `idM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `idmateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `r`
--
ALTER TABLE `r`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `idtrabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `atiende`
--
ALTER TABLE `atiende`
  ADD CONSTRAINT `fk_atiende_alumno1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atiende_materia2` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `califiacion`
--
ALTER TABLE `califiacion`
  ADD CONSTRAINT `fk_atiende_alumno` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atiende_materia1` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_califiacion_trabajo1` FOREIGN KEY (`idtrabajo`) REFERENCES `trabajo` (`idtrabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `e`
--
ALTER TABLE `e`
  ADD CONSTRAINT `fk_E_trabajo1` FOREIGN KEY (`idtrabajo`) REFERENCES `trabajo` (`idtrabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `f`
--
ALTER TABLE `f`
  ADD CONSTRAINT `fk_F_trabajo1` FOREIGN KEY (`idtrabajo`) REFERENCES `trabajo` (`idtrabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `m`
--
ALTER TABLE `m`
  ADD CONSTRAINT `fk_M_trabajo1` FOREIGN KEY (`idtrabajo`) REFERENCES `trabajo` (`idtrabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `fk_materia_profesor1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `r`
--
ALTER TABLE `r`
  ADD CONSTRAINT `fk_R_trabajo1` FOREIGN KEY (`idtrabajo`) REFERENCES `trabajo` (`idtrabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `fk_trabajo_materia1` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
