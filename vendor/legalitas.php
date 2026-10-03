<php?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>legalitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
</head>
<body>
  <div class="container">

        <h2>Profil Supplier</h2>

        <form>

            <h3>Data Perusahaan</h3>

            <label for="kode">Kode Supplier:</label>
            <input type="text" id="kode" name="kode">
            <br><br>

            <label for="nama">Nama Perusahaan:</label>
            <input type="text" id="nama" name="nama">
            <br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <br><br>

            <label for="telepon">Nomor Telepon:</label>
            <input type="text" id="telepon" name="telepon">
            <br><br>


            <h3>Alamat Kantor</h3>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"></textarea>
            <br><br>

            <label for="kota">Kota:</label>
            <input type="text" id="kota" name="kota">
            <br><br>

            <label for="provinsi">Provinsi:</label>
            <input type="text" id="provinsi" name="provinsi">
            <br><br>

            <label for="kodepos">Kode Pos:</label>
            <input type="text" id="kodepos" name="kodepos">
            <br><br>


            <button type="button">Simpan</button>

        </form>

    </div>


</body>

</html>
?>