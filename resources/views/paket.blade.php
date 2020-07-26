@extends('layout/main')

@section('title','paket')


@section('container')

<div style="margin-left: 300px; width: calc(100% - 300px);">
<div class="col-md-12 p-5 pt-2">
   <h3><i class="fas fa-money-bill-wave mr-2"></i>Paket</h3><hr>
   <a href="javascript:;" data-toggle="modal" data-target="#CreateModal" class="btn btn-primary mr-3"><i class= "fas fa-plus mr-2"></i></i>Tambah Data</a>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Harga</th>
      <th scope="col">Satuan</th>
      <th colspan="2" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>

    @foreach($paket as $User => $val)

    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $val->jenis }}</td>
      <td>{{ $val->harga}}</td>
      <td>{{ $val->satuan}}</td>
        
          <td><a href="#" class="fas fa-edit bg-warning p-2 text-white rounded edit-modal-click" data-id="{{$val->id}}"></a></td>
         <td><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$val->id}})" data-target="#DeleteModal" class="fas fa-trash bg-danger p-2 text-white rounded"></td>

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
                 <p class="text-center">Are You Sure Want To Delete ?</p>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Paket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
            <form action="/pak/store" method="post">
              @csrf
                <div class="form-group">
                  <label>Nama Paket</label>
                    <input type="text" name="nama" class="form-control">      
                  </div>

                 <div class="form-group">
                  <label>Harga</label>
            <input type="number" min="0" name="harga" class="form-control">      
          </div>
          <div class="form-group">
                  <label>Satuan Laundry</label>
            <select class="form-control form-control-sm" name="satuan">
              <option selected disabled value="">-- Please Select --</option>
              <option value="kg">Kg</option>
              <option value="pcs">Satuan</option>
            </select>  
          </div>
          <div class="modal-footer">  
        <button type="submit" class="btn btn-success" data-dissmis="modal">Simpan</button>
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
            <form action="/pak/update" method="post">
              @csrf
              <div class="form-group">
                    <input type="hidden" name="id" id="edit-id" class="form-control">      
                  </div>

                <div class="form-group">
                  <label>Nama layanan</label>
                    <input type="text" name="enama" id="edit-nama" class="form-control">      
                  </div>

                 <div class="form-group">
                  <label>Harga</label>
            <input type="number" name="eharga" id="edit-harga" class="form-control">      
          </div>
          <div class="form-group">
                  <label>Satuan Laundry</label>
            <select class="form-control form-control-sm" name="esatuan" id="edit-satuan">
              <option selected disabled value="">-- Please Select --</option>
              <option value="kg">Kg</option>
              <option value="pcs">Satuan</option>
            </select>  
          </div>
          <div class="modal-footer">  
        <button type="submit" class="btn btn-success" data-dissmis="modal">Simpan</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('js')
<script type="text/javascript">
  $(document).on("click", ".edit-modal-click", function () {
    var id = $(this).attr('data-id');
    var rowCells = $(this).closest("tr").children(); 
    var nama = rowCells.eq(1).text();
    var harga = rowCells.eq(2).text();
    var sat = rowCells.eq(3).text();
     $("#edit-id").val(id);
     $("#edit-nama").val(nama);
     $("#edit-harga").val(harga);   
     $("#edit-satuan").val(sat);   
     $('#EditModal').modal('show');
    });

     function deleteData(id)
     {
         var id = id;
         var url = "pak/hapus/id";
         url = url.replace('id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }

     
  </script>
@endsection