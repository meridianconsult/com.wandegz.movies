@extends('layouts.frontpage')
@section('content')

	<hgroup>
		<h1>Wandegz.com / Movies</h1>
		<h2>order a movie from <a href="{{ URL::to('shelf') }}">our shelf</a></h2>
	</hgroup>
	<br>

	<form id="searchbar" action="{{ URL::to('search') }}" method="GET" accept-charset="utf-8">
		<input type="text" name="find" value="" placeholder="Movie name">
		<input type="submit" name="submitbutton" value="Search">
	</form>
	<br>

	<table border="1">
		<thead>
			<tr>
				<th><h1>&nbsp; Popular movies * &nbsp;</h1></th>
				<th><h1>&nbsp; Genres &nbsp;</h1></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<ul>
						<li><a href="imdb.com">Alice in Wonderland</a></li>
						<li><a href="imdb.com">Star Trek</a></li>
						<li><a href="imdb.com">Turbo</a></li>
						<li><a href="imdb.com">Star Wars</a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><a href="imdb.com">Action</a></li>
						<li><a href="imdb.com">Adventure</a></li>
						<li><a href="imdb.com">Comedy</a></li>
						<li><a href="imdb.com">Fantasy</a></li>
						<li><a href="imdb.com">Horror</a></li>
					</ul>
				</td>
			</tr>
		</tbody>
	</table>

	<div id="moviegrid" class="popular">
		
	</div>

@stop