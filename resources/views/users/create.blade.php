@extends('page')

@section('page_title')
Ajout d'un chat
@endsection
@section('page_content')
	@include('cats/partials/_form', ['submit_text' => "Confirmer", "options" => [ ] ])
@endsection
 
