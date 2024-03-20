-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 10:18 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `asset_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `publisher_id` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`asset_id`, `name`, `description`, `price`, `category_id`, `publisher_id`, `image_path`) VALUES
('1', 'Subnautica', 'Subnautica is a survival action-adventure game set in an open world environment and played from a first-person perspective. The player controls the lone survivor of the crashed spacecraft known as Aurora, Ryley Robinson, as he is stranded on a remote ocean planet known as 4546B in the Galaxy of Andromeda.', 385000.00, '1', '1', 'https://cdn.akamai.steamstatic.com/steam/apps/264710/header.jpg?t=1700522118'),
('10', 'Lethal Company', 'Lethal Company is a cooperative survival horror video game created by Zeekerss. It released in early access in October 2023 and gained popularity on the Steam storefront. In Lethal Company, players obtain and sell scrap from abandoned, industrialized exomoons while avoiding traps, environmental hazards, and monsters.', 142000.00, '6', '9', 'https://cdn.akamai.steamstatic.com/steam/apps/1966720/header.jpg?t=1700231592'),
('11', 'Hogwarts Legacy', 'Hogwarts Legacy - Home. Hogwarts Legacy is an immersive, open-world action RPG set in the world first introduced in the Harry Potter books. For the first time, experience Hogwarts in the 1800s. Your character is a student who holds the key to an ancient secret that threatens to tear the wizarding world apart.', 12900000.00, '7', '6', 'https://cdn.akamai.steamstatic.com/steam/apps/990080/header.jpg?t=1708720689'),
('12', 'Sons Of The Forest', 'Sons of the Forest is a horror survival game and sequel to The Forest by Endnight Games, Ltd.. Sent to find a missing billionaire on a remote island, you find yourself in a cannibal-infested hellscape. Craft, build, and struggle to survive, alone or with friends.', 385000.00, '8', '10', 'https://cdn.akamai.steamstatic.com/steam/apps/1326470/header.jpg?t=1708624856'),
('13', 'No Man\'s Sky', 'No Man\'s Sky is an action-adventure survival game played from a first or third person perspective that allows players to engage in five principal activities: exploration, survival, combat, trading and base building.', 705000.00, '5', '11', 'https://cdn.akamai.steamstatic.com/steam/apps/275850/header_alt_assets_19.jpg?t=1709306554'),
('14', 'Baldur\'s Gate 3', 'Gather your party, and return to the Forgotten Realms in a tale of fellowship and betrayal, sacrifice and survival, and the lure of absolute power. Mysterious abilities are awakening inside you, drawn from a Mind Flayer parasite planted in your brain. Resist, and turn darkness against itself.', 990000.00, '9', '12', 'https://cdn.akamai.steamstatic.com/steam/apps/1086940/header.jpg?t=1705604554'),
('15', 'For Honor™', 'This is an action game in which players control one of three factions (Samurai, Vikings, Knights) in a protracted battle for dominance. As players complete mission objectives, they use swords, axes, and spears to kill enemy warriors in melee-style combat.', 490000.00, '3', '13', 'https://cdn.akamai.steamstatic.com/steam/apps/304390/header.jpg?t=1710516613'),
('16', 'Fallout 4', 'Fallout 4 is an open-world role-playing game developed by Bethesda Game Studios. In it, the player begins as a parent and spouse in the year 2077, but then must enter Vault 111 to survive the nuclear apocalypse.', 450000.00, '10', '14', 'https://cdn.akamai.steamstatic.com/steam/apps/377160/header.jpg?t=1650909928'),
('17', 'Left 4 Dead 2', 'This co-operative action horror FPS takes you and your friends through the cities, swamps and cemeteries of the Deep South, from Savannah to New Orleans across five expansive campaigns. You\'ll play as one of four new survivors armed with a wide and devastating array of classic and upgraded weapons.', 142000.00, '3', '15', 'https://cdn.akamai.steamstatic.com/steam/apps/550/header.jpg?t=1675801903'),
('18', 'Outlast 2', 'Outlast 2 is a first-person survival horror title set to take players on a wild ride through a rural area Arizona as they investigate the gruesome attempted murder of a pregnant woman found on the side of the road.', 385000.00, '6', '16', 'https://cdn.akamai.steamstatic.com/steam/apps/414700/header.jpg?t=1618944453'),
('19', 'Resident Evil Village', 'Resident Evil Village is a 2021 survival horror game developed and published by Capcom. It is the sequel to Resident Evil 7: Biohazard (2017) and the tenth main game of the Resident Evil series. Players control Ethan Winters, who searches for his kidnapped daughter in a village filled with mutant creatures.', 881000.00, '3', '7', 'https://cdn.akamai.steamstatic.com/steam/apps/1196590/header.jpg?t=1701395391'),
('2', 'The Binding of Isaac', 'The Binding of Isaac is a top-down dungeon crawler game, presented using two-dimensional sprites, in which the player controls Isaac or other unlockable characters as they explore the dungeons located in Isaac\'s basement.', 70000.00, '2', '2', 'https://cdn.akamai.steamstatic.com/steam/apps/250900/capsule_616x353.jpg?t=1617174663'),
('20', 'Detroit: Become Human', 'Set in Detroit City during the year 2038, the city has been revitalized by the invention and introduction of Androids into everyday life. But when Androids start behaving as if they are alive, events begin to spin out of control.', 660000.00, '5', '17', 'https://cdn.akamai.steamstatic.com/steam/apps/1222140/header.jpg?t=1667468479'),
('3', 'Dead by Daylight', 'Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught, tortured and killed.', 230000.00, '3', '3', 'https://cdn.akamai.steamstatic.com/steam/apps/381210/header.jpg?t=1710268442'),
('4', 'Plants vs. Zombies™ Garden Warfare 2: Deluxe Edition', 'In this hilarious, action-packed shooter, zombie leader Dr. Zomboss has strengthened his horde and rebuilt suburbia as a zombie utopia. But hope remains, because for the first time the plants are taking the offensive in an all-out attack to reclaim their turf.', 700000.00, '4', '4', 'https://cdn.akamai.steamstatic.com/steam/apps/1922560/header.jpg?t=1707771436'),
('5', 'Palworld', 'Palworld is an upcoming action-adventure, survival, and monster-taming game created and published by Japanese developer Pocket Pair. The game is set in an open world populated with animal-like creatures called Pals, which players can battle and capture to use for base building, traversal, and combat.', 385000.00, '2', '5', 'https://cdn.akamai.steamstatic.com/steam/apps/1623730/header.jpg?t=1707904340'),
('6', 'Mortal Kombat 1', 'The game introduces a reborn Mortal Kombat Universe that has been created by the Fire God Liu Kang, featuring reimagined versions of iconic characters as they\'ve never been seen before, along with a new fighting system, game modes, bone krushing finishing moves, and more.', 1290000.00, '3', '6', 'https://cdn.akamai.steamstatic.com/steam/apps/1971870/header.jpg?t=1709136014'),
('7', 'Street Fighter V', 'An arcade version exclusive to Japan was released by Taito in 2019. Similar to the previous games in the Street Fighter series, Street Fighter V features a side-scrolling fighting gameplay system. The game also introduces the V-Gauge, which builds as the player receives attacks and adds three new skills.', 450000.00, '3', '7', 'https://cdn.akamai.steamstatic.com/steam/apps/310950/header.jpg?t=1705467952'),
('8', 'Street Fighter™ 6', 'Street Fighter 6 represents the next evolution of the Street Fighter, with three distinct game modes, including Fighting Ground, World Tour and Battle Hub. The experience also includes innovative new gameplay features, plus enhanced visuals for every aspect of the game.', 1322000.00, '5', '7', 'https://cdn.akamai.steamstatic.com/steam/apps/1364780/header_alt_assets_9.jpg?t=1709012771'),
('9', 'Hollow Knight', 'Hollow Knight is a classically styled 2D action adventure across a vast interconnected world. Explore twisting caverns, ancient cities and deadly wastes, battle tainted creatures and befriend bizarre bugs and solve ancient mysteries at the kingdom\'s heart.', 165000.00, '6', '8', 'https://cdn.akamai.steamstatic.com/steam/apps/367520/header.jpg?t=1695270428');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
('1', 'Adventure, Indie'),
('10', 'RPG'),
('2', 'Action, Adventure, Indie, RPG'),
('3', 'Action'),
('4', 'Action, Casual, Strategy'),
('5', 'Action, Adventure'),
('6', 'Action, Adventure, Indie'),
('7', 'Action, Adventure, RPG'),
('8', 'Action, Adventure, Indie, Simulation'),
('9', 'Adventure, RPG, Strategy');

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `exchange_section_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `exchange_date` datetime NOT NULL,
  `exchange_amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` varchar(255) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_address`) VALUES
('1', 'Unknown Worlds Entertainment', '1126 Folsom St 3, San Francisco, California 94103, US'),
('10', 'Newnight', ''),
('11', 'Hello Games', 'Dolphin House, 3 North Street, Guildford, Surrey, England, GU1 4AA'),
('12', 'Larian Studios', 'Ghent, Belgium'),
('13', 'Ubisoft', 'Saint-Mandé, 2 Av. Pasteur, France'),
('14', 'Bethesda Softworks', '1370 Piccard Drive, Suite 120 Rockville, MD 20850'),
('15', 'Valve', 'Bellevue, P.O. Box 1688, United States'),
('16', 'Red Barrels', '329 De La Commune Ouest, Montreal, Quebec H2Y 2E1, CA'),
('17', 'Quantic Dream', '30 rue Raoul Wallenberg, 75019 Paris, France'),
('2', 'Edmund McMillen', '385 Beel Dr, Santa Cruz, CA 95060'),
('3', 'Behaviour Interactive Inc.', 'Montréal, 6666 Rue Saint-Urbain, Canada'),
('4', 'Electronic Arts', '209 Redwood Shores Parkway, Redwood City, CA 94065, USA'),
('5', 'Pocketpair', 'Kyoto, Japan'),
('6', 'Warner Bros. Games', '4000 Warner Blvd, Burbank, CA, 91522 US'),
('7', 'CAPCOM Co., Ltd.', '10000 Washington Blvd., Suite 250, Culver City, California, 90232, U.S.A'),
('8', 'Team Cherry', 'Adelaide, South Australia'),
('9', 'Zeekerss', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `asset_id` varchar(255) NOT NULL,
  `transaction_date` date NOT NULL,
  `quantity` int(255) NOT NULL,
  `total_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `coin` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `dob`, `user_address`, `phone_number`, `coin`) VALUES
