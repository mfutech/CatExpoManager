@extends('page')

@section('page_title') 
	{{ $cat->name }} 
@endsection

@section('page_content')

	<form class="form-horizontal" role="form" >

		<div class="form-group">
			<label class="col-md-4 control-label">Nom</label>
			<div class="col-md-6">
				<p class="form-control-static">{{$cat->name}}</p>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Race</label>
			<div class="col-md-6">
				<p class="form-control-static">{{$cat->race}}</p>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Couleur</label>
			<div class="col-md-6">
				<p class="form-control-static">{{$cat->color}}</p>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">N&eacute;(e) le</label>
			<div class="col-md-6">
				<p class="form-control-static">{{$cat->birthdate}}</p>
			</div>
		</div>
	</form>
	<a class="btn btn-info " href="{{ route("cats.index") }}">Retour</a>
	<a class="btn btn-danger " href="{{ route("cats.edit", $cat) }}">Editer</a>

@endsection
