-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 11:10 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umroh`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `foto`, `isi_artikel`) VALUES
(11, 'SNI ISO 37001 SISTEM MANAJEMEN ANTI SUAP', '32.jpg', '<p>Menurut Kamus Besar Bahasa Indonesia, penyuapan berarti proses, cara, perbuatan menyuap atau menyuapkan. Dalam kamus hukum Black\'s Law Dictionary, penyuapan diartikan sebagai tindakan menawarkan, memberikan, menerima, atau meminta nilai dari suatu barang untuk mempengaruhi tindakan pegawai lembaga atau sejenisnya yang bertanggung jawab atas kebijakan umum atau peraturan hukum.</p><p>Sehingga bisa diartikan bahwa penyuapan adalah tindakan memberikan atau meminta uang, barang, atau bentuk lain dari pemberi suap kepada penerima suap dengan maksud agar penerima suap memberikan kemudahan berupa tindakan atau kebijakan dalam wewenang penerima suap sesuai dengan kepentingan pemberi suap.</p><p>Suap dapat membuat orang yang berhak kehilangan haknya, dan orang yang tidak berhak mendapatkannya. Suap adalah sesuatu yang sangat merusak tatanan masyarakat. Apabila jika suap telah menjadi kebiasaan atau tradisi, maka bisa menghancurkan sebuah negara. Yang menjadi korbannya ialah rakyat dan juga generasi penerus bangsa dengan kondisi negara yang carut marut. Suap seperti penyakit yang secara diam-diam menggerus keadilan dan kemanusiaan. Menurut Undang-undang nomor 20 tahun 2001 pemberantasan tindak pidana korupsi, disebutkan dalam pasal 5, 6, dan 7 bahwa pemberi suap dapat diberi hukuman penjara mulai dari 1 hingga 15 tahun tergantung pada jabatan oknum penerima suap. Dan menurut pasal 12 bahwa penerima suap dapat dihukum paling singkat 4-20 tahun penjara.</p><p>Mengingat besarnya kerusakan yang bisa ditimbulkan oleh kegiatan suap terhadap tatanan masyarakat dan negara, maka Presiden Joko Widodo mengeluarkan Inpres No 10 tahun 2016 tentang Aksi Pencegahan dan Pemberantasan Korupsi. Menindaklanjuti Inpres tersebut, Badan Standardisasi Nasional (BSN) mengadopsi secara identik standar ISO 37001: 2016 menjadi SNI ISO 37001:2016 Sistem Manajemen Anti-Suap. SNI ISO 37001:2016 dapat digunakan untuk menanamkan budaya anti-suap dalam sebuah organisasi/institusi negara maupun swasta. Standar ini mendeteksi potensi penyuapan, sehingga organisas/institusii bisa melakukan pencegahan sejak dini.</p><p>SNI ISO 37001:2016 membahas hal-hal sebagai berikut:</p><ol><li>penyuapan di sektor publik, swasta, dan nirlaba;</li><li>penyuapan oleh organisasi;</li><li>penyuapan oleh personil organisasi yang bertindak atas nama organisasi dan atau keuntungan organisasi;</li><li>penyuapan oleh rekan bisnis organisasi yang bertindak atas nama organisasi atau keuntungan organisasi;</li><li>penyuapan kepada organisasi;</li><li>penyuapan kepada personil organisasi dalam kaitan dengan kegiatan organisasi;</li><li>penyuapan kepada rekan bisnis organisasi dalam kaitan dengan kegiatan organisasi;</li><li>penyuapan langsung dan tidak langsung (misalnya suap yang ditawarkan atau diterima melalui atau oleh pihak ketiga).</li></ol><p>SNI ISO 37001:2016 membantu organisasi mengendalikan praktek penyuapan denagn menyediakan sejumlah langkah penting diantaranya penetapan kebijakan anti-penyuapan, penunjukan petugas yang berkewenangan untuk mengawasi kepatuhan terhadap praktik anti-penyuapan, pembinaan dan pelatihan anggota organisasi, penerapan manajemen resiko pada proyek dan kegiatan organisasi, pengendalian finansial dan komersial, dan pelembagaan laporan prosedur investigasi. Dalam penerapan manajemen anti-suap, kepemimpinan dan masukan dari manajemen puncak adalah kewajiban. Manajemen puncak dianjurkan aktif mencari dan mempertimbangkan rekomendasi berbagai inisiatif anti-penyuapan yang mempromosikan atau mempublikasikan praktik anti-penyuapan.</p><p>Untuk memastikan pemenuhan persyaratan pengakuan internasional tersebut, pada hari ini, bertepatan dengan peringatan Hari Akreditasi Dunia, Badan Standardisasi Nasional dan Komite Akreditasi Naisonal (KAN) meluncurkan skema akreditasi lembaga sertifikasi sistem manajemen anti penyuapan untuk memastikan bahwa lembaga sertifikasi di Indonesia yang memberikan layanan sertifikasi sistem manajemen anti penyuapan berdasarkan ISO 37001: 2016 telah memenuhi persyaratan ISO/IEC 17021-1: 2015 dan ISO/IEC TS 17021-9. Dengan adanya skema ini, lembaga sertifikasi sistem menajemen anti penyuapan diharapkan akan segera terakreditasi KAN untuk memberikan sertifikasi kepada organsiasi yang akan menerapkan SNI ISO 37001.</p><p>?</p>'),
(12, '1. Sistem Manajemen Industri (SMI)', '2.jpg', '<p>Menurut Kamus Besar Bahasa Indonesia, penyuapan berarti proses, cara, perbuatan menyuap atau menyuapkan. Dalam kamus hukum Black\'s Law Dictionary, penyuapan diartikan sebagai tindakan menawarkan, memberikan, menerima, atau meminta nilai dari suatu barang untuk mempengaruhi tindakan pegawai lembaga atau sejenisnya yang bertanggung jawab atas kebijakan umum atau peraturan hukum.</p><p>Sehingga bisa diartikan bahwa penyuapan adalah tindakan memberikan atau meminta uang, barang, atau bentuk lain dari pemberi suap kepada penerima suap dengan maksud agar penerima suap memberikan kemudahan berupa tindakan atau kebijakan dalam wewenang penerima suap sesuai dengan kepentingan pemberi suap.</p><p>Suap dapat membuat orang yang berhak kehilangan haknya, dan orang yang tidak berhak mendapatkannya. Suap adalah sesuatu yang sangat merusak tatanan masyarakat. Apabila jika suap telah menjadi kebiasaan atau tradisi, maka bisa menghancurkan sebuah negara. Yang menjadi korbannya ialah rakyat dan juga generasi penerus bangsa dengan kondisi negara yang carut marut. Suap seperti penyakit yang secara diam-diam menggerus keadilan dan kemanusiaan. Menurut Undang-undang nomor 20 tahun 2001 pemberantasan tindak pidana korupsi, disebutkan dalam pasal 5, 6, dan 7 bahwa pemberi suap dapat diberi hukuman penjara mulai dari 1 hingga 15 tahun tergantung pada jabatan oknum penerima suap. Dan menurut pasal 12 bahwa penerima suap dapat dihukum paling singkat 4-20 tahun penjara.</p><p>Mengingat besarnya kerusakan yang bisa ditimbulkan oleh kegiatan suap terhadap tatanan masyarakat dan negara, maka Presiden Joko Widodo mengeluarkan Inpres No 10 tahun 2016 tentang Aksi Pencegahan dan Pemberantasan Korupsi. Menindaklanjuti Inpres tersebut, Badan Standardisasi Nasional (BSN) mengadopsi secara identik standar ISO 37001: 2016 menjadi SNI ISO 37001:2016 Sistem Manajemen Anti-Suap. SNI ISO 37001:2016 dapat digunakan untuk menanamkan budaya anti-suap dalam sebuah organisasi/institusi negara maupun swasta. Standar ini mendeteksi potensi penyuapan, sehingga organisas/institusii bisa melakukan pencegahan sejak dini.</p><p>SNI ISO 37001:2016 membahas hal-hal sebagai berikut:</p><ol><li>penyuapan di sektor publik, swasta, dan nirlaba;</li><li>penyuapan oleh organisasi;</li><li>penyuapan oleh personil organisasi yang bertindak atas nama organisasi dan atau keuntungan organisasi;</li><li>penyuapan oleh rekan bisnis organisasi yang bertindak atas nama organisasi atau keuntungan organisasi;</li><li>penyuapan kepada organisasi;</li><li>penyuapan kepada personil organisasi dalam kaitan dengan kegiatan organisasi;</li><li>penyuapan kepada rekan bisnis organisasi dalam kaitan dengan kegiatan organisasi;</li><li>penyuapan langsung dan tidak langsung (misalnya suap yang ditawarkan atau diterima melalui atau oleh pihak ketiga).</li></ol><p>SNI ISO 37001:2016 membantu organisasi mengendalikan praktek penyuapan denagn menyediakan sejumlah langkah penting diantaranya penetapan kebijakan anti-penyuapan, penunjukan petugas yang berkewenangan untuk mengawasi kepatuhan terhadap praktik anti-penyuapan, pembinaan dan pelatihan anggota organisasi, penerapan manajemen resiko pada proyek dan kegiatan organisasi, pengendalian finansial dan komersial, dan pelembagaan laporan prosedur investigasi. Dalam penerapan manajemen anti-suap, kepemimpinan dan masukan dari manajemen puncak adalah kewajiban. Manajemen puncak dianjurkan aktif mencari dan mempertimbangkan rekomendasi berbagai inisiatif anti-penyuapan yang mempromosikan atau mempublikasikan praktik anti-penyuapan.</p><p>Untuk memastikan pemenuhan persyaratan pengakuan internasional tersebut, pada hari ini, bertepatan dengan peringatan Hari Akreditasi Dunia, Badan Standardisasi Nasional dan Komite Akreditasi Naisonal (KAN) meluncurkan skema akreditasi lembaga sertifikasi sistem manajemen anti penyuapan untuk memastikan bahwa lembaga sertifikasi di Indonesia yang memberikan layanan sertifikasi sistem manajemen anti penyuapan berdasarkan ISO 37001: 2016 telah memenuhi persyaratan ISO/IEC 17021-1: 2015 dan ISO/IEC TS 17021-9. Dengan adanya skema ini, lembaga sertifikasi sistem menajemen anti penyuapan diharapkan akan segera terakreditasi KAN untuk memberikan sertifikasi kepada organsiasi yang akan menerapkan SNI ISO 37001.</p><p>?</p>'),
(13, 'Lorem ajah', '1-resize2.jpg', '<p>Menurut Kamus Besar Bahasa Indonesia, penyuapan berarti proses, cara, perbuatan menyuap atau menyuapkan. Dalam kamus hukum Black\'s Law Dictionary, penyuapan diartikan sebagai tindakan menawarkan, memberikan, menerima, atau meminta nilai dari suatu barang untuk mempengaruhi tindakan pegawai lembaga atau sejenisnya yang bertanggung jawab atas kebijakan umum atau peraturan hukum.</p><p>Sehingga bisa diartikan bahwa penyuapan adalah tindakan memberikan atau meminta uang, barang, atau bentuk lain dari pemberi suap kepada penerima suap dengan maksud agar penerima suap memberikan kemudahan berupa tindakan atau kebijakan dalam wewenang penerima suap sesuai dengan kepentingan pemberi suap.</p><p>Suap dapat membuat orang yang berhak kehilangan haknya, dan orang yang tidak berhak mendapatkannya. Suap adalah sesuatu yang sangat merusak tatanan masyarakat. Apabila jika suap telah menjadi kebiasaan atau tradisi, maka bisa menghancurkan sebuah negara. Yang menjadi korbannya ialah rakyat dan juga generasi penerus bangsa dengan kondisi negara yang carut marut. Suap seperti penyakit yang secara diam-diam menggerus keadilan dan kemanusiaan. Menurut Undang-undang nomor 20 tahun 2001 pemberantasan tindak pidana korupsi, disebutkan dalam pasal 5, 6, dan 7 bahwa pemberi suap dapat diberi hukuman penjara mulai dari 1 hingga 15 tahun tergantung pada jabatan oknum penerima suap. Dan menurut pasal 12 bahwa penerima suap dapat dihukum paling singkat 4-20 tahun penjara.</p><p>Mengingat besarnya kerusakan yang bisa ditimbulkan oleh kegiatan suap terhadap tatanan masyarakat dan negara, maka Presiden Joko Widodo mengeluarkan Inpres No 10 tahun 2016 tentang Aksi Pencegahan dan Pemberantasan Korupsi. Menindaklanjuti Inpres tersebut, Badan Standardisasi Nasional (BSN) mengadopsi secara identik standar ISO 37001: 2016 menjadi SNI ISO 37001:2016 Sistem Manajemen Anti-Suap. SNI ISO 37001:2016 dapat digunakan untuk menanamkan budaya anti-suap dalam sebuah organisasi/institusi negara maupun swasta. Standar ini mendeteksi potensi penyuapan, sehingga organisas/institusii bisa melakukan pencegahan sejak dini.</p><p>SNI ISO 37001:2016 membahas hal-hal sebagai berikut:</p><ol><li>penyuapan di sektor publik, swasta, dan nirlaba;</li><li>penyuapan oleh organisasi;</li><li>penyuapan oleh personil organisasi yang bertindak atas nama organisasi dan atau keuntungan organisasi;</li><li>penyuapan oleh rekan bisnis organisasi yang bertindak atas nama organisasi atau keuntungan organisasi;</li><li>penyuapan kepada organisasi;</li><li>penyuapan kepada personil organisasi dalam kaitan dengan kegiatan organisasi;</li><li>penyuapan kepada rekan bisnis organisasi dalam kaitan dengan kegiatan organisasi;</li><li>penyuapan langsung dan tidak langsung (misalnya suap yang ditawarkan atau diterima melalui atau oleh pihak ketiga).</li></ol><p>SNI ISO 37001:2016 membantu organisasi mengendalikan praktek penyuapan denagn menyediakan sejumlah langkah penting diantaranya penetapan kebijakan anti-penyuapan, penunjukan petugas yang berkewenangan untuk mengawasi kepatuhan terhadap praktik anti-penyuapan, pembinaan dan pelatihan anggota organisasi, penerapan manajemen resiko pada proyek dan kegiatan organisasi, pengendalian finansial dan komersial, dan pelembagaan laporan prosedur investigasi. Dalam penerapan manajemen anti-suap, kepemimpinan dan masukan dari manajemen puncak adalah kewajiban. Manajemen puncak dianjurkan aktif mencari dan mempertimbangkan rekomendasi berbagai inisiatif anti-penyuapan yang mempromosikan atau mempublikasikan praktik anti-penyuapan.</p><p>Untuk memastikan pemenuhan persyaratan pengakuan internasional tersebut, pada hari ini, bertepatan dengan peringatan Hari Akreditasi Dunia, Badan Standardisasi Nasional dan Komite Akreditasi Naisonal (KAN) meluncurkan skema akreditasi lembaga sertifikasi sistem manajemen anti penyuapan untuk memastikan bahwa lembaga sertifikasi di Indonesia yang memberikan layanan sertifikasi sistem manajemen anti penyuapan berdasarkan ISO 37001: 2016 telah memenuhi persyaratan ISO/IEC 17021-1: 2015 dan ISO/IEC TS 17021-9. Dengan adanya skema ini, lembaga sertifikasi sistem menajemen anti penyuapan diharapkan akan segera terakreditasi KAN untuk memberikan sertifikasi kepada organsiasi yang akan menerapkan SNI ISO 37001.</p><p>?</p>');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_haji`
--

