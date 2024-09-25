<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img class="navbar-brand-full" style="width:100%;" src="{{ asset('common/img/logo_tsubame-jltc.gif') }}" alt="Tsubame Logo">
      <img class="navbar-brand-minimized"
      src="{{ asset('common/img/logo_tsubame-jltc.gif') }}" alt="Tsubame Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none mr-auto">
      <li class="nav-item px-3">
        <a class="nav-link" href="{{ route('panels.index') }}">Dashboard</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" target="_blank" href="{{route('sites.landing')}}">Lihat Situs</a>
      </li>
    </ul>
    
  </header>