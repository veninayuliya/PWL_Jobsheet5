<!DOCTYPE html>
<html>
<head>
	<title> Halaman @yield('title')</title>
</head>
<body>
	<div class="header">
		<p align=center>Ini adalah header</p>
		@yield('header')
	</div>
	<div class="sidebar">
		<p align=center>Ini adalah sidebar</p>
		@yield('sidebar')
	</div>
	<div class="container">
	<p align=center>Ini adalah konten</p>
		@yield('content')
	</div>
	<div class="footer">
		<p align=center>Ini adalah footer</p>
		@yield('footer')
	</div>

</body>
</html>