CREATE TABLE `daftar_haji` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `alamat` text NOT NULL,
  `id_paket_haji` int(11) NOT NULL,
  `harga` double NOT NULL,
  `no_telpon` varchar(14) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pembayaran` text NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_haji`
--

INSERT INTO `daftar_haji` (`id`, `nama`, `email`, `password`, `alamat`, `id_paket_haji`, `harga`, `no_telpon`, `status`, `pembayaran`, `informasi`) VALUES
(1, 'haji', 'haji@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jhjhjhjh', 5, 230000, '089766666', 1, 'back_ed.PNG', '<p>khhjhjhjhjhjhjhjhj</p>');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_umroh`
--

CREATE TABLE `daftar_umroh` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `alamat` text NOT NULL,
  `id_paket_umroh` int(11) NOT NULL,
  `harga` double NOT NULL,
  `no_telpon` varchar(14) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pembayaran` text NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_umroh`
--

INSERT INTO `daftar_umroh` (`id`, `nama`, `email`, `password`, `alamat`, `id_paket_umroh`, `harga`, `no_telpon`, `status`, `pembayaran`, `informasi`) VALUES
(6, 'umroh', 'umroh@mail.com', '22512e58749ffead12e90dbd59eddf24', 'bogor', 6, 90000000, '08977474747', 1, 'back_ed2.PNG', '<p>berangkat tanggal 8</p>');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `foto`, `nama_foto`) VALUES
(5, '3.jpg', 'nama'),
(6, 'arrtikel4.jpg', 'keren'),
(7, 'andi1.png', 'oke banget'),
(9, '1-resize.jpg', 'oke'),
(10, '2.jpg', 'lagi masak');

-- --------------------------------------------------------

--
-- Table structure for table `haji`
--

CREATE TABLE `haji` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `harga_paket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haji`
--

INSERT INTO `haji` (`id_paket`, `nama_paket`, `foto`, `harga_paket`) VALUES
(4, 'haji', 'class_diagram2.PNG', '2121212121'),
(5, 'paket haji tes', 'blog.jpg', '230000');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `harga_paket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `foto`, `harga_paket`) VALUES
(4, 'name paket', '3.jpg', '900000'),
(5, 'name ', 'dj.png', '90000'),
(6, 'paket', '2.jpg', '90000000'),
(7, 'paket', 'go.jpg', '800000'),
(8, 'lara', 'ci.jpg', '800000');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi_testi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `no_telpon`, `tanggal`, `isi_testi`) VALUES
(2, 'andi hoerudin', 'andihoerudin24@gmail', '0390903039', '2018-08-23 07:00:38', 'pesan dari oengunjung\r\n'),
(3, 'andi hoerudin', 'andihoerudin24@gmail', '09090909', '2018-08-24 07:40:53', 'sjsjsjsjs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `level`) VALUES
(1, 'andihoerudin', '22512e58749ffead12e90dbd59eddf24', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi_testi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `isi_testi`) VALUES
(1, 'name for testimoni edit', 'this sample text testimoni edit'),
(3, 'andi hoerudin', 'this sample text testimoni add'),
(4, 'fani', 'this sample text testimoni edit'),
(5, 'Badrun', 'this sample text testimoni edit'),
(6, 'amir', 'this sample text testimoni edit');

-- --------------------------------------------------------

--
-- Table structure for table `vidio`
--

CREATE TABLE `vidio` (
  `id_vidio` int(11) NOT NULL,
  `link` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vidio`
--

INSERT INTO `vidio` (`id_vidio`, `link`, `keterangan`) VALUES
(2, '<iframe width=\"300\" height=\"300\" src=\"https://www.youtube.com/embed/Nhc5vaebZY4\" frameborder=\"1\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>                       ', 'oke '),
(4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/U-yg7gVPoiU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'oke banget'),
(5, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pU7_y3mT_fo\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'oke banget'),
(6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9kLtaE3rZDU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'oke'),
(7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/R-UWk4R60T8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'oke ajah'),
(8, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/f1elqjVnwN8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'oke banget');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `daftar_haji`
--
ALTER TABLE `daftar_haji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket_haji` (`id_paket_haji`);

--
-- Indexes for table `daftar_umroh`
--
ALTER TABLE `daftar_umroh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket_umroh` (`id_paket_umroh`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `haji`
--
ALTER TABLE `haji`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id_vidio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `daftar_haji`
--
ALTER TABLE `daftar_haji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar_umroh`
--
ALTER TABLE `daftar_umroh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `haji`
--
ALTER TABLE `haji`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_haji`
--
ALTER TABLE `daftar_haji`
  ADD CONSTRAINT `daftar_haji_ibfk_1` FOREIGN KEY (`id_paket_haji`) REFERENCES `haji` (`id_paket`);

--
-- Constraints for table `daftar_umroh`
--
ALTER TABLE `daftar_umroh`
  ADD CONSTRAINT `daftar_umroh_ibfk_1` FOREIGN KEY (`id_paket_umroh`) REFERENCES `paket` (`id_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
