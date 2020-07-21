@extends('admin.layouts.app')

@section('title', 'Respon Konseling')

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="header-konseling">
                    <h4 class="header-title">{{ $konseling->judul_konseling }}</h4>
                    <div class="d-inline-block right-text">
                        <span class="badge {{ ($konseling->status == '1') ? 'badge-primary' : 'badge-warning' }}">Konseling {{ ($konseling->status == '1') ? 'Publik' : 'Privat' }}</span>
                    </div>
                </div>
                <div class="konseling-timeline-area">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="tm-title">
                            <h4>{{ $konseling->mahasiswa->nama }}</h4>
                            <span class="time"><i class="ti-time"></i>{{ $konseling->waktu }}</span>
                        </div>
                        {{ $konseling->isi }}

                    </div>
                    @foreach($konseling->responses as $respon)
                    <div class="timeline-task">
                        @if($respon->jenis_responden == 'mahasiswa')
                        <div class="icon bg1">
                            <i class="fa fa-user"></i>
                        </div>
                        
                        <div class="tm-title">
                            <h4>{{ $respon->mahasiswa->nama }} </h4>                                    
                        @else
                        
                        <div class="icon bg2">
                            <i class="fa fa-user-tie"></i>
                        </div>
                        
                        <div class="tm-title">
                            <h4>{{ $respon->user->nama }} <span class="badge badge-success badge-konselor">Konselor</span> </h4>
                            @endif
                            <span class="time"><i class="ti-time"></i>{{ $respon->waktu }}</span>
                        </div>
                        {{ $respon->isi_respon }}                               
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="{{ route('konseling.respon_form', $konseling->id) }}" class="btn btn-sm btn-outline-primary float-right mt-3 modal-btn">Balas</a>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Identitas Mahasiswa</h4>
                <hr>
                <ul class="identitas-mahasiswa">
                    <li><strong>Nama</strong></li>
                    <li>{{ $konseling->mahasiswa->nama }}</li>
                    <li><strong>NRM</strong></li>
                    <li>{{ $konseling->mahasiswa->nrm }}</li>
                    <li><strong>Fakultas</strong></li>
                    <li>{{ $konseling->mahasiswa->fakultas }}</li>
                    <li><strong>Prodi</strong></li>
                    <li>{{ $konseling->mahasiswa->prodi }}</li>
                    <li><strong>Angkatan</strong></li>
                    <li>{{ $konseling->mahasiswa->angkatan }}</li>
                    <li><strong>Jenis Kelamin</strong></li>
                    <li>{{ ($konseling->mahasiswa->jenis_kelamin == 'l') ? "Laki-laki" : 'Perempuan' }}</li>
                    <li><strong>Jenis Depresi</strong></li>
                    <li>{{ $konseling->mahasiswa->jenis_depresi }}</li>
                    <li><strong>Jenis Anxiety</strong></li>
                    <li>{{ $konseling->mahasiswa->jenis_anxiety }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="mt-3">
            
        </div>
    </div>
</div>

@endsection


@push('scripts')
<div id="theModal" class="modal fade text-center">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
           // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( '.myeditors' );
    });

    $('.modal-btn').on('click', function(e){
        e.preventDefault();
        $('#theModal').modal('show').find('.modal-content').load($(this).attr('href'));
    });
</script>
@endpush