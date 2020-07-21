@extends('mahasiswa.layouts.app')

@section('title', 'Login Mahasiswa')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="header-title">Login Mahasiswa</h2>
                    <hr>            
                    Silahkan login terlebih dahulu<br><br>
                    <form action="{{ route('mahasiswa.login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="nrm" value="{{ old('nrm') }}" placeholder="NRM">
                           
                            @error('nrm')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password">
                           
                            @error('password')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                     
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>                            
                        </div>
                    </form>
                
                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection