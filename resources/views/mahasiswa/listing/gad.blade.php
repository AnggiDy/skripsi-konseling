@extends('mahasiswa.layouts.app')

@section('title', 'Data Artikel ')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
  </script>

<style>
   .container input[type="radio"] {
        margin :10px;
        margin-right: 10px;
    }
</style>
  

<div class="container mt-5">
    <h4 class="header-title">Kuesioner kesehatan pasien-9 (GAD-7)</h4>

    <br><h6>
    Selama 2 minggu terakhir, seberapa sering Anda terganggu oleh masalah-masalah berikut?
    <br></h6>

    <form action="{{ route('konseling.gad.store') }}" method="post">
        @csrf

        <br>
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                1. Merasa gugup, cemas atau gelisah
                    <br>
                    <input type="radio" class ="check" name="choose1" value=0>Tidak pernah
                    <br>   
                    <input type="radio" class ="check" name="choose1" value=1>Beberapa Hari
                    <br>   
                    <input type="radio" class ="check" name="choose1" value=2>Lebih dari separuh waktu yang dimaksud
                    <br>
                    <input type="radio" class ="check" name="choose1" value=3>Hampir setiap hari
                    <br>
                </div>
            </div>
        </div>
        </div>
    
    
        <br>
    
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                2. Tidak bisa berhenti atau mengendalikan kekhawatiran
                    <br>
                    <input type="radio" class ="check" name="choose2" value=0>Tidak pernah
                    <br>
                    <input type="radio" class ="check" name="choose2" value=1>Beberapa Hari 
                    <br>
                    <input type="radio" class ="check" name="choose2" value=2>Lebih dari separuh waktu yang dimaksud
                    <br>
                    <input type="radio" class ="check" name="choose2" value=3>Hampir setiap hari
                    <br>
                </div>
            </div>
        </div>
        </div>
    
      
        <br>
    
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                3. Sangat khawatir akan berbagai hal
                    <br>
                    <input type="radio" class ="check" name="choose3" value=0>Tidak pernah
                    <br>
                    <input type="radio" class ="check" name="choose3" value=1>Beberapa Hari 
                    <br>
                    <input type="radio" class ="check" name="choose3" value=2>Lebih dari separuh waktu yang dimaksud
                    <br>
                    <input type="radio" class ="check" name="choose3" value=3>Hampir setiap hari
                    <br>
                </div>
            </div>
        </div>
        </div>
    
      
        <br>
    
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                4. Kesulitan beristirahat
                    <br>
                    <input type="radio" class ="check" name="choose4" value=0>Tidak pernah
                    <br>
                    <input type="radio" class ="check" name="choose4" value=1>Beberapa Hari 
                    <br>
                    <input type="radio" class ="check" name="choose4" value=2>Lebih dari separuh waktu yang dimaksud
                    <br>
                    <input type="radio" class ="check" name="choose4" value=3>Hampir setiap hari
                    <br>
                </div>
            </div>
        </div>
        </div>
    
      
        <br>
    
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                5. Merasa resah sehingga sulit untuk duduk dengan tenang
                    <br>
                    <input type="radio" class ="check" name="choose5" value=0>Tidak pernah
                    <br>
                    <input type="radio" class ="check" name="choose5" value=1>Beberapa Hari 
                    <br>
                    <input type="radio" class ="check" name="choose5" value=2>Lebih dari separuh waktu yang dimaksud
                    <br>
                    <input type="radio" class ="check" name="choose5" value=3>Hampir setiap hari
                    <br>
                </div>
            </div>
        </div>
        </div>
      
        <br>
    
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                6. Mudah kesal atau marah
                    <br>
                    <input type="radio" class ="check" name="choose6" value=0>Tidak pernah
                    <br>
                    <input type="radio" class ="check" name="choose6" value=1>Beberapa Hari 
                    <br>
                    <input type="radio" class ="check" name="choose6" value=2>Lebih dari separuh waktu yang dimaksud
                    <br>
                    <input type="radio" class ="check" name="choose6" value=3>Hampir setiap hari
                    <br>
                </div>
            </div>
        </div>
        </div>
      
        <br>
    
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                7. Merasa takut, seakan-akan sesuatu yang buruk akan terjadi
                    <br>
                    <input type="radio" class ="check" name="choose7" value=0>Tidak pernah
                    <br>
                    <input type="radio" class ="check" name="choose7" value=1>Beberapa Hari 
                    <br>
                    <input type="radio" class ="check" name="choose7" value=2>Lebih dari separuh waktu yang dimaksud
                    <br>
                    <input type="radio" class ="check" name="choose7" value=3>Hampir setiap hari
                    <br>
                </div>
            </div>
        </div>
        </div>
    
        <br>
        <div class="row" style="justify-content: center">
            <input type ="submit" name="resultButton" id = "totalSum"  value = "Get Result">
        </div>
                  
</div>
            
</form>
</div>

@endsection