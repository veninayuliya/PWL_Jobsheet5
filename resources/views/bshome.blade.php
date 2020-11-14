<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rekomendasi Tempat Wisata di Pasuruan 2020</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

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
        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ route('home') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          @endcan
          </li>

          <li class="nav-item active{{ Route::is('all') ? 'active' : '' }}">
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

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Rekomendasi Tempat Wisata di Pasuruan 2020
          <small></small>
        </h1>

        <!-- Blog Post -->
        @foreach($articles as $artikel)
        <div class="card mb-4">
          <img width="150px" src="{{asset('storage/'.$artikel->featured_image)}}" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$artikel->title}}</h2>
            <p class="card-text">{{Str::limit($artikel->content, 200, '[...]') }}</p>
            <a href="{{'/find/'.$artikel->id}}" class="btn btn-primary">Baca Selengkapnya &rarr;</a>
          </div>
          <!--<div class="card-footer text-muted">
            Posted on October 4, 2020 by
            <a href="#">Venina Yuliya</a>
          </div>-->
        </div>
        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <!--<li class="page-item disabled">
            <a class="page-link" href="#">&larr; Prev</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">Next &rarr;</a>
          </li>-->
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Daftar Wisata</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-9">
              @foreach($articles as $artikel)
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="{{'/find/'.$artikel->id}}">{{$artikel->title}}</a>
                  </li>
                </ul>
              @endforeach
            </div>
          </div>
        </div>
      </div>
        

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Tentang Website</h5>
          <div class="card-body">
            <h6>-Pemrograman Web Lanjut-</h6>
            <h6>Nama : Venina Yuliya</h6>
            <h6>No.  : 28</h6>
            <h6>Kelas: MI 2F</h6>
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
      <p class="m-0 text-center text-white">Copyright &copy; wisatapasuruan.com 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
