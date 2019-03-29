<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{$page_title}} | {{$site_title}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="/favicon.png">
    <style>
        loading>div {
            text-align: center;
        }

        loading p {
            font-weight: 300;
        }

        loading {
            display: flex;
            z-index: 999;
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            justify-content: center;
            align-items: center;
            background: #f5f5f5;
            transition: .2s ease-out .0s;
            opacity: 1;
        }

        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 64px;
            height: 64px;
        }

        .lds-ellipsis div {
            position: absolute;
            top: 27px;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background: rgba(0, 0, 0, .54);
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 6px;
            animation: lds-ellipsis1 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(2) {
            left: 6px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(3) {
            left: 26px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(4) {
            left: 45px;
            animation: lds-ellipsis3 0.6s infinite;
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(0);
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(19px, 0);
            }
        }
    </style>
</head>
<body>
    <loading>
        <div>
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p>正在加载中</p>
        </div>
    </loading>
    <link rel="stylesheet" href="/static/fonts/Roboto/roboto.css">
    <link rel="stylesheet" href="/static/fonts/Montserrat/montserrat.css">
    <link rel="stylesheet" href="/static/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="/static/css/wemd-color-scheme.css">
    <link rel="stylesheet" href="/static/css/main.css">
    <link rel="stylesheet" href="/static/css/animate.min.css">
    <link rel="stylesheet" href="/static/fonts/MDI-WXSS/MDI.css">
    <link rel="stylesheet" href="/static/fonts/Devicon/devicon.css">
    <div class="mundb-background-container">
        <img src="">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:30px;position:sticky;top:0;z-index:999;">
        <a class="navbar-brand" href="/">
            <img src="/static/img/njupt.png" height="30"> NJUPT 新生杯 2019
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item />">
                    <a class="nav-link @if ($navigation === "Home") active @endif" href="/">首页 <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav mundb-nav-right">
                <li class="nav-item mundb-no-shrink />">
                @guest
                <a class="nav-link @if ($navigation === "Account") active @endif" href="/account">登录</a>
                @else
                <li class="nav-item dropdown mundb-btn-ucenter">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">您好，{{ Auth::user()["name"] }}！</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header"><div><h6>{{ Auth::user()["name"] }}<br/><small>{{ Auth::user()->sid }}</small></h6></div></div>
                        <div class="dropdown-divider"></div>
                        <a  class="dropdown-item text-danger"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="MDI exit-to-app text-danger"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <script>
                  window.addEventListener("load", function () {
                    $('.dropdown-header').click(function (e) {
                      e.stopPropagation();
                    });
                  }, false);
                </script>
            @endguest
                    <script>
                        window.addEventListener("load", function () {
                        $('.dropdown-header').click(function (e) {
                            e.stopPropagation();
                            });
                        }, false);
                    </script>
                </li>
            </ul>
        </div>
    </nav>
    @yield('template')
    <footer class="mundb-footer bg-dark text-light d-print-none">
        Copyright &copy; 新生杯 2019, all rights reserved.
    </footer>
    <script src="/static/library/jquery/dist/jquery.min.js"></script>
    <script src="/static/js/popper.min.js"></script>
    <script src="/static/js/snackbar.min.js"></script>
    <script src="/static/js/bootstrap-material-design.js"></script>
</body>
</html>
