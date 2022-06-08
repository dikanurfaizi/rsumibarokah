<?php
	include('../conn.php');

	$kd=$_GET['id'];
	$sql1 = "DELETE FROM pelayanan WHERE kd_pel='".$kd."'";
	$sql2 = "SELECT * FROM pelayanan WHERE kd_pel='".$kd."'";

	$hasil = mysqli_query($connect,$sql2);
	while($row = mysqli_fetch_array($hasil)){
		if ($connect->query($sql1) === TRUE) {
			header('location:../../pages/pelayanan/view_pelayanan.php');
			// menghapus gambar di folder
			unlink("../../../images/pelayanan/".$row['nm_foto']."");
		} else {
			echo "Error: " . $sql . "<br>" . $connect->error;
		}
	}

	$connect->close();
?>