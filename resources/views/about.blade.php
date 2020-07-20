@extends('layout/main')

@section('title','menejemenUser')


@section('container')

<div class="row">
<div class="col-md-12 p-5 pt-2">
   <h3><i class="fas fa-user mr-2"></i>Manejemen User</h3><hr>
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

@foreach($manejemen as $User)

    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $User->Nama }}</td>
      <td>{{ $User->Jabatan }}</td>
      <td>{{ $User->Status }}</td>
    
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded "></i></td>
         <td> <i class="fas fa-trash bg-danger p-2 text-white rounded"></i></td>

    </tr>
   <hr>



    @endforeach

  </tbody>
</table>

</div>
</div>












@endsection