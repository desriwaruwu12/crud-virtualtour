<nav class="sidebar sidebar-offcanvas shadow" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">
          <span class="menu-title">User</span>
          <i class="mdi mdi-account menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Master</span>
          <i class="mdi mdi-wrap menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('about.index')}}">About Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('keunggulan.index')}}">Keunggulan</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('work.index')}}">Work</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('testimoni.index')}}">Testimoni</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('posts.index')}}">Galeri</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('destinasi.index')}}">Destinasi</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('berita.index')}}">Berita</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('headline.index')}}">Headline </a></li>
             <li class="nav-item"> <a class="nav-link" href="{{route('staff.index')}}">Staff</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('partner.index')}}">Partner</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">E-Commerce</span>
          <i class="mdi mdi-wrap menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic1">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('offline.index')}}">Offline Tour</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('virtual.index')}}">Virtual Tour</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
