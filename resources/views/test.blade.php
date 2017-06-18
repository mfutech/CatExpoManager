@extends('page')

@section('page_title') 
	Page de test 
@endsection

@section('page_content')

<h1>test réussi</h1>

ici on parle: {{ $loc }}

<ul>
@foreach ( $locales->all() as $l )
	<li>{{ $l->key() }} : {{ $l->name()}}
@endforeach
</ul>

<p>
{{ trans('test.welcome')}}
<p>
{{ trans('test.welcome2')}}
<p>
Current local: {{Lang::locale()}}
<hr>
{!! $nb !!}
@endsection
