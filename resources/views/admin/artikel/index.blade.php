@extends('admin.layouts.app')

@section('title', 'Artikel')

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Artikel</h4>
                <hr>
                <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus"></i> Tambah </a>
                <div class="data-tables inner-content">
                    <table id="dataTable" class="text-center table">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>No</th>
                                <th width="160">Judul</th>
                                <th width="78">Tanggal</th>
                                <th>Isi</th>
                                <th>Cover</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($artikel as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->waktu }} <div class="mt-2"></div> <span class="badge badge-info">{{ $row->kategori->nama_kategori }}</span> </td>
                                    <td>
                                        @if(strlen($row->isi) > 40)
                                            {!! strip_tags(substr($row->isi, 0, 40)) !!} <a href="{{ route('artikel.show', $row->id) }}">Read More...</a>
                                        @else
                                            {!! strip_tags($row->isi) !!}
                                        @endif
                                    </td>
                                    <td class="image-td">
                                        <?php if($row->cover != null | $row->cover != ''): ?>
                                            <!-- HAVE PHOTO -->
                                            <img src="{{ asset('storage/cover/'.$row->cover) }}" alt="image-cover">
                                        <?php else : ?>
                                            <!-- NOT HAVE PHOTO -->
                                            <img src="{{ asset('storage/cover/tidak-ada-foto.jpg') }}" alt="no-cover">
                                        <?php endif ?>
                                     </td>
                
                                    <td>
                                        <form action="{{ route('artikel.destroy', $row->id) }}" method="post">
                                            @csrf 
                                            @method('DELETE')
                                            <ul class="d-flex justify-content-center"> 
                                                <li class="mr-3"><a href="{{ route('artikel.read', $row->id) }}" target="_blank" class="text-primary detail-btn" title="Lihat detail"><i class="fa fa-eye"></i></a> </li>
                                                <li class="mr-3"><a href="{{ route('artikel.edit', $row->id) }}" class="text-secondary" title="Edit data"><i class="fa fa-edit"></i></a></li>
                                                <li><button type="submit" class="text-danger btn-submit" onclick="return confirm('Yakin akan hapus data?')" ><i class="fa fa-trash"></i></button></li>
                                            </ul>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection