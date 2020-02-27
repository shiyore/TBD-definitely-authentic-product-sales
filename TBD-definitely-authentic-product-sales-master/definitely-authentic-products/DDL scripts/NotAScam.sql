-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2020 at 03:10 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NotAScam`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_ID` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `short_desc` varchar(150) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `category_ID` int(11) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `desc_image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_ID`, `name`, `price`, `short_desc`, `image`, `category_ID`, `description`, `desc_image`) VALUES
(1, 'Finger Mouse', 174.99, 'A new intimate kind of mouse for when you feeling lonely!', '../images/fingermouse.jpg', 1, 'Have you ever wanted to feel your lost loved one\'s hand in yours again? Now you can, with the fingermouse! Feel the soft skin as you browse through old images of better times.', '../images/fingermouse.jpg'),
(2, 'Desktop', 299.99, 'A working desktop computer PC windows!', '../images/desktop.jpg', 1, 'A desktop perfect for word processing, coding, and consuming media.', '../images/desktop.jpg'),
(3, 'Plastic Dogs', 4.20, 'Dogs as toys!', '../images/dogs.jpg', 3, 'Does your annoying kid keep whining about having a dog? Well, now you can get him two for the low price of $4.20 and not have to worry about taking care of them!', '../images/dogs.jpg'),
(4, 'Dr.Boy', 46.92, 'Play popular games on the innovative Dr.Boy mobile game console!', '../images/DrBoy.jpg', 1, 'A innovative electronic device that allows you to play the most modern games anywhere. The Dr. Boy saves you from boredom from your own room, all the way to the board meeting you dread.', '../images/DrBoy.jpg'),
(5, 'Fony DualShock Controller', 27.99, 'A good quality controller for your game console needs!', '../FonyController.jpg', 1, 'An authentic controller used for a video game console. Similar products have terrible price. We have good low price.', '../images/FonyController.jpg'),
(6, 'Frans Tromers: Dark of the Moon', 8.99, 'Fight the encroching danger of the Deceptionions!', '../images/franstromers.png', 3, 'Join Hoptimus Crime in saving Bribertron and defeating the Deceptioncons. This toy will bring joy to your alive son.', '../images/franstromers.png'),
(7, 'GameKing', 15.71, 'A cheap option for game playing on the go!', '../images/Gameking.jpg', 1, 'Does your son not deserve the Dr.Boy? The GameKing is for you then! Play games wherever you go, however it will not be as good as the Dr.Boy, but is a good cheaper option.', '../images/Gameking.jpg'),
(8, 'DDR5 GTX760', 46.90, 'Graphics card for gaming! Almost new!', '../images/gpu.jpg', 1, 'The GTX760 graphics card with DDR5 ram is amazing speed! For gaming needs, this will fulfill all your dreams and fantasies.', '../images/gpu2.jpg'),
(9, 'Hamberger Friend Shirt', 12.99, 'Fun shirt design for American hamberger lovers!', '../images/hambergerfriend.jpg', 2, 'Do you feel happiness when you eat a hamberger? If so, this shirt is for you! Made of high quality fabric materials, and makes a great gift for hamberger love friends!', '../images/hambergerfriend.jpg'),
(10, 'How Depressing', 12.99, 'A high quality depressed shirt!', '../images/howdepressing.jpg', 2, 'If you are from Generation Z, you will love this shirt! This is because Generation Z all have depression and joke about it so it is relatable shirt!', '../images/howdepressing.jpg'),
(11, 'iPhnce', 119.99, 'Working cellular phone!', '../images/iphnce.jpg', 1, 'Multiple versions of the phone! There is the smaller, more portable iPhnce with black. There there\'s the larger iPneno in pink with larger buttons.', '../image/iphnce.jpg'),
(12, 'Makbuk', 499.99, 'Good portable working laptop! Very sleek!', '../images/makbuk.jpg', 1, 'This portable and good looking laptop is perfect for your portable computer needs! Charge your laptop for infinite battery and use time!', '../images/makbuk.jpg'),
(13, 'MiniPolyStation 3', 224.98, 'Amazing next generation video game console! High quality!', '../images/minipolystation.jpg', 1, 'Next generation gameplay video game console! Fast great graphic and quality frame per seconds!', '../images/minipolystation.jpg'),
(14, 'Motherboard', 49.99, 'Good motherboard for computer building!', '../images/motherboard.jpg', 1, 'Big, high quality motherboard for computer building. Many slots for more components to add. CPU socket for CPU.', '../images/motherboard.jpg'),
(15, 'Mouse mouse', 89.99, 'An actual mouse for a mouse!', '../images/mouse.jpg', 1, 'An actual mouse turned into a mouse! It makes sense since they have the same name! Just press on where the skull used to be to left and right click!', '../images/mouse.jpg'),
(16, 'Super Mario Backpack', 23.99, 'Your favorite hero from Marvel Studio on a backpack!', '../images/obunga.jpg', 2, 'Elsa, from the Lord of the Rings, is here to support your appearance on your backpack! A great gift for anyone that loves Green Lantern!', '../images/obunga.jpg'),
(17, 'PCP Station', 169.99, 'A mobile PCP system!', '../images/pcp-station.jpg', 1, 'If you love PCP, then you will love the PCP station! It allows you to enjoy your PCP anywhere and anytime! Now you will never have a moment that you can\'t enjoy PCP!', '../images/pcp-station.jpg'),
(18, 'Soulja-station', 1337.69, 'The world-famous Soulja-station', '../images/souljaStation.jpg', 1, 'World-famous Rapper, Soulja Boy, brings you his Soulja-station to play all the best games! Brings the quality of Soulja boy into your hand!', '../images/souljaStation.jpg'),
(19, 'Sounds by Steve', 269.99, 'Best Sounds brought to you by Steve!', '../images/steve.jpg', 1, 'Pure Adaptive Noise Cancelling (Pure ANC) actively blocks external noise\r\nUp to 22 hours of battery life enables fully-featured all-day wireless playback\r\nApple W1 chip for Class 1 Wireless Bluetooth connectivity and battery efficiency', '../images/steve.jpg'),
(20, 'Life is Eggs shirt', 12.99, 'Shirt for people who like proverbs!', '../images/thelifeiseggs.jpg', 2, 'A great and smart proverb for smart people! If you are smart person, you will enjoy this shirt!', '../images/thelifeiseggs.jpg'),
(21, 'The Sexy Face', 12.99, 'A shirt for sexy faced people!', '../images/thesexyface.jpg', 2, 'This is a shirt for people who have sexy face! If you have a sexy face, you will love this shirt. Or give it to a loved one to tell them they have sexy face.', '../images/thesexyface.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='This is the users table, and is subject to change.  ';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `email`, `username`, `password`) VALUES
(1, 'email@email.com', 'username', 'password'),
(2, 'newuser@gmail.com', NULL, 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
