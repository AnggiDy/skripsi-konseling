@extends('admin.layouts.app')

@section('title', 'Kategori')

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Kategori</h4>
                <hr>
                <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus"></i> Tambah </a>
                <div class="data-tables inner-content">
                    <table id="dataTable" class="text-center table">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Keterangan</th>                            
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $row)
                                <tr>
                                    <td><?= $loop->iteration ?></td>
                                    <td><?=  $row->nama_kategori ?></td>
                                    <td><?=  $row->keterangan ?></td>                                    
                                    <td>
                                        <form action="{{ route('kategori.destroy', $row->id) }}" method="post">
                                            @csrf 
                                            @method('delete')
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="{{ route('kategori.edit', $row->id) }}" class="text-secondary" title="Edit data"><i class="fa fa-edit"></i></a></li>
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