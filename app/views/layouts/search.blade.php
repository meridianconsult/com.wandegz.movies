<!DOCTYPE html>
<html>
<head>
	@include('layouts.includes.head', array('page_title' => 'Search movies - Wandegz.com/movies'))
</head>
<body id="search">

<div class="container">

	<header id="header" class="row">
		@include('layouts.includes.header')
	</header><!-- /header -->

	<div id="main" class="row">
		@yield('content')
	</div>

	<footer>
		@include('layouts.includes.footer')
	</footer>
</div>

</body>
</html>