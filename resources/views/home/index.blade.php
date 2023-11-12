@extends('layouts.layout')

@section('title', 'How I Meet Your Mother')

@section('header')

<h1 class="header-title text-warning">How I Meet Your Mother</h1>
<p class="header-subtitle">Американский сериал «Как я&nbsp;встретил вашу маму»&nbsp;— это захватывающий комедийный рассказ о&nbsp;поиске истинной любви и&nbsp;дружбы в&nbsp;суетливом мире Нью-Йорка. Пересекаясь с&nbsp;чередой веселых и&nbsp;неожиданных событий, главный герой Тед Мосби вспоминает свои приключения, пытаясь найти свою будущую жену. Смешанные и&nbsp;неожиданные повороты делают этот сериал невероятно увлекательным и&nbsp;незабываемым.</p>

<a class="tube" href="https://youtu.be/u7LgB14XmS8?si=zNSnuWb-nMOzl3on"><button class="btn btn-theme-color modal-toggle"><i class="ti-control-play text-warning"></i> Музыкальная заставка</button></a>

@endsection

@section('content')

<div class="col-md-10 col-lg-8 m-auto">
    <h6 class="title mb-4">Смотреть онлайн</h6>
</div>

<!-- row -->
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
</div><!-- end of row -->

<a href="{{ route('show') }}">Все сезоны <i class="ti-angle-double-right angle"></i></a>


<div class="col-md-10 col-lg-8 m-auto">
    <h6 class="title mb-4 mt-5 pt-5">Интересные статьи</h6>
</div>

<!-- row -->
<div class="row mb-2">
    @foreach($posts as $post)
    <div class="col-md-6">
        <a href="{{route('posts.single', ['slug' => $post->slug])}}" class="cart">
            <img src="{{ $post->getImage() }}" class="cart-img" alt="">
            <div class="cart-body">
                <h6 class="cart-subtitle">{{$post->getPostDate() }}</h6>
                <h3 class="cart-title text-warning">{{$post->title}}</h3>
                {!! $post->description !!}
            </div>
        </a>
    </div>
    @endforeach
</div><!-- end of row -->

<a href="{{ route('read') }}">Все статьи <i class="ti-angle-double-right angle"></i></a>

@endsection