@extends('mahasiswa.layouts.app')

@section('title')
Profile Mahasiswa
@endsection

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <h5 class="mb-3">
                    {{ ucwords($mahasiswa->nama) }}
                </h5>

                    <table class="table">
                        <tr>
                            <td>NRM</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->nrm }}</td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->fakultas }}</td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->prodi }}</td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->angkatan }}</td>
                        </tr>
                        
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ ($mahasiswa->jenis_kelamin == 'l') ? 'Laki - Laki' : 'Perempuan' }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Anxiety</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->jenis_anxiety }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Depresi</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->jenis_depresi }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->no_telp }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $mahasiswa->alamat }}</td>
                        </tr>               
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection