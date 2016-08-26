
{!!	BootForm::open(['model'=>$cat, 'update' => 'cats.update', 'store'=> 'cats.store']) !!}

{!!	BootForm::text('name', 'Nom:', null, $options ) !!}
{!! BootForm::text('race', 'Race:', null, $options ) !!}
{!! BootForm::text('color', 'Couleur:', null, $options ) !!}
{!! BootForm::text('birthdate', 'N&eacute;(e) le:', null, $options ) !!}
{!! BootForm::text('eyes_color', 'Couleur des yeux:', null, $options ) !!}
{!! BootForm::text('origin_book', 'Livre des origines:', null, $options ) !!}
{!! BootForm::text('breeder', 'Eleveur:', null, $options ) !!}
{!! BootForm::text('father', 'Père:', null, $options ) !!}
{!! BootForm::text('mother', 'Mère:', null, $options ) !!}

@if($submit_text)
{!! BootForm::submit($submit_text) !!}
@endif
{!!	BootForm::close() !!}
