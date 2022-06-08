<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: pages/.session/login.php");
    }else{
    	header("Location: pages/home.php");
    }
?>