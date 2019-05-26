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
AUTO_INCREMENT = 5;
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
AUTO_INCREMENT = 11;
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
AUTO_INCREMENT = 4;
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
AUTO_INCREMENT = 15;
-- -------------------------------------------------------------


-- DROP TABLE "organisasi" -------------------------------------
DROP TABLE IF EXISTS `organisasi` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "organisasi" -----------------------------------
CREATE TABLE `organisasi` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`nama` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
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
AUTO_INCREMENT = 15;
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
	`nama` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 30;
-- -------------------------------------------------------------


-- DROP TABLE "user_organisasi" --------------------------------
DROP TABLE IF EXISTS `user_organisasi` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "user_organisasi" ------------------------------
CREATE TABLE `user_organisasi` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`periode` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`divisi` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`berkas` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`bukti` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`id_user` Int( 11 ) NOT NULL,
	`id_organisasi` Int( 10 ) UNSIGNED NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------


-- Dump data of "identitas_diri" ---------------------------
INSERT INTO `identitas_diri`(`nim`,`nama`,`ttl`,`no_ijazah`,`masuk`,`lulus`,`gelar`,`id_user`,`id_t_user`,`prodi_id`) VALUES 
( '1234567', 'Fahmibos', '2019-04-17', '56789', '2016-04-17', '2020-04-18', 's.kom', '21', NULL, '9' ),
( '345678', 'Adit', '1997-04-22', '56789', '0016-04-22', '2018-04-22', 's.kom', '22', NULL, '9' ),
( '89098', 'Sheena Muhammad Ali Zien', '2018-04-24', '1234', '2016-04-24', '2019-04-24', 's.kom', '29', NULL, '9' );
-- ---------------------------------------------------------


-- Dump data of "karya_ilmiah" -----------------------------
INSERT INTO `karya_ilmiah`(`no`,`judul`,`terbit`,`penyelenggara`,`status`,`bukti`,`id_user`) VALUES 
( '2', 'cara membuat SI SKPI', '2019-05-10', 'Unjani YK', 'aaaaaaa', '.jpg', NULL ),
( '3', 'aghaaaaaa', '2019-05-10', 'aasssssdddd', 'adasdasdas', 'aghaaaaaa.jpg', NULL ),
( '4', 'asdasd', '2018-04-24', 'pppas', 'as23', '89098asdasd.png', '29' );
-- ---------------------------------------------------------


-- Dump data of "keahlian" ---------------------------------
INSERT INTO `keahlian`(`no`,`nama`,`waktu`,`penyelenggara`,`ruang`,`bukti`,`keahlian`,`id_user`) VALUES 
( '5', 'q', 'a', 's', 'd', 'q.jpg', NULL, NULL ),
( '6', 'o', 'p', 'k', 'k', 'o.jpg', NULL, NULL ),
( '8', '43ertyui', 'rtyuisadad', '456t7y8u9i', '54r6t7y8u9i', NULL, NULL, '21' ),
( '10', 'asdasd', 'asda', 'pppas', '54r6t7y8u9i', '89098asdasd.png', NULL, '29' );
-- ---------------------------------------------------------


-- Dump data of "kepanitiaan" ------------------------------
INSERT INTO `kepanitiaan`(`no`,`nama`,`waktu`,`penyelenggara`,`sebagai`,`bukti`,`id_user`) VALUES 
( '2', 'seminar apalah', 'Februari 2017', 'UGM', 'aaaaaa', 'seminar apalah.jpg', NULL ),
( '3', '43ertyuiasdad', 'asda', 'pppas', 'asd', NULL, '29' );
-- ---------------------------------------------------------


-- Dump data of "magang" -----------------------------------
INSERT INTO `magang`(`no`,`tempat`,`waktu`,`penyelenggara`,`berkas`,`bukti`,`id_user`) VALUES 
( '10', 'oke', 'Juli 2018  - Agustus 2018', 'Unjani YK', 'ada', '1.jpg', NULL ),
( '12', '5', '6', '7', '8', '5.jpg', NULL ),
( '13', 'asdasd', 'asdasd', 'sadsda', 'sadads', NULL, '21' ),
( '14', 'asdasd', 'asdasd', 'pppas', 'asdasd', '89098190526042620asdasd.png', '29' );
-- ---------------------------------------------------------


-- Dump data of "organisasi" -------------------------------
-- ---------------------------------------------------------


