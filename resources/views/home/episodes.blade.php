@extends('layouts.layout')
@section('title', 'How I Meet Your Mother - Смотреть')

@section('header')

<h1 class="header-title text-warning">Сезон !Нужно вывести сезон!</h1>

@endsection

@section('content')

<div class="row mb-2">
    @foreach($episodes as $episode)
    <div class="col-lg-4 col-md-6">
        <a href="{{route('home.episode', ['slug' => $episode->slug]) }}" class="cart">
            <img src="{{ $episode->getImage() }}" class="cart-img" alt="">
            <div class="cart-body">
                <h6 class="cart-subtitle text-warning">{{$episode->getEpisodeDate() }}</h6>
                <h3 class="cart-title">Эпизод {{$episode->episode}} - {{$episode->title}}</h3>
            </div>
        </a>
    </div>
    @endforeach
</div>
<div class="row mb-2">
    <div class="col-12">
        <div class="clearfix">
            {{ $episodes->links() }}
        </div>
    </div>
</div>

@endsection