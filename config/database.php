<?php
// Konfigurasi Database bawaan Laragon (root tanpa password)
$host = 'localhost';
$user = 'root';
$password = ''; 
$database = 'telkom_innovation_109062500130';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($host, $user, $password, $database);
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    exit('Koneksi basis data gagal: ' . $e->getMessage());
}
?>
