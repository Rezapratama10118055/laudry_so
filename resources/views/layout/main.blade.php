<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       <link href="{{{ asset('fontawesome/css/all.min.css') }}}" rel="stylesheet">
    


    <title>@yield('title')</title>
  </head>
  <body>

 <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="#">INILAUDRY</a>
  
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
    </form>
    <div class="icon ml-4">
      <h5>
        <i class="fas fa-envelope mr-3 " data-toggle= "tooltip" title="Surat Masuk"></i>
        <i class="fas fa-bell mr-3" data-toggle= "tooltip" title="Notifikasi"></i>
        <i class="fas fa-sign-in-alt mr-3" data-toggle= "tooltip" title="Sing Out"></i>
      </h5>
  </div>
</nav>

<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
    <a class="nav-link active text-white" href="/"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="/users"><i class="fas fa-user mr-2"></i>Menejemen User</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="/trs"><i class="fas fa-money-bill-wave mr-2"></i>Transaksi</a><hr class="bg-secondary">
  </li>
   <li class="nav-item">
    <a class="nav-link text-white" href=""><i class="fas fa-paperclip mr-2"></i>Paket Londry</a><hr class="bg-secondary">
  </li>
   <li class="nav-item">
    <a class="nav-link text-white" href=""><i class="fas fa-users mr-2"></i>Customer</a><hr class="bg-secondary">
  </li>
   <li class="nav-item">
    <a class="nav-link text-white" href=""><i class="fas fa-book mr-2"></i>Tipe Pembayaran</a>
  </li>
</ul>

</div>
@yield('container')

</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


  </body>
</html>