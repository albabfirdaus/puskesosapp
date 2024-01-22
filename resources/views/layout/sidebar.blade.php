<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                @guest  
                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="/" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <span data-key="t-dashboards">Home</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="/jenis-pelayanan" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <span data-key="t-dashboards">Jenis Pelayanan</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="/jam-pelayanan" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <span data-key="t-dashboards">Jam Pelayanan</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="/pengajuan" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <span data-key="t-dashboards">Pengajuan</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="/teknis-pengajuan" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <span data-key="t-dashboards">Teknis Pengajuan</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="/cek-pengajuan" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <span data-key="t-dashboards">Cek Pengajuan</span>
                        </a>
                    </li>

                    @endguest
                    
                    @can('Admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="/home" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <span data-key="t-dashboards">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="/daftar-pengajuan" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <span data-key="t-dashboards">Daftar Pengajuan</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </div>
        </nav>
    </div>
</div>