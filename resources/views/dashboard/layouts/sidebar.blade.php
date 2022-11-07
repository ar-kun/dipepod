<!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active':'' }}" aria-current="page" href="/dashboard">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      @can('admin')
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/news*') ? 'active':'' }}" href="/dashboard/news">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Berita
        </a>
      </li>
      @endcan
    </ul>
    @can('Admin_UMKM')
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Administrator
        UMKM</span></h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/umkm*') ? 'active':'' }}" aria-current="page" href="/dashboard/umkm">
          <span data-feather="grid" class="align-text-bottom"></span>
          Manage UMKM
        </a>
      </li>
    </ul>
    @endcan
    @can('Admin_Wisata')
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Administrator
        Wisata</span></h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/wisata*') ? 'active':'' }}" aria-current="page" href="/dashboard/wisata">
          <span data-feather="grid" class="align-text-bottom"></span>
          Manage Wisata
        </a>
      </li>
    </ul>
    @endcan
  </div>
</nav> -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="super-admin.html">
    <div class="sidebar-brand-text mx-3">DIPEPOD Manager</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard') ? 'active':'' }}" aria-current="page" href="/dashboard">
      <span data-feather="home" class="align-text-bottom"></span>
      Dashboard
    </a>
  </li>
  @can('admin')
  <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/news*') ? 'active':'' }}" href="/dashboard/news">
      <span data-feather="file-text" class="align-text-bottom"></span>
      Berita
    </a>
  </li>
  @endcan
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Layanan</span>
  </h6>
  @can('Admin_UMKM')
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/umkm*') ? 'active':'' }}" aria-current="page" href="/dashboard/umkm">
        <span data-feather="grid" class="align-text-bottom"></span>
        Manage UMKM
      </a>
    </li>
  </ul>
  @endcan
  @can('Admin_Wisata')
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/wisata*') ? 'active':'' }}" aria-current="page" href="/dashboard/wisata">
        <span data-feather="grid" class="align-text-bottom"></span>
        Manage Wisata
      </a>
    </li>
  </ul>
  @endcan
  <!-- Nav Item - Logout -->
  <form action="/logout" method="post">
    @csrf
    <li class="nav-item">
      <button type="submit" class="nav-link px-3 bg-transparent border-0 d-flex align-items-center">Logout<span data-feather="log-out" class="mx-2"></span></button>
    </li>
  </form>


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>