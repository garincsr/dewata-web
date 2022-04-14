-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 04:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_telp` varchar(30) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Revy Rizquna', 'admin', '12345', '+628xxxxxxxxxx', 'revyrizquna@gmail.com', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(12, 'Pantai'),
(13, 'Gunung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(13, 12, 'Pantai Blue Point', 10000, '<p>Pantai Blue Point berada di daerah Pecatu, pantai ini merupakan salah satu pusat para peselancar. Kamu bisa menjumpai beberapa toko selancar dan orang berlalu lalang membawa papan selancar.</p>\r\n\r\n<p>Terdapat&nbsp;<em>spot</em>&nbsp;<em>viewing&nbsp;deck&nbsp;</em>untuk kamu yang hanya ingin bersantai dan menikmati keindahan pantai. Untuk sampai ke bibir pantai, kamu harus menuruni tangga hingga mencapai celah antara karang yang menghubungkan laut lepas.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://www.youtube.com/watch?v=ysub5xAHCvU\" target=\"_blank\"><img alt=\"\" src=\"https://mmc.tirto.id/image/2017/08/30/logo-youtube-new-youtube.comcopy.jpg\" style=\"height:71px; width:140px\" /></a><a href=\"https://www.google.com/maps/place/Pantai+Blue+Point/@-8.8152073,115.0863259,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd24ff95bd4acd1:0x80d9a039783f2deb!8m2!3d-8.8151747!4d115.0885118\" target=\"_blank\"><img alt=\"\" src=\"https://2.bp.blogspot.com/-U3l_90LLA0U/WVbW75GV3gI/AAAAAAAANa8/Pos4qVR7eEwNuhp85-eE9rw4OAyRqE-7ACLcBGAs/s1600/Google%2BMaps.png\" style=\"height:83px; width:110px\" /></a></p>\r\n', 'produk1637326831.jpg', 1, '2021-11-19 13:00:31'),
(14, 12, 'Pantai Pandawa', 0, '<p>Daya Tarik dari pantai pandawa adalah pantai yang sangat bersih dan berwarna putih, ombak laut sangat tenang, tempat parkir sangat luas dan dekat pantai. Tersedia wahana permainan kano di tengah laut.</p>\r\n\r\n<p>Tidak seperti sekarang, Pandawa&nbsp;dahulunya adalah pantai tersembunyi. Sebelum ada akses yang memadai seperti sekarang, pantai ini lebih dikenal dengan nama&nbsp;pantai Putuh.</p>\r\n\r\n<p>Nama tersebut diambil karena lokasinya yang berada di Desa Putuh. Pantai ini menawarkan pesona pantai pasir putih dengan air jernih biru muda dengan adanya ornamen patung Kesatria Pandawa. Di sini kamu pun di sajikan hamparan tebing kapur yang fotogenik untuk OOTD.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://www.youtube.com/watch?v=XwfXYfGANng\" target=\"_blank\"><img alt=\"\" src=\"https://mmc.tirto.id/image/2017/08/30/logo-youtube-new-youtube.comcopy.jpg\" style=\"height:71px; width:140px\" /></a><a href=\"https://www.google.com/maps/d/u/0/viewer?ie=UTF8&amp;t=m&amp;oe=UTF8&amp;msa=0&amp;mid=1lVombWCMU1HfnkHGtoaA7oJs_cw&amp;ll=-8.849749018021669%2C115.16603017896244&amp;z=16\" target=\"_blank\"><img alt=\"\" src=\"https://2.bp.blogspot.com/-U3l_90LLA0U/WVbW75GV3gI/AAAAAAAANa8/Pos4qVR7eEwNuhp85-eE9rw4OAyRqE-7ACLcBGAs/s1600/Google%2BMaps.png\" style=\"height:83px; width:110px\" /></a></p>\r\n', 'produk1637329230.jpg', 1, '2021-11-19 13:40:30'),
(15, 12, 'Pantai Tegal Wangi', 0, '<p>Pantai Tegal Wangi, pantai paling favorit fotografer professional untuk melakukan sesi foto prewedding. Pasir putih dengan pemandangan sunset di sore hari.</p>\r\n\r\n<p>Pantai Tegal Wangi dipilih oleh fotografer profesional untuk melakukan sesi pemotretan, karena sepi pengunjung jadi sedikit gangguan dalam pemotretan, memiliki latar belakang sunset di sore hari, pemandangan tebing karang putih serta jarak tempuh yang tidak jauh dari&nbsp;<a href=\"https://www.rentalmobilbali.net/jimbaran-tempat-wisata-di-bali/\" target=\"_blank\">tempat wisata Jimbaran</a>.</p>\r\n\r\n<p>Pantai Tegal Wangi berada di kawasan Jimbaran Bali, letaknya sangat dekat dengan hotel Ayana Jimbaran. Untuk dapat menemukan pantai Tegal Wangi anda harus menuruni jalan setapak yang lumayan terjal tapi tidak jauh. Tidak ada warung atau tempat makan di pantai Tegal Wangi, jadi anda harus membawa makanan dan minuman sendiri jika berencana untuk mengunjungi pantai Tegal Wangi Jimbaran.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://www.youtube.com/watch?v=EFpaWaTv2Tk\" target=\"_blank\"><img alt=\"\" src=\"https://mmc.tirto.id/image/2017/08/30/logo-youtube-new-youtube.comcopy.jpg\" style=\"height:71px; width:140px\" /></a><a href=\"https://www.google.com/maps/d/u/0/viewer?ie=UTF8&amp;hl=en&amp;t=f&amp;ecpose=-6.87176636%2C109.13739003%2C346.22%2C3.258%2C28.12%2C0&amp;source=embed&amp;msa=0&amp;ll=-6.869772990356328%2C109.12056499999998&amp;spn=0.061383%2C0.091496&amp;mid=1SfKsXz2HoqCJArhpBRix8pa3WVI&amp;z=13\" target=\"_blank\"><img alt=\"\" src=\"https://2.bp.blogspot.com/-U3l_90LLA0U/WVbW75GV3gI/AAAAAAAANa8/Pos4qVR7eEwNuhp85-eE9rw4OAyRqE-7ACLcBGAs/s1600/Google%2BMaps.png\" style=\"height:83px; width:110px\" /></a></p>\r\n', 'produk1638110584.jpg', 1, '2021-11-28 14:43:04'),
(16, 12, 'Pantai Gunung Payung', 0, '<p>Pantai Gunung Payung untuk mendapatkan informasi lebih detail tentang salah satu pantai tersembunyi di Bali selatan favorit saya. Pantai dengan pasir putih, sangat bersih, sepi pengunjung dan masih alami apa adanya. Di sekitar kawasan pantai Gunung Payung saat ini belum ada villa, restoran maupun pedagang kaki lima.</p>\r\n\r\n<p>Lokasi dari pantai Gunung Payung sangat dekat dengan pantai Padawa Bali dan juga dalam satu kawasan desa, yaitu desa Kutuh. Walaupun lokasi pantai Gunung Payung&nbsp;sekitar 4,5 kilometer sebelah timur pantai Pandawa Kutuh Bali, tetapi sangat jarang wisatawan yang pernah mendengar apalagi mengunjungi pantai Pantai Gunung Payung.</p>\r\n\r\n<p>Untuk memudahkan pembaca yang ingin tahu lokasi dari pantai Gunung Payung, silakan gunakan link dibawah ini untuk melihat peta lokasi salah satu favorit pantai tersembunyi di Bali.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://www.youtube.com/watch?v=g8o_ZQLWVpI\" target=\"_blank\"><img alt=\"\" src=\"https://mmc.tirto.id/image/2017/08/30/logo-youtube-new-youtube.comcopy.jpg\" style=\"height:71px; width:140px\" /></a><a href=\"https://www.google.com/maps/d/u/0/viewer?ie=UTF8&amp;t=m&amp;oe=UTF8&amp;msa=0&amp;mid=1v1fPiOgtmWgNRicTUIWmelsOdIg&amp;ll=-8.850331738195033%2C115.28903617980352&amp;z=11\" target=\"_blank\"><img alt=\"\" src=\"https://2.bp.blogspot.com/-U3l_90LLA0U/WVbW75GV3gI/AAAAAAAANa8/Pos4qVR7eEwNuhp85-eE9rw4OAyRqE-7ACLcBGAs/s1600/Google%2BMaps.png\" style=\"height:83px; width:110px\" /></a></p>\r\n', 'produk1638111158.jpg', 1, '2021-11-28 14:52:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
