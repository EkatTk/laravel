@extends('layouts.layout')

@section('title', 'Результат поискового запроса')

@section('header')
@if($posts->count())
<h1 class="header-title text-warning">Поиск: {{$s}}</h1>
@else
<h1 class="header-title text-warning">По вашему запросу ничего не найдено!</h1>
@endif
@endsection

@section('content')

<!-- row -->
<div class="row mb-2">
    @if($posts->count())
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
                {{ $posts->appends(['s' => request()->s])->links() }}
            </div>
        </div>
    </div>
    @endif

</div>

@endsection