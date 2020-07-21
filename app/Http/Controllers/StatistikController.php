<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konseling;
use App\Kategori;
use DB;

class StatistikController extends Controller
{   
    protected $konseling;

    public function __construct()
    {
        $this->konseling = new Konseling();
        $this->kategori = new Kategori();
    }


    public function index()
    {
        $data['konseling_by_topik']=$this->kategori
                ->join('konseling', 'kategori.id', '=', 'konseling.kategori_id', 'left')
                ->select('kategori.id', 'kategori.nama_kategori', DB::raw('COUNT(konseling.id) as total'))
                ->groupBy('kategori.id')
                ->get();
             //   print_r($data['belum_dibaca']);exit();
        //var_dump($data['counter']);

                // select UPPER(mahasiswa.jenis_kelamin) as jenis_kelamin, COUNT(mahasiswa.jenis_kelamin) as total from konseling JOIN mahasiswa ON konseling.mahasiswa_id = mahasiswa.id GROUP BY mahasiswa.jenis_kelamin
        $konseling_laki_laki =$this->konseling
                ->join('mahasiswa', 'konseling.mahasiswa_id', '=', 'mahasiswa.id')
                ->select(DB::raw('COUNT(mahasiswa.jenis_kelamin) as total'))
                ->where('jenis_kelamin', 'l')
                ->groupBy('mahasiswa.jenis_kelamin')
                ->first();

        if($konseling_laki_laki == NULL){
            $konseling_laki_laki = new \stdClass();
            $konseling_laki_laki->total = 0;
        }

        $konseling_perempuan =$this->konseling
                ->join('mahasiswa', 'konseling.mahasiswa_id', '=', 'mahasiswa.id')
                ->select(DB::raw('COUNT(mahasiswa.jenis_kelamin) as total'))
                ->where('jenis_kelamin', 'p')
                ->groupBy('mahasiswa.jenis_kelamin')
                ->first();

        if($konseling_perempuan == NULL){
            $konseling_perempuan = new \stdClass();
            $konseling_perempuan->total = 0;
        }

        $data['konseling_by_gender'] = array(
            'Laki-laki' => $konseling_laki_laki->total, 
            'Perempuan' => $konseling_perempuan->total
        );

        // foreach ($data['konseling_by_gender'] as $key => $value) {
        //     echo $value;
        //     echo "<br>";
        // }

                // select COUNT(mahasiswa.jenis_kelamin) as total from konseling JOIN mahasiswa ON konseling.mahasiswa_id = mahasiswa.id WHERE jenis_kelamin = 'p' GROUP BY mahasiswa.jenis_kelamin
        //var_dump($data['konseling_by_gender']);die();


        //echo"<pre>";var_dump($data['counter'];echo"</pre>";die();
        // foreach ($data['counter'] as $key) {
        //     echo $key->id;
        //     echo " ";
        //     echo $key->nama_kategori;
        //     echo " ";
        //     echo $key->total;
        //     echo " <br>";
        // }

        //return view('admin.dashboard',['belum_dibaca'=>$data]);
        return view('admin.statistik', $data);
    }
}
