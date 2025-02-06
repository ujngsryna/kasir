<?php
$host = "localhost";
$user = "root"; // Ganti sesuai database Anda
$pass = "";
$dbname = "kasir_db"; // Sesuaikan nama database

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
