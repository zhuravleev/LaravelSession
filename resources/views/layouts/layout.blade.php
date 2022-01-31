<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project Zhuravlev</title>
    <link rel="stylesheet" href="{{ URL::asset("css/style.css") }}">
</head>
<body>
    <div class="top">
        <nav class="navigation">
            <ul class="navigation_main">
                <li><a href="/" class="navigation_link">Главная</a></li>
                @if(Auth::guest())
                    <li><a href="/login" class="navigation_link">Вход</a></li>
                    <li><a href="/registration" class="navigation_link">Регистрация</a></li>
                @else
                    <li><a href="/things" class="navigation_link">Вещи</a></li>
                    <li><a href="/places" class="navigation_link">Места</a></li>
                    <li><a href="/uses" class="navigation_link">Использование</a></li>
                    <li><a href="/logout" class="navigation_link">Выйти</a></li>
                    <div id="app"> 
                    <ul>
                                <li>
                                    <a>
                                        Уведомления <span>{{auth()->user()->unreadNotifications->count()}}</span>
                                    </a>
                                    <ul>
                                        @foreach(auth()->user()->unreadNotifications as $notification)
                                        <li><a>
                                            Вам передана вещь "{{$notification->data['give']['thing_id']}}"
                                        </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                </div>        
                @endif
            </ul>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js' )}}"></script>
</body>
</html>