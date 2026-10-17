<?php
require 'koneksi.php';
require 'armadaModel.php';
require 'armadaController.php';
require_once 'index.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
    <title>Modul Armada Operasional</title>
</head>
<body>

<!-- Sidebar -->

</div>
<nav class="main-menu">
<div class="logo"></div>
<div class="scrollbar" id="style-1">
      
<ul>
  
<li>                                   
<a href="index.php">
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Armada</span>
</a>
</li>   
   
<li>
<a href="index.php"></a>                               
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Tambah</span>
</a>
</li>
</ul>
    

</nav>


    <div class="card container border-0 shadow-sm rounded-4 p-4 justify-content-center">
        <div class="p-3"></div>
        <div class="p-3 flex-fill bg-light">
    <h3 class="mb-3">Inventaris Armada</h3>

    <!-- Input Search -->
    <div class="mb-3">
      <input type="text" id="searchInput" class="form-control" placeholder="Cari ...">
    </div>

    <!-- Tabel -->
    <table class="table table-hover table-bordered">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama Kendaraan</th>
          <th>Nomor Seri</th>
          <th>Nomor Dokumen Perawatan</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <?php if (!empty($armadaList)): ?>
          <?php foreach ($armadaList as $index => $armada): ?>
            <tr>
              <td><?= $index + 1 ?></td>
              <td><?= htmlspecialchars($armada['jenis_kendaraan'] ?? '') ?></td>
              <td><?= htmlspecialchars($armada['nomor_seri'] ?? '') ?></td>
              <td><?= htmlspecialchars($armada['nomor_dokumen_perawatan'] ?? '') ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="text-center">Tidak ada data armada.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

    <!-- Pagination -->
    <nav class="pagination" style="margin-top: 20px;">
        <!-- Tombol Previous -->
        <?php if ($page > 1): ?>
            <a href="index.php?page=<?= $page - 1 ?>" style="padding: 5px 10px; border: 1px solid #ccc; margin-right: 5px; text-decoration: none;">&laquo; Previous</a>
        <?php endif; ?>

        <!-- Tombol Nomor Halaman -->
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="index.php?page=<?= $i ?>" style="padding: 5px 10px; border: 1px solid #ccc; margin-right: 5px; text-decoration: none; <?= ($i == $page) ? 'background-color: #007bff; color: white;' : '' ?>">
                <?= $i ?>
            </a>
        <?php endfor; ?>

        <!-- Tombol Next -->
        <?php if ($page < $totalPages): ?>
            <a href="index.php?page=<?= $page + 1 ?>" style="padding: 5px 10px; border: 1px solid #ccc; text-decoration: none;">Next &raquo;</a>
        <?php endif; ?>
    </nav>
  
    </div>
</div>
</div>
</div>
</body>
</html>
?>