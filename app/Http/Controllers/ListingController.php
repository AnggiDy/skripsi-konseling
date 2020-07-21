<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Kategori;
use App\Konseling;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ListingController extends Controller
{
    public function home()
    {
        $data['articles'] = Artikel::orderBy('waktu', 'desc')->paginate(3);
        $data['konseling'] = Konseling::where('status', '1')->orderBy('waktu', 'desc')->paginate(5);
        return view('mahasiswa.home', $data);
    }

    public function read($artikel_id)
    {
        $data['artikel'] = Artikel::find($artikel_id);
        $data['articles'] = Artikel::inRandomOrder()->limit(4)->get();
        if(!$data['artikel']){
            return redirect()->back()->with('error', 'Artikel tidak ditemukan');
        }
        return view('mahasiswa.listing.read_artikel', $data);
    }

    public function profile()
    {
        $data['mahasiswa'] = Auth::guard('mahasiswa')->user();
        return view('mahasiswa.listing.profile', $data);
    }

    //konseling member
    public function konselingSaya()
    {
        $data['konseling'] = Konseling::where('mahasiswa_id', Auth::guard('mahasiswa')->user()->id)->orderBy('waktu', 'desc')->get();
        return view('mahasiswa.listing.daftar_konseling', $data);
    }

    public function konseling($kategori_id = null)
    {
        $data['kategori_id'] = $kategori_id;
        if(!$kategori_id){
            $data['konseling'] = Konseling::where('status', '1')->orderBy('waktu', 'desc')->get();
        } else {
            $data['kategori'] = Kategori::find($kategori_id);
            if(!$data['kategori']){
                return redirect()->back()->with('error', 'Kategori tidak ditemukan');
            }
            $data['konseling'] = Konseling::where('status', '1')->where('kategori_id', $kategori_id)->orderBy('waktu', 'desc')->get();
        }
        return view('mahasiswa.listing.konseling', $data);
    }

    public function artikel($kategori_id = null)
    {
        $data['kategori_id'] = $kategori_id;
        if(!$kategori_id){
            $data['articles'] = Artikel::orderBy('waktu', 'desc')->get();
        } else {
            $data['kategori'] = Kategori::find($kategori_id);
            if(!$data['kategori']){
                return redirect()->back()->with('error', 'Kategori tidak ditemukan');
            }
            $data['articles'] = Artikel::where('kategori_id', $kategori_id)->orderBy('waktu', 'desc')->get();
        }
        return view('mahasiswa.listing.artikel', $data);
    }

    public function aboutUs(){
        $data['konselor'] =  User::where('role', 'konselor')->get();
        return view('mahasiswa.listing.about_us', $data);
    }

    public function phq(){
        return view('mahasiswa.listing.phq');
    }

    public function gad(){
        return view('mahasiswa.listing.gad');
    }
}
