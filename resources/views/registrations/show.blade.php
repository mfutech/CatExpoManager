@extends('page')

@section('page_title') 
@endsection

@section('page_content')
<pre>
    {{ $beside }}
    {{ $nbcage }}
    {{ var_dump($cats)}}
    @foreach ($cats as $cat)
    {{$cat}}
    @endforeach

{{ $req }}

</pre>
@endsection
