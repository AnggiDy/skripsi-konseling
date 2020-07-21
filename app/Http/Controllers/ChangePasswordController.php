<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        if (Auth::guard('web')->check()) {
            return view('admin.change_password');
        } else {
            return view('mahasiswa.change_password');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|max:24',
            'password' => 'required|max:24|min:6|confirmed',
        ]);
        if (!(Hash::check($request->old_password, Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Password lama anda tidak cocok!");
        }
        if(strcmp($request->old_password, $request->password) == 0){
            return redirect()->back()->with("error","Password lama dan password baru tidak boleh sama!");
        }

        $user = Auth::user();
  
        $user->password = $request->password;
        $user->save();


        return redirect()->back()->with("success","Ubah Password berhasil!");
    }
}
