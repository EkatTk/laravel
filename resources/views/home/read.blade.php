@extends('layouts.layout')

@section('title', 'How I Meet Your Mother - Статьи')

@section('header')

<h1 class="header-title text-warning">Интересные статьи</h1>
<p class="header-subtitle">Сериал «Как я встретил вашу маму» закончился в 2014 году. На данной странице сайта вы найдете интересные статьи, которые публиковались как во время выхода сериала, так и после его закрытия. <br><strong class="text-warning">Осторожно: в некоторых статьях могут содержаться спойлеры!</strong></p>

@endsection

@section('content')

<!-- row -->
<div class="row mb-2">
    @foreach($posts as $post)
    <div class="col-md-6">
        <a href="{{route('posts.single', ['slug' => $post->slug])}}" class="card">
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