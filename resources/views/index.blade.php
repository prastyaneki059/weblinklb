@extends('layout.layout')
@section('container')
<body>
<div class="container min-vh-100 d-flex justify-content-center" >
<form>
    <div>
        <h2 class="alert alert-primary text-center mt-3">Form Laporan Setor Tunai</h2>
    </div>
        <div class="mb-3">
            <label for="namaKasir" class="form-label">Nama Kasir</label>
            <input type="text" class="form-control" id="namaKasir" placeholder="Masukkan nama lengkap">
        </div>
        <div class="mb-3">
            <label for="databaseToko" class="form-label">Nama Toko</label>
            <select class="form-select" id="Nama Toko">
                <option selected disabled>Nama Toko</option>
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
        <div class="custom-file" >
            <input type="file" class="cuotom-file-input" id="custom-file" multiple>
            <label for="customfile" class="custom-file-label">Pilih File</label> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>

@endsection