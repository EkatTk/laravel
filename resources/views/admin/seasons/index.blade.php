@extends('admin.layouts.layout')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Сезоны</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
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
            <h3 class="card-title">Все сезоны</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a href="{{ route('seasons.create') }}" class="btn btn-primary mb-3">Добавить сезон</a>
            @if (session()->has('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            @if (count($seasons))

            <div class="table-responsive">
              <table class="table table-bordered table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Наименование</th>
                    <th>Теги</th>
                    <th>Дата</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($seasons as $season)
                  <tr>
                    <td>{{ $season->title }}</td>
                    <td>{{ $season->tags->pluck('title')->join(', ') }}</td>
                    <td>{{ $season->created_at}}</td>
                    <td>
                      <a href="{{ route('seasons.edit', ['season' => $season->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <form action="{{ route('seasons.destroy', ['season' => $season->id]) }}" method="post" class="float-left">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            @else
            <h2>Сезонов пока нет</h2>
            @endif
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            {{ $seasons->links() }}
          </div>
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