<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Simpan Data</title>
    </head>
    <body>
        <div class="bldy">
            <center><h2> Simpan Data </h2>
            <table>
                <form action="admin.php" method="post">
                    <tr><td></td><td><input type="text" name="no.unit" placeholder="no.unit" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="text" name="nama lokomotif" placeholder="nama lokomotif" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="text" name="jenis" placeholder="jenis" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="number" name="tahun beroperasi" placeholder="tahun beroperasi" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="float" name="cc" placeholder="cc" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="submit" name="submit" value="Simpan"></td></tr>
                </form>
            </table>
            </center>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['ok'])){
        if(empty($_POST['no. unit']) || empty($_POST['NIM'])){
            print "Lengkapi form";
        }else{
            $user = $_POST['user'];
            $NIM = $_POST['NIM'];
            $tanggal = date("h:i:s");
            $buka = fopen("hasil.html");
            fwrite($buka,"user : ${user} <br> ");
            fwrite($buka,"dibuat : ${tanggal} <br> ");
            fwrite($buka," NIM : ${NIM} <br> ");
            fwrite($buka,"<hr>");
            fclose($buka);
            print "data berhasil disimpan";
        }
    }
?>