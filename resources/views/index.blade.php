@extends('layout.layout')
@section('container')
<body>

<div class="container-fluid min-vh-100">
    <nav class="navbar navbar-light bg-light navbar-sm fixed-top">
        <div class="container">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand" href="#"><img src="{{url('img/itsupport-2.png')}}" alt="" class="image-fluid"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}"><i class="bi bi-grid-3x3-gap-fill"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/reportSetoran')}}"><i class="bi bi-grid-3x3-gap-fill"></i> Report setoran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-grid-3x3-gap-fill"></i> Inventory Kertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-grid-3x3-gap-fill"></i> Set Stok Kertas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="content">
                <form id="dataform">
                    @csrf
                    <h2 class="alert alert-primary text-center mt-3 " id="Judul-H2">Form Laporan Setor Tunai</h2>
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
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Pilih Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" multiple>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" onclick="sendData()" class="btn btn-primary" id="d1">POSTING</button>
                        <button class="btn btn-primary d-none" type="button" id="d2" disabled>
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            <span role="status">Loading...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@push('js')
<script src="https://code.jquery.com/jquery-4.0.0-beta.min.js"></script>
<script>
    function sendData() {
        var form = new FormData($('#dataform')[0]);
        $('#d1').addClass('d-none');
        $('#d2').removeClass('d-none');
        $.ajax({
            type: 'POST',
            url: '{{url("postdata")}}',
            data: form,
            processData: false,
            contentType: false,
            success: function(response) {
                alert('data berhasil terkirim')
                $('#dataform')[0].reset();
                $('#d2').addClass('d-none');
                $('#d1').removeClass('d-none');
            },
            error: function(error) {
                alert('gagal terkirim')
                $('#d2').addClass('d-none');
                $('#d1').removeClass('d-none');
            }
        })
    }
</script>
@endpush

</body>
@endsection
