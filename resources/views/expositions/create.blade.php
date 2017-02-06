@extends('page')

@section('page_title')
Création d'une nouvelle exposition
@endsection
@section('page_content')
	{!! Form::model(new App\Exposition, ['route' => ['expositions.store']]) !!}
		@include('expositions/partials/_form', ['submit_text' => "Créer l'exposition"])
	{!! Form::close() !!}
<script>
$(function() {
	$.datepicker.setDefaults({
	  buttonImageOnly: true,
	  buttonImage: "calendar.gif",
	  buttonText: "Calendar",
		regional: "fr",
		format: "dd mm yy"
	});
	$( "#start" ).datepicker();
	$( "#end" ).datepicker();
	$( "#open_till" ).datepicker();
});
</script>
@endsection
