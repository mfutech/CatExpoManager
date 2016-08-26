@extends('page')

@section('page_title')
Liste de mes Chats
@endsection


@section('page_content')

	<script>
		$(document).ready(function(){
			$('#cat-table').DataTable({
				"paging":   true,
				"ordering": true,
				"order": [[1, "desc"]],
				"info":     true
			});}
		);
	</script>
<table class="table" id="cat-table">
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
				<a class="btn btn-info" href="{{ route("cats.show", $cat) }}">Détails</a>
				<a class="btn btn-primary" href="{{ route("cats.edit", $cat) }}">Modifer</a>
			</td>
		</tr>
	@endforeach
</table>
	<a class="btn btn-danger " href="{{ route("cats.create") }}">Ajout</a>
@endsection
