-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 10:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'test', 'a@a.com', 'test', '2025-01-16 19:40:28'),
(2, 'test2', 'test2@test2.com', 'a', '2025-01-16 22:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `picture` varchar(255) NOT NULL,
  `archive` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `picture`, `archive`) VALUES
(1, 'Dates for tourist trips in 2025 – highlights on the Nordschleife and Grand Prix circuit', 'The Nürburgring has announced the dates for the 2025 tourist drives. From March to November, thousands of Nürburgring fans and visitors will once again have the opportunity to experience the legendary asphalt for themselves. For the first time, the barrier for the popular offer will open next year on March 8. In addition to various highlight dates on weekends and in the evening hours, there will then be the opportunity for a ride on the Nordschleife or the Grand Prix circuit almost every day.', '2025-01-17 19:39:46', '1-93.jpg', 'N'),
(2, 'A gift for the fans: the season opener in DNLS', 'The Christmas tree is aglow with lights, biscuits and a hot drink are ready and waiting, and the comfy sofa invites you to linger... Only one thing is missing for complete happiness: thrilling racing in the Green Hell. The time has finally come: the Digital Nürburgring Endurance Series kicks off on December 21 with the RAVENOL 3-hour race. At 11:45 a.m., VLN.de will start the livestream and provide answers to the most important questions: How will DTM champion Mirko Bortolotti fare in his debut in the DNLS in the Dörr Esports Lamborghini Huracán GT3 EVO? How will the Ford Mustang GT3 fare on the Nordschleife during its first kilometers of racing? Can last year\'s SimRC champions also shine in the GT4 class? And how close will it be in the SP3 with the Renault Clio?', '2025-01-15 20:17:10', '2-9.jpg', 'N'),
(4, 'Dream start for AMG Team Apex Racing at the DNLS opener', 'The season opener of the digital Nürburgring endurance series was a festival for every motorsport fan. In the RAVENOL 3-hour race, Alejandro Sánchez and Elias Seppänen in the Mercedes-AMG GT3 of AMG Team Apex finished just 0.27 seconds ahead. Last year\'s champion Norbi Kiss and Felix Quirmbach of BS+COMPETITION had to settle for second place. In third place, Sami-Matti Trogen and Vasilios Beletsiotis of AMG Team Williams completed a perfect triple victory for Mercedes-AMG. Apex Racing had two reasons to celebrate, as victory in the SP10 class also went to the virtual racing team from Great Britain. In the Cup 2 and SP3 classes, drivers from SCHERER eSPORT were at the top of the podium.', '2025-01-15 20:10:35', '4-92.jpg', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `recipient` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `recipient`, `type`, `date`, `is_read`) VALUES
(1, '\'CRASH HERE\' has been assigned to you. Please review and start working on it', 2, 'New Task Assigned', '2025-01-17', 0),
(2, '\'Dino TEST\' has been assigned to you. Please review and start working on it', 10, 'New Task Assigned', '2025-01-17', 1),
(3, '\'Support\' has been assigned to you. Please review and start working on it', 2, 'New Task Assigned', '2025-01-17', 0),
(4, '\'Exhaust too loud!\' has been assigned to you. Please review and start working on it', 120, 'New Task Assigned', '2025-01-17', 0),
(5, '\'24h of Nürburgring\' has been assigned to you. Please review and start working on it', 130, 'New Task Assigned', '2025-01-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` enum('pending','in_progress','completed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `assigned_to`, `due_date`, `status`, `created_at`) VALUES
(28, 'CRASH HERE', 'Pls come now!!', 2, '2025-01-17', 'pending', '2025-01-17 20:20:37'),
(29, 'Dino TEST', 'Radi li ovo?', 110, '2025-01-17', 'pending', '2025-01-17 20:20:59'),
(30, 'Support', 'One man here for flag assist!', 2, '2025-01-18', 'pending', '2025-01-17 20:25:25'),
(31, 'Exhaust too loud!', 'Get out BMW M4 CS', 120, '2025-01-17', 'pending', '2025-01-17 20:26:22'),
(32, '24h of Nürburgring', 'Saturday, June 21, 2025 at 4:00 PM – Sunday, June 22, 2025 at 4:00 PM', 130, '2025-09-12', 'pending', '2025-01-17 20:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','employee') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `role`, `created_at`) VALUES
(2, 'Ivica Corluka', 'carli', '$2y$10$1BFM20hyyvqvN6vnnyKDIenzXvb6I8EgSpLM.rCP.uvkIpdPcxNUq', 'employee', '2024-08-28 07:10:40'),
(7, 'Pero Peric', 'pero', '$2y$10$H6dAtbeVSapB4h6jtITPhOjRliPWVMPjsTXU6JSlBjTOSzzALxb22', 'employee', '2024-08-29 17:11:21'),
(10, 'Dino Besic', 'dino', '$2y$10$eyqYJOGBuQiM30KGvSDtqORfWvJnfshm61mErrjUX4t14zJ1SgdUG', 'admin', '2025-01-17 20:00:16'),
(100, 'Oliver', 'admin', '$2y$10$TnyR1Y43m1EIWpb0MiwE8Ocm6rj0F2KojE3PobVfQDo9HYlAHY/7O', 'admin', '2024-08-28 05:10:04'),
(110, 'Niki Lauda', 'lauda', '$2y$10$uMraoIhV1e3p4xq9dpsRZ.8yLU1UtCgySYpNsq7soqd1LidRsTNpy', 'employee', '2024-08-28 05:10:40'),
(120, 'Michael Schumacher', 'michael', '$2y$10$D3mfZm8/kueZJQa8bO7b8OAsoCL0pJo2lhXutjkw4kbC9HBWUUBaO', 'employee', '2024-08-29 15:11:21'),
(130, 'Misha Charoudin', 'misha', '$2y$10$h0CDjXGrSOjtCYRdHk8ljed5KkmFdmToIjzknEPjWkMJOGBRAyPN6', 'employee', '2024-08-29 15:11:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigned_to` (`assigned_to`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`assigned_to`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
