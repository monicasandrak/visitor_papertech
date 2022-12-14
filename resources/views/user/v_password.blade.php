@section('title')
Change Password 
@endsection
@extends('layout/v_template3')
@section('page')
Change Password
@endsection
@section('content')
@auth
<section class="content">

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CHANGE PASSWORD
                            </h2>
                            <br>
                            <ol class="breadcrumb breadcrumb-bg-teal">
                                <li><a href="/dashboard"><i class="material-icons">group</i> Dashboard</a></li>
                                <li class="active"><i class="material-icons">library_books</i> Change Password</li>
                            </ol>
                        </div>
                        
                        <div class="body">
                        <form action="{{ route('password.action') }}" method="post">
                            @csrf
                        
                        <div class="card-body">
                        @if (session('success'))
                                  <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <h5><i class="icon fas fa-check"></i> Success</h5>
                                {{ session('success') }}
                                  </div>
                                @endif
           
        @if (session('error'))
        <div class="alert alert-danger alert-dissmissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>a</strong>{{ session('error') }}</div>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
                            
                        
                            
                           
                        
                        
                        <div class="mb-3">
                            <label>Password Lama <span class="text-danger">*</span> </label>
                            <input class="form-control" type="password" name="old_password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"/>
                        </div>
                            <!-- <div class="text-danger">
                            @error('old_password')
                                {{ $message }}
                            @enderror -->
                        
                        <br>
                        <div class="mb-3">
                            <label>Password Baru <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="new_password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"  />
                        </div>
                        <!-- <div class="text-danger">
                            @error('new_password')
                                {{ $message }}
                            @enderror
                        </div> -->
                        <br>
                        <div class="mb-3">
                            <label>Konfirmasi Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="new_password_confirmation" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"/>
                        </div>
                        <!-- <div class="text-danger">
                            @error('new_password_confirmation')
                                {{ $message }}
                            @enderror
                        </div> -->
                        <br>

                        <!-- <button type="submit" class="btn bg-teal waves-effect">UPDATE</button> -->

                        <button type="submit" class="btn bg-teal waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>UPDATE</span>
                        
            <!-- <div class="mb-3">
                <button class="btn btn-primary">Ubah</button>
                <a class="btn btn-danger" href="{{ route('dashboard') }}">Back</a>
                </div>
            </div> -->
            </div>
            <br>


            </div>
            
<br>
        </form>
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
@endauth
@endsection