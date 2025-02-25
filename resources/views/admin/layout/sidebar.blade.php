<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> 
                <img alt="logo" src="{{asset('./otika/assets/img/logo.png')}}" class="header-logo" /> 
                <span class="logo-name">Serhat Çohadar</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menü</li>
            <li class="dropdown">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.app')}}">
                    <i class="fas fa-home"></i>
                    <span>Anasayfa</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.about')}}">
                    <i class="fas fa-user"></i>
                    <span>Hakkımda</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.services')}}">
                    <i class="fas fa-guitar"></i>
                    <span>Hizmetler</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.blog')}}">
                    <i class="fas fa-blog"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.courses')}}">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Dersler</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.contact')}}">
                    <i class="fas fa-envelope"></i>
                    <span>İletişim</span>
                </a>
            </li>
        </ul>
    </aside>
</div>

