/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 5.5.20-log : Database - skpi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`skpi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `skpi`;

/*Table structure for table `identitas_diri` */

DROP TABLE IF EXISTS `identitas_diri`;

CREATE TABLE `identitas_diri` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `no_ijazah` varchar(30) DEFAULT NULL,
  `masuk` date DEFAULT NULL,
  `lulus` date DEFAULT NULL,
  `gelar` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `prodi` enum('D3-Management Informatika','S1 - Teknik Informatika') DEFAULT NULL,
  `id_t_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `id_user` (`id_user`),
  KEY `id_t_user` (`id_t_user`),
  CONSTRAINT `identitas_diri_ibfk_1` FOREIGN KEY (`id_t_user`) REFERENCES `t_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_diri` */

insert  into `identitas_diri`(`nim`,`nama`,`ttl`,`no_ijazah`,`masuk`,`lulus`,`gelar`,`id_user`,`prodi`,`id_t_user`) values 
('1','fahmi',NULL,NULL,NULL,NULL,NULL,26,NULL,NULL),
('2','fani',NULL,NULL,NULL,NULL,NULL,27,NULL,NULL);

/*Table structure for table `identitas_diri_karya_ilmiah` */

DROP TABLE IF EXISTS `identitas_diri_karya_ilmiah`;

CREATE TABLE `identitas_diri_karya_ilmiah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identitas_diri_nim` varchar(20) DEFAULT NULL,
  `no_karya_ilmiah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identitas_diri_nim` (`identitas_diri_nim`),
  KEY `no_karya_ilmiah` (`no_karya_ilmiah`),
  CONSTRAINT `identitas_diri_karya_ilmiah_ibfk_1` FOREIGN KEY (`identitas_diri_nim`) REFERENCES `identitas_diri` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `identitas_diri_karya_ilmiah_ibfk_2` FOREIGN KEY (`no_karya_ilmiah`) REFERENCES `karya_ilmiah` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_diri_karya_ilmiah` */

/*Table structure for table `identitas_diri_kehalian` */

DROP TABLE IF EXISTS `identitas_diri_kehalian`;

CREATE TABLE `identitas_diri_kehalian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identitas_diri_nim` varchar(20) DEFAULT NULL,
  `no_keahlian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identitas_diri_nim` (`identitas_diri_nim`),
  KEY `no_keahlian` (`no_keahlian`),
  CONSTRAINT `identitas_diri_kehalian_ibfk_1` FOREIGN KEY (`identitas_diri_nim`) REFERENCES `identitas_diri` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `identitas_diri_kehalian_ibfk_2` FOREIGN KEY (`no_keahlian`) REFERENCES `keahlian` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_diri_kehalian` */

/*Table structure for table `identitas_diri_kepanitiaan` */

DROP TABLE IF EXISTS `identitas_diri_kepanitiaan`;

CREATE TABLE `identitas_diri_kepanitiaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identitas_diri_nim` varchar(20) DEFAULT NULL,
  `no_kepanitiaan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identitas_diri_nim` (`identitas_diri_nim`),
  KEY `no_kepanitiaan` (`no_kepanitiaan`),
  CONSTRAINT `identitas_diri_kepanitiaan_ibfk_1` FOREIGN KEY (`identitas_diri_nim`) REFERENCES `identitas_diri` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `identitas_diri_kepanitiaan_ibfk_2` FOREIGN KEY (`no_kepanitiaan`) REFERENCES `kepanitiaan` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_diri_kepanitiaan` */

/*Table structure for table `identitas_diri_magang` */

DROP TABLE IF EXISTS `identitas_diri_magang`;

CREATE TABLE `identitas_diri_magang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identitas_diri_nim` varchar(20) DEFAULT NULL,
  `no_magang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identitas_diri_nim` (`identitas_diri_nim`),
  KEY `no_magang` (`no_magang`),
  CONSTRAINT `identitas_diri_magang_ibfk_1` FOREIGN KEY (`identitas_diri_nim`) REFERENCES `identitas_diri` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `identitas_diri_magang_ibfk_2` FOREIGN KEY (`no_magang`) REFERENCES `magang` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_diri_magang` */

