-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2014 at 07:18 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thebookshelf`
--
CREATE DATABASE IF NOT EXISTS `thebookshelf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thebookshelf`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `bname` varchar(30) NOT NULL,
  `mrp` varchar(4) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` varchar(60) NOT NULL,
  `description` varchar(150) NOT NULL,
  UNIQUE KEY `image` (`image`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bname`, `mrp`, `category`, `image`, `description`) VALUES
('Batman', '150', 'Comics', 'Bookshelf Images/comics_batman_detective.jpg', ''),
('Captain America', '170', 'Comics', 'Bookshelf Images/comics_captain_america.jpg', ''),
('Fantastic Four', '155', 'Comics', 'Bookshelf Images/comics_fantastic_four.jpg', ''),
('Justice League', '140', 'Comi', 'Bookshelf Images/comics_justice_league.jpg', ''),
('Sherlock Holmes', '145', 'Comics', 'Bookshelf Images/comics_sherlock_holmes.jpg', ''),
('The Hobbit', '200', 'Fantasy', 'Bookshelf Images/fantasy_the_hobbit.jpg', ''),
('The Lord of the Rings', '275', 'Fantasy', 'Bookshelf Images/fantasy_the_lord_of_the_rings.jpg', ''),
('The Shadow Rising', '225', 'Fantasy', 'Bookshelf Images/fantasy_the_shadow_rising.jpg"', ''),
('The Two Towers', '220', 'Fantasy', 'Bookshelf Images/fantasy_the_two_towers.jpg', ''),
('Twilight', '250', 'Fantasy', 'Bookshelf Images/fantasy_twilight.jpg', ''),
('Angels and Demons', '275', 'Fiction', 'Bookshelf Images/fiction_dan_brown_angels_demons.jpg', ''),
(' Forgotten Girl', '275', 'Fiction', 'Bookshelf Images/fiction_forgotten_girl.jpg', ''),
('Runner', '275', 'Fiction', 'Bookshelf Images/fiction_runner_by_patrick_lee.jpg', ''),
('Secretariat Reborn', '325', 'Fiction', 'Bookshelf Images/fiction_secretariat_reborn.jpg', ''),
('The Walking Dead', '300', 'Fiction', 'Bookshelf Images/fiction_the_walking_engine.jpg', ''),
('Red Dragon', '200', 'Horror', 'Bookshelf Images/horror_red_dragon.jpg', ''),
('The Dead Zone', '235', 'Horror', 'Bookshelf Images/horror_the_dead_zone.jpg', ''),
('The Haunting of Hill House', '315', 'Horror', 'Bookshelf Images/horror_the_haunting_of_hill_house.jpg', ''),
('The Voices in our Head', '387', 'Horror', 'Bookshelf Images/horror_the_voices_in_our_head.jpg', ''),
('Steve Jobs', '190', 'Non-Fiction', 'Bookshelf Images/nonfiction_steve_jobs.jpg', ''),
('The Future of the Mind', '225', 'Non-Fiction', 'Bookshelf Images/nonfiction_the_future_of_the_mind.jpg', ''),
('Young Money', '199', 'Non-fiction', 'Bookshelf Images/nonfiction_young_money.jpg', ''),
('Barca', '195', 'Sports', 'Bookshelf Images/sports_barca.jpg', ''),
('Bigger than the Gam', '199', 'Sports', 'Bookshelf Images/sports_bigger_than_the_game.jpg', ''),
('Calling the Shots', '155', 'Sport', 'Bookshelf Images/sports_calling_the_shots.jpg', ''),
('Fever Pitch', '195', 'Sports', 'Bookshelf Images/sports_fever_pitch.jpg', ''),
('Evangeline', '225', 'Thiller', 'Bookshelf Images/thriller_evangeline.jpg', ''),
('Scream for Me', '226', 'Thriller', 'Bookshelf Images/thriller_scream_for_me.jpg', ''),
('The Girl with the Dragon Tatto', '265', 'Thiller', 'Bookshelf Images/thriller_the_girl_with_the_dragon_tattoo.jp', ''),
('The Silent Wife', '335', 'Thiller', 'Bookshelf Images/thriller_the_silent_wife.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `buybook`
--

CREATE TABLE IF NOT EXISTS `buybook` (
  `uname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `mrp` varchar(5) NOT NULL,
  `description` varchar(150) NOT NULL,
  `image` varchar(60) NOT NULL,
  UNIQUE KEY `image` (`image`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buybook`
--

INSERT INTO `buybook` (`uname`, `address`, `contact`, `email`, `bname`, `mrp`, `description`, `image`) VALUES
('sharvil', 'awwworwavdassssssssss', '9869470569', 'sharvil@gmail.com', 'Batman', '150', '', 'Bookshelf Images/comics_batman_detective.jpg'),
('sharvil', 'awwworwavdassssssssss', '9869470569', 'sharvil@gmail.com', 'The Hobbit', '200', '', 'Bookshelf Images/fantasy_the_hobbit.jpg'),
('sharvil', 'awwworwavdassssssssss', '9869470569', 'sharvil@gmail.com', 'Calling the Shots', '155', '', 'Bookshelf Images/sports_calling_the_shots.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `uname` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(100) NOT NULL,
  UNIQUE KEY `message` (`message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`uname`, `name`, `email`, `message`) VALUES
('sharvil', 'sharvil', 'sharvil@gmail.com', 'nice work great site\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sellbook`
--

CREATE TABLE IF NOT EXISTS `sellbook` (
  `uname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `author` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `mrp` varchar(6) NOT NULL,
  `msp` varchar(6) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  UNIQUE KEY `image` (`image`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellbook`
--

INSERT INTO `sellbook` (`uname`, `email`, `contact`, `bname`, `author`, `category`, `mrp`, `msp`, `description`, `image`) VALUES
('sharvil', 'sharvil@gmail.com', '9869470569', 'MAMA MA', 'Mr Mami', 'Novel', '255', '200', 'Great novel to read\r\nJust try It', 'images/575539-1366x768-liverpool-wallpaper.jpg'),
('sharvil', 'sharvil@gmail.com', '9869470569', 'Techmax OOPM', 'Namrula', 'Educational', '235', '150', 'Sem3 IT  edition 2013 for sale', 'images/android.jpg'),
('madhur', 'madhur@gmail.com', '7789858697', 'Computer networks', 'tenenbaum', 'Reference Book', '550', '440', 'for sale ', 'images/compu.jpg'),
('sharvil', 'sharvil@gmail.com', '9869470569', 'Techmax Spa', 'Narula', 'Educational', '225', '150', 'sem 2 edition2013', 'images/computer.jpg'),
('jaidatt', 'aaa@ymail.com', '0226775757', 'zasad', 'ojw', 'Novel', '548', '447', 'pqqqqowrp', 'images/god-of-war-hd-widescreen-249628.jpg'),
('jaidatt', 'aaa@ymail.com', '0226775757', 'oop;', 'bloibl', 'Reference Book', '447', '440', 'jodjapw', 'images/image.jpg'),
('jaidatt', 'aaa@ymail.com', '0226775757', 'Jude DSA', 'jude', 'Educational', '235', '170', 'Jude sir notes sem 3 it DSA', 'images/ios.png'),
('yash jain', 'yash@yash.com', '98564832', 'Techmac', 'vsg', 'Reference Book', '123', '124', 'apjkfp[', 'images/mixing-of-waters-in-the-alaskan-gulf.jpg'),
('jaidatt', 'aaa@ymail.com', '0226775757', 'nbdloiabf', 'ibofdl', 'Others', '446', '447', 'dapppqo ieq', 'images/Wallpaper-HD.jpg'),
('jaidatt', 'aaa@ymail.com', '0226775757', 'mofjajfp', 'jofwl', 'Novel', '778', '447', 'asdwo', 'images/Wallpapers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `uname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `workplace` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`uname`, `age`, `gender`, `address`, `email`, `password`, `workplace`, `contact`) VALUES
('jaidatt', 99, 'male', '1111111111', 'aaa@ymail.com', 'jaidatt', 'hansraj', '0226775757'),
('jaigoti', 18, 'male', 'asdsdw', 'sharvilkadam@yahoo.in', 'jaimamama', 'st blaise', '8979874568'),
('jaikadam', 14, 'male', '201 mallika towewr,amboli ,andheri west', 'sharvilkadam@yahoo.in', 'jaidatt', 'st blaise', '9875687459'),
('madhur', 19, 'male', 'borivali', 'madhur@gmail.com', 'madhurjain', 'djscoe', '7789858697'),
('shar', 14, 'male', '201 mallika towewr,amboli ,andheri west', 'sharvilkadam786@gmail.com', 'wwwwww', 'st blaise', '9875687459'),
('sharvil', 18, 'male', 'awwworwavdassssssssss', 'sharvil@gmail.com', 'hhhhh', 'djscoe', '9869470569'),
('sharvilkadam', 18, 'male', '201 maillka tower', 'ashah@gmail.com', 'sharvil', 'dj sanghvi', '9874588689'),
('yash', 20, 'male', 'foppqw', 'yash@yahoo.in', 'yash', 'djscoe', '8888888888'),
('yash jain', 25, 'male', 'wkufywufg', 'yash@yash.com', '123456', 'yash', '98564832');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
