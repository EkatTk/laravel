@extends('admin.layouts.layout')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Эпизоды</h1>
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
            <h3 class="card-title">Все эпизоды</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a href="{{ route('episodes.create') }}" class="btn btn-primary mb-3">Добавить эпизод</a>
            @if (session()->has('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            @if (count($episodes))

            <div class="table-responsive">
              <table class="table table-bordered table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Название</th>
                    <th>Категоря</th>
                    <th>Дата выхода</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($episodes as $episode)
                  <tr>
                    <td>{{ $episode->title }}</td>
                    <td>{{ $episode->category->title}}</td>
                    <td>{{ $episode->created_at}}</td>
                    <td>
                      <a href="{{ route('episodes.edit', ['episode' => $episode->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <form action="{{ route('episodes.destroy', ['episode' => $episode->id]) }}" method="post" class="float-left">
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
            <h2>Эпизодов пока нет</h2>
            @endif
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            {{ $episodes->links() }}
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