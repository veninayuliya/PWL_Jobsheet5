<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{$articles->title}}</title>

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

          <li class="nav-item active {{ Route::is('all') ? 'active' : '' }}">
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
      <div class="col-md-10">

        <h1 class="my-4">{{$articles->title}}
          <br><small></small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{$articles->featured_image}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"></h2>
            <p class="card-text">{{$articles->content}}</p>
            <br>
            <h5 class="card-price">Tiket Masuk : {{$articles->price}}</h5>
            <h5 class="card-open">Buka : {{$articles->open}}</h5>
            <h5 class="card-address">{{$articles->address}}</h5>
            <br>
            <a class="card-detail" href="{{$articles->detail}}">Click for more info</a>
          </div>
          <div class="card-footer text-muted">
            Posted on October 4, 2020 by Venina Yuliya
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <!--<li class="page-item">
            <a class="page-link" href="#">&larr; Prev</a>
          </li>
          <li class="page-item">
            <a href="#">Info selengkapnya &rarr;</a>
          </li>-->
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">


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
