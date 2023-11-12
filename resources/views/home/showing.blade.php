@extends('layouts.single')

@section('title', $season->title)

@section('header')

<h1 class="header-title text-warning">{{ $season->title }}</h1>
<div class="header-subtitle">{!! $season->description !!}</div>

@endsection

@section('img')
<img src="{{ $season->getImage() }}" alt="" class="img-fluid">
@endsection

@section('info')
<h6 class="title text-warning">О чем сезон?</h6>
{!! $season->content !!}
@endsection

@section('content')
<div class="col-md-10 col-lg-8 m-auto">
    <h6 class="title text-warning" style="text-align: center;">Все эпизоды сезона</h6>
</div>
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