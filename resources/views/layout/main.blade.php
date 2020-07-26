<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       <link href="{{{ asset('fontawesome/css/all.min.css') }}}" rel="stylesheet">
       <style type="text/css">
         html{
          width: 100%;
          height: 100%;
         }
         body{
          width: 100%;
          height: 100%;
         }
       </style>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


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
        <a href="{{url('/a')}}" ><i class="fas fa-envelope mr-3 text-dark " data-toggle= "tooltip" title="Surat Masuk"></i></a>
        <a href="{{url('/ab')}}"> <i class="fas fa-bell mr-3 text-dark" data-toggle= "tooltip" title="Notifikasi"></i></a>
        <!-- <a href="{{url('/')}}"><i class="fas fa-sign-in-alt mr-3 text-dark" data-toggle= "tooltip" title="Sing Out"></i></a> -->
        <a  href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fas fa-bell mr-3 text-dark "></i>
                 
                </a>
      </h5>
  </div>
</nav>

<div class=" no-gutters mt-5">
  <div class=" bg-dark mt-2 pr-3 pt-4" style="height: 100%;position: fixed; width: 300px;overflow-x: hidden;">
    <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
    <a class="nav-link active text-white" href="{{url('/home')}}"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
  </li>
  @if(Auth::user()->role == 'admin')  
  <li class="nav-item">
    <a class="nav-link text-white" href="{{url('/ta')}}"><i class="fas fa-user mr-2"></i>Menejemen User</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="{{url('/trs')}}"><i class="fas fa-money-bill-wave mr-2"></i>Transaksi</a><hr class="bg-secondary">
  </li>
   <li class="nav-item">
    <a class="nav-link text-white" href="{{url('/pak')}}"><i class="fas fa-paperclip mr-2"></i>Layanan </a><hr class="bg-secondary">
  </li>
   <li class="nav-item">
    <a class="nav-link text-white" href="{{url('/lap')}}"><i class="fas fa-book mr-2"></i>Laporan</a>
  </li>
  @endif
</ul>

</div>
@yield('container')

</div>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div>
      </div>
    </div>
  </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="{{url('asset/SweetAlert/sweetalert2.all.min.js')}}"></script>
@yield('js')


  </body>
</html>