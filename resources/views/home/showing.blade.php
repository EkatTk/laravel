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
<a href="{{ route('episodes') }}">Смотреть сезон онлайн <i class="ti-angle-double-right angle"></i></a>
@endsection