@extends('page')
 
@section('page_title')
	Edition de "{{$cat->name}}"
@endsection
@section('page_content')
	@include('cats/partials/_form', ['submit_text' => trans('forms.validate'), 'options' => [] ])
@endsection
