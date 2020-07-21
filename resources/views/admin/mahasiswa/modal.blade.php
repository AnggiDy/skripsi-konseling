<div class="modal-header">
    <h5 class="modal-title">Detail Mahasiswa</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="text-left">
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
                <td>No. Telp</td>
                <td>:</td>
                <td>{{ $mahasiswa->no_telp }}</td>
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
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $mahasiswa->alamat }}</td>
            </tr>               
        </table>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>