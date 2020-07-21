<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $kategori;

    public function __construct()
    {
        $this->kategori = new Kategori();
    }

    public function index()
    {
        return view('admin.kategori.index', ['categories' => Kategori::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = (object) $this->kategori->getDefaultValues();
        return view('admin.kategori.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $this->kategori->create($request->all());
        return redirect('kategori')->with('success', 'Berhasil menambah data kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kategori'] = $this->kategori->findOrFail($id);
        return view('admin.kategori.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $this->kategori->findOrFail($id)->update($request->all());
        return redirect('kategori')->with('success', 'Berhasil mengubah data kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->kategori->findOrFail($id)->delete();
        return redirect('kategori')->with('success', 'Berhasil menghapus data kategori');
    }
}
