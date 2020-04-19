@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12" xxx="col-md-offset-1">
			<row>
				@if (Session::has('message'))
					<div class="flash alert-info">
						<p>{{ Session::get('message') }}</p>
					</div>
				@endif
			</row>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" xxx="col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">@yield('page_title')</div>
				<div class="panel-body">
					@yield('page_content')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
