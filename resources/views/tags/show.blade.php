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
    <div class="row">
        <div class="col-md-12">
            <div class="cart-footer clearfix">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

</div>

@endsection