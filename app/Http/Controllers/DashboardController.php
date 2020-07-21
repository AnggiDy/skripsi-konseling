<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konseling;
use App\Kategori;

class DashboardController extends Controller
{   
    protected $konseling;

    public function __construct()
    {
        $this->konseling = new Konseling();
    }


    public function index()
    {
$data['counter']=$this->konseling
        ->where('read_counter', 0)
        ->count();
     //   print_r($data['belum_dibaca']);exit();
        return view('admin.dashboard',['belum_dibaca'=>$data]);
    }
}
