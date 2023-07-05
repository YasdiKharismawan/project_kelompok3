-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 11:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sys_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `judul`, `genre`, `harga`, `detail`, `cover`) VALUES
(4, 'Super Mario Odyssey', 'Indie-Adventure', 600000, 'Berpetualang menggunakan mario gendut', 'SMOD12.png'),
(5, 'Resident Evil 4', 'Horror-Survival', 550000, 'Kamu akan bermain sebagai karakter bernama leon, dan kamu harus menyelamatkan putri presiden bernama ashley yang diculik oleh zombie', 'RE41.png'),
(10, 'Litle Kitty Big City', 'Indie-Adventure', 600000, '', 'LKBC.png'),
(11, 'Super Mario 3D World', 'Indie-Adventure', 600000, '', 'SM3D.png'),
(12, 'The Legend of Zelda: Tears of The Kingdom', 'Action-Adventure-OpenWorld', 700000, '', 'totk.png'),
(14, 'The Legend of Zelda: Breath of The Wild', 'Action-Adventure-OpenWorld', 600000, '', 'botw.png'),
(15, 'Space From The Unbound', 'Indie-Adventure', 600000, '', 'stu.png'),
(20, 'Animal Crossing', 'Indie-Farm', 650000, '', 'ac.png'),
(21, 'Outlast: Bundle Of Terror', 'Horror-Survival', 400000, '', 'OUT1.png'),
(22, 'Outlast 2', 'Horror-Survival', 500000, '', 'OUT2.png'),
(23, 'Resident Evil 5', 'Horror-Survival', 500000, '', 'RE5.png'),
(24, 'Resident Evil 6', 'Horror-Survival', 500000, '', 'RE6.png'),
(25, 'Resident Evil Revelation 1', 'Horror-Survival', 400000, '', 'REREV1.png'),
(26, 'Resident Evil Revelation 2', 'Horror-Survival', 400000, '', 'REREV2.png'),
(27, 'Super Mario Kart 8', 'Racing', 600000, '', 'mk8.png'),
(28, 'Super Mario Bros Wonder', 'Indie-Adventure', 600000, '', 'smb.png'),
(29, 'Samurai Maiden', 'Action-Adventure-OpenWorld', 800000, 'Kamu adalah seorang gadis yang dikirim ke isekai untuk membasi para zombie dan monster', 'SM1.png');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(2, 'Komi Shouko', 'Japan, Tokyo', '2023-07-02 17:30:35', '2023-07-03 17:30:35'),
(7, 'Yasdi Kharismawan', 'Jakarta, Pulau Tidung', '2023-07-04 02:04:14', '2023-07-05 02:04:14'),
(16, 'Yasdi Kharismawan', 'Jakarta, Pulau Tidung', '2023-07-04 03:14:11', '2023-07-05 03:14:11'),
(17, 'yasdi', 'Jakarta, Pulau Tidung', '2023-07-04 03:16:41', '2023-07-05 03:16:41'),
(18, 'Yasdi Kharismawan', 'Jakarta, Pulau Tidung', '2023-07-04 03:21:38', '2023-07-05 03:21:38'),
(19, 'Yasdi Kharismawan', 'Jakarta, Pulau Tidung', '2023-07-04 14:12:19', '2023-07-05 14:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_invoice`, `id_game`, `nama_game`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 4, 'Super Mario Odyssey', 1, 600000, ''),
(2, 1, 5, 'Resident Evil 4', 1, 550000, ''),
(3, 1, 10, 'Litle Kitty Big City', 1, 600000, ''),
(4, 1, 11, 'Super Mario 3D World', 1, 600000, ''),
(5, 2, 5, 'Resident Evil 4', 1, 550000, ''),
(6, 2, 14, 'The Legend of Zelda: Breath of The Wild', 1, 600000, ''),
(7, 2, 12, 'The Legend of Zelda: Tears of The Kingdom', 1, 700000, ''),
(8, 3, 5, 'Resident Evil 4', 1, 550000, ''),
(9, 3, 12, 'The Legend of Zelda: Tears of The Kingdom', 1, 700000, ''),
(10, 3, 4, 'Super Mario Odyssey', 1, 600000, ''),
(11, 4, 4, 'Super Mario Odyssey', 1, 600000, ''),
(12, 4, 5, 'Resident Evil 4', 1, 550000, ''),
(13, 4, 12, 'The Legend of Zelda: Tears of The Kingdom', 1, 700000, ''),
(14, 5, 5, 'Resident Evil 4', 1, 550000, ''),
(15, 5, 11, 'Super Mario 3D World', 2, 600000, ''),
(16, 5, 10, 'Litle Kitty Big City', 2, 600000, ''),
(17, 5, 22, 'Outlast 2', 1, 500000, ''),
(18, 6, 4, 'Super Mario Odyssey', 1, 600000, ''),
(19, 6, 5, 'Resident Evil 4', 1, 550000, ''),
(20, 6, 12, 'The Legend of Zelda: Tears of The Kingdom', 1, 700000, ''),
(21, 6, 10, 'Litle Kitty Big City', 1, 600000, ''),
(22, 7, 5, 'Resident Evil 4', 2, 550000, ''),
(23, 7, 29, 'Samurai Maiden', 1, 800000, ''),
(24, 9, 4, 'Super Mario Odyssey', 1, 600000, ''),
(25, 9, 5, 'Resident Evil 4', 1, 550000, ''),
(26, 9, 29, 'Samurai Maiden', 1, 800000, ''),
(27, 9, 30, 'Batman: The Enemy Within', 1, 600000, ''),
(28, 10, 10, 'Litle Kitty Big City', 1, 600000, ''),
(29, 16, 5, 'Resident Evil 4', 1, 550000, ''),
(30, 16, 10, 'Litle Kitty Big City', 1, 600000, ''),
(31, 16, 14, 'The Legend of Zelda: Breath of The Wild', 1, 600000, ''),
(32, 16, 29, 'Samurai Maiden', 1, 800000, ''),
(33, 17, 4, 'Super Mario Odyssey', 1, 600000, ''),
(34, 17, 5, 'Resident Evil 4', 1, 550000, ''),
(35, 18, 4, 'Super Mario Odyssey', 1, 600000, ''),
(36, 18, 5, 'Resident Evil 4', 1, 550000, ''),
(37, 18, 10, 'Litle Kitty Big City', 1, 600000, ''),
(38, 18, 29, 'Samurai Maiden', 1, 800000, ''),
(39, 19, 4, 'Super Mario Odyssey', 2, 600000, ''),
(40, 19, 10, 'Litle Kitty Big City', 2, 600000, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'mikasa', 'mikasa@gmail.com', 'default.jpg', '$2y$10$Sc/qFo2mnreGoHryxOufeuPHkPiyqppoPc7/KPgMHiN13GM8dHD8y', 2, 1, 1686025077),
(6, 'Ayanami Rei', 'ayanami@gmail.com', 'wallhaven-p9w673.jpg', '$2y$10$iIa0Rl2lTkJ76KODDrDHhe7FecHJzsutw9tJZMrwwA27BU5kU494a', 1, 1, 1686027030),
(7, 'Yasdi Kharismawan', 'yasdikharismawan5@gmail.com', 'Proyek_182.png', '$2y$10$9HB/93OmVeQoNXMXZnBT8.2XpJux6mgvQOuzp6BohTzVbRrjSI2iC', 2, 1, 1686729636);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(8, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(3, 'Menu'),
(10, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(10, 2, 'Games', 'test', 'fas fa-fw fa-gamepad', 1),
(11, 1, 'User Management', 'index', 'fas fa-fw fa-users-cog', 1),
(12, 1, 'Game Management', 'game/index', 'fas fa-fw fa-puzzle-piece', 1),
(14, 10, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(15, 10, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(16, 10, 'Beli Game', 'user/beli_game', 'fas fa-fw fa-gamepad', 1),
(17, 10, 'Home', 'user/home', 'fas fa-fw fa-home', 1),
(20, 1, 'Invoice', 'invoice/index', 'fas fa-fw fa-receipt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
