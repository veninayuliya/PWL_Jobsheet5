<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{$homes->judul}}</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">wisatapasuruan.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active {{ Route::is('home') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/home') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          @endcan
          </li>

          <li class="nav-item {{ Route::is('all') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/all') }}">Wisata</a>
          @endcan
          </li>

          <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
          @endcan
          </li>

          <li class="nav-item {{ Route::is('manage') ? 'active' : ''}}">
            @can('manage-articles')
            <a class="nav-link" href="{{ url('/manage') }}">Kelola</a>
            @endcan
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route ('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$homes->judul}}</h1>

        <!-- Author -->
        <p class="lead">
          by
        <a>Venina Yuliya</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on October 4, 2020</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$homes->gambar}}" alt="">

        <hr>

        <!-- Post Content -->
        <p>{{$homes->kabupaten}}</p>
        <br>
        <p>{{$homes->kota}}</p>
        <a href="{{$homes->letak}}">Telusuri Letak Pasuruan >></a>

        <hr>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Alun -Alun Kota Pasuruan</h5>
          <div class="card-body">
          <img src="https://www.javatravel.net/wp-content/uploads/2019/10/Tempat-Wisata-di-Pasuruan.jpg" class="img-thumbnail" alt="">
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Wisata Hits Pasuruan - Taman Safari Indonesia 2</h5>
          <div class="card-body">
          <img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2019/01/16/4071236398.jpg" class="img-thumbnail" alt="">
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Makanan Khas Pasuruan - Klepon</h5>
          <div class="card-body">
          <img src="https://cdn.idntimes.com/content-images/community/2020/07/img-20200707-183307-75079284f5b3f127b488c9dfbb27e23c_600x400.jpg" class="img-thumbnail" alt="">
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; wisatapasuruan.com</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
