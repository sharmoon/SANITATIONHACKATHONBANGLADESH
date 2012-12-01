-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2012 at 06:01 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `entgapdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationdetails`
--

CREATE TABLE IF NOT EXISTS `registrationdetails` (
  `TransId` bigint(9) NOT NULL AUTO_INCREMENT,
  `ApplicantId` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `SerialNo` int(5) NOT NULL,
  `DurationFrom` date NOT NULL,
  `DurationTo` date NOT NULL,
  `IssueDate` date NOT NULL,
  `ReApplicationDate` date NOT NULL,
  `HoldingNo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `BusinessType` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`TransId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registrationdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `registrationmaster`
--

CREATE TABLE IF NOT EXISTS `registrationmaster` (
  `ApplicantId` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicantName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FathersName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MothersName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Village` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Post` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `WardNo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UnionId` int(15) NOT NULL,
  `MobileNo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `NationalID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Remarks` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationDate` datetime NOT NULL,
  `ApplicationType` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ApplicantId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrationmaster`
--


-- --------------------------------------------------------

--
-- Table structure for table `unionsetupmaster`
--

CREATE TABLE IF NOT EXISTS `unionsetupmaster` (
  `UnionId` int(5) NOT NULL AUTO_INCREMENT,
  `UnionName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Thana` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Division` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GEOCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`UnionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `unionsetupmaster`
--


-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `UserID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UserLevel` varchar(0) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RegiDate` datetime NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userinfo`
--

