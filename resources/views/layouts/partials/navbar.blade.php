<nav class="navbar navbar-expand-lg navbar-dark-lg">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="#"><span>DIPEPOD</span> Nagrak Selatan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto d-flex align-items-center navbar-link">
        <li class="nav-item ">
          <a class="nav-link text-white animasiLink p-0 mx-2 {{ ($active ==="Home")?'active': '' }}" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white animasiLink p-0 mx-2 {{ ($active ==="Profile")?'active': '' }}" aria-current="page" href="/profile">Profile</a>
        </li>
        <li class="nav-item dropdown underlineLink mx-2 animasiLink">
          <a class="dropdown-toggle nav-link text-white p-0  {{ ($active ==="UMKM" || $active ==="Wisata")?'active': '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
          <ul class="dropdown-menu bg-drop custom-bg">
            <li class="nav-item">
              <a class="dropdown-item text-white {{ ($active ==="UMKM")?'active': '' }}" href="/umkm">UMKM</a>
            </li>
            <li class="nav-item">
              <a class="dropdown-item text-white {{ ($active ==="Wisata")?'active': '' }}" href="/wisata">Wisata</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white animasiLink p-0 mx-2 {{ ($active ==="News")?'active': '' }}" href="/news">Berita</a>
        </li>
        <li class="nav-item">
          <span  class="text-white">|</span>
        </li>
        <li class="nav-item mx-3">
          <a href="" class="text-white"><span><i class="fa-solid fa-magnifying-glass"></i></span
        ></a>
        </li>
        
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            </ul>
          </li>   
          @else
          <li class="nav-item btn-button">
            <a href="/login " class="nav-link text-white p-0 m-0">Login</a>
          </li>
          @endauth
      </ul>
    </div>
  </div>
</nav>