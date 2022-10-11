<?php
    session_start();
    if (isset($_SESSION['user'])) {
        echo '<script>window.location.replace("./user.html");</script>';
    } else {

        $admin = "admin";
        $passmin = "admin";

        $user = "user";
        $password = "user";

        if(isset($_POST['user']) && isset($_POST['password'])) {


            if($_POST['user'] == $admin && $_POST['password'] == $passmin) {
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['password'] = $_POST['password'];
                echo '<meta http-equiv="refresh" content="2; url=./admin.php"/>';
                echo "<center><h1>Login Berhasil, dialihkan ke halaman Administrator</h1></center>";

            } else if($_POST['user'] == $user && $_POST['password'] == $password) {
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['password'] = $_POST['password'];
                echo '<meta http-equiv="refresh" content="2; url=./user.html"/>';
                echo "<center><h1>Login Berhasil</h1></center>";

            } elseif($_POST['user'] != $user && $_POST['password'] == $password) {
                echo "<center><h1>Gagal!, Email Salah</h1></center>";

            } elseif($_POST['user'] == $user && $_POST['password'] != $password) {
                echo "<center><h1>Gagal!, Password Salah</h1></center>";
                
            } elseif($_POST['user'] != $user && $_POST['password'] != $password) {
                echo "<center><h1>Gagal!, Email & Password Salah</h1></center>";
            } 
        } else {
            echo "<center><h1>Gagal!, jangan biarkan email & password kosong</h1></center>";
        }
    }
?>