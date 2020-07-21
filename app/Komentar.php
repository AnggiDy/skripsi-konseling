<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';

    protected $fillable = [
        'waktu',
        'isi_komentar',
        'mahasiswa_id',
        'artikel_id'
    ];

    public function artikel()
    {
        return $this->belongsTo('App\Artikel');
    }

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
