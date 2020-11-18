<?php
$connect=mysqli_connect("localhost","root","","db_siswa");

if(!$connect){
    echo "Koneksi Gagal";
    die();
}
?>