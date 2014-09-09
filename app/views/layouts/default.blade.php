<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

<div class="container">

	<header id="header" class="row">
		@include('includes.header')
	</header><!-- /header -->

	<div id="main" class="row">
		@yield('content')
	</div>

	<footer>
		@include('includes.footer')
	</footer>
</div>

</body>
</html>