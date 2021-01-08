/*
 Navicat Premium Data Transfer

 Source Server         : Local MySQL
 Source Server Type    : MySQL
 Source Server Version : 80022
 Source Host           : localhost:3306
 Source Schema         : mip

 Target Server Type    : MySQL
 Target Server Version : 80022
 File Encoding         : 65001

 Date: 08/01/2021 14:56:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bangunan_lain
-- ----------------------------
DROP TABLE IF EXISTS `bangunan_lain`;
CREATE TABLE `bangunan_lain` (
  `bangunan_lain_id` bigint NOT NULL AUTO_INCREMENT,
  `bangunan_lain_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bangunan_lain_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `bangunan_lain_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `bangunan_lain_sketsa` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bangunan_lain_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of bangunan_lain
-- ----------------------------
BEGIN;
INSERT INTO `bangunan_lain` VALUES (1, 'Origin Hotel Kuta Lombok', 'Origin Hotel Kuta Lombok', NULL, NULL, NULL, '2021-01-08 06:33:39');
INSERT INTO `bangunan_lain` VALUES (2, 'Ananda Villa Kuta lombok / Bliz Villa', 'Ananda Villa Kuta lombok / Bliz Villa', 'Kuta Lombok', NULL, NULL, NULL);
INSERT INTO `bangunan_lain` VALUES (3, 'Selong180 jabon selong belanak', 'Selong180 jabon selong belanak', 'Selong Belanak', NULL, NULL, NULL);
INSERT INTO `bangunan_lain` VALUES (4, 'asdf', 'asdf', NULL, '/uploads/bangunanlain/16100878708We21q1HDCdumaVU.jpeg', '2021-01-08 06:36:06', '2021-01-08 06:37:50');
COMMIT;

-- ----------------------------
-- Table structure for bangunan_lain_gambar
-- ----------------------------
DROP TABLE IF EXISTS `bangunan_lain_gambar`;
CREATE TABLE `bangunan_lain_gambar` (
  `bangunan_lain_id` bigint NOT NULL,
  `bangunan_lain_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  KEY `bangunan_lain_gambar_ibfk_1` (`bangunan_lain_id`),
  CONSTRAINT `bangunan_lain_gambar_ibfk_1` FOREIGN KEY (`bangunan_lain_id`) REFERENCES `bangunan_lain` (`bangunan_lain_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of bangunan_lain_gambar
-- ----------------------------
BEGIN;
INSERT INTO `bangunan_lain_gambar` VALUES (1, '/uploads/slider/p2.jpg');
INSERT INTO `bangunan_lain_gambar` VALUES (2, '/uploads/slider/p3.jpg');
INSERT INTO `bangunan_lain_gambar` VALUES (3, '/uploads/slider/p1.jpg');
INSERT INTO `bangunan_lain_gambar` VALUES (4, '/uploads/bangunanlain/1610087766xGT3SO4o30P14Js4.jpeg');
COMMIT;

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `gallery_id` bigint NOT NULL,
  `gallery_judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `gallery_file` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`gallery_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for kalimat
-- ----------------------------
DROP TABLE IF EXISTS `kalimat`;
CREATE TABLE `kalimat` (
  `kalimat_id` bigint NOT NULL AUTO_INCREMENT,
  `kalimat_jenis` varchar(255) DEFAULT NULL,
  `kalimat_judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `kalimat_text` text,
  `kalimat_gambar` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kalimat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of kalimat
-- ----------------------------
BEGIN;
INSERT INTO `kalimat` VALUES (2, 'Intro', 'Kebijakan Mutu', 'Bertekad untuk bekerja tepat waktu dengan mutu yang baik untu mencapai kepuasan pelanggan dan berusaha untuk meningkatkan inovasi produk serta sumber daya manusia secara maksimal', '/uploads/moto/1610025047IZ0wIurWQx1uLxVy.jpeg', '2021-01-07 00:00:00', '2021-01-07 13:10:47');
INSERT INTO `kalimat` VALUES (3, 'Tentang Kami', NULL, '<p>PT. Mahesa Indo Persada didirikan di Mataram pada Notaris Ahsan Ramali, SH dengan akta notaris No. 26 pada tanggal 17 Juni 2015 dengan pengesahan Menteri Hukum dan HAM nomor : AHU-2445153_AH_01_01_TAHUN_2015. Dan akta perubahan terakhir di Praya pada notaris Zainul Islam, SH dengan nomor 13 Tanggal 30 Juni 2018 dengan pengesahan Menteri Hukum dan HAM nomor : AHU-AH.01.03-0249833.</p><p><br></p><p><span style=\"font-weight: bolder;\">VISI</span></p><p>Menjadikan perusahaan yang mengutamakan kepuasan pelanggan melalui produk yang bermutu, tepat waktu dengan harga yang bersaing</p><p>Menjadikan perusahaan di bidang jasa konstruksi yang dikelola secara profesional dan mampu berkompetisi</p><p>Memberikan nilai tambah bagi pelanggan, mitra, karyawan serta masyarakat dalam meraih kesuksesan bersama</p><p><br></p><p><b>KEBIJAKAN MUTU</b></p><p>Manajemen bertekad untuk bekerja tepat waktu dengan mutu yang baik untuk mencapai kepuasan pelanggan dan berusaha untuk meningkatkan inovasi produk serta sumber daya manusia secara maksimal.</p><p><br></p>', '/uploads/moto/1610025047IZ0wIurWQx1uLxVy.jpeg', '2021-01-07 00:00:00', '2021-01-08 06:51:45');
COMMIT;

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `karyawan_id` bigint NOT NULL AUTO_INCREMENT,
  `karyawan_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `karyawan_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `karyawan_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`karyawan_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
BEGIN;
INSERT INTO `karyawan` VALUES (1, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (2, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (3, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (4, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (5, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (6, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for kontak
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak` (
  `kontak_id` bigint NOT NULL AUTO_INCREMENT,
  `kontak_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `kontak_telpon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kontak_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kontak_jam_kerja` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kontak_peta` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `kontak_tentang` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `kontak_gambar` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kontak_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of kontak
-- ----------------------------
BEGIN;
INSERT INTO `kontak` VALUES (1, 'Jalan Bypass Lombok International Airport KM 9', '(0370) 6503612', 'admin@miproperti.com', '8:00 a.m - 9:00 p.m', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7887.1363704263!2d116.23442599999998!3d-8.732488000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4700eb9e4cfb3a73!2sPerumahan%20Bypass%20Regency!5e0!3m2!1sen!2sid!4v1610026387930!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Pelayanan jasa konstruksi terbaik hanya dapat dicapai melalui komitmen PT. Mahese Indo Persada, Dukungan dengan seluruh mitra perusahaan, dan penerapan manajemen teknologi efektif-efisien.', '/uploads/kontak/16100262804fd3YyT5PuPXTaj2.jpeg', NULL, '2021-01-07 13:33:20');
COMMIT;

-- ----------------------------
-- Table structure for moto
-- ----------------------------
DROP TABLE IF EXISTS `moto`;
CREATE TABLE `moto` (
  `moto_id` bigint NOT NULL AUTO_INCREMENT,
  `moto_judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `moto_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `moto_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`moto_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of moto
-- ----------------------------
BEGIN;
INSERT INTO `moto` VALUES (11, 'Kepuasan Pelanggan', 'Melalui produk yang bermutu, tepat waktu', '/uploads/rumah/1610024727HiGJ0yiV2mU5gRE5.svg', '2021-01-07 13:05:27', '2021-01-07 13:05:27');
INSERT INTO `moto` VALUES (12, 'Profesional', 'Bekerja secara profesional dan mampu berkompetisi', '/uploads/rumah/1610024727YDxKH5lursU7kljO.svg', '2021-01-07 13:05:27', '2021-01-07 13:05:27');
INSERT INTO `moto` VALUES (13, 'Harga Bersaing', 'Harga produk yang mampu bersaing', '/uploads/rumah/1610024884aUyGi6LQ8uZTd63e.svg', '2021-01-07 13:08:04', '2021-01-07 13:08:04');
INSERT INTO `moto` VALUES (14, 'Kesuksesan Bersama', 'Memberikan nilai tambah bagi pelanggan, mitra, karyawan, serta masyarakat demi kesuksesan bersama', '/uploads/rumah/16100248841Do7BbUjNyktMolc.svg', '2021-01-07 13:08:04', '2021-01-07 13:08:04');
COMMIT;

-- ----------------------------
-- Table structure for partner
-- ----------------------------
DROP TABLE IF EXISTS `partner`;
CREATE TABLE `partner` (
  `partner_id` bigint NOT NULL AUTO_INCREMENT,
  `partner_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `partner_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `partner_link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`partner_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of partner
-- ----------------------------
BEGIN;
INSERT INTO `partner` VALUES (1, '/uploads/partner/mandiri.svg', 'Bank Mandiri', 'https://bankmandiri.co.id/', NULL, NULL);
INSERT INTO `partner` VALUES (2, '/uploads/partner/pdam.png', 'PT Air Minum Giri Menang', 'https://ptamgirimenang.com/', NULL, NULL);
INSERT INTO `partner` VALUES (3, '/uploads/partner/pln.png', 'PLN', 'https://portal.pln.co.id/', NULL, NULL);
INSERT INTO `partner` VALUES (5, '/uploads/partner/1610025242JWA1o8zj1JBGPzeR.png', 'BNI Syariah', 'http://www.bnisyariah.co.id/', '2021-01-07 13:14:02', '2021-01-07 13:14:02');
COMMIT;

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `pengguna_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengguna_sandi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengguna_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
BEGIN;
INSERT INTO `pengguna` VALUES ('administrator', '$2y$10$hk/ipT8k1UslIb5Gii9j7.bjqFUIIw1YygHU.3ACc528mFmRHkfLa', 'Administrator', NULL, NULL, '2020-11-04 19:39:23');
COMMIT;

-- ----------------------------
-- Table structure for perumahan
-- ----------------------------
DROP TABLE IF EXISTS `perumahan`;
CREATE TABLE `perumahan` (
  `perumahan_id` bigint NOT NULL AUTO_INCREMENT,
  `perumahan_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `perumahan_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `perumahan_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `perumahan_denah` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`perumahan_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of perumahan
-- ----------------------------
BEGIN;
INSERT INTO `perumahan` VALUES (1, 'Bypass Regency', 'asdf', 'asdf', '/uploads/perumahan/bypassregencymp.jpg', NULL, '2021-01-07 07:14:34');
COMMIT;

-- ----------------------------
-- Table structure for perumahan_gambar
-- ----------------------------
DROP TABLE IF EXISTS `perumahan_gambar`;
CREATE TABLE `perumahan_gambar` (
  `perumahan_id` bigint NOT NULL,
  `perumahan_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  KEY `perumahan_gambar_ibfk_1` (`perumahan_id`) USING BTREE,
  CONSTRAINT `perumahan_gambar_ibfk_1` FOREIGN KEY (`perumahan_id`) REFERENCES `perumahan` (`perumahan_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of perumahan_gambar
-- ----------------------------
BEGIN;
INSERT INTO `perumahan_gambar` VALUES (1, '/uploads/perumahan/bypassregency.jpeg');
INSERT INTO `perumahan_gambar` VALUES (1, '/uploads/perumahan/1610004044pGC1KdsDjFs5Y2TT.jpeg');
COMMIT;

-- ----------------------------
-- Table structure for proyek
-- ----------------------------
DROP TABLE IF EXISTS `proyek`;
CREATE TABLE `proyek` (
  `proyek_id` bigint NOT NULL,
  `proyek_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `proyek_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `proyek_deksripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updatet_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`proyek_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for rumah
-- ----------------------------
DROP TABLE IF EXISTS `rumah`;
CREATE TABLE `rumah` (
  `rumah_id` bigint NOT NULL AUTO_INCREMENT,
  `perumahan_id` bigint DEFAULT NULL,
  `rumah_tipe` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rumah_harga` decimal(15,2) DEFAULT NULL,
  `rumah_deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `rumah_sketsa` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `rumah_kamar` int DEFAULT NULL,
  `rumah_kamar_mandi` int DEFAULT NULL,
  `rumah_ruang_keluarga` int DEFAULT NULL,
  `rumah_dapur` int DEFAULT NULL,
  `rumah_ruang_tamu` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`rumah_id`) USING BTREE,
  KEY `perumahan_id` (`perumahan_id`) USING BTREE,
  CONSTRAINT `rumah_ibfk_1` FOREIGN KEY (`perumahan_id`) REFERENCES `perumahan` (`perumahan_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of rumah
-- ----------------------------
BEGIN;
INSERT INTO `rumah` VALUES (1, 1, 'Tipe 63/117', 500000000.00, 'Rumah tipe 63/117 siap huni', '/uploads/rumah/63sket.jpeg', 2, 1, 1, 1, 1, NULL, NULL);
INSERT INTO `rumah` VALUES (2, 1, 'Tipe 136/100', 500000000.00, 'Rumah tipe 136/100 siap huni', '/uploads/rumah/136sket.jpeg', 2, 1, 1, 1, 1, NULL, NULL);
INSERT INTO `rumah` VALUES (3, 1, 'Tipe 45/110', 500000000.00, 'Rumah tipe 45/110 siap huni', '/uploads/rumah/45sket.jpeg', 2, 1, 1, 1, 1, NULL, NULL);
INSERT INTO `rumah` VALUES (4, 1, 'Tipe 30/100', 500000000.00, 'Rumah tipe 30/100 siap huni', '/uploads/rumah/30sket.jpeg', 2, 1, 1, 1, 1, NULL, NULL);
INSERT INTO `rumah` VALUES (15, 1, 'Ruko', 992000000.00, NULL, '/uploads/rumah/1610054564KmpIV0CxHPDMuKJ0.jpeg', 0, 0, 0, 0, 0, '2021-01-07 21:22:44', '2021-01-07 21:22:44');
COMMIT;

-- ----------------------------
-- Table structure for rumah_fasilitas
-- ----------------------------
DROP TABLE IF EXISTS `rumah_fasilitas`;
CREATE TABLE `rumah_fasilitas` (
  `rumah_id` bigint NOT NULL,
  `rumah_fasilitas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  KEY `rumah_id` (`rumah_id`) USING BTREE,
  CONSTRAINT `rumah_fasilitas_ibfk_1` FOREIGN KEY (`rumah_id`) REFERENCES `rumah` (`rumah_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of rumah_fasilitas
-- ----------------------------
BEGIN;
INSERT INTO `rumah_fasilitas` VALUES (1, 'PLN 900 Watt');
INSERT INTO `rumah_fasilitas` VALUES (2, 'PLN 900 Watt');
INSERT INTO `rumah_fasilitas` VALUES (3, 'PLN 900 Watt');
INSERT INTO `rumah_fasilitas` VALUES (4, 'PLN 900 Watt');
INSERT INTO `rumah_fasilitas` VALUES (1, 'PDAM');
INSERT INTO `rumah_fasilitas` VALUES (2, 'PDAM');
INSERT INTO `rumah_fasilitas` VALUES (3, 'PDAM');
INSERT INTO `rumah_fasilitas` VALUES (4, 'PDAM');
INSERT INTO `rumah_fasilitas` VALUES (1, 'Sumur Bor');
INSERT INTO `rumah_fasilitas` VALUES (2, 'Sumur Bor');
INSERT INTO `rumah_fasilitas` VALUES (3, 'Sumur Bor');
INSERT INTO `rumah_fasilitas` VALUES (4, 'Sumur Bor');
INSERT INTO `rumah_fasilitas` VALUES (1, 'Water Heater');
INSERT INTO `rumah_fasilitas` VALUES (2, 'Water Heater');
INSERT INTO `rumah_fasilitas` VALUES (3, 'Water Heater');
INSERT INTO `rumah_fasilitas` VALUES (4, 'Water Heater');
COMMIT;

-- ----------------------------
-- Table structure for rumah_gambar
-- ----------------------------
DROP TABLE IF EXISTS `rumah_gambar`;
CREATE TABLE `rumah_gambar` (
  `rumah_id` bigint NOT NULL,
  `rumah_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of rumah_gambar
-- ----------------------------
BEGIN;
INSERT INTO `rumah_gambar` VALUES (1, '/uploads/rumah/63.jpeg');
INSERT INTO `rumah_gambar` VALUES (2, '/uploads/rumah/136.jpeg');
INSERT INTO `rumah_gambar` VALUES (3, '/uploads/rumah/45.jpeg');
INSERT INTO `rumah_gambar` VALUES (4, '/uploads/rumah/30.jpeg');
INSERT INTO `rumah_gambar` VALUES (6, '/uploads/rumah/1609812723z4DAu2npzcLH4xZP.png');
INSERT INTO `rumah_gambar` VALUES (7, '/uploads/rumah/1609812755Ffk9NOAs0syNyiLD.png');
INSERT INTO `rumah_gambar` VALUES (8, '/uploads/rumah/1609812774P4dCHs6HJmcpJhNw.png');
INSERT INTO `rumah_gambar` VALUES (8, '/uploads/rumah/1609812774OKewvtDiH61CZeO0.jpg');
INSERT INTO `rumah_gambar` VALUES (9, '/uploads/rumah/1610002419xLym7TV6ZRrdgG95.jpeg');
INSERT INTO `rumah_gambar` VALUES (15, '/uploads/rumah/1610054564296gFuumFa7k3iCr.jpeg');
COMMIT;

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `service_id` bigint NOT NULL AUTO_INCREMENT,
  `service_judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `service_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `service_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`service_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of service
-- ----------------------------
BEGIN;
INSERT INTO `service` VALUES (1, 'Buy Property', 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.', '/uploads/service/1.png', NULL, NULL);
INSERT INTO `service` VALUES (2, 'Rent Property', 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.', '/uploads/service/2.png', NULL, NULL);
INSERT INTO `service` VALUES (3, 'Real Estate Kit', 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.', '/uploads/service/3.png', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `slider_id` bigint NOT NULL AUTO_INCREMENT,
  `slider_judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `slider_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `slider_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `slider_link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slider_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of slider
-- ----------------------------
BEGIN;
INSERT INTO `slider` VALUES (1, 'Selong One 80', '/uploads/slider/p1.jpg', 'Villas, Clubhouse, Suites', '#', NULL, NULL);
INSERT INTO `slider` VALUES (2, 'Origin Lombok', '/uploads/slider/p2.jpg', 'Feast, Tanjung Aan Beach, Kuta Shuttle, Tour Desk', '#', NULL, NULL);
INSERT INTO `slider` VALUES (3, 'Vila Bliss Lombok', '/uploads/slider/p3.jpg', NULL, '#', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for tentang_kami
-- ----------------------------
DROP TABLE IF EXISTS `tentang_kami`;
CREATE TABLE `tentang_kami` (
  `tentang_kami_id` int NOT NULL AUTO_INCREMENT,
  `tentang_kami_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `tentang_kami_text` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tentang_kami_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tentang_kami
-- ----------------------------
BEGIN;
INSERT INTO `tentang_kami` VALUES (1, NULL, 'test', NULL, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
