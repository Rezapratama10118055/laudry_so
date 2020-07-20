<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link href="{{{ asset('fontawesome/css/all.min.css') }}}" rel="stylesheet">
     <link href="{{{ asset('login.css') }}}" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
    

    <div class="container">
      <h4 class="text-center text-danger">FORM LOGIN</h4>
      <hr>

      <form method="route" action="{{url('/ds')}}">
     <div class="form-group  text-danger"> 
<label >Username</label>

<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-users"></i></div>

  </div>
<input type="text" name="" class="form-control" placeholder="Masukkan Username anda">
</div>
     </div>

      <div class="form-group text-danger"> 
<label>Password</label>


<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-lock"></i></div>
 </div>
<input type="text" name="" class="form-control" placeholder="Masukkan Password anda">
    
   </div>
 </div>


    <button type="submit" class="btn btn-primary mt-2">SUBMIT</button>
<button type="reset" class="btn btn-danger mt-2">RESET</button>

 


      </form>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>