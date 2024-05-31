-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 02:30 PM
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
-- Database: `autoperformance`
--

-- --------------------------------------------------------

--
-- Table structure for table `brakes`
--

CREATE TABLE `brakes` (
  `part_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brakes`
--

INSERT INTO `brakes` (`part_id`, `name`, `brand`, `price`, `description`, `category_id`, `image_url`) VALUES
(1, 'Brake Pad Set', 'Example Brand A', 49.99, 'High-performance brake pads for improved stopping power.', 1, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/b1.webp?token=GHSAT0AAAAAACRAS763CB3I4KLJEYTHKKHSZRDX3CA'),
(2, 'Brake Rotor', 'Example Brand B', 79.99, 'Cross-drilled and slotted brake rotors for enhanced cooling and performance.', 1, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/b2.webp?token=GHSAT0AAAAAACRAS762AOY4XSZHER6QHZJYZRDX3RQ'),
(3, 'Brake Caliper', 'Example Brand C', 129.99, 'Upgraded brake calipers with improved clamping force for better braking.', 1, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/b3.jpg?token=GHSAT0AAAAAACRAS762D62WXRC37JY5Z5LSZRDX32Q'),
(4, 'Brake Line Kit', 'Example Brand D', 99.99, 'Stainless steel brake lines for improved brake pedal feel and response.', 1, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/b4.jpg?token=GHSAT0AAAAAACRAS763G567RDX4ZTZXJRJ6ZRDX4BA');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Brakes'),
(2, 'Suspension'),
(3, 'Turbo'),
(4, 'Performance Gauges'),
(5, 'Engine'),
(6, 'Styling');

-- --------------------------------------------------------

--
-- Table structure for table `cooling`
--

CREATE TABLE `cooling` (
  `part_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cooling`
--

INSERT INTO `cooling` (`part_id`, `name`, `brand`, `price`, `description`, `image_url`) VALUES
(1, 'Mishimoto  Radiator', 'Mishimoto', 349.95, 'High-performance aluminum radiator designed to improve cooling efficiency and engine reliability. Features a dual-core design for enhanced cooling capacity and durability.', 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/co1.webp?token=GHSAT0AAAAAACRAS7626AYVQT3VGN4A2BUKZRDYLKA'),
(2, 'Koyo Racing Radiator', 'Koyo Racing', 299.99, 'Lightweight and high-performance aluminum radiator engineered for racing applications. Utilizes high-quality materials and advanced design for superior cooling performance under extreme conditions.', 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/co2.jpg?token=GHSAT0AAAAAACRAS763SGZJH3HSCNIOHPKGZRDYLSQ'),
(3, 'CSF Intercooler', 'CSF', 499.00, 'High-efficiency aluminum intercooler designed to reduce intake air temperatures and increase horsepower. Features a bar-and-plate core design for optimal heat dissipation and minimal pressure drop.', 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/co3.jpg?token=GHSAT0AAAAAACRAS763DEQYOXUIFDPOXAVQZRDYLYA'),
(4, 'Performance Oil Cooler', 'Mocal', 449.95, 'Comprehensive oil cooler kit designed to improve engine oil cooling and maintain optimal oil temperature during high-performance driving. Includes a high-capacity oil cooler, braided stainless steel lines, and precision-engineered fittings.', 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/co4.jpg?token=GHSAT0AAAAAACRAS762ZVNU37ZXNR3BF6P2ZRDYL6Q');

-- --------------------------------------------------------

--
-- Table structure for table `engine`
--

CREATE TABLE `engine` (
  `part_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engine`
--

INSERT INTO `engine` (`part_id`, `name`, `brand`, `price`, `description`, `category_id`, `image_url`) VALUES
(2, 'Engine Block', 'Example Brand A', 1500.00, 'High-quality engine block for increased durability and performance.', 5, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/e1.jpg?token=GHSAT0AAAAAACRAS762JNBLXNDHXV667CTIZRDX4LQ'),
(3, 'Cylinder Head', 'Example Brand B', 1200.00, 'Precision-engineered cylinder head for optimal airflow and combustion efficiency.', 5, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/e2.jpg?token=GHSAT0AAAAAACRAS7633235NY3GMK6EDTAMZRDX45Q'),
(4, 'Camshaft Kit', 'Example Brand C', 800.00, 'Performance camshaft kit for increased horsepower and torque.', 5, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/e3.png?token=GHSAT0AAAAAACRAS763X647EAEBFPM4UWWYZRDX5GQ'),
(5, 'Piston Set', 'Example Brand D', 600.00, 'High-performance piston set for improved engine reliability and power output.', 5, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/e4.webp?token=GHSAT0AAAAAACRAS762F6KGQLDNESIKQCMIZRDX5MA');

-- --------------------------------------------------------

--
-- Table structure for table `exhaustsystems`
--

CREATE TABLE `exhaustsystems` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exhaustsystems`
--

INSERT INTO `exhaustsystems` (`id`, `name`, `description`, `price`, `image_url`) VALUES
(1, 'ThunderFlow', 'Amplify your engine\'s roar with ThunderFlow\'s mandrel-bent pipes and free-flow mufflers, delivering a deep, powerful tone and increased horsepower.', 899.99, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/ex1.jpg?token=GHSAT0AAAAAACRAS7634OSY24XQ7E3M4RP2ZRDX5VA'),
(2, 'BlazeBack Sport ', 'BlazeBack\'s tuned exhaust note enhances performance while minimizing drone, offering enthusiasts the perfect balance of power and refinement.', 749.99, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/ex2.webp?token=GHSAT0AAAAAACRAS763M7T2OOCHMCNY6UT6ZRDX54Q'),
(3, 'CarbonBurn Titanium', 'Crafted from lightweight titanium with carbon fiber accents, CarbonBurn\'s spine-tingling exhaust note and improved flow redefine performance and aesthetics.', 1299.99, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/ex3.webp?token=GHSAT0AAAAAACRAS762JPOJPHJUNIWGAJPOZRDX6BQ');

-- --------------------------------------------------------

--
-- Table structure for table `gauges`
--

CREATE TABLE `gauges` (
  `part_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gauges`
--

INSERT INTO `gauges` (`part_id`, `name`, `brand`, `price`, `description`, `category_id`, `image_url`) VALUES
(1, 'Boost Gauge', 'Example Brand A', 99.99, 'High-quality boost gauge for monitoring turbocharger pressure.', 4, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/g1.webp?token=GHSAT0AAAAAACRAS7627PFE4DCHJX5VTHBAZRDX6JQ'),
(2, 'Oil Pressure Gauge', 'Example Brand B', 89.99, 'Accurate oil pressure gauge for monitoring engine health and performance.', 4, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/g3.jpg?token=GHSAT0AAAAAACRAS763UXROQZPOYCEQNG3MZRDX65A'),
(3, 'Water Temperature Gauge', 'Example Brand C', 79.99, 'Reliable water temperature gauge for monitoring engine coolant temperature.', 4, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/g2.webp?token=GHSAT0AAAAAACRAS763EMQZQVT7PNLWC6F2ZRDX6QQ'),
(4, 'A/F Ratio Gauge', 'Example Brand D', 109.99, 'Wideband air/fuel ratio gauge for precise tuning and monitoring.', 4, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/g4.jpg?token=GHSAT0AAAAAACRAS7637Z565BWRKJRBNKW4ZRDX7FA');

-- --------------------------------------------------------

--
-- Table structure for table `styling`
--

CREATE TABLE `styling` (
  `part_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `styling`
--

INSERT INTO `styling` (`part_id`, `name`, `brand`, `price`, `description`, `category_id`, `image_url`) VALUES
(2, 'Body Kit', 'Example Brand A', 1200.00, 'Full body kit for a sleek and aggressive appearance.', 6, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/bdkt.webp?token=GHSAT0AAAAAACRAS762IXMHBPQCKTHQGDMOZRDX7QA'),
(3, 'Carbon Fiber Spoiler', 'Example Brand B', 600.00, 'Carbon fiber spoiler for improved aerodynamics and aesthetics.', 6, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/carbon.webp?token=GHSAT0AAAAAACRAS763XIULH5FCRAE2D3WQZRDX7YA'),
(4, 'Side Skirts', 'Example Brand C', 400.00, 'Enhanced side skirts for a sportier look and better airflow.', 6, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/c1.png?token=GHSAT0AAAAAACRAS76337NMXJDOWT7LCRCWZRDYARQ'),
(5, 'Front Lip', 'Example Brand D', 300.00, 'Front lip spoiler to reduce front-end lift and enhance style.', 6, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/flc.jpg?token=GHSAT0AAAAAACRAS7625S5H2YPIVRHDHCE6ZRDYABQ');

-- --------------------------------------------------------

--
-- Table structure for table `suspension`
--

CREATE TABLE `suspension` (
  `part_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suspension`
--

INSERT INTO `suspension` (`part_id`, `name`, `brand`, `price`, `description`, `category_id`, `image_url`) VALUES
(1, 'Coilover Suspension Kit', 'Example Brand X', 999.99, 'Adjustable coilover suspension kit for customizable ride height and damping.', 2, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/su1.webp?token=GHSAT0AAAAAACRAS762DF7AFZFNXT54LTGYZRDYA5A'),
(2, 'Lowering Springs', 'Example Brand Y', 199.99, 'Progressive-rate lowering springs for improved handling and appearance.', 2, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/su2.jpg?token=GHSAT0AAAAAACRAS762HOTKRC35AT6XL5BOZRDYBEA'),
(3, 'Strut Tower Brace', 'Example Brand Z', 149.99, 'Front strut tower brace to reduce chassis flex and improve handling.', 2, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/su4.jpg?token=GHSAT0AAAAAACRAS763MQFFMUQBG6RPY3ZMZRDYCGA'),
(4, 'Sway Bar Kit', 'Example Brand W', 249.99, 'Upgraded sway bar kit for reduced body roll and improved cornering stability.', 2, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/su3.webp?token=GHSAT0AAAAAACRAS762VF4FQYFKZCFR45DYZRDYBTQ');

-- --------------------------------------------------------

--
-- Table structure for table `turbo`
--

CREATE TABLE `turbo` (
  `part_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turbo`
--

INSERT INTO `turbo` (`part_id`, `name`, `brand`, `price`, `description`, `category_id`, `image_url`) VALUES
(1, 'Turbocharger Kit', 'Example Brand A', 1999.99, 'Complete turbocharger kit for significant horsepower and torque gains.', 3, 'https://media.istockphoto.com/id/1203402741/photo/car-turbocharger-isolated-on-white-background-turbo-engine.jpg?s=1024x1024&w=is&k=20&c=kdG1oVN1F_aXDhFyt6DcPT_kRaCnrJX_af-BJJYnKiY='),
(2, 'Intercooler Upgrade', 'Example Brand B', 299.99, 'Upgraded intercooler for improved cooling efficiency and performance enhancments.', 3, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/up.jpg?token=GHSAT0AAAAAACRAS763SE4CJY52UXJRMTE2ZRDY74Q'),
(3, 'Wastegate Actuator', 'Example Brand C', 149.99, 'High-performance wastegate actuator for precise boost control and display.', 3, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/wga.webp?token=GHSAT0AAAAAACRAS763ZXD4OZLJL4VU3MZGZRDZBLQ'),
(4, 'Blow-Off Valve', 'Example Brand D', 99.99, 'Upgraded blow-off valve for improved turbo response, durability and loud sounds.', 3, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/bov.webp?token=GHSAT0AAAAAACRAS762MJNCY5X7TXJ7WJ7IZRDY6NQ'),
(5, 'Turbo Plus', 'Brand 5', 59.99, 'This turbocharger provides increased horsepower and torque for high-performance vehicles.', NULL, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/t4.jpg?token=GHSAT0AAAAAACRAS762TSMWP2ZA35OLVTKSZRDY7HA'),
(6, 'Eco Turbo', 'Brand 6', 79.99, 'Enhance your vehicle\'s performance with this turbocharger, designed for improved fuel efficiency and power.', NULL, 'https://raw.githubusercontent.com/AdnanKabbani01/images-web-project/main/t2.jpg?token=GHSAT0AAAAAACRAS763Q2PNYDVVLN2575JGZRDY5JA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 19524125, 'adnan', '$2y$10$MoH1Bzwey8uMzbxyaTO46eWcFA3qz.kekVx.9pUkxXMt1btz4TFeO', '2024-03-08 15:14:25'),
(2, 6642879, 'adnan_kabbani', '$2y$10$GeOkxo3BFsfEsXodLF30IOEZTUL1TtqjuaXXfY6NOddeEEramVcvG', '2024-03-08 20:30:38'),
(3, 5301, 'ak', '$2y$10$VuBubSGghacpfCPz7EskSO39oy8qKUaOoHLeTtRBE0WeGe06sY1Wi', '2024-03-18 14:43:58'),
(4, 4072387336058806, 'ak', '$2y$10$UHpEv1j8Jkei73ylLIevf.zUoFTkAZRdYVn9Pa8G/3sE6/erfQYc.', '2024-03-18 14:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`cart_id`, `user_id`, `product_name`, `product_price`) VALUES
(210, 19524125, 'Water Temperature Gauge', 79.99),
(211, 19524125, 'BlazeBack Sport ', 749.99),
(212, 19524125, 'BlazeBack Sport ', 749.99),
(213, 19524125, 'BlazeBack Sport ', 749.99),
(214, 19524125, 'BlazeBack Sport ', 749.99),
(215, 19524125, 'BlazeBack Sport ', 749.99),
(216, 19524125, 'BlazeBack Sport ', 749.99),
(217, 19524125, 'BlazeBack Sport ', 749.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brakes`
--
ALTER TABLE `brakes`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cooling`
--
ALTER TABLE `cooling`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `engine`
--
ALTER TABLE `engine`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `exhaustsystems`
--
ALTER TABLE `exhaustsystems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gauges`
--
ALTER TABLE `gauges`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `styling`
--
ALTER TABLE `styling`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `suspension`
--
ALTER TABLE `suspension`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `turbo`
--
ALTER TABLE `turbo`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brakes`
--
ALTER TABLE `brakes`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cooling`
--
ALTER TABLE `cooling`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `engine`
--
ALTER TABLE `engine`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exhaustsystems`
--
ALTER TABLE `exhaustsystems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gauges`
--
ALTER TABLE `gauges`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `styling`
--
ALTER TABLE `styling`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suspension`
--
ALTER TABLE `suspension`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turbo`
--
ALTER TABLE `turbo`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brakes`
--
ALTER TABLE `brakes`
  ADD CONSTRAINT `brakes_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `engine`
--
ALTER TABLE `engine`
  ADD CONSTRAINT `engine_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `gauges`
--
ALTER TABLE `gauges`
  ADD CONSTRAINT `gauges_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `styling`
--
ALTER TABLE `styling`
  ADD CONSTRAINT `styling_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `suspension`
--
ALTER TABLE `suspension`
  ADD CONSTRAINT `suspension_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `turbo`
--
ALTER TABLE `turbo`
  ADD CONSTRAINT `turbo_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
