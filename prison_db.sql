-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 12, 2015 at 08:21 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `prison_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `contact_tb`
-- 

CREATE TABLE `contact_tb` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(35) NOT NULL,
  `tel` int(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `contact_tb`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `pri_transfer`
-- 

CREATE TABLE `pri_transfer` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  `inst_adress` varchar(20) NOT NULL,
  `nsupervisor` varchar(30) NOT NULL,
  `ofadress` varchar(35) NOT NULL,
  `outcharge` varchar(30) NOT NULL,
  `sex` text NOT NULL,
  `language` text NOT NULL,
  `pre_conviction` varchar(35) NOT NULL,
  `hist_violence` varchar(40) NOT NULL,
  `date_transfer` varchar(10) NOT NULL,
  `medical` varchar(45) NOT NULL,
  `ofname` varchar(25) NOT NULL,
  `place_sentence` mediumtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `pri_transfer`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `reportn_tb`
-- 

CREATE TABLE `reportn_tb` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(65) NOT NULL,
  `phone` int(13) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `date_incid` date NOT NULL,
  `offender` varchar(25) NOT NULL,
  `type_incid` varchar(30) NOT NULL,
  `staf_member` varchar(35) NOT NULL,
  `inst_crime` varchar(40) NOT NULL,
  `descript_crime` mediumtext NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `reportn_tb`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `visiting_tb`
-- 

CREATE TABLE `visiting_tb` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `adress` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `gender` text NOT NULL,
  `mater` varchar(35) NOT NULL,
  `id_doc` varchar(16) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `visiting_tb`
-- 

