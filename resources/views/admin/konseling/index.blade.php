@extends('admin.layouts.app')

@section('title', 'Konseling')

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Konseling</h4>
                <hr>
                <table id="dataTable" class="text-center table">
                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th>No</th>
                            <th>Judul Konseling</th>
                            <th>Waktu</th>
                            <th>Kategori</th>
                            <th>Mahasiswa</th>
                            <th>Tipe</th>
                            <th>Dibaca</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($konseling as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->judul_konseling }}</td>
                                <td>{{ $row->waktu }}</td>
                                <td>{{ $row->kategori->nama_kategori }}</td>
                                <td>{{ $row->mahasiswa->nama }}</td>
                                <td>
                                    <span class="badge {{ ($row->status == '1') ? 'badge-primary' : 'badge-warning' }}">{{ ($row->status == '1') ? 'Publik' : 'Privat' }}</span>
                                </td>
                                <td>{{ $row->read_counter }} kali</td>
                                <td>
                                  
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="{{ route('konseling.show', $row->id) }}" class="btn btn-sm btn-outline-info btn-small" title="Edit data">Respon</a></li>                                            
                                    </ul>
                          
                                </td>
                            </tr>
                        @endforeach                      
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection