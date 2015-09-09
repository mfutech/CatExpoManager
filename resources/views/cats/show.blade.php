@extends('page')

@section('page_title') 
	{{ $cat->name }} 
@endsection

@section('page_content')
	<form class="form-horizontal" role="form">
		<div class="form-group">
    		<label class="col-sm-2 control-label">Nom:</label>
    		<div class="col-sm-10">
    			<div class="controls">
    				<p class="form-control-static"> {{ $cat->name }}</p>
    			</div>
    		</div>
    	</div>
		<div class="form-group">
    		<label class="col-sm-2 control-label">Date naissance:</label>
    		<div class="col-sm-10">
    			<div class="controls">
    				<p class="form-control-static">{{ $cat->birthdate }}</p>
    			</div>
    		</div>
    	</div>
		<div class="form-group">
    		<label class="col-sm-2 control-label">Race : </label>
    		<div class="col-sm-10">
    			<div class="controls">
    				<p class="form-control-static"> {{ $cat->race }}</p>
    			</div>
    		</div>
    	</div>
	</form>
@endsection
