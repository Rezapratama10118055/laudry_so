@extends('layout/main')

@section('title','dashboard')


@section('container')
  <div style="margin-left: 300px; width: calc(100% - 300px);">
  <div class="col-md-12 p-5 pt-2">
    <h3><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h3><hr>
<div class="row text-white"> 
  <div class="card bg-info ml-3" style="width: 18rem;">
   <div class="card-body">
    <div class="card-body-icon">
      <i class="fas fa-users mr-2"></i>
    </div>
    <h5 class="card-title">JUMLAH CUSTOMER</h5>
    <div class="display-4">3</div>
  <a href=""><p class="card-text text-white">Lihat Detail
    <i class="fas fa-angle-double-right ml-2"></i></p></a>
  </div>
  </div>



    
     <div class="card bg-success ml-5" style="width: 18rem;">
   <div class="card-body">
    <div class="card-body-icon">
    <i class="fas fa-cart-arrow-down mr-2"></i>
    </div>
    <h5 class="card-title">NEW ORDERAN</h5>
    <div class="display-4">5</div>
  <a href=""><p class="card-text text-white">Lihat Detail
    <i class="fas fa-angle-double-right ml-2"></i></p></a>
  
  </div>
</div>


<div class="card bg-danger ml-5" style="width: 18rem;">
   <div class="card-body">
    <div class="card-body-icon">
  <i class="fas fa-book mr-2"></i>
    </div>
    <h5 class="card-title">TOTAL ORDERAN</h5>
    <div class="display-4">20</div>
  <a href=""><p class="card-text text-white">Lihat Detail
    <i class="fas fa-angle-double-right ml-2"></i></p></a>
  
  </div>
</div>


<div class="col-md-12 p-5 pt-2">
  

<a href="" class="btn btn-primary mr-3"><i class= "fas fa-plus mr-2"></i></i>TAMBAH ORDERAN</a>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Transaksi</th>
      <th scope="col">Cutomer</th>
      <th scope="col">Paket</th>
      <th scope="col">Total</th>
      <th colspan="3" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>13-02-2025</td>
      <td>REZA PRATAMA</td>
      <td>Basah</td>
       <td>15.000</td>
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded "></i></td>
         <td> <i class="fas fa-trash bg-danger p-2 text-white rounded"></i></td>

    </tr>
   <hr>
<tr>
      <th scope="row">2</th>
      <td>12-03-1981</td>
      <td>angsa</td>
      <td>cuci+kering</td>
       <td>25.000</td>
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded "></i></td>
         <td> <i class="fas fa-trash bg-danger p-2 text-white rounded"></i></td>

    </tr>

<tr>
      <th scope="row">3</th>
      <td>01-09-2000</td>
      <td>mengkatak</td>
      <td>paket hemat</td>
       <td>10.000</td>
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded ">
          </i></td>
         <td> <i class="fas fa-trash bg-danger p-2 text-white rounded"></i></td>

    </tr>

  </tbody>
</table>




</div>




  </div>
</div>
</div>
  </div>  
   
      
 
@endsection


