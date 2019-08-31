@extends('page')
 
@section('page_title')
{{$cat->name}}
@endsection
@section('page_content')
	@include('cats/partials/_form', ['submit_text' => null   , 
	                                 'options' => [ 'disabled' => true] ])
	<a class="btn btn-info" href="{{ route("cats.index") }}">{{__("Retour")}}</a>
	<a class="btn btn-primary" href="{{ route("cats.edit", $cat) }}">{{__("Modifier")}}</a>
	
@endsection
