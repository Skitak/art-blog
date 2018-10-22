@if ($errors->any())
    @include ('back.utils.errors')
@endif
    
    {!! Form::model($galery, $formOptions) !!}

        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title') !!}

        {!! Form::label('slug', 'URL') !!}
        {!! Form::text('slug') !!}

        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description') !!}

        {!! Form::label('subcategory_id', 'Sub-categorie') !!}
        {!! Form::select('subcategory_id', $subcategories) !!}

        {!! Form::label('online', 'Put online') !!}
        {!! Form::checkbox('online', 1 , $galery->online) !!}

        <div class="form-group">
            {!! Form::label('galery_images[]', 'Image') !!}
            {!! Form::file('galery_images[]', ["multiple" => true]) !!}
        </div>

        <button>Send</button>

        

    {!! Form::close() !!}