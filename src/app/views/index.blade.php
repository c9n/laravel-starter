@extends('layouts.default')

@section('title', 'Hello, world!')

@section('body')

	@include('partials.nav')

	<div>main content</div>

	@include('partials.footer')

@endsection
