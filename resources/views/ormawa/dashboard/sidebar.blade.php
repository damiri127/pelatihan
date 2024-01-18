<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light">SIPENA</span>
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
          <a href="/dashboard-ormawa" class="nav-link {{ Request::is('dashboard-ormawa') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard-ormawa/buat-pengajuan" class="nav-link {{ Request::is('dashboard-ormawa/buat-pengajuan*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-copy"></i>
            <p>Buat Pengajuan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard-ormawa/buat-laporan" class="nav-link {{ Request::is('dashboard-ormawa/buat-laporan*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file"></i>
            <p>Buat Laporan</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>