
{!!	BootForm::open(['model'=>$cat, 'update' => 'cats.update', 'store'=> 'cats.store']) !!}

{!!	BootForm::text('name', trans('forms.name') . ':', null, $options ) !!}
{!! BootForm::text('race', trans('forms.breed') . ':', null, $options ) !!}
{!! BootForm::text('color', trans('forms.color') . ':', null, $options ) !!}
{!! BootForm::text('birthdate', trans('forms.birthdate') . ':', null, $options ) !!}
{!! BootForm::text('eyes_color', trans('forms.eyecolor') . ':', null, $options ) !!}
{!! BootForm::text('origin_book', trans('forms.catregister') . ':', null, $options ) !!}
{!! BootForm::text('breeder', trans('forms.breeder') . ':', null, $options ) !!}
{!! BootForm::text('father', trans('forms.father') . ':', null, $options ) !!}
{!! BootForm::text('mother', trans('forms.mother') . ':', null, $options ) !!}

@if($submit_text)
{!! BootForm::submit($submit_text) !!}
@endif
{!!	BootForm::close() !!}
