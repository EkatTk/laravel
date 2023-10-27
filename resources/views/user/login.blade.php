<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>How I Meet Your Mother</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/logreg.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <form action="{{ route('login')}}" method="post">
                                                <h4 class="mb-3 pb-3">Вход</h4>
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style" placeholder="Почта">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style" placeholder="Пароль">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="mt-3">
                                                    <h6>У вас нет аккаунта? <a href="{{ route('register.store')}}">Зарегистрируйтесь!</a></h6>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-block">Войти</button>
                                                </div>
                                                @if ($errors->any())
                                                <div class="alter alter-danger mt-2">
                                                    {{"Проверьте правильность введенных данных!"}}
                                                </div>
                                                @endif
                                                {{ session('error') }}
                                                @if (session()->has('error'))
                                                <div class="alter alter-danger">

                                                </div>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/admin/js/admin.js') }}"></script>

</html>