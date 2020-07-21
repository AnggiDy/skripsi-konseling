        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo brand brand-text">
                    <a href="{{ url('dashboard') }}">E-Konseling UNJ</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>                        
                        <ul class="metismenu" id="menu">
                            <li class="{{ (urlHasPrefix('dashboard') == true) ? 'active' : '' }}"> 
                                <a href="{{ url('dashboard') }}"><i class="fa fa-home"></i><span>dashboard</span></a>                        
                            </li>
                            <li class="{{ (urlHasPrefix('statistik') == true) ? 'active' : '' }}">  
                                <a href="{{ url('statistik') }}"><i class="fas fa-chart-bar"></i><span>Statistik</span></a>                        
                            </li>
                            <li class="{{ (urlHasPrefix('kategori') == true) ? 'active' : '' }}">  
                                <a href="{{ url('kategori') }}"><i class="fa fa-list"></i><span>Kategori</span></a>                        
                            </li>
                            <li class="{{ (urlHasPrefix('user') == true) ? 'active' : '' }}">
                                <a href="{{ url('user') }}"><i class="fa fa-user"></i><span>user</span></a>                        
                            </li>
                            <li class="{{ (urlHasPrefix('mahasiswa') == true) ? 'active' : '' }}">
                                <a href="{{ url('mahasiswa') }}"><i class="fa fa-graduation-cap"></i><span>mahasiswa</span></a>                        
                            </li>
                            <li class="{{ (urlHasPrefix('artikel') == true) ? 'active' : '' }}">
                                <a href="{{ url('artikel') }}"><i class="fa fa-book"></i><span>artikel</span></a>                        
                            </li>
                            @if(Auth::user()->role == 'konselor')
                            <li class="{{ (urlHasPrefix('konseling') == true) ? 'active' : '' }}">
                                <a href="{{ url('konseling') }}"><i class="fa fa-hands"></i><span>konseling</span></a>                        
                            </li>
                            @endif
                        </ul>
                                                                      
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->