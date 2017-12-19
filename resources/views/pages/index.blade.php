@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
	<h1>{{ $title }}</h1>
	<p>This is the Laravel blog</p>
	<p><a class="btn btn-default btn-lg" href="/login" role="button">Login</a> <a class="btn btn-danger btn-lg" href="/register" role="button">Register</a></p>
</div>

@endsection
