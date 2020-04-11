-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 12:14 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `ques` varchar(500) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `ques`, `ans`, `opt1`, `opt2`, `opt3`, `opt4`) VALUES
(1, 'React is mainly for building ___', 'User interface', 'Database', 'Connectivity', 'User interface', 'Design Platform'),
(2, 'Lifecycle methods are mainly used ___', 'to keep track of event history', 'to keep track of event history', 'to enhance components', 'freeup resources', 'none of the options'),
(3, '____ can be done while more than one element needs to be returned from a component.', 'Wrapping', 'Abstraction', 'Packing', 'Insulation', 'Wrapping'),
(4, 'How do you access a function fetch() from a h1 element in JSX?', '<h1>{fetch()}</h1>', '<h1>{fetch()}</h1>', '<h1>${fetch()}</h1>', '<h1>{fetch}</h1>', '<h1>${fetch}</h1>'),
(5, 'Which method in a React Component should you override to stop the component from updating?', 'shouldComponentUpdate', 'willComponentUpdate', 'shouldComponentUpdate', 'componentDidUpdate', 'componentDidMount');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `name`, `email`, `score`) VALUES
(5, 'Bishwajeet', 'bishwajeetk003@gmail.com', 2),
(6, 'Bishwajeet', 'bishwajeetk003@gmail.com', 2),
(7, 'Bishwajeet', 'bishwajeetk003@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
