<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/scrolling-nav.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">wisatapasuruan.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
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

          <li class="nav-item active{{ Route::is('contact') ? 'active' : '' }}">
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

  <header class="bg-info text-white">
    <div class="container text-center">
      <h1>Selamat Datang di wisatapasuruan.com</h1>
      <p class="lead">Info tempat wisata Pasuruan</p>
    </div>
  </header>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <img style="margin:10px" width="40" height="40" src="{{('img/periscope.png')}}" alt=""> Jl. Pemuda No. 20 Pasuruan Jawa Timur <br>
          <img style="margin:10px" width="40" height="40" src="{{('img/envelope.png')}}" alt=""> wisatapasuruan@gmail.com <br>
          <img style="margin:10px" width="40" height="40" src="{{('img/facebook.png')}}" alt=""> Wisata Pasuruan Official<br>
          <img style="margin:10px" width="40" height="40" src="{{('img/instagram.png')}}" alt=""> wisata_pasuruan <br>
          <img style="margin:10px" width="40" height="40" src="{{('img/youtube.png')}}" alt=""> Wisata Pasuruan <br>
        </div>
      </div>
    </div>
  </section>

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

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
