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

 Date: 13/12/2020 21:45:08
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
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
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
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`gallery_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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
-- Table structure for partner
-- ----------------------------
DROP TABLE IF EXISTS `partner`;
CREATE TABLE `partner`  (
  `partner_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `partner_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `partner_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `partner_link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`partner_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of partner
-- ----------------------------
INSERT INTO `partner` VALUES (1, 'partner/originlombok.png', 'Origin Hotel Lombok', 'https://www.originlombok.com/', NULL, NULL);
INSERT INTO `partner` VALUES (2, 'partner/villabliss.png', 'Vlia Bliss Lombok', 'https://www.villablisslombok.com/', NULL, NULL);
INSERT INTO `partner` VALUES (3, 'partner/selong180.png', 'Selong One 80', 'https://www.selong180.com/', NULL, NULL);

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna`  (
  `pengguna_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengguna_sandi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengguna_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
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
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`perumahan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perumahan
-- ----------------------------
INSERT INTO `perumahan` VALUES (1, 'Bypass Regency', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for proyek
-- ----------------------------
DROP TABLE IF EXISTS `proyek`;
CREATE TABLE `proyek`  (
  `proyek_id` bigint(20) NOT NULL,
  `proyek_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `proyek_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `proyek_deksripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updatet_at` timestamp(0) NULL DEFAULT NULL,
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
  `rumah_spesifikasi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_fasilitas` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_gambar` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_sketsa` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rumah_video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`rumah_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`slider_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, 'Selong One 80', 'slider/p1.jpg', 'Villas, Clubhouse, Suites', '#', NULL, NULL);
INSERT INTO `slider` VALUES (2, 'Origin Lombok', 'slider/p2.jpg', 'Feast, Tanjung Aan Beach, Kuta Shuttle, Tour Desk', '#', NULL, NULL);
INSERT INTO `slider` VALUES (3, 'Vila Bliss Lombok', 'slider/p3.jpg', NULL, '#', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
