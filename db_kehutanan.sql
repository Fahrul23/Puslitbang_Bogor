-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 07:37 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kehutanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `username`, `password`) VALUES
(16, 'Budi Setiawan', 'Budisetiawan@gmail.com', 'budi', 'budi'),
(17, 'Fahrul Ihsan', 'fahrulihsan23@gmail.com', 'admin', 'admin'),
(18, 'Hendra irawan', 'hendrairawan@gmail.com', 'hendra', 'hendra');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `gambar`, `tanggal`, `deskripsi`) VALUES
(5, 'Arboretum dan Herbarium Gunung Batu, Bogor, Jawa Barat', 'img18.jpg', '2019-11-25', 'Apa itu Arboretum? Istilah yang mungkin bagi sebagian orang tampak asing, tapi terdengar cukup familiar bukan? Oleh karena itu, marilah kita mulai menelaah apa sebenarnya Arboretum itu secara definitif.\r\n\r\nDalam bahasa latin, Arboretum berasal dari kata arbor yang berarti pohon, dan retum yang berarti tempat. Sedangkan Arboretum menurut Kamus Besar Bahasa Indonesia dapat diartikan sebagai tempat berbagai pohon ditanam dan dikembangbiakkan untuk tujuan penelitian atau pendidikan.Istilah Arboretum sendiri pertama kali digunakan oleh John Claudius Loudon pada tahun 1833, walaupun sebenarnya sudah ada konsepnya terlebih dahulu.Melihat dari definisi, secara umum arboretum memiliki kegunaan sebagai tempat mengkoleksi berbagai jenis pohon. Di KBBI sendiri dijabarkan bahwa arboretum dirancang dengan tujuan penelitian dan pendidikan. Namun lebih dari itu, arboretum bisa disiasati untuk memiliki fungsi yang lain.Arboretum sangat layak untuk dijadikan objek wisata edukatif karena di dalamnya para pengunjung dapat mempelajari beraneka ragam spesies flora bahkan fauna yang terdapat di dalam arboretum itu. Selain itu, arsitektur yang artistik dan estetik dari sebuah arboretum dapat dijadikan semacam tempat untuk melangsungkan resepsi pernikahan. Intinya, selama itu bernilai positif dan bersifat membangun, arboretum layak memiliki beribu fungsi dalam hal penggunaannya.Fungsi lain yang tidak kalah menarik dan menjadi topik pembicaraan hangat di kalangan masyarakat kota akhir-akhir ini ialah pembentukan arboretum di pelataran jalan tol Jagorawi (Jakarta Bogor Ciawi). Hal ini didasari karena terbatasnya ruang terbuka hijau (RTH) di wilayah Jakarta-Bogor bagi konservasi keanekaragaman hayati, mitigasi perubahan iklim, serta daerah resapan air sehingga dibutuhkan kreatifitas tinggi dalam mencari solusinya. Salah satu potensi besar untuk memenuhi kebutuhan RTH adalah kawasan bebas hambatan atau jalan tol, salah satunya kawasan TOL Jagorawi. Hal ini dibuktikan bahwa ada sekitar 120 km lahan di kedua sisi (panjang tol Jagorawi sekitar 60 km) jalan tol Jagorawi atau dengan luas lebih dari 72 hektare yang dapat ditanami lebih dari  72.000 batang tanaman keras'),
(6, 'Rehabilitasi Hutan dan Lahan Capai 206 Ribu Ha di 2019', 'Hutann.jpeg', '2019-11-24', 'Pemerintah menganggarkan Rp 2,7 triliun untuk rehabilitasi hutan dan lahan (RHL) pada 2019. Dana ini dialokasikan untuk rencana penanaman pohon di areal seluas 206 ribu hektare (ha) serta pengembangan kebun bibit dan persemaian.\r\n\r\nDi sisi lain, kegiatan ini diharapkan mampu menyerap tenaga kerja sejalan dengan prioritas pemerintahan Kabinet Indonesia Maju 2019-2024.\r\n\r\nMenteri Lingkungan Hidup dan Kehutanan (KLHK) Siti Nurbaya mengatakan, sebelum 2019, luasan RHL baru mencapai 23 ribu ha. Namun pada 2019 luasannya naik hampir 10 lipat mencapai 206 ribu ha Karena itu, kami akan berkeliling Indonesia untuk melakukan observasi ke persemaian, mulai dari persemaian yang disiapkan pemerintah hingga kebun bibit masyarakat. Hal ini karena keberhasilan tumbuh kembang pohon dimulai dari pembibitan yang baik. Presiden juga menugaskan untuk pemulihan lingkungan,\" ujar Menteri Siti Nurbaya saat mengunjungi Persemaian Permanen di KPH Pekalongan Barat, Kabupaten Tegal, Sabtu pekan lalu.\r\n\r\nDalam kunjungan itu, Siti Nurbaya didampingi Wamen Aloe Dohong, Sekjen Bambang Hendroyono, Plt. Dirjen Pengendalian DAS dan Hutan Lindung (PDASHL) Hudoyo serta sejumlah pejabat KLHK lain'),
(7, 'Kawasan Terbuka Justru Rawan Terjadi Karhutla', 'Kebakaran_Hutan.jpeg', '2019-11-26', 'Produktivitas suatu kawasan sangat menentukan banyaknya titik api (hotspot). Umumnya semakin tidak produktifnya satu kawasan seperti kawasan terbuka atau open access yang tidak dibebani izin, hotspot semakin banyak.\r\n\r\nPengamat Kehutanan Dodik Ridho Nurrachmad mengatakan, kecil kemungkinan suatu kawasan produktif seperti perkebunan sawit terbakar dan punya banyak hotspot.\r\n\r\n“Kalau pun itu ada, harus dilihat motif dan modusnya” kata dia dalam keterangan tertulis di Jakarta, Rabu (13/11/2019).\r\n\r\nDodiek menyarankan Pemerintah tidak menutup opsi lain dalam restorasi lahan gambut. Selain Pembasahan gambut (rewetting) sebaiknya opsi pemadatan dibuka. Menurut Dodiek, ada sejumlah alasan perlunya opsi lain, salah satunya untuk mencegah kebakaran.\r\n\r\nMenurut Dodiek, rewetting juga tidak menjamin tinggi muka air bisa sama yakni 0,4 m, terutama di perkebunan sawit rakyat. Hal ini karena usia sawit khususnya sawit rakyat berbeda-beda serta bentuk kanal yang tidak beraturan.Itu masalahnya. Pada kebun sawit usia 10 tahun mungkin ketinggi 0,4 m cukup. Namun bagi sawit yang baru ditanam, pasti akan terendam dan sulit tumbuh,” kata dia.\r\n\r\nDia mengungkapkan, kedua tehnik ini bisa dipergunakan dengan memperhitungkan subsidensi, besaran karbon yang keluar serta kelembaban tanah.\r\n\r\n“Pemadatan juga punya sisi baik. Dengan tehnik ini kebakaran hanya terjadi dipermukaan. Kapilaritas yang sempit akan mendorong air naik ke permukaan sehingga tanah lembab. Ini akan memotong salah satu sumber kebakaran di segitiga api sehingga potensi kebakaran di bawah permukaan tanah sangat kecil, “ jelas Dodiek'),
(8, 'Jenis Hutan Di Indonesia Serta Ciri', 'Hutannn3.jpeg', '2019-11-24', 'enis hutan di Indonesia tentunya sangat beragam. Bahkan di setiap pulau besar di Indonesia kebanyakan memiliki hutan yang sangat luas. Tidak heran jika Indonesia sering juga disebut dengan paru-paru dunia.Namun, belakangan ini banyak terjadi kebakaran hutan yang menyebabkan berbagai kerugian. Upaya masyarakat dan pemerintah dalam menjaga hutan tentunya diperlukan untuk menjaga kelestarian hutan. Apalagi dengan berbagai jenis hutan yang ada di Indonesia.\r\n\r\nJenis hutan di Indonesia bisa dibagi berdasarkan iklim. Berbagai jenis hutan seperti, hutan hujan tropis, hutan bakau, hutan sabana, hutan musin, hingga hutan rawa ada di Indonesia. Selain itu, ada juga pembagian jenis hutan berdasarkan jenis pohon yang tumbuh'),
(9, 'Langkah Awal Lindungi 12 Jenis Poho', 'konservasi.jpeg', '2019-11-25', '[14:40, 11/25/2019] Fahrul Ihsan: Para pakar dan pemerhati konservasi pohon Indonesia menetapkan 12 jenis pohon langka untuk diupayakan pelestariannya. Para pakar tersebut tergabung dalam sebuah forum bernama Forum Pohon Langka Indonesia (FPLI).\r\n\r\nKedua belas jenis pohon tersebut yaitu: Pelahlar (Dipterocarpus littoralis), Lagan Bras (Dipterocarpus cinereus), Resak Banten (Vatica bantamensis), resak brebes (Vatica javanica var javanica), kapur (Dryobalanops aromatica), damar mata kucing (Shorea javanica), tengkawang pinang (Shorea pinanga), durian burung (Durio graveolens), durian daun (Durio oxleyanus), ulin (Eusideroxylon zwageri), Mersawa (Anisoptera costata), dan saninten (Castanopsis argentea).\r\n\r\nPemilihan ini didasarkan pada keterbatasan sebaran dan populasinya, nilai manfaat, tingkat keterancaman, dan potensi budidayanya. Ketua FPLI, Tukirin Partomihardjo menuturkan empat jenis pertama merupakan jenis-jenis prioritas utama yang memiliki sebaran sangat sempit dan populasinya sangat kecil, sehingga bila tidak segera diselamatkan maka dikhawatirkan akan segera punah.\r\n\r\nJenis pohon Lagan Bras bahkan telah dinyatakan punah oleh IUCN sejak tahun 1998, namun kemudian ditemukan kembali oleh tim Kebun Raya Bogor – LIPI pada 2013. Jenis pohon langka tersebut diketahui hanya terdapat di Pulau Mursala, Kabupaten Tapanuli Selatan, Sumatera Utara.\r\n[14:41, 11/25/2019] Fahrul Ihsan: Pelahlar hanya tumbuh di Pulau Nusakambangan, Cilacap, Jawa Tengah. Resak Brebes hanya diketahui di Hutan Lindung Capar, Brebes, Jawa Tengah. Resak Banten di Taman Nasional Ujung Kulon, Banten. Jenis-jenis lainnya dinilai langka akibat tingginya ancaman oleh kerusakan hutan, penebangan tak terkendali, dan kurangnya upaya penanaman jenis-jenis tersebut.\r\n\r\nFPLI bersama Kementrian Lingkungan Hidup dan Kehutanan (KLHK) berupaya untuk menyelamatkan 12 jenis pohon tersebut melalui perumusan Strategi dan Rencana Aksi Konservasi (SRAK). SRAK sendiri merupakan dokumen resmi negara yang dikeluarkan oleh KLHK sebagai acuan untuk langkah-langkah konservasi tingkat nasional.\r\nMenurut pantauan Fauna & Flora International Indonesia Programme/FFI-IP, saat ini draf SRAK pohon langka Indonesia dalam tahap review oleh KLHK dan direncanakan disahkan dan diterbitkan tahun ini agar dapat segera diimplementasikan.\r\n\r\n\"Melalui SRAK terhadap 12 jenis pohon langka ini harapannya penyelamatan pohon langka Indonesia dapat dilakukan secara serius oleh banyak pihak,\" tutur Tukirin.\r\n\r\nBerdasarkan hasil workshop nasional perumusan SRAK oleh FPLI bersama KLHK, terdapat empat strategi utama dalam penyelamatan pohon langka yaitu strategi aturan dan kebijakan, pengelolaan konservasi efektif baik in situ dan eks situ, kerja sama lintas sektoral dan penyadartahuan masyarakat.'),
(10, 'Menerka Hikmah dari Kebakaran Hutan', 'kebakaran.jpeg', '2019-11-22', 'alai Besar Konservasi Sumber Daya Alam (BBKSDA) melakukan identifikasi kawasan hutan yang terdampak bencana kebakaran selama musim kemarau di Taman Wisata Alam Gunung Guntur, Kabupaten Garut, Jawa Barat.\r\n\r\n\"Pemantauan ini dilakukan untuk mengumpulkan data luasan terbakar, melacak jalur api, identifikasi hotspot, penyebab kebakaran dan kondisi tutupan vegetasi yang terbakar,\" kata Kepala Seksi Konservasi Wilayah V Garut BBKSDA Dodi Arisandi melalui siaran pers di Garut,Seorang anggota TNI tengah memadamkan kebakaran di kawasan kaki Gunung Guntur beberapa waktu laluBalai Besar Konservasi Sumber Daya Alam (BBKSDA) melakukan identifikasi kawasan hutan yang terdampak bencana kebakaran selama musim kemarau di Taman Wisata Alam Gunung Guntur, Kabupaten Garut, Jawa Barat.Pemantauan ini dilakukan untuk mengumpulkan data luasan terbakar, melacak jalur api, identifikasi hotspot, penyebab kebakaran dan kondisi tutupan vegetasi yang terbakar,\" kata Kepala Seksi Konservasi Wilayah V Garut BBKSDA Dodi Arisandi melalui siaran pers di Garut, Minggu, 3 November 2019, dilansir Antara.\r\n\r\n\r\nIa menuturkan, BBKSDA Jawa Barat melalui Seksi Wilayah Konservasi V Garut telah melakukan pemantauan langsung pascakebakaran di Gunung Guntur Blok Citiis sejak 28 Oktober 2019.\r\n\r\n\"Pemantauan dilakukan dengan menggunakan drone DJI Mavic Pro, lokasi kebakaran berada di Blok Citiis TWA Gunung Guntur dan di cagar alam,\" katanya.\r\n\r\nIa menyebutkan, pemantauan mulai dari Pos Jaga 3 Kawah Kamojang sampai Leuweung Hejo puncak Gunung Guntur yang diketahui kobaran api telah membakar alang-alang, dan beberapa jenis perdu lainnya seperti harendong, cantigi dan sebagainya, sedangkan jenis pohon didominasi pinus.\r\n\r\nLuas areal hutan yang terbakar di Gunung Guntur, kata dia, hasil identifikasi, diperkirakan kurang lebih seluas 89,88 hektare tersebar di kawasan itu.\r\n\r\nKepala Bidang Konservasi Wilayah III Ciamis Andi Witria Rudianto, menambahkan, Konservasi V Garut telah melakukan identifikasi pascakebakaran hutan yang nantinya akan menjadi data agar ke depan tidak ada lagi kebakaran hutan di Garut.\r\n\r\n\"Kita akan perkuat deteksi dini dan kegiatan penyuluhan serta sosialisasi kepada masyarakat,\" katanya.\r\n\r\nAndi berharap masyarakat berperan aktif untuk menjaga agar bencana kebakaran hutan tidak terjadi kembali, karena kebakaran tersebut akan merugikan banyak pihak.\r\n\r\n\"Akan merugikan semuanya bila terjadi kebakaran,\" katanya.'),
(11, 'Pemburu Gading Gajah di Riau Beraks', 'gajahhh.jpeg', '2019-11-25', 'Gajah sumatra berusia 40 tahun ditemukan tewas di konsesi PT Arara Abadi, tepatnya di petak SBAD 401 B-01, Distrik Duri II, Desa Tasik Serai Kecamatan Talang Mandau, Kabupaten Bengkalis. Kondisi gajah mati itu mengenaskan karena sebagian kepalanya hilang.\r\n\r\nGajah mati itu sudah diambil gadingnya, sedangkan belalai satwa bongsor itu ditemukan tak jauh dari bangkai. Ada juga potongan gading kecil yang ditinggalkan pemburu di lokasi.'),
(12, 'Waspada, Harimau Sumatra Masuk Permukiman Warga Akibat Kebakaran Hutan', 'harimau.jpeg', '2019-11-25', 'Harimau Sumatra yang pernah terekam kamera pengintai masuk kebun masyrakat.Dalam beberapa hari belakangan, warga Desa Pekaitan, Kabupaten Rokan Hilir, resah karena kabar munculnya seekor harimau sumatra yang menghampiri permukiman. Berita kemunculan si Datuk Belang ini sempat viral akhir pekan lalu.\r\n\r\nUntuk memastikan informasi ini, Balai Besar Sumber Daya Alam (BBKSDA) Riau sudah mengirim tim ke desa tersebut. Pencarian jejak dilakukan, begitu juga dengan kotoran harimau yang dikabarkan muncul itu.\r\n\"Hasilnya sejauh ini belum ditemukan jejak harimau, begitu juga dengan kotorannya,\" kata Kabid II BBKSDA Riau Heru Sutmantoro dihubungi wartawan di Pekanbaru, Senin siang, 26 Agustus 2019.\r\n\r\nHeru menyebut, tim yang turun terdiri dari Kepala Resort BKSDA Kota Dumai dan dua stafnya. Tim juga berkoordinasi dengan polsek setempat terkait kabar kemunculan harimau.\r\n\r\n\"Kapolsek di sana juga belum bisa memastikan kebenaran harimau masuk permukiman,\" kata Heru.\r\n\r\nSaat ini, Heru juga mencari warga yang mengaku memfoto harimau ketika mendekati rumahnya tiga hari lalu. Hanya saja, orang itu belum ditemukan oleh tim di lapangan.\r\n\r\n\"Bukti kuat, berupa gambar yang disebut sempat diambil warga ketika harimau muncul belum ditemukan,\" sebut Heru.\r\n\r\nMeski belum menemukan bukti, Heru menyatakan kemunculan harimau bisa terjadi saat ini. Apalagi situasi Riau yang dilanda kebakaran hutan dan lahan (Karhutla) cukup masif.\r\n\r\nKarhutla bisa membuat harimau keluar dari habitatnya karena merasa terusik kehadiran api dan asap hasil kebakaran lahan. Tak hanya harimau, satwa liar lainnya bisa juga keluar dari hutan ketika terjadi kebakaran.\r\n\r\n\"Ini wajar terjadi, bisa saja karena karhutla cukup masif terjadi di Riau, termasuk Rokan Hilir,\" jelas Heru.\r\n\r\nApakah Pekaitan masuk dalam daerah perlintasan harimau, Heru menyatakan tidak. Lokasi itu masih jauh dari kawasan Senepis yang menjadi salah satu habitat harimau di Riau.\r\n\r\n\"Dengan demikian, masyarakat tidak perlu resah dengan kabar ini. Yang jelas tim sudah turun ke lokasi dan belum menemukan bukti sahih,\" tegas Heri'),
(13, 'Waspada, Harimau Sumatra Masuk Perm', 'harimau1.jpeg', '2019-11-25', 'Harimau Sumatra yang pernah terekam kamera pengintai masuk kebun masyrakat.Dalam beberapa hari belakangan, warga Desa Pekaitan, Kabupaten Rokan Hilir, resah karena kabar munculnya seekor harimau sumatra yang menghampiri permukiman. Berita kemunculan si Datuk Belang ini sempat viral akhir pekan lalu.\r\n\r\nUntuk memastikan informasi ini, Balai Besar Sumber Daya Alam (BBKSDA) Riau sudah mengirim tim ke desa tersebut. Pencarian jejak dilakukan, begitu juga dengan kotoran harimau yang dikabarkan muncul itu.\r\n\"Hasilnya sejauh ini belum ditemukan jejak harimau, begitu juga dengan kotorannya,\" kata Kabid II BBKSDA Riau Heru Sutmantoro dihubungi wartawan di Pekanbaru, Senin siang, 26 Agustus 2019.\r\n\r\nHeru menyebut, tim yang turun terdiri dari Kepala Resort BKSDA Kota Dumai dan dua stafnya. Tim juga berkoordinasi dengan polsek setempat terkait kabar kemunculan harimau.\r\n\r\n\"Kapolsek di sana juga belum bisa memastikan kebenaran harimau masuk permukiman,\" kata Heru.\r\n\r\nSaat ini, Heru juga mencari warga yang mengaku memfoto harimau ketika mendekati rumahnya tiga hari lalu. Hanya saja, orang itu belum ditemukan oleh tim di lapangan.\r\n\r\n\"Bukti kuat, berupa gambar yang disebut sempat diambil warga ketika harimau muncul belum ditemukan,\" sebut Heru.\r\n\r\nMeski belum menemukan bukti, Heru menyatakan kemunculan harimau bisa terjadi saat ini. Apalagi situasi Riau yang dilanda kebakaran hutan dan lahan (Karhutla) cukup masif.\r\n\r\nKarhutla bisa membuat harimau keluar dari habitatnya karena merasa terusik kehadiran api dan asap hasil kebakaran lahan. Tak hanya harimau, satwa liar lainnya bisa juga keluar dari hutan ketika terjadi kebakaran.\r\n\r\n\"Ini wajar terjadi, bisa saja karena karhutla cukup masif terjadi di Riau, termasuk Rokan Hilir,\" jelas Heru.\r\n\r\nApakah Pekaitan masuk dalam daerah perlintasan harimau, Heru menyatakan tidak. Lokasi itu masih jauh dari kawasan Senepis yang menjadi salah satu habitat harimau di Riau.\r\n\r\n\"Dengan demikian, masyarakat tidak perlu resah dengan kabar ini. Yang jelas tim sudah turun ke lokasi dan belum menemukan bukti sahih,\" tegas Heri'),
(14, 'Kematian Panda Pinjaman China Ini N', 'panda.jpeg', '2019-11-26', 'Panda Chuang Chuang di Kebun Binatang Chiang Mai Thailand dilaporkan mati mendadak. Hal itu memicu kemarahan China.Pengguna media sosial Tiongkok menyalahkan kebun binatang Thailand atas kematian binatang khas China itu.mereka menyebutkan bahwa pihak kebun binatang lalai atau memberi makan binatang itu tak hati-hati.\r\n\r\nPanda yang menggemaskan itu mati di usia 19 tahun.\r\n\r\nDi alam bebas, panda liar mampu bertahan hidup hingga 20 tahun, tetapi dapat hidup hingga satu dekade lagi di penangkaran.\r\n\r\nSetelah dilakukan penyelidikan, Kebun Binatang Chiang Mai Thailand akhirnya dibebaskan dari tuduhan mencederai diplomasi panda . Hasil otopsi mengungkap bahwa panda terkenal yang dipinjamkan ke kebun binatang oleh China mati karena gagal jantung dan bukan karena kelalaian.');

