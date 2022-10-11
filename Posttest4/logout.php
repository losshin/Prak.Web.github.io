<?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <center><h2>Berhasil Logout</h2></center>
    <?php
} else {
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <?php
    echo "mohon refresh kembali";
}
?>