@extends('page')

@section('page_title') 
	{{ $expo->title }} 
@endsection

@section('page_content')
	<ul class="list-group">
		<li class="list-group-item">L'exposition aura lieu du {{ $expo->start }} and {{ $expo->end }}</li> 
		<li class="list-group-item">A {{ $expo->address }}, {{ $expo->city }}</li>
		<li class="list-group-item">Inscription possible jusqu'au {{ $expo->open_till }}</li>
		<li class="list-group-item">Incription possible: {{ $expo->subscription_open }} </li>
	</ul>
@endsection
