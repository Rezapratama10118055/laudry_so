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
      <th scope="col">Tgl.Transaksi</th>
      <th scope="col">Costomer</th>
      <th scope="col">Paket</th>
      <th scope="col">Pembayaran</th>
      <th scope="col">Status Orderan</th>
      <th scope="col">Total</th>
      <th colspan="3" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>

    @foreach($transaksi as $User)

    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $User->TglTransaksi }}</td>
      <td>{{ $User->Costomer }}</td>
      <td>{{ $User->Paket }}</td>
      <td>{{ $User->Pembayaran }}</td>
      <td>{{ $User->StatusOrderan}}</td>
      <td>Rp.{{ $User->Total }}</td>
    
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