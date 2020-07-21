<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    protected $table = 'konseling';

    protected $fillable = [
        'judul_konseling',
        'isi',
        'waktu',
        'status',
        'kategori_id',
        'mahasiswa_id',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function responses()
    {
        return $this->hasMany('App\Respon');
    }
}
