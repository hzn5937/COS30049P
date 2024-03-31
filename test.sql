-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 07:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `asset_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int(255) DEFAULT NULL,
  `publisher_id` int(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`asset_id`, `name`, `description`, `price`, `category_id`, `publisher_id`, `image_path`) VALUES
('AI00001', 'Subnautica', 'Subnautica is a survival action-adventure game set in an open world environment and played from a first-person perspective. The player controls the lone survivor of the crashed spacecraft known as Aurora, Ryley Robinson, as he is stranded on a remote ocea', '32.50', 1, 1, 'https://cdn.akamai.steamstatic.com/steam/apps/264710/header.jpg?t=1700522118'),
('AI00002', 'Lethal Company', 'Lethal Company is a cooperative survival horror video game created by Zeekerss. It released in early access in October 2023 and gained popularity on the Steam storefront. In Lethal Company, players obtain and sell scrap from abandoned, industrialized exom', '14.00', 2, 9, 'https://cdn.akamai.steamstatic.com/steam/apps/1966720/header.jpg?t=1700231592'),
('AI00003', 'Hogwarts Legacy', 'Hogwarts Legacy - Home. Hogwarts Legacy is an immersive, open-world action RPG set in the world first introduced in the Harry Potter books. For the first time, experience Hogwarts in the 1800s. Your character is a student who holds the key to an ancient s', '12.95', 3, 6, 'https://cdn.akamai.steamstatic.com/steam/apps/990080/header.jpg?t=1708720689'),
('AI00004', 'Sons Of The Forest', 'Sons of the Forest is a horror survival game and sequel to The Forest by Endnight Games, Ltd.. Sent to find a missing billionaire on a remote island, you find yourself in a cannibal-infested hellscape. Craft, build, and struggle to survive, alone or with ', '38.76', 4, 10, 'https://cdn.akamai.steamstatic.com/steam/apps/1326470/header.jpg?t=1708624856'),
('AI00005', 'No Man\'s Sky', 'No Man\'s Sky is an action-adventure survival game played from a first or third person perspective that allows players to engage in five principal activities: exploration, survival, combat, trading and base building.', '70.00', 5, 11, 'https://cdn.akamai.steamstatic.com/steam/apps/275850/header_alt_assets_19.jpg?t=1709306554'),
('AI00006', 'Baldur\'s Gate 3', 'Gather your party, and return to the Forgotten Realms in a tale of fellowship and betrayal, sacrifice and survival, and the lure of absolute power. Mysterious abilities are awakening inside you, drawn from a Mind Flayer parasite planted in your brain. Res', '91.00', 6, 12, 'https://cdn.akamai.steamstatic.com/steam/apps/1086940/header.jpg?t=1705604554'),
('AI00007', 'For Honor™', 'This is an action game in which players control one of three factions (Samurai, Vikings, Knights) in a protracted battle for dominance. As players complete mission objectives, they use swords, axes, and spears to kill enemy warriors in melee-style combat.', '49.55', 7, 13, 'https://cdn.akamai.steamstatic.com/steam/apps/304390/header.jpg?t=1710516613'),
('AI00008', 'Fallout 4', 'Fallout 4 is an open-world role-playing game developed by Bethesda Game Studios. In it, the player begins as a parent and spouse in the year 2077, but then must enter Vault 111 to survive the nuclear apocalypse.', '45.15', 1, 14, 'https://cdn.akamai.steamstatic.com/steam/apps/377160/header.jpg?t=1650909928'),
('AI00009', 'Left 4 Dead 2', 'This co-operative action horror FPS takes you and your friends through the cities, swamps and cemeteries of the Deep South, from Savannah to New Orleans across five expansive campaigns. You\'ll play as one of four new survivors armed with a wide and devast', '14.45', 3, 15, 'https://cdn.akamai.steamstatic.com/steam/apps/550/header.jpg?t=1675801903'),
('AI00010', 'Outlast 2', 'Outlast 2 is a first-person survival horror title set to take players on a wild ride through a rural area Arizona as they investigate the gruesome attempted murder of a pregnant woman found on the side of the road.', '38.12', 4, 16, 'https://cdn.akamai.steamstatic.com/steam/apps/414700/header.jpg?t=1618944453'),
('AI00011', 'Resident Evil Village', 'Resident Evil Village is a 2021 survival horror game developed and published by Capcom. It is the sequel to Resident Evil 7: Biohazard (2017) and the tenth main game of the Resident Evil series. Players control Ethan Winters, who searches for his kidnappe', '88.00', 6, 7, 'https://cdn.akamai.steamstatic.com/steam/apps/1196590/header.jpg?t=1701395391'),
('AI00012', 'The Binding of Isaac', 'The Binding of Isaac is a top-down dungeon crawler game, presented using two-dimensional sprites, in which the player controls Isaac or other unlockable characters as they explore the dungeons located in Isaac\'s basement.', '70.56', 5, 2, 'https://cdn.cloudflare.steamstatic.com/steam/apps/113200/header.jpg?t=1643480517'),
('AI00013', 'Counter Strike 2', 'For over two decades, Counter-Strike has offered an elite competitive experience, one shaped by millions of players from across the globe. And now the next chapter in the CS story is about to begin. This is Counter-Strike 2.', '20.00', 5, 1, 'https://cdn.akamai.steamstatic.com/steam/apps/730/header.jpg?t=1698860631'),
('AI00014', 'Dead by Daylight', 'Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught, tortured and killed.', '2.54', 2, 3, 'https://cdn.akamai.steamstatic.com/steam/apps/381210/header.jpg?t=1710268442'),
('AI00015', 'Plants vs. Zombies™ Garden Warfare 2: Deluxe Edition', 'In this hilarious, action-packed shooter, zombie leader Dr. Zomboss has strengthened his horde and rebuilt suburbia as a zombie utopia. But hope remains, because for the first time the plants are taking the offensive in an all-out attack to reclaim their ', '70.00', 1, 4, 'https://cdn.akamai.steamstatic.com/steam/apps/1922560/header.jpg?t=1707771436'),
('AI00016', 'Palworld', 'Palworld is an upcoming action-adventure, survival, and monster-taming game created and published by Japanese developer Pocket Pair. The game is set in an open world populated with animal-like creatures called Pals, which players can battle and capture to', '38.56', 3, 5, 'https://cdn.akamai.steamstatic.com/steam/apps/1623730/header.jpg?t=1707904340'),
('AI00017', 'Mortal Kombat 1', 'The game introduces a reborn Mortal Kombat Universe that has been created by the Fire God Liu Kang, featuring reimagined versions of iconic characters as they\'ve never been seen before, along with a new fighting system, game modes, bone krushing finishing', '12.90', 4, 6, 'https://cdn.akamai.steamstatic.com/steam/apps/1971870/header.jpg?t=1709136014'),
('AI00018', 'Street Fighter V', 'An arcade version exclusive to Japan was released by Taito in 2019. Similar to the previous games in the Street Fighter series, Street Fighter V features a side-scrolling fighting gameplay system. The game also introduces the V-Gauge, which builds as the ', '45.00', 5, 7, 'https://cdn.akamai.steamstatic.com/steam/apps/310950/header.jpg?t=1705467952'),
('AI00019', 'Street Fighter™ 6', 'Street Fighter 6 represents the next evolution of the Street Fighter, with three distinct game modes, including Fighting Ground, World Tour and Battle Hub. The experience also includes innovative new gameplay features, plus enhanced visuals for every aspe', '13.70', 5, 7, 'https://cdn.akamai.steamstatic.com/steam/apps/1364780/header_alt_assets_9.jpg?t=1709012771'),
('AI00020', 'Hollow Knight', 'Hollow Knight is a classically styled 2D action adventure across a vast interconnected world. Explore twisting caverns, ancient cities and deadly wastes, battle tainted creatures and befriend bizarre bugs and solve ancient mysteries at the kingdom\'s heart', '16.50', 1, 8, 'https://cdn.akamai.steamstatic.com/steam/apps/367520/header.jpg?t=1695270428'),
('AI00021', 'Detroit: Become Human', 'Set in Detroit City during the year 2038, the city has been revitalized by the invention and introduction of Androids into everyday life. But when Androids start behaving as if they are alive, events begin to spin out of control.', '66.00', 6, 17, 'https://cdn.akamai.steamstatic.com/steam/apps/1222140/header.jpg?t=1667468479');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Adventure'),
(2, 'Indie'),
(3, 'Action'),
(4, 'Casual'),
(5, 'Strategy'),
(6, 'RPG'),
(7, 'Simulation');

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `exchange_section_id` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `exchange_date` datetime NOT NULL,
  `exchange_amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(255) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_address`) VALUES
(1, 'Unknown Worlds Entertainment', '1126 Folsom St 3, San Francisco, California 94103, US'),
(2, 'Edmund McMillen', '385 Beel Dr, Santa Cruz, CA 95060'),
(3, 'Behaviour Interactive Inc.', 'Montréal, 6666 Rue Saint-Urbain, Canada'),
(4, 'Electronic Arts', '209 Redwood Shores Parkway, Redwood City, CA 94065, USA'),
(5, 'Pocketpair', 'Kyoto, Japan'),
(6, 'Warner Bros. Games', '4000 Warner Blvd, Burbank, CA, 91522 US'),
(7, 'CAPCOM Co., Ltd.', '10000 Washington Blvd., Suite 250, Culver City, California, 90232, U.S.A'),
(8, 'Team Cherry', 'Adelaide, South Australia'),
(9, 'Zeekerss', ''),
(10, 'Newnight', ''),
(11, 'Hello Games', 'Dolphin House, 3 North Street, Guildford, Surrey, England, GU1 4AA'),
(12, 'Larian Studios', 'Ghent, Belgium'),
(13, 'Ubisoft', 'Saint-Mandé, 2 Av. Pasteur, France'),
(14, 'Bethesda Softworks', '1370 Piccard Drive, Suite 120 Rockville, MD 20850'),
(15, 'Valve', 'Bellevue, P.O. Box 1688, United States'),
(16, 'Red Barrels', '329 De La Commune Ouest, Montreal, Quebec H2Y 2E1, CA'),
(17, 'Quantic Dream', '30 rue Raoul Wallenberg, 75019 Paris, France');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `purchase_id` int(11) NOT NULL,
  `purchased_date` date DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `game_id` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`purchase_id`, `purchased_date`, `price`, `user_id`, `game_id`) VALUES
(4, '2024-03-30', '14.00', 1, 'AI00002');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `asset_id` varchar(255) NOT NULL,
  `transaction_date` date NOT NULL,
  `total_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `coin` float NOT NULL,
  `purchase_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_email`, `full_name`, `age`, `interest`, `user_address`, `phone_number`, `coin`, `purchase_id`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'Jessica Martinez', 20, 'Photography', '222 Pine St, Riverdale, USA', '555-987-6543', 22, NULL),
