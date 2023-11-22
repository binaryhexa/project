<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Buat koneksi ke database (ganti tempat-tempat penampung dengan kredensial database sebenarnya)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'messages';

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Dapatkan konten pesan dari formulir
$content = $_POST['message_content'];

// Masukkan pesan ke dalam database
$sql = "INSERT INTO messages (content) VALUES ('$content')";

if ($conn->query($sql) === TRUE) {
    // Pesan berhasil ditambahkan
    echo "<script>alert('Pesan berhasil dikirim!');</script>";
} else {
    // Ada kesalahan
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
