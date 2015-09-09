@extends('page')
 
@section('page_title')
	Edition de l'expo "{{$expo->title}}"
@endsection
@section('page_content')
	{!! Form::model($expo, ['method' => 'PATCH', 'route' => ['expositions.update', $expo->id]]) !!}
		@include('expositions/partials/_form', ['submit_text' => 'Valider'])
	{!! Form::close() !!}

@endsection
