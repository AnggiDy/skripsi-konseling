<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = [
        'nama_kategori',
        'keterangan'
    ];

    public function konseling()
    {
        return $this->hasMany('App\Konseling');
    }

    public function artikel()
    {
        return $this->hasMany('App\Artikel');
    }

    public function getDefaultValues()
    {
        return [
            'nama_kategori' => '',
            'keterangan' => ''
        ];
    }
}
