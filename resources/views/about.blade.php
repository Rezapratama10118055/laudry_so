@extends('layout/main')

@section('title','menejemenUser')


@section('container')



 <script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = "ta/hapus/id";
         url = url.replace('id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }

  </script>

<div style="margin-left: 300px; width: calc(100% - 300px);">
  

<div class="col-md-12  p-5 pt-2" >
   <h3><i class="fas fa-user mr-2"></i>Manejemen User</h3><hr>
   <a href="javascript:;" data-toggle="modal" data-target="#CreateModal" class="btn btn-primary mr-3"><i class= "fas fa-plus mr-2"></i></i>TAMBAH USER</a>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Email</th>
      <th colspan="3" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>

@foreach($user as $row => $val)

    <tr class="data-row">
      <th scope="row">{{ $row+1 }}</th>
      <td>{{ $val->name }}</td>
      <td>{{ $val->role }}</td>
      <td>{{ $val->email }}</td>
    
        <td><a href="" class="btn btn-primary">Detail</a></td>
        <td><a href="#" class="fas fa-edit bg-warning p-2 text-white rounded edit-modal-click" data-id="{{$val->id}}"></i></td>
        <td><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$val->id}})" data-target="#DeleteModal"  class="fas fa-trash bg-danger p-2 text-white rounded"></a></td>

    </tr>



    @endforeach

  </tbody>
</table>

</div>
</div>
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="get">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('GET') }}
                 <p class="text-center">Anda Yakin Ingin Menghapus User Ini? ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>

<div class="modal fade" id="CreateModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
            <form action="/ta/store" method="post">
              @csrf
                <div class="form-group">
                  <label>Nama</label>
                    <input type="text" name="nama" class="form-control">      
                  </div>

                 <div class="form-group">
                  <label>Email</label>
            <input type="email" name="email" class="form-control">      
          </div>
          <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control"> 
          </div>
          <div class="modal-footer">  
        <button type="submit" class="btn btn-success" data-dissmis="modal">Tambah</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="EditModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
            <form action="/ta/update" method="post">
              @csrf
              <div class="form-group">
                    <input type="hidden" name="id" id="edit-id" class="form-control">      
                  </div>

                <div class="form-group">
                  <label>Nama</label>
                    <input type="text" name="nama" id="edit-nama" class="form-control">      
                  </div>

                 <div class="form-group">
                  <label>Email</label>
            <input type="email" name="email" id="edit-email" class="form-control">      
          </div>
          <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control"> 
          </div>
          <div class="modal-footer">  
        <button type="submit" class="btn btn-success" data-dissmis="modal">Tambah</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
  $(document).on("click", ".edit-modal-click", function () {
    var id = $(this).attr('data-id');
    var rowCells = $(this).closest("tr").children(); 
    var nama = rowCells.eq( 1 ).text();
    var email = rowCells.eq(3).text();
     $("#edit-id").val(id);
     $("#edit-nama").val(nama);
     $("#edit-email").val(email);   
     $('#EditModal').modal('show');
    });
</script>





@endsection