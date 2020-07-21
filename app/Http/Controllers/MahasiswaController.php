<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswa;
use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $mahasiswa;
    
    public function __construct()
    {
        $this->mahasiswa = new Mahasiswa();
    }

    public function index()
    {
        return view('admin.mahasiswa.index', ['mahasiswa' => $this->mahasiswa->orderBy('nrm', 'asc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.mahasiswa.modal', ['mahasiswa' => $this->mahasiswa->findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.mahasiswa.form', ['mahasiswa' => $this->mahasiswa->findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMahasiswa $request, $id)
    {
        $this->mahasiswa->find($id)->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Berhasil mengubah data mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->mahasiswa->find($id)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Berhasil menghapus data mahasiswa');
    }
}
