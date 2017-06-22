
<div class="form-group">
    {!! Form::label('firstname', trans('forms.firstname').":", [ 'class' => 'col-md-10']) !!}
    {!! Form::text('firstname') !!}
</div>
<div class="form-group">
    {!! Form::label('lastname', 'Nom de Famille:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('lastname') !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Adresse:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('address ') !!}
</div>

<div class="form-group">
    {!! Form::label('CP_city', 'CP Ville:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('CP_city')) !!}
</div>

<div class="form-group">
    {!! Form::label('country', 'Pays:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('country')) !!}
</div>

<div class="form-group">
    {!! Form::label('phone', 'Téléphone:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('phone')) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Adresse Email:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('email')) !!}
</div>
<div class="form-group">
    {!! Form::label('affiliation', 'Club:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('affiliation')) !!}
</div>
<div class="form-group">
    {!! Form::label('url', 'Site Web:', [ 'class' => 'col-sm-10']) !!}
    {!! Form::text('url')) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn btn-primary col-sm-10']) !!}
</div>
