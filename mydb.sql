-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 02:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `idcourse` int(11) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `course_description` varchar(300) NOT NULL,
  `course_objective` varchar(300) NOT NULL,
  `course_amount` varchar(300) NOT NULL,
  `teacher_idteacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `idmeeting` int(11) NOT NULL,
  `meeting_date` date DEFAULT NULL,
  `meeting_start_time` time(6) DEFAULT NULL,
  `meeting_name` varchar(55) NOT NULL,
  `access_token` varchar(100) DEFAULT NULL,
  `expiring_date` date DEFAULT NULL,
  `teacher_idteacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `idstudent` int(11) NOT NULL,
  `student_name` varchar(55) NOT NULL,
  `student_email` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idstudent`, `student_name`, `student_email`) VALUES
(1, 'sand@mail.com', 'sand@mail.com'),
(2, 'kan', 'kah@dnj.com'),
(3, 'name', 'name@md.com'),
(4, 'name', 'khan@mail.com'),
(6, 'vjnf', 'njdfn@mf.com'),
(7, 'name', 'greatt@dmsk.com'),
(8, 'first', 'page@h.com'),
(9, 'name', 'name@dk.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_has_course`
--

CREATE TABLE IF NOT EXISTS `student_has_course` (
  `student_idstudent` int(11) NOT NULL,
  `course_idcourse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_has_meeting`
--

CREATE TABLE IF NOT EXISTS `student_has_meeting` (
  `student_idstudent` int(11) NOT NULL,
  `meeting_idmeeting` int(11) NOT NULL,
  `meeting_teacher_idteacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `idteacher` int(11) NOT NULL,
  `teacher_name` varchar(55) NOT NULL,
  `teacher_email` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`idteacher`, `teacher_name`, `teacher_email`) VALUES
(35, 'khan', 'ko@gmail.com'),
(36, 'sandford', 'khann@k.com'),
(37, 'name', 'khansandfor@dsn.com'),
(38, 'khan', 'khan@gmail.com'),
(39, 'khan', 'san@fij.com'),
(40, 'we should', 'let@gmail.com'),
(41, 'name', 'nice@g.com'),
(42, 'name', 'nice@gh.com'),
(43, 'name', 'nice@gh.com'),
(44, 'khan', 'khan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idcourse`,`teacher_idteacher`), ADD KEY `fk_course_teacher1_idx` (`teacher_idteacher`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`idmeeting`,`teacher_idteacher`), ADD UNIQUE KEY `idmeeting_UNIQUE` (`idmeeting`), ADD KEY `fk_meeting_teacher_idx` (`teacher_idteacher`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idstudent`), ADD UNIQUE KEY `idstudent_UNIQUE` (`idstudent`), ADD UNIQUE KEY `student_email_UNIQUE` (`student_email`);

--
-- Indexes for table `student_has_course`
--
ALTER TABLE `student_has_course`
  ADD PRIMARY KEY (`student_idstudent`,`course_idcourse`), ADD KEY `fk_student_has_course_course1_idx` (`course_idcourse`), ADD KEY `fk_student_has_course_student1_idx` (`student_idstudent`);

--
-- Indexes for table `student_has_meeting`
--
ALTER TABLE `student_has_meeting`
  ADD PRIMARY KEY (`student_idstudent`,`meeting_idmeeting`,`meeting_teacher_idteacher`), ADD KEY `fk_student_has_meeting_meeting1_idx` (`meeting_idmeeting`,`meeting_teacher_idteacher`), ADD KEY `fk_student_has_meeting_student1_idx` (`student_idstudent`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`idteacher`), ADD UNIQUE KEY `idteacher_UNIQUE` (`idteacher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `idmeeting` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `idstudent` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `idteacher` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
ADD CONSTRAINT `fk_course_teacher1` FOREIGN KEY (`teacher_idteacher`) REFERENCES `teacher` (`idteacher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
ADD CONSTRAINT `fk_meeting_teacher` FOREIGN KEY (`teacher_idteacher`) REFERENCES `teacher` (`idteacher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_has_course`
--
ALTER TABLE `student_has_course`
ADD CONSTRAINT `fk_student_has_course_course1` FOREIGN KEY (`course_idcourse`) REFERENCES `course` (`idcourse`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_student_has_course_student1` FOREIGN KEY (`student_idstudent`) REFERENCES `student` (`idstudent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_has_meeting`
--
ALTER TABLE `student_has_meeting`
ADD CONSTRAINT `fk_student_has_meeting_meeting1` FOREIGN KEY (`meeting_idmeeting`, `meeting_teacher_idteacher`) REFERENCES `meeting` (`idmeeting`, `teacher_idteacher`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_student_has_meeting_student1` FOREIGN KEY (`student_idstudent`) REFERENCES `student` (`idstudent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
