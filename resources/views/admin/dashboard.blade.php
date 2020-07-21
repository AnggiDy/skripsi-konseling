@extends('admin.layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Selamat Datang</h4>
                
                <hr>
              

                <h3>Anda Memiliki {{$belum_dibaca['counter']}} konseling yang belum dibaca </h3>
             
                
              <!--  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam velit a nulla atque eligendi ullam est molestias, maxime debitis, facere reiciendis omnis voluptatum mollitia iusto quis aliquam perferendis recusandae?</p>         -->
            </div>
        </div>
    </div>
</div>






          
@endsection