@extends('layout/main')

@section('title','transaksi')


@section('container')



<div style="margin-left: 300px; width: calc(100% - 300px);">
<div class="col-md-12 p-5 pt-2">
   <h3><i class="fas fa-file-alt mr-2"></i>Laporan</h3><hr>
   <div class="row">
     <div class="form-group col-md-5">
                  <label>Tanggal</label>
            <select class="form-control form-control-md" id="tgl">
              <option selected disabled value="">{{$now}}</option>
              @foreach($tgl as $row =>$val)
                <option  value="{{$val->TglTransaksi}}">{{$val->TglTransaksi}}</option>
              @endforeach
            </select>  
             </div>
             <div class="col-md-7">
               <input class="btn btn-primary" style="float: right; margin-top: 30px" type='button' id='btn' value='Print' onclick='printDiv();'>
             </div>
   </div>
 <div id="printarea">
   <table class="table table-bordered tabel-lap">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tgl.Transaksi</th>
      <th scope="col">Customer</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telpon</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
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
      
      <td>Rp.{{ $User->total }}</td>
      @if ($User->status == 'on progress')
      <td class="bg-warning text-white">{{ $User->status}}</td>
      @else
       <td class="bg-success text-white">{{ $User->status}}</td>
       @endif
    
        

    </tr>
    @endforeach



  </tbody>
</table>
<h3>Total Pendapatan :<span class="txtTot"> {{$sum}}</span></h3>
 </div>   

</div>
</div>


@endsection
@section('js')
 <script type="text/javascript">
   function printDiv() 
{

  var divToPrint=document.getElementById('printarea');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><style type="text/css">' +
        'table th, table td {' +
        'border:1px solid #000;' +
        'padding:0.5em;' +
        'border-collapse: collapse;'+
        '}' +
        '</style><body onload="window.print()"><h2>Laporan Transaksi Harian Laundry Bubble Wash</h2>'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
function FR(angka, prefix){
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
  split       = number_string.split(','),
  sisa        = split[0].length % 3,
  rupiah        = split[0].substr(0, sisa),
  ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if(ribuan){
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }
 
  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}

$( document ).ready(function() {
  var tod={{$sum}};
    $('.txtTot').empty();
    $('.txtTot').append(FR(tod.toString(),'Rp. '));
});

$( "#tgl" ).change(function() {
  $.ajax({
                  url:"/lap/getNew",
                  type:'POST',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{tgl:$(this).val()},
                  success: function (data) {
                     console.log(data);
                     $('.tabel-lap tbody').empty();
                     var css;
                     $('.txtTot').empty();
                     $('.txtTot').append(FR(data['sum'],'Rp. '));
                     for (var i = 0; i < data['x']; i++) {
                      if (data["transaksi"][i]['status'] == "on progress") {
                        css="bg-warning text-white";
                      }else{
                        css="bg-success text-white";
                      }
                       $('.tabel-lap tbody').append(
                        "<tr class='data"+i+"'>"+
                        "<td>"+(i+1)+"</td>"+
                        "<td>"+data["transaksi"][i]['TglTransaksi']+"</td>"+
                        "<td>"+data["transaksi"][i]['Customer']+"</td>"+
                        "<td>"+data["transaksi"][i]['alamat']+"</td>"+
                        "<td>"+data["transaksi"][i]['tlp']+"</td>"+
                        "<td>Rp."+data["transaksi"][i]['total']+"</td>"+
                        "<td class='"+css+"'>"+data["transaksi"][i]['status']+"</td>"+
                        "</tr>"
                        );
                     }
                     

                    

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
