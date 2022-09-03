@extends('layouts.base')

@section('base.contant')
@section('registation.contant')


<div class="main-wrapper main-wrapper-1">
	@include('layouts.partial.topbar')
	@include('layouts.partial.sidebar')
	

	@yield('stisla.contant')
	
	@section('profile.contant')
	@section('view.contant')



	@include('layouts.partial.footer')
</div>

@stop 
