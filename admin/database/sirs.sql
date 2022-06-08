/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - sirs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sirs` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sirs`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`username`,`password`,`nama`,`foto`) values 
('admin@gmail.com','admin','Sony Anggara','‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0×');

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `kd` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) DEFAULT NULL,
  `judul` varchar(1000) DEFAULT NULL,
  `tag` varchar(1000) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `nm_gbr` varchar(100) DEFAULT NULL,
  `uk_gbr` int(11) DEFAULT NULL,
  `type_gbr` varchar(20) DEFAULT NULL,
  `waktu_upload` datetime DEFAULT NULL,
  `waktu_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`kd`),
  KEY `id` (`kd`),
  KEY `reference_kategori` (`kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `artikel` */

insert  into `artikel`(`kd`,`kategori`,`judul`,`tag`,`konten`,`nm_gbr`,`uk_gbr`,`type_gbr`,`waktu_upload`,`waktu_edit`) values 
(34,'Artikel','asdasdadasd','asdasdasdasd','<p>asdasdasdas<br></p>','Hj. AMAD.jpg',132482,'image/jpeg','2020-08-27 14:44:16','2020-08-27 14:44:27'),
(39,'Artikel','Mencoba Hal Baru lagi','Dalam tulisan ini membahas tentang SweetAlert2','SweetAlert2 adalah ....','contoh.jpg',59679,'image/jpeg','2020-08-27 06:25:00','2020-08-29 10:26:37'),
(40,'Artikel','asdasdasd','asdasdasd','<p>asdasdasdasdasdasdasdasdasdasdasdasda<br></p>','contoh.jpg',59679,'image/jpeg','2020-08-28 06:27:14','2020-08-29 09:31:56');

/*Table structure for table `dokter` */

DROP TABLE IF EXISTS `dokter`;