/*Table structure for table `identitas_diri_organisasi` */

DROP TABLE IF EXISTS `identitas_diri_organisasi`;

CREATE TABLE `identitas_diri_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identitas_diri_nim` varchar(20) DEFAULT NULL,
  `no_organisasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identitas_diri_nim` (`identitas_diri_nim`),
  KEY `no_organisasi` (`no_organisasi`),
  CONSTRAINT `identitas_diri_organisasi_ibfk_1` FOREIGN KEY (`identitas_diri_nim`) REFERENCES `identitas_diri` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `identitas_diri_organisasi_ibfk_2` FOREIGN KEY (`no_organisasi`) REFERENCES `organisasi` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_diri_organisasi` */

/*Table structure for table `identitas_diri_prestasi` */

DROP TABLE IF EXISTS `identitas_diri_prestasi`;

CREATE TABLE `identitas_diri_prestasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identitas_diri_nim` varchar(24) DEFAULT NULL,
  `no_prestasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identitas_diri_nim` (`identitas_diri_nim`),
  KEY `no_prestasi` (`no_prestasi`),
  CONSTRAINT `identitas_diri_prestasi_ibfk_2` FOREIGN KEY (`no_prestasi`) REFERENCES `prestasi` (`no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `identitas_diri_prestasi_ibfk_1` FOREIGN KEY (`identitas_diri_nim`) REFERENCES `identitas_diri` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_diri_prestasi` */

/*Table structure for table `identitas_diri_seminar` */

DROP TABLE IF EXISTS `identitas_diri_seminar`;

CREATE TABLE `identitas_diri_seminar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identitas_diri_nim` varchar(20) DEFAULT NULL,
  `no_seminar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identitas_diri_nim` (`identitas_diri_nim`),
  KEY `no_seminar` (`no_seminar`),
  CONSTRAINT `identitas_diri_seminar_ibfk_1` FOREIGN KEY (`identitas_diri_nim`) REFERENCES `identitas_diri` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `identitas_diri_seminar_ibfk_2` FOREIGN KEY (`no_seminar`) REFERENCES `seminar` (`no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_diri_seminar` */

/*Table structure for table `karya_ilmiah` */

DROP TABLE IF EXISTS `karya_ilmiah`;

CREATE TABLE `karya_ilmiah` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `terbit` date DEFAULT NULL,
  `penyelenggara` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `karya_ilmiah` */

insert  into `karya_ilmiah`(`no`,`judul`,`terbit`,`penyelenggara`,`status`,`bukti`) values 
(1,'tes','2019-05-06','aaa','sss','1.jpg'),
(2,'cara membuat SI SKPI','2019-05-10','Unjani YK','aaaaaaa','.jpg'),
(3,'aghaaaaaa','2019-05-10','aasssssdddd','adasdasdas','aghaaaaaa.jpg');

/*Table structure for table `keahlian` */

DROP TABLE IF EXISTS `keahlian`;

CREATE TABLE `keahlian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `waktu` varchar(11) DEFAULT NULL,
  `penyelenggara` varchar(100) DEFAULT NULL,
  `ruang` varchar(100) DEFAULT NULL,
  `bukti` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `keahlian` */

insert  into `keahlian`(`no`,`nama`,`waktu`,`penyelenggara`,`ruang`,`bukti`) values 
(5,'q','a','s','d','q.jpg'),
(6,'o','p','k','k','o.jpg');

/*Table structure for table `kepanitiaan` */

DROP TABLE IF EXISTS `kepanitiaan`;

CREATE TABLE `kepanitiaan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `waktu` varchar(30) DEFAULT NULL,
  `penyelenggara` varchar(50) DEFAULT NULL,
  `sebagai` varchar(20) DEFAULT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kepanitiaan` */

insert  into `kepanitiaan`(`no`,`nama`,`waktu`,`penyelenggara`,`sebagai`,`bukti`) values 
(1,'Lomba foto have funnnn','Januari 2017','Unjani ','CP','Lomba foto have funnnn.JPG'),
(2,'seminar apalah','Februari 2017','UGM','aaaaaa','seminar apalah.jpg');

/*Table structure for table `magang` */

DROP TABLE IF EXISTS `magang`;

