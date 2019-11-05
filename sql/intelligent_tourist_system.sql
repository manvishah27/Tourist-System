-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 09:30 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `its`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `admin_id`, `Password`) VALUES
('Namasvi', 13, 'qwerty'),
('Manvi', 27, 'zulfe');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Date` date NOT NULL,
  `bill_no` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `h_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Date`, `bill_no`, `Amount`, `u_id`, `h_id`) VALUES
('2003-03-19', 125, 6500, 40, 63);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fromDate` date NOT NULL,
  `toDate` date NOT NULL,
  `NoOfPassengers` int(11) DEFAULT NULL,
  `TotalPrice` int(11) DEFAULT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `package_id`, `email`, `fromDate`, `toDate`, `NoOfPassengers`, `TotalPrice`, `order_id`, `transaction_id`) VALUES
(1, 1, '', '0000-00-00', '0000-00-00', 3, NULL, NULL, NULL),
(2, 4, 'manvi27@gmail.com', '2019-10-29', '2019-11-04', 2, NULL, NULL, NULL),
(3, 3, 'manvi27@gmail.com', '2019-10-29', '2019-11-10', 2, NULL, NULL, NULL),
(4, 4, 'manvi27@gmail.com', '2019-11-10', '2019-11-20', 5, NULL, NULL, NULL),
(5, 3, 'manvi27@gmail.com', '2019-11-10', '2019-11-20', 5, NULL, NULL, NULL),
(6, 2, 'manvi27@gmail.com', '2019-11-10', '2019-11-20', 5, NULL, NULL, NULL),
(7, 1, 'manvi27@gmail.com', '2019-11-10', '2019-11-20', 5, NULL, NULL, NULL),
(8, 4, 'manvi27@gmail.com', '2019-11-10', '2019-11-20', 5, NULL, NULL, NULL),
(9, 3, 'manvi27@gmail.com', '2019-11-10', '2019-11-20', 5, NULL, NULL, NULL),
(10, 2, 'manvi27@gmail.com', '2019-11-10', '2019-11-20', 6, NULL, NULL, NULL),
(11, 1, 'manvi27@gmail.com', '2019-11-10', '2019-11-20', 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `check_out_date` date NOT NULL,
  `h_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`check_out_date`, `h_id`, `u_id`) VALUES
('2019-05-14', 63, 40);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `Name`, `Address`, `admin_id`) VALUES
(10, 'Marriot', 'London', 13),
(20, 'Holiday Inn', 'New York', 13),
(30, 'Sofitel', 'Munich', 13),
(40, 'Raddison Blu', 'Paris', 13),
(63, 'Oberoi Udaivilas', 'Udaipur', 13);

-- --------------------------------------------------------

--
-- Table structure for table `hotelbooking`
--

CREATE TABLE `hotelbooking` (
  `hbooking_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fromDate` date NOT NULL,
  `toDate` date NOT NULL,
  `NoOfTravellers` int(11) DEFAULT NULL,
  `TotalPrice` int(11) DEFAULT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotelpackages`
--

CREATE TABLE `hotelpackages` (
  `hotel_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `features` varchar(5000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotelpackages`
--

INSERT INTO `hotelpackages` (`hotel_id`, `name`, `type`, `location`, `price`, `features`, `image`) VALUES
(1, 'Four Seasons', '5 Star', 'Dubai', 5000, 'Swimming pool\r\nGymnasium\r\nWiFi\r\nRoom Service\r\nRestaurant\r\nLuxury Suites', 'fourseasons.jpg'),
(2, 'Raddison Blu', '4 Star', 'Bhutan', 3000, 'Swimming pool\r\nGymnasium\r\nWiFi\r\nRoom Service\r\nRestaurant\r\nLuxury Suites', 'raddisonblu.jpg'),
(3, 'Westin', '4 Star', 'Thailand', 6000, 'Swimming pool\r\nGymnasium\r\nWiFi\r\nRoom Service\r\nRestaurant\r\nLuxury Suites', 'westin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `p_id` int(11) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`p_id`, `Country`, `City`, `admin_id`) VALUES
(6, 'India', 'Udaipur', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tourpackages`
--

CREATE TABLE `tourpackages` (
  `package_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `features` varchar(5000) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourpackages`
--

INSERT INTO `tourpackages` (`package_id`, `name`, `type`, `location`, `price`, `features`, `details`, `image`) VALUES
(1, 'Splendid Bhutan', 'Family tour', 'Bhutan', 39999, 'Thimpu Sightseeing\r\nPunakha Sightseeing\r\nParo Sightseeing\r\nDaily Buffet/ fixed Menu Breakfast & Dinner ', '\"Day 1 - Arrival At PARO airport, drive to THIMPHU, Day 2 - THIMPHU Sightseeing, Day 3 - THIMPHU â€“ PUNAKHA / WANGDI, Day 4 - DRIVE PUNAKHA / WANGDI â€“ PARO, Day 5 - PARO SIGHTSEEING OR FULL DAY HIKE TO TIGER`S NEST MONASTERY, Day 6 - TRANSFER TO PARO AIRPORT\"', 'splendid_bhutan.jpg'),
(2, 'Easy Dubai Magical', 'Family', 'Dubai', 56849, 'Return Airfare on economy class, Visas, Insurance & Ok to Board charges, Burj Khalifa 124 Floor Non - Prime Time, Dubai City Tour, Marina Cruise with Dinner, Desert Safari with BBQ Dinner, Abu Dhabi City tour', 'Day 1 - Arrive Dubai \r\nUpon arrival at the airport, you will be transferred to the hotel.  This evening proceed for cruise along the banks of historic Dubai Creek where the Marina Cruise combines the best of culinary delights and stunning views of old and new Dubai. On board you are welcomed with â€˜Kahwehâ€™ the Arabic coffee, followed by a sumptuous buffet dinner. Enjoy stunning views of the creek and a selection of the best of Arabic lounge music. \r\nOvernight in Dubai.\r\nDay 2 - Dubai \r\nToday, proceed for City tour of Dubai  where you will see the Creek, the souks and traditional markets. You will also see the Dhow-building yards, Sheikh Saeedâ€™s House, the Heritage and Diving village, the Wind Tower houses of the Bastikiya area, Dubai Museum and Jumeirah Mosque\r\nIn the later afternoon, proceed for Desert Safari with a barbeque dinner. The safari takes you to a thrilling fun filled evening that you will never forget. Leaving back the hustle and bustle of Dubai, the desert safari guides will take you on a four wheeler vehicle for an exciting and thrilling journey rolling over the sand dunes. The experience of going up and down the desert will pump your adrenalin with excitement. Also enjoy a scintillating belly dance performance and a delicious barbeque dinner.\r\nOvernight in Dubai. (B)\r\nDay 3 - Dubai \r\nPost breakfast at the hotel, day is free at leisure to explore on your own. Later in the early afternoon proceed to visit the Burj Khalifa . Get ready to enter the record books and experience a journey through Dubai\'s exotic Arabian heritage, the extraordinary story behind Burj Khalifa as the main  icon for the Middle East, and view the spectacular panorama from the observatory At the Top, Burj Khalifa. Later visit to one of the Dubaiâ€™s finest attractions - Dubai Aquarium and Underwater Zoo\r\nOvernight in Dubai. (B)\r\nDay 4 - Dubai \r\nAfter breakfast, proceed to Abu Dhabi City tour. Visit the Sheikh Zayed Grand Mosque the most imposing religious and national landmark in Abu Dhabi. Then a panoramic tour of the Emirates Palace, Presidentâ€™s Palace and the Old Fort. Along with City Tour one can select any one of the tour\r\nFerrari World\r\nVisit the worldâ€™s largest indoor Ferrari theme park which features a host of rides and attractions to create an unforgettable experience for every member of the family.\r\nOR\r\nYas WaterWorld\r\nUAEâ€™s First Mega Waterpark - Yas Water world located on Yas Island. Get ready for unforgettable water adventure for the entire family! We visit the worldâ€™s largest indoor Ferrari theme park which features a host of rides and attractions to create an unforgettable experience for every member of the family.\r\nOR\r\nWarner Bros\r\nWorld Abu Dhabi is an indoor amusement park organized into six themed areas; Gotham City, Metropolis, Cartoon Junction, Bedrock, Dynamite Gulch and Warner Bros Plaza. Gotham and Metropolis are based on the fictional settings of DC Comics super heroes Batman and Superman, respectively. Warner Bros.â€™s Looney Tunes and Hanna-Barbera cartoon libraries are represented in Dynamite Gulch and Cartoon Junction, respectively, along with Bedrock, which is themed around The Flintstones. Warner Bros Plaza is meant to mimic the Hollywood of the past.\r\nOvernight in Dubai. (B)\r\nDay 5 - Dubai \r\nAfter Breakfast, your day is free for leisure or you may visit Bollywood Parks Dubai - the first park of its kind in the world. (Optional) In five fascinating zones, you can experience different environments inspired by the greatest Bollywood blockbusters. From cinematic rides and blockbuster attractions to extravagant live shows, delicious Indian dining and fun shopping â€“ dive into the spectacular world of Bollywood!  \r\nOvernight in Dubai. (B)\r\nDay 6 - Depart Dubai\r\nToday, you will be transferred to the airport for your flight back home. (B)', 'easy_dubai_magical.jpg'),
(3, 'Mesmerizing Phuket', 'Honeymoon', 'Thailand', 50619, 'Phuket\r\nGuided City Tour\r\nPhi Phi island tour with local lunch Phuket', 'Day 1 - Phuket \r\nDay 2 - City tour of Phuket.\r\nDay 3 - Phi Phi Island\r\nDay 4 - Explore this city on your own OR opt for the suggested excursion to the James Bond island.\r\nDay 5 - Drive to the airport for your flight back home.', 'mesmerizing_phuket.jpg'),
(4, 'Scenic Swiss', 'Honeymoon', 'Switzerland', 82049, 'Excursion to Jungfraujoch conjunction, Excursion to Mt Titlis conjunction, Lake Lucerne Saphir Cruise, Reinvented Classic Trolley Tour in Zurich', 'Day 1 - Arrive Zurich â€“ Interlaken (2 hrs)\r\nDay 2 - Spend the day of fun and excitement in Interlaken\r\nDay 3 - Travel by train to Lucerne\r\nDay 4 - Excursion to the glacier paradise of Mount Titlis\r\nDay 5 - Board your train to Zurich\r\nDay 6 -  Proceed to the airport to board your flight back home', 'scenic_swiss.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Phone`, `Email`, `Password`) VALUES
('Aditi', '2147483647', 'aditi@gmail.com', 'takeshi'),
('chandler', '9845627387', 'chandler@gmail.com', 'sarcasm'),
('Ishika', '9820314092', 'ishika23@gmail.com', 'venue'),
('Jigisha', '9969667718', 'jigisha@gmail.com', 'meditation'),
('', '8898263764', 'kiara@gmail.com', 'kiara'),
('Manvi', '8169500746', 'manvi27@gmail.com', 'upwaas'),
('', '', 'monica@gmail.com', 'mondler'),
('Nancy Shah', '9920512936', 'nancyshah097@gmail.com', '123456789'),
('Darshan', '8080765432', 'swagger@gmail.com', 'logi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `hotelpackages`
--
ALTER TABLE `hotelpackages`
  ADD PRIMARY KEY (`hotel_id`);
ALTER TABLE `hotelpackages` ADD FULLTEXT KEY `features` (`features`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tourpackages`
--
ALTER TABLE `tourpackages`
  ADD PRIMARY KEY (`package_id`);
ALTER TABLE `tourpackages` ADD FULLTEXT KEY `details` (`details`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tourpackages`
--
ALTER TABLE `tourpackages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
