-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2016 at 07:56 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EspacoAluno`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `class_idclass` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_has_discipline`
--

CREATE TABLE `class_has_discipline` (
  `class_idclass` int(11) NOT NULL,
  `discipline_iddiscipline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

CREATE TABLE `discipline` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `schedule` varchar(45) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `discipline_iddiscipline` int(11) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `id` int(11) NOT NULL,
  `discipline_idtable1` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `major_has_discipline`
--

CREATE TABLE `major_has_discipline` (
  `major_idmajor` int(11) NOT NULL,
  `major_discipline_idtable1` int(11) NOT NULL,
  `discipline_iddiscipline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `class_idclass` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(500) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `father_name` varchar(45) DEFAULT NULL,
  `mother_name` varchar(45) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `birth_city` varchar(100) NOT NULL,
  `birth_UF` varchar(2) NOT NULL,
  `birth_country` varchar(100) NOT NULL,
  `nacionality` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `CEP` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `generalinfo` varchar(255) NOT NULL,
  `career` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `profilePicture` varchar(255) DEFAULT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialRequisitions`
--

CREATE TABLE `specialRequisitions` (
  `id` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `autoService` varchar(255) DEFAULT NULL,
  `teachingPlan` varchar(255) DEFAULT NULL,
  `declarationConsultation` varchar(255) DEFAULT NULL,
  `finances` varchar(255) DEFAULT NULL,
  `references` varchar(255) DEFAULT NULL,
  `informatives` varchar(255) DEFAULT NULL,
  `npj` varchar(255) DEFAULT NULL,
  `orientationGroup` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ra` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ra`, `password`, `type`, `active`) VALUES
(1, 654, '123', 3, 2),
(2, 321, '321', 1, 1),
(3, 333, '333', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_major`
--

CREATE TABLE `user_has_major` (
  `user_iduser` int(11) NOT NULL,
  `major_idmajor` int(11) NOT NULL,
  `major_discipline_idtable1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`,`class_idclass`),
  ADD KEY `fk_archives_class1_idx` (`class_idclass`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_has_discipline`
--
ALTER TABLE `class_has_discipline`
  ADD PRIMARY KEY (`class_idclass`,`discipline_iddiscipline`),
  ADD KEY `fk_class_has_discipline_discipline1_idx` (`discipline_iddiscipline`),
  ADD KEY `fk_class_has_discipline_class1_idx` (`class_idclass`);

--
-- Indexes for table `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`,`discipline_iddiscipline`),
  ADD KEY `fk_grades_discipline1_idx` (`discipline_iddiscipline`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`,`discipline_idtable1`);

--
-- Indexes for table `major_has_discipline`
--
ALTER TABLE `major_has_discipline`
  ADD PRIMARY KEY (`major_idmajor`,`major_discipline_idtable1`,`discipline_iddiscipline`),
  ADD KEY `fk_major_has_discipline_discipline1_idx` (`discipline_iddiscipline`),
  ADD KEY `fk_major_has_discipline_major1_idx` (`major_idmajor`,`major_discipline_idtable1`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`,`class_idclass`),
  ADD KEY `fk_messages_class1_idx` (`class_idclass`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`,`user_iduser`),
  ADD KEY `fk_registration_user1_idx` (`user_iduser`);

--
-- Indexes for table `specialRequisitions`
--
ALTER TABLE `specialRequisitions`
  ADD PRIMARY KEY (`id`,`user_iduser`),
  ADD KEY `fk_specialRequisitions_user1_idx` (`user_iduser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_has_major`
--
ALTER TABLE `user_has_major`
  ADD PRIMARY KEY (`user_iduser`,`major_idmajor`,`major_discipline_idtable1`),
  ADD KEY `fk_user_has_major_major1_idx` (`major_idmajor`,`major_discipline_idtable1`),
  ADD KEY `fk_user_has_major_user1_idx` (`user_iduser`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archives`
--
ALTER TABLE `archives`
  ADD CONSTRAINT `fk_archives_class1` FOREIGN KEY (`class_idclass`) REFERENCES `class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `class_has_discipline`
--
ALTER TABLE `class_has_discipline`
  ADD CONSTRAINT `fk_class_has_discipline_class1` FOREIGN KEY (`class_idclass`) REFERENCES `class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_class_has_discipline_discipline1` FOREIGN KEY (`discipline_iddiscipline`) REFERENCES `discipline` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `fk_grades_discipline1` FOREIGN KEY (`discipline_iddiscipline`) REFERENCES `discipline` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `major_has_discipline`
--
ALTER TABLE `major_has_discipline`
  ADD CONSTRAINT `fk_major_has_discipline_discipline1` FOREIGN KEY (`discipline_iddiscipline`) REFERENCES `discipline` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_major_has_discipline_major1` FOREIGN KEY (`major_idmajor`,`major_discipline_idtable1`) REFERENCES `major` (`id`, `discipline_idtable1`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messages_class1` FOREIGN KEY (`class_idclass`) REFERENCES `class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `fk_registration_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `specialRequisitions`
--
ALTER TABLE `specialRequisitions`
  ADD CONSTRAINT `fk_specialRequisitions_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_has_major`
--
ALTER TABLE `user_has_major`
  ADD CONSTRAINT `fk_user_has_major_major1` FOREIGN KEY (`major_idmajor`,`major_discipline_idtable1`) REFERENCES `major` (`id`, `discipline_idtable1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_major_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
