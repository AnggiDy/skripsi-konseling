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
	<h4 class="header-title">Kuesioner kesehatan pasien-9 (PHQ-9)</h4>

	<br><h6>
    Selama 2 minggu terakhir, seberapa sering Anda terganggu oleh masalah-masalah berikut?
    <br></h6>

    <form action="{{ route('konseling.phq.store') }}" method="post">
        @csrf

        <br>
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
			    1. Kurang tertarik atau bergairah dalam melakukan apapun
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
			    2. Merasa murung, muram dan putus asa
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
			    3. Sulit tidur atau mudah terbangun atau terlalu banyak tidur
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
			    4. Merasa lelah atau kurang bertenaga
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
			    5. Kurang nafsu makan atau terlalu banyak makan
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
			    6. Kurang percaya diri - atau merasa bahwa Anda adalah orang yang gagal atau telah mengecewakan diri sendiri atau keluarga
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
			    7. Sulit berkonsentrasi pada sesuatu, misalnya membaca koran atau menonton televisi
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
    	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
			    8. Bergerak atau berbicara sangat lambat sehingga orang lain memperhatikannya. Atau sebaliknya - merasa resah atau gelisah sehingga Anda lebih sering bergerak dari biasanya
			         <br>
			        <input type="radio" class ="check" name="choose8" value=0>Tidak pernah
			        <br>
			        <input type="radio" class ="check" name="choose8" value=1>Beberapa Hari 
			        <br>
			        <input type="radio" class ="check" name="choose8" value=2>Lebih dari separuh waktu yang dimaksud
			        <br>
			        <input type="radio" class ="check" name="choose8" value=3>Hampir setiap hari
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
			    9. Merasa lebih baik mati atau ingin melukai diri sendiri dengan cara apapun
			        <br>
			        <input type="radio" class ="check" name="choose9" value=0>Tidak pernah
			        <br>
			        <input type="radio" class ="check" name="choose9" value=1>Beberapa Hari 
			        <br>
			        <input type="radio" class ="check" name="choose9" value=2>Lebih dari separuh waktu yang dimaksud
			        <br>
			        <input type="radio" class ="check" name="choose9" value=3>Hampir setiap hari
			        <br>
    		    </div>
			</div>
		</div>
		</div>

    	<br>
    	<div class="row" style="justify-content: center">
    	<input type ="submit" name="resultButton" id = "totalSum"  value = "Get Result" >
        </div>
                  
</div>

</form>
</div>

@endsection