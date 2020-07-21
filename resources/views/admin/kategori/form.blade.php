@extends('admin.layouts.app')

@section('title', 'Form Kategori')

@section('content')
<div class="row">
    <div class="col-md-8">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Form Kategori</h4>
                <hr>
                <form action="{{ (!isset($kategori->id)) ? route('kategori.store') : route('kategori.update', $kategori->id) }}" method="post">
                    @csrf
                    @isset($kategori->id)
                        {{ method_field('PUT')}}
                    @endisset
                    <div class="form-group">       
                        <label>Nama Kategori</label>
                        <input type="text" placeholder="Masukan Nama Kategori" class="form-control" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
                        @error('nama_kategori')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">       
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" placeholder="Masukan Keterangan (opsional)">{{ old('keterangan', $kategori->keterangan) }}</textarea>
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