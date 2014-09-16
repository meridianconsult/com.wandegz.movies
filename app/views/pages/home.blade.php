@extends('layouts.frontpage')
@section('content')

	<form id="searchbar" action="{{ URL::route('search') }}" method="GET" accept-charset="utf-8">
		<label>Find a movie</label> &nbsp;
		<input type="text" name="q" value="" placeholder="keywords" required>
		<button type="submit">Search</button>
	</form>
	<br>

@stop