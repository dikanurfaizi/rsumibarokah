<?php
	include('../conn.php');

	$kd=$_GET['id'];
	$sql1 = "DELETE FROM profil WHERE kd_profil='".$kd."'";
	$sql2 = "SELECT * FROM profil WHERE kd_profil='".$kd."'";

	$hasil = mysqli_query($connect,$sql2);
	while($row = mysqli_fetch_array($hasil)){
		if ($connect->query($sql1) === TRUE) {
			header('location:../../pages/profil/view_profil.php');
			// menghapus gambar di folder
			unlink("../../../images/profil/".$row['nm_foto']."");
		} else {
			echo "Error: " . $sql . "<br>" . $connect->error;
		}
	}

	$connect->close();
?>