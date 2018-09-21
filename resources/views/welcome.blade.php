@extends('page')

@section('page_title')
{{__("Bienvenue")}}
@endsection
@section('page_content')
	<p>
		{{__("Bonjour")}},
	</p>
	<p>
		{{ __("Bienvenue sur le système de gestion des inscriptions aux expositions du Cat Club de Genève")}}
	</p>
	<p>
		{{__("Vous devez vous enregistrer et vous connecter avant de pouvoir utiliser ce système.")}}
	</p>
@endsection
