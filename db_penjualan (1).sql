-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tb_foto_pembelian`;
CREATE TABLE `tb_foto_pembelian` (
  `no` int NOT NULL,
  `foto_transaksi` text NOT NULL,
  `foto_desain_selesai` text NOT NULL,
  `foto_pengembalian` text NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`),
  CONSTRAINT `tb_foto_pembelian_ibfk_1` FOREIGN KEY (`no`) REFERENCES `tb_pembelian` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_kategori`;
CREATE TABLE `tb_kategori` (
  `no` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kategori` (`no`, `nama`) VALUES
(1,	'Undangan'),
(2,	'Kartu Nama'),
(3,	'Spanduk'),
(4,	'Logo');

DROP TABLE IF EXISTS `tb_komen`;
CREATE TABLE `tb_komen` (
  `no` int NOT NULL,
  `komen` mediumtext NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`),
  CONSTRAINT `tb_komen_ibfk_1` FOREIGN KEY (`no`) REFERENCES `tb_produk` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_komen_desain_sendiri`;
CREATE TABLE `tb_komen_desain_sendiri` (
  `no` int NOT NULL,
  `komen` text NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`),
  CONSTRAINT `tb_komen_desain_sendiri_ibfk_1` FOREIGN KEY (`no`) REFERENCES `tb_pembelian` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_pembeli`;
CREATE TABLE `tb_pembeli` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `alamat` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_pembeli` (`id`, `nama`, `email`, `no_telpon`, `alamat`) VALUES
(1,	'Adrianus Aransina Tukan',	'karauksii@gmail.com',	'082293246583',	'Jln Bukit Indah, Soreang, Parepare'),
(2,	'Kicap',	'karauksii@gmail.com',	'082293246583',	'Batu 3 1/2, Jalan Apas, Taman Good View, Tawau, Sabah'),
(3,	'yuni',	'yunimulti263@yahoo.co.id',	'083435543667',	'Parepare'),
(4,	'uni',	'uni@yahoo.com',	'082333234567',	'Parepare, Perumnas wekke\'e'),
(5,	'Hasmia',	'hasmiah@yahoo.co.id',	'082556456456',	'parepare'),
(6,	'chica',	'chica@yahoo.co.id',	'082456546543',	'sidrap'),
(7,	'ip',	'st249380@gmail.com',	'085342033354',	'sidrap'),
(8,	'dilla',	'dillah95@gmail.com',	'082567568457',	'wajo'),
(9,	'alam',	'alam123@yahoo.co.id',	'082657546556',	'Parepare'),
(10,	'lina',	'lina@facebook',	'084566676566',	'Parepare'),
(11,	'test',	'test@gmail.com',	'12312313124',	'test'),
(12,	'asd',	'asd@gmail.com',	'123123123123',	'asd'),
(13,	'asd',	'asd1@gmail.com',	'1234567785556',	'asd'),
(14,	'sad',	'asd@gmail.com',	'12312312321',	'asd'),
(15,	'as',	'asd@gmail.com',	'123123123123',	'asd');

DROP TABLE IF EXISTS `tb_pembelian`;
CREATE TABLE `tb_pembelian` (
  `no` int NOT NULL AUTO_INCREMENT,
  `desain` int NOT NULL,
  `kategori` int DEFAULT NULL,
  `id_pembeli` int NOT NULL,
  `id_produk` int DEFAULT NULL,
  `id_transaksi` int NOT NULL,
  `waktu_pembelian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deadline` int DEFAULT NULL,
  `waktu_penerimaan` datetime DEFAULT NULL,
  `ket` mediumtext NOT NULL,
  PRIMARY KEY (`no`),
  KEY `id_pembeli` (`id_pembeli`),
  KEY `id_produk` (`id_produk`),
  KEY `id_transaksi` (`id_transaksi`),
  KEY `kategori` (`kategori`),
  CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_pembelian_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_pembelian_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_pembelian_ibfk_4` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_pembelian` (`no`, `desain`, `kategori`, `id_pembeli`, `id_produk`, `id_transaksi`, `waktu_pembelian`, `deadline`, `waktu_penerimaan`, `ket`) VALUES
(355,	0,	NULL,	15,	102,	1,	'2023-01-09 14:18:38',	4,	NULL,	'{\"panjang\":\"2\",\"lebar\":\"2\",\"jumlah_kertas\":\"2\",\"alamat\":\"asd@gmail.com\",\"nama\":\"asd\",\"tema\":\"asd\",\"slogan\":\"asd\",\"rekomendasi_warna\":\"asd\",\"penambahan_ket\":\"asd\"}'),
(356,	0,	NULL,	15,	99,	1,	'2023-01-09 14:18:58',	3,	NULL,	'{\"jenis_kertas\":\"25000\",\"jumlah_kertas\":\"2\",\"alamat\":\"asd@gmail.com\",\"nama\":\"asr\",\"no_telpon\":\"123123123123\",\"tema\":\"asr\",\"warna\":\"asr\",\"target_audients\":\"asr\",\"ukutan\":\"asr\",\"penambahan_ket\":\"asr\"}'),
(357,	0,	NULL,	15,	103,	1,	'2023-01-09 14:19:15',	3,	NULL,	'{\"jenis_kertas\":\"4000\",\"jumlah_kertas\":\"2\",\"alamat\":\"asd@gmail.com\",\"nama_pertama\":\"as\",\"ket_nama_pertama\":\"asr\",\"nama_kedua\":\"test\",\"ket_nama_kedua\":\"asrasr\",\"tanggal\":\"test\",\"akad\":\"testjuga\",\"resepsi\":\"test\",\"nama_ortu_pertama\":\"test\",\"ket_ortu_pertama\":\"test\",\"nama_ortu_kedua\":\"test\",\"ket_ortu_kedua\":\"test\",\"nama_keluarga_mengundang\":\"test\",\"ket_keluarga_mengundang\":\"test\",\"penambahan_ket\":\"asrsarasdsad\"}');

DROP TABLE IF EXISTS `tb_produk`;
CREATE TABLE `tb_produk` (
  `no` int NOT NULL AUTO_INCREMENT,
  `kategori` int NOT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `keterangan` tinytext NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `judul` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`no`),
  KEY `kategori` (`kategori`),
  CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_produk` (`no`, `kategori`, `tanggal_upload`, `keterangan`, `deskripsi`, `judul`) VALUES
(99,	2,	NULL,	'{\"harga\":\"12345\",\"img\":\"images\\/produk\\/99.jpg\"}',	'test',	'test'),
(100,	1,	NULL,	'{\"undangan\":\"2\",\"harga\":\"123123\",\"img\":\"images\\/produk\\/100.jpg\"}',	'aras',	'123'),
(101,	1,	NULL,	'{\"undangan\":\"1\",\"harga\":\"123\",\"img\":\"images\\/produk\\/101.jpg\"}',	'test',	'test'),
(102,	3,	NULL,	'{\"harga\":\"213123\",\"img\":\"images\\/produk\\/102.jpg\"}',	'123',	'123'),
(103,	1,	NULL,	'{\"undangan\":\"2\",\"harga\":\"123123\",\"img\":\"images\\/produk\\/103.jpg\"}',	'123213',	'123123');

DROP TABLE IF EXISTS `tb_rekening`;
CREATE TABLE `tb_rekening` (
  `no` int NOT NULL AUTO_INCREMENT,
  `jenis_bank` varchar(50) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_bank` varchar(16) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_rekening` (`no`, `jenis_bank`, `nama_bank`, `nomor_bank`) VALUES
(1,	'BNI',	'Muhamad Zaki Raihan',	'12712434555'),
(2,	'BRI',	'Muhamnad Zaki Raihan',	'001701011645531'),
(3,	'Bank Mandiri',	'Muhamad zaki Raihan',	'9000007396360'),
(4,	'BCA',	'Muhamad zaki Raihan',	'0402495829');

DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE `tb_transaksi` (
  `no` int NOT NULL AUTO_INCREMENT,
  `ket_user` varchar(100) NOT NULL,
  `ket_admin` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_transaksi` (`no`, `ket_user`, `ket_admin`) VALUES
(1,	'Belum Mengirim Bukti Pembayaran',	'Belum Mengirim Bukti Pembayaran'),
(2,	'Proses Pengesahan Bukti Pembayaran',	'Bukti Pembayaran Telah Dikirim / Menunggu Proses Pengesahan'),
(3,	'Pembayaran Disahkan / Sedang Dalam Proses Pembuatan Desain',	'Pembayaran Disahkan / Dalam Proses Pembuatan Desain'),
(4,	'Desain Selesai / Menunggu Pengesahan Dari Anda',	'Desain Selesai / Menunggu Pengesahan Dari Pembeli'),
(5,	'Desain Diterima / Menunggu Pencetakan Pesanan Desain Dari Tim Desain',	'Desain Diterima / Menunggu Pencetakan Pesanan Desain'),
(6,	'Cetakan Selesai / Pesanan Dapat Diambil',	'Pesanan Cetakan Akan Diambil / Menunggu Pengesahan Penerimaan Dari Pembeli'),
(7,	'Pesanan Diterima',	'Pesanan Diterima Pembeli'),
(8,	'Pesanan Diterima / Pengembalian Dalam Pengesahan',	'Pesanan Diterima / Pengesahan Detail Pengembalian Pembeli'),
(9,	'Pengesahan Pengembalian Diterima / Pesanan Gantian Sedang Dicetak',	'Pengesahan Pengembalian Diterima / Mencetak Pesanan Gantian'),
(10,	'Pesanan Gantian Dapat Diambil',	'Pesanan Gantian Diambil / Menunggu Pengesahan Penerimaan Dari Pembeli'),
(11,	'Pesanan Gantian Telah Diterima',	'Pesanan Gantian Telah Diterima Pembeli');

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `no` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no_user` (`id_user`),
  CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_pembeli` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_user` (`no`, `id_user`, `username`, `password`, `level`) VALUES
(1,	1,	'Aran65831',	'Aran65831',	2),
(2,	2,	'Kicap65832',	'Kicap65832',	2),
(3,	NULL,	'admin',	'admin',	1),
(4,	3,	'yuni36673',	'yuni36673',	2),
(5,	4,	'uni45',	'uni45',	2),
(6,	5,	'mia64',	'mia64',	2),
(7,	6,	'chica65',	'chica65',	2),
(8,	7,	'ip33',	'ip33',	2),
(9,	8,	'dilla84578',	'dilla84578',	2),
(10,	9,	'al65',	'al65',	2),
(11,	10,	'lina66',	'lina66',	2),
(12,	11,	'test312411',	'test312411',	2),
(13,	12,	'asd312312',	'asd312312',	2),
(14,	13,	'asd555613',	'asd555613',	2),
(15,	14,	'sad232114',	'sad232114',	2),
(16,	15,	'as312315',	'as312315',	2);

-- 2023-01-09 08:47:43
