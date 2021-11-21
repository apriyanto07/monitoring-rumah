<?php
session_start();
include "koneksi.php";
include 'index.php';
 if(isset($_POST['input'])){
    $sql = mysqli_query($koneksi, "select * from user where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    }else{
        echo "<p align=center><b> Username dan Password salah ! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    }
}
 ?>