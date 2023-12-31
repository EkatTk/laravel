@extends('admin.layouts.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Редактирование эпизода</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('episodes.index')}}">Список эпизодов</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Эпизод "{{ $episode->title }}"</h3>
                    </div>
                    <!-- /.card-header -->

                    <form role="form" method="post" action="{{ route('episodes.update', ['episode' => $episode->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    {{"Все поля должны быть заполнены!"}}
                                </ul>
                            </div>
                            @endif

                            @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="season">Сезон</label>
                                <input type="text" name="season" class="form-control @error('season') is-invalid @enderror" id="season" value="{{ $episode->season }}">
                            </div>
                            <div class="form-group">
                                <label for="episode">Эпизод</label>
                                <input type="text" name="episode" class="form-control @error('episode') is-invalid @enderror" id="episode" value="{{ $episode->episode }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $episode->title }}">
                            </div>
                            <div class="form-group">
                                <label for="title_eng">Название на английском</label>
                                <input type="text" name="title_eng" class="form-control @error('title_eng') is-invalid @enderror" id="title_eng" value="{{ $episode->title_eng }}">
                            </div>
                            <div class="form-group">
                                <label for="director">Режиссер</label>
                                <input type="text" name="director" class="form-control @error('director') is-invalid @enderror" id="director" value="{{ $episode->director }}">
                            </div>
                            <div class="form-group">
                                <label for="screenwriter">Сценарист</label>
                                <input type="text" name="screenwriter" class="form-control @error('screenwriter') is-invalid @enderror" id="screenwriter" value="{{ $episode->screenwriter }}">
                            </div>

                            <div class="form-group">
                                <label for="content">Сюжет</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7">{{ $episode->content }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Категория</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                    @foreach($categories as $k => $v)
                                    <option value="{{ $k }}" @if($k==$episode->category_id) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="url_video">Видео</label>
                                <input type="text" name="url_video" class="form-control @error('url_video') is-invalid @enderror" id="url_video" value="{{ $episode->url_video }}">
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                        <label class="custom-file-label" for="thumbnail">{{ $episode->getImage() }}</label>
                                    </div>
                                </div>
                                <div><img src="{{ $episode->getImage() }}" alt="" class="img-thumbnail mt-2" width="200"></div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>

                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection