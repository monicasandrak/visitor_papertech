@section('title')
Kelola Data Security
@endsection
@extends('layout/v_template3')
@section('page')
Kelola Data Security
@endsection
@section('content')

						 <!-- Link javascript public/datatables-simple-demo.js-->

<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> 
<section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div> -->
            <!-- Basic Examples -->
            <div  id="btnprint" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div id="btnprint" class="header">
                            <h2>
                                LAPORAN DATA SECURITY
                            </h2>

                        </div>
                        <div class="body">
                        
                            <div class="table-responsive">
                                <table class="table table-bordered id="table">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>ID Security</th>
                                        <th>Nama Security</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Bagian</th>
                                        <th>Foto Security</th>
                                        
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
                </div>
                
            </div>
           

            <button type="submit" onclick="printDiv('btnprint')" class="btn bg-teal waves-effect">
                                    <i class="material-icons">print</i>
                                    <span>PRINT</span>
            <button>
      </div>
      <br>
      <br>
      <br>

    
      <script>
        $(document).ready(function() {
          function print() {
            window.print();
          }
        });
      </script>
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
                        
    </section>
@endsection