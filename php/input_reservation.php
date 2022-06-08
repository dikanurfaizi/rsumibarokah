<?php
include 'connection.php';
// menyimpan data kedalam variabel
$reserv_id      = $_POST['reserv_id'];
$nama_dp        = $_POST['nama_dp'];
$nama_blkg		= $_POST['nama_blkg'];
$email	        = $_POST['email'];
$no_tlp		  	= $_POST['jenis_kelamin'];
$id_dokter      = $_POST['id_dokter'];
// query SQL untuk insert data
$query="INSERT INTO mahasiswa SET reserv_id='1',nama_dp='$nama_dp',nama_blkg='$nama_blkg',email='$email',no_tlp='$no_tlp',id_dokter='123'";
mysqli_query($connect, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>