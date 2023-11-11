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
{!! $season->content !!}
@endsection

@section('content')
<div class="row mb-5">
    <h1 class="center">Все эпизоды сезона</h1>
</div>
<div class="row mb-2">
    @foreach($episodes as $episode)
    <div class="col-lg-4 col-md-6">
        <a href="{{route('home.episode', ['slug' => $episode->slug]) }}" class="card">
            <img src="{{ $episode->getImage() }}" class="card-img" alt="">
            <div class="card-body">
                <h6 class="card-subtitle text-warning">{{$episode->getEpisodeDate() }}</h6>
                <h3 class="card-title">Эпизод {{$episode->episode}} - {{$episode->title}}</h3>
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