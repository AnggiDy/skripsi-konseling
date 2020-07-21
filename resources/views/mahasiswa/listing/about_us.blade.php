@extends('mahasiswa.layouts.app')

@section('title', 'Tentang Layanan')

@section('content')

<div class="container mt-5">
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                	<h4 class="header-title">Visi</h4>
                    <hr>
                	<p>Menjadi Pusat Layanan Bimbingan dan Konseling yang berkualitas dalam mewujudkan kesejahteraan psikologis yang optimal bagi mahasiswa, dosen dan tenaga kependidikan Universitas Negeri jakarta serta masyarakat umum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                	<h4 class="header-title">Misi</h4>
                    <hr>
                	<p>
                		<li>Menyelenggarakan layanan bimbingan atau konsultasi bagi mahasiswa, dosen dan tenaga kependidikan Universitas Negeri Jakarta serta masyarakat umum.</li>
                		<br>
                		<li>Menyelenggarakan layanan konseling bagi mahasiswa, dosen dan tenaga kependidikan Universitas Negeri Jakarta serta masyarakat umum dalam upaya mengembangkan kesejahteraan psikologis.</li>
                		<br>
                		<li>Menyelenggarakan layanan tes psikologi yang berhubungan dengan pemahaman potensi dan minat, pengembangan kepribadian serta perencanaan karir.</li>
                		<br>
                		<li>Menyelenggarakan pelatihan kepada mahasiswa, dosen dan tenaga pendidik Universitas Negeri Jakarta serta masyarakat umum yang berhubungan dengan peningkatan kemampuan akademik, pengembangan pribadi, ketrampilan sosial dan pengembangan karir.</li>
                	</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <table class="table">
  					<thead>
    				<tr>
				      <h4 class="header-title">Tenaga Profesional</h4>
				    </tr>
				  	</thead>
				  
				  	<tbody>
                        <tr>
                            <th scope="row"></th>
                            <?php $no = 0;
                            foreach ($konselor as $key) {
                                if($no%2 == 0 && $no != 0){
                                    echo '</tr><tr><th scope="row"></th>';
                                }                                
                                echo '<td><strong>'.$key->nama.'</strong></td>';
                                $no++;
                            }
                            ?>
                        </tr>
				    
				    </tbody>
					</table>

                </div>
            </div>
		</div>
	</div>
</div>

<div class="container mt-5">
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                	<h4 class="header-title">Jaminan Layanan</h4>
                    <hr>
                	<p>
                		<li>Berdasarkan kode etik.</li>
                		<br>
                		<li>Profesi Psikolog dan Konselor.
                			<dd>HIMPSI (Himpunan Psikologi Indonesia)</dd>
                			<dd>ABKIN (Asosiasi Bimbingan Konseling Indonesia)</dd></li>
                		<br>
                		<li>Dilakukan oleh para profesional.
                			<dd>Tenaga profesional yang memiliki latar belakang dibidang psikologi atau bimbingan dan konseling.</dd></li>
                		<br>
                		<li>Kerahasiaan data terjamin.</li>
                	</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection