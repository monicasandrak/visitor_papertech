@section('title')
Kelola Data Obat
@endsection
@extends('layout/v_template2')
@section('page')
Kelola Data Obat
@endsection
@section('content')


<link rel="stylesheet" href="{{asset('styles.css')}}"> 
		 <!-- Link javascript public/scripts.js-->
<script type="text/javascript" src="{{asset('scripts.js')}}"></script> 
						 <!-- Link javascript public/datatables-simple-demo.js-->
<script type="text/javascript" src="{{asset('datatables-simple-demo.js')}}"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> 


<br>
<br>
<br>
<div class="card">
  
    <!-- <div class="card-header"> -->
    <div id="btnprint" class="container mt-3">
      <h3 class="card-title">Laporan Data Obat</h3>
      <p class="text-secondary">Sisa Stok Obat</p>
    
    <!-- /.card-header -->
    <div class="card-body">
    <!-- <div id="btnprint" class="container mt-3">
      <table id="example1" class="table table-bordered table-striped">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session('pesan') }}
        </div> -->
        <!-- @endif -->
        <!-- <div align="right">
            <a href="/obats/add" class="btn btn-sm btn-primary">Add Data</a><br>
            <br>
        </div> -->
        
        
        
        <table class="table table-bordered" id="datatablesSimple">
        <!-- <table id="example2" class="table table-bordered table-striped"> -->
        <thead>
        <tr>
          <th>No</th>
          <th>ID Security</th>
          <th>Nama Security</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Bagian </th>
          <th>Foto</th>
        </tr>
      </thead>
        <tbody>
        <?php $no=1;?>
        @foreach ($security as $data)  
        
        <tr>
        <td>{{$no++}}</td>
                                    <td>{{$data->id_security}}</td>
                                    <td>{{$data->nama_security}}</td>
                                    <td>{{$data->tanggal_lahir}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td>{{$data->jk}}</td>
                                    <td>{{$data->bagian}}</td>
                                    <td><img src="{{url('foto_security/'.$data->foto_security)}}" width="100px"></td>
        </tr>
        @endforeach
        </tbody>
        </table>
</div>
</div>
</div>
<div class="container mb-1">
        <button onclick="printDiv('btnprint')" class="btn btn-outline-primary" ><i class="fas fa-fw fa-print"></i>Print</button> 
        <a class="btn btn-danger" href="{{ route('laporan_klinik') }}">Back</a>
      </div>
      <!-- <script>
        $(#table).ready(function() {
          function print() {
            window.print();
          }
        });
      </script> -->
      <script>
        function printDiv(btnprint){
			var printContents = document.getElementById(btnprint).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
      </script>
      </body>
      </html>
</script>
        
      

     

    </div>
    <!-- /.card-body -->
  <!-- </div>
  <!-- /.card -->
  
</div>
  @endsection

