<?php 
	$connect = mysqli_connect("localhost","root","","sirs");

	//check connection
	if(mysqli_connect_error()){
		echo "koneksi database gagal : ".mysqli_connect_error();
	}
?>