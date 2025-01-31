-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2025 at 03:49 AM
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
-- Database: `lumen-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `created_at`, `updated_at`) VALUES
('2763bcb1-df31-11ef-9843-1cc10cbe0e5b', 'kangennnnsaakaa', 'tiaaa@gmail.com', 19, '2025-01-07 17:38:58', '2025-01-30 18:03:16'),
('6d866a5b-8c00-426d-917c-8fdf298bc754', 'halomarron5', 'halomarron5@gmail.com', 25, '2025-01-31 01:35:25', '2025-01-31 01:35:25'),
('8eefb724-c409-4c26-bb3b-e15ab58df671', 'tiamustika', 'tiamustika@gmail.com', 20, '2025-01-31 01:24:58', '2025-01-31 01:24:58'),
('9db2ace2-f34b-4a04-9064-16c3cfe7cb48', 'To Delete', 'delete@example.com', 22, '2025-01-31 01:24:58', '2025-01-31 01:24:58'),
('aaa85a3f-e155-41f7-bfef-40ff2e1cd147', 'bestpart', 'bestpart@gmail.com', 22, '2025-01-30 18:13:21', '2025-01-30 18:13:21'),
('b5a41621-c7d5-479c-b3e9-38a2c4dc68cc', 'morniggg', 'morningg@gmail.com', 21, '2025-01-31 01:25:23', '2025-01-31 01:25:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
