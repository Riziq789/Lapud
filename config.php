<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "kasir_makanan";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>