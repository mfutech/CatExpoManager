@extends('page')
@section('page_title')
	{{ $user->firstname }} {{$user->lastname }}
@endsection
@section('page_content')
<ul class="list-group">
	<li class="list-group-item">{{ $user->firstname }} {{ $user->lastname }} {{ $user->name }}</li>
	<li class="list-group-item">{{ $user->address }}</li>
	<li class="list-group-item">{{ $user->phone }}</li>
	<li class="list-group-item">{{ $user->email }}</li>
	<li class="list-group-item">{{ $user->affiliation }}</li>
	<li class="list-group-item">{{ $user->address }}</li>
	<li class="list-group-item">{{ $user->address }}</li>
</ul>
@endsection
