<div class="modal-header">
    <h5 class="modal-title">Detail User</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="text-left">
        <h5 class="mb-3">
            {{ ucwords($user->nama) }}
        </h5>

        <table class="table">
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $user->tanggal_lahir }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ ($user->jenis_kelamin == 'l') ? 'Laki - Laki' : 'Perempuan' }}</td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td>:</td>
                <td>{{ $user->no_telp }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $user->alamat }}</td>
            </tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td>{{ $user->role }}</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>{{ $user->username }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><span class="badge {{ ($user->status == '1') ? 'badge-success' : 'badge-danger' }}">{{ ($user->status == '1') ? 'Aktif' : 'Tidak Aktif' }}</span></td>
            </tr>
        </table>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>