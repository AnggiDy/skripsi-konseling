@extends('mahasiswa.layouts.app')

@section('title', 'Daftar Konseling Anda')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Konseling Mahasiswa Bersifat Publik {{ ($kategori_id != null) ? 'Kategori '.$kategori->nama_kategori  : '' }}</h4>
                    <hr>
                    
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection