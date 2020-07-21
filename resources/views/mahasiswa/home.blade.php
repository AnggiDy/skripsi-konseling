@extends('mahasiswa.layouts.app')

@section('title', 'Selamat Datang')

@section('content')

<div class="jumbotron jumbotron-fluid my-banner mb-0">
    <div class="container">
        <!-- <h1 class="display-4 text-white">Welcome</h1> -->
        <!-- <p class="lead text-white mt-3">Selamat datang di website E-Konseling Universitas Negeri Jakarta</p> -->
    </div>
</div>

<div class="container-fluid pt-5 pb-5 bg-white mb-5">
    <div class="container">
        <div class="row text-center pt-3 pb-5">
            <div class="col-md-12">
                <h3 class="text-center w-100 pb-3">UPT LBK</h3>
                
                <h3 class="text-center">Unit Pelayanan Teknis Layanan Bimbingan dan Konseling</h3> 
                <br>              
                <div class="content-body">
                    <p>UPT-LBK UNJ memberikan layanan konseling, tes psikologi & psikoedukasi untuk mahasiswa, dosen, tenaga kependidikan UNJ dan masyarakat umum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Artikel Terbaru</h4>
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
                                <?php if(strlen($artikel->isi) > 10) : ?>
                                        <?= strip_tags(substr($artikel->isi, 0, 200)) ?> <a href="{{ route('artikel.read', $artikel->id) }}">Read More...</a>
                                    <?php else : ?>
                                        <?= strip_tags($artikel->isi) ?>
                                <?php endif ?>
                            </div>
                        </div>
                        <?php endforeach ?>                        
                    </div>
                    <!-- <a href="{{ url('listing.artikel') }}" class="btn btn-primary btn-sm">Lihat Semua Artikel</a> -->
                    <!-- {{ $articles->links() }} -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Konseling Publik</h4>
                    <hr>
                    <a href="{{ route('konseling.create') }}" class="btn btn-sm btn-success">Buat Konseling Anda</a>
                    <div class="table-responsive my-table">
                        <table class="dbkit-table">
                            <tbody>
                                <tr class="heading-td">
                                    <td><strong>Mahasiswa</strong></td>
                                    <td><strong>Tanggal</strong></td>
                                    <td><strong>Ketegori</strong></td>
                                    <td><strong>Judul</strong></td>                                    
                                </tr>
                                @foreach($konseling as $row)
                                <tr class="clickable-row" data-href="{{ route('konseling.detail', $row->id) }}">
                                    <td>{{ $row->mahasiswa->nama }}</td>
                                    <td>{{ $row->waktu }}</td>
                                    <td>{{ $row->kategori->nama_kategori }}</td>
                                    <td>{{ $row->judul_konseling }}</td>                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $konseling->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection