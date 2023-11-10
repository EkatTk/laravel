@extends('layouts.layout')

@section('title', $tag->title)

@section('header')

<h1 class="header-title text-warning">Все статьи с тегом "{{$tag->title}}"</h1>
<p class="header-subtitle"><strong>Осторожно: </strong>в некоторых статьях могут содержаться спойлеры!</p>

@endsection

@section('content')

<!-- row -->
<div class="row mb-2">
    @foreach($posts as $post)
    <div class="col-md-6">
        <a href="{{route('home.article', ['slug' => $post->slug]) }}" class="card">
            <img src="{{ $post->getImage() }}" class="card-img" alt="">
            <div class="card-body">
                <h6 class="card-subtitle">{{$post->getPostDate() }}</h6>
                <h3 class="card-title text-warning">{{$post->title}}</h3>
                {!! $post->description !!}
            </div>
        </a>
    </div>
    @endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="card-footer clearfix">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

</div>

@endsection