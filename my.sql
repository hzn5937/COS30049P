-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 12:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `coin` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_email`, `full_name`, `dob`, `user_address`, `phone_number`, `coin`) VALUES
('U02389', 'jessm', 'J3ss!c@', 'jessm@example.com', 'Jessica Martinez', '1990-07-08', '222 Pine St, Riverdale, USA', '555-987-6543', 50),
('U03245', 'jamesj', 'Jam3s!987', 'jamesj@example.com', 'James Johnson', '1979-06-15', '555 Elm St, Hillcrest, USA', '555-210-9876', 120.75),
('U03421', 'chrisd', 'Chri$123', 'chrisd@example.com', 'Christopher Davis', '1985-04-25', '333 Cedar St, Hillcrest, USA', '555-789-1234', 300.25),
('U04321', 'ethanb', '3th@nB!wn', 'ethanb@example.com', 'Ethan Brown', '1974-12-30', '999 Cedar St, Riverdale, USA', '555-789-1234', 180.25),
('U04567', 'michael82', 'M!ch@el82', 'michael82@example.com', 'Michael Smith', '1976-09-20', '888 Maple St, Lakeside, USA', '555-876-5432', 75.75),
('U05432', 'isabellas', '1s@b3ll@', 'isabellas@example.com', 'Isabella Smith', '1998-05-05', '888 Pine St, Mountainview, USA', '555-654-2109', 60),
('U05612', 'davidw', 'Dav1dW!lson', 'davidw@example.com', 'David Wilson', '1982-11-05', '111 Oak St, Springdale, USA', '555-654-2109', 200),
('U06789', 'jacobm', 'J@cob321', 'jacobm@example.com', 'Jacob Martinez', '1981-08-12', '777 Oak St, Springdale, USA', '555-321-7890', 210),
('U07689', 'emilyw', 'Em!lyW!ls0n', 'emilyw@example.com', 'Emily Wilson', '1987-10-25', '444 Cedar St, Lakeside, USA', '555-987-6543', 175.5),
('U08796', 'emilybrown', 'Em!lyB0wn', 'emilybrown@example.com', 'Emily Brown', '1995-05-10', '999 Elm St, Mountainview, USA', '555-321-7890', 100.25),
('U08976', 'sophiag', 'S0ph!@123', 'sophiag@example.com', 'Sophia Garcia', '1993-03-20', '666 Maple St, Riverside, USA', '555-876-5432', 90.25),
('U09834', 'sarahj', 'S@rah123', 'sarahj@example.com', 'Sarah Johnson', '1988-03-15', '777 Cedar St, Riverside, USA', '555-210-9876', 150.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
