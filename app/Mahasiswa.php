<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Mahasiswa extends Authenticatable
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nrm',
        'nama',
        'fakultas',
        'prodi',
        'angkatan',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'no_telp',
        'password'
    ];

    protected $hidden = ['password'];

    public function setPasswordAttribute($val)
    {
        return $this->attributes['password'] = bcrypt($val);
    }

    public function konseling()
    {
        return $this->hasMany('App\Konseling');
    }
}
