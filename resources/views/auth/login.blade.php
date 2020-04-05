@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Aïe Aïe Aïe!</strong> Il y a un problème avec vos informations.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ trans($error) }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Adresse E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Mot de passe</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Se souvenir de moi
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Accès</button>
                                <br>
                                <a href="{{ route('password.email') }}" onclick="event.preventDefault(); document.getElementById('forgetemail-form').submit();">
                                        Vous avez oublié votre mot de passe?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<form id="forgetemail-form" action="{{ route('password.email') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
</form>
@endsection
