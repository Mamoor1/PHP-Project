CREATE DATABASE IF NOT EXISTS `imdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `imdb`;



CREATE TABLE `category` (
  `cid` int(90) NOT NULL,
  `categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `category` (`cid`, `categories`) VALUES
(1, 'Hollywood'),
(2, 'Bollywood'),
(3, 'Bangla'),
(4, 'Tamil'),
(5, 'Korean'),
(6, 'Japanese'),
(7, 'Chinese'),
(8, 'French'),
(9, 'Italian');


CREATE TABLE `genre` (
  `gid` int(100) NOT NULL,
  `Genres` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `genre` (`gid`, `Genres`) VALUES
(1, 'Action'),
(2, 'Horror'),
(3, 'Comedy'),
(4, 'Adventure'),
(5, 'Crime And Gangstars'),
(6, 'Romantic'),
(7, 'Science Fiction'),
(8, 'War'),
(9, 'Biographical');


CREATE TABLE `movielist` (
  `genres` int(100) NOT NULL,
  `categories` int(100) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `ReleaseYear` varchar(50) NOT NULL,
  `Artist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `movielist` (`genres`, `categories`, `Title`, `Duration`, `ReleaseYear`, `Artist`) VALUES
(1, 1, 'Mission Impossible - Rogue Nation', '2.30 hours', '2015', 'Tom Cruise'),
(2, 1, 'Conjuring-2', '2.00 hours', '2016', 'Patrick Wilson');

