
<div class="form-group">
    {!! Form::label('firstname', TT::trans_label('forms.firstname'), [ 'class' => 'col-md-10']) !!}
    {!! Form::text('firstname') !!}
</div>
<div class="form-group">
    {!! Form::label('lastname', TT::trans_label('forms.name'), [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('lastname') !!}
</div>
<div class="form-group">
    {!! Form::label('address', TT::trans_label('forms.address'), [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('address ') !!}
</div>

<div class="form-group">
    {!! Form::label('CP_city', TT::trans_label('forms.CP_city'), [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('CP_city') !!}
</div>

<div class="form-group">
    {!! Form::label('country', TT::trans_label('forms.country'), [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('country') !!}
</div>

<div class="form-group">
    {!! Form::label('phone', TT::trans_label('forms.phone'), [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('phone') !!}
</div>

<div class="form-group">
    {!! Form::label('email', TT::trans_label('forms.email'), [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('email') !!}
</div>
<div class="form-group">
    {!! Form::label('affiliation', TT::trans_label('forms.affiliation'), [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('affiliation') !!}
</div>
<div class="form-group">
    {!! Form::label('url', TT::trans_label('forms.url'), [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('url') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn btn-primary col-sm-10']) !!}
</div>
