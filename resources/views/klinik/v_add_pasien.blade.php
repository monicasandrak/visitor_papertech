@section('title')
Tambah Data Pasien Pegawai
@endsection
@extends('layout/v_template3')
@section('page')
Tambah Data Pasien Pegawai
@endsection
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH DATA PASIEN PEGAWAI</h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/kelola_pasien"><i class="material-icons">group</i> Kelola Pasien Pegawai</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Tambah Data Pasien Pegawai</li>
                            </ol>
                            
                        </div>
                        <div class="body">


        <form action="{{route('insert_pasien')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
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
                <div class="form-group">
                    <label for="exampleInputEmail1">ID pasien</label>
                    <input type="text" name="id_pasien" class="form-control" id="exampleInputEmail1" value="{{ $id_baru}}" readonly>
                    <div class="text-danger">
                          @error('id_pasien')
                              {{ $message}}
                          @enderror
                    </div>
                  </div>
           
            {{-- <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal" value="{{ old('tanggal')}}">
              <div class="text-danger">
                    @error('tanggal')
                        {{ $message}}
                    @enderror
              </div>
            </div> --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama pasien" value="{{ old('nama_pasien')}}">
                <div class="text-danger">
                    @error('nama_pasien')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
            <option disabled selected>--- Pilih ---</option>
            @foreach ($dropdown1 as $row)
            <option value="{{$row}}"{{ old('jenis_kelamin') == $row ? 'selected' : null }}>{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('jenis_kelamin')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Umur</label>
                <input type="text" name="umur" class="form-control" id="exampleInputEmail1" placeholder="Masukan Umur" value="{{ old('umur')}}">
                <div class="text-danger">
                    @error('umur')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Departement</label>
                <select name="departement" class="form-control">
            <option disabled selected>--- Pilih ---</option>
            @foreach ($dropdown as $row)
            <option value="{{$row}}"{{ old('departement') == $row ? 'selected' : null }}>{{Str::ucfirst($row)}}</option> <!-- php ucfirst() -->
            @endforeach
          </select>
                <div class="text-danger">
                    @error('departement')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Keluhan</label>
                <input type="text" name="keluhan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Keluhan" value="{{ old('keluhan')}}">
                <div class="text-danger">
                    @error('keluhan')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control" id="exampleInputEmail1" placeholder="Masukan Diagnosa" value="{{ old('diagnosa')}}">
                <div class="text-danger">
                    @error('diagnosa')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group form-float">                
                <label></label>
                    <input type="hidden" class="form-control" name="pemeriksa" placeholder="Masukan Pemeriksa" value="{{Auth::user()->username}}" >
                    <div class="text-danger">
                        @error('pemeriksa')
                            {{ $message}}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label for="Obat">Dokter Pemeriksa</label>
                <select class="form-control" id="position-option" name="dokter">
                    <option>--- Pilih ---</option>
                   @foreach ($dokter as $dokter)
                      <option value="{{ $dokter->nama_dokter }}"{{ old('dokter') == $dokter->id_dokter ? 'selected' : null }}>{{ $dokter->nama_dokter }}</option>
                   @endforeach
                </select>
                <div class="text-danger">
                    @error('dokter')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="Obat">Obat</label>
                <select class="form-control" id="position-option" name="obat">
                    <option>--- Pilih ---</option>
                   @foreach ($obat as $obat)
                      <option value="{{ $obat->nama_obat }}"{{ old('obat') == $obat->id_obat ? 'selected' : null }}>{{ $obat->nama_obat }}</option>
                   @endforeach
                </select>
                <div class="text-danger">
                    @error('obat')
                        {{ $message}}
                    @enderror
                </div>
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah Obat" value="{{ old('jumlah')}}">
                    <div class="text-danger">
                        @error('jumlah')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
             </div>
            </div>
          </div>
          <!-- /.card-body -->
<div>
          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('pasien') }}">Back</a>
            <button type="submit" class="btn btn-primary">Insert</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

