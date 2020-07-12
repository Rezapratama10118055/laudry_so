@extends('layout/main')

@section('title','transaksi')


@section('container')

<div class="row">
<div class="col-md-12 p-5 pt-2">
   <h3><i class="fas fa-money-bill-wave mr-2"></i>Transaksi</h3><hr>
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
    <tr>
      <th scope="row">1</th>
      <td>reza</td>
      <td>bos besar</td>
      <td>aktif</td>
    
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded "></i></td>
         <td> <i class="fas fa-trash bg-danger p-2 text-white rounded"></i></td>

    </tr>
   <hr>
<tr>
      <th scope="row">2</th>
      <td>odol</td>
      <td>tukang kemas</td>
      <td>aktif</td>
     
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded "></i></td>
         <td> <i class="fas fa-trash bg-danger p-2 text-white rounded"></i></td>

    </tr>

<tr>
      <th scope="row">3</th>
      <td>tupai</td>
      <td>tukang cuci</td>
      <td>libur</td>
    
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded ">
          </i></td>
         <td> <i class="fas fa-trash bg-danger p-2 text-white rounded"></i></td>

    </tr>

  </tbody>
</table>

</div>
</div>












@endsection