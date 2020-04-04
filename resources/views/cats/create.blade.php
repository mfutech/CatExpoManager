@extends('page')

@section('page_title')
{{__("Ajout d'un chat")}}
@endsection
@section('page_content')
	@include('cats/partials/_form', ['submit_text' => trans('forms.create'), "options" => [ ] ])
@endsection
 
