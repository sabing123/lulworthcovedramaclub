-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 08:13 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lulworthcovedramaclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `Answer` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Content` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `image`, `Content`, `date`) VALUES
(59, 'Not Sure If You Want to Enroll', 'img_2019_Jan_07_1546883749_blogdancing.PNG', 'Maybe your child has expressed interest in dance class or they are always dancing around the house, but youâ€™re not sure if they will be good at it or coordinated enough. At 3 years old the only thing that matters is that they want to try.  At that age they are still developing their gross motor skills, fine motor coordination, listening and social skills. A dance class is a way for them to play with movement the way toddlers play with sounds when they are learning to talk. The main goal of that first dance class is to instill self confidence and a familiarity with how our bodies move in space.\r\n\r\nBut what if your child is older â€“ say 10 or 11? Is that too old to start dance classes? In my opinion itâ€™s never too late. When starting at a later age, itâ€™s important to match the student with other students the same age. And more than one class per week can increase the rate of improvement by leaps and bounds. Soccer practice is rarely only one day a week because frequency of training speeds up learning and the same applies to dance skills.', '2019-01-07'),
(66, 'VOCAL EXERCISES ANYWHERE!', 'img_2019_Jan_15_1547576257_blogsinging.jpg', 'Donot have a good recording of a vocal workout handy? No sweat! Just go to LCDC. There you will find recordings of several foundational vocal exercises that will help you.\r\nTo begin with, each recording is available for four voice ranges.\r\nEach vocal range has its own playlist. ?Simply click on the upper left corner of the playlist you want. There you can simply choose whichever recording you want.\r\nEach exercise is available in two ways: with a guide melody and without. Each version has a chordal piano accompaniment. The guide melodies are played on a synthesized wind instrument.\r\nIf you are fairly new to vocalizing, I recommend that you use the recordings with the guide melodies until you have learned the exercises thoroughly.\r\nAs you progress as a singer, practice vocalizing the exercises with only the piano accompaniment. This will begin to increase your skills of good intonation, and of carrying a melody on your own.\r\nAs you progress as a singer, practice vocalizing the exercises with only the piano accompaniment. This will begin to increase your skills of good intonation, and of carrying a melody on your own.', '2019-01-15'),
(67, 'Easy Singing', 'img_2019_Jan_15_1547576411_blogsinging1.jpg', '\r\nMost singers sing with a great deal of excess effort. When a singer first experiences easy singing, they often remark that singing with so much ease certainly canâ€™t be right. Please understand that effort and tension do not make a better voice.\r\nIf you look tortured while you are singing, chances are you sound tortured as well (and your audience may also feel tortured to boot). If you canâ€™t sing without grimacing or making faces itâ€™s probably an indication that you need to rethink your technique.\r\n\r\nVeins bulging at the neck, eyebrows raising, frowning, protruding jaw, trumpet lips, wrinkled nose.. these are all undesirable facial tensions singers commonly have. Itâ€™s not only unattractive to look at these contortions, but the sound is almost always ugly as well. You donâ€™t want an ugly sound, you want to sing beautifully.', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `classes` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `firstname`, `lastname`, `email`, `address`, `phone`, `classes`) VALUES
(3, 'sabin', 'gautam', 'sabingautam05@gmail.', 'kalanki', '9860560109', ''),
(4, 'rabin', 'gautam', 'sapkotanavin21@gmail', 'Stychatar', '986523100', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `Location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `image`, `title`, `content`, `Location`, `date`, `time`) VALUES
(20, 'img_2019_Jan_15_1547574952_dancing.jpg', 'Dancing Competition', 'We are organizing Dancing Competition on March. So you are requested to help us.', 'Dilibazar,Kathamandu', '2019-01-15', '09:00:00'),
(21, 'img_2019_Jan_15_1547575623_singing.jpg', ' selection for singing competition.', 'Next Saturday there will be an selection for the upcoming singing competition.', 'Bagbazar,Kathmandu', '2019-01-15', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum`
--

CREATE TABLE `tbl_forum` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` longtext NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forum`
--

INSERT INTO `tbl_forum` (`id`, `email`, `question`, `Date`) VALUES
(1, 'sabingautam05@gmail.com', 'whats up?', '2019-01-10'),
(2, 'asd', 'asd', '2019-01-15'),
(3, '9860560109', 'what is DW?', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(11) NOT NULL,
  `PName` varchar(20) NOT NULL,
  `CName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `age` int(11) NOT NULL,
  `Pemail` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `PAddress` varchar(25) NOT NULL,
  `Pnumber` varchar(15) NOT NULL,
  `Classes` varchar(20) NOT NULL,
  `comments` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `PName`, `CName`, `DOB`, `age`, `Pemail`, `password`, `PAddress`, `Pnumber`, `Classes`, `comments`) VALUES
(15, 'Sabin Gautam', 'Pradip Dhakal', '2019-01-22', 18, 'admin', 'admin', 'Kalanki,Kathmandu', '9860560106', 'Singing', 'not interest'),
(16, 'Rupesh Thapa', 'Pradip Daka', '2019-01-09', 18, 'sabin123', 'admin123', 'Kathmandu', '9860560108', 'Musical Theatre', 'amlas'),
(17, 'Rabin', 'Ram Gautam', '1998-01-15', 21, 'gsabin696@gmail.com', 'admin', 'Kalanki,Kathmandu', '9860560109', 'Singing', 'what is song?'),
(18, 'Sabin Gautam', 'Pradip Dhakal', '1998-01-05', 21, 'sabin', 'Kalanki', 'syuchatar,kathmandu', '9865321456', 'Singing', 'This School is very good for talented student.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `review` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`id`, `username`, `class`, `review`) VALUES
(4, ' Sarah K.', 'Dance', 'â€œBoth my daughters and myself ( in the adult program) have been dancing here for a year. We love it! They have highly skilled teachers and a great facility. My kids have felt so loved there while receiving high- quality instruction. There is even free childcare during the adult classes. I never imagined getting to dance once being a mom. I love it. If you are just starting out or are experienced, they work at your level.â€'),
(5, 'Kinsey Schulz', 'Singing', 'My daughters LOVE LCDC!! Weâ€™ve been doing it with them since the youngest was 4 months old! The girls look forward to music class! Not only is LCDC amazing for the kids, but I learn more about how their brains process things. It teaches me as well as it teaching them. Not to mention it can be a great workout! I highly recommend it over other music classes â€” what is learned for both child and caregiver/parent is priceless.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE `tbl_signup` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`id`, `email`) VALUES
(1, 'sabingautam05@email.com'),
(2, 'sabingautam05@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
