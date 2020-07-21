<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konseling;
use App\Kategori;
use Auth;

class KonselingController extends Controller
{
    protected $konseling;

    public function __construct()
    {
        $this->konseling = new Konseling();
    }

    public function index()
    {
        return view('admin.konseling.index', ['konseling' => $this->konseling->orderBy('waktu', 'desc')->get() ]);
    }

    public function response($id)
    {
        
        if(Auth::guard('web')->check()){
            $data['konseling'] = $this->konseling->find($id);
           $counter = $data['konseling']['read_counter'];
           $new_counter = $counter + 1;
             $this->konseling->where('id', $id)->update(['read_counter' => $new_counter]);
            return view('admin.konseling.show', $data);
        } else {
            $data['konseling'] = $this->konseling->where('id', $id)->first();
            if($data['konseling']->status == '0'){
                if(Auth::guard('mahasiswa')->user()->id != $data['konseling']->mahasiswa_id){
                    return redirect()->back()->with('error', 'Tidak dapat mengakses konseling tersebut');
                }
            }
            return view('mahasiswa.listing.detail_konseling', $data);
        }
    }

    public function create()
    {
        $data['kategori'] = Kategori::orderBy('nama_kategori', 'asc')->get();
        return view('mahasiswa.form_konseling', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_konseling' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required',
            'status' => 'required'
        ]);
        $request['waktu'] = date('Y-m-d H:i:s');
        $request['mahasiswa_id'] = Auth::guard('mahasiswa')->user()->id;
        Konseling::create($request->all());

        return redirect()->back()->with('success', 'Konseling anda berhasil dibuat, konselor akan segera mengecek dan memberi respon, terima kasih');
    }

    public function phqstore(Request $request)
    {
        $request->validate([
            'choose1' => 'required',
            'choose2' => 'required',
            'choose3' => 'required',
            'choose4' => 'required',
            'choose5' => 'required',
            'choose6' => 'required',
            'choose7' => 'required',
            'choose8' => 'required',
            'choose9' => 'required',
        ]);

        $jumlah = $request['choose1'] + $request['choose2'] + $request['choose3'] + $request['choose4'] + $request['choose5'] + $request['choose6'] + $request['choose7'] + $request['choose8'] + $request['choose9'];

        if($jumlah >= 5 && $jumlah <= 9){
            $jenis_depresi = "Depresi Ringan";
        }elseif ($jumlah >= 10 && $jumlah <= 14) {
            $jenis_depresi = "Depresi Sedang";
        }elseif ($jumlah >= 15 && $jumlah <= 20) {
            $jenis_depresi = "Depresi Berat";
        }elseif ($jumlah >= 21 && $jumlah <= 27) {
            $jenis_depresi = "Depresi Sangat Berat";
        }else{
            $jenis_depresi = "Tidak Depresi";
        }

        $user = Auth::user();
  
        $user->jenis_depresi = $jenis_depresi;
        $user->save();

        return redirect()->back()->with("success","Data berhasil disimpan!");
    }

    public function gadstore(Request $request)
    {
        $request->validate([
            'choose1' => 'required',
            'choose2' => 'required',
            'choose3' => 'required',
            'choose4' => 'required',
            'choose5' => 'required',
            'choose6' => 'required',
            'choose7' => 'required'
        ]);

        $jumlah = $request['choose1'] + $request['choose2'] + $request['choose3'] + $request['choose4'] + $request['choose5'] + $request['choose6'] + $request['choose7'];

        if($jumlah >= 0 && $jumlah <= 4){
            $jenis_anxiety = "Kecemasan Minimal";
        }elseif ($jumlah >= 5 && $jumlah <= 9) {
            $jenis_anxiety = "Kecemasan Ringan";
        }elseif ($jumlah >= 10 && $jumlah <= 14) {
            $jenis_anxiety = "Kecemasan Sedang";
        }elseif ($jumlah >= 15 && $jumlah <= 21) {
            $jenis_anxiety = "Kecemasan Berat";
        }else{
            $jenis_anxiety = "Unknown Range";
        }

        $user = Auth::user();
  
        $user->jenis_anxiety = $jenis_anxiety;
        $user->save();

        return redirect()->back()->with("success","Data berhasil disimpan!");
    }

}
