-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 03:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
`categorie_id` int(3) NOT NULL,
  `categorie_c1` varchar(55) NOT NULL,
  `categorie_c2_1` varchar(55) NOT NULL,
  `categorie_c2_2` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categorie_id`, `categorie_c1`, `categorie_c2_1`, `categorie_c2_2`) VALUES
(1, 'Clothing', 'Hoodies', 'T-shirts'),
(2, 'Music', 'Albums', 'Singles'),
(3, 'Posters', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE IF NOT EXISTS `contents` (
`content_id` int(3) NOT NULL,
  `content_title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `content_img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`content_id`, `content_title`, `content_img`, `content_description`) VALUES
(2, 'Assembly Of Steel Structures', 'images/content_1_2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.'),
(3, 'Chemical Industry', 'images/content_1_3.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.'),
(4, 'Agricultural Engineering', 'images/content_2_1.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.'),
(5, 'Heavy Industry', 'images/content_2_2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.');

-- --------------------------------------------------------

--
-- Table structure for table `contents_number`
--

DROP TABLE IF EXISTS `contents_number`;
CREATE TABLE IF NOT EXISTS `contents_number` (
`content_number_id` int(11) NOT NULL,
  `content_number_num` int(11) NOT NULL,
  `content_number_title` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents_number`
--

INSERT INTO `contents_number` (`content_number_id`, `content_number_num`, `content_number_title`) VALUES
(1, 250, 'Staffs across worldwide'),
(2, 2500, 'Huppy clients'),
(3, 15, 'Years in the indistry');

-- --------------------------------------------------------

--
-- Table structure for table `contents_project`
--

