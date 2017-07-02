@extends('page')
@section('page_title')
	{{ $user->firstname }} {{$user->lastname }}
@endsection
@section('page_content')

	@include('profiles/_form', 
				['submit_text' => trans('forms.validate'), 
				 'options' => [ ] ])
	
@endsection
