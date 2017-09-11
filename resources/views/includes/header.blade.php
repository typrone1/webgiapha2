<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

    <style>
        @media (max-width: 576px) {
            nav .container {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a href="/" class="navbar-brand"> Gia phả</a>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="/" class="nav-link"> Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('quan-ly-ho-so')}}"> Hồ sơ thành viên </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('so-do-gia-pha')}}"> Xem cây gia phả </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"> Xem lịch việc tộc </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"> Giới thiệu </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"> Tìm kiếm </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>

                @else
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>