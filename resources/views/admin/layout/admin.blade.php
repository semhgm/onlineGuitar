<!DOCTYPE html>
<html lang="tr">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>Serhat Çohadar - Online Gitar Eğitimi</title>
    <!-- General CSS Files -->
   <link rel="stylesheet" href="{{asset('./otika/assets/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('./otika/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./otika/assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('./otika/assets/css/custom.css')}}">
    <link='shortcut icon' type='image/x-icon' href='{{asset('./otika/assets/img/favicon.ico')}}' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .main-sidebar {
            background: #352f44;
        }

        .sidebar-menu li a {
            color: #FAF0E6 !important;
            padding: 12px 15px;
            margin: 4px 0;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .sidebar-menu li a:hover {
            background: #352F44;
            color: #5C5470 !important;
        }

        .sidebar-menu li a i {
            margin-right: 10px;
            font-size: 18px;
        }

        .main-content {
            background: #FFFFFF !important;
        }

        .card {
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            border-radius: 10px;
        }

        .navbar {
            background: #FFFFFF !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .btn-primary {
            background: #352F44;
            border: none;
        }

        .btn-primary:hover {
            background: #352F44;
        }

        .logo-name {
            font-size: 20px;
            font-weight: 600;
            color:#FAF0E6 !important;
        }

    </style>

</head>

<body>


<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">
            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li> <h3>Serhat Çohadar</h3></li>

                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <!-- Mesaj Bildirimi -->
                <li class="dropdown dropdown-list-toggle">
                    <a href="{{ route('admin.contact') }}" class="nav-link nav-link-lg message-toggle">
                        <i class="fas fa-envelope"></i>
                        <span class="badge headerBadge1">
                {{ $message_count }} <!-- Mesaj sayısı -->
            </span>
                    </a>
                </li>

                <!-- Profil Dropdown -->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{asset('./otika/assets/img/user.png')}}" class="user-img-radious-style">
                        <span class="d-sm-none d-lg-inline-block"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Merhaba Admin</div>
                        <a href="#" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Çıkış Yap
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
@include('admin.layout.sidebar')
        <!-- Main Content -->
        <div class="main-content" style=" min-height: 816px;" >
            <div class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="card">
                                <main class="flex-1 p-6">
                                    @yield('content')
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        @include('admin.layout.footer')

    </div>
</div>
<!-- General JS Scripts -->

<script src="{{asset('./otika/assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{asset('./otika/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('./otika/assets/js/page/index.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('./otika/assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('./otika/assets/js/custom.js')}}"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
