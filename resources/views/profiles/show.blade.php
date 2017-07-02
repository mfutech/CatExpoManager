@extends('page')
@section('page_title')
	{{ $user->firstname }} {{$user->lastname }}
@endsection
@section('page_content')

	@include('profiles/_form', 
				['submit_text' => null, 
				 'options' => [ 'disabled' => true] ])
	
	<a class="btn btn-primary" href="{{ route("profile.edit", $user) }}">{{trans('forms.modify')}}</a>

@endsection
