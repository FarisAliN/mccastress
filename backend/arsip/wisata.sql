-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 02:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_general_nopad_ci NOT NULL,
  `Password` varchar(15) CHARACTER SET armscii8 COLLATE armscii8_general_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `kdadmin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`kdadmin`, `username`, `password`, `nama`, `kategori`) VALUES
(1, 'shella', 'shella', 'SHELLA RAHMAWATI', '1'),
(2, 'rahma', 'rahma', 'SHELLA RAHMAWATI', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbdetailwisata`
--

CREATE TABLE `tbdetailwisata` (
  `kdwisata` int(10) NOT NULL,
  `g1` blob NOT NULL,
  `g2` blob NOT NULL,
  `g3` blob NOT NULL,
  `g4` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdetailwisata`
--

INSERT INTO `tbdetailwisata` (`kdwisata`, `g1`, `g2`, `g3`, `g4`) VALUES
(15, '', '', '', ''),
(16, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbfotohotel`
--

CREATE TABLE `tbfotohotel` (
  `kdhotel` int(10) NOT NULL,
  `g1` blob NOT NULL,
  `g2` blob NOT NULL,
  `g3` blob NOT NULL,
  `g4` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbhotel`
--

CREATE TABLE `tbhotel` (
  `kdhotel` int(11) NOT NULL,
  `hotel` varchar(150) NOT NULL,
  `lokasi` text NOT NULL,
  `konten` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbhotel`
--

INSERT INTO `tbhotel` (`kdhotel`, `hotel`, `lokasi`, `konten`, `harga`, `foto`) VALUES
(13, 'Hotel Kukup Indah', 'Kawasan Pantai Kukup, Jl. Pantai Sel. Jawa, Ngepung, Kemadang, Kec. Tanjungsari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55881. Berjarak sekitar 60 km dari Bandara Adi Sutjipto.', '<p>Penginapan Kukup Indah memiliki dua lantai. Ada 32 kamar yang disediakan Penginapan Kukup Indah, berjenis Superior Triple, Deluxe Triple, dan Standard Double dengan Kipas Angin. Selain itu, Penginapan Kukup Indah juga dilengkapi aula berdaya tampung 150 orang. Ada tiga jenis kamar yang ditawarkan Penginapan Kukup Indah</p>\r\n\r\n<p>Superior Triple Kamar ini memiliki luas 12 m2 dan berlantai keramik.</p>\r\n\r\n<p>Fasilitas: Peralatan mandi Toilet Handuk Rak pengering baju Lantai keramik/marmer Kipas angin Meja kerja Lantai atas hanya bisa diakses dengan tangga TV layar datar</p>\r\n\r\n<p>Deluxe Triple Kamar ini memiliki luas 12 m2, berlantai keramik, dan dilengkap AC.</p>\r\n\r\n<p>Fasilitas: Peralatan mandi Shower Toilet Handuk Rak pengering baju AC Lantai keramik/marmer TV layar datar Meja kerja Lantai atas hanya bisa diakses dengan tangga</p>\r\n\r\n<p>Standard Double dengan Kipas Angin Kamar ini memiliki luas 9 m2 dan berlantai keramik.</p>\r\n\r\n<p>Fasilitas: Peralatan mandi Toilet Handuk Lantai atas hanya bisa diakses dengan tangga Meja kerja Lantai keramik/marmer Kipas angin</p>\r\n\r\n<p>Fasilitas di Hotel Pantai Snorkeling Tempat Parkir Antar-Jemput Bandara (biaya tambahan) Penyewaan Mobil Resepsionis 24 Jam Fasilitas Rapat/Perjamuan AC Kamar Keluarga</p>\r\n', 'Rp138.625/malam', 0x68745f312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tboleholeh`
--

CREATE TABLE `tboleholeh` (
  `kdoleholeh` int(11) NOT NULL,
  `oleholeh` varchar(150) NOT NULL,
  `lokasi` text NOT NULL,
  `konten` text NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tboleholeh`
--

INSERT INTO `tboleholeh` (`kdoleholeh`, `oleholeh`, `lokasi`, `konten`, `waktu`, `foto`) VALUES
(1, 'Gathot Thiwul Yu Tum', 'Jl. Pramuka No.36, Pandansari, Wonosari, Kec. Wonosari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55812', '<p>Kios yang menyediakan aneka oleh-oleh khas Gunung Kidul, seperti gatot, thiwul, rengginang, dan pathilo. Yu Tum membuat thiwul berbagai varian, diantaranya Thiwul Srintil, Thiwul Coblong dan Thiwul Tumpeng. Thiwul Srintil teksturnya agak kasar seperti nasi dengan rasanya yang original, Thiwul Coblong lebih halus teksturnya dengan isian gula merah, sedangkan Thiwul Tumpeng rasanya manis ringan dan berbentuk tumpeng. Tak hanya memiliki rasa gula jawa, Yu Tum juga meiliki beberapa varian rasa mulai dari rasa keju, nangka, pandan dan bahkan tiwul rasa cokelat. Selain tiwul, Yu Tum juga menjual gatot. Sama seperti tiwul, gatot juga makanan tradisional berbahan dasar singkong. Bedanya, gathot adalah gaplek yang difermentasikan sehingga berubah warna menjadi hitam. Gatot berbentuk seperti bulatan kecil berwarna hitam. Rasanya kenyal dan gurih. Biasanya, tiwul dan gatot dimakan bersama dengan parutan kelapa gurih yang menggugah selera. Gatot tiwul Yu Tum dijual dengan harga yang bervariasi mulai dari 6ribu sampai 16ribu untuk kemasan besek, dan 45ribu rupiah untuk ukuran tumpeng. Saat melancong ke Kota Yogyakarta tak ada salahnya mencicipi jajanan ndeso tiwul khas Gunungkidul. Telepon: 0812-1557-9777.</p>\r\n', '06.00–20.00', 0x6f6f5f312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbrestoran`
--

CREATE TABLE `tbrestoran` (
  `kdrestoran` int(11) NOT NULL,
  `restoran` varchar(150) NOT NULL,
  `lokasi` text NOT NULL,
  `konten` text NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbrestoran`
--

INSERT INTO `tbrestoran` (`kdrestoran`, `restoran`, `lokasi`, `konten`, `waktu`, `foto`) VALUES
(1, 'Teras Petruk', 'Jl. Jogja - Wonosari No.KM.20, Karang Sari, Nglanggeran, Kec. Patuk, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55862. ', '<p>Rumah makan yang menyajikan makanan khas Gunungkidul yang disajikan secara tradisionil dengan cita rasa yang baik. Dengan bahan-bahan yang alami dan segar menjadikan rasa makanan kami lebih segar dan lebih nikmat. Dengan nuansa Rumah Limasan yang klasik dan area taman yang hijau, kami sajikan untuk anda dalam menemani anda bersantap dirumah makan kami. Berbagai fasilitas yang kami berikan untuk menambah kenyamanan anda, seperti rest room, area taman yang hijau, dan Mushola sebagai sarana beribadah. Telepon: 0819-0912-1221.</p>\r\n', '08:00 s/d 22:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbwisata`
--

CREATE TABLE `tbwisata` (
  `kdwisata` int(10) NOT NULL,
  `wisata` varchar(50) NOT NULL,
  `lokasi` mediumtext NOT NULL,
  `konten` text NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbwisata`
--

INSERT INTO `tbwisata` (`kdwisata`, `wisata`, `lokasi`, `konten`, `waktu`, `foto`) VALUES
(15, 'Pantai Indrayanti', 'Desa Tepus, Kecamatan Tepus, Kabupaten Gunung Kidul, DIY Yogyakarta. 66 km dari pusat Kota Jogja.', '<p><strong>Wisata Pantai Indrayanti Jogja</strong></p>\r\n\r\n<p>Hal yang ditawarkan oleh pantai Indrayanti Jogja antara lain suasana khas pantai selatan wilayah Yogya yang luas, berbingkai samudera Indonesia dengan airnya yang jernih. Agar bisa lebih tenang menikmati, lebih disarankan untuk berkunjung di saat hari biasa. Di akhir pekan, biasanya tempat ini cukup ramai dikunjungi. Di pantai ini terkadang ada ubur-ubur yang cukup banyak di saat tertentu. Jadi kalau lagi bermain air lalu melihat binantang seperti balon, jangan disentuh ya. Sengatannya cukup terasa di kulit. Jika berkunjung kesini sampai malam, suasana sunset disini ngga kalah indahnya lho.. Seperti biasa, jika anda berkunjung ke pantai-pantai selatan pastikan berhati-hati saat berenang atau bermain air. Selalu patuhi petunjuk keamanan setempat. Pantai selatan yang berbatasan langsung dengan samudera Indonesia memiliki ciri khas gelombang yang cukup besar dengan arus kuat. Selalu utamakan keselamatan anda ya..</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Keunikan Pantai Indrayanti</strong></p>\r\n\r\n<p>Keunikan pantai indrayanti gunung kidul yang berbeda dengan pantai lainnya; Bersih dan lebih terawat. Beda dengan panta-pantai yang lain, pengelola disini aktif memelihara dan tidak segan memberikan sanksi pada pengunjung yang membuang sampah sembarangan. Pelanggaran akan dikenakan denda Rp 10.000. Sejauh ini cukup efektif untuk menjaga kebersihan dan kenyamanan area wisata. Di area sisi sebelah kiri pantai, terdapat tebing yang bisa kita daki. Dari atas tebing ini kita bisa melihat landscape sekitar pantai lebih jelas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Fasilitas</strong></p>\r\n\r\n<p>Fasilitas yang tersedia juga cukup lengkap lho. Disini terdapat berbagai tempat makan ataupun cafe untuk bersantai dan menikmati kuliner khas pantai. Di sepanjang pantai terdapat rangkaian gazebo dan payung pantai yang bisa digunakan untuk istirahat dan menikmati suasana dan pemandangan sekitar. Fasilitas lainnya seperti toilet dan kamar mandi untuk membilas diri setelah bermain air laut juga sudah cukup banyak tersedia. Selain itu, terdapat penyewaan jetski dan juga tempat bermain anak. Ada juga menara lifeguard beserta petugas setempat yang berjaga. Meskipun demikian selalu pastikan ikuti petunjuk dan saran keamanan yang diberikan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Akses Ke Pantai Indrayanti</strong></p>\r\n\r\n<p>Petunjuk arah ke pantai Indrayanti tidak sulit sebetulnya, karena berada di wilayah wisata yang populer. Papan petunjuk jalan juga sudah cukup lengkap, jadi mudah untuk di ikuti. Beberapa petunjuk arah menuliskan pantai sawal atau pantai syawal. Ikuti aja karena pantai sawal dan indrayanti merujuk ke tempat yang sama. Jalan menuju Pantai indrayanti bisa melalui rute:</p>\r\n\r\n<ul>\r\n	<li>Dari Jogja menuju ke jalan Wonosari (ringroad timur), lalu menuju ke arah Piyungan &ndash; Patuk &ndash; Wonosari &ndash; Karangrejek &ndash; Hargosari &ndash; Tepus. Dari tepus tinggal ikuti petunjuk jalan ke arah pantai.</li>\r\n	<li>Rute alternatif lain yang bisa digunakan: via jalan Imogiri &ndash; Siluk &ndash; Panggang &ndash; Saptosari &ndash; Trowono &ndash; Baron. Dari pantai Baron lanjut ke arah timur kurang lebih 10 KM untuk sampai ke Indrayanti.</li>\r\n</ul>\r\n\r\n<p>Rute melalui Wonosari lebih banyak direkomendasikan, karena lebih mudah untuk diikuti oleh pengunjung dari luar Yogya. Santai aja berkendaranya ya, jalannya cukup bagus tapi relatif kecil.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Harga Tiket Pantai Indrayanti</strong></p>\r\n\r\n<ul>\r\n	<li>Harga tiket masuk : Rp 10.000</li>\r\n	<li>Sewa payung pantai : Rp 20.000</li>\r\n	<li>Sewa Gazebo : Rp 30.000</li>\r\n	<li>Toilet dan kamar mandi untuk bilas : Rp 2000 &ndash; Rp 5000</li>\r\n	<li>Sewa jetski : Rp 250.000 / 15 menit</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Penginapan Di Pantai Indrayanti</strong></p>\r\n\r\n<p>Terdapat beberapa penginapan di dekat pantai dengan harga yang cukup terjangkau.</p>\r\n\r\n<ul>\r\n	<li>Walet Guest House. Nomor kontak : 0821-3306-5501, 0878-3860-1129, 0852-0017-5454.</li>\r\n	<li>Penginapan Cemara Udang. Nomor kontak : 0813-2541-4441</li>\r\n	<li>Penginapan Joglowatukelir. Nomor kontak : 0819-0404-4481, 0823-2737-7377</li>\r\n	<li>Griya Pesisir. Nomor kontak : 0877-3801-7351, 0813-2800-5731</li>\r\n	<li>Bamboo Lengkung Cottage. Nomor kontak : 0813-9281-4301, 0813-2637-1994, atau 0852-0002-64888</li>\r\n	<li>Rock Garden Homestay. Nomor kontak : 0822-2531-7339</li>\r\n</ul>\r\n', 'Buka 23 jam', ''),
(16, 'Pantai Drini', 'Gunung Kidul', '', 'Buka 24 jam', 0x6465735f312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Niagahoster Tutorial', 'nhtutorial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(2, 'fathin', 'fth@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'fathin', 'fathin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`kdadmin`);

--
-- Indexes for table `tbdetailwisata`
--
ALTER TABLE `tbdetailwisata`
  ADD PRIMARY KEY (`kdwisata`),
  ADD KEY `kdwisata` (`kdwisata`);

--
-- Indexes for table `tbfotohotel`
--
ALTER TABLE `tbfotohotel`
  ADD PRIMARY KEY (`kdhotel`);

--
-- Indexes for table `tbhotel`
--
ALTER TABLE `tbhotel`
  ADD PRIMARY KEY (`kdhotel`);

--
-- Indexes for table `tboleholeh`
--
ALTER TABLE `tboleholeh`
  ADD PRIMARY KEY (`kdoleholeh`);

--
-- Indexes for table `tbrestoran`
--
ALTER TABLE `tbrestoran`
  ADD PRIMARY KEY (`kdrestoran`);

--
-- Indexes for table `tbwisata`
--
ALTER TABLE `tbwisata`
  ADD PRIMARY KEY (`kdwisata`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `kdadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbdetailwisata`
--
ALTER TABLE `tbdetailwisata`
  MODIFY `kdwisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbfotohotel`
--
ALTER TABLE `tbfotohotel`
  MODIFY `kdhotel` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbhotel`
--
ALTER TABLE `tbhotel`
  MODIFY `kdhotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tboleholeh`
--
ALTER TABLE `tboleholeh`
  MODIFY `kdoleholeh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbrestoran`
--
ALTER TABLE `tbrestoran`
  MODIFY `kdrestoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbwisata`
--
ALTER TABLE `tbwisata`
  MODIFY `kdwisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbdetailwisata`
--
ALTER TABLE `tbdetailwisata`
  ADD CONSTRAINT `tbdetailwisata_ibfk_1` FOREIGN KEY (`kdwisata`) REFERENCES `tbwisata` (`kdwisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbfotohotel`
--
ALTER TABLE `tbfotohotel`
  ADD CONSTRAINT `tbfotohotel_ibfk_1` FOREIGN KEY (`kdhotel`) REFERENCES `tbhotel` (`kdhotel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
