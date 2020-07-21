@extends('mahasiswa.layouts.app')

@section('title')
{{ $artikel->judul }}
@endsection

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>{{ $artikel->judul }}</h4>
                    </div>

                    <div class="cover-image mb-3">
                        <?php if($artikel->cover != null | $artikel->cover != ''): ?>
                            <img src="{{ asset('storage/cover/'.$artikel->cover) }}" alt="image-cover" class="img-fluid w-100">
                        <?php else : ?>
                            <img src="{{ asset('storage/cover/tidak-ada-foto.jpg') }}" alt="no-cover" class="img-fluid w-100">
                        <?php endif ?>                            
                    </div>
                    <p><strong>Diposting: {{ $artikel->waktu }} </strong> oleh <span class="badge badge-info">{{ $artikel->user->nama }}</span></p>
                    <p>Kategori: <a href="#">{{ $artikel->kategori->nama_kategori }}</a></p>
                    <hr>
                    <div class="content-article mt-3 mb-3">
                        {!! $artikel->isi !!}        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5>Artikel Lain</h5>
                    </div>
                    
                    <div class="list-group">
                        @foreach($articles as $list)
                            <a href="" class="list-group-item list-group-item-action">{{ $list->judul }}</a>
                        @endforeach                        
                    </div>
                
                </div>
            </div> 
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Komentar</h4>
                    </div>
                    @forelse($artikel->comments as $komentar)
                    <div class="member-box">                        
                        <div class="s-member">
                            <div class="media align-items-center">                               
                                <div class="media-body ml-5">
                                    <p><strong>{{ $komentar->mahasiswa->nama }}</strong></p>
                                    <span class="comment-time"><i class="fa fa-clock"></i> {{ $komentar->waktu }}</span>
                                    <hr>
                                    {{ $komentar->isi_komentar }}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @empty 
                    <p class="mb-2">Belum ada komentar</p>
                    @endforelse
                    
                    @guest('mahasiswa')
                        <p><a href="{{ route('mahasiswa.login') }}">Login</a> untuk menambahkan komentar</p>
                    @else
                    <div class="form-comment mt-4">
                        <form action="{{ route('komentar.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="artikel_id" value="{{ $artikel->id }}">
                                <textarea name="isi_komentar" class="form-control" rows="4"  placeholder="Masukan komentar anda"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Tambah Komentar" class="btn btn-sm btn-success float-right">
                            </div>
                        </form>

                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>

@endsection