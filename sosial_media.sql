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

 Date: 08/01/2021 17:22:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sosial_media
-- ----------------------------
DROP TABLE IF EXISTS `sosial_media`;
CREATE TABLE `sosial_media` (
  `sosial_media_id` bigint NOT NULL AUTO_INCREMENT,
  `sosial_media_nama` varchar(255) DEFAULT NULL,
  `sosial_media_link` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sosial_media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of sosial_media
-- ----------------------------
BEGIN;
INSERT INTO `sosial_media` VALUES (1, 'facebook', 'https://web.facebook.com/Bypass-Regency-530628307362242/', NULL, NULL);
INSERT INTO `sosial_media` VALUES (2, 'instagram', 'https://www.instagram.com/bypass_regencyreal/', NULL, NULL);
INSERT INTO `sosial_media` VALUES (3, 'whatsapp', 'https://wa.link/qh3jd7', NULL, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
