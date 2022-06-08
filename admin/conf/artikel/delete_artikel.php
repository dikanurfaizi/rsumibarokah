<?php
	include('../conn.php');

	$kd=$_GET['id'];
	$sql1 = "DELETE FROM artikel WHERE kd='".$kd."'";
	$sql2 = "SELECT * FROM artikel WHERE kd='".$kd."'";

	$hasil = mysqli_query($connect,$sql2);
	while($row = mysqli_fetch_array($hasil)){
		if ($connect->query($sql1) === TRUE) {
			header('location:../../view_artikel.php');
			// menghapus gambar di folder
			unlink("../../../images/articles/".$row['nm_gbr']."");
		} else {
			echo "Error: " . $sql . "<br>" . $connect->error;
		}
	}

	$connect->close();
?>