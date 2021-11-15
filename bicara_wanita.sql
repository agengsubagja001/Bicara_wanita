-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 09:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bicara_wanita`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(15) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(4) NOT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `foto_profil` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `username`, `password`, `role_id`, `deskripsi`, `foto_profil`) VALUES
(1, 'Faishol susilo permana', 'ageng', '12345678', 2, 'saya baru memulai copy writing dengan pengalaman 1 tahun di bidang ini ', 'isol.jpeg'),
(2, 'Ageng Subagja', 'Ageng', '123456', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar_satu` varchar(100) NOT NULL,
  `gambar_dua` varchar(100) NOT NULL,
  `gambar_tiga` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(13) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `isi` varchar(10000) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `isi`, `gambar`, `kategori`, `date`) VALUES
(83, '3 Rekomendasi Skincare Retinol Lokal untuk Pemula dan Kulit Sensitif', '<blockquote><p><i><strong>Produk skincare lokal dengan retinol ini formulanya gentle, sangat cocok untuk pemula maupun untuk kamu yang punya kulit sensitif.</strong></i></p></blockquote><p>Kalau untuk perawatan <i>anti-aging, ingredient</i> yang paling potent memang retinol. Jadi saya selalu berusaha memasukkan retinol ke dalam<i> skincare</i> rutin saya. Karena kulit saya sensitif, jadi saya pakai retinol nggak setiap hari. Biasanya seminggu dua kali saja, selang seling dengan AHA serum seminggu sekali. Selain intensitas pakainya nggak setiap hari, saya juga biasanya memilih produk retinol yang super<i> gentle</i> di kulit.</p><p>Kalau kamu pemula, atau baru mau pakai retinol, saran saya pakai produk retinol yang<i> gentle</i> juga. Perkenalkan kulit kita dulu dengan retinol secara bertahap, mulai dari level terendah. Lalu kemudian mulai baca kondisi kulit, apakah sudah mulai terbiasa dan mau naikin level retinol, atau seperti saya yang lebih nyaman pakai <i>gentle</i> retinol saja.</p><p>Nah, untuk kamu yang sedang mencari retinol yang sangat&nbsp;<i>mild</i> dan ramah di kulit, ini dia tiga <i>skincare</i> retinol andalan saya.</p><figure class=\"image\"><img src=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-5.jpg\" alt=\"\" srcset=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-5.jpg 600w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-5-300x200.jpg 300w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-5-450x300.jpg 450w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-5-220x147.jpg 220w\" sizes=\"100vw\" width=\"600\"></figure><h2><a href=\"https://reviews.femaledaily.com/products/cleanser/toner/avoskin/miraculous-retinol-toner?tab=reviews\"><strong>Avoskin Miraculous Retinol Toner</strong></a></h2><p>Avoskin Miraculous Retinol Toner adalah <i>skincare </i>lokal dengan kandungan retinol pertama yang dulu saya coba, dan sukses bikin saya jatuh cinta dengan kandungan retinol. Sampai sekarang pun, Avoskin Miraculous Retinol Toner ini masih jadi andalan saya karena saya bisa merasakan manfaat retinol tanpa efek samping seperti kulit kering, iritasi, dan <i>sensitized.</i></p><p>Avoskin Miraculous Retinol Toner ini mengandung 1% Actosome Retinol. Actrosome Retinol sendiri adalah jenis retinol yang dibungkus oleh bahan-bahan lain, yang ketika digunakan akan dikeluarkan dengan metode<i> time release</i> ke kulit. Jadi memang lebih <i>gentle</i> dan minimal resiko iritasinnya, selain itu kandungan retinol ini juga lebih stabil dan tidak gampang <i>oxidize.</i></p><p>1% Actosome Retinol ini aman banget untuk pemula dan untuk kulit sensitif seperti kulit saya. Selain retinol, toner ini juga dilengkapi dengan 3% Niacinamide, Pomegranate, Vitamin E, Oat Meal, dan juga Peptide. <i>Toner</i> ini terasa <i>hydrating</i> di kulit saya, dan saya sama sekali nggak merasakan efek negatif apapun selama pemakaiannya.</p><p><i><strong>Baca juga:</strong></i> <a href=\"https://editorial.femaledaily.com/blog/2021/10/21/gimana-langkah-langkah-pakai-eye-cream-yang-tepat\">Gimana Langkah-Langkah Pakai Eye Cream yang Tepat?</a></p><figure class=\"image\"><img src=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-6.jpg\" alt=\"\" srcset=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-6.jpg 600w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-6-300x200.jpg 300w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-6-450x300.jpg 450w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-6-220x147.jpg 220w\" sizes=\"100vw\" width=\"600\"></figure><h2><a href=\"https://reviews.femaledaily.com/products/treatment/serum-essence-23/airinderm-aesthetic/retinol-serum-12?cat=&amp;cat_id=0&amp;age_range=&amp;skin_type=&amp;skin_tone=&amp;skin_undertone=&amp;hair_texture=&amp;hair_type=&amp;order=newest&amp;page=1\"><strong>Airnderm Retinol Serum</strong></a></h2><p>Sama seperti Avoskin, Airnderm Retinol Serum ini juga menggunakan Actosome Retinol (atau BST-Retinol atau Encapsulated Retinol), dengan besar 1,5%. Lalu dalam serum ini juga ditambahkan Argirelin (sejenis Peptide), yang berfungsi menghaluskan kerutan dan juga menghidrasi kulit. Retinol dan Argirelin ini bekerjasama untuk merangsang pertumbuhan kolagen di kulit, sehingga kulit lebih awet muda dan kencang.</p><p>Retinol dalam bentuk serum begini keuntungannya adalah lebih banyak <i>buffer</i>-nya, dan pemakaiannya bisa kita campurkan dengan <i>moisturizer </i>(metode<i> skincare smoothies</i>). Sehingga resiko iritasinya bisa lebih diminimalisir lagi. Tapi sepanjang saya pakai Airnderm Retinol Serum ini, dipakai langsung tanpa dicampur dengan<i> moisturizer</i> pun masih sangat aman kok untuk kulit sensitif saya.</p><p><i><strong>Baca juga:</strong> </i><a href=\"https://editorial.femaledaily.com/blog/2021/10/27/supaya-kulit-awet-muda-ini-tips-menjaga-kadar-kolagen-di-kulit\">Supaya Kulit Awet Muda, Ini Tips Menjaga Kadar Kolagen di Kulit!</a></p><figure class=\"image\"><img src=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-1.jpg\" alt=\"\" srcset=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-1.jpg 600w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-1-300x200.jpg 300w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-1-450x300.jpg 450w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/retinol-pemula-Arum-1-220x147.jpg 220w\" sizes=\"100vw\" width=\"600\"></figure><h2><a href=\"https://reviews.femaledaily.com/products/treatment/serum-essence-23/somethinc/granactive-snow-retinoid-2?cat=&amp;cat_id=0&amp;age_range=&amp;skin_type=&amp;skin_tone=&amp;skin_undertone=&amp;hair_texture=&amp;hair_type=&amp;order=newest&amp;page=1\"><strong>Somethinc Granactive Snow Retinoid 2%</strong></a></h2><p>Ini merupakan serum terbaru dari Somethinc, yang merupakan serum anti-aging, dengan kandungan Retinol yang memang diformulasikan <i>beginner friendly.</i> Granactive Retinoid atau Hydroxypinacolone Retinoate (HPR) merupakan senyawa organik yang berasal dari asam retinoat, yang bekerja seperti Retinol di kulit kita, namun sangat minimal resiko iritasinya, dan tidak membuat kulit kering.</p><p>Lalu Somethinc Granactive Snow Retinoid ini juga diformulasikan dengan Snow Mushroom dan Alpha Bisabolol, yang mampu menenangkan kulit yang meradang, mencegah jerawat, dan juga mencegah hiperpigmentasi. Jujur saya baru beberapa hari memakai serum ini. Tapi saya sudah bisa menyimpilkan kalau serum ini <i>mild</i> dan nggak bikin kulit saya kering, iritasi, <i>sensitized,</i> dan efek-efek negatif lainnya.</p><p>&nbsp;</p><p>Buat kamu yang baru mau mulai pakai <i>skincare</i> retinol, cobain deh salah satu produk yang saya rekomendasikan di atas. Mulai pakai satu kali seminggu dulu, untuk membaca reaksi kulit kita. Lalu baru perlahan tingkatkan pemakaian sampai bisa pakai setiap hari atau naik level produknya. Selamat mencoba!</p>', '618e06d7797c0.jpg', 'Kesehatan', '2021-11-12 08:15:58'),
(85, 'Brand Kecantikan Korea yang Terjangkau, Bagus dan Ramah di Kantong!', '<blockquote><h3><i><strong>Pingin dandan ala Korea tapi budget terbatas? Jangan khawatir, ini brand kecantikan Korea yang bagus namun tetap terjangkau!</strong></i></h3></blockquote><p>Siapa bilang dandan <i>ala</i> Korea<i> </i>itu harus mahal? Untuk dapatkan <i>makeup look ala</i> Korea yang natural dan simpel, bisa kamu dapatkan dengan produk yang terjangkau, kok. Nggak usah khawatir dompet akan terguncang, tapi juga nggak usah khawatir karena produk tentu tetap berkualitas. Cocok banget nih untuk yang ingin hemat atau kamu para <i>makeup newbie</i> yang masih remaja. Tanpa basa-basi, ini dia 5 <i>brand </i>kecantikan Korea yang terjangkau!</p><h2><strong>Etude House</strong></h2><figure class=\"image\"><img src=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/etude-house.png\" alt=\"\" srcset=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/etude-house.png 600w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/etude-house-300x200.png 300w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/etude-house-450x300.png 450w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/etude-house-220x147.png 220w\" sizes=\"100vw\" width=\"600\"></figure><p><i>Brand</i> Korea pertama yang terjangkau namun bagus adalah Etude House, <i>brand </i>yang sudah cukup dikenal di Indonesia. Pilihannya yang banyak mulai dari <i>makeup </i>sampai <i>skincare, </i>kemasannya yang imut dan gemas, tentu dengan harga yang terjangkau, Etude House berhasil menjadi salah satu <i>go-to brand </i>untuk <i>makeup </i>Korea. Beberapa <i>best-seller </i>nya seperti Drawing Eye Brow Pencil dan Dear Darling Lip Tint patut dicoba nih. Selain bagus, harganya juga sangat terjangkau, karena masih banyak yang di bawah Rp100.000! Plus, gampang ditemukan di banyak tempat, lho!</p><h2><strong>Innisfree</strong></h2><figure class=\"image\"><img src=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/innisfree.png\" alt=\"\" srcset=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/innisfree.png 600w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/innisfree-300x200.png 300w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/innisfree-450x300.png 450w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/innisfree-220x147.png 220w\" sizes=\"100vw\" width=\"600\"></figure><p>Innisfree juga bisa dijadikan salah satu pilihan untuk kamu yang cari produk kecantikan Korea bagus tapi terjangkau. Nggak hanya <i>range </i>produk yang banyak, tapi Innisfree ini juga ramah lingkungan, lho! Mereka juga memakai jeju sebagai salah satu bahan utama pada produk-produknya. Produk-produknya cukup terjangkau dengan kisaran Rp20,000 – Rp 300.000-an. <i>Best-seller-</i>nya seperti No Sebum Mineral Powder cocok banget untuk sehari-hari dan para remaja. <i>Sheet mask</i>-nya seharga Rp 20,000 juga wajib dicoba!</p><p><i><strong>Baca juga: </strong></i><a href=\"https://editorial.femaledaily.com/blog/2021/11/02/fakta-menarik-noze-street-woman-fighter-dari-dancer-hingga-jadi-girl-crush-korea\">Fakta Menarik Noze ‘Street Woman Fighter’. Dari Dancer, Hingga Jadi Girl Crush Korea!</a></p><h2><strong>Tony Moly</strong></h2><p><img src=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/tony-moly-.png\" alt=\"\" srcset=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/tony-moly-.png 600w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/tony-moly--300x200.png 300w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/tony-moly--450x300.png 450w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/tony-moly--220x147.png 220w\" sizes=\"100vw\" width=\"600\"></p><p>Pasti kamu juga sudah tidak asing lagi dengan <i>brand </i>Korea satu ini. Dikenal dengan produk <i>lip tint-</i>nya yang bagus dan murah, Tony Moly patut banget nih dicoba. Berawal di Busan, Tony Moly berhasil menarik perhatian di negara Asia lainnya seperti Indonesia. Yang cari <i>lip tint </i>Korea murah, kamu bisa beli di Tony Moly Delight Lip Tint yang <i>best-seller </i>dengan harga sekitar Rp35.000 di <i>e-commerce </i>kesayanganmu. Produk <i>makeup </i>ataupun <i>skincare </i>lainnya juga bisa langsung kamu cek, mulai dari pensil alis sampai <i>sheet mask </i>semua bisa didapat dengan harga terjangkau.</p><p><i><strong>Baca juga: </strong></i><a href=\"https://editorial.femaledaily.com/blog/2021/10/29/5-drama-korea-bulan-november-yang-wajib-kamu-tonton\">5 Drama Korea Bulan November yang Wajib Kamu Tonton!</a></p><h2><strong>PeriPera</strong></h2><p><img src=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/peripera.png\" alt=\"\" srcset=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/peripera.png 600w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/peripera-300x200.png 300w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/peripera-450x300.png 450w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/peripera-220x147.png 220w\" sizes=\"100vw\" width=\"600\"></p><p>Penasaran cara dapetin <i>ombre lip look </i>sempurna ala Korea? <i>Brand </i>Korea PeriPera terkenal akan produk-produk bibirnya yang cocok untuk bikin tampilan <i>gradient</i>, tren K-Beauty yang terus naik daun. Salah satu contoh <i>best-seller </i>PeriPera diantara produk bibir lainnya yang tahan lama dan tinggi pigmentasi adalah Ink The Velvet. Tapi gak hanya produk bibir, produk <i>makeup </i>lainnya seperti <i>eyeshadow </i>atau <i>blush </i>juga nggak kalah bagus, lho. Mulai dari Rp50.000-an saja!</p><h2><strong>The Face Shop</strong></h2><p><img src=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/the-face-shop.png\" alt=\"\" srcset=\"https://editorial.femaledaily.com/wp-content/uploads/2021/11/the-face-shop.png 600w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/the-face-shop-300x210.png 300w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/the-face-shop-429x300.png 429w, https://editorial.femaledaily.com/wp-content/uploads/2021/11/the-face-shop-220x154.png 220w\" sizes=\"100vw\" width=\"600\"></p><p>Mirip dengan Innisfree, The Face Shop juga dikenal akan penggunaan bahan-bahan alami pada produknya. Pasti kalian juga sudah familiar dengan The Face Shop, karena <i>brand </i>ini merupakan salah satu <i>brand </i>Korea pertama yang <i>go </i>internasional dan tersedia di Indonesia. Nggak hanya <i>makeup</i>, tapi produk <i>skincare </i>sampai <i>nail polish </i>juga ditawarkan oleh The Face Shop. Harganya? Mulai dari Rp40.000-an! Terjangkau banget untuk kualitas yang top.</p>', '618e08771c823.png', 'Kesehatan', '2021-11-12 06:23:51'),
(86, 'Review Lengkap Mine Perfumery, Parfum Lokal yang Wanginya Unik Banget!', '<p>Setelah banyak dari kalian yang meminta FD untuk review lengkap Mine. Perfumery, akhirnya Andien mengabulkan permintaan kalian. Kali ini ketujuh parfum Mine. dibahas dengan lengkap untuk membantu kamu yang masih bingung mau pilih wangi yang mana. Plus, Mine. ini juga punya finder quiz khusus yang bisa kamu akses <a href=\"https://www.minedot.com/pages/finder-quiz\">di sini</a>, supaya bisa melihat kepribadian kamu tuh lebih cocok pakai parfum yang mana. Harganya juga bisa dibilang cukup <i>affordable</i> sih, untuk satu botol parfum Mine. yang wanginya nggak pasaran ini dibanderol dengan harga Rp370.000,-.</p><p>Kalau kamu penasaran sama review FD members yang lainnya, bisa langsung cek di halaman <a href=\"https://reviews.femaledaily.com/search?q=mine&amp;tab=product\">FD Beauty Review Mine Perfumery</a>. Kalau penasaran sama review lengkapnya dari Andien, langsung cek aja videonya ya.</p>', '618e09313630c.jpg', 'rumah tangga', '2021-11-12 06:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `detail_blog`
--

CREATE TABLE `detail_blog` (
  `id_detail_blog` int(15) NOT NULL,
  `id_blog` int(15) NOT NULL,
  `id_akun` int(15) NOT NULL,
  `id_komentar` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_blog`
--

INSERT INTO `detail_blog` (`id_detail_blog`, `id_blog`, `id_akun`, `id_komentar`) VALUES
(1, 83, 1, NULL),
(2, 85, 1, 1),
(3, 86, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `infografik`
--

CREATE TABLE `infografik` (
  `id_infografik` int(20) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` mediumtext NOT NULL,
  `gambar_kontent` varchar(200) NOT NULL,
  `gambar_sampul` varchar(200) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infografik`
--

INSERT INTO `infografik` (`id_infografik`, `judul`, `isi`, `gambar_kontent`, `gambar_sampul`, `tanggal`) VALUES
(3, 'PERKEMBANGAN POLITIK DI ERA PRESIDEN JOKOWI', '<p>Karena kasus-kasus korupsi di PD dan fakta bahwa <a href=\"https://www.indonesia-investments.com/id/culture/politics/reformation/susilo-bambang-yudhoyono/item7596\">Susilo Bambang Yudhoyono</a> telah mencapai batas maksimum dua kali masa jabatan presiden (walau dukungan baginya sudah turun drastis di tahun terakhir kepresidenannya), PD tidak memainkan peran besar dalam pemilu legislatif 2014. Bahkan, ada pendatang baru yang jadi pusat perhatian. Joko Widodo, mantan pengusaha (furniture dan properti), menjadi sosok yang sangat populer. Sebagai walikota Solo (Jawa Tengah) periode 2005-2012, ia tertarik untuk menjalin hubungan dekat dengan warga kota, sambil memperkenalkan serangkaian reformasi dan perubahan-perubahan positif lainnya.</p><p>Widodo, dikenal dengan nama Jokowi, kemudian memutuskan untuk mencalonkan diri sebagai Gubernur DKI Jakarta, dibantu oleh calon wakil gubernur Basuki Tjahaja Purnama (dikenal dengan nama Ahok), anggota etnis Tionghoa Kristen. Kedua pria ini mengalahkan gubernur yang menjabat, Fauzi Bowo, dan menjadi pemimpin Ibukota Indonesia pada tahun 2012. Jokowi melanjutkan pendekatan dan gaya yang ia tunjukkan di Solo, menjadi terkenal sebagai betul-betul “pria merakyat\". Dia mereformasi pendidikan lokal, kesehatan dan transportasi umum, sambil meningkatkan transparansi untuk mencegah perilaku korupsi. Jokowi dan Ahok sering digambarkan seperti Batman dan Robin dari Jakarta karena tindakan mereka yang tegas dan cepat serta sikap pro-rakyat.</p><p>Menjadi gubernur Ibukota Indonesia otomatis membuat Jokowi mulai mendapatkan banyak perhatian dari media di Indonesia dan menjelang Pemilu 2014 ia termasuk - dan biasanya memimpin - dalam jajak pendapat publik untuk Pemilu Presiden 2014. Namun, sebagai tokoh non-partisan, ia membutuhkan partai politik untuk mendukungnya. Setelah sebuah &nbsp;periode penuh spekulasi, akhirnya diumumkan pada awal tahun 2014 bahwa PDI-P - masih di bawah kepemimpinan Megawati - akan mendukung Jokowi dalam Pemilu Presiden tahun 2014. Ketika berita ini mulai menyebar, para investor asing dan domestik langsung mengalirkan banyak dana ke pasar modal Indonesia.</p><p>Namun ada persaingan yang serius. Golkar, selalu kekuatan politik yang stabil dan solid, terus memiliki dukungan luas di seluruh negeri (terutama di luar pulau Jawa). Namun, Golkar punya satu kelemahan: pemimpinnya sekarang adalah pengusaha kontroversial <a href=\"https://www.indonesia-investments.com/id/news/news-columns/indonesia-s-2014-presidential-candidates-a-profile-of-aburizal-bakrie/item827\">Aburizal Bakrie</a>. Bakrie Group adalah salah satu konglomerat terkaya di Indonesia, tapi sering dilanda skandal dan masalah utang. Salah satu perusahaan yang terkait dengan Bakrie disinyalir menyebabkan aliran lumpur raksasa di Sidoarjo (Jawa Timur). Kenaikan Bakrie sebagai ketua Golkar adalah salah satu dari banyak contoh bahwa politik uang tetap merupakan faktor penting dalam perpolitikan Indonesia. Meskipun Golkar bisa mengandalkan banyak dukungan rakyat, hanya sedikit yang percaya bahwa Bakrie memiliki kesempatan untuk menjadi presiden.</p><p>Ada juga mantan jenderal TNI <a href=\"https://www.indonesia-investments.com/id/news/news-columns/towards-indonesias-presidential-elections-a-profile-of-prabowo-subianto/item885\">Prabowo Subianto</a> yang kontroversial &nbsp;yang telah mendirikan sebuah partai politik baru: Gerakan Indonesia Raya (Gerindra). Meskipun ia terkait dengan berbagai pelanggaran hak asasi manusia, Prabowo menjadi tokoh populer karena ia memiliki karakter yang kuat (setelah sepuluh tahun pemerintahan tidak tegas Yudhoyono banyak orang Indonesia kembali menginginkan seorang pemimpin yang kuat). Selain itu, ia bisa mengandalkan jaringan yang kuat di seluruh negeri (dan memiliki sumber daya keuangan untuk membiayai jaringan ini).</p><p>PDI-P memenangkan pemilu legislatif 2014 dengan mengumpulkan 18.95 persen dari suara. Namun, ini adalah kemenangan yang jauh lebih kecil dibanding prediksi kebanyakan orang dan analis sebelumnya maka sejumlah orang mulai mempertanyakan apakah Jokowi memang pembuat mujikzat seperti dugaan awal. Golkar berada di posisi kedua dengan 14.75 persen, diikuti oleh Gerindra (11.81 persen). Seperti dugaan, PD kehilangan sekitar setengah suara dibandingkan dengan Pemilu sebelumnya.</p><p><strong>Pemilu Legislatif Indonesia 2014:</strong></p><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td><td><strong>2014</strong></td><td><strong>2009</strong></td><td><strong>2004</strong></td><td><strong>1999</strong></td></tr><tr><td><strong>PDI-P</strong></td><td>19.0%</td><td>14.0%</td><td>18.5%</td><td>33.7%</td></tr><tr><td><strong>Golkar</strong></td><td>14.8%</td><td>14.5%</td><td>21.6%</td><td>22.4%</td></tr><tr><td><strong>Gerindra</strong></td><td>11.8%</td><td>&nbsp;4.5%</td><td>&nbsp;&nbsp;&nbsp; -</td><td>&nbsp;&nbsp;&nbsp; -</td></tr><tr><td><strong>PD</strong></td><td>10.2%</td><td>20.8%</td><td>&nbsp;7.5%</td><td>&nbsp;&nbsp;&nbsp; -</td></tr><tr><td><strong>PAN</strong></td><td>&nbsp;7.6%</td><td>&nbsp;6.0%</td><td>&nbsp;6.4%</td><td>&nbsp;7.1%</td></tr></tbody></table></figure><p><strong>Pemilu Presiden</strong></p><p>Ambang batas yang sama digunakan dalam Pemilu 2014 untuk pemilihan presiden, yang berarti bahwa partai - atau koalisi partai - yang mengontrol setidaknya 20 persen kursi di DPR atau menerima 25 persen suara nasional dalam pemilu legislatif dapat menominasikan calon presiden.</p><p>Berdasarkan hasil pemilu legislatif 2014 ada empat partai politik yang berhasil memperoleh jumlah suara yang signifikan (&gt;10 persen) dan dengan demikian memiliki kekuatan ketika melakukan tawar-menawar untuk kandidat presiden. Partai-partai ini adalah PDI-P, Golkar, Gerindra dan PD. Namun, PD berada dalam penurunan karena skandal-skandal korupsi sementara tidak muncul pemimpin baru dalam partai ini yang bisa memulihkan dan membawa partai ini ke era yang baru. Karena lebih merupakan kendaraan politik Yudhoyono untuk menjadikan dia presiden, partai itu pada dasarnya bukan apa-apa tanpa dia (Yudhoyono tidak bisa bersaing di Pemilu 2014 karena batasan dua periode jabatan presiden).</p><p>Sementara itu, Golkar secara internal terpecah mengenai kepemimpinan dan pencalonan ketuanya yang kontroversial Aburizal Bakrie. Dengan demikian, pada dasarnya ada dua calon (juga berdasarkan berbagai jajak pendapat): Joko Widodo (didukung oleh PDI-P) dan Prabowo Subianto (dengan Partai Gerindra-nya). Namun, mereka membutuhkan mitra koalisi serta pasangan (calon wakil presiden).</p><p>Jokowi bekerja sama dengan veteran politik Jusuf Kalla. Pasangan ini didukung oleh PDI-P, NasDem, PKB dan Hanura. Pasangan lain terdiri dari Prabowo Subianto dan Hatta Rajasa (mantan menteri ekonomi dan ketua PAN). Pasangan ini didukung oleh Gerindra, PAN, PPP, PKS dan Golkar. Fakta bahwa Kalla (yang memiliki sejarah panjang dalam partai Golkar) bekerja sama dengan Jokowi menunjukkan perpecahan tingkat tinggi dalam partai Golkar yang - secara resmi - mendukung Prabowo sebagai calon presiden dalam pemilu ini. Hal ini memperdalam perpecahan tersebut di partai Golkar.</p><p>Awalnya, Jokowi memimpin jajak pendapat dengan margin yang agak besar. Namun, dengan semakin mendekatnya pemilu presiden (dijadwalkan pada tanggal 9 Juli 2014), keunggulan Jokowi memudar. Hal ini terutama disebabkan oleh jaringan yang baik dari Prabowo (sampai ke tingkat petani) dan liputan pers yang baik. Didukung oleh Grup Bakrie (yang memiliki stasiun televisi, website dan majalah) liputan pers yang positif dari Prabowo tersebar ke seluruh nusantara. Sementara itu, Jokowi didukung oleh stasiun berita (MetroTV) yang dimiliki Ketua NasDem Surya Paloh.</p>', 'YW05cmIzZHBMbkJ1Wnc9PS5wbmc=.jpg', 'cmV0aW5vbC1wZW11bGEtQXJ1bS0zLmpwZw==.jpg', '2021-11-12 09:12:40'),
(4, 'Peduli kesehatan terhadap lingkungan hidup', '<p><strong>Liputan6.com, Jakarta -</strong> \"Kita harus maulah sedikit repot,\" ucap <a href=\"https://www.liputan6.com/lifestyle/read/4518355/perjalanan-pendiri-the-body-shop-indonesia-suzy-hutomo-sebarkan-virus-peduli-lingkungan-bagian-i\">Suzy Hutomo</a>, pendiri <a href=\"https://www.liputan6.com/tag/the-body-shop-indonesia\">The Body Shop Indonesia</a>&nbsp;pada <a href=\"https://www.liputan6.com/lifestyle\"><strong>Liputan6.com</strong></a><strong>,</strong>&nbsp;Jumat, 26 Maret 2021. Saat itu, ia menjawab kiat menerapkan gaya hidup ramah lingkungan dalam keseharian.</p><p>Pernyataan Suzy bukan tanpa argumen jelas. Ia mengatakan, selama ini kebanyakan orang lebih mementingkan kenyamanan pribadi dengan mengabaikan dampaknya pada<a href=\"https://www.liputan6.com/tekno/read/4520159/google-maps-akan-tampilkan-rute-ramah-lingkungan\"> lingkungan</a>. Itu juga berlaku saat menentukan preferensi mengonsumsi barang dan jasa.&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Padahal, saat memikirkan lingkungan, manusia sebenarnya sedang berinvestasi jangka panjang. \"Kalau mau <i>convience</i>, biasanya <i>nggak</i> pikir panjang. Tapi, <i>ending</i>-nya di mana? Konsekuensinya terhadap biota laut <i>gimana</i>?\" kata Suzy.&nbsp;</p><p>Para orangtua punya kewajiban mengajari anak-anak mereka soal&nbsp;siap repot demi Bumi yang lebih baik di masa depan. Ia pun mengambil jalan itu. Karena sadar dengan konsekuensinya, ia menolak penggunaan botol plastik sekali pakai. Saat akan pergi ke mana-mana, barang yang dibawa pun jadi lebih banyak dari orang biasa.</p><p>\"Haus pun saya <i>nggak</i> minum (dari air minum kemasan), karena saya udah terlalu sadar dengan konsekuensinya. Suami saya sudah tahu itu. Jadi, ia selalu <i>ingetin</i> saya bawa botol air minum sebelum pergi ke mana pun,\" tutur Suzy sembari tertawa.</p><p>Ia juga tak segan mengarahkan anak-anak dan lingkungan sekitar untuk menerapkan gaya hidup yang lebih ramah lingkungan. Cara penyampaiannya dibuat sedikit santai agar tetap mengena pada orang lain dan tidak membuat segan, apalagi takut berdekatan. Ia memulainya dengan memberi hadiah-hadiah kecil yang bermanfaat untuk mengurangi sampah.</p><p>\"Kalau ada <i>birthday</i> atau <i>anniversary</i>, kita kasih yang hijau. Kasih sedotan (yang bisa dipakai ulang) atau tas belanja yang lucu-lucu, misalnya, untuk merangsang mereka jadi <i>zero waste</i>,\" terang perempuan yang pernah dimentori Al Gore untuk kampanye <a href=\"https://www.liputan6.com/bisnis/read/4519237/anggaran-mitigasi-perubahan-iklim-terus-merosot-sri-mulyani-minta-bantuan-pemda\">perubahan iklim</a> tersebut.</p>', 'TldWa09HTXpPVEE0WWpka1lTQXhMbkJ1Wnc9PS5wbmc=.jpg', 'RkQtUmV2aWV3LUxlbmdrYXAtTWluZS4tRWF1LURlLVBhcmZ1bS5qcGc=.jpg', '2021-11-12 09:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(20) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(100) NOT NULL,
  `nama_komentar` varchar(200) NOT NULL,
  `isi` mediumtext NOT NULL,
  `id_blog` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id_podcast` int(20) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id_podcast`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(11, 'bagaimana wanita harus menjadi pribadi yang unggul', 'dGVzdC5tcGVn.mpeg', '618e410334388.png', '2021-11-12 10:25:07'),
(12, 'peduli kesehatan mental pada wanita', 'dGVzdC5tcGVn.mpeg', '618e417f2d15e.jpg', '2021-11-12 10:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(20) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` mediumtext NOT NULL,
  `gambar_sampul` varchar(200) NOT NULL,
  `gambar_kontent` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `judul`, `isi`, `gambar_sampul`, `gambar_kontent`, `tanggal`) VALUES
(14, 'DONASI KONDOM', '<p>Selain heboh Piala Eropa yang membuat sebagian kita kurang tidur dan telat <i>ngantor</i>, kehebohan lainnya di minggu ini adalah pernyataan Menteri Kesehatan RI kita yang baru yang dilansir sebuah media <i>online</i> tentang rencana mempermudah akses remaja untuk mendapatkan kondom sebagai tindak cegah angka aborsi dan kelahiran usia dini. Kehebohan ini makin tak terkontrol setelah seorang aktivis <i>parenting</i> membagi info ini di <i>twitterland</i>, karuan dunia <i>social</i> <i>media</i> yang memang tidak ada ampun menggiring ini menjadi <i>trending topic </i>yang ramai dibicarakan.</p><p>Adalah sebuah benda bernama kondom, yang dalam bahasa latinnya <i>Condon</i> artinya Penampung. Menurut sejarah, kondom ditemukan pada tahun 1564 ketika Gabrielo Fallopia, seorang dokter berkebangsaan Italia merekomendasikan penggunaan sarung linen yang berfungsi sebagai pelindung terhadap penyakit menular seksual. Bukti sejarah juga menemukan kondom pernah dibuat dari usus hewan yg disterilkan, kain sutra berminyak, selaput ikan sampai yang terkini, lateks. Dalam perkembangan kedokteran modern, kondom direkomendasikan sebagai salah satu alat kontrasepsi yang cukup diandalkan untuk menekan angka kelahiran.</p><p>Problem muncul manakala terjadi disfungsi kegunaan dari kondom itu sendiri. Aktivis seks bebas melegitimasi kondom sebagai cara aman untuk menunaikan kemaksiatan, tanpa harus dibayangi ancaman penyakit kelamin menular. Indonesia sejak lama memerangi seks bebas, di mana iklan kondom dibatasi waktu dan jam tayangnya, konten iklan pun harus menghormati kaidah agama dan ketimuran bangsa, bahkan konteks komunikasi dalam iklan kondom lebih mengarah pada alat kontrasepsi.</p><p>Maka, sungguh sebuah kekeliruan besar ketika Menkes yang diharapkan menjadi garda awal pendukung edukasi seks kepada remaja, mengeluarkan pernyataan yang buat “gempa bumi”para ibu yang paling khawatir seks bebas di kalangan remaja. Tak terhitung pakar pendidikan, pakar psikologi remaja dan pakar kesehatan mengeluarkan pernyataan bahwa tingginya aborsi dan kelahiran usia dini, bukan pada akibat perilaku si remajanya, tapi pada sebab lemahnya proses edukasi dini tentang bahaya seks bebas di kalangan remaja.</p><p>Solusi yang Menkes tawarkan lebih pada melegitimasi akibat, bukan membatasi sebab, misalnya menggalakkan pendidikan agama, moral, edukasi keluarga harmonis, seminar kesehatan reproduksi dan bahaya narkoba. Semoga Ibu Menkes yang beru diantik beberapa waktu lalu ini menyadari kekhilafannya dan menemukan solusi yang lebih edukatif dan rasional. Bimbinglah masyarakat taat beragama dan menjauhi zina.</p><p>Teruslah berjuang melindungi buah hati kita wahai Ayah-Bunda. Peluk erat dan janjikan bahwa anda akan mengantarkan mereka ke masa depan yang gemilang. / TRQ</p>', '618e2e60145ef.png', '618e2e60145f1.png', '2021-11-12 09:05:36'),
(15, 'PEDULI HIV AIDS', '<p>Berdasarkan data Komisi Penanggulangan HIVAIDS Kabupaten Banyumas jumlah kasus HIV-AIDS sampai dengan Bulan Juni 2018 tercatat sebanyak 123 kasus. Penderita tersebut tersebar di 27 kecamatan. Usia penderita terbanyak berada pada rentang usia 25-34 tahun sebesar 39,02%, sebagian besar berjenis kelamin laki-laki sebesar 62,6%. Konsep pencegahan HIV-AIDS sudah seharusnya melibatkan masyarakat sebagai upaya pemberdayaan sehingga masyarakat memiliki kewaspadaan tinggi terhadap ancaman penularan virus HIV. Elemen masyarakat tersebut harus digerakkan secara kontinu oleh penggerak program kesehatan terkait seperti kader, tokoh masyarakat, tokoh agama dan instansi seperti puskesmas dan dinas kesehatan.</p><p>Kader masyarakat menyediakan hubungan yang tidak terpisahkan antara masyarakat dan fasilitas kesehatan. Kader masyarakat mendukung pekerja kesehatan yang kewalahan dalam dukungan dan tindak lanjut klien HIV. Namun, peran mereka dalam sistem kesehatan tidak standar atau sistematis dan ada kebutuhan mendesak untuk berinvestasi dalam standardisasi. Dukungan kepada kader masyarakat sangat potensial untuk memaksimalkan dampak kesehatan di masa depan. Peran masyarakat dan model jaringan yang terlibat dalam perencanaan, pemberi layanan dan pemantauan target nasional untuk pencegahan penularan penularan HIV secara vertical diperkuat dengan pemberian layanan dan advokasi melalui pemberian informasi data yang kontinu oleh tenaga kesehatan kepada masyarakat. Adanya rujukan masyarakat, promosi keterlibatan laki-laki melalui teman sebaya serta menghubungkan komunitas ke sarana advokasi bertujuan untuk meningkatkan pencegahan penularan HIV secara vertikal.</p><p>Artikel yang berjudul “<strong>Analisis Peran Penerapan Warga Peduli AIDS (WPA) pada Kader di Desa Karangtengah Cilongok, Banyumas” </strong>menilai peran kader dalam pencegahan HIV-AIDS sehingga dapat dilihat sejauhmana peran kader dan faktor berkaitan dengan peran kader tersebut. Tujuan dari penulisan artikel ini adalah untuk penelitian ini untuk mengetahui persepsi dan peran penerapan program WPA yang dilakukan oleh kader WPA. Variable yang diidentifikasi dalam artikel ini antara lain persepsi, pengetahuan, dan peran tentang pencegahan HIV-AIDS.</p><p>Artikel ini dapat dijadikan bahan pertimbangan bagi para&nbsp;<i>stakeholder</i>&nbsp;terkait untuk merancang dan menerapkan program dan atau kegiatan dalam meningkatkan pengetahuan, persepsi, dan peran kader dalam pencegahan HIV-AIDS. Keterlibatan pemangku kepentingan diperlukan juga dalam menjembatani kesenjangan antara pengetahuan dan persepsi dengan peran kader WPA dalam aplikasi program WPA di masyarakat.</p>', '618e2ec004b15.jpg', '618e2ec004b17.jpg', '2021-11-12 09:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `vidio`
--

CREATE TABLE `vidio` (
  `id_vidio` int(20) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi_vidio` varchar(500) NOT NULL,
  `gambar_thubnail` varchar(200) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vidio`
--

INSERT INTO `vidio` (`id_vidio`, `judul`, `isi_vidio`, `gambar_thubnail`, `tanggal`) VALUES
(11, 'edukasi tentang kesehatan mental', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/usT9prj8uMw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '618e41c328f97.jpg', '2021-11-12 10:50:41'),
(12, 'education untuk usia dini', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VGWdXVjiB5U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '618e42d89b32f.jpg', '2021-11-12 10:51:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `detail_blog`
--
ALTER TABLE `detail_blog`
  ADD PRIMARY KEY (`id_detail_blog`);

--
-- Indexes for table `infografik`
--
ALTER TABLE `infografik`
  ADD PRIMARY KEY (`id_infografik`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id_podcast`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id_vidio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `detail_blog`
--
ALTER TABLE `detail_blog`
  MODIFY `id_detail_blog` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infografik`
--
ALTER TABLE `infografik`
  MODIFY `id_infografik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id_podcast` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
