@extends('page')

@section('page_title')
Liste des vos Chats
@endsection


@section('page_content')
<table class="table">
	<tr>
		<th>Nom</th>
		<th>Date de N.</th>
		<th>Race</th>
		<th>Couleur</th>
		<th></th>
	</tr>
	@foreach( $cats as $cat)
		<tr>
			<td>{{ $cat->name }}</td>
			<td>{{ $cat->birthdate }} </td>
			<td>{{ $cat->race }} </td>
			<td>{{ $cat->color }} </td>
			<td>
				<a class="btn btn-info" href="{{ route("cats.show", $cat->id) }}">Détails</a>
			</td>
		</tr>
	@endforeach
</table>
	<a class="btn btn-danger " href="{{ route("cats.create") }}">Ajout</a>
@endsection
