<?php
include './koneksi.php';
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $sql = "INSERT INTO user (nama, alamat, no_telp) VALUES ('$nama', '$alamat', '$no_telp')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../index.php");
    } else {    
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
