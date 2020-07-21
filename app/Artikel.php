<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'waktu',
        'judul',
        'isi',
        'cover',
        'kategori_id',
        'user_id',
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Komentar');
    }

    public function getDefaultValues()
    {
        return [
            'waktu' => '',
            'judul' => '',
            'isi' => '',
            'cover' => '',
            'kategori_id' => '',
            'user_id' => '',
        ];
    }
}
