@extends('admin.layouts.app')

@section('title', 'Form Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Form Mahasiswa</h4>
                <hr>
                <form action="{{ (!isset($mahasiswa->id)) ? route('mahasiswa.store') : route('mahasiswa.update', $mahasiswa->id) }}" method="post">
                    @csrf
                    @isset($mahasiswa->id)
                        {{ method_field('PUT')}}
                    @endisset
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
                                <label>no_telp</label>
                                <input type="number" placeholder="Masukan no_telp mahasiswa" class="form-control" name="no_telp" value="{{ old('no_telp', $mahasiswa->no_telp) }}">
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
                                <input type="text" placeholder="Masukan tanggal lahir" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}">
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
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary float-right" value="Simpan">
                    </div>                  
                </form>
            </div>
        </div>
    </div>
</div>

@endsection