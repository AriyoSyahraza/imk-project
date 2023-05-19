-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 09:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imk-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `id_costs` int(3) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `cost_name` varchar(35) DEFAULT NULL,
  `total_kamar` int(2) DEFAULT NULL,
  `cost_type` enum('pria','wanita','campuran') DEFAULT NULL,
  `available_room` int(2) DEFAULT NULL,
  `cost_address` text DEFAULT NULL,
  `contact_person` varchar(13) DEFAULT NULL,
  `photo` longblob DEFAULT NULL,
  `night_limit` char(10) DEFAULT NULL,
  `long_add` text DEFAULT NULL,
  `lat_add` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_cost`
-- (See below for the actual view)
--
CREATE TABLE `detail_cost` (
`id_room` int(4)
,`id_costs` int(11)
,`room_size` char(10)
,`table_set` enum('yes','no')
,`wardrobe` enum('yes','no')
,`bed` enum('yes','no')
,`fan` enum('yes','no')
,`pam` enum('yes','no')
,`electricity` enum('yes','no')
,`ac` enum('yes','no')
,`wifi` enum('yes','no')
,`price` int(7)
,`cost_name` varchar(35)
,`total_kamar` int(2)
,`cost_type` enum('pria','wanita','campuran')
,`available_room` int(2)
,`cost_address` text
,`contact_person` varchar(13)
,`name` varchar(35)
,`email` varchar(35)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `full_cost`
-- (See below for the actual view)
--
CREATE TABLE `full_cost` (
`id_room` int(4)
,`id_costs` int(3)
,`id_users` int(11)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id_room` int(4) NOT NULL,
  `id_costs` int(11) DEFAULT NULL,
  `room_size` char(10) DEFAULT NULL,
  `table_set` enum('yes','no') DEFAULT NULL,
  `wardrobe` enum('yes','no') DEFAULT NULL,
  `bed` enum('yes','no') DEFAULT NULL,
  `fan` enum('yes','no') DEFAULT NULL,
  `pam` enum('yes','no') DEFAULT NULL,
  `electricity` enum('yes','no') DEFAULT NULL,
  `ac` enum('yes','no') DEFAULT NULL,
  `wifi` enum('yes','no') DEFAULT NULL,
  `price` int(7) DEFAULT NULL,
  `photo` longblob DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `pass` varchar(35) DEFAULT NULL,
  `level` enum('admin','owner','user') DEFAULT NULL,
  `name` varchar(35) DEFAULT NULL,
  `photo` longblob DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure for view `detail_cost`
--
DROP TABLE IF EXISTS `detail_cost`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_cost`  AS SELECT `r`.`id_room` AS `id_room`, `r`.`id_costs` AS `id_costs`, `r`.`room_size` AS `room_size`, `r`.`table_set` AS `table_set`, `r`.`wardrobe` AS `wardrobe`, `r`.`bed` AS `bed`, `r`.`fan` AS `fan`, `r`.`pam` AS `pam`, `r`.`electricity` AS `electricity`, `r`.`ac` AS `ac`, `r`.`wifi` AS `wifi`, `r`.`price` AS `price`, `c`.`cost_name` AS `cost_name`, `c`.`total_kamar` AS `total_kamar`, `c`.`cost_type` AS `cost_type`, `c`.`available_room` AS `available_room`, `c`.`cost_address` AS `cost_address`, `c`.`contact_person` AS `contact_person`, `u`.`name` AS `name`, `u`.`email` AS `email`, `r`.`created_at` AS `created_at`, `r`.`updated_at` AS `updated_at` FROM ((`rooms` `r` join `costs` `c` on(`r`.`id_costs` = `c`.`id_costs`)) join `users` `u` on(`c`.`id_users` = `u`.`id_users`)) ORDER BY `c`.`id_costs` ASC  ;

-- --------------------------------------------------------

--
-- Structure for view `full_cost`
--
DROP TABLE IF EXISTS `full_cost`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `full_cost`  AS SELECT `r`.`id_room` AS `id_room`, `c`.`id_costs` AS `id_costs`, `c`.`id_users` AS `id_users`, `r`.`created_at` AS `created_at`, `r`.`updated_at` AS `updated_at` FROM (`rooms` `r` join `costs` `c` on(`r`.`id_costs` = `c`.`id_costs`)) ORDER BY `c`.`id_costs` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id_costs`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_room`),
  ADD KEY `id_costs` (`id_costs`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costs`
--
ALTER TABLE `costs`
  MODIFY `id_costs` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_room` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `costs`
--
ALTER TABLE `costs`
  ADD CONSTRAINT `costs_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`id_costs`) REFERENCES `costs` (`id_costs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
