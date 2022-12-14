<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('template2')}}/images/icon/logo_papertech.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="nav-item">
       @if (auth()->user()->level == "klinik")
                        <li class="active has-sub">
                            <a class="js-arrow" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="/kelola_pasien_tamu">
                                <i class="fas fa-copy"></i>Kelola Pasien Tamu</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="/kelola_pasien">
                                <i class="fas fa-copy"></i>Kelola Pasien Pegawai</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="/kelola_obat">
                                <i class="fas fa-copy"></i>Kelola Obat</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="/laporan_klinik">
                                <i class="fas fa-desktop"></i>Laporan Klinik</a>
                            
                            </ul>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>