@extends('page')

@section('page_title') 
	{{ $expo->title }} 
@endsection

@section('page_content')
	<form class="form-horizontal" role="form">
		<div class="form-group">
    		<label for="inputPassword" class="col-sm-2 control-label">Date:</label>
    		<div class="col-sm-10">
    			<div class="controls">
    				<p class="form-control-static">du {{ $expo->start }} au {{ $expo->end }}</p>
    			</div>
    		</div>
    	</div>
		<div class="form-group">
    		<label for="inputPassword" class="col-sm-2 control-label">Lieu:</label>
    		<div class="col-sm-10">
    			<div class="controls">
    				<p class="form-control-static">{{ $expo->address }}, {{ $expo->city }}</p>
    			</div>
    		</div>
    	</div>
		<div class="form-group">
    		<label for="inputPassword" class="col-sm-2 control-label">Inscription : </label>
    		<div class="col-sm-10">
    			@if ($expo->subscription_open)
	    			<div class="controls">
	    				<p class="form-control-static">ouverte jusqu'au {{ $expo->open_till }}</p>
	    			</div>
    			@else
	    			<div class="controls">
	    				<p class="form-control-static">fermée</p>
	    			</div>
	    		@endif
    		</div>
    	</div>
	</form>
@endsection
