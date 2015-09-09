<div class="form-group">
    {!! Form::label('title', 'Titre:') !!}
    {!! Form::text('title') !!}
</div>
<div class="form-group">
    {!! Form::label('start', 'D&eacute;bute le:') !!}
    {!! Form::input('date', 'start', null, array('type' => 'Date', 'placeholder' => 'Date' )) !!}
    {!! Form::label('end', 'Fin le:') !!}
    {!! Form::input('date', 'end', null, array('type' => 'Date', 'placeholder' => 'Date' )) !!}
    {!! Form::label('open_till', 'Inscription jusqu\'au:') !!}
    {!! Form::input('date', 'open_till', null, array('type' => 'Date', 'placeholder' => 'Date' )) !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Adresse:') !!}
    {!! Form::text('address') !!}
    {!! Form::label('city', 'Ville:') !!}
    {!! Form::text('city') !!}
</div>
<div class="form-group">
    {!! Form::label('url', 'Lien (URL):') !!}
    {!! Form::text('url') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
