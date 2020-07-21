<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Validator;
use Auth;

class MahasiswaRegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest:mahasiswa');
    }

    public function showRegisterForm()
    {
        $data['mahasiswa'] = (object) [
            'nrm' => '',
            'nama' => '',
            'fakultas' => '',
            'prodi' => '',
            'angkatan' => '',
            'jenis_kelamin' => '',
            'tanggal_lahir' => '',
            'alamat' => '',
            'no_telp' => '',
            'password' => ''
        ];
        return view('mahasiswa.auth.register', $data);
    }

    public function register(StoreMahasiswa $request)
    {
        event(new Registered($this->create($request->all())));

        return redirect($this->redirectPath())->with('success', 'Registrasi berhasil, silahkan login');
    }

    public function create($data) {
        return \App\Mahasiswa::create($data);
    }

    public function guard()
    {
        Auth::guard('mahasiswa');
    }
}
