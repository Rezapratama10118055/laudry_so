@extends('layout/main')

@section('title','transaksi')


@section('container')

 <script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = "trs/hapus/id";
         url = url.replace('id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>

<div style="margin-left: 300px; width: calc(100% - 300px);">
<div class="col-md-12 p-5 pt-2">
   <h3><i class="fas fa-money-bill-wave mr-2"></i>Transaksi</h3><hr>
     <a href="javascript:;" data-toggle="modal" data-target="#CreateModal" class="btn btn-primary mr-3"><i class= "fas fa-plus mr-2"></i></i>Tambah Data</a>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tgl.Transaksi</th>
      <th scope="col">Customer</th>
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
      <td>{{ $User->Customer }}</td>
      <td>{{ $User->Paket }}</td>
      <td>{{ $User->Pembayaran }}</td>
      <td>{{ $User->StatusOrderan}}</td>
      <td>Rp.{{ $User->Total }}</td>
    
        <td><a href="" class="btn btn-primary">Detail</td>
          <td><i class="fas fa-edit bg-warning p-2 text-white rounded "></i></td>
         <td><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$User->id}})" data-target="#DeleteModal" class="fas fa-trash bg-danger p-2 text-white rounded"></td>

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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
            <form action="/trs/store" method="POST">
              @csrf
                <div class="form-group">
                  <label>Tanggal</label>
                    <input type="date" name="Tanggal" class="form-control">      
                  </div>

                 <div class="form-group">
                  <label>Costumer</label>
            <input type="text" min="0" name="Costumer" class="form-control">      
          </div>
          <div class="form-group">
                  <label>Paket</label>
            <select class="form-control form-control-sm" name="paket">
              <option selected disabled value="">-- Please Select --</option>
              <option value="Paket hemat">Paket hemat</option>
              <option value="Paket ekonomis">Paket ekonomis</option>
              <option value="Paket super">Paket super</option>
            </select>  
             </div>
           <div class="form-group">
                  <label>Pembayaran</label>
            <select class="form-control form-control-sm" name="Pembayaran">
              <option selected disabled value="">-- Please Select --</option>
              <option value="Lunas">Lunas</option>
              <option value="Belum Lunas">Belum Lunas</option>
            </select>  
             </div>
          <div class="form-group">
                  <label>Status Orderan</label>
            <select class="form-control form-control-sm" name="StatusOrderan">
              <option selected disabled value="">-- Please Select --</option>
              <option value="Baru">Baru</option>
              <option value="Lama">Lama</option>
            </select>  
             </div>
               <div class="form-group">
                  <label>Total</label>
            <input type="number" min="0" name="Total" class="form-control">      
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