<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('template2')}}/images/icon/logo_papertech.png" alt="PT. Papertech Indonesia" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="nav-item">
                        @if (auth()->user()->level == "security")
                        <li class="active has-sub">
                            <a class="js-arrow" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        
                        <li class="active has-sub">
                            <a class="js-arrow" href="/kelola_tamu">
                                <i class="fas fa-copy"></i>Kelola Tamu</a>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="/kelola_security">
                                <i class="fas fa-copy"></i>Kelola Security</a>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="/laporan">
                                <i class="fas fa-desktop"></i>Laporan</a>
                        </li>

                        @endif
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
                                    <a class="js-arrow" href="/kelola_perawat">
                                        <i class="fas fa-copy"></i>Kelola Perawat</a>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="/kelola_dokter">
                                        <i class="fas fa-copy"></i>Kelola Dokter</a>
                                </li>
        
                                <li class="has-sub">
                                    <a class="js-arrow" href="/laporan_klinik">
                                        <i class="fas fa-desktop"></i>Laporan Klinik</a>
                                    
                                    </ul>
                                </li>
                                @endif
                                @if (auth()->user()->level == "admin")
                                <li class="active has-sub">
                                    <a class="js-arrow" href="/dashboard">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                    
                                </li>
                                
                                <li class="has-sub">
                                    <a class="js-arrow" href="/kelola_user">
                                        <i class="fas fa-copy"></i>Kelola User</a>
                                </li>

                                <li class="has-sub">
                                    <a class="js-arrow" href="/laporan_user">
                                        <i class="fas fa-copy"></i>Laporan User</a>
                                </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>