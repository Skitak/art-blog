@if ($errors->any())
    @include ('back.utils.errors')
@endif
    
    {!! Form::model($article, $formOptions) !!}
    <div class="form-group">
        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title') !!}
    </div>
    <div class="form-group">
        {!! Form::label('subtitle', 'Sous titre') !!}
        {!! Form::text('subtitle') !!}
    </div>
    <div class="form-group">
        {!! Form::label('slug', 'URL') !!}
        {!! Form::text('slug') !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'titre') !!}
        {!! Form::textarea('content') !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id', 'Categorie') !!}
        {!! Form::select('category_id', $categories) !!}
    </div>
    <div class="form-group">
        {!! Form::label('article_image', 'Image') !!}
        {!! Form::file('article_image') !!}
    </div>
    <div class="form-group form-check">
        {!! Form::label('online', 'Put online') !!}
        {!! Form::checkbox('online', 1 , $article->online, ['class' => 'form-control']) !!}
    </div>       


        <button type="submit" class="btn btn-primary">Send</button>

        

    {!! Form::close() !!}