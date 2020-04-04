@extends('page')

@section('page_title')
{{__("Liste des Chatteries enregistrées")}}
@endsection


@section('page_content')
<table class="table">
	<tr>
		<th>{{__("Chatterie")}}</th>
		<th>{{__("Propriétaire")}}</th>
		<th>{{__("WWW")}}</th>
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
				<a class="btn btn-info" href="{{ route("catteries.show", $cattery->id) }}">{{__("Détails")}}</a>
			</td>
		</tr>
	@endforeach
</table>
@endsection
