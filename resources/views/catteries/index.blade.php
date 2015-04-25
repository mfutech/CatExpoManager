@extends('page')

@section('page_title')
Liste des Chatteries enregistrées
@endsection


@section('page_content')
<table class="table">
	<tr>
		<th>Chatterie</th>
		<th>Propriétaire</th>
		<th>WWW</th>
		<th></th>
	</tr>
	@foreach( $catteries as $cattery)
		<tr>
			<td>{{ $cattery->name }}</td>
			<td>
			@foreach ($cattery->users() as $user)
			{{ $user->name }} <br />
			@endforeach
			</td>
			<td>{{ $cattery->url }} </td>
			<td>
				<a class="btn btn-info" href="{{ route("catteries.show", $cattery->id) }}">Détails</a>
			</td>
		</tr>
	@endforeach
</table>
@endsection
