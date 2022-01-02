CREATE TABLE `diemrl` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `malop` varchar(40) NOT NULL,
  `matc` varchar(40) NOT NULL,
  `diem` int(10) NOT NULL,
  `anhmc` varchar(40) ,
  `hocky` varchar(2) NOT NULL
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `diemrl`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `diemrl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
