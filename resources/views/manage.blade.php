<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kelola</title>

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

          <li class="nav-item active {{ Route::is('manage') ? 'active' : ''}}">
            @can('manage-articles')
            <a class="nav-link" href="{{ url('/manage') }}">Artikel</a>
            @endcan
          </li>

          <li class="nav-item {{ Route::is('kelolauser') ? 'active' : ''}}">
            @can('manage-articles')
            <a class="nav-link" href="{{ url('/kelolauser') }}">User</a>
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
      <div class="card">
      <div class="card-header text-center">
      <h1 class="my-4">Daftar Artikel</h1>
      </div>
        <a href="article/add" class="btn btn-primary">Tambah Data</a>
        <a href="/article/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
        <br>
        <br>

        <!-- Blog Post -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Buka</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $artikel)
                <tr>
                    <td>{{$artikel->id}}</td>
                    <td>{{$artikel->title}}</td>
                    <td>{{$artikel->open}}</td>
                    <td>
                        <a href="/article/edit/{{$artikel->id}}" class="badge badge-warning">Edit</a>
                        <a href="/article/delete/{{$artikel->id}}" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        
        </table>
        </div>
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