@extends('page')

@section('page_title')
Ajout d'un chat
@endsection
@section('page_content')
	{!! Form::model(new App\Cat, ['route' => ['cats.store'], 'class'=>"form-horizontal", 'role' => 'form']) !!}
		@include('cats/partials/_form', ['submit_text' => "Confirmer"])
	{!! Form::close() !!}
@endsection
 
