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

 Date: 08/01/2021 15:12:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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

SET FOREIGN_KEY_CHECKS = 1;
