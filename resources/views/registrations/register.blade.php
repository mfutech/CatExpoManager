@extends('page')

@section('page_title')
Inscription à "{{$expo->title}}"
@endsection
@section('page_content')

<script>
    $(function() {
        $(document).on('click', '.btn-add', function(e) {
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
        }).on('click', '.btn-remove', function(e) {
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
        <h1>Inscription pour Exposition de {{$expo->title}}</h1>
        <h2>du ({{$expo->start}} au {{$expo->end}})</h2>
    </label>
    <div class="controls">
        {!! Form::model($expo, ['method' => 'POST', 'route' => ['registrations.store', $expo->id]]) !!}
        <!--form role="form" autocomplete="on" id="main-form" action="action.php" method="post" data-toggle="validator" -->
        <input type="hidden" name="expo_id" value="{{$expo->id}}" />
        <row>
            <div class='col-md-6'>
                <div class="form-group has-feedback">
                    <label for="Nom">Nombre de cage / Number of cages:</label>
                    <input type="text" class="form-control" name="nbcage" id="nbcage" placeholder='nombre de cage souhaité' data-error="merci de remplir ce champ" required />
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>

            </div>
            <div class='col-md-6'>
                <div class="form-group">
                    <label for="Nom">J'aimerai être à côté de / I'd like to be placed by:</label>
                    <input type="text" class="form-control" name="acotede" id="acotede" placeholder="A côté de qui ..." />
                </div>
            </div>
        </row>
        <row>
            <div class="col-md-6 {{ $expo->is_tica ? 'visible' : 'invisible'}}">
                <label for="cage_type">Type de Cage:</label>
                <select class="form-control" id="cage_type" name="cage_type">
                    <option value="club">Cage Club</option>
                    <option value="perso">Cage Perso (uniquement TICA/TICA only</option>
                </select>
            </div>
        </row>
        <row>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Envoi Inscription / Send Registration"></p>
            </div>
        </row>
        <row>
            <div class="col-md-12">
                <h2>Chat(s)</h2>
            </div>
        </row>
        <div class="controls">
            <div class="entry">
                <row>
                    <div class="col-md-6">
                        <div class='input-group'>
                            <span class='input-group-addon'>Chat:</span>
                            <select class="form-control" id="sel1" name="cats[]">
                                @foreach ($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}} {{$cat->race}} {{$cat->color}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class='input-group-addon'>Classe:</span>
                            <select class="form-control" id="sel1" name="classes[]">
                                @foreach ( $classes as $c )
                                <option value={{$c->class}}>{{$c->class_description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </row>
                <row>
                    <div class="col-md-6">
                        @if ($expo->is_tica)
                        <div class='input-group'>
                            <span class='input-group-addon' for="judgment_type">Jugement:</span>
                            <select class="form-control" id="judgement_type" name="judgement_type[]">
                                <option value="classic" selected>Classique</option>
                                <option value="tica">TICA</option>
                                <option value="both">Classique & TICA</option>
                            </select>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if ($expo->is_worldcup)
                        <div class="input-group">
                            <span class="input-group-addon">Worldcup:
                            </span>
                            <select class="form-control" id="judgement_type" name="worldcup[]">
                                <option value="1" selected>Participe</option>
                                <option value="0">Ne Participe pas</option>
                            </select>
                        </div><!-- /input-group -->
                        @endif
                    </div><!-- /.col-lg-6 -->
                </row>
                <row>
                    <div class='col-sm-12'>
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                <row>
            </div>
        </div>
        {!! Form::close() !!}
        <row>
            <br>
            <div class="col-md-12">
                <small>Utilisez <span class="glyphicon glyphicon-plus gs"></span> pour ajouter un chat <br>
                    Use <span class="glyphicon glyphicon-plus gs"></span> to add a cat</small>
            </div>
        </row>
    </div>
</div>

@endsection