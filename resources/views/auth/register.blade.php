@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>{{trans('register.ouch')}}</strong>{{trans('register.problem')}}<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.name')}}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.firstname')}}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.email')}} </label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.password')}}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.confirm_password')}}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.phone')}}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.affiliation')}}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="affiliation" value="{{ old('affiliation') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.address')}}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="address" value="{{ old('address') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.CP_city')}}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="CP_city" value="{{ old('CP_city') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">{{trans('forms.country')}}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="country" value="{{ old('country') }}">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									{{trans('forms.register')}}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
