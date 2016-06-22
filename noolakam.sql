-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 04:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noolakam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_books`
--

CREATE TABLE `tb_books` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_owner_id` int(11) NOT NULL,
  `book_owner_name` varchar(50) NOT NULL,
  `book_language` varchar(10) NOT NULL,
  `book_available_status` varchar(5) NOT NULL,
  `created_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_books`
--

INSERT INTO `tb_books` (`book_id`, `book_title`, `book_author`, `book_owner_id`, `book_owner_name`, `book_language`, `book_available_status`, `created_ts`) VALUES
(1, 'Five point someone', 'Chetan Bhagat', 122285, 'Kuber', 'English', 'Yes', '2016-06-10 02:36:06'),
(2, 'The immortals of Meluha', 'Amish', 122285, 'Kuber', 'English', 'Yes', '2016-06-10 02:36:10'),
(3, 'Computere oru kathai sollu', 'Sujatha', 209476, 'ArunKumar', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(4, 'Karuppu Kuthirai', 'Sujatha', 209476, 'ArunKumar', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(5, 'Eleven Minutes', 'Paulo Coelho', 250244, 'Swapnil', 'English', 'Yes', '2016-06-10 02:30:49'),
(6, '10 Rules of Happiness', 'Mridula Agarwal', 196207, 'Sugaprakash', 'English', 'Yes', '2016-02-21 18:30:00'),
(7, 'The seven spiritual laws of Success', 'Deepak chopra', 265698, 'Rekka', 'English', 'Yes', '2016-02-21 18:30:00'),
(8, 'Sea of Poppies', 'Amitav Ghosh', 192342, 'Rathna', 'English', 'No', '2016-06-14 02:43:42'),
(9, 'Flight of the Buffalo', 'James & Ralph', 253413, 'Hemalatha', 'English', 'Yes', '2016-02-21 18:30:00'),
(10, 'Kannathasan KavidhaigaL', 'Kannadhasan', 209476, 'ArunKumar', 'Tamil', 'No', '2016-06-14 02:45:24'),
(11, 'Vasanth Vasanth', 'Sujatha', 209476, 'ArunKumar', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(12, 'Bharathiyar kavithaigal', 'Bharathiyar', 253413, 'Hemalatha', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(13, 'Doctors', 'Erich Segal', 122285, 'Kuber', 'English', 'Yes', '2016-02-21 18:30:00'),
(14, 'Harry potter and the Goblet of Fire', 'J K Rowling', 209468, 'Santhosh', 'English', 'Yes', '2016-02-21 18:30:00'),
(15, 'Harry Potter and the half blood Prince', 'J K Rowling', 209468, 'Santhosh', 'English', 'Yes', '2016-02-21 18:30:00'),
(16, 'A Matter of Honour', 'Jeffrey Archer', 281249, 'Usha', 'English', 'Yes', '2016-02-21 18:30:00'),
(17, 'The Day of the Jackel', 'Frederick Forsyth', 281249, 'Usha', 'English', 'Yes', '2016-02-21 18:30:00'),
(18, 'Man''s Search for meaning', 'Viktor E.Frankl', 305341, 'Harshitha', 'English', 'Yes', '2016-02-21 18:30:00'),
(19, 'Malai mayangukira Neram', 'RamaniChandran', 284598, 'Priya', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(20, 'Crime and Punishment', 'Fyodor Dostoevsky', 209454, 'Guruchandran', 'English', 'Yes', '2016-02-21 18:30:00'),
(21, 'Ki Mu Ki Pi', 'Mathan', 209476, 'ArunKumar', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(22, 'Harry Potter and prisoner of Azhban', 'J K Rowling', 209468, 'Santhosh', 'English', 'Yes', '2016-02-21 18:30:00'),
(23, 'Gopalla Gramam', 'Ki Rajanarayanan', 0, 'Karthika R7', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(24, 'Sherlock Holmes - Volume I', 'Sir Arthur Conan Doyle', 0, 'Surya', 'English', 'Yes', '2016-02-21 18:30:00'),
(25, 'Harry Potter and the Deathly Hollows', 'J K Rowling', 0, 'Surya', 'English', 'Yes', '2016-02-21 18:30:00'),
(26, 'The DaVinci Code', 'Dan Brown', 0, 'Dharani', 'English', 'Yes', '2016-02-21 18:30:00'),
(27, 'Kane and Abel', 'Jeffrey Archer', 0, 'Dharani', 'English', 'Yes', '2016-02-21 18:30:00'),
(28, 'Deception Point', 'Dan Brown', 0, 'Harish CPI', 'English', 'Yes', '2016-02-21 18:30:00'),
(29, 'Captain Cool - The MS Dhoni Story', 'Gulu Ezekiel', 0, 'Bala', 'English', 'Yes', '2016-02-21 18:30:00'),
(30, 'Vaanam thottu vidum dhooramdhaan', 'Vairamuthu', 0, 'Dhivya DW', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(31, 'Five point someone 2', 'Chetan Bhagat', 0, 'Radha', 'English', 'Yes', '2016-02-21 18:30:00'),
(32, 'The witch of Portobello', 'Paulo Coelho', 0, 'Radha', 'English', 'Yes', '2016-02-21 18:30:00'),
(33, 'If God was a Banker', 'Ravi Subramanian', 0, 'Radha', 'English', 'Yes', '2016-02-21 18:30:00'),
(34, 'The 3 Mistaked of my life', 'Chetan Bhagat', 0, 'Radha', 'English', 'Yes', '2016-02-21 18:30:00'),
(35, 'The Innocent Man', 'John Grisham', 0, 'Radha', 'English', 'Yes', '2016-02-21 18:30:00'),
(36, 'The God of Small Things', 'Arundhati Roy', 0, 'Radha', 'English', 'Yes', '2016-02-21 18:30:00'),
(37, 'The Throne of Fire', 'Rick Riordan', 0, 'Rakesh', 'English', 'Yes', '2016-02-21 18:30:00'),
(38, 'Heroes of Olympus - The House of Hades', 'Rick Riordan', 0, 'Rakesh', 'English', 'Yes', '2016-02-21 18:30:00'),
(39, 'The Serpent''s Shadow', 'Rick Riordan', 0, 'Rakesh', 'English', 'Yes', '2016-02-21 18:30:00'),
(40, 'Kaalaveliyil oru jeevanathi-vaanavarayar varalaaru', 'Arunachala Gounder', 139509, 'Gayathri S', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(41, 'Oriravu oru rayilil', 'Sujatha', 401550, 'Suganya Rajendran', 'Tamil', 'Yes', '2016-02-21 18:30:00'),
(42, 'Sivakamiyin Sabadham', 'Kalki', 196207, 'suga', 'Tamil', 'Yes', '2016-02-21 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transactions`
--

CREATE TABLE `tb_transactions` (
  `tran_id` int(11) NOT NULL,
  `tran_book_id` int(11) NOT NULL,
  `tran_book_title` text NOT NULL,
  `tran_borrower_id` int(11) NOT NULL,
  `tran_borrower_name` text NOT NULL,
  `tran_issued_date` date NOT NULL,
  `tran_returned_date` date NOT NULL,
  `tran_updated_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_transactions`
--

INSERT INTO `tb_transactions` (`tran_id`, `tran_book_id`, `tran_book_title`, `tran_borrower_id`, `tran_borrower_name`, `tran_issued_date`, `tran_returned_date`, `tran_updated_ts`) VALUES
(1, 2, 'The immortals of Meluha', 123456, 'suganya', '2016-06-04', '2016-06-09', '2016-06-10 02:01:47'),
(2, 5, 'Eleven Minutes', 123456, 'abi', '2016-06-04', '2016-06-10', '2016-06-10 02:30:49'),
(3, 8, 'Sea of Poppies', 223446, 'Krish', '2016-06-08', '0000-00-00', '2016-06-14 02:43:42'),
(4, 10, 'Kannathasan KavidhaigaL', 456123, 'Suresh', '2016-06-01', '0000-00-00', '2016-06-14 02:45:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_books`
--
ALTER TABLE `tb_books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_title` (`book_title`);

--
-- Indexes for table `tb_transactions`
--
ALTER TABLE `tb_transactions`
  ADD PRIMARY KEY (`tran_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_books`
--
ALTER TABLE `tb_books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tb_transactions`
--
ALTER TABLE `tb_transactions`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
