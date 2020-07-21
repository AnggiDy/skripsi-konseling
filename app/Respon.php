<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table = 'respon';

    protected $fillable = [
        'waktu', 
        'isi_respon',
        'jenis_responden',
        'responden_id',
        'konseling_id',
    ];

    public function konseling()
    {
        return $this->belongsTo('App\Konseling');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'responden_id', 'id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa', 'responden_id', 'id');
    }
}
