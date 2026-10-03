<php?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

$KS = $NP = $email = $NT = $AK = $kota = $prov = $pos "";
$KSErr = $NPErr = $emailErr = $NTErr = $AKErr = $kotaErr = $provErr = $posErr "";

if ($_SERVER["request_method"] == "post"){
    $KS = trim($_POST["kode supplier"]);
    if(empty($KS)){
        $KSErr = "kode supplier wajib di isi!"
    }
}

if ($_SERVER["request_method"] == "post"){
    $NP = trim($_POST["kode supplier"]);
    if(empty($NP)){
        $NPErr = "kode supplier wajib di isi!"
    }
}

if ($_SERVER["request_method"] == "post"){
    $email = trim($_POST["kode supplier"]);
    if(empty($email)){
        $emailErr = "kode supplier wajib di isi!"
    }
}

if ($_SERVER["request_method"] == "post"){
    $NT = trim($_POST["kode supplier"]);
    if(empty($NT)){
        $NTErr = "kode supplier wajib di isi!"
    }
}

if ($_SERVER["request_method"] == "post"){
    $AK = trim($_POST["kode supplier"]);
    if(empty($AK)){
        $AKErr = "kode supplier wajib di isi!"
    }
}

if ($_SERVER["request_method"] == "post"){
    $kota = trim($_POST["kode supplier"]);
    if(empty($kota)){
        $kotaErr = "kode supplier wajib di isi!"
    }
}

if ($_SERVER["request_method"] == "post"){
    $prov = trim($_POST["kode supplier"]);
    if(empty($prov)){
        $provErr = "kode supplier wajib di isi!"
    }
}

if ($_SERVER["request_method"] == "post"){
    $pos = trim($_POST["kode supplier"]);
    if(empty($pos)){
        $posErr = "kode supplier wajib di isi!"
    }
}

<body>
    <div class ="container mt-5">
        <h2>pengelolaan supplier</h2>
        <p class = "text-muted">kelola profil supplier</p>

        <div class = "card">
            <div class = "card-header">
                <h5 class = "mb-1">profil supplier</h5>
            </div>

            <div class = "card-body">
                <!-- untuk kode supplier & nama perusahaan-->
                <div class="row">
                    <!--kode supplier-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Kode Supplier</label>
                        <input type="text" class="form-control">
                    </div>
                    <!--Nama perusahaan-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control">
                    </div>
                <!--untuk email & nomor telepon-->
                <div class="row">
                    <!--email-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="supplier@email.com">
                    </div>
                    <!--nomor telepon-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" placeholder="08xxxxxxxxxx">
                    </div>
                <!--untuk alamat kantor-->   
                <div class = "mb-3">
                        <label class = "form-label">Alamat kantor</label>
                        <textarea 
                        class = "form-control"
                        rows = "3"
                        placeholder="Masukkan alamat lengkap kantor"></textarea>
                </div>
                <!--untuk kota, provinsi, dan kode pos-->    
                <div class="row">
                    <!--kota-->    
                     <div class="col-md-4 mb-3">
                        <label class="form-label">Kota</label>
                        <input type="text" class="form-control" placeholder="Contoh: Bandung">
                    </div>
                    <!--Provinsi-->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Provinsi</label>
                        <input type="text" class="form-control" placeholder="Contoh: Jawa Barat">
                    </div>
                    <!--Kode pos-->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" placeholder="40123">
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>

</div>

</div>
            </div>
        </div>
    </div>
</body>
</html>
?>