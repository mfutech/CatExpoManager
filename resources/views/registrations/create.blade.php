@extends('page')

@section('page_title')
Création d'une nouvelle exposition
@endsection
@section('page_content')
	{!! Form::model(new App\Exposition, ['route' => ['expositions.store']]) !!}
		@include('expositions/partials/_form', ['submit_text' => "Créer l'exposition"])
	{!! Form::close() !!}
@endsection
 
