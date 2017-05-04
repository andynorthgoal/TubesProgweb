-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2017 pada 04.21
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_funcharity`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `no_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`no_admin`, `username`, `password`) VALUES
(5, 'admin1', 'admin1'),
(6, 'admin2', 'admin2'),
(7, 'admin3', 'admin3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `no_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(45) NOT NULL,
  `alamat_agenda` varchar(65) NOT NULL,
  `tgl_setor` date NOT NULL,
  `target_dana` int(11) NOT NULL,
  `deskripsi_agenda` varchar(10000) NOT NULL,
  `link_gambar` varchar(60) NOT NULL,
  `no_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`no_agenda`, `judul_agenda`, `alamat_agenda`, `tgl_setor`, `target_dana`, `deskripsi_agenda`, `link_gambar`, `no_admin`) VALUES
(10, 'Bantu Selamatkan Pondok Pesantren Yang Mau Ro', 'Jawa Barat', '2017-09-30', 900000000, 'Salah satu amal yang terus mengalir ketika seorang muslim meninggal diantaranya sedekah,Untuk itu mari kita bantu selamatkan Pondok pesantren yang roboh ini\r\ndeskripsi:\r\nPondok pesantren Assirojul Munir merupakan salah satu pondok pesantren (Tradisional ) dimana pesantren yang terletak di kampung baru Sukabumi Ini pengajaranya bertumpu pada pengajaran kitab-kitab kuning yang mengharuskan para santri menguasai berbagai macam disiplin Ilmu. seperti Fiqih, Tauhid Mau Pun Tasawuf diharapkan nantinya bisa bermanfaat dimasyarakat sehingga para Santri yang belajar disini tidak mengenal Usia dari mulai Anak-anak sampai orang tua dan setelah lulus pun tidak mendapatkan Ijazah Kelulusan berbeda dengan pesantren Modern lainya dimana pembelajaran Pesantren disatukan dengan pembelajaran Pendidikan Formal Seperti SMP dan SMA . Pada Awalnya Jumlah Santri yang belajar di pondok pesantren Assirojul Munir ini sangat banyak tersebar di berbagai wilayah jawa barat, yang melahirkan sejumlah para Ulama yang siap mengabdikan dirinya di masyarakat demi tegaknya Syiar Agama islam dan diantara Kelebihan pesantren ini diantaranya :\r\n\r\n1. Gratis tidak dipungut biaya sehingga banyak diantara para santri yatim dan duafa yang belajar disini menimba ilmu agama islam.\r\n\r\n2. Fokus belajar Kitab-kitab Kuning (yang dikarang oleh para Salafus Sholeh Imam 4 madzhab) yang mengkaji AlQuran-dan Alhadist sehingga menjaga kemurnian ajaran Islam.\r\n\r\n3. Dituntut untuk bisa berbahasa arab kepada para santri karena saat mengkaji AlQuran, Hadist, Ijma dan Qiyas perlu bahasa arab yang baik dan benar maka diajarkan dipesantren ini disiplin ilmu bahasa Arab Seperti Ilmu Nahu ataupun Sorof.\r\n\r\n4. Adanya Sistem pembelajaran Sorogan Atau Belajar Langsung dihadapan Gurunya disinilah kelebihan pesantren salafiyah atau tradisional dimana seorang Kyai bisa mengawasi secara langsung kemampuan setiap santri sejauh mana menguasai ilmu agama yang dimilikinya.\r\n\r\n5. Mendidik Santri lebih mandiri karena segala sesuatu yang berkaitan dengan kebutuhan santri seperti makan dan minum santri sendiri yang harus memasak dan mengolah makan tersebut.\r\n', '', 5),
(11, 'BANTUAN LOGISTIK RAMADHAN untuk muallaf Pedal', 'NTT', '2017-07-18', 300000000, 'Rumah yang beratap dedaunan, beralaskan tanah, penghasilnya hanya dari memanen buah asam kala tiba musimnya, belum terjangkau listrik, jalanan untuk sampai ke lokasi masih berbatu dan dilapisi tanah yang sangat berdebu. Begitulah sedikit gambaran kondisi tempat tinggal, kesusahan mereka sebagai muallaf pelosok.\r\n\r\n\r\n\r\nSeperti halnya Muallaf yang tersebar dan pertumbuhan cukup pesat yaitu Amanuban Timur, Timur Tenggah Selatan, Nusa Tenggara Timur.\r\n\r\n\r\nJika Anda memasuki pedalaman dan persebaran muallaf yang cukup banyak tersebut, Anda akan menemukan kondisi yang begitu timpang, apalagi di tambah dengan sumber pendapatan yang hanya ada jika musim penghujan tiba dari hasil pertaniaan yang cukup di simpan untuk persediaan makan, arti jika musim kemarau tiba tentu Anda bisa membayangkan sendiri.\r\n\r\n\r\n\r\nTahun ini kami berencana menjangkau saudara Muallaf di beberapa tempat, bersamaan dengan bulan Romadhan yang tinggal menghitung hari, kami berencana memberikan bekal kepada para Muallaf untuk persediaan kala memasuki bulan Suci Romadhan tahun ini.\r\n\r\nSebanyak 1000 Paket Pangan Romadhan, yang insyaallah sebagai komitmen dan kepedulian kita, dalam memudahkan mereka menyambut bulan suci Romadhan.\r\n\r\nJuga membuka senyum mereka, karena sudah cukup tenang karena memiliki persediaan untuk sahur atau berbuka, saat bulan Romadhan tiba.\r\n\r\nIni merupakan komitmen kita sebagai muslim bahwa setiap muslim adalah bersaudara, termasuk mereka para Muallaf di pelosok NTT, yang kondisi cukup memprihatinkan dan perlu kita beri perhatian.\r\n\r\nSatu Kepala Keluarga (KK) akan kita berikan 1 Paket persediaan pangan Romadhan, yang berisikan Beras, Mie, Minyak, Sarden, Gula. kepada 13 Desa yang pedalaman dan 5 Panti Asuhan.\r\n\r\nTentu ini akan membutuhkan dana yang cukup besar, oleh karena itu kami mengajak kaum Muslimin dimanapun berada, untuk terus berapartisipasi, guna menghadirkan senyum berupa hadiah Paket Pangan Romadhan bagi 1000 Ribu Muallaf pedalaman yang tersebedar di beberapa Desa.\r\n\r\nSelain sebagai persediaan kala Romadhan, pangan ini sejatinya penguat bagi saudara-saudara kita Muallaf, agar tetap kuat berjuang walau dalam kondisi yang serba terbatas, karena energi perhatian seperti ini efek begitu dahsyat, bahkan bisa jadi perantara hidayah saudara-saudari yang lain.\r\n\r\n\r\nSebagai gambaran, salah satu lokasi penyaluran adalah Hownobenak, Hownobenak merupakan desa yang terletak di atas gunung untuk sampai di lokasi, perjalanan harus melewati empat gunung dengan medan menanjak. Kondisi jalan cukup rusak, sementara jurang mengangga di tepi jalan.\r\n\r\n\r\nInfo lebih lanjut Hubungi:\r\n\r\nWA : 085773798083\r\n\r\nEmail : akromfoundation@gmail.com', '', 5),
(12, 'Jangan Biarkan Mereka Belajar di Sekolah Kand', 'Banten', '2017-05-24', 100000000, 'Perkenalkan kami adalah siswa/i SD Madrasah Ibtidaiyah Al-Faruq, yang terletak di Kp. Cikadu, Desa Jagaraksa, Kec. Muncang, Kab. Lebak, Banten.\r\n\r\nSetiap pagi, kami selalu bangun dengan penuh semangat untuk berangkat sekolah demi menggapai cita-cita.\r\n\r\nDengan seragam putih merah, kami berjalan menapaki jalan bebatuan yang berkelok-kelok dan rusak. Memang berbahaya, tapi sekolah MI Al-faruq lah satu-satunya sekolah di kampung kami.\r\n\r\nTubuh mungil kami tidak sanggup bila harus berjalan selama 1 jam untuk menjangkau sekolah negeri yang jauhnya mencapai 3 km.\r\n\r\nAkankah Kalian Hanya akan DIAM ?\r\n\r\nSahabat, mari kita menyisihkan sedikit rezeki untuk membantu mewujudkan keinginan adik-adik kita untuk dapat belajar dengan kondisi yang lebih layak.\r\nDonasi anda yang terkumpul akan secepatnya digunakan oleh onemillionhelp KMBD BINUS UNVERISTY untuk membangun ruang kelas, WC, perpustakaan serta donasi meja, kursi, perlengkapan sekolah, keperluan belajar siswa, dan perlengkapan kebersihan.\r\n\r\nMereka membutuhkan bantuan anda !\r\nAyo Gabung bersama kami untuk membantu mereka !', '', 5),
(13, 'Faris dan Nadia (yatim Ustadz Anwar) ingin se', 'NTT', '2017-09-13', 50000000, 'Tinggal di Labuan Bajo, Nusa Tenggara Timur, Almarhum Ustadz Anwar yang merupakan seorang petani dikenal sebagai penggerak dakwah di lingkungannya. Berbagai aktifitas sosial dan keagamaan dilaksanakannya: berceramah di berbagai majelis ta’lim, khutbah jum’at, mengkoordinir penyaluran hewan qurban dan penyerahan bantuan ke masjid-masjid maupun para mustahik.\r\nSejak tahun 2012, beliau sudah merasakan nyeri dan munculnya benjolan di pipi sebelah kiri. Namun hal ini tidak terlalu dihiraukannya dan tetap meneruskan aktifitas dakwah di kampungnya.\r\nBenjolan tersebut terus semakin membesar dan menimbulkan rasa nyeri yang semakin hebat. Beliau kemudian memeriksakan ke dokter dan didiagnosis sebagai kanker parotis.\r\n\r\nBantuan yang dikoordinir Insan Bumi Mandiri mengalir dari para donatur dan beliau dirawat di RS Sanglah, Denpasar, Bali.\r\nHingga akhirnya pada 16 Februari 2017 yang lalu, beliau menghembuskan napas yang terakhir dan meninggalkan 2 anaknya sebagai yatim: Faris dan Nadia.\r\naris yang sempat berhenti sekolah akan kembali mulai bersekolah kelas 1 SD di tahun ini. Demikian juga Nadia yang akan mulai bersekolah Taman Kanak-kanak.\r\n\r\nMari kita bantu dan persiapkan pendidikan untuk anak yatim almarhum untuk meneruskan dakwahnya di Labuan Bajo, NTT..\r\n\r\n\r\n\r\nInsan Bumi Mandiri\r\n\r\nSMS/ WA konfirmasi 0812 214 5114\r\nTelp (022) 205 251 84\r\nJl. Subang no.59 Bandung', '', 5),
(14, 'Satu Sumur untuk Tiga Desa', 'NTT', '2017-07-06', 194000000, 'Salah satu daerah atau pulau yang sulit air adalah pulau Raijua yang adalah satu kecamatan yang ada di Provinsi Nusa Tenggara Timur, kabupaten Sabu-Raijua.\r\n\r\nRaijua adalah salah satu pulau terdapat satu kecamatan di dalamnya, yaitu kecamatan Raijua, Kabupaten Sabu Raijua, Propinsi NTT. Raijua memiliki keadaan geografis berbukit-bukit dan gunung.\r\nSering kekurangan air ketika musim panas yang berlangsung 8-9 bulan dalam setahun. Di sana tidak terdapat kali atau sungai. Embung yang dibuat pemerintah pun kering ketika musim panas. Musim hujan hanya 3-4 bulan dalam setahun, dari bulan Desember-Maret.\r\n\r\nBiaya hidup di Raijua sangat tinggi. Harga beras 600ribu/50kg. Harga semen 100ribu/zak. Harga Bensin 50ribu/1 botol aqua 1500ml. Kendaraan pengangkut terdapat Truk dan Pick up. Sekitar 98% Masyarakat bermata pencaharian sebagai petani ladang lahan kering. Ketika musim panas, sebagian besar dari mereka, bekerja sebagai nelayan, peternak dan pekerja rumput laut, dan juga pedagang. Kebanyakan dari pemuda-pemudi merantau ke kota. Ada yang sekolah, kuliah dan juga bekerja.\r\n\r\nDalam hal mendapatkan air, masyarakat dari desa tetangga berjalan kaki sekitar 10-20 kilometer untuk mengambil air ke desa tetangga. Biasanya memikul di dalam jerigen atau ember.\r\nPada musim hujan (antara bulan Desember-Maret), masyarakat cukup terbantu dengan menampung air hujan untuk mandi dan cuci, namun pada musim panas, sangat kesulitan air. Satu-satunya cara agar air sumur tidak benar-benar kering, setiap rumah tangga hanya boleh ambil air 8 ember dalam sehari. Sesi pengambilan airpun diatur dalam dua kloter, yakni: kloter pertama, pagi hari: 4 embar, kloter kedua, sore hari: 4 embar. Jam pengambilan air pun di batasi. Pagi: dari pukul 05.00-10.00. Sementara sore: dari pukul 16.00- 19.00. Setelah itu, pagar sumur dikunci.\r\n\r\nSering terjadi konflik Karena kesulitan air, maka masyarakat sering berkonflik karena saling merebut air. Sumur dengan lebar lingkaran 1 meter saja, dengan masyarakat yang datang ratusan orang, masing-masing dengan membawa ember untuk menimba air dari dalam sumur, (karena tidak ada bak penampung), maka tidak jarang terjadi kesalahpahaman bahkan terjadi perkelahian.\r\nRencana Penggalian Sumur akan di gali sedalam 40-50 meter. Bak penampung 5 x 2,5 x 1,80 (Panjang x Lebar x Tinggi), Paket Pompa Tenaga Surya, 1 Unit Pompa Air Lorentz PS 200, 10 unit panel surya 50 wp. Dan kebutuhan perlengkapan lain, seperti Kabel-kabel.\r\n\r\nDana Yang di Butuhkan: 194 juta rupiah. Dana 3 juta untuk survei lokasi, 25 juta untuk biaya penggalian sumur sedalam 50 Meter (500 ribu/meter). Gorong-gorong 85 buah dengan akumulasi harga 34 juta. Semen 100 zak, 10 juta. Besi beton 35 Staf masing-masing 75 ribu, pasir 3 ret seharga 2,4 juta. Batu 4 ret 2,6 juta. Biaya operasional lainnya sepreti akomodasi, konsumsi, biaya tukang, transportasi dan lain-lain selama dua bulan pengerjaan (60 hari), total 15 juta. (Satu set Pompa Cell Surya harga 100 juta. Paket Pompa Tenaga Surya, 1 Unit Pompa Air Lorentz PS 1200, 16 unit panel surya 80 wp. Pipa HDPE 20 meter plus conector ke pipa 1,5 inch. Kabel 4 x 2,5 mm 25 meter +kabel 2 x 2,5 mm 25 meter dan Kabel aksessories 20 meter dan Tiang Penyangga). Dengan demikian, total dana yang dibutuhkan dalam pengerjaan ini 194.000.000. Proyeksi dana ini, sesuai dengan harga bahan-bahan bangunan di Pulau Raijua.', '', 5),
(15, 'Bantu Pelosok Ambon Bebas Buta Aksara Alquran', 'Ambon', '2017-05-19', 75000000, '1.000 Alquran untuk Program Pengadaan Pemberantasan Buta Aksara Muslim di Pedalaman/Pelosok Maluku (Ambon)\r\n\r\nMasyarakat Muslim di pedalaman/pelosok Maluku (Ambon) yang tersebar di Kab. Seram Bagian Timur, Kec. Pulau Panjang, Kec. Pulau Gorom, Kec. Gorom Timur, Kec. Wakate, Kec. Seram Timur, Kec. Bula, Kec. Werinama dan Kec. Tutuk Tulo, kebanyakan mereka kurang tersentuh dakwah. Banyak masyarakatnya masih buta aksara Alquran, mlai dari anak-anak kecil mapupun yang sudah dewasa sekalipun.\r\n\r\nMeski demikian antusias masyarakat Muslim di pedalaman Ambon dalam menuntut ilmu sangat luar biasa. Tak hanya anak-anak, orang dewasa hingga kalangan sepuh begitu semangat mempelajari agama bahkan banyak di antara mereka yang juga ingin menghafal Alquran.\r\n\r\nSayangnya, ketersediaan Alquran belum mampu mencukupi kebutuhan mereka. Tak banyak Alquran yang mereka miliki, mereka amat membutuhkan Alquran.\r\n\r\nAyo bantu saudara kita. Kurang lebih dibutuhkan 1.000 Alquran untuk mereka di pedalaman, agar mereka terbebas dari buta aksara Alquran. Insya Allah kebaikan ini akan Allah tukar dengan pahala untuk Anda yang akan terus mengalir hingga ke hari akhir, meski Anda sedang tidur bahkan meski Anda sudah wafat. Setiap rupiah yang kita infakkan, akan menjadi senyum dan harapan bagi mereka. Aamiin Allahumma Aamiin.\r\n\r\nJazakumullah khairan katsiran.', '', 5),
(16, 'BANTU SELAMATKAN CANDRA DARI PENYAKIT LANGKA', 'Bekasi', '2017-05-27', 500000000, 'Adi Chandra lahir tanggal 13 Desember 2014 dalam keadaan normal secara fisik tanpa kekurangan satu apapun.Namun saat usia Chandra hendak menginjak 1 tahun Candra diprediksi menderita penyakit kulit, yang ternyata ini bukan penyakit kulit biasa. Sudah dilakukan pengobatan di berbagai Rumah Sakit di Bekasi dan daerah lainnya hingga saat ini dilakukan pengobatan di RSCM Jakarta.Terakhir candra diketahui menderita penyakit Acquired epidemolysis bullosa, merupakan suatu penyakit genetik yang diturunkan dan ditandai dengan terbentuknya lepuh jika terkena trauma fisik (seperti luka lecet, gesekan terus menerus, dll). Namun, pada beberapa kasus, dapat pula ditemukan epidermolysis bulosa yang didapat (tidak diturunkan).Para medis mengungkapkan banyak bayi yang yang meninggal setelah mengalami infeksi atau masalah pernapasan lain setelah lepuhan ini berkembang mempengaruhi saluran pernapasannya.\r\n\r\nEpidermolisis bulosa merupakan kelainan yang jarang terjadi. Berdasarkan data terbaru dari EB registry diperkirakan terjadi pada 1 dari 10.000-100.000 anak menderita epidermolisis bulosa.\r\n\r\nMenurut keterangan Dokter Rumah Sakit Cipto Mangunkusumo Jakarta, pengobatan Candra saat ini belum bisa dilakukan didalam Negeri, harus dilalukan pengobatan di Luar Negeri yakni Singapura, India atau Amerika.\r\n\r\nMeski belum ada obat yang bisa menyembuhkan penyakit ini, kami bertekad untuk membantu memfasilitasi pengobatan Candra. Untuk saat ini, pengobatan berfokus untuk mengatasi gejala-gejala, termasuk pencegahan nyeri, pencegahan luka, infeksi dan gatal-gatal parah yang terjadi akibat penyembuhan luka terus menerus.Informasi Lebih lanjut bisa Hubungi :\r\n\r\nWA : 085773798083\r\n\r\nEmail : akromfoundation@gmail.com', '', 6),
(17, 'Bantu Ayah saya Melawan Kanker', 'Caruban', '2017-05-27', 300000000, 'Perkenalkan saya Tika , anak pertama dari Pak Dedet \r\nsaya hanya ingin sedikit bercerita tentang kondisi awal ayah saya \r\nawalnya ayah saya hanya terkena diabetes kemudian ayah saya hanya membiarkan sakitnya tanpa suntikan insulin , pada awal desember 2016 ayah saya mengeluh adanya sakit di bagian pelikat bahu kanan dan saat d periksa dan CT scan ternyata ada penyempitan saraf yang d akibatkan dari pembekuan otot segala obat dan terapi sudah di tempuh oleh ayah saya dan akhirnya pada bulan pertengahan Maret 2017 ayah saya jatuh d kamar mandi dan membuat saraf dari perut ke kaki tidak bisa berfungsi seperti sedia kala dan di dukung dengan ayah saya yang tidak bisa buang air kecil dan besar.kemudian dengan tubuh gemetar saya dan ibu saya membawa ayah saya ke RS. Puri Raharja , Saat di CT Scan ternyata ayah saya terkena Tumor Tulang , di situ kami tidak bisa menggunakan BPJS full jadi ibu saya menjual motor untuk membayar tagihan di RS tersebut rumah saya pun sudah di sita bank dan sekarang kami mengontrak rumah dan kini ayah saya sudah di rujuk di RSUP Sanglah dan di rawat hingga saat ini di sana , selang beberapa minggu di rawat ayah saya di vonis " Kanker Sumsum Tulang Belakang Stadium 3 " semakin hari kondisi ayah saya semakin parah , semakin lama tidak mau makan dan sesak nafas yang sangat mengganggu Beliau saat tidur .\r\n\r\nsaya dan adik saya tidak tau apakah masih bisa melanjutkan pendidikan nanti saat semester depan ..\r\n\r\nsaya menceritakan semua dari awal mula sakitnya ayah saya dengan tujuan menggalang dana untuk bantuan kesehatan ayah saya .Ibu saya sudah melakukan semuanya, ayah saya juga masih berjuang dengan sakitnya. Kami tidak mau berdiam diri , karena itu kami menggalang dana agar bisa membantu biaya pengobatan ayah saya. Kami yakin ada banyak orang baik yang mau membantu ayah saya ..saya berharap bisa membantu ayah saya dalam penggalangan dana ini ..untuk ayah saya yang sedang kesakitan dan berjuang dan ingin segera kembali kerumah dengan memeluk kami semua ..\r\n\r\n\r\nTerimakasih ...\r\n\r\nsalam hangat ..\r\n\r\n\r\n\r\n\r\n\r\nTika', '', 5),
(18, 'Masa Depan Untuk Rizky', 'Jakarta', '2017-07-21', 200000000, 'Nama saya Alexander, berusia 21 tahun. Saya mahasiswa semester 6 Universitas Kristen Petra Surabaya. Sejak saya berusia 3 hari, ibu Jumaati, yang tak lain adalah ibu dari Rizky, menjadi pengasuh saya. Sampai hari ini, ibu Jumaati masih bekerja di keluarga saya. Jika dihitung, ia telah bekerja selama 21 tahun.\r\n\r\n\r\n\r\nIa tidak kenal lelah mengasuh saya, bahkan sampai saya mempunyai adik, beliau tetap mengasuh kami dengan sabar. Beliau dengan sabar mengenalkan kepada saya dan adik saya, tentang huruf dan angka. Dengan telaten, beliau membantu saya dan adik saya untuk bisa membaca.\r\n\r\n\r\n\r\nSampai akhirnya ia menikah dengan Eko, seorang supir. Anak pertamanya adalah perempuan yang sekarang telah berusia 6 tahun, dan masih duduk dibangku TK. Kemarin, beliau melahirkan anak kedua yang diberi nama Muhammad Rizky. Rizky lahir saat usia kandungan ibunya baru 8 bulan. Dokter mendiagnosa bahwa Rizky mengidap down syndrome. 5 hari setelah lahir, dokter bilang bahwa usus Rizky bermasalah. Ususnya tidak bisa menerima asupan susu dan makanan. Ia hanya bisa hidup dari infus dan bantuan alat inkubator. Dokter menyarankan agar Rizky dirujuk ke rumah sakit di Surabaya. Namun, untuk bisa melanjutkan proses rujukan, Ibu Jumaati harus membayar tunggakan dirumah sakit. Tunggakan tersebut masih akan bertambah mengingat biaya ambulance, kamar inap, dan biaya operasi Rizky di Surabaya nanti. Belum lagi Ibu Jumaati harus membayar uang sekolah anak pertamanya.\r\n\r\nSaya berharap, teman teman sekalian tergerak untuk membantu saya meringankan beban ibu Jumaati sebagai balas budi saya selama 21 tahun ia mengasuh saya. Teman-teman bukan hanya membantu saya, tapi juga membantu seorang bayi yang belum tau apa-apa agar Rizky masih tetap mempunyai masa depan. Setiap donasi teman-teman akan saya berikan kepada ibu Jumaati. Jika nanti uang yang terkumpul memiliki sisa, akan saya sumbangkan sepenuhnya kepada keluarga ibu Jumaati.\r\nJika ada dari teman-teman yang butuh contact person untuk berhubungan secara langsung dengan Ibu Jumaati, dapat menghubungi saya di:\r\n\r\n087854976557 (Alex)\r\n\r\n\r\n\r\nTerima kasih,\r\n\r\nTuhan memberkati.', '', 7),
(19, 'Perluasan & Renovasi MASJID ANNUR', 'Jakarta Pusat', '2017-06-28', 2147483647, 'Kepada Yth. Kaum Muslimin & Muslimat\r\n\r\nBpk/Ibu/Sdr/I Di Seluruh Penjuru Dunia\r\n\r\nyang di Muliakan Allah SWT.\r\n\r\nAssalamualaikum Warohmatullohi Wabarokatuh.\r\n\r\nSalam silaturahmi kami sampaikan Semoga Rahmat, Hidayah serta ridha Allah SWT selalu menyertai kita dalam melaksanakan aktifitas sehari-hari .\r\n\r\nDengan ini kami pengurus Masjid An Nur jalan kalipasir No. 19 Menteng Jakarta Pusat bermaksud mengajukan permohonan kepada kaum Muslimin dan Muslimat untuk dapat berpartisipasi dalam minat wakaf perluasan dan renovasi Masjid An Nur. Adapun minat wakaf ini merupakan sebuah amal sholih dari suatu niat yang Insha Alloh dicatat sebagai pahala yang sangat besar dan berkesinambungan yang akan mengalir terus menerus.\r\n\r\nDemikian permohonan minat wakaf ini disampaikan, atas kesediaan dan partisipasi dari Bapak/Ibu/Sdr/I Muslimin dan Muslimat semoga mendapat ridho dari Allah SWT sebagai bagian memakmurkan Masjid dan kami sebagai panitia mengucapkan terima kasih.\r\n\r\nWassalamualaikum Warohmatullohi Wabarokatuh.\r\n\r\nMUHAMMAD KAMALUDDIN\r\n\r\nHP.08161914937\r\n\r\nKETUA MASJID ANNUR', '', 7),
(20, 'Masjid Indonesia di Auckland, Selandia Baru', 'uckland, Selandia Baru', '2018-05-23', 2147483647, 'Mohon dukungan infaq dan sedekah dari para sahabat untuk pelunasan pembelian Masjid Indonesia pertama di Auckland, Selandia Baru.\r\ndeskripsi:\r\n"Marilah kita bersama mewujudkan masjid Indonesia pertama di New Zealand sebagai ikhtiar membangun Islam Rahmatan lil ''Alamin" - Pengurus IIC\r\n\r\nAssalamualaikum Warrahmatulahi Wabarrakatuh,\r\n\r\nSalam kenal dari kami, panitia pengurus Indonesian Islamic Centre Auckland (IIC). Auckland adalah kota terbesar di Selandia Baru (New Zealand) dengan populasi Muslim sebesar 46 ribu (2013).\r\nLatar belakang\r\n\r\nSejak lama, komunitas muslim Indonesia di kota Auckland, Selandia Baru melakukan aktifitas dari rumah ke rumah, hingga akhirnya kami menyewa tempat setiap minggunya. Setelah berikhtiar menggalang dana dari tahun 2009, Alhamdulillah tahun 2015 kemarin kami pun membeli sebuah properti yang rencananya akan difungsikan sebagai Masjid.\r\nSejak itu, Masjid yang diberi nama Masjid Utsman Bin Affan ini telah digunakan untuk berbagai kegiatan ummat. Mulai dari pengajian bapak-bapak, pengajian ibu-ibu, pengajian anak-anak, hingga mengundang beberapa pembicara dari luar untuk tausyiah.\r\n\r\n\r\nUpaya Fundraising\r\n\r\nProperti yang kami beli untuk Masjid Utsman ini kami biayai dengan pinjaman lunak dari beberapa pihak, dimana pengembalian bulanannya ditutup oleh patungan komunitas. Saat ini sudah kurang lebih 22% dari kepemilikan telah terbayarkan.\r\n\r\nSelain itu, teman-teman di komunitas juga rutin melakukan kegiatan seperti garage sale, bazaar makanan dan fundraising setiap minggunya dalam ikhtiar mempercepat proses pelunasan.\r\n\r\nAmat besar harapan kami bahwa properti ini dapat segera kami lunasi agar nilai kepimilikan bangunan Masjid Utsman Bin Affan menjadi 100%.\r\n\r\nSemoga Allah SWT membalas kebaikan para saudara donatur dengan berlipat ganda.\r\n\r\nWassalamaualaikum warrahmatullahi wabarakatuh,\r\n\r\nMasjid Utsman Auckland\r\n75 Hendry Ave, Hillsborough\r\nAuckland 1042, New Zealand\r\ne: info@masjidutsman.org.nz\r\np: 64 22 4 887626\r\nw: http://www.masjidutsman.org.nz/', '', 6),
(21, 'Bangun Masjid Indonesia Pertama di London-UK', 'London', '2017-05-27', 2147483647, 'Assalammu''alaikum warahmatullahi wabarakatuh,\r\n\r\nPerkenankan kami, Indonesian Islamic Centre (IIC) Foundation sebuah yayasan yang terdaftar resmi di British Charity Comission No. 1105685 merupakan komunitas masyarakat muslim Indonesia di London. Sebuah ibukota negara Inggris yang juga menjadi rumah bagi 64 juta jiwa, dengan 300 bahasa, sehingga kerap dijuluki negara multikultural. Islam menjadi agama terbesar kedua setelah Kristen. Lebih dari 3 juta orang, atau sekitar 5% penduduk Inggris beragama Islam.\r\n\r\nBerawal dari sekitar 20 tahun yang lalu, dari kegiatan kelompok kecil pengajian rutin dari rumah ke rumah yang dilakukan oleh para perintis WNI yang tinggal di London, akhirnya kami memandang perlu untuk membangun sebuah masjid milik Indonesia yang mana akan menjadi pusat seluruh kegiatan keagamaan bagi warga masyarakat Indonesia baik yang tinggal menetap maupun, tinggal sementara di London\r\n\r\n\r\n"Alhamdulillah 2003, kami berhasil mengumpulkan dana, dan juga dari wakaf jamaah untuk membeli sebuah property rumah di 22 Wakemans Hills. Walaupun kecil, namun cukup untuk menampung 100 orang dan kita manfaatkan sebagai tempat kegiatan pengajian rutin, bazaar, TPA, kajian tafsir, kesenian rebana, dll."\r\n\r\n\r\n"Karena semakin meningkatnya animo masyarakat muslim Indonesia, dan kebutuhan tempat yang sudah tidak mencukupi untuk semua jamaah, maka realisasi pembangunan Masjid IIC perlu segera kita realisasikan bersama."\r\n\r\nSebagai program percepatan, kami berencana akan menjual aset property rumah yang ada saat ini (ekspektasi terjual £500,000 atau sekitar 8 Milyar Rupiah).\r\n\r\nSaat ini kami telah melakukan survey lokasi calon gedung baru kita yang berlokasi di Hyland House, 21 Park Way, Burnt Oak Edgware HA8 5EY\r\n\r\nProperty Details:\r\n\r\nuse: D1 (Educational)\r\nGround floor 995 sq ft\r\nFirst floor 1,018 sq ft\r\nSecond floor 1,032 sq ft\r\nTOTAL 3,045 SQ FT\r\nSummary: D1 building arranged on ground and 2 upper floors together with parking for 8+ cars.\r\n\r\nComprises a self-contained building arranged on ground, first and second floors affording the following approximate gross internal floor areas.\r\n\r\nAmenities:\r\nDouble-glazing\r\nCarpeting\r\nDouble-glazed internal partitioning incorporating blinds\r\nUnder-floor trunking\r\nMale & female WCs\r\nFitted kitchen\r\nAlarm and CCTV\r\nGas-fired central heating\r\nPrice: £995,000 for the benefit of the freehold interest with full vacant possession upon completion.\r\n\r\ndetail rancang bangun dapat dilihat di: www.iic-london.com', '', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id_donasi` int(11) NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `no_agenda` int(11) NOT NULL,
  `id_donatur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_donasi`
--

INSERT INTO `tb_donasi` (`id_donasi`, `jumlah_donasi`, `no_agenda`, `id_donatur`) VALUES
(2, 6000000, 15, 1),
(3, 8000000, 20, 2),
(4, 100000000, 21, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_donatur`
--

CREATE TABLE `tb_donatur` (
  `id_donatur` int(11) NOT NULL,
  `nama_donatur` varchar(30) NOT NULL,
  `email_donatur` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_donatur`
--

INSERT INTO `tb_donatur` (`id_donatur`, `nama_donatur`, `email_donatur`) VALUES
(1, 'andi', 'andynorthgoal@gmail.com'),
(2, 'ikhsan syahputra', 'ikhsaniks@gmail.com'),
(3, 'Muchammad Yusuf', 'muhcup@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`no_admin`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`no_agenda`),
  ADD KEY `fk_admin` (`no_admin`);

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD UNIQUE KEY `fk_donatur` (`id_donatur`),
  ADD KEY `fk_agenda` (`no_agenda`);

--
-- Indexes for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `no_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `no_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD CONSTRAINT `tb_agenda_ibfk_1` FOREIGN KEY (`no_admin`) REFERENCES `tb_admin` (`no_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD CONSTRAINT `tb_donasi_ibfk_1` FOREIGN KEY (`id_donatur`) REFERENCES `tb_donatur` (`id_donatur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_donasi_ibfk_2` FOREIGN KEY (`no_agenda`) REFERENCES `tb_agenda` (`no_agenda`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
