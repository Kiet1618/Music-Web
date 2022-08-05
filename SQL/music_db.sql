  -- phpMyAdmin SQL Dump
  -- version 5.0.2
  -- https://www.phpmyadmin.net/
  --
  -- Host: 127.0.0.1
  -- Generation Time: Nov 20, 2020 at 02:00 AM
  -- Server version: 10.4.14-MariaDB
  -- PHP Version: 7.2.33

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  START TRANSACTION;
  SET time_zone = "+00:00";
  --
  -- Database: `music`
  --

  -- --------------------------------------------------------

  --
  -- Table structure for table `playlist`
  --

  CREATE TABLE `playlist` (
    `id` int(30) NOT NULL,
    `user_id` int(30) NOT NULL,
    `title` text NOT NULL,
    `description` text NOT NULL,
    `cover_image` text NOT NULL,
    `date_created` datetime NOT NULL DEFAULT current_timestamp()
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `playlist`
  --

  INSERT INTO `playlist` (`id`, `user_id`, `title`, `description`, `cover_image`, `date_created`) VALUES
  (1, 1, 'Playlist 1', '', 'playlist1 (1).jpg', '2020-11-20 08:52:36'),
  (2, 2, 'Playlist 2', '', 'playlist1 (2).jpg', '2020-11-20 08:58:35'),
  (3, 2, 'My Playlist', '', 'playlist1.jpg', '2020-11-20 08:59:23');

  -- --------------------------------------------------------

  --
  -- Table structure for table `playlist_items`
  --

  CREATE TABLE `playlist_items` (
    `id` int(30) NOT NULL,
    `playlist_id` int(30) NOT NULL,
    `music_id` int(30) NOT NULL,
    `date_created` datetime NOT NULL DEFAULT current_timestamp()
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `playlist_items`
  --

  INSERT INTO `playlist_items` (`id`, `playlist_id`, `music_id`, `date_created`) VALUES
  (1, 6, 1, '2020-11-20 08:52:51'),
  (2, 2, 2, '2020-11-20 08:58:44'),
  (3, 3, 2, '2020-11-20 08:59:46'),
  (4, 3, 1, '2020-11-20 08:59:46');

  -- --------------------------------------------------------

  --
  -- Table structure for table `uploads`
  --

  CREATE TABLE `uploads` (
    `id` int(30) NOT NULL,
    `user_id` int(30) NOT NULL,
    `genre_id` int(30) NOT NULL,
    `title` text NOT NULL,
    `artist` text NOT NULL,
    `description` text NOT NULL,
    `upath` text NOT NULL,
    `cover_image` text NOT NULL,
    `date_created` int(11) NOT NULL DEFAULT current_timestamp()
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `uploads`
  --

  INSERT INTO `uploads` (`id`, `user_id`, `genre_id`, `title`, `artist`, `description`, `upath`, `cover_image`, `date_created`) VALUES
  (1, 1, 1, 'Muộn rồi mà sao còn', 'Sơn Tùng MT-P', '', 'song1.mp3', 'pic1.jpg', 2147483647),
  (2, 1, 1, 'There"s no one at all', 'Sơn Tùng MT-P', '', 'song2.mp3', 'pic1.jpg', 2147483647),
  (3, 1, 1, 'Chạy ngay đi', 'Sơn Tùng MT-P', '', 'song3.mp3', 'pic2.jpg', 2147483647),
  (4, 1, 1, 'Ngày đầu tiên', 'Đức Phúc', '', 'song3.mp4', 'pic3.jpg', 2147483647),
  (5, 1, 1, 'Hôm nay tui buồn', 'Cường SadBoiz', '', 'song5.mp3', 'pic4.jpg', 2147483647),
  (6, 1, 1, 'Chạy về với anh', 'Erik','', 'song6.mp3', 'pic5.jpg', ''),
  (7, 1, 1, 'Gặp U60 nhưng k ở lại', 'Hiền Hồ', '', 'song7.mp3', 'pic6.jpg', 2147483647);

  -- --------------------------------------------------------

  --
  -- Table structure for table `users`
  --

  CREATE TABLE `users` (
    `id` int(30) NOT NULL,
    `firstname` varchar(200) NOT NULL,
    `lastname` varchar(200) NOT NULL,
    `gender` varchar(50) NOT NULL,
    `contact` varchar(50) NOT NULL,
    `address` text NOT NULL,
    `email` varchar(200) NOT NULL,
    `password` text NOT NULL,
    `type` int(1) NOT NULL DEFAULT 2,
    `profile_pic` text NOT NULL,
    `date_created` datetime NOT NULL DEFAULT current_timestamp()
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `users`
  --

  INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `contact`, `address`, `email`, `password`, `type`, `profile_pic`, `date_created`) VALUES
  (1, 'Admin', '', 'Male', '0868722664', '', 'admin@gmail.com', '123', 1, '', '2020-11-18 16:50:06'),
  (2, 'Kiet', 'Ngo', 'Male', '0868722554', 'TPHCM', 'ngokiet3207@gmail.com', '12052002', 2, '', '2020-11-20 08:54:15');

  --

  -- Indexes for table `playlist`
  --
  ALTER TABLE `playlist`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `playlist_items`
  --
  ALTER TABLE `playlist_items`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `uploads`
  --
  ALTER TABLE `uploads`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `users`
  --
  ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

  --
  -- AUTO_INCREMENT for dumped tables
  --

  --
  -- AUTO_INCREMENT for table `genres`
  --

  --
  -- AUTO_INCREMENT for table `playlist`
  --
  ALTER TABLE `playlist`
    MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  --
  -- AUTO_INCREMENT for table `playlist_items`
  --
  ALTER TABLE `playlist_items`
    MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

  --
  -- AUTO_INCREMENT for table `uploads`
  --
  ALTER TABLE `uploads`
    MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

  --
  -- AUTO_INCREMENT for table `users`
  --
  ALTER TABLE `users`
    MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  COMMIT;


