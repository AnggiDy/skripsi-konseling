<div class="modal-header">
    <h5 class="modal-title">Respon Konseling</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="{{ route('respon.store') }}" method="post">
    <div class="modal-body">
        <div class="text-left">
            <p>Masukan balasan anda</p>
            @csrf
            <input type="hidden" name="konseling_id" value="{{ $konseling->id }}">
            <input type="hidden" name="jenis_responden" value="konselor">
            <input type="hidden" name="waktu" value="{{ date('Y-m-d H:i:s') }}">
            <textarea name="isi_respon" class="form-control" id="myeditors"></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Kirim">
    </div>
</form>