<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Auth;


class MahasiswaLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest:mahasiswa')->except('logout');
    }

    public function showLoginForm()
    {
        return view('mahasiswa.auth.login');
    }

    public function username()
    {
        return 'nrm';
    }

    protected function guard()
    {
        return Auth::guard('mahasiswa');
    }


}
