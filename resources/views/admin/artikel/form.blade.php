@extends('admin.layouts.app')

@section('title', 'Form Artikel')

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Form Artikel</h4>
                <hr>
                <form action="{{ (!isset($artikel->id)) ? route('artikel.store') : route('artikel.update', $artikel->id) }}" method="post" enctype="multipart/form-data">        
                    @csrf
                    @isset($artikel->id)
                        {{ method_field('PUT')}}
                    @endisset
                    <div class="form-group">
                        <label>Judul Artikel</label>
                        <input type="text" name="judul" class="form-control" value="{{ old('judul', $artikel->judul) }}" placeholder="Judul artikel">
                        @error('judul')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">       
                        <label>Kategori Artikel</label>
                        <select name="kategori_id" class="mySelect custom-select">
                            <option value=""> - Pilih Kategori Artikel - </option>
                                @foreach($kategori as $option)
                                    <option value="{{ $option->id }}" {{ (old('kategori_id') == $option->id || $artikel->kategori_id == $option->id) ? 'selected' : '' }}> {{ $option->nama_kategori }} </option>                            
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" name="waktu" class="form-control datepicker2" value="{{ old('waktu', $artikel->waktu) }}" placeholder="Masukan Tanggal">
                        @error('tanggal')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="isi" class="form-control" id="myeditor">{{ old('isi', $artikel->isi) }}</textarea>
                        @error('isi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    @isset($artikel->id)
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                Cover
                                <hr>
                                <?php if($artikel->cover != null | $artikel->cover != ''): ?>
                                    <!-- HAVE PHOTO -->
                                    <img src="{{ asset('storage/cover/'.$artikel->cover) }}" alt="image-cover" class="img-fluid">
                                <?php else : ?>
                                    <!-- NOT HAVE PHOTO -->
                                    <img src="{{ asset('storage/cover/tidak-ada-foto.jpg') }}" alt="no-cover" class="img-fluid">
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    @endisset
                    <div class="form-group">
                        <label>Cover</label>
                        <input type="file" name="cover" class="form-control">
                        @error('cover')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success float-right" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>

     // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'myeditor' );

</script>
@endpush