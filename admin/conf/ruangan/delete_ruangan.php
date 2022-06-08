<?php
	include('../conn.php');

	$no=$_GET['id'];
	$sql1 = "DELETE FROM ruangan WHERE no='".$no."'";
	$sql2 = "SELECT * FROM ruangan WHERE no='".$no."'";

	$hasil = mysqli_query($connect,$sql2);
	while($row = mysqli_fetch_array($hasil)){
		if ($connect->query($sql1) === TRUE) {
			header('location:../../pages/ruangan/view_ruangan.php');
			// menghapus gambar di folder
			unlink("../../../images/ruangan/".$row['nm_foto']."");
		} else {
			echo "Error: " . $sql . "<br>" . $connect->error;
		}
	}

	$connect->close();
?>