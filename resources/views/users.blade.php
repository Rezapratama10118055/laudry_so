@extends('layout/main')

@section('title','Manajemen User')


@section('container')

<div class="row">
<div class="col-md-12 p-5 pt-2">
  <div class="panel panel-primary">
    <div class="panel-body">
   <h3><i class="fas fa-user mr-2"></i>Manajemen User</h3><hr>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Status</th>
      <th colspan="3" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $u)
    <tr>
      <th scope="row">{{$u->id_user}}</th>
      <td>{{$u->nama_user}}</td>
      <td>{{$u->jabatan}}</td>
      <td>{{$u->status_aktif}}</td>
    
        <td><a href="" class="btn btn-primary">Detail</a></td>
          <td><a href="users/edit"><i class="fas fa-edit bg-warning p-2 text-white rounded "></i></a></td>
         <td><a href="users/hapus/{{$u->id_user}}"><i class="fas fa-trash bg-danger p-2 text-white rounded"></i></a></td>

    </tr>
@endforeach

  </tbody>
</table>
</div>
<div class="panel-footer">
  <div class="row">
<div class="col-md-6">
  {{$users->links()}}
</div>
</div>

  </div>
</div>
</div>
</div>

@endsection