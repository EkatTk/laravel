@extends('layouts.layout')

@section('title', $category->title)

@section('header')

<h1 class="header-title text-warning">Категория "{{$category->title}}"</h1>

@endsection

@section('bread')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">Категория "{{$category->title}}"</li>
    </ol>
</nav>
@endsection

@section('content')

<!-- row -->
<div class="row mb-2">
    @foreach($posts as $post)
    <div class="col-md-6">
        <a href="{{route('posts.single', ['slug' => $post->slug]) }}" class="cart">
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