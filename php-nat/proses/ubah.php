<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
 
// update data ke database
mysqli_query($conn,"update user set nama='$nama', alamat='$alamat', no_telp='$no_telp' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>