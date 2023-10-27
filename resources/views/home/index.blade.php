<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Dorang landing page.">
    <meta name="author" content="Devcrud">
    <title>How I Meet Your Mother</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Dorang main styles -->
	<link rel="stylesheet" href="assets/css/dorang.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">
    
    <!-- page navbar -->
    <nav class="page-navbar" data-spy="affix" data-offset-top="10">
        <ul class="nav-navbar container">
            <li class="nav-item"><a href="#" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Смотреть</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><img src="public\assets\imgs/logo.png" alt="HIMYM" style="width: 70%"></a></li>
            <li class="nav-item"><a href="#" class="nav-link">Статьи</a></li>
            @if (Route::has('login'))
                @auth
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Выйти</a></li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Войти</a></li>

                    @if (Route::has('register'))
                        <li class="nav-item"><a href="{{ route('register.store') }}" class="nav-link">Зарегистрироваться</a></li>
                    @endif
                @endauth
            @endif
            
        </ul>
    </nav><!-- end of page navbar -->

    <!-- <div class="theme-selector">
        <a href="javascript:void(0)" class="spinner">
            <i class="ti-paint-bucket"></i>
        </a>
        <div class="body">
            <a href="javascript:void(0)" class="light"></a>
            <a href="javascript:void(0)" class="dark"></a>
        </div>
    </div> -->

    <!-- page header -->
    <header class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <h1 class="header-title">How I Meet Your Mother</h1>
            <p class="header-subtitle">Американский сериал «Как я&nbsp;встретил вашу маму»&nbsp;— это захватывающий комедийный рассказ о&nbsp;поиске истинной любви и&nbsp;дружбы в&nbsp;суетливом мире Нью-Йорка. Пересекаясь с&nbsp;чередой веселых и&nbsp;неожиданных событий, главный герой Тед Мосби вспоминает свои приключения, пытаясь найти свою будущую жену. Смешанные и&nbsp;неожиданные повороты делают этот сериал невероятно увлекательным и&nbsp;незабываемым.</p>

            <!-- <button class="btn btn-theme-color modal-toggle"><i class="ti-control-play text-danger"></i> Смотреть трейлер</button> -->

        </div>
    </header><!-- end of page header -->

    
    <!-- <div class="modalBox">
        <div class="modalBox-body" >
            <iframe width="100%" height="100%" class="border-0" 
            src="https://www.youtube.com/embed/JF4PHfg88Qk?si=oZb10dkLFeBu8dsm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>>
            </iframe>
        </div>          
    </div> -->

    <!-- page container -->
    <div class="container page-container">
        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4">Смотреть онлайн</h6>
        </div>  

        <!-- row -->
        <div class="row mb-4">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/img-1.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">1 сезон</h1>
                        <p>Содержит 22&nbsp;эпизода. Выходил на&nbsp;экраны с&nbsp;19&nbsp;сентября 2005 года по&nbsp;15&nbsp;мая 2006&nbsp;года.</p>
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/img-2.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">2 сезон</h1>
                        <p>Содержит 22&nbsp;эпизода. Выходил на&nbsp;экраны с&nbsp;18&nbsp;сентября 2006 года по&nbsp;14&nbsp;мая 2007&nbsp;года.</p>
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/img-3.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">3 сезон</h1>
                        <p>Содержит 20&nbsp;эпизодов. Выходил на&nbsp;экраны с&nbsp;24&nbsp;сентября 2007 года по&nbsp;19&nbsp;мая 2008&nbsp;года.</p>
                    </div>           
                </a>
            </div>          
        </div><!-- end of row -->

        <a href="#">Все сезоны <i class="ti-angle-double-right angle"></i></a>


        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4 mt-5 pt-5">Интересные статьи</h6>\
        </div>

        <!-- row -->
        <div class="row mb-5">
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="assets/imgs/blog-1.jpg" class="card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">
                    <div class="card-body">
                        <h6 class="card-subtitle">21 августа, 2018</h6>
                        <h3 class="card-title">Тед Мосби – лжец?</h3>
                        <p>Безумная теория по&nbsp;сериалу «Как я&nbsp;встретил вашу маму»</p>
                    </div>                  
                </a>
            </div>  
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="assets/imgs/blog-2.jpg" class="card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">
                    <div class="card-body">
                        <h6 class="card-subtitle">15 июня, 2018</h6>
                        <h3 class="card-title">Чего вы точно не знали о 1 сезоне</h3>
                        <p>Почему бармена в&nbsp;Макларенсе зовут Карл? Из-за чего шоу хотели закрыть на&nbsp;<nobr>13-м</nobr> эпизоде? Какие отсылки на&nbsp;сериал «Друзья» нашлись в&nbsp;сериале?</p>
                    </div>                  
                </a>
            </div>  
        </div><!-- end of row -->

        <a href="#">Все статьи <i class="ti-angle-double-right angle"></i></a>

    </div> <!-- end of page container -->

    <!--footer & pre footer -->
    <div class="contact-section">
        <div class="overlay"></div>
        <!-- container -->
        <div class="container">
            <div class="col-md-10 col-lg-8 m-auto">
                <h6 class="title mb-2">Свяжитесь с нами</h6>
                <form action="" class="form-group">
                    <input type="text" size="50" class="form-control" placeholder="Ваше имя" required>
                    <input type="email" class="form-control" placeholder="Почта"requried>
                    <textarea name="comment" id="comment" rows="6"   class="form-control" placeholder="Ваш вопрос или сообщение"></textarea>
                    <input type="submit" value="Отправить" class="form-control">
                </form>
            </div>

            <!-- footer -->
            <footer class="footer">
                <p class="infos">&copy; <script>document.write(new Date().getFullYear())</script>, Ткаченко Е.О. БПА20-01</p>       
                <span>|</span>  
                <div class="links">
                    <a href="#">Смотреть</a>
                    <a href="#">Статьи</a>
                </div>
            </footer><!-- end of footer -->

        </div><!-- end of container -->
    </div>
    <!-- end of pre footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Dorang js -->
    <script src="assets/js/dorang.js"></script>

</body>
</html>
