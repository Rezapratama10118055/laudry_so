@extends('layout/main')

@section('title','transaksi')


@section('container')



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
      <th scope="col">Alamat</th>
      <th scope="col">No Telpon</th>
      <th scope="col">Status</th>
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
      <td>{{ $User->alamat }}</td>
      <td>{{ $User->tlp}}</td>
      <td>{{ $User->status}}</td>
      <td>Rp.{{ $User->total }}</td>
    
        <td><a href="javascript:;" data-toggle="modal" data-target="#DetailModal" onclick="detailModal({{$User->id}})" class="btn btn-primary">Detail</td>
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
           <!--  <form action="/trs/store" method="POST"> -->
            
                <div class="form-group">
                  <label>Tanggal</label>
                    <input type="date" name="Tanggal" id='tgl' value="<?php echo date('Y-m-d'); ?>" class="form-control">      
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Costumer</label>
                      <input type="text"  name="nama" id="nama" class="form-control">      
                    </div>
                    <div class="form-group col-md-6">
                      <label>No Telpon</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">+62</span>
                        </div>
                        <input type="text" class="form-control" name="tlp" id="tlp" placeholder="Ex. 82312xxx" aria-label="tlp" aria-describedby="basic-addon1">
                      </div>    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat Costumer</label>
                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                  </div>
                                 
                
          <div class="row">
            <div class="form-group col-md-5">
                  <label>Jenis Cucian</label>
            <select class="form-control form-control-md" name="jenis" id="jenis">
              <option selected disabled value="">-- Please Select --</option>
              @foreach ($paket as $row => $val)
              <option value="{{$val->id}}" data-jenis="{{$val->jenis}}" data-harga="{{$val->harga}}" data-id="{{$val->satuan}}">{{$val->jenis}}</option>
             
              @endforeach
            </select>  
             </div>
             <div class="form-group col-md-5">
                  <label>Banyaknya Cucian</label>
                  <div class="input-group">
                    <input type="number" name="qty" id="qty" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                      <span class="input-group-text embel">/</span>
                    </div>
                  </div>     
                </div>
             <div class="form-group col-md-2">
                 
                  <button type="button" class="btn btn-primary btn-list">add</button>   
                </div>
          </div>
          
             <table class="table tabel-list">
               <tr class="bg-primary">
                 <td>No</td>
                 <td>Layanan</td>
                 <td>Berat</td>
                 <td>Harga</td>
               </tr>
             
             </table>
           
               <div class="form-group">
                  <label>Total</label>
              <input type="number" min="0" name="Total" id="tot" class="form-control">      
            </div>

         
          <div class="modal-footer">  
        <button type="submit" class="btn btn-success btn_submit" data-dissmis="modal">Simpan</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
     <!--  </form> -->
      </div>
    </div>
  </div>
</div>

<!-- Detail modal -->
<div class="modal fade" id="DetailModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Data Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
           <!--  <form action="/trs/store" method="POST"> -->
            
                <div class="form-group">
                  <label>Tanggal</label>
                    <input type="text" name="dTanggal" id='dtgl'class="form-control" readonly>      
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Costumer</label>
                      <input type="text"  name="dnama" id="dnama" class="form-control" readonly>      
                    </div>
                    <div class="form-group col-md-6">
                      <label>No Telpon</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">+62</span>
                        </div>
                        <input type="text" class="form-control" name="dtlp" id="dtlp" placeholder="Ex. 82312xxx" aria-label="tlp" aria-describedby="basic-addon1" readonly>
                      </div>    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat Costumer</label>
                    <textarea class="form-control" id="dalamat" rows="3" readonly></textarea>
                  </div>
                                 
                
          
          
             <table class="table tabel-list-detail">
               
               <thead>
                 <tr class="bg-primary">
                 <td>No</td>
                 <td>Layanan</td>
                 <td>Berat</td>
                 <td>Harga</td>
               </tr>
               </thead>
               <tbody>
                 
               </tbody>
             
             </table>
           
               <div class="form-group">
                  <label>Total</label>
              <input type="number" min="0" name="dTotal" id="dtot" class="form-control" readonly>      
            </div>

         
          
     <!--  </form> -->
      </div>
    </div>
  </div>
