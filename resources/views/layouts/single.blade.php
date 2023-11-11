<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Dorang landing page.">
    <meta name="author" content="Devcrud">
    <title>@yield('title')</title>
    <link type="image/x-icon" href="\assets\imgs/logo.webp" rel="shortcut icon">
    <link rel="stylesheet" href="/assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/dorang.css">
    <link rel="stylesheet" href="/assets/admin/css/videotube.min.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">
    <nav class="page-navbar" data-spy="affix" data-offset-top="10">
        <ul class="nav-navbar container">
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="{{ route('show') }}" class="nav-link">Смотреть</a></li>
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link"><img src="\assets\imgs/logo.png" alt="HIMYM" style="width: 70%"></a></li>
            <li class="nav-item"><a href="{{ route('read') }}" class="nav-link">Статьи</a></li>
            @if (Route::has('login'))
            @auth
            <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Выйти</a></li>
            <!-- @if (Auth::user()->is_admin)
            <li class="nav-item"><a href="{{ route('admin.index') }}" class="nav-link text-warning">Админка</a></li>
            @endif -->
            @else
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Войти</a></li>

            @if (Route::has('register'))
            <li class="nav-item"><a href="{{ route('register.store') }}" class="nav-link">Зарегистрироваться</a></li>
            @endif
            @endauth
            @endif

        </ul>
    </nav>

    <header class="header">
        <div class="overlay"></div>
        <div class="header-content">
            @yield('header')
        </div>
    </header>

    <div class="container-singl">
        <div class="row">
            <div class="col-12 col-sm-5">
                <div class="col-12">@yield('img')</div>
            </div>
            <div class="col-12 col-sm-7">
                @yield('info')
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                @yield('content')
            </div>
        </div>

    </div>

    <!--footer & pre footer -->
    <div class="contact-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="col-md-10 col-lg-8 m-auto">
                <h6 class="title mb-2">Оставьте отзыв</h6>
                <form action="" class="form-group">
                    <input type="text" size="50" class="form-control" placeholder="Ваше имя" required>
                    <input type="email" class="form-control" placeholder="Почта" requried>
                    <textarea name="comment" id="comment" rows="6" class="form-control" placeholder="Ваше сообщение"></textarea>
                    <input type="submit" value="Отправить" class="form-control">
                </form>
            </div>

            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Главная</a></li>
                    <li class="nav-item"><a href="{{ route('show') }}" class="nav-link">Смотреть</a></li>
                    <li class="nav-item"><a href="{{ route('read') }}" class="nav-link">Статьи</a></li>
                    @if (Auth::user()->is_admin)
                    <li class="nav-item"><a href="{{ route('admin.index') }}" class="nav-link text-warning">Админка</a></li>
                    @endif
                </ul>
                <p class="text-center" style="color: #393f44;">&copy;<script>
                        document.write(new Date().getFullYear())
                    </script>, Ткаченко Е.О. БПА20-01</p>
            </footer>
        </div>
    </div>

    <script src="/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="/assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="/assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="/assets/js/dorang.js"></script>
    <script src="/assets/admin/js/videotube.min.js"></script>
</body>

</html>