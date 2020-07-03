-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2020 pada 21.55
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fimela`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beauty`
--

CREATE TABLE `tb_beauty` (
  `id_beauty` int(11) NOT NULL,
  `judul_beauty` varchar(1000) NOT NULL,
  `ket_beauty` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_beauty`
--

INSERT INTO `tb_beauty` (`id_beauty`, `judul_beauty`, `ket_beauty`, `gambar`) VALUES
(3, 'Tips Memiliki Kulit Wajah Cantik dan Sehat Secara Alami tanpa Menggunakan Makeup', 'Rajin merawat kulit, bisa membuat kulit wajah cantik dan sehat walau tanpa makeup', 'apa.jpg'),
(6, 'Kembali Dibuka, Intip 4 Protokol Kesehatan saat New Normal di Klinik Kecantikan', 'Wabah virus corona memaksa kita untuk menjalani kehidupan new normal. Kebiasaan baru', '062214900_1593579968-IMG_0642.jpg'),
(8, '6 Cara Mudah Menata Rambut Lepek Agar Lebih Bervolume', 'Rambut tipis dan flat sekilas dapat lebih mudah diatur. Meski membutuhkan waktu sebentar', '028499100_1593583286-adult-back-view-beautiful-blur-241558.jpg'),
(9, 'Memiliki Standar Kecantikan Berbeda dari Girl Grup Korea, Begini Rutinitas Riasan Wajah Hwasa Mamamoo', 'comeback solo dengan merilis album perdana bertajuk Maria', '066253900_1593576389-91466044_104009947864259_8232170138905809231_n.jpg'),
(10, 'Cara Mudah Menghilangkan Bulu Halus di Wajah\r\n', 'Bulu-bulu halus yang timbul di wajah, dapat dihilangkan dengan mudah.', '091351900_1593508421-icons8-team-y2T5hT7pWx4-unsplash.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beauty2`
--

CREATE TABLE `tb_beauty2` (
  `id_beauty` int(11) NOT NULL,
  `judul_beauty` varchar(1000) NOT NULL,
  `ket_beauty` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_beauty2`
--

INSERT INTO `tb_beauty2` (`id_beauty`, `judul_beauty`, `ket_beauty`, `gambar`) VALUES
(1, 'Perawatan Rumahan untuk Kulit Tampak Cerah dan Sehat\r\n', 'Perawatan untuk kulit agar lebih cerah dan sehat, bisa dilakukan di rumah saja.', '097912700_1545882995-shutterstock_672336556.jpg'),
(2, '\r\n4 Cara Mudah dan Cepat Bikin Bulu Mata Lentik Sepanjang Hari\r\n', 'Simak cara tercepat bikin bulu mata lentik.', '051903700_1539692236-Mihai_Stefan.jpg'),
(3, 'Mencerahkan Wajah Kusam dengan Perawatan Kecantikan Alami Menggunakan Jeruk\r\n', 'Melihat manfaat jeruk untuk perawatan kecantikan wajah.', '090060300_1591858881-cut-oranges-2611810.jpg'),
(4, 'Produk Kompleksi Terbaru dari BLP Beauty untuk Sempurnakan Riasan Harian\r\n', '2 produk teranyar yang mampu sempurnakan kompleksi kulit secara maksimal, dari BLP Beauty.', '096359000_1593109258-102662801_561719671194733_2653627406562326474_n.jpg'),
(5, 'Hindari Kebiasaan yang Bisa Membuat Rambut Cepat Rusak\r\n', 'Tanpa disadari, ternyata beberpaa kebiasaan bisa membuat rambut cepat rusak.', '077871300_1593503999-allie-89k7poPsypk-unsplash.jpg'),
(8, 'Kompetisi Online Nail Art se-Indonesia Berhadiah Beasiswa\r\n', 'Nail Art House menggelar Mystery Box Nail Competition 2020 berhadiah lebih dari 300 juta termasuk paket beasiswa', '083207600_1593508431-designecologist-r-Ej0NQmFlQ-unsplash.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beauty3`
--

CREATE TABLE `tb_beauty3` (
  `id_beauty` int(11) NOT NULL,
  `judul_beauty` varchar(1000) NOT NULL,
  `ket_beauty` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_beauty3`
--

INSERT INTO `tb_beauty3` (`id_beauty`, `judul_beauty`, `ket_beauty`, `gambar`) VALUES
(1, 'Masker Rambut Alami Berbahan Dasar Kuning Telur untuk Rambut Kusam\r\n', 'Agar terlihat lebih berkilau, rawat rambut kusam menggunakan masker kuning telur.', '042181800_1593501794-autri-taheri-_PYj9cbIpIw-unsplash__1_.jpg'),
(2, 'Tips Menenangkan dan Memperbaiki Kondisi Kulit dengan Minyak Lavender\r\n', 'Simak di sini tips menenangkan dan memperbaiki kondisi kulit dengan minyak lavender, penasaran?', '037357800_1539253296-Katherine_Hanlon.jpg'),
(3, '5 Cara Mudah Mendapatkan Bibir Seksi Seperti Kylie Jenner Secara Alami Tanpa Filler\r\n', 'Cara mudah dapatkan bibir seksi dan penuh seperti Kylie Jenner.', '093146600_1593497876-makin-hot-menggoda-kylie-jenner-menjelm-1e3d5a__1_.jpg'),
(4, '3 Hal yang Harus Dihindari Pemilik Kulit Kering\r\n', 'Berhenti melakukan tiga hal ini jika kamu memiliki kulit kering.', '077902500_1560157095-shutterstock_1095966194.jpg'),
(5, 'Selain Mengobati Jerawat, Tea Tree Juga Bermanfaat Atasi Ketombe\r\n', 'Simak manfaat tea tree untuk atasi ketombe', '040938300_1572252119-shutterstock_1463063651.jpg'),
(6, 'Ketahui Pengaruh Buruk Cahaya Biru dari Gadget pada Kulit\r\n', 'Simak di sini pengaruh buruk cahaya biru dari gadget pada kulitmu.', '093968000_1576141630-shutterstock_1115046023.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_celebrity`
--

CREATE TABLE `tb_celebrity` (
  `id_celebrity` int(11) NOT NULL,
  `judul_celebrity` varchar(1000) NOT NULL,
  `isi_celebrity` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_celebrity`
--

INSERT INTO `tb_celebrity` (`id_celebrity`, `judul_celebrity`, `isi_celebrity`, `gambar`) VALUES
(1, 'Lebih Dekat dengan Raphael Maitimo, Pesepakbola yang Dekat dengan Agnez Mo\r\n', 'Pesepakbola Indonesia, Raphael Maitimo sudah lama dikabarkan dekat dengan Agnez Mo.', '003529200_1586753175-Agnez_Mo_Raphael_Maitimo.jpg'),
(2, 'Tradisional tapi Modis, Outfit BLACKPINK di MV Baru Timbulkan Pro Kontra\r\n', 'Beberapa netter soroti hanbok versi modern BLACKPINK di MV How You Like That.', '091275600_1593583992-bp2.jpg'),
(3, 'Nikita Willy Resmi Dilamar Indra Priawan\r\n', 'Kabar bahagia tersebut dibagikan Nikita Willy di laman instagramnya baru-baru ini', '096057900_1593541526-nikita.jpg'),
(4, 'Unggahan Engku Emran Usai Laudya Cynthia Bella Umumkan Cerai, Tentang Cara Pandang Beda dan Kehilangan\r\n', 'Usai Bella mengumumkan perceraiannya, Engku Emran pun mengunggah sebuah kisah di Instagram Story miliknya', 'e0602e9dd524888dbd1a80eb14301709-008446400_1508502534-Untitled-7.jpg'),
(5, 'Nycta Gina Shock Suhu Badan Anaknya 40,4 Derajat Celcius\r\n', 'Nycta Gina sempat shock mengetahui anaknya tiba-tiba demam tinggi hingga mencapai suhu 40,4 derajat celsius', '083984300_1593512931-74576073_147162396956460_3485227749345359525_n.jpg'),
(6, 'Nasehat Nagita Slavina untuk Aurel Hermansyah yang Siap Menikah\r\n', 'Aurel yang belakangan memiliki niat untuk menikah, mendatangi Nagita untuk mendapatkan nasehat seputar pernikahan', '010429200_1569423175-Nagita_Slavina_foto_by_Bambang_E_Ros__8_.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_celebrity2`
--

CREATE TABLE `tb_celebrity2` (
  `id_celebrity` int(11) NOT NULL,
  `judul_celebrity` varchar(1000) NOT NULL,
  `ket_celebrity` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_celebrity2`
--

INSERT INTO `tb_celebrity2` (`id_celebrity`, `judul_celebrity`, `ket_celebrity`, `gambar`) VALUES
(1, 'Terinspirasi Pahlawan Tak Terlihat, Giring Ganesha Tulis Lagu Baru\r\n', 'Giring ciptakan karya untuk mereka yang berjuang tapi minim apresiasi.', '083112100_1558691908--384741549085594198_IMG_3974.jpg'),
(2, 'Ultah, Azriel Hermansyah Dapat Kado Jam Tangan Mewah dan Sepatu Limited Edition\r\n', 'Azriel Hermansyah usianya baru saja genap 20 tahun. bertepatan hari istimewanya, Azriel mendapat banyak kado. Ashanty memberikan kado jam tangan mewah yang harganya ratusan juta', '077635800_1593509949-74522359_282459569767950_6852343560116258234_n.jpg'),
(3, 'Sulit Tidur Jadi Alasan Deddy Corbuzier Gunakan Psikotropika\r\n', 'Deddy Corbuzier mengaku sudah cukup lama mengonsumsi psikotropika jenis benzo pada Deputi Pemberantas BNN Irjen Pol Arman Depari.', '061311300_1524661378-0E6A1283.jpg'),
(4, '6 Fakta Seputar Perceraian Laudya Cynthia Bella dan Engku Emran\r\n', 'Sebelum bercerai, Bella dan Emran sudah berusaha mempertahankan rumah tangganya', 'c18c9e95fd780fc470322032479ac1a1kasar.jpg'),
(5, 'Lirik Lagu BTS, Stay Gold\r\n', 'Rilis lagu berbahasa Jepang, berikut lirik lagu Stay Gold dari BTS.', '057737300_1592576671-063_1207763472.jpg'),
(6, 'Laudya Cynthia Bella Akui Sudah Bercerai dengan Engku Emran\r\n', 'Bella akhirnya membuat pengakuan jika dirinya dan Engku Emran sudah bercerai', '011635000_1520834679-7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_celebrity3`
--

CREATE TABLE `tb_celebrity3` (
  `id_celebrity` int(11) NOT NULL,
  `judul_celebrity` varchar(1000) NOT NULL,
  `ket_celebrity` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_celebrity3`
--

INSERT INTO `tb_celebrity3` (`id_celebrity`, `judul_celebrity`, `ket_celebrity`, `gambar`) VALUES
(1, 'Jadi Trending Topic, Perseteruan Jae DAY6 dan JYP Entertainment Resahkan Fans\r\n', 'Jae DAY6 sempat curhat tentang keluhannya terhadap agensi, fans dibuat resah.', '004437600_1593566822-jd2.jpg'),
(2, 'Cerita Angelica Simperler 3 Bulan Kenal Hingga Akhirnya Nikah\r\n', 'Angelica Simperler dan Rico Hidros sudah 10 hari menjadi sepasang suami istri. Tidak butuh waktu lama bagi keduanya untuk menjalin hubungan. Dengan adanya pandemi, keduanya jarang ketemu dan hingga akhirnya sepakat nikah meski baru kenal 3 bulan', '012780700_1593497696-105971750_308421946982906_4577378399875966893_n.jpg'),
(3, 'Gaya Luna Maya dengan Sepeda Rp 60 Juta\r\n', 'Luna Maya mendapat perhatian karena harga sepedanya yang fantastis', '000732400_1593086871-lunamaya_83982025_521209068777134_583895069645400864_n.jpg'),
(4, 'Baim Wong Sambangi Istana Cinere, Intip Potret Rumah Mewah Anang-Ashanty\r\n', 'Sekitar tiga bulan mencari rumah belum ada yang cocok, Baim Wong mendatangi Istana Cinere milik Anang Hermansyah dan Ashanty', '019314700_1593491702-Untitled-27.jpg'),
(5, 'Masih Tidur Bareng Ibu jadi Alasan Brisia Jodie Belum Mau Menikah\r\n', 'Penyanyi muda berbakat, Brisia Jodie mengaku belum memiliki keinginan untuk menikah muda karena alasan ini.', '015704300_1553850387-20190328232656_IMG_4449-01.jpg'),
(6, 'Ashanty Buka Suara Tentang Hubungan Aurel Hermansyah dan Atta Halilintar\r\n', 'Hubungan Aurel Hermansyah dan Atta Halilintar disebut setting-an, Ashanty angkat bicara', '076539600_1593490107-106105440_152227549716880_6213175836009077592_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fashion`
--

CREATE TABLE `tb_fashion` (
  `id_fashion` int(11) NOT NULL,
  `judul_fashion` varchar(1000) NOT NULL,
  `isi_fashion` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fashion`
--

INSERT INTO `tb_fashion` (`id_fashion`, `judul_fashion`, `isi_fashion`, `gambar`) VALUES
(1, 'Wajib Kamu Miliki, Ini 5 Aksesori yang Menjadikan Tampilan Semakin Fashionable\r\n', 'Aksesori yang membuat tampilanmu semakin fashiobnable.', '1.1.jpg'),
(2, 'Suguhkan Koleksi Sustainable Fashion, Ali Charisma Hadirkan Busana Resort Wear\r\n', 'Seperti apa koleksi resort wear yang mengutamakan kenyamanan dari Ali Charisma, mengusung konsep sustainable fashion? Kita simak ulasannya berikut ini.', '1.2.jpg'),
(3, '5 Tren Fashion yang Sedang Booming di Korea\r\n', 'Mengintip 5 tren fashion yang sedang booming di Korea.', '1.3.jpg'),
(4, '4 Tips Memilih Kaca Mata Berdasarkan Bentuk Wajah\r\n', 'Pilih kaca mata sesuai bentuk wajahmu.', '1.4.jpg'),
(5, 'Personal Style Rebecca Klopper\r\n', 'Seperti apa personal style bintang sinetron Mermaid in Love, Rebecca Klopper? Yuk, cek video di atas!', '1.6.jpg'),
(6, 'Dior Merilis Koleksi Sneakers Air Jordan Edisi Terbatas\r\n', 'Cek di sini tata cara pembelian dan detail koleksinya.', '2.1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fashion2`
--

CREATE TABLE `tb_fashion2` (
  `id_fashion` int(11) NOT NULL,
  `judul_fashion` varchar(1000) NOT NULL,
  `ket_fashion` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fashion2`
--

INSERT INTO `tb_fashion2` (`id_fashion`, `judul_fashion`, `ket_fashion`, `gambar`) VALUES
(1, 'Tampil Stylish dengan Gaya Hijab Ala Laudya Cynthia Bella\r\n', 'Intip gaya hijab dari Laudya Cynthia Bella', '2.2.jpg'),
(2, '[QUIZ] Menebak Kepribadian Seseorang dari Gaya Berpakaiannya\r\n', 'Tebak kepribadianmu dari gaya berpakaian dengan mengikuti kuis berikut ini.', '2.3.jpg'),
(3, 'Tas Vegan, Konsep Sustainable dalam Koleksi Fashion yang Mewah\r\n', '1 People merilis koleksi tas vegan dengan konsep sustainable fashion, penasaran?', '2.4.jpg'),
(4, 'Edisi Terbatas Paling Dinanti, Koleksi Kolaborasi Dior x Jordan untuk Dior Fall 2020 Men\'s Show\r\n', 'Dior melakukan kolaborasi menarik dengan Jordan Brand merilis koleksi sneakers edisi terbatas, penasaran?', '2.1.jpg'),
(5, 'Coach Pre-Fall 2020, Bernostalgia ke Mode di Era Awal 2000an yang Santai\r\n', 'Coach meluncurkan koleksi pre fall 2020 dengan signature chambray yang mengingatkan kita akan mode di era awal tahun 2000-an.', '2.5.jpg'),
(6, 'Amot Syamsuri Muda Tetap Bebas Berkarya di Tengah Pandemi dengan Koleksi Busana Bernuansa 80an\r\n', 'Simak koleksi busana terbaru dari Amotsyamsurimuda.', '2.6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fashion3`
--

CREATE TABLE `tb_fashion3` (
  `id_fashion` int(11) NOT NULL,
  `judul_fashion` varchar(1000) NOT NULL,
  `ket_fashion` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fashion3`
--

INSERT INTO `tb_fashion3` (`id_fashion`, `judul_fashion`, `ket_fashion`, `gambar`) VALUES
(1, '5 Rekomendasi Barang yang Wajib Ada di Dalam Tas Perempuan\r\n', 'Catat, barang-barang ini harus ada didalam tasmu.', '2.7.jpg'),
(2, 'Koleksi Modest Wear Menggemaskan Hasil Kolaborasi dengan Hello Kitty\r\n', 'Seperti apa koleksi brand busana modest wear hasil kolaborasi Hijabchic dengan Hello Kitty? Yuk kita simak di sini.', '2.8.jpg'),
(3, 'Onitsuka Tiger x Willow Smith Ajak Saling Jaga Bumi\r\n', 'Onitsuka Tiger menunjuk Willow Smith sebagai brand ambassador terbaru dengan misi menjaga planet ini', '2.9.jpg'),
(4, 'Busana Blackpink dalam Movie How You Like That, Dibanjiri Brand Ternama Dunia\r\n', 'Tampilan busana Blackpink dalam movie terbarunya', '3.1.jpg'),
(5, 'Rilis Video Klip Terbaru, Penampilan Lisa Blackpink Curi Perhatian\r\n', 'Dalam balutan Celine, penampilan Lisa BLACKPINK terlihat menawan.', '3.2.jpg'),
(6, '9 Desain Face Shield Lindungi Tenaga Kesehatan dari Virus Corona\r\n', 'Dari arsitek, desainer fashion, sampai brand dunia memproduksi face shield untuk melindungi tenaga kesehatan di dunia', '3.3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fimelahood`
--

CREATE TABLE `tb_fimelahood` (
  `id_fimelahood` int(11) NOT NULL,
  `judul_fimelahood` varchar(1000) NOT NULL,
  `isi_fimelahood` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fimelahood`
--

INSERT INTO `tb_fimelahood` (`id_fimelahood`, `judul_fimelahood`, `isi_fimelahood`, `gambar`) VALUES
(1, 'Tips Hidup Minimalis di Masa Pandemi ala Komunitas Lyfe With Less\r\n', 'Ingin belajar hidup minimalis tapi bingung mulai dari mana? Simak artikel berikut ini.', '085289300_1593574196-photo-1449247709967-d4461a6a6103_lyfe_with_less.jpg'),
(2, 'Daftar Pemenang Hampers The Body Shop di Fimelahood From Home Pahlawan Lingkungan\r\n', 'Ingin dapat hampers kece juga? Ikuti acara Fimelahood From Home.', '027112300_1559031869-nippon_4_673x373.jpg'),
(3, 'Gabung ke Grup WhatsApp Fimelahood dan Dapatkan Uang Elektronik Total Rp1 Juta\r\n', 'Ada hadiah uang elektronik total Rp1 juta buat kamu yang gabung ke grup WhatsApp Fimelahood.', '085502100_1593147955-3_artikel_fit_prev.jpg'),
(4, 'Komunitas Semut Foto, Komunitas Hobi dan Edukasi Fotografi di Bandung\r\n', 'Inilah salah satu komunitas pencinta fotografi yang ada di Bandung, Komunitas Semut Foto (KSF).', '084056100_1592804829-IMG-20190825-WA0040.jpg'),
(5, 'Raih Rp1 Juta Uang Elektronik di Giveaway Fimelahood Periode Juni\r\n', 'Siapa yang mau dapat uang elektronik Rp1 juta untuk 4 orang pemenang? Cari tahu jawabannya di sini.', '013883700_1592889987-Don_Agnello.jpg'),
(6, 'Saksikan Fimelahood From Home Lewat Live Streaming di Vidio.com\r\n', 'Jangan sedih kalau belum terpilih jadi peserta Fimelahood From Home, kamu bisa saksikan lewat Vidio.com.', '091138100_1592800084-Etienne_Boulanger.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fimelahood2`
--

CREATE TABLE `tb_fimelahood2` (
  `id_fimelahood` int(11) NOT NULL,
  `judul_fimelahood` varchar(1000) NOT NULL,
  `ket_fimelahood` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fimelahood2`
--

INSERT INTO `tb_fimelahood2` (`id_fimelahood`, `judul_fimelahood`, `ket_fimelahood`, `gambar`) VALUES
(1, 'Hadiah Uang Elektronik Total Rp1 Juta di Grup WhatsApp Fimelahood, Join Sekarang!\r\n', 'Buat kamu yang belum bergabung ke grup WhatsApp Fimelahood, silahkan gabung sekarang. Ada giveaway setiap akhir bulan-nya lho.', '009107100_1592798959-4_artikel_fit_prev.jpg'),
(2, 'Sharing Session Pahlawan Lingkungan di Fimelahood From Home, Yuk Buruan Daftar!\r\n', 'Fimelahood From Home ada lagi, lho! Bulan ini diadakan pada 27 Juni 2020.', '009669100_1592300325-Artikel_size_prev.jpg'),
(3, 'Muslima Beauty Community, Wadah Para Konten Kreator Kecantikan\r\n', 'Satu lagi komunitas kecantikan yang bisa kamu ikuti, namanya adalah Muslima Beauty Community.', '098134700_1591946451-Gathering_Muslima_Beauty_Squad_2018_bersama_Delmira_Prabu.jpg'),
(4, 'Fimelahood From Home Ada Lagi 27 Juni Nanti, Daftar Langsung di Sini\r\n', 'Fimelahood From Home kali ini akan mengangkat topik “Kita Bisa Jadi Pahlawan Lingkungan”. Langsung daftar yuk!', '025707200_1592534820-Artikel_size_prev.jpg'),
(5, 'Lyfe With Less, Komunitas Para Penggiat Gaya Hidup Minimalis\r\n', 'Seperti apa, sih, gaya hidup minimalis? Simak jawabannya lewat artikel berikut ini.', '075890000_1591756097-711ad409-7807-4680-a584-50254742ce3c.jpg'),
(6, 'Sudah Daftar WAG Fimelahood tapi Tidak Kunjung Diundang ke Grup?\r\n', 'Belum bergabung ke grup WhatsApp Fimelahood? Yuk, segera gabung dengan memenuhi persyaratannya!', '058483500_1591934970-hl_ROBIN_WORRALL.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fimelahood3`
--

CREATE TABLE `tb_fimelahood3` (
  `id_fimelahood` int(11) NOT NULL,
  `judul_fimelahood` varchar(1000) NOT NULL,
  `ket_fimelahood` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fimelahood3`
--

INSERT INTO `tb_fimelahood3` (`id_fimelahood`, `judul_fimelahood`, `ket_fimelahood`, `gambar`) VALUES
(1, 'Bike to Work di Era New Normal\r\n', 'Apakah masih aman untuk bersepeda di masa pandemi virus Corona seperti sekarang ini?', '019485100_1591940943-Capture_1.jpg'),
(2, 'Sahabat Fimela di Bali, Sudah Gabung ke Grup WhatsApp Fimelahood Belum?\r\n', 'Buat kamu sahabat Fimela yang berada di Bali dan sekitarnya, dapatkan berbagai informasi seputar perempuan di grup WhatsApp Fimelahood.', '037872600_1590129074-shutterstock_1531306946.jpg'),
(3, 'Britzone ID, Ajak Masyarakat Tak Perlu Takut Salah Berbahasa Inggris\r\n', 'Ketika berkumpul, para anggota Britzone mengobrol pakai bahasa Inggris, lho!', '075890000_1591756097-711ad409-7807-4680-a584-50254742ce3c.jpg'),
(4, '10 Pemenang Giveaway Fimelahood yang Berhak Dapat Pulsa Senilai Rp1 Juta\r\n', 'Telah ditetapkan 10 pemenang giveaway Fimelahood periode Mei 2020. Siapa sajakah mereka?', '076544900_1591332368-hl_brooke_cagle.jpg'),
(5, 'Jakarta Vegan Guide Buka Berbagai Kelas Online di Masa Pandemi Covid-19\r\n', 'Untuk sebarkan info terkait soal vegan ke masyarakat, Jakarta Vegan Guide buka kelas masak berbasis online.', '024066500_1591018668-Kristina_Tripkovic_jvg.jpg'),
(6, 'Lyfe With Less, Komunitas Para Penggiat Gaya Hidup Minimalis\r\n', 'Seperti apa, sih, gaya hidup minimalis? Simak jawabannya lewat artikel berikut ini.', '006653500_1592192839-93f65f54-c8b6-4996-84e8-20e0783a31e4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lifestyle`
--

CREATE TABLE `tb_lifestyle` (
  `id_lifestyle` int(11) NOT NULL,
  `judul_lifestyle` varchar(1000) NOT NULL,
  `isi_lifestyle` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lifestyle`
--

INSERT INTO `tb_lifestyle` (`id_lifestyle`, `judul_lifestyle`, `isi_lifestyle`, `gambar`) VALUES
(1, 'Tak Perlu Menunggu Sakit untuk Menyadari Pentingnya Jaga Kesehatan\r\n', 'Pasca berobat aku mulai mengubah pola hidupku.', '000842800_1585730459-shutterstock_148038533.jpg'),
(2, 'Cara Membersihkan Kolang-Kaling, Cukup Pakai Air Cucian Beras\r\n', 'Begini cara membersihkan kolang-kaling cukup dengan air cucian beras.', '073324100_1593592044-shutterstock_1735815788.jpg'),
(3, 'Bulan Juli 2020 Akan Jadi Bulan Terburuk untuk 3 Zodiak Ini\r\n', 'Ini sekian zodiak yang diprediksi akan jalani Bulan Juli dengan buruk.', '009030100_1593589367-Photo_by_Indrian_Potret_on_Unsplash_1.jpg'),
(4, 'Resep Ramuan Alami yang Bisa Menyembuhkan Gatal di Kulit\r\n', 'Gatal di kulit bisa disembuhkan dengan bahan-bahan alami.', '018132900_1593535198-itchy-skin-2120192.jpg'),
(5, 'Karakter Masing-Masing Zodiak dalam Menjalani Hubungan Percintaan\r\n', 'Intip seperti apa karaktermu dalam menjalani sebuah hubungan berdasarkan zodiak', '007841300_1564731257-shutterstock_507199447.jpg'),
(6, 'Bulan Juli 2020 Akan Jadi Bulan Terbaik untuk 3 Zodiak Ini\r\n', 'Ini sekian zodiak yang diramal akan jalani bulan terbaik Juli ini.', '079170500_1593587770-karl-joshua-bernal-r0aqW0V3GYg-unsplash.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lifestyle2`
--

CREATE TABLE `tb_lifestyle2` (
  `id_lifestyle` int(11) NOT NULL,
  `judul_lifestyle` varchar(1000) NOT NULL,
  `ket_lifestyle` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lifestyle2`
--

INSERT INTO `tb_lifestyle2` (`id_lifestyle`, `judul_lifestyle`, `ket_lifestyle`, `gambar`) VALUES
(1, 'Marissa Hutabarat dan Perjalanan Kariernya jadi Calon Hakim di Amerika\r\n', 'Perjalanan perempuan keturunan Indonesia Marissa Hutabarat yang mencalonkan diri jadi hakim di Amerika', '024165900_1593589767-2-1.jpg'),
(2, 'Untuk Menghilangkan Sifat Minder, Perubahan Harus Dimulai dari Diri Sendiri\r\n', 'Bangkit menjadi pribadi yang lebih baik.', '092578100_1557127081-drama_dunia_kerja_HL.jpg'),
(3, 'Prediksi Ramalan Zodiak Sagitarius di Bulan Juli 2020\r\n', 'Ini prediksi ramalan untuk zodiak Sagitarius selama Bulan Juli 2020.', '090879100_1560240557-beautiful-beauty-cute-2247450.jpg'),
(4, 'Kenali Diet Hominy yang Sehat dan Cepat Membuat Berat Badan Turun\r\n', 'Diet merupakan solusi cepat untuk menurunkan berat badan.', '082813100_1593526491-bill-oxford-aIlAhLdwk2g-unsplash__2_.jpg'),
(5, 'Prediksi Ramalan Zodiak Scorpio di Bulan Juli 2020\r\n', 'Ini ramalan zodiak Scorpio secara menyeluruh selama Bulan Juli 2020.', '070916000_1575015407-photo-of-woman-standing-beside-white-wall-3284698.jpg'),
(6, 'Memperbaiki Kualitas Hidup dengan Konsisten Menulis sebelum Tidur Malam\r\n', 'Kebiasaan menulis setiap malam.', '079766200_1590648449-kelebihan_begadang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lifestyle3`
--

CREATE TABLE `tb_lifestyle3` (
  `id_lifestyle` int(11) NOT NULL,
  `judul_lifestyle` varchar(1000) NOT NULL,
  `ket_lifestyle` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lifestyle3`
--

INSERT INTO `tb_lifestyle3` (`id_lifestyle`, `judul_lifestyle`, `ket_lifestyle`, `gambar`) VALUES
(1, 'Cara agar Berhenti Menunda Pekerjaan dan Waktu Tidak Terbuang Percuma\r\n', 'Kebiasaan menunda pekerjaan penting mulai detik ini harus kita tinggalkan.', '054353700_1590649447-pagi_konsentrasi.jpg'),
(2, 'Setelah Pengumuman PPDB, Disdik DKI Jakarta Buka Jalur Prestasi Hari Ini\r\n', 'Dinas Pendidikan DKI Jakarta membuka PPDB Jalur Prestasi hari ini', '025149000_1561696305-shutterstock_635151860.jpg'),
(3, 'Hati-Hati dengan Produk Perawatan Kulit yang Disertai Janji Muluk-Muluk\r\n', 'Tidak semua produk perawatan kulit bisa cocok dipakai oleh setiap orang.', '052573300_1593572449-skincare.jpg'),
(4, 'Prediksi Ramalan Zodiak Libra di Bulan Juli 2020\r\n', 'Ini prediksi ramalan untuk zodiak Libra selama Bulan Juli 2020.', '098176600_1565421410-jernej-graj-GY5gWDimEyg-unsplash.jpg'),
(5, '5 Bisnis Sukses Laudya Cynthia Bella Sebagai Sumber Kekayaannya\r\n', 'Sukses berbisnis, ini deretan bidang yang dilakoni oleh Laudya Cynthia Bella.', '056933800_1593576772-_2FY0996422_2FV001_2FY0996422_E06_ZHC.jpg'),
(6, 'Lebih Bijak Atur Keuangan, Lebih Nyaman Jalani Keseharian\r\n', 'Semakin hari, aku dapat merasakan perubahan dalam diriku.', '007067900_1554955905-tabungan_investasi_HL.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_parenting`
--

CREATE TABLE `tb_parenting` (
  `id_parenting` int(11) NOT NULL,
  `judul_parenting` varchar(1000) NOT NULL,
  `isi_parenting` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_parenting`
--

INSERT INTO `tb_parenting` (`id_parenting`, `judul_parenting`, `isi_parenting`, `gambar`) VALUES
(1, '7 Hal yang Harus Dipersiapkan Sebelum Anak Masuk Sekolah\r\n', 'Ini hal-hal yang perlu dipersiapakan sebelum anak masuk dunia sekolah', '078884700_1556781652-shutterstock_489317788.jpg'),
(2, 'Orangtua Perlu Tahu, 4 Penyebab Keterlambatan Berbicara pada Anak\r\n', '4 faktor yang dapat memengaruhi anak terlambat berbicara.', '057846800_1593579383-shutterstock_1702499374.jpg'),
(3, 'Sejarah di Balik Peringatan Hari Keluarga Nasional\r\n', 'Melihat sejarah di balik peringatan Hari Keluarga Nasional (Harganas)', '073911200_1593533649-family-of-four-walking-at-the-street-2253879.jpg'),
(4, 'Jadi Ibu Muda, Ini 4 Peralatan Wajib Punya untuk Kebutuhan Si Kecil\r\n', 'Simak peralatan yang wajib dimiliki oleh ibu muda', '021287600_1556788821-shutterstock_308934047.jpg'),
(5, 'Tips Memberi Pemahaman Pentingnya Social Distancing bagi Remaja\r\n', 'Simak di sini beberapa tips memberi pemahaman pada anak remaja tentang pentingnya social distancing.', '096016100_1573023940-duy-pham-ORMthsoJTnY-unsplash.jpg'),
(6, 'Amankah Membiarkan Anak Bermain dengan Temannya Sekarang?\r\n', 'Sudah amankah membiarkan anak bermain dengan teman-temannya sekarang? Ini kata pakar.', '001206500_1574325730-2019-11-21.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_parenting2`
--

CREATE TABLE `tb_parenting2` (
  `id_parenting` int(11) NOT NULL,
  `judul_parenting` varchar(1000) NOT NULL,
  `ket_prenting` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_parenting2`
--

INSERT INTO `tb_parenting2` (`id_parenting`, `judul_parenting`, `ket_prenting`, `gambar`) VALUES
(1, 'Inilah Perkembangan Anak Usia 4 Tahun yang Perlu Orangtua Ketahui\r\n', 'Beberapa kemampuan anak usia 4 tahun yang perlu diketahui oleh orangtua.', '051003300_1584421483-shutterstock_1428365297.jpg'),
(2, 'Usia Berapa Anak Boleh Bermain Video Game?\r\n', 'American Academy of Pediatrics (AAP) menetapkan anak usia 5 tahun boleh bermain video game selama 1 jam per hari.', '094797600_1593495569-happy-african-american-girls-playing-video-game-console-at-4544897.jpg'),
(3, 'Kenali Beberapa Perubahan Jenis Kulit saat Hamil\r\n', 'Saat hamil, hormon di dalam tubuh akan berubah, dan memperngaruhi jenis kulit.', '023088900_1593494461-girl-3033718__1_.jpg'),
(4, '5 Manfaat Membuat Origami untuk Perkembangan Anak\r\n', 'Intip lima manfaat dari membuat origami untuk perkembangan anak', '018317400_1515385114-Jaga-Kesehatan-Mental-dengan-Seni-Melipat-Origami-By-AnastasiaNi-shutterstock_699690955.jpg'),
(5, '6 Tips Sederhana Meningkatkan Kelancaran Membaca pada Anak\r\n', 'Kelancaran membaca juga berkaitan erat dengan cara anak memaknai kalimat atau kata yang dibacanya.', '021010700_1593405241-shutterstock_459137191.jpg'),
(6, '5 Tips Sederhana Mengatasi Insomnia Selama Kehamilan\r\n', 'Sulit tidur di malam hari selama kehamilan, lakukan beberapa kahiatan berikut.', '006458600_1593404607-shutterstock_1674855565.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_parenting3`
--

CREATE TABLE `tb_parenting3` (
  `id_parenting` int(11) NOT NULL,
  `judul_parenting` varchar(1000) NOT NULL,
  `ket_parenting` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_parenting3`
--

INSERT INTO `tb_parenting3` (`id_parenting`, `judul_parenting`, `ket_parenting`, `gambar`) VALUES
(1, 'KPAI Jamin Perlindungan Anak dari Masalah Pendidikan Hingga Kesehatan di Masa Pandemi Virus Corona\r\n', 'Di masa pandemi, anak-anak terdampak dari masalah pendidikan hingga masalah kesehatan. Bekerja sama dengan Plan Indonesia, KPAI menjamin perlindungan anak dari masalah tersebut', '055716500_1570429987-adorable-baby-boy-1374509.jpg'),
(2, '4 Tips Mengatasi Gangguan Sembelit Bagi Ibu Hamil\r\n', 'Tips mudah mencegah dan mengatasi sembelit selama kehamilan.', '019013000_1583484111-ibu_hamil_minum.jpg'),
(3, '4 Hal Penting yang Perlu Dipahami Soal Menyusui setelah Caesar\r\n', 'Apakah bisa langsung menyusui setelah operasi?', '082470100_1592889347-operasi_caesar.jpg'),
(4, 'Cara Memperkenalkan Pendidikan Seks pada Anak Usia 0-5 Tahun\r\n', 'Konten pendidikan seks perlu disesuaikan dengan tahap tumbuh-kembang anak.', '039432400_1593155828-pendidikan_anak.jpg'),
(5, '3 Perbedaan Kehamilan Antara Anak Pertama dan Kedua\r\n', 'Lebih tenang, inilah perbedaan kehamilan antara anak pertama dan kedua.', '008720100_1587536508-shutterstock_769768102.jpg'),
(6, 'Cara Menjelaskan Perceraian agar Anak Tidak Trauma\r\n', 'Cara menjelaskan perceraian kepada anak secara bijak.', '089014300_1558931022-2019-05-26__1_.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_personality`
--

CREATE TABLE `tb_personality` (
  `id_personality` int(11) NOT NULL,
  `judul_personality` varchar(1000) NOT NULL,
  `isi_personality` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_personality`
--

INSERT INTO `tb_personality` (`id_personality`, `judul_personality`, `isi_personality`, `gambar`) VALUES
(1, 'Prediksi Ramalan Zodiak Sagitarius di Bulan Juli 2020\r\n', 'Ini prediksi ramalan untuk zodiak Sagitarius selama Bulan Juli 2020.', '090879100_1560240557-beautiful-beauty-cute-2247450.jpg'),
(2, 'Prediksi Ramalan Zodiak Scorpio di Bulan Juli 2020\r\n', 'Ini ramalan zodiak Scorpio secara menyeluruh selama Bulan Juli 2020.', '070916000_1575015407-photo-of-woman-standing-beside-white-wall-3284698.jpg'),
(3, 'Prediksi Ramalan Zodiak Libra di Bulan Juli 2020\r\n', 'Ini prediksi ramalan untuk zodiak Libra selama Bulan Juli 2020.', '098176600_1565421410-jernej-graj-GY5gWDimEyg-unsplash.jpg'),
(4, 'Bulan Juli 2020 Akan Jadi Bulan Terburuk untuk 3 Zodiak Ini\r\n', 'Ini sekian zodiak yang diprediksi akan jalani Bulan Juli dengan buruk.', '009030100_1593589367-Photo_by_Indrian_Potret_on_Unsplash_1.jpg'),
(5, 'Tak Perlu Menunggu Sakit untuk Menyadari Pentingnya Jaga Kesehatan\r\n', 'Pasca berobat aku mulai mengubah pola hidupku.', '000842800_1585730459-shutterstock_148038533.jpg'),
(6, 'Resep Ramuan Alami yang Bisa Menyembuhkan Gatal di Kulit\r\n', 'Gatal di kulit bisa disembuhkan dengan bahan-bahan alami.', '018132900_1593535198-itchy-skin-2120192.jpg'),
(7, 'Karakter Masing-Masing Zodiak dalam Menjalani Hubungan Percintaan\r\n', 'Intip seperti apa karaktermu dalam menjalani sebuah hubungan berdasarkan zodiak', '007841300_1564731257-shutterstock_507199447.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_personality2`
--

CREATE TABLE `tb_personality2` (
  `id_personality` int(11) NOT NULL,
  `judul_personality` varchar(1000) NOT NULL,
  `ket_personality` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_personality2`
--

INSERT INTO `tb_personality2` (`id_personality`, `judul_personality`, `ket_personality`, `gambar`) VALUES
(1, 'Bulan Juli 2020 Akan Jadi Bulan Terbaik untuk 3 Zodiak Ini\r\n', 'Ini sekian zodiak yang diramal akan jalani bulan terbaik Juli ini.', '079170500_1593587770-karl-joshua-bernal-r0aqW0V3GYg-unsplash.jpg'),
(2, 'Marissa Hutabarat dan Perjalanan Kariernya jadi Calon Hakim di Amerika\r\n', 'Perjalanan perempuan keturunan Indonesia Marissa Hutabarat yang mencalonkan diri jadi hakim di Amerika', '024165900_1593589767-2-1.jpg'),
(3, 'Untuk Menghilangkan Sifat Minder, Perubahan Harus Dimulai dari Diri Sendiri\r\n', 'Bangkit menjadi pribadi yang lebih baik.', '092578100_1557127081-drama_dunia_kerja_HL.jpg'),
(4, 'Kenali Diet Hominy yang Sehat dan Cepat Membuat Berat Badan Turun\r\n', 'Diet merupakan solusi cepat untuk menurunkan berat badan.', '082813100_1593526491-bill-oxford-aIlAhLdwk2g-unsplash__2_.jpg'),
(5, 'Prediksi Ramalan Zodiak Scorpio di Bulan Juli 2020\r\n', 'Ini ramalan zodiak Scorpio secara menyeluruh selama Bulan Juli 2020.', '070916000_1575015407-photo-of-woman-standing-beside-white-wall-3284698.jpg'),
(6, 'Memperbaiki Kualitas Hidup dengan Konsisten Menulis sebelum Tidur Malam\r\n', 'Kebiasaan menulis setiap malam.', '079766200_1590648449-kelebihan_begadang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_personality3`
--

CREATE TABLE `tb_personality3` (
  `id_personality` int(11) NOT NULL,
  `judul_personality` varchar(1000) NOT NULL,
  `ket_personality` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_personality3`
--

INSERT INTO `tb_personality3` (`id_personality`, `judul_personality`, `ket_personality`, `gambar`) VALUES
(1, 'Cara agar Berhenti Menunda Pekerjaan dan Waktu Tidak Terbuang Percuma\r\n', 'Kebiasaan menunda pekerjaan penting mulai detik ini harus kita tinggalkan.', '054353700_1590649447-pagi_konsentrasi.jpg'),
(2, 'Setelah Pengumuman PPDB, Disdik DKI Jakarta Buka Jalur Prestasi Hari Ini\r\n', 'Dinas Pendidikan DKI Jakarta membuka PPDB Jalur Prestasi hari ini', '052573300_1593572449-skincare.jpg'),
(3, 'Hati-Hati dengan Produk Perawatan Kulit yang Disertai Janji Muluk-Muluk\r\n', 'Tidak semua produk perawatan kulit bisa cocok dipakai oleh setiap orang.', '052573300_1593572449-skincare.jpg'),
(4, 'Prediksi Ramalan Zodiak Libra di Bulan Juli 2020\r\n', 'Ini prediksi ramalan untuk zodiak Libra selama Bulan Juli 2020.', '098176600_1565421410-jernej-graj-GY5gWDimEyg-unsplash.jpg'),
(5, '5 Bisnis Sukses Laudya Cynthia Bella Sebagai Sumber Kekayaannya\r\n', 'Sukses berbisnis, ini deretan bidang yang dilakoni oleh Laudya Cynthia Bella.', '056933800_1593576772-_2FY0996422_2FV001_2FY0996422_E06_ZHC.jpg'),
(6, 'Cara Membersihkan Kolang-Kaling, Cukup Pakai Air Cucian Beras\r\n', 'Begini cara membersihkan kolang-kaling cukup dengan air cucian beras.', '073324100_1593592044-shutterstock_1735815788.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_photo`
--

CREATE TABLE `tb_photo` (
  `id_photo` int(11) NOT NULL,
  `judul_photo` varchar(1000) NOT NULL,
  `ket_photo` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_photo`
--

INSERT INTO `tb_photo` (`id_photo`, `judul_photo`, `ket_photo`, `gambar`) VALUES
(1, 'Nycta Gina Shock Suhu Badan Anaknya 40,4 Derajat Celcius\r\n', 'Nycta Gina sempat shock mengetahui anaknya tiba-tiba demam tinggi hingga mencapai suhu 40,4 derajat celsius\r\n', '083984300_1593512931-74576073_147162396956460_3485227749345359525_n.jpg'),
(2, 'Ultah, Azriel Hermansyah Dapat Kado Jam Tangan Mewah dan Sepatu Limited Edition\r\n', 'Azriel Hermansyah usianya baru saja genap 20 tahun. bertepatan hari istimewanya, Azriel mendapat banyak', '077635800_1593509949-74522359_282459569767950_6852343560116258234_n.jpg'),
(3, 'Cerita Angelica Simperler 3 Bulan Kenal Hingga Akhirnya Nikah\r\n', 'Angelica Simperler dan Rico Hidros sudah 10 hari menjadi sepasang suami istri. Tidak butuh waktu lama', '012780700_1593497696-105971750_308421946982906_4577378399875966893_n.jpg'),
(4, 'Baim Wong Sambangi Istana Cinere, Intip Potret Rumah Mewah Anang-Ashanty\r\n', 'Sekitar tiga bulan mencari rumah belum ada yang cocok, Baim Wong mendatangi Istana Cinere milik', '019314700_1593491702-Untitled-27.jpg'),
(5, 'Ashanty Buka Suara Tentang Hubungan Aurel Hermansyah dan Atta Halilintar\r\n', 'Hubungan Aurel Hermansyah dan Atta Halilintar disebut setting-an, Ashanty angkat bicara', '076539600_1593490107-106105440_152227549716880_6213175836009077592_n.jpg'),
(7, 'Nikita Willy Resmi Dilamar Indra Priawan\r\n', 'Kabar bahagia tersebut dibagikan Nikita Willy di laman instagramnya baru-baru ini', '096057900_1593541526-nikita.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relationship`
--

CREATE TABLE `tb_relationship` (
  `id_relationship` int(11) NOT NULL,
  `judul_relationship` varchar(1000) NOT NULL,
  `isi_relationship` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_relationship`
--

INSERT INTO `tb_relationship` (`id_relationship`, `judul_relationship`, `isi_relationship`, `gambar`) VALUES
(1, 'Karakter Masing-Masing Zodiak dalam Menjalani Hubungan Percintaan\r\n', 'Intip seperti apa karaktermu dalam menjalani sebuah hubungan berdasarkan zodiak', '007841300_1564731257-shutterstock_507199447.jpg'),
(2, 'Untuk Menghilangkan Sifat Minder, Perubahan Harus Dimulai dari Diri Sendiri\r\n', 'Bangkit menjadi pribadi yang lebih baik.', '092578100_1557127081-drama_dunia_kerja_HL.jpg'),
(3, 'Memperbaiki Kualitas Hidup dengan Konsisten Menulis sebelum Tidur Malam\r\n', 'Kebiasaan menulis setiap malam.', '079766200_1590648449-kelebihan_begadang.jpg'),
(4, 'Cara agar Berhenti Menunda Pekerjaan dan Waktu Tidak Terbuang Percuma\r\n', 'Kebiasaan menunda pekerjaan penting mulai detik ini harus kita tinggalkan.', '054353700_1590649447-pagi_konsentrasi.jpg'),
(5, 'Hati-Hati dengan Produk Perawatan Kulit yang Disertai Janji Muluk-Muluk\r\n', 'Tidak semua produk perawatan kulit bisa cocok dipakai oleh setiap orang.', '052573300_1593572449-skincare.jpg'),
(6, 'Lebih Bijak Atur Keuangan, Lebih Nyaman Jalani Keseharian\r\n', 'Semakin hari, aku dapat merasakan perubahan dalam diriku.', '007067900_1554955905-tabungan_investasi_HL.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relationship2`
--

CREATE TABLE `tb_relationship2` (
  `id_relationship` int(11) NOT NULL,
  `judul_relationship` varchar(1000) NOT NULL,
  `ket_relationship` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_relationship2`
--

INSERT INTO `tb_relationship2` (`id_relationship`, `judul_relationship`, `ket_relationship`, `gambar`) VALUES
(1, 'Mengubah Pola Hidup untuk Mengurangi Risiko Terkena Penyakit Keturunan\r\n', 'Saya benar-benar lalai dengan cara hidup saya sendiri.', '050843100_1584082483-shutterstock_631505351.jpg'),
(2, 'Cara-Cara Sederhana untuk Meredakan Stres\r\n', 'Perlahan aku mulai menerima dan mensyukuri kehidupan yang ada.', '010000700_1567566267-perempuan_patah_hati_HL.jpg'),
(3, '5 Tanda yang Tidak Disadari Bahwa Temanmu Mungkin Terlalu Menyebalkan\r\n', '5 tanda teman yang menyebalkan yang perlu diketahui.', '043848800_1583393287-sahabat_perempuan.jpg'),
(4, 'Pikiran Lebih Sehat dengan Kebiasaan Pagi Ini\r\n', 'Menjalani hari dengan lebih baik.', '049266000_1593489602-nulis_pagi.jpg'),
(5, '3 Cara Ampuh Mengekspresikan Perasaan pada Pasangan\r\n', 'Simak di sini beberapa cara ampuh mengekspresikan perasaan pada pasangan, penasaran?', '008862800_1548848892-Ashley_Schulze.jpg'),
(6, 'Membangun Pertemanan Memang Tidak Selalu Mudah\r\n', 'Penting untuk tetap menjadi diri sendiri.', '002150500_1554877680-mantan_teman_kantor_HL.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relationship3`
--

CREATE TABLE `tb_relationship3` (
  `id_relationship` int(11) NOT NULL,
  `judul_relationship` varchar(1000) NOT NULL,
  `ket_relationship` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_relationship3`
--

INSERT INTO `tb_relationship3` (`id_relationship`, `judul_relationship`, `ket_relationship`, `gambar`) VALUES
(1, '6 Zodiak yang Sering Menganggap Kencan sebagai Hubungan yang Serius\r\n', 'Berikut ini adalah beberapa zodiak yang sering menganggap kencan sebagai hubungan yang serius.', '023978900_1547809491-Gregory_Hayes.jpg'),
(2, 'Alasan dan Pengalaman Beralih Menggunakan Pembalut Kain\r\n', 'Awalnya kupikir mungkin akan terasa sulit untuk beradaptasi dengan kebiasaan baru ini.', '005494300_1593490581-pembalut_kain.jpg'),
(3, 'Tidak Perlu Canggung, Ini 5 Tips Meluluhkan Hati Calon Mertua yang Bisa Dicoba\r\n', 'Luluhkan hati calon mertua dengan 5 tips berikut ini.', '009037100_1593487694-happy-mother-law-daughter-law-standing-yard_107420-31157.jpg'),
(4, 'Tidak Hanya Jatuh Cinta, Ini 4 Tanda Bahwa Dirimu Tergila-gila pada Seseorang\r\n', 'Lebih dari jatuh cinta, 4 poin ini adalah tanda-tanda bahwa dirimu tergila-gila pada seseorang.', '008028800_1583378595-shutterstock_299359418.jpg'),
(5, 'Menghijaukan Sekolah Dimulai dari Langkah Sederhana\r\n', 'Kebiasaan yang dimulai lima tahun silam.', '071392900_1593485934-sekolah_hijau.jpg'),
(6, 'Memaksa Diri untuk Selalu Tampak Baik-Baik Saja Itu Melelahkan\r\n', 'Perlahan-lahan terlepas dari toxic positivity.', '028328900_1593483973-toxic_positivity.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama_lengkap`, `username`, `email`, `password`, `status`) VALUES
(1, '', 'romy', 'romyyansyah@gmail.com', 'romy', ''),
(2, '', 'roni', 'rooniii@gmail.com', 'roni', 'User'),
(3, '', 'dela', 'dela@gamil.com', 'dela', ''),
(4, '', 'umm', 'uum@gmail.com', 'uum', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_video`
--

CREATE TABLE `tb_video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(1000) NOT NULL,
  `ket_video` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_video`
--

INSERT INTO `tb_video` (`id_video`, `judul_video`, `ket_video`, `gambar`) VALUES
(1, 'Kilas Balik Perjalanan Cinta Laudya Chintya Bella dengan Engku Emran', 'Seperti apa perjalanan cinta Laudya Chintya Bella dan Engku Emran hingga akhirnya ', 'v1.PNG'),
(2, '4 Cara Mengatasi Rambut yang Lepek', 'Bagaimana cara menata rambut yang lepek? Yuk, cek video di atas!', 'v2.PNG'),
(3, 'Personal Style Rebecca Klopper', 'Seperti apa personal style bintang sinetron Mermaid in Love, Rebecca Klopper?', 'v3.PNG'),
(4, 'Tips Bersepeda Saat Pandemi Covid-19', 'Apa saja yang perlu diperhatikan ketika bersepeda di tengah pandemi virus corona?', 'v4.PNG'),
(5, 'Mengenal Kwak Dong Yeon, Aktor yang Tampil Telanjang di Drakor It\'s Okay To .....', 'Yuk, kenala dengan Kwak Dong Yeon yang tampil polos di drakor ....', 'v5.PNG'),
(6, '3 Gaya Kece Jisoo BLACKPINK yang Bisa Kamu Coba', 'Ini dia tiga inspirasi gaya OOTD Jisoo BLACKPINK yang bisa kamu coba ....', 'v6.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_zodiak`
--

CREATE TABLE `tb_zodiak` (
  `id_zodiak` int(11) NOT NULL,
  `judul_zodiak` varchar(1000) NOT NULL,
  `ket_zodiak` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_zodiak`
--

INSERT INTO `tb_zodiak` (`id_zodiak`, `judul_zodiak`, `ket_zodiak`, `gambar`) VALUES
(1, 'Bulan Juli 2020 Akan Jadi Bulan Terburuk Untuk 3 Zodiak Ini\r\n', 'Ini sekian zodiak yang diprediksi akan jalani Bulan Juli dengan buruk.', '009030100_1593589367-Photo_by_Indrian_Potret_on_Unsplash_1.jpg'),
(2, 'Bulan Juli 2020 Akan Jadi Bulan Terbaik Untuk 3 Zodiak Ini\r\n', 'Ini sekian zodiak yang diramal akan jalani bulan terbaik Juli ini.', '079170500_1593587770-karl-joshua-bernal-r0aqW0V3GYg-unsplash.jpg'),
(3, 'Prediksi Ramalan Zodiak Sagitarius Di Bulan Juli 2020\r\n', 'Ini prediksi ramalan untuk zodiak Sagitarius selama Bulan Juli 2020.', '090879100_1560240557-beautiful-beauty-cute-2247450.jpg'),
(4, 'Prediksi Ramalan Zodiak Scorpio Di Bulan Juli 2020\r\n', 'Ini ramalan zodiak Scorpio secara menyeluruh selama Bulan Juli 2020.', '070916000_1575015407-photo-of-woman-standing-beside-white-wall-3284698.jpg'),
(5, 'Karakter Masing-Masing Zodiak dalam Menjalani Hubungan Percintaan\r\n', 'Intip seperti apa karaktermu dalam menjalani sebuah hubungan berdasarkan zodiak', '007841300_1564731257-shutterstock_507199447.jpg'),
(6, 'Prediksi Ramalan Zodiak Libra di Bulan Juli 2020\r\n', 'Ini prediksi ramalan untuk zodiak Libra selama Bulan Juli 2020.', '098176600_1565421410-jernej-graj-GY5gWDimEyg-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_beauty`
--
ALTER TABLE `tb_beauty`
  ADD PRIMARY KEY (`id_beauty`);

--
-- Indeks untuk tabel `tb_beauty2`
--
ALTER TABLE `tb_beauty2`
  ADD PRIMARY KEY (`id_beauty`);

--
-- Indeks untuk tabel `tb_beauty3`
--
ALTER TABLE `tb_beauty3`
  ADD PRIMARY KEY (`id_beauty`);

--
-- Indeks untuk tabel `tb_celebrity`
--
ALTER TABLE `tb_celebrity`
  ADD PRIMARY KEY (`id_celebrity`);

--
-- Indeks untuk tabel `tb_celebrity2`
--
ALTER TABLE `tb_celebrity2`
  ADD PRIMARY KEY (`id_celebrity`);

--
-- Indeks untuk tabel `tb_celebrity3`
--
ALTER TABLE `tb_celebrity3`
  ADD PRIMARY KEY (`id_celebrity`);

--
-- Indeks untuk tabel `tb_fashion`
--
ALTER TABLE `tb_fashion`
  ADD PRIMARY KEY (`id_fashion`);

--
-- Indeks untuk tabel `tb_fashion2`
--
ALTER TABLE `tb_fashion2`
  ADD PRIMARY KEY (`id_fashion`);

--
-- Indeks untuk tabel `tb_fashion3`
--
ALTER TABLE `tb_fashion3`
  ADD PRIMARY KEY (`id_fashion`);

--
-- Indeks untuk tabel `tb_fimelahood`
--
ALTER TABLE `tb_fimelahood`
  ADD PRIMARY KEY (`id_fimelahood`);

--
-- Indeks untuk tabel `tb_fimelahood2`
--
ALTER TABLE `tb_fimelahood2`
  ADD PRIMARY KEY (`id_fimelahood`);

--
-- Indeks untuk tabel `tb_fimelahood3`
--
ALTER TABLE `tb_fimelahood3`
  ADD PRIMARY KEY (`id_fimelahood`);

--
-- Indeks untuk tabel `tb_lifestyle`
--
ALTER TABLE `tb_lifestyle`
  ADD PRIMARY KEY (`id_lifestyle`);

--
-- Indeks untuk tabel `tb_lifestyle2`
--
ALTER TABLE `tb_lifestyle2`
  ADD PRIMARY KEY (`id_lifestyle`);

--
-- Indeks untuk tabel `tb_lifestyle3`
--
ALTER TABLE `tb_lifestyle3`
  ADD PRIMARY KEY (`id_lifestyle`);

--
-- Indeks untuk tabel `tb_parenting`
--
ALTER TABLE `tb_parenting`
  ADD PRIMARY KEY (`id_parenting`);

--
-- Indeks untuk tabel `tb_parenting2`
--
ALTER TABLE `tb_parenting2`
  ADD PRIMARY KEY (`id_parenting`);

--
-- Indeks untuk tabel `tb_parenting3`
--
ALTER TABLE `tb_parenting3`
  ADD PRIMARY KEY (`id_parenting`);

--
-- Indeks untuk tabel `tb_personality`
--
ALTER TABLE `tb_personality`
  ADD PRIMARY KEY (`id_personality`);

--
-- Indeks untuk tabel `tb_personality2`
--
ALTER TABLE `tb_personality2`
  ADD PRIMARY KEY (`id_personality`);

--
-- Indeks untuk tabel `tb_personality3`
--
ALTER TABLE `tb_personality3`
  ADD PRIMARY KEY (`id_personality`);

--
-- Indeks untuk tabel `tb_photo`
--
ALTER TABLE `tb_photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indeks untuk tabel `tb_relationship`
--
ALTER TABLE `tb_relationship`
  ADD PRIMARY KEY (`id_relationship`);

--
-- Indeks untuk tabel `tb_relationship2`
--
ALTER TABLE `tb_relationship2`
  ADD PRIMARY KEY (`id_relationship`);

--
-- Indeks untuk tabel `tb_relationship3`
--
ALTER TABLE `tb_relationship3`
  ADD PRIMARY KEY (`id_relationship`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indeks untuk tabel `tb_zodiak`
--
ALTER TABLE `tb_zodiak`
  ADD PRIMARY KEY (`id_zodiak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_beauty`
--
ALTER TABLE `tb_beauty`
  MODIFY `id_beauty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_beauty2`
--
ALTER TABLE `tb_beauty2`
  MODIFY `id_beauty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_beauty3`
--
ALTER TABLE `tb_beauty3`
  MODIFY `id_beauty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_celebrity`
--
ALTER TABLE `tb_celebrity`
  MODIFY `id_celebrity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_celebrity2`
--
ALTER TABLE `tb_celebrity2`
  MODIFY `id_celebrity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_celebrity3`
--
ALTER TABLE `tb_celebrity3`
  MODIFY `id_celebrity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_fashion`
--
ALTER TABLE `tb_fashion`
  MODIFY `id_fashion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_fashion2`
--
ALTER TABLE `tb_fashion2`
  MODIFY `id_fashion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_fashion3`
--
ALTER TABLE `tb_fashion3`
  MODIFY `id_fashion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_fimelahood`
--
ALTER TABLE `tb_fimelahood`
  MODIFY `id_fimelahood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_fimelahood2`
--
ALTER TABLE `tb_fimelahood2`
  MODIFY `id_fimelahood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_fimelahood3`
--
ALTER TABLE `tb_fimelahood3`
  MODIFY `id_fimelahood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_lifestyle`
--
ALTER TABLE `tb_lifestyle`
  MODIFY `id_lifestyle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_lifestyle2`
--
ALTER TABLE `tb_lifestyle2`
  MODIFY `id_lifestyle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_lifestyle3`
--
ALTER TABLE `tb_lifestyle3`
  MODIFY `id_lifestyle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_parenting`
--
ALTER TABLE `tb_parenting`
  MODIFY `id_parenting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_parenting2`
--
ALTER TABLE `tb_parenting2`
  MODIFY `id_parenting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_parenting3`
--
ALTER TABLE `tb_parenting3`
  MODIFY `id_parenting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_personality`
--
ALTER TABLE `tb_personality`
  MODIFY `id_personality` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_personality2`
--
ALTER TABLE `tb_personality2`
  MODIFY `id_personality` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_personality3`
--
ALTER TABLE `tb_personality3`
  MODIFY `id_personality` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_photo`
--
ALTER TABLE `tb_photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_relationship`
--
ALTER TABLE `tb_relationship`
  MODIFY `id_relationship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_relationship2`
--
ALTER TABLE `tb_relationship2`
  MODIFY `id_relationship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_relationship3`
--
ALTER TABLE `tb_relationship3`
  MODIFY `id_relationship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_zodiak`
--
ALTER TABLE `tb_zodiak`
  MODIFY `id_zodiak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
