<aside class="main-sidebar sidebar-dark-secondary elevation-4" style="background-color: #010445">
  <!-- Brand Logo -->
  <a href="#" class="brand-link" style="background-color: #010445">
    <center>
      <span class="brand-text font-weight-bold">SIPENA</span>
    </center>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul
        class="nav nav-pills nav-sidebar flex-column"
        data-widget="treeview"
        role="menu"
        data-accordion="false"
      >
        <li class="nav-item">
          <a href="/dashboard-kemahasiswaan" class="nav-link {{ Request::is('dashboard-kemahasiswaan') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link {{ Request::is('dashboard-kemahasiswaan/data-pengguna*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Data Pengguna
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan" class="nav-link {{ Request::is('dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan') ? 'active' : '' }}">
                <p>Data Kemahasiswaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard-kemahasiswaan/data-pengguna/data-ormawa" class="nav-link {{ Request::is('dashboard-kemahasiswaan/data-pengguna/data-ormawa') ? 'active' : '' }}">
                <p>Data Ormawa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/dashboard-kemahasiswaan/data-pengajuan" class="nav-link {{ Request::is('dashboard-kemahasiswaan/data-pengajuan*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-copy"></i>
            <p>Data Pengajuan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard-kemahasiswaan/data-laporan" class="nav-link {{ Request::is('dashboard-kemahasiswaan/data-laporan') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file"></i>
            <p>Data Laporan</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>