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

 Date: 09/01/2021 18:42:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for booking
-- ----------------------------
DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `booking_id` bigint NOT NULL AUTO_INCREMENT,
  `booking_x` int DEFAULT NULL,
  `booking_y` int DEFAULT NULL,
  `booking_pelanggan` varchar(255) DEFAULT NULL,
  `booking_blok` varchar(255) DEFAULT NULL,
  `booking_keterangan` text,
  `perumahan_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `perumahan_id` (`perumahan_id`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`perumahan_id`) REFERENCES `perumahan` (`perumahan_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of booking
-- ----------------------------
BEGIN;
INSERT INTO `booking` VALUES (4, 1030, 430, 'Andi Fajar Nugraha', 'H7 tipe 30/141', NULL, 1, '2021-01-09 09:44:28', '2021-01-09 09:44:28');
INSERT INTO `booking` VALUES (6, 1115, 482, 'es', 'tes', NULL, 1, '2021-01-09 10:17:30', '2021-01-09 10:17:30');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