</div>



@endsection
@section('js')
 <script type="text/javascript">
  var data_sesehan = [];
  var a=1;
  var harga, jenis;
  var total=0;

  function detailModal(i) {
    $('.tabel-list-detail tbody').empty();
    $.ajax({
                  url:"/trs/getDetail/"+i,
                  type:'GET',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{data:"Hai anjing"},
                  success: function (data) {
                     var i=parseInt(data['jml']);
                     for (var b = 0 ; b < i; b++) {
                       $('.tabel-list-detail tbody').append(
                        "<tr class='data"+b+"'>"+
                        "<td>"+(b+1)+"</td>"+
                        "<td>"+data["list"][b]['jenis']+"</td>"+
                        "<td>"+data["list"][b]['qty']+" "+data["list"][b]['satuan']+"</td>"+
                        "<td>"+data["list"][b]['total']+"</td>"+
                        "</tr>"
                        );
                     }
                     $('#dtgl').val(data['transaksi'][0]['TglTransaksi']);
                     $('#dnama').val(data['transaksi'][0]['Customer']);
                     $('#dtlp').val(data['transaksi'][0]['tlp']);
                     $('#dalamat').val(data['transaksi'][0]['alamat']);
                     $('#dtot').val(data['transaksi'][0]['total']);
                     console.log(data['transaksi']);
                    

                      },
                      error: function (data) {
                           swalWithBootstrapButtons.fire(
                  'Gagal!',
                  'Failed to delete your file.',
                  'error'
                );
                      }
              });
      
  }

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

     $( "#jenis" ).change(function() {
       jenis= $(this).find(':selected').attr("data-id");
       harga= $(this).find(':selected').attr("data-harga");
      $(".embel").empty();
      $(".embel").append("/"+jenis);
      

    });

     function append_tabel(i) {
       $('.tabel-list').append(
        "<tr class='data"+i+"'>"+
        "<td>"+i+"</td>"+
        "<td>"+data_sesehan[a+'jenis']+"</td>"+
        "<td>"+data_sesehan[a+'qty']+"</td>"+
        "<td>"+data_sesehan[a+'total']+"</td>"+
        "</tr>"
        );
     }

     $( ".btn-list" ).click(function() {
      if ($('#jenis').val()== "" || $('#qty').val()=="") {
        alert('isi dulu semu ajg');
      }else{
        data_sesehan[a+'id']=$('#jenis').val();
        data_sesehan[a+'jenis']=$('#jenis').find(':selected').attr("data-jenis");
        data_sesehan[a+'qty']=$('#qty').val();
        data_sesehan[a+'total']=parseInt($('#qty').val())*parseInt(harga);
        total=total+data_sesehan[a+'total'];
        $('#tot').val(total);
        console.log(data_sesehan);
        append_tabel(a);
        a=a+1;
      }

    });

     $( ".btn_submit" ).click(function() {
      var data = Object.assign({}, data_sesehan);
      
        console.log(Object.assign({}, data_sesehan));
        $.ajax({
                  url:"/trs/store",
                  type:'POST',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{data:data,total:total,tgl:$('#tgl').val(),nama:$("#nama").val(),tlp:$("#tlp").val(),alamat:$("#alamat").val()},
                  success: function (data) {
                     
                     window.location.href = "{{ route('transaksi')}}";
                    

                      },
                      error: function (data) {
                           swalWithBootstrapButtons.fire(
                  'Gagal!',
                  'Failed to delete your file.',
                  'error'
                );
                      }
              });
      

    });

  </script>
@endsection
