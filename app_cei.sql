/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3306
 Source Schema         : app_cei

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 23/09/2018 15:09:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (3, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (4, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (5, '2018_09_01_020901_create_verify_users_table', 1);

-- ----------------------------
-- Table structure for mst_blanko
-- ----------------------------
DROP TABLE IF EXISTS `mst_blanko`;
CREATE TABLE `mst_blanko`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_blanko` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jenis_blanko` int(1) NULL DEFAULT NULL,
  `blanko_depan` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `blanko_belakang` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `active` int(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `active`(`active`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mst_blanko
-- ----------------------------
INSERT INTO `mst_blanko` VALUES (1, 'REC', 'blanko_1', NULL, NULL, NULL, 1);
INSERT INTO `mst_blanko` VALUES (2, 'REC', 'blanko_2', NULL, NULL, NULL, 1);

-- ----------------------------
-- Table structure for mst_jns_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `mst_jns_kegiatan`;
CREATE TABLE `mst_jns_kegiatan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jns_kegiatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` int(1) NULL DEFAULT 1,
  `group` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `active`(`active`) USING BTREE,
  INDEX `jns_kegiatan`(`jns_kegiatan`) USING BTREE,
  INDEX `group`(`group`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mst_jns_kegiatan
-- ----------------------------
INSERT INTO `mst_jns_kegiatan` VALUES (1, 'Seminar', 1, 1);
INSERT INTO `mst_jns_kegiatan` VALUES (2, 'Worskhop', 1, 1);
INSERT INTO `mst_jns_kegiatan` VALUES (3, 'Tri Darma', 1, 1);
INSERT INTO `mst_jns_kegiatan` VALUES (4, 'Piagam', 1, 1);
INSERT INTO `mst_jns_kegiatan` VALUES (5, 'Toefl', 1, 2);

-- ----------------------------
-- Table structure for mst_judul_acara
-- ----------------------------
DROP TABLE IF EXISTS `mst_judul_acara`;
CREATE TABLE `mst_judul_acara`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_acara` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` int(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `active`(`active`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mst_judul_acara
-- ----------------------------
INSERT INTO `mst_judul_acara` VALUES (1, 'Analysis Of Data With Graphics (ADWG)', 0);
INSERT INTO `mst_judul_acara` VALUES (2, 'Assistant Lab iLearning Raharja Enrichment Centre (iREC)', 1);
INSERT INTO `mst_judul_acara` VALUES (3, 'Assistant Lab Raharja Enrichment Centre (REC)', 1);
INSERT INTO `mst_judul_acara` VALUES (4, 'Auto Electronic Mailing System (AEMS)', 1);
INSERT INTO `mst_judul_acara` VALUES (5, 'Document Object Model (DOM)', 1);
INSERT INTO `mst_judul_acara` VALUES (6, 'iBooks Modification (iBM)', 1);
INSERT INTO `mst_judul_acara` VALUES (7, 'Raharja Certified English Proficiency', 1);
INSERT INTO `mst_judul_acara` VALUES (8, 'Unified Modeling Language For Business Intelligence (UML-BI)', 1);
INSERT INTO `mst_judul_acara` VALUES (9, '10 Pilar iLearning', 1);
INSERT INTO `mst_judul_acara` VALUES (10, 'Advanced Script Language (ASL)', 1);
INSERT INTO `mst_judul_acara` VALUES (11, 'Akhirnya Aku Tau (AHA)', 1);
INSERT INTO `mst_judul_acara` VALUES (12, 'Analysis Of Data With Graphics (ADWG)', 1);
INSERT INTO `mst_judul_acara` VALUES (13, 'Assistant iLearning Laboratory', 1);
INSERT INTO `mst_judul_acara` VALUES (14, 'Assistant iLearning Class', 1);
INSERT INTO `mst_judul_acara` VALUES (15, 'Asisten Dosen', 1);
INSERT INTO `mst_judul_acara` VALUES (16, 'Bahasa Inggris I', 1);
INSERT INTO `mst_judul_acara` VALUES (17, 'Bahasa Inggris II', 1);
INSERT INTO `mst_judul_acara` VALUES (18, 'Build Web With Framework (BW2F)', 1);
INSERT INTO `mst_judul_acara` VALUES (19, 'CAP', 1);
INSERT INTO `mst_judul_acara` VALUES (20, 'Cascading Style Sheet (CSS)', 1);
INSERT INTO `mst_judul_acara` VALUES (21, 'Document Object Model (DOM)', 0);
INSERT INTO `mst_judul_acara` VALUES (22, 'anjing', 0);
INSERT INTO `mst_judul_acara` VALUES (23, 'tes', 0);
INSERT INTO `mst_judul_acara` VALUES (24, 'tes', 0);
INSERT INTO `mst_judul_acara` VALUES (25, 'tes2', 0);
INSERT INTO `mst_judul_acara` VALUES (26, 'tessssss', 0);
INSERT INTO `mst_judul_acara` VALUES (27, 'tesssssss', 0);
INSERT INTO `mst_judul_acara` VALUES (28, 'tesssss', 0);
INSERT INTO `mst_judul_acara` VALUES (29, 'tes', 0);

-- ----------------------------
-- Table structure for mst_menu
-- ----------------------------
DROP TABLE IF EXISTS `mst_menu`;
CREATE TABLE `mst_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `id_mst_role` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_mst_role`(`id_mst_role`) USING BTREE,
  CONSTRAINT `mst_menu_ibfk_1` FOREIGN KEY (`id_mst_role`) REFERENCES `mst_role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mst_menu
-- ----------------------------
INSERT INTO `mst_menu` VALUES (1, 'acara', 'acara', 0, NULL, 0, 1);
INSERT INTO `mst_menu` VALUES (2, 'peserta', 'peserta', 0, NULL, 0, 1);
INSERT INTO `mst_menu` VALUES (3, 'gradebook', 'gradebook', 0, NULL, 0, 1);
INSERT INTO `mst_menu` VALUES (4, 'sertifikat', 'sertifikat', 0, NULL, 0, 1);

-- ----------------------------
-- Table structure for mst_role
-- ----------------------------
DROP TABLE IF EXISTS `mst_role`;
CREATE TABLE `mst_role`  (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mst_role
-- ----------------------------
INSERT INTO `mst_role` VALUES (1, 'admin');
INSERT INTO `mst_role` VALUES (2, 'guest');

-- ----------------------------
-- Table structure for mst_role_menu
-- ----------------------------
DROP TABLE IF EXISTS `mst_role_menu`;
CREATE TABLE `mst_role_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mst_role` int(11) NULL DEFAULT NULL,
  `id_mst_menu` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_mst_role`(`id_mst_role`) USING BTREE,
  INDEX `id_mst_menu`(`id_mst_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mst_role_menu
-- ----------------------------
INSERT INTO `mst_role_menu` VALUES (1, 1, 1);
INSERT INTO `mst_role_menu` VALUES (2, 1, 2);
INSERT INTO `mst_role_menu` VALUES (3, 1, 3);
INSERT INTO `mst_role_menu` VALUES (4, 1, 4);
INSERT INTO `mst_role_menu` VALUES (5, 2, 1);
INSERT INTO `mst_role_menu` VALUES (6, 2, 2);

-- ----------------------------
-- Table structure for mst_semester
-- ----------------------------
DROP TABLE IF EXISTS `mst_semester`;
CREATE TABLE `mst_semester`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mst_semester
-- ----------------------------
INSERT INTO `mst_semester` VALUES (1, 'Ganjil');
INSERT INTO `mst_semester` VALUES (2, 'Genap');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tr_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `tr_kegiatan`;
CREATE TABLE `tr_kegiatan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mst_judul_acara` int(11) NULL DEFAULT NULL,
  `id_mst_semester` int(11) NULL DEFAULT NULL,
  `id_mst_jns_kegiatan` int(11) NULL DEFAULT NULL,
  `id_mst_blanko` int(10) NULL DEFAULT NULL,
  `alias` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `moderator` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_ajaran` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `jamMulai` time(0) NULL DEFAULT NULL,
  `jamAkhir` time(0) NULL DEFAULT NULL,
  `lokasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` int(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_mst_judul_acara`(`id_mst_judul_acara`) USING BTREE,
  INDEX `id_mst_semester`(`id_mst_semester`) USING BTREE,
  INDEX `id_mst_jns_kegiatan`(`id_mst_jns_kegiatan`) USING BTREE,
  INDEX `tahun_ajaran`(`tahun_ajaran`) USING BTREE,
  INDEX `tanggal`(`tanggal`) USING BTREE,
  INDEX `jam`(`jamMulai`) USING BTREE,
  INDEX `lokasi`(`lokasi`) USING BTREE,
  INDEX `active`(`active`) USING BTREE,
  INDEX `id_mst_blanko`(`id_mst_blanko`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tr_kegiatan
-- ----------------------------
INSERT INTO `tr_kegiatan` VALUES (1, 2, 1, 1, 1, 'iREC1', 'Untung Rahardja, Ir.,M.T.I.,MM', '2017/2018', '2017-12-16', '12:23:00', '16:30:00', 'GMT RAHARJA', 1);
INSERT INTO `tr_kegiatan` VALUES (2, 5, 1, 1, 1, 'DOM1', 'Untung Rahardja, Ir.,M.T.I.,MM', '2017/2018', '2017-12-19', '12:14:00', '16:30:00', 'GMT RAHARJA', 1);
INSERT INTO `tr_kegiatan` VALUES (3, 6, 1, 2, 2, 'IBM1', 'Muhamad Yusup, M.Kom', '2017/2018', '2017-12-19', '14:11:00', '18:23:00', 'arrer', 1);
INSERT INTO `tr_kegiatan` VALUES (4, 2, 1, 3, 2, 'DOM15', 'Untung Rahardja, Ir.,M.T.I.,MM', '2017/2018', '2017-12-19', '14:11:00', '18:23:00', 'REC', 1);
INSERT INTO `tr_kegiatan` VALUES (5, 2, 1, 1, 2, 'adasd', 'Untung Rahardja, Ir.,M.T.I.,MM', '2017/2018', '2017-12-21', '14:11:00', '18:23:00', 'asdas', 1);

-- ----------------------------
-- Table structure for tr_nourut
-- ----------------------------
DROP TABLE IF EXISTS `tr_nourut`;
CREATE TABLE `tr_nourut`  (
  `id_peserta` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_urut` int(4) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `dateCreated` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_peserta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tr_nourut
-- ----------------------------
INSERT INTO `tr_nourut` VALUES ('CEI1008180001', 0459, '2018-08-10');
INSERT INTO `tr_nourut` VALUES ('no_akhir', 0453, '2018-04-05');
INSERT INTO `tr_nourut` VALUES ('RHJ0401180001', 0454, '2018-04-22');
INSERT INTO `tr_nourut` VALUES ('RHJ1101180001', 0462, '2018-09-01');
INSERT INTO `tr_nourut` VALUES ('RHJ1407180001', 0457, '2018-07-14');
INSERT INTO `tr_nourut` VALUES ('RHJ1702180001', 0455, '2018-04-22');
INSERT INTO `tr_nourut` VALUES ('RHJ1702180002', 0460, '2018-08-10');
INSERT INTO `tr_nourut` VALUES ('RHJ1901180001', 0458, '2018-07-14');
INSERT INTO `tr_nourut` VALUES ('RHJ2112170001', 0456, '2018-04-22');
INSERT INTO `tr_nourut` VALUES ('RHJ2112170005', 0461, '2018-08-10');

-- ----------------------------
-- Table structure for tr_peserta
-- ----------------------------
DROP TABLE IF EXISTS `tr_peserta`;
CREATE TABLE `tr_peserta`  (
  `id` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_tr_kegiatan` int(11) NOT NULL,
  `nim` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `asal_kampus` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dateCreated` date NULL DEFAULT NULL,
  `nilai` int(3) NULL DEFAULT NULL,
  `status` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grade` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_tr_kegiatan`(`id_tr_kegiatan`) USING BTREE,
  INDEX `nim`(`nim`) USING BTREE,
  INDEX `nama`(`nama`) USING BTREE,
  INDEX `dateCreated`(`dateCreated`) USING BTREE,
  INDEX `asal_kampus`(`asal_kampus`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tr_peserta
-- ----------------------------
INSERT INTO `tr_peserta` VALUES ('CEI1008180001', 1, '1333475775', 'Abdullah Fajar', 'PERGURUAN TINGGI RAHARJA', '2018-08-10', 90, 'L', 'A+', 1);
INSERT INTO `tr_peserta` VALUES ('CEI1208180001', 2, NULL, 'TES', 'TES', '2018-08-12', 0, NULL, NULL, 0);
INSERT INTO `tr_peserta` VALUES ('RHJ0101180001', 2, '1233372674', 'Cahyo Anggoro Seto', 'PERGURUAN TINGGI RAHARJA', '2018-01-01', 90, 'L', 'A', 0);
INSERT INTO `tr_peserta` VALUES ('RHJ0101180002', 2, NULL, 'TES', 'UMT', '2018-01-01', 70, 'TL', 'C', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ0401180001', 1, '1533488647', 'Danang Suprayogi', 'PERGURUAN TINGGI RAHARJA', '2018-01-04', 89, 'L', 'A+', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ1101180001', 1, NULL, 'TES', 'UIN', '2018-01-11', 89, 'L', 'A+', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ1407180001', 2, '1233372674', 'Cahyo Anggoro Seto', 'PERGURUAN TINGGI RAHARJA', '2018-07-14', 70, 'L', 'B', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ1702180001', 1, '1512489536', 'Much Alvin Aldiya', 'PERGURUAN TINGGI RAHARJA', '2018-02-17', 90, 'L', 'A+', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ1702180002', 4, '1512489536', 'Much Alvin Aldiya', NULL, '2018-02-17', 67, 'L', 'B-', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ1901180001', 2, '1512489536', 'Much Alvin Aldiya', 'PERGURUAN TINGGI RAHARJA', '2018-01-19', 67, 'L', 'B-', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ2112170001', 1, '1233372674', 'Cahyo Anggoro Seto', 'PERGURUAN TINGGI RAHARJA', '2017-12-21', 99, 'L', 'A', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ2112170002', 1, NULL, 'A', 'A', '2017-12-21', 89, 'L', 'B', 0);
INSERT INTO `tr_peserta` VALUES ('RHJ2112170003', 3, NULL, 'naim', 'adads', '2017-12-21', 0, NULL, NULL, 0);
INSERT INTO `tr_peserta` VALUES ('RHJ2112170004', 4, '1233372674', 'Cahyo Anggoro Seto', 'PERGURUAN TINGGI RAHARJA', '2017-12-21', 56, 'TL', 'D', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ2112170005', 4, NULL, 'NAIMUN', 'UNINDRA', '2017-12-21', 78, 'L', 'B', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ2112170006', 4, NULL, 'RHINO', 'SALEMBA', '2017-12-21', 10, 'TL', 'D', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ2412170001', 2, '1533489867', 'Adam Faturahman', 'PERGURUAN TINGGI RAHARJA', '2017-12-24', 73, 'TL', 'C', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ2412170002', 4, '1512483529', 'Nuke Puji Lestari Santoso', 'PERGURUAN TINGGI RAHARJA', '2017-12-24', 45, 'TL', 'D', 1);
INSERT INTO `tr_peserta` VALUES ('RHJ2412170003', 3, '1512483528', 'Alfiah Khoirunisa', 'PERGURUAN TINGGI RAHARJA', '2017-12-24', 100, 'L', 'A', 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `id_mst_role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'cahyo', 'cahyo@raharja.info', '', 1, '1', 'hsK6akoivDmo32xPYlqPAKC23xZRoQH0dfOr1Sshl7hIeh53WuAwOp6WFPtb', '2018-09-01 08:26:24', '2018-09-01 09:07:27');

-- ----------------------------
-- Table structure for verify_users
-- ----------------------------
DROP TABLE IF EXISTS `verify_users`;
CREATE TABLE `verify_users`  (
  `user_id` int(11) NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of verify_users
-- ----------------------------
INSERT INTO `verify_users` VALUES (1, 'bg2CN9ZRwqSXOeUJzqLySpHosQSe7m9MXwg6ls0z', '2018-09-01 08:26:24', '2018-09-01 08:26:24');

SET FOREIGN_KEY_CHECKS = 1;
