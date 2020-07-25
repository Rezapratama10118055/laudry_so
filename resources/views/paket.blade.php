@extends('layout/main')

@section('title','paket')


@section('container')

<div style="margin-left: 300px; width: calc(100% - 300px);">
<div class="col-md-12 p-5 pt-2">
   <h3><i class="fas fa-money-bill-wave mr-2"></i>Paket</h3><hr>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Harga/Kg</th>
      <th colspan="3" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>

    @foreach($paket as $User)

    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $User->Jenis }}</td>
      <td>{{ $User->Harga}}</td>
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded "></i></td>
         <td><i class="fas fa-trash bg-danger p-2 text-white rounded"></i></td>

    </tr>
    @endforeach



  </tbody>
</table>

</div>
</div>












@endsection