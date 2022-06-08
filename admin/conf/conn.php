<?php 
	//opsi pertama
	//$connect = mysqli_connect("localhost","root","","sirs");

	//check connection
	//if(mysqli_connect_error()){
	//	echo "koneksi database gagal : ".mysqli_connect_error();
	//}

	//opsi kedua
	// $connect = mysqli_connect("localhost","root","","sirs");

	//check connection
	// mysqli_select_db($connect,"sirs") or die ("Gagal terhubung ke database")

	//opsi ketiga
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sirs";

	// Create connection
	$connect = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($connect->connect_error) {
  	die("Connection failed: " . $connect->connect_error);
	} 
?>

