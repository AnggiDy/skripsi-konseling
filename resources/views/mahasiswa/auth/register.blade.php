@extends('mahasiswa.layouts.app')

@section('title', 'Register Mahasiswa')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="header-title">Register Mahasiswa</h2>
                    <hr>            
                    Silahkan mengisi seluruh kolom dibawah ini<br><br>
                    <form action="{{ route('mahasiswa.register') }}" method="post">
                        @csrf 

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>Nama Mahasiswa</label>
                                    <input type="text" placeholder="Masukan nama mahasiswa" class="form-control" name="nama" value="{{ old('nama', $mahasiswa->nama) }}">
                                    @error('nama')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>NRM</label>
                                    <input type="text" placeholder="Masukan NRM mahasiswa" class="form-control" name="nrm" value="{{ old('nrm', $mahasiswa->nrm) }}">
                                    @error('nrm')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>Fakultas</label>
                                    <input type="text" placeholder="Masukan fakultas" class="form-control" name="fakultas" value="{{ old('fakultas', $mahasiswa->fakultas) }}">
                                    @error('fakultas')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>Prodi</label>
                                    <input type="text" placeholder="Masukan prodi mahasiswa" class="form-control" name="prodi" value="{{ old('prodi', $mahasiswa->prodi) }}">
                                    @error('prodi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>Angkatan</label>
                                    <input type="text" placeholder="Masukan angkatan" class="form-control" name="angkatan" value="{{ old('angkatan', $mahasiswa->angkatan) }}">
                                    @error('angkatan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>No Telepon</label>
                                    <input type="tel" placeholder="Masukan no telepon mahasiswa" class="form-control" name="no_telp" value="{{ old('no_telp', $mahasiswa->no_telp) }}">
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
                                    <input type="text" placeholder="Masukan tanggal lahir" class="form-control datepicker" name="tanggal_lahir" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}">
                                    @error('tanggal_lahir')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>Jenis kelamin</label>
                                    <select name="jenis_kelamin" class="mySelect custom-select">
                                        <option value=""> - Pilih Jenis Kelamin - </option>
                                        <option value="l" {{ (old('jenis_kelamin') == 'l' || $mahasiswa->jenis_kelamin == 'l') ? 'selected' : '' }}> Laki - Laki</option>
                                        <option value="p" {{ (old('jenis_kelamin') == 'p' || $mahasiswa->jenis_kelamin == 'p') ? 'selected' : '' }}> Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">       
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukan alamat">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                        </div>
                        @error('alamat')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>Password</label>
                                    <input type="password" placeholder="Masukan password" class="form-control" name="password" value="{{ old('password') }}">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">       
                                    <label>Password Konfirmasi</label>
                                    <input type="password" placeholder="Masukan konfirmasi password mahasiswa" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                    @error('password_confirmation')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary float-right" value="Daftar">
                        </div>                  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection