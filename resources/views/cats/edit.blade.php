@extends('page')
 
@section('page_title')
	Edition de "{{$cat->name}}"
@endsection
@section('page_content')
	{!! Form::model($cat, ['method' => 'PATCH', 'route' => ['cats.update', $cat->id]]) !!}
		@include('cats/partials/_form', ['submit_text' => 'Valider'])
	{!! Form::close() !!}

@endsection
