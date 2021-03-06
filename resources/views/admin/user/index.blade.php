@extends('admin.layouts.app')

@section('title', 'User')

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data User</h4>
                <hr>
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus"></i> Tambah </a>
                <div class="data-tables inner-content">
                    <table id="dataTable" class="text-center table">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{  $row->nama }}</td>
                                    <td>{{  $row->username }}</td>
                                    <td>{{  $row->role }}</td>
                                    <td>
                                        <span class="badge {{ ($row->status == '1') ? 'badge-success' : 'badge-danger' }}">{{ ($row->status == '1') ? 'Aktif' : 'Tidak Aktif' }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $row->id) }}" method="post">
                                            @csrf 
                                            @method('delete')
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="{{ route('user.show', $row->id) }}" class="text-primary modal-btn" title="Lihat detail"><i class="fa fa-eye"></i></a> </li>
                                                <li class="mr-3"><a href="{{ route('user.edit', $row->id) }}" class="text-secondary" title="Edit data"><i class="fa fa-edit"></i></a></li>
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

@push('scripts')

<div id="theModal" class="modal fade text-center">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>

<script>
    $('.modal-btn').on('click', function(e){
        e.preventDefault();
        $('#theModal').modal('show').find('.modal-content').load($(this).attr('href'));
    });
</script>
@endpush