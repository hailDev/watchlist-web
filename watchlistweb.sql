-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 06:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseawal`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `Country_id` int(11) DEFAULT NULL,
  `country_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Country_id`, `country_name`) VALUES
(3, 'Indonesia'),
(2, 'Japan'),
(1, 'Amerika'),
(22, 'China'),
(21, 'Japan'),
(44, 'brazil'),
(7, 'portugal'),
(9, 'Korea'),
(55, 'dsdsd'),
(99, 'Japan'),
(99, 'Japan'),
(55, 'Japan'),
(76, 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) DEFAULT NULL,
  `movie_name` varchar(128) DEFAULT NULL,
  `movie_genre` varchar(128) DEFAULT NULL,
  `movie_code` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` char(100) DEFAULT NULL,
  `kota_asal` char(200) DEFAULT NULL,
  `jurusan` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kota_asal`, `jurusan`) VALUES
('111111', 'abah jongli', 'Liyue', 'teyvat'),
('1221216', 'Fachrur Rozi', 'Tokyo', 'RL to Isekai'),
('222', 'SSSSS', 'SSSSSS', 'SSSSS');

-- --------------------------------------------------------

--
-- Table structure for table `mall`
--

CREATE TABLE `mall` (
  `id_mall` int(11) NOT NULL,
  `nama_mall` varchar(128) DEFAULT NULL,
  `jenis_mall` varchar(128) DEFAULT NULL,
  `alamat_mall` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mall`
--

INSERT INTO `mall` (`id_mall`, `nama_mall`, `jenis_mall`, `alamat_mall`) VALUES
(1, 'lihai', 'elektronik', 'cijerah');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodeMK` char(10) NOT NULL,
  `namaMK` char(200) DEFAULT NULL,
  `sks` int(2) DEFAULT NULL,
  `id_dosen` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) DEFAULT NULL,
  `movie_name` varchar(128) DEFAULT NULL,
  `movie_genre` varchar(128) DEFAULT NULL,
  `movie_code` varchar(128) DEFAULT NULL,
  `local_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `movie_genre`, `movie_code`, `local_id`) VALUES
(1, 'Generation war', 'Action', 'gwr', 96),
(1, 'Mr.Robot', 'Crime', 'mrb', 97),
(39, 'Evangelion', 'Mecha', 'evl', 101),
(22, 'Who am i', 'Crime', 'wai', 102),
(20, 'Chiisana koi no uta', 'Drama', 'cku', 103),
(2, 'Generation war', 'Action', 'gwr', 104),
(2, 'Who am i', 'Crime', 'wai', 105),
(40, 'Generation war', 'Action', 'gwr', 107),
(20, 'High & Low', 'Action', 'hal', 108),
(1, 'High & Low', 'Action', 'hal', 109);

-- --------------------------------------------------------

--
-- Table structure for table `movies_data`
--

