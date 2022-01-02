
CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hoten` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaysinh` varchar(40) NOT NULL,
  `quyen` varchar(1) NOT NULL,
  `malop` varchar(10) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;;

--
-- Dumping data for table `teacher`
--

INSERT INTO `users` (`id`, `username`, `password`, `hoten`, `ngaysinh` , `quyen`,`malop`,`image`) VALUES
(1, 'admin', 'admin', 'admin','20-11-2000','2','admin', 'mufazmi.png'),
(2, 'thuan', 'thuan', 'Nguyễn Quang Thuận','30-11-1989','1','teacher', 'mufazmi.png'),
(3, 'hs1', 'hs1', 'Học Sinh 1','15-11-1989','0','10TIN2122', 'firdos.png'),
(4, 'hs2', 'hs2', 'Học Sinh 2','08-11-2000','0','10TIN2122', 'firdos.png');


--

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);