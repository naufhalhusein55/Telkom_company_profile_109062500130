<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $pesan = trim($_POST['pesan']);

    if (!empty($nama) && !empty($pesan) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Menggunakan Prepared Statement untuk Keamanan SQL Injection
        $stmt = $conn->prepare("INSERT INTO pesan_kontak (nama, email, pesan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $pesan);
        $stmt->execute();
        
        header("Location: kontak.php?status=sukses");
        exit();
    } else {
        exit("Validasi input gagal. Silakan periksa kembali formulir Anda.");
    }
} else {
    header("Location: kontak.php");
    exit();
}
?>
