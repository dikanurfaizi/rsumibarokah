<?php

    include "../../conf/conn.php";

    // mengambil isian dari form login
    $username = $_POST['email'];
    $password = $_POST['sandi'];

    $hasil = mysqli_query($connect,"SELECT * FROM admin WHERE username='$username'");
    while($row=mysqli_fetch_array($hasil)){
        
        // variable pendefinisian kredensial
        $usernamelogin=$row['username'];
        $passwordlogin=$row['password'];
        $namalogin=$row['nama'];
        $fotologin=$row['foto'];

    }
        // memulai session
        session_start();


        // pengecekan kredensial login
        if ($username == $usernamelogin && $password == $passwordlogin) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $namalogin;
            $_SESSION['foto'] = $fotologin;
            header("Location: ../.utama/home.php");
        } 
        else {
            header("Location: login.php");
        }
    $connect->close();
?>