-- --------------------------------------------------------

--
-- Table structure for table `fauna`
--

CREATE TABLE `fauna` (
  `id` int(11) NOT NULL,
  `nama_binatang` varchar(35) NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fauna`
--

INSERT INTO `fauna` (`id`, `nama_binatang`, `gambar`, `deskripsi`) VALUES
(10, 'Gajah Sumatra', 'gajah.jpg', 'adalah subspesies dari gajah asia yang hanya berhabitat di Pulau Sumatra. Gajah sumatra berpostur lebih kecil daripada subspesies gajah india. Populasinya semakin menurun dan menjadi spesies yang sangat terancam. Sekitar 2000 sampai 2700 ekor gajah sumatra yang tersisa di alam liar berdasarkan survei pada tahun 2000. Sebanyak 65% populasi gajah sumatra lenyap akibat dibunuh manusia, dan 30% kemungkinan dibunuh dengan cara diracuni oleh manusia. Sekitar 83% habitat gajah sumatra telah menjadi wilayah perkebunan akibat perambahan yang agresif.\r\n\r\nGajah sumatra merupakan mamalia terbesar di Indonesia, beratnya mencapai 6 ton dan tumbuh setinggi 3,5 meter pada bahu. Periode kehamilan untuk bayi gajah sumatra adalah 22 bulan dengan umur rata-rata sampai 70 tahun. Herbivora raksasa ini sangat cerdas dan memiliki otak yang lebih besar dibandingkan dengan mamalia darat lain. Telinga yang cukup besar membantu gajah mendengar dengan baik dan membantu mengurangi panas tubuh. Belalainya digunakan untuk mendapatkan makanan dan air dengan cara memegang atau menggenggam bagian ujungnya yang digunakan seperti jari untuk meraup.'),
(11, 'Macan Tutul', 'macan.jpg', 'Hewan ini dikenal juga dengan sebutan harimau dahan karena kemampuannya memanjat. Pada mulanya, orang berpikiran bahwa macan tutul adalah hibrida dari singa dan harimau, sehingga muncul nama \"leopard\" di kalangan peneliti Eropa awal. Macan tutul jawa (P. p. melas) adalah fauna identitas Jawa Barat dan termasuk hewan yang terancam punah di Indonesia.\r\n\r\nMacan tutul berukuran besar, dengan panjang tubuh antara satu sampai dua meter. Spesies ini pada umumnya memiliki bulu berwarna kuning kecoklatan dengan bintik-bintik berwarna hitam. Bintik hitam dikepalanya berukuran lebih kecil. Macan tutul betina serupa, dan berukuran lebih kecil dari jantan.\r\n\r\nDaerah sebaran macan tutul adalah di benua Asia dan Afrika. Spesies ini sempat dianggap memiliki banyak anakjenis (lebih dari 30 subspesies) yang ditemukan di segala macam habitat, mulai dari hutan tropis, gurun, savanah, pegunungan dan daerah pemukiman, tetapi sekarang direduksi menjadi hanya sembilan setelah dilakukan pengujian molekuler.\r\n\r\nMacan Tutul adalah hewan penyendiri, yang saling menghindari satu sama lain. Spesies ini lebih aktif di malam hari. Karena tingkat kematian anak yang tinggi, betina biasanya mempunyai satu sampai dua anak, yang tinggal bersama induknya sampai macan muda berumur sekitar antara satu setengah sampai dua tahun.\r\n\r\nMacan Tutul merupakan pemburu oportunitis, yang menggunakan segala kesempatan untuk mendapatkan mangsanya. Mereka memakan hampir segala mangsa dari berbagai ukuran. Mangsa utamanya terdiri dari aneka hewan menyusui, binatang pengerat, ikan, burung, monyet dan binatang-binatang lain yang terdapat disekitar habitatnya.'),
(12, 'Cendrawasih', 'cenderawasihhh.jpg', 'Burung Cenderawasih yang paling terkenal adalah anggota genus Paradisaea, termasuk spesies tipenya, Cenderawasih kuning-besar, Paradisaea apoda. Jenis ini dideskripsikan dari spesimen yang dibawa ke Eropa dari ekpedisi dagang. Spesimen ini disiapkan oleh pedagang pribumi dengan membuang sayap dan kakinya agar dapat dijadikan hiasan. Hal ini tidak diketahui oleh para penjelajah dan menimbulkan kepercayaan bahwa burung ini tidak pernah mendarat namun tetap berada di udara karena bulu-bulunya. Inilah asal mula nama bird of paradise (\'burung surga\' oleh orang Inggris) dan nama jenis apoda - yang berarti \'tak berkaki\'.\r\n\r\nBanyak jenis mempunyai ritual kawin yang rumit, dengan sistem kawin jenis-jenis Paradisaea adalah burung-burung jantan berkumpul untuk bersaing memperlihatkan keelokannya pada burung betina agar dapat kawin. Sementara jenis lain seperti jenis-jenis Cicinnurus dan Parotia memiliki tari perkawinan yang beraturan. Burung jantan pada jenis yang dimorfik seksual bersifat poligami. Banyak burung hibrida yang dideskripsikan sebagai jenis baru, dan beberapa spesies diragukan kevalidannya.\r\n\r\nJumlah telurnya agak kurang pasti. Pada jenis besar, mungkin hampir selalu satu telur. Jenis kecil dapat menghasilkan sebanyak 2-3 telur (Mackay 1990).');

-- --------------------------------------------------------

--
-- Table structure for table `flora`
--

CREATE TABLE `flora` (
  `id` int(11) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flora`
--

INSERT INTO `flora` (`id`, `nama_tanaman`, `gambar`, `deskripsi`) VALUES
(87, 'Bunga Bangkai', 'bunga_bangkai.jpg', 'Kibut atau bunga bangkai raksasa atau suweg raksasa, Amorphophallus titanum Becc., merupakan tumbuhan dari suku talas-talasan (Araceae) endemik dari Sumatra, Indonesia, yang dikenal sebagai tumbuhan dengan bunga (majemuk) terbesar di dunia,  meskipun catatan menyebutkan bahwa kerabatnya, A. gigas (juga endemik dari Sumatra) dapat menghasilkan bunga setinggi 5m.[1] Kibut disebut juga bunga bangkai dikarenakan bunganya yang mengeluarkan bau seperti bangkai yang membusuk, yang dimaksudkan sebenarnya untuk mengundang kumbang dan lalat untuk menyerbuki bunganya.\r\n\r\nKibut sering dipertukarkan dengan padma raksasa Rafflesia arnoldii. Mungkin karena kedua jenis tumbuhan ini sama-sama memiliki bunga yang berukuran raksasa, dan keduanya sama-sama mengeluarkan bau yang tak enak. Jenis-jenis Amorphophallus juga dapat dijumpai pada hutan hujan tropis di Stasiun Penelitian Hutan Tropis (SPHT) Taman Nasional Kayan Mentarang di Lalut Birai, Desa Long Alango, Kecamatan Bahau Hulu, Kabupaten Malinau.'),
(88, 'Anggrek Bulan', 'anggrek.jpg', 'Anggrek Bulan (Phalaenopsis amabilis) atau puspa pesona adalah salah satu bunga nasional Indonesia. Pertama kali ditemukan oleh seorang ahli botani Belanda, Dr. C.L. Blume.Tanaman anggrek ini tersebar luas mulai dari Malaysia, Indonesia, Filipina, Papua,  hingga ke Australia. Cara hidupnya secara epifit dengan menempel pada batang atau cabang pohon di hutan-hutan dan tumbuh subur hingga 600 meter di atas permukaan laut.Anggrek bulan termasuk dalam tanaman anggrek monopodial yang menyukai sedikit cahaya matahari sebagai penunjang hidupnya. Daunnya berwarna hijau dengan bentuk memanjang. Akar-akarnya berwarna putih dan berbentuk bulat memanjang serta terasa berdaging. Bunganya memiliki sedikit keharuman dan waktu mekar yang lama serta dapat tumbuh hingga diameter 10 cm lebih.'),
(89, 'Bunga edelweiss', 'edelweiss.jpg', 'Anaphalis javanica, yang dikenal secara populer sebagai Edelweiss jawa (Javanese edelweiss) atau Bunga Senduro, adalah tumbuhan endemik zona alpina/montana di berbagai pegunungan tinggi Nusantara.[1] Tumbuhan ini dapat mencapai ketinggian 8 meter dan dapat memiliki batang sebesar kaki manusia walaupun umumnya tidak melebihi 1 meter. Tumbuhan ini sekarang dikategorikan sebagai langka.\r\n\r\nEdelweis merupakan tumbuhan pelopor bagi tanah vulkanik muda di hutan pegunungan dan mampu mempertahankan kelangsungan hidupnya di atas tanah yang tandus, karena mampu membentuk mikoriza dengan jamur tanah tertentu yang secara efektif memperluas kawasan yang dijangkau oleh akar-akarnya dan meningkatkan efisiensi dalam mencari zat hara. Bunga-bunganya, yang biasanya muncul di antara bulan April dan Agustus[1], sangat disukai oleh serangga, lebih dari 300 jenis serangga seperti kutu, tirip, kupu-kupu, lalat, tabuhan, dan lebah terlihat mengunjunginya.'),
(90, 'Rafflesia Arnoladi', 'Rafflesia-Arnoldi.jpg', 'Bunga ini merupakan jenis tumbuhan parasit yang tidak memiliki akar, daun, dan tangkai. Hidupnya hanya menghisap nutrisi dari tumbuhan lain yang menjadi inangnya. Sesuai namanya, bunga Padma Raksasa saat mekar bisa berdiameter satu meter dengan berat sekitar 11 kilogram. Dengan ukuran tersebut, Padma Raksasa dinobatkan menjadi bunga terbesar di dunia.\r\n\r\nSelain ukuran dan bentuknya yang unik serta khas, Padma Raksasa mengeluarkan bau busuk ketika mekar. Aromanya bisa tercium dari jarak yang cukup jauh. Makanya, seringkali bunga ini disebut sebagai bunga bangkai');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `komentar`) VALUES
(1, 'budi setiawan', 'budisetiawan@gmail.com', 'punahnya flora dan fauna dapat mengganggu keseimbangan ekosistem dan selain itu punahnya flora dan fauna berdampak buruk bagi kita, karena nantinya anak cucu kita hanya bisa melihat flora dan fauna yang punah di dalam gambar saja, tanpa bisa melihat langsung aslinya'),
(2, 'imam darmawan', 'imamdar43@gmail.com', 'ndonesia merupakan salah satu jantung dunia, yang terdapat banyak flora dan fauna didalamnya, Apabila terjadi kepunahan terhadap flora dan fauna dapat menyebabkan kurangnya keanekaragaman flora dan fauna di dunia sampai dengan hampir 45%.'),
(4, 'Farhan Maulana', 'farhan@gmail.com', 'indonesia merupakan salah satu jantung dunia, yang terdapat banyak flora dan fauna didalamnya, Apabila terjadi kepunahan terhadap flora dan fauna dapat menyebabkan kurangnya keanekaragaman flora dan fauna di dunia sampai dengan hampir 45%.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fauna`
--
ALTER TABLE `fauna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flora`
--
ALTER TABLE `flora`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fauna`
--
ALTER TABLE `fauna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `flora`
--
ALTER TABLE `flora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
