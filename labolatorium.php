<?php 
require_once 'config/database.php';
include 'includes/header.php'; 
$result = $conn->query("SELECT * FROM laboratorium ORDER BY id ASC");
?>
<h2 style="margin-bottom: 20px;">Daftar Pusat Riset & Laboratorium</h2>
<?php while($row = $result->fetch_assoc()): ?>
    <div class="card">
        <h3><?= htmlspecialchars($row['nama_lab']); ?></h3>
        <span style="color: #b5122b; font-weight: bold; font-size: 14px;"><?= htmlspecialchars($row['fakultas']); ?></span>
        <p style="margin-top: 10px; color: #555;"><?= htmlspecialchars($row['deskripsi']); ?></p>
    </div>
<?php endwhile; ?>
<?php include 'includes/footer.php'; ?>
c