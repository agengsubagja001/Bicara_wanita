-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 05:14 AM
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
-- Database: `bicara_wanita2`
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
  `foto_profil` varchar(200) DEFAULT NULL,
  `no_telepon` varchar(13) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `medium` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `username`, `password`, `role_id`, `deskripsi`, `foto_profil`, `no_telepon`, `facebook`, `twitter`, `medium`) VALUES
(1, 'Faishol susilo permana ganteng', 'admin', 'admin', 1, 'saya baru memulai copy writing dengan pengalaman 1 tahun di bidang ini dan masih tahap belajar aamin', '619530f53098d.', '081220395321', '', '', ''),
(2, 'Ageng Subagja', 'agus seyto', '123456', 2, 'saya baru belajar copywriting', NULL, NULL, '', '', ''),
(3, 'Ageng Subagja', 'Agus', '123456789', 2, 'saya baru memulai copy writing dengan pengalaman 1 tahun di bidang ini dan', NULL, NULL, NULL, NULL, NULL),
(4, 'faishol', 'isol', '123', 2, 'saya baru memulai copy writing dengan pengalaman 1 tahun di bidang ini dan', '6195337967bf5.', '081220395252', 'fasihol11', 'fasihol18', 'fasihol20'),
(5, 'faizun', 'admin', 'admin123', 1, 'cek', NULL, NULL, NULL, NULL, NULL),
(6, 'ageng bagja', 'bagja', 'bagja123', 2, 'saya baru memulai copy writing dengan pengalaman 1 tahun di bidang ini dan', '6195f66a19148.png', '081223456821', 'bagja12', 'bagja13', 'bagja15'),
(7, 'Siska amelia', 'siska', '12345', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Widia ningsih', 'widia', '12345', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Arron abarani', 'aron', '12345', 3, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(20) NOT NULL,
  `judul_banner` varchar(200) NOT NULL,
  `gambar_banner` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_program` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `judul_banner`, `gambar_banner`, `tanggal`, `id_program`) VALUES
(1, 'TESTING BANNER', '61960577c6443.png', '2021-11-18 07:49:11', 17),
(2, 'TESTING BANNER 2', '61960d7d42a55.png', '2021-11-18 08:23:25', 21),
(3, 'TESTING BANNER 3', '61960dfb9d484.png', '2021-11-18 08:25:31', 19);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(13) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `isi` varchar(10000) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `id_akun` int(20) DEFAULT NULL,
  `id_kategori` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `isi`, `gambar`, `id_akun`, `id_kategori`, `date`) VALUES
(95, 'TESTING ISOL', '<p>CEK</p>', '619534955ca68.png', 4, 3, '2021-11-17 16:57:57'),
(96, 'TESTING ISOL LAGI', '<p>CEK</p>', '61953aaa20d1a.jpg', 4, 2, '2021-11-17 17:23:54'),
(97, 'TESTING AGUS', '<p>CEK</p>', '61954bb5565b2.jpg', 3, 2, '2021-11-17 18:36:37'),
(98, 'TESTING ADMIN FAIZUN', '<p>CEK</p>', '6195f1c1ada63.jpg', 5, 3, '2021-11-18 06:25:05');

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
(3, 86, 2, 1);

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
(7, 'Brimob: Pasukan Siap Tempur Pertama Indonesia  Baca selengkapnya di artikel \"Brimob: Pasukan Siap Tempur Pertama Indonesia\", https://tirto.id/cuGy', '<p>Pada 1 Juli 1946, keluar Penetapan Pemerintah tahun 1946 No. 11/S.D. tentang Jawatan Kepolisian Negara yang bertanggung jawab langsung kepada perdana menteri. Tanggal tersebut kemudian diperingati sebagai hari lahir Kepolisian Negara Republik Indonesia. Namun, bukan berarti sebelumnya Indonesia tidak punya polisi. Sebelum ada kepolisian negara, terdapat polisi-polisi didikan tentara pendudukan Jepang dan pemerintah kolonial Belanda. Polisi-polisi didikan Jepang bahkan ada yang nekad mendukung Republik di hari-hari pertama kemerdekaan Indonesia. Pada Agustus 1945, polisi didikan Jepang adalah satuan yang masih bersenjata untuk tujuan ketertiban. Padahal, di saat yang sama Tentara Sukarela Pembela Tanah Air (PETA) malah memulangkan para prajuritnya ke kampung halamannya masing-masing. “Tanggal 19 Agustus 1045, PETA dibubarkan, termasuk senjatanya diambil. Tidak ada senjata yang diberikan, berarti tidak ada kekuatan militer yang diserahkan kepada Republik Indonesia,” tulis Purbo Suwondo dalam PETA: Tentara Sukarela Pembela Tanah Air (1996). Beruntunglah pemuda-pemuda Indonesia masih ada yang sadar dengan kondisi zaman dan menjadi anggota Takubetsu Kaisatsutai alias Polisi Istimewa di Kota Surabaya. Ini adalah satuan polisi bersenjata semacam Brigade Mobil (Brimob) di masa sekarang.<br><br>Tengah hari 20 Agustus 1945, beberapa polisi berkebangsaan Indonesia yang bertugas di Surabaya berkumpul. Mereka di antaranya Ajun Inspektur I. Soetarjo, Komandan Polisi Surip, Komandan Polisi Abidin, Komandan Polisi Musa, dan Inspektur Polisi I. M. Jassin. Mereka sepakat mendukung Republik. Bagi mereka, Republik tak akan eksis jika aparat-aparat Jepang tak dilucuti senjata dan wewenangnya. Maka mereka pun memutuskan untuk bergerak. Para anggota Polisi Istimewa Surabaya itu sadar ada persenjataan berat kesatuan mereka di gudang. Senjata masih ada karena atasan-atasan mereka merasa masih punya wewenang menjaga ketertiban walau Jepang sudah menyerah kalah kepada Sekutu pada 14 Agustus 1945. “Orang-orang Jepang dan pemimpin markas kami tahan, sedangkan hubungan telepon ke luar kami putus. Setelah itu, kami membongkar gudang senjata dan mengeluarkan semua perbekalan perang dan amunisi, termasuk mobil lapis baja dan truk,” tulis M Jassin dalam Memoar Jasin Sang Polisi Pejuang: Meluruskan Sejarah Kelahiran Polisi Indonesia (2011). Tindakan itu tentu sangat berisiko. Di antara mereka ada yang bersemangat, tapi tentu saja ada yang ragu untuk bikin gerakan. “Saya mendukung pendirian Pak Jassin. Kita jangan kehilangan waktu,” kata Komandan Polisi Musa. Komandan polisi lain pun sependapat dan siap bergerak. Bahkan, Soetarjo yang semula ragu pun akhirnya ikut dan bilang, “terserah, asal kita hati-hati.” Hari itu juga, 20 Agustus 1945, Jasin memimpin kawan-kawannya. Mereka mematikan jaringan telepon agar orang-orang Jepang di markas polisi tak bisa berhubungan dengan aparat Jepang lainnya. Setelahnya, orang-orang Jepang yang jadi pimpinan atau pelatih kepolisian pun mereka tahan tanpa kesulitan. Orang-orang Jepang itu tak melawan sedikit pun ketika digiring. Bagaimana pun orang-orang Jepang ini sadar diri: negaranya sudah kalah. “Setelah itu, mereka membongkar gudang senjata yang terletak di belakang markas Polisi Istimewa itu,” ujar Jasin. Semua kendaraan yang mereka rebut ditulisi: \"Poelisi Repoeblik Indonesia\", dan tak lupa diberi bendera merah putih. Esoknya, 21 Agustus 1945, pukul tujuh pagi, polisi-polisi yang sukses merebut senjata dan menahan orang-orang Jepang itu melakukan apel pagi. Mereka menyatakan akan berdiri di belakang pemerintah Republik Indonesia yang baru terbentuk. Satu jam kemudian, mereka juga menyatakan satuannya bukan lagi Polisi Istimewa, melainkan Polisi Republik Indonesia. Pasukan pimpinan M. Jasin itu memosisikan diri sebagai satuan tempur dengan persenjataan lengkap. Di hari para bekas Polisi Istimewa itu menyatakan diri sebagai Polisi Republik Indonesia, Republik Indonesia masih belum punya tentara. Badan Keamanan Rakyat (BKR) yang dianggap sebagai cikal bakal tentara nasional baru diputuskan pendiriannya pada 22 Agustus 1945. Satu hari setelah proklamasi Jasin dan kawan-kawan.<br><br>Setelah BKR, baru muncul Tentara Keamanan Rakyat (TKR) pada 5 Oktober 1945. Jasin dan kawan-kawan tak bergabung dengan TKR, mereka tetap jadi polisi. Sementara banyak satuan TKR yang kekurangan senjata, pasukan Jasin tetap jadi pasukan yang senjatanya paling lengkap. Pasukan ini terlibat dalam Pertempuran 10 November 1945 di Surabaya. “Omong kosong kalau ada yang mengaku di bulan Agustus 1945 memiliki kesatuan bersenjata. Yang ada pada waktu itu hanya pasukan-pasukan Polisi Istimewa pimpinan M. Jasin,” kata Jenderal Sudarto yang merupakan mantan Tentara Republik Indonesia Pelajar (TRIP) dan pelaku Pertempuran 10 November. Lebih lanjut, Sudarto menyebut, “Tanpa peran pasukan-pasukan Polisi Istimewa di bawah M. Jasin tak ada peristiwa November 1945.” Selain di front 10 November, pasukan polisi pimpinan Jasin yang kuat itu juga berani menghadapi warlord macam Mayor Sabaruddin. Nama ini adalah perwira yang berani menculik Jenderal Mayor Muhammad ketika rapat bersama Jenderal Sudirman di Yogyakarta. Dia sangat disegani oleh orang-orang Republik.<br><br>Pasukan yang kelak bernama Brimob ini setelah 1946 ikut serta dalam revolusi kemerdekaan Indonesia melawan tentara Belanda. Bahkan, mereka terjun dalam operasi militer memberantas pemberontakan dan operasi Trikora perebutan Irian Barat. Jasin belakangan jadi Jenderal Polisi, Pahlawan Nasional, dan ditahbiskan pula sebagai Bapak Brigade Mobil. Selain Jasin, anggota Brimob yang jadi Pahlawan adalah Karel Satsuit Tubun—yang gugur oleh berondongan pasukan G30S ketika menjaga rumah Wakil Perdana Menteri Johannes Leimena.<br><br>&nbsp;</p>', 'aW5mb2dyYWZpayAzLnBuZw==.jpg', 'aGVhZGVyLW1vemFpay1wZWxvcG9yLXBhc3VrYW4tdGVtcHVyLXRpcnRvLXF1aXRhLTAxX3JhdGlvLTE2eDkuanBn.jpg', '2021-11-16 11:47:08'),
(8, 'Peduli Keselamatan Bumi? Jangan Tergoda Beli Ponsel Baru', '<p>Pada 1958, setelah mengabdi sebagai prajurit militer Amerika Serikat, Jack Kilby bergabung dengan Texas Intruments untuk menjadi teknisi elektrik. Tempat kerjanya ini didirikan oleh Cecil H. Green tujuh tahun sebelumnya sebagai perusahaan yang memproduksi transistor, resistor, dan kapasitor atas lisensi yang dibeli dari AT&amp;T senilai $25.000, atau sekitar Rp3,5 miliar dalam nilai saat ini. Kala itu, Texas Instruments tengah tumbuh pesat, menjadi tulang punggung pelbagai perangkat elektronik. Saat itu, meski Texas Instruments memudahkan penciptaan pelbagai perangkat elektronik--terutama radio--namun masih ada proses yang rumit yang harus dilakukan klien-kliennya dalam menciptakan produk, yakni menggabungkan transistor, resistor, dan kapasitor sebagai satu kesatuan utuh melalui proses solder atau patri yang rumit dan berisiko. Ini terjadi karena perangkat elektronik seperti radio tak dibentuk hanya dengan satu transistor, resistor, dan kapasitor semata, tetapi sangat banyak. Akhirnya menimbulkan problematika teknis bernama \"tyranny of number\". Sebagai karyawan baru, Kilby sadar atas kerumitan itu dan menolak ikut serta dalam acara liburan perusahaan yang dilaksanakan tak lama setelah ia bergabung. Kilby memilih tinggal di kantornya, mengotak-atik transistor, resistor, dan kapasitor yang dibuat Texas Instruments untuk menjadi satu kesatuan utuh. Ia mencoba memecahkan \"tyranny of number\" guna membantu klien-klien perusahaannya bekerja lebih mudah, dan membuat perusahaannya tumbuh lebih pesat. Pada pertengahan September, sesaat setelah rekan-rekannya pulang berlibur, Kilby berhasil memecahkan \"tyranny of number\" dengan menggabungkan transistor, resistor, dan kapasitor dalam kesatuan utuh bernama integrated circuit (IC) alias microchip. Menurut David S. Abraham dalam The Elements of Power: Gadgets, Guns, and the Struggle for a Sustainable Future in the Rare Metal Age (2015), kesuksesan ini terjadi karena \"Kilby berhasil memilih material yang tepat untuk menggabungkan modul-modul tersebut.\" Material yang digunakan Kilby bernama germanium (Ge) yang ditemukan oleh kimiawan asal Jerman, Clemens Alexander Winkler, pada 1886. Penemuan IC, imbuh Abraham, membuat umat manusia memulai era baru: The Age of Rare Metal.Kelangkaan Metal \"Benda-benda yang sebelumnya tak mengandung modul elektronik apapun, kini mengandung unsur elektronik,\" tulis David S. Abraham dalam The Elements of Power: Gadgets, Guns, and the Struggle for a Sustainable Future in the Rare Metal Age (2015). Ia menambahkan, pada mainan anak-anak terlaris dekade 1980-an, misalnya, hanya Teddy Ruxpin (boneka) dan Lazer Tag (pistol-pistolan) yang mengandung modul elektronik. Namun, seiring ditemukannya integrated circuit (IC), hampir semua mainan yang dijual mengandung modul elektronik, memberikan fungsi tambahan yang sebelumnya tak tersedia. Sebagai modul yang memberikan kemampuan logika berbasis binari pada sebuah benda, subjek utama IC tentu bukan mainan, melainkan TV, radio, kulkas, hingga komputer. Hal ini mendorong lahirnya pelbagai perangkat elektronik yang menakjubkan. Tapi tentu IC bukan satu-satunya pondasi utama dalam pelbagai perangkat elektronik. Sebagaimana kisah Jack Kilby yang berhasil menciptakan IC dengan memanfaatkan germanium (Ge), pelbagai perangkat elektronik pun tercipta gara-gara pemilihan elemen metal yang tepat. Tanpa titanium (Ti) atau boron (B), misalnya, antena yang terpasang pada radio atau ponsel tak dapat bekerja. Atau tanpa tantalum (Ta) dan strontium (Sr), pelantang dan mikrofon tidak dapat digunakan untuk memanipulasi suara. Kenyataan ini menegaskah bahwa pelbagai perangkat elektronik tak mungkin ada tanpa pelbagai elemen langka (rare metal). Elemen langka maksudnya adalah bahwa para penambang butuh menggali bumi sangat dalam dan menggunakan sangat banyak energi untuk menghasilkan, misalnya, neodymium (Nd). Terdapat korelasi antara berkembangnya perangkat teknologi yang digawangi IC dengan kelangkaan pelbagai elemen metal. Perkembangan ini kian menjadi-jadi ketika Steve Jobs merevolusi dunia dengan menciptakan iPhone. Mendorong munculnya konsep terkini dari \"smartphone\", alat ajaib yang dapat digunakan untuk keperluan apapun. Brian Merchant, editor Motherboard--kompartemen teknologi pada media Vice, dalam bukunya berjudul The One Device: The Secret History of the iPhone (2017), menyebut bahwa pada tataran paling dasar, iPhone adalah produk yang dihasilkan dengan mencampurbaurkan berbagai material Bumi. iPhone 6 yang dibawa Merchant untuk dianalisis di firma konsultan bisnis tambang 911 Metallurgist, 24 persen dari total berat per unitnya adalah aluminium (Al). Lalu, terdapat material tungsten sebesar 0,02 persen dan 6 persen silikon (Si). iPhone juga mengandung emas (Au) sebesar 0,01 persen, timah (Sn), besi (Fe), lithium (Li), sulfur (S), serta 22 material lainnya yang menggenapkan berat total hingga 129 gram. Tak ketinggalan, tersemat pula yttrium (Y), neodymium (Nd), dan cerium (Ce). Material yang menjadi bahan baku paling mendasar iPhone ini tidak dihasilkan oleh karyawan-karyawan Apple yang duduk manis di depan komputer di 1 Infinite Loop, Cupertino, AS, tetapi oleh para buruh kasar di negara-negara berkembang. Bahkan banyak di antara mereka berusia di bawah umur. Timah yang digunakan untuk menyolder atau mematri modul-modul iPhone, misalnya, dihasilkan melalui tangan buruh-buruh kasar di pergunungan Cerro Rico, Potosi, Bolivia, yang mendapat upah hanya dari seberapa banyak mereka dapat menambang timah. Di saat paling beruntung, menambang timah dalam kuantitas besar maksudnya, buruh-buruh di Bolivia dapat menghasilkan uang hingga 50 dolar AS. Sayangnya, karena harus menambang semakin dalam ke perut bumi, tak jarang mereka memperoleh lelah semata atas kerja keras yang dilakukan. Tak hanya di Bolivia. Timah yang digunakan Apple untuk memproduksi iPhone juga dihasilkan oleh buruh-buruh kasar di Bangka dan Belitung, Indonesia. Secara umum, Apple memperoleh material bumi untuk memproduksi iPhone dari tambang-tambang--selain Bolivia dan Indonesia--di Kongo, Mongolia, dan Chili. Dalam menghasilkan pelbagai elemen sebagai bahan baku satu unit iPhone, rata-rata Apple membutuhkan 34 kilogram bijih mentah material-material bumi, yang membutuhkan 100 liter air untuk memprosesnya.<br><br>Rata-rata di setiap satu unit iPhone, Apple memasang 0,034 gram emas sebagai konektor. dan saat ini terdapat 128 juta unit iPhone di dunia, artinya 24,752 ton emas telah dikeruk Apple dari perut bumi. Masalahnya, emas tak dihasilkan secara langsung, tetapi melalui proses pemurnian/pembersihan bijih emas, di mana tiap satu ton bijih emas rata-rata menghasilkan 1,4 gram emas. Artinya, untuk menghasilkan 24,752 ton emas dibutuhkan 17,68 giga ton bijih emas, setara dengan 0,00000000028 persen masa bumi. Sialnya, hitung-hitungan ini baru sebatas iPhone. Belum termasuk pelbagai smartphone yang diproduksi Samsung, Xiaomi, dan lain sebagainya. Dan nahas, merujuk laporan berjudul \"Intergovernmental Panel on Climate Change/IPCC berjudul Climate Change 2021: The Physical Science Basis\" (2021), telah terjadi peningkatan karbon dioksida (CO2) sebesar 410 ppm (parts per million) di atmosfer setiap tahun sejak 2011. Terjadi pula peningkatan gas metan (CH4) dan dinitrogen monoksida (N2O) masing-masing sebesar 1.866 ppb (part per billion) dan 332 ppb per tahun. Dengan kian mengepulnya gas rumah kaca di atmosfer, suhu permukaan bumi mengalami peningkatan 1,09 derajat Celsius antara 2011 hingga 2021, dibandingkan dengan peningkatan suhu yang terjadi pada 1850 hingga 1900. Suhu permukaan laut pun meningkat 0,88 derajat Celsius dalam rentang yang sama, membuat semakin mengikisnya es di Kutub Utara dan Selatan hingga tinggi permukaan lautan (sea level) meningkat rata-rata 3,7 milimeter per tahun. Peningkatannya jauh lebih tinggi dibandingkan 1901 hingga 1971. Ketika itu permukaan laut hanya meningkat 1,3 milimeter per tahun. Artinya, pesatnya pertumbuhan smartphone menjadi mimpi buruk bagi bumi. Memperpanjang usia pakai smartphone merupakan salah satu cara terbaik untuk menyelamatkan bumi. Tak perlu tergoda dengan jargon-jargon Apple ataupun Samsung yang seakan merengek meminta masyarakat mengganti ponsel setahun sekali.<br><br><br><br>&nbsp;</p><p>&nbsp;</p>', 'aW5mb2dyYWZpayA2LnBuZw==.jpg', 'dGFiZWwtcGVyaW9kaWstaXN0b2NrLS0yX3JhdGlvLTE2eDkuanBn.jpg', '2021-11-16 11:50:47'),
(9, 'Kiprah Para Pelatih Muda Mantan Pemain Sepak Bola ', '<p>FC Barcelona mendepak Ronald Koeman sebagai pelatih usai hanya mengumpulkan 17 dari maksimal 36 poin yang bisa diraih dalam 12 pekan La Liga 2021/2022. Klub asal Katalunya itu rela membayar klausul pelepasan (dikabarkan senilai 4,2 juta pound sterling). Sebagai gantinya, Barça menyewa jasa pelatih Al-Sadd yang juga mantan gelandang mereka, Xavi Hernández. Xavi jelas bisa dibilang salah satu legenda Barcelona. Bersama Andrés Iniesta, kepiawaian pria berusia 41 tahun dalam mengorkestrasi lapangan tengah membuat Barça mengontrol nyaris setiap pertandingan. Ia mengemas lebih dari 500 pertandingan, menyabet 8 gelar La Liga, dan empat kali Champions League. Sebagai pelatih, profesi yang ditekuni sejak pensiun sebagai pemain pada 2019, Xavi telah memberikan tujuh piala untuk Al-Sadd. Menunjuk Xavi yang \"hanya\" meraih trofi di kancah persepakbolaan Qatar untuk menangani salah satu tim terbesar di dunia dalam berbagai kompetisi kelas wahid jelas berisiko. Namun menunjuk legenda seperti Xavi juga bisa dibilang langkah populis untuk mengatasi tren kemunduran klub, kepergian Lionel Messi, dan berbagai krisis internal. Semua demi \"memenangkan\" kembali para fans. Kendati hanya meraih piala di Qatar, Xavi jelas punya potensi untuk menjadi salah satu pelatih terbaik dunia. Xavi punya modal yang cukup untuk tidak menjadi manajer yang gagal mengulangi prestasi sebagai pemain. Dia tahu bagaimana cara meraih gelar, baik ketika merumput atau mengamati dari pinggir lapangan. Dia tahu betul bagaimana bola sebaiknya dimainkan.<br><br>Para Pelatih Muda Penunjukan Xavi mau tak mau mengingatkan pada penunjukan Ole Gunnar Solskjær sebagai pelatih Manchester United. Mereka sama-sama mantan pemain klub masing-masing dan sebelum itu sama-sama pernah meraih gelar di liga-liga yang lebih kecil. Bersama klub Norwegia, Molde, Ole telah meraih tiga gelar. Kesuksesan yang sejauh ini belum mampu ditranslasikannya di United, yang pencapaian tertingginya hanya menjadi finalis Europe League 2020/21. Alih-alih dikenang sebagai penentu treble pada musim 1998/99, lelaki yang semasa bermain dijuluki The Baby Faced Assassin kini lebih disorot dengan tagar di media sosial #OleOut. Selain Ole, mantan-mantan striker lain yang juga menjajal karier sebagai manajer adalah Andriy Shevchenko dan Simone Inzaghi. Usai sebentar mencicipi dunia politik, Sheva mulai menjabat sebagai asisten manajer tim nasional Ukraina pada Februari 2016 dan ditunjuk menjadi pelatih kepala lima bulan kemudian. Timnas berjulukan Zbirna dibawanya melaju hingga perempat final Euro 2020, pencapaian terbaik negara itu sepanjang sejarah. Sheva kemudian kembali ke Italia untuk menukangi Genoa. Ia dan digadang-gadang bakal menjadi pelatih masa depan untuk klub yang membesarkannya, AC Milan. Sementara Simone Inzaghi membuktikan diri mampu mengungguli Filippo Inzaghi dalam karier kepelatihan meski saat masih aktif bermain selalu berada di bawah bayang-bayang sang abang. Saat Filippo gagal menukangi Milan dan kini berpindah-pindah di klub-klub semenjana Italia, Simone berangkat dari Lazio menuju Internazionale. Usai membawa I Biancocelesti menjuarai Coppa Italia dan dua Supercoppa Italiana, Simone kini berpeluang untuk merebut scudetto pertamanya. Jika mantan striker yang menjadi pelatih belum kelewat banyak jumlahnya, tidak demikian dengan mantan gelandang. Ujaran \"midfielder make the best managers\" lumrah keluar dari sungut para pundit atau dalam tulisan-tulisan sepak bola. Tradisi panjang gelandang yang menjadi pelatih hebat sepertinya menjadi salah satu preferensi klub-klub memilih mereka. Di lini tengah, di mana pertandingan antartim sesungguhnya berlangsung, ada para gelandang yang melihat segalanya, memahami banyak aspek dalam serangan dan pertahanan, hingga bertransformasi menjadi manajer hebat. Hari ini kita mendapatinya pada nama-nama seperti Antonio Conte, Zinedine Zidane, dan Josep \"Pep\" Guardiola. Ada pula Roberto De Zerbi yang dianggap mampu membuat tim kelas dua seperti Sassuolo tampil atraktif dan kini mulai mendapatkan gelar bersama Shakhtar Donetsk. Tentunya nama Mikel Arteta, Andrea Pirlo, serta Steven Gerrard yang telah merengkuh berbagai piala untuk klub masing-masing juga masuk hitungan. Namun ada pula gelandang hebat seperti Frank Lampard dan Patrick Vieira yang sejauh ini belum menunjukkan kemahiran yang sama sebagai manajer.<br><br>Jumlah Gelar Lantas, siapa yang layak disebut pelatih muda yang paling sukses? Pelatih seperti De Zerbi tentu belum memenuhi kategori sukses jika dihitung dari jumlah gelar. Begitu juga Julian Nagelsmann yang telah melatih sejak usia 29. Keduanya baru sama-sama meraih gelar piala super di Ukraina dan Jerman. Tapi toh keduanya tetap dianggap sebagai pelatih muda terbaik. Saat ini, hingga pekan ke-14 Ukrainian Premier League, Shakhtar Donetsk arahan De Zerbi masih memuncaki klasemen bersama Dynamo Kyiv, sementara Nagelsmann dengan Bayern (masih) menguasai Bundesliga, begitu pula grup E Champions League yang dihuni Barça, Benfica, dan Dynamo Kyiv. Lalu ada manajer macam Andrea Pirlo. Meski pada musim pertama kepelatihannya di Juventus harus merasakan akhir dari dominasi 9 tahun scudetto, ia tetap mampu meraih gelar-gelar lebih kecil seperti Coppa Italia dan Supercoppa, dengan tim yang menurut pelatih sebelumnya \"untrainable\". Demikian pula dengan Steven Gerrard. Kendati baru meraih satu trofi, gelar juara Scottish Premiership 2020/21 diraihnya dengan spektakuler: back-to-back mengalahkan rival bebuyutan Celtic, tak terkalahkan dalam 38 pertandingan, dan membawa Rangers juara liga untuk pertama kalinya dalam 10 musim. Jika faktor kesuksesan dikembalikan ke jumlah gelar semata, di samping Xavi yang telah meraih tujuh gelar bersama Al-Sadd, ada dua nama lain yang bisa dijadikan acuan: Rúben Amorim dan Marcelo Gallardo. Keduanya juga mantan pemain yang berposisi sebagai gelandang. Amorim pernah memperkuat Benfica dan timnas Portugal, sedangkan Gallardo adalah mantan penggawa Argentina yang pernah memperkuat klub-klub seperti River Plate, Monaco, dan Paris Saint-Germain. Rúben Amorim memang baru mulai melatih tim utama sejak 2019. Namun minimnya pengalaman tidak menghalanginya merebut gelar bersama Braga dan Sporting Lisbon. Pelatih berusia 36 tahun itu telah meraih empat gelar di kancah sepak bola Portugal selama menukangi dua klub. Marcelo gallardo telah melatih sejak 2011 atau saat usianya 35 tahun. Pencapaiannya lebih dahsyat lagi: menjuarai liga di dua negara berbeda, di Uruguay bersama Nacional dan bersama River Plate di Argentina. Total 12 gelar telah diraihnya bersama River Plate, termasuk gelar-gelar internasional yang telah absen di lemari trofi salah satu klub terbesar Argentina itu dalam 17 tahun. Dalam usia yang baru mencapai 45 tahun, Gallardo telah disebut-sebut sebagai pelatih tersukses dalam sejarah River Plate. Seolah tinggal menunggu waktu saja sebelum ia digamit klub-klub Eropa, meramaikan pentas utama sepak bola dunia yang telah sesak dipenuhi pelatih-pelatih muda yang lebih beken, yang bakal segera menggantikan para pelatih tua dengan taktik yang kerap dicap \"dinosaurus\".<br><br>Xavi dan juga pelatih-pelatih muda lain, mantan gelandang atau bukan, tentu bermimpi melanjutkan jejak Pep Guardiola yang dalam debutnya meraih treble sekaligus pelatih termuda yang menjuarai Champions League, atau Zidane yang merebut \"Si Kuping Besar\" tiga kali berturut-turut dalam dua setengah musim pertama sebagai pelatih tim utama. Perolehan yang sangat sulit ditiru, tentu saja, terlebih dengan banyaknya pelatih andal di tim rival dan berbagai aspek dalam perjalanan sebuah tim merebut juara. Itu semua pertaruhan. Demi menjadi lebih melegenda atau gagal dan dikenang generasi kini sebagai pelatih medioker alih-alih pemain hebat.<br>&nbsp;</p>', 'aW5mb2dyYWZpayA1LnBuZw==.jpg', 'YW50YXJhZm90by1zcGFpbi1iYXJjZWxvbmFjb2FjaHhhdmktdW52ZWlsaW5nLTA5MTEyMDIxX3JhdGlvLTE2eDkuanBn.jpg', '2021-11-16 11:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(20) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'LifeStyle'),
(2, 'Ibu dan Anak'),
(3, 'Kesehatan'),
(4, 'Fashion');

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
(13, 'Podcast tentang kesehatan', 'dGVzdC5tcGVn.mpeg', '619723a89ab4a.png', '2021-11-19 04:10:16'),
(14, 'podcast tentang edukasi sex', 'Y2VrLm1wZWc=.mpeg', '619723ee3730c.png', '2021-11-19 04:11:26');

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
(17, 'Menuju Indonesia Bebas HIV/AIDS 2030, Apa Strategi yang Disiapkan?', '<p>Tanggal 1 Desember kemarin diperingati sebagai <a href=\"https://www.idntimes.com/tag/hari-aids\">Hari AIDS</a> Sedunia. Berdasarkan data dari <i>The Joint United Nations Programme on HIV and AIDS</i> (UNAIDS), ada sekitar 38 juta orang di seluruh dunia yang mengidap HIV/AIDS pada tahun 2019. Dari angka tersebut, 36,2 juta adalah orang dewasa dan 1,8 juta adalah anak-anak di bawah usia 15 tahun.</p><p>Atas dasar itu, Perhimpunan Dokter Spesialis Kulit dan Kelamin Indonesia (PERDOSKI), Kelompok Studi Infeksi Menular Seksual Indonesia (KSIMSI), Durex Eduka5eks PT. Reckitt Benckiser Indonesia, serta organisasi kemahasiswaan seperti AMSA dan CIMSA, dan didukung oleh Kementerian Kesehatan Republik Indonesia, mengadakan <i>webinar</i> berjudul “Perkuat Kolaborasi, Tingkatkan Solidaritas” pada Senin (30/11/2020).</p><p>Diharapkan, Indonesia akan bebas HIV/AIDS di tahun 2030, yaitu tidak ada infeksi HIV baru, tidak ada kematian akibat AIDS, dan tidak ada stigma atau diskriminasi (<i>three zeros</i>). Strategi apa yang disiapkan?</p><h2>1. Tetap menjalankan upaya edukasi dan pencegahan dari HIV/AIDS</h2><p><i>Webinar</i> ini dihadiri oleh dr. Siti Nadia Tarmizi, M.Epid, Direktur Pencegahan dan Pengendalian Penyakit Menular Langsung dari Kementerian Kesehatan RI. Ia mengingatkan bahwa isu <a href=\"https://www.idntimes.com/tag/hivaids\">HIV/AIDS</a> tidak boleh luput dari perhatian di tengah kondisi pandemi seperti ini. Upaya edukasi dan pencegahan preventif dari HIV/AIDS tetap harus dilakukan.</p><p>Per triwulan II tahun 2020 hingga Juni 2020, diperkirakan jumlah orang dengan HIV/AIDS (ODHA) mencapai 543.100 orang, mengacu pada data dari Kementerian Kesehatan RI. Dari jumlah tersebut, hanya 205.945 ODHA yang baru memulai konsumsi obat antiretroviral (ARV).</p><p>Sayangnya, topik tentang infeksi menular seksual (IMS) belum banyak dibicarakan oleh remaja, orang tua, dan pasangan menikah. Ini mengacu pada survei yang dilakukan oleh Durex Eduka5eks pada tahun 2019. Mirisnya, 3 dari 10 remaja di lima kota besar Indonesia masih percaya bahwa berinteraksi dengan ODHA dapat menyebabkan penularan HIV/AIDS!</p><h2>2. Pendidikan seks perlu ditanamkan sejak dini untuk memupuk rasa tanggung jawab</h2><p>Pendidikan seks bagi remaja adalah hal yang penting untuk diberikan. Ini ditegaskan oleh Prof. dr. Sjaiful Fahmi Daili, SpKK(K), Ketua Tim Penasihat Kolegium PERDOSKI. Menurutnya, pendidikan seks bisa memberikan tuntunan dan bimbingan yang berkaitan dengan jenis kelamin, mencintai, dan rasa tanggung jawab.</p><p>Bahkan, pendidikan seks harus dimulai sejak masa kanak-kanak hingga dewasa. Edukasi seks ini mencakup aspek moral, sosial, kesehatan, dan agama. Edukasi harus dimulai dari unit terkecil masyarakat, yakni keluarga, diikuti dengan dokter yang berperan memberikan pengobatan, sementara pemerintah bertugas untuk mendesain program dan regulasi.</p><p>Sayangnya, <a href=\"https://www.idntimes.com/tag/edukasi-seks\">edukasi seks</a> menemui tantangan tersendiri. Dalam skala keluarga, orang tua cenderung malu dan menganggap seks tabu untuk dibicarakan. Tak sedikit pula yang tidak tahu apa yang akan disampaikan dan bagaimana cara menyampaikan dengan benar.</p><h2>3. Bagaimana cara memahami kesehatan seksual dan reproduksi dengan mudah?</h2><p>Kampanye Eduka5eks masih digaungkan oleh Durex, produk kontrasepsi keluaran Reckitt Benckiser. Eduka5eks bertujuan untuk menormalisasikan perbincangan seksual dengan melibatkan sejumlah mahasiswa terpilih.</p><p>Lima langkah Eduka5eks mencakup:</p><ol><li><strong>Ayo pahami</strong> – Menunjukkan sikap terbuka untuk memperoleh lebih banyak informasi tentang <a href=\"https://www.idntimes.com/tag/kesehatan-seksual\">kesehatan seksual</a> dan organ reproduksi.</li><li><strong>Mari bicara</strong> – Berani memulai percakapan, walau itu dianggap tabu sekalipun.</li><li><strong>Saling menghargai</strong> – Menghargai pendapat dan keputusan orang lain, kendati itu berbeda dengan apa yang kita yakini.</li><li><strong>Selalu bertanggung jawab</strong> – Pada diri sendiri, pasangan, atau keluarga. Ingatlah selalu ada konsekuensi dari keputusan yang kita ambil.</li><li><strong>Melakukan pemeriksaan kesehatan secara rutin</strong> – Khususnya pemeriksaan kesehatan organ reproduksi dan menjaga kebersihan area genital dengan benar.</li></ol><p>Menurut dr. Helena Rahayu Wonoadi, <i>Project Director</i> Reckitt Benckiser Indonesia, dengan pendekatan komunikasi persuasif dan partisipatif pada remaja dengan menyediakan informasi yang kredibel, target <i>three zeros</i> akan tercapai di tahun 2030.</p><p>Sementara, dr. Hanny Nilasari, SpKK, Ketua Umum KSIMSI, mengatakan bahwa kampanye dan edukasi seksual pada remaja terus dilakukan. Termasuk meluruskan stigma tentang HIV/AIDS bahwa <strong>yang harus dijauhi adalah penyakitnya, bukan penderitanya.</strong></p>', '61939f01d4b94.jpg', '61939f01d4ba6.jpg', '2021-11-16 12:07:29'),
(18, 'Indonesia Bebas Narkoba', '', '61939fa1068ea.jpg', '61939fa1068ef.jpg', '2021-11-16 12:10:09'),
(19, 'Ketahui 5 Manfaat dari Program Keluarga Berencana ALAT KONTRASEPSI HIDUP SEHAT', '<p>Jakarta - Kamu tentu pernah dengar tentang <strong>program keluarga berencana</strong> (KB), bukan? Program skala nasional yang diatur dalam UU No. 10 tahun 1992 ini, dijalankan dan diawasi oleh Badan Kependudukan dan Keluarga Berencana Nasional (BKKBN), untuk menekan angka kelahiran dan mengendalikan pertambahan penduduk di Indonesia.&nbsp;</p><p>Secara sederhana, wujud dari program keluarga berencana adalah untuk mencegah dan menunda <a href=\"http://halodoc.com/kesehatan/kehamilan\">kehamilan</a>. Namun, manfaat yang dapat diperoleh sebenarnya lebih dari itu. Program ini juga secara khusus dirancang untuk menciptakan kemajuan, kestabilan, kesejahteraan ekonomi, sosial, dan spiritual setiap penduduk.</p><h2><strong>Apa Saja Manfaat Program Keluarga Berencana?</strong></h2><p>Dari segi medis, program keluarga berencana memiliki banyak manfaat, baik bagi kesehatan fisik ataupun mental. Berikut ini beberapa manfaat yang dimaksud:</p><p><strong>1.Mencegah Kehamilan yang Tak Diinginkan</strong></p><p>Kehamilan yang tak diinginkan tidak hanya bisa terjadi pada pasangan yang belum menikah saja. Pada beberapa kasus, bisa saja terjadi pada pasangan menikah, karena menilai waktu kehamilan tidak sesuai dengan rencana. Misalnya, jarak antara kehamilan anak pertama dan kedua terlalu dekat.&nbsp;</p><p>Ada berbagai risiko komplikasi kesehatan yang mungkin terjadi akibat kehamilan yang tidak direncanakan, baik bagi ibu ataupun bayi. Bagi ibu, bisa ada risiko depresi saat hamil dan setelah melahirkan, sedangkan pada bayi bisa meningkatkan risiko lahir prematur, hingga cacat.</p><p>Mengutip laman Organisasi Kesehatan Dunia (WHO), penggunaan alat kontrasepsi seperti yang diusung program keluarga berencana, bisa mencegah kehamilan dan risiko kesehatan jangka panjang yang terkait dengan itu.</p><p><strong>2.Mengurangi Risiko Tindakan Aborsi</strong></p><p>Kehamilan yang tidak direncanakan dapat meningkatkan risiko aborsi, terutama yang ilegal dan bisa berakibat fatal. Perlu diketahui bahwa di Indonesia, praktik aborsi dianggap ilegal, kecuali dengan pengawasan dokter, dan didasari oleh alasan medis yang kuat.&nbsp;</p><p><strong>3.Mengurangi Risiko Kematian Ibu dan Bayi</strong></p><p>Komplikasi kehamilan yang berbahaya sangat rentan dialami oleh ibu yang hamil dan melahirkan di usia terlalu dini. Beberapa risiko komplikasi yang dapat dihadapi oleh ibu yang hamil di usia sangat muda adalah fistula obstetri, infeksi, perdarahan hebat, anemia, dan eklampsia.</p><p>Hal ini umumnya terjadi karena tubuh belum “matang” secara fisik maupun biologis. Akibatnya, sang ibu lebih berisiko mengalami dampak dari kehamilan yang tidak direncanakan dengan matang. Risiko berbagai komplikasi ini juga akan meningkat jika sering hamil dengan jarak yang berdekatan.</p><p>Selain bagi ibu, risiko komplikasi yang berbahaya juga bisa terjadi pada bayi. Ibu yang hamil dan melahirkan di usia dini bisa menjadi salah satu penyebab bayi lahir prematur, lahir dengan berat badan bayi rendah, dan kekurangan gizi. Bayi juga berisiko mengalami kematian dini.</p><p>Hal ini terjadi karena janin bersaing untuk mendapatkan asupan gizi dengan tubuh ibu yang hamil di usia sangat muda, karena sama-sama masih dalam tahap perkembangan. Jika janin tidak mendapatkan cukup asupan gizi dan darah bernutrisi, ia akan gagal berkembang dalam kandungan.</p><p><strong>4.Mencegah HIV/AIDS dan Penyakit Menular Seksual</strong></p><p>Selain mencegah kehamilan, metode keluarga berencana seperti kondom dapat membantu mencegah HIV/AIDS dan penyakit menular seksual. Penyakit menular seksual seperti sifilis, klamidia, gonore, atau HPV (<i>human papilloma virus</i>) dapat menular dengan mudah melalui hubungan intim.</p><p>Perlu diketahui bahwa penyakit tersebut bisa berbahaya bagi janin. Ibu yang terinfeksi HIV atau HPV bisa menularkan penyakit tersebut pada bayinya dan mengakibatkan komplikasi serius. Oleh karena itu, program keluarga berencana juga diharapkan bisa mencegah risiko penyakit ini.</p><p><strong>5.Menjaga Kesehatan Mental Seluruh Anggota Keluarga</strong></p><p>Selain risiko kesehatan fisik, ada pula risiko kesehatan mental yang bisa ditanggung karena kehamilan yang tidak direncanakan. Salah satunya adalah berpotensi merampas hak anak untuk tumbuh secara maksimal dari segala aspek, mulai dari tumbuh kembang secara biologis, sosial, dan pendidikan.</p><p>Di sisi lain, ibu juga sangat rentan mengalami depresi saat hamil dan setelah melahirkan. Apalagi jika kehamilan terjadi di usia belia atau bahkan ketika pasangan belum siap memiliki anak.</p><p>Tak hanya ibu, sebagai tulang punggung keluarga, pria juga juga bisa mengalami depresi selama istrinya hamil atau melahirkan, karena belum siap secara fisik, finansial, hingga mental untuk menjadi seorang ayah.</p><p>Oleh karena itu, melalui program keluarga berencana, kamu dan pasangan bisa menentukan sendiri kapan waktu yang tepat untuk memiliki anak. Hal ini membuat kamu dan pasangan dapat mempersiapkan kehamilan secara fisik, finansial, dan mental dengan lebih baik.</p><p>Itulah sedikit penjelasan mengenai manfaat program keluarga berencana, dari segi kesehatan fisik maupun mental. Diskusikan lebih lanjut dengan <a href=\"https://www.halodoc.com/tanya-dokter?utm_source=article&amp;utm_medium=article&amp;utm_campaign=editor_1\">dokter</a> di aplikasi <strong>Halodoc</strong>, terkait metode kontrasepsi apa yang paling tepat untuk kamu dan pasangan.&nbsp;</p>', '6193a158b6db4.jpg', '6193a158b6db6.jpg', '2021-11-16 12:17:28'),
(21, 'Apa itu Seks Bebas? Ketahui Penyebab dan Dampak Buruknya', '<p>Anda mungkin sering mendengar istilah <a href=\"https://www.suara.com/tag/seks-bebas\"><strong>seks bebas</strong></a>, apalagi di kehidupan modern seperti sekarang ini. Lantas, <a href=\"https://www.suara.com/tag/apa-itu-seks-bebas\"><strong>apa itu seks bebas</strong></a>? Perhatikan juga penyebab dan <a href=\"https://www.suara.com/tag/dampak-buruk-seks-bebas\"><strong>dampak buruk seks bebas</strong></a> dalam ulasan berikut.</p><p>Terlepas dari konstruksi sosialnya, seks bebas seringkali mengacu pada seks yang tidak aman, dan akan membawa dampak negatif pada setiap pelakunya.</p><p>Sederhananya, <a href=\"https://www.suara.com/tag/pengertian-seks-bebas\"><strong>pengertian seks bebas</strong></a> yang biasa dikenal di masyarakat Indonesia adalah perilaku seksual yang dilakukan di luar nikah. Dan di dalam praktiknya, hal tersebut bisa terjadi antara satu pasangan atau satu orang dengan berganti-ganti pasangan.</p><p>Parahnya, hal ini juga dapat dilakukan tanpa komitmen atau bahkan tanpa ikatan emosional, termasuk ke dalamnya seks dalam pacaran (seks pranikah), cinta satu malam, prostitusi, hingga bertukar pasangan dengan pasangan lain (swinging).</p><p>Baca Juga:<a href=\"https://www.suara.com/news/2020/10/31/130520/profil-anggota-dpd-ri-asal-bali-i-gusti-ngurah-arya-wedakarna-alias-awk\"><strong>Profil Anggota DPD RI Asal Bali, I Gusti Ngurah Arya Wedakarna alias AWK</strong></a></p><p><a href=\"https://www.suara.com/tag/penyebab-seks-bebas\"><strong>Penyebab Seks Bebas</strong></a></p><p>Ada beberapa faktor menjadi penyebab <a href=\"https://www.suara.com/tag/perilaku-seks-bebas\"><strong>perilaku seks bebas</strong></a>, di antaranya adalah sebagai berikut:</p><ul><li>Pengaruh media elektronik dan media cetak.</li><li>Pengaruh lingkungan.</li><li>Rendahnya pendidikan moral agama,</li><li>Minimnya pengetahuan.</li><li>Perubahan hormon ketika seseorang memasuki masa remaja, yang mengakibatkan organ-organ seks menjadi matang dan membutuhkan penyaluran.</li><li>Motivasi untuk mewujudkan rasa sayang dan cinta yang didominasi oleh perasaan kedekatan dan gairah komitmen yang jelas.</li><li>Rasa ingin tahu yang besar untuk mencoba berbagai hal yang belum diketahui.</li></ul><p><a href=\"https://www.suara.com/tag/dampak-seks-bebas\"><strong>Dampak Seks Bebas</strong></a></p><p>Seks bebas sering dikaitkan sebagai perilaku seks yang berisiko tinggi terkena infeksi menular seksual atau IMS. IMS ini ditularkan dari satu orang ke orang lainnya melalui aktivitas seks, baik melalui vaginal, oral, ataupun anal.</p><p>Berikut ini adalah beberapa jenis IMS yang dapat menyerang pelaku seks bebas:</p><ul><li>Klamidia, disebabkan oleh bakteri Chlamydia trachomatis.</li><li>Sifilis, atau penyakit raja singa yang disebabkan bakteri Treponema pallidum.</li><li>Gonore atau kencing bernanah, yang terjadi karena adanya infeksi dari bakteri Neisseria gonorrhoeae.</li><li>Infeksi jamur.</li><li>Kutil kelamin.</li><li>Herpes simplex, yang disebabkan oleh virus Herpes Simplex yang menyerang kulit, mukosa, dan saraf manusia.</li><li>Hepatitis B, yang ditandai dengan gejala, seperti kelelahan, mual muntah, sakit perut, demam, dan diare.</li><li>HIV/AIDS, terjadi akibat infeksi virus Human Immunodeficiency Virus (HIV) yang merusak sistem kekebalan tubuh.</li></ul><p>Selain beberapa dampak buruk di atas, melakukan seks bebas juga berdampak pada kondisi psikologis manusia yang meliputi:</p><ul><li>Munculnya kekhawatiran akan kehamilan dan berbagai macam penyakit seksual.</li><li>Depresi.</li><li>Mempengaruhi perkembangan karakter.</li><li>Terjadi kehamilan di usia muda.</li></ul><p>Itulah uraian singkat tentang apa itu seks bebas hingga penyebab dan dampak buruk yang wajib dipahami. Semoga para generasi muda Indonesia semakin berwawasan luas dan pandai mengendalikan diri, sehingga dapat terhindar dari perilaku seks bebas.</p>', '6193a26f01e22.jpg', '6193a26f01e24.jpg', '2021-11-16 12:22:07'),
(22, 'Stop Kekerasan Seksual Terhadap Wanita', '<p>KASUS&nbsp;kekerasan seksual terhadap perempuan menjadi permasalahan yang masih terus terjadi, bahkan meningkat. Komisi Nasional Anti Kekerasan Terhadap Perempuan (Komnas Perempuan) yang mengatakan bahwa dalam kurun waktu 12 tahun terakhir, kasus kekerasan terhadap perempuan di Indonesia naik hingga 800%.</p><p>Data Sistem Informasi Online (Simfoni) Perlindungan Perempuan dan Anak Kementerian Pemberdayaan Perempuan dan Perlindungan Anak menyebut, terjadi 6.209 kasus kekerasan seksual pada perempuan dan untuk tahun ini, per 16 Maret 2021 telah terjadi 426 kasus.<br><br>Adapun Catatan Tahunan Komnas Perempuan menyebut ada 5.280 kasus kekerasan seksual terhadap perempuan pada 2018 dan pada 2019 jumlahnya 4.898 kasus. Diyakini, angka tersebut hanyalah ‘puncak dari gunung es’. Kasus di lapangan lebih banyak yang tidak terungkap karena korban memilih untuk diam. Mengapa? Psikolog Yayasan Pulih, Ika Putri Dewi, menjelaskan, dari pengalaman pendampingan terhadap korban, ada sejumlah faktor yang menyebabkan perempuan korban kekerasan seksual memilih untuk diam. Antara lain, mereka menganggap peristiwa yang dialami merupakan aib memalukan yang harus ditutupi, mereka takut tidak dipercaya dan disalahkan, khawatir akan konsekuensi negatif yang didapat jika melapor, dan meragukan proses hukum. “Kesemuanya itu berkorelasi dengan akar permasalahan kekerasan berbasis gender yaitu budaya patriarki, ketidaksetaraan gender, penyalahgunaan relasi kuasa, serta minimnya perspektif HAM dan perspektif gender,” ujar Ika pada workshop “Semua Peduli, Semua terlindungi, Sahkan RUU Penghapusan Kekerasan Seksual (PKS)” yang digelar secara virtual oleh The Body Shop Indonesia dan Forum Jurnalis Perempuan Indonesia (FJPI), beberapa waktu lalu. Akar permasalahan tersebut masih kuat ada di masyarakat.</p><p>&nbsp;</p><p>&nbsp;Membuat penanganan kasus kekerasan seksual terhadap perempuan makin sulit terungkap, apalagi terselesaikan. Bahkan, pihak media massa yang seharusnya mendukung korban untuk mendapat keadilan dan pemulihan kadang justru menyudutkan korban. Ia mencontohkan sebuah judul pemberitaan “Pulang dari Tempat Hiburan Malam, Mahasiswi Mengaku Diperkosa”. Meski mengungkapkan fakta, kalimat ‘pulang dari&nbsp; tempat hiburan malam’ sangat merugikan korban. Karena kalimat itu menggiring pembaca untuk berpikiran bahwa si mahasiswi tersebut ‘wajar’ diperkosa karena dia ‘perempuan nakal’, terbukti dia baru nongkrong di tempat hiburan malam. Demikian pula penyebutan-penyebutan seperti ‘korban memakai pakaian terbuka’ atau ‘korban diperkosa di kamar pelaku’ yang mengesankan ada andil korban sehingga peristiwa itu terjadi. Di sisi penegakan hukum, hukuman pidana untuk pelaku dinilai masih sumir, ringan, lemah, dan dalam prosesnya bias memposisikan korban. Kasus Baiq Nuril contohnya, korban pelecehan seksual yang dilakukan atasannya ini justru dihukum pidana setelah dijerat UU Informasi dan Transaksi Elektronik (ITE). “Terkait hukuman sosial, pelaku tidak pernah mendapatkan hukuman sosial dari masyarakat. Berbeda dengan kasus narkoba, terorisme, korupsi, perampokan atau pembunuhan yang 3 generasi masih diingat,” kata Ketua Pusat Studi Islam, Perempuan, dan Pembangunan (PSIPP) ITB Ahmad Dahlan Jakarta, Yulianti Mutmainah, pada kesempatan sama.</p><p>&nbsp;</p><p>&nbsp;Di tinjau dari perspektif Islam, lanjut Yulianti, ada beberapa kasus kekerasan seksual terhadap perempuan yang patut menjadi acuan dalam proses penanganan. Antara lain seperti yang dikisahkan dalam hadis riwayat Abu Daud dan Tirmidzi tentang seorang perempuan keluar rumah di malam hari hendak salat berjamaah. Di tengah jalan ia diperkosa oleh laki-laki yang kemudian kabur. Ketika ada rombongan laki-laki lain lewat dan bertanya, ia menceritakan peristiwa nahas yang baru menimpanya. Maka para laki-laki itu pun berusaha mengejar si pelaku dan menangkap seseorang yang dicurigai. Si perempuan membenarkan bahwa laki-laki yang ditangkap itulah yang telah memperkosanya. Laki-laki yang ditangkap itu kemudian dibawa ke hadapan Rasulullah SAW dan dijatuhi hukuman rajam. Ketika hukuman hendak dilaksanakan, ada laki-laki lain yang mengakui bahwa dirinyalah yang memperkosa. Rasulullah pun meminta si perempuan untuk memperhatikan kedua laki-laki itu untuk memastikan siapa yang pelaku sebenarnya. Namun si perempuan menjawab, dia tidak dapat mengenali karena kondisi saat itu gelap.&nbsp; Rasulullah lalu memutuskan untuk menjatuhkan hukuman pada laki-laki yang mengakui dirinya pemerkosa.<br><br>&nbsp;</p>', '6193a39c554da.jpg', '6193a39c554dc.jpg', '2021-11-16 12:27:08'),
(23, 'Kenapa Kondom Adalah Cara Paling Ampuh Mencegah Penularan HIV?', '<p>Kondom adalah alat kontrasepsi pencegah kehamilan yang juga berfungsi untuk mencegah penularan penyakit kelamin, seperti HIV. Namun, seberapa efektifkah kondom untuk mencegah HIV?</p><h2><strong>Dua cara efektif untuk mencegah HIV</strong></h2><p>Menurut UNAIDS, di Indonesia ada sekitar 620 ribu orang pengidap HIV sampai tahun 2016. Dari jumlah tersebut, 50 persennya berusia antara 15 hingga 49 tahun. Sementara angka kematian akibat AIDS mencapai 35 ribu orang.</p><p>Tidak ada vaksin untuk mencegah HIV dan tidak ada obat untuk menyembuhkan AIDS, tetapi Anda bisa melindungi diri sendiri agar tidak terinfeksi virus ini.</p><p>Namun, satu-satunya cara untuk mencegah penularan HIV lewat hubungan seksual adalah dengan tidak berhubungan intim sama sekali. Tentunya cara ini sulit dilakukan bagi banyak orang.</p><p>Nah, cara terbaik kedua untuk mencegah HIV dan penyakit kelamin lainnya adalah dengan memakai kondom untuk segala jenis penetrasi seks.</p><h2><strong>Seberapa efektifkah kondom untuk mencegah HIV?</strong></h2><p>Menurut National Institute for Health, penggunaan kondom secara benar dan konsisten sangat efektif untuk mencegah HIV. Bahkan, pemakaian kondom bisa mengurangi risiko HIV sebesar 90-95 persen.</p><p>Lantas, benarkah kondom bisa bocor dan mengakibatkan Anda tetap tertular virus HIV?</p><p>Menurut koordinator pelayanan medis Perkumpulan Keluarga Berencana Indonesia (PKBI) DKI Jakarta, Bondan Widjajanto, penularan akibat pemakaian kondom biasanya lebih karena faktor kesalahan dalam menggunakannya.</p><p>Kebocoran kondom lebih dikarenakan seseorang menggunakan kondom yang sudah kedaluwarsa atau yang disimpan dengan kurang baik, seperti terkena panas matahari maupun karena ditaruh di dompet.</p><p>Penggunaan kondom membuat seks menyenangkan, tetapi tetap aman tanpa harus terpapar risiko HIV.</p><h2><strong>Penting untuk memakai kondom sebelum kontak seksual jenis apa pun</strong></h2><p>Jika Anda tidak tahu apakah pasangan Anda bebas HIV atau tidak, maka selalu gunakan kondom baru tiap melakukan hubungan seks jenis apapun.</p><p>Saat ini kondom tersedia dalam berbagai bentuk, warna, tekstur, bahan, dan rasa yang berbeda, dan sudah tersedia kondom tersedia baik untuk pria maupun wanita.</p><p>Gunakan kondom segera setelah ereksi, bukan sebelum ejakulasi. Ingat, HIV bisa ditularkan sebelum terjadi ejakulasi, karena virus bisa terdapat pada cairan pra-ejakulasi.</p><p>Gunakan kondom yang berbahan lateks atau poliuretan <i>(latex and polyurethane)</i> ketika melakukan hubungan seks. Kondom lateks memiliki pori-pori 5 mikron (0,00002 inci), 10 kali lebih kecil dari sperma.</p><p>Dengan kata lain, kondom yang terbuat dari lateks dinilai cukup ampuh untuk mencegah masuknya virus HIV.</p><p>&nbsp;</p>', '6193a495cda1f.jpg', '6193a495cda23.jpg', '2021-11-16 12:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id_story` int(50) NOT NULL,
  `judul_story` varchar(500) NOT NULL,
  `isi_story` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_akun` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id_story`, `judul_story`, `isi_story`, `status`, `tanggal`, `id_akun`) VALUES
