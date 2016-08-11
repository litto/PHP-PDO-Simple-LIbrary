-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2016 at 12:36 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
-- Table structure for table `cms_employee`
--

CREATE TABLE IF NOT EXISTS `cms_employee` (
  `id` int(120) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `lkey` varchar(500) DEFAULT NULL,
  `image` varchar(500) NOT NULL DEFAULT 'user.png',
  `status` int(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `cms_employee`
--

INSERT INTO `cms_employee` (`id`, `fullname`, `email`, `password`, `lkey`, `image`, `status`) VALUES
(5, 'Andrew', 'andrew@gmail.com', 'q6V6oKvEw5+rqbLhosqqrQ==', '6777677', 'banner-96671501146648715010562563.png', 1),
(6, 'Justin', 'justin@gmail.com', '0M+bq6mc2aarppzpl9yScg==', '3878287', 'banner-2912bbee146649020910175291.png', 1),
(7, 'Litto', 'littochackomp@gmail.com', 's9LBrriJpuGgmovdoNmDrQ==', '433133', 'banner-7c2c48a3146649096410708064.jpg', 1),
(8, 'bertolomeu', 'binson@penieltech.com', 'q9Gd5aiJpuGYzIvPg8iRkw==', '6423569', 'user.png', 1),
(11, 'Peniel Technology', 'info@peniel.com', '123', '4212750', 'banner-ac2a728f147090454210395351.jpg', 1),
(12, 'JSInter', 'info@jsintl.com', '1LiL2ZjMkYM=', '1908298', 'banner-add5efc3147090470110656091.jpg', 1),
(13, 'Joseph', 'info@peniel.com', 't6SKodvJqm4=', '6966566', 'user.png', 1),
(15, 'Abhishek', 'info@abhi.com', 'rLh6oqfIkYs=', '2102901', 'banner-172ef5a9147091059211059668.jpg', 1),
(16, 'Jeremy', 'jeremy@gmail.com', 'tLiL2NvMkYc=', '9480952', 'banner-90b8e8ec147091105910436448.png', 1),
(17, 'Jeemon', 'jeemon@gmail.com', 'uLh6npjLqq0=', '9720782', 'banner-01259a0c147091115210738948.png', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
