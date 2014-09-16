@extends('layouts.search')
@section('content')

	<table id="search-results" border="1">
		<caption>
			Searching for "{{{ $search_query }}}" &mdash; 
			<em>{{{ $total_results }}} matches found.</em>
		</caption>

		<thead>
			<tr>
				<th>Title</th>
				<th>Info</th>
			</tr>
		</thead>
		<tbody>

			@foreach ($results as $movie)
			<tr>
				<td width="350px">
					<ul class="text-center">
						<li><a href="{{{ URL::to('http://www.rottentomatoes.com/m/' . $movie->id ) }}}">{{{ $movie->title }}}</a></li>
						<li>( {{{ $movie->year }}} )</li>
						<li><img src="{{{ $movie->posters->original }}}" alt="{{{ $movie->title }}} ( {{{ $movie->year }}} )"></li>
					</ul>
				</td>
				<td width="350px">
					<ul>
						<li class="summary">{{{ $movie->synopsis }}}</li>
					</ul>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>

@stop