CREATE TABLE `dokter` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `nm_foto` varchar(100) DEFAULT NULL,
  `uk_foto` int(11) DEFAULT NULL,
  `type_foto` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dokter` */

insert  into `dokter`(`id`,`nama`,`spesialis`,`no_hp`,`alamat`,`nm_foto`,`uk_foto`,`type_foto`) values 
('dktr001','drg. Fransiska Shanti Rosari','spesialis gigi','0','JL. PANDANARAN NO 373 1/1 BANARAN BOYOLALI','doctor_10.jpg',NULL,NULL),
('dktr002','drg. Maria M Siti Haryanti','Spesialis Gigi','0','KRICAK KIDUL 31/7 TEGALREJO YOGYAKARTA','',NULL,NULL),
('dktr003','dr. Anindita Wulandari, Sp.A	','Spesialis Anak','0','JL. USMAN NO. 6/7 002/011 KELAPA DUA WETAN, CIRACAS','',NULL,NULL),
('dktr004','dr. Argadia Yuniriyadi, Sp.A, ','Spesialis Anak','0','Jl. Anggrek No. 203 Kebonso Pulisen Boyolali','',NULL,NULL),
('dktr005','dr. Ning Djarwati, Sp.A','Spesialis Anak','0','Jl. Kelinci AG.6 Solo Baru Rt 05/08 Langenharjo Grogol Sukoharjo','',NULL,NULL),
('dktr006','dr. Gazali Haerudin, Sp.B, FIN','Spesialis Bedah','0','SUROWEDANAN 02/09,PULISEN, BOYOLALI','',NULL,NULL),
('dktr007','dr.Hendro Saktiaji, Sp.B','Spesialis Bedah','0','JL. PERUMNAS GG KAPUAS B-43 NGROPOH 8/62 GONDANGCATUR DEEPOK SLEMAN','',NULL,NULL),
('dktr008','dr. Dwi Yuda Herdanto, Sp. JP','Spesialis Jantung','0','JL. PULO ASEM UTARA VII NO. 29 011/002 JATI, PULO GADUNG JAKARTA TIMUR','',NULL,NULL),
('dktr009','DR. dr. M.Adrianes Bachnas, Sp','Spesialis Kandungan','0','TEGALMULYO 01/13 MOJOSONGO BOYOLALI','',NULL,NULL),
('dktr010','dr. Haris Sukastyo, Sp.OG','Spesialis Kandungan','0','JAGALAN 3/10 JAGALAN JEBRES SURAKARTA','',NULL,NULL),
('dktr011','dr. Dwi Rakhmawati, Sp.KK','spesialis kulit kelamin','0','TEGALMULYO 01/13 MOJOSONGO BOYOLALI','',NULL,NULL),
('dktr012','dr. Listyowati, Sp.PD	','spesialis penyakit dalam','0','Kajen Rt 15/06 Bonyokan Jatinom Klaten','',NULL,NULL),
('dktr013','dr. Santy Ayu P Perdhana, Sp.P','spesialis penyakit dalam','0','JALAN LEMPUYANG 45A, RT 3 RW 12, LAWEYAN, SOLO','',NULL,NULL),
('dktr014','dr. Iwan Setiawan, Sp.S	','Spesialis Syaraf','0','	Griya Cepogo Asri Rt 30/04 Mliwis Cepogo Boyolali','',NULL,NULL),
('dktr015','dr. M.Taufiq Suwasono C., Sp. ','Spesialis THT','0','Jl. Anggrek No. 201 B Pulisen Boyolali','',NULL,NULL),
('dktr016','dr. Nicolaus Kresno Harimurti,','Spesialis Urologi','0','Perum Tirtasari Blok D-5 Jl. Tambak Gamping Sleman','',NULL,NULL),
('dktr017','dr. Winarni, Sp.M	','Spesialis Mata','0','JL MR. SARTONO NO. 38 BIBIS BARU RT 1 RW 23 NUSUKAN BANJARSARI SURAKARTA','',NULL,NULL),
('dktr018','dr. Noor Diniyah, M.Kes, Sp.PK','Spesialis Patologi Klinik','0','Premulung Rt 03/08, Sondakan, Laweyan, Surakarta','',NULL,NULL);

/*Table structure for table `pelayanan` */

DROP TABLE IF EXISTS `pelayanan`;

CREATE TABLE `pelayanan` (
  `kd_pel` varchar(20) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `nm_pelayanan` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nm_foto` varchar(20) DEFAULT NULL,
  `uk_foto` int(11) DEFAULT NULL,
  `type_foto` varchar(20) DEFAULT NULL,
  `waktu_upload` datetime DEFAULT NULL,
  `waktu_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`kd_pel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelayanan` */

insert  into `pelayanan`(`kd_pel`,`judul`,`nm_pelayanan`,`deskripsi`,`nm_foto`,`uk_foto`,`type_foto`,`waktu_upload`,`waktu_edit`) values 
('PLN001','Kandungan','Diperbaiki','<p>Berhasil Yes<br></p>','Hj. AMAD.jpg',132482,'image/jpeg','2020-08-29 10:24:11','2020-08-29 10:46:44'),
('PLN002','Mata','Spesialis Mata','<p>Percobaan again<br></p>','Logo Toko AR.png',98148,'image/png','2020-08-29 10:24:11','2020-08-29 10:36:47');

/*Table structure for table `profil` */

DROP TABLE IF EXISTS `profil`;

CREATE TABLE `profil` (
  `kd_profil` varchar(20) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nm_foto` varchar(20) DEFAULT NULL,
  `uk_foto` int(11) DEFAULT NULL,
  `type_foto` varchar(20) DEFAULT NULL,
  `waktu_upload` datetime DEFAULT NULL,
  `waktu_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`kd_profil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `profil` */

/*Table structure for table `ruangan` */

DROP TABLE IF EXISTS `ruangan`;

CREATE TABLE `ruangan` (
  `no` varchar(20) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `nm_ruangan` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nm_foto` varchar(20) NOT NULL,
  `uk_foto` int(11) DEFAULT NULL,
  `type_foto` varchar(20) DEFAULT NULL,
  `waktu_upload` datetime DEFAULT NULL,
  `waktu_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ruangan` */

insert  into `ruangan`(`no`,`kategori`,`nm_ruangan`,`deskripsi`,`nm_foto`,`uk_foto`,`type_foto`,`waktu_upload`,`waktu_edit`) values 
('RNG001','VVIP','HAFZAH','<p>asdasdasdasdasd<br></p>','Logo Toko AR.png',98148,'image/png',NULL,NULL),
('RNG002','VIP','AISYAH 5','<p>Tes terus<br></p>','Logo Toko AR.png',98148,'image/png',NULL,'2020-08-29 11:21:01'),
('RNG003','Kelas I','KH 1','<p>Bismillah<br></p>','Logo Toko AR.png',98148,'image/png','2020-08-29 11:23:01','2020-08-29 11:23:01');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