('U02389', 'Jessica Martinez', '1990-07-08', '222 Pine St, Riverdale, USA', '555-987-6543', 50),
('U03245', 'James Johnson', '1979-06-15', '555 Elm St, Hillcrest, USA', '555-210-9876', 120.75),
('U03421', 'Christopher Davis', '1985-04-25', '333 Cedar St, Hillcrest, USA', '555-789-1234', 300.25),
('U04321', 'Ethan Brown', '1974-12-30', '999 Cedar St, Riverdale, USA', '555-789-1234', 180.25),
('U04567', 'Michael Smith', '1976-09-20', '888 Maple St, Lakeside, USA', '555-876-5432', 75.75),
('U05432', 'Isabella Smith', '1998-05-05', '888 Pine St, Mountainview, USA', '555-654-2109', 60),
('U05612', 'David Wilson', '1982-11-05', '111 Oak St, Springdale, USA', '555-654-2109', 200),
('U06789', 'Jacob Martinez', '1981-08-12', '777 Oak St, Springdale, USA', '555-321-7890', 210),
('U07689', 'Emily Wilson', '1987-10-25', '444 Cedar St, Lakeside, USA', '555-987-6543', 175.5),
('U08796', 'Emily Brown', '1995-05-10', '999 Elm St, Mountainview, USA', '555-321-7890', 100.25),
('U08976', 'Sophia Garcia', '1993-03-20', '666 Maple St, Riverside, USA', '555-876-5432', 90.25),
('U09834', 'Sarah Johnson', '1988-03-15', '777 Cedar St, Riverside, USA', '555-210-9876', 150.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`asset_id`),
  ADD KEY `asset_ibfk_1` (`publisher_id`),
  ADD KEY `asset_ibfk_2` (`category_id`);

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
  ADD KEY `fk_exchange_user` (`user_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD KEY `fk_transaction_user` (`user_id`),
  ADD KEY `fk_transaction_asset` (`asset_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

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
  ADD CONSTRAINT `fk_exchange_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_transaction_asset` FOREIGN KEY (`asset_id`) REFERENCES `asset` (`asset_id`),
  ADD CONSTRAINT `fk_transaction_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
