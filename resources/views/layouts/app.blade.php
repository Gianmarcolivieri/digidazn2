<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        tbody tr:nth-child(-n+4) {
    background-color: #4285F4;
};
@media (max-width: 900px){
.idioma {
    text-align: left;
}};

@media (max-width: 600px){
.footer {
    margin-top: 30px;
    padding: 30px 0px;
}}

.card1{
    position: relative;
        display: flex;
        width: 100%;
        max-width: 520px;
        padding: 0px 16px;
        margin: 0px auto;
        flex-direction: column;
        -webkit-box-flex: 1;
        flex: 1 0 auto;
}

h1{
    color: rgb(249, 250, 250);
                text-align: center;
                font-size: 24px;
                font-weight: bold;
               ;
}
.label1{
    left: 0px;
                        display: block;
                        font-size: 14px;
                        font-weight: 500;
                        letter-spacing: 0.5px;
                        transition: all 0.2s ease 0s;
                        top: 0px;
                        color: rgb(249, 250, 250);
                        margin-top: 10px;}
.input1{
    z-index: 1;
                            position: relative;
                            border-top: none;
                            border-right: none;
                            border-left: none;
                            border-image: initial;
                            border-radius: 0px;
                            outline: 0px;
                            appearance: none;
                            background: none;
                            width: 100%;
                            font-size: 16px;
                            margin: 14px 0px 8px;
                            color: rgb(249, 250, 250);
                            border-bottom: 1px solid rgb(61, 69, 73) !important;
}
.buttonBig{
    style="    box-sizing: border-box;
                margin-top: 20px;
                border-radius: 0px;
                text-align: center;
                display: inline-flex;
                -webkit-box-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                align-items: center;
                text-decoration: none;
                border: 0px;
                cursor: pointer;
                padding: 0px 24px;
                min-height: 52px;
                min-width: 80px;
                width: 100%;
                background-color: rgb(247, 255, 26);"
}
.remake{
    margin: 0px 0px 6px;
                        padding: 0px;
                        font-size: 16px;
                        line-height: 24px;
                        color: rgb(249, 250, 250);
}
.footer{
    padding: 15px 0px;
width: 100%;
display: inline-block;
color: rgb(190, 177, 177);
align-self: flex-end;
margin-top: 100px;
text-align:center;
}
.idioma{
    margin: 0px 10px;
    padding: 10px 0px;
    font-size: 16px;
    text-align: center;
    border-bottom: 1px solid rgb(61, 69, 73);
}
@media screen and (max-width: 950px){
    .final {
        text-align: left;
    }
}
@media screen and (min-width: 950px){
.final{
    display: flex;
    justify-content: center;
    align-items: center;
}
}

.teams ul{
    list-style: none;
    display: flex;
    gap: 70px;
    justify-content: center
}
a.nav-link{
    color: white;
}
#Buttonright{
  color: black !important;
  background: rgb(247, 255, 26)  
}
    </style>
    
   
</head>
<body style="background-color: #0c161c">
    <div id="app">
        <nav class="navbar navbar-expand-md" style="background-color: #0c161c;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/dazn.png"style="width:30px;" class="logo" alt="Logo dazn"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto" style="color:white">
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('HOME') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('CALENDARIO') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              SPORT
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <ul>
                                <a class="dropdown-item" href="#">Calcio</a>
                                <a class="dropdown-item" href="#">Boxe</a>
                                <a class="dropdown-item" href="#">Ciclismo</a>
                                <a class="dropdown-item" href="#">Darts</a>
                                <a class="dropdown-item" href="#">Motori</a>
                                <a class="dropdown-item" href="#">Biliardo</a>
                                <a class="dropdown-item" href="#">Arrampicata</a>
                                </ul>
                                <ul>
                                <a class="dropdown-item" href="#">UFC</a>
                                <a class="dropdown-item" href="#">Tennis</a>
                                <a class="dropdown-item" href="#">NFL</a>
                                <a class="dropdown-item" href="#">Basket</a>
                                <a class="dropdown-item" href="#">Golf</a>
                                <a class="dropdown-item" href="#">Sport Estremi</a>
                                <a class="dropdown-item" href="#">Indoor Football</a>
                                </ul>

                              
                            </div>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('SCOPRI DI PIÙ') }}</a>
                        </li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <button type="button" class="button login">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ACCEDI') }}</a></button>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <button type="button" id="Buttonright" class="button register">
                                    <a class="nav-link"href="{{ route('register') }}">{{ __('ATTIVA ORA') }}</a> 
                                    </button>
                                </li>
                            @endif
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ESCI') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>