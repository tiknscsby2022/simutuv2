    {{-- Sidebar --}}    
    <aside class="main-sidebar sidebar-dark-primary elevation-4">    
        <a class="brand-link text-center" disabled>           
            <span class="brand-text font-weight-light">Simutu Go</span>
        </a>
        <div class="sidebar">                             
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('admin_beranda_show') }}" class="nav-link {{ request()->route()->name('admin_beranda_show') ? 'active' : '' }}">                            
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p> Beranda</p>
                        </a>
                    </li>                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p> Penguna <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin_pengguna_departemen_show') }}" class="nav-link {{ request()->route()->name('admin_pengguna_departemen_show') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Departemen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Pengguna</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>      
        </div>    
    </aside>