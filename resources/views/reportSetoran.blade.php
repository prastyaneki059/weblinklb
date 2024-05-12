@extends('layout.layout')
@section('container')
@push('css')
@endpush
<br><br><br><br><br>

<div class="row container">
    <div class="col-md-10 mx-auto ">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">nama</th>
                <th scope="col">store</th>
                <th scope="col">shift</th>
                <th scope="col">tanggal</th>
                <th scope="col">setoran</th>
                <th scope="col">gambar</th>
                <th scope="col">created at</th>
              </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->nama}}</td>
                <td>{{$data->kode_store}}</td>
                <td>{{$data->shift}}</td>
                <td>{{$data->tanggal}}</td>
                <td>{{$data->setor_tunai}}</td>
                <td><img src="{{'storage/'.$data->gambar}}" class="img-fluid" width="30px" alt=""></td>
                <td>{{$data->created_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $datas->links() }}
    </div>
</div>



@push('js')
@endpush
@endsection