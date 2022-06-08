<?php
	$id_dokter=$_POST['id_dokter'];
	$nama=$_POST['nama'];
	$spesialis=$_POST['spesialis'];
	$tlp=$_POST['tlp'];
	$alamat=$_POST['alamat'];
	$foto=$_POST['foto_dokter'];
	include('../conn.php');
	$sql = "UPDATE dokter SET nama='$nama', spesialis='$spesialis', no_hp='$tlp', alamat='$alamat' WHERE id='$id_dokter'";

	if ($connect->query($sql) === TRUE) {
  		header('location:../../view_dokter.php');
	} else {
  		echo "Error: " . $sql . "<br>" . $connect->error;
	}

	$connect->close();
?>