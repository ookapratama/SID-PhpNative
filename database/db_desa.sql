-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2022 at 10:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `gambar`, `judul`, `deskripsi`, `penulis`, `uploaded`) VALUES
(1, 'informasi.png', 'Taman Nasional Bisseang Laborro', '<p>Wisata Alam Biseang Labboro&#39; Maros - Biseang Labboro&#39; atau yang biasa di kenal dengan sebutan Bislab adalah kawasan wisata yang bisa digunakan untuk kegiatan petualangan yang menantang maupun mengasyikkan, karena dalam kawasan wisata ini terdapat banyak sekali objek wisata yang menunjang kegiatan semacam itu, diantaranya yaitu terdapat kawasan hutan, kawasan sungai , kawasan tebing,dan juga kawasan gua alam, yang sangat cocok untuk aktivitas yang sangat menantang</p>\r\n', 'Ooka Gammara 01', '2022-05-29'),
(2, 'informasi6.png', '$judulasdas', '<p>$deskripsi</p>\r\n', '$penulis', '2022-02-02'),
(4, 'informasi4.png', 'sdlkjf', '<p>alknflkf</p>\r\n', 'lkjsdlkfj', '2022-05-30'),
(7, 'informasi5.png', 'fghagwr', '<p>adfasdffasergasd<s>k;lasjd</s></p>\r\n', 'Santoso', '2022-05-30'),
(8, 'informasi3.png', 'asdfasdfsdfsdaf', '<p>dfasdfsadfasdf</p>\r\n', 'asdfsdaf', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `nama`, `username`, `password`, `profile`) VALUES
(1, 'Ooka', 'admin', 'admin', '20220413_143641_0000.png'),
(61, 'mnb', 'kjhk', 'jhkj', 'IMG20220301205552.jpg'),
(62, 'ksajdh', 'asdasdasdasd', 'kljh', 'anime icons(1).jpg'),
(64, 'Ehem', 'biasa', 'biasa', 'wa.png'),
(65, 'hehehe', 'tes', '12345', 'anime icons.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `uploaded` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `gambar`, `judul`, `uploaded`, `deskripsi`) VALUES
(1, 'produkdesa.png', 'Palekko', '2022-05-30', ''),
(2, 'produkdesa2.png', 'Ayam goreng', '2022-05-30', ''),
(5, 'produkdesa2.png', '$judulasdas', '2022-05-30', ''),
(6, 'produkdesa.png', 'dfgasdfasdf', '2022-05-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `detail` varchar(300) DEFAULT NULL,
  `struktural` varchar(100) DEFAULT NULL,
  `visi` varchar(200) DEFAULT NULL,
  `misi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `sejarah`, `detail`, `struktural`, `visi`, `misi`) VALUES
(1, '<p><strong>Lorem</strong> ipsum dolor sit amet consectetur adipisicing elit. Praesentium excepturi autem nobis deserunt odit minima, cumque dicta repellendus corrupti nemo illum totam delectus doloremque, quam id, neque eum rem earum tempore enim ratione iure nam asperiores. Similique, sint iste praesentium eaque neque quisquam aliquam molestiae amet quia placeat saepe non pariatur ratione ullam odit delectus eos commodi aperiam mollitia maiores doloremque! Dolore voluptatem corrupti dolorum sequi, aperiam doloremque corporis inventore non, rem molestias, culpa ea animi atque fuga! Dolore fugit est beatae incidunt repellendus. Doloribus a debitis, minus distinctio ipsa sapiente quas rem unde! Cum odit placeat fuga nobis aut. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae nulla laudantium, natus, provident voluptatem impedit molestiae nam et fugit inventore labore sunt. Fugit ratione voluptates iste, consequuntur commodi possimus a,</p>\r\n\r\n<p>consequatur incidunt veniam excepturi et. Dolor aut cupiditate distinctio consectetur ullam earum quidem adipisci eligendi sint atque vel, ducimus dolores eius, excepturi deserunt aliquid? Saepe sunt doloribus dolore</p>\r\n\r\n<p>cum ad iure. Distinctio non consequuntur laudantium error itaque nemo in fugit quas porro est! Praesentium amet doloribus consequuntur, ab illum quam? Odio vero neque tempora doloribus assumenda dolores voluptatibus, repellat atque dicta id! Beatae optio quo laborum nulla, voluptatem quis reiciendis!s</p>\r\n', '<p>Desa Samangki memiliki luas 43,62 km&sup2; dan penduduk berjumlah 5.176 jiwa dengan tingkat kepadatan penduduk sebesar 118,66 jiwa/km&sup2; pada tahun 2017.</p>\r\n', '<ol>\r\n	<li>kl;djsadcf</li>\r\n	<li>alks</li>\r\n	<li>as</li>\r\n</ol>\r\n\r\n<p>aldk</p>\r\n', '<p>&ldquo;TERWUJUDNYA DESA SAMANGKI YANG MANDIRI, SEJAHTERA DAN RELIGIUS&rdquo;.</p>\r\n', '<ul>\r\n	<li>.,m ?&lt;&gt;m/l.kml</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>lkjl</li>\r\n	<li>&nbsp;lk;jh</li>\r\n	<li>kladhj</li>\r\n	<li>jklonhlkjn</li>\r\n	<li>klahnjd</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar_utama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `judul`, `gambar_utama`, `deskripsi`) VALUES
(1, 'Taman Nasional Bisseang Laborro', 'wisata.png', 'akflaklfas'),
(2, 'Leang Karassa', 'wisata2.png', 'wetqetqwetqe'),
(3, 'Cagar Alam Karaengta', 'wisata3.png', 'aqfqwfrqwf'),
(7, 'askdflhsf', 'wisata2.png', '<p>lkhflk</p>\r\n\r\n<ul>\r\n	<li>askdj</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>alkdaskdnl</li>\r\n</ol>\r\n'),
(11, 'asdasd', 'wisata.png', '<p>asdasd</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
