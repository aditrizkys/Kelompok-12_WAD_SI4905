<?php
$koneksi = mysqli_connect("localhost", "root", "", "vendor");
if(!$koneksi){
    die("koneksi database gagal: " . mysqli_connect_error());
}
?>