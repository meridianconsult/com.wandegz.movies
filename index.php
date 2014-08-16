<!DOCTYPE html>
<html>
<head>
	<title>Wandegz.com - MarketFresh</title>

	<!-- Foundation.Zurb CDN -->

	<!-- All other shinenigans-->
</head>
<body>
	<header>
		<hgroup>
			<h1 class="logo frontpage">Wandegz.com / Movies</h1>
			<h2>New movies at your doorstep</h2>
		</hgroup>
	</header><!-- /header -->

	<main>
		<grid class="row">

			<!-- Left Sidebar -->
			<grid class="small-12 large-4 columns">
				<ul>
					<li><a href="movies/list">Movies</a></li>
				</ul>
			</grid>

			<!-- Movies list-->
			<grid class="small-12 large-8 columns">
				<section class="movie card">
					<h3>{{movieTitle}}</h3>
					<h4 class="subheader">{{yearOfRelease}}</h4>
					<img src="{{imdb_link}}" alt="{{movieTitle}} ( {{yearOfRelease}} )">
					<p>
						<a href="movies/{{movie_id}}/order">Order Now - UGX 2000</a>
					</p>
				</section>
			</grid>

		</grid>
	</main>

	<footer>
		
	</footer>
</body>
</html>