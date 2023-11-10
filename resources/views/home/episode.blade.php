@extends('layouts.single')

@section('title')
Сезон {{$episode->season}} Эпизод {{$episode->episode}} - {{$episode->title}}
@endsection

@section('header')

<h1 class="header-title text-warning">{{$episode->title}} ({{$episode->title_eng}})</h1>

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
<p><strong class="text-warning">Сюжет: </strong><br> {!!$episode->content!!}</p>
<video width="100%" src="{{$episode->url_video}}" poster="/assets/imgs/s{{$episode->season}}e{{$episode->episode}}.jpg" controls></video>
@endsection