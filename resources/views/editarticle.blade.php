<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ubah Data</title>

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
          <li class="nav-item">
            <a class="nav-link" href="{{'/home'}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/all'}}">Wisata
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/contact'}}">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{'/manage'}}">Kelola</a>
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
        <div class="card-header">
        <h1 class="my-4">Ubah Data</h1>

        <!-- Blog Post -->
        <form action="/article/update/{{$articles->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$articles->id}}"><br>
        <div class="form-group">
                <label for="title">Judul</label>
                <input type="varchar" class="form-control" required="required" name="title" value="{{$articles->title}}"><br>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" required="required" name="content" value="{{$articles->content}}"><br>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="varchar" class="form-control" required="required" name="address" value="{{$articles->address}}"><br>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="int" class="form-control" required="required" name="price" value="{{$articles->price}}"><br>
            </div>
            <div class="form-group">
                <label for="open">Buka</label>
                <input type="varchar" class="form-control" required="required" name="open" value="{{$articles->open}}"><br>
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <input type="varchar" class="form-control" required="required" name="detail" value="{{$articles->detail}}"><br>
            </div>
            <div class="form-group">
                <label for="image">Feature Image</label>
                <input type="file" class="form-control" required="required" name="image" value="{{$articles->featured_image}}">
                <img width="150px" src="{{asset('storage/'.$articles->featured_image)}}"><br>
            </div>
            
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
        </form>
        </div>
        </div>


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
