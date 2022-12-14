@section('title')
Edit Data Tamu
@endsection
@extends('layout/v_template3')
@section('page')
Edit Data Tamu
@endsection
@section('content')
<section class="content">

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA TAMU
                            </h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_tamu"><i class="material-icons">group</i> Kelola Tamu</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Edit Tamu</li>
                            </ol>
                        </div>
                        
                            
                            
                        <form action="/tamu/update/{{$tamu->id_tamu}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                        
                        <div class="body">
                        @if(session('success'))
                            <p class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">{{session('success')}} &times;</a></p>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dissmissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>a</strong>{{ session('error') }}</div>
                        @endif
                        @if($errors->any())
                            @foreach($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Tanggal</label>
                            <input class="form-control" type="text" value="{{$tamu->tanggal}}" name="tanggal" readonly />
                        </div>
                        </div>
                            <!-- <div class="text-danger">
                            @error('tanggal')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>ID Tamu</label>
                            <input class="form-control" type="text" value="{{$tamu->id_tamu}}" name="id_tamu" readonly />
                        </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('id_tamu')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Nama Tamu</label>
                            <input class="form-control" type="text" placeholder="Masukan Nama Tamu" value="{{$tamu->nama_tamu}}" name="nama_tamu"/>
                        </div>
                        </div>

                        <!-- <div class="text-danger">
                            @error('nama_tamu')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Alamat</label>
                            <input class="form-control" type="text" placeholder="Masukan Alamat" value="{{$tamu->alamat}}" name="alamat" />
                        </div>
                        </div>

                        <!-- <div class="text-danger">
                            @error('alamat')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Pekerjaan</label>
                            <input class="form-control" type="text" placeholder="Masukan Pekerjaan" value="{{$tamu->pekerjaan}}" name="pekerjaan" />
                        </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('pekerjaan')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Keperluan</label>
                            <input class="form-control" type="text" placeholder="Masukan Keperluan" value="{{$tamu->keperluan}}" name="keperluan" />
                        </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('keperluan')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Bertemu Dengan </label>
                            <input class="form-control" type="text" placeholder="Masukan Bertemu Dengan" value="{{$tamu->bertemu_dengan}}" name="bertemu_dengan" />
                        </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('bertemu_dengan')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Nomor KTP/Identitas</label>
                            <input class="form-control" type="text" placeholder="Masukan Nomor KTP/Identitas" value="{{$tamu->no_ktp}}" name="no_ktp" />
                        </div>
                        </div>
                        <!-- <div class="text-danger">
                            @error('no_ktp')
                            {{ $message }}
                            @enderror
                        </div> -->

                        <div class="form-group form-float">
                            <label for="exampleInputFile">Foto KTP</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="foto_ktp" class="custom-file-input" id="exampleInputFile">
                                <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div> -->
                        
                            <!-- <div class="text-danger">
                                @error('foto_ktp')
                                    {{ $message}}
                                @enderror
                            </div> -->
                        </div>
                        </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Nomor Kendaraan</label>
                            <input class="form-control" type="text" placeholder="Masukan Kendaraan" value="{{$tamu->no_kendaraan}}" name="no_kendaraan" />
                        </div>
                        </div>

                        <!-- <div class="text-danger">
                            @error('no_kendaraan')
                            {{ $message }}
                            @enderror
                        </div> -->
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label>Jam Masuk</label>
                            <input class="form-control" type="time" placeholder="Masukan Jam Masuk" value="{{$tamu->jam_masuk}}" name="jam_masuk" />
                        </div>
                        </div>

                        <div class="form-group form-float">
                            <label for="exampleInputEmail1">Status</label>
                            <select name="status" class="form-control show-tick" value="{{$tamu->status}}">
                            <option>
                                {{$tamu->status}}
                            </option>
                            @foreach ($dropdown as $status)
                                <option value="{{$status}}">{{Str::ucfirst($status)}}</option> <!-- php ucfirst() -->
                            @endforeach
                            </select>
                            <!-- <div class="text-danger">
                            @error('status')
                                {{ $message}}
                            @enderror
                            </div> -->
                        </div>

                        <div class="form-group form-float">
                            <label for="exampleInputEmail1">Test Swab</label>
                            <select name="swab" class="form-control show-tick" value="{{$tamu->swab}}">
                            <option>
                                {{$tamu->swab}}
                            </option>
                            @foreach ($dropdown2 as $swab)
                                <option value="{{$swab}}">{{Str::ucfirst($swab)}}</option> <!-- php ucfirst() -->
                            @endforeach
                            </select>
                            <!-- <div class="text-danger">
                            @error('status')
                                {{ $message}}
                            @enderror
                            </div> -->
                        </div>
                        

                        <div class="form-group form-float">
                            <input class="form-control" type="hidden" placeholder="Masukan Pemeriksa Tamu" value="{{Auth::user()->username}}" name="pemeriksa_tamu" />
                        </div>
                        
                        <div class="form-group form-float">
                            <input class="form-control" type="hidden" placeholder="Masukan Hasil Swab" value="{{$tamu->hasil_swab}}" name="hasil_swab" />
                        </div>
                        
                        <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>UPDATE</span>

                        <!-- <div class="mb-3">
                            <button class="btn btn-primary">Ubah</button>
                            <a class="btn btn-danger" href="{{ route('tamu') }}">Back</a>
                        </div> -->
                        </div>
                        <br>
                        <br>
            </div>
            </form>
<br>
        
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
</div>
<br>
<br>
<br>
</section>

@endsection