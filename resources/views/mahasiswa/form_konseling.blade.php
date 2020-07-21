@extends('mahasiswa.layouts.app')

@section('title')
Form Konseling
@endsection

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Form Konseling</h4>
                    <hr>
                    <form action="{{ route('konseling.store') }}" method="post">
                        @csrf
                        
                        <div class="form-group">
                            <label>Judul Konseling</label>
                            <input type="text" placeholder="Masukan judul konseling anda" class="form-control" name="judul_konseling" value="{{ old('judul_konseling') }}">
                            @error('judul_konseling')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">       
                            <label>Kategori Artikel</label>
                            <select name="kategori_id" class="mySelect custom-select">
                                <option value=""> - Pilih Kategori Artikel - </option>
                                    @foreach($kategori as $option)
                                        <option value="{{ $option->id }}" {{ (old('kategori_id') == $option->id) ? 'selected' : '' }}> {{ $option->nama_kategori }} </option>                            
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label>Isi</label>
                            <textarea name="isi" class="form-control">{{ old('isi') }}</textarea>
                            @error('isi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                      
                        <div class="form-group">       
                            <label>Konseling Bersifat</label>
                            <select name="status" class="mySelect custom-select">
                                <option value=""> - Pilih - </option>
                                <option value="1" {{ (old('status') == '1') ? 'selected' : '' }}> Publik</option>
                                <option value="0" {{ (old('status') == '0') ? 'selected' : '' }}> Private</option>
                            </select>
                            @error('status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>               

                        <div class="form-group">
                            <input type="submit" value="Buat Konseling" class="btn btn-success float-right">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection