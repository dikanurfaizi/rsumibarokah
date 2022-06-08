<?php
	$id_dokter=$_GET['id'];
	include('../conn.php');
	$sql = "DELETE FROM dokter WHERE id='".$id_dokter."'";

	if ($connect->query($sql) === TRUE) {
  		header('location:../../view_dokter.php');
	} else {
  		echo "Error: " . $sql . "<br>" . $connect->error;
	}

	$connect->close();
?>