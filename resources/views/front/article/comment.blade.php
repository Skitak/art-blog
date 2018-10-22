@if ($errors->any())
    @include ('back.utils.errors')
@endif
    
{!! Form::open(['url' => route('comments.store'), 'class' => 'l-form-comment']) !!}
    <legend>Ecrire un commentaire</legend>
    {!! Form::token() !!}
    {!! Form::hidden('article_id', $article->id) !!}
    
    <div class="form-group">
        {!! Form::label('content', 'Message') !!}
        {!! Form::textarea('content',"", ['placeholder' => 'Lorem ipsum dolor sit amet', 'class' => 'form-textarea' ]) !!}
    </div>

    <div class="form-inline">
        <div class="form-group form-group-small">
            {!! Form::label('username', 'Votre pseudo') !!}
            {!! Form::text('username', "", ['placeholder' => 'Votre pseudo', 'class' => 'form-input' ]) !!}
        </div>
        
        <button class="btn-form">Envoyer</button>    
    </div>

{!! Form::close() !!}