(2, 'test', 'test', 'test@example.com', 'James Johnson', 53, 'Travel', '555 Elm St, Hillcrest, USA', '555-210-9876', 120.75, NULL),
(3, 'chrisd', 'Chri$123', 'chrisd@example.com', 'Christopher Davis', 35, 'Fashion', '333 Cedar St, Hillcrest, USA', '555-789-1234', 300.25, NULL),
(4, 'ethanb', '3th@nB!wn', 'ethanb@example.com', 'Ethan Brown', 51, 'Gardening', '999 Cedar St, Riverdale, USA', '555-789-1234', 180.25, NULL),
(5, 'michael82', 'M!ch@el82', 'michael82@example.com', 'Michael Smith', 27, 'Gardening', '888 Maple St, Lakeside, USA', '555-876-5432', 75.75, NULL),
(6, 'isabellas', '1s@b3ll@', 'isabellas@example.com', 'Isabella Smith', 18, 'Photography', '888 Pine St, Mountainview, USA', '555-654-2109', 60, NULL),
(7, 'davidw', 'Dav1dW!lson', 'davidw@example.com', 'David Wilson', 43, 'Cooking', '111 Oak St, Springdale, USA', '555-654-2109', 200, NULL),
(8, 'jacobm', 'J@cob321', 'jacobm@example.com', 'Jacob Martinez', 36, 'Photography', '777 Oak St, Springdale, USA', '555-321-7890', 210, NULL),
(9, 'emilyw', 'Em!lyW!ls0n', 'emilyw@example.com', 'Emily Wilson', 37, 'Travel', '444 Cedar St, Lakeside, USA', '555-987-6543', 175.5, NULL),
(10, 'emilybrown', 'Em!lyB0wn', 'emilybrown@example.com', 'Emily Brown', 57, 'Sports', '999 Elm St, Mountainview, USA', '555-321-7890', 100.25, NULL),
(11, 'sophiag', 'S0ph!@123', 'sophiag@example.com', 'Sophia Garcia', 52, 'Reading', '666 Maple St, Riverside, USA', '555-876-5432', 90.25, NULL),
(12, 'sarahj', 'S@rah123', 'sarahj@example.com', 'Sarah Johnson', 20, 'Fashion', '777 Cedar St, Riverside, USA', '555-210-9876', 150.5, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`asset_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`exchange_section_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `asset_id` (`asset_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_purchase_id` (`purchase_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `asset_ibfk_1` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`),
  ADD CONSTRAINT `asset_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `exchange`
--
ALTER TABLE `exchange`
  ADD CONSTRAINT `exchange_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`asset_id`) REFERENCES `asset` (`asset_id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_purchase_id` FOREIGN KEY (`purchase_id`) REFERENCES `purchase_history` (`purchase_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
