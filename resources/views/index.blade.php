<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap -->
    <title>LASKAR BUAH INDONESIA</title>
    <link rel="stylesheet" href="public/style.css">
    <link rel="shortcut icon" href="{{url('img/LOGO_LBI.png')}}" type="image/x-icon">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
    <img src="{{url('img/LOGO_LBI.png')}}" alt="" width="30" height="30" class="d-inline-block align-text-top">
</a>
  <p id="judul"></p>
        </div>
    </nav>
    <h2 class="alert alert-primary text-center mt-3">Form Laporan Setor Tunai</h2>
    <form>
        <div class="mb-3">
            <label for="namaKasir" class="form-label">Nama Kasir</label>
            <input type="text" class="form-control" id="namaKasir" placeholder="Masgitukkan nama kasir">
        </div>
        <div class="mb-3">
            <label for="databaseToko" class="form-label">Database Toko</label>
            <select class="form-select" id="databaseToko">
                <option selected disabled>Pilih database toko...</option>
                <option value="db1">jiwan</option>
                <option value="db2">Mayangrejo</option>
                <option value="db3">Pungpungan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="databaseToko" class="form-label">Shift</label>
            <select class="form-select" id="databaseToko">
                <option selected enabled>Shift</option>
                <option value="db1">Shift 1 Kasir 1</option>
                <option value="db2">Shift 1 Kasir 2</option>
                <option value="db3">Shift 2 Kasir 1</option>
                <option value="db3">Shift 2 Kasir 2</option>
                <option value="db3">Shift 3 Kasir 1</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Setor</label>
            <input type="number" class="form-control" id="jumlah" placeholder="Masukkan jumlah setor">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
