<!DOCTYPE html>
<html>
<head>
	@include('layouts.includes.head', array('page_title' => 'Wandegz.com/movies - Order movies online'))
</head>
<body id="home">

<div class="container">

	<header id="header" class="row">
		@include('layouts.includes.header')
	</header><!-- /header -->
	
	<div id="main" class="row">
		@yield('content')
	</div>
	
</div>

</body>
</html>