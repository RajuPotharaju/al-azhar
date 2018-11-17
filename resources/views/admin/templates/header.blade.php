<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin - Al Azhar Hospital</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('public/dist/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('public/dist/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/modules/weather-icon/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/modules/weather-icon/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/modules/flag-icon-css/css/flag-icon.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('public/dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/css/custom.css')}}">
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg bg-green"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <!-- <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </div> -->
                </form>
                <ul class="navbar-nav navbar-right">
                    <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="dist/img/avatar/avatar-1.png" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="dist/img/avatar/avatar-2.png" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="dist/img/avatar/avatar-3.png" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="dist/img/avatar/avatar-4.png" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="dist/img/avatar/avatar-5.png" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('public/dist/img/avatar/avatar-1.png')}}" width="30" class="rounded-circle mr-1')}}">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{$user_name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a href="#" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a> -->
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>