@extends('layout.layout')
@section('container')
<body>
<div class="container min-vh-100 d-flex justify-content-center" >
<form id="dataform">
    @csrf
    <br><br><br>
    <div>
        <h2 class="alert alert-primary text-center mt-3 " id="Judul-H2">Form Laporan Setor Tunai</h2>
    </div>
        <div class="mb-3">
            <label for="namaKasir" class="form-label">Nama Kasir</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap">
        </div>
        <div class="mb-3">
            <label for="databaseToko" class="form-label">Nama Toko</label>
            <select class="form-select" id="kode_store" name="kode_store">
                <option selected disabled>Nama Toko</option>
                @foreach($getMt as $items)
                <option value="{{$items->id}}">{{$items->name_store}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="databaseToko" class="form-label">Shift</label>
            <select class="form-select" id="shift" name="shift">
                <option selected enabled>Shift</option>
                @foreach($getshift as $items)
                <option value="{{$items->id}}">{{$items->shift}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Setor</label>
            <input type="number" class="form-control" id="setor_tunai" name="setor_tunai" placeholder="Masukkan jumlah setor">
        </div>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="gambar" class="form-label">Pilih Gambar</label>
          <input type="file" class="form-control" id="gambar" name="gambar" multiple>
        </div>
        <div class="d-grid gap-2">
        <button type="button" onclick="sendData()" class="btn btn-primary" class="col">POSTING</button>
        </div>
    </form>
</div>
<br><br><br><br>
@push('js')
<script src="https://code.jquery.com/jquery-4.0.0-beta.min.js">
</script>
<script>
    function sendData(){
    var form = new FormData($('#dataform')[0]);
        $.ajax({
            type : 'POST',
            url  :  '{{url("postdata")}}',
            data : form,
            processData : false,
            contentType : false,
            success : function(response){
                alert('data berhasil terkirim')
            },
            error : function(error){
                alert('gagal terkirim')
            }
        })
    }
</script>
@endpush
</body>

@endsection