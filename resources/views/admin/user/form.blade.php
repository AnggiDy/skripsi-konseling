@extends('admin.layouts.app')

@section('title', 'Form user')

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Form User</h4>
                <hr>
                <form action="{{ (!isset($user->id)) ? route('user.store') : route('user.update', $user->id) }}" method="post">
                    @csrf
                    @isset($user->id)
                        {{ method_field('PUT')}}
                    @endisset
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">       
                                <label>Nama user</label>
                                <input type="text" placeholder="Masukan Nama user" class="form-control" name="nama" value="{{ old('nama', $user->nama) }}">
                                @error('nama')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">       
                                <label>Nomor Telepon</label>
                                <input type="tel" placeholder="Masukan Nomor Telepon" class="form-control" name="no_telp" value="{{ old('no_telp', $user->no_telp) }}">
                                @error('no_telp')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">       
                                <label>Tanggal Lahir</label>
                                <input type="text" placeholder="Masukan Tanggal Lahir" class="form-control datepicker" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}">
                                @error('tanggal_lahir')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">       
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="mySelect custom-select">
                                    <option value=""> - Pilih Jenis Kelamin - </option>
                                    <option value="l" {{ (old('jenis_kelamin') == 'l' || $user->jenis_kelamin == 'l') ? 'selected' : '' }}> Laki - Laki</option>
                                    <option value="p" {{ (old('jenis_kelamin') == 'p' || $user->jenis_kelamin == 'p') ? 'selected' : '' }}> Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">       
                        <label>alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukan alamat">{{ old('alamat', $user->alamat) }}</textarea>
                        @error('alamat')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="form-group">       
                        <label>Username</label>
                        <input type="text" placeholder="Masukan Username" class="form-control" name="username" value="{{ old('username', $user->username) }}">
                        @error('username')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror                  
                    </div>
                    @if(!isset($user->id))
                    <div class="form-group">       
                        <label>Password</label>
                        <input type="password" placeholder="Masukan Pasword" class="form-control" name="password" value="{{ old('password', $user->password) }}">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror                        
                    </div>
                    @endif
                  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">       
                                <label>Role</label>
                                <select name="role" class="mySelect custom-select">
                                    <option value=""> - Pilih Role - </option>
                                    <option value="admin" {{ (old('role') == 'l' || $user->role == 'admin') ? 'selected' : '' }}> Admin</option>
                                    <option value="konselor" {{ (old('role') == 'p' || $user->role == 'konselor') ? 'selected' : '' }}> Konselor</option>
                                </select>
                                @error('role')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">       
                                <label>Status</label>
                                <select name="status" class="mySelect custom-select">
                                    <option value=""> - Pilih Status - </option>
                                    <option value="1" {{ (old('status') == '1' || $user->status == '1') ? 'selected' : '' }}> Aktif</option>
                                    <option value="0" {{ (old('status') == '0' || $user->status == '0') ? 'selected' : '' }}> Tidak Aktif</option>
                                </select>
                                @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
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