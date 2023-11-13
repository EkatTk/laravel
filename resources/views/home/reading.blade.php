@extends('layouts.single')

@section('title', $post->title)

@section('header')
<h1 class="header-title text-warning">{{ $post->title }}</h1>
@endsection

@section('bread')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{ route('read') }}">Статьи</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
    </ol>
</nav>
@endsection

@section('img')
<img src="{{ $post->getImage() }}" alt="" class="img-fluid">
@endsection

@section('info')
<p class="text-warning">Дата публикации: <br> {{$post->getPostDate()}}</p>
<div>{!!$post->description!!}</div>

@if($post->tags->count())

<p class="text-warning">Теги: </p>
@foreach($post->tags as $tag)
<a href="{{ route('tags.single', ['slug' => $tag->slug]) }}" title="">
    {{ $tag->title }}
</a>
@endforeach

@endif
@endsection


@section('content')
{!! $post->content !!}
@endsection