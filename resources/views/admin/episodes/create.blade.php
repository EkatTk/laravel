@extends('admin.layouts.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Новый эпизод</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('episodes.index')}}">Все эпизоды</a></li>
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
                        <h3 class="card-title">Новый эпизод</h3>
                    </div>
                    <!-- /.card-header -->

                    <form role="form" method="post" action="{{ route('episodes.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    {{"Все поля должны быть заполнены!"}}
                                </ul>
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="season">Сезон</label>
                                <input type="text" name="season" class="form-control @error('season') is-invalid @enderror" id="season" placeholder="Сезон">
                            </div>
                            <div class="form-group">
                                <label for="episode">Эпизод</label>
                                <input type="text" name="episode" class="form-control @error('episode') is-invalid @enderror" id="episode" placeholder="Эпизод">
                            </div>
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Название">
                            </div>
                            <div class="form-group">
                                <label for="title_eng">Название на английском</label>
                                <input type="text" name="title_eng" class="form-control @error('title_eng') is-invalid @enderror" id="title_eng" placeholder="Название на английском">
                            </div>
                            <div class="form-group">
                                <label for="director">Режиссер</label>
                                <input type="text" name="director" class="form-control @error('director') is-invalid @enderror" id="director" placeholder="Режиссер">
                            </div>
                            <div class="form-group">
                                <label for="screenwriter">Сценарист</label>
                                <input type="text" name="screenwriter" class="form-control @error('screenwriter') is-invalid @enderror" id="screenwriter" placeholder="Сценарист">
                            </div>
                            <div class="form-group">
                                <label for="content">Сюжет</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="8" placeholder="Сюжет"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Категория</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                    @foreach($categories as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="url_video">Видео</label>
                                <input type="text" name="url_video" class="form-control @error('url_video') is-invalid @enderror" id="url_video" placeholder="Ссылка на видео">
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                        <label class="custom-file-label" for="thumbnail">Выберите файл</label>
                                    </div>
                                </div>
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