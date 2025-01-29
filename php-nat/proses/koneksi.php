<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username database kamu
$password = "";     // Ganti dengan password database kamu
$dbname = "coba-nat"; // Nama database

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
