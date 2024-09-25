<div class="sidebar">
    <nav class="sidebar-nav ps">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('panels.index')}}">
            <i class="nav-icon cui-speedometer"></i> Dashboard
          </a>
        </li>
        <li class="nav-title">Pengguna</li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('panels.index') }}">
            <i class="nav-icon cui-drop"></i> Semua</a>
        </li>
        
        <li class="divider"></li>
        <li class="nav-title">Akun</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
              <i class="nav-icon cui-account-logout"></i> Logout</a>
        </li>
      </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
  </div>