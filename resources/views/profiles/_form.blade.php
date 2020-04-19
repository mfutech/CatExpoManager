
{!!	BootForm::open(['model'=>$user, 'update' => 'profile.update', 'store'=> 'profile.store']) !!}

{!!	BootForm::text('lastname', TT::trans_label('forms.lastname'), null, $options ) !!}
{!! BootForm::text('firstname', TT::trans_label('forms.firstname'), null, $options ) !!}
{!! BootForm::text('address', TT::trans_label('forms.address'), null, $options ) !!}
{!! BootForm::text('CP_city', TT::trans_label('forms.CP_city'), null, $options ) !!}
{!! BootForm::text('country', TT::trans_label('forms.country'), null, $options ) !!}
{!! BootForm::text('phone', TT::trans_label('forms.phone'), null, $options ) !!}
{!! BootForm::text('email', TT::trans_label('forms.email'), null, $options ) !!}
{!! BootForm::text('affiliation', TT::trans_label('forms.affiliation'), null, $options ) !!}
{!! BootForm::text('url', TT::trans_label('forms.url'), null, $options ) !!}

@if($submit_text)
{!! BootForm::submit($submit_text) !!}
@endif
{!!	BootForm::close() !!}