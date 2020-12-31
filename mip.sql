/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : mip

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 31/12/2020 23:25:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bangunan_lain
-- ----------------------------
DROP TABLE IF EXISTS `bangunan_lain`;
CREATE TABLE `bangunan_lain`  (
  `bangunan_lain_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `bangunan_lain_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bangunan_lain_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `bangunan_lain_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `bangunan_lain_gambar` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bangunan_lain_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bangunan_lain
-- ----------------------------
INSERT INTO `bangunan_lain` VALUES (1, 'Origin Hotel Kuta Lombok', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `bangunan_lain` VALUES (2, 'Ananda Villa Kuta lombok / Bliz Villa', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `bangunan_lain` VALUES (3, 'Selong180 jabon selong belanak', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery`  (
  `gallery_id` bigint(20) NOT NULL,
  `gallery_judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `gallery_file` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`gallery_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `karyawan_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `karyawan_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `karyawan_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `karyawan_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`karyawan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES (1, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (2, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (3, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (4, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (5, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);
INSERT INTO `karyawan` VALUES (6, 'Lala Komalasari', '081916016757 / 081236079575', 'karyawan/lala.jpg', NULL, NULL);

-- ----------------------------
-- Table structure for kontak
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak`  (
  `kontak_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kontak_longitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kontak_latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kontak_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kontak_telpon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kontak_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kontak_jam_kerja` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kontak
-- ----------------------------
INSERT INTO `kontak` VALUES ('/kontak/kontak.png', NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for moto
-- ----------------------------
DROP TABLE IF EXISTS `moto`;
CREATE TABLE `moto`  (
  `moto_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `moto_judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `moto_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `moto_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`moto_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of moto
-- ----------------------------
INSERT INTO `moto` VALUES (1, 'Rumah Impian', 'Kami membangun rumah sesuai dengan standar terbaik yang menjadi impian setiap orang', 'moto/rumahimpian.svg', NULL, NULL);
INSERT INTO `moto` VALUES (2, 'Terpercaya', 'Kepercayaan custommer tetap kami jaga', 'moto/terpercaya.svg', NULL, NULL);
INSERT INTO `moto` VALUES (3, 'Harga Bersaing', 'Untuk harga, bisa anda bandingkan dengan yg lain', 'moto/terjangkau.svg', NULL, NULL);
INSERT INTO `moto` VALUES (4, 'Support', 'Layanan maximal adalah moto utama kami', 'moto/support.svg', NULL, NULL);

-- ----------------------------
-- Table structure for partner
-- ----------------------------
DROP TABLE IF EXISTS `partner`;
CREATE TABLE `partner`  (
  `partner_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `partner_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `partner_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `partner_link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`partner_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of partner
-- ----------------------------
INSERT INTO `partner` VALUES (1, 'partner/mandiri.svg', 'Bank Mandiri', 'https://bankmandiri.co.id/', NULL, NULL);
INSERT INTO `partner` VALUES (2, 'partner/pdam.png', 'PT Air Minum Giri Menang', 'https://ptamgirimenang.com/', NULL, NULL);
INSERT INTO `partner` VALUES (3, 'partner/pln.png', 'PLN', 'https://portal.pln.co.id/', NULL, NULL);

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna`  (
  `pengguna_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengguna_sandi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengguna_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES ('administrator', '$2y$10$hk/ipT8k1UslIb5Gii9j7.bjqFUIIw1YygHU.3ACc528mFmRHkfLa', 'Administrator', NULL, NULL, '2020-11-04 19:39:23');

-- ----------------------------
-- Table structure for perumahan
-- ----------------------------
DROP TABLE IF EXISTS `perumahan`;
CREATE TABLE `perumahan`  (
  `perumahan_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `perumahan_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perumahan_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `perumahan_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `perumahan_gambar` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`perumahan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perumahan
-- ----------------------------
INSERT INTO `perumahan` VALUES (1, 'Bypass Regency', NULL, NULL, 'perumahan/bypassregency.jpeg', NULL, NULL);

-- ----------------------------
-- Table structure for perumahan_gambar
-- ----------------------------
DROP TABLE IF EXISTS `perumahan_gambar`;
CREATE TABLE `perumahan_gambar`  (
  `perumahan_id` bigint(20) NOT NULL,
  `perumahan_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`perumahan_id`) USING BTREE,
  CONSTRAINT `perumahan_gambar_ibfk_1` FOREIGN KEY (`perumahan_id`) REFERENCES `perumahan` (`perumahan_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for proyek
-- ----------------------------
DROP TABLE IF EXISTS `proyek`;
CREATE TABLE `proyek`  (
  `proyek_id` bigint(20) NOT NULL,
  `proyek_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `proyek_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `proyek_deksripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updatet_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`proyek_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for rumah
-- ----------------------------
DROP TABLE IF EXISTS `rumah`;
CREATE TABLE `rumah`  (
  `rumah_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `perumahan_id` bigint(20) NULL DEFAULT NULL,
  `rumah_tipe` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rumah_harga` decimal(15, 2) NULL DEFAULT NULL,
  `rumah_spesifikasi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_sketsa` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_kamar` int(11) NULL DEFAULT NULL,
  `rumah_kamar_mandi` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`rumah_id`) USING BTREE,
  INDEX `perumahan_id`(`perumahan_id`) USING BTREE,
  CONSTRAINT `rumah_ibfk_1` FOREIGN KEY (`perumahan_id`) REFERENCES `perumahan` (`perumahan_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rumah
-- ----------------------------
INSERT INTO `rumah` VALUES (1, 1, 'Tipe 63/117', 500000000.00, NULL, 'Rumah tipe 63/117 siap huni', NULL, NULL, 2, 1, NULL, NULL);
INSERT INTO `rumah` VALUES (2, 1, 'Tipe 136/100', 500000000.00, NULL, 'Rumah tipe 136/100 siap huni', NULL, NULL, 2, 1, NULL, NULL);
INSERT INTO `rumah` VALUES (3, 1, 'Tipe 45/110', 500000000.00, NULL, 'Rumah tipe 45/110 siap huni', NULL, NULL, 2, 1, NULL, NULL);
INSERT INTO `rumah` VALUES (4, 1, 'Tipe 30/100', 500000000.00, NULL, 'Rumah tipe 30/100 siap huni', NULL, NULL, 2, 1, NULL, NULL);

-- ----------------------------
-- Table structure for rumah_fasilitas
-- ----------------------------
DROP TABLE IF EXISTS `rumah_fasilitas`;
CREATE TABLE `rumah_fasilitas`  (
  `rumah_id` bigint(20) NOT NULL,
  `rumah_fasilitas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`rumah_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for rumah_gambar
-- ----------------------------
DROP TABLE IF EXISTS `rumah_gambar`;
CREATE TABLE `rumah_gambar`  (
  `rumah_id` bigint(20) NOT NULL,
  `rumah_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`rumah_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rumah_gambar
-- ----------------------------
INSERT INTO `rumah_gambar` VALUES (1, 'rumah/63.jpeg');
INSERT INTO `rumah_gambar` VALUES (2, 'rumah/136.jpeg');
INSERT INTO `rumah_gambar` VALUES (3, 'rumah/45.jpeg');
INSERT INTO `rumah_gambar` VALUES (4, 'rumah/30.jpeg');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `slider_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `slider_judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `slider_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `slider_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `slider_link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slider_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, 'Selong One 80', 'slider/p1.jpg', 'Villas, Clubhouse, Suites', '#', NULL, NULL);
INSERT INTO `slider` VALUES (2, 'Origin Lombok', 'slider/p2.jpg', 'Feast, Tanjung Aan Beach, Kuta Shuttle, Tour Desk', '#', NULL, NULL);
INSERT INTO `slider` VALUES (3, 'Vila Bliss Lombok', 'slider/p3.jpg', NULL, '#', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
