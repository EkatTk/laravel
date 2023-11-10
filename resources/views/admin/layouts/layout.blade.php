<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Админка</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="image/x-icon" href="\assets\imgs/logo.webp" rel="shortcut icon">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="/public/assets/admin/css/admin.css">
  <style>
    .ck-editor__editable_inline {
      min-height: 300px;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" data-enable-remember="true" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{url('/')}}" class="nav-link">На сайт</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->


      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/assets/admin/img/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Ткаченко Екатерина</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{route('admin.index')}}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Главная</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Посты
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('posts.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Все посты</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('posts.create')}}" class="nav-link">
                    <i class="fa fa-plus-circle nav-icon"></i>
                    <p>Новый пост</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-archive"></i>
                <p>
                  Категории
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('categories.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Список категорий</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('categories.create')}}" class="nav-link">
                    <i class="fa fa-plus-circle nav-icon"></i>
                    <p>Новая категория</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tags"></i>
                <p>
                  Теги
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('tags.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Список тегов</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('tags.create')}}" class="nav-link">
                    <i class="fa fa-plus-circle nav-icon"></i>
                    <p>Новый тег</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa fa-object-group"></i>
                <p>
                  Сезоны
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('seasons.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Список сезонов</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('seasons.create')}}" class="nav-link">
                    <i class="fa fa-plus-circle nav-icon"></i>
                    <p>Новый сезон</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-object-ungroup"></i>
                <p>
                  Эпизоды
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('episodes.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Список эпизодов</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('episodes.create')}}" class="nav-link">
                    <i class="fa fa-plus-circle nav-icon"></i>
                    <p>Новый эпизод</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>БПА20-01</b>
      </div>
      <strong>Ткаченко Екатерина Олеговна &copy; </strong> 2023 <a href="mailto:ektk1805@gmail.com">ektk1805@gmail.com</a>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <script src="/public/assets/admin/js/admin.js"></script>
  <script>
    $('.nav-sidebar a').each(function() {
      let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
      let link = this.href;
      if (link == location) {
        $(this).addClass('active');
        $(this).closest('.has-treeview').addClass('menu-open');
      }
    });

    $(document).ready(function() {
      bsCustomFileInput.init();
    });
  </script>
  <script src="{{ asset('assets/admin/ckeditor5/build/ckeditor.js') }}"></script>
  <script src="{{ asset('assets/admin/ckfinder/ckfinder.js') }}"></script>

  <script>
    ClassicEditor
      .create(document.querySelector('#content'), {
        ckfinder: {
          uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
        },
        image: {
          // You need to configure the image toolbar, too, so it uses the new style buttons.
          toolbar: ['imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight'],

          styles: [
            // This option is equal to a situation where no style is applied.
            'full',

            // This represents an image aligned to the left.
            'alignLeft',

            // This represents an image aligned to the right.
            'alignRight'
          ]
        },
        toolbar: {
          items: [
            'heading',
            '|',
            'bold',
            'italic',
            'link',
            'bulletedList',
            'numberedList',
            '|',
            'indent',
            'outdent',
            'alignment',
            '|',
            'blockQuote',
            'insertTable',
            'undo',
            'redo',
            'CKFinder',
            'mediaEmbed'
          ]
        },
        language: 'ru',
        table: {
          contentToolbar: [
            'tableColumn',
            'tableRow',
            'mergeTableCells'
          ]
        },
      })
      .catch(function(error) {
        console.error(error);
      });

    ClassicEditor
      .create(document.querySelector('#description'), {
        toolbar: ['heading', '|', 'bold', 'italic', '|', 'undo', 'redo']
      })
      .catch(function(error) {
        console.error(error);
      });
  </script>
</body>

</html>