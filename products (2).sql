-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 10:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `description` varchar(500) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `picture`, `type`) VALUES
(37, 'ITALINA TREAT PIZZA', 12.00, 'Italian Sauce, Shredded Mozzarella, Mushroom, Black Olive, Sweet Corn, Plain Panner.', 'https://www.italymagazine.com/sites/default/files/styles/800xauto/public/feature-story/leader/pizza-margherita-napoletana.jpg?itok=tUbyU-eG', 'pizza'),
(38, 'HOT & SPICY PIZZA', 15.00, 'Italina Sauce, Shredded Mozzarella, Onions, Green Chili, Jalapenos, Red Paprika.', 'https://www.thecandidcooks.com/wp-content/uploads/2022/08/spicy-sausage-pepper-pizza-feature.jpg', 'pizza'),
(39, 'HAWAIIAN PIZZA', 15.00, 'Italian Sauce, Shredded Mozzarella, Smoked Mozzarella ,Mushroom, Sweet Corn ,Pineapple, BBQ Paneer', 'https://media.istockphoto.com/id/1349383878/photo/hawaiian-pizza-with-ham-and-pineapple.jpg?s=612x612&w=0&k=20&c=P7rJNWhe1utWDDXUa4ZyZdnl4C5he8jfWD-dKf_hefI=', 'pizza'),
(40, 'MOZZARELLA', 9.00, 'Italian Sauce, Mozzarela Chees', 'https://www.daskochrezept.de/sites/daskochrezept.de/files/styles/full_width_tablet_4_3/public/rezepte/Tomaten-Pizza-mit-Mozzarella-pizza2.jpg?h=014a7257&itok=ZwgfFv_p', 'pizza'),
(41, 'BEEF BURGER', 7.00, 'Beef, Onion, Tomato, Pickle, Lettuce, Mistard', 'https://www.certifiedirishangus.ie/wp-content/uploads/2019/11/TheUltimateBurgerwBacon_RecipePic.jpg', 'burger'),
(42, 'CHEESBURGER', 9.00, 'Beef, Onion, Tomato, Pickle, Chees', 'https://www.gourmet-magazin.de/fileadmin/user_upload/rezepte/gerichte/rind-und-schwein/cheeseburger-1.jpg', 'burger'),
(43, 'DOUBLE CHEESBURGER', 11.00, 'Beef, Onion, Tomato, Pickle, Chees', 'https://recipes.net/wp-content/uploads/2023/05/hardees-double-cheeseburger-recipe_d48b79ef43b714e98a3ad95a7ab9e12e-768x768.jpeg', 'burger'),
(44, 'LASAGNE VERDI AL FORNO', 16.00, 'ClassicLasagne with Aubergine, Onion, Courgette, Carrots, Clery, Mozzarella, Tomato ^ Mechamel Sauce, Served With a Salad Garnish', 'https://noseychef.com/wp-content/uploads/2019/03/IMG_4447123.jpg', 'pasta'),
(45, 'RAVIOLI', 12.00, 'Porcini & Portobello Mushrooms, Spinach in Pasta Parcels with a Mushroom, Tomato and Cream Sauce', 'https://www.theendlessmeal.com/wp-content/uploads/2012/10/homemade-ravioli-recipe-3-500x500.jpg', 'pasta'),
(46, 'PASTA NAPOLITANO', 14.00, 'Spaghetti with Cherry Tomatoes, Fresh Basili & Napolitano Sauce', 'https://www.cakenknife.com/wp-content/uploads/2023/08/Pasta-Napolitana-Web_6391.jpg', 'pasta'),
(47, 'SPAGHETTI MARINARA', 18.00, 'Spaghetti with Miced Seafood, Garlic & Tomato Sauce', 'https://www.allrecipes.com/thmb/CMcPpeu7wP5nAlKBmLK0a-hRyPc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/203961_Seafood-Marinara-Pasta_ddmfs_4x3_1407-58129948d5ee43cca761fa122d0dbf67.jpg', 'pasta'),
(48, 'AGEDASHI TOFU', 7.00, 'Lightly fried tofu wuth tempura sauce on the side.', 'https://www.wandercooks.com/wp-content/uploads/2021/11/agedashi-tofu-3.jpg', 'appetizer'),
(49, 'COMBO TEMPURA', 11.00, 'Deeo fried soft shell carb with ponzu sauce.', 'https://sumosushibento.com/documents/menugallery/thumb/1546145007793.jpg', ''),
(50, 'BAKED GREEN MUSSELS', 9.00, 'Baked green mussels. Served with unagi sauce & mango.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXmrhqZ_t5fN4u6qJH5IYdSBCPond2xbdhFg&usqp=CAU', 'appetizer'),
(51, 'HAMACHI KAMA', 15.00, 'Grilled yellowtail cheek meat. Served with ponzu sauce', 'https://www.justonecookbook.com/wp-content/uploads/2020/10/Hamachi-Kama-0641-I-500x500.jpg', 'appetizer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