(2, 'aku yang dulu pernah kau sia-sia kan', '“ Kalau aku memang tidak sayang sama kamu ngapain aku mikirin kamu. Tapi semuanya kamu yang ngganggap aku gak sayang sama kamu”“ Jangan iri dan sedih jika kamu tidak memiliki kemampuan seperti yang orang miliki. Yakinlah orang lain juga tidak memiliki kemampuan sepertimu”“ Hanya kamu yang bisa membuat langkahku terhenti, sambil berkata dalam hati mana bisa aku meninggalkanmu”“ Tetap tersenyum walaluku masih dibuat menunggu dan rindu olehmu, tapi itu demi kamu”', 'PUBLISH', '2021-11-18 17:27:21', 8),
(9, 'Pesan untuk wanita yang sedang mengandung', 'Alhamdulillah kehamilan dan proses persalinanku lancar. Bahkan bisa dikatakan “lebih lancar” dibandingkan kedua kehamilan dan persalinan sebelumnya. Memang ketiganya minus mual muntah dan ketiganya lahir secara normal. Tapi yang kali ini pengalamannya lebih menyenangkan lagi, mungkin karena sudah yang ketiga jadi jauuuh lebih santai. Selain itu, pada kehamilan ketiga, aku menemukan olahraga yang benar-benar aku suka. ', 'PUBLISH', '2021-11-18 17:47:30', 8),
(10, 'share pengalaman tidak merawat diri', 'Sementara ketika mereka mempraktikkan jenis welas asih diri yang digambarkan oleh Neff, mereka kehilangan lebih banyak berat badan daripada kelompok kontrol individu yang tidak terlibat dalam praktik welas asih diri.Artikel ini telah tayang di Bisnis.com dengan judul ', 'PUBLISH', '2021-11-18 17:47:42', 7),
(11, 'CEK', '12345', 'sedang di proses', '2021-11-18 17:37:34', 7),
(12, 'hallo', 'cekkkkk', 'sedang di proses', '2021-11-18 17:40:06', 7),
(13, 'TESTING', 'TESTING TESTING TESTING', 'sedang di proses', '2021-11-18 17:41:04', 7),
(17, 'Apakah hidup bisa lebih baik', 'Apakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baikApakah hidup bisa lebih baik', 'PUBLISH', '2021-11-19 04:08:06', 9);

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
(14, 'Oke, Gue Jelek! Terus, Harus Gimana? ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TcWgjXcJVVc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '61938ab2617a6.png', '2021-11-16 10:40:50'),
(15, 'Tips Membagi Waktu Secara Efektif ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/P-CS6RVU7ic\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '61938b45040dd.png', '2021-11-16 10:43:17'),
(17, 'Cara Menentukan Tujuan Hidup ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/cmahbMOqXwY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '61938c2ab851f.png', '2021-11-16 10:47:06'),
(18, 'Belajar Investasi Yang Aman untuk Pemula?', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/c9PrrJlntos\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '61938ccd23569.png', '2021-11-16 10:49:49'),
(19, 'Manajemen Waktu (Bangkitkan Motivasi Produktif)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zC-6glEA4oU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '61938d2f3fe51.png', '2021-11-16 10:51:27'),
(20, 'Langkah untuk Mengubah Hidup Kamu (Mindset yang Membuat Hidup Lebih Baik)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6g8rog5qmTE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '61938d95305b4.png', '2021-11-16 10:53:09');

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
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id_story`);

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
  MODIFY `id_akun` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `detail_blog`
--
ALTER TABLE `detail_blog`
  MODIFY `id_detail_blog` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infografik`
--
ALTER TABLE `infografik`
  MODIFY `id_infografik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id_podcast` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id_story` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
