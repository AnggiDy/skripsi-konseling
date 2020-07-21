<?php

namespace App\Http\Controllers;

use App\Konseling;
use Illuminate\Http\Request;
use App\Respon;
use Auth;

class ResponController extends Controller
{

    protected $konseling;

    public function __construct()
    {
        $this->konseling = new Konseling();
    }
    public function create($konseling_id)
    {
        $data['konseling'] = Konseling::find($konseling_id);
        if(Auth::guard('web')->check()){
            return view('admin.konseling.modal', $data);
        } else {
            return view('mahasiswa.listing.modal_respon_konseling', $data);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'isi_respon' => 'required',            
        ]);
        $input = $request->all();
        $input['responden_id'] = Auth::user()->id;

        Respon::create($input);
        if(Auth::guard('web')->check()){
            $data['konseling'] = $this->konseling->find($input['responden_id']);
            $counter = $data['konseling']['read_counter'];
            $new_counter = $counter - 1;
            $this->konseling->where('id', $input['responden_id'])->update(['read_counter' => $new_counter]);
            return redirect()->back()->with('success', 'Berhasil merespon konseling mahasiswa.');
        } else {
            return redirect()->back()->with('success', 'Berhasil memberi tanggapan.');
        }
        
    }
}
