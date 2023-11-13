@extends('layouts.single')

@section('title')
Сезон {{$episode->season}} Эпизод {{$episode->episode}} - {{$episode->title}}
@endsection

@section('header')

<h1 class="header-title text-warning">{{$episode->title}} </h1>
<h3 class="header-subtitle">({!!$episode->title_eng!!})</h3>

@endsection

@section('bread')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{ route('show') }}">Смотреть</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categories.episode', ['slug' => $episode->category->slug]) }}">Сезон {{$episode->season}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Эпизод {{$episode->episode}} - {{$episode->title}}</li>
    </ol>
</nav>
@endsection

@section('img')
<img src="{{ $episode->getImage() }}" alt="" class="img-fluid">
@endsection

@section('info')
<p><strong class="text-warning">Дата выхода: </strong><br> {{$episode->getEpisodeDate()}}</p>
<p><strong class="text-warning">Режиссер: </strong><br> {{$episode->director}}</p>
<p><strong class="text-warning">Сценарист: </strong><br> {{$episode->screenwriter}}</p>
@endsection

@section('content')

<p><strong class="text-warning">О чем {{$episode->episode}} эпизод {{$episode->season}} сезона?</strong><br> {!!$episode->content!!}</p>
<video width="100%" src="{{$episode->url_video}}" poster="/assets/imgs/s{{$episode->season}}e{{$episode->episode}}.jpg" controls></video>
@endsection