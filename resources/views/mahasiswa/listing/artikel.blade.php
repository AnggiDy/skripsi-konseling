@extends('mahasiswa.layouts.app')

@section('title', 'Data Artikel ')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Artikel Terbaru {{ ($kategori_id != null) ? 'Kategori '.$kategori->nama_kategori  : '' }}</h4>
                    <div class="letest-news mt-5 article-latest">
                        <?php foreach($articles as $artikel) : ?>
                        <div class="single-post mb-xs-40 mb-sm-40 article-post">
                            <div class="lts-thumb article-thumb">
                                <?php if($artikel->cover != null | $artikel->cover != ''): ?>
                                    <img src="{{ asset('storage/cover/'.$artikel->cover) }}" alt="image-cover">
                                <?php else : ?>
                                    <img src="{{ asset('storage/cover/tidak-ada-foto.jpg') }}" alt="no-cover">
                                <?php endif ?>                                
                            </div>
                            <div class="lts-content article-content">
                                <span><?= $artikel->waktu ?></span>
                                <h2><a href="{{ route('artikel.read', $artikel->id) }}">{{ $artikel->judul }}</a></h2>
                                <?php if(strlen($artikel->isi) > 520) : ?>
                                        <?= strip_tags(substr($artikel->isi, 0, 520)) ?> <a href="{{ route('artikel.read', $artikel->id) }}">Read More...</a>
                                    <?php else : ?>
                                        <?= strip_tags($artikel->isi) ?>
                                <?php endif ?>
                            </div>
                        </div>
                        <?php endforeach ?>                        
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection