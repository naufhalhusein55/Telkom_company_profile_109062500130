<?php include 'includes/header.php'; ?>
<h2>Formulir Hubungi Kami</h2>
<?php if(isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
    <div style="background: #e6f4ea; color: #137333; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
        Pesan inovasi Anda berhasil disimpan ke dalam basis data!
    </div>
<?php endif; ?>

<form action="kontak_proses.php" method="POST" class="card">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required placeholder="Masukkan nama Anda">
    </div>
    <div class="form-group">
        <label for="email">Alamat Email</label>
        <input type="email" id="email" name="email" required placeholder="nama@student.telkomuniversity.ac.id">
    </div>
    <div class="form-group">
        <label for="pesan">Pesan / Ide Riset</label>
        <textarea id="pesan" name="pesan" rows="5" required placeholder="Tuliskan pesan atau proposal riset singkat Anda..."></textarea>
    </div>
    <button type="submit" class="btn">Kirim Pesan</button>
</form>
<?php include 'includes/footer.php'; ?>
