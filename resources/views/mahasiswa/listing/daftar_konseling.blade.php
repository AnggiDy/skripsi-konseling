@extends('mahasiswa.layouts.app')

@section('title', 'Daftar Konseling Anda')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <h5> Pastikan sebelum anda membuat konseling, anda telah mengisi terlebih dahulu kuesioner PHQ-9 dan GAD-7. Anda bisa cek melalui menu profile untuk mengetahui hasil kuesioner untuk jenis anxiety dan jenis depresi anda.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Riwayat Konseling Anda</h4>
                    <hr>
                    <a href="{{ route('konseling.create') }}" id="myNotif" class="btn btn-sm btn-success">Buat Konseling Anda</a>
                    <a href="{{ url('listing/phq') }}" class="btn btn-sm btn-success">Isi Kuesioner PHQ-9</a>
                    <a href="{{ url('listing/gad') }}" class="btn btn-sm btn-success">Isi Kuesioner GAD-7</a>
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

<script type="text/javascript">
    var i = 1;

    document.getElementById("myNotif").addEventListener("click", function(event){
        if(i == 1){
            alert("Sebelum membuat curhat silahkan mahasiswa untuk mengisi kuesioner phq dan gad terlebih dahulu");
            i++;
            event.preventDefault()
        }
    });
</script>

@endsection