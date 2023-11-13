@extends('layouts.layout')
@section('title', 'How I Meet Your Mother - Смотреть')

@section('header')

<h1 class="header-title text-warning">Смотреть онлайн</h1>
<p class="header-subtitle">Американский сериал «Как я&nbsp;встретил вашу маму» отчасти основан на&nbsp;реальных событиях, произошедших с&nbsp;создателями ситкома&nbsp;— Томасом Крейгом и&nbsp;Картером Бейзом. Идея сюжета появилась в&nbsp;конце <nobr>90-х,</nobr> когда сценаристы жили с&nbsp;девушкой по&nbsp;имени Ребекка. Премьера «пилота» состоялась осенью 2005 года на&nbsp;телеканале «CBS», собрав у&nbsp;экранов почти 10&nbsp;миллионов зрителей! Спустя 9&nbsp;сезонов сериал был закрыт, а&nbsp;интрига сохранялась до&nbsp;финального эпизода, вышедшего в&nbsp;эфир весной 2014&nbsp;года. Прототипом Эриксена является Крейг, его супруга нашла отображение в&nbsp;лице Лили, а&nbsp;Бейз стал Мосби.</p>

@endsection

@section('bread')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">Смотреть</a></li>
    </ol>
</nav>
@endsection

@section('content')
<div class="row mb-2">
    @foreach($seasons as $season)
    <div class="col-md-4">
        <a href="{{route('categories.episode', ['slug' => $season->category->slug])}}" class="overlay-img">
            <img src="{{ $season->getImage() }}" alt="">
            <div class="overlay"></div>
            <div class="des">
                <h1 class="title">{{$season->title}}</h1>
                {!! $season->description !!}
            </div>
        </a>
    </div>
    @endforeach
</div>

@endsection