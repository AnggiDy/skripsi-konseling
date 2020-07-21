<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Http\Requests\StoreArtikel;
use App\Kategori;
use Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $artikel;

    public function __construct()
    {
        $this->artikel = new Artikel();
    }

    public function index()
    {
        return view('admin.artikel.index', ['artikel' => $this->artikel->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.artikel.form', ['artikel' => (object) $this->artikel->getDefaultValues(), 'kategori' => Kategori::orderBy('nama_kategori')->get() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtikel $request)
    {
        $input = $request->all();
        $input['cover'] = '';
        if($request->hasFile('cover')){
            $upload = $request->cover->store('cover');
            $input['cover'] = $request->cover->hashName();
        }

        $input['user_id'] = Auth::user()->id;
        $input['waktu'] = $request['waktu']. ' ' . date('H:i:s');
        $insert = $this->artikel->create($input);
        if($insert){
            return redirect('artikel')->with('success', 'Berhasil menambah data artikel');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('admin.artikel.form', ['artikel' => $this->artikel->find($id), 'kategori' => Kategori::orderBy('nama_kategori')->get() ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('admin.artikel.form', ['artikel' => $this->artikel->find($id), 'kategori' => Kategori::orderBy('nama_kategori')->get() ]);    
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
        $artikel = $this->artikel->find($id);

        if($request->hasFile('cover')){
            //remove old photos
            if(is_file('storage/cover/'.$artikel->cover)){
                unlink('storage/cover/'.$artikel->cover);
            }
            $request->cover->store('cover');
        } else {
            $rename = $artikel->cover;
        }

        $input = $request->all();

        if($input['waktu'] != $artikel->waktu){
            $input['waktu'] = $input['waktu'] . ' ' . date('H:i:s');
        }
        $input['cover'] = $request->cover->hashName();

        $artikel->update($input);

        return redirect('artikel')->with('success', 'Berhasil menambah mengubah artikel');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = $this->artikel->find($id);
        if($artikel->cover != ''){
            //remove old photos
            if(is_file('storage/cover/'.$artikel->cover)){
                unlink('storage/cover/'.$artikel->cover);
            }
        }
        $artikel->delete();
        return redirect('artikel')->with('success', 'Berhasil menambah menghapus artikel');
    }
}