DROP TABLE IF EXISTS `contents_project`;
CREATE TABLE IF NOT EXISTS `contents_project` (
`content_project_id` int(3) NOT NULL,
  `content_project_title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `content_project_img1` varchar(55) CHARACTER SET utf8 NOT NULL,
  `content_project_img2` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `content_project_img3` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contents_project`
--

INSERT INTO `contents_project` (`content_project_id`, `content_project_title`, `content_project_img1`, `content_project_img2`, `content_project_img3`) VALUES
(1, 'MORBI NON SEM A LACUS PORTA', 'images/content_3_2.png', 'images/content_3_3.png', 'images/content_3_4.png'),
(2, 'MORBI NON SEM A LACUS PORTA', 'images/content_3_3.png', 'images/content_3_4.png', 'images/content_3_5.png'),
(3, 'MORBI NON SEM A LACUS PORTA', 'images/content_3_4.png', 'images/content_3_5.png', 'images/content_3_6.png'),
(4, 'MORBI NON SEM A LACUS PORTA', 'images/content_3_6.png', 'images/content_3_7.png', 'images/content_3_8.png'),
(5, 'MORBI NON SEM A LACUS PORTA', 'images/content_3_8.png', 'images/content_3_2.png', 'images/content_3_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `contents_sml`
--

DROP TABLE IF EXISTS `contents_sml`;
CREATE TABLE IF NOT EXISTS `contents_sml` (
`content_sml_id` int(3) NOT NULL,
  `content_sml_title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `content_sml_img` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `content_sml_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contents_sml`
--

INSERT INTO `contents_sml` (`content_sml_id`, `content_sml_title`, `content_sml_img`, `content_sml_description`) VALUES
(1, 'Mechanical & Piping Construction', 'images/content_2_3.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'Mechanical & Piping Construction', 'images/content_2_4.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(3, 'Mechanical & Piping Construction', 'images/content_2_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(4, 'Mechanical & Piping Construction', 'images/content_2_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
`detail_id` int(3) NOT NULL,
  `detail_title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `detail_img` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `detail_price_del` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `detail_price` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`detail_id`, `detail_title`, `detail_img`, `detail_price_del`, `detail_price`) VALUES
(1, 'Flying Ninja', 'images/tb-300x300.jpg', '£15.00', '£12.00'),
(2, 'Happy Ninja', 'images/tb2-300x300.jpg', '', '£18.00'),
(3, 'Happy Ninja', 'images/tb-300x300.jpg', '', '£20.00'),
(4, 'Ninja Silhouette', 'images/tb2-300x300.jpg', '', '£35.00');

-- --------------------------------------------------------

--
-- Table structure for table `footer_abouts`
--

DROP TABLE IF EXISTS `footer_abouts`;
CREATE TABLE IF NOT EXISTS `footer_abouts` (
`footer_about_id` int(11) NOT NULL,
  `footer_about_title` varchar(55) NOT NULL,
  `footer_about_description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_abouts`
--

INSERT INTO `footer_abouts` (`footer_about_id`, `footer_about_title`, `footer_about_description`) VALUES
(1, 'ABOUT US', 'Aenean ut libero vitae sapien ullamcorper semper sed quis turpis. Donec congue felis sed dignissim porttitor. Sed sapien libero, gravida sit amet tortor ac, viverra elementum purus.');

-- --------------------------------------------------------

--
-- Table structure for table `footer_contacts`
--

DROP TABLE IF EXISTS `footer_contacts`;
CREATE TABLE IF NOT EXISTS `footer_contacts` (
`footer_contact_id` int(11) NOT NULL,
  `footer_contact_icon` varchar(55) NOT NULL,
  `footer_contact_content` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_contacts`
--

INSERT INTO `footer_contacts` (`footer_contact_id`, `footer_contact_icon`, `footer_contact_content`) VALUES
(1, 'fa fa-phone', 'Phone: +(048) 880 440 110'),
(2, 'fa fa-file-o', 'Fax: +(048) 880 440 110'),
(3, 'fa fa-envelope-o', 'Email: info (at) ourwebsite.com'),
(4, 'fa fa-map-marker', 'Adress: 124BP, Lacasa Ave New York');

-- --------------------------------------------------------

--
-- Table structure for table `footer_posts`
--

DROP TABLE IF EXISTS `footer_posts`;
CREATE TABLE IF NOT EXISTS `footer_posts` (
`footer_post_id` int(11) NOT NULL,
  `footer_post_img` varchar(55) NOT NULL,
  `footer_post_title` varchar(55) NOT NULL,
  `footer_post_date` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_posts`
--

INSERT INTO `footer_posts` (`footer_post_id`, `footer_post_img`, `footer_post_title`, `footer_post_date`) VALUES
(1, 'images/post-4.jpg', 'Secure strong revenue growth', '09 May,2016'),
(2, 'images/3-300x200.jpg', 'Need for growth and reliability', '28 August,2014');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
`image_id` int(55) NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_url`) VALUES
(1, 'content_2_3.png'),
(2, 'content_2_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `logo_images`
--

DROP TABLE IF EXISTS `logo_images`;
CREATE TABLE IF NOT EXISTS `logo_images` (
`logo_image_id` int(11) NOT NULL,
  `logo_image_pic1` varchar(55) DEFAULT NULL,
  `logo_image_pic2` varchar(55) DEFAULT NULL,
  `logo_image_pic3` varchar(55) DEFAULT NULL,
  `logo_image_pic4` varchar(55) DEFAULT NULL,
  `logo_image_pic5` varchar(55) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo_images`
--

INSERT INTO `logo_images` (`logo_image_id`, `logo_image_pic1`, `logo_image_pic2`, `logo_image_pic3`, `logo_image_pic4`, `logo_image_pic5`) VALUES
(1, 'images/logo-1.jpg', 'images/logo-2.jpg', 'images/logo-3.jpg', 'images/logo-4.jpg', 'images/logo-5.jpg'),
(2, 'images/logo-2.jpg', 'images/logo-3.jpg', 'images/logo-4.jpg', 'images/logo-5.jpg', 'images/logo-6.jpg'),
(3, 'images/logo-3.jpg', 'images/logo-4.jpg', 'images/logo-5.jpg', 'images/logo-6.jpg', 'images/logo-1.jpg'),
(4, 'images/logo-4.jpg', 'images/logo-5.jpg', 'images/logo-6.jpg', 'images/logo-1.jpg', 'images/logo-2.jpg'),
(5, 'images/logo-5.jpg', 'images/logo-6.jpg', 'images/logo-1.jpg', 'images/logo-2.jpg', 'images/logo-3.jpg'),
(6, 'images/logo-6.jpg', 'images/logo-1.jpg', 'images/logo-2.jpg', 'images/logo-3.jpg', 'images/logo-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
`news_id` int(3) NOT NULL,
  `news_img` varchar(55) DEFAULT NULL,
  `news_title` varchar(55) DEFAULT NULL,
  `news_decription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_img`, `news_title`, `news_decription`) VALUES
(1, 'images/content_6_2.png', 'Secure strong revenue growth', 'Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante…'),
(2, 'images/content_6_3.png', 'Need for growth and reliability', 'The focus into the market was a result of realizing the need for growth and reliability in resolving the challenges white site filling stations faced…'),
(3, 'images/content_6_4.png', 'Excepteur sint occaecat cupidatat', 'Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante…');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE IF NOT EXISTS `prices` (
`price_id` int(3) NOT NULL,
  `price_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price_rate` int(3) NOT NULL,
  `price_type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`price_id`, `price_title`, `price_rate`, `price_type`) VALUES
(1, 'Round Cove Suite', 180, 'Rooms Listing'),
(2, 'Signature Water View', 160, 'Rooms Listing'),
(3, 'Signature Water Side', 140, 'Rooms Listing'),
(4, 'Signature Junior Suite', 120, 'Rooms Listing'),
(5, 'English & Continental Breakfast', 10, 'Rooms Listing'),
(6, '24h Wifi Access', 10, 'Rooms Listing');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(3) NOT NULL,
  `product_img` varchar(55) NOT NULL,
  `product_title` varchar(55) NOT NULL,
  `product_amount` varchar(55) NOT NULL,
  `product_amount_del` varchar(55) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_img`, `product_title`, `product_amount`, `product_amount_del`) VALUES
(1, 'images/list/tb-300x300.jpg', 'Flying Ninja', '£15.00', '£12.00'),
(2, 'images/list/tb2-300x300.jpg', 'Happy Ninja', '£18.00', ''),
(3, 'images/list/tb-300x300.jpg', 'Happy Ninja', '£35.00', ''),
(4, 'images/list/tb2-300x300.jpg', 'Ninja Silhouette', '£20.00', ''),
(5, 'images/list/tb-300x300.jpg', 'Ninja Silhouette', '£35.00', ''),
(6, 'images/list/tb2-300x300.jpg', 'Patient Ninja', '£35.00', ''),
(7, 'images/list/tb2-300x300.jpg', 'Patient Ninja', '£35.00', ''),
(8, 'images/list/tb-300x300.jpg', 'Flying Ninja', '£15.00', '£12.00'),
(9, 'images/list/tb2-300x300.jpg', 'Happy Ninja', '£18.00', ''),
(12, 'images/85937.jpg', 'Demo', '£12.00', '£43.00');

-- --------------------------------------------------------

--
-- Table structure for table `sentences`
--

DROP TABLE IF EXISTS `sentences`;
CREATE TABLE IF NOT EXISTS `sentences` (
`sentence_id` int(11) NOT NULL,
  `sentence_description` varchar(255) NOT NULL,
  `sentence_author` varchar(55) DEFAULT NULL,
  `sentence_image` varchar(55) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentences`
--

INSERT INTO `sentences` (`sentence_id`, `sentence_description`, `sentence_author`, `sentence_image`) VALUES
(1, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore Ventage or dorent eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident rum.', 'MICHAEL STROMBACH', 'images/content_7_1.png'),
(2, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident', 'STROMBACH MICHAEL', 'images/content_7_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tabs_content`
--

DROP TABLE IF EXISTS `tabs_content`;
CREATE TABLE IF NOT EXISTS `tabs_content` (
`tab_content_id` int(11) NOT NULL,
  `tab_content_title_1` varchar(55) NOT NULL,
  `tab_content_title_2` varchar(55) NOT NULL,
  `tab_content_description_1` varchar(500) NOT NULL,
  `tab_content_description_2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabs_content`
--

INSERT INTO `tabs_content` (`tab_content_id`, `tab_content_title_1`, `tab_content_title_2`, `tab_content_description_1`, `tab_content_description_2`) VALUES
(0, 'What do we do?', 'Why do we do it?', 'We believe in building to positively impact communities, infrastructure, the economy, opportunity and employment. We take great pride in being proactive with our approach to projects, while ensuring that the best interests of the stakeholders are represented at every stage.<br><br>\nWe are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.', 'We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.<br><br>\nWe believe in building to positively impact communities, infrastructure, the economy, opportunity and employment. We take great pride in being proactive with our approach to projects, while ensuring that the best interests of the stakeholders are represented at every stage.');

-- --------------------------------------------------------

--
-- Table structure for table `tabs_content_right`
--

DROP TABLE IF EXISTS `tabs_content_right`;
CREATE TABLE IF NOT EXISTS `tabs_content_right` (
`tab_content_right_id` int(11) NOT NULL,
  `tab_content_right_iconleft` varchar(255) NOT NULL,
  `tab_content_right_title` varchar(55) NOT NULL,
  `tab_content_right_description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabs_content_right`
--

INSERT INTO `tabs_content_right` (`tab_content_right_id`, `tab_content_right_iconleft`, `tab_content_right_title`, `tab_content_right_description`) VALUES
(1, '<i class="vc_tta-icon fa fa-life-ring"></i>', 'SAFETY', 'A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.'),
(2, '<i class="vc_tta-icon fa fa-life-ring"></i>', 'QUALITY', 'A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.'),
(3, '<i class="vc_tta-icon fa fa-balance-scale"></i>', 'INTEGRITY', 'I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.');

-- --------------------------------------------------------

--
-- Table structure for table `top_products`
--

DROP TABLE IF EXISTS `top_products`;
CREATE TABLE IF NOT EXISTS `top_products` (
`top_product_id` int(3) NOT NULL,
  `top_product_img` varchar(55) NOT NULL,
  `top_product_title` varchar(55) NOT NULL,
  `top_product_amount` varchar(55) NOT NULL,
  `top_product_amount_del` varchar(55) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `top_products`
--

INSERT INTO `top_products` (`top_product_id`, `top_product_img`, `top_product_title`, `top_product_amount`, `top_product_amount_del`) VALUES
(1, 'images/tb2-300x300.jpg', 'Woo Album #4', '£9.00', ''),
(2, 'images/tb2-300x300.jpg', 'Happy Ninja', '£18.00', ''),
(3, 'images/tb2-300x300.jpg', 'Ninja Silhouette', '£20.00', ''),
(4, 'images/tb2-300x300.jpg', 'Patient Ninja', '£35.00', ''),
(5, 'images/cd_6_angle-180x180.jpg', 'Woo Single #2', '£2.00', '£3.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`categorie_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
 ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `contents_number`
--
ALTER TABLE `contents_number`
 ADD PRIMARY KEY (`content_number_id`);

--
-- Indexes for table `contents_project`
--
ALTER TABLE `contents_project`
 ADD PRIMARY KEY (`content_project_id`);

--
-- Indexes for table `contents_sml`
--
ALTER TABLE `contents_sml`
 ADD PRIMARY KEY (`content_sml_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
 ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `footer_abouts`
--
ALTER TABLE `footer_abouts`
 ADD PRIMARY KEY (`footer_about_id`);

--
-- Indexes for table `footer_contacts`
--
ALTER TABLE `footer_contacts`
 ADD PRIMARY KEY (`footer_contact_id`);

--
-- Indexes for table `footer_posts`
--
ALTER TABLE `footer_posts`
 ADD PRIMARY KEY (`footer_post_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `logo_images`
--
ALTER TABLE `logo_images`
 ADD PRIMARY KEY (`logo_image_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
 ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sentences`
--
ALTER TABLE `sentences`
 ADD PRIMARY KEY (`sentence_id`);

--
-- Indexes for table `tabs_content`
--
ALTER TABLE `tabs_content`
 ADD PRIMARY KEY (`tab_content_id`);

--
-- Indexes for table `tabs_content_right`
--
ALTER TABLE `tabs_content_right`
 ADD PRIMARY KEY (`tab_content_right_id`);

--
-- Indexes for table `top_products`
--
ALTER TABLE `top_products`
 ADD PRIMARY KEY (`top_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `categorie_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
MODIFY `content_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contents_number`
--
ALTER TABLE `contents_number`
MODIFY `content_number_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contents_project`
--
ALTER TABLE `contents_project`
MODIFY `content_project_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contents_sml`
--
ALTER TABLE `contents_sml`
MODIFY `content_sml_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
MODIFY `detail_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `footer_abouts`
--
ALTER TABLE `footer_abouts`
MODIFY `footer_about_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `footer_contacts`
--
ALTER TABLE `footer_contacts`
MODIFY `footer_contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `footer_posts`
--
ALTER TABLE `footer_posts`
MODIFY `footer_post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `image_id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logo_images`
--
ALTER TABLE `logo_images`
MODIFY `logo_image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `news_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
MODIFY `price_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sentences`
--
ALTER TABLE `sentences`
MODIFY `sentence_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabs_content`
--
ALTER TABLE `tabs_content`
MODIFY `tab_content_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabs_content_right`
--
ALTER TABLE `tabs_content_right`
MODIFY `tab_content_right_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `top_products`
--
ALTER TABLE `top_products`
MODIFY `top_product_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
