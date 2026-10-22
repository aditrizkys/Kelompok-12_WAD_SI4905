
<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Supplier</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <!-- CSS sendiri -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Pengelolaan Supplier</h2>
        <p class="text-muted">Kelola profil supplier</p>

        <div class="card">
            <div class="card-header">
                <h5 class="mb-1">Profil Supplier</h5>
            </div>

            <div class="card-body">

                <!-- Kode supplier dan nama perusahaan -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Kode Supplier</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <!-- Email dan nomor telepon -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control"
                        placeholder="supplier@email.com">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control"
                        placeholder="08xxxxxxxxxx">
                    </div>
                </div>

                <!-- Alamat kantor -->
                <div class="mb-3">
                    <label class="form-label">Alamat Kantor</label>
                    <textarea class="form-control" rows="3"
                    placeholder="Masukkan alamat lengkap kantor"></textarea>
                </div>

                <!-- Kota, provinsi, dan kode pos -->
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kota</label>
                        <input type="text" class="form-control"
                        placeholder="Contoh: Bandung">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Provinsi</label>
                        <input type="text" class="form-control"
                        placeholder="Contoh: Jawa Barat">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kode Pos</label>
                        <input type="text" class="form-control"
                        placeholder="40123">
                    </div>
                </div>

                <!-- Tombol simpan -->
                <div class="text-end">
                    <button type="button" class="btn btn-primary">
                        Simpan
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