CREATE TABLE `magang` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `tempat` varchar(100) DEFAULT NULL,
  `waktu` varchar(30) DEFAULT NULL,
  `penyelenggara` varchar(100) DEFAULT NULL,
  `berkas` varchar(50) DEFAULT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `magang` */

insert  into `magang`(`no`,`tempat`,`waktu`,`penyelenggara`,`berkas`,`bukti`) values 
(10,'oke','Juli 2018  - Agustus 2018','Unjani YK','ada','1.jpg'),
(11,'2','s','d','f',',.jpg'),
(12,'5','6','7','8','5.jpg');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` char(18) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`status`) values 
('2016.02623.31.1496','Fahmi Muhammad','terisi');

/*Table structure for table `organisasi` */

DROP TABLE IF EXISTS `organisasi`;

CREATE TABLE `organisasi` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `periode` varchar(10) DEFAULT NULL,
  `divisi` varchar(50) DEFAULT NULL,
  `berkas` varchar(50) DEFAULT NULL,
  `bukti` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `organisasi` */

insert  into `organisasi`(`no`,`nama`,`periode`,`divisi`,`berkas`,`bukti`) values 
(11,'a','b','b','d','a.jpg'),
(12,'aaa','bbbb','aaaa','ttttt','aaa.jpg'),
(13,'fff','ggg','hhh','jjj','fff.jpg'),
(14,'potret','2016-2019','Potrait','f','potret.jpg'),
(15,'sds','asda','aasdsd','asdsa','sds.JPG');

/*Table structure for table `prestasi` */

DROP TABLE IF EXISTS `prestasi`;

CREATE TABLE `prestasi` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `prestasi` varchar(100) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `penyelenggara` varchar(100) DEFAULT NULL,
  `atas_nama` varchar(100) DEFAULT NULL,
  `bukti` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`no`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `prestasi` */

insert  into `prestasi`(`no`,`prestasi`,`waktu`,`penyelenggara`,`atas_nama`,`bukti`,`id_user`) values 
(21,'aaaa','2019-05-14','bbb','cccc','aaaa.jpg',NULL),
(22,'ooo','2019-05-14','ppp','lll','ooo.jpg',NULL),
(23,'mmm','2019-05-21','nnnn','bbbb','mmm.jpg',NULL);

/*Table structure for table `prodi` */

DROP TABLE IF EXISTS `prodi`;

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `izin` text,
  `nama` varchar(64) DEFAULT NULL,
  `prodi` varchar(32) DEFAULT NULL,
  `jenis_dan_program` varchar(128) DEFAULT NULL,
  `jenjang` varchar(24) DEFAULT NULL,
  `persyaratan` text,
  `sertifikat_akreditasi` text,
  `akreditasi` varchar(32) DEFAULT NULL,
  `lama_studi` varchar(24) DEFAULT NULL,
  `bahasa` varchar(24) DEFAULT NULL,
  `sistem_penilaian` varchar(128) DEFAULT NULL,
  `jenis_lanjutan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `prodi` */

/*Table structure for table `seminar` */

DROP TABLE IF EXISTS `seminar`;

CREATE TABLE `seminar` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `penyelenggara` varchar(100) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `bukti` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `seminar` */

insert  into `seminar`(`no`,`nama`,`penyelenggara`,`waktu`,`status`,`bukti`) values 
(7,'asdsadsa','aaaa','2019-05-14','bbbb','asdsadsa.jpg'),
(8,'aaa','bbb','2019-05-22','vvv','aaa.jpg'),
(9,'bbb','sss','2019-05-13','ddd','bbb.jpg');

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `t_user` */

insert  into `t_user`(`id`,`username`,`password`,`level`) values 
(1,'admin','admin','a_prodi'),
(3,'cahyo','cahyo','a_sistem'),
(21,'31.1496','fahmi','mahasiswa'),
(22,'31.1493','adit','mahasiswa'),
(23,'31.1496','fahmi','mahasiswa'),
(24,'31.1492','fani','mahasiswa'),
(25,'31.1496','fahmi','mahasiswa'),
(26,'31.1496i','fahmi','mahasiswa'),
(27,'31.1497','fani','mahasiswa');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;