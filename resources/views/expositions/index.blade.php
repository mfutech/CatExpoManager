@extends('page')

@section('page_title')
Liste des Exposition du Cat Club
@endsection


@section('page_content')
<table class="table">
	<tr>
		<th>Exposition</th>
		<th>Dates</th>
		<th>Ville</th>
		<th></th>
	</tr>
	@foreach( $expos as $expo)
		<tr>
			<td>{{ $expo->title }}</td>
			<td>{{ $expo->start_fmt() }} - {{ $expo->end_fmt() }} </td>
			<td>{{ $expo->city }} </td>
			<td>
				<a class="btn btn-info" href="{{ route("expositions.show", $expo->id) }}">Détails</a>
				@if($expo->subscription_open)
					<a class="btn btn-primary " href="{{ route('expositions.show', $expo) }}">S'Inscrire</a>
				@else
					<button class="btn btn-primary disabled">Inscription Terminée</button>
				@endif
			</td>
		</tr>
	@endforeach
</table>
@endsection

<!--
@ section('page_content')
	<div class="list-group">
	@ foreach( $expos as $expo)
		<div class="list-group-item">
			<div class="col-sm-8">{{ $expo->title }}</div>
			<div class="col-sm-4">
				<a class="btn btn-primary" href="{{ route('expositions.show', $expo) }}"> Inscription</a>
				<a class="btn btn-info" href="{{ route("expositions.show", $expo->id) }}">Détails</a>
			</div>
		</div>
	@ endforeach
	</div>
@ endsection
-->
