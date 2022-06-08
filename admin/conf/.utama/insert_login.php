<?php
	$id_dokter=$_POST['id_dokter'];
	$nama=$_POST['nama'];
	$spesialis=$_POST['spesialis'];
	$tlp=$_POST['tlp'];
	$alamat=$_POST['alamat'];
	$foto_dokter=$_POST['foto'];
	include('../conn.php');
	$sql = "INSERT INTO dokter (id,nama,spesialis,no_hp,alamat,foto) VALUES ('".$id_dokter."','".$nama."','".$spesialis."','".$tlp."','".$alamat."','".$foto_dokter."')";

	if ($connect->query($sql) === TRUE) {
  		echo "Data Berhasil Disimpan";
	} else {
  		echo "Error: " . $sql . "<br>" . $connect->error;
	}

	$connect->close();
	// header("../../form_dokter.php");
?>