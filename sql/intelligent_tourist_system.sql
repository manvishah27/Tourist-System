-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 02:06 PM
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
-- Database: `intelligent_tourist_system`
--

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
  `details` mediumtext NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourpackages`
--

INSERT INTO `tourpackages` (`package_id`, `name`, `type`, `location`, `price`, `features`, `details`, `image`) VALUES
(1, 'Splendid Bhutan', 'Family tour', 'Bhutan', 570, 'Thimpu Sightseeing\r\nPunakha Sightseeing\r\nParo Sightseeing\r\nDaily Buffet/ fixed Menu Breakfast & Dinner ', 'Day 1 - Arrival At PARO airport, drive to THIMPHU \r\nOn arrival at Paro Airport and after completing your Permit formalities (Please read the notes on  Entry Formalities & requirements to issue permits) you will be received by our Bhutan representative who will assist you in boarding your vehicle for transfer to Thimphu (65 Kms / 01½ to 02 Hrs), Thimphu is the capital town of Bhutan and the centre of government, religion and commerce, Thimphu is a unique city with unusual mixture of modern development alongside ancient traditions. Home to civil servants, expatriates and monk body, Thimphu maintains a strong national character in its architectural style. On arrival in Thimphu, Check in to the hotel. Evening free at leisure. Overnight at Hotel. (D)\r\nDay 2 - THIMPHU Sightseeing \r\nAfter breakfasts go for Thimphu sightseeing covering Memorial Chorten, Tashichho Dzong, Buddha Point (Kuensel Phodong),Changangkha Lhakhang (Monastery), Motithang Takin Preservation Centre, Drupthob Goemba or Zilukha Nunnery, National Library (Closed on Saturday , Sunday & National Holiday), Institute for Zorig Chusum (Traditional Art & Craft School-Closed on Saturday , Sunday, National Holiday & During Summer & Winter Vacations), Textiles Museum (Handicrafts Shops - Closed on Saturday, Sunday & National Holiday), Zangthopelri Lhakhang (Monastery). Overnight at Hotel. (B ,D)\r\nDay 3 - THIMPHU – PUNAKHA / WANGDI\r\nAfter breakfast drive to Punakha (77 Kms / 03 to 3½ Hrs)  / Wangdi (Wangdiphodrang) (70 Kms / 03 to 3½ Hrs). The drive is over Dochu La pass (3080Mts / 10102Fts) which is very scenic with fascinating view of mountains of Bhutan. Reach at Punakha/Wangdi and visit Punakha Dzong If time permit visit the  Suspension Bridge and then proceed to  Chimi Lhakhang (Monastery). Overnight at the Hotel in Wangdi. (B, D)\r\nDay 4 - DRIVE PUNAKHA / WANGDI – PARO\r\nAfter breakfast transfer to Paro (2134Mts / 7000Fts, 135 Kms / 05 Hrs). Enroute Stop at Lamperi to visit Royal Botanical Garden. On arrival Paro, check in to the hotel. Afternoon free at leisure. Overnight at Hotel. (B, D)\r\nDay 5 - PARO SIGHTSEEING  \r\nAfter breakfast go for Paro Sightseeing covering Drukgyel Dzong, Ta Dzong (National Museum-Closed on Saturday, Sunday & National Holiday), Rinpung Dzong – also known as Paro Dzong,and finally the historically & spiritually important Kyichu Lhakhang (Monastery), Back to the hotel. Overnight at Hotel.  (B, D)\r\n\r\nOR\r\n\r\nOPTIONAL TOUR : FULL DAY HIKE TO TIGER`S NEST MONASTERY – To be paid directly in Bhutan. Guest who will opt for Tiger Nest excursion, will miss Paro Local Sightseeing.\r\nStart the day early for a day hike to Taktsang Lhakhang (Tiger\'s Nest Monastery) - The hike which is all the way uphill takes about 3 hours through pine forests. The monastery clings to a huge granite cliff 800 meters from the Paro valley. It is one of the most famous of Bhutan\'s monasteries, perched on the side of a cliff 900m above the Paro valley floor. It is said that Guru Rinpoche arrived here on the back of a tigress and meditated at this monastery and hence it is called \"Tiger\'s Nest\". This site has been recognized as a most sacred place and visited by Shabdrung Ngawang Namgyal in 1646 and now visited by all Bhutanese at least once in their lifetime. Drive back to hotel. Evening is at leisure for go for shopping in the market.\r\nDay 6 - TRANSFER TO PARO AIRPORT \r\nAfter breakfast transfer to Paro Airport for taking onward connection. (B).Tour Ends…\r\n', 'splendid_bhutan.jpg'),
(2, 'Easy Dubai Magical', 'Family', 'Dubai', 812, 'Complimentary offer \r\n- Visit to Dubai Aquarium \r\n- Visit to Underwater Zoo\r\n- Dubai Shopping Festival Dates Available\r\n\r\nReturn Airfare on economy class \r\nVisas, Insurance & Ok to Board charges \r\n05 Night’s accommodation in Dubai \r\nDaily breakfast except day 1\r\nReturn  airport transfers on seat in coach basis\r\nBurj Khalifa 124 Floor Non - Prime Time on Seat in coach basis \r\nDubai City Tour on Seat in coach basis \r\nMarina Cruise with Dinner on Seat in coach basis\r\nDesert Safari with BBQ Dinner on Seat in coach basis\r\nAbu Dhabi City tour with Ferrari world / Yas Waterworld / Warner bros (Any one )', 'Day 1 - Arrive Dubai \r\nUpon arrival at the airport, you will be transferred to the hotel.  This evening proceed for cruise along the banks of historic Dubai Creek where the Marina Cruise combines the best of culinary delights and stunning views of old and new Dubai. On board you are welcomed with ‘Kahweh’ the Arabic coffee, followed by a sumptuous buffet dinner. Enjoy stunning views of the creek and a selection of the best of Arabic lounge music. \r\nOvernight in Dubai.\r\nDay 2 - Dubai \r\nToday, proceed for City tour of Dubai  where you will see the Creek, the souks and traditional markets. You will also see the Dhow-building yards, Sheikh Saeed’s House, the Heritage and Diving village, the Wind Tower houses of the Bastikiya area, Dubai Museum and Jumeirah Mosque\r\nIn the later afternoon, proceed for Desert Safari with a barbeque dinner. The safari takes you to a thrilling fun filled evening that you will never forget. Leaving back the hustle and bustle of Dubai, the desert safari guides will take you on a four wheeler vehicle for an exciting and thrilling journey rolling over the sand dunes. The experience of going up and down the desert will pump your adrenalin with excitement. Also enjoy a scintillating belly dance performance and a delicious barbeque dinner.\r\nOvernight in Dubai. (B)\r\nDay 3 - Dubai \r\nPost breakfast at the hotel, day is free at leisure to explore on your own. Later in the early afternoon proceed to visit the Burj Khalifa . Get ready to enter the record books and experience a journey through Dubai\'s exotic Arabian heritage, the extraordinary story behind Burj Khalifa as the main  icon for the Middle East, and view the spectacular panorama from the observatory At the Top, Burj Khalifa. Later visit to one of the Dubai’s finest attractions - Dubai Aquarium and Underwater Zoo\r\nOvernight in Dubai. (B)\r\nDay 4 - Dubai \r\nAfter breakfast, proceed to Abu Dhabi City tour. Visit the Sheikh Zayed Grand Mosque the most imposing religious and national landmark in Abu Dhabi. Then a panoramic tour of the Emirates Palace, President’s Palace and the Old Fort. Along with City Tour one can select any one of the tour\r\nFerrari World\r\nVisit the world’s largest indoor Ferrari theme park which features a host of rides and attractions to create an unforgettable experience for every member of the family.\r\nOR\r\nYas WaterWorld\r\nUAE’s First Mega Waterpark - Yas Water world located on Yas Island. Get ready for unforgettable water adventure for the entire family! We visit the world’s largest indoor Ferrari theme park which features a host of rides and attractions to create an unforgettable experience for every member of the family.\r\nOR\r\nWarner Bros\r\nWorld Abu Dhabi is an indoor amusement park organized into six themed areas; Gotham City, Metropolis, Cartoon Junction, Bedrock, Dynamite Gulch and Warner Bros Plaza. Gotham and Metropolis are based on the fictional settings of DC Comics super heroes Batman and Superman, respectively. Warner Bros.’s Looney Tunes and Hanna-Barbera cartoon libraries are represented in Dynamite Gulch and Cartoon Junction, respectively, along with Bedrock, which is themed around The Flintstones. Warner Bros Plaza is meant to mimic the Hollywood of the past.\r\nOvernight in Dubai. (B)\r\nDay 5 - Dubai \r\nAfter Breakfast, your day is free for leisure or you may visit Bollywood Parks Dubai - the first park of its kind in the world. (Optional) In five fascinating zones, you can experience different environments inspired by the greatest Bollywood blockbusters. From cinematic rides and blockbuster attractions to extravagant live shows, delicious Indian dining and fun shopping – dive into the spectacular world of Bollywood!  \r\nOvernight in Dubai. (B)\r\nDay 6 - Depart Dubai\r\nToday, you will be transferred to the airport for your flight back home. (B)', 'easy_dubai_magical.jpg'),
(3, 'Mesmerizing Phuket', 'Honeymoon', 'Thailand', 723, 'Phuket\r\nGuided City Tour\r\nPhi Phi island tour with local lunch Phuket', 'Day 1 - Phuket \r\nArrive into Phuket, one of the most exotic destinations in the world. You will be welcomed by our local representative and taken to your hotel. (Check-In time is after 3.00pm). The evening is free for you to relax or explore this exciting city. Overnight in Phuket. (D)\r\nDay 2 - This morning we proceed for a city tour of Phuket. A leisurely drive along the beaches of Patong, Karon and Kata will reveal this island’s natural beauty. Visit the ‘Three Beaches’ viewpoint, which is one of the island’s most scenic spots, from which you can obtain a panoramic vista of the beautiful bays of Kata Noi, Kata, Karon and Kho Pu Island. Thereafter, during a leisurely drive around Phuket you will see its many Sino-Portuguese style buildings. This  drive also provides a view of many of the highlights of the island, which is also called the ‘Pearl of the Andamans’. The evening is free for you to relax. Overnight in Phuket. (B, D)\r\nDay 3 - Today we take you to the spectacular Phi Phi Island which is one of the loveliest in island in Southeast Asia. Classic beaches, stunning rock formations, and vivid turquoise waters teeming with colourful marine life - its paradise  perfected. Overnight in Phuket. (B, LL, D)\r\nDay 4 - Today the day is free for you to explore this city on your own OR You can opt for the suggested excursion to the James Bond island. Get on a traditional Thai long boat to explore the Phang Nga Bay National Park (National Park fee  to be paid by client directly). After lunch, travel to the famous James Bond Island, locally known as Khao Ping Kan. Feel free to recreate your favourite James Bond scenes or jump in the water for a swim! \r\nOvernight in Phuket. (B, D)\r\nDay 5 - After a buffet breakfast, we check out and drive to the airport for your flight back home. We hope you take back many happy memories of your holiday. We would like you to write and tell us how you enjoyed your holiday and give us your suggestions. (B)', 'mesmerizing_phuket.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourpackages`
--
ALTER TABLE `tourpackages`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourpackages`
--
ALTER TABLE `tourpackages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