-- Dump data of "prestasi" ---------------------------------
INSERT INTO `prestasi`(`no`,`prestasi`,`waktu`,`penyelenggara`,`atas_nama`,`bukti`,`id_user`) VALUES 
( '22', 'oooasd', '2019-05-14', 'ppp', 'lll', 'oooasd.png', '21' ),
( '23', 'mmmasdasd', '2019-05-21', 'nnnn', 'bbbb', 'mmmasdasd.png', '21' ),
( '24', 'mmmasdasd', '2018-04-24', 'pppas', 'asdasd', '89098190526042638mmmasdasd.png', '29' ),
( '25', 'asdasd', '2018-04-25', 'dfghjk', 'asdasd', '89098190526042646asdasd.png', '29' ),
( '26', 'mmmasdasd', '2018-04-25', 'pppas', 'asdasd', '89098190526042701mmmasdasd.png', '29' );
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
( '12', 'asd', 'asd', '2018-04-21', 'as23', '190522101924.png', '21' ),
( '13', 'Fahmibos', 'pppas', '2018-04-24', 'as23', '89098Fahmibos.png', '29' ),
( '14', 'seminar baru', 'siap', '2018-04-25', 'oke', '89098seminar baru.png', '29' );
-- ---------------------------------------------------------


-- Dump data of "t_user" -----------------------------------
INSERT INTO `t_user`(`id`,`username`,`password`,`level`,`nama`) VALUES 
( '1', 'admin', 'admin', 'a_prodi', NULL ),
( '3', 'cahyo', 'cahyo', 'a_sistem', NULL ),
( '21', '31.1496', '12345678', 'mahasiswa', 'sheena' ),
( '22', '31.1493', 'adit', 'mahasiswa', NULL ),
( '23', '31.1496', 'fahmi', 'mahasiswa', NULL ),
( '26', '31.1496i', 'fahmi', 'mahasiswa', NULL ),
( '27', '31.1497', 'fani', 'mahasiswa', NULL ),
( '29', 'sheena', '12345678', 'mahasiswa', 'Sheena Muhammad Ali Zien' );
-- ---------------------------------------------------------


-- Dump data of "user_organisasi" --------------------------
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


-- CREATE INDEX "index_id_user4" -------------------------------
CREATE INDEX `index_id_user4` USING BTREE ON `karya_ilmiah`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user2" -------------------------------
CREATE INDEX `index_id_user2` USING BTREE ON `keahlian`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_keahlian" -------------------------------
CREATE INDEX `index_keahlian` USING BTREE ON `keahlian`( `keahlian` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user5" -------------------------------
CREATE INDEX `index_id_user5` USING BTREE ON `kepanitiaan`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user3" -------------------------------
CREATE INDEX `index_id_user3` USING BTREE ON `magang`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "id_user" --------------------------------------
CREATE INDEX `id_user` USING BTREE ON `prestasi`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "index_id_user" --------------------------------
CREATE INDEX `index_id_user` USING BTREE ON `seminar`( `id_user` );
-- -------------------------------------------------------------


-- CREATE INDEX "id_organisasi" --------------------------------
CREATE INDEX `id_organisasi` USING BTREE ON `user_organisasi`( `id_organisasi` );
-- -------------------------------------------------------------


-- CREATE INDEX "id_user" --------------------------------------
CREATE INDEX `id_user` USING BTREE ON `user_organisasi`( `id_user` );
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_ibfk_1" -------------------------
ALTER TABLE `identitas_diri`
	ADD CONSTRAINT `identitas_diri_ibfk_1` FOREIGN KEY ( `id_t_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "identitas_diri_ibfk_2" -------------------------
ALTER TABLE `identitas_diri`
	ADD CONSTRAINT `identitas_diri_ibfk_2` FOREIGN KEY ( `prodi_id` )
	REFERENCES `prodi`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "karya_ilmiah_ibfk_1" ---------------------------
ALTER TABLE `karya_ilmiah`
	ADD CONSTRAINT `karya_ilmiah_ibfk_1` FOREIGN KEY ( `id_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "keahlian_ibfk_1" -------------------------------
ALTER TABLE `keahlian`
	ADD CONSTRAINT `keahlian_ibfk_1` FOREIGN KEY ( `id_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "kepanitiaan_ibfk_1" ----------------------------
ALTER TABLE `kepanitiaan`
	ADD CONSTRAINT `kepanitiaan_ibfk_1` FOREIGN KEY ( `id_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "magang_ibfk_1" ---------------------------------
ALTER TABLE `magang`
	ADD CONSTRAINT `magang_ibfk_1` FOREIGN KEY ( `id_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "prestasi_ibfk_1" -------------------------------
ALTER TABLE `prestasi`
	ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY ( `id_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "seminar_ibfk_1" --------------------------------
ALTER TABLE `seminar`
	ADD CONSTRAINT `seminar_ibfk_1` FOREIGN KEY ( `id_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "user_organisasi_ibfk_1" ------------------------
ALTER TABLE `user_organisasi`
	ADD CONSTRAINT `user_organisasi_ibfk_1` FOREIGN KEY ( `id_user` )
	REFERENCES `t_user`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


-- CREATE LINK "user_organisasi_ibfk_2" ------------------------
ALTER TABLE `user_organisasi`
	ADD CONSTRAINT `user_organisasi_ibfk_2` FOREIGN KEY ( `id_organisasi` )
	REFERENCES `organisasi`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


