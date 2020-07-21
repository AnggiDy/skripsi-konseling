<!-- main header area start -->
<div class="mainheader-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">                        
                <h3><a href="{{ url('/') }}" style="color:#005E9C!important"> E-Konseling UPT LBK UNJ</a></h3>                     
            </div>
            <!-- profile info & task notification -->
            <div class="col-md-6 clearfix text-right">
                @guest('mahasiswa')
                    <!-- Jika tidak login -->
                    <div class="col-md-12 text-right header-login-btn pt-2 pb-2">
                        <a href="{{ route('mahasiswa.loginform') }}" class="btn btn-outline-primary btn-sm">
                            Login
                        </a>
                        <a href="{{ route('mahasiswa.registerform') }}" class="btn btn-primary btn-sm">
                            Register
                        </a>
                    </div>                    
                    
                @else           
             
                <div class="clearfix d-md-inline-block d-block">
                    <div class="user-profile m-0">       
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ splitName(Auth::guard('mahasiswa')->user()->nama) }} <i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <form action="{{ route('mahasiswa.logout') }}" method="post">
                                @csrf
                                <a class="dropdown-item" href="{{ url('daftar-konseling') }}">Daftar Konseling</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                                <a class="dropdown-item" href="{{ url('ganti-password') }}">Ubah Password</a>
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </div>
</div>
<!-- main header area end -->
<!-- header area start -->
<div class="header-area header-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9  d-none d-lg-block">
                <div class="horizontal-menu">
                    <nav>
                        <ul id="nav_menu">
                            <li>
                                <a href="{{ url('/') }}"><i class="fa fa-home"></i><span>Home</span></a>            
                            </li>
                            <li>
                                <a href="{{ url('listing/konseling') }}"><i class="fa fa-hands"></i><span>Konseling</span></a>
                                <ul class="submenu">
                                    @foreach(menuCategories() as $menu)
                                        <li><a href="{{ url('listing/konseling/'.$menu->id) }}">{{ $menu->nama_kategori }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('listing/artikel') }}"><i class="fa fa-book"></i><span>Artikel</span></a>
                                <ul class="submenu">
                                    @foreach(menuCategories() as $menu)
                                        <li><a href="{{ url('listing/artikel/'.$menu->id) }}">{{ $menu->nama_kategori }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <!-- daerah edit menu about us -->
                            <li>
                                <a href="{{ url('listing/about_us') }}"><span>About Us</span></a>
                            </li>
                            <!-- daerah edit menu about us -->
                            
                        </ul>
                    </nav>
                </div>
            </div>                   
            <!-- mobile_menu -->
            <div class="col-12 d-block d-lg-none">
                <div id="mobile_menu"></div>
            </div>
        </div>
    </div>
</div>
<!-- header area end -->