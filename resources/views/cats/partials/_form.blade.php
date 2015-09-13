
<div class="form-group">
    {!! Form::label('name', 'Nom:', [ 'class' => 'col-md-10']) !!}
    {!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('race', 'Race:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('race') !!}
</div>
<div class="form-group">
    {!! Form::label('color', 'Couleur:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('color') !!}
</div>

<div class="form-group">
    {!! Form::label('birthdate', 'N&eacute;(e) le:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::input('birthdate', 'birthdate', null, array('type' => 'Date', 'placeholder' => 'Né(e) Le' )) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn btn-primary col-sm-10']) !!}
</div>
