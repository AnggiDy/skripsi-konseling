@extends('admin.layouts.app')

@section('title', 'Form Ubah Password')

@section('content')
<div class="row">
    <div class="col-md-8">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Form Ubah Kategori</h4>
                <hr>
                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label>Password Lama</label>
                        <input type="password" placeholder="Masukan Password Lama" class="form-control" name="old_password" value="">
                        @error('old_password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" placeholder="Masukan Password Baru" class="form-control" name="password" value="">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password Konfirmasi</label>
                        <input type="password" placeholder="Masukan Password Konfirmasi" class="form-control" name="password_confirmation" value="">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>   
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary float-right" value="Simpan">
                    </div>                  
                </form>
            </div>
        </div>
    </div>
</div>

@endsection