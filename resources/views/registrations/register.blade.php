@extends('page')

@section('page_title')
Inscription à "{{$expo->title}}"
@endsection
@section('page_content')

<script>
    $(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
			lastEntry = $(this).parents('.entry:last'),
            newEntry = $(currentEntry.clone());
		
		newEntry.appendTo(controlForm);
		$(':submit').remove();
		$('.controls form:first').append('<input type="submit" class="btn btn-primary" value="Envoi Inscription"></p>');

        //newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
		$('#main-form').validator('update');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();
		$(':submit').remove();
		$('.controls form:first').append('<input type="submit" class="btn btn-primary" value="Envoi Inscription"></p>');

		e.preventDefault();
		$('#main-form').validator('update');
		return false;
	});
});
</script>

<div class="control-group" id="fields">
    <label class="control-label" for="field1">
        <h1>Inscription pour Exposition de {{$expo->title}} ({{$expo->start}}-{{$expo->end}})</h1>
    </label>
    <div class="controls">
        {!! Form::model($expo, ['method' => 'POST', 'route' => ['registrations.store', $expo->id]]) !!}
        <!--form role="form" autocomplete="on" id="main-form" action="action.php" method="post" data-toggle="validator" -->
        <input type="hidden" name="expo_id" value="{{$expo->id}}" />
        <div class='col-sm-6'>
            <div class="form-group has-feedback">
                <label for="Nom">Nombre de cage / Number of cages:</label>
                <input type="text" class="form-control" name="nbcage" id="nbcage" placeholder='nombre de cage souhaité'
                    data-error="merci de remplir ce champ" required />
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>

        </div>
        <div class='col-sm-6'>
            <div class="form-group">
                <label for="Nom">J'aimerai être à côté de / I'd like to be placed by:</label>
                <input type="text" class="form-control" name="acotede" id="acotede" placeholder="A côté de qui ..." />
            </div>
        </div>


        <div class="col-sm-12">
            <input type="submit" class="btn btn-primary" value="Envoi Inscription / Send Registration"></p>

            <h2>Chat(s)</h2>
        </div>
        <div class="controls">
            <div class="entry input-group col-sm-12">
                <div class='col-sm-6'>
                    <label for="nom_chat">Chat:</label>
                    <select class="form-control" id="sel1" name="cats[]">
                        @foreach ($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}} {{$cat->race}} {{$cat->color}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class='col-sm-6'>
                    <div class="form-group">
                        <label for="nom_chat">Classe:</label>
                        <select class="form-control" id="sel1" name="classes[]">
                            @foreach ( $classes as $c )
                            <option value={{$c->class}}>{{$c->class_description}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nom_chat">Classe Dimanche</label>
                        <select class="form-control" id="sel1" name="classes_sunday[]">
                            @foreach ( $classes as $c )
                            <option value={{$c->class}}>{{$c->class_description}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class='col-sm-12'>
                    <span class="input-group-btn">
                        <button class="btn btn-success btn-add" type="button">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        <br>
        <small>Utilisez <span class="glyphicon glyphicon-plus gs"></span> pour ajouter un chat <br>
            Use <span class="glyphicon glyphicon-plus gs"></span> to add a cat</small>
    </div>
</div>

@endsection