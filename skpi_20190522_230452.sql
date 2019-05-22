-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- DROP TABLE "identitas_diri" ---------------------------------
DROP TABLE IF EXISTS `identitas_diri` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "identitas_diri" -------------------------------
CREATE TABLE `identitas_diri` ( 
	`nim` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`nama` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`ttl` Date NULL,
	`no_ijazah` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`masuk` Date NULL,
	`lulus` Date NULL,
	`gelar` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`id_user` Int( 11 ) NULL,
	`id_t_user` Int( 11 ) NULL,
	`prodi_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `nim` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- DROP TABLE "identitas_diri_karya_ilmiah" --------------------
DROP TABLE IF EXISTS `identitas_diri_karya_ilmiah` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "identitas_diri_karya_ilmiah" ------------------
CREATE TABLE `identitas_diri_karya_ilmiah` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`identitas_diri_nim` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`no_karya_ilmiah` Int( 11 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- DROP TABLE "identitas_diri_kehalian" ------------------------
DROP TABLE IF EXISTS `identitas_diri_kehalian` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "identitas_diri_kehalian" ----------------------
CREATE TABLE `identitas_diri_kehalian` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`identitas_diri_nim` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`no_keahlian` Int( 11 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- DROP TABLE "identitas_diri_kepanitiaan" ---------------------
DROP TABLE IF EXISTS `identitas_diri_kepanitiaan` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "identitas_diri_kepanitiaan" -------------------
CREATE TABLE `identitas_diri_kepanitiaan` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`identitas_diri_nim` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`no_kepanitiaan` Int( 11 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- DROP TABLE "identitas_diri_magang" --------------------------
DROP TABLE IF EXISTS `identitas_diri_magang` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "identitas_diri_magang" ------------------------
CREATE TABLE `identitas_diri_magang` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`identitas_diri_nim` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`no_magang` Int( 11 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- DROP TABLE "identitas_diri_organisasi" ----------------------
DROP TABLE IF EXISTS `identitas_diri_organisasi` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "identitas_diri_organisasi" --------------------
CREATE TABLE `identitas_diri_organisasi` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`identitas_diri_nim` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`no_organisasi` Int( 11 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- DROP TABLE "identitas_diri_prestasi" ------------------------
DROP TABLE IF EXISTS `identitas_diri_prestasi` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "identitas_diri_prestasi" ----------------------
CREATE TABLE `identitas_diri_prestasi` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`identitas_diri_nim` VarChar( 24 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`no_prestasi` Int( 11 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- DROP TABLE "identitas_diri_seminar" -------------------------
DROP TABLE IF EXISTS `identitas_diri_seminar` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "identitas_diri_seminar" -----------------------
CREATE TABLE `identitas_diri_seminar` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`identitas_diri_nim` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`no_seminar` Int( 11 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- DROP TABLE "karya_ilmiah" -----------------------------------
DROP TABLE IF EXISTS `karya_ilmiah` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "karya_ilmiah" ---------------------------------
CREATE TABLE `karya_ilmiah` ( 
	`no` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`judul` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`terbit` Date NULL,
	`penyelenggara` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`status` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bukti` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`id_user` Int( 255 ) NULL,
	PRIMARY KEY ( `no` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------


-- DROP TABLE "keahlian" ---------------------------------------
DROP TABLE IF EXISTS `keahlian` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "keahlian" -------------------------------------
CREATE TABLE `keahlian` ( 
	`no` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nama` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`waktu` VarChar( 11 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`penyelenggara` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`ruang` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bukti` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`keahlian` Int( 255 ) NULL,
	`id_user` Int( 255 ) NULL,
	PRIMARY KEY ( `no` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- -------------------------------------------------------------


-- DROP TABLE "kepanitiaan" ------------------------------------
DROP TABLE IF EXISTS `kepanitiaan` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "kepanitiaan" ----------------------------------
CREATE TABLE `kepanitiaan` ( 
	`no` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nama` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`waktu` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`penyelenggara` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`sebagai` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bukti` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`id_user` Int( 255 ) NULL,
	PRIMARY KEY ( `no` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------


-- DROP TABLE "magang" -----------------------------------------
DROP TABLE IF EXISTS `magang` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "magang" ---------------------------------------
CREATE TABLE `magang` ( 
	`no` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`tempat` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`waktu` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`penyelenggara` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`berkas` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bukti` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`id_user` Int( 255 ) NULL,
	PRIMARY KEY ( `no` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 13;
-- -------------------------------------------------------------


-- DROP TABLE "mahasiswa" --------------------------------------
DROP TABLE IF EXISTS `mahasiswa` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "mahasiswa" ------------------------------------
CREATE TABLE `mahasiswa` ( 
	`nim` Char( 18 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`nama` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`status` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	PRIMARY KEY ( `nim` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- DROP TABLE "organisasi" -------------------------------------
DROP TABLE IF EXISTS `organisasi` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "organisasi" -----------------------------------
CREATE TABLE `organisasi` ( 
	`no` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nama` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`periode` VarChar( 10 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`divisi` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`berkas` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bukti` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`id_user` Int( 255 ) NULL,
	PRIMARY KEY ( `no` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 16;
-- -------------------------------------------------------------


-- DROP TABLE "prestasi" ---------------------------------------
DROP TABLE IF EXISTS `prestasi` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "prestasi" -------------------------------------
CREATE TABLE `prestasi` ( 
	`no` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`prestasi` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`waktu` Date NULL,
	`penyelenggara` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`atas_nama` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bukti` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`id_user` Int( 11 ) NULL,
	PRIMARY KEY ( `no` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 27;
-- -------------------------------------------------------------


-- DROP TABLE "prodi" ------------------------------------------
DROP TABLE IF EXISTS `prodi` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "prodi" ----------------------------------------
CREATE TABLE `prodi` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`izin` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`nama` VarChar( 64 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`prodi` VarChar( 32 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`jenis_dan_program` VarChar( 128 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`jenjang` VarChar( 24 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`persyaratan` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`sertifikat_akreditasi` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`akreditasi` VarChar( 32 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`lama_studi` VarChar( 24 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bahasa` VarChar( 24 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`sistem_penilaian` VarChar( 128 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`jenis_lanjutan` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 10;
-- -------------------------------------------------------------


-- DROP TABLE "seminar" ----------------------------------------
DROP TABLE IF EXISTS `seminar` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "seminar" --------------------------------------
CREATE TABLE `seminar` ( 
	`no` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nama` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`penyelenggara` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`waktu` Date NULL,
	`status` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bukti` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`id_user` Int( 11 ) NULL,
	PRIMARY KEY ( `no` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 13;
-- -------------------------------------------------------------


-- DROP TABLE "t_mahasiswa" ------------------------------------
DROP TABLE IF EXISTS `t_mahasiswa` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "t_mahasiswa" ----------------------------------
CREATE TABLE `t_mahasiswa` ( 
	`NIM` Char( 17 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`Nama` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`ttl` Date NULL,
	`nsi` VarChar( 10 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`masuk` Date NULL,
	`lulus` Date NULL,
	PRIMARY KEY ( `NIM` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- DROP TABLE "t_user" -----------------------------------------
DROP TABLE IF EXISTS `t_user` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "t_user" ---------------------------------------
CREATE TABLE `t_user` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`username` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`password` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`level` VarChar( 10 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 29;
-- -------------------------------------------------------------


-- Dump data of "identitas_diri" ---------------------------
INSERT INTO `identitas_diri`(`nim`,`nama`,`ttl`,`no_ijazah`,`masuk`,`lulus`,`gelar`,`id_user`,`id_t_user`,`prodi_id`) VALUES 
( '1234567', 'Fahmibos', '2019-04-17', '56789', '2016-04-17', '2020-04-18', 's.kom', '21', NULL, '9' );
-- ---------------------------------------------------------


-- Dump data of "identitas_diri_karya_ilmiah" --------------
-- ---------------------------------------------------------


-- Dump data of "identitas_diri_kehalian" ------------------
-- ---------------------------------------------------------


-- Dump data of "identitas_diri_kepanitiaan" ---------------
-- ---------------------------------------------------------


-- Dump data of "identitas_diri_magang" --------------------
-- ---------------------------------------------------------


-- Dump data of "identitas_diri_organisasi" ----------------
-- ---------------------------------------------------------


-- Dump data of "identitas_diri_prestasi" ------------------
-- ---------------------------------------------------------


-- Dump data of "identitas_diri_seminar" -------------------
-- ---------------------------------------------------------


-- Dump data of "karya_ilmiah" -----------------------------
INSERT INTO `karya_ilmiah`(`no`,`judul`,`terbit`,`penyelenggara`,`status`,`bukti`,`id_user`) VALUES 
( '2', 'cara membuat SI SKPI', '2019-05-10', 'Unjani YK', 'aaaaaaa', '.jpg', NULL ),
( '3', 'aghaaaaaa', '2019-05-10', 'aasssssdddd', 'adasdasdas', 'aghaaaaaa.jpg', NULL );
-- ---------------------------------------------------------


-- Dump data of "keahlian" ---------------------------------
INSERT INTO `keahlian`(`no`,`nama`,`waktu`,`penyelenggara`,`ruang`,`bukti`,`keahlian`,`id_user`) VALUES 
( '5', 'q', 'a', 's', 'd', 'q.jpg', NULL, NULL ),
( '6', 'o', 'p', 'k', 'k', 'o.jpg', NULL, NULL ),
( '8', '43ertyui', 'rtyuisadad', '456t7y8u9i', '54r6t7y8u9i', NULL, NULL, '21' );
-- ---------------------------------------------------------


-- Dump data of "kepanitiaan" ------------------------------
INSERT INTO `kepanitiaan`(`no`,`nama`,`waktu`,`penyelenggara`,`sebagai`,`bukti`,`id_user`) VALUES 
( '2', 'seminar apalah', 'Februari 2017', 'UGM', 'aaaaaa', 'seminar apalah.jpg', NULL );
-- ---------------------------------------------------------


-- Dump data of "magang" -----------------------------------
INSERT INTO `magang`(`no`,`tempat`,`waktu`,`penyelenggara`,`berkas`,`bukti`,`id_user`) VALUES 
( '10', 'oke', 'Juli 2018  - Agustus 2018', 'Unjani YK', 'ada', '1.jpg', NULL ),
( '12', '5', '6', '7', '8', '5.jpg', NULL ),
( '13', 'asdasd', 'asdasd', 'sadsda', 'sadads', '190522105214.png', '21' );
-- ---------------------------------------------------------


-- Dump data of "mahasiswa" --------------------------------
INSERT INTO `mahasiswa`(`nim`,`nama`,`status`) VALUES 
( '2016.02623.31.1496', 'Fahmi Muhammad', 'terisi' );
-- ---------------------------------------------------------


-- Dump data of "organisasi" -------------------------------
INSERT INTO `organisasi`(`no`,`nama`,`periode`,`divisi`,`berkas`,`bukti`,`id_user`) VALUES 
( '11', 'a', 'b', 'b', 'd', 'a.jpg', NULL ),
( '12', 'aaa', 'bbbb', 'aaaa', 'ttttt', 'aaa.jpg', NULL ),
( '13', 'fff', 'ggg', 'hhh', 'jjj', 'fff.jpg', NULL ),
( '14', 'potret', '2016-2019', 'Potrait', 'f', 'potret.jpg', NULL ),
( '15', 'sds', 'asda', 'aasdsd', 'asdsa', 'sds.JPG', NULL );
-- ---------------------------------------------------------


-- Dump data of "prestasi" ---------------------------------
INSERT INTO `prestasi`(`no`,`prestasi`,`waktu`,`penyelenggara`,`atas_nama`,`bukti`,`id_user`) VALUES 
( '22', 'oooasd', '2019-05-14', 'ppp', 'lll', 'oooasd.png', '21' ),
( '23', 'mmmasdasd', '2019-05-21', 'nnnn', 'bbbb', 'mmmasdasd.png', '21' );
-- ---------------------------------------------------------


-- Dump data of "prodi" ------------------------------------
INSERT INTO `prodi`(`id`,`izin`,`nama`,`prodi`,`jenis_dan_program`,`jenjang`,`persyaratan`,`sertifikat_akreditasi`,`akreditasi`,`lama_studi`,`bahasa`,`sistem_penilaian`,`jenis_lanjutan`) VALUES 
( '9', 'fghjkm', 'tyuio', '56t7y8u9io0', 'rtyuiokp', '54r6t7y8uiop', '5rtyuiop', '5tyuio', '5rt67yuiop', '54r6t7yuiop', 'rtyuiop', 'rtyuio', '546t7y8u9io' );
-- ---------------------------------------------------------


-- Dump data of "seminar" ----------------------------------
INSERT INTO `seminar`(`no`,`nama`,`penyelenggara`,`waktu`,`status`,`bukti`,`id_user`) VALUES 
( '7', 'asdsadsa', 'aaaa', '2019-05-14', 'bbbb', 'asdsadsa.jpg', NULL ),
( '8', 'aaa', 'bbb', '2019-05-22', 'vvv', 'aaa.jpg', NULL ),
( '9', 'bbb', 'sss', '2019-05-13', 'ddd', 'bbb.jpg', NULL ),
( '10', 'Fahmibos', 'pppas', '2018-04-21', 'as23', NULL, NULL ),
( '12', 'asd', 'asd', '2018-04-21', 'as23', '190522101924.png', '21' );
-- ---------------------------------------------------------


-- Dump data of "t_mahasiswa" ------------------------------
-- ---------------------------------------------------------


-- Dump data of "t_user" -----------------------------------
INSERT INTO `t_user`(`id`,`username`,`password`,`level`) VALUES 
( '1', 'admin', 'admin', 'a_prodi' ),
( '3', 'cahyo', 'cahyo', 'a_sistem' ),
( '21', '31.1496', 'fahmi', 'mahasiswa' ),
( '22', '31.1493', 'adit', 'mahasiswa' ),
( '23', '31.1496', 'fahmi', 'mahasiswa' ),
( '24', '31.1492', 'fani', 'mahasiswa' ),
( '25', '31.1496', 'fahmi', 'mahasiswa' ),
( '26', '31.1496i', 'fahmi', 'mahasiswa' ),
( '27', '31.1497', 'fani', 'mahasiswa' ),
( '28', 'sheena', '12345678', 'mahasiswa' );
-- ---------------------------------------------------------


-- CREATE INDEX "id_t_user" ------------------------------------
CREATE INDEX `id_t_user` USING BTREE ON `identitas_diri`( `id_t_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "id_user" --------------------------------------
CREATE INDEX `id_user` USING BTREE ON `identitas_diri`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "prodi_id_index" -------------------------------
CREATE INDEX `prodi_id_index` USING BTREE ON `identitas_diri`( `prodi_id` );
-- -------------------------------------------------------------


-- CREATE INDEX "identitas_diri_nim" ---------------------------
CREATE INDEX `identitas_diri_nim` USING BTREE ON `identitas_diri_karya_ilmiah`( `identitas_diri_nim` );
-- -------------------------------------------------------------


-- CREATE INDEX "no_karya_ilmiah" ------------------------------
CREATE INDEX `no_karya_ilmiah` USING BTREE ON `identitas_diri_karya_ilmiah`( `no_karya_ilmiah` );
-- -------------------------------------------------------------


-- CREATE INDEX "identitas_diri_nim" ---------------------------
CREATE INDEX `identitas_diri_nim` USING BTREE ON `identitas_diri_kehalian`( `identitas_diri_nim` );
-- -------------------------------------------------------------


-- CREATE INDEX "no_keahlian" ----------------------------------
CREATE INDEX `no_keahlian` USING BTREE ON `identitas_diri_kehalian`( `no_keahlian` );
-- -------------------------------------------------------------


-- CREATE INDEX "identitas_diri_nim" ---------------------------
CREATE INDEX `identitas_diri_nim` USING BTREE ON `identitas_diri_kepanitiaan`( `identitas_diri_nim` );
-- -------------------------------------------------------------


-- CREATE INDEX "no_kepanitiaan" -------------------------------
CREATE INDEX `no_kepanitiaan` USING BTREE ON `identitas_diri_kepanitiaan`( `no_kepanitiaan` );
-- -------------------------------------------------------------


-- CREATE INDEX "identitas_diri_nim" ---------------------------
CREATE INDEX `identitas_diri_nim` USING BTREE ON `identitas_diri_magang`( `identitas_diri_nim` );
-- -------------------------------------------------------------


-- CREATE INDEX "no_magang" ------------------------------------
CREATE INDEX `no_magang` USING BTREE ON `identitas_diri_magang`( `no_magang` );
-- -------------------------------------------------------------


-- CREATE INDEX "identitas_diri_nim" ---------------------------
CREATE INDEX `identitas_diri_nim` USING BTREE ON `identitas_diri_organisasi`( `identitas_diri_nim` );
-- -------------------------------------------------------------


-- CREATE INDEX "no_organisasi" --------------------------------
CREATE INDEX `no_organisasi` USING BTREE ON `identitas_diri_organisasi`( `no_organisasi` );
-- -------------------------------------------------------------


-- CREATE INDEX "identitas_diri_nim" ---------------------------
CREATE INDEX `identitas_diri_nim` USING BTREE ON `identitas_diri_prestasi`( `identitas_diri_nim` );
-- -------------------------------------------------------------


-- CREATE INDEX "no_prestasi" ----------------------------------
CREATE INDEX `no_prestasi` USING BTREE ON `identitas_diri_prestasi`( `no_prestasi` );
-- -------------------------------------------------------------


-- CREATE INDEX "identitas_diri_nim" ---------------------------
CREATE INDEX `identitas_diri_nim` USING BTREE ON `identitas_diri_seminar`( `identitas_diri_nim` );
-- -------------------------------------------------------------


-- CREATE INDEX "no_seminar" -----------------------------------
CREATE INDEX `no_seminar` USING BTREE ON `identitas_diri_seminar`( `no_seminar` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user4" -------------------------------
CREATE INDEX `index_id_user4` USING BTREE ON `karya_ilmiah`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_keahlian" -------------------------------
CREATE INDEX `index_keahlian` USING BTREE ON `keahlian`( `keahlian` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user2" -------------------------------
CREATE INDEX `index_id_user2` USING BTREE ON `keahlian`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user5" -------------------------------
CREATE INDEX `index_id_user5` USING BTREE ON `kepanitiaan`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user3" -------------------------------
CREATE INDEX `index_id_user3` USING BTREE ON `magang`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user1" -------------------------------
CREATE INDEX `index_id_user1` USING BTREE ON `organisasi`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "id_user" --------------------------------------
CREATE INDEX `id_user` USING BTREE ON `prestasi`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user" --------------------------------
CREATE INDEX `index_id_user` USING BTREE ON `seminar`( `id_user` );
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_ibfk_1" -------------------------
ALTER TABLE `identitas_diri`
	ADD CONSTRAINT `identitas_diri_ibfk_1` FOREIGN KEY ( `id_t_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_karya_ilmiah_ibfk_1" ------------
ALTER TABLE `identitas_diri_karya_ilmiah`
	ADD CONSTRAINT `identitas_diri_karya_ilmiah_ibfk_1` FOREIGN KEY ( `identitas_diri_nim` )
	REFERENCES `identitas_diri`( `nim` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_karya_ilmiah_ibfk_2" ------------
ALTER TABLE `identitas_diri_karya_ilmiah`
	ADD CONSTRAINT `identitas_diri_karya_ilmiah_ibfk_2` FOREIGN KEY ( `no_karya_ilmiah` )
	REFERENCES `karya_ilmiah`( `no` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_kehalian_ibfk_1" ----------------
ALTER TABLE `identitas_diri_kehalian`
	ADD CONSTRAINT `identitas_diri_kehalian_ibfk_1` FOREIGN KEY ( `identitas_diri_nim` )
	REFERENCES `identitas_diri`( `nim` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_kehalian_ibfk_2" ----------------
ALTER TABLE `identitas_diri_kehalian`
	ADD CONSTRAINT `identitas_diri_kehalian_ibfk_2` FOREIGN KEY ( `no_keahlian` )
	REFERENCES `keahlian`( `no` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_kepanitiaan_ibfk_1" -------------
ALTER TABLE `identitas_diri_kepanitiaan`
	ADD CONSTRAINT `identitas_diri_kepanitiaan_ibfk_1` FOREIGN KEY ( `identitas_diri_nim` )
	REFERENCES `identitas_diri`( `nim` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_kepanitiaan_ibfk_2" -------------
ALTER TABLE `identitas_diri_kepanitiaan`
	ADD CONSTRAINT `identitas_diri_kepanitiaan_ibfk_2` FOREIGN KEY ( `no_kepanitiaan` )
	REFERENCES `kepanitiaan`( `no` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_magang_ibfk_1" ------------------
ALTER TABLE `identitas_diri_magang`
	ADD CONSTRAINT `identitas_diri_magang_ibfk_1` FOREIGN KEY ( `identitas_diri_nim` )
	REFERENCES `identitas_diri`( `nim` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_magang_ibfk_2" ------------------
ALTER TABLE `identitas_diri_magang`
	ADD CONSTRAINT `identitas_diri_magang_ibfk_2` FOREIGN KEY ( `no_magang` )
	REFERENCES `magang`( `no` )
	ON DELETE Restrict
	ON UPDATE Restrict;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_organisasi_ibfk_1" --------------
ALTER TABLE `identitas_diri_organisasi`
	ADD CONSTRAINT `identitas_diri_organisasi_ibfk_1` FOREIGN KEY ( `identitas_diri_nim` )
	REFERENCES `identitas_diri`( `nim` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_organisasi_ibfk_2" --------------
ALTER TABLE `identitas_diri_organisasi`
	ADD CONSTRAINT `identitas_diri_organisasi_ibfk_2` FOREIGN KEY ( `no_organisasi` )
	REFERENCES `organisasi`( `no` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_prestasi_ibfk_1" ----------------
ALTER TABLE `identitas_diri_prestasi`
	ADD CONSTRAINT `identitas_diri_prestasi_ibfk_1` FOREIGN KEY ( `identitas_diri_nim` )
	REFERENCES `identitas_diri`( `nim` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_prestasi_ibfk_2" ----------------
ALTER TABLE `identitas_diri_prestasi`
	ADD CONSTRAINT `identitas_diri_prestasi_ibfk_2` FOREIGN KEY ( `no_prestasi` )
	REFERENCES `prestasi`( `no` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_seminar_ibfk_1" -----------------
ALTER TABLE `identitas_diri_seminar`
	ADD CONSTRAINT `identitas_diri_seminar_ibfk_1` FOREIGN KEY ( `identitas_diri_nim` )
	REFERENCES `identitas_diri`( `nim` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_seminar_ibfk_2" -----------------
ALTER TABLE `identitas_diri_seminar`
	ADD CONSTRAINT `identitas_diri_seminar_ibfk_2` FOREIGN KEY ( `no_seminar` )
	REFERENCES `seminar`( `no` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