CREATE TABLE `movies_data` (
  `id` int(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `movie_name` varchar(100) DEFAULT NULL,
  `movie_code` varchar(100) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies_data`
--

INSERT INTO `movies_data` (`id`, `email`, `movie_name`, `movie_code`, `genre`) VALUES
(31, 'h4ildev@gmail.com', 'Evangelion', 'evl', 'Mecha'),
(47, 'h4ildev@gmail.com', 'mrb', 'mrb', 'mrb'),
(48, 'h4ildev@gmail.com', 'Anohana Live Action', 'ala', 'Drama'),
(52, 'kurumichann12@gmail.com', 'Chiisana Koi No Uta', 'cku', 'Drama'),
(53, 'kurumichann12@gmail.com', 'Kimi No Na Wa', 'knn', 'Romance'),
(55, 'h4ildev@gmail.com', 'gwr', 'gwr', 'gwr'),
(60, 'h4ildev@gmail.com', 'nna', 'nna', 'nna'),
(61, 'h4ildev@gmail.com', 'akr', 'akr', 'akr');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts_rating`
--

CREATE TABLE `posts_rating` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `set_movies`
--

CREATE TABLE `set_movies` (
  `movie_id` int(10) NOT NULL,
  `movie_name` varchar(128) DEFAULT NULL,
  `movie_genre` varchar(80) DEFAULT NULL,
  `movie_kode` varchar(50) DEFAULT NULL,
  `movie_rating` double DEFAULT NULL,
  `movie_image` varchar(128) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `set_movies`
--

INSERT INTO `set_movies` (`movie_id`, `movie_name`, `movie_genre`, `movie_kode`, `movie_rating`, `movie_image`, `description`) VALUES
(1, 'Mr Robot', 'Action', 'mrb', 8, 'Mr Robot.jpg', 'Mr Robot is ...'),
(2, 'Who am i', 'Crime', 'wai', 8, 'Who am i.jpg', 'Who am i is ...'),
(3, 'Generation War', 'War', 'gwr', 9.5, 'generation war.jpg', 'Generation war is'),
(4, 'Anohana Live Action', 'Drama', 'ala', 7.5, 'anohana.jpg', 'Anohana live action is ...'),
(5, 'Chiisana Koi No Uta', 'Drama', 'cku', 0, 'chiisana koi no uta.jpg', 'Chiisana koi no uta is ...'),
(6, 'High and Low', 'Action', 'hal', 0, 'high and low.jpg', 'High and low is ...'),
(7, 'Evangelion', 'Mecha', 'evl', 0, 'evangelion.jpg', 'Evangelion is ...'),
(8, 'Kimi No Na Wa', 'Romance', 'knn', 8, 'kimi no nawa.jpg', 'Kimi no na wa is ...'),
(9, 'Code Geass', 'Action', 'cgs', 9, 'code geass.jpg', 'Code geass is ...'),
(10, 'Fate grand order', 'Fantasy', 'fgo', 9, 'fate grand order.jpg', 'Fate grand order is ...'),
(11, 'Sadako', 'Horor', 'sdk', 7, 'sadako.jpg', 'Sadako is ...'),
(13, 'Dunkirk', 'War', 'dkk', 9, 'dunkirk.jpg', 'Dunkirk is ...'),
(14, 'Narnia', 'Adventure', 'nna', NULL, 'narnia.jpg', 'Narnia is .....'),
(18, 'Akira', 'Appocalypse', 'akr', NULL, 'akiraa1.jpg', 'Akira is ...');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `ct_id` int(3) NOT NULL,
  `ct_name` varchar(20) NOT NULL,
  `ct_descritpion` text NOT NULL,
  `cr_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `age`, `image`, `password`, `role`, `is_active`, `status`, `date_created`) VALUES
(27, 'OG', 'croziputra@gmail.com', 21, 'default.jpg', '$2y$10$SC9eRQN8hVKWnwe8UjhPMeirgXRTe1m0C.PDWWvUvr8UJO6EbiiCW', 1, 1, 1, 1683388989),
(31, 'Hail Dev', 'h4ildev@gmail.com', 21, 'aest2.jpg', '$2y$10$UOwwVb5LEGBIrcnDwkqC/ulFzCEDyspg/SRG0gLBcrhLVHSPxTpue', 2, 1, 1, 1683559231);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `genre` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `image`, `age`, `genre`) VALUES
(1, 'Ojiie', 'akiraken040@gmail.com', 'jie1.jpg', 21, 'scifi'),
(2, 'Akira', 'croziputra@yahoo.com', 'fatan.jpg', 21, 'romance'),
(20, 'Eula', 'eulalawrance@gmail.com', 'oji.jpg', 22, 'ecchi'),
(22, 'agung', 'agung12@gmail.com', 'wallhaven-p8odj3_1920x1080.png', 20, 'Action'),
(39, 'Raiden shogun', 'raidenshogun@gmail.com', 'raidensg1.jpg', 23, 'ecchi'),
(40, 'Louch', 'lelouch@gmail.com', NULL, 26, 'Apocalypse');

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `movie_kode` varchar(100) DEFAULT NULL,
  `rating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_rating`
--

INSERT INTO `user_rating` (`id`, `email`, `movie_kode`, `rating`) VALUES
(5, 'h4ildev@gmail.com', 'sdk', 7),
(9, 'h4ildev@gmail.com', 'mrb', 9),
(10, 'h4ildev@gmail.com', 'knn', 7),
(11, 'h4ildev@gmail.com', 'dkk', 9),
(12, 'kurumichann12@gmail.com', 'mrb', 7),
(13, 'kurumichann12@gmail.com', 'wai', 8),
(14, 'kurumichann12@gmail.com', 'fgo', 9),
(15, 'kurumichann12@gmail.com', 'gwr', 9),
(16, 'kurumichann12@gmail.com', 'knn', 9),
(17, 'h4ildev@gmail.com', 'gwr', 10),
(18, 'h4ildev@gmail.com', 'ala', 8),
(19, 'kurumichann12@gmail.com', 'ala', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(28, 'kurumichann12@gmail.com', 'ttqLRtIF/yuJn9fiOJOnCIwOR8Q91MBymdBIGpo4Gzk=', 1683608391),
(29, 'kurumichann12@gmail.com', 'exoG2bXfk9pUzYvIgywa7gzFHy9RW984OgPjH5gvi0w=', 1683608495),
(31, 'kurumichann12@gmail.com', 'SFqzevU3tVF+E2E19dKm/rSisc0b8ZncPHJA8HYj5OM=', 1683794340),
(32, 'kurumichann12@gmail.com', '3M2ManSNEZOUyXlflvavF0KgWPmIeaLMuBggXA+QUZU=', 1683795182),
(33, 'kurumichann12@gmail.com', 'a37RlxEjVtq+KC+bcJ/S9b7t7WqRiZRAbOACkGytJRQ=', 1683795303),
(34, 'kurumichann12@gmail.com', 'mQQ4MZmgywtmWw24TEPy2G8LKPBMXedldORSk6/1gsY=', 1683796355),
(35, 'kurumichann12@gmail.com', '/JpaYFmZ8M6TvHsYJ2sgw4VKSgKyLC5HdvjmZA78O2Y=', 1683804003),
(37, 'kurumichann12@gmail.com', 'k1oKciC8N42OZRzanbgeItgIx1REZppgmXRhNxgLVq8=', 1683804136);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mall`
--
ALTER TABLE `mall`
  ADD PRIMARY KEY (`id_mall`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodeMK`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`local_id`);

--
-- Indexes for table `movies_data`
--
ALTER TABLE `movies_data`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_rating`
--
ALTER TABLE `posts_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_movies`
--
ALTER TABLE `set_movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mall`
--
ALTER TABLE `mall`
  MODIFY `id_mall` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `movies_data`
--
ALTER TABLE `movies_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts_rating`
--
ALTER TABLE `posts_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `set_movies`
--
ALTER TABLE `set_movies`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `ct_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
