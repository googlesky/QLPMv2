/*
Navicat MySQL Data Transfer

Source Server         : Ampps
Source Server Version : 50622
Source Host           : 127.0.0.1:3306
Source Database       : QLPMv2

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2014-12-31 02:37:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for BAOCAOTINHTRANG
-- ----------------------------
DROP TABLE IF EXISTS `BAOCAOTINHTRANG`;
CREATE TABLE `BAOCAOTINHTRANG` (
  `MA_MT` int(11) NOT NULL,
  `MA_ND` int(11) NOT NULL,
  `THOIGIAN_HONG` datetime NOT NULL,
  `BIEUHIEN` text COLLATE utf8_unicode_ci NOT NULL,
  `GHICHU_DIEUHANH` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_MT`,`MA_ND`),
  KEY `FK_BAOCAOTINHTRANG2` (`MA_ND`),
  CONSTRAINT `FK_BAOCAOTINHTRANG` FOREIGN KEY (`MA_MT`) REFERENCES `MAYTINH` (`MA_MT`) ON UPDATE CASCADE,
  CONSTRAINT `FK_BAOCAOTINHTRANG2` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of BAOCAOTINHTRANG
-- ----------------------------

-- ----------------------------
-- Table structure for CAIDAT
-- ----------------------------
DROP TABLE IF EXISTS `CAIDAT`;
CREATE TABLE `CAIDAT` (
  `MA_MT` int(11) NOT NULL,
  `MA_PM` int(11) NOT NULL,
  PRIMARY KEY (`MA_MT`,`MA_PM`),
  KEY `FK_CAIDAT2` (`MA_PM`),
  CONSTRAINT `FK_CAIDAT` FOREIGN KEY (`MA_MT`) REFERENCES `MAYTINH` (`MA_MT`) ON UPDATE CASCADE,
  CONSTRAINT `FK_CAIDAT2` FOREIGN KEY (`MA_PM`) REFERENCES `PHANMEM` (`MA_PM`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of CAIDAT
-- ----------------------------

-- ----------------------------
-- Table structure for CHUCVU
-- ----------------------------
DROP TABLE IF EXISTS `CHUCVU`;
CREATE TABLE `CHUCVU` (
  `MA_CVU` int(11) NOT NULL,
  `TEN_CVU` char(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_CVU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of CHUCVU
-- ----------------------------
INSERT INTO `CHUCVU` VALUES ('1', 'Trưởng Khoa');
INSERT INTO `CHUCVU` VALUES ('2', 'Phó Khoa');
INSERT INTO `CHUCVU` VALUES ('3', 'Thư Ký Khoa');
INSERT INTO `CHUCVU` VALUES ('4', 'Kỹ Thuật Viên');
INSERT INTO `CHUCVU` VALUES ('5', 'Giảng Viên');

-- ----------------------------
-- Table structure for CHUYENMAY
-- ----------------------------
DROP TABLE IF EXISTS `CHUYENMAY`;
CREATE TABLE `CHUYENMAY` (
  `MA_ND` int(11) NOT NULL,
  `MA_MT` int(11) NOT NULL,
  `MA_PHONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_DVI` int(11) NOT NULL,
  `NGAYCHUYEN` datetime NOT NULL,
  `GHICHU_DIEUHANH` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_ND`,`MA_MT`,`MA_PHONG`,`MA_DVI`),
  KEY `FK_CHUYENMAY2` (`MA_MT`),
  KEY `FK_CHUYENMAY3` (`MA_PHONG`),
  KEY `FK_CHUYENMAY4` (`MA_DVI`),
  CONSTRAINT `FK_CHUYENMAY` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_CHUYENMAY2` FOREIGN KEY (`MA_MT`) REFERENCES `MAYTINH` (`MA_MT`) ON UPDATE CASCADE,
  CONSTRAINT `FK_CHUYENMAY3` FOREIGN KEY (`MA_PHONG`) REFERENCES `PHONG` (`MA_PHONG`) ON UPDATE CASCADE,
  CONSTRAINT `FK_CHUYENMAY4` FOREIGN KEY (`MA_DVI`) REFERENCES `DONVI` (`MA_DVI`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of CHUYENMAY
-- ----------------------------

-- ----------------------------
-- Table structure for CONGVIEC
-- ----------------------------
DROP TABLE IF EXISTS `CONGVIEC`;
CREATE TABLE `CONGVIEC` (
  `STT_CVIEC` int(11) NOT NULL,
  `NOIDUNG_CVIEC` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`STT_CVIEC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of CONGVIEC
-- ----------------------------
INSERT INTO `CONGVIEC` VALUES ('1', 'Dạy Học');
INSERT INTO `CONGVIEC` VALUES ('2', 'Sửa Máy');
INSERT INTO `CONGVIEC` VALUES ('3', 'Bảo Trì');
INSERT INTO `CONGVIEC` VALUES ('4', 'Thi');
INSERT INTO `CONGVIEC` VALUES ('5', 'Hợp Tác');

-- ----------------------------
-- Table structure for DANGNHAPBANG
-- ----------------------------
DROP TABLE IF EXISTS `DANGNHAPBANG`;
CREATE TABLE `DANGNHAPBANG` (
  `MA_ND` int(11) NOT NULL,
  `STT_IP` int(11) NOT NULL,
  PRIMARY KEY (`MA_ND`,`STT_IP`),
  KEY `FK_DANGNHAPBANG2` (`STT_IP`),
  CONSTRAINT `FK_DANGNHAPBANG` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_DANGNHAPBANG2` FOREIGN KEY (`STT_IP`) REFERENCES `IP` (`STT_IP`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of DANGNHAPBANG
-- ----------------------------

-- ----------------------------
-- Table structure for DIEUHANH
-- ----------------------------
DROP TABLE IF EXISTS `DIEUHANH`;
CREATE TABLE `DIEUHANH` (
  `MA_ND` int(11) NOT NULL,
  `MA_MT` int(11) NOT NULL,
  PRIMARY KEY (`MA_ND`,`MA_MT`),
  KEY `FK_DIEUHANH2` (`MA_MT`),
  CONSTRAINT `FK_DIEUHANH` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_DIEUHANH2` FOREIGN KEY (`MA_MT`) REFERENCES `MAYTINH` (`MA_MT`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of DIEUHANH
-- ----------------------------

-- ----------------------------
-- Table structure for DONVI
-- ----------------------------
DROP TABLE IF EXISTS `DONVI`;
CREATE TABLE `DONVI` (
  `MA_DVI` int(11) NOT NULL,
  `TEN_DVI` char(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_DVI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of DONVI
-- ----------------------------

-- ----------------------------
-- Table structure for IP
-- ----------------------------
DROP TABLE IF EXISTS `IP`;
CREATE TABLE `IP` (
  `STT_IP` int(11) NOT NULL,
  `IP` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `THOIGIAN_DN` datetime NOT NULL,
  PRIMARY KEY (`STT_IP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of IP
-- ----------------------------

-- ----------------------------
-- Table structure for KIEMTRATHIETBI
-- ----------------------------
DROP TABLE IF EXISTS `KIEMTRATHIETBI`;
CREATE TABLE `KIEMTRATHIETBI` (
  `MA_ND` int(11) NOT NULL,
  `MA_TB` int(11) NOT NULL,
  `SLUONG_HONG` int(11) NOT NULL,
  `TINHTRANG` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MA_ND`,`MA_TB`),
  KEY `FK_KIEMTRATHIETBI2` (`MA_TB`),
  CONSTRAINT `FK_KIEMTRATHIETBI` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_KIEMTRATHIETBI2` FOREIGN KEY (`MA_TB`) REFERENCES `THIETBI` (`MA_TB`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of KIEMTRATHIETBI
-- ----------------------------

-- ----------------------------
-- Table structure for LAPDAT
-- ----------------------------
DROP TABLE IF EXISTS `LAPDAT`;
CREATE TABLE `LAPDAT` (
  `MA_MT` int(11) NOT NULL,
  `MA_PCUNG` int(11) NOT NULL,
  PRIMARY KEY (`MA_MT`,`MA_PCUNG`),
  KEY `FK_LAPDAT2` (`MA_PCUNG`),
  CONSTRAINT `FK_LAPDAT` FOREIGN KEY (`MA_MT`) REFERENCES `MAYTINH` (`MA_MT`) ON UPDATE CASCADE,
  CONSTRAINT `FK_LAPDAT2` FOREIGN KEY (`MA_PCUNG`) REFERENCES `PHANCUNG` (`MA_PCUNG`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of LAPDAT
-- ----------------------------

-- ----------------------------
-- Table structure for MAYTINH
-- ----------------------------
DROP TABLE IF EXISTS `MAYTINH`;
CREATE TABLE `MAYTINH` (
  `MA_MT` int(11) NOT NULL,
  `MA_PHONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_MT` char(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_MT`),
  KEY `FK_TRUCTHUOC` (`MA_PHONG`),
  CONSTRAINT `FK_TRUCTHUOC` FOREIGN KEY (`MA_PHONG`) REFERENCES `PHONG` (`MA_PHONG`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of MAYTINH
-- ----------------------------

-- ----------------------------
-- Table structure for NAMTRONG
-- ----------------------------
DROP TABLE IF EXISTS `NAMTRONG`;
CREATE TABLE `NAMTRONG` (
  `MA_TB` int(11) NOT NULL,
  `MA_PHONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_TB`,`MA_PHONG`),
  KEY `FK_NAMTRONG2` (`MA_PHONG`),
  CONSTRAINT `FK_NAMTRONG` FOREIGN KEY (`MA_TB`) REFERENCES `THIETBI` (`MA_TB`) ON UPDATE CASCADE,
  CONSTRAINT `FK_NAMTRONG2` FOREIGN KEY (`MA_PHONG`) REFERENCES `PHONG` (`MA_PHONG`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of NAMTRONG
-- ----------------------------

-- ----------------------------
-- Table structure for NGUOIDUNG
-- ----------------------------
DROP TABLE IF EXISTS `NGUOIDUNG`;
CREATE TABLE `NGUOIDUNG` (
  `ID` int(11) NOT NULL,
  `MA_CVU` int(11) NOT NULL,
  `USERNAME` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_ND` char(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_DAMNHIEM` (`MA_CVU`),
  CONSTRAINT `FK_DAMNHIEM` FOREIGN KEY (`MA_CVU`) REFERENCES `CHUCVU` (`MA_CVU`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of NGUOIDUNG
-- ----------------------------
INSERT INTO `NGUOIDUNG` VALUES ('1', '1', 'lphieu', '12345', 'Lê Phương Hiếu');
INSERT INTO `NGUOIDUNG` VALUES ('2', '4', 'lhtanh', '12345', 'Lê Hoàng Tuấn Anh');

-- ----------------------------
-- Table structure for PHANCONG
-- ----------------------------
DROP TABLE IF EXISTS `PHANCONG`;
CREATE TABLE `PHANCONG` (
  `ID_CV` int(11) NOT NULL,
  `STT_CVIEC` int(11) NOT NULL,
  `MA_ND` int(11) NOT NULL,
  `MA_PHONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYDAY` date NOT NULL,
  `BUOIDAY` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `NGUOIDAY` char(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`STT_CVIEC`,`MA_ND`,`MA_PHONG`,`ID_CV`),
  KEY `FK_PHANCONG2` (`MA_ND`),
  KEY `FK_PHANCONG3` (`MA_PHONG`),
  CONSTRAINT `FK_PHANCONG` FOREIGN KEY (`STT_CVIEC`) REFERENCES `CONGVIEC` (`STT_CVIEC`) ON UPDATE CASCADE,
  CONSTRAINT `FK_PHANCONG2` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_PHANCONG3` FOREIGN KEY (`MA_PHONG`) REFERENCES `PHONG` (`MA_PHONG`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of PHANCONG
-- ----------------------------
INSERT INTO `PHANCONG` VALUES ('0', '1', '1', 'THQL_P01', '2014-12-30', 'Sáng', 'Hoa');
INSERT INTO `PHANCONG` VALUES ('1', '1', '1', 'THQL_P01', '2014-12-30', 'Chiều', 'Hoa');
INSERT INTO `PHANCONG` VALUES ('2', '1', '1', 'THQL_P02', '2014-12-30', 'Sáng', 'Hậu');
INSERT INTO `PHANCONG` VALUES ('3', '1', '1', 'THQL_P02', '2014-12-30', 'Chiều', 'Hậu');

-- ----------------------------
-- Table structure for PHANCUNG
-- ----------------------------
DROP TABLE IF EXISTS `PHANCUNG`;
CREATE TABLE `PHANCUNG` (
  `MA_PCUNG` int(11) NOT NULL,
  `TEN_PCUNG` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `HANG_SX_PCUNG` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `DONVITINH` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `GIATHANH_1PCUNG` float(20,0) NOT NULL,
  PRIMARY KEY (`MA_PCUNG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of PHANCUNG
-- ----------------------------

-- ----------------------------
-- Table structure for PHANMEM
-- ----------------------------
DROP TABLE IF EXISTS `PHANMEM`;
CREATE TABLE `PHANMEM` (
  `MA_PM` int(11) NOT NULL,
  `TEN_PM` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHIENBAN_PM` char(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_PM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of PHANMEM
-- ----------------------------

-- ----------------------------
-- Table structure for PHONG
-- ----------------------------
DROP TABLE IF EXISTS `PHONG`;
CREATE TABLE `PHONG` (
  `MA_PHONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_PHONG` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `SLUONG_MAY` int(11) NOT NULL,
  PRIMARY KEY (`MA_PHONG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of PHONG
-- ----------------------------
INSERT INTO `PHONG` VALUES ('THQL_P01', 'Phòng Thực Hành 1', '50');
INSERT INTO `PHONG` VALUES ('THQL_P02', 'Phòng Thực Hành 2', '50');
INSERT INTO `PHONG` VALUES ('THQL_P03', 'Phòng Thực Hành 3', '50');
INSERT INTO `PHONG` VALUES ('THQL_P04', 'Phòng Thực Hành 4', '50');
INSERT INTO `PHONG` VALUES ('THQL_P05', 'Phòng Thực Hành 5', '50');
INSERT INTO `PHONG` VALUES ('THQL_P06', 'Phòng Thực Hành 6', '50');
INSERT INTO `PHONG` VALUES ('THQL_P07', 'Phòng Thực Hành 7', '50');

-- ----------------------------
-- Table structure for QUANLY
-- ----------------------------
DROP TABLE IF EXISTS `QUANLY`;
CREATE TABLE `QUANLY` (
  `MA_ND` int(11) NOT NULL,
  `MA_PHONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_ND`,`MA_PHONG`),
  KEY `FK_QUANLY2` (`MA_PHONG`),
  CONSTRAINT `FK_QUANLY` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_QUANLY2` FOREIGN KEY (`MA_PHONG`) REFERENCES `PHONG` (`MA_PHONG`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of QUANLY
-- ----------------------------

-- ----------------------------
-- Table structure for SESSION
-- ----------------------------
DROP TABLE IF EXISTS `SESSION`;
CREATE TABLE `SESSION` (
  `STT_SS` int(11) NOT NULL,
  `MA_ND` int(11) NOT NULL,
  `CODE_SS` char(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`STT_SS`),
  KEY `FK_DUOCCAP` (`MA_ND`),
  CONSTRAINT `FK_DUOCCAP` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of SESSION
-- ----------------------------

-- ----------------------------
-- Table structure for SUACHUA
-- ----------------------------
DROP TABLE IF EXISTS `SUACHUA`;
CREATE TABLE `SUACHUA` (
  `MA_ND` int(11) NOT NULL,
  `MA_MT` int(11) NOT NULL,
  `NGAYBD_SC` datetime NOT NULL,
  `NGAYKT_SC` datetime NOT NULL,
  `NOIDUNG_SC` text COLLATE utf8_unicode_ci NOT NULL,
  `GHICHU_DIEUHANH` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MA_ND`,`MA_MT`),
  KEY `FK_SUACHUA2` (`MA_MT`),
  CONSTRAINT `FK_SUACHUA` FOREIGN KEY (`MA_ND`) REFERENCES `NGUOIDUNG` (`ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_SUACHUA2` FOREIGN KEY (`MA_MT`) REFERENCES `MAYTINH` (`MA_MT`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of SUACHUA
-- ----------------------------

-- ----------------------------
-- Table structure for THIETBI
-- ----------------------------
DROP TABLE IF EXISTS `THIETBI`;
CREATE TABLE `THIETBI` (
  `MA_TB` int(11) NOT NULL,
  `TEN_TB` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `SLUONG_TB` int(11) NOT NULL,
  `DONVIDO_TB` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `LOAI_TB` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `GIATHANH_1TB` float(20,0) NOT NULL,
  PRIMARY KEY (`MA_TB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of THIETBI
-- ----------------------------
